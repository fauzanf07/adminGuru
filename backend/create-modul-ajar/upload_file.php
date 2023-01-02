<?php 
	include("../conn.php");

	date_default_timezone_set('Asia/Jakarta');
	$createdAt = date('dmYHis');

	$filename = $createdAt."_".$_FILES['file']['name'];
	$location = "../../lkpd/".$filename;

	$move = move_uploaded_file($_FILES['file']['tmp_name'], $location);
	
	if($move){
		echo json_encode(array('statusCode'=>201, 'fileName'=>$filename));
	}else{
		echo json_encode(array('statusCode'=>202));
	}
 ?>