<html>
<head>
<title>รายงานผลการปฏิบัติงานสำรองข้อมูลประจำวัน</title>
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
<form name="frmSearch" method="post" action="<?=$_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>เลือกเดือน 
        <select name="ddlSelect" id="ddlSelect">
          <option>- Select -</option>

          <option value="Jan" <?if($_POST["ddlSelect"]=="Jan"){echo"selected";}?>>   มกราคม   </option>
          <option value="Feb" <?if($_POST["ddlSelect"]=="Feb"){echo"selected";}?>>   กุมภาพันธ์   </option>
          <option value="Mar" <?if($_POST["ddlSelect"]=="Mar"){echo"selected";}?>>   มีนาคม   </option>
          <option value="Apr" <?if($_POST["ddlSelect"]=="Apr"){echo"selected";}?>>   เมษายน   </option>
          <option value="May" <?if($_POST["ddlSelect"]=="May"){echo"selected";}?>>   พฤษภาคม   </option>
          <option value="Jun" <?if($_POST["ddlSelect"]=="Jun"){echo"selected";}?>>   มิถุนายน   </option>
          <option value="Jul" <?if($_POST["ddlSelect"]=="Jul"){echo"selected";}?>>   กรกฏาคม   </option>
          <option value="Aug" <?if($_POST["ddlSelect"]=="Aug"){echo"selected";}?>>   สิงหาคม   </option>
          <option value="Sep" <?if($_POST["ddlSelect"]=="Sep"){echo"selected";}?>> กันยายน </option>
          <option value="Oct" <?if($_POST["ddlSelect"]=="Oct"){echo"selected";}?>> ตุลาคม   </option>
          <option value="Nov" <?if($_POST["ddlSelect"]=="Nov"){echo"selected";}?>>พฤศจิกายน </option>
          <option value="Dec" <?if($_POST["ddlSelect"]=="Dec"){echo"selected";}?>> ธันวาคม   </opt>
        </select>
       Key วันที่
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?=$_POST["txtKeyword"];?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>
<?

	$objConnect = mysql_connect("172.16.1.212","root","camel") or die("Error Connect to Database");
	$objDB = mysql_select_db("report");
	// Search By Name or Email
//	$strSQL = "SELECT * FROM month WHERE B = 'Aug' and C = '01' ";
      $strSQL = "select * from month ";
	  //'Aug' and  C  like '%1'  order by Server,d
//    $strSQL = "select * from month where B = 'Aug' and C = '18' order by server,d" ;
	if($_POST["ddlSelect"] != "" and  $_POST["txtKeyword"]  != '')
	{
//	  $strSQL .= " AND (".$_POST["ddlSelect"]." LIKE '%".$_POST["txtKeyword"]."%' ) ";
//	  $strSQL .= .$_POST["ddlSelect"]." LIKE '%".$_POST["txtKeyword"]."%' ";
	  $strSQL .= "where B = ('".$_POST["ddlSelect"]."') and C like '%".$_POST["txtKeyword"]."%' " ;
//	  $strSQL .= "('".$_POST["ddlSelect"]."' and C = '01' )" ;
//      $strSQL .= " 
	  $strSQL .= " Order by Server,d";
	}	


	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	?>
    <form id="myform" method="post" action="genPDF.php">	
	<table border="0" align="center">
	<table width="791" border="1">
	  <tr>
		<th width="100"> <div align="center">รายงานผลการสำรองข้อมูล (แบบ Manual)ประจำวัน <?=$_POST["txtKeyword"]?> เดือน <?=$_POST["ddlSelect"]?> 2564</div></th>
	  </tr>
	</table>


	<table width="791" border="1">
	  <tr>
		<th width="100"> <div align="center">เครื่องแม่ข่าย</div></th>
		<th width="91"> <div align="center">วัน</div></th>
		<th width="91"> <div align="center">วันที่ </div></th>
		<th width="98"> <div align="center">เดือน </div></th>
		<th width="97"> <div align="center">ปี</div></th>
		<th width="100"> <div align="center">เวลาเริ่ม</div></th>
		<th width="100"> <div align="center">เวลาสิ้นสุด</div></th>
		<th width="71"> <div align="center">Used </div></th>
	  </tr>
	<?
	$TempX = "";
	$TempY = "";
	$Sum = 0;
	while($objResult = mysql_fetch_array($objQuery))
	{

	?>
    <? if (($Sum % 2 ) == 0) { ?>
	  <tr>
        <td><input type="text" name="server[]" id="name" value="<?=$objResult["SERVER"];?>"  /></td>		
        <td><input type="text" name="a[]" id="a" value="<?=$objResult["A"];?>"  /></td>				
       <td><input type="text" name="c[]" id="c" value="<?=$objResult["C"];?>"  /></td>						
<td><input type="text" name="b[]" id="b" value="<?=$objResult["B"];?>"  /></td>								
<td><input type="text" name="e[]" id="e" value="<?=$objResult["E"];?>"  /></td>								
<td><input type="text" name="d[]" id="d" value="<?=$objResult["D"];?>"  /></td>						
         <?}else {?>
<td><input type="text" name="d1[]" id="d1" value="<?=$objResult["D"];?>"  /></td>								 
	
	    </tr>
         <? } ?> 

	<?
         $TempX = $objResult["SERVER"];
         $TempY = $objResult["D"];
		 $Sum = $Sum + 1 ;
	}
	?>
  <tr><td><input  type="submit" id="submitbtn" /> พิมพ์รายงาน</td> </tr>	
	</table>
	</form>
	<?
	mysql_close($objConnect);
?>
</body>
</html>
