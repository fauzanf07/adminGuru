<?php 
	include("../conn.php");

	$email = $_POST['email'];
	$username = $_POST['username'];
	$newPass = base64_encode($_POST['newPass']);

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