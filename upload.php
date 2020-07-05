<?php
include('db_fns.php');
if(isset($_POST['stamp'])){
$stamp =$_POST['stamp'];
}else $stamp=NULL;
if(isset($_POST['regno'])){
$regno =$_POST['regno'];
}else $regno=NULL;
$id =$_POST['id'];
 
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
  <script>
$('#lei2').html('<iframe name="leiframe2" id="leiframe" class="leiframe" src="" style="margin-right:40px"></iframe>');
	</script>	 

  <?php
 switch($id){
	case 1: //newpatient
	$stamp=preg_replace('~/~', '', $stamp);
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/patients/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/patients/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>
	<p style="display:none" id="stamp">'.$stamp.'</p>';
	
	break;
	
	case 2: //editpatient
	$stamp=preg_replace('~/~', '', $stamp);
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/patients/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/patients/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>';
echo'<p style="display:none" id="stamp">'.$stamp.'</p>';
	
	break;
	
	case 3: //newuser
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/users/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/users/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>
	<p style="display:none" id="stamp">'.$stamp.'</p>';
	
	break;
	
	case 4: //edituser
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/users/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/users/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>
	<p style="display:none" id="stamp">'.$stamp.'</p>';
	
	
	break;
	
		case 5: //newemployee
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/employees/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/employees/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>
	<p style="display:none" id="stamp">'.$stamp.'</p>';
	
	break;
	
	case 6: //editemployee
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/employees/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/employees/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>';
	$result = mysql_query("update employee set image='images/employees/".$stamp.".jpg' where emp=".$regno."");
	if($result){
	echo'<p style="display:none" id="stamp">'.$stamp.'</p>';}
	break;
	
	case 7: //new document
	if(isset($_POST['details'])){
	$details =$_POST['details'];
	}else $details=NULL;
	$fname =$_POST['fname'];
	$type =$_POST['type'];
	$pntno =$_POST['pntno'];
	if($type=='Image'){
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/Documents/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/Documents/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>';
	$link='images/Documents/'.$stamp.'.jpg';
	}
	if($type=='Document'){
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/Documents/'.$stamp.'.pdf');
	echo '<img style="width:100%; height:100%;"  src="images/adobe.png"/>';
	$link='images/Documents/'.$stamp.'.pdf';
	}
	$result = mysql_query("insert into documents values('0','".$type."','".$pntno."','".$fname."','".$link."','".$details."','".date('d/m/Y')."','".date('Ymd')."','1')");
		if($result){
	echo'<p style="display:none" id="stamp">'.$stamp.'</p>';}
	break;
	
	case 8: //editcompany
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/clogo.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/clogo.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>
	';
	break;
	case 9: //new radiology can
	if(isset($_POST['details'])){
	$details =$_POST['details'];
	}else $details='Radiology Image scan-Patient no:'.$_POST['pntno'].'-Date:'.date('d/m/Y').'';
	$fname =$_POST['fname'];
	$stamp =date('dHis').RAND(1,100);
	$type =$_POST['type'];
	$pntno =$_POST['pntno'];
	$presc =$_POST['presc'];
	if($type=='Image'){
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/Documents/'.$stamp.'.jpg');
	echo '<img style="width:100%; height:100%;"  src="images/Documents/'.$stamp.'.jpg?v='.rand(0,1000).' // rand() prevents the browser from displaying a previously cached image"/>';
	$link='images/Documents/'.$stamp.'.jpg';
	}
	if($type=='Document'){
	move_uploaded_file($_FILES['image']['tmp_name'], 'images/Documents/'.$stamp.'.pdf');
	echo '<img style="width:100%; height:100%;"  src="images/adobe.png"/>';
	$link='images/Documents/'.$stamp.'.pdf';
	}
	$result = mysql_query("insert into raddocuments values('0','".$type."','".$presc."','".$pntno."','".$fname."','".$link."','".$details."','".date('d/m/Y')."','".date('Ymd')."','1')");
		if($result){
	echo'<p style="display:none" id="stamp">'.$stamp.'</p>';}
	break;
	
	
}
	
	?>
  </body>
</html>