
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
             body{
               box-sizing: border-box;
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
 if (isset($_POST['add'])) {
     $id = $_POST['maSP'];
     $title = $_POST['tenSP'];
     $intro = $_POST['moTa'];
     $image = $_FILES['file']['name'];
     $linkup="images/";
     move_uploaded_file($_FILES['file']['tmp_name'], $linkup.$image);

     $hot_news = $_POST['hot_news'];
     $cate_ID = $_POST['cate_id'];

     $price = $_POST['donGia'];
     $num = $_POST['soLuong'];
     $maPL = $_POST['maPhanLoai'];

    
     require 'database.php';
     $sql1 = "INSERT INTO news VALUES ('', '".$title."','".$intro."', '".$image."','".$hot_news."', '".$cate_ID."','".$price."','".$num."', '".$maPL."')";
     $result1 = $db->exec($sql1);
    
     header("location: new_view.php");
 }
?>

<?php
        // put your code here
        ?>
        <h3>Thêm Sản Phẩm Mới</h3>
        <div>
        <form method="post" enctype="multipart/form-data">
            <label for="lname">Tên sản phẩm:</label>
            <input type="text" name="tenSP" id="name">
            <label>Mô tả:</label>
            <input type="text" name="moTa"/><br>
            <label>Hình ảnh:</label>
            <input type="file" name="file" id="image"/><br>
            <label>Đơn giá:</label>
            <input type="text" name="donGia" id="price"/><br>
            <label>Số lượng:</label>
            <input type="text" name="soLuong" id="sl"/><br>
            <label for="fname">Mã phân loại:</label>
            <input type="text" name="maPhanLoai">
            <label for="hot_news">Hot News:</label>
            <select name="hot_news">
                <option value="0">Yes</option>
                <option value="1">No</option>
            </select>
            <label for="cate-id">Cate ID:</label>
            <select name="cate_id">
                <option value="1">Education</option>
                <option value="2">Car</option>
            </select>
            <input type="submit" name="add" value="Lưu"/>
        </form>
        </div>
</body>
</html>
