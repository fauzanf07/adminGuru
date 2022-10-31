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
            <h1>Menjadi Guru Pemimpin, Guru Reflektif, Guru Inspiratif Yang Dirindukan Peserta Didik</h1>
        </div>
		<hr color="black">
    </div>

    <div class="row-2">
        <div class="container">
            <div class="row g-5">
                <div class="col col-lg-9 col-content">
                    <p>Berdasarkan Undang-undang Nomor 14 Tahun 2005 tentang Guru dan Dosen, ditegaskan bahwa, ”Guru adalah pendidik profesional dengan tugas utama, mendidik, mengajar, membimbing, mengarahkan, melatih, menilai, dan mengevaluasi peserta didik pada pendidikan anak usia dini jalur pendidikan formal, pendidikan dasar, dan pendidikan menengah”.</p>
                    <p>Sekolah dibangun atas suatu ”philosophical foundation” bahwa dengan diciptakannya sekolah ”human growth and development” peserta didik dapat terbentuk secara optimal. Lembaga ini sesungguhnya merupakan suatu tempat berkumpulnya anak usia sekolah tertentu dengan lingkungan dan suasana tertentu sehingga anak memperoleh kesempatan belajar yang diharapkan. Jadi, jantung setiap sekolah/lembaga pendidikan pada dasarnya ialah interaksi guru dan murid dalam proses belajar-mengajar. Dengan demikian, yang perlu diupayakan adalah bagaimana agar guru dapat mengajar dengan baik dan siswa dapat belajar dengan efektif dan efisien.</p>
                    <p>Tentunya guru dalam melaksanakan perannya, hendaknya memperhatikan aspek-aspek pendidikan, yaitu kewibawaan, identifikasi, mengenal perkembangan jiwa, dan mengenal perbedaan individual siswa. Kewibawaan guru bergantung pada sikap guru terhadap siswa-siswanya. Di antara sikap-sikap yang dapat menimbulkan kewibawaan, yaitu sikap tegas, konsekuen, menghargai, dan menyayangi siswa-siswanya.</p>
                    <p>Guru kreatif dan inspiratiflah yang akan mampu menciptakan suasana pembelajaran aktif, kreatif, inovatif, interaktif, dan menyenangkan. Sehingga memudahkan peserta didik menerima dan memahami materi pelajaran dengan baik. Di samping itu, memudahkan penanaman karakter dan nilai-nilai kehidupan yang hakiki.</p>
                    <br>
                    <h4>Kreatif dalam Metode</h4>
                    <p>Kreativitas dalam metode dapat diterapkan dalam berbagai hal. Namun, semuanya itu berarti keragaman. Guru yang kreatif akan membiarkan dirinya menjadi mirip dengan metode pengajarannya. Metode yang digunakannya bervariasi. Ia akan menggabungkan metode-metode yang ada. Ia akan mengenalkan cara-cara berkomunikasi yang sebelumnya belum pernah digunakan dan ia akan mencarinya dengan membaca, berdiskusi dengan orang lain, dan melakukan percobaan agar cara mengajarnya tetap segar dan hidup sehingga tidak membosankan.</p>
                    <br>
                    <h4>Kreatif dalam Fasilitas Ruangan</h4>
                    <p>Tampilan fisik ruang kelas memberikan kesempatan untuk berkreativitas. Contoh penggunaan model lingkaran, setengah lingkaran, kelompok kecil, atau mungkin menyingkirkan semua meja dan kursi di beberapa kelompok anak akan memberikan sentuhan imajinasi dan kreativitas terhadap setting ruang kelas tersebut. Ia mungkin dapat mengubah perilaku anak di dalam kelas pada saat mengikuti pelajaran. Demikian pula dengan penggunaan gambar-gambar, majalah dinding, pengharum ruangan, instrumen musik dan cat-cat yang berwarna segar juga dapat memantik dan memberikan kesempatan berkreasi yang potensial.</p>
                    <br>
                    <h4>Kreatif dalam Memberikan Tugas</h4>
                    <p>Banyak orang yang memperdebatkan tentang keuntungan memberi tugas kepada siswa untuk menyiapkan pelajaran melalui beberapa jenis cara belajar di luar sekolah. Namun, ada masalah yang sangat penting tentang bagaimana belajar di luar sekolah itu dapat dimotivasikan dalam pengajaran di kelas. Ada tantangan untuk guru yang kreatif. Ia tidak puas dengan membaca ”membaca bab dalam buku”, tetapi ia akan mencoba untuk membangun motivasi dan keinginan dari dalam.</p>
                    <br>
                    <h4>Langkah Dahsyat Mendidik dan Mengajar yang Mencerahkan dan Mencerdaskan</h4>
                    <p>Cara mengajar yang membosankan dinilai sebagai kendala yang sering tidak teratasi, cenderung diabaikan begitu saja. Hal ini akan berdampak pada materi-materi yang akan disajikan. Guru seolah kehilangan gairah untuk melejitkan potensi-potensi dirinya. Hasil pengamatan menunjukkan bahwa masih banyak guru yang mempertahankan metode konvensional/tradisional ketika mengajar, sehingga potensi siswa kurang tergali dan terasah. Berikut langkah-langkah dahsyat yang menurut pengalaman penulis bisa mengatasi rasa bosan dalam mengajar yang akan mengasah dan melejitkan potensi dan kreativitas siswa:</p>
                    <p>1.	Pahami bahwa menjadu guru itu adalah panggilan nurani</p>
                    <p>2.	Pahami bahwa mengajar adalah ibadah</p>
                    <p>3.	Membuat visi dan misi yang jelas</p>
                    <p>4.	Bergaul dengan siswa itu menyenangkan</p>
                    <br>
                    <h4>Menjadi Guru adalah Panggilan Nurani</h4>
                    <p>Seseorang yang menjadi guru karena dorongan hatinya berarti dia memiliki perasaan dan naluri untuk berpartisipasi aktif memperbaiki dan memperbaharui dunia pendidikan. Ia turut menyumbangkan tenaga dan pikirannya karena tergugah melihat ketidakberesan pondasi sistem pendidikan yang cenderung tunamakna. Sesuatu yang diawali itikad baik menyiratkan sikap tulus, mantap, dan teguh pada tujuan dan harapan yang akan diraih. Jauhi sikap suka menyakiti orang lain, tetapi mendekati sikap menyehatkan dan menyembuhkan orang lain.</p>
                    <br>
                    <h4>Mengajar adalah Ibadah</h4>
                    <p>Ketika mengajar, seorang guru harus memberikan pemahaman religius kepada anak didiknya. Guru adalah sosok pertama yang akan ditiru oleh siswanya. Pengalaman gurulah yang akan menambah wawasan mengenai konsep religius siswa. Ia dapat menyisipkan pemahaman nilai-nilai ibadah kepada anak didiknya.</p>
                    <br>
                    <h4>Membuat Visi dan Misi yang Jelas</h4>
                    <p>Sebelum mengajar, guru yang baik telah terlebih dahulu mempersiapkan diri dengan sejumlah pengetahuan dan metode yang menunjang. Tujuannya, agar transfer atau peralihan pengetahuan dari guru kepada siswanya berjalan dengan baik, berkesan, bermakna, dan berbobot.</p>
                    <p>Visi dan misi apa gerangan yang harus guru lakukan agar terhindar dari perasaan bosan dalam mengajar di kelas atau di luar kelas. Beradptasilah dengan kalimat motivasi dan komitmen berikut!</p>
                    <p>1.	Mengajar hari ini, aku harus memberi sesuatu yang berarti untuk siswa. Aku harus membuat anak-anak didikku senang dengan cara mengajarku dan wawasan yang aku berikan. Kemudian, mereka pulang dengan perasaan senang dan bahagia.</p>
                    <p>2.	Seandainya aku marah karena ulah siswaku, tahanlah dahulu kemarahanku. Biarkan rasa tenang menyelimutiku, dekati siswaku dan berilah kesan yang menyenangkan.</p>
                    <p>3.	Apabila aku harus mengoreksi kelalaian siswa-siswaku, di hadapan anak didikku juga, aku berikan koreksi sekaligus pujian di belakangnya. Dll</p>
                    <br>
                    <h4>Bergaul dengan Siswa itu Menyenangkan</h4>
                    <p>Bergaul dengan siswa sangatlah penting. Dalam proses mengajar, guru tidak hanya berorientasi pada kecakapan-kecakapan yang berdimensi kognitif, afektif, dan psikomotorik. Pada prinsipnya mengajar berarti proses perbuatan seorang guru yang membuat siswa belajar (Tiana Juliansyah, 2010). Jadi di mata siswa, guru yang pandai bergaul adalah guru yang dianggap sebagai sosok berjiwa muda. Guru tersebut mempunyai kemauan untuk menyelami keadaan siswa secara rohani. Anak didik pun merasa bahwa gurunya bukan mencari muka tetapi, seorang sahabat yang baik. Siswa ingin sekali mendapatkan pengertian dari guru. Keluh kesah mereka dapat didiskusikan bersama sang guru.</p>
                    <p>Demikian sekelumit curah pikir semoga menambah khasanah dan wawasan seputar pendidikan dan pembelajaran, bukan saja pada ranah kognitif, afektif, tetapi juga ranah psikomotorik. Keterpaduan ketiga ranah tersebut diharapkan melahirkan siswa yang unggul dan berprestasi baik pada bidang akademik maupun nonakademik.</p>
                    <p>Harapan di atas akan terwujud dari tangan-tangan guru yang kreatif, inspiratif yang akan mampu menggugah, menginspirasi, dan mencerahkan siswa-siswanya, untuk diaplikasikan dalam konteks kehidupan nyata. Tuntutan untuk menjadi guru kreatif dan inspiratif saat ini tampaknya sudah menjadi suatu keniscayaan. Sehingga diharapkan kepada sahabat-sahabat guru agar senantiasa meningkatkan kompetensi, profesionalitas, dan kreativitas untuk perbaikan mutu layanan pendidikan anak bangsa kini dan esok, sehingga akan terbentuk guru pemimpin yang reflektif dan kreatif yang senantiasa menjadi agen pembelajaran yang dirindukan oleh peserta didiknya.</p>
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