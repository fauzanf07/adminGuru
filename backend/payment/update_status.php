<?php
    include("../conn.php");

    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = "UPDATE payment_history SET pay_status='$status' WHERE id='$id'";
    $result = mysqli_query($con,$query);

    if($result){
        echo json_encode(array('statusCode' => 201));
    }else{
        echo json_encode(array('statusCode' => 202));
    }
?>
