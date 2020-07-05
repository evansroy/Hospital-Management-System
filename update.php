<?php include('db_fns.php');		
$result = mysql_query("update company set License='DEMO',Counts=5,Status=0 where Status=1");
if($result){
	echo'<script>alert("Update Successful")</script>';
}else echo'<script>alert("Update Not Successful")</script>';
