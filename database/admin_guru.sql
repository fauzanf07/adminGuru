-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 01:08 PM
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
-- Table structure for table `asesmen`
--

CREATE TABLE `asesmen` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `non_kognitif` text,
  `kognitif` text,
  `formatif` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ases_for`
--

CREATE TABLE `ases_for` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_for`
--

INSERT INTO `ases_for` (`id`, `asesmen`) VALUES
(1, 'Apa yang sedang kamu rasakan saat ini?'),
(2, 'Bagaimana perasaanmu saat belajar sendiri di rumah?'),
(3, 'Hal apa yang paling menyenangkan dan tidak menyenangkan?'),
(4, 'Apa yang kamu inginkan dalam pembelajaran hari ini?');

-- --------------------------------------------------------

--
-- Table structure for table `ases_kog`
--

CREATE TABLE `ases_kog` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_kog`
--

INSERT INTO `ases_kog` (`id`, `asesmen`) VALUES
(1, 'Bagaimana Animasi dibuat dan sebutkan jenis-jenisnya');

-- --------------------------------------------------------

--
-- Table structure for table `ases_non_kog`
--

CREATE TABLE `ases_non_kog` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_non_kog`
--

INSERT INTO `ases_non_kog` (`id`, `asesmen`) VALUES
(1, 'Kuis'),
(2, 'Unjuk kerja'),
(3, 'Penilaian akhiran');

-- --------------------------------------------------------

--
-- Table structure for table `ases_sum`
--

CREATE TABLE `ases_sum` (
  `id` int(11) NOT NULL,
  `asesmen` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ases_sum`
--

INSERT INTO `ases_sum` (`id`, `asesmen`) VALUES
(1, 'Penilaian Akhir Semester');

-- --------------------------------------------------------

--
-- Table structure for table `bahan_bacaan`
--

CREATE TABLE `bahan_bacaan` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `bahan_bacaan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 9, 'Pada akhir fase E peserta didik memahami pengoperasian perangkat lunak desain dengan memilih jenis perangkat lunak dan menetapkan perangkat lunak berbasis bitmap dan vector serta menggunakannya dalam perancangan dan proses produksi dalam eksekusi kerja Desain Komunikasi Visual.');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pustaka`
--

CREATE TABLE `daftar_pustaka` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `daftar_pustaka` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 1, 'Komposisi grafis');

-- --------------------------------------------------------

--
-- Table structure for table `glosarium`
--

CREATE TABLE `glosarium` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `glosarium` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inti`
--

CREATE TABLE `inti` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_pembelajaran`
--

CREATE TABLE `kegiatan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pertemuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_awal`
--

CREATE TABLE `kompetensi_awal` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `kompetensi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Peserta didik dan guru berdiskusi melalui pertanyaan pemantik'),
(2, 'Guru menayangkan beberapa studi kasus'),
(3, 'Berdasarkan tayangan, siswa bertanya'),
(4, 'Guru memberikan jawaban');

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
(1, 1, 'Memahami pekerjaan atau profesi'),
(2, 1, 'Membaca peluang pasar dan usaha'),
(3, 1, 'Membangun visi dan passion');

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
(5, 'Peserta didik disapa dan melakukan pemeriksaan kehadiran bersama dengan guru.'),
(6, 'Peserta didik disapa dan melakukan pemeriksaan kehadiran bersama dengan guru'),
(7, 'Peserta didik bersama dengan guru membahas tentang kesepakatan yang akan diterapkan dalam pembelajaran'),
(8, 'Peserta didik dan guru berdiskusi melalui pertanyaan pemantik');

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
(1, 'Peserta didik menanyakan hal yang tidak dipahami kepada guru'),
(2, 'Siswa mengkomunikasikan kendala yang dihadapi selama melakukan kegiatan pegerjaan tugas'),
(3, 'Siswa menerima apresiasi dan motivasi dari Guru');

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
(8, 3, 'Memahami tentang perkembangan proses produksi industri Desain Komunikasi Visual mulai dari teknologi konvensional sampai dengan teknologi modern, Industri 4.0, Internet of Things, digital teknologi dalam dunia industri, isu pemanasan global, perubahan iklim, aspek -aspek ketenagakerjaan, Life Cycle produk industri sampai dengan reuse, recycling.'),
(9, 4, 'Memahami industri ekonomi kreatif mulai dari teknologi konvensional sampai dengan teknologi modern'),
(10, 5, 'Memahami kepribadian yang dibutuhkan '),
(11, 5, 'Mengembangkan pola pikir kreatif melalui praktek secara mandiri dengan berpikir kritis tentang seluruh proses produksi'),
(12, 6, 'Menjelaskan konsep dasar karya dengan sketsa dan ilustrasi.'),
(13, 6, 'Menyiapkan bahan peralatan sketsa.'),
(14, 6, 'Mewujudkan sketsa. '),
(15, 6, 'Menyempurnakan sketsa. '),
(16, 6, 'Membuat ilustrasi dalam perancangan dan proses produksi untuk dikembangkan dalam eksekusi kerja'),
(17, 7, 'Menjelaskan konsep dasar karya dengan sketsa dan ilustrasi'),
(18, 7, 'Menyiapkan bahan peralatan sketsa'),
(19, 7, 'Mewujudkan sketsa.'),
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
(31, 9, 'Menetapkan perangkat lunak berbasis bitmap dan vector '),
(32, 9, 'Menggunakan perangkat lunak berbasis bitmap dan vector dalam perancangan dan proses produksi dalam eksekusi kerja');

