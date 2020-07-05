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
<TITLE>Q-Shule P10 Form</TITLE>
<script src="js/functions.js"></script>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<BODY>

<div style="width:800px;min-height:260px; border:2px solid #333; font-family:'times new roman'">
<p style="text-align:LEFT;font-size:15px; font-weight:bold;margin:10px 0 0 20px">P10</p>
<img src="images/kralogo2.jpg" style="max-height:85px; margin:0px 10px 0 250px; position:relative;"/>
<div style="clear:both"></div>
<p style="text-align:center;font-size:17px; font-weight:bold;margin:0 0 0 0px">Income Tax Department</p>
<p style="text-align:right;font-size:17px; font-weight:bold;margin:0 20px 0 0px">EMPLOYER'S PIN</p>
<div style="clear:both; margin-bottom:10px" ></div>
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
<div style="clear:both; margin-bottom:10px"></div>
<p style="text-align:center;font-size:17px; font-weight:bold;margin:0 0 0 0px">P.A.Y.E-EMPLOYER'S CERTIFICATE<BR/>
YEAR <a style="border-bottom:1px dotted #000"><?php echo $year ?></a></p>
<div style="clear:both; margin-bottom:10px"></div>
<p style="text-align:left;font-size:17px; font-weight:normal;margin:0 0 0 20px">
<b>To Senior Assistant Commissioner</b><br/><br/>
.........................................<br/><br/>
We/I forward herewith..........................Tax Deduction Cards (P9A/P9B) showing the total tax deducted (as listed
on P.10A) amounting to Kshs...........................<br/>
This total tax has been paid as follows:-</p>
<div style="clear:both; margin-bottom:10px"></div>

<div style="width:auto; height:60px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:60px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px">MONTH</p>
</div>
<div style="width:150px; height:60px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px">PAYE TAX<br/>KSHS.</p>
</div>
<div style="width:150px; height:60px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px">AUDIT TAX,<BR/>INTEREST/PENALTY<BR/>
KSHS.</p>
</div>
<div style="width:150px; height:60px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px">FRINGE BENEFIT TAX<BR/>
KSHS.</p>
</div>
<div>
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px">DATE PAID PER<BR/>RECEIVING BANK</p>
</div>
</div>
<?php
$resultb =mysql_query("select * from salregister where month like '%".$year."%' order by month asc");
$num_resultsb = mysql_num_rows($resultb); $a=0;
for ($i=0; $i <$num_resultsb; $i++) {
  $rowb=mysql_fetch_array($resultb);;
  $mon=substr(stripslashes($rowb['month']),0,2);
  $a+=stripslashes($rowb['tax']) ;

  switch($mon){
      case '01':
      $month='January';
      break;
      case '02':
      $month='February';
      break;
      case '03':
      $month='March';
      break;
      case '04':
      $month='April';
      break;
      case '05':
      $month='May';
      break;
      case '06':
      $month='June';
      break;
      case '07':
      $month='July';
      break;
      case '08':
      $month='August';
      break;
      case '09':
      $month='September';
      break;
      case '10':
      $month='October';
      break;
      case '11':
      $month='November';
      break;
      case '12':
      $month='December';
      break;
    }

?>
<div style="width:auto; height:20px; border:1.5px solid #333;border-top:0;width:auto;margin:0 20px">
<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center; font-weight:normal;font-size:14px;margin:0 0 0 4px">
<?php  echo $month ?></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-weight:normal;font-size:14px; margin:0 0 0 0px"><?php  echo stripslashes($rowb['tax']) ?></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-weight:normal;font-size:14px; margin:0 0 0 0px"></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-weight:normal;font-size:14px; margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:14px;font-weight:normal; margin:0 0 0 0px"></p>
</div>
</div>
<?php } ?>

<div style="clear:both;"></div>
<div style="width:auto; height:20px; border:1.5px solid #333; background:#fff;margin:0 20px">
<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 40px">TOTAL TAX KSHS</p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 5px"><?php  echo $a ?></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px"></p>
</div>
<div style="width:150px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#000;text-align:center;font-size:14px; font-weight:bold;margin:0 0 0 0px"></p>
</div>
</div>
<div style="clear:both; margin-bottom:10px"></div>
<p style="color:#000;text-align:left;font-size:17px; font-weight:normal;margin:0 20px 0 20px"><b><u>NOTE:</u></b><br/>
(1). Attach Photostat copies of ALL the Pay-In Credit Slips (P11s) for the year<br/>
(4). Complete this certificate in triplicate sending the top two copies with the enclosures to your <b><u>Income
Tax Office not later than 28TH FEBRUARY.</u></b><br/>
(5). Provide Statistical information required by Central Bureau of Statistics.</p>
<div style="clear:both; margin-bottom:10px"></div>
<p style="color:#000;text-align:left;font-size:15px; font-weight:normal;margin:0 20px 0 20px">We/I certify that the particulars entered above are correct.<br/><br/>
<b>NAME OF EMPLOYER........................................................................................................................<br/>
ADDRESS.................................................................................................................................................<br/>
SIGNATURE............................................................................................................................................<br/>
DATE........................................................................................................................................................</b>
</p>
<div style="clear:both; margin-bottom:20px"></div>
</div>
</BODY>
</META>
</HTML>