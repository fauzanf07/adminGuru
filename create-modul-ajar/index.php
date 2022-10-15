<?php 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: http://localhost/adminGuru/login");
	}
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
								<button type="button" class="btn btn-success" id="create"><i class="bi bi-file-plus"></i> Buat Modul Ajar</button>
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
							        	<tr>
							        		<td>1</td>
							        		<td>14-10-2022 16:40</td>
							        		<td>Animasi</td>
							        		<td>Dasar Dasar Keahlian Desain Komunikasi Visual</td>
							        		<td>X/1</td>
							        		<td>
							        			<center><button type="button" class="btn btn-primary btn-download">Download Docs</button></center>
							        			<center><button type="button" class="btn btn-danger btn-download mt-10">Download PDF</button></center>
							        		</td>
							        		<td>
							        			<center><button type="button" class="btn btn-warning btn-action">Edit</button></center>
							        			<center><button type="button" class="btn btn-danger btn-action mt-10">Hapus</button></center>
							        		</td>
							        	</tr>
							        </tbody>
								</table>
							</div>
							<div class="create-modul">
								<center><h3 class="title">Buat Modul Ajar</h3></center>
								<br/>
								<div id="carouselExampleControls" class="carousel slide" data-interval="false">
									<div class="carousel-inner">
										<form method="POST">
									    	<div class="carousel-item active">
									      		<h5>A. IDENTITAS SEKOLAH (INFORMASI UMUM)</h5>
									      		<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Nama Penyusun</span>
												  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="Willy Surya Wardhana, S.Pd." disabled="disabled">
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Satuan Pendidikan</span>
												  <input type="text" class="form-control" placeholder="Satuan Pendidikan" aria-label="Username" aria-describedby="basic-addon1" value="SMK Pasundan 3 Cimahi" disabled="disabled">
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Tahun Ajaran</span>
												  <input type="text" class="form-control" placeholder="Tahun Ajaran" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Program Keahlian</label>
													<select class="form-select" id="inputGroupSelect01">
													    <option selected>Choose...</option>
													    <option value="1">Animasi</option>
													</select>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Mata Pelajaran</label>
													<select class="form-select" id="inputGroupSelect01">
													    <option selected>Choose...</option>
													    <option value="1">Dasar Dasar Keahlian Desain Komunikasi Visual</option>
													</select>
												</div>
												<div class="input-group mb-3">
												  <span class="input-group-text">Kelas, Semester, dan Fase</span>
												  	<select class="form-select" id="inputGroupSelect01">
													    <option selected>Choose...</option>
													    <option value="1">X</option>
													    <option value="1">XI</option>
													    <option value="1">XII</option>
													</select>
												  	<select class="form-select" id="inputGroupSelect01">
													    <option selected>Choose...</option>
													    <option value="1">1</option>
													    <option value="1">2</option>
													</select>
													<input type="text" class="form-control" placeholder="Fase" aria-label="Username" aria-describedby="basic-addon1" value="E" disabled="disabled">
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Elemen</span>
														<textarea class="form-control" aria-label="With textarea"></textarea>
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Capaian Pembelajaran</span>
														<textarea class="form-control" aria-label="With textarea"></textarea>
												</div>
												<div class="multiple-inputs" id="multipleInputs">
													<span>Materi</span>
													<div id="inputs">
														<div class="input-group flex-nowrap mb-3 mt-3 input-materi" id="inputMateri1">
															<span class="input-group-text" id="addon-wrapping1">1</span>
															<input type="text" class="form-control" placeholder="Materi 1" aria-label="Username" aria-describedby="addon-wrapping" name="materi1" id="input1">
															<button class="btn btn-danger" id="button-addon21"  type="button" data-no="1" id="button-addon2" onclick="hapusMateri(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addMateri"> + Materi</button>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Alokasi Waktu</span>
												  <input type="text" class="form-control" placeholder="Alokasi Waktu" aria-label="Username" aria-describedby="basic-addon1">
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
													<div id="inputs-pp">
														<div class="input-group flex-nowrap mb-3 mt-3 input-pp" id="inputPP1">
															<span class="input-group-text" id="addon-wrapping-pp1">1</span>
															<input type="text" class="form-control" placeholder="Profil 1" aria-label="Username" aria-describedby="addon-wrapping" name="pp1" id="inputPp1">
															<button class="btn btn-danger" id="button-addon2-pp1"  type="button" data-pp="1" onclick="hapusPP(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addPP"> + Profil Pancasila</button>
												</div>
												<br/>
												<h5>D. SARANA DAN PRASARANA</h5>
												<div class="multiple-inputs " id="multipleInputs">
													<div class="input-group mb-3 mt-3">
													  <span class="input-group-text" id="basic-addon1">Media</span>
													  <input type="text" class="form-control" placeholder="Media" aria-label="Username" aria-describedby="basic-addon1">
													</div>
													<div class="input-group mb-3 mt-3">
													  <span class="input-group-text" id="basic-addon1">Sumber Belajar</span>
													  <input type="text" class="form-control" placeholder="Sumber Belajar" aria-label="Username" aria-describedby="basic-addon1">
													</div>
												</div>
												<br/>
												<h5>E. TARGET PESERTA DIDIK</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Target Peserta Didik</span>
													<input type="text" class="form-control" placeholder="Target Peserta Didik" aria-label="Username" aria-describedby="basic-addon1">
												</div>
												<br/>
												<h5>F. MODEL PEMBELAJARAN</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Model Pembelajaran</span>
													<input type="text" class="form-control" placeholder="Model Pembelajaran" aria-label="Username" aria-describedby="basic-addon1">
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
													<div id="inputs-tp">
														<div class="input-group flex-nowrap mb-3 mt-3 input-tp" id="inputTP1">
															<span class="input-group-text" id="addon-wrapping-tp1">1</span>
															<input type="text" class="form-control" placeholder="Tujuan Pembelajaran 1" aria-label="Username" aria-describedby="addon-wrapping" name="tp1" id="inputTp1">
															<button class="btn btn-danger" id="button-addon2-tp1"  type="button" data-tp="1"  onclick="hapusTP(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addTP"> + Tujuan Pembelajaran</button>
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
													<div id="inputs-perpemb">
														<div class="input-group flex-nowrap mb-3 mt-3 input-perpemb" id="inputPERPEMB1">
															<span class="input-group-text" id="addon-wrapping-perpemb1">1</span>
															<input type="text" class="form-control" placeholder="Persiapan Pembelajaran 1" aria-label="Username" aria-describedby="addon-wrapping" name="perpemb1" id="inputPerpemb1">
															<button class="btn btn-danger" id="button-addon2-perpemb1"  type="button" data-perpemb="1"  onclick="hapusPERPEMB(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addPERPEMB"> + Persiapan Pembelajaran</button>
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
															<div id="inputs-pend">
																<div class="input-group flex-nowrap mb-3 mt-3  input-pend" id="inputPEND1">
																	<span class="input-group-text" id="addon-wrapping-pend1">1</span>
																	<input type="text" class="form-control" placeholder="Kegiatan 1" aria-label="Username" aria-describedby="addon-wrapping" name="pend1" id="inputPend1">
																	<button class="btn btn-danger" id="button-addon2-pend1"  type="button" data-pend="1"  onclick="hapusPEND(this);">Hapus</button>
																</div>
															</div>
															<button type="button" class="btn btn-success" id="addPEND"> + Keg. Pendahuluan</button>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Inti</span>
														</div>
														<div class="col-lg-9">
															<div id="inputs-inti">
																<div class="input-group flex-nowrap mb-3 mt-3 input-inti" id="inputINTI1">
																	<span class="input-group-text" id="addon-wrapping-inti1">1</span>
																	<input type="text" class="form-control" placeholder="Kegiatan 1" aria-label="Username" aria-describedby="addon-wrapping" name="inti1" id="inputInti1">
																	<button class="btn btn-danger" id="button-addon2-inti1"  type="button" data-inti="1"  onclick="hapusINTI(this);">Hapus</button>
																</div>
															</div>
															<button type="button" class="btn btn-success" id="addINTI"> + Keg. Inti</button>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Penutup</span>
														</div>
														<div class="col-lg-9">
															<div id="inputs-penutup">
																<div class="input-group flex-nowrap mb-3 mt-3 input-penutup" id="inputPENUTUP1">
																	<span class="input-group-text" id="addon-wrapping-penutup1">1</span>
																	<input type="text" class="form-control" placeholder="Kegiatan 1" aria-label="Username" aria-describedby="addon-wrapping" name="penutup1" id="inputPenutup1">
																	<button class="btn btn-danger" id="button-addon2-penutup1"  type="button" data-penutup="1"  onclick="hapusPENUTUP(this);">Hapus</button>
																</div>
															</div>
															<button type="button" class="btn btn-success" id="addPENUTUP"> + Keg. Penutup</button>
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
															<textarea id="asesNonKog" name="asesNonKog"></textarea>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen Kognitif</span>
														</div>
														<div class="col-lg-9">
															<textarea id="asesKog" name="asesKog"></textarea>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen Formatif</span>
														</div>
														<div class="col-lg-9">
															<textarea id="asesFor" name="asesFor"></textarea>
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
									    			<textarea id="pengayaan" name="pengayaan"></textarea>
									    		</div>
									    		<br/>
									    		<h5>H. REFLEKSI PESERTA DIDIK DAN GURU</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<textarea id="refleksi" name="refleksi"></textarea>
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
											  	<button class="btn btn-success ml-10 mt-3" type="button">
											    	<span >Buat Modul Ajar</span>
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
