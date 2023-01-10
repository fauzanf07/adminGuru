<?php 	

require_once '../../vendor/autoload.php';

use \Mailjet\Resources;

$dotenv = Dotenv\Dotenv::createImmutable('../..');
$dotenv->load();

$apikey = $_ENV['API_KEY_MAIL'];
$apisecret = $_ENV['API_SECRET_MAIL'];

$email = $_POST['email'];

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
	        'TemplateID' => 4478531,
	        'TemplateLanguage' => true,
	        'Subject' => "Welcome to Admin Guru",
	    ]
	]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
echo json_encode(array('statusCode' => $response->getStatus(), 'reason', $response->getReasonPhrase()));
?>