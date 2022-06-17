<?php
require_once('layout/header.php');
?>
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<header>
        <!-- để tạm để biết có đăng nhập hay k -->
</header>

<article>
                <div class="w3-container">
                <h2>Thanh toán đơn hàng</h2>
                <p>Vui lòng kiểm tra lại sản phẩm cần mua của quý khách: </p>

                <table class="w3-table-all">
                    <thead>
                    <tr class="w3-red">
                        <th>#</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Đơn giá</th>
                        <th>SL</th>
                        <th>Thành tiền</th>
                    </tr>
                    </thead>
                    <?php 
                   
                        if(!empty($_SESSION['cart'])){
                            $total = $i = 0;
                            foreach($_SESSION['cart'] as $key => $value){
                                $i++;
                    ?>
                        <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $_SESSION['cart'][$key]['name'] ?></td>
                        <td><?php echo number_format($_SESSION['cart'][$key]['price']) ?>VND</td>
                        <td>
                        <?php echo $_SESSION['cart'][$key]['sl'] ?>
                        </td>
                        <td><?php 
                            echo number_format(($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['sl']));
                            $total += ($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['sl']);
                            ?> VND
                      </td>
                      </tr>
                            <?php }
                        }  ?>    
                      <tr>
                        <td colspan = '4' style = "text-align:center;font-weight:bolder">Tổng tiền</td>
                        <td colspan = '2'><?php echo number_format($total) ?> VND</td>
                      </tr>
                </table>
                    <!-- Check thông tin khách hàng -->
                    
<p>Vui lòng kiểm tra lại thông tin cá nhân của quý khách trước khi đặt hàng:</p>
<?php
  require 'database.php';
    // Lấy lại thông tin khách hàng 
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM khachhang WHERE username = '".$username."'";
    $result = $db -> query($sql);
    $rs = $result->fetch();
    
    // Khi người dùng tiến hành đặt hàng
    if(isset($_POST['dathang'])){
        $maKH = $_POST['maKH'];
        $ghichu = $_POST['ghichu'];
        $tongTien = $total;

        // insert vào bảng hóa đơn
        require_once ('database.php');
        $sql = "INSERT INTO hoadon VALUES ('','".$tongTien."','".date("Y-m-d H:i:s")."','".$ghichu."','Chưa thanh toán','".$maKH."')";
        $result = $db ->exec($sql);

        // insert vào bảng hóa đơn chi tiết
        $last_id = $db->lastInsertId();
        foreach($_SESSION['cart'] as $key => $value){
            $sql = "INSERT INTO hoadonchitiet VALUES ('".$last_id."','".$key."','".$value['sl']."','".$value['price']."')";
            $result = $db -> exec($sql);
        }
    }

?>
  <form action="" method="post">
      <input type="hidden" name = "maKH" value = "<?php echo $rs['maKH'] ?>">
    <div class="row">
      <div class="col-25">
        <label for="fname">Tên khách hàng</label>
      </div>
      <div class="col-75">   
    <input type="text" name="tenKH" value = "<?php echo $rs['tenKH'] ?>" placeholder="Nhập tên khách hàng ..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Số điện thoại</label>
      </div>
      <div class="col-75">
        <input type="text" name="soDT" value = "<?php echo $rs['soDT'] ?>" placeholder="Nhập số điện thoại ..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
      <input type="text" name="email" value = "<?php echo $rs['email'] ?>" placeholder="Nhập email ..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Địa chỉ</label>
      </div>
      <div class="col-75">
        <input type="text" name = "diaChi" value = "<?php echo $rs['diaChi'] ?>" placeholder = "Nhập địa chỉ ..." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Ghi chú</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="ghichu" placeholder="Nhập ghi chú ..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" onclick="return confirm('Xác nhận đặt hàng ?')" name = "dathang" value="Đặt hàng">
    </div>
  </form>
</div>
               
</article>
<?php
require_once('layout/footer.php');
?>