<?php 
	include("../conn.php");

	$id = $_POST['id'];
	$oldPass = $_POST['oldPass'];
	$newPass = $_POST['newPass'];

	$sql = "SELECT * FROM table_user WHERE `id` = '$id'" ;
	$result = mysqli_query($con,$sql);
	$pass = "";

	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_array($result)) {
		  	$pass = $row["password"];
		  	session_start();
		  	if(password_verify($oldPass, $pass)){
		  		$newPass = password_hash($newPass, PASSWORD_DEFAULT);

		  		$changeSql = "UPDATE table_user SET `password` = '$newPass' WHERE `id` = '$id'";
	            $rs = mysqli_query($con,$changeSql);
	            if($rs){
	               echo json_encode(array("statusCode"=>200));
	            }else{
	               echo json_encode(array("statusCode"=>201));
	            }
		  	}else{
		  		echo json_encode(array("statusCode"=>202));
		  	}
		}
	}else{
		echo json_encode(array('statusCode' => 203));
	}

 ?>