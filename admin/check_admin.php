<?php

include 'connect.php';
session_start();

if(isset($_POST['login'])){
	
	$user_email = $_POST['user_email'];
	$user_pass = $_POST['user_pass'];

	  $sql ="select * From admin where user_name='$user_email' AND user_password='$user_pass'"; 

        $result = mysqli_query($links, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count === 1){ 

        	$_SESSION['user_email'] = $row['user_name'];
        	$_SESSION['user_id'] = $row['id'];
           // echo "<h1><center> Login successful </center></h1>";
            header('location:home.php');  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  

            echo "<script>
    window.alert('Succesfully Updated');
    window.location.href='index.php';
    </script>User Updated Has Been Succefully...!";
        }
}

// 	$result =mysqli_query("select * From reg_student where std_email='$email' AND std_password='$password'");



// 	if (mysqli_num_rows ($result)) {
// 		$_SESSION["id"]= mysqli_result($result, "id");
// 		$SESSION['email']= mysqli_result($result, "email");
// 		echo "<centre>";
// 				echo "welcome to admin dashboard";


// 		echo "</centre>";

// 	}else{
// 		echo "Inset Correct password";
// 	}

// } 

// else{
// 		echo "Insert your correct email";
// 	}






 ?>