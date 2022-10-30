<?php 
	include("../conn.php");

	$id = $_POST['id'];
	$sql = "SELECT id FROM kegiatan_pembelajaran WHERE id_identitas = '$id'";
	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$id_kegiatan = $r['id'];

	$sql = "DELETE FROM daftar_pustaka WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM glosarium WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM bahan_bacaan WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM lkpd WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM refleksi WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM pengayaan_remedial WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM ases_sum WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM ases_for WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM ases_kog WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM ases_non_kog WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM ases_sum WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM penutup WHERE id_kegiatan = '$id_kegiatan';";
	$sql .= "DELETE FROM inti WHERE id_kegiatan = '$id_kegiatan';";
	$sql .= "DELETE FROM pendahuluan WHERE id_kegiatan = '$id_kegiatan';";
	$sql .= "DELETE FROM kegiatan_pembelajaran WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM persiapan_pembelajaran WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM pertanyaan_pemantik WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM pemahaman_bermakna WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM tujuan_pembelajaran WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM model_pembelajaran WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM target_peserta_didik WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM sumber WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM media WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM profil_pancasila WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM kompetensi_awal WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM materi WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM file_modul WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM file_preview_modul WHERE id_identitas = '$id';";
	$sql .= "DELETE FROM identitas_sekolah WHERE id = '$id';";


	$result = mysqli_multi_query($con,$sql);
	if($result){
		echo json_encode(array('statusCode' => 201));
	}else{
		echo json_encode(array('statusCode' => 202));
	}
 ?>