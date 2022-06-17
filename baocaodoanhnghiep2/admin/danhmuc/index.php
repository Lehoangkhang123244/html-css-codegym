<!DOCTYPE html>
<?php 
    require 'database.php';
    $sql="SELECT * FROM phanloai";
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
                    <h2 class="text-center">Danh Mục</h2>
                </div>
                <div class="panel-body">
                    <a href="add.php">
                        <button class="btn btn-success" style="margin-bottom: 15px;">Thêm danh mục</button>
                    </a>
                    <table class="table table-bordered table-hover" style="text-align: center;">
                            <tr>
                            <th>STT</th>
                            <th>Mã phân loại </th>
                            <th>Tên phân loại</th>
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
                                <td style="padding-top: 50px;"><?php echo $rs['maPhanLoai'] ?></td>
                                <td style="padding-top: 50px;"><?php echo $rs['tenPhanLoai'] ?></td>
                                <td style="padding-top: 50px;"><a href="edit.php?id=<?php echo $rs['maPhanLoai'] ?>">Sửa</a></td>
                                <td style="padding-top: 50px;"> <a onclick="return confirm('Bạn có chắc muốn xóa?')" href="delete.php?id=<?php echo $rs['maPhanLoai']?>">Xóa</a></td>      
                            </tr>
                            <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
