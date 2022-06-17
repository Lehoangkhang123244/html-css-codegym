<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require 'database.php';
    $sql="SELECT * FROM NEWS WHERE maSP='".$id."'";
    $result=$db->query($sql);
    $rs=$result->fetch();

    if (isset($_POST['edit'])) {
        $idnew=$_POST['id'];
        $title = $_POST['tenSP'];
        $intro = $_POST['moTa'];
        if($_FILES['file']['name']!=''){
        $image = $_FILES['file']['name'];
        $linkup = "images/";
        move_uploaded_file($_FILES['file']['tmp_name'], $linkup . $image);
        }  else {
            $image=$_POST['img_old'];
        }
        $price = $_POST['donGia'];
        $num = $_POST['soLuong'];
        $maPL = $_POST['maPL'];
        $hot_news = $_POST['hot_news'];
        $cate_ID = $_POST['cate_ID'];


        require 'database.php';
        $sql1="UPDATE news SET tenSP='" . $title . "', moTa='" . $intro . "', hinhAnh='" . $image . "',donGia='" .$price. "',soLuong='" .$num. "',maPhanLoai='" .$maPL. "', hot_news='" . $hot_news . "', cate_ID='" . $cate_ID . "' WHERE maSP='$idnew'";
        $result1 = $db->exec($sql1);
        

        
        header("location: new_view.php");
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
// put your code here
?>
        <h3>Edit News</h3>
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $rs['maSP'] ?>"/>
            <input type="hidden" name="img_old" value="<?php echo $rs['hinhAnh'] ?>"/>
            <label>Title</label>
            <input type="text" value="<?php echo $rs['tenSP'] ?>" name="tenSP" required/>
            <br>
            <label>Intro</label>
            <textarea name="moTa"><?php echo $rs['moTa'] ?></textarea>
            <br>
            <label>Imgae</label>
            <input type="file" name="file"/><img src="images/<?php echo $rs['hinhAnh'] ?>"/>
            <br>
            <label>Price</label>
            <textarea name="donGia"><?php echo $rs['donGia'] ?></textarea>
            <br>
            <label>Số Lượng </label>
            <textarea name="soLuong"><?php echo $rs['soLuong'] ?></textarea>
            <br>
            <label>Mã Phân Loại</label>
            <input type="text" value="<?php echo $rs['maPhanLoai'] ?>" name="maPL" required/>
            
            <br>
            <label>Hot News</label>
            <select name="hot_news">
                <?php echo $rs['hot_news'] ?>
                <?php if($rs['hot_news']=='0'){?>
                <option value="0">Yes</option>
                <option value="1">No</option>
                <?php }  else {?>
                <option value="1">No</option>
                <option value="0">Yes</option>
                <?php }?>
            </select>
            <br>
            <label>Cate ID</label>
            <select name="cate_ID">
                <?php echo $rs['cate_ID'] ?>
                <?php if($rs['cate_ID']=='1'){?>
                <option value="1">Education</option>
                <option value="2">Car</option>
                <?php }  else {?>
                <option value="2">Car</option>
                <option value="1">Education</option>
                
                <?php }?>
            </select>
            <br>
            <input type="submit" name="edit" value="EDIT"/>


        </form>
    </body>
</html>
