<?php 
	include("../backend/conn.php");
	$id_identitas =  $_GET['id'];
	$ext = $_GET['ext'];
	$sql = "SELECT * FROM file_modul WHERE id_identitas = '$id_identitas'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	$filename = $r['nama_file'];

	$dir="../modul-ajar/";
	
	$file_path=$dir.$filename.".".$ext;
	$ctype="application/octet-stream";

	if(!empty($file_path) && file_exists($file_path)){ /*check keberadaan file*/
		header("Pragma:public");
		header("Expired:0");
		header("Cache-Control:must-revalidate");
		header("Content-Control:public");
		header("Content-Description: File Transfer");
		header("Content-Type: $ctype");
		header("Content-Disposition:attachment; filename=\"".basename($file_path)."\"");
		header("Content-Transfer-Encoding:binary");
		header("Content-Length:".filesize($file_path));
		flush();
		readfile($file_path);
		exit();
	 }else{
		echo "The File does not exist.";
	 }

 ?>