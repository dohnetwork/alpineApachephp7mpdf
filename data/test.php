<?php
 
//include('MPDF57/mpdf.php');
require_once __DIR__ . '/vendor/autoload.php';
 
$mpdf=new mPDF();
$mpdf->SetImportUse();
$pagecount = $mpdf->SetSourceFile('reportnew.pdf');
$tplId = $mpdf->ImportPage(1);
$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->Output();
 
?>
