<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once "layout/head.php" ?>
  <?php include_once "config.php" ?>
  <?php include_once "Core.php" ?>
  <?php
  $dragon = new System;
  $list_cate = $dragon->listCategory();

  if (isset($_POST['editor1'])) {
    $editor_data = $_POST['editor1'];
    echo $editor_data;
  }
  ?>
  <style>
    .preview-img {
      display: flex;
      font-size: 20px;
      font-weight: 700;
      justify-content: center;
      align-items: center;
      background-color: #ecf0f1;
      padding: 5px;
      min-height: 90px;
      border: 1px dashed #ccc
    }

    .ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred,
    .ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-focused {
      min-height: 200px;
    }
  </style>
</head>

<body>
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php include_once "layout/header-nav.php" ?>
    <div class="page-body-wrapper">
      <?php include_once "layout/slider-bar.php" ?>
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3>Thêm sản phẩm</h3>
              </div>
              <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">Thống kê</li>
                  <li class="breadcrumb-item active"> Thêm sản phẩm</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="" method="post" class="needs-validation" novalidate="">
                    <div class="row g-3 mb-4">
                      <div class="col-md-4">
                        <label class="form-label" for="value1">Tên sản phẩm</label>
                        <input class="form-control" id="value1" type="text" value="" placeholder="Nhập tên sản phẩm" required="">
                        <div class="invalid-feedback">Vui lòng nhập tên sản phẩm.</div>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label" for="value2">Giá sản phẩm</label>
                        <input class="form-control" id="value2" type="text" value="" placeholder="Nhập giá sản phẩm" required="">
                        <div class="invalid-feedback">Vui lòng nhập giá sản phẩm.</div>
                      </div>
                      <div class="col-md-4">
                        <label class="form-label" for="value2_1">Giảm giá</label>
                        <input class="form-control" id="value2_1" type="text" value="0" placeholder="Giảm giá" required="">
                        <div class="invalid-feedback">Vui lòng nhập giảm giá.</div>
                      </div>
                    </div>
                    <div class="row g-3 mb-4">
                      <div class="col-md-6">
                        <label class="form-label" for="value3">Hình ảnh sản phẩm (162px x 162px)</label>
                        <input class="form-control" type="file" aria-label="file example" required="">
                        <div class="invalid-feedback">Vui lòng tải hình ảnh lên</div>
                      </div>
                      <div class="col-md-3">
                        <label class="form-label" for="value4">Danh mục sản phẩm</label>
                        <select class="form-select" id="value4" required="">
                          <option value="">----- Chọn thể loại -----</option>
                          <?php foreach ($list_cate as $key => $value) : ?>
                            <option value="<?= $value['id_cate'] ?>"><?= $value['name_category'] ?></option>
                          <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">Vui lòng chọn một trạng thái hợp lệ.</div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label class="form-label" for="value5">Voucher</label>
                        <input class="form-control" id="value5" type="text" placeholder="Nhập mã voucher">
                        <div class="invalid-feedback"></div>
                      </div>
                    </div>
                    <div class="row g-3 mb-4">
                      <div class="col-md-12 preview-img">
                        <p>HÌNH ẢNH ĐƯỢC TẢI LÊN</p>
                      </div>
                    </div>
                    <div class="row g-3 mb-4">
                      <div class="col-md-12">
                        <div id="editor">
                          <p class="text-center">Nhập thông tin sản phẩm</p>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3">
                      <div class="form-check">
                        <div class="checkbox p-0">
                          <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                          <label class="form-check-label" for="invalidCheck">Đồng ý với các điều khoản và điều kiện</label>
                        </div>
                        <div class="invalid-feedback">Bạn phải đồng ý trước khi gửi.</div>
                      </div>
                    </div>
                    <button class="container btn btn-primary" type="submit">Xác nhận thêm</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 footer-copyright text-center">
              <p class="mb-0">Copyright 2022 © Zeta theme by pixelstrap </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather.min.js"></script>
  <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
  <script src="assets/js/scrollbar/simplebar.js"></script>
  <script src="assets/js/scrollbar/custom.js"></script>
  <script src="assets/js/config.js"></script>
  <script src="assets/js/sidebar-menu.js"></script>
  <script src="assets/js/form-validation-custom.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
  <script>
    ClassicEditor
      .create(document.querySelector('#editor'))
      .catch(error => {
        console.error(error);
      });
      // let data = CKEDITOR.instances.editor1.getData();
      // $('body').click(function (e) { 
      //   e.preventDefault();
      //   console.log(data);
      // });
  </script>
</body>

</html>