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
            <h1>Cara Ampuh Guru Dalam Mengelola Kelas</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <div class="artikel-guru-gambar-1">
                        <center><img src="../images/artikel-tentang-guru-1.PNG" alt="Guru"></center>
                    </div>
                    <p>Cara Ampuh Guru Dalam Mengelola Kelas - Mengajar merupakan tindakan atau usaha yang dilakukan oleh guru dengan mengikuti prosedur dan langkah-langkah tertentu. Tindakan yang dilakukan guru tidak sembarangan melainkan mengikuti langkah-langkah sistematis.</p>
                    <p>Langkah sistematis ini sudah tertuang dalam buku perangkat mengajar. Semua guru akan mengikuti rangkaian tersebut dalam pembelajaran di ruang kelas. Persoalannya adalah apakah semua guru juga dapat melakukan pengajaran dengan efektif dan efisien sesuai perangkat mengajar yang telah disusun.</p>
                    <p>Menciptakan pembelajaran efektif memang tidaklah semudah membalik telapak tangan. Sehingga diyakini pula kalau sebagian guru mengalami masalah dalam mengefektifkan pembelajaran. Berikut ini beberapa cara alternatif yang dapat membantu guru dalam mengelola kelas :</p>
                    <p>1. Mempersiapkan RPP/ Modul Ajar. Modul ajar atau RPP merupakan salah satu jenis perangkat ajar yang memuat rencana pelaksanaan pembelajaran, untuk membantu mengarahkan proses pembelajaran mencapai Capaian Pembelajaran (CP).</p>
                    <p>2. Menguasai materi pembelajaran. Penguasaan materi pembelajaran dapat diartikan sebagai kemampuan guru dalam mem-berikan materi pembelajaran dalam bentuk tema-tema dan topik-topik, sehingga dapat membentuk kompetensi tertentu pada peserta didik. Maka dengan guru menguasai materi pelajaran dapat memperluas wawasan cakrawala berfikir anak didik.</p>
                    <p>3. Tampilan performa terbaik dengan manajemen waktu. Manajemen waktu bisa membuat seseorang memiliki sikap yang lebih disiplin karena mampu mengerjakan tugas tertentu tepat waktu. Membuat seseorang menjadi lebih teratur, terencana, dan lebih rapi dalam kehidupannya sehari-hari. Terhindar dari stres dan kecemasan. Hal ini yang perlu dimiliki oleh seorang guru dalam mengelola kelas.</p>
                    <p>4. Gunakan metode sesuai dengan kondisi kelas. Penggunaan metode sangatlah penting dalam menentukan keberhasilan suatu proses pembelajaran, makin baik metode itu, makin efektif pula pencapaian tujuan, dengan demikian tujuan merupakan faktor utama dalam menetapkan baik tidaknya penggunaan suatu metode.</p>
                    <p>5. Bangun komunikasi yang baik dengan murid. Menurut Pupuh Fathurrohman & Sobry Sutikno, (2007: 41) menyatakan bahwa: “ Terdapat minimal lima strategi yang dapat dikembangkan oleh guru dalam upaya membangun komunikasi efektif, yaitu: respek, empati, audible, clarity (jelas maknanya), dan humble (rendah hati)”.</p>
                    <p>6. Terapkan kesepakatan dan libatkan murid dalam membuatnya. Membangun kesepakatan untuk mencapai hasil pengembang yang diharapkan? Yaitu dengan andanya negosiasi antara kedua belah pihak di mana kedua belah pihak saling setuju dan masing-masing imbang dalam sebuah kesepakatan. Dan ini menjadi suatu hal yang perlu diterapkan dalam mengelola kelas supaya menjadi lebih efektif.</p>
                    <p>7. Ada kalanya guru menjadi teman. Sebagian murid terkadang sangat membutuhkan guru yang tidak hanya sekedar mengajar akan tetapi juga bisa menjadi sahabat disaat muridnya sedang mengalami suatu permasalahan dalam kelas. Dengan adanya kedekatan tersebut, akan membuat murid merasa mendapatkan perhatian dan dukungan penuh dari guru dan kemungkinan besar berdampak pada semangat murid menjadi giat belajar serta lebih aktif dalam kelas</p>
                    <p>8. Aturan yang tegas, tetapi tetap santai. Terakhir, walau seorang guru menjadi teman sangat diharapkan, tapi tetap seorang guru harus memiliki sikap tegas, dimana terdapat sebuah aturan yang perlu diterapkan kepada siswa dan itu perlu adanya ketegasan dari guru dalam mengambil keputusan terhadap pelanggaran yang dilakukan siswa.</p>
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