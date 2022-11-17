<?php
// error_reporting(1);
session_start();
date_default_timezone_set("Asia/Ho_Chi_Minh");
require_once 'config.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$config = array(
    'LOCALHOST' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'fast_food', 
);

class System {
    public function __construct() {
        $this->connect();
    }

    // Kết Nối Database
    public function connect() {
        global $config;
        $conn = mysqli_connect($config['LOCALHOST'], $config['USERNAME'], $config['PASSWORD'], $config['DATABASE']) or die("Can't Connect To Database!");
        $conn->set_charset("utf8");
        return $conn;
    }

    /***   đếm tất cả người dùng hệ thống   ***/
    public function count_user() {
        $result = mysqli_query($this->connect(), "SELECT `id` FROM `users` WHERE `status` = 1");
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

    /***   Đăng nhập   ***/
    public function login($email, $pass) {
        $email = addslashes($email);
        $pass = addslashes($pass);

        $result = mysqli_query($this->connect(), "SELECT * FROM `users` WHERE `email`='".$email."' AND `password`='".$pass."' AND `role` = 2 ");
        $rowcount = mysqli_num_rows($result);
        if($rowcount > 0) {
            $_SESSION['token_seller'] = $email;
            return true;
        }else {
            return false;
        }
        
    }
    /***   Kiểm tra đăng nhập   ***/
    public function check_login() {
        if(!isset($_SESSION['token_seller'])) {
            return header("Location: ".BASE_URL."/login.php");
        }
    }
    
    public function userInfo() {
        if (isset($_SESSION['token_seller'])) {
            $email = $_SESSION['token_seller'];
            $result = mysqli_query($this->connect(), "SELECT * FROM `users` WHERE `email`='".$email."'")->fetch_array();
            return $result;
        }
    }

    public function listProduct() {
        $user = $this->userInfo();
        $id_u = $user['id_user'];
        $result = mysqli_query($this->connect(), "SELECT * FROM `product` WHERE `id_restaurant`='".$id_u."' ORDER BY id_product  DESC");
        return $result;
    }

    public function productById($id) {
        $id_res = $this->restaurant()['id_restaurant'];
        $result = mysqli_query($this->connect(), "SELECT * FROM `product` WHERE `id_product`='".$id."' AND `id_restaurant`='".$id_res."'")->fetch_array();
        return $result;
    }

    public function restaurant() {
        $user = $this->userInfo();
        $id_u = $user['id_user'];
        $result = mysqli_query($this->connect(), "SELECT * FROM `restaurants` WHERE `id_user`='".$id_u."'")->fetch_array();
        return $result;
    }

    public function listCategory() {
        $result = mysqli_query($this->connect(), "SELECT * FROM `category` ORDER BY id_cate  DESC");
        return $result;
    }

    public function checkUser($username) {
        $result = mysqli_num_rows(mysqli_query($this->connect(), "SELECT * FROM `users` WHERE `username`='".$username."'"));
        return $result;
    }

    /***   tạo ra chuỗi ngẫu nhiên gồm cả số và chữ (tạo token)    ***/
    public function Creat_Token($length){
        $token = openssl_random_pseudo_bytes($length);
        $token = bin2hex($token);
        return $token;
    }
    
    /***  Format Money  ***/
    public function money($data, $type) {
        return str_replace(",",  $type, number_format($data));
    }

    public function time()
    {
        $time = date("d M Y, H:i a");
        return $time;
    }

    public function res_json($status, $message){
        $data = array(
            'status' => "$status",
            'message' => "$message",
        );
        return $data;
    }

    public function status_user($username, $password)
    {
        $result = mysqli_query($this->connect(), "SELECT `status` FROM `users` WHERE `username`='".$username."' AND `password`='".md5($password)."' ")->fetch_array();
        return $result['status'];
    }

    public function random_id($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function missionDone($quantity){
        $result = mysqli_query($this->connect(), "SELECT `username` , COUNT(username) AS 'quantity' FROM `mission_done` GROUP BY(username) HAVING COUNT(username)>=1 ORDER BY COUNT(username) DESC LIMIT $quantity");
        return $result;
    }

    public function missionDone2(){
        $result = mysqli_query($this->connect(), "SELECT `id` FROM `mission_done` WHERE `username` = '".$this->userInfo()['username']."' ");
        return mysqli_num_rows($result);
    }

    public function missionToday(){
        $user = $this->userInfo();
        $today = date('d/m/Y');
        $result = mysqli_query($this->connect(), "SELECT * FROM `mission_done` WHERE `username` = '".$user['username']."' AND `time` = '".$today."' ");
        return $result;
    }

    public function readUser($user){
        $result = mysqli_query($this->connect(), "SELECT * FROM users WHERE username='$user'");
        return $result;
    }
}
