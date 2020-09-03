<?php
// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF('P', 'mm', 'F4', true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Anonim');
$pdf->SetTitle('Laporan ');
$pdf->SetSubject('Laporan');
$pdf->SetKeywords('Laporan, Cetak');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.1, 'depth_h' => 0.1, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

// $pdf->Image('assets/img/white.jpg', 0, 0, 200, 27, 'JPG', '', '', true);
// $pdf->Image('assets/img/white.jpg', 200, 0, 200, 27, 'JPG', '', '', true);
// $pdf->Image('assets/img/logo.jpg', 70, 8, 20, 24, 'JPG', '', '', true);

$pdf->Line(5, 5, 205, 5, 'D');
$pdf->Line(5, 292, 205, 292, 'D');
$pdf->Line(5, 5, 5, 292, 'D');
$pdf->Line(205, 5, 205, 292, 'D');

// mencetak string
$pdf->Text(85, 6, 'DATA SITE SURVEY');
$pdf->Text(98, 12, '		2020      ',);
$pdf->Line(5, 18, 205, 18, 'D');

$pdf->Text(13, 20, '1. Nama Site');
$pdf->Text(65, 20, ': ');
$pdf->Text(13, 25, '2. Nama Pemilik');
$pdf->Text(65, 25, ': ');
$pdf->Text(13, 30, '3. Lokasi Menara');
$pdf->Text(65, 30, ': ');
$pdf->Text(18, 35, '- Jalan');
$pdf->Text(65, 35, ': ');
$pdf->Text(18, 40, '- Desa');
$pdf->Text(65, 40, ': ');
$pdf->Text(18, 45, '- Kecamatan');
$pdf->Text(65, 45, ': ');
$pdf->Text(18, 50, '- Kabupaten');
$pdf->Text(65, 50, ': ');
$pdf->Text(13, 55, '4. Tinggi Menara');
$pdf->Text(65, 55, ': ');
$pdf->Text(13, 60, '5. Luas Area');
$pdf->Text(65, 60, ': ');
$pdf->Text(13, 65, '6. Titik Koordinat');
$pdf->Text(65, 65, ': ');
$pdf->Text(18, 70, '- Latitude');
$pdf->Text(65, 70, ': ');
$pdf->Text(18, 75, '- Longitude');
$pdf->Text(65, 75, ': ');
$pdf->Text(13, 80, '7. Jumlah BOX PLN');
$pdf->Text(65, 80, ': ');
$pdf->Text(13, 85, '8. Jumlah Operator');
$pdf->Text(65, 85, ': ');
$pdf->Text(23, 90, '- (...)');
$pdf->Text(13, 95, '9. Jumlah kaki');
$pdf->Text(65, 95, ': ');

$pdf->Text(18, 100, 'Kondisi Site');
$pdf->Text(65, 100, ': ');
$pdf->Text(23, 105, 'A. Identitas Hukum');
$pdf->Text(65, 105, ': ');
$pdf->Text(23, 110, 'B. Lampu Halangan');
$pdf->Text(65, 110, ': ');
$pdf->Text(23, 115, 'C. Marka Halangan');
$pdf->Text(65, 115, ': ');
$pdf->Text(23, 120, 'D. Marka Pengaman');
$pdf->Text(65, 120, ': ');
$pdf->Text(23, 125, 'E. Ijin IMB/Ho');
$pdf->Text(65, 125, ': ');
$pdf->Text(55, 130, 'No.');
$pdf->Text(65, 130, ': ');

$pdf->Text(13, 135, 'Gambar Kondisi Site...');

$pdf->Text(20, 140, 'Box PLN');
$pdf->Image('assets/images/Delusi.jpg', 20, 145, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Text(110, 140, 'Box Operator');
$pdf->Image('assets/images/Delusi.jpg', 110, 145, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Text(20, 190.5, 'Identitas Hukum');
$pdf->Image('assets/images/Delusi.jpg', 20, 195.5, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Text(110, 190.5, 'Operator');
$pdf->Image('assets/images/Delusi.jpg', 110, 195.5, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Text(20, 241, 'Marka Halangan (Warna)');
$pdf->Image('assets/images/Delusi.jpg', 20, 246, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
$pdf->Text(110, 241, 'Pagar Pengaman');
$pdf->Image('assets/images/Delusi.jpg', 110, 246, '', 43, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
ob_clean();
// ---------------------------------------------------------
//Close and output PDF document
$pdf->Output('Laporan new.pdf', 'I');
