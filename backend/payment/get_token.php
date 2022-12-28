<?php
    require_once '../../vendor/autoload.php';
    include("../conn.php");

    $dotenv = Dotenv\Dotenv::createImmutable('../..');
	$dotenv->load();

    $serverKey = $_ENV['SERVER_KEY_MIDTRANS'];
    $clientKey = $_ENV['CLIENT_KEY_MIDTRANS'];
    $id = $_POST['id'];

    \Midtrans\Config::$serverKey = $serverKey;

    \Midtrans\Config::$isProduction = false;
    \Midtrans\Config::$isSanitized = true;
    \Midtrans\Config::$is3ds = true;

    $query = "SELECT * FROM payment_history WHERE id='$id'";
    $result = mysqli_query($con,$query);
    $r = mysqli_fetch_assoc($result);

    $idItem ='';

    $order_id = $r['order_id'];

    if($r['product_name'] == "AdminGuru Starter"){
        $idItem = 'a1';
    }else if($r['product_name'] == "AdminGuru Basic"){
        $idItem = 'a2';
    }else{
        $idItem = 'a3';
    }

    $parts = explode(" ", $r['name']);
    if(count($parts) > 1) {
        $lastname = array_pop($parts);
        $firstname = implode(" ", $parts);
    }
    else
    {
        $firstname = $name;
        $lastname = " ";
    }

    $item_details = array(
        'id' => $idItem,
        'price' => $r['amount'],
        'quantity' => 1,
        'name' => $r['product_name']
    );

     
    $params = array(
        'transaction_details' => array(
            'order_id' => $order_id,
            'gross_amount' => $r['amount'],
        ),
        'customer_details' => array(
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $r['email'],
            'phone' => $r['phone_no'],
        ),
        'item_details' => array($item_details),
    );
     
    $snapToken='';
    
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        echo 'This is not meant to be opened via browser / GET HTTP method. It is used to handle Midtrans HTTP POST notification / webhook.';
    }else{
        try {
            if(empty($r['token'])){
                $snapToken = \Midtrans\Snap::getSnapToken($params);
                $query = "UPDATE payment_history SET token='$snapToken' WHERE id='$id'";
                $result = mysqli_query($con,$query);
            }else{
                $snapToken = $r['token'];
            }
            echo json_encode(array('statusCode' => 201,'token'=>$snapToken));
        }
        catch (\Exception $e) {
            echo $e->getMessage();
        }
        
    }  
?>