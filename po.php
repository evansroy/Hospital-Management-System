<?php
include('db_fns.php');
$poid=$_GET['poid'];
$po='po'.$_GET['poid'];
$resulta =mysql_query("select * from poregister where po='".$po."'",$db1 );
$rowa=mysql_fetch_array($resulta);
$vid=stripslashes($rowa['vendor']);
$date=stripslashes($rowa['date']);
$resultb =mysql_query("select * from vendors where vendorid='".$vid."'",$db1 );
$rowb=mysql_fetch_array($resultb);
$vname=stripslashes($rowb['vendorname']);
$cname=stripslashes($rowb['company']);

?>
<script src="js/functions.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<title>Q-Shule Purchase Orders</title>
<style>
.story{font-size:15px; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0; padding:0}
</style>
</head>
<body>
<div id="container" style="width:700px;min-height:930px; border:2px solid #333">
<div style="width:auto; padding:10px; height:100px; ">
<img src="images/logoq.png" width="100" height="100" style="float:left"/>
							<div style="float:left; margin-left:100px">
							<h1 style="font-size:20px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0;padding:0">Q-SHULE HIGH SCHOOL</h1>
                            <div style="margin-left:50px">
							<a style="font-size:10px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0; padding:0">P.O BOX 812-00200<br/>
							NAIROBI<br/>
							TEL: 0726-738023/0727596626<br/>
							EMAIL: info@prince.co.ke<br/>
							off Kamiti Road, KahawaWest 44.<br/>
                            </a></div>
							</div>
</div>
<div style="clear:both; border-bottom:2px solid #333"></div>
<div style="padding:10px; width:auto;">
<h1 style="font-size:20px; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0;padding:0">
PURCHASE ORDER</h1>
<h1 style="font-size:15px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0;padding:0">
Vendor:<?php echo $vname ?> &nbsp  &nbsp Company: <?php echo $cname ?> &nbsp  &nbsp P.O No:<?php echo $poid ?> &nbsp  &nbsp
Date:<?php echo date('d/m/Y') ?> &nbsp  &nbsp &nbsp  &nbsp Date Required:<?php echo $date ?></h1>
<div style="clear:both; height:10px"></div>
<div style="width:auto; border:2px solid #333; min-height:400px;">
<div style="width:auto; height:25px; border-bottom:2px solid #333">
<div style="width:100px;float:left; height:25px; border-right:2px solid #333">
<p class="story">Product ID</p>
</div>
<div style="width:250px; float:left; height:25px; border-right:2px solid #333">
<p class="story">Product Name</p>
</div>
<div style="width:100px; float:left; height:25px; border-right:2px solid #333">
<p class="story">Quantity</p>
</div>
<div style="width:100px; float:left; height:25px; border-right:2px solid #333">
<p class="story">Price</p>
</div>
<div style="float:left;width:118px;height:25px;">
<p class="story">Totals</p>
</div>
</div>

<?php
$resultx =mysql_query("select * from ".$po."",$dy );
$num_resultsx = mysql_num_rows($resultx);
$tot=0;
for ($x=0; $x <$num_resultsx; $x++) {
$rowx=mysql_fetch_array($resultx);
$pid=stripslashes($rowx['prodid']);
$name=stripslashes($rowx['name']);
$quat=stripslashes($rowx['quantity']);
$price=stripslashes($rowx['price']);
$total=stripslashes($rowx['total']);
$tot+=$total;
echo'<div style="width:auto; height:25px; border-bottom:2px solid #333">
<div style="width:100px;float:left; height:25px; border-right:2px solid #333">
<p class="story">'.$pid.'</p>
</div>
<div style="width:250px; float:left; height:25px; border-right:2px solid #333">
<p class="story">'.$name.'</p>
</div>
<div style="width:100px; float:left; height:25px; border-right:2px solid #333">
<p class="story">'.$quat.'</p>
</div>
<div style="width:100px; float:left; height:25px; border-right:2px solid #333">
<p class="story">';?><script>document.writeln((<?php  echo $price ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div style="float:left;width:118px;height:25px;">
<p class="story"><script>document.writeln((<?php  echo $total ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php

}

?>
</div>

<div style="float:right; height:25px;border:2px solid #333; border-top:0; width:222px">
<div style="float:left;width:90px;height:25px; border-right:2px solid #333">
<p style="font-size:15px; font-weight:bold; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0; padding:0">Totals</p>
</div>
<div style="float:left;width:128px;height:25px;">
<p style="font-size:15px; font-weight:bold; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0; padding:0"><script>document.writeln((<?php  echo $tot ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
</div>




</div>

</body>
</html>