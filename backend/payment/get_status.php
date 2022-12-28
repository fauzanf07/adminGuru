<?php
   require_once '../../vendor/autoload.php';
   require_once '../api/call-api.php';

   $dotenv = Dotenv\Dotenv::createImmutable('../..');
	$dotenv->load();

    $serverKey = $_ENV['SERVER_KEY_MIDTRANS'];
    $serverKey = $serverKey.":";
    $serverKey = base64_encode($serverKey);
    $auth = "Basic ". $serverKey;
    $orderId = $_POST['order_id'];

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo 'This is not meant to be opened via browser / GET HTTP method. It is used to handle Midtrans HTTP POST notification / webhook.';
    }else{
        $get_data = callAPI('GET', 'https://api.sandbox.midtrans.com/v2/'.$orderId."/status", false,$auth);
        echo $get_data;
    }  
?>