<?php 
	include("../conn.php");

	$id = $_POST['id'];

	$sql = "SELECT * FROM file_preview_modul WHERE id_identitas = '$id'";
	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result) > 0){
		echo json_encode(array("statusCode"=>201) );
	}else{
		echo json_encode(array("statusCode"=>202) );
	}
?>