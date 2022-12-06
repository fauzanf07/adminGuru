<?php 
	include("../conn.php");

	$email = mysqli_real_escape_string($_POST['email']);
	$username = mysqli_real_escape_string($_POST['username']);
	$newPass = mysqli_real_escape_string(password_hash($_POST['newPass'], PASSWORD_DEFAULT));

	$query = "SELECT * FROM table_user WHERE username='$username' AND email='$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row>0){
		$query = "UPDATE table_user SET password = '$newPass'";
		$result = mysqli_query($con,$query);
		if($result){
			echo json_encode(array("statusCode"=>201));
		}else{
			echo json_encode(array("statusCode"=>202));
		}
	}else{
		echo json_encode(array("statusCode"=>203));
	}
	

 ?>