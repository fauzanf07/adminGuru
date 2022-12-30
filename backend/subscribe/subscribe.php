<?php
    include("../conn.php");

    $orderId = $_POST['orderId'];
    date_default_timezone_set('Asia/Jakarta');

    $date = date('Y-m-d H:i:s');

    $sql = "SELECT * FROM payment_history WHERE order_id = '$orderId'";
	$result = mysqli_query($con,$sql);
    $r = mysqli_fetch_assoc($result);
    $qty = $r['qty'];
    $email = $r['email'];

    $productName = $r['product_name'];
    if($productName == "AdminGuru Basic"){
        $sql = "INSERT INTO subs_basic VALUES('','$qty','$qty','$qty','$qty')";
        $result = mysqli_query($con,$sql);
        $last_id = mysqli_insert_id($con);
        if($result){
            $sql = "INSERT INTO subscribe VALUES('','1','$last_id','null','$date')";
            $result = mysqli_query($con,$sql);
            $last_id = mysqli_insert_id($con);
            if($result){
                $sql = "UPDATE table_user SET is_subscribe='1', id_subscribe='$last_id' WHERE email='$email'";
                $result = mysqli_query($con,$sql);
                if($result){
                    echo json_encode(array('statusCode' => 201));
                }else{
                    echo json_encode(array('statusCode' => 202));
                }
            }else{
                echo json_encode(array('statusCode' => 202));
            }
        }else{
            echo json_encode(array('statusCode' => 202));
        }
    }
?>