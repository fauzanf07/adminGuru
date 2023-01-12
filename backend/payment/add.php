<?php
    include("../conn.php");

	$productName = mysqli_real_escape_string($con,$_POST['productName']);
    $qty = mysqli_real_escape_string($con,$_POST['qty']);
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $city = mysqli_real_escape_string($con,$_POST['city']);
    $schoolName = mysqli_real_escape_string($con,$_POST['schoolName']);
    $amount = 0;

    date_default_timezone_set('Asia/Jakarta');

    $date = date('Y-m-d H:i:s');

    if($productName == "AdminGuru Basic"){
        $amount = 15000;
    }else if($productName == "AdminGuru Individual"){
        $amount = 300000;
    }
    $sql = "SELECT * FROM payment_history WHERE email='$email' AND (pay_status='0' OR pay_status='1') AND is_deleted='0'";
	$result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);
    if($num>=1){
        echo json_encode(array('statusCode' => 203));
    }else{
        $sql = "SELECT * FROM table_user WHERE email='$email'";
	    $result = mysqli_query($con,$sql);
        $r = mysqli_fetch_assoc($result);
        if($r['is_subscribe']==1){
            echo json_encode(array('statusCode' => 204));
        }else{
            $order_id = rand();
            $sql = "INSERT INTO payment_history VALUES('','$order_id','$productName','$qty','$amount','$name','$email','$phone', '$city','$schoolName','0','','$date','0')";
            $result = mysqli_query($con,$sql);
            if($result){
                echo json_encode(array('statusCode' => 201));
            }else{
                echo json_encode(array('statusCode' => 202));
            }
        }
    }

    
?>