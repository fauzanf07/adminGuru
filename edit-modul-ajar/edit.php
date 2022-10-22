<?php 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: http://localhost/adminGuru/login");
	}
	include("../backend/conn.php");

	$id_identitas = $_GET['id_identitas'];

	$sql = "SELECT * FROM identitas_sekolah WHERE id = '$id_identitas'";
	$result = mysqli_query($con, $sql);
	$idSekolah = mysqli_fetch_assoc($result);
	$id_user = $idSekolah['id_user'];

	$sql = "SELECT * FROM table_user WHERE id = '$id_user'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);

	$sql = "SELECT * FROM kegiatan_pembelajaran WHERE id_identitas = '$id_identitas'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	$idKegiatan = $r['id'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembuatan Modul Ajar</title>
	<link rel="stylesheet" type="text/css" href="../style/edit-modul-ajar/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
      integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
</head>
<body>
	<div class="wrapper">
		<div class="nav-parent">
			<nav class="navbar navbar-expand-lg sticky-top navbar-light">
				<div class="pink-on-top"></div>
				<div class="container-fluid">
					<div class="logo-parent">
						<div class="logo">
							<img class="logo-icon" src="../images/logo-removebg-preview.png" alt="logo">
						</div>
					</div>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav mb-2 mb-lg-0">
					        <li class="nav-text" >
					          <a class="nav-link" aria-current="page" href="blog">Blog</a>
					        </li>
					        <li class="nav-text">
					          <a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a>
					        </li>
					        <li class="nav-icon">
					          <a class="nav-link" href="#"><i class="bi bi-facebook"></i></a>
					        </li>
					        <li class="nav-icon">
					          <a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
					        </li>
					        <li class="nav-icon">
					          <a class="nav-link" href="#"><i class="bi bi-youtube"></i></a>
					        </li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="container">
			<div class="row row-profile">
				<div class="col-lg-3">
					<center><img src="../images/avatar.jpg" class="profile-pic" id="profile-pic"></center>
					<h3 class="profile-name"><?php echo $_SESSION['nama']; ?></h3>
					<span class="username">@<?php echo $_SESSION['username']; ?></span>
					<div class="info">
						<span class="info-item"><i class="bi bi-card-heading"></i>&nbsp;&nbsp;  <?php echo $_SESSION['nip']; ?></span>
						<span class="info-item"><i class="bi bi-building"></i>&nbsp;&nbsp; <?php echo $_SESSION['sekolah']; ?></span>
						<span class="info-item"><i class="bi bi-briefcase"></i>&nbsp;&nbsp; <?php echo $_SESSION['jabatan']; ?></span>
						<span class="info-item"><i class="bi bi-envelope"></i>&nbsp;&nbsp; <?php echo $_SESSION['email']; ?></span>
						<span class="info-item"><i class="bi bi-person"></i>&nbsp;&nbsp; <?php echo $_SESSION['mapel']; ?></span>
					</div>
				</div>
				<div class="col-lg-9 nav-info-user">
					<nav>
					  <div class="nav nav-tabs" id="nav-tab" role="tablist">
					    <button class="nav-link active" id="nav-feed-tab" data-bs-toggle="tab" data-bs-target="#nav-feed" type="button" role="tab" aria-controls="nav-feed" aria-selected="true"><i class="bi bi-chat-square-text-fill"></i>&nbsp;&nbsp;Edit Modul Ajar</button>
					  </div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-feed" role="tabpanel" aria-labelledby="nav-feed-tab" tabindex="0">
							<div class="create-modul" id="formBuatModul">
								<center><h3 class="title">Buat Modul Ajar</h3></center>
								<br/>
								<div id="carouselExampleControls" class="carousel slide" data-interval="false">
									<div class="carousel-inner">
										<form method="POST" enctype="multipart/form-data" id="formModul">
									    	<div class="carousel-item active">
									      		<h5>A. IDENTITAS SEKOLAH (INFORMASI UMUM)</h5>
									      		<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Nama Penyusun</span>
												  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $user['nama'] ?>" disabled="disabled" id="namaPenyusun" required>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Satuan Pendidikan</span>
												  <input type="text" class="form-control" placeholder="Satuan Pendidikan" value="<?php echo $user['sekolah']; ?>" disabled="disabled" id="satuanPend" required>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Kepala Sekolah</span>
												  <input type="text" class="form-control" placeholder="Kepala Sekolah" id="kepala_sekolah" value="<?php echo $idSekolah['kepala_sekolah']; ?>" required>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Tahun Ajaran</span>
												  <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Username" aria-describedby="basic-addon1" list="tahunajar-options" id="tahunAjar" value="<?php echo $idSekolah['tahun_ajaran']; ?>" required>
												    <datalist id="tahunajar-options">
														<option value="2020/2021">2020/2021</option>
														<option value="2021/2022">2021/2022</option>
														<option value="2022/2023">2022/2023</option>
													</datalist>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Program Keahlian</label>
													<select class="form-select" id="programKeahlian" required>
													    <option value="" selected>Choose...</option>
													    <?php
													    	$query = "SELECT * FROM program_keahlian";
													    	$result = mysqli_query($con,$query);
													    	while($r = mysqli_fetch_assoc($result)) {
													    		if($idSekolah['program_keahlian'] == $r['program_keahlian']){
													    			echo '<option value="'.$r["id"].'" class="option-prokel" selected>'.$r["program_keahlian"].'</option>';
													    		}else{
													    			echo '<option value="'.$r["id"].'" class="option-prokel">'.$r["program_keahlian"].'</option>';
													    		}
															}
													    ?>
													</select>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Mata Pelajaran</label>
													<select class="form-select" id="mapel" required>
															<option>Choose...</option>
															<?php 
																$programKeahlian = $idSekolah['program_keahlian'];
																$query = "SELECT id FROM program_keahlian WHERE program_keahlian ='$programKeahlian'";
																$result = mysqli_query($con, $query);
																$r = mysqli_fetch_assoc($result);
																$id_pk = $r['id'];

																$query = "SELECT * FROM mata_pelajaran WHERE id_pk = '$id_pk'";
																$result = mysqli_query($con, $query);
																while($r = mysqli_fetch_assoc($result)){
																	if($r['mata_pelajaran'] == $idSekolah['mata_pelajaran']){
																		echo '<option value="'.$r['id'].'" class="option-mapel" selected>'.$r['mata_pelajaran'].'</option>';
																		$idMapel = $r['id'];
																	}else{
																		echo '<option value="'.$r['id'].'" class="option-mapel">'.$r['mata_pelajaran'].'</option>';
																	}
																	
																}

															?>
													</select>
												</div>
												<div class="input-group mb-3">
												  <span class="input-group-text">Kelas, Semester, dan Fase</span>
												  	<select class="form-select" id="kelas" required>
													    <option selected>Choose...</option>
													    <option value="x" <?php if($idSekolah['kelas'] == 'X') echo "selected"; ?>>X</option>
													    <option value="xi" <?php if($idSekolah['kelas'] == 'XI') echo "selected"; ?>>XI</option>
													    <option value="xii" <?php if($idSekolah['kelas'] == 'XII') echo "selected"; ?>>XII</option>
													</select>
												  	<select class="form-select" id="semester" required>
													    <option selected>Choose...</option>
													    <option value="1" <?php if($idSekolah['semester'] == 1) echo "selected"; ?>>1</option>
													    <option value="2" <?php if($idSekolah['semester'] == 2) echo "selected"; ?>>2</option>
													</select>
													<input type="text" class="form-control" placeholder="Fase" aria-label="Username" aria-describedby="basic-addon1" id="fase" value="<?php echo $idSekolah['fase']; ?>" disabled="disabled" >
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Elemen</span>
														<select class="form-select" id="elemen" required>
															<option selected>Choose...</option>
															<?php

																$query = "SELECT * FROM elemen WHERE id_mapel = '$idMapel'";
																$result = mysqli_query($con, $query);
																while($r = mysqli_fetch_assoc($result)){
																	if($r['elemen'] == $idSekolah['elemen']){
																		echo '<option value="'.$r['id'].'" class="option-elemen" selected>'.$r['elemen'].'</option>';
																		$idElemen = $r['id'];
																	}else{
																		echo '<option value="'.$r['id'].'" class="option-elemen">'.$r['elemen'].'</option>';
																	}
																	
																}

															?>
														</select>
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Capaian Pembelajaran</span>
														<textarea class="form-control" id="cp" name="cp" disabled="disabled" rows="6" required>
															<?php echo $idSekolah['capaian_pembelajaran']; ?>
														</textarea>
												</div>
												<div class="multiple-inputs" id="multipleInputs">
														<span>Meteri : </span>
														<div class="list-input mt-3">
															<div id="inputs-materi">
																<?php 
																	$query = "SELECT * FROM materi WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-materi" id="inputMATERI'.$i.'"><span class="input-group-text" id="addon-wrapping-materi'.$i.'">'.$i.'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="materi'.$i.'" id="inputMateri'.$i.'" value="'.$r['materi'].'" disabled><button class="btn btn-danger" id="button-addon2-materi'.$i.'"  type="button" data-materi="'.$i.'" onclick="hapusMATERI(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-materi">Tidak ada materi</div>';
																	}
																?>
																
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="materi-options" id="materi-input" placeholder="Materi belajar" required>
														  	<datalist id="materi-options">
															</datalist>
															<button class="btn btn-success" type="button" onclick="addMateri();">+</button>
														</div>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Alokasi Waktu</span>
												  <input type="text" class="form-control" placeholder="Alokasi Waktu" aria-label="Username" aria-describedby="basic-addon1" id="alokasiW" value="<?php echo $idSekolah['alokasi_waktu']; ?>" required>
												</div>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" id="next1" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>

									    	</div>
									    	<div class="carousel-item">
									    		<h5>B. KOMPETENSI AWAL</h5>
									      		<div class="multiple-inputs" id="multipleInputs">
													<div id="inputs-ka">
														<?php 
																$query = "SELECT * FROM kompetensi_awal WHERE id_identitas = '$id_identitas'";
																$result = mysqli_query($con, $query);
																$jmlRows = mysqli_num_rows($result);
																if($jmlRows > 0){
																	$i=1;
																	while($r = mysqli_fetch_assoc($result)){
																		echo '<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA'.$i.'"><span class="input-group-text" id="addon-wrapping-ka'.$i.'">'.$i.'</span><input type="text" class="form-control" placeholder="Kompetensi Awal '.$i.'" aria-label="Username" aria-describedby="addon-wrapping" name="ka'.$i.'" id="inputKa'.$i.'" value="'.$r['kompetensi'].'"><button class="btn btn-danger" id="button-addon2-ka'.$i.'"  type="button" data-ka="'.$i.'" onclick="hapusKA(this);">Hapus</button></div>';
																		$i++;
																	}
																	
																}
																else{
																	echo '<div class="list-kosong" id="list-kosong-materi">Tidak ada materi</div>';
																}
														?>
													</div>
													<button type="button" class="btn btn-success" id="addKA"> + Kompetensi Awal</button>
												</div>
												<br/>
												<h5>C.  PROFIL PELAJAR PANCASILA</h5>
												<div class="multiple-inputs " id="multipleInputs">
														<span>Profil Pelajar Pancasila : </span>
														<div class="list-input mt-3">
															<div id="inputs-pp">
																<?php 
																	$query = "SELECT * FROM profil_pancasila WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-pp" id="inputPP'.$i.'"><span class="input-group-text" id="addon-wrapping-pp'.$i.'">'.$i.'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="pp'.$i.'" id="inputPp'.$i.'" value="'.$r['profil_pancasila'].'" disabled><button class="btn btn-danger" id="button-addon2-pp'.$i.'"  type="button" data-pp="'.$i.'" onclick="hapusPP(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-pp">Tidak ada Profil Pelajar Pancasila</div>';
																	}
																?>
																
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="pp-options" id="pp-input" placeholder="Profil Pelajar Pancasila">
														  	<datalist id="pp-options">
														  		<option value="Mandiri">Mandiri</option>
															    <option value="Kreatif">Kreatif</option>
															    <option value="Berfikir Kritis">Berfikir Kritis</option>
															</datalist>
															<button class="btn btn-success" type="button" onclick="addPP();">+</button>
														</div>
												</div>
												<br/>
												<h5>D. SARANA DAN PRASARANA</h5>
												<div class="multiple-inputs " id="multipleInputs">
													<div  class="multiple-inputs">
														<span>Media pembelajaran yang digunakan : </span>
														<div class="list-input mt-3">
															<div id="inputs-media">
																<?php 
																	$query = "SELECT * FROM media WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-media" id="inputMEDIA'.$i.'"><span class="input-group-text" id="addon-wrapping-media'.$i.'">'.$i.'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="media'.$i.'" id="inputMedia'.$i.'" value="'.$r['media'].'" disabled><button class="btn btn-danger" id="button-addon2-media'.$i.'"  type="button" data-media="'.$i.'" onclick="hapusMEDIA(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-media">Tidak ada media pembelajaran yang digunakan</div>';
																	}
																?>
																
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="media-options" id="media-input" placeholder="Media Pembelajaran">
														  	<datalist id="media-options">
															    <option value="Lembar kerja peserta didik">Lembar kerja peserta didik</option>
															    <option value="Laptop">Laptop</option>
															    <option value="Handphone">Handphone</option>
															    <option value="LCD">LCD</option>
															</datalist>
															<button class="btn btn-success"  type="button" onclick="addMedia();">+</button>
														</div>
													</div>
													
													<div  class="multiple-inputs mt-3">
														<span>Sumber belajar yang digunakan : </span>
														<div class="list-input mt-3">
															<div id="inputs-sumber">
																<?php 
																	$query = "SELECT * FROM sumber WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-sumber" id="inputSUMBER'.$i.'"><span class="input-group-text" id="addon-wrapping-sumber'.$i.'">'.$i.'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="sumber'.$i.'" id="inputSumber'.$i.'" value="'.$r['sumber'].'" disabled><button class="btn btn-danger" id="button-addon2-sumber'.$i.'"  type="button" data-sumber="'.$i.'" onclick="hapusSUMBER(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-sumber">Tidak ada sumber belajar yang digunakan</div>';
																	}
																?>
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="sumber-options" id="sumber-input" placeholder="Sumber Belajar">
														  	<datalist id="sumber-options">
															    <option value="Lembar kerja peserta didik">Lembar kerja peserta didik</option>
															    <option value="Laman E-Learning">Laman E-Learning</option>
															    <option value="E-book">E-book</option>
															    <option value="Buku bacaan">Buku bacaan</option>
															    <option value="Youtube">Youtube</option>
															</datalist>
															<button class="btn btn-success" type="button" onclick="addSumber();">+</button>
														</div>
													</div>
												</div>
												<br/>
												<h5>E. TARGET PESERTA DIDIK</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Target Peserta Didik</span>
													<?php 	
														$query = "SELECT * FROM target_peserta_didik WHERE id_identitas = '$id_identitas'";
														$result = mysqli_query($con, $query);
														$r = mysqli_fetch_assoc($result);
													?>
													<input type="text" class="form-control" placeholder="Target Peserta Didik" aria-label="Username" aria-describedby="basic-addon1" id="target" value="<?php echo $r['target_peserta'] ?>">
												</div>
												<br/>
												<h5>F. MODEL PEMBELAJARAN</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Model Pembelajaran</span>
													<select class="form-select" id="model">
													    <option selected>Choose...</option>
													    <?php 
													    	$query = "SELECT * FROM model_pembelajaran WHERE id_identitas = '$id_identitas'";
													    	$result = mysqli_query($con, $query);
															$r = mysqli_fetch_assoc($result);
													    ?>
													    <option value="Discovery Learning" <?php if($r['model_pembelajaran'] == "Discovery Learning") echo "selected"; ?>>Discovery Learning</option>
													    <option value="Inquiry Learning Terbimbing" <?php if($r['model_pembelajaran'] == "Learning Terbimbing") echo "selected"; ?>>Inquiry Learning Terbimbing</option>
													    <option value="Problem Based Learning" <?php if($r['model_pembelajaran'] == "Problem Based Learning") echo "selected"; ?>>Problem Based Learning</option>
													    <option value="Project Based Learning (PjBL)" <?php if($r['model_pembelajaran'] == "Project Based Learning (PjBL)") echo "selected"; ?>>Project Based Learning (PjBL)</option>
													    <option value="Production based Training (PBT)" <?php if($r['model_pembelajaran'] == "Production based Training (PBT)") echo "selected"; ?>>Production based Training (PBT).</option>
													    <option value="Kontekstual" <?php if($r['model_pembelajaran'] == "Kontekstual") echo "selected"; ?>>Kontekstual</option>
													    <option value="Ekspositori" <?php if($r['model_pembelajaran'] == "Ekspositori") echo "selected"; ?>>Ekspositori</option>
													    <option value="Kooperatif" <?php if($r['model_pembelajaran'] == "Kooperatif") echo "selected"; ?>>Kooperatif</option>
													    <option value="PAIKEM" <?php if($r['model_pembelajaran'] == "PAIKEM") echo "selected"; ?>>PAIKEM</option>

													</select>
												</div>
												<button class="btn btn-primary btn-create" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>A. TUJUAN PEMBELAJARAN (KOMPONEN INTI)</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
														<span>Tujuan Pembelajaran : </span>
														<div class="list-input mt-3">
															<div id="inputs-tp">
																<?php 
																	$query = "SELECT * FROM tujuan_pembelajaran WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-tp" id="inputTP'.$i.'"><span class="input-group-text" id="addon-wrapping-tp'.$i.'">'.$i.'</span><textarea class="form-control" name="tp'.$i.'" id="inputTp'.$i.'" rows="2" disabled>'.$r['tujuan_pembelajaran'].'</textarea><button class="btn btn-danger" id="button-addon2-tp'.$i.'"  type="button" data-tp="'.$i.'" onclick="hapusTP(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-tp">Tidak ada tujuan pembelajaran</div>';
																	}
																?>
																
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="tp-options" id="tp-input" placeholder="Tujuan Pembelajaran">
														  	<datalist id="tp-options">
															    
															</datalist>
															<button class="btn btn-success" type="button" onclick="addTP();">+</button>
														</div>
												</div>
												<br/>
												<h5>B. PEMAHAMAN BERMAKNA</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
													<div id="inputs-pb">
														<?php 
																	$query = "SELECT * FROM pemahaman_bermakna WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-pb" id="inputPB'.$i.'"><span class="input-group-text" id="addon-wrapping-pb'.$i.'">'.$i.'</span><input type="text" class="form-control" placeholder="Pemahaman Bermakna '.$i.'" aria-label="Username" aria-describedby="addon-wrapping" name="pb'.$i.'" id="inputPb'.$i.'" value="'.$r['pemahaman_bermakna'].'"><button class="btn btn-danger" id="button-addon2-pb'.$i.'"  type="button" data-pb="'.$i.'" onclick="hapusPB(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-tp">Tidak ada tujuan pembelajaran</div>';
																	}
														?>
													</div>
													<button type="button" class="btn btn-success" id="addPB"> + Pemahaman Bermakna</button>
												</div>
												<br/>
												<h5>C. PERTANYAAN PEMANTIK</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
													<div id="inputs-perpem">
														<?php 
																	$query = "SELECT * FROM pertanyaan_pemantik WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-perpem" id="inputPERPEM'.$i.'"><span class="input-group-text" id="addon-wrapping-perpem'.$i.'">'.$i.'</span><input type="text" class="form-control" placeholder="Pertanyaan Pemantik '.$i.'" aria-label="Username" aria-describedby="addon-wrapping" name="perpem'.$i.'" id="inputPerpem'.$i.'" value="'.$r['pertanyaan_pemantik'].'"><button class="btn btn-danger" id="button-addon2-perpem'.$i.'"  type="button" data-perpem="'.$i.'" onclick="hapusPERPEM(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-tp">Tidak ada tujuan pembelajaran</div>';
																	}
														?>
													</div>
													<button type="button" class="btn btn-success" id="addPERPEM"> + Pertanyaan Pemantik</button>
												</div>
												<br/>
												<h5>D. PERSIAPAN PEMBELAJARAN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
														<span>Persiapan Pembelajaran : </span>
														<div class="list-input mt-3">
															<div id="inputs-perpemb">
																<?php 
																	$query = "SELECT * FROM persiapan_pembelajaran WHERE id_identitas = '$id_identitas'";
																	$result = mysqli_query($con, $query);
																	$jmlRows = mysqli_num_rows($result);
																	if($jmlRows > 0){
																		$i=1;
																		while($r = mysqli_fetch_assoc($result)){
																			echo '<div class="input-group flex-nowrap mb-3 mt-3 input-perpemb" id="inputPERPEMB'.$i.'"><span class="input-group-text" id="addon-wrapping-perpemb'.$i.'">'.$i.'</span><input type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" name="perpemb'.$i.'" id="inputPerpemb'.$i.'" value="'.$r['persiapan_pembelajaran'].'" disabled><button class="btn btn-danger" id="button-addon2-perpemb'.$i.'"  type="button" data-perpemb="'.$i.'" onclick="hapusPERPEMB(this);">Hapus</button></div>';
																			$i++;
																		}
																		
																	}
																	else{
																		echo '<div class="list-kosong" id="list-kosong-perpemb">Tidak ada persiapan pembelajaran</div>';
																	}
																?>
																
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="perpemb-options" id="perpemb-input" placeholder="Persiapan Pembelajaran">
														  	<datalist id="perpemb-options">
														  		<?php
															    	$query = "SELECT * FROM list_persiapan";
															    	$result = mysqli_query($con,$query);
															    	while($r = mysqli_fetch_assoc($result)) {
																	    echo '<option value="'.$r["persiapan_pembelajaran"].'" class="option-perpemb">'.$r["persiapan_pembelajaran"].'</option>';
																	}
															    ?>
															</datalist>
															<button class="btn btn-success" type="button" onclick="addPerpemb();">+</button>
														</div>
												</div>
												<button class="btn btn-primary btn-create" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>E. KEGIATAN PEMBELAJARAN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<b><span>Pertemuan 1</span></b>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Pendahuluan</span>
														</div>
														<div class="col-lg-9">
															<span>Kegiatan Pendahuluan : </span>
															<div class="list-input mt-3">
																<div id="inputs-pend">
																	<?php 
																		$query = "SELECT * FROM pendahuluan WHERE id_kegiatan = '$idKegiatan'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-pend" id="inputPEND'.$i.'"><span class="input-group-text" id="addon-wrapping-pend'.$i.'">'.$i.'</span><textarea class="form-control" name="pend'.$i.'" id="inputPend'.$i.'" rows="2" disabled>'.$r['kegiatan'].'</textarea><button class="btn btn-danger" id="button-addon2-pend'.$i.'"  type="button" data-pend="'.$i.'" onclick="hapusPEND(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-pend">Tidak ada Pendahuluan</div>';
																		}
																	?>
																	
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="pend-options" id="pend-input" placeholder="Kegiatan Pendahuluan">
															  	<datalist id="pend-options">
															  		<?php
																    	$query = "SELECT * FROM list_pendahuluan";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["kegiatan"].'" class="option-perpemb">'.$r["kegiatan"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addPEND();">+</button>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Inti</span>
														</div>
														<div class="col-lg-9">
															<span>Kegiatan Inti : </span>
															<div class="list-input mt-3">
																<div id="inputs-inti">
																	<?php 
																		$query = "SELECT * FROM inti WHERE id_kegiatan = '$idKegiatan'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI'.$i.'"><span class="input-group-text" id="addon-wrapping-inti'.$i.'">'.$i.'</span><textarea class="form-control" name="inti'.$i.'" id="inputInti'.$i.'" rows="2" disabled>'.$r['kegiatan'].'</textarea><button class="btn btn-danger" id="button-addon2-inti'.$i.'"  type="button" data-inti="'.$i.'" onclick="hapusINTI(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-inti">Tidak ada Inti</div>';
																		}
																	?>
																	
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="inti-options" id="inti-input" placeholder="Kegiatan Inti">
															  	<datalist id="inti-options">
															  		<?php
																    	$query = "SELECT * FROM list_inti";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["kegiatan"].'" class="option-perpemb">'.$r["kegiatan"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addINTI();">+</button>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Penutup</span>
														</div>
														<div class="col-lg-9">
															<span>Kegiatan Penutup : </span>
															<div class="list-input mt-3">
																<div id="inputs-penutup">
																	<?php 
																		$query = "SELECT * FROM penutup WHERE id_kegiatan = '$idKegiatan'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI'.$i.'"><span class="input-group-text" id="addon-wrapping-inti'.$i.'">'.$i.'</span><textarea class="form-control" name="inti'.$i.'" id="inputInti'.$i.'" rows="2" disabled>'.$r['kegiatan'].'</textarea><button class="btn btn-danger" id="button-addon2-inti'.$i.'"  type="button" data-inti="'.$i.'" onclick="hapusINTI(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-penutup">Tidak ada Penutup</div>';
																		}
																	?>
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="penutup-options" id="penutup-input" placeholder="Kegiatan penutup">
															  	<datalist id="penutup-options">
															  		<?php
																    	$query = "SELECT * FROM list_penutup";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["kegiatan"].'" class="option-perpemb">'.$r["kegiatan"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addPENUTUP();">+</button>
															</div>
														</div>
													</div>
												</div>
												<button class="btn btn-primary btn-create" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>F. ASESMEN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen non Kognitif</span>
														</div>
														<div class="col-lg-9">
															<span>Asesmen non Kognitif : </span>
															<div class="list-input mt-3">
																<div id="inputs-ases-non">
																	<?php 
																		$query = "SELECT * FROM ases_non_kog WHERE id_identitas = '$id_identitas'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-ases-non" id="inputASESNON'.$i.'"><span class="input-group-text" id="addon-wrapping-ases-non'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-non'.$i.'" id="inputAsesNon'.$i.'" rows="2" disabled>'.$r['ases'].'</textarea><button class="btn btn-danger" id="button-addon2-ases-non'.$i.'"  type="button" data-asesnon="'.$i.'" onclick="hapusAsesNon(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-ases-non">Tidak ada Asesmen Non Kognitif</div>';
																		}
																	?>
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="ases-non-options" id="ases-non-input" placeholder="Asesmen Non Kognitif">
															  	<datalist id="ases-non-options">
															  		<?php
																    	$query = "SELECT * FROM list_ases_non_kog";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["asesmen"].'" class="option-ases-non">'.$r["asesmen"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addAsesNon();">+</button>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen Kognitif</span>
														</div>
														<div class="col-lg-9">
															<span>Asesmen Kognitif : </span>
															<div class="list-input mt-3">
																<div id="inputs-ases-kog">
																	<?php 
																		$query = "SELECT * FROM ases_kog WHERE id_identitas = '$id_identitas'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-ases-kog" id="inputASESKOG'.$i.'"><span class="input-group-text" id="addon-wrapping-ases-kog'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-kog'.$i.'" id="inputAsesKog'.$i.'" rows="2" disabled>'.$r['ases'].'</textarea><button class="btn btn-danger" id="button-addon2-ases-kog'.$i.'"  type="button" data-aseskog="'.$i.'" onclick="hapusAsesKog(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-ases-kog">Tidak ada Asesmen Kognitif</div>';
																		}
																	?>
																	
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="ases-kog-options" id="ases-kog-input" placeholder="Asesmen Kognitif">
															  	<datalist id="ases-kog-options">
															  		<?php
																    	$query = "SELECT * FROM list_ases_kog";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["asesmen"].'" class="option-ases-kog">'.$r["asesmen"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addAsesKog();">+</button>
															</div>
														</div>
													</div>

													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen Formatif</span>
														</div>
														<div class="col-lg-9">
															<span>Asesmen Formatif : </span>
															<div class="list-input mt-3">
																<div id="inputs-ases-for">
																	<?php 
																		$query = "SELECT * FROM ases_for WHERE id_identitas = '$id_identitas'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-ases-for" id="inputASESFOR'.$i.'"><span class="input-group-text" id="addon-wrapping-ases-for'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-for'.$i.'" id="inputAsesFor'.$i.'" rows="2" disabled>'.$r['ases'].'</textarea><button class="btn btn-danger" id="button-addon2-ases-for'.$i.'"  type="button" data-asesfor="'.$i.'" onclick="hapusAsesFor(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-ases-for">Tidak ada Asesmen Formatif</div>';
																		}
																	?>
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="ases-for-options" id="ases-for-input" placeholder="Asesmen Formatif">
															  	<datalist id="ases-for-options">
															  		<?php
																    	$query = "SELECT * FROM list_ases_for";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["asesmen"].'" class="option-ases-for">'.$r["asesmen"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addAsesFor();">+</button>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen Sumatif</span>
														</div>
														<div class="col-lg-9">
															<span>Asesmen Suamtif : </span>
															<div class="list-input mt-3">
																<div id="inputs-ases-sum">
																	<?php 
																		$query = "SELECT * FROM ases_sum WHERE id_identitas = '$id_identitas'";
																		$result = mysqli_query($con, $query);
																		$jmlRows = mysqli_num_rows($result);
																		if($jmlRows > 0){
																			$i=1;
																			while($r = mysqli_fetch_assoc($result)){
																				echo '<div class="input-group flex-nowrap mb-3 mt-3 input-ases-sum" id="inputASESSUM'.$i.'"><span class="input-group-text" id="addon-wrapping-ases-sum'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-sum'.$i.'" id="inputAsesSum'.$i.'" rows="2" disabled>'.$r['ases'].'</textarea><button class="btn btn-danger" id="button-addon2-ases-sum'.$i.'"  type="button" data-asessum="'.$i.'" onclick="hapusAsesSum(this);">Hapus</button></div>';
																				$i++;
																			}
																			
																		}
																		else{
																			echo '<div class="list-kosong" id="list-kosong-ases-sum">Tidak ada Asesmen Sumatif</div>';
																		}
																	?>
																	
																</div>
															</div>
															<div class="input-group mb-3 mt-3">
																<input type="text" class="form-control" list="ases-sum-options" id="ases-sum-input" placeholder="Asesmen Sumatif">
															  	<datalist id="ases-sum-options">
															  		<?php
																    	$query = "SELECT * FROM list_ases_sum";
																    	$result = mysqli_query($con,$query);
																    	while($r = mysqli_fetch_assoc($result)) {
																		    echo '<option value="'.$r["asesmen"].'" class="option-ases-sum">'.$r["asesmen"].'</option>';
																		}
																    ?>
																</datalist>
																<button class="btn btn-success" type="button" onclick="addAsesSum();">+</button>
															</div>
														</div>
													</div>
												</div>
												<button class="btn btn-primary btn-create" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>G. PENGAYAAN DAN REMEDIAL</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
							    					<span>Pengayaan dan Remedial : </span>
													<div class="list-input mt-3">
														<div id="inputs-penmed">
															<?php 
																$query = "SELECT * FROM pengayaan_remedial WHERE id_identitas = '$id_identitas'";
																$result = mysqli_query($con, $query);
																$jmlRows = mysqli_num_rows($result);
																if($jmlRows > 0){
																	$i=1;
																	while($r = mysqli_fetch_assoc($result)){
																		echo '<div class="input-group flex-nowrap mb-3 mt-3 input-penmed" id="inputPENMED'.$i.'"><span class="input-group-text" id="addon-wrapping-penmed'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-penmed'.$i.'" id="inputPenmed'.$i.'" rows="2" disabled>'.$r['pengayaan_remedial'].'</textarea><button class="btn btn-danger" id="button-addon2-penmed'.$i.'"  type="button" data-penmed="'.$i.'" onclick="hapusPenmed(this);">Hapus</button></div>';
																		$i++;
																	}
																	
																}
																else{
																	echo '<div class="list-kosong" id="list-kosong-penmed">Tidak ada Pengayaan dan Remedial</div>';
																}
															?>
														</div>
													</div>
													<div class="input-group mb-3 mt-3">
														<input type="text" class="form-control" list="penmed-options" id="penmed-input" placeholder="Pengayaan dan Remedial">
													  	<datalist id="penmed-options">
													  		<?php
														    	$query = "SELECT * FROM list_pengayaan_remedial";
														    	$result = mysqli_query($con,$query);
														    	while($r = mysqli_fetch_assoc($result)) {
																    echo '<option value="'.$r["pengayaan_remedial"].'" class="option-ases-for">'.$r["pengayaan_remedial"].'</option>';
																}
														    ?>
														</datalist>
														<button class="btn btn-success" type="button" onclick="addPenmed();">+</button>
													</div>
									    		</div>
									    		<br/>
									    		<h5>H. REFLEKSI PESERTA DIDIK DAN GURU</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<span>Refleksi Peserta Didik dan Guru : </span>
													<div class="list-input mt-3">
														<div id="inputs-refleksi">
															<?php 
																$query = "SELECT * FROM refleksi WHERE id_identitas = '$id_identitas'";
																$result = mysqli_query($con, $query);
																$jmlRows = mysqli_num_rows($result);
																if($jmlRows > 0){
																	$i=1;
																	while($r = mysqli_fetch_assoc($result)){
																		echo '<div class="input-group flex-nowrap mb-3 mt-3 input-refleksi" id="inputREFLEKSI'.$i.'"><span class="input-group-text" id="addon-wrapping-refleksi'.$i.'">'.$i.'</span><textarea class="form-control" name="ases-refleksi'.$i.'" id="inputRefleksi'.$i.'" rows="2" disabled>'.$r['refleksi'].'</textarea><button class="btn btn-danger" id="button-addon2-refleksi'.$i.'"  type="button" data-refleksi="'.$i.'" onclick="hapusRefleksi(this);">Hapus</button></div>';
																		$i++;
																	}
																	
																}
																else{
																	echo '<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>';
																}
															?>
															
														</div>
													</div>
													<div class="input-group mb-3 mt-3">
														<input type="text" class="form-control" list="refleksi-options" id="refleksi-input" placeholder="Refleksi">
													  	<datalist id="refleksi-options">
													  		<?php
														    	$query = "SELECT * FROM list_refleksi";
														    	$result = mysqli_query($con,$query);
														    	while($r = mysqli_fetch_assoc($result)) {
																    echo '<option value="'.$r["refleksi"].'" class="option-ases-for">'.$r["refleksi"].'</option>';
																}
														    ?>
														</datalist>
														<button class="btn btn-success" type="button" onclick="addRefleksi();">+</button>
													</div>
									    		</div>
									    		<button class="btn btn-primary btn-create" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>A. LEMBAR KERJA PESERTA DIDIK (LAMPIRAN)</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div class="input-group">
														<input type="file" class="form-control" id="lkpd">
													</div>
									    		</div>
									    		<br/>
									    		<h5>B. BAHAN BACAAN GURU DAN PESERTA DIDIK</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div id="inputs-bahan">
									    				<?php 
															$query = "SELECT * FROM bahan_bacaan WHERE id_identitas = '$id_identitas'";
															$result = mysqli_query($con, $query);
															$jmlRows = mysqli_num_rows($result);
															if($jmlRows > 0){
																$i=1;
																while($r = mysqli_fetch_assoc($result)){
																	echo '<div class="input-group flex-nowrap mb-3 mt-3 input-bahan" id="inputBAHAN'.$i.'"><span class="input-group-text" id="addon-wrapping-bahan'.$i.'">'.$i.'</span><textarea class="form-control" name="bahan'.$i.'" id="inputBahan'.$i.'" rows="2" placeholder="Bahan Bacaan '.$i.'">'.$r['bahan_bacaan'].'</textarea><button class="btn btn-danger" id="button-addon2-bahan'.$i.'"  type="button" data-bahan="'.$i.'" onclick="hapusBAHAN(this);">Hapus</button></div>';
																	$i++;
																}
																
															}
															else{
																echo '<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>';
															}
														?>
													</div>
													<button type="button" class="btn btn-success" id="addBAHAN"> + Bahan Bacaan</button>
									    		</div>
									    		<br/>
									    		<h5>C. GLOSARIUM</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div id="inputs-glos">
									    				<?php 
															$query = "SELECT * FROM glosarium WHERE id_identitas = '$id_identitas'";
															$result = mysqli_query($con, $query);
															$jmlRows = mysqli_num_rows($result);
															if($jmlRows > 0){
																$i=1;
																while($r = mysqli_fetch_assoc($result)){
																	echo '<div class="input-group flex-nowrap mb-3 mt-3 input-glos" id="inputGLOS'.$i.'"><span class="input-group-text" id="addon-wrapping-glos'.$i.'">'.$i.'</span><textarea class="form-control" name="glos'.$i.'" id="inputGlos'.$i.'" rows="2" placeholder="Glosarium '.$i.'">'.$r['glosarium'].'</textarea><button class="btn btn-danger" id="button-addon2-glos'.$i.'"  type="button" data-glos="'.$i.'" onclick="hapusGLOS(this);">Hapus</button></div>';
																	$i++;
																}
																
															}
															else{
																echo '<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>';
															}
														?>
													</div>
													<button type="button" class="btn btn-success" id="addGLOS"> + Glosarium</button>
									    		</div>
									    		<br/>
									    		<h5>D. DAFTAR PUSTAKA</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<?php 
														$query = "SELECT * FROM daftar_pustaka WHERE id_identitas = '$id_identitas'";
														$result = mysqli_query($con, $query);
														$jmlRows = mysqli_num_rows($result);
														if($jmlRows > 0){
															$i=1;
															while($r = mysqli_fetch_assoc($result)){
																echo '<div class="input-group flex-nowrap mb-3 mt-3 input-dafpus" id="inputDAFPUS'.$i.'"><span class="input-group-text" id="addon-wrapping-dafpus'.$i.'">'.$i.'</span><textarea class="form-control" name="dafpus'.$i.'" id="inputDafpus'.$i.'" rows="2" placeholder="Daftar Pustaka '.$i.'">'.$r['daftar_pustaka'].'</textarea><button class="btn btn-danger" id="button-addon2-dafpus'.$i.'"  type="button" data-dafpus="'.$i.'" onclick="hapusDAFPUS(this);">Hapus</button></div>';
																$i++;
															}
															
														}
														else{
															echo '<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>';
														}
													?>
													<button type="button" class="btn btn-success" id="addDAFPUS"> + Daftar Pustaka</button>
									    		</div>
											  	</button>
											  	<button class="btn btn-primary btn-create mt-3" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
											    	<span>Previous</span>
											  	</button>
											  	<button class="btn btn-success ml-10 mt-3" type="button" id="buatModulAjar">
											    	<span >Buat Modul Ajar&nbsp;</span>
											    	<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="spinner"></span>
								  				</button>
									    	</div>

								    	</form>
								  	</div>
								  	
								</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="../js/edit-modul-ajar/edit-modul-ajar.js"></script>
	<script type="text/javascript" src="../js/edit-modul-ajar/form.js"></script>

	
</html>
