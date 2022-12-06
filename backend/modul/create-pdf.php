<?php
require_once '../../vendor/autoload.php';
include("../conn.php");
use \ConvertApi\ConvertApi;
$dotenv = Dotenv\Dotenv::createImmutable('../..');
$dotenv->load();

$id =  $_POST['id'];

$sql = "SELECT * FROM file_modul WHERE id_identitas = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$file_name = $r['nama_file'];

$sql = "SELECT * FROM file_preview_modul WHERE id_identitas = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$file_preview_modul = $r['nama_file'];

$apiSecret = $_ENV['API_SECRET_PDF'];

ConvertApi::setApiSecret($apiSecret);

$result = ConvertApi::convert('pdf', ['File' => '../../modul-ajar/'.$file_name.'.docx']);

$save = $result->getFile()->save('../../modul-ajar/'.$file_name.'.pdf');

if($save){
	$result = ConvertApi::convert('pdf', ['File' => '../../preview-modul/'.$file_preview_modul.'.docx']);

	$save = $result->getFile()->save('../../preview-modul/'.$file_preview_modul.'.pdf');

	if($save){
		echo json_encode(array("statusCode"=>201));
	}else{
		echo json_encode(array("statusCode"=>202));
	}
	
}else{
	echo json_encode(array("statusCode"=>202));
}
?>