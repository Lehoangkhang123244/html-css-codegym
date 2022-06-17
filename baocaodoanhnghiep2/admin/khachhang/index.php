<!DOCTYPE html>
<?php 
    require 'database.php';
    $sql="SELECT * FROM khachhang";
    $result=$db->query($sql);
?>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="../index.php" class="nav-item nav-link active">Quản Lý Sản Phẩm</a>
                            <a href="../danhmuc/index.php" class="nav-item nav-link">Danh Mục</a>
                            <a href="../khachhang/index.php" class="nav-item nav-link">Khách Hàng</a>
                            <a href="../hoadon/index.php" class="nav-item nav-link">Hóa Đơn</a>
                            <a href="../hoadonchitiet/index.php" class="nav-item nav-link">Hóa Đơn Chi tiết</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2 class="text-center">Thông tin Khách Hàng</h2>
                </div>
                <div class="panel-body">
                    <a href="add.php">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm khách hàng</button>
                    </a>
                    <table class="table table-bordered table-hover" style="text-align: center;">
                            <tr>
                            <th>STT</th>
                            <th>Mã khách hàng </th>
                            <th>Tên khách hàng</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Vai trò</th>
                            <th width="50px"></th>
                            <th width="50px"></th>
                            </tr>
                            <?php
                            $stt=0;
                                    while ($rs=$result->fetch()){
                                        $stt++;
                            ?>
                            <tr>
                                <td style="padding-top: 50px;"><?php echo $stt ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['maKH'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['tenKH'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['username'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['password'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['soDT'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['email'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['diaChi'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['role'] ?></td>
                                <td style="padding-top: 50px;"><a href="edit.php?id=<?php echo $rs['maKH'] ?>">Sửa</a></td>
                                <td style="padding-top: 50px;"> <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="delete.php?id=<?php echo $rs['maKH']?>">Xóa</a></td>      
                            </tr>
                            <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
