<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_list = $_POST['cat_list'];
	$pro_name = $_POST['pro_name'];
	$pro_desc = $_POST['pro_desc'];
	$pro_price = $_POST['pro_price'];

$ins = "INSERT INTO products(cat_id,product_name,product_desc,product_price) VALUES ('$cat_list','$pro_name','$pro_desc','$pro_price')";
 mysqli_query($links,$ins);


 echo '<script>alert("Product Successfully Inserted")</script>';
header('location:product_list.php');

}


 ?>