<?php
require_once '../../vendor/autoload.php';
include("../conn.php");

$id =  $_POST['id'];

session_start();
$nama = $_SESSION['nama'];
$jmlSuccess = 0;

$sql = "SELECT * FROM identitas_sekolah WHERE id = '$id'";
$result = mysqli_query($con, $sql);

$r = mysqli_fetch_assoc($result);
$id_user = $r['id_user'];
$date_created = $r['created_at'];
$programKeahlian = $r['program_keahlian'];
$satuanPend = $_SESSION['sekolah'];
$tahunAjar = $r['tahun_ajaran'];
$mapel = $r['mata_pelajaran'];
$kelas = $r['kelas'];
$semester = (int)$r['semester'];
$fase = $r['fase'];
$elemen = $r['elemen'];
$cp = $r['capaian_pembelajaran'];
$alokasiW = $r['alokasi_waktu'];
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


$section->addText($programKeahlian,array('name' => 'Times New Roman', 'size' => 14, 'bold' => true),array('alignment' => 'center'));
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
for($i=1; $i<=9; $i++){
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
$table->addCell(5000,null)->addText($nama,array('name' => 'Times New Roman','size' => 11,'bold' => true),null);

$table->addRow();
$table->addCell(4000,null)->addText("Satuan Pendidikan",$fontName,null);;
$table->addCell(5000,null)->addText($satuanPend,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Tahun Ajaran",$fontName,null);
$table->addCell(5000,null)->addText($tahunAjar,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Program Keahlian",$fontName,null);
$table->addCell(5000,null)->addText($programKeahlian,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Mata Pelajaran",$fontName,null);
$table->addCell(5000,null)->addText($mapel,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Kelas/Semester",$fontName,null);
if($semester%2 == 0){
    $table->addCell(5000,null)->addText($kelas.'/Genap',$fontName,null);
}else{
    $table->addCell(5000,null)->addText($kelas.'/Ganjil',$fontName,null);
}

$table->addRow();
$table->addCell(4000,null)->addText("Fase",$fontName,null);
$table->addCell(5000,null)->addText($fase,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Elemen",$fontName,null);
$table->addCell(5000,null)->addText($elemen,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Capaian Pembelajaran",$fontName,null);
$table->addCell(5000,null)->addText($cp,$fontName,null);

$table->addRow();
$table->addCell(4000,null)->addText("Materi",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT materi FROM materi WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['materi'], 0, null, 'multilevel-table-1');
}

$table->addRow();
$table->addCell(4000,null)->addText("Alokasi Waktu",$fontName,null);
$table->addCell(5000,null)->addText($alokasiW,$fontName,null);


$section->addText(' ',null,null);
$section->addTitle('KOMPETENSI AWAL', 2);
$sql = "SELECT kompetensi FROM kompetensi_awal WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['kompetensi'], 0, null, 'multilevel-1');
}

$section->addText(' ',null,null);
$section->addTitle('PROFIL PELAJAR PANCASILA', 2);
$sql = "SELECT profil_pancasila FROM profil_pancasila WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['profil_pancasila'], 0, null, 'multilevel-2');
}


$section->addText(' ',null,null);
$section->addTitle('SARANA DAN PRASARANA', 2);

$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Media",$fontName,null);
$sql = "SELECT media FROM media WHERE id_identitas ='$id'";
$media = "";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $media = $media. $r['media']. ', ';
}
$table->addCell(5000,null)->addText($media.'.',$fontName,null);
$table->addRow();
$table->addCell(4000,null)->addText("Sumber Belajar",$fontName,null);
$sql = "SELECT sumber FROM sumber WHERE id_identitas ='$id'";
$sumber = "";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $sumber = $sumber. $r['sumber']. ', ';
}
$table->addCell(5000,null)->addText($sumber,$fontName,null);


$section->addText(' ',null,null);
$section->addTitle('TARGET PESERTA DIDIK', 2);
$sql = "SELECT target_peserta FROM target_peserta_didik WHERE id_identitas = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$section->addListItem($r['target_peserta'], 0, null, 'multilevel-3');


$section->addText(' ',null,null);
$section->addTitle('MODEL PEMBELAJARAN', 2);
$sql = "SELECT model_pembelajaran FROM model_pembelajaran WHERE id_identitas = '$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);

$section->addListItem($r['model_pembelajaran'], 0, null, 'multilevel-4');

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

$sql = "SELECT tujuan_pembelajaran FROM tujuan_pembelajaran WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['tujuan_pembelajaran'], 0, null, 'multilevel-5');
}

$section->addText(' ',null,null);
$section->addTitle('PEMAHAMAN BERMAKNA', 2);
$sql = "SELECT pemahaman_bermakna FROM pemahaman_bermakna WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['pemahaman_bermakna'], 0, null, 'multilevel-6');
}

