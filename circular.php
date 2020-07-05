<?php
$ref=$_GET['ref'];
$quat=$_GET['quat'];
$bod=$_GET['bod'];


?>
<script src="js/functions.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<title>Q-Shule Circulars</title>
<style>
.story{font-size:15px; text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0; padding:0}
</style>
</head>
<body>
<?php for ($x=0; $x <$quat; $x++) {
?>
<div id="container" style="width:740px;min-height:980px; margin-bottom:20px; border:2px solid #333">
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
<h1 style="font-size:15px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0;padding:0">
Ref No:<?php echo date('mYd').'/'.RAND(0,10) ?></h1>
<h1 style="font-size:15px; float:right; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0;padding:0">Date:<?php echo date('d/m/Y') ?></h1>
<div style="clear:both; height:10px"></div>

</div>
<h1 style="font-size:15px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:10px;padding:0">
Dear Parent/Guardian,</h1>
<div style="clear:both;"></div>
<h1 style="font-size:15px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:10px;padding:0">
REF:<?php echo $ref ?></h1>
<div style="clear:both;"></div>
<div style="clear:both; width:auto; height:600px;">
<a style="font-size:12px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:10px;padding:0">
<?php echo $bod ?> </a>
</div>
<h1 style="font-size:15px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:10px;padding:0">
Marcus Mackenzie</h1>
<div style="clear:both;"></div>
<h1 style="font-size:15px; float:left; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; margin:0px 10PX ;padding:0">
PRINCIPAL</h1>
</div>
</div>
<?php } ?>
</body>
</html>