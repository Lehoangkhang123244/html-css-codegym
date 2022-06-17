<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Shopping cart -->
    <?php
    session_start();
    require_once('database.php');
    if (isset($_GET['maSP'])) {
        $maSP = $_GET['maSP'];

        $sql = "SELECT * FROM news WHERE maSP = '" . $maSP . "' ";
        $result = $db->query($sql);
        $rs = $result->fetch();


        if (!empty($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];

         
            // Kiểm tra lần thứ 2 mua hàng đã có id phần tử mảng hay chưa dùng hàm array_key_exists
            if (array_key_exists($maSP, $cart)) {
                $cart[$maSP] = array(
                    "sl" => (int)$cart[$maSP]["sl"] + 1,
                    "price" => $rs[6],
                    "image"=> $rs[3],
                    "name" => $rs[1]

                );
            } else {
                $cart[$maSP] = array(
                    "sl" => 1,
                    "price" => $rs[6],
                    "image"=> $rs[3],
                    "name" => $rs[1]

                );
            }
        } else {
            // Lần đầu tiên mua hàng
            $cart[$maSP] = array(
                "sl" => 1,
                "price" => $rs[6],
                "image"=> $rs[3],
                "name" => $rs[1]

            );
        }
        $_SESSION['cart'] = $cart;
        echo '<pre>';
        echo print_r(  $_SESSION['cart']);
        echo '</pre>';
    } else {
    }
    header('location:cart.php');
    ?>
    <!-- End Shopping cart -->
    <!-- </header> -->
</body>
</html>

