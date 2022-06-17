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
            $price = $_POST['tongTien'];
            $day = $_POST['ngayMua'];
            $note = $_POST['ghichu'];
            $intro = $_POST['tinhTrang'];
            $idkh = $_POST['maKH'];

            require 'database.php';
            $sql1 = "INSERT INTO hoadon VALUES ('".$id."', '".$price."', '".$day."','".$note."','".$intro."','".$idkh."')";
            $result1 = $db->exec($sql1);
            
            header("location: index.php");
        }
    ?>

    <?php
        // put your code here
    ?>
    <h3>Thêm hóa đơn </h3>
    <div>
    <form method="post" enctype="multipart/form-data">
        <label for="fname">Mã hóa đơn:</label>
        <input type="text" name="maHD">
        <label for="lname">Tổng tiền:</label>
        <input type="text" name="tongTien">
        <label for="lname">Ngày mua:</label>
        <input type="text" name="ngayMua">
        <label for="lname">Ghi chú:</label>
        <input type="text" name="ghichu">
        <label for="lname">Tình trạng:</label>
        <input type="text" name="tinhTrang">
        <label for="lname">Mã khách hàng:</label>
        <input type="text" name="maKH">
        <input type="submit" name="add" value="Lưu"/>
    </form>
    </div>
</body>
</html>