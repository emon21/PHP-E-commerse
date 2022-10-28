
<?php

require_once('connect.php');


	if(isset($_REQUEST['update'])){

	$edid_ID = $_REQUEST['edit_id'];
	
	$cat_list = $_POST['cat_list'];
	$pro_name = $_POST['pro_name'];
	$pro_desc = $_POST['pro_desc'];
	$pro_price = $_POST['pro_price'];
			
			
	//image insert into db

	//$icon_image = $_FILES['icon_image']['name'];
	//$icon_image_tmp = $_FILES['icon_image']['tmp_name'];

	//move_uploaded_file($image_tmp,"./images/$post_image");

	//move_uploaded_file($icon_image_tmp,"img_icon/$icon_image");


	$insert_user = "Update products SET cat_id='$cat_list',
    product_name='$pro_name',product_desc='$pro_desc',product_price='$pro_price' WHERE id='$edid_ID'";

	$run_user = mysqli_query($links,$insert_user);

   
    
	if ($run_user==true){


		if($_FILES["pro_img"]["name"]){

			$sel = "select * from products where id='$edid_ID'";
			$res = mysqli_query($links,$sel);
			$rows = mysqli_fetch_assoc($res);
			$image = $rows['product_img'];
			@unlink("products/".$image);

			//image Update into db

            $filename = $_FILES["pro_img"]["name"];

            $tempname = $_FILES["pro_img"]["tmp_name"]; 
            
            $newfilename =  uniqid().'.jpg';
           

			//$icon_image = $_FILES['icon_image']['name'];
			//$icon_image_tmp = $_FILES['icon_image']['tmp_name'];

			move_uploaded_file($tempname,"products/$newfilename");
			//$pic = "img/".$_POST['edid_ID'].$_FILES['icon_image']['name'];
			//move_uploaded_file($_FILES['icon_image']['tmp_name'],$pic);

			$sql = "update products SET product_img='$newfilename' WHERE id='$edid_ID'";
			mysqli_query($links,$sql);
		}
	
        echo "<script>
        window.alert('Succesfully Updated');
        window.location.href='product_list.php';
        </script>";


	}

	//if($inser_res){
		//	echo 'Attendance Taken Successfully...!';
		//}
}

?>
