<?php include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysql_query("select * from users where name='".$username."'");
$row=mysql_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$fullname=stripslashes($row['fullname']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}

?>
<?php
$id=$_GET['id'];
if(isset($_GET['rcptno'])){
$rcptno=$_GET['rcptno'];}
$result =mysql_query("select * from company");
$row=mysql_fetch_array($result);
$comname=strtoupper(stripslashes($row['CompanyName']));
$tel=stripslashes($row['Tel']);
$Add=stripslashes($row['Address']);
$web=stripslashes($row['Website']);
$email=stripslashes($row['Email']);
$logo=stripslashes($row['Logo']);
switch($id){
	case 1:
	$title='Q-Afya Payroll Bank Summary';
	break;
	case 2:
	$title='Q-Afya Individual Payroll Bank Summary';
	break;
	
	
	case 15:
	$title='Q-Afya Monthly Payroll Report';
	break;
	
	
	case 16:
	$title='Q-Afya Salaries Summary';
	break;
	
	case 17:
	$title='Q-Afya Individual Payroll Summary';
	break;
	
	case 18:
	$title='Q-Afya Pay Slips';
	break;
	
	
	case 19:
	$title='Q-Afya Employee Attendance Reports';
	break;
	
	
	case 20:
	$title='Q-Afya Leave Reports';
	break;
	
	case 21:
	$title='Q-Afya Employees List';
	break;
	
	

	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>
<title><?php echo $title ?></title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/chart.js"></script>
<script src="js/functions.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<script type="text/javascript" src="js/connectcode-javascript-code39.js"></script>
<script src="js/excellentexport.js"></script>
<style>
p{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:12px; }
#title{position:relative; float:left;width:auto; background:#333; border:0px solid #ccc;font-size:10px}
#figure1{position:relative; float:left;width:141.0px; margin-right:2px; padding:5px; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:13px; color:#0085b2;  background:#333; text-align:center}
.figure2x,#figure2x,.figure2x,#figure2{position:relative; float:left;width:141.7px; border-right:1px solid #333; border-bottom:1px solid #333; margin:0; padding:5px; font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:13px; color:#333;  background:none; text-align:center;min-height:16px}
.cleaner { clear: both; width: 100%; height: 0px; font-size: 0px;  }
.cleaner_h5 { clear: both; width:100%; height: 5px; }
.cleaner_h10 { clear: both; width:100%; height: 10px; }
.normal,#normal{position:relative; float:left;width:auto; background:#f0f0f0; border-left:1px solid #333; cursor:pointer}
.normal:hover,#normal:hover{background:#C0E4E7}
.put_field{font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif; font-size:12px; text-align:center}
</style>
</head>

<body style="background:" id="body"> 

<?php 
switch($id){
case 1:
$reg=$_GET['reg'];

?>
<div style="width:740px;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL PAYROLL BANK SUMMARY<br/><strong style="font-size:11px">Month:<?php  echo $reg ?></strong><br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Bank</p>
</div>
<div style="width:90px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">Emp.ID</p>
</div>
<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Employee Name</p>
</div>
<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Department</p>
</div>
<div>
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Amount</p>
</div>
</div>
<?php
$result =mysql_query("select * from payroll where month='".$reg."' order by bname");
						$totalnet=0;$totaltax=0;
						$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
								$totalnet+=stripslashes($row['net']);
								
							
							if(stripslashes($row['status'])==0){
							echo"<script>
							$('#body').hide();
										$().customAlert();
									alert('Error!', '<p>Cannot Preview Payroll.Details of ".stripslashes($row['name'])." have not been saved yet!</p>');
									e.preventDefault();
									</script>";	
								exit;	
							}

							$resultx =mysql_query("select * from employee where emp='".stripslashes($row['emp'])."' limit 0,1");
									$rowx=mysql_fetch_array($resultx);
if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>

<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px;font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">
<?php  echo stripslashes($row['bname']) ?></p>
</div>
<div style="width:90px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($rowx['pfno']) ?></p>
</div>
<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['name']) ?></p>
</div>
<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['dept']) ?></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>
<?php
$arr=array();
$result =mysql_query("select * from payroll where month='".$reg."'");
$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
								$arr[stripslashes($row['bid'])]=stripslashes($row['bname']);
							}
$pro=array();							
foreach ($arr as $key => $val) {
	$tot=0;
	$result =mysql_query("select * from payroll where month='".$reg."' and bid='".$key."'");
	$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
							$tot+=stripslashes($row['net']);
							}
		$pro[$val]=stripslashes($tot);			
}

