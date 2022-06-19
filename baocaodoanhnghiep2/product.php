<?php
require_once('layout/header.php');
?>
<?php 
  require 'admin/database.php';
  $sql="SELECT * FROM NEWS";
  $result=$db->query($sql);
?>
<style>
	.row {
      margin-right: 20px;
      margin-left: 20px;
      padding-bottom: 30px;
	  grid-row-gap: 20px;
  }
</style>
    <div class="row align-items-center product-slider product-slider-4">
        <?php 
            $count = 0;
            while($rs = $result->fetch()){
                $count++;
        ?>
            <div class="col-lg-3">
                <div class="product-item" style="text-align: center;">
                    <div class="img">
                        <img src="admin/images/<?php echo $rs['hinhAnh'] ?>" width="250px">
                    </div>
                        <a href="detail_product.php?id=<?php echo $rs['maSP'] ?>"><span class="name-product"><?php echo $rs['tenSP'] ?></span></a>
                    <div class="home-product-item__price">
                        <span class="price" style="padding-left: 27%;"><?=number_format($rs['donGia'], 0, '', '.')?>VND</span>
                    </div> 
                        <h4>  
                        <span class="mota" style="padding: left 20px;"><?php echo $rs['moTa'] ?></span><br>
                        </h4>
                    </div>
            </div>
        <?php }?>
    </div>
<?php
require_once('layout/footer.php');
?>