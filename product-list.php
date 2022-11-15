<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once "layout/head.php" ?>
</head>
  <body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <?php include_once "layout/header-nav.php" ?>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include_once "layout/slider-bar.php" ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3>Danh sách sản phẩm</h3>
                </div>
                <div class="col-12 col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">
                        <i data-feather="home"></i>
                      </a>
                    </li>
                    <li class="breadcrumb-item">Thống kê</li>
                    <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid list-products">
            <div class="row">
              <!-- Individual column searching (text inputs) Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive product-table">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Details</th>
                            <th>Amount</th>
                            <th>Stock</th>
                            <th>Start date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Red Lipstick </h6></a><span>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</span></td>
                            <td>$10</td>
                            <td class="font-success">In Stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Pink Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-primary">Low Stock</td>
                            <td>24/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Gray Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-danger">out of stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Green Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-primary">Low Stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Black Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-success">In Stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> White Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-primary">Low Stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> light Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-danger">out of stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Gliter Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-danger">out of stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> green Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-success">In Stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                          <tr>
                            <td><a href="product-page.html"><img src="https://picsum.photos/200/300" alt=""></a></td>
                            <td><a href="product-page.html">
                                <h6> Yellow Lipstick </h6></a>
                              <p>Interchargebla lens Digital Camera with APS-C-X Trans CMOS Sens</p>
                            </td>
                            <td>$10</td>
                            <td class="font-danger">out of stock</td>
                            <td>25/04/2011</td>
                            <td>
                              <button class="btn btn-danger btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Delete</button>
                              <button class="btn btn-primary btn-xs" type="button" data-original-title="btn btn-danger btn-xs" title="">Edit</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Individual column searching (text inputs) Ends-->
          <!-- Container-fluid Ends-->
        </div>
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright 2022 © Zeta theme by pixelstrap  </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <?php include_once "layout/script.php" ?>
  <script src="assets/js/product-list-custom.js"></script>
  </body>
</html>