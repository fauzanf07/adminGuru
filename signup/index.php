<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="../style/signup/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #FFFFFF;">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo-icon"></div>
					<div class="logo-text">
						<h4 class="logo-name">THE NINETEEN</h4>
						<a href="#" class="desc"><h4 class="logo-name desc">Providing solutions for Indonesian education</h4></div></a>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Online Course</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
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
					<div class="signup-title">
						<h1>Sign Up</h1>
					</div>
					<form>
						<div class="row form-group">
							<label for="inputNama">Nama</label>
							<div class="col">
							<input type="text" class="form-control" placeholder="First name">
							</div>
							<div class="col">
							<input type="text" class="form-control" placeholder="Last name">
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
								<input type="text" class="form-control" id="inputMapel" placeholder="Mapel">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail">Email address</label>
							<input type="email" class="form-control" id="inputEmail" placeholder="name@example.com">
						</div>
						<div class="form-group">
							<label for="inputUsername">Username</label>
							<input type="text" class="form-control" id="inputUsername" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="inputPassword">Password</label>
							<input type="password" class="form-control" id="inputPassword" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Semua data sudah benar</label>
						</div>
						<button type="submit" class="btn btn-success submit-btn">Submit</button>
					</form>
				</div>
				<div class="col">
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="copyright">
			<p>© 2022 by The Nineteen</p>
		</div>
		<div class="background-footer"></div>
	</div>

</body>

</html>