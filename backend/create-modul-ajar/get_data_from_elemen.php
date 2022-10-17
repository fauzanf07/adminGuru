<?php 
	include("../conn.php");

	$elemen = $_POST['elemen'];

	$sql = "SELECT * FROM capaian_pembelajaran WHERE `id_elemen` = '$elemen'" ;
	$result = mysqli_query($con,$sql);
	$cp = array();
	while($row = mysqli_fetch_array($result)) {
	  	$cp[] = $row;
	}
	$sql = "SELECT * FROM list_tp WHERE `id_elemen` = '$elemen'" ;
	$result = mysqli_query($con,$sql);
	$tp = array();
	while($row = mysqli_fetch_array($result)) {
	  	$tp[] = $row;
	}
	echo json_encode(array("statusCode"=>201, "cp"=>$cp,"tp"=>$tp));
 ?>