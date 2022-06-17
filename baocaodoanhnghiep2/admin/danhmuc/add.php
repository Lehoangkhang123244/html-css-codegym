<!DOCTYPE html>
<?php
if (isset($_POST['add'])) {
    $id = $_POST['maPhanLoai'];
    $title = $_POST['tenPhanLoai'];
   
   
    require 'database.php';
    $sql1 = "INSERT INTO phanloai VALUES ('".$id."', '".$title."')";
    $result1 = $db->exec($sql1);
    
    header("location: index.php");
}
?>
<html>
    <head>
    
            <meta charset="UTF-8">
        <title></title>
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
        // put your code here
        ?>
        <h3>Thêm thông tin khách hàng</h3>
        <div>
        <form method="post" enctype="multipart/form-data">
            <label for="fname">Mã Phân Loại:</label>
            <input type="text" name="maPhanLoai">
            <label for="lname">Tên Phân Loại:</label>
            <input type="text" name="tenPhanLoai">
            <input type="submit" name="add" value="Lưu"/>
        </form>
        </div>
    </body>
</html>
