<?php 	
	session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="style/landing-page/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
	<div class="nav-parent">
		<nav class="navbar bg-transparent navbar-expand-lg sticky-top navbar-dark" style="background-color: #FFFFFF;">
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo">
						<img class="logo-icon" src="images/logo-removebg-preview.png" alt="logo">
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav"  >
					<ul class="navbar-nav mb-2 mb-lg-0">
						<li class="nav-text" >
							<a class="nav-link" aria-current="page" href="blog">Blog</a>
						</li>
						<li class="nav-text">
							<?php 	
								if(isset($_SESSION['nama'])){
									echo '<a class="nav-link active" href="backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a>';
								}else{
									echo '<a class="nav-link active" href="login"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a>';
								}
							 ?>
							
						</li>
						<li class="nav-text">
							<?php 	
								if(isset($_SESSION['nama'])){
									echo '<a class="nav-link" href="create-modul-ajar">Create Modul</a>';
								}
							 ?>
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

	<div class="background">
	</div>
	
	<div class="headline">
		<h1>SMARTEACH</h1>
		<h2>Menjadikan Pekerjaan Guru Lebih Mudah</h2>
		<button href="#" type="button" class="btn btn-success btn-lg">Contact Us</button>
	</div>

	<div class="content">
		<div class="row-1">
			<div class="container">
			  	<div class="row">
				    <div class="col">
				     	<img src="https://static.wixstatic.com/media/4c1c57_fc8e75822abf45fea52c68746752d473~mv2.png/v1/crop/x_516,y_0,w_887,h_758/fill/w_550,h_470,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/62d12fd15647b.png" alt="Books" width="550px" height="470px">
				    </div>
				    <div class="col font-col">
				     	<h2 class="the-nineteen">THE NINETEEN</h2>
				     	<h3 class="jargon">Providing solutions for Indonesian education</h3>
				     	<p class="quotes">“Pendidikan adalah senjata paling<br>mematikan di dunia, karena dengan pendidikan,<br>kamu dapat mengubah dunia” – Nelson Mandela</p>
				    </div>
			  	</div>
			</div>
		</div>

		<div class="row-2">
			<h2>HOW DID IT WORK</h2>
			<div class="tutorial">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="text-background">
								<p class="number-1">01</p>
								<div class="text-frontground">
									<p>BUY OUR APP LICENSE</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="text-background">
								<p class="number-2">02</p>
								<div class="text-frontground">
									<p>INSTALL ON YOUR DESKTOP</p>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="text-background">
								<p class="number-3">03</p>
								<div class="text-frontground">
									<p>MAKE ADMINISTRATION 10x FASTER</p>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="button-reserve">
				<button type="button" class="btn btn-outline-dark btn-lg">Reserve My Spot</button>
			</div>
		</div>
		<div class="row-3">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="images/slide1.jpg" alt="First slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/slide2.jpg" alt="Second slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Some representative placeholder content for the third slide.</p>
			      </div>
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

		<div class="row-4">
			<h2>Featured On</h2>
			<div class="row-1">
				<div class="container">
					<div class="row">
						<div class="col">
							<img class="windows" src="https://static.wixstatic.com/media/4c1c57_4313be106c5949c896ceed39a4a22d7c~mv2.png/v1/fill/w_407,h_75,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/Windows_11_logo_svg.png" alt="Windows 11" width="407px" height="75px">
						</div>
						<div class="col">
							<img src="https://static.wixstatic.com/media/4c1c57_76b3c55752394cf18f8a162cebe55afb~mv2.png/v1/fill/w_158,h_152,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/download%20(3).png" alt="Windows 11" width="158px" height="152px">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="js/landing-page/landing-page.js"></script>
</html>