<?php 
	include("../conn.php");

	$id = $_POST['id'];
	$namaLengkap = $_POST['namaLengkap'];
	$nip = $_POST['nip'];
	$sekolah = $_POST['sekolah'];
	$kepsek = $_POST['kepsek'];
	$jabatan = $_POST['jabatan'];
	$mapel = $_POST['mapel'];
	$email = $_POST['email'];
	$query = "UPDATE table_user SET nama='$namaLengkap', nip = '$nip', sekolah='$sekolah', kepala_sekolah='$kepsek', jabatan='$jabatan', mapel='$mapel', email='$email' WHERE id='$id'";
	$result = mysqli_query($con,$query);
	if($result){
		echo json_encode(array('statusCode' => 201));
	}else{
		echo json_encode(array('statusCode' => 202));
	}
?>