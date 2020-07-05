<?php include('db_fns.php');
include('functions.php');
$reg=$_GET['reg']; 
$id=$_GET['id'];
$desc=$_GET['desc']; 
$bname=$_GET['bname'];
$btitle=$_GET['btitle']; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<title>Q-Shule Certificates</title>
</head>

<body>

<?php
switch($id){
case 1:
$result =mysqli_query($conn,"select * from spersonal where regn='".$reg."'",$db1 );
$num_results = mysqli_num_rows($result);
if($num_results>=1){
cert($result,$desc,$bname,$btitle);
}else{echo'<script>notregistered();</script>';} 
break;

case 2:
$query =mysqli_query($conn,"select * from spersonal where class='".$reg."'",$db1 );
$count = mysqli_num_rows($query);
for ($i=0; $i <$count; $i++) {
$row=mysql_fetch_array($query);
$regn=stripslashes($row['regn']);
$result =mysqli_query($conn,"select * from spersonal where regn='".$regn."'",$db1 );
cert($result,$desc,$bname,$btitle);
}
break;
}

?>

</body>
</html>