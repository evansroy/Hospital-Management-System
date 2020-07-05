<?php include('db_fns.php');
include('functions.php');
$id=$_GET['id'];
$mon=$_GET['mon'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<title>Q-Afya PaySlips</title>
<script src="js/functions.js"></script>
</head>
<body>
<?php

switch($id){
case 1:
$emp=$_GET['emp'];
$result =mysql_query("select * from payroll where month='".$mon."' and emp='".$emp."'");
payslp($result);
break;

case 2:
$query =mysql_query("select * from  payroll where month='".$mon."'");
$count = mysql_num_rows($query);
for ($i=0; $i <$count; $i++) {
$row=mysql_fetch_array($query);
$emp=stripslashes($row['emp']);
$result =mysql_query("select * from  payroll where month='".$mon."' and emp='".$emp."'");
payslp($result);
}

break;
}
?>


</body>
</html>