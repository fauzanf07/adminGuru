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
            <h1>7 Kesalahan Guru di Masa Awal Mengajar</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-tentang-guru-2.PNG" alt="Guru"></center>
                    </div>
                    <p>Guru menjadi penentu bangkit dan berkembangnya suatu bangsa. Tidak heran guru dikenal dengan sosok pahlawan tanpa tanda jasa. Meskipun demikian, guru juga seorang manusia biasa. Kegiatan pembelajaran terkadang tidak mencapai tujuannya karena adanya permasalahan atau kesalahan yang terjadi saat proses belajar mengajar. Oleh sebab itu, guru harus mengetahui kekeliruan yang kerap terjadi saat mengajar sehingga bisa diantisipasi dan dicarikan solusi jika terlanjur terjadi.</p>
                    <p>Berikut ini kesalahan guru di masa awal mengajar yang sering terjadi sehingga target pembelajaran tidak tercapai dengan optimal:</p>
                    <p>1. Mengajar tidak kontekstual. Konsep belajar yang membantu guru mengaitkan antara materi yang diajarkan dengan situasi dunia nyata siswa dan mendorong siswa membuat hubungan antara pengetahuan yang dimilikinya dengan penerapannya dalam kehidupan mereka.</p>
                    <p>2. Memberi tugas tanpa tahu tujuan. Seharusnya, sebelum memberikan tugas, guru harus mengetahui hal apa yang bisa didapatkan oleh siswa setelah mengerjakan tugas tersebut.</p>
                    <p>3. Menilai berdasarkan benar dan salah. Salah satu tugas utama seorang guru adalah melakukan penilaian terhadap hasil belajar siswa. Dalam proses penilaian tersebut terdapat standar yang jelas sehingga hasil penilaian tersebut menjadi sesuatu yang objektif. Penilaian kepada siswa tidak boleh dibuat-buat. Artinya, ketika guru melakukan penilaian harus berdasarkan indikator yang tertuang pada tujuan pendidikan.</p>
                    <p>4. Tidak membuat kesepakatan kelas. Kesepakatan kelas tidak hanya soal peraturan di dalam kelas yang harus ditaati murid dan memberi konsekuensi bagi yang melanggarnya. Dalam membuat kesepakatan kelas, dibutuhkan keterlibatan antara guru dengan murid untuk saling menyepakati bagaimana kondisi kelas yang diinginkan. Adanya kesepakatan kelas, akan memandu murid untuk senantiasa komitmen terhadap kesepakatan yang telah disepakati bersama.</p>
                    <p>5. Ulangan adalah nilai utama. Terkadang guru memilih jalan paling mudah dalam melakukan penilaian sehingga akurasinya tidak dapat dipertanggungjawabkan, misalnya memberikan nilai berdasarkan hasil pekerjaan siswa saja, menilai berdasarkan hubungan keluarga, dan lain sebagainya. Bahkan sering sekali guru hanya mengambil nilai berdasarkan ulangan saja, di mana terkadang nilai ulangan bisa saja dikatakan tidak rel, karena murid melakukan kecurangan. Seharusnya, dilakukan penilaian secara objektif.</p>
                    <p>6. Tidak membangun hubungan personal. Hal ini menjadi suatu kesalahan, dikarenakan akan membuat murid merasa tidak diperhatikan dan tidak ada dukungan dari guru terhadapnya, sehingga membuat semangat belajarnya menurun atau membuatnya tidak terbuka terhadap masalah yang mungkin terjadi di kelas.</p>
                    <p>7. Tidak melakukan evaluasi. Seharusnya, setiap akhir pembelajaran minimal akhir semester, guru lakukan evaluasi terhadap  kegiatan selama satu semester ke belakang, untuk apa? Untuk memperbaiki apabila kemungkin terjadi kesalahan selama proses pembelajaran yang semisal membuat siswa yang dia aktif di kelas tetapi kenapa nilai ulanngannya bisa nurun atau masalah lainnya, yang membuat target pembelajaran tidak tercapai.</p>
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