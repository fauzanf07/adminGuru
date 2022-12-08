<?php
    include("../conn.php");

	$email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,password_hash($_POST['pass'], PASSWORD_DEFAULT));
	$query = "UPDATE table_user SET password='$pass' WHERE email='$email'";
	$result = mysqli_query($con,$query);
	if($result){
        $query = "SELECT * FROM reset_password WHERE email='$email'";
	    $result = mysqli_query($con,$query);
        $row=mysqli_num_rows($result);
        if($row>0){
            $query = "DELETE FROM reset_password WHERE email='$email'";
	        $result = mysqli_query($con,$query);
            if($result){
                echo json_encode(array("statusCode"=>201));
            }else{
                echo json_encode(array("statusCode"=>202));
            }
        }
	}else{
		echo json_encode(array("statusCode"=>202));
	}
?>