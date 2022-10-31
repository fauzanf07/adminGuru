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
            <h1>Ingin Menjadi Guru yang Asyik dan Menyenangkan? Simak Tipsnya</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-guru-1.PNG" alt="Guru"></center>
                    </div>
                    <p>Menjadi seorang guru yang asyik dan menyenangkan disukai murid di zaman milenial seperti sekarang tantangannya cukup sulit. Anak-anak generasi milenial cenderung merasa paham akan semuanya. Tentu saja karena banyaknya informasi yang tersedia secara gratis di dunia maya. Anak-anak cenderung merasa lebih pintar dari guru.</p>
                    <p>Sepertinya menghadapi murid pada zaman sekarang membutuhkan keahlian yang lebih, tidak cukup hanya bermodalkan pengetahuan tentang materi pembelajaran, melainkan juga pengetahuan lain sebagai ilmu pendukung. Hal ini dikarenakan perubahan zaman yang tidak bisa di hindari.</p>
                    <p>Seorang guru menjadi orangtua pengganti bagi anak-anak murid di sekolah. Banyak orangtua yang merasa kesulitan mengarahkan anaknya, lalu mereka meminta bantuan bapak atau ibu guru untuk mendidik anaknya.</p>
                    <p>Sebagai tenaga pendidik, guru memang kerap disebut sebagai pahlawan tanpa tanda jasa. Namun, apakah Anda sudah yakin bahwa semua yang Anda lakukan sebagai guru sudah memenuhi kriteria sebagai guru ideal yang di idam-idamkan para murid? Berikut ini beberapa tips menjadi guru yang asyik dan menyenangkan :</p>
                    <br>
                    <h4>1. Guru tidak hanya menjadi guru, namun guru harus menjalin kedekatan dengan murid agar suasa belajar menjadi asyik</h4>
                    <p>Anda bisa mulai menyapa dan bertegur sapa pada murid lama maupun murid baru. Ubahlah mindset guru itu harus ditegur lebih dulu, lebih baik tunjukkan pada murid bahwa bersosialisasi tanpa pandang usia maupun jabatan itu sangat penting. Murid akan merasa senang apabila seorang guru mengingatnya dengan baik. </p>
                    <br>
                    <h4>2. Berkomunikasi dengan jelas agar pelajaran bisa disampaikan dan diterima dengan baik</h4>
                    <p>Tak sedikit murid yang merasa bosan ketika guru tidak bisa menyampaikan materi dengan baik. Oleh sebab itu, sebagai guru yang asyik Anda harus bisa menguasai dan memahami materi pelajaran agar bisa menyampaikannya dengan singkat dan jelas. Bangunlah komunikasi di dalam kelas secara rutin sehingga semua permasalahan dalam pembelajaran dapat diselesaikan melalui diskusi.</p>
                    <br>
                    <h4>3. Jadilah sosok guru yang humoris tanpa mengurangi martabat seorang pengajar</h4>
                    <p>Ada dua tipe guru yang akan selalu dikenang dan dirindukan, yakni guru paling galak dan guru paling lucu. Jadilah guru yang humoris untuk meningkatkan semangat belajar murid. Melalui candaan, hubungan Anda dengan murid akan lebih dekat. Penyampaian materi pembelajaran juga bisa lebih mudah. Murid pun bebas berekspresi dan menyampaikan aspirasi di dalam kelas tanpa rasa takut.</p>
                    <br>
                    <h4>4. Jangan lemas, cobalah semangat dan antusias</h4>
                    <p>Ketika keadaan memaksa kita untuk belajar dari rumah bahkan terhalang jarak, pembelajaran tidak selalu monoton. Dengan antusias dan semangat, guru bisa memberikan senyum dan menyapa murid terlebih dahulu sebelum masuk ke materi. Jika sudah demikian, semoga saja nih motivasi mereka dalam belajar kian bertambah dan guru bisa jadi guru favorit para murid.</p>
                    <br>
                    <h4>5. Penguasaan terhadap materi ajar</h4>
                    <p>Seorang guru sebaiknya melakukan persiapan sebelum memasuki ruang kelas. Persiapan ini meliputi pemahaman akan materi yang akan disampaikan. Jangan sampai guru tidak paham dengan materi yang akan diajarkan, apalagi di zaman sekarang yang mana anak-anak cenderung lebih pintar dari guru. Seorang guru juga harus menyiapkan amunisi yang banyak sebelum memasuki ruang kelas. Amunisi itu berupa sifat-sifat positif yang harus dimiliki guru, seperti sifat kreatif dan inisiatif.</p>
                    <br>
                    <h4>6. Memperhatikan Murid</h4>
                    <p>Seorang guru yang memperhatikan murid akan menjadi guru yang disukai murid. Mengapa demikian? Setiap orang senang jika diperhatikan, tak terkecuali murid-murid. Mereka akan tersentuh dengan perhatian dari guru. Misalnya, ketika ada murid yang terlihat tidak bersemangat di sekolah, guru yang perhatian akan mendekati anak dan memancingnya untuk bercerita. Apakah si anak ada masalah yang membuatnya sedih dan tidak fokus belajar?  Apakah si anak mengalami kejadian buruk di rumah?</p>
                    <br>
                    <h4>7. Bersikap tegas bukan galak</h4>
                    <p>Jika ingin menjadi guru yang disukai murid, hindari bersifat terlalu galak. Ingat, bersikap tegas dan galak itu berbeda. Guru bisa bersikap tegas terhadap ketentuan-ketentuan sekolah yang sudah menjadi peraturan. Misalnya, tidak boleh datang terlambat. Akan tetapi jika terlambatnya karena alasan yang sangat urgent seperti mengantar orang tua ke rumah sakit, maka guru harus memberikan toleransi pada murid. Sikap toleransi ini akan membuat guru disukai murid.</p>
                    <br>
                    <h4>8. Kreatif dan Inovatif</h4>
                    <p>Guru yang baik adalah guru yang mampu menghadirkan hal-hal baru dalam pembelajaran, jadi seorang guru harus mampu bepikir kreatif demi mendesain pembelajaran yang bermakna bagi siswa. Syarat tercapainya tujuan pembelajaran adalah menciptakan pembelajaran yang menyenangkan bagi siswa.</p>
                    <br>
                    <h4>9. Menerapkan Metode Pembelajaran yang Variatif</h4>
                    <p>Metode pembelajaran yang monoton bisa membuat siswa merasa jenuh dan bosan dalam mengikuti pembelajaran, sehingga siswa akan merasa kurang antusias jika guru yang bersangkutan mengajar karena merasa cara mengajarnya itu-itu saja.</p>
                    <p>Jadi sebagai guru yang baik sebaiknya anda menerapkan metode pembleajaran yang variatif, jadi silahkan pilih metode pembelajaran yang sesuai untuk diterapkan dalam pembelajaran dengan beberapa pertimbangan. </p>
                    <p>Demikian informasi yang bisa disampaikan semoga bermanfaat.</p>
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