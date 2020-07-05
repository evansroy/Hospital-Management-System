<?php include('db_fns.php');
date_default_timezone_set('America/Los_Angeles'); 
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysqli_query($conn,"select * from users where name='".$username."'");
$row=mysql_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$fullname=stripslashes($row['fullname']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}
?>
<script src="js/functions.js"></script>
<script src="js/a.js"></script>
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	</script>
<?php
$a=$_GET['a'];
					
								
							
							
							
							
				
					
?>