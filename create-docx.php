<?php
require_once 'vendor/autoload.php';

// Creating the new document...
$phpWord = new \PhpOffice\PhpWord\PhpWord();

/* Note: any element you append to a document must reside inside of a Section. */

// Adding an empty Section to the document...
$section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...

$section->addText(
    'MODUL AJAR',
    array('name' => 'Times New Roman', 'size' => 14, 'bold' => true),
    array('alignment' => 'center')
);

$section->addText('INFORMASI UMUM',array('name' => 'Times New Roman', 'size' => 14, 'bold' => true),array('alignment' => 'center'));
$section->addText(' ',null,null);

$phpWord->addNumberingStyle(
    'hNum',
    array('type' => 'multilevel', 'levels' => array(
         array('format' => 'upperRoman', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360),
         array('format' => 'upperLetter', 'text' => '%2.', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
        )
    )
);
$phpWord->addTitleStyle(1, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum', 'numLevel' => 0));
$phpWord->addTitleStyle(2, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum', 'numLevel' => 1));

$section->addTitle('INFORMASI UMUM', 1);
$section->addTitle('IDENTITAS', 2);

$fontName = 'identitas';
$phpWord->addFontStyle(
    $fontName,
    array(
        'name' => 'Times New Roman',
        'size' => 11,
        'bold' => false
    )
);
$pName = 'identitasP';
$phpWord->addParagraphStyle(
    $pName,
    [
        'spacing' => 120,
        'indentation' => ['left' => 720],
        'tabs' => [new \PhpOffice\PhpWord\Style\Tab('left', 360)]
    ]
);
$leftTabStyleName = 'leftTab';
$phpWord->addParagraphStyle($leftTabStyleName, ['tabs' => [new \PhpOffice\PhpWord\Style\Tab('left', 360)]]);

$tableStyle = array(
    'borderColor' => '000000',
    'borderSize'  => 10,
    'cellMarginLeft'  => 100,
    'indent'  => new \PhpOffice\PhpWord\ComplexType\TblWidth(720)
);
for($i=1; $i<=8; $i++){
    $phpWord->addNumberingStyle(
        'multilevel-table-'.$i,
        array(
            'type' => 'multilevel',
            'levels' => array(
                array('format' => 'decimal', 'text' => '%1.', 'left' => 400, 'hanging' => 360, 'tabPos' => 1080,'restart'=>true),
                array('format' => 'upperLetter', 'text' => '%2.', 'left' => 400, 'hanging' => 360, 'tabPos' => 1440,'restart'=>true),
            )
        )
    );
}
for($i=1; $i<=12; $i++){
    $phpWord->addNumberingStyle(
        'multilevel-'.$i,
        array(
            'type' => 'multilevel',
            'levels' => array(
                array('format' => 'decimal', 'text' => '%1.', 'left' => 1080, 'hanging' => 360, 'tabPos' => 1080,'restart'=>true),
                array('format' => 'upperLetter', 'text' => '%2.', 'left' => 1440, 'hanging' => 360, 'tabPos' => 1440,'restart'=>true)
            )
        )
    );
}
$phpWord->addTableStyle('myTable', $tableStyle, null);
$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Nama Penyusun",$fontName,null);;
$table->addCell(5000,null)->addText('Willy Surya Wardhana',array('name' => 'Times New Roman','size' => 11,'bold' => true),null);
$table->addRow();
$table->addCell(4000,null)->addText("Satuan Pendidikan",$fontName,null);;
$table->addCell(5000,null)->addText('SMK Pasundan 3 Cimahi',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Tahun Ajaran",$fontName,null);
$table->addCell(5000,null)->addText('2022-2023',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Tahun Ajaran",$fontName,null);
$table->addCell(5000,null)->addText('2022-2023',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Program Keahlian",$fontName,null);
$table->addCell(5000,null)->addText('Animasi',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Mata Pelajaran",$fontName,null);
$table->addCell(5000,null)->addText('Dasar Dasar Keahlian Desain Komunikasi Visual',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Kelas/Semester",$fontName,null);
$table->addCell(5000,null)->addText('X/Ganjil',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Fase",$fontName,null);
$table->addCell(5000,null)->addText('E',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Elemen",$fontName,null);
$table->addCell(5000,null)->addText('Profil technopreneur, peluang usaha dan pekerjaan/profesi bidang Desain Komunikasi Visual',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Capaian Pembelajaran",$fontName,null);
$table->addCell(5000,null)->addText('Pada akhir fase E peserta didik mampu memahami pekerjaan atau profesi dalam bidang Desain Komunikasi Visual, dan kewirausahaan di bidang ekonomi kreatif yang mampu membaca peluang pasar dan usaha, untuk membangun visi dan passion, serta melakukan pembelajaran berbasis projek nyata sebagai simulasi projek kewirausahaan',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Materi",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('memahami pekerjaan atau profesi', 0, null, 'multilevel-table-1');
$cell->addListItem('membaca peluang pasar dan usaha', 0, null, 'multilevel-table-1');
$cell->addListItem('membangun visi dan passion', 0, null, 'multilevel-table-1');


$section->addText(' ',null,null);
$section->addTitle('KOMPETENSI AWAL', 2);
$section->addListItem('Mengetahui apa itu desain komunikasi visual', 0, null, 'multilevel-1');

$section->addText(' ',null,null);
$section->addTitle('PROFIL PELAJAR PANCASILA', 2);
$section->addListItem('Mandiri', 0, null, 'multilevel-2');
$section->addListItem('Kreatif', 0, null, 'multilevel-2');
$section->addListItem('Mengemukakan ide pada saat diskusidan praktikum', 0, null, 'multilevel-2');
$section->addListItem('Membuat presentasi hasil diskusi', 0, null, 'multilevel-2');
$section->addListItem('Berfikir Kritis', 0, null, 'multilevel-2');
$section->addListItem('Mencari Informasi yang dapat diperoleh dari internet', 0, null, 'multilevel-2');
$section->addListItem('Membedakan kualitas animasi yang baik', 0, null, 'multilevel-2');


$section->addText(' ',null,null);
$section->addTitle('SARANA DAN PRASARANA', 2);

$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Media",$fontName,null);;
$table->addCell(5000,null)->addText('Lembar kerja peserta didik, laptop, handphone, LCD proyektor.',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Sumber Belajar",$fontName,null);;
$table->addCell(5000,null)->addText("Lembar kerja peserta didik, laman e-learning, e-book, buku bacaan, Youtube dsb.",$fontName,null);


$section->addText(' ',null,null);
$section->addTitle('TARGET PESERTA DIDIK', 2);
$section->addListItem('Peserta didik regular Siswa Desain Komunikasi visual', 0, null, 'multilevel-3');


$section->addText(' ',null,null);
$section->addTitle('MODEL PEMBELAJARAN', 2);
$section->addListItem("Project Based Learning dan Quiz", 0, null, 'multilevel-4');

$phpWord->addNumberingStyle(
    'hNum1',
    array('type' => 'multilevel', 'levels' => array(
         array('format' => 'upperRoman', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360),
         array('format' => 'upperLetter', 'text' => '%2.', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
        )
    )
);
$phpWord->addTitleStyle(1, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum1', 'numLevel' => 0));
$phpWord->addTitleStyle(2, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum1', 'numLevel' => 1));

$section->addText(' ',null,null);

$section->addTitle('KOMPETENSI INTI', 1);

$section->addTitle('TUJUAN PEMBELAJARAN', 2);
$section->addListItem('Memahami pekerjaan atau profesi dalam bidang Desain Komunikasi Visual, dan kewirausahaan di bidang ekonomi kreatif', 0, null, 'multilevel-5');
$section->addListItem('Membaca peluang pasar dan usaha', 0, null, 'multilevel-5');
$section->addListItem('Membangun visi dan passion', 0, null, 'multilevel-5');

$section->addText(' ',null,null);
$section->addTitle('PEMAHAMAN BERMAKNA', 2);
$section->addListItem("Mengetahui pekerjaan atau profesi dalam bidang Desain Komunikasi Visual, dan kewirausahaan di bidang ekonomi kreatif", 0, null, 'multilevel-6');
$section->addListItem("Dapat membaca peluang usaha", 0, null, 'multilevel-6');

$section->addText(' ',null,null);
$section->addTitle('PERTANYAAN PEMANTIK', 2);
$section->addListItem("Apakah Anda pernah mendengar tentang Technopreneur ?", 0, null, 'multilevel-7');

$section->addText(' ',null,null);
$section->addTitle('PERSIAPAN PEMBELAJARAN', 2);
$section->addListItem("Guru menyusun LKPD", 0, null, 'multilevel-8');
$section->addListItem("Guru menyusun instrument assesmen yang digunakan", 0, null, 'multilevel-8');
$section->addListItem("Guru melakukan tes diagnostic", 0, null, 'multilevel-8');

$section->addText(' ',null,null);
$section->addTitle('KEGIATAN PEMBELAJARAN', 2);
$section->addText('Pertemuan 1',array('bold' => true),$pName);
$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Pendahuluan",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Peserta didik dan Guru memulai dengan berdoa bersama', 0, null, 'multilevel-table-2');
$cell->addListItem('Peserta didik disapa dan melakukan pemeriksaan kehadiran bersama dengan guru.', 0, null, 'multilevel-table-2');
$cell->addListItem('Peserta didik bersama dengan guru membahas tentang kesepakatan yang akan diterapkan dalam pembelajaran.', 0, null, 'multilevel-table-2');
$cell->addListItem('Peserta didik dan guru berdiskusi melalui pertanyaan pemantik: a. Tahukah kamu bagaimana proses bisnis animasi dan hak ciptanya?', 0, null, 'multilevel-table-2');
$table->addRow();
$table->addCell(4000,null)->addText("Inti",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Peserta didik mendapatkan pemaparan materi secara singkat mengenai Peluang kerja di dunia industri.', 0, null, 'multilevel-table-3');
$cell->addListItem('Guru menayangkan beberapa studi kasus mengenai pekerjaan di dunia industri', 0, null, 'multilevel-table-3');
$cell->addListItem('Berdasarkan tayangan, siswa bertanya', 0, null, 'multilevel-table-3');
$cell->addListItem('Guru memberikan jawaban', 0, null, 'multilevel-table-3');
$table->addRow();
$table->addCell(4000,null)->addText("Penutup",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Peserta didik menanyakan hal yang tidak dipahami kepada guru.', 0, null, 'multilevel-table-4');
$cell->addListItem('Siswa mengkomunikasikan kendala yang dihadapi selama melakukan kegiatan pegerjaan tugas', 0, null, 'multilevel-table-4');
$cell->addListItem('Siswa menerima apresiasi dan motivasi dari Guru', 0, null, 'multilevel-table-4');

$section->addText(' ',null,null);
$section->addTitle('ASESMEN', 2);
$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen non kognitif",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Apa yang sedang kamu rasakan saat ini?', 0, null, 'multilevel-table-5');
$cell->addListItem('Bagaimana perasaanmu saat belajar sendiri di rumah?', 0, null, 'multilevel-table-5');
$cell->addListItem('Hal apa yang paling menyenangkan dan tidak menyenangkan?', 0, null, 'multilevel-table-5');
$cell->addListItem('Apa yang kamu inginkan dalam pembelajaran hari ini?', 0, null, 'multilevel-table-5');
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen kognitif",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Bagaimana Animasi dibuat dan sebutkan jenis jenisnya', 0, null, 'multilevel-table-6');
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen Formatif",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Kuis', 0, null, 'multilevel-table-7');
$cell->addListItem('Unjuk kerja', 0, null, 'multilevel-table-7');
$cell->addListItem('Penilaian harian', 0, null, 'multilevel-table-7');
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen Sumatif",$fontName,null);
$table->addCell(5000,null)->addText("Penilaian Akhir Semester",$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen non kognitif",$fontName,null);
$cell = $table->addCell(5000,null);
$cell->addListItem('Apa yang sedang kamu rasakan saat ini?', 0, null, 'multilevel-table-8');
$cell->addListItem('Bagaimana perasaanmu saat belajar sendiri di rumah?', 0, null, 'multilevel-table-8');
$cell->addListItem('Hal apa yang paling menyenangkan dan tidak menyenangkan?', 0, null, 'multilevel-table-8');
$cell->addListItem('Apa yang kamu inginkan dalam pembelajaran hari ini?', 0, null, 'multilevel-table-8');


$section->addText(' ',null,null);
$section->addTitle('PENGAYAAN DAN REMEDIAL', 2);
$section->addListItem("Pengayaan diberikan kepada peserta didik yang menguasai materi ini dengan sangat baik, yaitu dengan cara memberikan ragam soal yang tingkatannya lebih tinggi.", 0, null, 'multilevel-9');
$section->addListItem("Remedial diberikan kepada peserta didik yang belum menguasai materi dengan baik, yaitu dengan cara memberikan pengulangan materi dasar serta materi spesifik yang kurang dikuasai oleh peserta didik . (Materi pengayaan dan remedial terlampir)
", 0, null, 'multilevel-9');

$section->addText(' ',null,null);
$section->addTitle('REFLEKSI PESERTA DIDIK DAN GURU', 2);
$section->addListItem("Apa yang menyenangkan dalam kegiatan pembelajaran hari ini?", 0, null, 'multilevel-10');
$section->addListItem("Apakah aktivitas pembelajaran hari ini bermakna dalam kehidupan saya?", 0, null, 'multilevel-10');

$phpWord->addNumberingStyle(
    'hNum1',
    array('type' => 'multilevel', 'levels' => array(
         array('format' => 'upperRoman', 'text' => '%1.', 'left' => 360, 'hanging' => 360, 'tabPos' => 360),
         array('format' => 'upperLetter', 'text' => '%2.', 'left' => 720, 'hanging' => 360, 'tabPos' => 720),
        )
    )
);
$phpWord->addTitleStyle(1, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum1', 'numLevel' => 0));
$phpWord->addTitleStyle(2, array('size' => 12,'bold' => true, 'name'=>'Times New Roman'), array('numStyle' => 'hNum1', 'numLevel' => 1));

$section->addText(' ',null,null);
$section->addTitle('LAMPIRAN', 1);

$section->addTitle('LEMBAR KERJA PESERTA DIDIK', 2);
$section->addText('Kegiatan 1 : ',array('bold' => true),$pName);
$section->addText("a)\tPetunjuk Kerja :  ",array('bold' => false),$pName);
$section->addText("\t- Buat kelompok yang terdiri dari 3-4 orang  ",array('bold' => false),$pName);
$section->addText("\t- Siapkan software Power Point   ",array('bold' => false),$pName);
$section->addText("b)\tLembar Kerja :  ",array('bold' => false),$pName);
$section->addText("Paparkan dan berikan contoh terkait dengan sikap kerja dalam bidang desain 
komunikasi Visual   ",array('bold' => false),$pName);
$section->addText("\t1) Displin   ",array('bold' => false),$pName);
$section->addText("\t2) Memiliki komitmen tinggi   ",array('bold' => false),$pName);
$section->addText("\t3) Jujur   ",array('bold' => false),$pName);
$section->addText("\t4) Kreatif dan Inovatif   ",array('bold' => false),$pName);
$section->addText("Kerjakan bersama kelompoknya di Power Point kemudian dipresentasikan.   ",array('bold' => false),$pName);

$section->addText(' ',null,null);
$section->addText('Kegiatan 2 : ',array('bold' => true),$pName);
$section->addText("a)\tPetunjuk Kerja :  ",array('bold' => false),$pName);
$section->addText("\t- Buat kelompok yang terdiri dari 3-4 orang  ",array('bold' => false),$pName);
$section->addText("\t- Siapkan software Power Point   ",array('bold' => false),$pName);
$section->addText("b)\tLembar Kerja :  ",array('bold' => false),$pName);
$section->addText("Paparkan dan berikan contoh peluang usaha apa yang berkembang saat ini dibidang desain komunikasi visual yang sesuai dengan daerah kita saat ini yang bisa menghasilkan keuntungan yang maksimal, serta kode etik apa yang harus dimiliki di bidang desain komunikasi visual. ",array('bold' => false),$pName);
$section->addText("Kerjakan bersama kelompoknya di Power Point kemudian dipresentasikan. ",array('bold' => false),$pName);


$section->addText(' ',null,null);
$section->addTitle('BAHAN BACAAN GURU DAN PESERTA DIDIK', 2);
$section->addText('E-BOok Dasar Dasar Desain Komunikasi Visual (Kemenristekdikti)',array('bold' => false),$pName);
$section->addText(' ',null,null);
$section->addTitle('GLOSARIUM', 2);
$section->addText('Peluang usaha : Kesempatan yang dimiliki seseorang untuk mencapai tujuan (keuntungan, uang, kekayaan) dengan cara melakukan usaha yang memanfaatkan berbagai sumber daya yang dimiliki. ',array('bold' => false),$pName);
$section->addText(' ',null,null);
$section->addText('Profesi : Pekerjaan yang membutuhkan pelatihan dan penguasaan terhadap suatu pengetahuan khusus ',array('bold' => false),$pName);
$section->addText(' ',null,null);
$section->addText('Technopreneur : sebagai suatu usaha yang memanfaatkan kemajuan dalam mengembangkan suatu usaha yang bergerak di bidang teknologi. ',array('bold' => false),$pName);

$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addTitle('DAFTAR PUSTAKA', 2);
$section->addText("Kementrian Pendidikan dan Kebudayaan. 2021.Dasar-dasar Komunikasi Visual SMK Kelas X. Jakarta : Kemendikbud",array('bold' => false),$pName);
$section->addText(' ',null,null);

$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText("   Mengetahui\t\t\t\t\t\t\t\tCimahi,Juli 2022",array('bold' => false),$pName);
$section->addText("Kepala Sekolah\t\t\t\t\t\t\t\tGuru Mata Pelajaran",array('bold' => false),$pName);

$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText("Subaryo, S.Pd., M.Pd.\t\t\t\t\t\t  Willy Surya Wardhana",array('bold' => false),$pName);




// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('Modul Ajar Informatika.docx');


echo "It's been created";

?>