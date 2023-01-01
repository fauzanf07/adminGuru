<?php
    include("../conn.php");
    session_start();

    $id =  $_POST['id'];

    $ext = $_POST['ext'];
    $email=$_SESSION['email'];

    $sql = "SELECT * FROM table_user as a LEFT JOIN subscribe as b ON a.id_subscribe = b.id WHERE a.email ='$email'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
    $id_paket_basic = $r['id_paket_basic'];
    $sql = "SELECT * FROM subs_basic WHERE id='$id_paket_basic'";
    $result = mysqli_query($con, $sql);
    $r = mysqli_fetch_assoc($result);
    $update = 0;
    $is_reached = 0;
    $is_download = 0;

    
    if($ext=="docx"){
        $download = $r['download_docx'];
        $limit_download= $r['limit_download_docx'];
        if($download<$limit_download){
            $is_download = 1;
            $download += 1;
            
            $sql = "UPDATE subs_basic SET download_docx ='$download' WHERE id='$id_paket_basic'";
            $result = mysqli_query($con, $sql);
        }else{
            $is_reached = 1;
        }
    }else{
        $download = $r['download_pdf'];
        $limit_download= $r['limit_download_pdf'];
        if($download<$limit_download){
            $is_download = 1;
            $download += 1;
            
            $sql = "UPDATE subs_basic SET download_pdf ='$download' WHERE id='$id_paket_basic'";
            $result = mysqli_query($con, $sql);
        }else{
            $is_reached = 1;
        }
    }
    if($result){
        $sql = "SELECT * FROM subs_basic WHERE id='$id_paket_basic'";
        $result = mysqli_query($con, $sql);
        $r = mysqli_fetch_assoc($result);
        
        if($r['download_docx'] == $r['limit_download_docx'] && $r['download_pdf'] == $r['limit_download_pdf'] && $r['edit'] == $r['limit_edit'] && $r['hapus'] == $r['limit_hapus']){
            $sql = "UPDATE table_user SET is_subscribe='0',id_subscribe=NULL WHERE email='$email'";
            $res = mysqli_query($con, $sql);
            $_SESSION['is_subscribe']=0;
            $update = 1;
        }
        echo json_encode(array('statusCode' => 201, 'limit'=>$limit_download,'download'=>$download,'update'=>$update, 'is_reached'=>$is_reached,'is_download'=>$is_download));
    }else{
        echo json_encode(array('statusCode' => 202));
    }
?>