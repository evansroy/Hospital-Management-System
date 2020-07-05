<?php 
include('db_fns.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Q-Shule Notices</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script src="js/functions.js"></script>
</head>

<body>

<?php 
$id=$_GET['id'];
$date=date('d/m/Y');
if($id==5){
$regn=$_GET['regn'];
$resultx =mysql_query("select * from feebalance where regn='".$regn."'",$db1 );
$num_resultsb = mysql_num_rows($resultx);
if($num_resultsb<1){
echo'<script>notregistered();</script>';
exit;} 
}
else if($id==6){
$resultx =mysql_query("select * from feebalance where balance>0 and status=1",$db1 );
$num_resultsb = mysql_num_rows($resultx);
if($num_resultsb<1){
exit;}
}
else{
$resultx =mysql_query("select * from feebalance where (clas='".$id."A' or clas='".$id."B' or clas='".$id."C' or clas='".$id."D') and balance>=0 and status=1",$db1 );
$num_resultsb = mysql_num_rows($resultx);	
if($num_resultsb<1){
exit;}
}
function notice($name,$clas,$regn,$bal,$date){
	?>
<div style="width:740px; height:400px; border:2px solid #333;margin:70px 0 100px 0">
 <div id="right" style="float:left;">
     <img src="images/logoq.png" style="float:left;width:100px; height:100px; margin:5px"/>
<a style="float:left;font-size:30px; font-weight:bold; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:10px 40px 0 120px">Q-Shule High School</a><br/>
<a style="float:left;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:-5px 0 0 60px">P.O BOX 76809-00200 &nbsp; Tel:0727596626/0726738023</a>
<div style="clear:both;"></div>
<a style="float:left;font-size:20px; font-weight:BOLD; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:-5px 0 0 230px">FEES NOTIFICATION<strong style="font-size:15px"> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; Date: <?php  echo $date ?>&nbsp; &nbsp; &nbsp;</strong></a></div>
<div style="clear:both; border-top:2px dotted #333"></div>
<a style="float:left;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:20px 0 0 20px"><STRONG>Your son: </STRONG><?php  echo $name ?>  &nbsp;  &nbsp;&nbsp;  &nbsp; <strong>Regn No:</strong><?php  echo $regn ?> &nbsp; &nbsp;&nbsp;  &nbsp; <strong>Class:</strong><?php  echo $clas ?></a>
<a style="float:left;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:10px 0 0 20px"><STRONG>Has an outstanding balance of: </STRONG><script>document.writeln(( <?php  echo $bal ?>).formatMoney(2, '.', ','));
</script>  &nbsp;  &nbsp;&nbsp;  &nbsp;<div style="clear:both;"></div>
 <strong>Sum in words:</strong><script>document.writeln(toWords(<?php echo $bal?>));</script>Kenya shillings.</a>
<a style="float:left;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:10px 0 0 20px">The school will not accept personal cheques, money orders or cash to pay school fees. Students to come with Deposit slips or Bankers cheque only. All fees must be paid through school bank A/C No:0170156579476 Equity Bank. <br/>
<strong>NB: No student will be allowed without clearing all the fees</strong> </a>
<div style="clear:both;"></div>
</div>
<?php
}

for ($a=0; $a <$num_resultsb; $a++) {
$rowx=mysql_fetch_array($resultx);
$name=stripslashes($rowx['name']);
$clas=stripslashes($rowx['clas']);
$regn=stripslashes($rowx['regn']);
$bal=stripslashes($rowx['balance']);
notice($name,$clas,$regn,$bal,$date); 
}
?>
</body>
</html>