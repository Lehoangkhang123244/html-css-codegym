<!DOCTYPE html>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require 'database.php';
	$sql = "delete from hoadon WHERE maHD='".$id."'";

    $result=$db->query($sql);

	header("location: index.php");
	$result->close();
}
?>