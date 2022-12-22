<?php 	
	session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Guru</title>
	<link rel="stylesheet" type="text/css" href="../style/paypage/style.css">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-light">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo">
						<img class="logo-icon" src="../images/Logo-removebg-preview.png" alt="logo">
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

                <div class="collapse navbar-collapse navbar-right" id="navbarNav">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
                
				<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
						<li class="nav-item">
                        	<a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" href="blog">Blog</a>
                        </li>
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

	<div class="row-1">
		<h1>Pricing</h1>
	</div>
	<div class="row-2">
	<div class="container">
		<div class="row">
			<div class="col col-free">
				<div class="bord-1">
					<div class="title-starter">
						<h4>Starter</h4>
						<h3>Free</h3>
					</div>
					<h4>Forever</h4>
					<div class="list-category">
						<h4>- 3 Figma and 3 FigJam files</h4>
						<h4>- Unlimited personal files</h4>
						<h4>- Unlimited collaborators</h4>
						<h4>- Plugins, widgets, and templates</h4>
						<h4>- Mobile app</h4>
					</div>
					<div class="button-starter">
						<a href="signup" class="btn btn-primary btn-lg btn-starter">CHOOSE STARTER</a>
					</div>
				</div>
			</div>
			<div class="col col-professional">
				<div class="bord-2">
					<div class="title-professional">
						<h4>AdminGuru Professional</h4>
						<h3>10$ / month</h3>
					</div>
					<h4>30days or 1 month</h4>
					<div class="list-category">
						<h4>- Unlimited Figma files</h4>
						<h4>- Unlimited version history</h4>
						<h4>- Sharing permissions</h4>
						<h4>- Shared and private projects</h4>
						<h4>- Team libraries</h4>
						<h4>- Audio conversations</h4>
					</div>
					<div class="button-professional">
						<a href="signup" class="btn btn-primary btn-lg btn-professional">CHOOSE PROFESSIONAL</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>