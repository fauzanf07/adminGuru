<?php
    require_once '../../vendor/autoload.php';
    require_once '../api/call-api.php';
    include("../conn.php");

    $dotenv = Dotenv\Dotenv::createImmutable('../..');
	$dotenv->load();

    $serverKey = $_ENV['SERVER_KEY_MIDTRANS'];
    $serverKey = $serverKey.":";
    $serverKey = base64_encode($serverKey);
    $auth = "Basic ". $serverKey;
    $orderId = $_POST['order_id'];
    $id = $_POST['id'];

    $query = "SELECT * FROM payment_history WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $r = mysqli_fetch_assoc($result);

    $paymentDetails = array('product_name'=>$r['product_name'],'name'=>$r['name'],'email'=>$r['email'],'phone_no'=>$r['phone_no'],'city'=>$r['city'],'school_name'=>$r['school_name']);

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo 'This is not meant to be opened via browser / GET HTTP method. It is used to handle Midtrans HTTP POST notification / webhook.';
    }else{
        $get_data = callAPI('GET', 'https://api.sandbox.midtrans.com/v2/'.$orderId."/status", false,$auth);
        echo json_encode(array('status'=>json_decode($get_data),'pay_details'=>$paymentDetails));
    }  
?>