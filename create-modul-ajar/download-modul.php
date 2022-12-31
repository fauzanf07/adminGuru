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

	session_start();
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM table_user as a LEFT JOIN subscribe as b ON a.id_subscribe = b.id WHERE a.email ='$email'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	if($r['paket'] == 1){
		$id_paket_basic = $r['id_paket_basic'];
		$sql = "SELECT * FROM subs_basic WHERE id='$id_paket_basic'";
		$result = mysqli_query($con, $sql);
		$r = mysqli_fetch_assoc($result);
		if($ext=="docx" && $r['download_docx']>=$r['limit_download_docx']){
			header("Location: ../pricing");
		}else if($ext=="pdf" && $r['download_pdf']>=$r['limit_download_pdf']){
			header("Location: ../pricing");
		}else{
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
		}
	}

 ?>