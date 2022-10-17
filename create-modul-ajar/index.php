<?php 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: http://localhost/adminGuru/login");
	}
	include("../backend/conn.php");

	$nama = $_SESSION['nama'];

	$sql = "SELECT id FROM table_user WHERE nama = '$nama'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	$id_user = $r['id'];


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Pembuatan Modul Ajar</title>
	<link rel="stylesheet" type="text/css" href="../style/create-modul-ajar/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark">
			<div class="container-fluid">
			    <div>
			    	<div class="logo-icon"></div>
			    	<div class="logo-text">
			    		<h4 class="logo-name">THE NINETEEN</h4>
			    		<a href="#" class="desc"><h4 class="logo-name desc">Providing solutions for Indonesian education</h4></div></a>
			    	</div>
			    </div>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarText"  >
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-text" >
			        	<a class="nav-link active" aria-current="page" href="#">Online Courses</a>
			        </li>
			        <li class="nav-text">
			        	<a class="nav-link" id="logout"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a>
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
					    <button class="nav-link active" id="nav-feed-tab" data-bs-toggle="tab" data-bs-target="#nav-feed" type="button" role="tab" aria-controls="nav-feed" aria-selected="true"><i class="bi bi-chat-square-text-fill"></i>&nbsp;&nbsp;Create Modul Ajar</button>
					  </div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-feed" role="tabpanel" aria-labelledby="nav-feed-tab" tabindex="0">
							<div class="list-modul">
								<h3 class="title">Modul Ajar</h3>
								<a class="btn btn-success" id="create" href="#formBuatModul"><i class="bi bi-file-plus"></i> Buat Modul Ajar</a>
								<br/><br/>
								<table class="table table-striped" id="tableModul">
									<thead>
							            <tr>
							                <th>No</th>
							                <th>Tanggal Buat</th>
							                <th>Program Keahlian</th>
							                <th>Mata Pelajaran</th>
							                <th>Kelas/Semester</th>
							                <th>Download Modul Ajar</th>
							                <th>Action</th>
							            </tr>
							        </thead>
							        <tbody>
							        	<?php
							        		$sql = "SELECT * FROM identitas_sekolah WHERE id_user = '$id_user'";
							        		$result = mysqli_query($con, $sql);
							        		$i=1;
											while($r = mysqli_fetch_assoc($result)){
												echo "
													<tr>
										        		<td>".$i."</td>
										        		<td>".$r['created_at']."</td>
										        		<td>".$r['program_keahlian']."</td>
										        		<td>".$r['mata_pelajaran']."</td>
										        		<td>X/1</td>
										        		<td>
										        			<center><button type='button' class='btn btn-primary btn-download' data-id='".$r['id']."' id='downloadDocs' >Download Docs</button></center>
										        			<center><button type='button' class='btn btn-danger btn-download mt-10' data-id='".$r['id']."' id='downloadPdf'>Download PDF</button></center>
										        		</td>
										        		<td>
										        			<center><button type='button' class='btn btn-warning btn-action' data-id='".$r['id']."'>Edit</button></center>
										        			<center><button type='button' class='btn btn-danger btn-action mt-10' data-id='".$r['id']."'>Hapus</button></center>
										        		</td>
										        	</tr>
												";
												$i++;
											}

							        	?>
							        	
							        </tbody>
								</table>
							</div>
							<div class="create-modul" id="formBuatModul">
								<center><h3 class="title">Buat Modul Ajar</h3></center>
								<br/>
								<div id="carouselExampleControls" class="carousel slide" data-interval="false">
									<div class="carousel-inner">
										<form method="POST">
									    	<div class="carousel-item active">
									      		<h5>A. IDENTITAS SEKOLAH (INFORMASI UMUM)</h5>
									      		<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Nama Penyusun</span>
												  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $_SESSION['nama']; ?>" disabled="disabled" id="namaPenyusun">
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Satuan Pendidikan</span>
												  <input type="text" class="form-control" placeholder="Satuan Pendidikan" value="<?php echo $_SESSION['sekolah']; ?>" disabled="disabled" id="satuanPend">
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Tahun Ajaran</span>
												  <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Username" aria-describedby="basic-addon1" list="tahunajar-options" id="tahunAjar">
												    <datalist id="tahunajar-options">
														<option value="2020/2021">2020/2021</option>
														<option value="2021/2022">2021/2022</option>
														<option value="2022/2023">2022/2023</option>
													</datalist>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Program Keahlian</label>
													<select class="form-select" id="programKeahlian">
													    <option value="" selected>Choose...</option>
													    <?php
													    	$query = "SELECT * FROM program_keahlian";
													    	$result = mysqli_query($con,$query);
													    	while($r = mysqli_fetch_assoc($result)) {
															    echo '<option value="'.$r["id"].'" class="option-prokel">'.$r["program_keahlian"].'</option>';
															}
													    ?>
													</select>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Mata Pelajaran</label>
													<select class="form-select" id="mapel">
															<option selected>Choose...</option>
													</select>
												</div>
												<div class="input-group mb-3">
												  <span class="input-group-text">Kelas, Semester, dan Fase</span>
												  	<select class="form-select" id="kelas">
													    <option selected>Choose...</option>
													    <option value="x">X</option>
													    <option value="xi">XI</option>
													    <option value="xii">XII</option>
													</select>
												  	<select class="form-select" id="semester">
													    <option selected>Choose...</option>
													    <option value="1">1</option>
													    <option value="1">2</option>
													</select>
													<input type="text" class="form-control" placeholder="Fase" aria-label="Username" aria-describedby="basic-addon1" id="fase" value="" disabled="disabled">
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Elemen</span>
														<select class="form-select" id="elemen">
															<option selected>Choose...</option>
														</select>
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Capaian Pembelajaran</span>
														<textarea class="form-control" id="cp" name="cp" disabled="disabled" rows="6"></textarea>
												</div>
												<div class="multiple-inputs" id="multipleInputs">
														<span>Meteri : </span>
														<div class="list-input mt-3">
															<div id="inputs-materi">
																<div class="list-kosong" id="list-kosong-materi">Tidak ada materi</div>
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="materi-options" id="materi-input" placeholder="Materi belajar">
														  	<datalist id="materi-options">
															</datalist>
															<button class="btn btn-success" type="button" data-pp="1" onclick="addMateri();">+</button>
														</div>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Alokasi Waktu</span>
												  <input type="text" class="form-control" placeholder="Alokasi Waktu" aria-label="Username" aria-describedby="basic-addon1" id="alokasiW">
												</div>
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
											    	<span >Next</span>
								  				</button>

									    	</div>
									    	<div class="carousel-item">
									    		<h5>B. KOMPETENSI AWAL</h5>
									      		<div class="multiple-inputs" id="multipleInputs">
													<div id="inputs-ka">
														<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA1">
															<span class="input-group-text" id="addon-wrapping-ka1">1</span>
															<input type="text" class="form-control" placeholder="Kompetensi Awal 1" aria-label="Username" aria-describedby="addon-wrapping" name="ka1" id="inputKa1">
															<button class="btn btn-danger" id="button-addon2-ka1"  type="button" data-ka="1" id="button-addon-ka2" onclick="hapusKA(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addKA"> + Kompetensi Awal</button>
												</div>
												<br/>
												<h5>C.  PROFIL PELAJAR PANCASILA</h5>
												<div class="multiple-inputs " id="multipleInputs">
														<span>Profil Pelajar Pancasila : </span>
														<div class="list-input mt-3">
															<div id="inputs-pp">
																<div class="list-kosong" id="list-kosong-pp">Tidak ada Profil Pelajar Pancasila</div>
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
																<div class="list-kosong" id="list-kosong-media">Tidak ada media pembelajaran yang digunakan</div>
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
																<div class="list-kosong" id="list-kosong-sumber">Tidak ada sumber belajar yang digunakan</div>
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
													<input type="text" class="form-control" placeholder="Target Peserta Didik" aria-label="Username" aria-describedby="basic-addon1" id="target">
												</div>
												<br/>
												<h5>F. MODEL PEMBELAJARAN</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Model Pembelajaran</span>
													<select class="form-select" id="model">
													    <option selected>Choose...</option>
													    <option value="Discovery Learning">Discovery Learning</option>
													    <option value="Inquiry Learning Terbimbing">Inquiry Learning Terbimbing</option>
													    <option value="Problem Based Learning">Problem Based Learning</option>
													    <option value="Project Based Learning (PjBL)">Project Based Learning (PjBL)</option>
													    <option value="Production based Training (PBT)">Production based Training (PBT).</option>
													    <option value="Kontekstual">Kontekstual</option>
													    <option value="Ekspositori">Ekspositori</option>
													    <option value="Kooperatif">Kooperatif</option>
													    <option value="PAIKEM">PAIKEM</option>

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
																<div class="list-kosong" id="list-kosong-tp">Tidak ada tujuan pembelajaran</div>
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
														<div class="input-group flex-nowrap mb-3 mt-3 input-pb" id="inputPB1">
															<span class="input-group-text" id="addon-wrapping-pb1">1</span>
															<input type="text" class="form-control" placeholder="Pemahaman Bermakna 1" aria-label="Username" aria-describedby="addon-wrapping" name="pb1" id="inputPb1">
															<button class="btn btn-danger" id="button-addon2-pb1"  type="button" data-pb="1"  onclick="hapusPB(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addPB"> + Pemahaman Bermakna</button>
												</div>
												<br/>
												<h5>C. PERTANYAAN PEMANTIK</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
													<div id="inputs-perpem">
														<div class="input-group flex-nowrap mb-3 mt-3 input-perpem" id="inputPERPEM1">
															<span class="input-group-text" id="addon-wrapping-perpem1">1</span>
															<input type="text" class="form-control" placeholder="Pertanyaan Pemantik 1" aria-label="Username" aria-describedby="addon-wrapping" name="perpem1" id="inputPerpem1">
															<button class="btn btn-danger" id="button-addon2-perpem1"  type="button" data-perpem="1"  onclick="hapusPERPEM(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addPERPEM"> + Pertanyaan Pemantik</button>
												</div>
												<br/>
												<h5>D. PERSIAPAN PEMBELAJARAN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
														<span>Persiapan Pembelajaran : </span>
														<div class="list-input mt-3">
															<div id="inputs-perpemb">
																<div class="list-kosong" id="list-kosong-perpemb">Tidak ada persiapan pembelajaran</div>
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
																	<div class="list-kosong" id="list-kosong-pend">Tidak ada Pendahuluan</div>
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
																	<div class="list-kosong" id="list-kosong-inti">Tidak ada Inti</div>
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
																	<div class="list-kosong" id="list-kosong-penutup">Tidak ada Penutup</div>
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
																	<div class="list-kosong" id="list-kosong-ases-non">Tidak ada Asesmen Non Kognitif</div>
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
																	<div class="list-kosong" id="list-kosong-ases-kog">Tidak ada Asesmen Kognitif</div>
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
																	<div class="list-kosong" id="list-kosong-ases-for">Tidak ada Asesmen Formatif</div>
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
																	<div class="list-kosong" id="list-kosong-ases-sum">Tidak ada Asesmen Sumatif</div>
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
															<div class="list-kosong" id="list-kosong-penmed">Tidak ada Pengayaan dan Remedial</div>
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
															<div class="list-kosong" id="list-kosong-refleksi">Tidak ada Refleksi</div>
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
									    			<textarea id="lkpd" name="lkpd"></textarea>
									    		</div>
									    		<br/>
									    		<h5>B. BAHAN BACAAN GURU DAN PESERTA DIDIK</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<textarea id="bahanBaca" name="bahanBaca"></textarea>
									    		</div>
									    		<br/>
									    		<h5>C. GLOSARIUM</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<textarea id="glosarium" name="glosarium"></textarea>
									    		</div>
									    		<br/>
									    		<h5>D. DAFTAR PUSTAKA</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<textarea id="daftarPustaka" name="daftarPustaka"></textarea>
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
	<script type="text/javascript" src="../js/create-modul-ajar/create-modul-ajar.js"></script>
	<script type="text/javascript" src="../js/create-modul-ajar/form.js"></script>
	<script type="text/javascript" src="../js/create-modul-ajar/summernote.js"></script>

	
</html>
