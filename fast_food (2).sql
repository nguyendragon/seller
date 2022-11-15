-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2022 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fast_food`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_cate` int(11) NOT NULL,
  `name_category` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `create_at` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_cate`, `name_category`, `images`, `create_at`, `time`) VALUES
(1, 'Cafe', '1.jfif', '', ''),
(2, 'Trà sữa', 'trasua.jfif', '', ''),
(3, 'Ăn Trưa', 'antrua.jfif', '', ''),
(4, 'Ăn tối', 'antoi.jfif', '', ''),
(5, 'Ăn vặt', 'an vat.jfif', '', ''),
(6, 'Bún bò', 'bunbo.jfif', '', ''),
(7, 'Trà trái cây', 'tratraicay.jfif', '', ''),
(8, 'Bánh mỳ việt', 'banhmyviet.jfif', '', ''),
(9, 'Bánh tráng', 'banhtrang.jfif', '', ''),
(10, 'Bánh bao', 'banhbao.jfif', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `status_order` int(11) NOT NULL DEFAULT 0,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `voucher` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `vote` int(11) NOT NULL,
  `id_restaurant` int(11) NOT NULL,
  `id_cate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `image`, `price`, `sale`, `voucher`, `detail`, `vote`, `id_restaurant`, `id_cate`) VALUES
(3, 'Trà sữa Tùng Tea', 'https://tea-3.lozi.vn/v1/images/resized/tra-sua-tung-tea-quan-hai-chau-da-nang-1603096072744940286-eatery-avatar-1667292634', 69000, 10000, 'EGFEGEGEGW', 'đậu,nem,chả cốm,rồi sụn,thịt nướng,thịt luộc ,chả dán.', 1, 1, 1),
(4, 'Smoothies & Juices', 'https://tea-3.lozi.vn/v1/images/resized/kem-ngu-coc-hoa-qua-32734-1426152165?w=200&type=f', 100000, 10000, 'EGFEGEGEGW', 'đậu,nem,chả cốm,rồi sụn,thịt nướng,thịt luộc ,chả dán.', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurants`
--

CREATE TABLE `restaurants` (
  `id_restaurant` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `images` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `vote` double NOT NULL,
  `open` int(11) NOT NULL DEFAULT 1,
  `time_open` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL,
  `id_cate` varchar(255) DEFAULT NULL,
  `time_at` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `restaurants`
--

INSERT INTO `restaurants` (`id_restaurant`, `name`, `address`, `images`, `link`, `vote`, `open`, `time_open`, `status`, `id_user`, `id_cate`, `time_at`, `time`) VALUES
(1, 'Trà sữa Tùng Tea', '32a Ngách 1002/5 Đường Láng Quận Đống Đa Hà Nội', '', '/trasuatencent', 98.6, 1, '8:00 - 21:30', 1, 1, '4', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `create_at` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `money`, `role`, `create_at`, `time`) VALUES
(1, 'longmobietv@gmail.com', '123456', 0, 2, '12345678', '1234567');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cate`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_user` (`id_restaurant`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Chỉ mục cho bảng `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id_restaurant`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id_restaurant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_restaurant`) REFERENCES `restaurants` (`id_restaurant`);

--
-- Các ràng buộc cho bảng `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
