<?php
    include("../conn.php");

    $id = $_POST['id'];

    $query = "UPDATE payment_history SET is_deleted='1' WHERE id='$id'";
    $result = mysqli_query($con,$query);

    if($result){
        echo json_encode(array('statusCode' => 201));
    }else{
        echo json_encode(array('statusCode' => 202));
    }
?>