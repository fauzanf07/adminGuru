<?php 
	include("../conn.php");
	session_start();
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
		$sql = "SELECT * FROM table_user WHERE id ='$id'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nip'] = $row["nip"];
		$_SESSION['nama'] = $row["nama"];
		$_SESSION['email'] = $row["email"];
		$_SESSION['jabatan'] = $row["jabatan"];
		$_SESSION['sekolah'] = $row["sekolah"];
		$_SESSION['mapel'] = $row["mapel"];
		$_SESSION['profile_img'] = $row["profile_img"];
		echo json_encode(array('statusCode' => 201));
	}else{
		echo json_encode(array('statusCode' => 202));
	}
?>