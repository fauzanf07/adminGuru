<?php 	
	session_start();
		
 ?>
<!DOCTYPE html>
<html>

<head>
	<title>adminguru &centerdot; Blog</title>
	<link rel="stylesheet" type="text/css" href="../style/blog/style.css">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.7">
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

                <div class="collapse navbar-collapse navbar-left" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
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

    <div class="row-1">
        <div class="date">
            <time datetime="2022-10-16">Minggu, 16 Oktober 2022</time>
        </div>
        <div class="blog-title">
            <h1>Lima Kiat Guru Belajar Profesional</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-tentang-guru-3.PNG" alt="Guru"></center>
                    </div>
                    <p>Guru profesional senantiasa menguasai bahan atau materi pelajaran yang akan diajarkan dalam interaksi belajar mengajar, serta senantiasa mengembangkan kemampuan secara berkelanjutan, baik dalam segi ilmu yang dimilikinya maupun pengalamannya.</p>
                    <p>Penguasaan terhadap standar kompetensi dan kompetensi dasar setiap mata pelajaran atau bidang yang dikuasai. Melakukan pengembangan materi pembelajaran yang dikuasai dengan kreatif. Melakukan pengembangan profesionalitas secara berkelanjutan dengan melakukan tindakan yang reflektif</p>
                    <p>Berikut lima kiat guru belajar professional:</p>
                    <p>1. Komunitas Praktisi. Komunitas Praktisi adalah “Sekelompok individu yang memiliki semangat dan kegelisahan yang sama tentang praktik yang mereka lakukan dan ingin melakukannya dengan lebih baik dengan berinteraksi secara rutin” (Wenger, 2012). Langkah pertama yang bisa dilakukan untuk membuat guru menjadi profesional, yaitu dengan mengikuti komunitas-komunitas praktisi yang ada, seperti dengan rekan guru satu sekolah, KKG, MPMG, MGBK, MKKS, serta organisasi guru lainnya.</p>
                    <p>2. Belajar Daring. Langkah atau tips kedua, yaitu dengan belajar daring yang dimaksud adalah mengikuti kegiatan-kegiatan webinar, podcast, aktif melihat konten perkembangan guru di media social, serta rajin membaca blog terkait guru. Dengan mengikuti kegiatan tersebut, akan membantu guru memiliki banyak relasi dan membantu membangun karakter seorang guru.</p>
                    <p>3. Tatap Muka. Dimaksudkan tatap muka di sini ialah mengikuti semacam seminar, lokakarya atau konferensi, untuk membangun kompetensi guru.</p>
                    <p>4. Peneliatan. Arti penelitian di sini, selain melakukan hal-hal yang telah disebutkan di atas, seorang guru perlu melakukan sebuah penelitian, seperti peka terhadap sesuatu (masalah) yang terjadi, sehingga membuat guru langsung tergerak untuk mengatasi masalah tersebut. Mengapa hal  tersebut bisa terjadi, segara mencari tahu solusi apa yang  baik untuk dilakukan.</p>
                    <p>5. Sekolah. Dan terakhir, tentu saja pendidikan yang dimiliki oleh seorang guru, hal ini dapat menentukan tingkat profesional guru.</p>
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