<?php 

require_once('connect.php');

if (isset($_POST['add_data'])) {

	$cat_list = $_POST['cat_list'];
	$pro_name = $_POST['pro_name'];
	$pro_desc = $_POST['pro_desc'];
	$pro_price = $_POST['pro_price'];

	// $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $pro_name)));
	// echo $slug;

	 // $slug= str_replace(' ','-', $pro_name); // replace spaces by dashes
	 // $slug= strtolower($slug);

     $filename = $_FILES["pro_img"]["name"];

     $tempname = $_FILES["pro_img"]["tmp_name"]; 
     
     $newfilename =  uniqid().'.jpg';
    
     $folder = "products/".$newfilename;

    //  if ($run_user==true){

        if (move_uploaded_file($tempname, $folder)) {

            $ins = "INSERT INTO products(cat_id,product_name,product_desc,product_price,product_img)
            VALUES ('$cat_list','$pro_name','$pro_desc','$pro_price','$newfilename')";
            mysqli_query($links,$ins);
            echo '<script>alert("Product Successfully Inserted")</script>';
            header('location:product_list.php');
        } 
        else {

            $newfilename =  'default.jpg';
            $ins = "INSERT INTO products(cat_id,product_name,product_desc,product_price,product_img)
            VALUES ('$cat_list','$pro_name','$pro_desc','$pro_price','$newfilename')";
            mysqli_query($links,$ins);

 echo '<script>alert("Product Successfully Inserted")</script>';
header('location:product_list.php');

        }


	// 	if ($_FILES["pro_img"]["name"] == 'true') {
    //         //img upload

    // $newfilename =  uniqid().'.jpg';
    // $folder = "products/".$newfilename;

    // move_uploaded_file($tempname, $folder);


    //     }

    //     else{
            
          
    // $newfilename =  'default.jpg';
   

   
    //     }


	// // 	echo "<script>
    // // window.alert('Succesfully Updated');
    // // window.location.href='data_list.php';
    // // </script>";



	// }

    // if($filename){

    //     $sel = "select * from add_student where id='$edid_ID'";
    //     $res = mysqli_query($conn,$sel);
    //     $rows = mysqli_fetch_assoc($res);
    //     $image = $rows['std_picture'];
    //     @unlink("img_icon/".$image);

    //     //image Update into db

    //     $icon_image = $_FILES['icon_image']['name'];
    //     $icon_image_tmp = $_FILES['icon_image']['tmp_name'];

    //     move_uploaded_file($icon_image_tmp,"img_icon/$icon_image");

    //     //$pic = "img/".$_POST['edid_ID'].$_FILES['icon_image']['name'];
    //     //move_uploaded_file($_FILES['icon_image']['tmp_name'],$pic);

    //     $sql = "update add_student SET std_picture='$icon_image' WHERE id='$edid_ID'";
    //     mysqli_query($conn,$sql);
    // }


    //  if (isset($_POST["file"])){

    //     $file = addslashes($_POST["file"]);
    //     echo "Yes<br>";
    //     }

    //     elseif(empty($_POST['file'])){

    //     $file = "default-avatar.jpeg";
    //     echo "No<br>";

    //     }


// $ins = "INSERT INTO products(cat_id,product_name,product_desc,product_price,product_img)
//  VALUES ('$cat_list','$pro_name','$pro_desc','$pro_price','$newfilename')";
//  mysqli_query($links,$ins);


//  echo '<script>alert("Product Successfully Inserted")</script>';
// header('location:product_list.php');

}


 ?>
