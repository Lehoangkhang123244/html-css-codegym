<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
             body{
               box-sizing: border-box;
               padding-left: 25%;
               padding-right: 25%;
            } 
            input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
            
            input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            div {
            border-radius: 5px;
            padding: 0px 200px;
            }
            h3{
                text-align: center;
            }
        </style>
</head>
<body>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require 'database.php';
        $sql="SELECT * FROM hoadonchitiet WHERE maHD='".$id."'";
        $result=$db->query($sql);
        $rs=$result->fetch();

        if (isset($_POST['edit'])) {
            $idnew=$_POST['id'];
            $idsp = $_POST['maSP'];
            $num= $_POST['soLuong'];
            $price = $_POST['donGia'];
        
            require 'database.php';
            $sql1="UPDATE hoadonchitiet SET maSP='" . $idsp . "', soLuong='" . $num. "', donGia='" . $price . "' WHERE maHD='$idnew'";
            $result1 = $db->exec($sql1);
            
            header("location: index.php");
        }
    }
    ?>

    <?php
    // put your code here
    ?>
        <h3>Sửa Hóa đơn chi tiết</h3>
        <form method="post" enctype="multipart/form-data">
        <label for="fname">Mã hóa đơn:</label>
            <input type="text" name="id" value="<?php echo $rs['maHD'] ?>"/>
            <label for="lname">Mã khách hàng:</label>
            <input type="text" name="maSP" value="<?php echo $rs['maSP'] ?>"/>
            <label for="lname">Số lượng:</label>
            <input type="text" name="soLuong" value="<?php echo $rs['soLuong'] ?>"/>
            <label for="lname">Đơn giá :</label>
            <input type="text" name="donGia" value="<?php echo $rs['donGia'] ?>"/>
            
            <input type="submit" name="edit" value="Lưu"/>
           
        </form>
</body>
</html>