<?php
     include '../model/pdo.php';
       function insert_taikhoan($user,$hovaten,$pass,$email){
         $sql="insert into taikhoan(user,hovaten,pass,email) values('$user','$hovaten','$pass','$email')";
         pdo_execute($sql);
     }
     if(isset($_POST['dangky'])&&($_POST['dangky'])){
         $user=$_POST['username'];
         $hovaten=$_POST['fullname'];
         $pass=$_POST['pass'];
         $email=$_POST['email'];
         insert_taikhoan($user,$hovaten,$pass,$email);
         $thongbao = 'Đăng ký thành công';
     }
 ?> 

<!DOCTYPE html>
<html>
<head>
<title>Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Custom Theme files -->
<link href="../assets/css/singup.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
    <div class="main-w3layouts wrapper">
    <h1>Đăng ký thành viên</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="#" method="post">
          <input class="text" type="text" name="username" placeholder="Tên đăng nhập" required="">
          <input class="text full" type="text" name="fullname" placeholder="Họ và Tên" required="">
          <input class="text email" type="email" name="email" placeholder="Địa chỉ email" required="">
          <input class="text" type="password" name="pass" placeholder="Mật khẩu" required="">
          <!-- <input class="text w3lpass" type="password" name="password" placeholder="Xác nhân mật khẩu" required=""> -->
          <input type="submit" name="dangky" value="Đăng Ký">
          <?php
            if(isset($thongbao)&&($thongbao!=''))
                echo $thongbao;
          ?>
        </form>
      </div>
    </div> 
  </div>
</body>
</html>