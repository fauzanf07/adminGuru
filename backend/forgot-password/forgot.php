<?php 
	include("../conn.php");
	require_once '../../vendor/autoload.php';

	use \Mailjet\Resources;
	
	$dotenv = Dotenv\Dotenv::createImmutable('../..');
	$dotenv->load();

	$apikey = $_ENV['API_KEY_MAIL'];
	$apisecret = $_ENV['API_SECRET_MAIL'];

	$email = mysqli_real_escape_string($con,$_POST['email']);
	$query = "SELECT * FROM table_user WHERE email='$email'";
	$result = mysqli_query($con,$query);
	$row = mysqli_num_rows($result);
	if($row>0){
		$uniqID = uniqid('',true);
		$query = "INSERT INTO reset_password VALUES('','$uniqID','$email')";
		$result = mysqli_query($con,$query);
		if($result){
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
						'TemplateID' => 4413407,
						'TemplateLanguage' => true,
						'Subject' => "Ubah kata sandi",
						'Variables' => json_decode('{"sess": "'.$uniqID.'"}', true)
					]
				]
			];
			$response = $mj->post(Resources::$Email, ['body' => $body]);
			echo json_encode(array('statusCode' => $response->getStatus(), 'reason', $response->getReasonPhrase()));
		}else{
			echo json_encode(array("statusCode"=>202));
		}
		
	}else{
		echo json_encode(array("statusCode"=>203));
	}
	

 ?>