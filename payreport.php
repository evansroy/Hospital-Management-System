<?php include('db_fns.php');
include('functions.php');
$id=$_GET['id'];
if(isset($_GET['reg'])){
$reg=$_GET['reg'];
}else $reg=0;
 ?>
<script src="js/functions.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Q-Afya Reports</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/green.css" media="all" />

<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/cufon.yui.js"></script>
<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/myriad.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
		<script>
			
			Number.prototype.formatMoney = function(c, d, t){
var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 }; </script>
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>

</head>
<body>

<?php

function ranger(){
	
	
}
switch($id){
	case 1:
$result =mysql_query("select * from salregister where month='".$reg."'");
implement($result,$reg);

break;
case 2:
implement2();
break;
case 3:
$result =mysql_query("select * from payroll where emp='".$reg."'");
implement3($result,$reg);
break;

}




?>
<!-- End Wrapper -->
</body>
</html>
