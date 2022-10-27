<?php 
	include("../conn.php");

	$namaLengkap = $_POST['namaLengkap'];
	$nip = $_POST['nip'];
	$sekolah = $_POST['sekolah'];
	$kepsek = $_POST['kepsek'];
	$jabatan = $_POST['jabatan'];
	$mapel = $_POST['mapel'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$query = "SELECT * FROM table_user WHERE username='$username'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row>0){
		echo json_encode(array('statusCode' => 203));
	}else{
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO table_user VALUES('','$nip','$namaLengkap','$username','$email', '$jabatan','$sekolah','$kepsek','$mapel','$pass')";
		$result = mysqli_query($con,$query);
		if($result){
			echo json_encode(array('statusCode' => 201));
		}else{
			echo json_encode(array('statusCode' => 202));
		}
	}

?>