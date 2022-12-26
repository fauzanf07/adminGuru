<?php
    include("../conn.php");

    session_start();
    $email = $_SESSION['email'];
    $query = "SELECT downloads_free FROM table_user WHERE email='$email'";
    $result = mysqli_query($con,$query);
    $r = mysqli_fetch_assoc($result);
    $downloads_free = $r['downloads_free'];
    $limit_free = $_SESSION['limit_free'];
    
    if($downloads_free<$limit_free){
        $downloads_free +=1;
        $_SESSION['downloads_free'] = $downloads_free;
        $query = "UPDATE table_user SET downloads_free='$downloads_free' WHERE email='$email'";
        $result = mysqli_query($con,$query);
        if($result){
            echo json_encode(array('statusCode' => 201,'downloads_free'=>$downloads_free,'limit_free'=>$limit_free));
        }else{
            echo json_encode(array('statusCode' => 202));
        }
    }
?>