<?php
include_once('layout/header.php');
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
article{
  padding-left: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
}
</style>
  <header>
  </header>
  <article>
        <div class="w3-container">
        <table class="w3-table-all" id = 'table'>
            <thead>
            <tr class="w3-red">
                <th>#</th>
                <th>Tên Sản Phẩm</th>
                <th>Đơn giá</th>
                <th>SL</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <?php 
              // Echo '<pre>';
              // Print_r($_SESSION['cart']);
              // Echo '</pre>';
            require 'database.php';
                if(!empty($_SESSION['cart'])){
                    $total = $i = 0;
                    foreach($_SESSION['cart'] as $key => $value){
                        $i++;
            ?>
                <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $_SESSION['cart'][$key]['name'] ?></td>
                <td style="text-align: center;"><?php echo number_format($_SESSION['cart'][$key]['price']) ?>VND</td>
                <td>
                <?php echo $_SESSION['cart'][$key]['sl'] ?>
                </td>
                <td style="text-align: center;"><?php 
                    echo number_format(($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['sl']));
                    $total += ($_SESSION['cart'][$key]['price'] * $_SESSION['cart'][$key]['sl']);
                    ?>VND
              </td>
                <td style="text-align: center;"><a onclick = "return confirm('Bạn muốn xóa sản phẩm này khỏi giỏ hàng ?')" href="delete-cart.php?maSP=<?php echo $key ?>">Xóa</a></td>
              </tr>
              <?php }
                }else{
                  $total=0;
                  echo '<script language="javascript">';
                  echo 'alert("Chưa có mặt hàng nào trong giỏ hàng !")';
                  echo '</script>';
                }?>    
              <tr>
                <td colspan = '4' style = "text-align:center;font-weight:bolder">Tổng tiền</td>
                <td colspan = '2'><?php echo number_format($total) ?> VND</td>
              </tr>
              <tr>
                <td colspan = '6'><a href="checkout1.php" style = "text-decoration: none"><button class="w3-button w3-block w3-teal">Thanh toán đơn hàng</button></a></td>
              </tr>
        </table>
        </div>
  </article>
<?php
include_once('layout/footer.php')
?>