<!DOCTYPE html>
<?php
if (isset($_POST['add'])) {
    $id = $_POST['maKH'];
    $title = $_POST['tenKH'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $phone = $_POST['soDT'];
    $email = $_POST['email'];
    $adress = $_POST['diaChi'];
    $role = $_POST['vaitro'];
   
    require 'database.php';
    $sql1 = "INSERT INTO khachhang VALUES ('".$id."', '".$title."', '".$user."','".$pass."','".$phone."', '".$email."','".$adress."','".$role."')";
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
            <label for="fname">Mã khách hàng:</label>
            <input type="text" name="maKH">
            <label for="lname">Tên khách hàng:</label>
            <input type="text" name="tenKH">
            <label for="lname">Tài khoản:</label>
            <input type="text" name="username">
            <label for="lname">Mật Khẩu:</label>
            <input type="text" name="password">
            <label for="lname">Số điện thoại:</label>
            <input type="text" name="soDT">
            <label for="lname">Email:</label>
            <input type="text" name="email">
            <label for="lname">Địa chỉ:</label>
            <input type="text" name="diaChi">
            <label for="lname">Vai trò:</label>
            <input type="text" name="role">
            <input type="submit" name="add" value="Lưu"/>
        </form>
        </div>
    </body>
</html>
