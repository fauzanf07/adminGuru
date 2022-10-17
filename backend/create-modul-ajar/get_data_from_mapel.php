<?php 
	include("../conn.php");

	$mapel = $_POST['mapel'];

	$sql = "SELECT * FROM elemen WHERE `id_mapel` = '$mapel'" ;
	$result = mysqli_query($con,$sql);
	$elemen = array();
	while($row = mysqli_fetch_array($result)) {
	  	$elemen[] = $row;
	}
	$sql = "SELECT * FROM list_materi WHERE `id_mapel` = '$mapel'" ;
	$result = mysqli_query($con,$sql);
	$materi = array();
	while($row = mysqli_fetch_array($result)) {
	  	$materi[] = $row;
	}
	echo json_encode(array("statusCode"=>201, "elemen"=>$elemen,"materi"=>$materi));
	  
 ?>