?>
<div style="clear:both; margin-bottom:20px"></div>
<div style="float:left">
<div style="clear:both; margin-bottom:0px; border-bottom:1px dashed #333"></div>
<p style="text-align:left;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 10px 0 10px">General Summary</p>
<div style="clear:both; margin-bottom:5px; border-bottom:1px dashed #333"></div>
<?php
foreach ($pro as $key => $val) {
echo"<p style=\"text-align:left;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 10px\">".$key.": <script>document.writeln((".$val.").formatMoney(2, '.', ','));</script></p>";	
}
?>
<div style="clear:both; margin-bottom:0px; border-bottom:1px dashed #333"></div>
<p style="text-align:left;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 10px">Total: <script>document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));</script></p>
</div>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;
case 2:
$mon=$_GET['mon'];
$bank=$_GET['bank'];
$result =mysql_query("select * from banktbl where id='".$bank."'");
$row=mysql_fetch_array($result);
$bname=stripslashes($row['name']);
?>
<div style="width:740px;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL INDIVIDUAL PAYROLL BANK SUMMARY<br/><strong style="font-size:11px">Month:<?php  echo $mon ?></strong><br/><strong style="font-size:11px">Bank:<?php  echo $bname ?></strong><br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:100px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">PF No.</p>
</div>
<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Employee Name</p>
</div>
<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Department</p>
</div>
<div>
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Amount</p>
</div>
</div>
<?php
$result =mysql_query("select * from payroll where month='".$mon."' and bid='".$bank."' order by name");
						$totalnet=0;$totaltax=0;
						$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
								$totalnet+=stripslashes($row['net']);
								
							
							if(stripslashes($row['status'])==0){
							echo"<script>
							$('#body').hide();
										$().customAlert();
									alert('Error!', '<p>Cannot Preview Payroll.Details of ".stripslashes($row['name'])." have not been saved yet!</p>');
									e.preventDefault();
									</script>";	
								exit;	
							}


							$resultx =mysql_query("select * from employee where emp='".stripslashes($row['emp'])."' limit 0,1");
									$rowx=mysql_fetch_array($resultx);
								
if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>


<div style="width:100px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($rowx['pfno']) ?></p>
</div>
<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['name']) ?></p>
</div>
<div style="width:200px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['dept']) ?></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>

<div style="clear:both; margin-bottom:20px"></div>
<div style="float:left">
<div style="clear:both; margin-bottom:0px; border-bottom:1px dashed #333"></div>
<p style="text-align:left;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 10px">Total: <script>document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));</script></p>
<div style="clear:both; margin-bottom:0px; border-bottom:1px dashed #333"></div>
</div>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;




case 15:
$reg=$_GET['reg'];

?>
<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL MONTHLY PAYROLL REPORT<br/><strong style="font-size:11px">Month:<?php  echo $reg ?></strong><br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">PF No</p>
</div>
<div style="width:25%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">Name</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sal</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Allow</p>
</div>


<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Overtime</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NSSF</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Tax</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NHIF</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Advance</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sacco</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Welfare</p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Kitchen</p>
</div>

