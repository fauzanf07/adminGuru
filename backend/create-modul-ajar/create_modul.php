<?php 	
	include("../conn.php");

	$modulAjar = $_POST['modulAjar'];

	$objModul = json_decode($modulAjar);

	var_dump($objModul)

 ?>