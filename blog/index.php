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

                
				<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
					<ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
						<?php
							if(!isset($_SESSION['nama'])){
								echo '<li class="nav-text"><a class="nav-link active" href="../login"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a></li>';
							}else{
								echo '<li class="nav-text"><a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li><li class="nav-text"><a class="nav-link active" href="../create-modul-ajar">Create Modul</a></li>';
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
            <h1>Pentingnya melakukan refleksi pembelajaran oleh guru dan bagaimana caranya memulainya</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
					<p>Ada beberapa fenomena unik yang dijumpai ketika guru mengajar di kelas, seperti halnya ketika guru bertanya kepada peserta didik apakah sudah paham dan mengerti dengan pelajaran yang telah disajikan mereka menjawab "ya" mengerti", paham", namun ketika guru bertanya apa yang sudah dipahami dari pelajaran tersebut mereka kesulitan menyampaikan dan terbentur dengan kata-kata. Begitupun sebaliknya, ketika peserta didik tidak memahami pelajaran, mereka juga kesulitan ketika ditanya "bagaimana kesulitannya? bagian mana yang belum dipahami?", maka si peserta didik juga kebingungan dan takut untuk mengeluarkan kata-kata. Dan masalah ini adalah lazim terjadi di setiap kelas dan di setiap peserta didik dari 30 orang anak biasanya ada setengahnya mengalami hal di atas.</p>
					<p>Setelah sekian jam pembelajaran berlangsung dan sampai di ending kegiatan ternyata peserta didik tidak bisa dan gagap dalam memberikan kesimpulan atau pendapat apapun terhadap apa yang mereka pelajari. Malah ada kegiatan pembelajaran yang tanpa penutup sama sekali, siswa tidak diberikan kesempatan untuk melakukan refleksi atas apa yang telah mereka alami, karena waktu yang tidak cukup, atau terdesak waktu pulang dan alasan lainnya yang mendadak terjadi waktu itu! What a pity, Sayang sekali. </p>
					<p>Anak-anak tidak diberi ruang atau waktu untuk mencerna apa yang telah masuk ke kepala mereka tadi. Anak-anak menjadi mengalami hari yang berat untuk itu, belajar jadi tidak berkesan. Mereka mendapatkan pengalaman belajar yang buruk dan menyedihkan!</p>
					<br>
					<h4>Apakah Bapak Ibu Guru hebat mengalami seperti kasus di atas? Apa yang Bapak Ibu lakukan untuk menjawab permasalahan tersebut?</h4>
					<p>"Kesimpulannya adalah kegagalan pembelajaran, kegagalan melakukan refleksi adalah karena kegagalan dalam bagaimana menyajikan pelajaran."</p>
					<br>
					<h4>Lalu bagaimana Cara Memulai Refleksi Pembelajaran dengan baik dan benar?</h4>
					<p>Meski merefleksi pembelajaran sebetulnya terkesan mudah. Sederhananya tiap siswa berusaha memahami materi yang sudah diajarkan dengan cara mengulas kembali. Namun kesadaran para orangtua, guru, hingga murid masih kurang, karena faktor kebingungan cara memulainya.</p>
					<br>
					<p>1. Lakukan Secara Berkelompok</p>
					<p>Tidak semua orang bisa mengendalikan dirinya sendiri. Ada beberapa siswa yang cukup kesulitan bila harus mengevaluasi pribadinya. Alasan yang paling sering terdengar yaitu sikap canggung ketika menilai diri. Bahkan selain malu, ada pula yang tidak memikirkan sama sekali karena dianggap tidak perlu.</p>
					<p>Mengatasi tipe murid seperti ini maka bentuk refleksi pembelajaran yang bisa diterapkan cukup mudah.  mengumpulkan siswa dengan sifat dan sikap serupa kemudian menggabungkannya dalam satu kelompok. Barulah satu sama lain diminta saling menilai, secara tidak langsung masing-masing akan belajar mengeluarkan pendapatnya.</p>
					<br>
					<p>2. Mulai dengan Pertanyaan Sederhana</p>
					<p>Refleksi pembelajaran siswa jika terlalu sulit dilakukan secara mandiri. Ada baiknya dibantu oleh orangtua atau guru di sekolah. Namun kegiatan evaluasi ini bukan bertujuan untuk menghukum atau menghakimi murid yang kurang memahami materi padahal sudah dijelaskan. Karena bisa menimbulkan sifat tertutup.</p>
					<p>Sebaliknya, lakukan refleksi pembelajaran dengan memanfaatkan pancingan pertanyaan sederhana yang dilontarkan ke para murid. Seperti memberitahu tindakan yang salah sekaligus menjelaskan dampak baik dan buruk yang diitmbulkan. Dalam hal pelajaran, tanyakan saja pokok bahasan dengan singkat sehingga akan lebih diingat.</p>
					<br>
					<p>3. Lakukan Secara Rutin</p>
					<p>Hasil yang baik akan timbul dari proses secara terus-menerus. Begitu pun refleksi pembelajaran. Semakin sering dilakukan maka murid menjadi lebih mudah dan siap menerima materi beikutnya. Sebaiknya kegiatan tersebut dilakukan dengan waktu sesering mungkin serta jumlah paling minimal.</p>
					<p>Hal ini perlu dilakukan karena tingkat ingatan manusia lebih mudah mencerna yang sederhana tetapi diulang-ulang berkali-kali. Daripada mengatakan lengkap namun hanya beberapa kali atau dilontarkan dengan jarak waktu yang cukup lama. Akibatnya ingatan lama terkikis dengan yang baru.</p>
					<br>
					<h4>Penutup</h4>
					<p>Demikianlah ulasan terkait cara memulai refleksi pembelajaran, diharapkan dengan memahami beberapa penyampaian di atas pembaca bisa memahaminya. Sekian dari saya dan terimakasih telah berkunjung, sampai jumpa pada artikel selanjutnya!</p>
					<br>
					<br>
					<div class="daftar-pustaka">
						<p>https://www.kompasiana.com/rosnilawatimarza2877/6343c43c4addee2e1d7aa202/sudahkah-guru-melakukan-refleksi-di-kelas-dengan-benar</p>
						<p>https://masdzikry.com/contoh-refleksi-pembelajaran/</p>
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