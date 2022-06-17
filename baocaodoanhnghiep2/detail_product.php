<?php
require_once('layout/header.php');
require 'admin/database.php';

 if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM news WHERE maSP ='".$id."' ";
  $result = $db ->query($sql);
  $rs = $result->fetch();
}
?>


<style>
    .container {
    height: auto;
    padding: 50px;
    display: grid;
    grid-template-columns: 300px 400px 400px;
    }
    .item {
    
    padding: 10px;
    border: 2px solid orange;
    padding-top: 20px;
    }
    .thongtin{
      text-align: left;
    }
    .text{
      text-align: center;
    }

    .price{
      font-size: 24px;
      font-family:'Times New Roman', Times, serif;
      padding-top: 15px;
    }
    .itemchild{
      padding-top: 6%;
      text-align: left;
      padding-left: 20px;
    }
    .itemchild .name-product{
      font-size: 24px;
      font-family:'Times New Roman', Times, serif;
      color: red;
    }
    .btn btn-danger{
      text-align: center;
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
.inventory_location_box{
  margin-bottom: 20px;
}
.inventory_top{
  margin-top: 10px;
}
.inventory_top .count_store {
    font-size: 20px;
    font-weight: 500;
    text-transform: uppercase;
    background: #d5ddf3;
    padding: 5px 0 0 10px;
    margin: 0;
    color: #212121;
}
.inventory_top .des_span {
    font-size: 15px;
    background: #d5ddf3;
    padding: 0 0 5px 10px;
    font-weight: 300;
    color: #666;
}
.chontinhthanh{
  margin-top: -6%;
}

</style>
    <div class="text">
        <h3>Chi tiết sản phẩm</h3>
    </div>
    <div class="container">
      <div class="item">
        <img src="admin/images/<?php echo $rs['hinhAnh'] ?>" width = "100%">
      </div>
      <div class="item">
        <div class="itemchild">
          <span class="name-product"><?php echo $rs['tenSP'] ?></span></a><br>
          <span class="price">Giá KM: <?=number_format($rs['donGia'], 0, '', '.')?>VND</span><br>
          <a href="addcart.php?maSP=<?php echo $rs['maSP'] ?>">
            <button class="btn btn-danger" style="width: 50%; font-size: 26px; margin-top: 20px;margin-left: 22.5%;">Mua Ngay</button>
          </a>
        </div>
      </div>
      <div class="item">
        <div class="inventory_location_box">
							<div class="inventory_top">
								<h4 class="count_store">Có 3 cửa hàng</h4>
								<p class="des_span">còn sản phẩm này</p>
								<div class="chontinhthanh">
									<select id="tinhthanh">
                    <option value="1" selected="selected">Hà Nội</option>
                    <option value="2" selected="selected">Hồ Chí Minh</option>
                    <option value="3" selected="selected">Nha Trang</option>
                  </select>
								</div>
							</div>
						</div>
        <ul class="thongtin">
          <li>Cam kết sản phẩm chính hãng</li>
          <li>Vận chuyển toàn quốc với hóa đơn từ 80k</li>
          <li>Đặt hàng nhanh 0945 677 911- 09 6162 1288</li>
          <li>Hotline: 19002631 nhánh 507</li>
          <li>Email: cskh@sammishop.com.</li>
        </ul>
      </div>

    </div>
    

<?php
require_once('layout/footer.php');
?>