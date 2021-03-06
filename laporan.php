<?php
 // Sisipkan Class FPDF dan File Koneksi
 require('fpdf/fpdf.php');
 include "koneksi.php";
 
 class PDF extends FPDF{
 // Load data = Pecah Array 
 function Header()
{
    // Logo
    $this->Image('logo.png',55,8,30);
    
    // Arial bold 12
    $this->SetFont('Arial','B',16);
    
    // Geser Ke Kanan 35mm
    $this->Cell(135);
    
    // Judul
    $this->Cell(30,7,'P e m e r i n t a h  K a b u p a t e n  T a s i k m a l a y a',0,1,'C');
    $this->Cell(135);
    $this->Cell(30,7,'D i n a s  P e n d i d i k a n ',0,1,'C');
    $this->Cell(135);
    $this->Cell(30,7,'S M A  M u h a m m a d i y a h  S i n g a p a r n a ',0,1,'C');
	$this->Cell(135);
    $this->Cell(30,7,'T e r a k h i d i t a s i  " A " ',0,1,'C');
    
    // Garis Bawah Double
    $this->Cell(275,1,'','B',1,'L');
    $this->Cell(275,1,'','B',0,'L');
    
    // Line break 5mm
    $this->Ln(5);
	$this->Cell(135);
    $this->Cell(30,7,'Laporan Hasil Analisa Siswa Bermasalah ',0,1,'C');
	$this->Ln(5);
}

function Footer()
{
    // Logo
    
    // Arial bold 12
    $this->SetFont('Arial','',11);
       
	$this->Ln(60);
	$this->Cell(240);
 
    $this->Cell(30,7,'',0,1,'R');
    $this->Cell(245);
    $this->Cell(30,7,'Mengetahui,',0,1,'R');
    $this->Cell(245);
	$this->Cell(30,7,'Kepala Sekolah',0,1,'R');
	$this->Ln(10);
	$this->Cell(245);
	$this->Cell(30,7,'Angga Irpanna S, S.Pd',0,1,'R');
}
 function LoadData($gue){
  $data = array();
  if (is_array($gue)) {
  foreach($gue as $coba)
   $data[] = explode('|',$coba);
  }
  return $data;
 }

 // Fungsi Membuat Tabel


 function FancyTable($header, $data){
  // Colors, line width and bold font
  $this->SetFillColor(3,0,126);
  $this->SetTextColor(235,235,235);
  $this->SetDrawColor(130,130,130);
  $this->SetLineWidth(.3);
  $this->SetFont('','B');

  // Lebar Header Sesuaikan Jumlahnya dengan Jumlah Field Tabel Database
  $w = array(45, 30, 30, 30, 50, 30, 30, 30);
  
  for($i=0;$i<count($header);$i++)
   $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
  $this->Ln();
  // Color and font restoration
  $this->SetFillColor(235,235,235);
  $this->SetTextColor(0);
  $this->SetFont('');
  // Data
  $fill = false;
  foreach($data as $row){
   // Field Dari Database Yang Ingin ditampilkan
   // $this->Cell($w[Ubah Ini],6,$row[Ubah Ini],'LR',0,'L',$fill);
   
   $this->Cell($w[0],6,$row[0],'LR',0,'C',$fill);
   $this->Cell($w[1],6,$row[1],'LR',0,'C',$fill); 
   $this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);
   $this->Cell($w[3],6,$row[3],'LR',0,'C',$fill);
   $this->Cell($w[4],6,$row[4],'LR',0,'C',$fill);
   $this->Cell($w[5],6,$row[5],'LR',0,'C',$fill);
   $this->Cell($w[6],6,$row[6],'LR',0,'C',$fill);
   $this->Cell($w[7],6,$row[7],'LR',0,'C',$fill);
   $this->Ln();
   
   $fill = !$fill;
  }
  // Closing line
  $this->Cell(array_sum($w),0,'','T');
 }
 }

 $pdf = new PDF();
 
 $pdf->Cell(280,10,'Pembuatan File PDF');
 // Pendefinisian Header Tabel 
 $header = array( 'Nama', 'Absensi', 'Sikap', 'Perilaku', 'Pelanggaran Tata Tertib', 'Nilai Akademik', 'Hasil', 'Keterangan');

 // Load Data dari Database
 $dataku = mysql_query("SELECT * FROM t_h_analisa");
 while ($tampil=mysql_fetch_array($dataku)){
 // Simpan Kedalam Array dengan Batasan |
 @$gue[] .= $tampil['nama']."|".$tampil['ab']."|".$tampil['sk']."|".$tampil['pl']."|".$tampil['ptt']."|".$tampil['na']."|".$tampil['hasil_a']."|".$tampil['Keterangan'];
 }
 
 // Cetak Laporan
 $data = $pdf->LoadData($gue);
 $pdf->SetFont('Arial','',10);
 $pdf->AddPage('L');
 $pdf->FancyTable($header,$data);
 $pdf->Output();
?>
