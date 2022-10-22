<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_name = $_POST['catagory_name'];

 mysqli_query($links,"INSERT INTO catagory(catagory_name)
 VALUES ('$cat_name')");

 echo '<script>alert("Added Category")</script>';
header('location:category_list.php');

}


 ?>