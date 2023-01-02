<?php 
	include("../conn.php");
	

	$id = $_POST['id'];
	$update=true;

	$sql = "SELECT id FROM kegiatan_pembelajaran WHERE id_identitas = '$id'";
	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$id_kegiatan = $r['id'];
	$sql = "SELECT nama_file FROM file_modul WHERE id_identitas = '$id'";
	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$file_modul = $r['nama_file'];
	$sql = "SELECT nama_file FROM file_preview_modul WHERE id_identitas = '$id'";
	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$file_preview_modul = $r['nama_file'];
	$sql = "SELECT lkpd FROM lkpd WHERE id_identitas = '$id'";
	$result = mysqli_query($con,$sql);
	$r = mysqli_fetch_assoc($result);
	$lkpd = $r['lkpd'];

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
	if(!isset($_POST['edit'])){
		if(isset($_POST['paket'])){
			$paket = $_POST['paket'];
			include("../conn.php");
			session_start();
			$email = $_SESSION['email'];
			
			if($paket == 1){
				$sql = "SELECT * FROM table_user as a LEFT JOIN subscribe as b ON a.id_subscribe = b.id WHERE a.email ='$email'";
				$result_sub = mysqli_query($con, $sql);
				$r = mysqli_fetch_assoc($result_sub);

				$id_paket_basic = $r['id_paket_basic'];
				$sql = "SELECT * FROM subs_basic WHERE id='$id_paket_basic'";
				$result_basic = mysqli_query($con, $sql);
				$r = mysqli_fetch_assoc($result_basic);


				$hapus = $r['hapus'];
				$limit_hapus= $r['limit_hapus'];
				if($hapus<$limit_hapus){
					
					$hapus += 1;
					$sql = "UPDATE subs_basic SET hapus ='$hapus' WHERE id='$id_paket_basic'";
					$update = mysqli_query($con, $sql);
					if($update){
						$sql = "SELECT * FROM subs_basic WHERE id='$id_paket_basic'";
						$result = mysqli_query($con, $sql);
						$r = mysqli_fetch_assoc($result);
						if($r['download_docx'] == $r['limit_download_docx'] && $r['download_pdf'] == $r['limit_download_pdf'] && $r['edit'] == $r['limit_edit'] && $r['hapus'] == $r['limit_hapus']){
							$sql = "UPDATE table_user SET is_subscribe='0',id_subscribe=NULL WHERE email='$email'";
							$update = mysqli_query($con, $sql);
							$_SESSION['is_subscribe']=0;
						}
					}
				}
			}
		}
		$hapusLKPD = unlink("../../lkpd/".$lkpd);
	}else{
		$hapusLKPD=true;
		$update=true;
	}

	if($result && $hapusLKPD &&  $update && unlink("../../modul-ajar/".$file_modul.".docx") && unlink("../../modul-ajar/".$file_modul.".pdf")
	&& unlink("../../preview-modul/".$file_preview_modul.".docx") && unlink("../../preview-modul/".$file_preview_modul.".pdf")){
		echo json_encode(array('statusCode' => 201));
	}else{
		echo json_encode(array('statusCode' => 202));
	}
 ?>