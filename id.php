<?php include('db_fns.php');
include('functions.php');
$reg=$_GET['reg']; 
$id=$_GET['id'];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<title>Q-Shule Student Reports</title>
</head>

<body>

<?php

switch($id){
case 1:
$result =mysql_query("select * from spersonal where regn='".$reg."'",$db1 );
$num_results = mysql_num_rows($result);
if($num_results>=1){
studeid($result);
}else{echo'<script>notregistered();</script>';} 
break;

case 2:
$query =mysql_query("select * from spersonal where class='".$reg."'",$db1 );
$count = mysql_num_rows($query);
for ($i=0; $i <$count; $i++) {
$row=mysql_fetch_array($query);
$regn=stripslashes($row['regn']);
$result =mysql_query("select * from spersonal where regn='".$regn."'",$db1 );
studeid($result);
}
break;
}

?>




</body>
</html>