$section->addText(' ',null,null);
$section->addTitle('PERTANYAAN PEMANTIK', 2);
$sql = "SELECT pertanyaan_pemantik FROM pertanyaan_pemantik WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['pertanyaan_pemantik'], 0, null, 'multilevel-7');
}

$section->addText(' ',null,null);
$section->addTitle('PERSIAPAN PEMBELAJARAN', 2);
$sql = "SELECT persiapan_pembelajaran FROM persiapan_pembelajaran WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['persiapan_pembelajaran'], 0, null, 'multilevel-8');
}

$section->addText(' ',null,null);
$section->addTitle('KEGIATAN PEMBELAJARAN', 2);
$sql = "SELECT id FROM kegiatan_pembelajaran WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
$r = mysqli_fetch_assoc($result);
$id_kegiatan = $r['id'];

$section->addText('Pertemuan 1',array('bold' => true),$pName);
$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Pendahuluan",$fontName,null);
$cell = $table->addCell(5000,null);
$section->addText(' ',null,null);

$sql = "SELECT kegiatan FROM pendahuluan WHERE id_kegiatan ='$id_kegiatan'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['kegiatan'], 0, null, 'multilevel-table-2');
}
$table->addRow();
$table->addCell(4000,null)->addText("Inti",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT kegiatan FROM inti WHERE id_kegiatan ='$id_kegiatan'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['kegiatan'], 0, null, 'multilevel-table-3');
}
$table->addRow();
$table->addCell(4000,null)->addText("Penutup",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT kegiatan FROM penutup WHERE id_kegiatan ='$id_kegiatan'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['kegiatan'], 0, null, 'multilevel-table-4');
}

$section->addText(' ',null,null);
$section->addTitle('ASESMEN', 2);
$table = $section->addTable('myTable');
$table->addRow();
$table->addCell(4000,null)->addText("Asesmen non kognitif",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT ases FROM ases_non_kog WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['ases'], 0, null, 'multilevel-table-5');
}

$table->addRow();
$table->addCell(4000,null)->addText("Asesmen kognitif",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT ases FROM ases_kog WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['ases'], 0, null, 'multilevel-table-6');
}

$table->addRow();
$table->addCell(4000,null)->addText("Asesmen Formatif",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT ases FROM ases_for WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['ases'], 0, null, 'multilevel-table-7');
}

$table->addRow();
$table->addCell(4000,null)->addText("Asesmen Sumatif",$fontName,null);
$cell = $table->addCell(5000,null);
$sql = "SELECT ases FROM ases_sum WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $cell->addListItem($r['ases'], 0, null, 'multilevel-table-8');
}


$section->addText(' ',null,null);
$section->addTitle('PENGAYAAN DAN REMEDIAL', 2);
$sql = "SELECT pengayaan_remedial FROM pengayaan_remedial WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['pengayaan_remedial'], 0, null, 'multilevel-9');
}

$section->addText(' ',null,null);
$section->addTitle('REFLEKSI PESERTA DIDIK DAN GURU', 2);
$sql = "SELECT refleksi FROM refleksi WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addListItem($r['refleksi'], 0, null, 'multilevel-10');
}

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



$section->addText(' ',null,null);
$section->addTitle('BAHAN BACAAN GURU DAN PESERTA DIDIK', 2);
$sql = "SELECT bahan_bacaan FROM bahan_bacaan WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addText($r['bahan_bacaan'],array('bold' => false),$pName);
    $section->addText(' ',null,null);
}
$section->addTitle('GLOSARIUM', 2);
$sql = "SELECT glosarium FROM glosarium WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addText($r['glosarium'],array('bold' => false),$pName);
    $section->addText(' ',null,null);
}

$section->addTitle('DAFTAR PUSTAKA', 2);
$sql = "SELECT daftar_pustaka FROM daftar_pustaka WHERE id_identitas ='$id'";
$result = mysqli_query($con, $sql);
while($r = mysqli_fetch_assoc($result)){
    $section->addText($r['daftar_pustaka'],array('bold' => false),$pName);
    $section->addText(' ',null,null);
}

$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText("   Mengetahui\t\t\t\t\t\t\t\tCimahi,Juli 2022",array('bold' => false),$pName);
$section->addText("Kepala Sekolah\t\t\t\t\t\t\t\tGuru Mata Pelajaran",array('bold' => false),$pName);

$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText(' ',null,null);
$section->addText("Subaryo, S.Pd., M.Pd.\t\t\t\t\t\t  Willy Surya Wardhana",array('bold' => false),$pName);


$createdAt = date('dmYHis', strtotime($date_created));
// Saving the document as OOXML file...
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$filename = $createdAt.'_Modul Ajar_'.$programKeahlian.'.docx';
$saveFile = $objWriter->save('../../modul-ajar/'.$filename);
$sql = "INSERT INTO file_modul VALUES('','$id','$filename')";
$result = mysqli_query($con, $sql);
if($saveFile && $result){
    echo json_encode(array("statusCode"=>201));
}else{
    echo json_encode(array("statusCode"=>201));
}

?>