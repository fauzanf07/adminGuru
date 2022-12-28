<?php 
	include("../conn.php");

	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pass = mysqli_real_escape_string($con,$_POST['pass']);
	$confPass = mysqli_real_escape_string($con,$_POST['confPass']);
	$query = "SELECT * FROM table_user WHERE email='$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row>0){
		echo json_encode(array('statusCode' => 203));
	}else{
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO table_user VALUES('','','','$email', '','','','','$pass', 'avatar.jpg','0','3','0')";
		$result = mysqli_query($con,$query);
		if($result){
			echo json_encode(array('statusCode' => 201));
		}else{
			echo json_encode(array('statusCode' => 202));
		}
	}

?>