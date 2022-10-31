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
            <h1>7 Cara Pengajaran Efektif dalam Kurikulum Merdeka</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-guru-3.PNG" alt="Guru"></center>
                    </div>
                    <p>Rendahnya literasi dan numerasi siswa-siswa Indonesia tentu menjadi suatu hal yang perlu dipertimbangkan. Pandemi selama 2 tahun terakhir juga justru memperburuk keadaan dan kualitas pendidikan di Indonesia. Salah satu cara untuk menanggulangi hal tersebut adalah dengan penerapan kurikulum baru, yaitu Kurikulum Merdeka. </p>
                    <p>Kurikulum Merdeka memiliki harapan agar siswa dapat lebih mudah dalam memahami materi karena para guru diberikan “kemerdekaan” dalam mengajar. Guru dibebaskan untuk memilih metode pengjaran yang sesuai dengan kebutuhan dan karakteristik siswa. Namun tetap saja, sebagus apapun kurikulumnya, sematang apapun kurikulumnya, tidak akan berhasil 100% jika guru tidak dapat memberikan pengajaran yang efektif di dalam kelas.</p>
                    <br>
                    <h4>7 Cara untuk Memberikan Pengajaran yang Efektif</h4>
                    <p>Sebelum masuk ke topik ini, kita harus setuju dan sepakat bahwa pengajaran efektif yang dimaksud adalah suatu pengajaran dimana seluruh siswa mampu paham apa yang disampaikan oleh guru sehingga tujuan pembelajarannya tercapai. Maka untuk memberikan pengajran yang efektif, guru harus memahami dan menguasai aspek-aspek dalam pengajaran yaitu:</p>
                    <p>1.	Memahami materi</p>
                    <p>2.	Memahami konteks</p>
                    <p>3.	Memahami siswa dan gaya belajar</p>
                    <p>4.	Memahami pedagogi</p>
                    <p>5.	Memahami kurikulum</p>
                    <p>6.	Memahami keterbatasan konten</p>
                    <p>7.	Memahami asesmen</p>
                    <p>Aspek-aspek tersebut telah terangkum apik menjadi satu kesatuan yang dikenal dengan istilah PCK (Pedagogical Content Knowledge). PCK sendiri merupakan sebuah teori yang sudah ada sejak 1986 dan terus berkembang seiring berjalannya waktu. Bahkan PCK sendiri telah diajarkan kepada mahasiswa kependidikan di Australia.</p>
                    <br>
                    <h4>Kaitan Kurikulum Merdeka dengan PCK</h4>
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-guru-3-2.PNG" alt="Guru"></center>
                    </div>
                    <p>Perlu Anda ketahui, aspek-aspek di dalam Kurikulum Merdeka juga terdapat di dalam PCK itu sendiri. Dalam Kurikulum Merdeka kita mengenal istilah “pertanyaan pemantik”, dimana seorang guru memberikan pertanyaan diawal pengajaran agar siswa merasa tertarik dan termotivasi untuk belajar, maka hal tersebut sesuai dengan PCK aspek 2, yaitu memahami konteks. Memahami konteks artinya guru harus mampu memberikan contoh, analogi, dan studi kasus berdasarkan pengalaman siswa agar siswa merasa relate dengan materi pengajaran dan tertarik untuk belajar.</p>
                    <p>Selain pertanyaan pemantik, kita semua tahu bahwa dalam Kurikulum Merdeka, guru diberikan kebebasan dalam memilih metode pengajaran karena akan disesuaikan dengan karakteristik siswa masing-masing. Hal ini sejalan dengan PCK aspek 3, yaitu memahami siswa dan gaya belajar, Pada aspek tersebut guru diharuskan mengetahui kemampuan kogntifif siswa, gaya belajar siswa, latar belakang sosioekonomi siswa, dan semua hal yang berkaitan dengan siswa. Karena untuk karakter yang berbeda-beda tentu membutuhkan pendekatan yang berbeda-beda juga.</p>
                    <p>Seperti disampaikan di awal tadi, PCK sejatinya adalah aspek-aspek yang seharusnya dikuasai oleh para guru agar dapat memberikan pengajaran yang efektif kepada siswa. Hal ini tentu sejalan dengan prinsip Kurikulum Merdeka dimana guru memberikan pengajaran yang disesuaikan dengan karakter siswa tanpa melupakan nilai-nilai positif untuk menjadi pelajar Pancasila.</p>
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