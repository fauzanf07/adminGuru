<?php
require_once '../../vendor/autoload.php';
include("../conn.php");
use \ConvertApi\ConvertApi;

$id =  $_POST['id'];

$sql = "SELECT * FROM file_modul WHERE id_identitas = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$file_name = $r['nama_file'];

ConvertApi::setApiSecret('pITrXqBuOGG1DZ16');

$result = ConvertApi::convert('pdf', ['File' => '../../modul-ajar/'.$file_name.'.docx']);

$save = $result->getFile()->save('../../modul-ajar/'.$file_name.'.pdf');

if($save){
	echo json_encode(array("statusCode"=>201));
}else{
	echo json_encode(array("statusCode"=>202));
}
?>