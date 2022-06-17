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
    if (isset($_POST['add'])) {
        $id = $_POST['maHD'];
        $idsp = $_POST['maSP'];
        $num = $_POST['soLuong'];
        $price = $_POST['donGia'];
       
        require 'database.php';
        $sql1 = "INSERT INTO hoadonchitiet VALUES ('".$id."', '".$idsp."', '".$num."','".$price."')";
        $result1 = $db->exec($sql1);
        
        header("location: index.php");
    }
    ?>

    <?php
        // put your code here
    ?>
        <h3>Thêm hóa đơn chi tiết</h3>
        <div>
        <form method="post" enctype="multipart/form-data">
            <label for="fname">Mã hóa đơn:</label>
            <input type="text" name="maHD">
            <label for="lname">Mã sản phẩm:</label>
            <input type="text" name="maSP">
            <label for="lname">Số lượng:</label>
            <input type="text" name="soLuong">
            <label for="lname">Đơn giá:</label>
            <input type="text" name="donGia">
            <input type="submit" name="add" value="Lưu"/>
        </form>
        </div>
</body>
</html>