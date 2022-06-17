<!DOCTYPE html>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require 'database.php';
    $sql="SELECT * FROM khachhang WHERE maKH='".$id."'";
    $result=$db->query($sql);
    $rs=$result->fetch();

    if (isset($_POST['edit'])) {
        $idnew=$_POST['id'];
        $title = $_POST['tenKH'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $phone = $_POST['soDT'];
        $email = $_POST['email'];
        $adress = $_POST['diaChi'];
        $role = $_POST['vaitro'];
       
        require 'database.php';
        $sql1="UPDATE khachhang SET tenKH='" . $title . "', username='" . $user . "', password='" . $pass . "',soDT='" .$phone. "',email='" .$email. "',diaChi='" .$adress. "', role='" . $role. "' WHERE maKH='$idnew'";
        $result1 = $db->exec($sql1);
        
        header("location: index.php");
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
// put your code here
?>
        <h3>Sửa khách hàng</h3>
        <form method="post" enctype="multipart/form-data">
        <label for="fname">Mã khách hàng:</label>
            <input type="text" name="id" value="<?php echo $rs['maKH'] ?>"/>
            <label for="lname">Tên khách hàng:</label>
            <input type="text" name="tenKH" value="<?php echo $rs['tenKH'] ?>"/>
            <label for="lname">Tài khoản:</label>
            <input type="text" name="username" value="<?php echo $rs['username'] ?>"/>
            <label for="lname">Mật Khẩu:</label>
            <input type="text" name="password" value="<?php echo $rs['password'] ?>"/>
            <label for="lname">Số điện thoại:</label>
            <input type="text" name="soDT"value="<?php echo $rs['soDT'] ?>"/>
            <label for="lname">Email:</label>
            <input type="text" name="email" value="<?php echo $rs['email'] ?>"/>
            <label for="lname">Địa chỉ:</label>
            <input type="text" name="diaChi"value="<?php echo $rs['diaChi'] ?>"/>
            <label for="lname">Vai trò:</label>
            <input type="text" name="vaitro" value="<?php echo $rs['role'] ?>"/>
            <input type="submit" name="edit" value="Lưu"/>
           
        </form>
    </body>
    
</html>
