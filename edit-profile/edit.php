<?php 
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: ../login");
	}
	include("../backend/conn.php");


	$email = $_GET['email'];

	$sql = "SELECT * FROM table_user WHERE email = '$email'";
	$result = mysqli_query($con, $sql);
	$r = mysqli_fetch_assoc($result);
	$id_user = $r['id'];


 ?>
<!DOCTYPE html>
<html>

<head>
	<title>adminguru &centerdot; Edit Profile</title>
	<link rel="stylesheet" type="text/css" href="../style/edit-profile/style.css?version=1.0">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<meta name="viewport" content="width=device-width, initial-scale=0.7">
</head>

<body>
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
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-facebook"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-twitter"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="http://instagram.com/adminguruid" target="_blank"><i class="bi bi-instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

    <div class="row-1">
		<div class="container">
			<div class="row row-profile">
				<div class="col-lg-3">
                    <center><img src="../images/profile-img/<?php echo $_SESSION['profile_img']; ?>" class="profile-pic" id="profile-pic"></center>
                    <h3 class="profile-name"><?php echo $_SESSION['nama']; ?></h3>
                    <div class="info">
                        <span class="info-item"><i class="bi bi-card-heading"></i>&nbsp;&nbsp;  <?php echo $_SESSION['nip']; ?></span>
                        <span class="info-item"><i class="bi bi-building"></i>&nbsp;&nbsp; <?php echo $_SESSION['sekolah']; ?></span>
                        <span class="info-item"><i class="bi bi-briefcase"></i>&nbsp;&nbsp; <?php echo $_SESSION['jabatan']; ?></span>
                        <span class="info-item"><i class="bi bi-envelope"></i>&nbsp;&nbsp; <?php echo $_SESSION['email']; ?></span>
                        <span class="info-item"><i class="bi bi-person"></i>&nbsp;&nbsp; <?php echo $_SESSION['mapel']; ?></span>
                    </div>
                </div>
				<div class="col-lg-9 nav-info-user">
					<div class="editprofile-title">
						<h1>Edit Profile</h1>
					</div>
					<div class=form-1>
						<form>
							<div class="row form-group choose-file">
								<div class="col-md-3">
									<img class="change-photo" src="../images/profile-img/<?php echo $_SESSION['profile_img']; ?>" id="profile-pic-edit">
								</div>
								<div class="col-md-9">
									<label class="form-label" for="customFile">Foto Profil</label>
									<input type="file" class="form-control" id="customFile" />
								</div>
							</div>
							<div class="row form-group">
								<label for="inputNama">Nama Lengkap dan Gelar<span>*</span></label>
								<div class="col">
								<input type="text" class="form-control" placeholder="Nama Lengkap dan Gelar" id="namaLengkap" value="<?php echo $r['nama']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputNIP">NIP<span>*</span></label>
								<input type="text" class="form-control" id="inputNIP" placeholder="NIP" value="<?php echo $r['nip']; ?>">
							</div>
							<div class="row">
								<div class="form-group col-md-4">
									<label for="inputSekolah">Sekolah<span>*</span></label>
									<input type="text" class="form-control" id="inputSekolah" placeholder="Sekolah" value="<?php echo $r['sekolah']; ?>">
								</div>
								<div class="form-group col-md-4">
									<label for="inputJabatan">Jabatan<span>*</span></label>
									<select id="inputJabatan" class="form-control">
										<option>Pilih...</option>
										<option <?php if($r['jabatan'] == "Kepala Sekolah") echo "selected"; ?>>Kepala Sekolah</option>
										<option <?php if($r['jabatan'] == "Staff Sekolah") echo "selected"; ?>>Staff Sekolah</option>
										<option <?php if($r['jabatan'] == "Guru") echo "selected"; ?>>Guru</option>
										<option <?php if($r['jabatan'] == "lainnya") echo "selected"; ?>>lainnya</option>
									</select>
								</div>
								<div class="form-group col-md-4">
									<label for="inputMapel">Mata Pelajaran<span>*</span></label>
									<input type="text" class="form-control" id="inputMapel" placeholder="Mapel yang diajarkan" value="<?php echo $r['mapel']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<label for="inputNama">Kepala Sekolah<span>*</span></label>
								<div class="col">
								<input type="text" class="form-control" placeholder="Kepala Sekolah" id="kepsek" value="<?php echo $r['kepala_sekolah']; ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail">Email address<span>*</span></label>
								<input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" value="<?php echo $r['email']; ?>">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="verif">
								<label class="form-check-label" for="verif" >Sudah yakin ingin merubah data<span>*</span></label>
							</div>
							<div class="class-btn">
								<button type="button" class="btn btn-success submit-btn" id="submit" data-id='<?php echo $id_user; ?>'>Simpan Perubahan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="toast-container position-fixed bottom-0 end-0 p-3">
	  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	    </div>
	    <div class="toast-body" id="toastBody">
	      
	    </div>
	  </div>
	</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript" src="../js/edit-profile/edit.js"></script>
</html>