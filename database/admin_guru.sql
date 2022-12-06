-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 05:05 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `ases_for`
--

CREATE TABLE `ases_for` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `ases` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_for`
--

INSERT INTO `ases_for` (`id`, `id_identitas`, `ases`) VALUES
(29, 15, 'Apa yang sedang kamu rasakan saat ini?'),
(31, 17, 'Hal apa yang paling menyenangkan dan tidak menyenangkan?'),
(32, 18, 'Apa yang sedang kamu rasakan saat ini?'),
(38, 24, 'Apa yang sedang kamu rasakan saat ini?'),
(41, 27, 'Apa yang sedang kamu rasakan saat ini?'),
(42, 28, 'Apa yang sedang kamu rasakan saat ini?');

-- --------------------------------------------------------

--
-- Table structure for table `ases_kog`
--

CREATE TABLE `ases_kog` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `ases` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_kog`
--

INSERT INTO `ases_kog` (`id`, `id_identitas`, `ases`) VALUES
(15, 15, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya'),
(17, 17, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya'),
(18, 18, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya'),
(24, 24, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya'),
(27, 27, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya'),
(28, 28, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya');

-- --------------------------------------------------------

--
-- Table structure for table `ases_non_kog`
--

CREATE TABLE `ases_non_kog` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `ases` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_non_kog`
--

INSERT INTO `ases_non_kog` (`id`, `id_identitas`, `ases`) VALUES
(34, 15, 'Unjuk kerja'),
(35, 15, 'Kuis'),
(37, 17, 'Unjuk kerja'),
(38, 18, 'Kuis'),
(49, 24, 'Kuis'),
(50, 24, 'Unjuk kerja'),
(55, 27, 'Kuis'),
(56, 27, 'Unjuk kerja'),
(57, 28, 'Kuis');

-- --------------------------------------------------------

--
-- Table structure for table `ases_sum`
--

CREATE TABLE `ases_sum` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `ases` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_sum`
--

INSERT INTO `ases_sum` (`id`, `id_identitas`, `ases`) VALUES
(15, 15, 'Penilaian Akhir Semester'),
(17, 17, 'Penilaian Akhir Semester'),
(18, 18, 'Penilaian Akhir Semester'),
(24, 24, 'Penilaian Akhir Semester'),
(27, 27, 'Penilaian Akhir Semester'),
(28, 28, 'Penilaian Akhir Semester');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_bacaan`
--

CREATE TABLE `bahan_bacaan` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `bahan_bacaan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_bacaan`
--

INSERT INTO `bahan_bacaan` (`id`, `id_identitas`, `bahan_bacaan`) VALUES
(18, 15, 'skksnknsknwksn'),
(20, 17, 'knknkknknkk'),
(21, 18, 'kljlkjkjl'),
(27, 24, 'smdknkjjjjjjjjsnfjkdfknsjdnkfksdnfjnknkjnkjnnknb'),
(30, 27, 'smdknkjjjjjjjjsnfjkdfknsjdnkfksdnfjnknkjnkjnnknb'),
(31, 28, 'ksakjskaj');

-- --------------------------------------------------------

--
-- Table structure for table `capaian_pembelajaran`
--

CREATE TABLE `capaian_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_elemen` int(11) DEFAULT NULL,
  `capaian_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capaian_pembelajaran`
--

INSERT INTO `capaian_pembelajaran` (`id`, `id_elemen`, `capaian_pembelajaran`) VALUES
(1, 1, 'Pada akhir fase E peserta didik mampu memahami pekerjaan atau profesi dalam bidang Desain Komunikasi Visual, dan kewirausahaan di bidang ekonomi kreatif yang mampu membaca peluang pasar dan usaha, untuk membangun visi dan passion, serta melakukan pembelajaran berbasis projek nyata sebagai simulasi projek kewirausahaan'),
(2, 2, 'Pada akhir fase E peserta didik mampu memahami manajemen produksi bidang Desain secara menyeluruh pada berbagai industri ekonomi kreatif lainnya, antara lain K3LH, kreativitas dalam proses kreasi dasar desain, dan menerapkannya dalam elemen dasar perancangan dan proses desain dan produksi dalam eksekusi kerja desain komunikasi visual secara mandiri.'),
(3, 3, 'Pada akhir fase E peserta didik mampu memahami tentang perkembangan proses produksi industri Desain Komunikasi Visual mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, digital teknologi dalam dunia industri, isu pemanasan global, perubahan iklim, aspek - aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling.'),
(4, 4, 'Pada akhir fase E peserta didik mampu memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, teknologi Digital dalam dunia industri, isu pemanasan global, perubahan iklim, aspek - aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling produk'),
(5, 5, 'Pada akhir fase E peserta didik mampu memahami kepribadian yang dibutuhkan peserta didik agar dapat mengembangkan pola pikir kreatif melalui praktek secara mandiri dengan berpikir kritis tentang seluruh proses produksi dan teknologi serta budaya kerja yang diaplikasikan dalam industri Desain Komunikasi Visual.'),
(6, 6, 'Pada akhir fase E melalui kreativitas dan berpikir kritis, peserta didik mampu menjelaskan konsep dasar karya dengan sketsa dan ilustrasi, menyiapkan bahan peralatan sketsa, mewujudkan sketsa, menyempurnakan sketsa, dan membuat ilustrasi dalam perancangan dan proses produksi untuk dikembangkan dalam eksekusi kerja Desain Komunikasi Visual.'),
(7, 7, 'Pada akhir fase E peserta mampu memahami jenis, fungsi, karakter, anatomi, lingkup huruf dan dasar tipografi (hierarki, leading, tracking dan kerning) yang umum digunakan dalam desain dan menerapkannya dalam perancangan dan proses produksi dalam eksekusi kerja Desain Komunikasi Visual.'),
(8, 8, 'Pada akhir fase E peserta didik mampu memahami jenis kamera, menentukan komposisi pemotretan dan mengatur pencahayaan, melakukan pemotretan, menyimpan data, dan melakukan pekerjaan akhir dalam editing pada fotografi serta menerapkannya dengan kreativitas dan disiplin dalam perancangan dan proses produksi dalam eksekusi kerja Desain Komunikasi Visual.'),
(9, 9, 'Pada akhir fase E peserta didik memahami pengoperasian perangkat lunak desain dengan memilih jenis perangkat lunak dan menetapkan perangkat lunak berbasis bitmap dan vector serta menggunakannya dalam perancangan dan proses produksi dalam eksekusi kerja Desain Komunikasi Visual.'),
(10, 10, 'Pada akhir fase E peserta didik mampu memahami tahapan proses akuntansi secara menyeluruh baik akuntansi pada Perusahaan Jasa, Perusahaan dagang, dan Perusahaan Manufaktur antara lain menerapkan Prinsip Praktik Profesional dalam Bekerja, Menerapkan \r\nPraktik- Praktik Kesehatan dan Keselamatan di Tempat Kerja, Memproses Entry Jurnal, Memproses Buku Besar, Menyusun Laporan Keuangan, serta Mengoperasikan Paket Program Pengolah Angka/Spreadsheet'),
(11, 11, 'Pada akhir fase E peserta didik mampu memahami perkembangan standar akuntansi mulai dari pembukuan secara manual sampai kepada penggunaan teknologi sebagai alat bantu, serta mengikuti perkembangan aplikasi komputer akuntansi yang banyak digunakan di dunia industri dan dunia kerja.'),
(12, 12, 'Pada akhir fase E, peserta didik mampu memahami profesi Akuntansi lulusan SMK untuk mendapatkan gambaran pekerjaan pada Level KKNI 2 Teknisi Akuntansi Junior serta meningkat menjadi KKNI 4 Teknisi Akuntansi Muda sehingga terinspirasi untuk mempelajari dengan \r\ntekun dan menumbuhkan rasa ingin tahu untuk mengikuti pembelajaran, Menerapkan Etika Profesi Akuntansi dengan baik agar mendapatkan kepercayaan dari atasan maupun kepuasan dari pengguna serta \r\nmampu membaca peluang pasar dan usaha, untuk membangun visi dan passion, serta melakukan pembelajaran berbasis projek nyata sebagai simulasi projek kewirausahaan (entrepreneurship)'),
(13, 13, 'Pada akhir fase E, peserta didik mampu memahami siklus akuntansi pada perusahaan jasa, dagang dan manufaktur, baik secara manual maupun menggunakan aplikasi komputer akuntansi'),
(14, 14, 'Pada akhir fase E, peserta didik mampu menerapkan Merapikan area kerja, Menyiapkan dan cek peralatan kerja, Menerapkan perilaku kerja aman di area kerja, mengidentifikasi bahaya dan pengendalian resiko, Menerapkan praktik-praktik kesehatan diri dan keselamatan kerja, Memahami upaya perlindungan kerja dengan baik, sehingga selalu dalam keadaan selamat dan sehat selama melakukan pekerjaannya di tempat kerja serta penerapan budaya kerja industri (Ringkas, Rapi, Resik, Rawat, Rajin)'),
(15, 15, 'Pada akhir fase E, peserta didik mampu memahami Melakukan identifikasi pedoman, prosedur dan aturan yang berkaitan dengan industri jasa keuangan dan profesi-profesi yang ada dalam industri jasa keuangan, Melakukan pengecekan etika profesi dalam bidang akuntansi dan keuangan dalam pelaksanaan pekerjaan, Melakukani dentifikasi kompetensi personal dalam bidang akuntansi dan keuangan'),
(16, 16, 'Pada akhir fase E, peserta didik mampu memahami pengertian akuntansi, Tujuan pencatatan akuntansi, Pihak-pihak yang membutuhkan informasi akuntansi, Prinsip-prinsip akuntansi serta Konsep Akuntansi Dasar dan Perbankan Dasar'),
(17, 17, 'Pada akhir fase E, peserta didik mampu memahami pengertian akuntansi, Tujuan pencatatan akuntansi, Pihak-pihak yang membutuhkan informasi akuntansi, Prinsip-prinsip akuntansi serta Konsep Akuntansi Dasar dan Perbankan Dasar'),
(18, 18, 'Pada akhir fase E peserta didik mampu menjelaskan proses bisnis di bidang manajemen perkantoran dan layanan bisnis, tahapan fungsi manajemen (perencanaan, pengorganisasian, pelaksanaan, dan pengendalian) dalam lingkup pekerjaan kantor, serta pengenalan rantai pasok (supply chain) dalam layanan pengelolaan barang berbasis K3 industri dan 5R'),
(19, 19, 'Pada akhir fase E peserta didik mampu menjelaskan perkembangan manajemen perkantoran modern, otomatisasi perkantoran, perkembangan revolusi industri 4.0 di bidang perkantoran dan layanan bisnis, budaya kerja, dan eco-green (ramah lingkungan).'),
(20, 20, 'Pada akhir fase E peserta didik mampu menjelaskan profil pekerjaan/profesi (job profile) di masa sekarang dan di masa mendatang, serta peluang usaha di bidang manajemen perkantoran dan layanan bisnis'),
(21, 21, 'Pada akhir fase E peserta didik mampu menjelaskan teknik pelayanan prima (excellent service), layanan pelanggan (customer service), serta prosedur dan instruksi kerja'),
(22, 22, 'Pada akhir fase E peserta didik mampu menjelaskan dasar-dasar prosedur penanganan dokumen, jenis peralatan pengelolaan dokumen, dan prosedur penyimpanan dokumen berbasis digital sesuai sistem yang digunakan di dunia kerja.'),
(23, 23, 'Pada akhir fase E peserta didik mampu mengidentifikasi jenis peralatan kantor, menggunakan peralatan kantor, menerapkan prosedur pemeliharaan peralatan kantor, menggunakan aplikasi perangkat lunak dan keras untuk perkantoran, serta mampu menerapkan prosedur mencetak dokumen.'),
(24, 24, 'Pada akhir fase E peserta didik mampu menjelaskan jenis data dan informasi, menerapkan prosedur penggunaan menu home page, menerapkan dasardasar komunikasi lisan dan tulisan, serta menerapkan serta prosedur komunikasi melalui media elektronik'),
(25, 25, 'Pada akhir fase E peserta didik mampu menjelaskan konsep layanan bisnis perkantoran, konsep logistik, jenis dokumen logistik, layanan administrasi dokumen pergudangan, transportasi, distribusi, dan pengiriman (delivery).'),
(26, 29, 'Pada akhir fase E, peserta didik menggunakan bahasa Inggris untuk \r\nberkomunikasi dengan guru, teman sebaya \r\ndan orang lain dalam berbagai macam \r\nsituasi dan tujuan. Mereka menggunakan \r\ndan merespon pertanyaan dan menggunakan strategi untuk memulai dan mempertahankan percakapan dan diskusi. \r\nMereka memahami dan mengidentifikasi \r\nide utama dan detail relevan dari diskusi atau presentasi mengenai topik yang dekat dengan kehidupan pemuda. Mereka menggunakan bahasa Inggris untuk \r\nmenyampaikan opini terhadap isu yang \r\ndekat dengan kehidupan pemuda dan \r\nuntuk membahas minat. Mereka \r\nmemberikan pendapat dan membuat \r\nperbandingan. Mereka menggunakan \r\nelemen non-verbal seperti bahasa tubuh, \r\nkecepatan bicara, dan nada suara untuk \r\ndapat dipahami dalam sebagian konteks.'),
(27, 30, 'Pada akhir Fase E, peserta didik membaca dan merespon berbagai macam teks seperti narasi, deskripsi, prosedur, eksposisi, recount, dan report.Mereka membaca untuk mempelajari sesuatu atau untuk mendapatkan informasi. Mereka mencari dan mengevaluasi detil spesifik \r\ndan inti dari berbagai macam jenis teks. Teks ini dapat berbentuk cetak atau digital, termasuk diantaranya teks visual, multimodal atau interaktif. Mereka menunjukkan pemahaman mereka terhadap ide pokok, isu-isu atau \r\npengembangan plot dalam berbagai macam \r\nteks mulai berkembang. Mereka mengidentifikasi tujuan penulis dan \r\nmengembangkan keterampilannya untuk \r\nmelakukan inferensi sederhana dalam \r\nmemahami informasi tersirat dalam teks.\r\n'),
(28, 31, 'Pada akhir Fase E, peserta didik menulis \r\nberbagai jenis teks fiksi dan non-fiksi, \r\nmelalui aktivitas yang dipandu, \r\nmenunjukkan kesadaran peserta didik \r\nterhadap tujuan dan target pembaca. \r\nMereka membuat perencanaan, menulis, \r\nmengulas dan menulis ulang berbagai jenis \r\ntipe teks dengan menunjukkan strategi \r\nkoreksi diri, termasuk tanda baca dan huruf \r\nbesar. Mereka menyampaikan ide \r\nmenggunakan kosakata dan kata kerja \r\numum dalam tulisannya. Mereka \r\nmenyajikan informasi menggunakan \r\nberbagai mode presentasi untuk \r\nmenyesuaikan dengan pembaca/pemirsa \r\ndan untuk mencapai tujuan yang berbedabeda, dalam bentuk cetak dan digital'),
(29, 32, 'Pada akhir Fase F, peserta didik menggunakan bahasa Inggris untuk berkomunikasi dengan guru, teman sebaya dan orang lain dalam berbagai macam situasi dan tujuan. Mereka menggunakan dan merespon pertanyaan terbuka dan menggunakan strategi untuk\r\nmemulai, mempertahankan dan menyimpulkan percakapan dan diskusi. Mereka memahami dan mengidentifikasi ide utama dan detail relevan dari diskusi atau presentasi mengenai berbagai macam topik. Mereka menggunakan bahasa Inggris untuk menyampaikan opini\r\nterhadap isu sosial dan untuk membahas minat, perilaku dan nilai-nilai lintas konteks budaya yang dekat dengan kehidupan pemuda. Mereka memberikan dan mempertahankan pendapatnya, membuat perbandingan dan mengevaluasi perspektifnya. Mereka menggunakan strategi koreksi dan perbaikan diri, dan menggunakan elemen non-verbal seperti bahasa tubuh, kecepatan bicara dan nada suara untuk dapat dipahami dalam sebagian besar konteks.'),
(30, 33, 'Pada akhir Fase F, peserta didik membaca dan merespon berbagai macam teks seperti narasi, deskripsi, eksposisi, prosedur, argumentasi, dan diskusi secara mandiri. Mereka membaca untuk mempelajari sesuatu dan membaca untuk kesenangan. Mereka mencari, membuat sintesis dan mengevaluasi detil spesifik dan inti dari berbagai macam jenis teks. Teks ini dapat berbentuk cetak atau digital, termasuk diantaranya teks visual, multimodal atau interaktif. Mereka menunjukkan pemahaman terhadap ide pokok, isu-isu atau pengembangan plot dalam berbagai macam teks. Mereka mengidentifikasi tujuan penulis dan melakukan inferensi untuk memahami informasi tersirat dalam teks.'),
(31, 34, 'Pada akhir Fase F, peserta didik menulis berbagai jenis teks fiksi dan faktual secara mandiri, menunjukkan kesadaran peserta didik terhadap tujuan dan target pembaca. Mereka membuat perencanaan, menulis, mengulas dan menulis ulang berbagai jenis tipe teks dengan menunjukkan strategi koreksi diri, termasuk tanda baca, huruf besar, dan tata bahasa. Mereka menyampaikan ide kompleks dan menggunakan berbagai kosakata dan tata bahasa yang beragam dalam tulisannya. Mereka menuliskan kalimat utama dalam paragraf-paragraf mereka dan menggunakan penunjuk waktu untuk urutan, juga konjungsi, kata penghubung dan kata ganti orang ketiga untuk menghubungkan atau membedakan ide antar dan di dalam paragraf. Mereka menyajikan informasi menggunakan berbagai mode presentasi untuk menyesuaikan dengan pemirsa dan untuk mencapai tujuan yang berbeda-beda, dalam bentuk cetak dan digital.'),
(32, 35, 'Di akhir fase E, peserta didik dapat menggeneralisasi sifat-sifat operasi bilangan berpangkat (eksponen) dan logaritma, serta menggunakan barisan dan deret (aritmetika dan geometri).'),
(33, 36, 'Di akhir fase E, peserta didik dapat menginterpretasi ekspresi eksponensial. Menggunakan sistem persamaan linear tiga variabel, sistem pertidaksaman linear dua variabel, fungsi kuadrat dan fungsi eksponensial dalam menyelesaikan masalah. Melakukan operasi Vektor'),
(34, 37, 'Di akhir fase E, peserta didik dapat menentukan perbandingan trigonometri dan memecahkan masalah yang melibatkan segitiga\r\nsiku-siku'),
(35, 38, 'Di akhir fase E, peserta didik dapat menampilkan dan menginterpretasi data menggunakan statistik yang sesuai bentuk\r\ndistribusi data untuk membandingkan nilai tengah (median, mean) dan sebaran (jangkauan interkuartil, standar deviasi) untuk membandingkan dua atau lebih himpunan data. Mereka dapat\r\nmeringkas data kategorikal untuk dua kategori dalam tabel frekuensi dua arah, menafsirkan frekuensi relatif dalam konteks data (termasuk frekuensi relatif bersama, marginal, dan kondisional), dan mengenali kemungkinan asosiasi dan tren dalam data. Mereka dapat membedakan antara korelasi dan sebab-akibat. Mereka dapat membandingkan distribusi teoretis diskrit dan distribusi eksperimental, dan mengenal peran penting dari ukuran sampel. Mereka dapat menghitung peluang dalam situasi diskrit.'),
(36, 42, 'Di akhir fase F, peserta didik dapat menentukan fungsi Invers, komposisi fungsi dan transformasi fungsi untuk memodelkan situasi dunia nyata berdasarkan fungsi yang sesuai (linier, kuadrat, eksponensial).'),
(37, 43, 'Di akhir fase F, peserta didik menerapkan teorema tentang lingkaran, dan menentukan panjang busur dan luas juring lingkaran'),
(38, 44, 'Di akhir fase F, peserta didik dapat, merumuskan pertanyaan, mengumpulkan informasi, menyajikan, menganalisis, hingga menarik kesimpulan dari suatu data dengan membuat rangkuman statistik deskriptif. mengevaluasi proses acak yang mendasari percobaan statistik,. Mereka menggunakan peluang bebas dan bersyarat untuk menafsirkan data.'),
(39, 57, 'Pada akhir Fase F peserta didik mampu mengidentifikasi permasalahan ekonomi, memahami model dan pelaku ekonomi, memahami kegiatan ekonomi, menerapkan ilmu ekonomi dalam kegiatan usaha, serta memahami administrasi dan fungsi-fungsi manajemen.'),
(40, 58, 'Pada akhir Fase F peserta didik mampu menganalisis dokumen sumber dan dokumen pendukung pada perusahaan (entitas) Wajib Pajak Orang Pribadi dan Badan, baik PKP maupun non-PKP. Peserta didik juga dapat menerapkan proses pencatatan transaksi ke dalam jurnal umum atau khusus, menerapkan pencatatan transaksi ke dalam buku pembantu kartu piutang, kartu utang, dan kartu persediaan barang dagang. Selain itu, peserta didik mampu menerapkan posting jurnal umum atau khusus ke dalam buku besar, menyusun neraca saldo, menganalisis transaksi penyesuaian, menerapkan posting jurnal penyesuaian ke dalam buku besar, dan menyusun neraca lajur (worksheet). Peserta didik dapat menyusun laporan laba/rugi, laporan perubahan ekuitas (perubahan modal), laporan posisi keuangan (neraca), laporan arus kas, dan\r\ncatatan atas laporan keuangan. Peserta didik mampu menyusun jurnal penutup, menerapkan posting jurnal penutup ke dalam buku besar, serta menyusun neraca saldo setelah penutupan. Khusus untuk perusahaan manufaktur ditambah kompetensi menghitung harga pokok pesanan dan harga pokok proses.'),
(41, 59, 'Pada akhir Fase F peserta didik mampu menerapkan standar akuntansi yang digunakan.'),
(42, 60, 'Khusus untuk perusahaan manufaktur ditambah kompetensi menghitung harga pokok pesanan dan harga pokok proses.'),
(43, 61, 'Pada akhir Fase F peserta didik mampu mengoperasikan program komputer akuntansi untuk mendukung pekerjaannya.'),
(44, 62, 'Pada akhir fase F, peserta didik mampu memahami jenis-jenis pajak, menghitung pajak terutang, menyetor pajak kurang bayar, menyusun laporan pajak serta memahami Ketentuan Umum dan Tata Cara Perpajakan (KUP).'),
(45, 52, 'Pada akhir fase F, peserta didik mampu merencanakan topologi dan arsitektur jaringan sesuai kebutuhan, mengumpulkan kebutuhan teknis pengguna yang menggunakan jaringan, mengumpulkan data peralatan jaringan dengan teknologi yang sesuai, melakukan pengalamatan jaringan, memahami CIDR dan VLSM, dan menghitung subnetting.\r\n'),
(46, 53, 'Pada akhir fase F, peserta didik mampu menginstalasi jaringan kabel dan nirkabel, melakukan perawatan dan perbaikan jaringan kabel dan nirkabel, memahami standar jaringan nirkabel, memilih teknologi jaringan nirkabel indoor dan outdoor sesuai kebutuhan, melakukan instalasi perangkat jaringan nirkabel, menguji instalasi perangkat jaringan nirkabel, menjelaskan konsep layanan Voice over IP (VoIP), mengkonfigurasi layanan Voice over IP (VoIP), memahami jaringan fiber optic, memahami jenis-jenis kabel fiber optic, memilih kabel fiber optic, \r\nmenerapkan fungsi alat kerja fiber \r\noptic, menggunakan alat kerja fiber optic, melakukan sambungan \r\nfiber optic, dan melakukan \r\nperbaikan jaringan fiber optic. '),
(47, 54, 'Pada akhir fase F, peserta didik mampu memahami kebijakan penggunaan jaringan, memahami kemungkinan ancaman dan serangan terhadap keamanan jaringan, menentukan sistem keamanan jaringan yang dibutuhkan, memahami firewall pada host dan server, memahami kebutuhan persyaratan alat-alat untuk membangun server firewall, menganalisis konsep dan implementasi firewall di host dan server, memahami fungsi dan cara kerja server autentifikasi, memahami kebutuhan persyaratan alat-alat untuk membangun server autentifikasi, menganalisis cara kerja sistem pendeteksi dan penahan ancaman/serangan yang masuk ke jaringan, menganalisis fungsi dan tata cara pengamanan server-server layanan pada jaringan, dan memahami tata cara pengamanan komunikasi data menggunakan teknik kriptografi.'),
(48, 55, 'Pada akhir fase F, peserta didik mampu memasang perangkat jaringan ke dalam sistem jaringan, mengganti perangkat jaringan sesuai dengan kebutuhan, menjelaskan konsep VLAN, mengkonfigurasi dan menguji VLAN, memahami proses routing dan jenis-jenis routing, mengkonfigurasi, menganalisis permasalahan dan memperbaiki konfigurasi routing statis dan routing dinamis, mengkonfigurasi NAT, menganalisis permasalahan internet gateway dan memperbaiki konfigurasi NAT, mengkonfigurasi, menganalisis permasalahan dan memperbaiki konfigurasi proxy server, manajemen bandwidth dan load balancing.'),
(49, 56, 'Pada akhir fase F, peserta didik mampu menginstalasi sistem operasi jaringan, menjelaskan konsep, menginstalasi services, mengkonfigurasi dan menguji konfigurasi remote server, DHCP server, DNS server, FTP server, file server, web server, mail server, database server, Control Panel Hosting, Share Hosting Server, Dedicated Hosting Server, Virtual Private Server, VPN server, sistem kontrol dan monitoring. '),
(50, 63, 'Pada akhir fase E, peserta didik mampu memahami profil technopreneur, mendeskripsikan pekerjaan atau profesi kewirausahaan di bidang busana (fesyen), menjelaskan kepribadian dan sikap dalam bekerja di bidang busana (fesyen), mampu\r\nmembaca peluang pasar dan usaha di bidang seni dan ekonomi kreatif, untuk membangun visi dan passion, serta melakukan pembelajaran berbasis projek nyata sebagai simulasi projek kewirausahaan.'),
(51, 64, 'Pada akhir fase E, peserta didik mampu mendeskripsikan ekosistem industri mode dan overview fashion industry, memahami model bisnis di lingkungan industri fashion, memahami perubahan gaya dan selera sesuai dengan perkembangan mode dan trend, mengenal dan memahami karya desainer dan produk fashion, memahami konsep sustainable fashion, memahami potensi lokal dan kearifan lokal dalam produk fashion.'),
(52, 65, 'Pada akhir fase E, peserta didik mampu memahami branding dan marketing, menjelaskan segmentasi pasar, memahami DNA brand, memahami pesaing dari produk busana, menjelaskan definisi dan konsep marketing dan digital marketing.'),
(53, 66, 'Pada akhir fase E, peserta didik mampu menerapkan dan membuat gambar anatomi tubuh dan dasar ilustrasi mencampur warna, implementasi desain dan detail ke anatomi tubuh dan membuat desain teknis secara \r\ndigital.'),
(54, 67, 'Pada akhir fase E, peserta didik mampu memahami proses penciptaan desain dengan\r\nmenerapkan dasardasar desain, memahami dan membedakan style dan look, menemukan inspirasi, membuat kolase, menerapkan cara mencari bentuk dan mengembangkan desain berdasarkan style dan look.'),
(55, 68, 'Pada akhir fase E, peserta didik mampu memahami tentang K3 di bidang busana (fesyen), proses produksi busana di industri, pengetahuan tentang aspek perawatan peralatan dan pengelolaan SDM di industri.'),
(56, 69, 'Pada akhir fase E, peserta didik memahami perkembangan proses produksi pada industri busana (fesyen) mulai dari konvensional hingga penggunaan alat/mesin dengan teknologi modern, penggunaan aplikasi gambar penunjang desain busana, penerapan teknologi digital dalam dunia industri, isu pemanasan global, perubahan iklim, aspek-spek (singkat) ketenagakerjaan, product life cycle (reuse, recycling dan reduce).'),
(57, 70, 'Pada akhir fase E, peserta didik mampu memahami dan melakukan pengukuran tubuh, serta menerapkan pembuatan pola dasar teknik konstruksi.'),
(58, 71, 'Pada akhir fase E, peserta didik mampu menjelaskan sikap kerja dalam menjahit, mengoperasikan dan memperbaiki mesin jahit dan mesin penyelesaian, memahami teknik menjahit sesuai dengan jenis-jenis bahan, memahami standar kualitas dan finishing hasil jahitan dan menjahit busana sederhana.'),
(59, 45, 'Pada akhir fase E peserta didik mampu memahami proses bisnis pada bidang teknik komputer dan telekomunikasi, meliputi customer handling, perencanaan, analisis kebutuhan pelanggan, strategi implementasi (instalasi, konfigurasi, monitoring), dan pelayanan pada pelanggan sebagai implementasi penerapan budaya mutu.\r\n'),
(60, 46, 'Pada akhir fase E, peserta didik mampu memahami perkembangan teknologi pada perangkat teknik jaringan komputer dan telekomunikasi termasuk 5G, Microwave Link, IPV6, teknologi serat optik terkini, IoT, Data Centre, Cloud Computing, dan Information Security serta isu- isu implementasi teknologi jaringan dan telekomunikasi terkini antara lain keamanan informasi, penetrasi Internet.\r\n'),
(61, 47, 'Pada akhir fase E, peserta didik mampu memahami jenis-jenis profesi kewirausahaan (job- profile dan technopreneurship, personal branding serta peluang usaha di bidang teknik jaringan komputer dan telekomunikasi, untuk membangun vision dan passion, dengan melaksanakan pembelajaran berbasis proyek nyata sebagai simulasi proyek kewirausahaan.'),
(62, 48, 'Pada akhir fase E, peserta didik mampu menerapkan K3LH dan budaya kerja industri, antara lain: praktik-praktik kerja yang aman, bahaya-bahaya di tempat kerja, prosedur- prosedur dalam keadaan darurat, dan penerapan budaya kerja industri (Ringkas, Rapi, Resik, Rawat, Rajin), termasuk pencegahan kecelakaan kerja di tempat tinggi dan prosedur kerja di tempat tinggi (pemanjatan).'),
(63, 49, 'Pada akhir fase E, peserta didik mampu memahami tentang jenis alat ukur dan penggunaannya dalam pemeliharaan jaringan komputer dan sistem telekomunikasi.'),
(64, 50, 'Pada akhir fase E, peserta didik mampu memahami prinsip dasar sistem IPV4/IPV6, TCP IP, Networking Service, Sistem Keamanan Jaringan Telekomunikasi, Sistem Seluler, Sistem Microwave, Sistem VSAT IP, Sistem Optik, dan Sistem WLAN.'),
(65, 51, 'Pada akhir fase E, peserta didik mampu menggunakan alat ukur, termasuk pemeliharaan alat ukur untuk seluruh jaringan komputer dan sistem telekomunikasi.'),
(66, 72, 'Pada akhir fase F, peserta didik mampu membuat figure sesuai jenis kelamin dan umur, mengembangkan figure dengan gaya dan gerakan tubuh (gesture) serta penerapan figure berpakaian.'),
(67, 73, 'Pada akhir fase F, peserta didik mampu menggambar datar (flat drawing) secara digital dan manual sesuai dengan proporsi dan detail rancangan tampak depan dan belakang untuk kebutuhanproduksi(technical drawing).'),
(68, 74, 'Pada akhir fase F, peserta didik mampu mengungkapkan karya dan mengembangkan desain dalam satu konsep gaya (style), menerapkan trend, menerapkan sustainable fashion, membuat tema desain busana sesuai yang disepakati, baik berupa desain busana berbasis kreasi/berbasis industri/ custom made.'),
(69, 75, 'Pada akhir fase F, peserta didik mampu mengembangkan desain dan olah tekstil yang disesuaikan dengan kebutuhan industri dan kebudayaan daerah (batik/tenun/motif printing/mengolah bahan), membuat desain hiasan (renda/sulaman/ kancing hias/bordir).'),
(70, 76, 'Pada akhir fase F, peserta didik mampu menyiapkan pembuatan busana yang meliputi pembuatan lembar kerja sesuai dengan spesifikasi desain, membuat langkah kerja produksi, mengambil ukuran, membuat pola, memotong bahan, menghitung biaya dan menentukan harga produk.'),
(71, 77, 'Pada akhir fase F, peserta didik mampu menjahit sesuai dengan prosedur, trimming, pressing, dan mengawasi mutu produk busana, serta melaksanakan penyelesaian akhir busana.'),
(72, 78, 'Pada akhir fase F, peserta didik mampu merencanakan projek pembuatan koleksi busana secara kelompok dan melakukan presentasi koleksi secara kelompok.'),
(73, 79, 'Pada akhir fase ini peserta didik mampu memahami kelangkaan sebagai inti dari masalah ilmu ekonomi. Peserta didik memahami skala prioritas sebagai acuan dalam menentukan berbagai kebutuhan yang harus dipenuhi. Peserta didik memahami pola hubungan antara kelangkaan dan biaya peluang. Peserta didik memahami konsep keseimbangan pasar serta memahami pemodelannya dalam bentuk tabel dan kurva. Peserta didik memahami konsep sistem pembayaran dan memahami konsep uang sebagai alat pembayaran. Peserta didik memahami berbagai bentuk alat pembayaran non-tunai yang berlaku di Indonesia serta memahami penggunaannya.\r\nPeserta didik memahami konsep bank dan industri keuangan non- bank dan memahami berbagai produk yang dihasilkan.'),
(74, 80, 'Pada akhir fase ini, peserta didik mampu melakukan kegiatan penelitian sederhana dengan menggunakan teknik atau metode yang sesuai untuk mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, dan mengomunikasikan hasil penelitian mengenai berbagai fenomena ekonomi berdasarkan konsep-konsep ekonomi. Peserta didik mampu merefleksikan dan merencanakan projek lanjutan secara kolaboratif. Peserta didik mencari dan menggunakan berbagai sumber belajar yang relevan terkait konten ilmu ekonomi, keseimbangan pasar, serta bank dan industri keuangan non-bank. Peserta didik mampu menyusun skala prioritas kebutuhan dasar sesuai dengan kondisi di lingkungan sekitarnya.\r\nPeserta didik mengolah dan menyimpulkan berdasarkan data hasil pengamatan atau wawancara tentang terbentuknya keseimbangan pasar. Peserta didik menyimpulkan hubungan antara sistem pembayaran dengan alat pembayaran. Peserta didik membuat pola hubungan antara Otoritas Jasa Keuangan dan lembaga jasa keuangan serta menyimpulkan tentang lembaga jasa keuangan dalam perekonomian Indonesia. Peserta didik menyusun rencana investasi pribadi.'),
(75, 81, 'Peserta didik mampu menganalisis cara pandang para pendiri negara tentang rumusan Pancasila sebagai dasar negara; Peserta didik mampu menganalisis fungsi dan kedudukan Pancasila sebagai dasar negara, ideologi negara, dan identitas nasional; peserta didik mengenali dan menggunakan produk dalam negeri sekaligus mempromosikan budaya lokal dan nasional.'),
(76, 82, 'Peserta didik mampu menganalisis hak dan kewajiban warga negara yang diatur dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945; peserta didik mendemonstrasikan praktik kemerdekaan berpendapat warga negara dalam era keterbukaan informasi sesuai dengan nilai-nilai Pancasila; peserta didik mampu menganalisis kasus pelanggaran hak dan pengingkaran kewajiban sebagaimana diatur dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 dan perumusan solusi secara kreatif, kritis, dan inovatif untuk memecahkan kasus pelanggaran hak dan pengingkaran kewajiban.'),
(77, 83, 'Peserta didik mampu menginisiasi kegiatan bersama atau gotong royong dalam praktik hidup sehari-hari untuk membangun masyarakat sekitar dan masyarakat Indonesia berdasarkan nilai-nilai Pancasila.'),
(78, 84, 'Peserta didik mampu memberi contoh dan memiliki kesadaran akan hak dan kewajibannya sebagai warga sekolah, warga masyarakat dan warga negara; Peserta didik mampu memahami peran dan kedudukannya sebagai warga negara Indonesia.'),
(79, 85, 'Peserta didik mampu  mengeksplorasi desain \r\nproduk kerajinan nusantara berdasarkan aspek ergonomis dan nilai ekonomis dari berbagai sumber.'),
(80, 86, 'Peserta didik mampu membuat rancangan pengembangan produk kerajinan melalui modifikasi bentuk, bahan, alat dan teknik berdasarkan hasil eksplorasi, studi kelayakan pasar dan potensi sumber daya Nusantara.'),
(81, 87, 'Peserta didik mampu mengembangkan produk kerajinan nusantara berbasis kewirausahaan berdasarkan desain yang dibuat dan ditampilkan dengan display dan/atau kemasan yang menarik serta dipromosikan melalui berbagai media informasi dan komunikasi secara verbal maupun visual.\r\n'),
(82, 88, 'Peserta didik mampu memberi penilaian dan saran pengembangan produk kerajinan nusantara berdasarkan penggunaan teknologi tepat guna atau aspek ergonomis serta dampaknya terhadap lingkungan atau budaya secara lisan, visual, dan grafis.'),
(83, 89, 'Pada akhir fase ini, peserta didik mampu memahami konsep dasar ilmu sejarah yang dapat digunakan untuk menjelaskan peristiwa sejarah; memahami konsep dasar ilmu sejarah sebagai bahan analisis untuk mengkaji peristiwa sejarah; memahami konsep dasar ilmu sejarah sebagai bahan evaluasi untuk mengkaji peristiwa sejarah; menganalisis serta mengevaluasi manusia sebagai subjek dan objek sejarah; menganalisis serta mengevaluasi peristiwa sejarah dalam ruang lingkup lokal, nasional, dan global; menganalisis serta mengevaluasi sejarah dalam dimensi masa lalu, masa kini, dan masa depan; menganalisis serta mengevaluasi sejarah dari aspek perkembangan, perubahan, keberlanjutan, dan keberulangan; memahami peristiwa sejarah secara diakronis (kronologi) maupun sinkronis. Peserta didik juga dapat memahami konsep dasar asal usul nenek moyang dan jalur rempah; menganalisis serta mengevaluasi manusia dalam asal usul nenek moyang dan jalur rempah; menganalisis serta mengevaluasi asal usul nenek moyang dan jalur rempah dalam ruang lingkup lokal, nasional, serta global; menganalisis serta mengevaluasi asal usul nenek moyang dan jalur rempah dalam dimensi masa lalu, masa kini, serta masa depan; menganalisis serta mengevaluasi asal usul nenek moyang dan jalur rempah dari pola perkembangan, perubahan, keberlanjutan, dan keberulangan; menganalisis serta mengevaluasi asal usul nenek moyang dan jalur rempah secara diakronis (kronologi) dan/atau sinkronis.\r\nPeserta didik memahami konsep dasar kerajaan Hindu-Buddha; menganalisis serta mengevaluasi manusia dalam kerajaan Hindu-Buddha; menganalisis serta mengevaluasi kerajaan HinduBuddha dalam ruang lingkup lokal, nasional, dan global; menganalisis serta mengevaluasi kerajaan Hindu-Buddha dalam dimensi masa lalu, masa kini, dan masa depan; menganalisis serta mengevaluasi kerajaan Hindu-Buddha dari pola perkembangan, perubahan, keberlanjutan, dan keberulangan; menganalisis serta mengevaluasi kerajaan Hindu-Buddha secara diakronis (kronologi) dan/atau sinkronis. Peserta didik mampu memahami konsep dasar kerajaan Islam; menganalisis serta mengevaluasi manusia dalam kerajaan Islam; menganalisis serta mengevaluasi kerajaan Islam dalam ruang lingkup lokal, nasional, dan global; menganalisis serta mengevaluasi kerajaan Islam dalam dimensi masa lalu, masa kini, dan masa depan; menganalisis serta mengevaluasi kerajaan Islam dari pola perkembangan, perubahan, keberlanjutan, dan keberulangan; menganalisis serta mengevaluasi kerajaan Islam secara diakronis (kronologi) dan/atau sinkronis.'),
(84, 90, 'Pada akhir fase ini, peserta didik mampu mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, mengomunikasikan, merefleksikan dan merencanakan proyek lanjutan secara kolaboratif tentang pengantar dasar ilmu sejarah, jalur rempah dan asal usul nenek moyang bangsa Indonesia, kerajaan Hindu-Buddha, dan kerajaan Islam meliputi:\r\n\r\n1. Penelitian sejarah lokal dimulai dari lingkungan terdekat (sejarah keluarga, sejarah sekolah, sejarah jalur rempah di daerah, sejarah kerajaan di daerah, dan lain-lain); mengumpulkan sumber-sumber primer maupun sekunder melalui sarana lingkungan sekitar, perpustakaan, dan internet; melakukan seleksi dan kritik terhadap sumber-sumber primer maupun sekunder; melakukan penafsiran untuk mendeskripsikan makna di balik sumber-sumber primer dan/atau sekunder; dan menuliskan hasil penelitian dalam bentuk historiografi. \r\n2. Penjelasan peristiwa sejarah secara diakronis (kronologi) yang menitikberatkan pada proses dan/atau sinkronis yang menitikberatkan pada struktur; Penjelasan peristiwa sejarah berdasarkan hubungan kausalitas; Mengaitkan peristiwa sejarah dengan kehidupan sehari-hari; dan menempatkan peristiwa sejarah pada konteks zamannya.\r\n3. Penjelasan peristiwa sejarah dalam perspektif masa lalu, masa kini, dan masa depan; Penjelasan peristiwa sejarah dari pola perkembangan, perubahan, keberlanjutan, dan keberulangan.\r\n4. Penjelasan peristiwa sejarah dalam ruang lingkup lokal, nasional, dan global; Mengaitkan hubungan antara peristiwa sejarah lokal, nasional, dan global. \r\n5. Memaknai nilai-nilai dari peristiwa sejarah dan dikontekstualisasikan dalam kehidupan masa kini.\r\n6. Mengolah informasi sejarah secara non digital maupun digital dalam berbagai bentuk aplikasi sejarah, rekaman suara, film dokumenter, foto, maket, vlog, timeline, story board, infografis, videografis, komik, poster, dan lain-lain.'),
(85, 91, 'Pada akhir fase ini, peserta didik mampu memahami fungsi sosiologi sebagai ilmu yang secara kritis mengkaji masyarakat. Di samping itu, peserta didik mampu mengenal identitas diri, menjelaskan tindakan sosial, menjelaskan hubungan sosial, menjelaskan peran lembaga sosial dalam mewujudkan tertib sosial, dan memahami berbagai ragam gejala sosial yang ada di masyarakat multikultural melalui konsep-konsep dasar sosiolog.'),
(86, 92, 'Pada akhir fase ini, peserta didik mampu melakukan penelitian sosial sederhana dengan memilih metode yang tepat untuk mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, dan mengomunikasikan hasil penelitian tentang berbagai keragaman gejala sosial dengan konsep dasar sosiologi. Peserta didik mampu merefleksikan dan merencanakan projek lanjutan secara kolaboratif.'),
(87, 99, 'Peserta didik mampu menganalisis ayat Al-Qur’an dan hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja erta larangan pergaulan bebas dan zina; dapat membaca Al-Qur’an dengan tartil, menghafal dengan fasih dan lancar ayat Al-Qur’an serta Hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta bahaya dari pergaulan bebas dan zina; dapat menyajikan konten dan paparan tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta larangan pergaulan bebas dan zina; meyakini bahwa sikap kompetitif dalam kebaikan dan etos kerja serta menghindari pergaulan bebas dan perbuatan zina adalah perintah agama; dan membiasakan sikap kompetitif dalam kebaikan dan etos kerja serta menghindari pergaulan bebas dan perbuatan zina dengan lebih berhati-hati dan menjaga kehormatan diri.\r\n'),
(88, 100, 'Peserta didik menganalisis makna syu‘ab al-iman (cabang-cabang iman), pengertian, dalil, macam dan manfaatnya; mempresentasikan makna syu‘ab al-iman (cabang-cabang iman), pengertian, dalil, macam dan manfaatnya; meyakini bahwa dalam terdapat banyak cabangcabangnya; serta menerapkan beberapa sikap dan karakter sebagai cerminan cabang iman dalam kehidupan.'),
(89, 101, 'Peserta didik menganalisis manfaat menghindari akhlak ma?m?mah; membuat karya yang mengandung konten manfaat menghindari sikap ma?m?mah; meyakini bahwa akhlak ma?m?mah adalah larangan dan akhlak ma?m?dah adalah perintah agama; serta membiasakan diri untuk menghindari akhlakma?m?mah dan menampilkan akhlak ma?m?dah dalam kehidupan sehari-hari.'),
(90, 102, 'Peserta didik mampu menganalisis implementasi fikih mu‘?malah dan al-kulliyy?t al-khamsah (lima prinsip dasar hukum Islam; menyajikan paparan tentang fikih mu‘?malah dan al-kulliyy?t al-khamsah meyakini bahwa ketentuan fikih mu‘?malah dan al-kulliyy?t al-khamsah adalah ajaran agama; serta menumbuhkan jiwa kewirausahaan, kepedulian, dan kepekaan sosial.'),
(91, 103, 'Peserta didik mampu menganalisis implementasi fikih mu‘?malah dan al-kulliyy?t al-khamsah (lima prinsip dasar hukum Islam; menyajikan paparan tentang fikih mu‘?malah dan al-kulliyy?t al-khamsah meyakini bahwa ketentuan fikih mu‘?malah dan al-kulliyy?t al-khamsah adalah ajaran agama; serta menumbuhkan jiwa kewirausahaan, kepedulian, dan kepekaan sosial.'),
(92, 104, 'Pada akhir fase E peserta didikdapatmenunjukkan kemampuan dalam mempraktikkan hasil evaluasi penerapan keterampilan gerak berupa permainan dan olahraga, aktivitas senam, aktivitasgerakberirama, dan aktivitas permainan dan olahraga air (kondisional) secara matang pada permainan, aktivitas jasmani lainnya, dan kehidupan nyata sehari-hari.'),
(93, 105, 'Pada akhir fase E peserta didik dapat mengevaluasi fakta, konsep, prinsip, dan prosedur dalam melakukan evaluasi \r\npenerapan keterampilan gerak berupa permainan dan olahraga, aktivitas senam, aktivitas gerak berirama, dan aktivitas permainan dan olahraga air (kondisional) pada permainan, aktivitas jasmani lainnya, dan kehidupan nyata sehari- hari.\r\n'),
(94, 106, 'Pada akhir fase E peserta didik dapat mengevaluasi fakta,konsep, prinsip, dan prosedur dan mempraktikkan latihan pengembangan kebugaran jasmani terkait kesehatan (physical fittness related health) dan kebugaran jasmani terkait keterampilan (physical fittness related skills), berdasarkan prinsip latihan (Frequency, Intensity, Time, Type/FITT) untuk mendapatkan kebugaran dengan status baik. Peserta didik juga dapat menunjukkan kemampuan dalam mengembangkan pola perilaku hidup sehat berupa penerapan konsep dan  prinsip pergaulan sehat antar remaja dan orang lain di sekitarnya.'),
(95, 107, 'Pada akhir fase E peserta didik mengembangkan tanggung jawab sosialnya dalam kelompok kecil untuk melakukan perubahan positif, menunjukkan etika yang baik, saling menghormati, dan mengambil bagian dalam kerja kelompok pada aktivitas jasmani atau kegiatan sosial lainnya. Peserta didik juga dapat menumbuhkembangkan cara menghadapi tantangan dalam aktivitas jasmani.'),
(96, 93, 'Peserta didik mampu mengamati, menyelidiki dan menjelaskan fenomena sesuai kaidah kerja ilmiah dalam menjelaskan konsep kimia dalam kehidupan sehari hari; menerapkan konsep kimia dalam pengelolaan lingkungan termasuk menjelaskan fenomena pemanasan global; menuliskan reaksi kimia dan menerapkan hukum-hukum dasar kimia; memahami struktur atom dan aplikasinya dalam nanoteknologi.\r\n'),
(97, 94, '1. Mengamati\r\n2. Mempertanyakan dan memprediksi\r\n3. Merencanakan dan melakukan penyelidikan\r\n4. Memproses, menganalisis data dan informasi Menafsirkan informasi yang didapatkan dengan jujur dan bertanggung jawab.\r\n5. Mengevaluasi dan refleksi\r\n6. Mengkomunikasikan hasil\r\n'),
(98, 97, 'Pada akhir fase E, peserta didik memiliki kemampuan menciptakan solusi atas permasalahanpermasalahan berdasarkan isu lokal, nasional atau global terkait pemahaman keanekaragaman makhluk hidup dan peranannya, virus dan peranannya, inovasi teknologi biologi,komponen ekosistem dan interaksi antar komponen serta perubahan lingkungan.'),
(99, 98, '1.Mengamati\r\n2.Mempertanyakan dan memprediksi\r\n3.Merencanakan dan melakukan penyelidikan\r\n4.Memproses dan menganalisis data dan informasi\r\n5.Mengevaluasi dan merefleksi\r\n6.Mengomunikasikan hasil'),
(100, 95, 'Peserta didik mampu mendeskripsikan gejala alam dalam cakupan keterampilan proses dalam pengukuran, perubahan iklim dan pemanasan global, pencemaran lingkungan, energi alternatif, dan pemanfaatannya. '),
(101, 96, '1. Mengamati, \r\n2. Mempertanyakan dan memprediksi \r\n3. Merencanakan dan melakukan penyelidikan \r\n4. Memproses, menganalisis data dan informasi \r\n5. Mencipta \r\n6. Mengevaluasi dan refleksi\r\n7. Mengomunikasikan hasi'),
(102, 108, 'Peserta didik mampu mengevaluasi dan mengkreasi informasi berupa gagasan, \r\npikiran, perasaan, pandangan, arahan atau pesan yang akurat dari menyimak berbagai jenis teks (nonfiksi dan fiksi) dalam bentuk monolog, dialog, dan gelar wicara.'),
(103, 109, 'Peserta didik dapat mengevaluasi informasi berupa gagasan, pikiran, pandangan, arahan atau pesan dari berbagai jenis teks, misalnya deskripsi, laporan, narasi, rekon, eksplanasi, eksposisi, dan diskusi, dari teks visual dan audiovisual untuk menemukan makna yang tersurat dan tersirat. Peserta didik menginterpretasi informasi untuk mengungkapkan gagasan dan perasaan simpati, peduli, empati dan/atau pendapat pro/kontra dari teks visual dan audiovisual secara kreatif. Peserta didik menggunakan sumber lain untuk \r\nmenilai akurasi dan kualitas data \r\nserta membandingkan isi teks.'),
(104, 110, 'Peserta didik mampu mengolah dan menyajikan gagasan, pikiran, pandangan, arahan atau pesan untuk tujuan pengajuan usul,perumusan masalah, dan solusi dalam bentuk monolog, dialog, dan gelar wicara secara logis, \r\nruntut, kritis, dan kreatif. Peserta \r\ndidik mampu mengkreasi ungkapan sesuai dengan norma kesopanan dalam berkomunikasi. Peserta didik berkontribusi lebih aktif dalam diskusi dengan mempersiapkan materi diskusi, \r\nmelaksanakan tugas dan fungsi dalam diskusi. Peserta didik mampu mengungkapkan simpati, empati, peduli, perasaan, dan penghargaan secara kreatif dalam bentuk teks fiksi dan nonfiksi \r\nmultimodal.'),
(105, 111, 'Peserta didik mampu menulis gagasan, pikiran, pandangan,arahan atau pesan tertulis untuk berbagai tujuan secara logis, kritis, dan kreatif dalam bentuk \r\nteks informasional dan/atau fiksi. Peserta didik mampu menulis teks eksposisi hasil penelitian dan teks fungsional dunia kerja. Peserta didik mampu mengalihwahanakan satu teks ke teks lainnya untuk tujuan ekonomi kreatif. Peserta didik mampu menerbitkan hasil tulisan di media cetak maupun digital.'),
(106, 112, 'Peserta didik mampu mengevaluasi berbagai\r\ngagasan dan pandangan berdasarkan kaidah\r\nlogika berpikir dari menyimak berbagai jenis teks (nonfiksi dan fiksi) dalam bentuk monolog, dialog, dan gelar wicara;\r\nmengkreasi dan mengapresiasi gagasan dan pendapat untuk menanggapi teks yang disimak.'),
(107, 113, 'Peserta didik mampu mengevaluasi gagasan dan pandangan berdasarkan kaidah logika berpikir dari membaca berbagai tipe teks (nonfiksi dan fiksi) di media cetak dan\r\nelektronik. Peserta didik mampu engapresiasi teks fiksi dan nonfiksi. akurasi dan kualitas data serta membandingkan isi teks.'),
(108, 114, 'Peserta didik mampu menyajikan gagasan, pikiran, dan kreativitas dalam berbahasa dalam bentuk monolog, dialog, dan gelar wicara secara logis, sistematis, kritis, dan kreatif; mampu menyajikan karya sastra secara kreatif dan menarik. Peserta didik mampu mengkreasi teks sesuai dengan norma kesopanan dan budaya Indonesia. Peserta didik mampu menyajikan dan mempertahankan hasil penelitian, serta menyimpulkan masukan dari mitra diskusi'),
(109, 115, 'Peserta didik mampu menulis gagasan,pikiran, pandangan, pengetahuan metakognisi untuk berbagai tujuan secara logis, kritis, dan kreatif. Peserta didik mampu menulis berbagai jenis karya sastra. Peserta didik mampu menulis teks refleksi diri. Peserta didik mampu menulis hasil penelitian, teks fungsional dunia kerja, dan pengembangan studi lanjut. Peserta didik mampu memodifikasi/mendekonstruksikan karya sastra untuk tujuan ekonomi kreatif. Peserta didik mampu menerbitkan tulisan hasil karyanya di media cetak maupun digital');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pustaka`
--

CREATE TABLE `daftar_pustaka` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `daftar_pustaka` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_pustaka`
--

INSERT INTO `daftar_pustaka` (`id`, `id_identitas`, `daftar_pustaka`) VALUES
(18, 15, 'nmndmsnmdnms'),
(20, 17, 'mm,mkkmkmkm'),
(21, 18, 'jkjkhkjhj'),
(27, 24, 'djkjjjjjjjjjjjjjjjjjjjjjjjjkahskdhjakjhsdsd'),
(30, 27, 'djkjjjjjjjjjjjjjjjjjjjjjjjjkahskdhjakjhsdsd'),
(31, 27, 'mdmdkmsmdks'),
(32, 28, 'nxmNxmnMxnmz');

-- --------------------------------------------------------

--
-- Table structure for table `elemen`
--

CREATE TABLE `elemen` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `elemen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elemen`
--

INSERT INTO `elemen` (`id`, `id_mapel`, `elemen`) VALUES
(1, 1, 'Profil technopreneur, peluang usaha \r\ndan pekerjaan/profesi bidang Desain Komunikasi Visual'),
(2, 1, 'Proses bisnis berbagai industri di bidang Desain Komunikasi Visual'),
(3, 1, 'Perkembangan teknologi di industri dan dunia kerja serta isu -isu global pada bidang Desain Komunikasi Visual'),
(4, 1, 'Isu -isu global pada bidang Desain Komunikasi Visual'),
(5, 1, 'Teknik dasar proses produksi pada industri Desain Komunikasi Visual'),
(6, 1, 'Sketsa dan ilustrasi'),
(7, 1, 'Komposisi typography'),
(8, 1, 'Fotografi dasar'),
(9, 1, 'Komposisi grafis'),
(10, 2, 'Proses bisnis di bidang Akuntansi dan Keuangan Lembaga'),
(11, 2, 'Perkembangan teknologi di industri dan dunia kerja serta isu-isu global di bidang \r\nAkuntansi dan Keuangan Lembaga\r\n'),
(12, 2, 'Profil entrepreneur, peluang pekerjaan/profesi dan peluang usaha di bidang Akuntansi dan Keuangan Lembaga'),
(13, 2, 'Lingkup kerja pada bidang Akuntansi dan Keuangan Lembaga'),
(14, 2, 'Keselamatan dan Kesehatan Kerja Lingkungan Hidup '),
(15, 2, 'Etika profesi di bidang Akuntansi dan Keuangan Lembaga'),
(16, 2, 'Prinsip- prinsip dan konsep Akuntansi Dasar dan Perbankan Dasar'),
(17, 2, 'Penggunaan aplikasi pengolah angka/spreadsheet'),
(18, 3, 'Bisnis Manajemen'),
(19, 3, 'Teknologi Dan Isu-Isu Terkini'),
(20, 3, 'Profil Pekerjaan Manajemen Perkantoran'),
(21, 3, 'Teknik Dasar Aktivitas Perkantoran'),
(22, 3, 'Dokumen Berbasis Digital'),
(23, 3, 'Peralatan Dan Apkasi Teknologi Perkantoran'),
(24, 3, 'Sistem Informasi Dan Komunikasi'),
(25, 3, 'Layanan Bisnis Logistik'),
(29, 4, 'Menyimak - Berbicara'),
(30, 4, 'Membaca dan Memirsa'),
(31, 4, 'Menulis dan Mempresentasikan\r\n'),
(32, 5, 'Menyimak - Berbicara'),
(33, 5, 'Membaca dan Memirsa'),
(34, 5, 'Menulis dan Mempresentasikan\r\n'),
(35, 6, 'Bilangan'),
(36, 6, 'Aljabar dan Fungsi'),
(37, 6, 'Geometri'),
(38, 6, 'Analisis Data dan Peluang'),
(42, 7, 'Aljabar and Fungsi'),
(43, 7, 'Geometri'),
(44, 7, 'Analisis Data dan Peluang'),
(45, 8, 'Proses bisnis di bidang teknik jaringan komputer dan telekomunikasi '),
(46, 8, 'Perkembangan teknologi di bidang teknik jaringan komputer dan telekomunikasi'),
(47, 8, 'Profesi dan Kewirausahaan (job-profile dan technopreneur) di bidang teknik jaringan komputer dan telekomunikasi'),
(48, 8, 'Keselamatan dan Kesehatan Kerja Lingkungan Hidup (K3LH) dan budaya kerja industri '),
(49, 8, 'Dasar-dasar teknik jaringan komputer dan telekomunikasi'),
(50, 8, 'Media dan Jaringan Telekomunikasi'),
(51, 8, 'Penggunaan Alat Ukur'),
(52, 12, 'Perencanaan dan Pengalamatan Jaringan'),
(53, 12, 'Teknologi Jaringan Kabel dan Nirkabel '),
(54, 12, 'Keamanan Jaringan'),
(55, 12, 'Pemasangan dan KonfigurasiPerangkat Jaringan '),
(56, 12, 'Administrasi Sistem Jaringan'),
(57, 9, 'Ekonomi bisnis dan administrasi umum'),
(58, 9, 'Akuntansi perusahaan jasa, dagang dan manufaktur'),
(59, 9, 'Akuntansi lembaga/instansi pemerintah'),
(60, 9, 'Akuntansi keuangan'),
(61, 9, 'Komputer akuntansi'),
(62, 9, 'Perpajakan'),
(63, 11, 'Profil technopreneur, peluang usaha dan pekerjaan/profesi di bidang busana (fesyen)'),
(64, 11, 'Dunia Industri dan perkembangan mode (DIPM)'),
(65, 11, 'Dasar branding dan marketing (DBM)'),
(66, 11, 'Menggambar mode (MM)'),
(67, 11, 'Dasar fashion desain (DFD)'),
(68, 11, 'Proses produksi busana'),
(69, 11, 'Perkembangan teknologi di industry dan dunia kerja serta isu-isu global pada bidang busana (fesyen)'),
(70, 11, 'Dasar pola (DP)'),
(71, 11, 'Tehnik dasar menjahit (TDM)'),
(72, 13, 'Gambar Mode'),
(73, 13, 'Gambar Teknis (Technical Drawing)'),
(74, 13, 'Gaya dan Pengembangan Desain'),
(75, 13, 'Eksperimen Tekstil dan Desain Hiasan'),
(76, 13, 'Persiapan Pembuatan Busana'),
(77, 13, 'Menjahit Produk Busana'),
(78, 13, 'Penyusunan Kelompok Koleksi Busana'),
(79, 14, 'Pemahaman Konsep'),
(80, 14, 'Keterampilan Proses'),
(81, 15, 'Pancasila'),
(82, 15, 'Undang-Undang Dasar Negara RepubIik Indonesia Tahun 1945'),
(83, 15, 'Bhinneka Tunggal Ika'),
(84, 15, 'Negara Kesatuan RepubIik Indonesia'),
(85, 16, 'Observasi dan Eksplorasi'),
(86, 16, 'Desain/Perencanaan'),
(87, 16, 'Produksi'),
(88, 16, 'Refleksi dan Evaluasi'),
(89, 17, 'Pemahaman Konsep Sejarah'),
(90, 17, 'Keterampilan Proses Sejarah'),
(91, 18, 'Pemahaman Konsep'),
(92, 18, 'Keterampilan Proses'),
(93, 19, 'Pemahaman Kimia'),
(94, 19, 'Keterampilan Proses'),
(95, 20, 'Pemahaman Fisika'),
(96, 20, 'Keterampilan Proses'),
(97, 21, 'Pemahaman Biologi'),
(98, 21, 'Keterampilan Proses'),
(99, 22, 'Al-Qur’an dan Hadis'),
(100, 22, 'Aqidah'),
(101, 22, 'Akhlak'),
(102, 22, 'Fikih'),
(103, 22, 'Sejarah Peradaban Islam'),
(104, 23, 'Keterampilan Gerak'),
(105, 23, 'Pengetahuan Gerak'),
(106, 23, 'Pemanfaatan Gerak'),
(107, 23, 'Pengembangan Karakter dan Nilai-Nilai'),
(108, 24, 'Menyimak'),
(109, 24, 'Membaca dan Memirsa'),
(110, 24, 'Berbicara dan Mempresentasikan'),
(111, 24, 'Menulis'),
(112, 25, 'Menyimak '),
(113, 25, 'Membaca dan Memirsa'),
(114, 25, 'Berbicara dan Mempresentasikan'),
(115, 25, 'Menulis');

-- --------------------------------------------------------

--
-- Table structure for table `file_modul`
--

CREATE TABLE `file_modul` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `nama_file` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_modul`
--

INSERT INTO `file_modul` (`id`, `id_identitas`, `nama_file`) VALUES
(15, 15, '19112022214217_Modul Ajar_Manajemen Perkantoran dan Layanan Bisnis'),
(17, 17, '19112022215629_Modul Ajar_Teknik Komputer dan Jaringan dan Telekomunikasi'),
(18, 18, '20112022233019_Modul Ajar_Akuntasi dan Keuangan Lembaga'),
(22, 24, '27112022215949_Modul Ajar_Desain Komunikasi Visual '),
(25, 27, '27112022223533_Modul Ajar_Desain Komunikasi Visual '),
(26, 28, '27112022224334_Modul Ajar_Desain Komunikasi Visual ');

-- --------------------------------------------------------

--
-- Table structure for table `file_preview_modul`
--

CREATE TABLE `file_preview_modul` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `nama_file` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_preview_modul`
--

INSERT INTO `file_preview_modul` (`id`, `id_identitas`, `nama_file`) VALUES
(11, 15, '19112022214217_Modul Ajar_Manajemen Perkantoran dan Layanan Bisnis_preview'),
(13, 17, '19112022215629_Modul Ajar_Teknik Komputer dan Jaringan dan Telekomunikasi_preview'),
(14, 18, '20112022233019_Modul Ajar_Akuntasi dan Keuangan Lembaga_preview'),
(16, 27, '27112022223533_Modul Ajar_Desain Komunikasi Visual _preview'),
(17, 28, '27112022224334_Modul Ajar_Desain Komunikasi Visual _preview');

-- --------------------------------------------------------

--
-- Table structure for table `glosarium`
--

CREATE TABLE `glosarium` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `glosarium` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glosarium`
--

INSERT INTO `glosarium` (`id`, `id_identitas`, `glosarium`) VALUES
(18, 15, 'smwmwnmsnwmns'),
(20, 17, 'n,mnmnmnmn'),
(21, 18, 'nnm,n,n'),
(29, 24, 'kjdkldjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjksjdkjkj'),
(32, 27, 'kjdkldjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjksjdkjkj'),
(33, 28, 'kjksjkdjkxkkxm');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolah`
--

CREATE TABLE `identitas_sekolah` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(15) DEFAULT NULL,
  `program_keahlian` varchar(255) DEFAULT NULL,
  `mata_pelajaran` varchar(255) DEFAULT NULL,
  `kelas` varchar(3) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `fase` varchar(1) DEFAULT NULL,
  `elemen` text,
  `capaian_pembelajaran` text,
  `alokasi_waktu` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_sekolah`
--

INSERT INTO `identitas_sekolah` (`id`, `id_user`, `tahun_ajaran`, `program_keahlian`, `mata_pelajaran`, `kelas`, `semester`, `fase`, `elemen`, `capaian_pembelajaran`, `alokasi_waktu`, `created_at`, `updated_at`) VALUES
(15, 12, '2020/2021', 'Manajemen Perkantoran dan Layanan Bisnis', 'Dasar-Dasar Manajemen Perkantoran dan Layanan Bisnis', 'X', 2, 'E', 'Profil Pekerjaan Manajemen Perkantoran', 'Pada akhir fase E peserta didik mampu menjelaskan profil pekerjaan/profesi (job profile) di masa sekarang dan di masa mendatang, serta peluang usaha di bidang manajemen perkantoran dan layanan bisnis', '1 x 45 menit', '2022-11-19 21:42:17', '2022-11-19 21:42:17'),
(17, 15, '2021/2022', 'Teknik Komputer dan Jaringan dan Telekomunikasi', 'Dasar-dasar Teknik Jaringan Komputer dan Telekomunikasi - E', 'XI', 1, 'F', 'Dasar-dasar teknik jaringan komputer dan telekomunikasi', 'Pada akhir fase E, peserta didik mampu memahami tentang jenis alat ukur dan penggunaannya dalam pemeliharaan jaringan komputer dan sistem telekomunikasi.', '3 x 45', '2022-11-19 21:56:29', '2022-11-19 21:56:29'),
(18, 12, '2020/2021', 'Akuntasi dan Keuangan Lembaga', 'Sosiologi', 'X', 2, 'E', 'Keterampilan Proses', 'Pada akhir fase ini, peserta didik mampu melakukan penelitian sosial sederhana dengan memilih metode yang tepat untuk mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, dan mengomunikasikan hasil penelitian tentang berbagai keragaman gejala sosial dengan konsep dasar sosiologi. Peserta didik mampu merefleksikan dan merencanakan projek lanjutan secara kolaboratif.', '1 x 45 menit', '2022-11-20 23:30:19', '2022-11-20 23:30:19'),
(24, 1, '2021/2022', 'Desain Komunikasi Visual ', 'Dasar - Dasar Desain Komunikasi Visual', 'X', 2, 'E', 'Isu -isu global pada bidang Desain Komunikasi Visual', '																																													Pada akhir fase E peserta didik mampu memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, teknologi Digital dalam dunia industri, isu pemanasan global, perubahan iklim, aspek - aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling produk																																										', '5 x 45', '2022-11-27 21:59:49', '2022-11-27 21:59:49'),
(27, 1, '2021/2022', 'Desain Komunikasi Visual ', 'Dasar - Dasar Desain Komunikasi Visual', 'X', 2, 'E', 'Isu -isu global pada bidang Desain Komunikasi Visual', '																																																												Pada akhir fase E peserta didik mampu memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, teknologi Digital dalam dunia industri, isu pemanasan global, perubahan iklim, aspek - aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling produk																																																								', '5 x 45', '2022-11-27 22:35:33', '2022-11-27 22:35:33'),
(28, 1, '2022/2023', 'Desain Komunikasi Visual ', 'Bahasa Indonesia - E', 'X', 1, 'E', 'Berbicara dan Mempresentasikan', 'Peserta didik mampu mengolah dan menyajikan gagasan, pikiran, pandangan, arahan atau pesan untuk tujuan pengajuan usul,perumusan masalah, dan solusi dalam bentuk monolog, dialog, dan gelar wicara secara logis, \nruntut, kritis, dan kreatif. Peserta \ndidik mampu mengkreasi ungkapan sesuai dengan norma kesopanan dalam berkomunikasi. Peserta didik berkontribusi lebih aktif dalam diskusi dengan mempersiapkan materi diskusi, \nmelaksanakan tugas dan fungsi dalam diskusi. Peserta didik mampu mengungkapkan simpati, empati, peduli, perasaan, dan penghargaan secara kreatif dalam bentuk teks fiksi dan nonfiksi \nmultimodal.', '3 x 45', '2022-11-27 22:43:34', '2022-11-27 22:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `inti`
--

CREATE TABLE `inti` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inti`
--

INSERT INTO `inti` (`id`, `id_kegiatan`, `kegiatan`) VALUES
(25, 15, 'Guru mengajak peserta didik untuk melakukan observasi di luar ruangan'),
(27, 17, 'Guru menyampaikan materi dengan media Buku Paket'),
(28, 18, 'Guru menyampaikan materi dengan media Buku Paket'),
(36, 24, 'Guru menyampaikan presentasi dengan power point'),
(39, 27, 'Guru menyampaikan presentasi dengan power point'),
(40, 28, 'Guru mengajak peserta didik untuk melakukan observasi di luar ruangan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_pembelajaran`
--

CREATE TABLE `kegiatan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pertemuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_pembelajaran`
--

INSERT INTO `kegiatan_pembelajaran` (`id`, `id_identitas`, `pertemuan`) VALUES
(15, 15, 1),
(17, 17, 1),
(18, 18, 1),
(24, 24, 1),
(27, 27, 1),
(28, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_awal`
--

CREATE TABLE `kompetensi_awal` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `kompetensi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi_awal`
--

INSERT INTO `kompetensi_awal` (`id`, `id_identitas`, `kompetensi`) VALUES
(15, 15, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(17, 17, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(18, 18, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(24, 24, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(27, 27, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(28, 28, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif');

-- --------------------------------------------------------

--
-- Table structure for table `list_ases_for`
--

CREATE TABLE `list_ases_for` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_ases_for`
--

INSERT INTO `list_ases_for` (`id`, `asesmen`) VALUES
(1, 'Apa yang sedang kamu rasakan saat ini?'),
(2, 'Bagaimana perasaanmu saat belajar sendiri di rumah?'),
(3, 'Hal apa yang paling menyenangkan dan tidak menyenangkan?'),
(4, 'Apa yang kamu inginkan dalam pembelajaran hari ini?');

-- --------------------------------------------------------

--
-- Table structure for table `list_ases_kog`
--

CREATE TABLE `list_ases_kog` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_ases_kog`
--

INSERT INTO `list_ases_kog` (`id`, `asesmen`) VALUES
(1, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya');

-- --------------------------------------------------------

--
-- Table structure for table `list_ases_non_kog`
--

CREATE TABLE `list_ases_non_kog` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_ases_non_kog`
--

INSERT INTO `list_ases_non_kog` (`id`, `asesmen`) VALUES
(1, 'Kuis'),
(2, 'Unjuk kerja'),
(3, 'Penilaian akhiran');

-- --------------------------------------------------------

--
-- Table structure for table `list_ases_sum`
--

CREATE TABLE `list_ases_sum` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_ases_sum`
--

INSERT INTO `list_ases_sum` (`id`, `asesmen`) VALUES
(1, 'Penilaian Akhir Semester');

-- --------------------------------------------------------

--
-- Table structure for table `list_inti`
--

CREATE TABLE `list_inti` (
  `id` int(11) NOT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_inti`
--

INSERT INTO `list_inti` (`id`, `kegiatan`) VALUES
(5, 'Guru membuat kelompok belajar dengan peserta didik'),
(6, 'Guru menyampaikan materi dengan media Buku Paket'),
(7, 'Guru menampilkan video pembelajaran'),
(8, 'Guru menyampaikan presentasi dengan power point'),
(9, 'Guru melakukan demonstrasi dengan alat peraga'),
(10, 'Guru mengajak peserta didik untuk melakukan observasi di dalam ruangan'),
(11, 'Guru mengajak peserta didik untuk melakukan observasi di luar ruangan'),
(12, 'Guru melakukan evaluasi terhadap siswa dengan tes tertulis atau tes lisan'),
(13, 'Siswa melakukan diskusi dengan teman kelompok'),
(14, 'Siswa melakukan presentasi dari hasil diskusi');

-- --------------------------------------------------------

--
-- Table structure for table `list_materi`
--

CREATE TABLE `list_materi` (
  `id` int(11) NOT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `materi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_materi`
--

INSERT INTO `list_materi` (`id`, `id_mapel`, `materi`) VALUES
(9, 1, 'Memahami pekerjaan atau profesi'),
(10, 1, 'Membaca peluang pasar dan usaha'),
(11, 1, 'Membangun visi dan passion');

-- --------------------------------------------------------

--
-- Table structure for table `list_pendahuluan`
--

CREATE TABLE `list_pendahuluan` (
  `id` int(11) NOT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pendahuluan`
--

INSERT INTO `list_pendahuluan` (`id`, `kegiatan`) VALUES
(9, 'Guru memberi salam dan mengajak berdo\'a sebelum pembelajaran dimulai'),
(10, 'Guru mengecek kehadiran peserta didik'),
(11, 'Guru memberi apersepsi tentang materi yang akan dipelajari'),
(12, 'Guru memberi motivasi kepada peserta didik dan menanyakan kondisi kesehatannya'),
(13, 'Guru menyampaikan tujuan yang akan dicapai pada pembelajaran hari ini'),
(14, 'Guru menyampaikan garis besar cakupan materi yang dipelajari'),
(15, 'Guru menyampaikan metode pembelajaran dan teknik penilaian yang akan digunakan'),
(16, 'Guru membuat kesepakatan belajar bersama peserta didik'),
(17, 'Guru melakukan review materi sebelumnya dengan memberi pertanyaan - pertanyaan'),
(18, 'Guru bersama peserta didik membentuk kelompok belajar');

-- --------------------------------------------------------

--
-- Table structure for table `list_pengayaan_remedial`
--

CREATE TABLE `list_pengayaan_remedial` (
  `id` int(11) NOT NULL,
  `pengayaan_remedial` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_pengayaan_remedial`
--

INSERT INTO `list_pengayaan_remedial` (`id`, `pengayaan_remedial`) VALUES
(1, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(2, 'Remedial diberikan kepada peserta didik yang belum menguasai materi dengan baik, yaitu dengan cara memberikan pengulangan materi dasar serta materi spesifik yang kurang dikuasai oleh peserta didik.');

-- --------------------------------------------------------

--
-- Table structure for table `list_penutup`
--

CREATE TABLE `list_penutup` (
  `id` int(11) NOT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_penutup`
--

INSERT INTO `list_penutup` (`id`, `kegiatan`) VALUES
(4, 'Guru memberikan rangkuman poin-poin penting mengenai materi yang dipelajari'),
(5, 'Menutup dengan menanyakan kepada para siswa mengenai materi yang sudah dibahas'),
(6, 'Memberikan kesempatan siswa untuk bertanya mengenai materi yang belum dipahami'),
(7, 'Guru menunjuk siswa tertentu untuk menyampaikan penjelasannya tentang materi atau bagian dari materi yang sudah dipelajari'),
(8, 'Menutup pelajaran dengan memberi motivasi kepada siswa'),
(9, 'Melakukan penilaian dan/atau refleksi terhadap kegiatan yang sudah dilaksanakan'),
(10, 'Merencanakan kegiatan tindak lanjut dalam bentuk pembelajaran remedi, program pengayaan, dan layanan konseling'),
(11, 'Memberikan tugas, baik tugas individual maupun kelompok'),
(12, 'Menyampaikan rencana pembelajaran untuk pertemuan berikutnya'),
(13, 'Menutup kelas dengan membaca doa bersama-sama');

-- --------------------------------------------------------

--
-- Table structure for table `list_persiapan`
--

CREATE TABLE `list_persiapan` (
  `id` int(11) NOT NULL,
  `persiapan_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_persiapan`
--

INSERT INTO `list_persiapan` (`id`, `persiapan_pembelajaran`) VALUES
(2, 'Guru menyusun instrument assesmen yang digunakan'),
(3, 'Guru melakukan tes diagnostic'),
(4, 'Guru menyusun LKPD');

-- --------------------------------------------------------

--
-- Table structure for table `list_refleksi`
--

CREATE TABLE `list_refleksi` (
  `id` int(11) NOT NULL,
  `refleksi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_refleksi`
--

INSERT INTO `list_refleksi` (`id`, `refleksi`) VALUES
(1, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(2, 'Apakah aktivitas pembelajaran hari ini bermakna dalam kehidupan saya?');

-- --------------------------------------------------------

--
-- Table structure for table `list_tp`
--

CREATE TABLE `list_tp` (
  `id` int(11) NOT NULL,
  `id_elemen` int(11) DEFAULT NULL,
  `tp` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_tp`
--

INSERT INTO `list_tp` (`id`, `id_elemen`, `tp`) VALUES
(1, 1, 'Memahami pekerjaan atau profesi dalam bidang Desain Komunikasi Visual, dan kewirausahaan di bidang ekonomi kreatif'),
(2, 1, 'Membaca peluang pasar dan usaha'),
(3, 1, 'Membangun visi dan passion'),
(4, 2, 'Memahami manajemen produksi bidang Desain secara menyeluruh pada berbagai industri ekonomi kreatif lainnya,'),
(5, 2, 'Menerapkan manajemen produksi dalam elemen dasar perancangan dan proses desain dan produksi dalam eksekusi kerja desain komunikasi visual secara mandiri'),
(8, 3, 'Memahami tentang perkembangan proses produksi industri Desain Komunikasi Visual mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, digital teknologi dalam dunia industri, isu pemanasan global, perubahan iklim, aspek -aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling'),
(9, 4, 'Memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern'),
(10, 5, 'Memahami kepribadian yang dibutuhkan'),
(11, 5, 'Mengembangkan pola pikir kreatif melalui praktek secara mandiri dengan berpikir kritis tentang seluruh proses produksi'),
(12, 6, 'Menjelaskan konsep dasar karya dengan sketsa dan ilustrasi.'),
(13, 6, 'Menyiapkan bahan peralatan sketsa'),
(14, 6, 'Mewujudkan sketsa'),
(15, 6, 'Menyempurnakan sketsa'),
(16, 6, 'Membuat ilustrasi dalam perancangan dan proses produksi untuk dikembangkan dalam eksekusi kerja'),
(17, 7, 'Menjelaskan konsep dasar karya dengan sketsa dan ilustrasi'),
(18, 7, 'Menyiapkan bahan peralatan sketsa'),
(19, 7, 'Mewujudkan sketsa'),
(20, 7, 'Menyempurnakan sketsa'),
(21, 7, 'Membuat ilustrasi dalam perancangan dan proses produksi untuk dikembangkan dalam eksekusi kerja'),
(22, 8, 'Memahami jenis kamera '),
(23, 8, 'Menentukan komposisi pemotretan '),
(24, 8, 'Mengatur pencahayaan '),
(25, 8, 'Melakukan pemotretan '),
(26, 8, 'Menyimpan data'),
(27, 8, 'Melakukan pekerjaan akhir dalam editing pada fotografi'),
(28, 8, 'Menerapkannya dengan kreativitas dan disiplin dalam perancangan dan proses produksi dalam eksekusi kerja'),
(29, 9, 'Memahami pengoperasian perangkat lunak desain '),
(30, 9, 'Memilih jenis perangkat lunak '),
(31, 9, 'Menetapkan perangkat lunak berbasis bitmap dan vector'),
(32, 9, 'Menggunakan perangkat lunak berbasis bitmap dan vector dalam perancangan dan proses produksi dalam eksekusi kerja'),
(33, 10, 'Menjelaskan pengertian proses bisnis'),
(34, 10, 'Menjelaskan aspek utama proses bisnis'),
(35, 10, 'Menjelaskan pengertian akuntansi perusahaan jasa'),
(36, 10, 'Mengidentifikasi karakteristik perusahaan jasa'),
(37, 10, 'Memberikan contoh perusahaan jasa secara mandiri'),
(38, 10, 'Menguraikan Siklus akuntansi perusahaan jasa'),
(39, 10, 'Menjelaskan pengertian akuntansi perusahaan dagang'),
(40, 10, 'Mengidentifikasi karakteristik perusahaan dagang'),
(41, 10, 'Memberikan contoh perusahaan dagang secara mandiri'),
(42, 10, 'Menguraikan Siklus akuntansi perusahaan dagang'),
(43, 10, 'Menjelaskan pengertian akuntansi perusahaan manufactur'),
(44, 10, 'Mengidentifikasi karakteristik perusahaan manufactur'),
(45, 10, 'Memberikan contoh perusahaan perusahaan manufactur mandiri'),
(46, 10, 'Menguraikan Siklus akuntansi perusahaan manufactur'),
(47, 11, 'Menjelaskan sejarah akuntansi'),
(48, 11, 'Menjelaskan Sejarah akuntansi di Indonesia'),
(49, 11, 'Menguraikan tantangan akuntansi pada masa kini'),
(50, 11, 'Menjelaskan manfaat keamanan data bisnis'),
(51, 11, 'Menjelaskan aplikasi pencatatan akuntansi'),
(52, 11, 'Menjelaskan prosedur keamanan data'),
(53, 11, 'Menerapkan penyimpanan data'),
(54, 12, 'Menjelaskan jenis-jenis profesi akuntansi lulusan SMK'),
(55, 12, 'Menjelaskan pentingnya etika profesi dalam akuntansi'),
(56, 12, 'Mengidentifikasi profesi dalam akuntansi'),
(57, 12, 'Mencari (search) peluang kerja lulusan akuntansi'),
(58, 12, 'Mencari (search) peluang kerja lulusan akuntansi'),
(59, 12, 'Persiapan sebelum melamar pekerjaan.'),
(60, 13, 'Menjelaskan siklus akuntansi jasa'),
(61, 13, 'Menjelaskan tentang macam dokumen transaksi'),
(62, 13, 'Menjelaskan pengaruh trnsaksi untuk menentukan Debet Kredit'),
(63, 13, 'Menjelaskan fungsi Jurnal Umum'),
(64, 13, 'Menjelaskan pencatatan transaksi kedalam Jurnal umum'),
(65, 13, 'Mengidentifikasi jurnal umum dalam menentukan banyaknya Buku besar'),
(66, 13, 'Membuat Buku besar'),
(67, 13, 'Memasukkan (posting) dari Jurnal ke buku besar'),
(68, 13, 'Menyusun Neraca Saldo'),
(69, 13, 'Membuat Jurnal penyesuaian'),
(70, 13, 'Membuat Neraca Lajur'),
(71, 13, 'Mmebuat Jurnal Penutup'),
(72, 13, 'Menutup Buku besar'),
(73, 13, 'Menyusun Neraca Saldo sesudah Penutupan'),
(74, 13, 'Mengidentifikasi jenis perusahaan dagang'),
(75, 13, 'Menjelaskan persediaan barang dagangan'),
(76, 13, 'Membuat Jurnal khusus perusahaan dagang'),
(77, 13, 'Menjelaskan akun-akun yang muncul pada perusahaan dagang'),
(78, 13, 'Syarat penyerahan barang'),
(79, 13, 'Syarat pembayaran'),
(80, 13, 'Membuat Jurnal penyesuaian dengan membuka akun Harga Pokok Penjualan'),
(81, 13, 'Membuat Jurnal penyesuaian dengan membuka akun Ihtisar Laba Rugi'),
(82, 13, 'Membuat Neraca lajur perusahaan dagang'),
(83, 13, 'Menyususn Laporan keuangan perusahaan dagang'),
(84, 13, 'Membuat Jurnal Penutup'),
(85, 13, 'Membuat jurnal Pembalik'),
(86, 13, 'Menyusun Laporan Keuangan'),
(87, 14, 'Menjelaskan budaya kerja'),
(88, 14, 'Menjelaskan manfaat budaya kerja'),
(89, 14, 'Menguraikan fungsi dari5S/5R'),
(90, 14, 'Strategi menerapkan 5S/5R'),
(91, 14, 'Menerapkan 5S/5R'),
(92, 14, 'Menjelaskan Faktor penyebab kecelakaan'),
(93, 14, 'Menjelaskan Pengendalia Gangguan kerja'),
(94, 14, 'Menjelaskan Pencegahan kecelakaan kerja'),
(95, 14, 'Menjelaskan Kesehatan dan keselamatan kerja'),
(96, 14, 'Menguraiakan upaya Kesehatan tenaga kerja'),
(97, 14, 'Menjelaskan P3K'),
(98, 15, 'Menjelaskan tentang pedoman kerja'),
(99, 15, 'Menjelaskan prosedur, tatakerja dan system kerja'),
(100, 15, 'Menjelaskan aturan kerja'),
(101, 15, 'Menjelaskan karakteristik profesi'),
(102, 15, 'Mengidentifikasi jenis etika profesi'),
(103, 15, 'Mengidentifikasi kode etik profesi'),
(104, 15, 'Menjelaskan fungsi kode etik profesi'),
(105, 15, 'Menjelaskan fungsi kode etik profesi'),
(106, 16, 'Mendefinisikan pengertian akuntansi'),
(107, 16, 'Menjelaskan kegiatan akuntansi'),
(108, 16, 'Menjelaskan tujuan utama akuntansi'),
(109, 16, 'Mengidentifikasi peran akuntansi'),
(110, 16, 'Mengidentifikasi pihak-pihak yang membutuhkan informasi akuntansi'),
(111, 16, 'Mengidentifikasi profesi akuntansi'),
(112, 16, 'Mengidentifikasi profesi akuntan'),
(113, 16, 'Mengidentifikasi prinsip dasar akuntansi'),
(114, 16, 'Mengidentifikasi konsep dasar akuntansi'),
(115, 17, 'Menerapkan paket Program pengolah angka'),
(116, 17, 'Mengentri dan mengolah data berdasarkan sel'),
(117, 17, 'Mengolah data dengan fungsi-fungsi program pengolah angka'),
(118, 17, 'Mengerjakan Aplikasi Siklus akuntansi Jasa'),
(119, 18, 'Menjelaskan Proses Bisnis di bidang Manajemen Perkantoran dan Layanan Bisnis'),
(120, 18, 'Menjelaskan tahapan fungsi manajemen seperti perencanaan, pengorganisasian, pelaksanaan, dan pengendalian'),
(121, 19, 'Menjelaskan perkembangan manajemen perkantoran modern, serta perkembangan revolusi industri 4.0 di bidang perkantoran dan layanan bisnis'),
(122, 20, 'Menjelaskan jenis pekerjaan Administrasi secara umum serta Pekerjaan administrasi di masa sekarang dan masa depan (berbasis manual dan teknologi)'),
(123, 21, 'Menjelaskan Teknik pelayanan prima, layanan pelanggan serta prosedur intruksi kerja'),
(124, 22, 'Menjelaskan Dasar-Dasar Prosedur penanganan dokumen, pengelolaan dokumen, serta prosedur penyimpanan dokumen berbasis digital'),
(125, 23, 'Mengidentifikasi peralatan serta mesin mesin kantor'),
(126, 23, 'Peserta didik mampu menerapkan prosedur pemeliharaan peralatan dan mesin-mesin kantor '),
(127, 23, 'Menggunakan aplikasi perangkat lunak untuk kegiatan perkantoran serta mesin-mesin cetak dokumen'),
(128, 24, 'Menjelaskan jenis data dan informasi'),
(129, 24, 'Menjelaskan serta menerapkan komunikasi Lisan dan Tulisan'),
(130, 24, 'Menerapkan prosedur komunikasi menggunakan alat elektronik'),
(131, 25, 'Menjelaskan konsep layanan bisnis perkantoran, konsep logistik, jenis dokumen logistic serta pendistribusian dokumen'),
(132, 29, 'Mengidentifikasi Ide utama dan detail relevan dari teks lisan dan tulis mengenai topik yang dekat dengan kehidupan pemuda.'),
(133, 29, 'Mengidentifikasi Ide utama dan detail relevan dari teks lisan dan tulis mengenai topik yang dekat dengan kehidupan pemuda.'),
(134, 29, 'Menyampaikan pendapat untuk membahas minat.'),
(135, 29, 'Mempresentasikan informasi dengan berbagai moda yang sesuai dengan pembaca dan pemirsa'),
(136, 29, 'Membandingkan isu yang dekat dengan kehidupan pemuda.'),
(137, 30, 'Menganalisa detail spesifik, informasi tersurat dan tersirat dalam berbagai macam teks multimoda.\r\n'),
(138, 30, 'Mengidentifikasi Ide utama dan detail relevan dari teks lisan dan tulis mengenai topik yang dekat dengan kehidupan pemuda.'),
(139, 31, 'Membuat perencanaan tulisan berbagai teks.'),
(140, 31, 'Menulis berbagai macam teks dengan menggunakan kosa kata dan kata kerja umum'),
(141, 31, 'Menggunakan strategi koreksi diri (tanda baca dan huruf besar) utk mengulas dan menulis ulang.'),
(142, 31, 'Mempresentasikan informasi dengan berbagai moda yang sesuai dengan pembaca dan pemirsa'),
(143, 32, 'Merespon pertanyaan terbuka dalam berbagai situasi dan tujuan'),
(144, 32, 'Merespon opini terkait isu-isu sosial, minat, perilaku dan nilai-nilai.'),
(145, 32, 'Mengidentifikasi ide pokok dan detail dari diskusi atau presentasi'),
(146, 32, 'Merespon opini terkait isu-isu sosial, minat, perilaku dan nilai-nilai. '),
(147, 32, 'Mengevaluasi perspektif terkait isu sosial, minat, perilaku dan nilai-nilai'),
(148, 32, 'Menggunakan strategi koreksi dan perbaikan diri'),
(163, 33, NULL),
(164, 33, 'Merespon beberapa jenis teks'),
(165, 33, 'Memahami ide pokok, isu-isu atau pengembangan plot dalam berbagai teks'),
(166, 33, 'Mengidentifikasi tujuan penulis'),
(167, 33, 'Menyimpulkan isi beberapa jenis teks'),
(168, 33, 'Membuat sintesis teks'),
(169, 33, 'Melakukan inferensi untuk memahami informasi tersirat dalam teks'),
(170, 34, 'Merespon berbagai jenis teks fiksi dan faktual'),
(171, 34, 'Menulis ulang beberapa jenis teks.'),
(172, 34, 'Menulis ide kompleks dengan menggunakan kosa kata dan tata Bahasa yang beragam'),
(173, 34, 'Menyajikan hasil menulis dalam bentuk presentasi.'),
(174, 35, 'Menyatakan perkalian bilangan bulat berulang sebagai bilangan berpangkat (eksponen)'),
(175, 35, 'Menggeneralisasi sifat-sifat eksponen'),
(176, 35, 'Menerapkan sifat eksponen untuk menyederhanakan ekspresi'),
(177, 35, 'Mengidentifikasi bentuk ekuivalen menggunakan sifat eksponen (termasuk hubungan pangkat rasional dan bentuk akar)'),
(178, 35, 'Menjelaskan definisi logaritma serta kaitannya dengan eksponen'),
(179, 35, 'Menggeneralisasi sifat-sifat logaritma'),
(180, 35, 'Menggunakan sifat logaritma dalam menyederhanakan bentuk logaritma '),
(181, 35, 'Menyelesaikan masalah kontekstual yang berkaitan dengan konsep logaritma'),
(182, 35, 'Menentukan pola dari suatu barisan bilangan'),
(183, 35, 'Menjelaskan pengertian barisan aritmetika'),
(184, 35, 'Menentukan rumus suku ke-n suatu barisan\r\naritmetika'),
(185, 35, 'Menyelesaikan masalah kontekstual yang terkait dengan barisan aritmetika'),
(186, 35, 'Menjelaskan pengertian deret aritmetika'),
(187, 35, 'Menentukan rumus jumlah n suku pertama suatu deret aritmetika'),
(188, 35, 'Menyelesaikan masalah kontekstual yang terkait dengan deret aritmetika.'),
(189, 35, 'Menjelaskan pengertian barisan geometri'),
(190, 35, 'Menentukan rumus suku ke-n suatu barisan\r\ngeometri'),
(191, 35, 'Menyelesaikan masalah kontekstual yang terkait dengan barisan geometri'),
(192, 35, 'Menjelaskan pengertian deret geometri '),
(193, 35, 'Menentukan rumus jumlah n suku pertama suatu deret geometri'),
(194, 35, 'Menyelesaikan masalah kontekstual yang terkait dengan deret geometri.'),
(195, 35, 'Menjelaskan pengertian deret geometri tak hingga'),
(196, 35, 'Menentukan rumus jumlah deret geometri tak\r\nhingga'),
(197, 35, 'Menyelesaikan masalah kontekstual yang terkait dengan deret geometri tak hingga'),
(198, 36, 'Menginterpretasi bagian dari ekspresi (bentuk) eksponen sederhana'),
(199, 36, 'Menjelaskan pengertian solusi dari sistem\r\npersamaan linear tiga variabel berdasarkan\r\npemahaman solusi dari sistem persamaan linear dua variabel'),
(200, 36, 'Menyelesaikan masalah dengan memodelkan ke\r\ndalam sistem persamaan linear'),
(201, 36, 'Menentukan solusi dari sistem pertidaksamaan linear dua variabel secara grafik'),
(202, 36, 'Menyelesaikan masalah dengan memodelkan ke\r\ndalam sistem pertidaksamaan linear'),
(203, 36, 'Menginterpretasi karakteristik utama dari tabel maupun grafik dari fungsi kuadrat'),
(204, 36, 'Menganalisis perbedaan sifat dari berbagai\r\nbentuk fungsi kuadrat (bentuk umum, bentuk\r\ntitik puncak, dan bentuk akar)'),
(205, 36, 'Memodelkan fenomena atau data dengan fungsi\r\nkuadrat '),
(206, 36, 'Menginterpretasi karakteristik utama dari tabel maupun grafik dari fungsi eksponen'),
(207, 36, 'Membedakan situasi yang dapat dimodelkan\r\ndengan fungsi eksponen dan yang dapat\r\ndimodelkan dengan fungsi linear'),
(208, 36, 'Memodelkan fenomena atau data dengan fungsi\r\neksponen'),
(209, 36, 'Menjelaskan pengertian vektor, notasi vektor dan panjang vektor'),
(210, 36, 'Melakukan operasi vektor (penjumlahan,\r\npengurangan dan perkalian dengan skalar) secara geometris'),
(211, 36, 'Melakukan operasi vektor (penjumlahan,\r\npengurangan dan perkalian dengan skalar) secara aljabar'),
(212, 36, 'Menentukan hasil kali skalar dua vektor'),
(213, 36, 'Menentukan besar sudut antara dua vektor'),
(214, 37, 'Mengidentifikasi hubungan sudut dan sisi dari segitiga siku-siku'),
(215, 37, 'Menjelaskan definisi perbandingan trigonometri untuk sudut lancip menggunakan konsep kesebangunan'),
(216, 37, 'Menggunakan hubungan antara sinus dan cosinus untuk sudut penyiku'),
(217, 37, 'Menggunakan perbandingan trigonometri dan\r\nteorema Pythagoras untuk menyelesaikan\r\npermasalahan yang melibatkan segitiga siku-siku'),
(218, 38, 'Merepresentasikan data menggunakan tampilan data kelompok yang sesuai (tabel distribusi frekuensi dan, histogram)'),
(219, 38, 'Menginterpretasi data berdasarkan tampilan data'),
(220, 38, 'Menentukan ukuran pemusatan dari kumpulan data (mean, median dan modus) pada data kelompok'),
(221, 38, 'Menentukan ukuran penempatan dari kumpulan data (kuartil dan persentil) pada data kelompok'),
(222, 38, 'Menentukan ukuran penyebaran dari kumpulan data (jangkauan inter kuartil, varian dan simpangan baku) pada data kelompok'),
(223, 38, 'Membandingkan dua kelompok data menggunakan\r\nukuran pemusatan dan ukuran penyebaran'),
(224, 38, 'Menganalisis asosiasi dan tren dari data (2 variabel) menggunakan diagram pencar '),
(225, 38, 'Menganalisis data kategorikal untuk dua kategori menggunakan tabel frekuensi dua arah'),
(226, 38, 'Menjelaskan pengertian ruang sampel dan kejadian'),
(227, 38, 'Menentukan ruang sampel dan kejadian dari suatu percobaan'),
(228, 38, 'Menjelaskan pengertian peluang suatu kejadian'),
(229, 38, 'Menentukan peluang suatu kejadian'),
(230, 38, 'Menentukan frekuensi harapan suatu kejadian'),
(231, 38, 'Menjelaskan pengertian gabungan dua kejadian'),
(232, 38, 'Menentukan peluang gabungan dua kejadian'),
(233, 38, 'Menjelaskan pengertian kejadian saling lepas'),
(234, 38, 'Menentukan peluang kejadian saling lepas'),
(235, 42, 'Membedakan relasi dan fungsi'),
(236, 42, 'Membandingkan fungsi surjektif, fungsi injektif dan fungsi bijektif'),
(237, 42, 'Membandingkan fungsi-fungsi khusus (konstan, identitas, genap-ganjil, modulus, tangga) '),
(238, 42, 'Menerapkan operasi aljabar fungsi untuk menunjukkan ekuivalensi ekspresi '),
(239, 42, 'Menerapkan konsep komposisi fungsi untuk \r\nmenyederhanakan ekspresi'),
(240, 42, 'Menganalisis sifat-sifat komposisi fungsi \r\nkhususnya memperhatikan domain'),
(241, 42, 'Menerapkan sifat-sifat komposisi fungsi untuk menyatakan fungsi komposisi dari komposisi dua fungsi atau lebih'),
(242, 42, 'Memodelkan masalah yang terkait dengan fungsi komposisi.'),
(243, 42, 'Menyelesaikan masalah yang terkait dengan \r\nfungsi komposisi'),
(244, 42, 'Menjelaskan konsep invers fungsi'),
(245, 42, 'Mengontruksi rumus invers dari beberapa fungsi (linear, kuadrat, eksponen dan logaritma) '),
(246, 42, 'Menentukan suatu fungsi jika fungsi komposisi dan fungsi lain diketahui'),
(247, 43, 'Menjelaskan konsep lingkaran'),
(248, 43, 'Mengidentifikasi unsur-unsur lingkaran'),
(249, 43, 'Menentukan panjang busur lingkaran'),
(250, 43, 'Menjelaskan hubungan antara dua sudut dan panjang busur lingkaran'),
(251, 43, 'Menentukan luas juring lingkaran'),
(252, 43, 'Menjelaskan hubungan antara dua sudut dan luas juring lingkaran'),
(253, 43, 'Menentukan luas tembereng lingkaran'),
(254, 43, 'Mengontruksi rumus persamaan lingkaran berpusat di titik O(0,0) dan berjari-jari r'),
(255, 43, 'Mengontruksi rumus persamaan lingkaran \r\nberpusat di titik (a, b) dan berjari-jari r'),
(256, 43, 'Menganalisis kedudukan garis terhadap \r\nlingkaran secara geometris maupun aljabar'),
(257, 43, 'Mengontruksi rumus persamaan garis singgung \r\ntitik pada lingkaran'),
(258, 43, 'Mengontruksi rumus persamaan garis singgung \r\ntitik di luar lingkaran'),
(259, 43, 'Mengontruksi rumus persamaan garis singgung \r\nlingkaran dengan gradien tertentu'),
(260, 43, 'Menganalisis hubungan dua lingkaran'),
(261, 44, 'Menjelaskan aturan penjumlahan'),
(262, 44, 'Menjelaskan aturan perkalian'),
(263, 44, 'Menyelesaikan masalah yang terkait dengan aturan penjumlahan dan atau aturan perkalian'),
(264, 44, 'Menjelaskan pengertian permutasi'),
(265, 44, 'Mengontruksi rumus permutasi'),
(266, 44, 'Menyelesaikan masalah yang terkait dengan \r\nkonsep permutasi'),
(267, 44, 'Menjelaskan pengertian permutasi dengan \r\nbeberapa objek yang sama'),
(268, 44, 'Mengontruksi rumus permutasi dengan \r\nbeberapa objek yang sama'),
(269, 44, 'Menyelesaikan masalah yang terkait dengan \r\nkonsep permutasi dengan beberapa objek yang \r\nsama'),
(270, 44, 'Menjelaskan pengertian permutasi siklis'),
(271, 44, 'Mengontruksi rumus permutasi siklis'),
(272, 44, 'Menyelesaikan masalah yang terkait dengan \r\nkonsep permutasi siklis'),
(273, 44, 'Menjelaskan pengertian kombinasi'),
(274, 44, 'Mengontruksi rumus kombinasi'),
(275, 44, 'Menyelesaikan masalah yang terkait dengan \r\nkonsep kombinasi'),
(276, 44, 'Menggunakan kombinasi untuk menguraikan \r\nbentuk binomium newton'),
(277, 44, 'Menjelaskan pengertian dua kejadian saling \r\nbebas'),
(278, 44, 'Menentukan peluang dua kejadian saling bebas '),
(279, 44, 'Menyelesaikan masalah kontekstual yang \r\nterkait dengan kejadian saling bebas'),
(280, 44, 'Menjelaskan pengertian proses stokastik \r\nberhingga'),
(281, 44, 'Menentukan peluang dua kejadian saling bebas dengan proses stokastik berhingga '),
(282, 44, 'Menjelaskan pengertian kejadian bersyarat'),
(283, 44, 'Menentukan peluang kejadian bersyarat'),
(284, 44, 'Menyelesaikan masalah kontekstual yang \r\nterkait dengan kejadian bersyarat'),
(285, 44, 'Menjelaskan perbedaan populasi dan sampel'),
(286, 44, 'Merumuskan pertanyaan dan menentukan bagaimana data dikumpulkan dan dianalisis untuk menjawab pertanyaan'),
(287, 44, 'Menjelaskan teknik pengambilan sampel yang \r\nbaik (untuk survey, selain itu juga praktik baik dalam melakukan percobaan empiris maupun yang bersifat observasi)\r\n'),
(288, 44, 'Mendesain dan mengimplementasi rencana \r\npengumpulan data '),
(289, 44, 'Mengidentifikasi cara yang tepat untuk \r\nmerangkum data secara statistik'),
(290, 44, 'Menganalisis bagaimana distribusi sampel \r\n(melalui simulasi) digunakan untuk menjelaskan variabilitas dari sampel'),
(291, 52, 'Memahami kebutuhan teknis pengguna dan peralatan jaringan dengan teknologi yang sesuai.'),
(292, 52, 'Memahami perencanaan topologi dan arsitektur jaringan sesuai kebutuhan.'),
(293, 52, 'Memahami pengalamatan jaringan, CIDR dan VLSM dan menghitung subnetting.'),
(294, 53, 'Menerapkan instalasi, perawatan, pengujian jaringan kabel dan nirkabel.'),
(295, 53, 'Memahami standar jaringan nirkabel, memilih teknologi jaringan nirkabel indoor dan outdoor sesuai kebutuhan.'),
(296, 53, 'Menerapkan instalasi dan konfigurasi layanan Voice Over IP (VoIP).'),
(297, 53, 'Memahami jaringan, jenis kabel dan pemilihan fiber optic.'),
(298, 53, 'Menerapkan instalasi dan perbaikan jaringan fiber optic.'),
(299, 54, 'Memahami sistem keamanan jaringan dan kemungkinan potensi ancaman dan serangannya.'),
(300, 54, 'Memahami firewall pada host dan server, kebutuhan persyaratan alat-alat untuk membangun server firewall.'),
(301, 54, 'Memahami pengujian keamanan jaringan, host dan server.'),
(302, 54, 'Memahami fungsi dan cara kerja server autentikasi.'),
(303, 54, 'Memahami sistem pendeteksi dan penahan ancaman serangan yang masuk ke jaringan (Snort).'),
(304, 54, 'Menerapkan tata cara pengamanan komunikasi data menggunakan teknik kriptografi.'),
(305, 55, 'Menerapkan pemasangan perangkat jaringan ke dalam sistem jaringan.'),
(306, 55, 'Menerapkan penggantian perangkat jaringan sesuai dengan kebutuhan.'),
(307, 55, 'Menerapkan konfigurasi dan pengujian VLAN.'),
(308, 55, 'Menerapkan konfigurasi routing.'),
(309, 55, 'Memahami permasalahan dan perbaikan konfigurasi routing.'),
(310, 55, 'Menerapkan konfigurasi NAT.'),
(311, 55, 'Memahami permasalahan internet gateway dan memperbaiki konfigurasi NAT.'),
(312, 55, 'Memahami permasalahan dan memperbaiki konfigurasi proxy server.'),
(313, 55, 'Menerapkan cara konfigurasi dan pengujian manajemen bandwidth.'),
(314, 55, 'Menerapkan cara konfigurasi dan pengujian load balancing.'),
(315, 56, 'Menerapkan instalasi, konfigurasi dan pengujian layanan server (remote, DHCP, DNS,FTP, file, web, database server).'),
(316, 56, 'Menerapkan instalasi, konfigurasi dan pengujian layanan server (Control Panel Hosting, Share Hosting Server, Dedicated Hosting Server, Virtual Private Server, VPN server, sistem kontrol dan monitoring).'),
(317, 57, 'Memahami permasalahan ekonomi.'),
(318, 57, 'Menerapkan ilmu ekonomi dalam kegiatan usaha.'),
(319, 57, 'Memahami administrasi umum.'),
(320, 57, 'Memahami fungsi-fungsi manajemen.'),
(321, 58, 'Memahami pencatatan keuangan akuntansi perusahaan dagang.'),
(322, 58, 'Memahami tahap-tahap pencatatan keuangan akuntansi perusahaan manufaktur.'),
(323, 59, 'Memahami pencatatan keuangan Lembaga/ Pemerintah.'),
(324, 59, 'Menerapkan Akuntansi Lembaga/ Pemerintah.'),
(325, 60, 'Memahami jenis kartu yang digunakan akuntansi keuangan.'),
(326, 60, 'Memahami macam-macam surat berharga dalam transaksi keuangan perdagangan.'),
(327, 60, 'Memahami pencatatan akuntansi keuangan.'),
(328, 61, 'Memahami pencatatan akuntansi menggunakan aplikasi komputer akuntansi.'),
(329, 62, 'Memahami ketentuan umum dan tata-acara perpajakan KUP.'),
(330, 63, 'Memahami profil technopreneur, pekerjaan atau profesi kewirausahaan kepribadian dan sikap dalam bekerja di bidang busana (fesyen).'),
(331, 63, 'Memahami peluang pasar dan usaha di bidang seni dan ekonomi kreatif, untuk membangun visi dan passion.'),
(332, 63, 'Memahami penerapan pembelajaran berbasis projek nyata.'),
(333, 64, 'Memahami ekosistem industri mode, overview fashion industry, dan model bisnis di lingkungan industri fashion.\r\n'),
(334, 64, 'Memahami perubahan gaya dan selera sesuai dengan perkembangan mode dan trend.'),
(335, 64, 'Mengenal dan mahami karya desainer dan produk fashion.'),
(336, 64, 'Memahami konsep sustainable fashion,potensi dan kearifan lokal dalam produk fashion.'),
(337, 65, 'Memahami branding dan marketing.'),
(338, 65, 'Memahami analisis segmentasi pasar.'),
(339, 65, 'Memahami analisis DNA brand.'),
(340, 65, 'Memahami deskripsi pesaing dari produk busana.'),
(341, 65, 'Memahami definisi dan konsep marketing dan digital marketing.'),
(342, 66, 'Memahami perapan gambar anatomi tubuh, dasar ilustrasi dan pencampuran warna.'),
(343, 66, 'Memahami implementasi desain dan detail ke anatomi tubuh.'),
(344, 66, 'Memahami pembuatan desain teknis secara digital.'),
(345, 67, 'Memahami proses penciptaan desain dengan menerapkan dasar-dasar desain.'),
(346, 67, 'Memahami style dan look, menemukan inspirasi dan membuat kolase.'),
(347, 67, 'Memahami penerapan cara mencari bentuk dan mengembangkan desain berdasarkan style dan look.'),
(348, 68, 'Memahami K3 di bidang busana (fesyen).'),
(349, 68, 'Memahami proses produksi busana di industri.'),
(350, 68, 'Memahami pengetahuan tentang aspek perawatan peralatan dan pengelolaan SDM di industri.'),
(351, 69, 'Memahami perkembangan proses produksi pada industri busana (fesyen) mulai dari konvensional hingga penggunaan alat/mesin dengan teknologi modern, penggunaan aplikasi gambar penunjang desain busana .'),
(352, 69, 'Memahami penerapan teknologi digital dalam dunia industry, isu pemanasan global, perubahan iklim, aspek-aspek (singkat) ketenagakerjaan.'),
(353, 69, 'Memahami pembuatan product life cycle (reuse, recycling dan reduce).'),
(354, 70, 'Memahami konsep pengukuran tubuh.'),
(355, 70, 'Memahami pembuatan pola dasar teknik konstruksi dan penerapannya.'),
(356, 71, 'Memahami deskripsi sikap kerja dalam menjahit, mengoperasikan dan memperbaiki mesin jahit dan mesin penyelesaian.'),
(357, 71, 'Memahami teknik menjahit sesuai dengan jenis-jenis bahan, standar kualitas dan finishing hasil jahitan.'),
(358, 71, 'Memahami pembuatan busana sederhana.'),
(359, 45, 'Memahami proses bisnis pada bidang teknik komputer dan telekomunikasi, meliputi customer handling, perencanaan, analisis kebutuhan pelanggan, strategi implementasi (instalasi, konfigurasi, monitoring) dan pelayanan pada pelanggan.'),
(360, 45, 'Memahami implementasi penerapan budaya mutu.'),
(361, 46, 'Memahami perkembangan teknologi pada perangkat teknik jaringan komputer dan telekomunikasi termasuk 5G, Microwave Link, IPV6, teknologi serat optik terkini, IoT, Data Centre, Cloud Computing, dan Information Security.'),
(362, 46, 'Memahami isu-isu implementasi teknologi jaringan dan telekomunikasi terkini antara lain keamanan informasi, penetrasi Internet.'),
(363, 47, 'Memahami jenis-jenis profesi wirausaha (job-profile dan technopreneurship, personal branding) bidang teknik jaringan komputer dan telekomunikasi.'),
(364, 47, 'Memahami peluang usaha bidang teknik jaringan komputer dan telekomunikasi.'),
(365, 47, 'Menerapkan simulasi proyek kewirausahaan untuk membangun Vision dan Passion.'),
(366, 48, 'Menerapkan K3LH dan budaya kerja industri, antara lain: praktik-praktik kerja yang aman, bahaya-bahaya di tempat kerja, prosedur- prosedur dalam keadaan darurat, dan penerapan budaya kerja industri (Ringkas, Rapi, Resik, Rawat, Rajin).'),
(367, 48, 'Memahami pencegahan kecelakaan kerja di tempat tinggi dan prosedur kerja di tempat tinggi (pemanjatan).'),
(368, 49, 'Memahami jenis alat ukur pada jaringan komputer dan sistem telekomunikasi.'),
(369, 49, 'Memahami penggunaan berbagai jenis alat ukur dalam pemeliharaan jaringan komputer dan sistem telekomunikasi.'),
(370, 50, 'Memahami prinsip dasar sistem IPV4/IPV6, TCP IP, Networking Service, Sistem Keamanan Jaringan Telekomunikasi.'),
(371, 50, 'Memahami prinsip dasar Sistem Seluler, Sistem Microwave, Sistem VSAT IP.'),
(372, 50, 'Memahami prinsip dasar Sistem Optik dan Sistem WLAN.'),
(373, 51, 'Menerapkan penggunaan alat ukur untuk jaringan komputer dan sistem telekomunikasi.'),
(374, 51, 'Menerapkan pemeliharaan alat ukur untuk sistem telekomunikasi dan sistem telekomunikasi.'),
(375, 72, 'Memahami pembuatan figure sesuai jenis kelamin dan umur.'),
(376, 72, 'Memahami pengembangan figure dengan gaya dan gerakan tubuh (gesture).'),
(377, 72, 'Memahami penerapan figure berpakaian.'),
(378, 73, 'Memahami Teknik menggambar datar (flat drawing) secara digital dan manual sesuai dengan proporsi.'),
(379, 73, 'Memahami pembuatan detail rancangan tampak depan dan belakang untuk kebutuhan produksi (technical drawing).'),
(380, 74, 'Memahami pngungkapan karya dan pengembangan desain dalam satu konsep gaya (style).'),
(381, 74, 'Memahami penerapan trend.'),
(382, 74, 'Memahami penerapan sustainable fashion.'),
(383, 74, 'Memahami pembuatan tema desain busana sesuai yang disepakati, baik berupa desain busana berbasis kreasi/berbasis industri/ custom made.'),
(384, 75, 'Mengembangkan desain dan olah tekstil yang disesuaikan dengan kebutuhan industri dan kebudayaan daerah (printing/batik/tenun/mengolah bahan).'),
(385, 75, 'Membuat desain hiasan (renda/sulaman/kancing hias/bordir).'),
(386, 76, 'Memahami pembuatan lembar kerja sampel sesuai dengan spesifikasi desain.'),
(387, 76, 'Memahami pembuatan langkah kerja pembuatan sampel.'),
(388, 76, 'Memahami pengambilan ukuran.'),
(389, 76, 'Memahami pembuatan pola.'),
(390, 76, 'Memahami pemotongan bahan.'),
(391, 76, 'Memahami penghitungan biaya dan penentuan harga produk.'),
(392, 77, 'Memahami Teknik menjahit sesuai dengan prosedur.'),
(393, 77, 'Memahami trimming.'),
(394, 77, 'Memahami pressing.'),
(395, 77, 'Memahami pengawasan mutu produk busana.'),
(396, 77, 'Memahami pelaksanaan penyelesaian akhir busana.'),
(397, 78, 'Memahami perencanaan projek pembuatan koleksi busana secara kelompok.'),
(398, 78, 'Memahami presentasi koleksi secara kelompok.'),
(399, 79, 'Memahami kelangkaan sebagai inti dari masalah ilmu ekonomi.'),
(400, 79, 'Memahami skala prioritas sebagai acuan dalam menentukan berbagai kebutuhan yang harus dipenuhi.'),
(401, 79, 'Memahami hubungan antara kelangkaan dengan biaya peluang.'),
(402, 79, 'Memahami konsep keseimbangan pasar dan pemodelannya dalam bentuk tabel dan kurva.'),
(403, 79, 'Memahami konsep sistem pembayaran dan uang sebagai alat pembayaran.'),
(404, 79, 'Memahami berbagai bentuk alat pembayaran non-tunai yang berlaku di Indonesia serta cara penggunaannya.'),
(405, 79, 'Memahami konsep bank dan industri keuangan non- bank serta berbagai produk yang dihasilkan.'),
(406, 80, 'Menyusun skala prioritas kebutuhan dasar sesuai dengan kondisi di lingkungan sekitarnya.'),
(407, 80, 'Menyimpulkan data hasil pengamatan atau wawancara tentang terbentuknya keseimbangan pasar.'),
(408, 80, 'Menyimpulkan hubungan antara sistem pembayaran dengan alat pembayaran.'),
(409, 80, 'Membuat pola hubungan antara Otoritas Jasa Keuangan dan lembaga jasa keuangan.'),
(410, 80, 'Menyusun rencana investasi pribadi.'),
(411, 81, 'Menganalisis cara pandang para pendiri negara tentang rumusan Pancasila sebagai dasar negara.'),
(412, 81, 'Menganalisis fungsi dan kedudukan Pancasila sebagai dasar negara, ideologi negara, dan identitas nasional.'),
(413, 81, 'Mengenali dan menggunakan produk dalam negeri sekaligus mempromosikan budaya lokal dan nasional.'),
(414, 82, 'Menganalisis hak dan kewajiban warga negara yang diatur dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.'),
(415, 82, 'Mendemonstrasikan praktik kemerdekaan berpendapat warga negara dalam era keterbukaan informasi sesuai dengan nilai-nilai Pancasila.'),
(416, 82, 'Menganalisis kasus pelanggaran hak dan pengingkaran kewajiban sebagaimana diatur dalam Undang-Undang Dasar Negara Republik Indonesia Tahun 1945.'),
(417, 82, 'Merumuskan solusi secara kreatif, kritis, dan inovatif untuk memecahkan kasus pelanggaran hak dan pengingkaran kewajiban.'),
(418, 83, 'Menginisiasi kegiatan bersama atau gotong-royong dalam praktik hidup sehari-hari berdasarkan nilai-nilai Pancasila.'),
(419, 83, 'Membangun masyarakat sekitar dan masyarakat Indonesia berdasarkan nilai-nilai Pancasila.'),
(420, 84, 'Memberi contoh dan memiliki kesadaran akan hak dan kewajibannya sebagai warga sekolah, warga masyarakat dan warga negara.'),
(421, 84, 'Memahami peran dan kedudukannya sebagai warga negara Indonesia.'),
(422, 85, 'Mengeksplorasi aneka produk kerajinan nusantara yang ada di daerahnya.'),
(423, 85, 'Mengeksplorasi bentuk, bahan, alat, teknik, aspek ergonomis, dan nilai ekonomis sebuah produk kerajinan.'),
(424, 86, 'Merancang produk kerajinan berdasarkan hasil-hasil eksplorasinya.'),
(425, 86, 'Merancang kemasan atau display yang sesuai dengan produk kerajinannya.'),
(426, 86, 'Merencanakan media promosi.'),
(427, 87, 'Membuat kemasan atau display yang sesuai dengan produk kerajinannya.'),
(428, 87, 'Mempromosikan produk kerajinan melalui media yang dipilih.'),
(429, 88, 'Merefleksi proses produksi dan dampak produk kerajinannya terhadap pengguna/lingkungan.'),
(430, 88, 'Mengevaluasi efektivitas media promosi yang digunakan.'),
(431, 88, 'Membuat rencana tindak lanjut.'),
(437, 89, 'Memahami konsep-konsep dasar ilmu Sejarah: manusia, ruang, waktu, diakronis/kronologi, sinkronis, guna sejarah, sejarah dan teori sosial, metode penelitian sejarah, serta sejarah lokal.'),
(438, 89, 'Menganalisis dan mengevaluasi berbagai peristiwa sejarah yang terjadi di Indonesia meliputi konsep asal-usul nenek moyang dan jalur rempah di Indonesia secara diakronis/kronologis dan sinkronis; dalam lingkup lokal, nasional, dan global; dalam dimensi masa lalu, masa kini, dan masa depan; serta dari aspek perkembangan, perubahan, keberlanjutan, dan keberulangan.'),
(439, 89, 'Menganalisis dan mengevaluasi berbagai peristiwa sejarah yang terjadi di Indonesia meliputi konsep kerajaan Hindu-Buddha di Indonesia secara diakronis/kronologis dan sinkronis; dalam lingkup lokal, nasional, dan global; dalam dimensi masa lalu, masa kini, dan masa depan; serta dari aspek perkembangan, perubahan, keberlanjutan, dan keberulangan.\r\n'),
(440, 89, 'Menganalisis dan mengevaluasi berbagai peristiwa sejarah yang terjadi di Indonesia meliputi konsep kerajaan Islam di Indonesia secara diakronis/kronologis dansinkronis; dalam lingkup lokal, nasional, dan global; dalam dimensi masa lalu, masa kini, dan masa depan; serta dari aspek perkembangan, \r\nperubahan, keberlanjutan, dan keberulangan.'),
(441, 90, 'Menggunakan berbagai keterampilan sejarah untuk menjelaskan peristiwa sejarah dengan cara diakronis dan sinkronis serta memaknai nilai-nilai yang terkandung di dalamnya, kemudian mengomunikasikannya secara lisan/tertulis/digital/non-digital.'),
(442, 90, 'Menggunakan berbagai keterampilan sejarah untuk menjelaskan peristiwa sejarah terkait konsep asal usul nenek moyang dan jalur rempah dengan cara diakronis dan sinkronis serta memaknai nilai-nilai yang terkandung di dalamnya, kemudian mengomunikasikannya secara lisan/tertulis/digital/non-digital.'),
(443, 90, 'Menggunakan berbagai keterampilan sejarah untuk menjelaskan peristiwa sejarah terkait konsep kerajaan Hindu-Buddha di Indonesia dengan cara diakronis dan sinkronis serta memaknai nilai-nilai yang terkandung di dalamnya, kemudian mengomunikasikannya secara lisan/tertulis/digital/non-digital.'),
(444, 90, 'Merencanakan proyek lanjutan secara kolaboratif tentang akulturasi kebudayaan Hindu-Buddha dan Islam dalam kebudayaan masyarakat serta memaknai nilai-nilai yang terkandung di dalamnya kemudian mengomunikannya dalam bentuk tulisan/non-tulisan/digital/non-digital.'),
(445, 91, 'Memahami fungsi sosiologi sebagai ilmu yang secara kritis mengkaji masyarakat.'),
(446, 91, 'Memahami identitas diri dalam kehidupan masyarakat.'),
(447, 91, 'Menganalisis tindakan sosial dalam kehidupan masyarakat.'),
(448, 91, 'Menganalisis hubungan sosial dalam kehidupan masyarakat.'),
(449, 91, 'Menganalisis peran lembaga sosial dalam mewujudkan tertib sosial.'),
(450, 91, 'Menganalisis berbagai ragam gejala sosial yang ada di masyarakat multikultural.'),
(451, 92, 'Melakukan penelitian sosial sederhana tentang berbagai gejala sosial dengan menggunakan metode yang tepat untuk mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, dan mengomunikasikan hasil penelitian.'),
(452, 99, 'Memahami ayat Al-Qur’an dan hadis tentang perintah untuk berkompetisi dalam kebaikan dan etos kerja serta larangan pergaulan bebas dan zina.'),
(453, 100, 'Memahami makna syu‘ab al-iman(cabang-cabang iman), pengertian, dalil, macam dan manfaatnya.\r\n'),
(454, 101, 'Memahami manfaat menghindarkan diri dari akhlak mazmumah dan manfaat akhlak mahmudah.'),
(455, 102, 'Memahami fikih mu‘amalahdan al-kulliyyat al-khamsah (lima prinsip dasar hukum Islam dalam rangka menumbuhkan jiwa kewirausahaan, kepedulian, dan kepekaan sosial).\r\n'),
(456, 103, 'Memahami perkembangan peradaban di Indonesia adalah sunatullah dan metode dakwah yang santun, moderat, bi al-hikmah wa al- mau‘izat al-hasanah adalah perintah Allah Swt.\r\n'),
(457, 93, 'Memahami hakikat ilmu kimia, metode ilmiah dan keselamatan kerja di laboratorium'),
(458, 93, 'Menerapkan konsep kimia dalam kehidupan sehari-hari yang mendukung pembangunan berkelanjutan (Sustainable Development Goals)'),
(459, 93, 'Menerapkan konsep kimia dalam pemanfaatan limbah dan bahan alam sebagai salah satu solusi masalah pencemaran lingkungan'),
(460, 94, 'Menjelaskan fenomena pemanasan global dan merancang gagasan solutif dalam upaya penanggulangannya'),
(461, 94, 'Memahami perkembangan teori atom serta struktur atom dan aplikasinya dalam nanoteknologi\r\n'),
(462, 94, 'Memahami konsep ikatan kimia serta korelasi dengan sifat senyawa yang dibentuknya'),
(463, 94, 'Memahami reaksi kimia dan peranannya dalam kehidupan sehari-hari'),
(464, 94, 'Menerapkan konsep hukum-hukum dasar kimia untuk menyelesaikan perhitungan kimia'),
(465, 94, 'Memahami hubungan konfigurasi elektron dan diagram orbital, serta kaitannya dengan letak unsur dalam tabel periodik dan sifat-sifat periodik unsur'),
(466, 97, 'Membuat solusi pencegahan penyebaran virus dengan mempertimbangkan ciri-ciri, proses \r\nreplikasi, serta peranan virus\r\n'),
(467, 97, 'Memahami tingkat keanekaragaman makhluk hidup pada lingkungan sekitar dan mengevaluasi efektivitas upaya pelestariannya.\r\n'),
(468, 98, 'Menganalisis kearifan lokal yang dapat mencegah ketidakseimbangan ekosistem dengan \r\nmempertimbangkan komponen ekosistem dan interaksi antar komponennya.'),
(469, 98, 'Merencanakan dan melakukan penyelidikan untuk mengetahui penyebab dan dampak perubahan lingkungan serta mengkampanyekan solusi pencegahannya.'),
(470, 98, 'Menganalisis berbagai jenis limbah dan bahan alam yang bermanfaat beserta cara pengelolaannya.'),
(471, 98, 'Memahami isu global terkait perkembangan inovasi teknologi biologi.'),
(472, 95, 'Memahami konsep pengukuran dan penerapannya dalam kehidupan sehari-hari.'),
(473, 95, 'Mendeskripsikan gejala pemanasan global dan \r\nmenunjukkan kepedulian terhadap isu global.\r\n'),
(474, 95, 'Mengidentifikasi perubahan iklim dan \r\ndampaknya bagi kehidupan.\r\n'),
(475, 96, 'Mendeskripsikan gejala pencemaran lingkungan.'),
(476, 96, 'Menganalisis penggunaan berbagai sumber energi alternative'),
(477, 96, 'Menganalisis berbagai jenis limbah dan bahan-bahan alam yang bermanfaat beserta cara pengelolaannya.'),
(478, 104, 'Mempraktikkan keterampilan gerak dalam berbagai permainan Invasi.'),
(479, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam berbagai permainan Invasi.'),
(480, 104, 'Mempraktikkan keterampilan gerak dalam berbagai permainan net.'),
(481, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam berbagai permainan net.\r\n'),
(483, 104, 'Mempraktikkan keterampilan gerak dalam berbagai permainan lapangan. '),
(484, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam berbagai permainan lapangan. '),
(485, 104, 'Mempraktikkan keterampilan gerak berbagai olahraga beladiri.'),
(486, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam berbagai olahraga beladiri.'),
(487, 104, 'Mempraktikkan keterampilan gerak dalam berbagai olahraga atletik.'),
(488, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam berbagai olahraga atletik.'),
(489, 104, 'Mempraktikkan keterampilan gerak dalam aktivitas senam lantai.'),
(490, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam senam lantai.\r\n'),
(491, 104, 'Mempraktikkan keterampilan gerak dalam aktivitas gerak berirama.\r\n'),
(492, 104, 'Mempraktikkan hasil evaluasi keterampilan gerak dalam aktivitas gerak berirama.\r\n'),
(493, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam aktivitas rangkaian gerak berirama.\r\n'),
(494, 104, 'Mempraktikkan hasil evaluasi keterampilan gerak dalam aktivitas permainan dan olahraga air. '),
(495, 104, 'Mempraktikkan hasil evaluasi penerapan keterampilan gerak dalam aktivitas permainan dan olahraga air.'),
(496, 105, 'Mengevaluasi fakta, konsep dan prosedur keterampilan gerak berbagai permainan Invasi.'),
(497, 105, 'Mengevaluasi fakta, konsep dan prosedur penerapan keterampilan gerak berbagai permainan Invasi.'),
(498, 105, 'Mengevaluasi fakta, konsep, dan prosedur keterampilan gerak dalam berbagai permainan net.'),
(499, 105, 'Mengevaluasi fakta, konsep, dan prosedur penerapan keterampilan gerak berbagai permainan net. '),
(500, 105, 'Mengevaluasi fakta, konsep dan prosedur keterampilan gerak berbagai permainan lapangan.'),
(501, 105, 'Mengevaluasi fakta, konsep dan prosedur keterampilan gerak olahraga beladiri. '),
(502, 105, 'Mengevaluasi fakta, konsep dan prosedur penerapan keterampilan gerak olahraga beladiri. '),
(503, 105, 'Mengevaluasi fakta, konsep dan prosedur keterampilan gerak dalam berbagai olahraga atletik. '),
(504, 105, 'Mengevaluasi fakta, konsep dan prosedur keterampilan gerak dalam berbagai olahraga atletik. '),
(505, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur keterampilan gerak senam lantai.\r\n'),
(506, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur penerapan keterampilan gerak senam lantai.'),
(507, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur keterampilan gerak aktivitas gerak berirama.'),
(508, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur penerapan keterampilan gerak aktivitas gerak berirama.'),
(509, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur keterampilan gerak aktivitas permainan dan olahraga air.'),
(510, 105, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur penerapan keterampilan gerak dalam aktivitas permainan dan olahraga air.'),
(511, 106, 'Mempraktikkan latihan pengembangan kebugaran jasmani terkait kesehatan (physical fitness related health) dan mempromosikannya melalui media yang sesuai.\r\n'),
(512, 106, 'Mempraktikkan latihan pengembangan kebugaran jasmani terkait keterampilan (physical fitness related skills), dan mempromosikannya melalui media yang sesuai.\r\n'),
(513, 106, 'Mempraktikkan latihan pengembangan kebugaran jasmani terkait keterampilan (physical fitness related skills), dan mempromosikannya melalui media yang sesuai.\r\n'),
(514, 106, 'Mengevaluasi fakta, konsep, prinsip, dan prosedur dan mempraktikkan latihan pengembangan kebugaran jasmani terkait keterampilan (physical fitness related skills).'),
(515, 106, 'Memahami konsep, prinsip, dan prosedur pola perilaku hidup sehat.'),
(516, 106, 'Menerapkan konsep, prinsip, dan prosedur pola perilaku hidup sehat.'),
(517, 106, 'Memahami peraturan perundangan serta konsekuensi hukum bagi para pengguna dan pengedar narkotika, zat-zat aditif (NAPZA) dan obat berbahaya lainnya sesuai dengan pola perilaku hidup sehat.'),
(518, 106, 'Menerapkan peraturan perundangan serta konsekuensi hukum bagi para pengguna dan pengedar narkotika, zat-zat aditif (NAPZA) dan obat berbahaya lainnya sesuai dengan pola perilaku hidup sehat.'),
(519, 107, 'Menunjukkan perilaku mengembangkan tanggung jawab sosialnya dalam kelompok kecil.'),
(520, 107, 'Menunjukkan perilaku dapat mengambil bagian dalam kerja kelompok pada aktivitas jasmani atau kegiatan sosial lainnya'),
(521, 107, 'Menunjukkan perilaku dapat menumbuhkembangkan cara menghadapi tantangan dalam aktivitas jasmani.'),
(522, 108, 'Memahami informasi berupa gagasan yang akurat dari menyimak berbagai jenis nonfiksi dalam bentuk monolog, misalnya teks laporan hasil observasi, teks eksposisi.'),
(523, 108, 'Mengevaluasi informasi berupa gagasan, pikiran, perasaan, pandangan, arahan, atau pesan yang akurat dari menyimak berbagai jenis teks (nonfiksi dan fiksi) dalam bentuk monolog, dialog, dan gelar wicara dari berbagai sumber, misalnya video pembacaan puisi dalam tautan youtube.'),
(524, 109, 'Mengevaluasi informasi berupa gagasan dari teks nonfiksi atau fiksi, baik melalui teks visual maupun audiovisual, untuk menentukan makna tersirat dan tersurat.\r\n'),
(525, 109, 'Menginterpretasi informasi untuk mengungkapkan gagasan dan perasaan simpati, penduli, empati, dan/atau pendapat pro dan \r\nkontra secara kreatif'),
(526, 109, 'Menggunakan sumber lain untuk menilai akurasi dan kualitas isi informasi dari internet, misalnya berita atau artikel.'),
(527, 109, 'Membandingkan isi informasi pada berbagai jenis teks secara akurat.'),
(528, 110, 'Mengolah gagasan, pikiran, atau pandangan untuk tujuan pengajuan usul dalam bentuk dialog dan gelar wicara secara logis, runtut, kritis, dan kreatif.\r\n'),
(529, 110, 'Menyajikan gagasan, pikiran, atau pandangan untuk tujuan pengajuan usul dalam bentuk dialog dan gelar wicara secara logis, runtut, kritis, dan kreatif.'),
(530, 110, 'Mengkreasi ungkapan sesuai dengan norma kesopanan dalam berkomunikasi, misalnya dalam diskusi dan negosiasi.'),
(531, 110, 'Berkontribusi secara aktif dalam diskusi dengan mempersiapkan materi diskusi, melaksanakan tugas, dan fungsi dalam diskusi.\r\n'),
(532, 111, 'Menyampaikan gagasan untuk tujuan memberikan informasi secara logis, kritis, dan kreatif dalam bentuk teks informasional dengan memperhatikan kaidah kebahasaan yang tepat.'),
(533, 111, 'Membuat teks eksposisi hasil penelitian dan teks fungsional dalam bentuk artikel secara logis, kritis,dan sistematis.'),
(534, 111, 'Mengalihwahanakan satu teks ke teks yang lainnya untuk tujuan ekonomi kreatif, misalnya, mengubah teks eksposisi menjadi sebuah film, mengubah teks narasi menjadi cerita komik.'),
(535, 111, 'Memublikasikan hasil tulisan berupa teks fiksi atau nonfiksi untuk diterbitkan pada mading sekolah, buletin sekolah, buku, youtube, atau media sosial yang lain.\r\n\r\n'),
(536, 108, 'Mengonstruksi informasi berupa pandangan yang akurat dari menyimak teks nonfiksi dalam bentuk dialog yang akurat, misalnya kritik sosial dari televisi, radio, atau internet.'),
(537, 108, 'Mengkreasi informasi berupa gagasan yang akurat dari menyimak teks informasional dalam bentuk monolog.'),
(538, 110, 'Mengungkapkan simpati, empati, peduli, perasaan, dan penghargaan secara kreatif dalam bentuk teks fiksi, misalnya hikayat, puisi.'),
(539, 112, 'Mengevaluasi keaktualan dan akurasi informasi pada teks berita yang dilisankan/diperdengarkan (teks berita).'),
(540, 112, 'Merespons gagasan dan pandangan penulis dengan menyimak contoh teks surat motivasi (teks surat motivasi).'),
(541, 113, 'Mengidentifikasi ide pokok dan ide-ide penjelas dalam teks argumentasi dan memberikan pendapat dari permasalahan dari tren di media massa/sosial), (teks argumentasi & persuasi).'),
(542, 113, 'Menilai gagasan/pendapat teks argumentasi terhadap permasalahan yang sedang tren di media massa/sosial) dengan membaca kritis. (teks argumentasi&persuasi) (membaca)'),
(543, 113, 'Membedakan kalimat fakta dan kalimat opini dalam teks argumentasi sehingga mampu menganalisis teks secara kritis (teks argumentasi&persuasi).'),
(544, 113, 'Mengidentifikasi sebuah poster persuasif yang baik berdasarkan unsur-unsur dan ciri-ciri poster (teks argumentasi & persuasi).'),
(545, 113, 'Mengidentifikasi ciri dan syarat penyajian teks berita dalam bentuk vlog (teks berita)'),
(546, 113, 'Memahami penyajian teks berita dalam bentuk vlog (teks berita).'),
(547, 113, 'Mengidentifikasi nilai-nilai (moral, sosial, budaya, agama) dalam cerpen bertema sejarah (teks cerpen).'),
(548, 113, 'Mengidentifikasi latar belakang peristiwa sejarah Indonesia yang ada dalam cerpen dengan tema sejarah (teks cerpen).'),
(549, 113, 'Menganalisis cerpen sejarah untuk menemukan\r\nunsur-unsur pembangun sebuah cerpen (teks cerpen).'),
(550, 113, 'Menemukan tema dan pesan dalam cerpen untuk\r\ndijadikan puisi (teks puisi).'),
(551, 113, 'Menemukan perbedaan antara karya puisi, prosa, dan drama dengan menulis teks refleksi (teks drama).'),
(552, 113, 'Menyaksikan pertunjukan drama dan menganalisis unsur-unsur pembangunnya (teks drama).'),
(553, 113, 'Mengidentifikasi jurnal karya ilmiah dan mengenal sistematika karya ilmiah (teks karya ilmiah).'),
(554, 113, 'Memahami struktur karya tulis ilmiah (teks karya ilmiah).'),
(555, 113, 'Memahami ragam bahasa karya ilmiah (teks karya ilmiah).'),
(556, 113, 'Mengevaluasi kaidah kebahasaan teks surat lamaran pekerjaan (teks surat lamaran\r\npekerjaan).'),
(557, 114, 'Membuat vlog jurnalisme warga (teks berita).'),
(558, 114, 'Memusikalisasi puisi dari puisi karya pengarang Indonesia (teks puisi).'),
(559, 114, 'Mempersiapkan pertunjukan drama dari naskah dibuat dari sebuah cerpen atau film pendek (teks drama).'),
(560, 114, 'menyajikan karya ilmiah dengan tema sosial dan alam terkini dalam aplikasi presentasi (teks karya ilmiah).'),
(561, 114, 'Menyimulasikan wawancara kerja berdasarkan surat lamaran pekerjaan yang sudah ditulis (teks surat lamaran pekerjaan).'),
(562, 114, 'Mengidentifikasi dan menilai akurasi format\r\npenyajian teks surat motivasi (teks surat\r\nmotivasi).'),
(563, 114, 'Menyajikan teks sastra untuk tujuan ekonomi kreatif (periklanan, penerbitan, film/film pendek) yang telah ditulis (teks berdasarkan karya kreatif).'),
(564, 114, 'Mempresentasikan opini untuk mendapatkan penilaian dari teman (teks opini).'),
(565, 115, 'Menulis teks argumentasi sebagai sebuah respons terhadap permasalahan yang ada di sekitar atau sedang tren di media massa/sosial (teks argumentasi & persuasi).'),
(566, 115, 'Membuat poster untuk mempromosikan bersosial media yang baik dan bijak (teks argumentasi & persuasi).'),
(567, 115, 'Menulis teks informasional dengan kaidah struktur dan unsur teks berita dengan merujuk pada sumber-sumber informasi yang valid (teks berita).'),
(568, 115, 'Menulis cerpen dengan tema tertentu (kearifan lokal) atau berdasarkan inspirasi film pendek yang ditonton (teks cerpen).'),
(569, 115, 'Menulis resensi dari cerpen yang ditulis oleh kawan sekelas (teks cerpen).\r\n'),
(570, 115, 'Menulis puisi berdasarkan cerpen yang dibaca atau dibuat sendiri (teks puisi).'),
(571, 115, 'Menulis naskah drama berdasarkan cerita pendek yang dibaca atau film pendek yang ditonton (teks drama).'),
(572, 115, 'Mempromosikan pertunjukan drama dengan membuat pamflet (teks drama).'),
(573, 115, 'Menulis karya ilmiah dengan kondisi permasalahan sosial dan alam terkini dengan memperhatikan kaidah penulisan karya ilmiah (teks karya ilmiah).'),
(574, 115, 'Membuat teks surat lamaran pekerjaan yang berkualitas (teks surat lamaran pekerjaan).'),
(575, 115, 'Membuat teks surat motivasi yang berkualitas (teks surat motivasi).');
INSERT INTO `list_tp` (`id`, `id_elemen`, `tp`) VALUES
(576, 115, 'Menulis teks refleksi dari novel indonesia\r\nyang dibaca dengan kehidupan sehari-hari(teks novel).'),
(577, 115, 'Menulis teks kritik karya kreatif berbasis\r\nsastra dari misal (novel Indonesia/terjemahan, cerpen, film pendek, film) yang dibaca (teks novel).'),
(578, 115, 'Menulis resensi dari novel Indonesia (teks novel).'),
(579, 115, 'Menyusun teks sastra untuk tujuan ekonomi kreatif (periklanan, penerbitan, film/film pendek) dengan tema tertentu (teks berdasarkan karya kreatif).'),
(580, 115, 'Menuangkan gagasan dalam bentuk teks opini (teks opini).');

-- --------------------------------------------------------

--
-- Table structure for table `lkpd`
--

CREATE TABLE `lkpd` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `lkpd` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lkpd`
--

INSERT INTO `lkpd` (`id`, `id_identitas`, `lkpd`) VALUES
(15, 15, '1902319_Fauzan Fiqriansyah_Media Pembelajaran Alat Evaluasi.pptx'),
(17, 17, '1902319_Fauzan Fiqriansyah_UTS PERENCANAAN PEMBELAJARAN ILMU KOMPUTER.pdf'),
(18, 18, '1902319_Fauzan Fiqriansyah_Tugas 1 EPIK.pdf'),
(22, 24, '1902319_Fauzan Fiqriansyah_Final Transcript.pdf'),
(25, 27, '20112022233019_Modul Ajar_Akuntasi dan Keuangan Lembaga (1).pdf'),
(26, 28, '27112022223533_Modul Ajar_Desain Komunikasi Visual .pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `id_pk` int(11) DEFAULT NULL,
  `mata_pelajaran` varchar(255) DEFAULT NULL,
  `umum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `id_pk`, `mata_pelajaran`, `umum`) VALUES
(1, 2, 'Dasar - Dasar Desain Komunikasi Visual', 0),
(2, 3, 'Dasar-Dasar Akuntansi dan Keuangan Lembaga', 0),
(3, 4, 'Dasar-Dasar Manajemen Perkantoran dan Layanan Bisnis', 0),
(4, NULL, 'Bahasa Inggris - E', 1),
(5, NULL, 'Bahasa Inggris - F', 1),
(6, NULL, 'Matematika - E', 1),
(7, NULL, 'Matematika - F', 1),
(8, 5, 'Dasar-dasar Teknik Jaringan Komputer dan Telekomunikasi - E', 0),
(9, 3, 'Akuntansi', 0),
(11, 7, 'Dasar-Dasar Busana - E', 0),
(12, 5, 'Teknik Komputer dan Jaringan - F', 0),
(13, 7, 'Desain dan Produksi Busana - F', 0),
(14, NULL, 'Ekonomi', 1),
(15, NULL, 'Pendidikan Pancasila', 1),
(16, NULL, 'Prakarya Kewirausahaan - Kerajinan', 1),
(17, NULL, 'Sejarah', 1),
(18, NULL, 'Sosiologi', 1),
(19, NULL, 'Kimia', 1),
(20, NULL, 'Fisika', 1),
(21, NULL, 'Biologi', 1),
(22, NULL, 'Pendidikan Agama Islam dan Budi Pekerti', 1),
(23, NULL, 'Pendidikan Jasmani Olahraga dan Kesehatan', 1),
(24, NULL, 'Bahasa Indonesia - E', 1),
(25, NULL, 'Bahasa Indonesia - F', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `materi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `id_identitas`, `materi`) VALUES
(23, 15, 'Jajiaji'),
(25, 17, 'njhkjkjnk'),
(26, 18, 'Memahami pekerjaan atau profesi'),
(38, 24, 'Memahami pekerjaan atau profesi'),
(39, 24, 'Membaca peluang pasar dan usaha'),
(40, 24, 'Membangun visi dan passion'),
(47, 27, 'Memahami pekerjaan atau profesi'),
(48, 27, 'Membaca peluang pasar dan usaha'),
(49, 27, 'Membangun visi dan passion'),
(50, 28, 'Memahami pekerjaan atau profesi');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `id_identitas`, `media`) VALUES
(26, 15, 'Lembar kerja peserta didik'),
(28, 17, 'Lembar kerja peserta didik'),
(29, 18, 'Laptop'),
(42, 24, 'Lembar kerja peserta didik'),
(43, 24, 'Laptop'),
(48, 27, 'Lembar kerja peserta didik'),
(49, 27, 'Laptop'),
(50, 28, 'LCD');

-- --------------------------------------------------------

--
-- Table structure for table `model_pembelajaran`
--

CREATE TABLE `model_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `model_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model_pembelajaran`
--

INSERT INTO `model_pembelajaran` (`id`, `id_identitas`, `model_pembelajaran`) VALUES
(15, 15, 'Production based Training (PBT).'),
(17, 17, 'Project Based Learning (PjBL)'),
(18, 18, 'Ekspositori'),
(24, 24, 'Ekspositori'),
(27, 27, 'Project Based Learning (PjBL)'),
(28, 28, 'Kontekstual');

-- --------------------------------------------------------

--
-- Table structure for table `pemahaman_bermakna`
--

CREATE TABLE `pemahaman_bermakna` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pemahaman_bermakna` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemahaman_bermakna`
--

INSERT INTO `pemahaman_bermakna` (`id`, `id_identitas`, `pemahaman_bermakna`) VALUES
(15, 15, 'Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(17, 17, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(18, 18, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(24, 24, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(27, 27, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif'),
(28, 28, ' Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual,  dan kewirausahaan di bidang ekonomi kreatif');

-- --------------------------------------------------------

--
-- Table structure for table `pendahuluan`
--

CREATE TABLE `pendahuluan` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendahuluan`
--

INSERT INTO `pendahuluan` (`id`, `id_kegiatan`, `kegiatan`) VALUES
(25, 15, 'Guru menyampaikan metode pembelajaran dan teknik penilaian yang akan digunakan'),
(27, 17, 'Guru menyampaikan metode pembelajaran dan teknik penilaian yang akan digunakan'),
(28, 18, 'Guru menyampaikan tujuan yang akan dicapai pada pembelajaran hari ini'),
(36, 24, 'Guru memberi salam dan mengajak berdo\'a sebelum pembelajaran dimulai'),
(39, 27, 'Guru memberi salam dan mengajak berdo\'a sebelum pembelajaran dimulai'),
(40, 28, 'Guru menyampaikan garis besar cakupan materi yang dipelajari');

-- --------------------------------------------------------

--
-- Table structure for table `pengayaan_remedial`
--

CREATE TABLE `pengayaan_remedial` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pengayaan_remedial` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengayaan_remedial`
--

INSERT INTO `pengayaan_remedial` (`id`, `id_identitas`, `pengayaan_remedial`) VALUES
(25, 15, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(27, 17, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(28, 18, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(36, 24, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(39, 27, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.'),
(40, 28, 'Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.');

-- --------------------------------------------------------

--
-- Table structure for table `penutup`
--

CREATE TABLE `penutup` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penutup`
--

INSERT INTO `penutup` (`id`, `id_kegiatan`, `kegiatan`) VALUES
(28, 15, 'Menutup pelajaran dengan memberi motivasi kepada siswa'),
(30, 17, 'Merencanakan kegiatan tindak lanjut dalam bentuk pembelajaran remedi, program pengayaan, dan layanan konseling'),
(31, 18, 'Guru menunjuk siswa tertentu untuk menyampaikan penjelasannya tentang materi atau bagian dari materi yang sudah dipelajari'),
(39, 24, 'Guru memberikan rangkuman poin-poin penting mengenai materi yang dipelajari'),
(42, 27, 'Guru memberikan rangkuman poin-poin penting mengenai materi yang dipelajari'),
(43, 27, 'dknsdkns'),
(44, 28, 'Melakukan penilaian dan/atau refleksi terhadap kegiatan yang sudah dilaksanakan');

-- --------------------------------------------------------

--
-- Table structure for table `persiapan_pembelajaran`
--

CREATE TABLE `persiapan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `persiapan_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persiapan_pembelajaran`
--

INSERT INTO `persiapan_pembelajaran` (`id`, `id_identitas`, `persiapan_pembelajaran`) VALUES
(25, 15, 'Guru menyusun instrument assesmen yang digunakan'),
(27, 17, 'Guru menyusun instrument assesmen yang digunakan'),
(28, 18, 'Guru melakukan tes diagnostic'),
(43, 24, 'Guru menyusun instrument assesmen yang digunakan'),
(44, 24, 'kkkdkokdo'),
(49, 27, 'Guru menyusun instrument assesmen yang digunakan'),
(50, 27, 'kkkdkokdo'),
(51, 28, 'Guru menyusun instrument assesmen yang digunakan');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_pemantik`
--

CREATE TABLE `pertanyaan_pemantik` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pertanyaan_pemantik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan_pemantik`
--

INSERT INTO `pertanyaan_pemantik` (`id`, `id_identitas`, `pertanyaan_pemantik`) VALUES
(15, 15, 'Apakah Anda pernah mendengar tentang Technopreneur ?'),
(17, 17, 'Apakah Anda pernah mendengar tentang Technopreneur ?'),
(18, 18, 'Apakah Anda pernah mendengar tentang Technopreneur ?'),
(29, 24, 'Apakah Anda pernah mendengar tentang Technopreneur ?'),
(30, 24, 'Apa itu Technopreneur?'),
(35, 27, 'Apakah Anda pernah mendengar tentang Technopreneur ?'),
(36, 27, 'Apa itu Technopreneur?'),
(37, 27, 'sdksmdk'),
(38, 28, 'Apakah Anda pernah mendengar tentang Technopreneur ?');

-- --------------------------------------------------------

--
-- Table structure for table `profil_pancasila`
--

CREATE TABLE `profil_pancasila` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `profil_pancasila` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_pancasila`
--

INSERT INTO `profil_pancasila` (`id`, `id_identitas`, `profil_pancasila`) VALUES
(30, 15, 'Mandiri'),
(32, 17, 'Kreatif'),
(33, 18, 'Kreatif'),
(34, 18, 'Mandiri'),
(50, 24, 'Mandiri'),
(51, 24, 'Kreatif'),
(52, 24, 'Berfikir Kritis'),
(59, 27, 'Mandiri'),
(60, 27, 'Kreatif'),
(61, 27, 'Berfikir Kritis'),
(62, 28, 'Berfikir Kritis');

-- --------------------------------------------------------

--
-- Table structure for table `program_keahlian`
--

CREATE TABLE `program_keahlian` (
  `id` int(11) NOT NULL,
  `program_keahlian` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_keahlian`
--

INSERT INTO `program_keahlian` (`id`, `program_keahlian`) VALUES
(2, 'Desain Komunikasi Visual '),
(3, 'Akuntasi dan Keuangan Lembaga'),
(4, 'Manajemen Perkantoran dan Layanan Bisnis'),
(5, 'Teknik Komputer dan Jaringan dan Telekomunikasi'),
(6, 'Akuntansi dan Keuangan Lembaga'),
(7, 'Busana');

-- --------------------------------------------------------

--
-- Table structure for table `refleksi`
--

CREATE TABLE `refleksi` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `refleksi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refleksi`
--

INSERT INTO `refleksi` (`id`, `id_identitas`, `refleksi`) VALUES
(25, 15, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(27, 17, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(28, 18, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(36, 24, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(39, 27, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?'),
(40, 28, 'Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?');

-- --------------------------------------------------------

--
-- Table structure for table `sumber`
--

CREATE TABLE `sumber` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `sumber` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber`
--

INSERT INTO `sumber` (`id`, `id_identitas`, `sumber`) VALUES
(29, 15, 'Laman E-Learning'),
(31, 17, 'Laman E-Learning'),
(32, 18, 'Lembar kerja peserta didik'),
(45, 24, 'Lembar kerja peserta didik'),
(46, 24, 'Laman E-Learning'),
(51, 27, 'Lembar kerja peserta didik'),
(52, 27, 'Laman E-Learning'),
(53, 28, 'E-book');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `kepala_sekolah` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `nip`, `nama`, `email`, `jabatan`, `sekolah`, `kepala_sekolah`, `mapel`, `password`, `profile_img`) VALUES
(1, '198609262015051001', 'Willy Surya Wardhana, S.Pd.', 'willysurya@gmail.com', 'Guru', 'SMK 3 Pasundan Cimahi', 'Subaryo, S.Pd., M.Pd', 'Animasi', '$2y$10$vX.C1E8iAmX2fWJRco9dReDG3nOtL270oe.c6bVQCn8e00gQSL4fS', 'storm_trooper.jpg'),
(4, '190290298989829', 'Gilang Zhanuardy, S. Pd., M. Pd.', 'gilangzhanuardy@gmail.com', 'Kepala Sekolah', 'SMKN 13 BANDUNG', 'Suparno, S. Pd., M.Pd.', 'Matematika', '$2y$10$vX.C1E8iAmX2fWJRco9dReDG3nOtL270oe.c6bVQCn8e00gQSL4fS', 'avatar.jpg'),
(12, '198609262015051000', 'Fauzan Fiqriansyah', 'fauzanfiqriansyah126@gmail.com', 'Guru', 'SMKN 13 BANDUNG', 'Suparno, S. Pd., M.Pd.', 'Basis Data', '', 'avatar.jpg'),
(15, '192891291829829', 'Fauzan Fiqriansyah', 'fauzanfiqriansyah@upi.edu', 'Guru', 'SMKN 13 BANDUNG', 'Suparno, S. Pd., M. Pd.', 'Matematika', '$2y$10$FGSGKTpV3f7qqmBxG9OjYeFq1ARzFPA7PbqMbdzaef8DJutxK5/Gu', 'storm_trooper.jpg'),
(16, '190290298989829', 'Fauzan Fiqriansyah', 'fauzanfiqriansyah127@gmail.com', 'Kepala Sekolah', 'SMKN 13 BANDUNG', 'Suparno, S. Pd., M. Pd.', 'Basis Data', '', 'avatar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `target_peserta_didik`
--

CREATE TABLE `target_peserta_didik` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `target_peserta` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `target_peserta_didik`
--

INSERT INTO `target_peserta_didik` (`id`, `id_identitas`, `target_peserta`) VALUES
(15, 15, ' Peserta didik regular Siswa Desain Komunikasi visual'),
(17, 17, ' Peserta didik regular Siswa Desain Komunikasi visual'),
(18, 18, ' Peserta didik regular Siswa Desain Komunikasi visual'),
(24, 24, ' Peserta didik regular Siswa Desain Komunikasi visual'),
(27, 27, ' Peserta didik regular Siswa Desain Komunikasi visual dfd'),
(28, 28, ' Peserta didik regular Siswa Desain Komunikasi visual');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan_pembelajaran`
--

CREATE TABLE `tujuan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `tujuan_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tujuan_pembelajaran`
--

INSERT INTO `tujuan_pembelajaran` (`id`, `id_identitas`, `tujuan_pembelajaran`) VALUES
(15, 15, 'Menjelaskan jenis pekerjaan Administrasi secara umum serta Pekerjaan administrasi di masa sekarang dan masa depan (berbasis manual dan teknologi)'),
(17, 17, 'Memahami jenis alat ukur pada jaringan komputer dan sistem telekomunikasi.'),
(18, 18, 'Melakukan penelitian sosial sederhana tentang berbagai gejala sosial dengan menggunakan metode yang tepat untuk mengamati, menanya, mengumpulkan informasi, mengorganisasikan informasi, menarik kesimpulan, dan mengomunikasikan hasil penelitian.'),
(24, 24, 'Memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern'),
(27, 27, 'Memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern'),
(28, 28, 'Menyajikan gagasan, pikiran, atau pandangan untuk tujuan pengajuan usul dalam bentuk dialog dan gelar wicara secara logis, runtut, kritis, dan kreatif.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ases_for`
--
ALTER TABLE `ases_for`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `ases_kog`
--
ALTER TABLE `ases_kog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `ases_non_kog`
--
ALTER TABLE `ases_non_kog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `ases_sum`
--
ALTER TABLE `ases_sum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `bahan_bacaan`
--
ALTER TABLE `bahan_bacaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_elemen` (`id_elemen`);

--
-- Indexes for table `daftar_pustaka`
--
ALTER TABLE `daftar_pustaka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `elemen`
--
ALTER TABLE `elemen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `file_modul`
--
ALTER TABLE `file_modul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `file_preview_modul`
--
ALTER TABLE `file_preview_modul`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `glosarium`
--
ALTER TABLE `glosarium`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_user` (`id_user`);

--
-- Indexes for table `inti`
--
ALTER TABLE `inti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `kegiatan_pembelajaran`
--
ALTER TABLE `kegiatan_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `kompetensi_awal`
--
ALTER TABLE `kompetensi_awal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `list_ases_for`
--
ALTER TABLE `list_ases_for`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_ases_kog`
--
ALTER TABLE `list_ases_kog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_ases_non_kog`
--
ALTER TABLE `list_ases_non_kog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_ases_sum`
--
ALTER TABLE `list_ases_sum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_inti`
--
ALTER TABLE `list_inti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_materi`
--
ALTER TABLE `list_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `list_pendahuluan`
--
ALTER TABLE `list_pendahuluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_pengayaan_remedial`
--
ALTER TABLE `list_pengayaan_remedial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_penutup`
--
ALTER TABLE `list_penutup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_persiapan`
--
ALTER TABLE `list_persiapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_refleksi`
--
ALTER TABLE `list_refleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_tp`
--
ALTER TABLE `list_tp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_elemen` (`id_elemen`);

--
-- Indexes for table `lkpd`
--
ALTER TABLE `lkpd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pk` (`id_pk`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`) USING BTREE;

--
-- Indexes for table `model_pembelajaran`
--
ALTER TABLE `model_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `pemahaman_bermakna`
--
ALTER TABLE `pemahaman_bermakna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `pengayaan_remedial`
--
ALTER TABLE `pengayaan_remedial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `penutup`
--
ALTER TABLE `penutup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kegiatan` (`id_kegiatan`);

--
-- Indexes for table `persiapan_pembelajaran`
--
ALTER TABLE `persiapan_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `pertanyaan_pemantik`
--
ALTER TABLE `pertanyaan_pemantik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `profil_pancasila`
--
ALTER TABLE `profil_pancasila`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `program_keahlian`
--
ALTER TABLE `program_keahlian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refleksi`
--
ALTER TABLE `refleksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `sumber`
--
ALTER TABLE `sumber`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `target_peserta_didik`
--
ALTER TABLE `target_peserta_didik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `tujuan_pembelajaran`
--
ALTER TABLE `tujuan_pembelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ases_for`
--
ALTER TABLE `ases_for`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `ases_kog`
--
ALTER TABLE `ases_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ases_non_kog`
--
ALTER TABLE `ases_non_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `ases_sum`
--
ALTER TABLE `ases_sum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bahan_bacaan`
--
ALTER TABLE `bahan_bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `daftar_pustaka`
--
ALTER TABLE `daftar_pustaka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `elemen`
--
ALTER TABLE `elemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `file_modul`
--
ALTER TABLE `file_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `file_preview_modul`
--
ALTER TABLE `file_preview_modul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `glosarium`
--
ALTER TABLE `glosarium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `inti`
--
ALTER TABLE `inti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kegiatan_pembelajaran`
--
ALTER TABLE `kegiatan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kompetensi_awal`
--
ALTER TABLE `kompetensi_awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `list_ases_for`
--
ALTER TABLE `list_ases_for`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_ases_kog`
--
ALTER TABLE `list_ases_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_ases_non_kog`
--
ALTER TABLE `list_ases_non_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_ases_sum`
--
ALTER TABLE `list_ases_sum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `list_inti`
--
ALTER TABLE `list_inti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `list_materi`
--
ALTER TABLE `list_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `list_pendahuluan`
--
ALTER TABLE `list_pendahuluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `list_pengayaan_remedial`
--
ALTER TABLE `list_pengayaan_remedial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_penutup`
--
ALTER TABLE `list_penutup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `list_persiapan`
--
ALTER TABLE `list_persiapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_refleksi`
--
ALTER TABLE `list_refleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_tp`
--
ALTER TABLE `list_tp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;

--
-- AUTO_INCREMENT for table `lkpd`
--
ALTER TABLE `lkpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `model_pembelajaran`
--
ALTER TABLE `model_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pemahaman_bermakna`
--
ALTER TABLE `pemahaman_bermakna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `pengayaan_remedial`
--
ALTER TABLE `pengayaan_remedial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `penutup`
--
ALTER TABLE `penutup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `persiapan_pembelajaran`
--
ALTER TABLE `persiapan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pertanyaan_pemantik`
--
ALTER TABLE `pertanyaan_pemantik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `profil_pancasila`
--
ALTER TABLE `profil_pancasila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `program_keahlian`
--
ALTER TABLE `program_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `refleksi`
--
ALTER TABLE `refleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `sumber`
--
ALTER TABLE `sumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `target_peserta_didik`
--
ALTER TABLE `target_peserta_didik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tujuan_pembelajaran`
--
ALTER TABLE `tujuan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ases_for`
--
ALTER TABLE `ases_for`
  ADD CONSTRAINT `ases_for_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `ases_kog`
--
ALTER TABLE `ases_kog`
  ADD CONSTRAINT `ases_kog_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `ases_non_kog`
--
ALTER TABLE `ases_non_kog`
  ADD CONSTRAINT `ases_non_kog_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `ases_sum`
--
ALTER TABLE `ases_sum`
  ADD CONSTRAINT `ases_sum_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `bahan_bacaan`
--
ALTER TABLE `bahan_bacaan`
  ADD CONSTRAINT `bahan_bacaan_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  ADD CONSTRAINT `capaian_pembelajaran_ibfk_1` FOREIGN KEY (`id_elemen`) REFERENCES `elemen` (`id`);

--
-- Constraints for table `daftar_pustaka`
--
ALTER TABLE `daftar_pustaka`
  ADD CONSTRAINT `daftar_pustaka_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `elemen`
--
ALTER TABLE `elemen`
  ADD CONSTRAINT `elemen_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`);

--
-- Constraints for table `file_modul`
--
ALTER TABLE `file_modul`
  ADD CONSTRAINT `file_modul_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `file_preview_modul`
--
ALTER TABLE `file_preview_modul`
  ADD CONSTRAINT `file_preview_modul_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `glosarium`
--
ALTER TABLE `glosarium`
  ADD CONSTRAINT `glosarium_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  ADD CONSTRAINT `fk_id_user` FOREIGN KEY (`id_user`) REFERENCES `table_user` (`id`);

--
-- Constraints for table `inti`
--
ALTER TABLE `inti`
  ADD CONSTRAINT `inti_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_pembelajaran` (`id`);

--
-- Constraints for table `kegiatan_pembelajaran`
--
ALTER TABLE `kegiatan_pembelajaran`
  ADD CONSTRAINT `kegiatan_pembelajaran_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `kompetensi_awal`
--
ALTER TABLE `kompetensi_awal`
  ADD CONSTRAINT `kompetensi_awal_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `list_materi`
--
ALTER TABLE `list_materi`
  ADD CONSTRAINT `list_materi_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id`);

--
-- Constraints for table `list_tp`
--
ALTER TABLE `list_tp`
  ADD CONSTRAINT `list_tp_ibfk_1` FOREIGN KEY (`id_elemen`) REFERENCES `elemen` (`id`);

--
-- Constraints for table `lkpd`
--
ALTER TABLE `lkpd`
  ADD CONSTRAINT `lkpd_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD CONSTRAINT `mata_pelajaran_ibfk_1` FOREIGN KEY (`id_pk`) REFERENCES `program_keahlian` (`id`);

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `model_pembelajaran`
--
ALTER TABLE `model_pembelajaran`
  ADD CONSTRAINT `model_pembelajaran_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `pemahaman_bermakna`
--
ALTER TABLE `pemahaman_bermakna`
  ADD CONSTRAINT `pemahaman_bermakna_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  ADD CONSTRAINT `pendahuluan_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_pembelajaran` (`id`);

--
-- Constraints for table `pengayaan_remedial`
--
ALTER TABLE `pengayaan_remedial`
  ADD CONSTRAINT `pengayaan_remedial_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `penutup`
--
ALTER TABLE `penutup`
  ADD CONSTRAINT `penutup_ibfk_1` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan_pembelajaran` (`id`);

--
-- Constraints for table `persiapan_pembelajaran`
--
ALTER TABLE `persiapan_pembelajaran`
  ADD CONSTRAINT `persiapan_pembelajaran_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `pertanyaan_pemantik`
--
ALTER TABLE `pertanyaan_pemantik`
  ADD CONSTRAINT `pertanyaan_pemantik_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `profil_pancasila`
--
ALTER TABLE `profil_pancasila`
  ADD CONSTRAINT `profil_pancasila_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `refleksi`
--
ALTER TABLE `refleksi`
  ADD CONSTRAINT `refleksi_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `sumber`
--
ALTER TABLE `sumber`
  ADD CONSTRAINT `sumber_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `target_peserta_didik`
--
ALTER TABLE `target_peserta_didik`
  ADD CONSTRAINT `target_peserta_didik_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

--
-- Constraints for table `tujuan_pembelajaran`
--
ALTER TABLE `tujuan_pembelajaran`
  ADD CONSTRAINT `tujuan_pembelajaran_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
