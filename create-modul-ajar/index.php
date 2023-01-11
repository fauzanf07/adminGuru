<?php 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: ../login");
	}else if(isset($_SESSION['nama']) && empty($_SESSION['nip'])){
		header("Location: ../data-profile");
	}
	include("../backend/conn.php");

	date_default_timezone_set('Asia/Jakarta');

	$dateNow = date('Y-m-d');

	$email = $_SESSION['email'];

	$sql = "SELECT id,is_subscribe,id_subscribe FROM table_user WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	$id_user = $r['id'];
	$is_subscribe = $r['is_subscribe'];
	$_SESSION['is_subscribe'] = $is_subscribe;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>adminguru &centerdot; Pembuatan Modul Ajar</title>
	<link rel="stylesheet" type="text/css" href="../style/create-modul-ajar/style.css?version=1.0">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter&family=Roboto+Slab&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.7">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

					
					<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
						<ul class="navbar-nav">
							<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../">Home</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#">About us</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="../blog">Blog</a>
							</li>
						</ul>
						<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
							<li class="nav-text">
								<a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a>
							</li>
							<li class="nav-icon icon-sosmed">
								<a class="nav-link icon-sosmed" href="../pricing"><i class="bi bi-cart-fill"></i></a>
							</li>
							<li class="nav-icon icon-sosmed">
								<a class="nav-link icon-sosmed" href="#"><i class="bi bi-facebook"></i></a>
							</li>
							<li class="nav-icon icon-sosmed">
								<a class="nav-link icon-sosmed" href="http://instagram.com/adminguruid" target="_blank"><i class="bi bi-instagram"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>

		<div class="container">
			<div class="row row-profile">
				<div class="col-lg-3">
					<center><img src="../images/profile-img/<?php echo $_SESSION['profile_img']; ?>" class="profile-pic" id="profile-pic" data-email='<?php echo $email; ?>'></center>
					<h3 class="profile-name"><?php echo $_SESSION['nama']; ?></h3>
					<div class="info">
						<span class="info-item"><i class="bi bi-card-heading"></i>&nbsp;&nbsp;  
							<?php if(empty($_SESSION['nip'])){
								echo "Belum diisi";
							}else { echo $_SESSION['nip']; } ?></span>
						<span class="info-item"><i class="bi bi-building"></i>&nbsp;&nbsp; 
							<?php if(empty($_SESSION['sekolah'])){
								echo "Belum diisi";
							}else { echo $_SESSION['sekolah']; }?></span>
						<span class="info-item"><i class="bi bi-briefcase"></i>&nbsp;&nbsp; 
							<?php if(empty($_SESSION['jabatan'])){
								echo "Belum diisi";
							}else { echo $_SESSION['jabatan']; }?>
						<span class="info-item"><i class="bi bi-envelope"></i>&nbsp;&nbsp; 
							<?php if(empty($_SESSION['email'])){
								echo "Belum diisi";
							}else { echo $_SESSION['email']; }?>
						<span class="info-item"><i class="bi bi-person"></i>&nbsp;&nbsp; 
							<?php if(empty($_SESSION['mapel'])){
								echo "Belum diisi";
							}else { echo $_SESSION['mapel']; }?></span>
						<?php
							if($_SESSION['is_subscribe']==0){
						?>
							<div class="free-premium-limit">
								<center><span><b>Mode Gratis</b></span><br/></center>
								<span>Batas Download :<span>
								<div class="progress">
									<div class="progress-bar" id="downloadFree" role="progressbar" aria-label="Example with label" style="width: <?php echo ($_SESSION['downloads_free']/$_SESSION['limit_free'])*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $_SESSION['downloads_free'] . " / ". $_SESSION['limit_free']; ?></div>
								</div>
								<a href="../pricing" class="btn btn-primary btn-try-sub">Coba Berlangganan!</a>
							</div>
						<?php }else{
								$idSubscribe = $r['id_subscribe'];
								$sql = "SELECT * FROM subscribe WHERE id = '$idSubscribe'";
								$result = mysqli_query($con, $sql);
								$r_subs = mysqli_fetch_assoc($result);
								$paket = $r_subs['paket'];
								if($paket==1){
									$id_paket_basic=$r_subs['id_paket_basic'];
									$sql = "SELECT * FROM subs_basic WHERE id = '$id_paket_basic'";
									$result = mysqli_query($con, $sql);
									$r_basic = mysqli_fetch_assoc($result);
									?>
									<div class="free-premium-limit">
										<center><span><b>Mode Limited</b></span><br/></center>
										<span>Batas Download Docx:<span>
										<div class="progress">
											<div class="progress-bar" id="downloadDocxBasic" role="progressbar" aria-label="Example with label" style="width: <?php echo ($r_basic['download_docx']/$r_basic['limit_download_docx'])*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><span id="contentPBDocx"><?php echo $r_basic['download_docx'] . " / ".$r_basic['limit_download_docx'] ?></span></div>
										</div>
										<br/>
										<span>Batas Download PDF:<span>
										<div class="progress">
											<div class="progress-bar bg-info" id="downloadPDFBasic" role="progressbar" aria-label="Example with label" style="width: <?php echo ($r_basic['download_pdf']/$r_basic['limit_download_pdf'])*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><span id="contentPBPdf"><?php echo $r_basic['download_pdf'] . " / ".$r_basic['limit_download_pdf'] ?></span></div>
										</div>
										<br/>
										<span>Batas Edit:<span>
										<div class="progress">
											<div class="progress-bar bg-success" id="editBasic" role="progressbar" aria-label="Example with label" style="width: <?php echo ($r_basic['edit']/$r_basic['limit_edit'])*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $r_basic['edit'] . " / ".$r_basic['limit_edit'] ?></div>
										</div>
										<br/>
										<span>Batas Hapus:<span>
										<div class="progress">
											<div class="progress-bar bg-danger" id="hapusBasic" role="progressbar" aria-label="Example with label" style="width: <?php echo ($r_basic['hapus']/$r_basic['limit_hapus'])*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $r_basic['hapus'] . " / ".$r_basic['limit_hapus'] ?></div>
										</div>
									</div>
						<?php			
								}else if($paket==2 || $paket==3){
									$sql = "SELECT * FROM table_user as a LEFT JOIN subscribe as b ON a.id_subscribe = b.id LEFT JOIN unlimited_subs c ON c.id = b.id_paket_unli WHERE a.email ='$email'";
									$result = mysqli_query($con, $sql);
									$r = mysqli_fetch_assoc($result);

									$dateCreated = $r['created_at'];
									$dateExpired = $r['expired'];

									$diff = strtotime($dateNow) - strtotime($dateCreated);
									$daysTillNow = abs($diff/(60 * 60)/24);
									
									$diff = strtotime($dateExpired) - strtotime($dateCreated);
									$daysTillExpired = abs($diff/(60 * 60)/24);
						?>
								<div class="free-premium-limit">
									<center><span><b>Mode Unlimited</b></span><br/><br/></center>
									<span>Batas Hari : <?php echo $dateExpired; ?></span>
									<div class="progress">
										<div class="progress-bar" id="downloadInd" role="progressbar" aria-label="Example with label" style="width: <?php echo ($daysTillNow/$daysTillExpired)*100; ?>%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo $daysTillNow . " / ". $daysTillExpired . "Hari"; ?></div>
									</div>
								</div>
						<?php	
								}
							}
						?>
							
					</div>
				</div>
				<div class="col-lg-9 nav-info-user">
					<nav>
					  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="background-color: #fff;">
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
							        		$sql = "SELECT * FROM identitas_sekolah WHERE id_user = '$id_user' ORDER BY created_at DESC";
							        		$result = mysqli_query($con, $sql);
							        		$i=1;
											while($r = mysqli_fetch_assoc($result)){
												echo "
													<tr>
										        		<td>".$i."</td>
										        		<td>".$r['created_at']."</td>
										        		<td>".$r['program_keahlian']."</td>
										        		<td>".$r['mata_pelajaran']."</td>
										        		<td>".$r['kelas']."/".$r['semester']."</td>
										        		<td>";
															if($_SESSION['is_subscribe']==0){
																echo "
																	<center><button type='button' class='btn btn-primary btn-download' data-id='".$r['id']."' data-limit='".$_SESSION['limit_free']."' data-downloads='".$_SESSION['downloads_free']."' id='downloadDocs' data-ext='docx' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='subscribe(this);' >Download Docs </button></center>
																	<center><button type='button' class='btn btn-danger btn-download mt-10' data-id='".$r['id']."' data-limit='".$_SESSION['limit_free']."' data-downloads='".$_SESSION['downloads_free']."' id='downloadPdf' data-ext='pdf' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='subscribe(this);'>Download PDF</button></center>
																";
															}else{
																if($paket==1){
																	echo "
																		<button class='btn btn-primary btn-download' data-ext='docx' data-id='".$r['id']."'  id='subscribePdf' onclick='downloadBasic(this);'>Download Docs</button>
																		<button class='btn btn-danger btn-download mt-10'  data-ext='pdf' data-id='".$r['id']."' id='subscribePdf' onclick='downloadBasic(this);'>Download PDF</button>
																	";
																}else{
																	echo "
																		<a class='btn btn-primary btn-download' href='./download-modul.php?id=".$r['id']."&ext=docx' target='_blank' id='subscribePdf' onclick='getMotivasi();'>Download Docs</a>
																		<a class='btn btn-danger btn-download mt-10' href='./download-modul.php?id=".$r['id']."&ext=pdf' target='_blank' id='subscribePdf' onclick='getMotivasi();'>Download PDF</a>
																	";
																}
																
															}
										        			
										        echo "
														</td>
										        		<td>";
														if($_SESSION['is_subscribe']==0){
															echo "
																<center><a href='../pricing' class='btn btn-success btn-action'>Edit</a></center>
										        				<center><a href='../pricing' class='btn btn-danger btn-action mt-10'>Hapus</a></center>";
														}else{
															if($paket==1 && $r_basic['hapus']>=$r_basic['limit_hapus']){
																echo "
																<center><button type='button' class='btn btn-success btn-action' data-id='".$r['id']."' onclick='editModul(this);'>Edit</button></center>
																<center><a href='../pricing' class='btn btn-danger btn-action mt-10'>Hapus</a></center>";
															}else{
																echo "
																<center><button type='button' class='btn btn-success btn-action' data-id='".$r['id']."' onclick='editModul(this);'>Edit</button></center>
																<center><button type='button' class='btn btn-danger btn-action mt-10' data-paket='".$paket."' data-id='".$r['id']."' onclick='hapusModul(this);'>Hapus</button></center>";
															}
														}
										        echo "			
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
										<form method="POST" enctype="multipart/form-data" id="formModul">
									    	<div class="carousel-item active">
									      		<h5>A. IDENTITAS SEKOLAH (INFORMASI UMUM)</h5>
									      		<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Nama Penyusun</span>
												  <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $_SESSION['nama']; ?>" disabled="disabled" id="namaPenyusun" required>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Satuan Pendidikan</span>
												  <input type="text" class="form-control" placeholder="Satuan Pendidikan" value="<?php echo $_SESSION['sekolah']; ?>" disabled="disabled" id="satuanPend" required>
												</div>
												<div class="input-group mb-3 mt-3">
												  <span class="input-group-text" id="basic-addon1">Tahun Ajaran<span class="bintang-merah">*</span></span>
												  <input type="text" class="form-control" placeholder="Tahun Ajaran"  aria-describedby="basic-addon1" list="tahunajar-options" id="tahunAjar" name="tahunAjar" required>
												    <datalist id="tahunajar-options">
														<option value="2020/2021">2020/2021</option>
														<option value="2021/2022">2021/2022</option>
														<option value="2022/2023">2022/2023</option>
													</datalist>
												</div>
												<div class="input-group mb-3">
													<label class="input-group-text" for="inputGroupSelect01">Program Keahlian<span class="bintang-merah">*</span></label>
													<select class="form-select" id="programKeahlian" name="programKeahlian" required>
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
													<label class="input-group-text" for="inputGroupSelect01">Mata Pelajaran<span class="bintang-merah">*</span></label>
													<select class="form-select" id="mapel" name="mapel" required>
															<option selected>Choose...</option>
													</select>
												</div>
												<div class="input-group mb-3">
												  <span class="input-group-text">Kelas, Semester, dan Fase<span class="bintang-merah">*</span></span>
												  	<select class="form-select" id="kelas" name="kelas" required>
													    <option selected>Choose...</option>
													    <option value="x">X</option>
													    <option value="xi">XI</option>
													    <option value="xii">XII</option>
													</select>
												  	<select class="form-select" id="semester" name="semester" required>
													    <option selected>Choose...</option>
													    <option value="1">1</option>
													    <option value="1">2</option>
													</select>
													<input type="text" class="form-control" placeholder="Fase" aria-label="Username" aria-describedby="basic-addon1" id="fase" name="fase" value="" disabled="disabled">
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Elemen<span class="bintang-merah">*</span></span>
														<select class="form-select" id="elemen" name="elemen" required>
															<option selected>Choose...</option>
														</select>
												</div>
												<div class="input-group mb-3">
														<span class="input-group-text">Capaian Pembelajaran<span class="bintang-merah">*</span></span>
														<textarea class="form-control" id="cp" name="cp" disabled="disabled" rows="6" required></textarea>
												</div>
												<div class="multiple-inputs" id="multipleInputs">
														<span>Meteri :<span class="bintang-merah">*</span></span>
														<div class="list-input mt-3">
															<div id="inputs-materi">
																<div class="list-kosong" id="list-kosong-materi">Tidak ada materi</div>
															</div>
														</div>
														<div class="input-group mb-3 mt-3">
															<input type="text" class="form-control" list="materi-options" id="materi-input" placeholder="Materi belajar" required>
														  	<datalist id="materi-options">
															</datalist>
															<button class="btn btn-success" type="button" data-pp="1" onclick="addMateri();">+</button>
														</div>
												</div>
												
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Alokasi Waktu<span class="bintang-merah">*</span></span>
													<input type="text" class="form-control" placeholder="Alokasi Waktu" aria-label="Username" aria-describedby="basic-addon1" id="alokasiW" name="alokasiW" required>
													<button type="button" class="btn"
															data-bs-toggle="tooltip" data-bs-placement="top"
															data-bs-html="true"
															data-bs-title="<b>Contoh:</b><br/>1 x 45 menit">
															<i class="bi bi-info-circle"></i>
													</button>
												</div>
												<br/>
												<h5>B. KOMPETENSI AWAL<span class="bintang-merah">*</span></h5>
									      		<div class="multiple-inputs" id="multipleInputs">
													<div id="inputs-ka">
														<div class="input-group flex-nowrap mb-3 mt-3 input-ka" id="inputKA1">
															<span class="input-group-text" id="addon-wrapping-ka1">1</span>
															<input type="text" class="form-control" placeholder="Kompetensi Awal 1" aria-label="Username" aria-describedby="addon-wrapping"  id="inputKa1" onkeyup="keyUpKA(this)">
															<button class="btn btn-danger" id="button-addon2-ka1"  type="button" data-ka="1" id="button-addon-ka2" onclick="hapusKA(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addKA"> + Kompetensi Awal</button>
												</div>
												<br/>
												<h5>C.  PROFIL PELAJAR PANCASILA</h5>
												<div class="multiple-inputs " id="multipleInputs">
														<span>Profil Pelajar Pancasila : <span class="bintang-merah">*</span></span>
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
														<span>Media pembelajaran yang digunakan :<span class="bintang-merah">*</span></span>
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
														<span>Sumber belajar yang digunakan :<span class="bintang-merah">*</span></span>
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
													<span class="input-group-text" id="basic-addon1">Target Peserta Didik<span class="bintang-merah">*</span></span>
													<input type="text" class="form-control" placeholder="Target Peserta Didik" aria-label="Username" aria-describedby="basic-addon1" id="target" name="target">
												</div>
												<br/>
												<h5>F. MODEL PEMBELAJARAN</h5>
												<div class="input-group mb-3 mt-3">
													<span class="input-group-text" id="basic-addon1">Model Pembelajaran<span class="bintang-merah">*</span></span>
													<select class="form-select" id="model" name="model">
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
												<div class="outer-btn">
													<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" id="next1" data-next="2" onclick="validatePage1();">
											    		<span >Next</span>
									  				</button>
									  				<span class="ket-slide">1 dari 3</span>
												</div>
											  	

									    	</div>
									    	<div class="carousel-item">
									    		<h5>A. TUJUAN PEMBELAJARAN (KOMPONEN INTI)</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
														<span>Tujuan Pembelajaran :<span class="bintang-merah">*</span></span>
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
												<h5>B. PEMAHAMAN BERMAKNA<span class="bintang-merah">*</span></h5>
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
												<h5>C. PERTANYAAN PEMANTIK<span class="bintang-merah">*</span></h5>
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
														<span>Persiapan Pembelajaran :<span class="bintang-merah">*</span></span>
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
												<br/>
												<h5>E. KEGIATAN PEMBELAJARAN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<b><span>Pertemuan 1</span></b>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Pendahuluan</span>
														</div>
														<div class="col-lg-9">
															<span>Kegiatan Pendahuluan :<span class="bintang-merah">*</span></span>
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
													<br/>
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Inti</span>
														</div>
														<div class="col-lg-9">
															<span>Kegiatan Inti :<span class="bintang-merah">*</span></span>
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
															<span>Kegiatan Penutup :<span class="bintang-merah">*</span></span>
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
												<br/>
												<h5>F. ASESMEN</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
													<div class="row mt-3">
														<div class="col-lg-3 bg-head">
															<span>Asesmen non Kognitif</span>
														</div>
														<div class="col-lg-9">
															<span>Asesmen non Kognitif :<span class="bintang-merah">*</span></span>
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
															<span>Asesmen Kognitif :<span class="bintang-merah">*</span></span>
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
															<span>Asesmen Formatif :<span class="bintang-merah">*</span></span>
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
															<span>Asesmen Suamtif :<span class="bintang-merah">*</span></span>
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
												<br/>
												<h5>G. PENGAYAAN DAN REMEDIAL</h5>
									    		<div class="multiple-inputs " id="multipleInputs">
							    					<span>Pengayaan dan Remedial :<span class="bintang-merah">*</span></span>
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
									    			<span>Refleksi Peserta Didik dan Guru :<span class="bintang-merah">*</span></span>
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
											  	<button class="btn btn-primary btn-create ml-10" type="button" data-bs-target="#carouselExampleControls" onclick="validatePage2();">
											    	<span >Next</span>
								  				</button>
								  				<span class="ket-slide">2 dari 3</span>
									    	</div>
									    	<div class="carousel-item">
									    		<h5>A. LEMBAR KERJA PESERTA DIDIK (LAMPIRAN)<span class="bintang-merah">*</span></h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div class="input-group">
														<input type="file" class="form-control" id="lkpd">
													</div>
									    		</div>
									    		<br/>
									    		<h5>B. BAHAN BACAAN GURU DAN PESERTA DIDIK<span class="bintang-merah">*</span></h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div id="inputs-bahan">
														<div class="input-group flex-nowrap mb-3 mt-3 input-bahan" id="inputBAHAN1">
															<span class="input-group-text" id="addon-wrapping-bahan1">1</span>
															<textarea class="form-control" name="bahan1" id="inputBahan1" rows="2" placeholder="Bahan Bacaan 1"></textarea>
															<button class="btn btn-danger" id="button-addon2-bahan1"  type="button" data-bahan="1"  onclick="hapusBAHAN(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addBAHAN"> + Bahan Bacaan</button>
									    		</div>
									    		<br/>
									    		<h5>C. GLOSARIUM<span class="bintang-merah">*</span></h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div id="inputs-glos">
														<div class="input-group flex-nowrap mb-3 mt-3 input-glos" id="inputGLOS1">
															<span class="input-group-text" id="addon-wrapping-glos1">1</span>
															<textarea class="form-control" name="glos1" id="inputGlos1" rows="2" placeholder="Glosarium 1"></textarea>
															<button class="btn btn-danger" id="button-addon2-glos1"  type="button" data-glos="1"  onclick="hapusGLOS(this);">Hapus</button>
														</div>
													</div>
													<button type="button" class="btn btn-success" id="addGLOS"> + Glosarium</button>
									    		</div>
									    		<br/>
									    		<h5>D. DAFTAR PUSTAKA<span class="bintang-merah">*</span></h5>
									    		<div class="multiple-inputs " id="multipleInputs">
									    			<div id="inputs-dafpus">
														<div class="input-group flex-nowrap mb-3 mt-3 input-dafpus" id="inputDAFPUS1">
															<span class="input-group-text" id="addon-wrapping-dafpus1">1</span>
															<textarea class="form-control" name="dafpus1" id="inputDafpus1" rows="2" placeholder="Daftar Pustaka 1"></textarea>
															<button class="btn btn-danger" id="button-addon2-dafpus1"  type="button" data-dafpus="1"  onclick="hapusDAFPUS(this);">Hapus</button>
														</div>
													</div>
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
								  				<span class="ket-slide">3 dari 3</span>
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
	
	<?php if($_SESSION['is_subscribe']==0){ ?>
		<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<img class="logo-icon-modal" src="../images/logo-removebg-preview.png" alt="logo">
						<h5>&nbsp;&nbsp;&nbsp;Preview Modul Ajar</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body large" style="text-align: center; color: #686868; padding: 10px 50px;">
						<div class="row">
							<div class="col-8">
								<embed
									src=""
									type="application/pdf"
									frameBorder="0"
									scrolling="auto"
									height="360px"
									width="100%"
									id="embedPDF"
								></embed>
							</div>
							<div class="col-4 btn-pdf">
								<h4>Subscribe untuk menampilkan semua poin pada modul ajar</h4>
								<p>Semua poin akan tercetak di dalam modul jika anda berlangganan, yuk mulai berlangganan!</p>
								<a class="btn btn-outline-secondary btn-nanti" target="_blank" id="previewPdf" onclick="getMotivasi();">Download Preview</a>
								<a class="btn btn-success btn-subscribe " target="_blank" id="subscribePdf" onclick="downloadsFree();">Download Full Modul</a>

							</div>

							<div class="col-4 btn-docx">
								<h4>Subscribe untuk menampilkan semua poin pada modul ajar</h4>
								<p>Semua poin akan tercetak di dalam modul jika anda berlangganan, yuk mulai berlangganan!</p>
								<a class="btn btn-outline-secondary btn-nanti " target="_blank" id="previewDocx" onclick="getMotivasi();">Download Preview</a>
								<a class="btn btn-success btn-subscribe btn-docx"  target="_blank" id="subscribeDocx" onclick="downloadsFree();">Download Full Modul</a>
							</div>
						</div>

					</div>
					<div class="modal-footer" style="padding:20px 0; ">
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	

	<div class="toast-container position-fixed bottom-0 end-0 p-3">
	  <div id="showMsg" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	    </div>
	    <div class="toast-body" id="msg-toast">
	    </div>
	  </div>
	</div>
	
	
	<div class="toast-container position-fixed top-0 end-0 p-3">
	  <div id="motivationToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" data-bs-config='{"delay":10000}' aria-label="Close"></button>
	    </div>
	    <div class="toast-body" id="msg-motiv-toast">
	    </div>
	  </div>
	</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="../js/plugins/jquery-save-as-you-type-master/source/sayt.min.jquery.js"></script>
	<script type="text/javascript" src="../js/plugins/jquery-save-as-you-type-master/dependencies/jquery-cookie.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
	<script type="text/javascript" src="../js/create-modul-ajar/create-modul-ajar.js"></script>
	<script type="text/javascript" src="../js/create-modul-ajar/form.js"></script>
	

	
</html>
