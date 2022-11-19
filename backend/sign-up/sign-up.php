<?php 
	include("../conn.php");

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$confPass = $_POST['confPass'];
	$query = "SELECT * FROM table_user WHERE email='$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row>0){
		echo json_encode(array('statusCode' => 203));
	}else{
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO table_user VALUES('','','','$email', '','','','','$pass', 'avatar.jpg')";
		$result = mysqli_query($con,$query);
		if($result){
			echo json_encode(array('statusCode' => 201));
		}else{
			echo json_encode(array('statusCode' => 202));
		}
	}

?>