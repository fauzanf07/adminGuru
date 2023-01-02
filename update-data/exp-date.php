<?php
    include("../backend/conn.php");
    $sql = "UPDATE table_user as a LEFT JOIN subscribe as b ON a.id_subscribe = b.id LEFT JOIN unlimited_subs c ON c.id = b.id_paket_unli SET is_subscribe='0', id_subscribe=null WHERE a.is_subscribe =1 AND c.created_at < CURRENT_DATE()";
    $result = mysqli_query($con, $sql);
?>