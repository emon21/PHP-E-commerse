<?php 

require_once('connect.php');

if (isset($_GET['cat_delete'])) {

	$cate_delete =  $_GET['cat_delete'];

//img delete
	$sel = "SELECT * FROM products WHERE id='$cate_delete'";
			$res = mysqli_query($links,$sel);
			$rows = mysqli_fetch_assoc($res);
			$image = $rows['product_img'];
			unlink("products/".$image);

	$del = mysqli_query($links,"DELETE FROM products WHERE id='$cate_delete'");
	echo '<script>alert("Delete Category")</script>';
header('location:product_list.php');


// if($_FILES['icon_image']['name']){
			
// 			$sel = "SELECT * FROM products WHERE id='$cate_delete'";
// 			$res = mysqli_query($links,$sel);
// 			$rows = mysqli_fetch_assoc($res);
// 			$image = $rows['product_img'];
// 			unlink("products/".$image);
// 			// $icon_image = $_FILES['icon_image']['name'];
// 			// $icon_image_tmp = $_FILES['icon_image']['tmp_name'];
			
// 			// move_uploaded_file($icon_image_tmp,"products/$icon_image");
// 			// //$pic = "img/".$_POST['edid_ID'].$_FILES['icon_image']['name'];
// 			// //move_uploaded_file($_FILES['icon_image']['tmp_name'],$pic);
			
// 			// $sql = "UPDATE products SET product_img='$icon_image' WHERE id='$edid_ID'";
// 			// mysqli_query($conn,$sql);
// 		}

}






 ?>