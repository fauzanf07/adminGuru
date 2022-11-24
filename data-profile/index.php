<?php 	
	session_start();
	if(!isset($_SESSION['nama'])){
		header("Location: ../login");
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="../style/data-profile/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <a class="nav-link" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../blog">Blog</a>
                        </li>
                    </ul>
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
                        <li class="nav-text"><a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li>
						
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-facebook"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-twitter"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-youtube"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="row-1">
		<div class="container">
			<div class="row">
				<div class="col"></div>
				<div class="col-lg-9">
					<div class="profile-title">
						<h1>Data Pribadi</h1>
					</div>
                    <b><i><p>*Sebelum memakai fitur pembuatan modul ajar ini, anda harus mengisi data pribadi terlebih dahulu. Silahkan isi data pribadi anda terlebih dahulu di bawah ini!</p></i></b>
					<form>
						<div class="row form-group">
							<label for="inputNama">Nama Lengkap dan Gelar</label>
							<div class="col">
							<input type="text" class="form-control" placeholder="Nama Lengkap dan Gelar" id="namaLengkap" value="<?php echo $_SESSION['nama']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="inputNIP">NIP</label>
							<input type="text" class="form-control" id="inputNIP" placeholder="NIP">
						</div>
						<div class="row">
							<div class="form-group col-md-4">
								<label for="inputSekolah">Sekolah</label>
								<input type="text" class="form-control" id="inputSekolah" placeholder="Sekolah">
							</div>
							<div class="form-group col-md-4">
								<label for="inputJabatan">Jabatan</label>
								<select id="inputJabatan" class="form-control">
									<option selected>Pilih...</option>
									<option>Kepala Sekolah</option>
									<option>Staff Sekolah</option>
									<option>Guru</option>
									<option>lainnya</option>
								</select>
							</div>
							<div class="form-group col-md-4">
								<label for="inputMapel">Mata Pelajaran</label>
								<input type="text" class="form-control" id="inputMapel" placeholder="Mapel yang diajarkan">
							</div>
						</div>
						<div class="row form-group">
							<label for="inputNama">Kepala Sekolah</label>
							<div class="col">
							<input type="text" class="form-control" placeholder="Kepala Sekolah" id="kepsek">
							</div>
						</div>
                        <input type="email" class="form-control" id="inputEmail" placeholder="name@example.com" value="<?php echo $_SESSION['email']; ?>" hidden>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="verif">
							<label class="form-check-label" for="verif" >Semua data sudah benar</label>
						</div>
						<div class="class-btn">
							<button type="button" class="btn btn-success submit-btn" id="submit">Submit <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="spinner"></button>
						</div>
					</form>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="copyright">
			<p>© 2022 by The Nineteen</p>
		</div>
		<div class="background-footer"></div>
	</footer>

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
<script type="text/javascript" src="../js/data-profile/data-profile.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>