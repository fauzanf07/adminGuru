<?php 
	include("../conn.php");

	$filename = $_FILES['file']['name'];
	$location = "../../lkpd/".$filename;

	$move = move_uploaded_file($_FILES['file']['tmp_name'], $location);
	
	if($move){
		echo json_encode(array('statusCode'=>201, 'fileName'=>$filename));
	}else{
		echo json_encode(array('statusCode'=>202));
	}
 ?>