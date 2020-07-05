<?php include('db_fns.php');
include('functions.php');
$reg=$_GET['reg']; 
$id=$_GET['id'];?>
<script src="js/functions.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Q-Afya Reports</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/blue.css" />
<link type="text/css" rel="stylesheet" href="css/blue.css" media="print" />

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
<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
<script>
function doPrint(delay){
	alert('');
 delay = delay || 5; //default to 5 seconds
 $('link[media*="print"]').attr("href",url+"css/print.css");
 setTimeout(function(){window.print();},delay*1000);
}
</script>
</head>
<body>
<?php

switch($id){
case 1:
$result =mysql_query("select * from employee where emp='".$reg."'");
$resulta =mysql_query("select * from salary where emp='".$reg."'");
$num_results = mysql_num_rows($result);
if($num_results>=1){
employreport($result,$resulta);
}else{echo'<script>notregistered();</script>';} 
break;



case 2:
$query =mysql_query("select * from employee where dept='".$reg."'");
$count = mysql_num_rows($query);
for ($i=0; $i <$count; $i++) {
$rowb=mysql_fetch_array($query);
$reg=stripslashes($rowb['emp']);
$result =mysql_query("select * from employee where emp='".$reg."'");
$resulta =mysql_query("select * from salary where emp='".$reg."'");
employreport($result,$resulta);
}
break;


}

?>


<!-- End Wrapper -->
</body>
</html>
