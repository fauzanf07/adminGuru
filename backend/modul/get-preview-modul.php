<?php 
	include("../conn.php");

	$id = $_POST['id'];
	$sql = "SELECT * FROM file_preview_modul WHERE id_identitas = '$id'";

	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$nama_file = $r['nama_file'];

	if($result){
		echo json_encode(array('statusCode' => 201,'nama_file' => $nama_file));
	}else{
		echo json_encode(array('statusCode' => 202));
	}
?>
