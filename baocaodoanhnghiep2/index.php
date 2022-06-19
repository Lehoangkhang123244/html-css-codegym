<!DOCTYPE html>
<html lang="en">

<?php 
  require 'admin/database.php';
  $sql="SELECT * FROM NEWS";
  $result=$db->query($sql);
?>
<head>
    <meta charset="utf-8">
    <title>COSMETIC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="index.php" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                        <a href="product.php" class="nav-item nav-link">Sản Phẩm</a>
                        <a href="cart.php" class="nav-item nav-link">Giỏ hàng</a>
                        <a href="checkout1.php" class="nav-item nav-link">Thanh toán</a>
                        <a href="admin/admin.php" class="nav-item nav-link">Admin</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <?php
                        session_start();
                        if (!isset($_SESSION['username'])) {
                        ?>
                            <a href="login.php" class="nav-item nav-link">Đăng nhập</a>
                            <a href="#" class="nav-item nav-link">Đăng ký</a>
                        <?php } else { ?>
                            <a style="font-size:15px; color:white" href="#"><i class="fas fa-user-alt"></i> Xin chào: <span style="font-size:15px; color:white"><?php echo $_SESSION['username'] ?></span></a>
                            <a style="font-size:15px; color:white" href="logout.php"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                        <?php } ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.php">
                            <img src="https://theme.hstatic.net/1000246282/1000726217/14/logo.png?v=309" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Tìm Kiếm">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="#" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>(0)</span>
                        </a>
                        
                        <a href="cart.php" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->

    <!-- Main Slider Start -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <i class="fa fa-home"></i>Danh mục sản phẩm</a>
                            </li>
                            <!-- <div class="boxtitle">Danh Mục</div> -->
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-shopping-bag"></i>Dụng cụ làm đẹp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Trang điểm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-female"></i>Chăm sóc da</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-child"></i>Chăm sóc body</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Chăm sóc tóc</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Sản phẩm khác</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Sét quà tặng</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div class="header-slider normal-slider">
                        <div class="header-slider-item">
                            <img src="img/anh1.jpg" alt="Slider Image" width="100%" height="400px" />
                        </div>
                        <div class="header-slider-item">
                            <img src="https://www.tiendauroi.com/wp-content/uploads/2019/10/ebb62e10f9ef84e162ca330093625d6e63b03dcf-750x500.jpeg" alt="Slider Image" width="100%" height="400px"/>
                        </div>
                        <div class="header-slider-item">
                            <img src="https://vuakhuyenmai.vn/wp-content/uploads/sammi-shop-khuyen-mai-mua1-tang1-17-6-2021.jpg" alt="Slider Image" width="100%" height="400px"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-img">
                        <div class="img-item">
                            <img src="img/anh5 (1).jpg" />
                        </div>
                        <div class="img-item">
                            <img src="img/anh5.2.jpg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->
    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fab fa-cc-mastercard"></i>
                        <h2>Thanh toán an toàn</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Giao hàng toàn quốc</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-sync-alt"></i>
                        <h2>10 ngày đổi trả</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-comments"></i>
                        <h2>Hỗ trợ 24/7</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->

    <!-- Category Start-->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="https://vuakhuyenmai.vn/wp-content/uploads/sammi-rivecowe-sale-60-12-7-21.jpg" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết </p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-250">
                        <img src="img/category-4.jpg" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết</p>
                        </a>
                    </div>
                    <div class="category-item ch-150">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNXe4TbeoJEjs_0KnH_ZwY_mIFMnQzhNdkfg&usqp=CAU" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-150">
                        <img src="img/category-6.jpg" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết</p>
                        </a>
                    </div>
                    <div class="category-item ch-250">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSquYBC8fgC5vkeoY0Y_9GWL-9zxtsLfH77bQ&usqp=CAU" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="https://is2-ssl.mzstatic.com/image/thumb/PurpleSource114/v4/53/60/02/536002fd-7752-574f-b6cf-5fbe9ae68b4a/83da7d89-8ed6-4650-884c-847436248feb_sammi---IP-5.5-2.png/750x750bb.jpeg" />
                        <a class="category-name" href="">
                            <p>Thông tin chi tiết</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category End-->
    <!-- Featured Product Start -->
    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Sản Phẩm Nổi Bật</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                <?php 
                    $count = 0;
                    while($rs = $result->fetch()){
                        $count++;
                ?>
                <div class="col-lg-3" style="text-align:center;">
                    <div class="product-item">
                        <div class="img">
                            <img src="admin/images/<?php echo $rs['hinhAnh'] ?>" width="250px">
                        </div>
                            <a href="detail_product.php?id=<?php echo $rs['maSP'] ?>"><span class="name-product"><?php echo $rs['tenSP'] ?></span></a>
                        <div class="home-product-item__price">
                            <span style="padding-left: 27%;" class="price"><?=number_format($rs['donGia'], 0, '', '.')?>VND</span>
                        </div>
                        <div class="home-product-item__origin">
                            <span class="home-product-item" style="padding:0px 0px 5% 25%;"><?php echo $rs['moTa'] ?></span> 
                        </div> 
                       
                    </div>
		        </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Featured Product End -->
    
    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Hỗ trợ khách hàng</h5>
                        <ul>
                            <li><a href="#">Giải đáp thắc mắc</a></li>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Thanh toán & Vận chuyển</a></li>
                            <li><a href="#">Chính sách đổi trả hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Về chúng tôi</h5>
                        <ul>
                            <li><a href="#">Hệ thống cửa hàng</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li><a href="#">Liên kết</a></li>
                            <li><a href="#">Bảo mật thông tin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="payment-method">
                            <h5>Phương thức thanh toán</h5>
                            <img src="img/payment-method.png" alt="Payment Method">
                        </div>
                        <div class="contact-info">
                            <h5>Theo dõi chúng tôi</h5>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h5>Liên hệ</h5>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>Suối Cát - Cam Lâm - Khánh Hòa</p>
                            <p><i class="fa fa-envelope"></i>cskh@sammishop.com.</p>
                            <p><i class="fa fa-phone"></i>19002631 nhánh 507</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>