-- --------------------------------------------------------

--
-- Table structure for table `lkpd`
--

CREATE TABLE `lkpd` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `lkpd` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `id_pk` int(11) DEFAULT NULL,
  `mata_pelajaran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `id_pk`, `mata_pelajaran`) VALUES
(1, 2, 'Dasar - dasar Desain Komunikasi Visual');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `materi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model_pembelajaran`
--

CREATE TABLE `model_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `model_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemahaman_bermakna`
--

CREATE TABLE `pemahaman_bermakna` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pemahaman_bermakna` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendahuluan`
--

CREATE TABLE `pendahuluan` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengayaan_remedial`
--

CREATE TABLE `pengayaan_remedial` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pengayaan_remedial` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penutup`
--

CREATE TABLE `penutup` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) DEFAULT NULL,
  `kegiatan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persiapan_pembelajaran`
--

CREATE TABLE `persiapan_pembelajaran` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `persiapan_pembelajaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan_pemantik`
--

CREATE TABLE `pertanyaan_pemantik` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `pertanyaan_pemantik` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_pancasila`
--

CREATE TABLE `profil_pancasila` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `profil_pancasila` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'Desain Komunikasi Visual ');

-- --------------------------------------------------------

--
-- Table structure for table `refleksi`
--

CREATE TABLE `refleksi` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `refleksi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `media` text,
  `sumber_belajar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `sekolah` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `nip`, `nama`, `username`, `email`, `jabatan`, `sekolah`, `mapel`, `password`) VALUES
(1, '198609262015051001', 'Willy Surya Wardhana, S.Pd.', 'willysurya', 'willysurya@gmail.com', 'Guru', 'SMKN 3 Pasundan Bandung', 'Animasi', 'd2lsbHlzdXJ5YQ==');

-- --------------------------------------------------------

--
-- Table structure for table `target_peserta_didik`
--

CREATE TABLE `target_peserta_didik` (
  `id` int(11) NOT NULL,
  `id_identitas` int(11) DEFAULT NULL,
  `target_peserta` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for dumped tables
--

--
-- Indexes for table `asesmen`
--
ALTER TABLE `asesmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_identitas` (`id_identitas`);

--
-- Indexes for table `ases_for`
--
ALTER TABLE `ases_for`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ases_kog`
--
ALTER TABLE `ases_kog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ases_non_kog`
--
ALTER TABLE `ases_non_kog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ases_sum`
--
ALTER TABLE `ases_sum`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
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
-- AUTO_INCREMENT for table `asesmen`
--
ALTER TABLE `asesmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ases_for`
--
ALTER TABLE `ases_for`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ases_kog`
--
ALTER TABLE `ases_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ases_non_kog`
--
ALTER TABLE `ases_non_kog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ases_sum`
--
ALTER TABLE `ases_sum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bahan_bacaan`
--
ALTER TABLE `bahan_bacaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `capaian_pembelajaran`
--
ALTER TABLE `capaian_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daftar_pustaka`
--
ALTER TABLE `daftar_pustaka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `elemen`
--
ALTER TABLE `elemen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `glosarium`
--
ALTER TABLE `glosarium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inti`
--
ALTER TABLE `inti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan_pembelajaran`
--
ALTER TABLE `kegiatan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kompetensi_awal`
--
ALTER TABLE `kompetensi_awal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_inti`
--
ALTER TABLE `list_inti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `list_materi`
--
ALTER TABLE `list_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_pendahuluan`
--
ALTER TABLE `list_pendahuluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `list_pengayaan_remedial`
--
ALTER TABLE `list_pengayaan_remedial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `list_penutup`
--
ALTER TABLE `list_penutup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lkpd`
--
ALTER TABLE `lkpd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `model_pembelajaran`
--
ALTER TABLE `model_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemahaman_bermakna`
--
ALTER TABLE `pemahaman_bermakna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengayaan_remedial`
--
ALTER TABLE `pengayaan_remedial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penutup`
--
ALTER TABLE `penutup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persiapan_pembelajaran`
--
ALTER TABLE `persiapan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan_pemantik`
--
ALTER TABLE `pertanyaan_pemantik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_pancasila`
--
ALTER TABLE `profil_pancasila`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_keahlian`
--
ALTER TABLE `program_keahlian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refleksi`
--
ALTER TABLE `refleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `target_peserta_didik`
--
ALTER TABLE `target_peserta_didik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tujuan_pembelajaran`
--
ALTER TABLE `tujuan_pembelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asesmen`
--
ALTER TABLE `asesmen`
  ADD CONSTRAINT `asesmen_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

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
-- Constraints for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD CONSTRAINT `sarana_prasarana_ibfk_1` FOREIGN KEY (`id_identitas`) REFERENCES `identitas_sekolah` (`id`);

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
