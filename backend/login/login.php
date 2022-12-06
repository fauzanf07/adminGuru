<?php 
	include("../conn.php");

	$txtUsername = mysqli_real_escape_string($_POST['username']);
	$txtPassword = mysqli_real_escape_string($_POST['password']);

	$sql = "SELECT * FROM table_user WHERE `email` = '$txtUsername' " ;
	$result = mysqli_query($con,$sql);
	$pass = "";

	if (mysqli_num_rows($result) > 0) {
	  while($row = mysqli_fetch_array($result)) {
	  	$pass = $row["password"];
	  	session_start();
	  	if(password_verify($txtPassword, $pass)){
		  	echo json_encode(array("statusCode"=>201));
		  	$_SESSION['nip'] = $row["nip"];
		  	$_SESSION['nama'] = $row["nama"];
		  	$_SESSION['email'] = $row["email"];
		  	$_SESSION['jabatan'] = $row["jabatan"];
		  	$_SESSION['sekolah'] = $row["sekolah"];
		  	$_SESSION['mapel'] = $row["mapel"];
		  	$_SESSION['profile_img'] = $row["profile_img"];
		}
		else{
		  	echo json_encode(array("statusCode"=>202));
		}
	  	
	  }
	  
	}else{
		echo json_encode(array("statusCode"=>202));
	}

?>