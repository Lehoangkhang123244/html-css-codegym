<?php
 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "xshop";  
 $message = ""; 
 try{  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
     if(isset($_POST["login"])){  
          if(empty($_POST["username"]) || empty($_POST["password"])){  
               $message = '<label>All fields are required</label>';  
          }else{  
               $query = "SELECT * FROM taikhoan WHERE user = :user AND pass = :pass";  
               $statement = $connect->prepare($query);  
               $statement->execute(  
                    array(  
                         'user'     =>     $_POST["username"],  
                         'pass'     =>     $_POST["password"]  
                    )  
               );  
               $count = $statement->rowCount();  
               if($count > 0){  
                    $_SESSION["user"] = $_POST["username"];  
                    header("location:index.php");  
               }else{  
                    $message = '<label>Đăng nhập thất bại! Vui lòng nhập lại.</label>';  
                    $message=" <script>
                    Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Đăng nhập thất bại!'
                    
                    });
                    </script>";
               }  
          }  
     }  
}  
 catch(PDOException $error){  
      $message = $error->getMessage();  
}  
?>
  <!DOCTYPE html>
  <html>
     <head>
          <script src="js/sweetalert2-11.1.2/dist/sweetalert2.min.js"></script>
          <link rel="stylesheet" href="js/sweetalert2-11.1.2/dist/sweetalert2.min.css">
          <link rel="stylesheet" href="../assets/css/login.css">
          <title></title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     </head>   
     <body>  
          <br /> 
          <div class="container" style="width:500px;">  
                <?php  
                if(isset($message))  
                {  
                     echo '<label class="text-danger">'.$message.'</label>';  
                }  
                ?>  
                <h1 style="color: #009999;font-size: 40px;
                    margin-bottom: 30px; text-align:center;">
                     Đăng nhập vào website
               </h1><br />  
                <form method="post">  
                     <label>Tên đăng nhập</label>  
                     <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập"/>  
                     <br />  
                     <label>Nhập mật khẩu</label>  
                     <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" />  
                     <br />  
                     <input style="background-color: #FF6F61;" type="submit" name="login" class="btn btn-success" value="Đăng nhập" />   
                </form>
                <br>
          </div>  
          <br />  
     </body>  
 </html>
 