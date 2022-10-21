<?php 	
	include("../conn.php");

	$modulAjar = $_POST['modulAjar'];

	$objModul = json_decode($modulAjar);

	date_default_timezone_set('Asia/Jakarta');


	session_start();
	$nama = $_SESSION['nama'];
	$error = array();
	$jmlSuccess = 0;

	$sql = "SELECT id FROM table_user WHERE nama = '$nama'";
	$result = mysqli_query($con, $sql);
	if ($result) {
		$jmlSuccess++;
	}else{
		$error[] = "tabel user";
	}

	$r = mysqli_fetch_assoc($result);
	$id_user = $r['id'];

	$kepalaSekolah = $objModul->kepala_sekolah;
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
	$sql = "INSERT INTO identitas_sekolah VALUES('','$id_user','$kepalaSekolah', '$tahunAjar', '$programKeahlian', '$mapel', '$kelas','$semester', '$fase', '$elemen','$cp','$alokasiW','$date','$date')";
	$result = mysqli_query($con, $sql);
	if($result){
		$last_id = mysqli_insert_id($con);
		$jmlSuccess++;
	}else{
		$error[] = "identitas_sekolah";
	}


	

	$jmlMateri = count($objModul->materi);
	for($i=0;$i<$jmlMateri;$i++){
		$materi = $objModul->materi[$i];
		$sql = "INSERT INTO materi VALUES('','$last_id', '$materi')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "materi";
		}
	}


	$jmlKa = count($objModul->ka);
	for($i=0;$i<$jmlKa;$i++){
		$ka = $objModul->ka[$i];
		$sql = "INSERT INTO kompetensi_awal VALUES('','$last_id', '$ka')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "kompetensi_awal";
		}
	}

	$jmlPp = count($objModul->pp);
	for($i=0;$i<$jmlPp;$i++){
		$pp = $objModul->pp[$i];
		$sql = "INSERT INTO profil_pancasila VALUES('','$last_id', '$pp')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "profil_pancasila";
		}
	}
	
	$jmlMedia = count($objModul->media);
	for($i=0;$i<$jmlMedia;$i++){
		$media = $objModul->media[$i];
		$sql = "INSERT INTO media VALUES('','$last_id', '$media')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "media";
		}
	}

	$jmlSumber = count($objModul->sumber);
	for($i=0;$i<$jmlSumber;$i++){
		$sumber = $objModul->sumber[$i];
		$sql = "INSERT INTO sumber VALUES('','$last_id', '$sumber')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "sumber";
		}
	}


	$target = $objModul->target;
	$sql = "INSERT INTO target_peserta_didik VALUES('','$last_id','$target')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}else{
			$error[] = "target";
	}


	$model = $objModul->model;
	$sql = "INSERT INTO model_pembelajaran VALUES('','$last_id','$model')";
	$result = mysqli_query($con, $sql);
	if($result){
		$jmlSuccess++;
	}else{
			$error[] = "model";
	}


	$jmlTp = count($objModul->tp);
	for($i=0;$i<$jmlTp;$i++){
		$tp = $objModul->tp[$i];
		$sql = "INSERT INTO tujuan_pembelajaran VALUES('','$last_id', '$tp')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "tujuan";
		}
	}


	$jmlPb = count($objModul->pb);
	for($i=0;$i<$jmlPb;$i++){
		$pb = $objModul->pb[$i];
		$sql = "INSERT INTO pemahaman_bermakna VALUES('','$last_id', '$pb')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "pemahaman_bermakna";
		}
	}

	$jmlPerpem = count($objModul->perpem);
	for($i=0;$i<$jmlPerpem;$i++){
		$perpem = $objModul->perpem[$i];
		$sql = "INSERT INTO pertanyaan_pemantik VALUES('','$last_id', '$perpem')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "pertanyaan_pemantik";
		}
	}

	$jmlPerpemb = count($objModul->perpemb);
	for($i=0;$i<$jmlPerpemb;$i++){
		$perpemb = $objModul->perpemb[$i];
		$sql = "INSERT INTO persiapan_pembelajaran VALUES('','$last_id', '$perpemb')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "persiapan_pembelajaran";
		}
	}


	$sql = "INSERT INTO kegiatan_pembelajaran VALUES('','$last_id','1')";
	$result = mysqli_query($con, $sql);
	if($result){
		$last_id_keg = mysqli_insert_id($con);
		$jmlSuccess++;
	}else{
			$error[] = "kegiatan_pembelajaran";
	}


	$jmlPend = count($objModul->pend);
	for($i=0;$i<$jmlPend;$i++){
		$pend = $objModul->pend[$i];
		$sql = "INSERT INTO pendahuluan VALUES('','$last_id_keg', '$pend')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "pendahuluan";
		}
	}

	$jmlInti = count($objModul->inti);
	for($i=0;$i<$jmlInti;$i++){
		$inti = $objModul->inti[$i];
		$sql = "INSERT INTO inti VALUES('','$last_id_keg', '$inti')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "inti";
		}
	}



	$jmlPenutup = count($objModul->penutup);
	for($i=0;$i<$jmlPenutup;$i++){
		$penutup = $objModul->penutup[$i];
		$sql = "INSERT INTO penutup VALUES('','$last_id_keg', '$penutup')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "penutup";
		}
	}


	$jmlAsesNon = count($objModul->asesNon);
	for($i=0;$i<$jmlAsesNon;$i++){
		$asesNon = $objModul->asesNon[$i];
		$sql = "INSERT INTO ases_non_kog VALUES('','$last_id', '$asesNon')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "ases_non_kog";
		}
	}

	$jmlAsesKog = count($objModul->asesKog);
	for($i=0;$i<$jmlAsesKog;$i++){
		$asesKog = $objModul->asesKog[$i];
		$sql = "INSERT INTO ases_kog VALUES('','$last_id', '$asesKog')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "ases_kog";
		}
	}


	$jmlAsesFor = count($objModul->asesFor);
	for($i=0;$i<$jmlAsesFor;$i++){
		$asesFor = $objModul->asesFor[$i];
		$sql = "INSERT INTO ases_for VALUES('','$last_id', '$asesFor')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "ases_for";
		}
	}


	$jmlAsesSum = count($objModul->asesSum);
	for($i=0;$i<$jmlAsesSum;$i++){
		$asesSum = $objModul->asesSum[$i];
		$sql = "INSERT INTO ases_sum VALUES('','$last_id', '$asesSum')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "ases_sum";
		}
	}


	$jmlPenmed = count($objModul->penmed);
	for($i=0;$i<$jmlPenmed;$i++){
		$penmed = $objModul->penmed[$i];
		$sql = "INSERT INTO pengayaan_remedial VALUES('','$last_id', '$penmed')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "pengayaan_remedial";
		}
	}


	$jmlRefleksi = count($objModul->refleksi);
	for($i=0;$i<$jmlRefleksi;$i++){
		$refleksi = $objModul->refleksi[$i];
		$sql = "INSERT INTO refleksi VALUES('','$last_id', '$refleksi')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "refleksi";
		}
	}

	$jmlBahanBaca = count($objModul->bahanBaca);
	for($i=0;$i<$jmlBahanBaca;$i++){
		$bahanBaca = $objModul->bahanBaca[$i];
		$sql = "INSERT INTO bahan_bacaan VALUES('','$last_id', '$bahanBaca')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "bahan_bacaan";
		}
	}

	$jmlGlos = count($objModul->glos);
	for($i=0;$i<$jmlGlos;$i++){
		$glos = $objModul->glos[$i];
		$sql = "INSERT INTO glosarium VALUES('','$last_id', '$glos')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "glosarium";
		}
	}

	$jmlDafpus = count($objModul->dafpus);
	for($i=0;$i<$jmlDafpus;$i++){
		$dafpus = $objModul->dafpus[$i];
		$sql = "INSERT INTO daftar_pustaka VALUES('','$last_id', '$dafpus')";
		$result = mysqli_query($con, $sql);
		if ($result) {
			$jmlSuccess++;
		}else{
			$error[] = "daftar_pustaka";
		}
	}
	

	if(count($error) == 0){
		echo json_encode(array("statusCode"=>201, "last_id"=>$last_id));
	}else{
		echo json_encode(array("statusCode"=>202, "error"=>$error));
	}

 ?>