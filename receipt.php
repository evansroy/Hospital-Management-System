<?php include('db_fns.php');
include('functions.php');
$ser=$_GET['ser'];
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
}
else{echo"<script>window.location.href = \"index.php\";</script>";}
$username=$_SESSION['valid_user'];
$resultx =mysql_query("select * from receipts where serial='".$ser."'");
$rowx=mysql_fetch_array($resultx);
$name=stripslashes($rowx['tname']);
$hname=stripslashes($rowx['hname']);
$rno=stripslashes($rowx['rno']);
$amount=stripslashes($rowx['amount']);
$desc=stripslashes($rowx['description']);
$date=stripslashes($rowx['date']);
$mon=stripslashes($rowx['month']);
$bal=stripslashes($rowx['bal']);

$result =mysql_query("select * from company");
$row=mysql_fetch_array($result);
$comname=stripslashes($row['CompanyName']);
$tel=stripslashes($row['Tel']);
$Add=stripslashes($row['Address']);
$web=stripslashes($row['Website']);
$email=stripslashes($row['Email']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Q-Kodi Receipts</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<script src="js/functions.js"></script>
</head>

<body>
<div style="width:740px; height:400px; border:2px solid #333">
 <div id="right" style="float:left;">
 <img src="images/clogo.jpg" style="float:left;width:125px; height:100px; margin:5px"/>
<div style="float:left;margin-left:10px; width:450px">
<p style="text-align:center;font-size:18px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O BOX <?php  echo $Add ?></br>TEL: <?php  echo $tel ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL RECEIPT<br/><strong style="font-size:12px">Date:<?php  echo dateprint($date )?>&nbsp; &nbsp; &nbsp; Receipt No: <?php  echo $ser ?></strong></p>
<div style="clear:both"></div>
</div>
</div>


<div style="clear:both; border-top:2px dotted #333"></div>
<a style="float:left;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:20px 0 0 20px"><STRONG>Received From: </STRONG><?php  echo $name ?>  <br/><strong>House Name:</strong> <?php  echo $hname ?>  <br/><strong>Apartment NO:</strong><?php  echo $rno ?>
<br/><STRONG>Amount: </STRONG><script>document.writeln(( <?php  echo $amount ?>).formatMoney(2, '.', ','));
</script> <br/> <strong>Sum in words:</strong><script>document.writeln(toWords(<?php echo $amount?>));</script>Kenya shillings only.
<br/><STRONG>Being Payment for: </STRONG>  <?php  echo $desc ?><br/><STRONG>Balance: </STRONG>  <script>document.writeln(( <?php  echo $bal ?>).formatMoney(2, '.', ','));
</script></a>
<div style="clear:both;"></div>
<div style="width:100px; height:40px; border:1px solid #333; border-radius:5px; margin:0px 20px 0 0 ; float:right">
<a style="float:left;font-size:15px; font-weight:bold; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:10px 10px 0 5px"><script>document.writeln(( <?php  echo $amount ?>).formatMoney(2, '.', ','));</script></a></div>
<div style="clear:both;"></div>
<a style="float:right;font-size:15px; font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5px 20px 0 20px"><STRONG>Received By: </STRONG> <?php  echo $username ?></a>
</div>
									
</body>
</html>