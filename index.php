<?php 	
	session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="style/landing-page/style.css">
	<link rel="icon" type="image/x-icon" href="images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.8">
</head>

<body>
	<div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-light">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo">
						<img class="logo-icon" src="images/logo-removebg-preview.png" alt="logo">
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

                <div class="collapse navbar-collapse navbar-left" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="blog">Blog</a>
                        </li>
                    </ul>
                </div>
                
				<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
						<?php
							if(!isset($_SESSION['nama'])){
								echo '<li class="nav-text"><a class="nav-link active" href="./login"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a></li>';
							}else{
								echo '<li class="nav-text"><a class="nav-link active" href="backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li><li class="nav-text"><a class="nav-link active" href="./create-modul-ajar">Create Modul</a></li>';
							}

						 ?>
						
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

	<div class="content">
		<div class="row-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h1 class="title-row-1">
							ADMINISTRASI<br><span>GURU</span>
						</h1>
						<h3 class="desc-row-1">Menjadikan pekerjaan guru lebih mudah.</h3>
						<div class="btn-contact">
							<button type="button" class="btn btn-primary btn-lg">CONTACT US</button>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="img-laptop">
							<img src="images/laptop.png" alt="laptop">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 img-row-2">
						<img src="images/woman.png" alt="woman">
					</div>
					<div class="col-lg-6">
						<div class="desc-row-2">
							<div class="divtitle-row-2">
								<h2 class="title-row-2">
									KEUNGGULAN
								</h2>
							</div>
							<h2 class="advantage-row-2">
								<span class="number-row-2">1</span> Semudah pilihan ganda
							</h2>
							<h2 class="advantage-row-2">
								<span class="number-row-2">2</span> Tanpa perlu instalasi
							</h2>
							<h2 class="advantage-row-2">
								<span class="number-row-2">3</span> Dikerjakan dimana saja
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row-3">
			<h1 class="title-row-3">
				CARA PENGERJAAN
			</h1>
			<div class="img-tutorial">
				<img src="images/tutorial.png" alt="tutorial">
			</div>
			<div class="link-video-tutorial">
				<a href="#" class="btn btn-lg" role="button" aria-pressed="true"><i class="fa-solid fa-play"></i>TUTORIAL</a>
			</div>
		</div>

		<div class="row-4">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="images/slide 1.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/slide 2.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/slide 3.jpg" alt="Third slide">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>
		</div>

		<div class="row-5">
			<h1 class="title-row-4">
				BAGIAN DARI
			</h1>
			<div class="img-row-5-1">
				<img src="images/wira-core.png" alt="Wirausaha Merdeka dan Core by LPIK ITB">
			</div>
			<div class="img-row-5-2">
				<img src="images/ITB-LPiK ITB-lpdp-Kampus Merdeka.png" alt="ITB, LPiK ITB, lpdp, dan Kampus Merdeka">
			</div>
		</div>
	</div>

	<footer>
		<div class="background-footer"></div>
		<div class="copyright">
			<p>© adminguru.id. Hak cipta dilindungi Undang-Undang.</p>
		</div>
	</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="js/landing-page/landing-page.js"></script>
<script src="https://kit.fontawesome.com/e12a3e12fa.js" crossorigin="anonymous"></script>
</html>