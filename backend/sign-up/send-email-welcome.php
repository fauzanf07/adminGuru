<?php 	

require_once '../../vendor/autoload.php';

use \Mailjet\Resources;

$apikey = '80dc46415a9e93fbd2b3d816ab5d6af9';
$apisecret = 'e8a4f891a2646df9876abf251f2f7b72';

$email = $_POST['email'];
$nama = $_POST['nama'];

$mj = new \Mailjet\Client($apikey, $apisecret,true,['version' => 'v3.1']);
$body = [
	'Messages' => [
	    [
	        'From' => [
	          'Email' => "adminguru@adminguru.id",
	          'Name' => "Admin Guru"
	    	],
	        'To' => [
	          [
	            'Email' => $email,
	            'Name' => $nama
	          ]
	    	],
	        'TemplateID' => 4335494,
	        'TemplateLanguage' => true,
	        'Subject' => "Welcome to Admin Guru",
	    ]
	]
];
$response = $mj->post(Resources::$Email, ['body' => $body]);
echo json_encode(array('statusCode' => $response->getStatus(), 'reason', $response->getReasonPhrase()));
?>