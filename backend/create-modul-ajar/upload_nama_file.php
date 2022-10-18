<?php 
	include("../conn.php");

	$last_id = $_POST['last_id'];
	$filename = $_POST['fileName'];
	$sql = "INSERT INTO lkpd VALUES('','$last_id', '$filename')";
	$result = mysqli_query($con, $sql);
	if ($result) {
		echo json_encode(array('statusCode'=>201));
	}else{
		echo json_encode(array('statusCode'=>202));
	}
 ?>