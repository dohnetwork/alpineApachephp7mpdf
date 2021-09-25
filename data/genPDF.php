<?php
 
//include('MPDF57/mpdf.php');
require_once __DIR__ . '/vendor/autoload.php';
$serverx 	= $_POST['server'];
$ax 	= $_POST['a'];
$bx 	= $_POST['b'];
$cx 	= $_POST['c'];
$dx 	= $_POST['d'];
$d1x 	= $_POST['d1'];
$ex 	= $_POST['e'];
//$name 	= $_POST['txtKeyword'];
$email 	= $_POST['email'];
$msg 	= $_POST['message'];
 
$html .= '
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<style>
.container{
    position: absolute;
 	top: 110mm;
	left: 20mm;
	bottom: 0mm; 
    font-family: "Garuda";
    font-size: 12pt;
}
p{
    text-align: justify;
}
h1{
    text-align: center;
}
</style>
<div style="position: absolute; top: 24mm;left: 139mm; bottom: 0mm;font-family: "Garuda"; ">
<tr>
<td>
'.$ax[0].'      '.$cx[0].'    '.$bx[0].'      '.$ex[0].'
</td>
</tr>
</div>
<div style="position: absolute; top: 114mm;left: 26mm; bottom: 0mm;font-family: "Garuda"; ">
<table border="1" width="95%" >
  
  <tr>
    <td>'.$serverx[0].'</td>
    <td>'.$ax[0].'</td>
    <td>'.$cx[0].'</td>	
<td>'.$bx[0].'</td>	
<td>'.$ex[0].'</td>	
<td>'.$dx[0].'</td>		
<td>'.$d1x[0].'</td>		
    
  </tr>
  <tr>
    <td>'.$serverx[1].'</td>
    <td>'.$ax[1].'</td>
<td>'.$cx[1].'</td>		
<td>'.$bx[1].'</td>	
<td>'.$ex[1].'</td>	
<td>'.$dx[1].'</td>		
    <td>'.$d1x[1].'</td>		
  </tr>
  <tr>
    <td>'.$serverx[2].'</td>
    <td>'.$ax[2].'</td>
	<td>'.$cx[2].'</td>	
<td>'.$bx[2].'</td>	
<td>'.$ex[2].'</td>	
<td>'.$dx[2].'</td>			
<td>'.$d1x[2].'</td>		    
  </tr>
  <tr>
    <td>'.$serverx[3].'</td>
    <td>'.$ax[3].'</td>
	<td>'.$cx[3].'</td>	
<td>'.$bx[3].'</td>	
<td>'.$ex[3].'</td>	
<td>'.$dx[3].'</td>		
<td>'.$d1x[3].'</td>			

  </tr>
  <tr>
    <td>'.$serverx[4].'</td>
    <td>'.$ax[4].'</td>
	<td>'.$cx[4].'</td>	
<td>'.$bx[4].'</td>	
<td>'.$ex[4].'</td>	
<td>'.$dx[4].'</td>			
<td>'.$d1x[4].'</td>		    
  </tr>
  <tr>
    <td>'.$serverx[5].'</td>
    <td>'.$ax[5].'</td>
	<td>'.$cx[5].'</td>	
<td>'.$bx[5].'</td>	
<td>'.$ex[5].'</td>	
<td>'.$dx[5].'</td>			
<td>'.$d1x[5].'</td>		    
  </tr>
  <tr>
    <td>'.$serverx[6].'</td>
    <td>'.$ax[6].'</td>
	<td>'.$cx[6].'</td>	
<td>'.$bx[6].'</td>	
<td>'.$ex[6].'</td>	
<td>'.$dx[6].'</td>			
<td>'.$d1x[6].'</td>		    
  </tr> 
 
</table>

</div> ';
 

 
$mpdf=new mPDF();
$mpdf->SetImportUse();
$pagecount = $mpdf->SetSourceFile('reportnew.pdf');
$tplId = $mpdf->ImportPage(1);
$mpdf->UseTemplate($tplId);

$mpdf->WriteHTML($html);
$mpdf->SetDisplayMode('fullpage');
 
$mpdf->Output();
 
?>
