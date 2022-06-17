<!DOCTYPE html>
<html lang="en">
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

    <!-- Template Stylesheet -->
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
                        <a href="admin/admin.php" class="nav-item nav-link">ADMIN</a>
                    </div>
                    <div class="navbar-nav ml-auto">
                        <!-- <a href="#" class="nav-item nav-link">Đăng nhập</a>
                        <a href="#" class="nav-item nav-link">Đăng ký</a> -->
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
                        <input type="text" placeholder="Tìm kiếm">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="wishlist.html" class="btn wishlist">
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