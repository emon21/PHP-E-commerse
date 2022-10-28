<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_name = $_POST['catagory_name'];
    $slug= str_replace(' ','-', $cat_name); // replace spaces by dashes
    $slug= strtolower($slug); 

 mysqli_query($links,"INSERT INTO catagory(catagory_name,slug)
 VALUES ('$cat_name','$slug')");

 echo '<script>alert("Added Category")</script>';
header('location:category_list.php');

}


 ?>
