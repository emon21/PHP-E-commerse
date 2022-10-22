<?php 

require_once('connect.php');

if (isset($_GET['cat_delete'])) {

	$cate_delete =  $_GET['cat_delete'];

	$del = mysqli_query($links,"DELETE FROM catagory WHERE id='$cate_delete'");
	echo '<script>alert("Delete Category")</script>';
header('location:category_list.php');


}


 ?>