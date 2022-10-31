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
            <h1>Pemberian Apresiasi Sebagai Upaya Mengurangi Masalah Belajar Pada Siswa</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <p>Masalah belajar adalah suatu kondisi tertentu yang dialami oleh seorang individu yang menghambat kelancaran proses belajarnya. ( Erman,dan Marjohan,1991)</p>
                    <p>Masalah belajar adalah masalah yang sering kali dihadapi oleh sebagian orang. Bentuk masalah belajar yang dialami oleh siswa itu biasanya berkaitan dengan waktu. Masih banyak sekali siswa belum mampu memanfaatkan waktu dengan sebaik mungkin untuk belajar. Selain itu masih banyak siswa yang tidak memiliki salinan tugas sekolah mereka.</p>
                    <p>Hal itu terjadi karena setiap tugas yang diserahkan jika selandainya tugas tersebut tidak dikembalikan lagi oleh guru, maka para siswa tidak dapat mempelajarinya kembali. Dan sebenarnya juga masih banyak siswa yang tidak mengulangi kembali materi yang diberikan guru sebagai persiapan penyelesaian tugas. </p>
                    <p>Masalah lainnya yang memengaruhi proses belajar adalah siswa yang tidak mampu mencapai tujuan belajar atau hasil belajar sesuai dengan pencapaian teman-teman seusianya yang ada dalam kelas yang sama, siswa yang mengalami keterlambatan akademik, dll. (Ibrahim, 2013)</p>
                    <p>Sebagai guru, tentunya sudah tidak jarang dalam menangani siswa yang mengalami kesulitan belajar. Banyak siswa yang sangat sulit sekali mencerna suatu pelajaran, baik pelajaran membaca, menulis serta berhitung. Hal ini terkadang membuat guru menjadi terpikir bagaimana menghadapi maupun menangani siswa yang mengalami kesulitan belajar. (Syah, 2002)</p>
                    <p>Siswa yang mengalami kesulitan belajar itu memerlukan bimbingan dan juga penanganan secara khusus. Mereka bukanlah tidak bisa belajar, atau bahkan tidak pintar. Hanya saja membutuhkan perhatian lebih serta bimbingan untuk mengatasi kesulitan belajar yang mereka alami.</p>
                    <p>Oleh sebab itu, maka dibutuhkanlah seorang guru yang memiliki kreativitas serta ilmu pengetahuan di dalam melaksanakan kewajibannya sebagai seorang pengajar, pembimbing, pelatih dan sebagainya.</p>
                    <p>Dalam hal ini peran guru sangat penting untuk menangani masalah belajar pada siswa. Guru diharapkan bisa menangani secara khusus terhadap siswa yang memiliki masalah pada belajar. Bahkan dengan ulangan yang ketat atau guru memberikan bimbingan, pemberian hadiah, pujian bahkan bila perlu hukuman sehingga memberikan motivasi proses belajar mengajar dan ini sangat berpengaruh terhadap penanganan siswa yang mengalami masalah dalam belajar.</p>
                    <p>Pemberian apresiasi atau penghargaan terhadap anak memiliki dampak yang luar biasa terhadap pribadi mereka. Merasa diri mereka dihargai, disayangi, dan dicintai. Apresiasi memberikan efek yang menenangkan dan membuat siswa lebih nyaman dan santai. Apresiasi atau penghargaan yang tulus akan menghasilkan senyuman yang indah dari siswa. </p>
                    <p>Selain menyenangkan hati siswa, apresiasi atau penghargaan juga bisa menjadi obat bagi hati yang terluka. Apresiasi yang kita berikan dapat membuat siswa melihat sisi positif dalam dirinya dan berhenti menyalahkan dirinya sendiri. Di samping itu, apresiasi dapat membuat siswa lebih dihargai oleh orang lain, baik itu dari segi usaha, kebaikan, dan kecerdasannya. (Zuyyina & Anifa, 2020)</p>
                    <p>Apresiasi terhadap siswa ini berpengaruh dalam penanganan masalah belajar mereka. Oleh karena itu, melalui apresiasi, mereka menjadi termotivasi untuk lebih giat dan bersemangat dalam belajar karena mereka merasa dihargai atas apa yang telah mereka lakukan.</p>
                    <br>
                    <div class="daftar-pustaka">
                        <p>https://www.kompasiana.com/mhmmeeddd/6348494008a8b524984eba22/masalah-belajar-dapat-dikurangi-dengan-apresiasi?page=2&page_images=1</p>
					</div>
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