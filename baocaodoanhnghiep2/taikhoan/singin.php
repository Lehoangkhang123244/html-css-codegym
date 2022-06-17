<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/singin.css">
</head>
<body>
    <div class="form-tt">
        <h2>Đăng nhập</h2>
        <form action="#" method="post" name="dang-ky">
        <input type="text" name="username" placeholder="Tên Đăng nhập" />
        <input type="password" name="password" placeholder="Mật khẩu" />
        <div class="nho-dang-nhap">
            <label><input type="checkbox" name=""> Ghi nhớ đăng nhập</label>
            <a href="forgetpass.php" class="forget">Quên mật khẩu?</a>
        </div>
        <input type="submit" name="submit" value="Đăng nhập" />
        <div class="input-form">
            <p>Bạn Chưa Có Tài Khoản? <a href="singup.php">Đăng Ký</a></p>
        </div>
        </form>
    </div>
</body>
</html>