<div  style="width:8%;float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Net</p>
</div>
</div>
<?php
$result =mysql_query("select * from payroll where month='".$reg."'");
$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;$totalkitchen=0;
$totalscont=0;$totalsloan=0;
						$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
							$emp=stripslashes($row['emp']);
								$net=stripslashes($row['net']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['sacco']);
								$ded=stripslashes($row['welfare']);
								$kitchen=stripslashes($row['kitchen']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalnet+=$net;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
								$totalkitchen+=$kitchen;

									$resultx =mysql_query("select * from employee where emp='".$emp."' limit 0,1");
									$rowx=mysql_fetch_array($resultx);
									$pfno=stripslashes($rowx['pfno']);
							
				
if($i%2==0){
	echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>

<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px;font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">
<?php  echo $pfno ?></p>
</div>
<div style="width:25%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['name']) ?></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sacco']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['welfare']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['kitchen']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div  style="width:8%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333; background:#333; color:#fff">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">

</div>
<div style="width:25%; height:20px;border-right:1.5px solid #333; float:left;">

</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalsal?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalkitchen ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div  style="width:8%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;


case 16:

?>
<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL SALARIES SUMMARY<br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Month</p>
</div>

<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sal</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Allow</p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Overtime</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NSSF</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Tax</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NHIF</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Advance</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sacco</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Welfare</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Kitchen</p>
</div>
<div  style="width:12%;float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Net</p>
</div>
</div>
<?php
	$result =mysql_query("select * from salregister");
$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;$totalkitchen=0;
$totalscont=0;$totalsloan=0;
						$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
								$net=stripslashes($row['amount']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['sacco']);
								$ded=stripslashes($row['welfare']);
								$kitchen=stripslashes($row['kitchen']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalnet+=$net;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
								$totalkitchen+=$kitchen;
								
				
if($i%2==0){
	echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>

<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px;font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">
<?php  echo stripslashes($row['month']) ?></p>
</div>

<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sacco']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['welfare']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['kitchen']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div  style="width:12%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['amount']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333; background:#333; color:#fff">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Totals</p>
</div>
<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalsal?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalkitchen ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div  style="width:10%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;

case 17:
$reg=$_GET['reg'];
$result =mysql_query("select * from payroll where emp='".$reg."' order by serial desc limit 0,1");
$row=mysql_fetch_array($result);
$names=stripslashes($row['name']);
?>
<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL INDIVIDUAL PAYROLL SUMMARY<br/><strong style="font-size:11px"><?php  echo $names ?></strong><br/><strong style="font-size:11px">PF No:<?php  echo $reg ?></strong><br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Month</p>
</div>

<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sal</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Allow</p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Overtime</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NSSF</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Tax</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NHIF</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Advance</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sacco</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Welfare</p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Kitchen</p>
</div>
<div  style="width:16%;float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Net</p>
</div>
</div>
<?php
	$result =mysql_query("select * from payroll where emp='".$reg."'");
$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;$totalkitchen=0;
$totalscont=0;$totalsloan=0;
						$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
								$net=stripslashes($row['net']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['sacco']);
								$ded=stripslashes($row['welfare']);
								$kitchen=stripslashes($row['kitchen']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalnet+=$net;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
								$totalkitchen+=$kitchen;
								
				
if($i%2==0){
	echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>

<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px;font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">
<?php  echo stripslashes($row['month']) ?></p>
</div>

<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['sacco']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['welfare']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['kitchen']) ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div  style="width:16%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333; background:#333; color:#fff">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Totals</p>
</div>

<div style="width:12%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalsal?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));</script></p>
</div>

<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="width:6%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalkitchen ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div  style="width:16%;float:left;">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;

case 18:

function payslp($result){
$row=mysql_fetch_array($result);
$date=date('d/m/Y');
$result =mysql_query("select * from company");
$rowx=mysql_fetch_array($result);
$comname=stripslashes($rowx['CompanyName']);
$tel=stripslashes($rowx['Tel']);
$Add=stripslashes($rowx['Address']);
$web=stripslashes($rowx['Website']);
$email=stripslashes($rowx['Email']);
$logo=stripslashes($rowx['Logo']);
$emp=stripslashes($row['emp']);

$resultx =mysql_query("select * from employee where emp='".$emp."' limit 0,1");
$rowx=mysql_fetch_array($resultx);
$pfno=stripslashes($rowx['pfno']);
?>
<div id="container" style="width:740PX;min-height:800px; border:2px solid #333; float:left; position:relative; margin-bottom:20px">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:18px; font-weight:bold;font-family:'Courier New', Courier, monospace;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Courier New', Courier, monospace;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Courier New', Courier, monospace;margin:0 0 0 0px">EMPLOYEE PAYSLIP No.<br/><strong style="font-size:12px">MONTH:</strong><?php  echo stripslashes($row['month']) ?><br/></p>
<div style="clear:both; margin-bottom:10px"></div>

<div style="clear:both; height:10px; border-top:2px solid #333; width:auto; padding:0 10px"></div>
<div style="width:auto; padding:0px 5px">
<p style="font-size:12px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin-top:0px; text-align:center">
<strong>Name: </strong><?php echo stripslashes($row['name']) ?>
<strong style="margin-left:100px">PF NO: </strong><?php echo $pfno ?>
<strong style="margin-left:100px">Dept: </strong><?php echo stripslashes($row['dept']) ?><BR/>
<strong style="margin-left:100px">Date: </strong><?php echo $date ?></p>
</div>
<div style="clear:both"/>
<div style="width:auto; height:20px; border-bottom:2px solid #333;  border-top:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Description</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Deductions</p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Earnings</p>
</div>
</div>
<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">Basic Salary</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>

<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Allowance</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Overtime</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NSSF</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>

<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">PAYE</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>

<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">NHIF</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>



<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Advances</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>
<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Sacco</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['sacco']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>

<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Welfare</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['welfare']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>

<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Kitchen</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php echo stripslashes($row['kitchen']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
</div>



<div style="width:auto; height:20px; border-bottom:2px solid #333">
<div style="width:40%; height:20px;border-right:2px solid #333; float:left">
<?php
$a= stripslashes($row['sal']) + stripslashes($row['allow']) + stripslashes($row['totalot']);
$b= stripslashes($row['adva']) + stripslashes($row['sacco']) + stripslashes($row['welfare'])  + stripslashes($row['kitchen'])  +  stripslashes($row['tax'])  + stripslashes($row['nhif'])  + stripslashes($row['nssf']);?>

<p style="text-align:center;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px; font-weight:bold">Total</p>
</div>
<div style="width:30%; height:20px;border-right:2px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px; font-weight:bold"><script>document.writeln(( <?php echo $b ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px; font-weight:bold"><script>document.writeln(( <?php echo $a ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>

<div style="clear:both; height:20px"></div>
<p style="text-align:center; font-size:17px; font-weight:bold; font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">Net Pay:<script>document.writeln(( <?php echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));</script></p>


</div>
</div>
<?php

}
$code=$_GET['code'];
$mon=$_GET['mon'];
	if($code==1){
	$emp=$_GET['emp'];
	$result =mysql_query("select * from payroll where month='".$mon."' and emp='".$emp."'");
	payslp($result);
	}
	else{
		$query =mysql_query("select * from  payroll where month='".$mon."'");
	$count = mysql_num_rows($query);
	for ($i=0; $i <$count; $i++) {
	$row=mysql_fetch_array($query);
	$emp=stripslashes($row['emp']);
	$result =mysql_query("select * from  payroll where month='".$mon."' and emp='".$emp."'");
	payslp($result);
}
	}

break;


case 19:
$mon=$_GET['mon'];
$branch=$_GET['branch'];

?>
<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL EMPLOYEE ATTENDANCE REPORT<br/><strong style="font-size:11px">Month:<?php  echo $mon ?></strong><br/><strong style="font-size:11px">Branch:<?php  echo $branch ?></strong><br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">PF No</p>
</div>
<div style="width:20%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Employee Name</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">01</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">02</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">03</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">04</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">05</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">06</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">07</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">08</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">09</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">10</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">11</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">12</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">13</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">14</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">15</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">16</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">17</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">18</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">19</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">20</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">21</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">22</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">23</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">24</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">25</p>
</div><div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">26</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">27</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">28</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">29</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">30</p>
</div>
<div style="width:2%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">31</p>
</div>
<div style="float:left; width:10%">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Total</p>
</div>
</div>
<?php
if($branch=='All'){
	$result =mysql_query("select * from  ".$mon." order by branch,pfno");
}else{
$result =mysql_query("select * from  ".$mon." where branch='".$branch."' order by pfno");	
}

					$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
							$total=0;
						
if($i%2==0){
	echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>


<div style="width:5%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['pfno']) ?></p>
</div>
<div style="width:20%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['names']) ?></p>
</div>
<?php
for($a=1;$a<32;$a++){
$d=sprintf("%02d",$a);
$d=$d.'c';
if(stripslashes($row[$d])==1||stripslashes($row[$d])==2||stripslashes($row[$d])==3){
$total+=1;
echo"<div style=\"width:2%; height:20px;border-right:1.5px solid #333; float:left;\"><img src=\"images/ticker.png\" style=\"width:18px; height:18px\"/></div>";
}
elseif(stripslashes($row[$d])==0){
echo"<div style=\"width:2%; height:20px;border-right:1.5px solid #333; float:left;\"><img src=\"images/delete.png\" style=\"width:18px; height:18px\"/></div>";
}
else{
echo"<div style=\"width:2%; height:20px;border-right:1.5px solid #333; float:left;\"><img src=\"images/delete.png\" style=\"width:18px; height:18px\"/></div>";	
}
}
?>
<div style="width:10%; float:left">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $total ?></p>
</div>
</div>
<?php } ?>



<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;

case 20:
$code=$_GET['code'];
if(isset($_GET['d1'])){
	$d1=$_GET['d1'];
}else $d1=0;
if(isset($_GET['d2'])){
	$d2=$_GET['d2'];
}else $d2=0;
?>
<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL EMPLOYEE LEAVE REPORT<br/><strong style="font-size:11px">Date:<?php  echo date('d/m/Y') ?></strong></p>
<?php if($d1!=0){?>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">From:&nbsp;&nbsp;<?php  echo $d1 ?>&nbsp;&nbsp;To:&nbsp;<?php  echo  $d2 ?></p>
<?php } else {?>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Summary  Report</p>
<?php } ?>
<?php $d1=preg_replace('~/~', '', $d1); $d2=preg_replace('~/~', '', $d2);?>
<div style="clear:both; margin-bottom:10px" ></div>


<div style="clear:both; margin-bottom:10px"></div>
<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">PF No.</p>
</div>
<div style="width:30%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Employee Name</p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Branch</p>
</div>

<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Position</p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Commence Date</p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">End Date</p>
</div>
<div style="width:7%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">No. Of Days</p>
</div>
<div style="float:left; width:12%">
<p style="color:#0085b2;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Shadow</p>
</div>
</div>
<?php
if($code==1){
	$result =mysql_query("select * from leaves  order by stamp asc");
}else{
$result =mysql_query("select * from leaves where status=2 and  ((commstamp>='".$d1."' and commstamp<='".$d2."')OR(endstamp>='".$d1."' and endstamp<='".$d2."')) order by stamp asc");
}
							$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);

							$resultx =mysql_query("select * from employee where emp='".stripslashes($row['emp'])."' limit 0,1");
									$rowx=mysql_fetch_array($resultx);
						
if($i%2==0){
	echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'"">';
	}else{
		echo'<div style="width:100%; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
	}
?>


<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($rowx['pfno']) ?></p>
</div>
<div style="width:30%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['name']) ?></p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['branch']) ?></p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['position']) ?></p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo dateprint(stripslashes($row['commencedate'])) ?></p>
</div>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo dateprint(stripslashes($row['enddate'])) ?></p>
</div>

<div style="width:7%; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['days']) ?></p>
</div>
<div style="width:12%; float:left">
<p style="text-align:center;font-size:11px; font-weight:normal;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['shadow']) ?></p>
</div>
</div>
<?php } ?>


<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report pulled By <?php  echo $username ?>.</p>
</div>
<?php 
break;

case 21:
$reg=$_GET['reg'];
$date=date('Y/m/d');
$stamp=date('Ymd');
?>

<div style="width:100%;min-height:260px; border:2px solid #333">
<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O Box <?php  echo $Add ?><br/>Tel: <?php  echo $tel ?>
<br/>Website: <?php  echo $web ?><br/>Email: <?php  echo $email ?></p><div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">EMPLOYEES LIST<br/><strong style="font-size:12px">Date:<?php  echo dateprint($date) ?></strong></p>
<div style="clear:both"></div>

<div style="clear:both; margin-bottom:10px"></div>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">

<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">PF No</p>
</div>
<div style="width:27%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Name</p>
</div>
<div style="width:17%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Position</p>
</div>
<div style="width:14%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Phone No</p>
</div>
<div style="width:14%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Attendance</p>
</div>
<div style="float:left; width:17%">
<p style="color:#0085b2;text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Salary</p>
</div>
</div>
<?php
	if($reg==2){
		$result =mysql_query("select * from employee");
	}else{
		$result =mysql_query("select * from employee where status=".$reg."");
	}
	
	$num_results = mysql_num_rows($result);
	for ($i=0; $i <$num_results; $i++) {
	$row=mysql_fetch_array($result);
	
	
	if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333; " id="normal'.$i.'">';
	}else{
		echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'">';
	}
	
	?>
<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden;">
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['pfno']) ?></p>
</div>
<div style="width:27%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['fname']).' '. stripslashes($row['mname']).' '. stripslashes($row['lname'])?></p>
</div>
<div style="width:17%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['position']) ?></p>
</div>
<div style="width:14%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['phone']) ?></p>
</div>
<div style="width:14%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
 <?php
		if(stripslashes($row['totattendance'])!=0){
        $a=stripslashes($row['attendance']) / stripslashes($row['totattendance']);
		$a=round($a,2)*100;
		$a=$a.'%';
		}else $a='0%';
		?>
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $a ?></p>
</div>
<div style="float:left; width:17%">
<p style="text-align:center; font-weight:normal;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['salary']) ?>).formatMoney(2, '.', ','));</script></p>
</div>

</div>
<?php
	}

?>
<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Thank You for your Partnership.</p>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Report Pulled By <?php  echo $username ?>.</p>

</div>
<?php 
break;

}



?>									
</body>
</html>