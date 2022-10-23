<?php 
	include("../conn.php");

	$txtUsername = $_POST['username'];
	$txtPassword = $_POST['password'];

	$sql = "SELECT * FROM table_user WHERE `username` = '$txtUsername' OR `email` = '$txtUsername' " ;
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
		  	$_SESSION['username'] = $row["username"];
		  	$_SESSION['email'] = $row["email"];
		  	$_SESSION['jabatan'] = $row["jabatan"];
		  	$_SESSION['sekolah'] = $row["sekolah"];
		  	$_SESSION['mapel'] = $row["mapel"];
		  	
		}
		else{
		  	echo json_encode(array("statusCode"=>202));
		}
	  	
	  }
	  
	}else{
		echo json_encode(array("statusCode"=>202));
	}

?>