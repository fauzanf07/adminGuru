<?php
    $whitelist = array(
        '127.0.0.1',
        '::1'
    );

    if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
        $mainUrl = "https://localhost/adminguru/"; 
    }else{
        if($_SERVER['SERVER_NAME'] == "adminguru.id"){
            $mainUrl = "https://adminguru.id/"; 
        }else{
            $mainUrl = "https://app.stg.adminguru.id/"; 
        }
        
    }
?>