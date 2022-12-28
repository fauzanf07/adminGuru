<?php
	include("../conn.php");
	require_once '../../vendor/autoload.php';
	require_once '../../config-google-api.php';

	use \Mailjet\Resources;

	$dotenv = Dotenv\Dotenv::createImmutable('../..');
	$dotenv->load();

	$apikey = $_ENV['API_KEY_MAIL'];
	$apisecret = $_ENV['API_SECRET_MAIL'];

	session_start();

	if (isset($_GET['code'])) {
		$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
		$client->setAccessToken($token['access_token']);
		$_SESSION['access_token'] = $token['access_token'];
		  
		// get profile info
		$google_oauth = new Google_Service_Oauth2($client);
		$google_account_info = $google_oauth->userinfo->get();
		$email = $google_account_info['email'];
		$fullname = $google_account_info['name'];

		$sql = "SELECT * FROM table_user WHERE email ='$email'";
  		$result = mysqli_query($con, $sql);
  		if (mysqli_num_rows($result) > 0) {
  			$row = mysqli_fetch_assoc($result);
  			$_SESSION['nip'] = $row["nip"];
		  	$_SESSION['nama'] = $row["nama"];
		  	$_SESSION['email'] = $row["email"];
		  	$_SESSION['jabatan'] = $row["jabatan"];
		  	$_SESSION['sekolah'] = $row["sekolah"];
		  	$_SESSION['mapel'] = $row["mapel"];
		  	$_SESSION['profile_img'] = $row["profile_img"];
		  	$client->revokeToken($_SESSION['access_token']);
    		unset($_SESSION['access_token']);  
		  	header("Location: ../../create-modul-ajar");
  		}else{
  			$sql = "INSERT INTO table_user VALUES('','','$fullname','$email', '','','','','', 'avatar.jpg','0','3','0')";
  			$result = mysqli_query($con,$sql);
			if($result){
				$sql = "SELECT * FROM table_user WHERE email ='$email'";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_assoc($result);
				$_SESSION['nip'] = $row["nip"];
			  	$_SESSION['nama'] = $row["nama"];
			  	$_SESSION['email'] = $row["email"];
			  	$_SESSION['jabatan'] = $row["jabatan"];
			  	$_SESSION['sekolah'] = $row["sekolah"];
			  	$_SESSION['mapel'] = $row["mapel"];
			  	$_SESSION['profile_img'] = $row["profile_img"];
			  	$client->revokeToken($_SESSION['access_token']);
    			unset($_SESSION['access_token']);  
				$mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);
				$body = [
					'Messages' => [
						[
							'From' => [
							'Email' => "halo@adminguru.id",
							'Name' => "Admin Guru"
							],
							'To' => [
							[
								'Email' => $email
							]
							],
							'TemplateID' => 4412998,
							'TemplateLanguage' => true,
							'Subject' => "Welcome to Admin Guru",
						]
					]
				];
				$response = $mj->post(Resources::$Email, ['body' => $body]);
				header("Location: ../../create-modul-ajar");
			}else{
				echo "There's something wrong with server";
			}
  		}
	} 
 ?>