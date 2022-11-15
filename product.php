<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once "layout/head.php" ?>
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/select2.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/owlcarousel.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/range-slider.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <style>
    .product-details p {
      -webkit-box-orient: vertical;
      display: block;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      overflow: hidden;
      text-overflow: ellipsis;
      font-weight: 700;
      height: 42px;
      position: relative;
    }

    .product-details {
      padding: 10px!important;
    }
  </style>
</head>

<?php include_once "Core.php" ?>
<?php
    $dragon = new System;
    $restaurant = $dragon->restaurantInfo();
?>

<body>
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php include_once "layout/header-nav.php" ?>
    <div class="page-body-wrapper">
      <?php include_once "layout/slider-bar.php" ?>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3>Quản lý sản phẩm</h3>
              </div>
              <div class="col-12 col-sm-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">Thống kê</li>
                  <li class="breadcrumb-item active">Quản lý sản phẩm</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid product-wrapper">
          <div class="product-grid">
            <div class="feature-products">
              <div class="row m-b-10">
                <div class="col-md-3 col-sm-2 products-total">
                  <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                  <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a></div>
                  <div class="d-none-productlist filter-toggle">
                    <h6 class="mb-0">Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6>
                  </div>
                  <div class="grid-options d-inline-block">
                    <ul>
                      <li><a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a></li>
                      <li><a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span></a></li>
                      <li><a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span><span class="line-grid line-grid-9 bg-primary"></span></a></li>
                      <li><a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span><span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="pro-filter-sec">
                    <div class="product-search">
                      <form>
                        <div class="form-group m-0">
                          <input class="form-control" type="search" placeholder="Search.." data-original-title="" title=""><i class="fa fa-search"></i>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-wrapper-grid">
              <div class="bg-gray row">
              <?php foreach ($restaurant as $key => $value) : ?>
                <div class="col-xl-2 col-sm-6 xl-2">
                  <div class="card">
                    <div class="product-box">
                      <div class="product-img p-2 text-center">
                        <div class="ribbon ribbon-success ribbon-right">-<?=ceil((100/$value['price']) * $value['sale'])?>%</div>
                        <img class="img-fluid" src="<?=$value['image']?>" alt="">
                        <div class="product-hover">
                          <ul>
                            <li class="mb-4">
                              <a data-bs-toggle="modal" data-bs-target="#exampleModalCenter<?=$key?>">
                                <i class="fa fa-edit"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="modal fade" id="exampleModalCenter<?=$key?>">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <div class="product-box row">
                                <div class="product-img col-lg-6"><img class="img-fluid" src="<?=$value['image']?>" alt=""></div>
                                <div class="product-details col-lg-6 text-start">
                                  <div class="product-price"><?=$dragon->money($value['sale'], '.')?>đ
                                    <del><?=$dragon->money($value['price'], '.')?>đ</del>
                                  </div>
                                  <div class="product-view">
                                    <h6 class="f-w-600"><?=$value['name_product']?></h6>
                                    <p class="mb-0"><?=$value['detail']?></p>
                                  </div>
                                  <div class="product-size">
                                    <ul>
                                      <li>
                                        <button class="btn btn-outline-light" type="button">M</button>
                                      </li>
                                      <li>
                                        <button class="btn btn-outline-light" type="button">L</button>
                                      </li>
                                      <li>
                                        <button class="btn btn-outline-light" type="button">Xl</button>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="product-qnty">
                                    <div class="addcart-btn">
                                      <a class="btn btn-primary me-3" href="cart.html">Sửa đổi</a>
                                      <a class="btn btn-danger" href="product-page.html">Xóa sản phẩm</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"> </button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="product-details">
                        <p><?=$value['name_product']?></p>
                        <div class="product-price"><?=$dragon->money($value['sale'], '.')?>đ
                          <del><?=$dragon->money($value['price'], '.')?>đ</del>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
            <div class="card page-bottom b-r-0">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <div class="info-block">
                    <ul class="pagination pagination-primary">
                      <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" tabindex="-1">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0)">1</a></li>
                      <li class="page-item active"><a class="page-link" href="javascript:void(0)">2 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                      <li class="page-item"><a class="page-link" href="javascript:void(0)">Next</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-sm-6 text-end">
                  <div class="pagination-content"><span class="f-w-600">Showing Products 1 - 24 Of 200 Results</span></div>
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
  <script src="assets/js/range-slider/ion.rangeSlider.min.js"></script>
  <script src="assets/js/range-slider/rangeslider-script.js"></script>
  <script src="assets/js/touchspin/vendors.min.js"></script>
  <script src="assets/js/touchspin/touchspin.js"></script>
  <script src="assets/js/touchspin/input-groups.min.js"></script>
  <script src="assets/js/owlcarousel/owl.carousel.js"></script>
  <script src="assets/js/select2/select2.full.min.js"></script>
  <script src="assets/js/select2/select2-custom.js"></script>
  <script src="assets/js/product-tab.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/theme-customizer/customizer.js"></script>
</body>

</html>