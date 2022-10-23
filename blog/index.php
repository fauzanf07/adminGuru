<?php 	
	session_start();
		
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="../style/blog/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <meta name="description" content="Sebuah website yang dapat memudahkan para Pengajar dalam membuat Modul Ajar atau RPP dan memiliki Blog mengenai Pendidikan yang dapat dibaca oleh semua kalangan. Pengajar hanya mengisi sebuah inputan yang diperlukan dan website akan langsung mengkonversi inputan tersebut dalam file Word dan PDF">
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
				<div class="collapse navbar-collapse" id="navbarNav"  >
					<ul class="navbar-nav mb-2 mb-lg-0">
						<li class="nav-text" >
							<a class="nav-link" aria-current="page" href="../">Home</a>
						</li>
						<li class="nav-text">
							<a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a>
						</li>
						<li class="nav-text">
							<?php 	
								if(isset($_SESSION['nama'])){
									echo '<a class="nav-link" href="../create-modul-ajar">Create Modul</a>';
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

    <div class="row-1">
        <div class="date">
            <time datetime="2022-10-16">Minggu, 16 Oktober 2022</time>
        </div>
        <div class="blog-title">
            <h1>Apa itu Pendidikan?</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
					<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Convallis enim, nibh elit urna sem ante mus vitae ut. Id sem iaculis ac tempus mattis eget arcu urna. Ut eget dictum nulla blandit tellus morbi risus. Bibendum duis amet pellentesque sit. Ipsum, ut rhoncus sit lorem egestas sed libero, turpis ante. Pellentesque ut risus pellentesque in. Ipsum, aliquam in egestas nisi. Aliquet quam lectus risus lorem egestas euismod. Pulvinar sem pulvinar nisi diam tortor vulputate diam orci. Platea tempor maecenas sed arcu.</p>
				</div>
				<div class="col-md-auto">
      				<div class="vertical-line"></div>
    			</div>
				<div class="col col-lg-2">
					<a class="table-of-contents" href="#">-consectetur adipiscing elit</a>
					<a class="table-of-contents" href="#">-consectetur adipiscing elit</a>
					<a class="table-of-contents" href="#">-consectetur adipiscing elit</a>
				</div>
            </div>
        </div>
    </div>

</body>

</html>