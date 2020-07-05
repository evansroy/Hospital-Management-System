<?php include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysql_query("select * from users where name='".$username."'");
$row=mysql_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$fullname=stripslashes($row['fullname']);
$userdep=stripslashes($row['dept']);
$year=$_GET['year'];

$result =mysql_query("select * from company");
$rowx=mysql_fetch_array($result);
$comname=stripslashes($rowx['CompanyName']);
$compin=stripslashes($rowx['Pin']);

}
else{echo"<script>window.location.href = \"index.php\";</script>";}
?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>Q-Shule P10A Form</TITLE>
<script src="js/functions.js"></script>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<BODY>

<div style="width:800px;min-height:960px; border:2px solid #333; font-family:'times new roman'">
<p style="text-align:LEFT;font-size:15px; font-weight:bold;margin:10px 0 0 20px">P10A</p>
<img src="images/kralogo2.jpg" style="max-height:85px; margin:0px 10px 0 250px; position:relative;"/>
<div style="clear:both"></div>
<p style="text-align:center;font-size:17px; font-weight:bold;margin:0 0 0 0px">Income Tax Department</p>


<div style="clear:both; margin-bottom:10px"></div>
<p style="text-align:center;font-size:17px; font-weight:bold;margin:0 0 0 0px">P.A.Y.E SUPPORTING LIST FOR END OF YEAR CERTIFICATE: YEAR <a style="border-bottom:1px dotted #000"><?php echo $year ?></a></p>
<div style="clear:both; margin-bottom:10px" ></div>
<p style="text-align:right;font-size:17px; font-weight:bold;margin:0 20px 0 0px">PIN</p>
<div style="width:230px;float:right;border:0px solid #000;padding:0;border-right:0">
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,0,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,1,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,2,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,3,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,4,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,5,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,6,1) ?></p>
<p style="border:1px solid #000;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,7,1) ?></p>
<p style="border:1px solid #000;border-right:0;border-right:0;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,8,1) ?></p>
<p style="border:1px solid #000;border-right:0;border-right:0;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,9,1) ?></p>
<p style="border:1px solid #000;float:left;padding:2px 5px;margin:0"><?php echo substr($compin,10,1) ?></p>
</div>
<div style="clear:both; margin-bottom:20px" ></div>
<p style="text-align:left;font-size:17px; font-weight:normal;margin:0 0 0 20px"><b>EMPLOYER'S NAME: </b><a style="border-bottom:1px dotted #000"><?php echo $comname ?></a></p>
<div style="clear:both; margin-bottom:10px"></div>

<div style="width:auto; height:60px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:60px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px">EMPLOYEE'S PIN</p>
</div>
<div style="width:300px; height:60px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">EMPLOYEE'S NAME</p>
</div>
<div style="width:150px; height:60px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px">TOTAL EMOLUMENTS<BR/>
KSHS.</p>
</div>
<div>
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px">PAYE DEDUCTED<BR/>
KSHS.</p>
</div>
</div>
<?php
$resulta =mysql_query("select * from employee where status=1 order by emp asc");
$num_resultsa = mysql_num_rows($resulta);
$xx=$yy=0;
for ($a=0; $a <$num_resultsa; $a++) {
   $rowa=mysql_fetch_array($resulta);
   $emp=stripslashes($rowa['emp']);

$resultb =mysql_query("select * from payroll where month like '%".$year."%' and emp='".$emp."' order by serial asc");
$num_resultsb = mysql_num_rows($resultb); $totpay=$tottax=0;
for ($i=0; $i <$num_resultsb; $i++) {
  $rowb=mysql_fetch_array($resultb);
   $totpay+=stripslashes($rowb['sal']) ;
   $tottax+=stripslashes($rowb['tax']) ;

 }

 $xx+=$totpay;
 $yy+=$tottax;

?>
<div style="width:auto; height:20px; border:1.5px solid #333;border-top:0;width:auto;margin:0 20px">
<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center; font-weight:normal;font-size:14px;margin:0 0 0 4px">
<?php  echo stripslashes($rowa['pinno']) ?></p>
</div>
<div style="width:300px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-weight:normal;font-size:14px; margin:0 0 0 0px"><?php  echo stripslashes($rowb['name']) ?></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-weight:normal;font-size:14px; margin:0 0 0 0px"><?php  echo $totpay ?></p>
</div>
<div>
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"><?php  echo $tottax ?></p>
</div>
</div>
<?php 

}
?>

<div style="clear:both;"></div>
<div style="width:auto; height:20px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px"></p>
</div>
<div style="width:300px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">TOTAL EMOLUMENTS</p>
</div>

<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px"><?php  echo $xx ?></p>
</div>
<div style="">
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"></p>
</div>
</div>
<div style="clear:both;"></div>
<div style="width:auto; height:40px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:40px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px"></p>
</div>
<div style="width:300px; height:40px;border-right:1.5px solid #333; float:left;">

<div style="width:300px; height:20px;border-right:1.5px solid #333; float:left;border-bottom:1px solid #000">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">TOTAL PAYE TAX</p>
</div>
<div style="width:300px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">TOTAL WCPS</p>
</div>
</div>

<div style="width:150px; height:40px;border-right:1.5px solid #333; float:left;background:#ccc">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px"><?php  echo $yy ?></p>
</div>
<div style="">
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"></p>
</div>
</div>
<div style="clear:both;"></div>
<div style="width:auto; height:40px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:40px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px"></p>
</div>
<div style="width:451px; height:40px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">*TAX ON LUMPSUM/AUDIT/INTEREST/PENALTY</p>
</div>
<div style="">
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"></p>
</div>
</div>
<div style="clear:both;"></div>
<div style="width:auto; height:40px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:40px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px"></p>
</div>
<div style="width:451px; height:40px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">*TOTAL TAX DEDUCTED/TOTAL C/F TO NEXT LIST</p>
</div>
<div style="">
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"></p>
</div>
</div>
<div style="clear:both;"></div>
<p style="color:#000;text-align:left;font-size:14px; font-weight:bold;margin:0 0 0 20px">*DELETE AS APPROPRIATE</p>

<div style="clear:both;"></div>
<div style="clear:both; margin-bottom:10px"></div>
<p style="color:#000;text-align:left;font-size:15px; font-weight:normal;margin:0 20px 0 20px"><b><u>NOTE TO EMPLOYER:</u></b>
ATTACH TWO COPIES OF THIS LIST TO END OF YEAR CERTIFICATE (P10)</p>
<div style="clear:both; margin-bottom:20px"></div>
</div>
</BODY>
</META>
</HTML>