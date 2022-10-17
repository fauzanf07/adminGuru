<?php 	
	include("../conn.php");

	$modulAjar = $_POST['modulAjar'];

	$objModul = json_decode($modulAjar);

	date_default_timezone_set('Asia/Jakarta');


	session_start();
	$nama = $_SESSION['nama'];
	$jmlSuccess = 0;

	$sql = "SELECT id FROM table_user WHERE nama = '$nama'";
	$result = mysqli_query($con, $sql);
	if ($result) {
		$jmlSuccess++;
	}

	$r = mysqli_fetch_assoc($result);
	$id_user = $r['id'];


	$tahunAjar = $objModul->tahunAjar;
	$programKeahlian = $objModul->programKeahlian;
	$mapel = $objModul->mapel;
	$kelas = $objModul->kelas;
	$semester = $objModul->semester;
	$fase = $objModul->fase;
	$mapel = $objModul->mapel;
	$elemen = $objModul->elemen;
	$cp = $objModul->cp;
	$alokasiW = $objModul->alokasiW;
	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO identitas_sekolah VALUES('','$id_user', '$tahunAjar', '$programKeahlian', '$mapel', '$kelas','$semester', '$fase', '$elemen','$cp','$alokasiW','$date','$date')";
	$result = mysqli_query($con, $sql);
	if($result){
		$last_id = mysqli_insert_id($con);
		$jmlSuccess++;
	}


	

	$jmlMateri = count($objModul->materi);
	for($i=0;$i<$jmlMateri;$i++){
		$materi = $objModul->materi[$i];
		$sql = "INSERT INTO materi VALUES('','$last_id', '$materi')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlKa = count($objModul->ka);
	for($i=0;$i<$jmlKa;$i++){
		$ka = $objModul->ka[$i];
		$sql = "INSERT INTO kompetensi_awal VALUES('','$last_id', '$ka')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlPp = count($objModul->pp);
	for($i=0;$i<$jmlPp;$i++){
		$pp = $objModul->pp[$i];
		$sql = "INSERT INTO profil_pancasila VALUES('','$last_id', '$pp')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}
	
	$jmlMedia = count($objModul->media);
	for($i=0;$i<$jmlMedia;$i++){
		$media = $objModul->media[$i];
		$sql = "INSERT INTO media VALUES('','$last_id', '$media')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlSumber = count($objModul->sumber);
	for($i=0;$i<$jmlSumber;$i++){
		$sumber = $objModul->sumber[$i];
		$sql = "INSERT INTO sumber VALUES('','$last_id', '$sumber')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$target = $objModul->target;
	$sql = "INSERT INTO target_peserta_didik VALUES('','$last_id','$target')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}


	$model = $objModul->model;
	$sql = "INSERT INTO model_pembelajaran VALUES('','$last_id','$model')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}


	$jmlTp = count($objModul->tp);
	for($i=0;$i<$jmlTp;$i++){
		$tp = $objModul->tp[$i];
		$sql = "INSERT INTO tujuan_pembelajaran VALUES('','$last_id', '$tp')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlPb = count($objModul->pb);
	for($i=0;$i<$jmlPb;$i++){
		$pb = $objModul->pb[$i];
		$sql = "INSERT INTO pemahaman_bermakna VALUES('','$last_id', '$pb')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlPerpem = count($objModul->perpem);
	for($i=0;$i<$jmlPerpem;$i++){
		$perpem = $objModul->perpem[$i];
		$sql = "INSERT INTO pertanyaan_pemantik VALUES('','$last_id', '$perpem')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlPerpemb = count($objModul->perpemb);
	for($i=0;$i<$jmlPerpemb;$i++){
		$perpemb = $objModul->perpemb[$i];
		$sql = "INSERT INTO persiapan_pembelajaran VALUES('','$last_id', '$perpemb')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$sql = "INSERT INTO kegiatan_pembelajaran VALUES('','$last_id','1')";
	$result = mysqli_query($con, $sql);
	if($result){
		$last_id_keg = mysqli_insert_id($con);
		$jmlSuccess++;
	}


	$jmlPend = count($objModul->pend);
	for($i=0;$i<$jmlPend;$i++){
		$pend = $objModul->pend[$i];
		$sql = "INSERT INTO pendahuluan VALUES('','$last_id_keg', '$pend')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlInti = count($objModul->inti);
	for($i=0;$i<$jmlInti;$i++){
		$inti = $objModul->inti[$i];
		$sql = "INSERT INTO inti VALUES('','$last_id_keg', '$inti')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}



	$jmlPenutup = count($objModul->penutup);
	for($i=0;$i<$jmlPenutup;$i++){
		$penutup = $objModul->penutup[$i];
		$sql = "INSERT INTO penutup VALUES('','$last_id_keg', '$penutup')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlAsesNon = count($objModul->asesNon);
	for($i=0;$i<$jmlAsesNon;$i++){
		$asesNon = $objModul->asesNon[$i];
		$sql = "INSERT INTO ases_non_kog VALUES('','$last_id', '$asesNon')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}

	$jmlAsesKog = count($objModul->asesKog);
	for($i=0;$i<$jmlAsesKog;$i++){
		$asesKog = $objModul->asesKog[$i];
		$sql = "INSERT INTO ases_kog VALUES('','$last_id', '$asesKog')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlAsesFor = count($objModul->asesFor);
	for($i=0;$i<$jmlAsesFor;$i++){
		$asesFor = $objModul->asesFor[$i];
		$sql = "INSERT INTO ases_for VALUES('','$last_id', '$asesFor')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlAsesSum = count($objModul->asesSum);
	for($i=0;$i<$jmlAsesSum;$i++){
		$asesSum = $objModul->asesSum[$i];
		$sql = "INSERT INTO ases_sum VALUES('','$last_id', '$asesSum')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlPenmed = count($objModul->penmed);
	for($i=0;$i<$jmlPenmed;$i++){
		$penmed = $objModul->penmed[$i];
		$sql = "INSERT INTO pengayaan_remedial VALUES('','$last_id', '$penmed')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$jmlRefleksi = count($objModul->refleksi);
	for($i=0;$i<$jmlRefleksi;$i++){
		$refleksi = $objModul->refleksi[$i];
		$sql = "INSERT INTO refleksi VALUES('','$last_id', '$refleksi')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}
	}


	$lkpd = $objModul->lkpd;
	$sql = "INSERT INTO lkpd VALUES('','$last_id','$lkpd')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}

	$bahanBaca = $objModul->bahanBaca;
	$sql = "INSERT INTO bahan_bacaan VALUES('','$last_id','$bahanBaca')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}

	$glosarium = $objModul->glosarium;
	$sql = "INSERT INTO glosarium VALUES('','$last_id','$glosarium')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}

	$daftarPustaka = $objModul->daftarPustaka;
	$sql = "INSERT INTO daftar_pustaka VALUES('','$last_id','$daftarPustaka')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}

	$jmlQuery = 9+$jmlMateri+$jmlKa+$jmlPp+$jmlMedia+$jmlSumber+$jmlTp+$jmlPb+$jmlPerpem+$jmlPerpemb+$jmlPend+$jmlInti+$jmlPenutup+$jmlAsesNon+$jmlAsesKog+$jmlAsesFor+$jmlAsesSum+$jmlPenmed+$jmlRefleksi;
	

	if($jmlQuery == $jmlSuccess){
		echo json_encode(array("statusCode"=>201));
	}else{
		echo json_encode(array("statusCode"=>202));
	}

 ?>