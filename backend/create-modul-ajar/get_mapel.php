<?php 
	include("../conn.php");

	$prokel = $_POST['prokel'];

	$sql = "SELECT * FROM mata_pelajaran WHERE `id_pk` = '$prokel' OR `umum` = 1" ;
	$result = mysqli_query($con,$sql);
	$rows = array();

	if (mysqli_num_rows($result) > 0) {
	 	while($row = mysqli_fetch_array($result)) {
	  		$rows[] = $row;
		}
	  	echo json_encode(array("statusCode"=>201, "rows"=>$rows));
	  
	}else{
		echo json_encode(array("statusCode"=>202));
	}
 ?>