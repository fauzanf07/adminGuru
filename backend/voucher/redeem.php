<?php
    include("../conn.php");

    date_default_timezone_set('Asia/Jakarta');
    $now = date('Y-m-d');

    $code = mysqli_real_escape_string($con,$_POST['voucCode']);
    session_start();
    $email = $_SESSION['email'];

    $sql = "SELECT * FROM voucher_code WHERE code='$code'";
    $result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
    $r =mysqli_fetch_assoc($result);
    $idVouc = $r['id'];
    $expired = $r['expired'];
    $days = $r['days'];
    if($row>0){
        $sql = "SELECT * FROM pengguna_voucher WHERE email='$email' AND id_voucher='$idVouc'";
        $result = mysqli_query($con,$sql);
        $row1 = mysqli_num_rows($result);
        if($row1>0){
            echo json_encode(array('statusCode' => 205));
        }else{
            $voucExpired = strtotime($expired);
            if($now>$voucExpired){
                echo json_encode(array('statusCode' => 203));
            }else{
                $date = date('Y-m-d H:i:s');
                $expDate = date('Y-m-d', strtotime(' + '.$days.' days'));
                $sql = "INSERT INTO unlimited_subs VALUES('','$expDate','$now')";
                $result = mysqli_query($con,$sql);
                $last_id = mysqli_insert_id($con);
                if($result){
                    $sql = "INSERT INTO subscribe VALUES('','3',null,'$last_id','$date')";
                    $result = mysqli_query($con,$sql);
                    $last_id = mysqli_insert_id($con);
                    if($result){
                        $sql = "UPDATE table_user SET is_subscribe='1', id_subscribe='$last_id' WHERE email='$email'";
                        $result = mysqli_query($con,$sql);
                        if($result){
                            $_SESSION['is_subscribe'] = 1;
                            $sql = "INSERT INTO pengguna_voucher VALUES('','$email','$idVouc')";
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
                }else{
                    echo json_encode(array('statusCode' => 202));
                }
            }
        }
    }else{
        echo json_encode(array('statusCode' => 204));
    }
?>