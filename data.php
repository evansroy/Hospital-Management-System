<?php include('db_fns.php');
ini_set('display_errors', 1);
date_default_timezone_set('Africa/Nairobi');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysqli_query($conn,"select * from users where name='".$username."'");
$row=mysqli_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$fullname=stripslashes($row['fullname']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/functions.js"></script>
<script src="js/ajax.js"></script>
<script>window.onload = setupRefresh</script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" type="text/css" href="css/graph.css" />
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/graph.js"></script>


<?php 
if(isset($_POST['id'])){$id=$_POST['id'];}
else{$id=$_GET['id'];}
function chat($username,$userdep){
	
	
	//check for chats
	echo'<div id="scrollbar2" style="width:200px; height:90px" >
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:180px; height:90px">
			 <div class="overview">';
								$date=date('d/m/y');
								$result =mysqli_query($conn,"select * from chat where date='".$date."' order by serial desc");
								$num_results = mysqli_num_rows($result);
									for ($a=0; $a <$num_results; $a++) {
										$row=mysqli_fetch_array($result);
										$name=stripslashes($row['name']);
										$chat=stripslashes($row['chat']);
					echo"
		<p style=\"font-size:12px; color:#333; margin:0px 0px; cursor:pointer;\">";
		echo"<img src=\"images/bullet.png\" style=\"width:12px; height:12px; margin:0 3px -2px 0\" /><strong style=\"color:#0085b2\">".$name."</strong>-".$chat."</p>";
									}
										
										
								echo'</div></div></div>';
								
	//check for messages							
				
		$result =mysqli_query($conn,"select * from messages where name='".$username."' and status=0 order by id desc");
		$num_results = mysqli_num_rows($result);
		if($num_results>0){
		$b='';$c='';
		for ($a=0; $a <$num_results; $a++) {
			$row=mysqli_fetch_array($result);
			$id=stripslashes($row['id']);
			$b.='<b>'.stripslashes($row['sender']).'</b>-'.stripslashes($row['message']).'<br/><input id=\"check'.$a.'\" type=\"checkbox\" style=\"float:right; margin:0px 0px 0 10px\" onclick=\"checkmess('.$a.','.$id.');\" title=\"Mark as Read\"/><small style=\"float:right\">['.stripslashes($row['date']).']</small><br/>';
		}
		$c.='<b><a style=\'cursor:pointer\' onclick=\"checkall(\''.$username.'\');\">Mark all as Read</a>';
		echo '<script>
	
		$("#messagelog").dialog( "open" );
		$("#mess").html("<b style=\"margin-left:80px\">You have '.$num_results.' new messages.</b><br/>'.$b.'<br/>'.$c.'");';
		echo" $('#messaudio').html('<embed src=\"images/excuse_me_boss.mp3\" autostart=\"true\" width=\"0\" height=\"0\" id=\"sound1\" enablejavascript=\"true\">');</script>";
								
		}
		
		
		//check for tasks
		$result =mysqli_query($conn,"select * from mytasks where ReminderStatus=1 and Stamp<=".date('YmdHi')." order by Event_id asc limit 0,1");
				$num_results = mysqli_num_rows($result);
				if($num_results>0){
				$row=mysqli_fetch_array($result);
				$eid=stripslashes($row['Event_id']);
				$reason=stripslashes($row['Reason']);
				echo"<script>$('#mytask').html('<embed src=\"images/beep-05.wav\" autostart=\"true\" width=\"0\" height=\"0\" id=\"sound9\" enablejavascript=\"\">');</script>";	
				echo"<script>taskrem(".$eid.",'".$reason."','".stripslashes($row['DueDate'])."','".stripslashes($row['DueTime'])."');</script>";
				
				$result = mysqli_query("update mytasks set ReminderStatus=0 where Event_id='".$eid."'");
				}
	//check for appointments
	
	
	$result =mysqli_query($conn,"select * from calendar where ReminderStatus=1 and Stamp<=".date('YmdHi')." order by Event_id asc limit 0,1");
				$num_results = mysqli_num_rows($result);
				if($num_results>0){
				$row=mysqli_fetch_array($result);
				$eid=stripslashes($row['Event_id']);
				$reason=stripslashes($row['Reason']);
				echo"<script>$('#mycalendar').html('<embed src=\"images/beep-05.wav\" autostart=\"true\" width=\"0\" height=\"0\" id=\"sound9\" enablejavascript=\"\">');</script>";	
				echo"<script>taskcal(".$eid.",'".$reason."','".stripslashes($row['StartDate'])."','".stripslashes($row['StartTime'])."','".stripslashes($row['Pat_name'])."');</script>";
				
				$result = mysqli_query($conn,"update calendar set ReminderStatus=0 where Event_id='".$eid."'");
				}			
				
			
				
											
}

switch($id){
							
							case 1:
							$patid=$_GET['patid'];
							if(isset($_GET['pid'])){
							$pid=$_GET['pid'];
							}else $pid=0;
						
							$amount=$_GET['amount'];
							$change=$_GET['change'];
							$pmode=$_GET['pmode'];
							if($pmode=='OTC Sale'){
							$status=2;	
							}else $status=0;
							$fintot=$_GET['fintot'];
							$stamp=date('Ymd');
							$dat=date('Y/m/d');
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['RcptNo'])+1;
							
							
							$max=count($_SESSION['cart']);
							for ($i = 0; $i < $max; $i++){
							$qsold=0;
							$itcode = $_SESSION['cart'][$i][0];
							$itname = $_SESSION['cart'][$i][1];
							$itquat = $_SESSION['cart'][$i][2];
							$itprice = $_SESSION['cart'][$i][3];
							$tprice = $_SESSION['cart'][$i][4];
							$tvat = $_SESSION['cart'][$i][5];
							$tdisc = $_SESSION['cart'][$i][6];
							$ftotal = $_SESSION['cart'][$i][7];
							$date = $_SESSION['cart'][$i][8];
							$cname = $_SESSION['cart'][$i][9];
							$itcost = $_SESSION['cart'][$i][10];
							$bal = $_SESSION['cart'][$i][11];
							$qsold = $_SESSION['cart'][$i][12];
							$categ= $_SESSION['cart'][$i][13];
							$qsold+=$itquat;
						
							$resulta = mysqli_query($conn,"insert into sales values('0','".$rcptno."','".$userdep."','".$itcode."','".$itname."','".$itquat."',
							'".$itprice."','".$tvat."','".$tdisc."','".$ftotal."','".$itcost."',0,'".$date."','".$patid."','".$cname."','','','','','','','".$pmode."','".$fintot."','".$amount."','".$change."','".$stamp."','','".$username."','".$status."',1,'')");
							if($resulta){
							$resultc = mysqli_query($conn,"update pharmrequests set servtime='".date('H:i')."',doneby='".$fullname."',status=2 where prescid='".$pid."'");
							$resultx = mysqli_query($conn,"update newprescription set PharmTime='".date('H:i')."' where PrescId='".$pid."'");
							}
							}
							if($resulta){
							
									echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');$('#totprice').val('');$('#totvat').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');$('#change').val('');$('#itemname').val('');$('#code').val('');$('#itcost').val('');$('#bal').val('');$('#quat').val('');$('#price').val('');$('#vat').val('');$('#tprice').val('');$('#tvat').val('');$('#disc').val('');$('#total').val('');$('#cname').val('');
							</script>";
							$resultc = mysqli_query($conn,"insert into log values('0','".$username." processes payment.Rcpt No:".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($status==2){
							echo"
										<script>
										window.open('report.php?id=1&rcptno=".$rcptno."');
										window.open('report.php?id=36&rcptno=".$pid."');
										</script>";	
							}
									unset($_SESSION['cart']);	
										echo"
										<script>
										window.open('report.php?id=45&rcptno=".$rcptno."');
										$().customAlert();
										alert('Success!', '<p>Transaction posted.</p>');
										setTimeout(function() {
											makeasale();},500);
										</script>";
										exit;
									}
									else{
									$result = mysqli_query($conn,"DELETE from sales where rcptno='".$rcptno."'");
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							
							
							
							case 3:
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							
							//get credit no
							$question =mysqli_query($conn,"SELECT * FROM creditnotes order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$crdtno=stripslashes($ans['Creditno'])+1;
							
							$rcptno=$_GET['rcptno'];
							$alltot=$_GET['alltot'];
							$max=count($_SESSION['credit']);
							for ($i = 1; $i < $max; $i++){
							$itcode = $_SESSION['credit'][$i][0];
							$itname = $_SESSION['credit'][$i][1];
							$itquat = $_SESSION['credit'][$i][2];
							$itprice = $_SESSION['credit'][$i][3];
							$rquat = $_SESSION['credit'][$i][4];
							$rtot = $_SESSION['credit'][$i][5];
							$remquat = $_SESSION['credit'][$i][6];
							$tno = $_SESSION['credit'][$i][7];
							$result =mysqli_query($conn,"SELECT * FROM sales WHERE TransNo='".$tno."'");
							$row=mysqli_fetch_array($result);
							$rcdate=stripslashes($row['Date']);
							$rctype=stripslashes($row['PayMode']);
							$categ=stripslashes($row['Category']);
							
							
							$resultb =mysqli_query($conn,"SELECT * FROM items WHERE ItemCode='".$itcode."' and Type='GOOD'");
							$rowb=mysqli_fetch_array($resultb);
							$bal=stripslashes($rowb[$categ]);	
							$type=stripslashes($rowb['Type']);
							$pack=stripslashes($rowb['Pack']);
							$bal=$bal+$rquat;	
							
							
	//insert into stock track
	if($categ=='Bal'){$bra='PROCUREMENT';}else{$bra=$categ;}
			$resultd = mysqli_query($conn,"insert into stocktrack values('0','".$date."','".$bra."','".$itcode."','".$itname."','".$pack."','CREDIT NOTE','".$rquat."','".$bal."','".$username."','".$stamp."')");							
											
	$resultc= mysqli_query($conn,"update items set ".$categ."='".$bal."' where ItemCode='".$itcode."'");	
					
	$resulta = mysqli_query($conn,"insert into creditnotes values('0','".$crdtno."','".$rcptno."','".$rcdate."','','".$date."','".$rctype."','".$itcode."','".$itname."','".$itprice."','".$itquat."','".$rquat."','".$remquat."','".$rtot."','1','".$stamp."')");
			
				}
	echo"<script>$('#retotal').val('');$('#rcptno').val('');$('#cdate').val('');$('#csale').val('');</script>";
									if($resulta){
									unset($_SESSION['credit']);
									//update ledgers
								if($type=='GOOD'){
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
									$rowb=mysqli_fetch_array($resultb);
									$invbal=stripslashes($rowb['bal']);
									$invbal=$invbal+$alltot;
									
									$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='651'");
									$rowc=mysqli_fetch_array($resultc);
									$supbal=stripslashes($rowc['bal']);
									$supbal=$supbal+$alltot;
									
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','651','Supplies Revenue','630','Inventory','".$alltot."','Goods Returned-".$rcptno."','".$date."','".$supbal."','".$invbal."','".$stamp."','','',0)");
									$resultm = mysqli_query($conn,"update ledgers set bal='".$invbal."' where ledgerid='630'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$supbal."' where ledgerid='651'");	
												}
			echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
		
						
										echo"
										<script>
										window.open('report.php?id=3&rcptno=".$crdtno."');
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
	
										
									}
									else{
								$result = mysqli_query($conn,"DELETE from creditnotes where Creditno='".$crdtno."'");
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
				echo"<script>$('#retotal').val('');$('#rcptno').val('');$('#cdate').val('');$('#csale').val('');</script>";
									}
		
							
							break;
							
							case 4:
							
							$image=$_GET['image'];
							$image=preg_replace('~/~', '', $image);
							$regn=$_GET['regn'];
							$name=strtoupper($_GET['name']);
							$oname=strtoupper($_GET['oname']);
							$lname=strtoupper($_GET['lname']);
							$fourthname=strtoupper($_GET['fourthname']);

							$fullnames=$name.' '.$oname.' '.$lname.' '.$fourthname;
							$dob=$_GET['dob'];
							$age=$_GET['age'];
							$gender=$_GET['gender'];
							$stream=$_GET['stream'];
							$phone2=$_GET['phone2'];
							$house=$_GET['house'];
							$course=$_GET['course'];
							$gname=$_GET['gname'];
							$rship=$_GET['rship'];
							$gphone=$_GET['gphone'];
							$geno=$_GET['geno'];
							$gaddress=$_GET['gaddress'];
							$bgroup=$_GET['bgroup'];
							$alergy=$_GET['alergy'];
							$tcr=$_GET['tcr'];
							$tdr=$_GET['tdr'];
							$insid=$_GET['insid'];
							$insname=$_GET['insname'];
							$cardno=$_GET['cardno'];
							$company=$_GET['company'];
							$stamp=date('Ymd');
							$cur=date('Y-m');

							$idno=$_GET['idno'];
							$mccno=$_GET['mccno'];
							
							
							//get o/p no
							$result =mysqli_query($conn,"select * from patients where opno!='' order by auto desc limit 0,1");
							$num_results = mysqli_num_rows($result);
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$opno='1-'.date('Y');
								}else {
									$d=substr(stripslashes($row['opno']),-4,4);
										if($d!=date('Y')){
										$opno='1-'.date('Y');	
										}
										else{
										$a=substr(stripslashes($row['opno']),-5,5);
										$b=preg_replace('~'.$a.'~', '', stripslashes($row['opno']));
										$c=$b + 1;
										$opno=$c.'-'.date('Y');}
								}
								
									$query =mysqli_query($conn,"select * from patients where pntno='".$regn."' order by auto desc");
									$count = mysqli_num_rows($query);
									if($count>0){

										$result =mysqli_query($conn,"select * from patients order by auto desc limit 0,1");
										$row=mysqli_fetch_array($result);
										if(mysqli_num_rows($result)==0){$regn=1;
										}else {
										$regn=stripslashes($row['pntno'])+1;}

									/*echo"<script>
									$().customAlert();
									alert('Error!', '<p>There exists a similar patient Number in the database.</p>');
									e.preventDefault();
									newpatient();
									</script>";	
									*/
									echo'<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewpat();"/></div>';
									exit;
				}
				$resulta = mysqli_query($conn,"insert into patients values('0','".$regn."','".$name."','".$oname."','".$lname."','".$fourthname."','".$fullnames."','".$dob."','".$age."','".$gender."','".$stream."','".$phone2."','".$house."','".$course."','".$gname."','".$rship."',
							'".$gphone."','".$geno."','".$gaddress."','".$tcr."','".$tdr."','".$insid."','".$insname."','".$cardno."','".$company."','".$bgroup."',
							'".$alergy."','images/patients/".$image.".jpg','1','".$stamp."','".$opno."','','','','','','','','".$idno."','".$mccno."')");
				
				$resultd = mysqli_query($conn,"insert into recentpats values('0','".$oname."','".$regn."')");				
							
							if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into patients database.Patient No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<input type=\"hidden\" id=\"paramid\" value=\"".$regn."\"/>";
								echo"<script>var param=".$regn."</script>";
								echo"<script>
										$().customAlert();
										alert('Success!', '<p>Record created.<br/>Patient No:<b>".$regn."</b><br/>O/P No:<b>".$opno."</b></p>');
										</script>";

										?>
										<script>
											var param = $('#paramid').val();
											$.ajax({
											url:'bridge.php',
											data:{id:136,param:param},
											success:function(data){
											$('#mainp').html(data);
											}
											});

										</script>
									<?php
										exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;
							
							case 5:
							
							$reg=$_GET['reg'];
							$name=strtoupper($_GET['name']);
							$oname=strtoupper($_GET['oname']);
							$lname=strtoupper($_GET['lname']);
							$fourthname=strtoupper($_GET['fourthname']);
							$fullnames=$name.' '.$oname.' '.$lname.' '.$fourthname;
							$dob=$_GET['dob'];
							$age=$_GET['age'];
							$gender=$_GET['gender'];
							$stream=$_GET['stream'];
							$phone2=$_GET['phone2'];
							$house=$_GET['house'];
							$course=$_GET['course'];
							$gname=$_GET['gname'];
							$rship=$_GET['rship'];
							$gphone=$_GET['gphone'];
							$geno=$_GET['geno'];
							$gaddress=$_GET['gaddress'];
							$bgroup=$_GET['bgroup'];
							$alergy=$_GET['alergy'];
							$tcr=$_GET['tcr'];
							$tdr=$_GET['tdr'];
							$insid=$_GET['insid'];
							$insname=$_GET['insname'];
							$cardno=$_GET['cardno'];
							$company=$_GET['company'];
							$ipno=$_GET['ipno'];

								$idno=$_GET['idno'];
							$mccno=$_GET['mccno'];
							
							$result = mysqli_query($conn,"update patients set name='".$name."',oname='".$oname."',lname='".$lname."',fourthname='".$fourthname."',fullnames='".$fullnames."'
							,dob='".$dob."',age='".$age."',gender='".$gender."',contact='".$stream."',phone2='".$phone2."',address='".$house."',
							email='".$course."',gname='".$gname."',grship='".$rship."',gcont='".$gphone."',geno='".$geno."',
							gaddress='".$gaddress."',empname='".$tcr."',empno='".$tdr."',insurer='".$insname."',insid='".$insid."',cardno='".$cardno."',company='".$company."',bgroup='".$bgroup."',odetails='".$alergy."',ipno='".$ipno."',idno='".$idno."',mccno='".$mccno."' where pntno='".$reg."'");
							
							$result = mysqli_query($conn,"update newprescription set PatName='".$fullnames."'  where PatId='".$reg."'");
							
									if($result){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits patients database.Patient No:".$reg."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
										<script>
										setTimeout(function() {
											editpatient(21);},500);</script>";
										exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
				
							
							
							break;
							
							
							
							case 7:
							$sdate=date('Y/m/d');
							$stamp=date('Ymd');
							$pro=array();
							$max=count($_SESSION['pur']);
							for ($i = 0; $i < $max; $i++){
							$pro[]=$_SESSION['pur'][$i][0];
							}
							$pro = array_unique($pro);
							
							foreach ($pro as $key => $val) {
										for ($i = 0; $i < $max; $i++){
										$itcode = $_SESSION['pur'][$i][0];
										$itname = $_SESSION['pur'][$i][1];
										$sname = $_SESSION['pur'][$i][11];
										$itquat= $_SESSION['pur'][$i][18];
										$bal= $_SESSION['pur'][$i][10];
										$qpurch = $_SESSION['pur'][$i][15];
										$oprice = $_SESSION['pur'][$i][19];
										$saleset = $_SESSION['pur'][$i][17];
										$sp = $_SESSION['pur'][$i][4];
										$marg = $_SESSION['pur'][$i][20];
										$pack = $_SESSION['pur'][$i][22];
										if($val==$itcode){
												if(isset($_SESSION[$val])){
												$x=count($_SESSION[$val]);
												$_SESSION[$val][$x]=array($itquat,$bal,$qpurch,$oprice,$saleset,$sp,$marg,$pack,$itname,$sname);
												}
												
												else{
												$_SESSION[$val]=array(array());
												$_SESSION[$val][0]=array($itquat,$bal,$qpurch,$oprice,$saleset,$sp,$marg,$pack,$itname,$sname);}
								
												}
										}
							}
							
							foreach ($pro as $key => $val) {
							$count=count($_SESSION[$val]);$a=0;$b=0;$c=0;
											for ($i=0; $i <$count; $i++) {
											$a+=$_SESSION[$val][$i][0];
											$b=$_SESSION[$val][$i][1];
											$c=$_SESSION[$val][$i][2];
											$sp=$_SESSION[$val][$i][5];
											$oprice=$_SESSION[$val][$i][3];
											$saleset=$_SESSION[$val][$i][4];
											$marg=$_SESSION[$val][$i][6];
											$pack=$_SESSION[$val][$i][7];
											$itname=$_SESSION[$val][$i][8];
											$supname=$_SESSION[$val][$i][9];
											}
										$bal=$a+$b;
										$qpurch=$a+$c;
				
										
																
										if($saleset==1){
											$spr=($sp+$oprice)/2;
											$spr=round($spr,0);
										}
										if($saleset==2){
											$spr=$sp;
										}						
											
										if($saleset==3){
											$spr=$oprice;
										}
										$marg=($marg+100)/100;
										$y=$spr/$marg;
										$pp=round($y,0);//margin		


			//insert into stock track
			
			$resulta = mysqli_query($conn,"insert into stocktrack values('0','".$sdate."','".$userdep."','".$val."','".$itname."','".$pack."','PURCHASES-".$supname."','".$a."','".$bal."','".$username."','".$stamp."')");							
										
										
			$resultb= mysqli_query($conn,"update items set SalePrice='".$spr."',PurchPrice='".$pp."',".$userdep."='".$bal."',Qpurch='".$qpurch."' where ItemCode='".$val."'");
								}
							
							
							
							$ftotal=$_GET['fintot'];
							$ftotal=preg_replace('~,~', '', $ftotal);
							
							
							//get receipt no
							$question =mysqli_query("SELECT * FROM purchases order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['PurchNo'])+1;
							
							$max=count($_SESSION['pur']);
							for ($i = 0; $i < $max; $i++){
							$qpurch=0;$totalsale=0;
							$itcode = $_SESSION['pur'][$i][0];
							$itname = $_SESSION['pur'][$i][1];
							$unit1 = $_SESSION['pur'][$i][2];
							$part = $_SESSION['pur'][$i][3];
							$sprice = $_SESSION['pur'][$i][4];
							$pprice = $_SESSION['pur'][$i][5];
							$sp = $_SESSION['pur'][$i][6];
							$pp = $_SESSION['pur'][$i][7];
							$date = $_SESSION['pur'][$i][8];
							$total = $_SESSION['pur'][$i][9];
							$bal = $_SESSION['pur'][$i][10];
							$sname = $_SESSION['pur'][$i][11];
							$batch = $_SESSION['pur'][$i][12];
							$invoice = $_SESSION['pur'][$i][13];
							$expiry = $_SESSION['pur'][$i][14];
							$qpurch = $_SESSION['pur'][$i][15];
							$bonus = $_SESSION['pur'][$i][16];
							$saleset = $_SESSION['pur'][$i][17];
							$itquat = $_SESSION['pur'][$i][18];
							$sid = $_SESSION['pur'][$i][21];
							$qpurch+=$itquat;
							$exstamp=stampreverse($expiry);
							$saleprice=	round(($sp * $itquat),2);
							$totalsale+=$saleprice;
						
			$resulta = mysqli_query($conn,"insert into purchases values('0','".$rcptno."','".$date."','".$itcode."','".$itname."','".$unit1."','".$part."','".$itquat."','".$pprice."','".$sprice."','".$total."','".$sid."','".$sname."','".$batch."','".$expiry."','".$invoice."','".$ftotal."','".$stamp."','".$exstamp."','".$itquat."','".$date."','".$username."')");
			
			}
					
						
						
						
	if($resulta){
//post invoice for payment
$resultc =mysqli_query($conn,"SELECT * FROM creditsuppliers WHERE CustomerId='".$sid."'");
$rowc=mysqli_fetch_array($resultc);
$bal2=stripslashes($rowc['Bal']);
$bal3=$bal2+$ftotal;										
$resulta = mysqli_query($conn,"insert into supplierdebts values('0','".$sid."','".$sname."','".$invoice."','".$rcptno."','".$ftotal."','dr','0','".$ftotal."','".$bal3."','Purchases','".date('d/m/Y')."','".$stamp."',1)");
$resultn = mysqli_query($conn,"update creditsuppliers set Bal='".$bal3."' where CustomerId='".$sid."'");

//update ledgers-stock vs 
			//update ledgers-acs/payable
					$amount=preg_replace('~,~', '', $ftotal);
					$resultb = mysqli_query("select * from ledgers where ledgerid='629'");
					$rowb=mysqli_fetch_array($resultb);
					$acbal=stripslashes($rowb['bal']);
					$acbal=$acbal+$amount;
					
					$resultc = mysqli_query("select * from ledgers where ledgerid='630'");
					$rowc=mysqli_fetch_array($resultc);
					$costbal=stripslashes($rowc['bal']);
					$costbal=$costbal+$amount;
					
				$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','629','Accounts Payable','".$amount."','Goods Received Inwards','".$date."','".$costbal."','".$acbal."','".$stamp."','','',0)");
				$resultm = mysqli_query($conn,"update ledgers set bal='".$acbal."' where ledgerid='629'");
				$resultn = mysqli_query($conn,"update ledgers set bal='".$costbal."' where ledgerid='630'");


				


$resulta = mysqli_query($conn,"insert into log values('0','".$username." purchases stock.Id:".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						unset($_SESSION['pur']);
						foreach ($pro as $key => $val) {
						unset($_SESSION[$val]);
						
						}
										
			echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							
							
										echo"
										<script>
										window.open('report.php?id=6&rcptno=".$rcptno."');
										setTimeout(function() {
											purchase();},500);
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
										exit;
									}
									else{
								$result = mysqli_query($conn,"DELETE from purchases where rcptno='".$rcptno."'");
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
					
							break;
							
							case 8:
							$categ=$_GET['categ'];
							$result = mysqli_query($conn,"insert into categories values('0','".$categ."')");
							if($result){
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
							<script>$('#catadd').html('".$categ.";');</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case 9:
							$code=$_GET['code'];
							$a=$_GET['a'];
							$bra=$_GET['bra'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$sprice=$_GET['sprice'];
							$pack=$_GET['pack'];
							$margin=$_GET['margin'];
							$taxable=$_GET['taxable'];
							$sellable=$_GET['sellable'];
							$quat=$_GET['quat'];
							$type=$_GET['type'];
							$itemcat=$_GET['itemcat'];
							$vat=$_GET['vat'];
							
							$mbal=$_GET['mbal'];
							$supp=$_GET['supp'];
							$ltime=$_GET['ltime'];
							if(isset($_GET['molecule'])){
							$molecule=$_GET['molecule'];
							}else $molecule=NULL;


							$result =mysqli_query($conn,"select * from items order by ItemCode desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$itemcode=1;
							}else $itemcode=stripslashes($row['ItemCode']) + 1;
							
							$result = mysqli_query($conn,"insert into items values('".$itemcode."','".$name."','".$supp."','".$mbal."','".$ltime."','".$sprice."','".$pprice."','".$quat."','','','','','".$quat."','".$type."','".$bra."','".$itemcat."','".$molecule."','".$vat."','".$taxable."','".$sellable."','','".$margin."','".$pack."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
							if($type=='GOOD'){
									$resultb = mysqli_query($conn,"insert into minbal values('".$itemcode."','".$name."','".$bra."','".$pack."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
									
									$resultc= mysqli_query($conn,"update minbal set ".$userdep."='".$mbal."' where ItemCode='".$itemcode."'");
							}
							if($result){

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							if($a==1){
							echo"<script>setTimeout(function() {stockitems();},500);</script>";
							}else{echo"<script>setTimeout(function() {
								$.ajax({
									url:'link.php',
									data:{id:1,bra:'".$_GET['bra']."'},
									success:function(data){
									$('#mainp').html(data);
									}
								});
								},500);</script>";}
							
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case 10:
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$sprice=$_GET['sprice'];
							$pack=$_GET['pack'];
							$margin=$_GET['margin'];
							$taxable=$_GET['taxable'];
							$sellable=$_GET['sellable'];
							$itemcat=$_GET['itemcat'];
							$vat=$_GET['vat'];
							$type=$_GET['type'];
							$molecule=$_GET['molecule'];
							$mbal=$_GET['mbal'];
							$supp=$_GET['supp'];
							$ltime=$_GET['ltime'];
							$bra=$_GET['bra'];
							$a=$_GET['a'];
							
$result = mysqli_query($conn,"update items set ItemName='".$name."',SalePrice='".$sprice."',PurchPrice='".$pprice."',SubCategory='".$itemcat."',Category='".$bra."' where ItemCode=".$code."");

							if($result){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits Billable Service.Item Code:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
						echo"<script>setTimeout(function() {stockitems();},500);</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case '10.1':
							
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$sprice=$_GET['sprice'];
							$pack=$_GET['pack'];
							$margin=$_GET['margin'];
							$taxable=$_GET['taxable'];
							$sellable=$_GET['sellable'];
							$itemcat2=$_GET['itemcat2'];
							$vat=$_GET['vat'];
							$type=$_GET['type'];
							$molecule=$_GET['molecule'];
							$mbal=$_GET['mbal'];
							$supp=$_GET['supp'];
							$ltime=$_GET['ltime'];
						
							
$result = mysqli_query($conn,"update items set ItemName='".$name."',SalePrice='".$sprice."',PurchPrice='".$pprice."',SubCategory='".$itemcat2."',Type='".$type."',Vat='".$vat."',Taxable='".$taxable."',Pack='".$pack."',Sellable='".$sellable."',Margin='".$margin."',Supplier='".$supp."',LeadTime='".$ltime."',Molecule='".$molecule."'  where ItemCode=".$code."");

				$resultc= mysqli_query($conn,"update minbal set ".$userdep."='".$mbal."' where ItemCode='".$code."'");
							if($result){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits stock item.Item Code:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo"<script>setTimeout(function() {
								
								$.ajax({
									url:'link.php',
									data:{id:1,bra:'".$_GET['bra']."'},
									success:function(data){
									$('#mainp').html(data);
									}
								});
								},500);</script>";
							
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case 11:
							$code=$_GET['code'];
							$a=$_GET['a'];
							$result = mysqli_query($conn,"DELETE from items where ItemCode='".$code."'");
							if($result){
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#itemname3').val('');$('#itname2').val('');$('#itcode2').val('');$('#pprice2').val('');$('#sprice2').val('');$('#taxable2').val('');$('#sellable2').val('');$('#vat2').val('');$('#itemcat2').val('');
							</script>";
							if($a==1){
							echo"<script>setTimeout(function() {stockitems();},2000);</script>";
							}else{echo"<script>setTimeout(function() {addstockitems();},2000);</script>";}
							
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case 12:
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM variance order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['vno'])+1;
							
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							$bra=$_GET['bra'];
							if($bra=='PROCUREMENT'){
								$x='Bal';
							}else {$x=$bra;}
							$max=count($_SESSION['stock']);$j=0;
							for ($i = 0; $i < $max; $i++){
							$val=$_SESSION['stock'][$i][0];
							$itname=$_SESSION['stock'][$i][1];
							$a=$_SESSION['stock'][$i][4];
							$b=$_SESSION['stock'][$i][5];
							
							$bal=$_SESSION['stock'][$i][5];
							$pack=$_SESSION['stock'][$i][7];
							$qty=$_SESSION['stock'][$i][4];

								$part=$bal%$pack;
								$unit=explode('.',($bal/$pack));
								$unit=$unit[0];
								$diffa=$qty-$bal;
								$total=$diffa*$_SESSION['stock'][$i][8];
								$j+=$total;
								$diff=$a-$b;
							
				$resultx = mysqli_query($conn,"insert into variance values('0','".$rcptno."','".$date."','".$bra."','".$val."','".$itname."','".$pack."','".$bal."','".$qty."','".$total."','".$username."','".$stamp."',1)");
				
				//insert into stock track
			$resulta = mysqli_query($conn,"insert into stocktrack values('0','".$date."','".$bra."','".$val."','".$itname."','".$pack."','STOCK ADJUSTMENT','".$diff."','".$a."','".$username."','".$stamp."')");		
				
			$resultb= mysqli_query($conn,"update items set ".$x."='".$a."',Diff='".$diff."' where ItemCode='".$val."'");
								}
				if($resultb){
					
					//update ledgers-stock
			$amount=$j;
			$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
					$rowb=mysqli_fetch_array($resultb);
					$invbal=stripslashes($rowb['bal']);
					$invbal=$invbal+$amount;
					
					$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='725'");
					$rowc=mysqli_fetch_array($resultc);
					$supbal=stripslashes($rowc['bal']);
					$supbal=$supbal-$amount;
					
					$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','725','STOCK ADJUSTMENT EXPENSES','".$amount."','Stock adjustment','".$date."','".$invbal."','".$supbal."','".$stamp."','','',0)");
					$resultm = mysqli_query($conn,"update ledgers set bal='".$invbal."' where ledgerid='630'");
					$resultn = mysqli_query($conn,"update ledgers set bal='".$supbal."' where ledgerid='725'");
							
							
$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes stock adjustment','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
					echo"<script>		
										window.open('output.php?id=12&rcptno=".$bra."');
										window.open('report.php?id=50&rcptno=".$rcptno."');
										setTimeout(function() {
										stockadj();},500);
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
										unset($_SESSION['stock']);
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							
							
							case 14:
							$tname=$_GET['tname'];
							$comme=$_GET['comme'];
							$date=date('d/m/y');
							
							$result = mysqli_query($conn,"insert into chat values('0','".$date."','".$tname."','".$comme."',1)");
							if($result){
								chat($username,$userdep);
								echo"
										<script>$('#comme').val('');</script>";
									}
							break;
							case 15:
							chat($username,$userdep);
							break;
							
							case 16:
							$actype=$_GET['actype'];
							$bankname=$_GET['bankname'];
							$branchname=$_GET['branchname'];
							$acname=$_GET['acname'];
							$acno=$_GET['acno'];
							$postadd=$_GET['postadd'];
							$emailadd=$_GET['emailadd'];
							$date=$_GET['date'];
							$tel=$_GET['tel'];
							$result = mysqli_query($conn,"insert into banktbl values('".$bankname."','".$postadd."','".$branchname."','".$tel."','".$emailadd."','".$acname."','".$actype."','".$acno."','".$date."','')");
							if($result){
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 17:
							$stamp=date('Ymd');
							$amount=$_GET['amount'];
							$bankslip=$_GET['bankslip'];
							$acname=$_GET['acname'];
							$acno=$_GET['acno'];
							$info=$_GET['info'];
							$dep=$_GET['dep'];
							$bal=$_GET['bal'];
							$date=date('Y/m/d');
							$bal+=$amount;
							
							$resultb = mysqli_query($conn,"insert into transactions values('0','".$date."','".$acno."','".$acname."','".$amount."','".$amount."','','DEPOSIT','".$bankslip."','".$dep."','".$info."','".$stamp."')");
							
							$resultc = mysqli_query($conn,"update banktbl set Bal='".$bal."' where AccNo='".$acno."'");
							
							if($resultb&&$resultc){
							echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
										echo"
										<script>
										setTimeout(function() {
											bank();},500);
										</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 18:
							$stamp=date('Ymd');
							$amount=$_GET['amount'];
							$bankslip=$_GET['bankslip'];
							$acname=$_GET['acname'];
							$acno=$_GET['acno'];
							$info=$_GET['info'];
							$dep=$_GET['dep'];
							$bal=$_GET['bal'];
							$date=date('Y/m/d');
							$bal-=$amount;
							
							$resultb = mysqli_query($conn,"insert into transactions values('0','".$date."','".$acno."','".$acname."','".$amount."','','".$amount."','WITHDRAW','".$bankslip."','".$dep."','".$info."','".$stamp."')");
							
							$resultc = mysqli_query($conn,"update banktbl set Bal='".$bal."' where AccNo='".$acno."'");
							
							if($resultb&&$resultc){
							echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo"
										<script>
										setTimeout(function() {
											bank();},500);
										</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 19:
							$cname=$_GET['cname'];
							$web=$_GET['web'];
							$loc=$_GET['loc'];
							$motto=$_GET['motto'];
							$email=$_GET['email'];
							$tel=$_GET['tel'];
							$add=$_GET['add'];
							
							
							$resultc = mysqli_query($conn,"update company set CompanyName='".$cname."',Tel='".$tel."',Address='".$add."',Website='".$web."',Email='".$email."',Description='".$loc."',Motto='".$motto."'");
							
							if($resultc){
		$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates company details.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

										echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 20:
							$user=strtoupper($_GET['user']);
							$name=$_GET['name'];
							$pos=$_GET['pos'];
							$pass=$_GET['pass'];
							$dept=$_GET['dept'];
							$usid=$_GET['usid'];
							$hod=$_GET['hod'];
							$pass=sha1($pass);
							
							$result = mysqli_query($conn,"insert into users values('0','".$user."','".$pos."','images/users/".$usid.".jpg','".$pass."','".$name."','".$dept."','".$usid."','".$hod."',1)");		
							if($result){
		$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts new User into System.User Id:".$user."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
								echo"<script>setTimeout(function() {adduser();},500);</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 21:
							
							$user=$_GET['user'];
							$pos=$_GET['pos'];
							$rec=$_GET['rec'];
							$dept=$_GET['dept'];
							$hod=$_GET['hod'];
							if($rec==1){
							$result = mysqli_query($conn,"update users set password = sha1('password') where name='".$user."'");

							}
							
							
					$result = mysqli_query($conn,"update users set position='".$pos."',dept='".$dept."',hod='".$hod."' where name='".$user."'");
							if($result){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes updates user data.User Id:".$user."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
								echo"<script>setTimeout(function() {adduser();},500);</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 22:
							$cash=$_GET['cash'];
							$doc=$_GET['doc'];
							$user=$_GET['user'];
							$admin=$_GET['admin'];
							$code=$_GET['code'];
							$pharm=$_GET['pharm'];
							$lab=$_GET['lab'];
							
							$result = mysqli_query($conn,"update accesstbl set Admin='".$admin."',Doctor='".$doc."',Cashier='".$cash."',User='".$user."',Pharm='".$pharm."',Lab='".$lab."',Rad='".$_GET['rad']."'
							,Recep='".$_GET['recep']."',ExtMedic='".$_GET['ext']."',Accounts='".$_GET['acc']."',Store='".$_GET['store']."',Emp='".$_GET['emp']."',Triage='".$_GET['triage']."',Nurse='".$_GET['nurse']."' where AccessCode='".$code."'");
					
							if($result){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates user rights .User Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"22\" height=\"22\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"22\" height=\"22\"/>";
							break;
							
							case 23:
							$name=$_GET['name'];
							$result = mysqli_query($conn,"insert into branchtbl values('0','".$name."')");	
					
							if($result){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts a new company branch.Branch name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 24:
							$code=$_GET['code'];
							
							$result = mysqli_query($conn,"DELETE from branchtbl where BranchId='".$code."'");
					
							if($result){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes company branch.Branch Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo"<script>$('#bname2').val('');</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 25:
							
							$userid=$_GET['userid'];
							$name=$_GET['name'];
							$fname=$_GET['fname'];
							$query =mysqli_query($conn,"select * from users where name='".$name."' and userid!='".$userid."'");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Username already taken.</p>');
									e.preventDefault();
									</script>";	
									exit;	
									}
								
							$result = mysqli_query($conn,"update users set name='".$name."',fullname='".$fname."' where userid=".$userid."");
					
							if($result){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." changes username.User Id:".$userid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
								break;
								
							case 26:
							
							$userid=$_GET['userid'];
							$opass=$_GET['opass'];
							$npass=$_GET['npass'];
							$cpass=$_GET['cpass'];
							$resultx =mysqli_query($conn,"select * from users where userid=".$userid."");
							$row=mysqli_fetch_array($resultx);
							$kpass=stripslashes($row['password']);
							$sopass=sha1($opass);
							
							if($sopass!=$kpass){
								echo"<script>$().customAlert();
		alert('Error!', '<p>Your old password is wrong!</p>');
		e.preventDefault();</script>";
								exit;
							}
							
							if($cpass!=$npass){
									echo"<script>$().customAlert();
		alert('Error!', '<p>Your New password does not match the confirmation detail!</p>');
		e.preventDefault();</script>";
								exit;
							}
							else if($opass==$npass){
									echo"<script>$().customAlert();
		alert('Error!', '<p>Your old password cannot be the same as your new password!</p>');
		e.preventDefault();</script>";
								exit;
							}
							else if((strlen($npass) > 16) || (strlen($npass) < 6)){
									echo"<script>$().customAlert();
		alert('Error!', '<p>Password length must be between 6 and 16 characters!</p>');
		e.preventDefault();</script>";
								exit;
							}
							else {
						$pass= sha1($npass);
						$result = mysqli_query($conn,"update users set password='".$pass."' where userid=".$userid."");
					
						if($result){
								
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." changes password details.User Id:".$userid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
						echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>
						<script>
											setTimeout(function() {
											changelogin();},500);
										</script>';
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
							}
								break;
							
							case 27:
							$name=$_GET['name'];
							$result = mysqli_query($conn,"insert into expensetbl values('0','".$name."')");	
							if($result){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts expense category.Name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 28:
							$code=$_GET['code'];
							
							$result = mysqli_query("DELETE from expensetbl where ExpenseId='".$code."'");
					
							if($result){
		$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes expense category.Expense Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo"<script>$('#bname2').val('');</script>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 29:
							$name=$_GET['name'];
							$nom=$_GET['nom'];
							$date=$_GET['datee'];
							$amount=$_GET['amount'];
							$stamp=preg_replace('~/~', '', $date);
							
							$result = mysqli_query("insert into nominaldata values('0','".$name."','".$nom."','".$date."','".$amount."','".$stamp."')");	
					
							if($result){
			$resulta = mysqli_query("insert into log values('0','".$username." inserts new nominal data.Name:".$nom."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 30:
							$stamp=date('Ymd');
							$date=date('d/m/Y');
							
							//get receipt no
							$question =mysqli_query("SELECT * FROM issuetable order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['IssueNo'])+1;
							
							$max=count($_SESSION['issue']);
							for ($i = 0; $i < $max; $i++){
							$itcode = $_SESSION['issue'][$i][0];
							$itname = $_SESSION['issue'][$i][1];
							$itquat = $_SESSION['issue'][$i][2];
							$unit = $_SESSION['issue'][$i][3];
							$part = $_SESSION['issue'][$i][4];
							$pack = $_SESSION['issue'][$i][5];
							$dep1 = $_SESSION['issue'][$i][6];
							$dep2 = $_SESSION['issue'][$i][7];
							$tot = $_SESSION['issue'][$i][8];
							
	$resulta = mysqli_query("insert into issuetable values('0','".$rcptno."','".$date."','".$itcode."','".$itname."','".$itquat."','".$unit."','".$part."','".$dep1."','".$dep2."','".$pack."','".$stamp."','".$username."','',1,'".$tot."')");

				}
					
				if($resulta){
$resulta = mysqli_query("insert into log values('0','".$username." makes a stock request.Id:".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			unset($_SESSION['issue']);											
			echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
						
							echo"
										<script>
										window.open('report.php?id=8&rcptno=".$rcptno."');
										setTimeout(function() {stockrequest();},500);
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
										exit;
									}
									else{
								$result = mysqli_query("DELETE from issuetable where IssueNo='".$rcptno."'");
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
					
					
							break;
							
							case 31:
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$obal=$_GET['obal'];
							$smartcomp=$_GET['smartcomp'];
							$result = mysqli_query("insert into creditcustomers values('0',0,'".$name."','".$tel."','".$obal."','".$smartcomp."')");	
							if($result){
							$resulta = mysqli_query("insert into log values('0','".$username." adds new debtor.name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditcust();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;

							case 31.1:
							$cid=$_GET['cid'];
							$cname=$_GET['cname'];
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$obal=$_GET['obal'];
							$smartcomp=$_GET['smartcomp'];
							$copay=$_GET['copay'];
							$copayam=$_GET['copayam'];
							$copaytype=$_GET['copaytype'];
							$result = mysqli_query("insert into schemes values('0','".$name."','".$cid."','".$cname."','".$tel."','".$smartcomp."','".$copay."','".$copayam."','".$copaytype."')");	
							if($result){
							$resulta = mysqli_query("insert into log values('0','".$username." adds new insurance scheme.name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditcust();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;

							
							case 32:
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$cid=$_GET['cid'];
							$smartcomp=$_GET['smartcomp'];
							$result = mysqli_query("update creditcustomers set CustomerName='".$name."',Tel='".$tel."',SmartComp='".$smartcomp."' where CustomerId=".$cid."");	
					
							if($result){
							$resulta = mysqli_query("insert into log values('0','".$username." updates debtor detail.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditcust();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case '32.1':
							$code=$_GET['code'];
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$cid=$_GET['cid'];
							$cname=$_GET['cname'];
							$smartcomp=$_GET['smartcomp'];
							$copay=$_GET['copay'];
							$copayam=$_GET['copayam'];
							$copaytype=$_GET['copaytype'];
							$result = mysqli_query("update schemes set CompanyId='".$cid."',CompanyName='".$cname."',SchemeName='".$name."',Tel='".$tel."',SmartComp='".$smartcomp."',CoPay='".$copay."',CoPayAm='".$copayam."',CoPayType='".$copaytype."' where SchemeId=".$code."");	
					
							if($result){
							$resulta = mysqli_query("insert into log values('0','".$username." updates scheme detail.Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;

							case '32.2':
							$code=$_GET['code'];
							$result = mysqli_query("DELETE from schemes where SchemeId=".$code."");
							$resulta = mysqli_query("insert into log values('0','".$username." deletes scheme from schemes database.Scheme ID:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							case 33:
							$name=$_GET['name'];
							$amo=$_GET['amo'];
							$rdebt=$_GET['rdebt'];
							$pmode=$_GET['pmode'];
							$desc=$_GET['desc'];
							$cid=$_GET['cid'];
							$date=date('Y/m/d');
							$stamp=preg_replace('~/~', '', $date);
							
							$resulta = mysqli_query("insert into customerdebts values('0','".$cid."','".$name."','".$amo."','cr','','','".$rdebt."','".$pmode."','".$desc."','".$date."','".$stamp."',1)");	
							$resultb =mysqli_query("SELECT * FROM creditcustomers WHERE CustomerId='".$cid."'");
							$row=mysqli_fetch_array($resultb);
							$rcred=stripslashes($row['RemainingCredit']);
							$rcred=$rcred+$amo;
							$resultc = mysqli_query("update creditcustomers set RemainingCredit='".$rcred."',Bal='".$rdebt."' where CustomerId=".$cid."");
						
							if($resulta&&$resultb&&$resultc){
$resulta = mysqli_query("insert into log values('0','".$username." pays customer debt.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditcust();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 34:
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$obal=$_GET['obal'];
							$result = mysqli_query("insert into creditsuppliers values('0','".$name."','".$tel."','".$obal."')");	
							if($result){
$resulta = mysqli_query("insert into log values('0','".$username." adds new creditor.name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditsup();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 35:
							$cid=$_GET['cid'];
								
				$result = mysqli_query("DELETE from creditcustomers where CustomerId='".$cid."'");
					
							if($result){
$resulta = mysqli_query("insert into log values('0','".$username." deletes credit customer.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditcust();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 36:
							$cid=$_GET['cid'];
							
							
				$resulta = mysqli_query("DELETE from creditsuppliers where CustomerId='".$cid."'");
				
					
							if($result){
							$resulta = mysqli_query("insert into log values('0','".$username." deletes credit customer.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditsup();},500);
										</script>';}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
						case 37:
							$name=$_GET['name'];
							$tel=$_GET['tel'];
							$cid=$_GET['cid'];
							$result = mysqli_query("update creditsuppliers set CustomerName='".$name."',Tel='".$tel."' where CustomerId=".$cid."");	
					
							if($result){
$resulta = mysqli_query("insert into log values('0','".$username." updates creditor detail.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");				echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditsup();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							case '37.1':
							$name=$_GET['name'];
							$amo=$_GET['amo'];
							$bal=$_GET['bal'];
							$desc=$_GET['desc'];
							$rcred=$_GET['rcred'];
							$cid=$_GET['cid'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
						$resulta = mysqli_query("insert into supplierdebts values('0','".$cid."','".$name."','".$amo."','dr','".$bal."','','".$desc."','".$date."','".$stamp."')");	
						$resultb = mysqli_query("update creditsuppliers set Bal='".$bal."',RemainingCredit='".$rcred."' where CustomerId=".$cid."");	
					
							if($resulta&&$resultb){
$resulta = mysqli_query("insert into log values('0','".$username." posts debt to supplier.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditsup();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
						
						
						case 38:
							$name=$_GET['name'];
							$amo=$_GET['amo'];
							$rdebt=$_GET['rdebt'];
							$pmode=$_GET['pmode'];
							$desc=$_GET['desc'];
							$cid=$_GET['cid'];
							$date=date('Y/m/d');
							$stamp=preg_replace('~/~', '', $date);
							
						$resulta = mysqli_query("insert into supplierdebts values('0','".$cid."','".$name."','".$amo."','cr','".$rdebt."','".$pmode."','".$desc."','".$date."','".$stamp."')");	
						$resultc = mysqli_query("update creditsuppliers set Bal='".$rdebt."' where CustomerId=".$cid."");
						
							if($resulta&&$resultc){
$resulta = mysqli_query("insert into log values('0','".$username." pays supplier debt.Id:".$cid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		echo"<img src=\"images/tick.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							echo'<script>
										setTimeout(function() {
											creditsup();},500);
										</script>';
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:30px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case 39:
	
						
							
							$a=$_GET['a'];
							$emp=$_GET['emp'];
							$pfno=$_GET['pfno'];
							
							
							
							if(isset($_SESSION['lan'])){
								$languages=implode(";",$_SESSION['lan']);
							}else $languages=NULL;
							if(isset($_SESSION['skl'])){
								$skills=implode(";",$_SESSION['skl']);
							}else $skills=NULL;
							if(isset($_SESSION['hobby'])){
								$hobbies=implode(";",$_SESSION['hobby']);
							}else $hobbies=NULL;
							if(isset($_SESSION['exp'])){
								$experience=implode(";",$_SESSION['exp']);
							}else $experience=NULL;
							if(isset($_SESSION['edu'])){
								$education=implode(";",$_SESSION['edu']);
							}else $education=NULL;
							
						
							if($a==1){
								
							$result =mysqli_query("select * from employee where emp='".$emp."'OR pfno='".$pfno."'");
							$num_results = mysqli_num_rows($result);
									if($num_results>=1){
										echo"
												<script>
												$().customAlert();
												alert('Error!', '<p>Employee No. already exists in the database</p>');
												e.preventDefault();
												</script>";
										exit;
									}


							$stampexp=$_GET['contto'];
							$stampexp=preg_replace('~/~', '', $stampexp);
							
							$resulta = mysqli_query("insert into employee values('0','".$_GET['emp']."','".$_GET['pfno']."','".strtoupper($_GET['fname'])."','".strtoupper($_GET['mname'])."','".strtoupper($_GET['lname'])."','".strtoupper($_GET['dob'])."','".strtoupper($_GET['mar'])."','".strtoupper($languages)."','".strtoupper($_GET['gender'])."','".strtoupper($_GET['idno'])."','".strtoupper($_GET['phone'])."','".strtoupper($_GET['phone2'])."','".strtoupper($_GET['email'])."',
							'".strtoupper($_GET['phy'])."','".strtoupper($_GET['town'])."','".strtoupper($_GET['sal'])."','".strtoupper($_GET['emptype'])."','".strtoupper($_GET['contfrom'])."','".strtoupper($_GET['contto'])."','".$stampexp."','".strtoupper($_GET['dept'])."','".strtoupper($_GET['branch'])."','".strtoupper($_GET['pos'])."','".mysql_real_escape_string($conn,trim($_GET['jobdesc']))."','".$_GET['bgroup']."','".mysql_real_escape_string($conn,trim($_GET['alergy']))."','".$_GET['ename']."','".$_GET['ephone']."','".$_GET['epostal']."','".$_GET['bid']."','".strtoupper($_GET['bname'])."','".$_GET['acno']."','".$_GET['pinno']."','".$_GET['nssf']."','".$_GET['nhif']."','".strtoupper($education)."','".strtoupper($experience)."','".strtoupper($skills)."','".strtoupper($hobbies)."','images/employees/".$emp.".jpg','0','0','".$_GET['doe']."','','','".date('Ymd')."','".date('d/m/Y')."',1,'')") or die (mysql_error());
							
							
							$fnames=strtoupper($_GET['fname']). ' '.strtoupper($_GET['mname']).' '.strtoupper($_GET['lname']);
							$cur=date('m_Y');
							$resultb = mysqli_query("insert into ".$cur." values('0','".$_GET['emp']."','".strtoupper($_GET['branch'])."','".$fnames."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')") or die (mysql_error());
							
							}
							
							
							else{
								
							$resulta = mysqli_query($conn,"update employee set pfno='".$_GET['pfno']."',fname='".strtoupper($_GET['fname'])."',mname='".strtoupper($_GET['mname'])."',lname='".strtoupper($_GET['lname'])."',dob='".strtoupper($_GET['dob'])."',marital='".strtoupper($_GET['mar'])."',languages='".strtoupper($languages)."',gender='".strtoupper($_GET['gender'])."',idno='".strtoupper($_GET['idno'])."',phone='".strtoupper($_GET['phone'])."',phone2='".strtoupper($_GET['phone2'])."',email='".strtoupper($_GET['email'])."',phyadd='".strtoupper($_GET['phy'])."',town='".strtoupper($_GET['town'])."',salary='".strtoupper($_GET['sal'])."',emptype='".strtoupper($_GET['emptype'])."',contractfrom='".strtoupper($_GET['contfrom'])."',contractto='".strtoupper($_GET['contto'])."',dept='".strtoupper($_GET['dept'])."',branch='".strtoupper($_GET['branch'])."',position='".strtoupper($_GET['pos'])."',jobdesc='".mysql_real_escape_string($conn,trim($_GET['jobdesc']))."',bgroup='".strtoupper($_GET['bgroup'])."',alergy='".mysql_real_escape_string($conn,trim($_GET['alergy']))."',ename='".strtoupper($_GET['ename'])."',ephone='".strtoupper($_GET['ephone'])."',epostal='".strtoupper($_GET['epostal'])."',bid='".strtoupper($_GET['bid'])."',bname='".strtoupper($_GET['bname'])."',acno='".strtoupper($_GET['acno'])."',pinno='".strtoupper($_GET['pinno'])."',nssf='".strtoupper($_GET['nssf'])."',nhif='".strtoupper($_GET['nhif'])."',education='".strtoupper($education)."',experience='".strtoupper($experience)."',skills='".strtoupper($skills)."',hobbies='".strtoupper($hobbies)."',employdate='".strtoupper($_GET['doe'])."' where emp='".$emp."'");
							
							
							$resultb =mysqli_query("select * from payroll where status=1 and emp='".$emp."' order by serial desc limit 0,1");
							$row=mysqli_fetch_array($resultb);
							$serial=stripslashes($row['serial']);
				$resultc = mysqli_query("update payroll set bid='".strtoupper($_GET['bid'])."',bname='".strtoupper($_GET['bname'])."',acno='".strtoupper($_GET['acno'])."' where serial='".$serial."'");
								
							}
							
									if($resulta){
$resulta = mysqli_query("insert into log values('0','".$username." inserts data into Employee database.PF No:".$emp."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
									echo'<img src="images/tick.png" style="margin-top:0px"  width="30" height="30"/>';
									if($a==1){
										echo'<script>setTimeout(function() {newemp();},500);</script>';
                                        }else{echo'<script>setTimeout(function() {seeemp(61);},500);</script>';}
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="margin-top:0px"  width="30" height="30"/>';
										
									}
							
							break;
							
							
								case 43:
							$sal=$_GET['sal'];
							$name=$_GET['name'];
							$emp=$_GET['emp'];
							$mon=$_GET['mon'];
							$page=$_GET['page'];
							$allow=$_GET['allow'];
							$adva=$_GET['adva'];
							$ins=$_GET['ins'];
							$ded=$_GET['ded'];
							$othrs=$_GET['othrs'];
							$rateot=$_GET['rateot'];
							$date= date('m_Y'); 
							$dept='Others'; 
							$totalot=$rateot*$othrs;
							$net=$sal+$allow+$totalot-$adva-$ins-$ded;
							if($emp!=''){
							$result =mysqli_query("select * from ".$mon." where emp='".$emp."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>=1){
								echo'exists';
								exit;
							}
							
		$resulta = mysqli_query("insert into ".$mon." values('0','".$mon."','".$emp."','".$name."','".$dept."','".$sal."',
							'".$allow."','".$adva."','".$ins."','".$ded."','".$othrs."','".$rateot."','".$totalot."','".$net."',1)");
		$resultb = mysqli_query("insert into salary values('0','".$mon."','".$emp."','".$name."','".$dept."','".$sal."',
							'".$allow."','".$adva."','".$ins."','".$ded."','".$othrs."','".$rateot."','".$totalot."','".$net."','')");
		
		
		
							if($resulta&&$resultb){
									echo'<img src="images/tick.png"  width="20" height="20"/>';
									echo"<script>
										setTimeout(function() {
											pagerefresh(1,9,'".$mon."');},500);
										</script>
									";
									
									}
								else{
									echo'<img src="images/delete.png"  width="20" height="20"/>';
									}
									
							}
							else{
									echo'<img src="images/delete.png"  width="20" height="20"/>';
									}
								break;
								
							case 44:
							$emp=$_GET['emp'];
							$page=$_GET['page'];
							$mon=$_GET['mon'];
						
							echo'<p style="display:none" id="empno">'.$emp.'</p>';
							$resulta = mysqli_query("DELETE from salary where emp='".$emp."'");
							$resultb = mysqli_query("DELETE from ".$mon." where emp='".$emp."'");
							if($resulta&&$resultb){
									echo'
									<img src="images/delete.png"  width="20" height="20"/>';
									echo"<script>
										setTimeout(function() {
											pagerefresh(".$page.",9,'".$mon."');},500);
										</script>
									";
									}
								
								break;
								
								
							case 45:
							$mon=$_GET['mon'];
							$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;
							$result =mysqli_query("select * from ".$mon."");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$net=stripslashes($row['net']);
							$sal=stripslashes($row['sal']);
							$allow=stripslashes($row['allow']);
							$adva=stripslashes($row['adva']);
							$ins=stripslashes($row['ins']);
							$ded=stripslashes($row['ded']);
							$othrs=stripslashes($row['othrs']);
							$totalot=stripslashes($row['totalot']);
							$totalnet+=$net;
							$totalsal+=$sal;
							$totalallow+=$allow;
							$totaladva+=$adva;
							$totalins+=$ins;
							$totalded+=$ded;
							$totalothrs+=$othrs;
							$totalotal+=$totalot;}
							
							
							$result =mysqli_query("select * from salaryledger where month='".$mon."'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);}
							$balance=stripslashes($row['Balance']);
							$stamp=stripslashes($row['stamp']);
							$am=stripslashes($row['amount']);
							
		$resultb = mysqli_query("update salaryledger set amount='".$totalnet."',sal='".$totalsal."',allow='".$totalallow."',adva='".$totaladva."',ins='".$totalins."',ded='".$totalded."',othrs='".$totalothrs."',totalot='".$totalotal."',status=0 where month='".$mon."'");
							$totalnet-=$am;
							
							
							$result =mysqli_query("select * from salaryledger where stamp>=".$stamp."");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$monn=stripslashes($row['month']);
							$balance=stripslashes($row['Balance']);
							$balance-=$totalnet;
							$resultc = mysqli_query("update salaryledger set Balance='".$balance."' where month='".$monn."'");
							$balance=0;
							}
							
							if($resultc){
									echo'<img src="images/tick.png"  width="30" height="30"/>';
									
									}
								else{
									echo'<img src="images/delete.png"  width="30" height="30"/>';
									}
								
									echo"<script>
										setTimeout(function() {
											location.reload(true);},500);
										</script>
									";
								break;
								
								
						case 46:
							$regn=$_GET['regn'];
							$tbl=$_GET['tbl'];
							
						$result = mysqli_query("update ".$tbl." set status=1 where regn='".$regn."'");
							
							if($result){
									echo'<img src="images/tick.png" width="20px" height="20px"/>';
																		
									}
								else{
									echo'<img src="images/delete.png" width="20px" height="20px"/>';
									}
								
									
						break;
						
						case 47:
						$a=$_GET['a'];
						echo $a;
						$result =mysqli_query("select * from items where ItemCode=".$a."");
							$row=mysqli_fetch_array($result);
								$vat=stripslashes($row['Vat']);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$itcost = stripslashes($row['PurchPrice']);
								$bal = stripslashes($row['Bal']);
								$qsold = stripslashes($row['Qsold']);
								
								echo"<script>
								$('#total').val('');
								$('#disc').val('');
								$('#price').val(".$itemp.");
								$('#red').val('".$item."');
								$('#code').val(".$code.");
								$('#itcost').val(".$itcost.");
								$('#vat').val(".$vat.");
								$('#bal').val(".$bal.");
								$('#qsold').val(".$qsold.");
								if($('#quat').val()!=''){
								var quat = $('#quat').val();
								var tot=".$itemp." * quat;
								sot=(tot).formatMoney(2, '.', ',');
								$('#tprice').val(sot);
								vat=".$vat." * quat;
								tot=parseInt(tot,10) + parseInt(vat,10);
								tot=(tot).formatMoney(2, '.', ',');
								$('#total').val(tot);
								vat=(vat).formatMoney(2, '.', ',');
								$('#tvat').val(vat);
								}
								$('#quat').focus();
									</script>";
								
								echo $item;
								break;
							
							case 48:
							$regn=$_GET['reg'];
							$rcpt=$_GET['rcpt'];
							$type=$_GET['type'];
							$inp=$_GET['inp'];
							$sendto=$_GET['sendto'];
							$oname=$_GET['oname'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							$cur=date('Y-m');
							
									
								
							$resultc = mysqli_query($conn,"SELECT * FROM encounters WHERE Month='".$cur."'");
							$rowc = mysqli_fetch_array($resultc);
							$a=stripslashes($rowc[$type]);
							$a++;
							
							
							$resultd =mysqli_query($conn,"SELECT * FROM newprescription WHERE PatId='".$regn."' and TransDate='".date('Y/m/d')."'");
							$num_resultsd = mysqli_num_rows($resultd);
							if($num_resultsd>0){
													echo"
													<script>
													$().customAlert();
													alert('Failure!', '<p>A similar record for this patient has already been created today.</p>');
													e.preventDefault();
													</script>";
													exit;
							}


							$resultc =mysqli_query($conn,"SELECT * FROM patients where pntno='".$regn."' limit 0,1");
							$rowc=mysqli_fetch_array($resultc);
							$inp=stripslashes($rowc['accum']);	
							
							//get pres
							$question =mysqli_query($conn,"SELECT * FROM newprescription order by Id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$pres=stripslashes($ans['Id'])+1;
							$pres='O-'.$pres;

							$resulta = mysqli_query($conn,"insert into newprescription values('0','".$pres."','".$date."','".$type."','".$regn."','','','".$oname."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','1','".$stamp."','".date('H:i')."','','','','','','".$sendto."','','','".$inp."','','','')");
													
							$resultb= mysqli_query($conn,"update encounters set ".$type."='".$a."' where Month='".$cur."'");
							$resultc= mysqli_query($conn,"update Sales set Status=2 where RcptNo='".$rcpt."'");
							if($resulta){
							//send popups
							if($sendto=='TRIAGE'){
							$dep='TRIAGE';	
							}else{$dep=$sendto;}
							$resultc =mysqli_query($conn,"SELECT * FROM compips WHERE dept='".$dep."'");
							$num_resultsc = mysqli_num_rows($resultc);	
							for ($i=0; $i <$num_resultsc; $i++) {
							$rowc=mysqli_fetch_array($resultc);
							$ip=stripslashes($rowc['ip']);		
							
								$resultd =mysqli_query($conn,"SELECT * FROM logintable WHERE computerip='".$ip."'");
								$num_resultsd = mysqli_num_rows($resultd);	
								for ($d=0; $d <$num_resultsd; $d++) {
								$rowd=mysqli_fetch_array($resultd);
								$user=stripslashes($rowd['username']);
								$resulte = mysqli_query($conn,"insert into messages values('0','".$user."','System','Incoming Patient from Reception-".$oname."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
								}
										
							}
								
								
					
				$resulta = mysqli_query($conn,"insert into log values('0','".$username." starts a new Review consultation-NAME:".$oname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<img src="images/up.jpg" style="width:40px; height:40px;">
										<script>
										setTimeout(function() {
											reception();},500);	
										</script>';
										exit;
										
									}
									else{
										echo'<img src="images/down.jpg" style="width:40px; height:40px;">
										
										';
									}
						
							break;
							case '48.1':
							$pid=$_GET['pid'];
							$sendto=$_GET['sendto'];
							$resulta= mysqli_query($conn,"update newprescription set Temp='".$_GET['temp']."',Bp1='".$_GET['bp1']."',Bp2='".$_GET['bp2']."',Weight='".$_GET['weight']."',RespRate='".$_GET['resprate']."',PulseRate='".$_GET['pulserate']."',Rbs='".$_GET['rbs']."',Dept='".$_GET['sendto']."',Allergies='".mysql_real_escape_string(trim($_GET['allergies']))."',OtherDetails='".mysql_real_escape_string(trim($_GET['odetail']))."',Status=2,TriageTime='".date('H:i')."' where PrescId='".$pid."'");
							if($resulta){
								
								//send popups
							$resultc =mysqli_query($conn,"SELECT * FROM compips WHERE dept='GENERAL CONSULTATIONS'");
							$num_resultsc = mysqli_num_rows($resultc);	
							for ($i=0; $i <$num_resultsc; $i++) {
							$rowc=mysqli_fetch_array($resultc);
							$ip=stripslashes($rowc['ip']);		
							
								$resultd =mysqli_query($conn,"SELECT * FROM logintable WHERE computerip='".$ip."'");
								$num_resultsd = mysqli_num_rows($resultd);	
								for ($d=0; $d <$num_resultsd; $d++) {
								$rowd=mysqli_fetch_array($resultd);
								$user=stripslashes($rowd['username']);
								$resulte = mysqli_query($conn,"insert into messages values('0','".$user."','System','Incoming Patient from Triage','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
								}
										
							}
								
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates consultations[triage information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">
										<script>
											setTimeout(function() {
											triage();},500);
										</script>';
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;
							case 49:
							$pid=$_GET['pid'];
							$phist=$_GET['phist'];
							$rectest=$_GET['rectest'];
							$surg=$_GET['surg'];
							$complaint=$_GET['complaint'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							$rec=$_GET['rec'];
							if($rec==1){
							$status=2;
							}
							else if($_GET['fin']==1){
							$status=0;
							}
								else $status=3;
							
				$resulta = mysqli_query($conn,"update newprescription set History='".mysql_real_escape_string(trim($phist))."',Tests='".mysql_real_escape_string(trim($rectest))."',Complaint='".mysql_real_escape_string(trim($complaint))."',Surgery='".mysql_real_escape_string(trim($surg))."',Status=".$status." where PrescId='".$pid."'");
				
				if($resulta){
				$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates prescriptions database (doctor examination stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									
										
									echo'<img src="images/up.jpg" style="margin-top:-50px; margin-right:20px;width:40px; height:40px ">
										<script>
											setTimeout(function() {
											docexam();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="margin-top:-50px;margin-right:20px;width:40px; height:40px"></p>
										
										';
									}
						
							break;

							case 49.1:
							$pid=$_POST['pid'];
							$lid=$_POST['lid'];
							$sample=$_POST['sample'];
							$condition=$_POST['condition'];
							$rejacc=$_POST['rejacc'];
							$odetail=$_POST['odetail'];
							$source=$_POST['source'];
						

							//get lab no
									$unique=0;

							if($rejacc==1){
							$stat=3;

							$result =mysqli_query($conn,"select * from labunique where prescid='".$pid."' order by id desc limit 0,1");
							
							if(mysqli_num_rows($result)>0){
							$row=mysqli_fetch_array($result);
							$unique=stripslashes($row['unique_no']);
							}
							else {
								$result =mysqli_query($conn,"select * from labunique  order by id desc limit 0,1");
								$row=mysqli_fetch_array($result);
								$unique=stripslashes($row['unique_no'])+1;
								$resultd = mysqli_query($conn,"insert into labunique values('0','".$unique."','".$pid."')");
			
							}

								

							$resulta = mysqli_query($conn,"update labrequests set sample='".$sample."',sample_condition='".$condition."',accept_reject='".$rejacc."',status='".$stat."',source='".$source."',other_details='".$odetail."',unique_no='".$unique."',rectime='".date('H:i')."' where id='".$lid."'");


							}

							else{
								$stat=4;

								$resulta = mysqli_query($conn,"update labrequests set sample='".$sample."',sample_condition='".$condition."',accept_reject='".$rejacc."',status='".$stat."',source='".$source."',other_details='".$odetail."',rectime='".date('H:i')."' where id='".$lid."'");
							}
							
			
			if($resulta){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." receives lab sample (lab reception stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<img src="images/up.jpg" style="width:40px; height:40px/">
										<script>
											setTimeout(function() {
											labrecep();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="width:40px; height:40px"></p>
										
										';
									}
						
							break;

							case 49.2:
								$db='MYDB';
								$sample=$_POST['sample'];
								$conn=odbc_connect($db,'','') or die("error in connection");
								$sql="select * from TEST_RESULT where SAMPLE_ID='".$sample."'";
								$rs=odbc_exec($conn,$sql);
								if(!$rs)
								{exit("Error in SQL");}
								echo "<div class=\"cleaner_h5\"></div><table><tr>";
								echo "<th >NAME</th>";
								echo "<th >RESULT</th></tr>";

								while (odbc_fetch_row($rs))
								{
									$name=odbc_result($rs, "ITEM_NAME");
									$res=odbc_result($rs, "RESULT");
									echo "<tr><td>$name</td>";
									echo "<td>$res</td><tr>";
								}
								odbc_close($conn);
								echo "</table><div class=\"cleaner_h5\"></div>
								<script>$('#labresults').val(".$sample.");</script>";


							break;

							case 49.3:
								
								$db='FHG';
								$sample=$_POST['sample'];

								$conn=odbc_connect($db,'','') or die("error in connection");
								$sql="select * from SampleValue where SerialNO='".$sample."'";
								$rs=odbc_exec($conn,$sql);


								$sql2="select * from GroupLimit where GroupType=1";
								$rs2=odbc_exec($conn,$sql2);


								if(!$rs)
								{exit("Error in SQL");}
								echo "<div class=\"cleaner_h5\"></div>";
								echo '<table id="datatable"  style="width:100%;text-align:center;font-size:11px; font-weight:bold; padding:0; " >
									<tbody>
									<tr style="width:100%; height:20px;color:#fff; background:#333; padding:0">
									   		<td  style="width:40%;">Item Name</td>
									        <td  style="width:12%;">Value</td>
									        <td  style="width:12%;">Unit</td>
									       <td  style="width:23%;">Range</td>
									        <td  style="width:12%;">Info</td>
									    </tr>';
									    $wbc=odbc_result($rs, "WBC")/10;
									    $lym=odbc_result($rs, "LY_Radio")/10;
									    $mid=odbc_result($rs, "MO_Radio")/10;
									    $gran=odbc_result($rs, "GR_Radio")/10;
									    $lymh=odbc_result($rs, "LY")/10;
									    $midh=odbc_result($rs, "MO")/10;
									    $granh=odbc_result($rs, "GR")/10;
									
										echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">WBC</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$wbc.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">10^3/uL</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "WBC_L").'-'.odbc_result($rs2, "WBC_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									    echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal;background:#F0F0F0 ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">LYM%</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$lym.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">%</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "LY_Radio_L").'-'.odbc_result($rs2, "LY_Radio_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';


										echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">MID%</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$mid.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">%</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "MO_Radio_L").'-'.odbc_result($rs2, "MO_Radio_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									    echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal;background:#F0F0F0 ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">GRAN%</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$gran.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">%</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "GR_Radio_L").'-'.odbc_result($rs2, "GR_Radio_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									     echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal; ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">LYM#</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$lymh.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">10^3/uL</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "LY_L").'-'.odbc_result($rs2, "LY_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									     echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal;background:#F0F0F0 ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">MID#</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$midh.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">10^3/uL</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "MO_L").'-'.odbc_result($rs2, "MO_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									      echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal; ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">GRAN#</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$granh.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">10^3/uL</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "GR_L").'-'.odbc_result($rs2, "GR_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';

									      echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal; ">
									    <td style="border-width:0.5px; border-color:#666; border-style:solid;" colspan=5></td>
									    </tr>';

									      echo' <tr style="width:100%; height:20px;padding:0; font-weight:normal;background:#F0F0F0 ">
									    <td style="width:40%;border-width:0.5px; border-color:#666; border-style:solid;">GRAN#</td>
									   <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.$granh.'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">10^3/uL</td>
									   	<td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;">'.odbc_result($rs2, "GR_L").'-'.odbc_result($rs2, "GR_H").'</td>
									     <td style="width:12%;border-width:0.5px; border-color:#666; border-style:solid;"></td>
									    </tr>';




									 
								odbc_close($conn);
								echo "</tbody></table><div class=\"cleaner_h5\"></div>";


							break;
							
							

							case 50:
							$pid=$_POST['pid'];
							$lid=$_POST['lid'];
							$lab=$_POST['lab'];
							$restype=$_POST['restype'];
							
			$resultc= mysqli_query($conn,"update Sales set Status=2 where RcptNo='".$_POST['fee']."'");
			$resulta = mysqli_query($conn,"update labrequests set results='".mysql_real_escape_string(trim($lab))."',restype='".$restype."',doneby='".mysql_real_escape_string(trim($fullname))."',status=2,servtime='".date('H:i')."' where id='".$lid."'");
			$resultx = mysqli_query($conn,"update newprescription set LabTime='".date('H:i')."' where PrescId='".$pid."'");
			if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates lab request database (lab analysis stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<img src="images/up.jpg" style="width:40px; height:40px/">
										<script>
											setTimeout(function() {
											labanal();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="width:40px; height:40px"></p>
										
										';
									}
						
							break;

							case '50.1':
							$pid=$_POST['pid'];
							$lid=$_POST['lid'];
							$rad=$_POST['rad'];
						
			//$resultc= mysqli_query("update Sales set Status=2 where RcptNo='".$_POST['fee']."'");
			$resulta = mysqli_query($conn,"update radrequests set results='".mysql_real_escape_string(trim($rad))."',doneby='".mysql_real_escape_string(trim($fullname))."',status=2,servtime='".date('H:i')."' where id='".$lid."'");
			$resultx = mysqli_query($conn,"update newprescription set RadTime='".date('H:i')."' where PrescId='".$pid."'");
				if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates radiology request database (radiology analysis stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<img src="images/up.jpg" style="width:40px; height:40px/">
										<script>
											setTimeout(function() {
											radiology();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="width:40px; height:40px"></p>
										
										';
									}
						
							break;
							
							
								case '50.2':
							$pid=$_GET['pid'];
							$rad=$_GET['rad'];
			$resultc= mysqli_query($conn,"update Sales set Status=2 where RcptNo='".$_GET['fee']."'");
			$resulta = mysqli_query($conn,"update newprescription set NursesNotes='".mysql_real_escape_string(trim($_GET['rad']))."',RecNurse=2 where PrescId='".$pid."'");
			if($pid==0){
			$resultb = mysqli_query($conn,"insert into externals values('0','".date('d/m/Y')."','".$_GET['oname']."','Nurse Notes:".mysql_real_escape_string(trim($_GET['rad']))."','INPATIENT','".$_GET['fee']."','".date('Ymd')."','".$username."',1)");	
			}
				if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates prescriptions database (Nursing analysis stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<p><img src="images/up.jpg" style="width:40px; height:40px"></p>
										<script>
											setTimeout(function() {
											nursing();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="width:40px; height:40px"></p>
										
										';
									}
						
							break;
							case '50.3':
							$pid=$_GET['pid'];
							$theatre=$_GET['theatre'];
			$resulta = mysqli_query($conn,"update theatrequests set notes='".mysql_real_escape_string(trim($theatre))."',doneby='".mysql_real_escape_string(trim($fullname))."',status=2,servtime='".date('H:i')."' where prescid='".$pid."'");
			
				if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates theatre requests database (Surgery analysis stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<img src="images/up.jpg" style="width:40px; height:40px">
										<script>
											setTimeout(function() {
											theatre();},500);
										</script>';
										exit;
									}
									else{
										echo'<img src="images/down.jpg" style="width:40px; height:40px">
										
										';
									}
						
							break;
								
							case 51:
							$pid=$_GET['pid'];
							$diag=$_GET['diag'];
							$med=$_GET['med'];
							$date=date('d/m/Y');
							if($_GET['fin']==1){
							$status=0;
							}else $status=5;
				$resulta = mysqli_query("update newprescription set Diagnosis='".mysql_real_escape_string(trim($diag))."',DrugsGiven='".mysql_real_escape_string(trim($med))."',Status=".$status." where PrescId='".$pid."'");
				if($resulta){
									
$resulta = mysqli_query("insert into log values('0','".$username." updates prescriptions database (process precription stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
														
									echo'<img src="images/up.jpg" style="width:40px; height:40px"/>
										<script>
											setTimeout(function() {
											procpres();},500);
										</script>';
										exit;
									}
									else{
										echo'<img src="images/down.jpg" style="width:40px; height:40px"/>
										
										';
									}
						
							break;
							
						case 52:
							$pid=$_GET['pid'];
							$instatus=$_GET['instatus'];
							if($instatus==1){
			$resultd = mysqli_query("insert into insentries values('0','".date('d/m/Y')."','".$_GET['patid']."','".$_GET['patname']."','".$_GET['cfee']."','".$_GET['lfee']."','".$_GET['dfee']."','".$_GET['ofee']."','".$_GET['wfee']."','".$_GET['tfee']."','".$_GET['insid']."','".$_GET['insname']."','".$_GET['cardno']."','".$_GET['ifee']."','".date('Ymd')."',1)");
							}
							
				$resulta = mysqli_query("update newprescription set OtherFee='".$_GET['ofee']."',WardFee='".$_GET['wfee']."',TotFees='".$_GET['tfee']."',AmountPaid='".$_GET['afee']."',ChangeR='".$_GET['bal']."',Insurance='".$_GET['ifee']."',Status=0 where PrescId='".$pid."'");
				
				if($resulta){
$resulta = mysqli_query("insert into log values('0','".$username." updates prescriptions database (pharmacy stage).Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
													
										
									echo'<p><img src="images/up.jpg" style="margin-top:-20px; maargin-right:60px"></p>
										<script>
											setTimeout(function() {
											payments();},500);
										</script>';
										echo"
										<script>
										window.open('report.php?id=21&rcptno=".$pid."');
										</script>";
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="margin-top:-20px"></p>
										
										';
									}
						
							break;
							
							
		
						
							
							case 55:
				$pid=$_GET['pid'];
				$resulta = mysqli_query("update sales set Dispensed=1,Status=2 where RcptNo='".$pid."'");
				if($resulta){
$resulta = mysqli_query("insert into log values('0','".$username." dispenses drugs.Presc Id:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
										
										
									echo'<p><img src="images/up.jpg" style="margin-top:-20px"></p>
										<script>
											setTimeout(function() {
											pharmacy();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="margin-top:-20px"></p>';
									}
						
							break;
							
							case 56:
							$eid=$_GET['a'];
							$result= mysqli_query("update mytasks set Status=0 where Event_id=".$eid."");
							break;
							case '56.1':
							$eid=$_GET['a'];
							$result= mysqli_query("update messages set status=1 where id=".$eid."");
							break;
							
							case '56.2':
							$b=substr($_GET['to'],0,1);
							
							$len=strlen($_GET['to']);
							$len-=1;
							$c=substr($_GET['to'],1,$len);
							
							if($b==1){
							$result = mysqli_query("insert into messages values('0','".$c."','".$_GET['a']."','".$_GET['mess']."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");}
							if($b==2){
							$resulta =mysqli_query("select * from users where dept='".$c."'");
							$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);  
							$result = mysqli_query("insert into messages values('0','".stripslashes($rowa['name'])."','".$_GET['a']."','".$_GET['mess']."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");	
								}
							}
							if($b==3){
							$resulta =mysqli_query("select * from users");
							$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);  
							$result = mysqli_query("insert into messages values('0','".stripslashes($rowa['name'])."','".$_GET['a']."','".$_GET['mess']."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");	
								}
							}
							if($result){
								echo"<script>
										$('#newmessage').dialog( 'close' );
										refreshmytasks();
										</script>"	;
							}else{echo"
										<script>
										$().customAlert();
										alert('Failure!', '<p>Message not sent.</p>');
										e.preventDefault();
										</script>";}
							break;
							case '56.3':
							$a=$_GET['a'];
							$result= mysqli_query("update messages set status=1 where name='".$a."'");
							break;
							
							case 57:
							$task=$_GET['task'];
							$uid=$_GET['uid'];
							$date=date('d/m/Y');
							$time=date('H:i');
							$result = mysqli_query("insert into mytasks values('0','".$task."','','','','','','".$date."','".$time."','','','','','',1,'".$uid."','','')");
							if($result){
						echo"<script>$('#taskfield').val('');
						refreshmytasks();</script>";
									}
							break;
							
							case 58:
							
							$subj=$_GET['subj'];
							$cate=$_GET['cate'];
							$crex=$_GET['crex'];
							$eid=$_GET['eid'];
							$loc=$_GET['loc'];
							$due=$_GET['due'];
							$duet=$_GET['duet'];
							$star=$_GET['star'];
							$start=$_GET['start'];
							$remind=$_GET['remind'];
							$rem=$_GET['rem'];
							$remt=$_GET['remt'];
							$status=$_GET['status'];
							$pri=$_GET['pri'];
							$comp=$_GET['comp'];
							$notes=$_GET['notes'];
							$a=preg_replace('~/~', '', $rem);
							$b=substr($remt,0,2);
							$c=substr($remt,3,2);
							$d=substr($remt,5,2);
							if($d=='PM'){
								$b=sprintf("%02d",$b+12);
							}
							$stamp=$a.$b.$c;
							
							if($crex==1){
							$result = mysqli_query("insert into mytasks values('0','".$subj."','".$cate."','".$loc."','".$status."','".$pri."','".$comp."','".$star."','".$start."','".$due."','".$duet."','".$remind."','".$rem."','".$remt."',1,'".$userid."','".$notes."','".$stamp."')");
							}
							if($crex==2){
							$result = mysqli_query("update mytasks set Reason='".$subj."',Category='".$cate."',Location='".$loc."',TaskStatus='".$status."',Priority='".$pri."',Complete='".$comp."',StartDate='".$star."',StartTime='".$start."',DueDate='".$due."',DueTime='".$duet."',ReminderStatus='".$remind."',ReminderDate='".$rem."',ReminderTime='".$remt."',User_id='".$userid."',Notes='".$notes."',Stamp='".$stamp."' where Event_id='".$eid."'");	
							}
							if($result){
									echo'<p><img src="images/tick.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>
									<script>refreshmytasks()</script>';
									echo"<script>$('#crex').val(1);$('#subject').val('');$('#location').val('');$('#category').val('');$('#complete').val('');
									$('#priority').val('');$('#status').val('');</script>";
									exit;
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px; width:20px; height:20px"></p>';
									}
							break;
							
							case 59:
							$sno=$_GET['sno'];
							$eid=$_GET['eid'];
							$stamp=date('YmdHi');
							$a=substr($stamp,10,2);
							$f=$stamp+$sno;
							$b=$a+$sno;
							if($b>59){
								$c=substr($stamp,8,2);
								$c++;
								$z=$b-60;
								$b=sprintf("%02d",$z);
								$f=substr($stamp,0,8).$c.$b;
								if($c>23){
								$d=substr($stamp,6,2);
								$d++;
								$y=24-$c;
								$c=sprintf("%02d",$y);
								$f=substr($stamp,0,6).$d.$c.$b;
								}
							}
							$g=substr($f,0,4);
							$h=substr($f,4,2);
							$i=substr($f,6,2);
							$j=substr($f,8,2);
							$k=substr($f,10,2);
							$l=$g.'/'.$h.'/'.$i;//date
							if($j>12){
								$s='PM';
								$j=$j-12;
								$j=sprintf("%02d",$j);
							}else $s='AM';
							$m=$j.':'.$k.$s;//time
							if($sno!=0){
							$result= mysqli_query("update mytasks set ReminderStatus=1,Stamp='".$f."',ReminderDate='".$l."',ReminderTime='".$m."' where Event_id=".$eid."");
							if($result){
							echo'<p><img src="images/tick.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';
							}
							}
							break;
						
							case 60:
						
						$result = mysqli_query("select * from backup where date='".date('d/m/Y')."'");
						$num_results = mysqli_num_rows($result);
						if($num_results==0){	

						$resulta = mysqli_query("insert into backup values('0','".date('d/m/Y')."')");

						//check for system controls:
						//1.Accountant cash in hand limit:
						$result =mysqli_query("select * from ledgers where ledgerid='626'");
						$row=mysqli_fetch_array($result);
						$bal=stripslashes($row['bal']);
						if($bal>500000){
						$resultc =mysqli_query("select * from messages where message='Accountant Cash in Hand Limit exceeded-".date('d/m/Y')."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
							$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','Accountant Cash in Hand Limit exceeded-".date('d/m/Y')."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}
							}
						}
						
						//2.Discount authorized above certain limit.
						$result =mysqli_query("select * from sales where Discount>10000 and Stamp='".date('Ymd')."' and Status=1");
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);  
						$resultc =mysqli_query("select * from messages where message='Discount of ".stripslashes($row['Discount'])." posted by ".stripslashes($row['Posted'])."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
							$resulta =mysqli_query("select * from users where position='Admin' or position='Accountant' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','Discount of ".stripslashes($row['Discount'])." posted by ".stripslashes($row['Posted'])."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}				
						}
						}


						
						//3. Patient Overstays in dept
						$resultb =mysqli_query("select * from queue where id=1");
						$rowb=mysqli_fetch_array($resultb);
						$j=$k=$l=$m=$n=$o=0;
							$a=$b=$c=$d=$e=$o=0;
						$result =mysqli_query("select * from newprescription where Stamp='".date('Ymd')."' order by PrescId desc");
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {$row=mysqli_fetch_array($result);
					$a=preg_replace('~:~', '', stripslashes($row['TriageTime'])) - preg_replace('~:~', '', stripslashes($row['StartTime']));
					$b=preg_replace('~:~', '', stripslashes($row['ConsTime'])) - preg_replace('~:~', '', stripslashes($row['TriageTime']));
					$c=preg_replace('~:~', '', stripslashes($row['LabTime'])) - preg_replace('~:~', '', stripslashes($row['ConsTime']));
					$d=preg_replace('~:~', '', stripslashes($row['RadTime'])) - preg_replace('~:~', '', stripslashes($row['ConsTime']));
					$e=preg_replace('~:~', '', stripslashes($row['PharmTime'])) - preg_replace('~:~', '', stripslashes($row['ConsTime']));
												}
							if(stripslashes($rowb['triage'])<$a){$j++;}
							if(stripslashes($rowb['cons'])<$b){$l++;}
							if(stripslashes($rowb['lab'])<$c){$m++;}
							if(stripslashes($rowb['rad'])<$d){$n++;}
							if(stripslashes($rowb['pharm'])<$e){$e++;}
						if($j>5){
							$resultc =mysqli_query("select * from messages where message='There seems to be a queue lag in the Triage department. Check with the nurses there to fix the issue.(".date('d/m/Y').")' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','There seems to be a queue lag in the Triage department. Check with the nurses there to fix the issue.(".date('d/m/Y').")','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}
							}
							if($k>5){
							$resultc =mysqli_query("select * from messages where message='There seems to be a queue lag in the Consultation department. Check with the doctors there to fix the issue.(".date('d/m/Y').")' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','There seems to be a queue lag in the Consultation department. Check with the doctors there to fix the issue.(".date('d/m/Y').")','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}
							}
							
							if($l>5){
							$resultc =mysqli_query("select * from messages where message='There seems to be a queue lag in the Laboratory department. Check with the lab technicians there to fix the issue.(".date('d/m/Y').")' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','There seems to be a queue lag in the Laboratory department. Check with the lab technicians there to fix the issue.(".date('d/m/Y').")','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}
							}
							
							if($m>5){
							$resultc =mysqli_query("select * from messages where message='There seems to be a queue lag in the Radiology department. Check with the Radiology technicians there to fix the issue.(".date('d/m/Y').")' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','There seems to be a queue lag in the Radiology department. Check with the Radiology technicians there to fix the issue.(".date('d/m/Y').")','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}
							}
							
								if($n>5){
							$resultc =mysqli_query("select * from messages where message='There seems to be a queue lag in the Pharmacy department. Check with the pharmacists there to fix the issue.(".date('d/m/Y').")' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','There seems to be a queue lag in the Pharmacy department. Check with the pharmacists there to fix the issue.(".date('d/m/Y').")','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}
							}

							
						
						

							//4. Inpatients bill passes a certain limit.
						$result =mysqli_query("select * from tempbill");
						$arr=array();
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);  
							$arr[]=stripslashes($row['patid']);		
						}
						$arr = array_unique($arr);
						$pre=array(array());
						foreach ($arr as $key => $val) {
								$a=0;
								$result =mysqli_query("select * from tempbill where patid='".$val."'");
								$num_results = mysqli_num_rows($result);	
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);  
									$a+=preg_replace('~,~', '', stripslashes($row['subnet']));		
								}
								if($a>100000){
								$pre[]=array($val,stripslashes($row['patname']),$a);
								}
						}
						
						$max=count($pre);
						if($max>0){
								for ($i=1; $i <$max; $i++) {
							$resultc =mysqli_query("select * from messages where message='The Inpatient named ".$pre[$i][1]." (Number ".$pre[$i][0].") has an oustanding bill of ".$pre[$i][2]."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Admin' or position='Accountant' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($x=0; $x <$num_resultsa; $x++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','The Inpatient named ".$pre[$i][1]." (Number ".$pre[$i][0].") has an oustanding bill of ".$pre[$i][2]."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}	
									
									
								}
						}

						/*
						
						//5.Drugs fall below a certain limit
						$result =mysqli_query("select * from items where MinBal>Bal and Type='GOOD'");
								$num_results = mysqli_num_rows($result);	
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);  
									$resultc =mysqli_query("select * from messages where message='The item ".stripslashes($row['ItemName'])." is below the minimum stock balance. It is advised you stock the item.' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
							$resulta =mysqli_query("select * from users where position='Store' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($i=0; $i <$num_resultsa; $i++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','The item ".stripslashes($row['ItemName'])." is below the minimum stock balance. It is advised you stock the item.','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}				
						}	
						}

						*/


						//6. check for cashier's balance
						$result =mysqli_query("select * from receipts where stamp<='".date('Ymd')."' and stamp<='".date('Ymd')."' and status!=0");
							$arr=array();
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);  
							$arr[]=stripslashes($row['username']);		
						}
						$arr = array_unique($arr);
						$pre=array();	
						foreach ($arr as $key => $val) {
								$a=0;
								$result =mysqli_query("select * from receipts where username='".$val."' and stamp<='".date('Ymd')."' and stamp>='".date('Ymd')."' and status!=0 and paymode='Cash'");
								$num_results = mysqli_num_rows($result);	
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);  
									$a+=stripslashes($row['amount']);	
								}
								if($a>50000){
								$pre[$val]=$a;
								}
						}
						
						$max=count($pre);
						if($max>0){
							foreach ($pre as $key => $val) {
							$resultc =mysqli_query("select * from messages where message='Cashier User Id ".$key." has exceeded the Cash in Hand Limit.Date-".date('d/m/Y')."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where position='Accountant' or position='Admin' order by name");
												$num_resultsa = mysqli_num_rows($resulta);	
												for ($x=0; $x <$num_resultsa; $x++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','Cashier User Id ".$key." has exceeded the Cash in Hand Limit.Date-".date('d/m/Y')."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}	
									
									
								}
						}	




							
						//7. check for sent transfer requests
						$result =mysqli_query("select * from issuetable where Dep2='".$userdep."' and status=1 order by TransNo desc");
						$pre=array();
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);  
							$pre[stripslashes($row['IssueNo'])]='You have a new stock request from '.stripslashes($row['Dep1']).'. The Request No: is '.stripslashes($row['IssueNo']).'';		
						}

						$max=count($pre);
						if($max>0){
							foreach ($pre as $key => $val) {
							$resultc =mysqli_query("select * from messages where message='".$val."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where dept='".$userdep."' order by name");
												$num_resultsa = mysqli_num_rows($resulta);
												for ($x=0; $x <$num_resultsa; $x++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','".$val."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}	
									
									
								}
						}
						//7. check for sent admission requests
						$pre=array();
						$result =mysqli_query("select * from newprescription where Admitted=3 order by PrescId desc");
						$num_results = mysqli_num_rows($result);	
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);  
							$pre[stripslashes($row['PrescId'])]='You have a new admission request for '.stripslashes($row['PatName']).'. The Patient No: is '.stripslashes($row['PatId']).'';		
						}

						$max=count($pre);
						if($max>0){
							foreach ($pre as $key => $val) {
						$resultc =mysqli_query("select * from messages where message='".$val."' order by id desc limit 0,1000");	
						$num_resultsc = mysqli_num_rows($resultc);	
						
						if($num_resultsc==0){	
						$resulta =mysqli_query("select * from users where dept='RECORDS' order by name");
												$num_resultsa = mysqli_num_rows($resulta);
												for ($x=0; $x <$num_resultsa; $x++) {
													$rowa=mysqli_fetch_array($resulta);  
													$name=stripslashes($rowa['name']);
													$resultb = mysqli_query("insert into messages values('0','".$name."','System','".$val."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
						
												}	
								}	
									
									
								}
						}
						
					
						
						//update ledgers
						
						$date=date('Y/m/d');
						$stamp=date('Ymd');
						$result = mysqli_query("select * from ledgers WHERE ledgerid!=601 order by name");
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);
						$lid=stripslashes($row['ledgerid']);
						$name=stripslashes($row['name']);
						$bal=stripslashes($row['bal']);
						$resultc = mysqli_query("insert into generalledger values('0','".$lid."','".$name."','".$date."','".$bal."','".$stamp."',1)");
						}
						$resultf = mysqli_query("update ledgerentries set status=0 where status!=0");
						$resultg = mysqli_query("update ledgers set date='".date('d/m/Y')."'");
						$resulta = mysqli_query("insert into log values('0','".$username." posts entries to general ledger.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
				
						
						//post inpatient charges

						$resulta =mysqli_query("select * from items where ItemCode='85' limit 0,1");
						$rowa=mysqli_fetch_array($resulta);
						$resultb =mysqli_query("select * from items where ItemCode='90' limit 0,1");
						$rowb=mysqli_fetch_array($resultb);
						$date=date('Y/m/d').'-'.date('H:i');
						$result =mysqli_query("select * from inpatients where Admitted!=0 order by PatName");
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								//$resultb = mysqli_query("insert into tempbill values('0','".stripslashes($row['PatId'])."','".stripslashes($row['PatName'])."','85','".stripslashes($rowa['ItemName'])."','".stripslashes($rowa['Category'])."','".stripslashes($rowa['SalePrice'])."','1','".stripslashes($rowa['SalePrice'])."','0','".stripslashes($rowa['SalePrice'])."','".$date."','0','".$fullname."','".date('Ymd')."',1)");
								//$resultc = mysqli_query("insert into tempbill values('0','".stripslashes($row['PatId'])."','".stripslashes($row['PatName'])."','85','".stripslashes($rowb['ItemName'])."','".stripslashes($rowb['Category'])."','".stripslashes($rowb['SalePrice'])."','1','".stripslashes($rowb['SalePrice'])."','0','".stripslashes($rowb['SalePrice'])."','".$date."','0','".$fullname."','".date('Ymd')."',1)");
												
							}

						
						//back up database
					  // echo"<script>window.location.href = 'http://192.168.8.150/q-afya/database_backup/backup.php';</script>";
						}

	

					break;
							
							case 61:
							
							$subj=$_GET['subj'];
							$cate=$_GET['cate'];
							$crex=$_GET['crex'];
							$eid=$_GET['eid'];
							$loc=$_GET['loc'];
							$end=$_GET['end'];
							$endt=$_GET['endt'];
							$star=$_GET['star'];
							$start=$_GET['start'];
							$remind=$_GET['remind'];
							$rem=$_GET['rem'];
							$remt=$_GET['remt'];
							$status=$_GET['status'];
							$pri=$_GET['pri'];
							$comp=$_GET['comp'];
							$notes=$_GET['notes'];
							$pid=$_GET['pid'];
							$rece=preg_replace('~/~', '', $_GET['rece']);
							$recs=$_GET['recs'];
							$rpat=$_GET['rpat'];
							$reccur=$_GET['reccur'];
							$pat=$_GET['pat'];
							
							$a=preg_replace('~/~', '', $rem);
							$b=substr($remt,0,2);
							$c=substr($remt,3,2);
							$d=substr($remt,5,2);
							
							if($d=='PM'){
								$b=sprintf("%02d",$b+12);
							}
							$stamp=$a.$b.$c;
							
							
							//update database
							
							if($crex==1){
							$result = mysqli_query($conn,"insert into calendar values('0','".$pid."','".$pat."','".$subj."','".$cate."','".$loc."','','".$pri."','".$comp."','".$status."','".$star."','".$start."','".$end."','".$endt."','".$remind."','".$rem."','".$remt."',1,'".$reccur."','".$rpat."','".$recs."','".$rece."','".$userid."','".$notes."','".$stamp."','".preg_replace('~/~', '', $star)."','".date('d/m/Y')."','".date('Ymd')."','','')");
							}
							if($crex==2){
							$result = mysqli_query($conn,"update calendar set Pat_name='".$pat."',Pat_id='".$pid."',Reason='".$subj."',Category='".$cate."',Location='".$loc."',TaskStatus='".$status."',Priority='".$pri."',Complete='".$comp."',StartDate='".$star."',StartTime='".$start."',EndDate='".$end."',EndTime='".$endt."',ReminderStatus='".$remind."',ReminderDate='".$rem."',ReminderTime='".$remt."',User_id='".$userid."',Notes='".$notes."',Stamp='".$stamp."',ReccurenceStatus='".$reccur."',ReccurPattern='".$rpat."',ReccurStart='".$recs."',ReccurEnd='".$rece."' where Event_id='".$eid."'");	
							
							}
							if($result){
									echo'<p><img src="images/tick.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';
									echo"<script>setTimeout(function() {appointments();},1000);</script>";
									echo"<script>$('#crex2').val(1);$('#subject2').val('');$('#location2').val('');$('#category'2).val('');$('#complete2').val('');
									$('#priority2').val('');$('#status2').val('');$('#patname2').val('');</script>";
									exit;
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px; width:20px; height:20px"></p>';
									}
							break;
							
							case 62:
							$sno=$_GET['sno'];
							$eid=$_GET['eid'];
							$stamp=date('YmdHi');
							$a=substr($stamp,10,2);
							$f=$stamp+$sno;
							$b=$a+$sno;
							if($b>59){
								$c=substr($stamp,8,2);
								$c++;
								$z=$b-60;
								$b=sprintf("%02d",$z);
								$f=substr($stamp,0,8).$c.$b;
								if($c>23){
								$d=substr($stamp,6,2);
								$d++;
								$y=24-$c;
								$c=sprintf("%02d",$y);
								$f=substr($stamp,0,6).$d.$c.$b;
								}
							}
							$g=substr($f,0,4);
							$h=substr($f,4,2);
							$i=substr($f,6,2);
							$j=substr($f,8,2);
							$k=substr($f,10,2);
							$l=$g.'/'.$h.'/'.$i;//date
							if($j>12){
								$s='PM';
								$j=$j-12;
								$j=sprintf("%02d",$j);
							}else $s='AM';
							$m=$j.':'.$k.$s;//time
							if($sno!=0){
							$result= mysqli_query($conn,"update calendar set ReminderStatus=1,Stamp='".$f."',ReminderDate='".$l."',ReminderTime='".$m."' where Event_id=".$eid."");
							if($result){
							echo'<p><img src="images/tick.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';
							}
							}
							break;
							
							case 63:
							$pid=$_GET['pid'];
							$x=$_GET['x'];
							$result= mysqli_query($conn,"update newprescription set Status=".$x." where PrescId='".$pid."'");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." does a roll back.Presc ID:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
							if($x==0){
							$result= mysqli_query($conn,"update consfee set Status=1 where Id=".$pid."");
								
							}
							
							break;
							
							
							
							case 65:
							$a=$_GET['a'];
							if($_GET['rtype']!='either'){
							$resulta = mysqli_query($conn,"select * from patients where pntno='".$_GET['pntno']."'");
							$row=mysqli_fetch_array($resulta);
							$gender=stripslashes($row['gender']);
							if($_GET['rtype']!=$gender){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>You are attempting to admit a ".$gender." patient in a ".$_GET['rtype']." ward!</p>');
									e.preventDefault();
									</script>";
									exit;
							}
							}
							
							if($a==1){
							$resulta = mysqli_query($conn,"select * from inpatients where PatId='".$_GET['pntno']."' order by PrescId desc limit 0,1");
							$row=mysqli_fetch_array($resulta);
							$pid=stripslashes($row['PrescId']);
							$doc=stripslashes($row['Doctor']);
							$resultb= mysqli_query($conn,"update inpatients set Admitted=1,BedNo='".$_GET['bno']."',RoomNo='".$_GET['rno']."',WardType='".$_GET['wtype']."'  WHERE PrescId='".$pid."'");
								$result= mysqli_query($conn,"update wardbeds set status=1,patname='".$_GET['pntname']."',patid='".$_GET['pntno']."',doctor='".$doc."' where id='".$_GET['bid']."'");
							}
							if($result){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates inpatients database.Bed No:".$_GET['bno']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>
								<script>setTimeout(function() {inpatient();$("#warddialog" ).dialog( "close" );},500);</script>';
							}else{echo'<p><img src="images/delete.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';
							}
							break;


							case 66:
							$bno=$_GET['bno'];
							$rno=$_GET['rno'];
							$patid=$_GET['patid'];
							$resulta= mysqli_query($conn,"update wardbeds set status=0,patname='',patid='',doctor='' where bedno='".$_GET['bno']."' and roomno='".$_GET['rno']."'  and patid='".$_GET['patid']."'");
							$resultb= mysqli_query($conn,"update newprescription set Admitted=0,Discharge='".date('d/m/Y')."' where BedNo='".$_GET['bno']."' and RoomNo='".$_GET['rno']."' and PatId='".$_GET['patid']."'");
							$resultb= mysqli_query($conn,"update tempbill set status=0 where patid='".$patid."'");	
						if($resulta&&$resultb){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." discharges patient.Bed No:".$_GET['bno']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">
							<script>setTimeout(function() {inpatient();},500);</script>';
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
							break;
						
							case 68:
							$rec=$_GET['rec'];
							$resulta= mysqli_query($conn,"update inpatients set progress='".$_GET['notes']."' where patid='".$_GET['patid']."'");
							if($resulta){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes inpatient progress notes.Patient Id:".$_GET['patid']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/up.jpg" style="margin-top:0px; margin-right:10px; width:40px; height:40px"></p>';
								if($rec==1){
								echo'<script>
								setTimeout(function() {startcons('.$_GET['patid'].');},500);</script>';
                                }else{echo'<script>setTimeout(function() {inprogress();},500);</script>';}
							}
							else{echo'<p><img src="images/delete.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';}
							break;
							
							case 69:
							$code=$_GET['user'];
							$result = mysqli_query($conn,"DELETE from users where name='".$code."'");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes User from System.User Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:30px; height:30px; margin-top:20px"></p>';
								echo"<script>setTimeout(function() {adduser();},500);</script>";	
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px;margin-top:20px"></p>';
										}
							break;
							
							
							
							
							case '23.2':
								
							$transid=$_GET['transid'];
							$cr=$_GET['cr'];
							$dr=$_GET['dr'];
							$drname=$_GET['drname'];
							$crname=$_GET['crname'];
							$desc=$_GET['desc'];
							$amount=$_GET['amount'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
						if($cr==625||$dr==625||$cr==658||$dr==658||$cr==659||$dr==659){
						$bid=$_GET['bankid'];
						$bname=$_GET['bankname'];
						$desc=$desc.'['.$bname.']';
						}else{
							$bid=NULL;
							$bname=NULL;
						}
						//this is a debit	
						$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$cr."");
						$row=mysqli_fetch_array($resulta);
						$balc=stripslashes($row['bal']);
						$type=stripslashes($row['type']);
						if($type=='Liability'||$type=='Revenue'||$type=='Equity'||$type=='Drawings'){
						$balc=$balc-$amount;
						/*if($balc<0){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>Liability/Revenue/Equity Subledger balance cannot be less than zero.</p>');
									e.preventDefault();
									</script>";
									exit;
						}*/
						
						}
						else{
						$balc=$balc+$amount;
						}
						//this is a credit
						$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$dr."");
						$row=mysqli_fetch_array($resulta);
						$bald=stripslashes($row['bal']);
						$type=stripslashes($row['type']);
						if($type=='Asset'||$type=='Expense'){
						$bald=$bald-$amount;
						/*if($bald<0){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>Asset/Expense Subledger balance cannot be less than zero.</p>');
									e.preventDefault();
									</script>";
									exit;
						}*/
						
						}
						else{
						$bald=$bald+$amount;
						}
						
						
			$resultb = mysqli_query($conn,"insert into ledgerentries values('0','".$cr."','".$crname."','".$dr."','".$drname."','".$amount."','".$desc."','".$date."','".$balc."','".$bald."','".$stamp."','".$bid."','".$bname."',0)");
			$resulte = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid='".$cr."'");
			$resultf = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid='".$dr."'");
			
			if($resultb&&$resulte&&$resultf){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a journal entry.Id:".$transid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								$transid=$transid+1;
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
								echo"<script>
								setTimeout(function() {
											journalent();},500);
									$('#transid').val(".$transid.");$('#amount').val('');$('#desc').val('');$('#crledger').val('');$('#drledger').val('');$('#bankdiv').hide();
										
										</script>";
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
								break;
								
								case '24.2':
								
							$code=$_GET['code'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
							$result = mysqli_query($conn,"select * from ledgerentries where transid=".$code."");
							$row=mysqli_fetch_array($result);
							$cr=stripslashes($row['crid']);
							$dr=stripslashes($row['drid']);
							$crname=stripslashes($row['crname']);
							$drname=stripslashes($row['drname']);
							$amount=stripslashes($row['amount']);
							if($cr==625||$dr==625||$cr==658||$dr==658||$cr==659||$dr==659){
								$bid=stripslashes($row['bankid']);
								$bname=stripslashes($row['accname']);
							}else{
								$bid=NULL;
								$bname=NULL;
							}
							//this was a debit	
							$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$dr."");
							$rowa=mysqli_fetch_array($resulta);
							$bald=stripslashes($rowa['bal']);
							$type=stripslashes($rowa['type']);
							if($type=='Liability'||$type=='Revenue'||$type=='Equity'||$type=='Drawings'){
								$bald=$bald-$amount;
							}
							else{
								$bald=$bald+$amount;
							}
							$desc='reversal for TX id: '.$code;
							//this is a credit
							$resultb = mysqli_query("$conn,select * from ledgers where ledgerid=".$cr."");
							$rowb=mysqli_fetch_array($resultb);
							$balc=stripslashes($rowb['bal']);
							$typeb=stripslashes($rowb['type']);
							if($typeb=='Asset'||$typeb=='Expense'){
								$balc=$balc-$amount;												
							}
							else{
								$balc=$balc+$amount;
							}
							
							
							$resulta = mysqli_query($conn,"select * from ledgerentries order by transid desc limit 0,1");
							$row=mysqli_fetch_array($resulta);
							$codea=stripslashes($row['transid'])+1;
						
							$resultb = mysqli_query($conn,"insert into ledgerentries values('".$codea."','".$dr."','".$drname."','".$cr."','".$crname."','".$amount."','".$desc."','".$date."','".$bald."','".$balc."','".$stamp."','".$bid."','".$bname."',3)");
							$resultg = mysqli_query($conn,"update ledgerentries set status=3 where transid='".$code."'");
							$resulte = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid='".$dr."'");
							$resultf = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid='".$cr."'");
			
						if($resultb&&$resulte&&$resultf&&$resultg){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a journal entry reversal.Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<img src="images/tick.png" width="22px" height="22px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="22px" height="22px"/>';
									}
								break;
								
								case '25.2':
								
						$date=date('Y/m/d');
						$stamp=date('Ymd');
						$result = mysqli_query($conn,"select * from ledgers WHERE ledgerid!=601 order by name");
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);
						$lid=stripslashes($row['ledgerid']);
						$name=stripslashes($row['name']);
						$bal=stripslashes($row['bal']);
						$resultc = mysqli_query($conn,"insert into generalledger values('0','".$lid."','".$name."','".$date."','".$bal."','".$stamp."',1)");
						}
			$resultf = mysqli_query($conn,"update ledgerentries set status=1 where status=0");
			$resultg = mysqli_query($conn,"update ledgers set date='".date('d/m/Y')."'");
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." posts entries to general ledger.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<img src="images/tick.png" width="30px" height="30px"/>';
									
								
								break;
								
								case '26.2':
								
			$result = mysqli_query($conn,"update banktbl set BankName='".$_GET['bname']."',Postal='".$_GET['postal']."',BranchName='".$_GET['branch']."',TelNo='".$_GET['tel']."'
			,Email='".$_GET['email']."',AccName='".$_GET['acname']."',AccType='".$_GET['actype']."',AccNo='".$_GET['acno']."',OpenDate='".$_GET['datee']."' where Bankid='".$_GET['acid']."'");
			
						if($result){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits bank detail.AC ID:".$_GET['acid']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<img src="images/tick.png" width="30px" height="30px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="30px" height="30px"/>';
									}		
								break;
							
							case '27.2':
							$actype=$_GET['actype'];
							$bankname=$_GET['bankname'];
							$branchname=$_GET['branchname'];
							$acname=$_GET['acname'];
							
							$acno=$_GET['acno'];
							$postadd=$_GET['postadd'];
							$emailadd=$_GET['emailadd'];
							$date=$_GET['date'];
							$tel=$_GET['tel'];
							$result = mysqli_query($conn,"insert into banktbl values('0','".$bankname."','".$postadd."','".$branchname."','".$tel."','".$emailadd."','".$acname."','".$actype."','".$acno."','".$date."','')");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." adds new bank detail.AC NO:".$_GET['acno']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							
							case '28.2':
							$result = mysqli_query($conn,"DELETE from banktbl where Bankid=".$_GET['acid']."");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes bank detail.Id NO:".$_GET['acid']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							break;
							
							case '29.2':
					$resultb = mysqli_query($conn,"select * from ledgers order by ledgerid desc");
					$rowb=mysqli_fetch_array($resultb);
					$lid=stripslashes($rowb['ledgerid'])+1;
							$result= mysqli_query($conn,"insert into ledgers values('".$lid."','".$_GET['ledger']."','".$_GET['type']."',0,1,'','".$_GET['cat']."')");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into ledgers database.Ledger name:".$_GET['ledger']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
							if($result){
									echo'<p><img src="images/tick.png" style="width:30px; height:30px"></p>';
									echo "<script>paginate(8,0);</script>";
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px"></p>';
										}
							
							break;	
							case '30.2':
							$code=$_GET['code'];
							$result = mysqli_query($conn,"DELETE from ledgers where ledgerid=".$code."");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from ledger database.Legder Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							case '31.2':
							$code=$_GET['code'];
							$type=$_GET['type'];
							$bal=$_GET['bal'];
							$result = mysqli_query($conn,"update ledgers set type='".$_GET['type']."',bal='".$_GET['bal']."',status=1,name='".$_GET['name']."',category='".$_GET['cat']."' where ledgerid='".$code."'");	
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ledgers database.Ledger Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:16px; height:16px; margin-top:-10px; margin-left:20px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="width:16px; height:16px; margin-top:0px"></p>';
									}
							break;
							case '32.2':
							$mon=$_GET['mon'];
									$query =mysqli_query($conn,"select * from salregister where month='".$mon."'");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Month has already been registered.</p>');
									e.preventDefault();
									</script>";	
										
									}
									else{
								$resultb =mysqli_query($conn,"select * from salary where status=1");
								$num_results = mysqli_num_rows($resultb);
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($resultb);
	$result = mysqli_query($conn,"insert into payroll values('0','".$mon."','".stripslashes($row['emp'])."','".stripslashes($row['name'])."','".stripslashes($row['dept'])."','".stripslashes($row['sal'])."','".stripslashes($row['allow'])."','".stripslashes($row['adva'])."','".stripslashes($row['sacco'])."','".stripslashes($row['welfare'])."','".stripslashes($row['kitchen'])."','".stripslashes($row['tax'])."','".stripslashes($row['nhif'])."','".stripslashes($row['nssf'])."','".stripslashes($row['othrs'])."','".stripslashes($row['rateot'])."','".stripslashes($row['totalot'])."','".stripslashes($row['net'])."',0)");
									}
								if($result){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." adds new payroll.Month:".$mon."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$result= mysqli_query($conn,"insert into salregister values('".$mon."','','','','','','','','','','','','','','',1)");						
									echo'<p><img src="images/tick.png" style="width:30px; height:30px; margin-top:-5px"></p>';
									echo "<script>paginate(11,'".$mon."');</script>";
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px;margin-top:-5px"></p>';
										}
										
									}
							break;
							
							case '33.2':
							$mon=$_GET['mon'];
									$query =mysqli_query($conn,"select * from salregister where month='".$mon."' and status=1");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Payroll for Month does not exist or has already been posted.</p>');
									e.preventDefault();
									</script>";	
										
									}
									else{
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits payroll.Month:".$mon."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo "<script>payroll('".$mon."');</script>";
										
									}
							break;
							case '34.2':
							$ser=$_GET['ser'];
							$result = mysqli_query($conn,"DELETE from payroll where serial='".$ser."'");
							$resulta = mysqli_query("insert into log values('0','".$username." deletes data from payroll','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							
							case '35.2':
							$sal=$_GET['sal'];if($sal==''){$sal=0;}
							$emp=$_GET['emp'];
							$mon=$_GET['mon'];
							$rateot=$_GET['rate'];
							$days=$_GET['days'];
							$allow=$_GET['allow'];if($allow==''){$allow=0;}
							$adva=$_GET['adva'];if($adva==''){$adva=0;}
							$ins=$_GET['ins'];if($ins==''){$ins=0;}
							$ded=$_GET['ded'];if($ded==''){$ded=0;}
							$kitchen=$_GET['kitchen'];if($kitchen==''){$kitchen=0;}
							$othrs=$_GET['othrs'];if($othrs==''){$othrs=0;}
							$ot=$_GET['ot'];if($ot==''){$ot=0;}
							$date= date('m_Y');  
							
							
							//calculate  overtime
							//$totalot=$othrs*$rateot;
							$totalot=$ot;
							
							//calculate gross income
							
							//calculate attendance deductions
							//if($days<26){
							//$sal=$sal*$days/26;
							//$sal=round($sal,2);
							//}
							
							$gross=$sal+$allow+$totalot;
							
							
							
							//calculate nssf
							$resulta =mysqli_query("select * from nssf where id=1");
							$rowa=mysqli_fetch_array($resulta);
							$pnssf=stripslashes($rowa['amount']);
							
							if($gross<6000){$nssf=0;}
							else if($gross>=6000&&$gross<=18000){
								$nssf=$pnssf*$gross/100;
							}
							else if($gross>18000){$nssf=1080;}
							else{$nssf=0;}

							$nssf=stripslashes($rowa['amount']);
							
							//calculate nhif
							$resulta =mysqli_query($conn,"select * from nhif where ".$gross.">=lower and ".$gross."<=upper");
							$rowa=mysqli_fetch_array($resulta);
							$nhif=stripslashes($rowa['amount']);
							
							
							
							//deduct nssf
							$net=$taxnet=$gross-$nssf;
							
							
						
							//calculate tax
							
							
							$resultx =mysqli_query($conn,"select * from tax where id=1");
							$rowx=mysqli_fetch_array($resultx);
							$u1=stripslashes($rowx['upper']);//10164
							$t1=stripslashes($rowx['tax']);//0
							
							$resultx =mysqli_query($conn,"select * from tax where id=2");
							$rowx=mysqli_fetch_array($resultx);
							$l2=stripslashes($rowx['lower']);//10164
							$u2=stripslashes($rowx['upper']);//19740
							$t2=stripslashes($rowx['tax']);//15
							
							$resultx =mysqli_query($conn,"select * from tax where id=3");
							$rowx=mysqli_fetch_array($resultx);
							$l3=stripslashes($rowx['lower']);
							$u3=stripslashes($rowx['upper']);
							$t3=stripslashes($rowx['tax']);
							
							$resultx =mysqli_query($conn,"select * from tax where id=4");
							$rowx=mysqli_fetch_array($resultx);
							$l4=stripslashes($rowx['lower']);
							$u4=stripslashes($rowx['upper']);
							$t4=stripslashes($rowx['tax']);
							
							$resultx =mysqli_query($conn,"select * from tax where id=5");
							$rowx=mysqli_fetch_array($resultx);
							$l5=stripslashes($rowx['lower']);
							$t5=stripslashes($rowx['tax']);
							
							
							
							
							$tax=0;$a=0;
						
							if($taxnet<$u1){
							$tax=0;
							}
							
							else if(($taxnet>=$l2)&&($taxnet<=$u2)){
							$tax+=$t1*$l2;
							$taxnet-=$l2;
							$a=$taxnet*$t2;
							$tax+=$a;
							
							}
							
							else if(($l3<=$taxnet&&$taxnet<=$u3)){
							$tax+=$t1*$l2;
							$tax+=$t2*($u2-$l2);
							$taxnet-=$u2;
							$a=$taxnet*$t3;
							$tax+=$a;
							}
							
							else if(($l4<=$taxnet&&$taxnet<=$u4)){
							$tax+=$t1*$l2;
							$tax+=$t2*($u2-$l2);
							$tax+=$t3*($u3-$u2);
							$taxnet-=$u3;
							$a=$taxnet*$t4;
							$tax+=$a;
							}
							
							else if(($taxnet>$l5)){
							$tax+=$t1*$l2;
							$tax+=$t2*($u2-$l2);
							$tax+=$t3*($u3-$u2);
							$tax+=$t4*($u4-$u3);
							$taxnet-=$l5;
							$a=$taxnet*$t5;
							$tax+=$a;
							}
							else{}

							if($tax>1280){
							$relief=1280;
							}else {$relief=0;}

							$paye=$tax-$relief;
							$tax=$paye=round($paye,2);

							
							
							
						//deduct nhif,tax,deductions,insurance,advance,scont,sloan
							$net=$net-$nhif-$ded-$ins-$adva-$tax-$kitchen;
							$net=round($net,2);
							
							$resulta = mysqli_query($conn,"update payroll set sal='".$sal."',
							allow='".$allow."',adva='".$adva."',sacco='".$ins."',welfare='".$ded."',kitchen='".$kitchen."',tax='".$tax."',nhif='".$nhif."',nssf='".$nssf."',nhif='".$nhif."',rateot='".$rateot."',othrs='".$othrs."',totalot='".$totalot."',net='".$net."', status=1 where emp='".$emp."' and month='".$mon."'");
							
							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits payroll.Month:".$mon.";Emp id:".$emp."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<script>
							$('#sal' + '".$emp."').val('".$sal."');
							$('#nhif' + '".$emp."').val('".$nhif."');
							$('#nssf' + '".$emp."').val('".$nssf."');
							$('#tax' + '".$emp."').val('".$tax."');   
							$('#net' + '".$emp."').val('".$net."');
							</script>";
									echo'<img src="images/tick.png"  width="22" height="22"/>';
									
									}
								else{
									echo'<img src="images/delete.png"  width="21.5" height="21.5"/>';
									}
								break;
								
							case '36.2':
							$mon=$_GET['mon'];
							$emp=$_GET['emp'];
									
									$query =mysqli_query($conn,"select * from salregister where month='".$mon."' and status=1");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$('#empdi').hide();
									$().customAlert();
									alert('Error!', '<p>Payroll for Month does not exist or has already been posted.</p>');
									e.preventDefault();
									</script>";	
										exit;
									}
									
									$query =mysqli_query($conn,"select * from payroll where month='".$mon."' and emp='".$emp."'");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$('#empdi').hide();
									$().customAlert();
									alert('Error!', '<p>Employee already exists in the payroll.</p>');
									e.preventDefault();
									</script>";	
									exit;	
									}
									else{
						$resultb =mysqli_query($conn,"select * from employee where emp='".$emp."'");
								$rowb=mysqli_fetch_array($resultb);
								$emp=stripslashes($rowb['emp']);
								$leave=stripslashes($rowb['leaveac']);
								$names=stripslashes($rowb['fname']).' '.stripslashes($rowb['mname']).' '.stripslashes($rowb['lname']);	
								
								$q=0;
								$resultx =mysqli_query("select * from ".$mon." where pfno='".$emp."'");
								$rowx=mysqli_fetch_array($resultx);
					
								for ($x=1; $x<32; $x++) {
											$d=sprintf("%02d",$x);
											$d=$d.'c';
											if(stripslashes($rowx[$d])==1||stripslashes($rowx[$d])==2||stripslashes($rowx[$d])==3){
												$q++;
											}
								}
								
										
				$result =mysqli_query($conn,"select * from payroll where status=1 and emp='".$emp."' order by serial desc limit 0,1");
				$row=mysqli_fetch_array($result);
														
					$resultc = mysqli_query($conn,"insert into payroll values('0','".$mon."','".stripslashes($rowb['emp'])."','".$names."','".stripslashes($rowb['dept'])."','".stripslashes($row['sal'])."','".stripslashes($row['allow'])."','','','','','','','','','','','',0,'".stripslashes($rowb['bid'])."','".stripslashes($rowb['bname'])."','".stripslashes($rowb['acno'])."','".$q."')")  or die (mysql_error());			
										
	
									if($resultc){	
									$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts new employee into payroll.Month:".$mon."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo'<p><img src="images/tick.png" style="width:30px; height:30px; margin-top:-5px"></p>';
									echo "<script>
									$('#mon').hide();payroll('".$mon."');</script>";
										
									}
									
									}
							break;
							case '37.2':
							$mon=$_GET['mon'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							$query =mysqli_query($conn,"select * from salregister where month='".$mon."' and status=1");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$$().customAlert();
									alert('Error!', '<p>Payroll for Month does not exist or has already been posted.</p>');
									e.preventDefault();
									</script>";	
										exit;
									}
									else{
							$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;$totalkitchen=0;
							$result =mysqli_query($conn,"select * from payroll where month='".$mon."'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$net=stripslashes($row['net']);
							$sal=stripslashes($row['sal']);
							$allow=stripslashes($row['allow']);
							$adva=stripslashes($row['adva']);
							$ins=stripslashes($row['sacco']);
							$ded=stripslashes($row['welfare']);
							$kitchen=stripslashes($row['kitchen']);
							$othrs=stripslashes($row['othrs']);
							$totalot=stripslashes($row['totalot']);
							$nssf=stripslashes($row['nssf']);
							$nhif=stripslashes($row['nhif']);
							$tax=stripslashes($row['tax']);
							$totalnet+=$net;
							$totalsal+=$sal;
							$totalallow+=$allow;
							$totaladva+=$adva;
							$totalins+=$ins;
							$totalded+=$ded;
							$totalkitchen+=$kitchen;
							$totalothrs+=$othrs;
							$totalotal+=$totalot;
							$totalnssf+=$nssf;
							$totalnhif+=$nhif;
							$totaltax+=$tax;
							
							if(stripslashes($row['status'])==0){
							echo"<script>
									$().customAlert();
									alert('Error!', '<p>Details of ".stripslashes($row['name'])." have not been saved yet!</p>');
									e.preventDefault();
									</script>";	
								exit;	
							}
							
							
							}
							
							
												
		$resultb = mysqli_query($conn,"update salregister set amount='".$totalnet."',date='".$date."',stamp='".$stamp."',sal='".$totalsal."',allow='".$totalallow."',adva='".$totaladva."',nssf='".$totalnssf."',nhif='".$totalnhif."',tax='".$totaltax."',sacco='".$totalins."',welfare='".$totalded."',kitchen='".$totalkitchen."',othrs='".$totalothrs."',totalot='".$totalotal."',status=0 where month='".$mon."'");
							
							if($resultb){	
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." commits payroll.Month:".$mon."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo"<script>
									$().customAlert();
									alert('Success!', '<p>Payroll Submitted!</p>');
									e.preventDefault();
									</script>";	
										
									}
									
									}
								break;
								
								case '38.2':
								$code=$_GET['code'];
									$query =mysqli_query($conn,"select * from nhif where id='".$code."'");
									$count = mysqli_num_rows($query);
									
									if($count>0){
										
							$result = mysqli_query($conn,"update nhif set lower='".$_GET['lower']."',upper='".$_GET['upper']."',amount='".$_GET['amount']."' where id='".$code."'");	
									}
									else{
										
								$result= mysqli_query($conn,"insert into nhif values('".$code."','".$_GET['lower']."','".$_GET['upper']."','".$_GET['amount']."',1)");	
								}
								if($result){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits nhif table.id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="22px" height="22px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="22px" height="22px"/>';
									}
							break;
							
							case '39.2':
							$code=$_GET['code'];
							$result = mysqli_query($conn,"update tax set lower='".$_GET['lower']."',upper='".$_GET['upper']."',tax='".$_GET['amount']."' where id='".$code."'");	
								
								if($result){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits tax table.id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="22px" height="22px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="22px" height="22px"/>';
									}
							break;
							
							case '40.2':
								$resulta = mysqli_query($conn,"update nssf set amount='".$_GET['employee']."' where id=1");	
							if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits nssf table','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="22px" height="22px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="22px" height="22px"/>';
									}
							break;
							case '41.2':
							$resulta = mysqli_query($conn,"update overtime set rate='".$_GET['amount']."' where id=1");	
							if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits overtime table','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="22px" height="22px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="22px" height="22px"/>';
									}
							break;
							
							case '29.6':
						$result= mysqli_query($conn,"insert into wardbeds values('0','".$_GET['ward']."','".$_GET['roomno']."','".$_GET['roomtype']."','".$_GET['bedno']."','','',0,'')");
							$resulta = mysqli_query("insert into log values('0','".$username." inserts data into wardbeds database.Bed No:".$_GET['bedno']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
							if($result){
									echo'<p><img src="images/tick.png" style="width:30px; height:30px"></p>';
									echo "<script>paginate(12,0);</script>";
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px"></p>';
										}
							
							break;	
							case '30.6':
							$code=$_GET['code'];
							$result = mysqli_query($conn,"DELETE from wardbeds where id=".$code."");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from wardbeds database.Bed Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							case '31.6':
							$code=$_GET['code'];
						$result = mysqli_query($conn,"update wardbeds set type='".$_GET['roomtype']."',roomno='".$_GET['roomno']."',wardtype='".$_GET['ward']."' where id='".$code."'");	
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ward beds database.Bed Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:16px; height:16px; margin-top:-10px; margin-left:20px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="width:16px; height:16px; margin-top:0px"></p>';
									}
							break;
							
							case '31.7':
							$code=$_GET['code'];
						$result = mysqli_query($conn,"update newprescription set Status=0 where PrescId='".$code."'");	
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates prescriptions database.Presc Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:16px; height:16px; margin-top:-10px; margin-left:20px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="width:16px; height:16px; margin-top:0px"></p>';
									}
							break;
							
							case '21.8':
							$a=$_GET['a'];
							if($a==1){
							$result= mysqli_query($conn,"insert into inscompanies values('0','".$_GET['acno']."','".$_GET['name']."','".$_GET['bal']."','".$_GET['add']."','".$_GET['town']."','".$_GET['tel']."','".$_GET['mobile']."','".$_GET['email']."',1)");
							}
							if($a==2){
							$regn=$_GET['regn'];
							$result= mysqli_query($conn,"update inscompanies set acno='".$_GET['acno']."',name='".$_GET['name']."',balance='".$_GET['bal']."',address='".$_GET['add']."',town='".$_GET['town']."',tel='".$_GET['tel']."',mobile='".$_GET['mobile']."',email='".$_GET['email']."' where id='".$regn."'");
							}
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits insurance companies database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
									echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
										}
							
							break;
							case '22.8':
							$regn=$_GET['regn'];
							$result = mysqli_query($conn,"DELETE from inscompanies where id='".$regn."'");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from makes insurance companies.Id:".$_GET['regn']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
										}
							break;
							
							case '21.9':
							$result= mysqli_query($conn,"insert into deathsregister values('0','".$_GET['patid']."','".$_GET['patname']."','".$_GET['age']."','".$_GET['gender']."','".$_GET['tod']."','".$_GET['dod']."','".$_GET['cod']."','".$_GET['con']."','".$_GET['morgue']."','".$_GET['odetail']."','".date('d/m/Y')."','".date('Ymd')."',1)");
							$result= mysqli_query($conn,"update patients set status=0 where pntno='".$_GET['patid']."'");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into deaths register database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
									echo'<p><img src="images/up.jpg" style="margin-top:-20px"></p>
										<script>
											setTimeout(function() {
											editpatient(122);},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="margin-top:-20px"></p>';
									}
							
							break;
							case '21.91':
							$result= mysqli_query($conn,"insert into birthsregister values('0','".$_GET['name']."','".$_GET['gen']."','".$_GET['tob']."','".$_GET['dob']."','".$_GET['mom']."','".$_GET['doc']."','".$_GET['odetail']."','".date('d/m/Y')."','".date('Ymd')."',1)");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into births register database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
									echo'<p><img src="images/up.jpg" style="margin-top:-20px"></p>
										<script>
											setTimeout(function() {
											birthsregister();},500);
										</script>';
										exit;
									}
									else{
										echo'<p><img src="images/down.jpg" style="margin-top:-20px"></p>';
									}
							
							break;
							case '70':
							$a=$_GET['a'];
							if(isset($_GET['b'])){
							$b=$_GET['b'];}else $b='NULL';
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
						if($a==1){
						$result =mysqli_query($conn,"select * from newprescription where Dept='".$b."' and Stamp>='".$d1."' and  Stamp<='".$d2."' order by PrescId asc");	
						}else if($b==2){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."' order by PrescId asc");
						}
						else if($b==3){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."' and (Reclab=1 or Reclab=2) order by PrescId asc");
						}
						else if($b==4){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."' and (Recrad=1 or Recrad=2) order by PrescId asc");
						}
							else if($b==5){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."' and (RecTheatre=1 or RecTheatre=2) order by PrescId asc");
						}
							else if($b==6){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."' and DayCare=1 order by PrescId asc");
						}
						else if($b==7){
							$result =mysqli_query($conn,"select * from newprescription where Stamp>='".$d1."' and  Stamp<='".$d2."'  order by PrescId asc");
						}
					
						$num_results = mysqli_num_rows($result);
						echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
								<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'-'.dateprint(stripslashes($row['TransDate'])).'</option>';
							}
							echo'</select>';
							break;
							case '70.1':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
						$result =mysqli_query($conn,"select * from sales where Stamp>='".$d1."' and  Stamp<='".$d2."'  and Status=0  order by TransNo asc");
						$arr=array();
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);
						$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']).'-'.stripslashes($row['ClientId']).'-'.stripslashes($row['RcptNo']);
						}
						echo"<script>$('#cons".$a."').parent().find('input:first').focus().width(480);</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
								<option value="">Select one...</option>';
								foreach ($arr as $key => $val) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.$key.'">'.$val.'</option>';
								}
							echo'</select>';
							break;
							
							case '70.2':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
							$result =mysqli_query($conn,"select * from receipts where stamp>='".$d1."' and  stamp<='".$d2."' and paymode='Companies' and invno='' order by id asc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['patid'])]=stripslashes($row['rcptno']).'#'.stripslashes($row['patname']).'#'.stripslashes($row['patid']).'#'.stripslashes($row['date']).'#'.stripslashes($row['category']);
			}
						echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
								<option value="">Select one...</option>';
							foreach ($arr as $key => $val) {
								$pieces=explode("#",$val);
								echo'<option value="'.$key.'">'.$pieces[1].'-'.$key.'</option>';
							}
							echo'</select>';
							break;

							case '70.3':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);

							//statuses 1-requested, 3-accepted; 4-rejected; 2-done
							$result =mysqli_query($conn,"select * from labrequests where stamp>='".$d1."' and  stamp<='".$d2."' and status>=1 order by id asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
						<div class="cleaner_h10"></div>
							<select id="cons'.$a.'" style="">
							<option value="">Select one...</option>';


							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
						
							echo'</select>';
							break;
							
							case '70.4':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
							$result =mysqli_query($conn,"select * from radrequests where stamp>='".$d1."' and  stamp<='".$d2."' order by id asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
						<div class="cleaner_h10"></div>
							<select id="cons'.$a.'" style="">
							<option value="">Select one...</option>';


							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
						
							echo'</select>';
							break;
							case '70.5':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
							$result =mysqli_query($conn,"select * from theatrequests where stamp>='".$d1."' and  stamp<='".$d2."' order by id asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
						<div class="cleaner_h10"></div>
							<select id="cons'.$a.'" style="">
							<option value="">Select one...</option>';


							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
						
							echo'</select>';
							break;

							case '70.6':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
							$result =mysqli_query($conn,"select * from labrequests where stamp>='".$d1."' and  stamp<='".$d2."' and status=1 order by id asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
						<div class="cleaner_h10"></div>
							<select id="cons'.$a.'" style="">
							<option value="">Select one...</option>';


							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
						
							echo'</select>';
							break;

							case '70.7':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
							$result =mysqli_query($conn,"select * from pharmrequests where stamp>='".$d1."' and  stamp<='".$d2."' order by id asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
						<div class="cleaner_h10"></div>
							<select id="cons'.$a.'" style="">
							<option value="">Select one...</option>';


							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
						
							echo'</select>';
							break;

							case '70.8':
							$a=$_GET['a'];
							if(isset($_GET['b'])){
							$b=$_GET['b'];}else $b='NULL';
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);

							$result =mysqli_query($conn,"select * from cccpresc where  Stamp>='".$d1."' and  Stamp<='".$d2."' order by PrescId asc");	
					
						$num_results = mysqli_num_rows($result);
						echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
								<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'-'.stripslashes($row['TransDate']).'</option>';
							}
							echo'</select>';
							break;
							case '70.9':
							$a=$_GET['a'];
							if(isset($_GET['b'])){
							$b=$_GET['b'];}else $b='NULL';

							if($b==1){$table='counselling';}
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);

							$result =mysqli_query($conn,"select * from ".$table." where  Stamp>='".$d1."' and  Stamp<='".$d2."' order by PrescId asc");	
					
						$num_results = mysqli_num_rows($result);
						echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
								<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'-'.stripslashes($row['TransDate']).'</option>';
							}
							echo'</select>';
							break;
							
							
							case 71:
								$pid=$_POST['pid'];
								$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
								$rowa=mysqli_fetch_array($resulta);
								$sendto=stripslashes($rowa['Dept']);
								$patid=stripslashes($rowa['PatId']);
								$patname=stripslashes($rowa['PatName']);
								$paid=0;

								$stamp=date('Ymd');
								$dat=date('Y/m/d');
								$presc=mysql_real_escape_string(trim($_POST['presc'])).'<br/><br/>Prescribed By:'.$fullname;

								if(isset($_SESSION['dis'])){
									$diseases=implode(";",$_SESSION['dis']);
								}else $diseases=NULL;

								$s=strlen($diseases);
								$diseases=substr($diseases,0,$s);

								$resulta= mysqli_query($conn,"update newprescription set History='".mysql_real_escape_string(trim($_POST['history']))."',Prescription='".$presc."',DiagName='".$diseases."',Diagnosis='".mysql_real_escape_string(trim($_POST['diag']))."',PhyExam='".mysql_real_escape_string(trim($_POST['phy']))."',Status=4,Dept='".$_POST['sendto']."',ReviewDate='".$_POST['reviewdate']."',ConsTime='".date('H:i')."',Icd10='".$_POST['icd10']."',Doctor='".getuser($username)."' where PrescId='".$pid."'");
								
								//get receipt no
								$question =mysqli_query("SELECT * FROM sales order by TransNo desc limit 0,1");
								$ans=mysqli_fetch_array($question);
								$rcptno=stripslashes($ans['RcptNo'])+1;
								$arr=array();

								if($_POST['recp']==1){
									$arr[]='PHARMACY';
									$resulty = mysqli_query($conn,"insert into pharmrequests values('0','".$pid."','".$patid."','".$patname."','".mysql_real_escape_string(trim($_POST['presc']))."','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1)");	
								}

								if($_POST['rect']==1){
									$arr[]='THEATRE';
									$resulty = mysqli_query($conn,"insert into theatrequests values('0','".$pid."','".$patid."','".$patname."','".mysql_real_escape_string(trim($_POST['tre']))."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1)");	
								}


								if($_POST['recl']==1){
									
									//insert into lab requests
									$question =mysqli_query($conn,"SELECT * FROM labrequests order by id desc limit 0,1");
									$ans=mysqli_fetch_array($question);
									$labno=stripslashes($ans['labno'])+1;
								
									$a='lab';

									$max=count($_SESSION[$a]);
									for ($i = 0; $i < $max; $i++){
									$itcode = $_SESSION[$a][$i][0];
									$itname = $_SESSION[$a][$i][1];
									$itquat = $_SESSION[$a][$i][2];
									$itprice = $_SESSION[$a][$i][3];
									$tprice = $_SESSION[$a][$i][4];
									$oname = $_SESSION[$a][$i][5];
									$regn = $_SESSION[$a][$i][6];
									$categ = $_SESSION[$a][$i][7];
									$total = $_SESSION[$a][$i][8];
									$disc = $_SESSION[$a][$i][9];
									$subn = $_SESSION[$a][$i][10];
									$iid = $_SESSION[$a][$i][12];
									$disp=0;
									$arr[]=$categ;
									$dept=$categ;

									$resultc =mysqli_query($conn,"SELECT * FROM items WHERE ItemCode='".$itcode."'");
									$rowc=mysqli_fetch_array($resultc);
									$sec=stripslashes($rowc['SubCategory']);	
							
								//$resulta = mysqli_query("insert into sales values('0','".$rcptno."','".$dept."','".$itcode."','".$itname."','".$itquat."','".$itprice."',0,'".$disc."','".$subn."',0,'".$disp."','".$dat."','".$regn."','".$oname."','','','','','','','','','','','".$stamp."','','".$username."',0,'".$iid."','')");
								$resulty = mysqli_query($conn,"insert into labrequests values('0','".$labno."','".$pid."','".$patid."','".$patname."','".$sec."','".$itname."','','".date('H:i')."','','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'','".$paid."','','','','','','','')");	
								
								}

							}

							if($_POST['recr']==1){
								
								//insert into rad requests
								$question =mysqli_query($conn,"SELECT * FROM radrequests order by id desc limit 0,1");
								$ans=mysqli_fetch_array($question);
								$radno=stripslashes($ans['radno'])+1;
								
								$a='rad';
								
								
								$max=count($_SESSION[$a]);
								for ($i = 0; $i < $max; $i++){
									$itcode = $_SESSION[$a][$i][0];
									$itname = $_SESSION[$a][$i][1];
									$itquat = $_SESSION[$a][$i][2];
									$itprice = $_SESSION[$a][$i][3];
									$tprice = $_SESSION[$a][$i][4];
									$oname = $_SESSION[$a][$i][5];
									$regn = $_SESSION[$a][$i][6];
									$categ = $_SESSION[$a][$i][7];
									$total = $_SESSION[$a][$i][8];
									$disc = $_SESSION[$a][$i][9];
									$subn = $_SESSION[$a][$i][10];
									$iid = $_SESSION[$a][$i][12];
									$disp=0;

									$arr[]=$categ;
									$dept=$categ;


							
								//$resulta = mysqli_query("insert into sales values('0','".$rcptno."','".$dept."','".$itcode."','".$itname."','".$itquat."','".$itprice."',0,'".$disc."','".$subn."',0,'".$disp."','".$dat."','".$regn."','".$oname."','','','','','','','','','','','".$stamp."','','".$username."',0,'".$iid."','')");
								$resulty = mysqli_query($conn,"insert into radrequests values('0','".$radno."','".$pid."','".$patid."','".$patname."','".$itname."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'','".$paid."')");	
								
								}

							}

							
							
			if($resulta){
				foreach ($arr as $key => $val) {
				//send popups
				$resultc =mysqli_query($conn,"SELECT * FROM compips WHERE dept='".$val."'");
				$num_resultsc = mysqli_num_rows($resultc);	
				for ($i=0; $i <$num_resultsc; $i++) {
				$rowc=mysqli_fetch_array($resultc);
				$ip=stripslashes($rowc['ip']);		
				
					$resultd =mysqli_query($conn,"SELECT * FROM logintable WHERE computerip='".$ip."'");
					$num_resultsd = mysqli_num_rows($resultd);	
					for ($d=0; $d <$num_resultsd; $d++) {
					$rowd=mysqli_fetch_array($resultd);
					$user=stripslashes($rowd['username']);
					$resulte = mysqli_query($conn,"insert into messages values('0','".$user."','System','Incoming Patient from ".$dept."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
					}
							
				}	
				}
							
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates consultations.Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo"<img src=\"images/tick.png\" style=\"width:30px; height:30px;\">
										<script>
											setTimeout(function() {
											docexam('".$sendto."');},500);
										</script>";
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;
							
							case 72:
							$pid=$_GET['pid'];
							$resulta= mysqli_query($conn,"update newprescription set WardType='".$_GET['wtype']."',RoomNo='".$_GET['rno']."',BedNo='".$_GET['bno']."',AdmDate='".date('d/m/Y')."',Admitted=1,Doctor='".$fullname."' where PrescId='".$pid."'");
							$resultb= mysqli_query($conn,"update wardbeds set patname='".$_GET['patname']."',patid='".$_GET['patid']."',Status=1 where bedno='".$_GET['bno']."' and roomno='".$_GET['rno']."'");
							
							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates consultations[admissions information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;
							case '73':
							$a=$_GET['a'];
							$d1=preg_replace('~/~', '', $_GET['d1']);
							$d2=preg_replace('~/~', '', $_GET['d2']);
			$result =mysqli_query($conn,"select * from sales where Stamp>='".$d1."' and  Stamp<='".$d2."' and Dispensed=0 and Category='PHARMACY' and Status=1 order by TransNo asc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']);
			}
						echo"<script>$('#cons".$a."').parent().find('input:first').focus();</script>";
						echo'<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump">'.count($arr).'</strong></a>
						<div class="cleaner_h10"></div>
						<select id="cons'.$a.'">
							<option value="">Select one...</option>';
							foreach ($arr as $key => $val) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.$key.'">'.$key.','.$val.'</option>';
							}
							echo'</select>';
							break;
							
							case 75:
							$item=$_POST['itemd'];
							$cat=$_POST['cat'];
							$result = mysqli_query($conn,"insert into ".$cat." values('0','".$item."')");	
							if($result){
$resulta = mysqli_query("insert into log values('0','".$username." inserts data into ".$cat." database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<img src="images/tick.png" style="width:30px; height:30px;">
<script>$("#itemdefault").val("").focus();</script>';
echo"
										<script>
										setTimeout(function() {
										addmedical();},500);
										</script>";
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
							break;
							case '75.1':
							$item=$_GET['itemd'];
							$itid=$_GET['itid'];
							$cat=$_GET['cat'];
							$result= mysqli_query("update ".$cat." set name='".$item."' where id='".$itid."'");
							
							if($result){
$resulta = mysqli_query("insert into log values('0','".$username." updates ".$cat." database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<img src="images/tick.png" style="width:30px; height:30px;">';
									echo"
										<script>
										setTimeout(function() {
										addmedical();},500);
										</script>";
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
							break;
								case '75.2':
							$itid=$_GET['itid'];
							$cat=$_GET['cat'];
							$result = mysqli_query($conn,"DELETE from ".$cat." where id='".$itid."'");
							
							if($result){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from ".$cat." database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<img src="images/tick.png" style="width:30px; height:30px;">';
									echo"
										<script>
										setTimeout(function() {
										addmedical();},500);
										</script>";
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
							break;
							case 76:
							$pid=$_GET['pid'];
							$query =mysqli_query($conn,"select * from admdetails where pid='".$pid."'");
							$count = mysqli_num_rows($query);
							if($count>0){
							$resulta= mysqli_query($conn,"update admdetails set tw1='".$_GET['tw1']."',tb1='".$_GET['tb1']."',td1='".$_GET['td1']."',tw2='".$_GET['tw2']."',tb2='".$_GET['tb2']."',td2='".$_GET['td2']."',physician='".$_GET['phy']."',surgeon='".$_GET['sur']."',anaesthetist='".$_GET['anae']."',paeditrician='".$_GET['paed']."',previous='".$_GET['previous']."',current='".$_GET['current']."',height='".$_GET['height']."',weight='".$_GET['weight']."',bmi='".$_GET['bmi']."',steroidate='".$_GET['steroidate']."',steroid='".$_GET['steroid']."' where pid='".$pid."'");
							}else{
							$resulta= mysqli_query($conn,"insert into admdetails values('".$pid."','".$_GET['patid']."','".$_GET['patname']."','".$_GET['bedno']."','".$_GET['tw1']."','".$_GET['tb1']."','".$_GET['td1']."','".$_GET['tw2']."','".$_GET['tb2']."','".$_GET['td2']."','".$_GET['phy']."','".$_GET['sur']."','".$_GET['anae']."','".$_GET['paed']."','".$_GET['previous']."','".$_GET['current']."','".$_GET['height']."','".$_GET['weight']."','".$_GET['bmi']."','".$_GET['steroid']."','".$_GET['steroidate']."')");
							}
							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates inpatient prescripion administration chart,Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;
							
							
							
							case '77.1':
							$code=$_GET['code'];
							$y=$_GET['y'];
							$q=$_GET['q'];
							if($y==1){
							$resulta = mysqli_query($conn,"update vitals set temp='".$_GET['c']."',bp1='".$_GET['d']."',bp2='".$_GET['e']."',
							weight='".$_GET['f']."',pulse='".$_GET['g']."',breath='".$_GET['h']."',random='".$_GET['i']."' where id='".$code."'");	
								}
							else{
								$resulta= mysqli_query($conn,"insert into vitals values('0','".$_GET['j']."','".$_GET['q']."','".$_GET['a']."','".$_GET['b']."','".$_GET['c']."','".$_GET['d']."','".$_GET['e']."','".$_GET['f']."','".$_GET['g']."','".$_GET['h']."','".$_GET['i']."')");	
								}
								if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits vitals table.id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="16px" height="16px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="16px" height="16px"/>';
									}
							break;
							
							case 78:
							$pid=$_GET['pid'];
							$notes=mysql_real_escape_string(trim($_GET['notes']));
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							
							$notes=$notes.'<br/> Entry Made By:<b>'.$fullname.'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: :<b>'.date('d/m/Y').'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:<b>'.date('H:i').'</b>';
							
							$resulta = mysqli_query($conn,"insert into cadex values('0','".$rowa['PrescId']."','".$rowa['PatId']."','".$rowa['PatName']."','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','".$notes."')");
							
							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates consultations[nurses information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							echo"
										<script>
										setTimeout(function() {
										treatchart();},500);
										</script>";
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;

							case '78.1':
							$pid=$_POST['pid'];
							$notes=mysql_real_escape_string(trim($_POST['notes']));
							
							$resulta= mysqli_query($conn,"update inpatients set AdmNotes='".$notes."' where PrescId='".$pid."'");
							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates admission notes.Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;

							case '78.2':
							$pid=$_POST['pid'];
							$notes=mysql_real_escape_string(trim($_POST['notes']));
							$notes=$notes.'<br/> Entry Made By:<b>'.$fullname.'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: :<b>'.date('d/m/Y').'</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Time:<b>'.date('H:i').'</b>';
							
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$resultb = mysqli_query($conn,"insert into progress values('0','".$rowa['PrescId']."','".$rowa['PatId']."','".$rowa['PatName']."','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','".$notes."')");
							
							if($resultb){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates progress notes.Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							
							echo"
							<script>
							setTimeout(function() {
							$.ajax({
							url:'link.php',
							data:{id:77,pid:".$_POST['pid']."},
							success:function(data){
							$('#mainp').html(data);
							}
							});
							},500);
							</script>";
							
							exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;
							case 79:
							$a=$_GET['a'];
							$stamp=date('Ymd');
							$dat=date('Y/m/d');

							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['RcptNo']);
							$rcptno = intval($rcptno)+1;
							$un='UN-'.$rcptno;
							$refno='R-'.$rcptno;

							$regn = $_SESSION[$a][0][6];
							$resulta =mysqli_query($conn,"select * from newprescription where PatId='".$regn."' and Stamp='".date('Ymd')."'");
							$num_resultsa = mysqli_num_rows($resulta);

							if($num_resultsa>0){
								$rowa=mysqli_fetch_array($resulta);
								$un=$pid=stripslashes($rowa['PrescId']);
								$resultq = mysqli_query($conn,"DELETE from labrequests where prescid='".$pid."' and paid!=1 and status=1");	
								$resultq = mysqli_query($conn,"DELETE from radrequests where prescid='".$pid."' and paid!=1 and status=1");	

							}else{
								$pid='0';
							}

							//insert into lab requests
							$question =mysqli_query($conn,"SELECT * FROM labrequests order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$labno=stripslashes($ans['labno'])+1;

							//insert into radiology requests
							$question =mysqli_query($conn,"SELECT * FROM radrequests order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$radno=stripslashes($ans['radno'])+1;

							

							
							$max=count($_SESSION[$a]);
							for ($i = 0; $i < $max; $i++){
								
								$itcode = $_SESSION[$a][$i][0];
								$itname = $_SESSION[$a][$i][1];
								$itquat = $_SESSION[$a][$i][2];
								$itprice = $_SESSION[$a][$i][3];
								$tprice = $_SESSION[$a][$i][4];
								$oname = $_SESSION[$a][$i][5];
								$regn = $_SESSION[$a][$i][6];
								$categ = $_SESSION[$a][$i][7];
								$total = $_SESSION[$a][$i][8];
								$disc = $_SESSION[$a][$i][9];
								$subn = $_SESSION[$a][$i][10];
								$iid = $_SESSION[$a][$i][12];
								if($a=='ward'){
									$disp=1;
								}else{$disp=0;}

								$dept=$categ;
								
								$resulta = mysqli_query($conn,"insert into sales values('0','".$rcptno."','".$dept."','".$itcode."','".$itname."','".$itquat."','".$itprice."',0,'".$disc."','".$subn."',0,'".$disp."','".$dat."','".$regn."','".$oname."','','','','".$refno."','','','','','','','".$stamp."','','".$username."',0,'".$iid."','')");
							
								if($a=='theatre'){
								
									$refno='UN-'.$rcptno;
									$resulty = mysqli_query($conn,"insert into theatrequests values('0','".$refno."','000','".$oname."','".$itname."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1)");	
							
								}

								else if($a=='lab'){
									
									$resultc =mysqli_query($conn,"SELECT * FROM items WHERE ItemCode='".$itcode."'");
									$rowc=mysqli_fetch_array($resultc);
									$sec=stripslashes($rowc['SubCategory']);	
								
									$resulty = mysqli_query($conn,"insert into labrequests values('0','".$labno."','".$un."','".$regn."','".$oname."','".$sec."','".$itname."','','".date('H:i')."','','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'".$rcptno."',0,'','','','','','','')");	
							
								}

								else if($a=='rad'){
									
									$resulty = mysqli_query($conn,"insert into radrequests values('0','".$radno."','".$un."','".$regn."','".$oname."','".$itname."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'".$rcptno."',0)");
								}
								
							}

							


							if($a=='ward'){
								$resultb= mysqli_query($conn,"update tempbill set status=0 where patid='".$patid."'");	
							}
							if($a=='nurse'){
								$result = mysqli_query($conn,"DELETE from daycare where patid='".$regn."'");	
							}
							
							if($resulta){
								unset($_SESSION[$a]);
								echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
								echo"<script>$('#totitems').val('');$('#total').val('');$('#tprice').val('');$('#price44').val('');$('#quat44').val('');$('#disc44').val('');$('#sub44').val('');
									$('#disc44').prop('readonly',true);$('#disc44').css({'border' : 'solid #f00 1px'});</script>";
								$resultc = mysqli_query($conn,"insert into log values('0','".$username." posts bill.Rcpt No:".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo"<script>
										$().customAlert();
										alert('Success!', '<p>Bill Posted.</p>');
										</script>";
								exit;
							}else{
								$result = mysqli_query($conn,"DELETE from sales where rcptno='".$rcptno."'");
								echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
							}
							
							break;
							case 80:
							
							break;
							
							case 81:
							$result =mysqli_query($conn,"select * from patients");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$age=stripslashes($row['age']);
								$pno=stripslashes($row['pntno']);
								$age=$age+1;
								$resultb = mysqli_query($conn,"update patients set age='".$age."' where pntno='".$pno."'");
							}
							if($resultb){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates age in patients database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo"
										<script>
										$().customAlert();
										alert('Success!', '<p>Ages updated.</p>');
										e.preventDefault();
										</script>";
										
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please Repeat again.</p>');
										e.preventDefault();
										</script>";
									}
							break;
							case '82':
							$a=$_GET['a'];
							if($a==1){
							$result= mysqli_query($conn,"insert into extmedics values('0','".$_GET['acno']."','".$_GET['name']."','".$_GET['add']."','".$_GET['town']."','".$_GET['tel']."','".$_GET['mobile']."','".$_GET['email']."',1)");
							}
							if($a==2){
							$regn=$_GET['regn'];
							$result= mysqli_query($conn,"update extmedics set acno='".$_GET['acno']."',name='".$_GET['name']."',address='".$_GET['add']."',town='".$_GET['town']."',tel='".$_GET['tel']."',mobile='".$_GET['mobile']."',email='".$_GET['email']."' where id='".$regn."'");
							}
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits External Medics database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
									echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
										}
							
							break;
							case '83':
							$regn=$_GET['regn'];
							$result = mysqli_query($conn,"DELETE from extmedics where id='".$regn."'");
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from External Medics database.Id:".$_GET['regn']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
										}
							break;
case 84:
						$name=$_GET['name'];
							$pass=$_GET['pass'];

							$result = mysqli_query($conn,"select * from users  where name='".$name."' and password = sha1('".$pass."')");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
 							$rowa=mysqli_fetch_array($result);
							$usert=stripslashes($rowa['position']);

							$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
							 $row=mysqli_fetch_array($result);
							$var=stripslashes($row[$usert]);

							if($var=='YES'){
									$resulta = mysqli_query($conn,"insert into log values('0','".$name." authorizes transaction.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								
								echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
								echo"<script>$('#adname').val('');$('#adpass').val('');
								$('#disc44').prop('readonly',false);$('#disc44').css({'border' : 'solid #0085b2 1px'});
$('#disc').prop('readonly',false);$('#disc').css({'border' : 'solid #0085b2 1px'});
								$('#credstatus').prop('checked',true);
								$('#creditnote').prop('checked',true);
								$( '#adminauth' ).dialog( 'close' );
								$('#amount76').prop('disabled',false);
								$('#amount76').css({'border' : 'solid #0085b2 1px'});</script>";
								}
								else{echo'<p><img src="images/down.jpg" style="margin-top:0px;width:30px; height:30px"></p>';}
							}	else{echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';}
							
							
							break;
							case 85:
							$tid=$_GET['tid'];
							if($usertype=='Accounts'||$usertype=='Admin'){
							$result = mysqli_query($conn,"DELETE from sales where TransNo='".$tid."'");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from income database.Record No:".$tid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo"<script>
										$().customAlert();
										alert('Success!', '<p>Delete Succesful.</p>');
										e.preventDefault();
										</script>"	;
							}else{echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Delete not Succesful.You may not be authorized to process this action</p>');
										e.preventDefault();
										</script>";}
							break;
							
						
							
							case 87:
							$itcode=$_GET['itcode'];
							$bid=$_GET['bid'];
							$bname=$_GET['bname'];
							$qty=$_GET['qty'];
							$notes=$_GET['notes'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							$result =mysqli_query($conn,"select * from items where ItemCode='".$itcode."'");
							$row=mysqli_fetch_array($result);
							if($bname=='PROCUREMENT'){$branch='Bal';}else{$branch=$bname;}
							$bal=stripslashes($row[$branch]);
							$itname=stripslashes($row['ItemName']);
							$sprice=stripslashes($row['PurchPrice']);
							$pack=stripslashes($row['Pack']);
							$nbal=$bal-$qty;
							$total=$sprice*$qty;
							
							//insert into stock track
		$resultd = mysqli_query($conn,"insert into stocktrack values('0','".$date."','".$bname."','".$itcode."','".$itname."','".$pack."','STOCK USAGE REGISTER','".$qty."','".$nbal."','".$username."','".$stamp."')");	
			
							$resultb = mysqli_query($conn,"update items set ".$branch."='".$nbal."' where ItemCode='".$itcode."'");
							$resulta = mysqli_query($conn,"insert into stockuse values('0','".$bid."','".$bname."','".$itcode."','".$itname."','".$qty."','".$notes."','".date('d/m/Y')."','".date('Ymd')."','".$username."',1)");	
							if($resulta&&$resultb){
								
								//update ledgers-stock
			$amount=$total;
			$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
					$rowb=mysqli_fetch_array($resultb);
					$invbal=stripslashes($rowb['bal']);
					$invbal=$invbal-$amount;
					
					$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='701'");
					$rowc=mysqli_fetch_array($resultc);
					$supbal=stripslashes($rowc['bal']);
					$supbal=$supbal+$amount;
					
			$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','701','STOCK USAGE EXPENSES','".$amount."','Stock Usage','".$date."','".$invbal."','".$supbal."','".$stamp."','','',0)");
			$resultm = mysqli_query($conn,"update ledgers set bal='".$invbal."' where ledgerid='630'");
			$resultn = mysqli_query($conn,"update ledgers set bal='".$supbal."' where ledgerid='701'");
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes an entry in the stock usage database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo"
										<script>
											setTimeout(function() {
										stockusage();},500);
										$().customAlert();
										alert('Success!', '<p>Entry Posted.</p>');
										e.preventDefault();
									</script>";
										
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please Try again.</p>');
										e.preventDefault();
										</script>";
									}
							break;
							
							
							case 88:
							$date=date('d/m/Y');
							$stamp=date('Ymd');
							$transno=$_GET['param'];
							$result =mysqli_query($conn,"select * from issuetable where TransNo='".$transno."'");
							$row=mysqli_fetch_array($result);
							$qty=stripslashes($row['Qty']);
							$itcode=stripslashes($row['ItemCode']);
							$itname=stripslashes($row['ItemName']);
							$pack=stripslashes($row['Pack']);
							$dep1=$bname1=stripslashes($row['Dep1']);//to branch
							$dep2=$bname2=stripslashes($row['Dep2']);//from branch
							if($dep1=='PROCUREMENT'){
								$dep1='Bal';
							}
							if($dep2=='PROCUREMENT'){
								$dep2='Bal';
							}
							$result =mysqli_query($conn,"select * from items where ItemCode='".$itcode."'");
							$row=mysqli_fetch_array($result);
							$a=stripslashes($row[$dep1]);
							$b=stripslashes($row[$dep2]);
							$a=$a+$qty;
							$b=$b-$qty;
							
							if($b<0){
								echo"<script>		
										$().customAlert();
										alert('Failed!', '<p>Balance of this item is not enough for transfer.</p>');
										e.preventDefault();
										</script>";	
										exit;
							}
							
							//insert into stock track
		$resultd = mysqli_query($conn,"insert into stocktrack values('0','".date('Y/m/d')."','".$bname1."','".$itcode."','".$itname."','".$pack."','STOCK TRANSFER FROM ".$bname2."','".$qty."','".$a."','".$username."','".$stamp."')");	
		
		$resulte = mysqli_query($conn,"insert into stocktrack values('0','".date('Y/m/d')."','".$bname2."','".$itcode."','".$itname."','".$pack."','STOCK TRANSFER TO ".$bname1."','".$qty."','".$b."','".$username."','".$stamp."')");	
							
							
							$resultb = mysqli_query($conn,"update items set ".$dep1."='".$a."',".$dep2."='".$b."' where ItemCode='".$itcode."'");
							if($resultb){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." transfers item No:".$itcode.", Trans No:".$transno.".','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
							$resultc = mysqli_query($conn,"update issuetable set Status=2,Issued='".$username."',TransDate='".$date."',Stamp='".$stamp."'   where TransNo='".$transno."'");
							echo"<script>$('#normal' + ".$transno.").html('');</script>";	
							}
							break;
							
							case 89:
							$transno=$_GET['param'];
							$resultc = mysqli_query($conn,"update issuetable set Status=0  where TransNo='".$transno."'");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." revokes stock transfer, Trans No:".$transno.".','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
							break;
							
							case 90:
							$stamp=date('Ymd');
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM goodsreturned order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['gnrno'])+1;
							
							$fintot=$_GET['fintot'];$totalsale=0;
							$max=count($_SESSION['ret']);
							for ($i = 0; $i < $max; $i++){
							$code=$_SESSION['ret'][$i][0];
							$name=$_SESSION['ret'][$i][1];
							$unit=$_SESSION['ret'][$i][2];
							$part=$_SESSION['ret'][$i][3];
							$pprice=$_SESSION['ret'][$i][4];
							$date=$_SESSION['ret'][$i][5];
							$total=$_SESSION['ret'][$i][6];
							$sname=$_SESSION['ret'][$i][7];
							$batch=$_SESSION['ret'][$i][8];
							$invoice=$_SESSION['ret'][$i][9];
							$expiry=$_SESSION['ret'][$i][10];
							$lpo=$_SESSION['ret'][$i][11];
							$reason=$_SESSION['ret'][$i][12];
							$pack=$_SESSION['ret'][$i][13];
							$bal=$_SESSION['ret'][$i][14];
							$qty=$_SESSION['ret'][$i][15];
							$totalsale+=$_SESSION['ret'][$i][16];
							$sid=$_SESSION['ret'][$i][17];
							$diff=$bal-$qty;
							
							//insert into stock track
		$resultd = mysqli_query($conn,"insert into stocktrack values('0','".date('Y/m/d')."','".$userdep."','".$code."','".$name."','".$pack."','GOODS RETURNED-".$sname."','".$qty."','".$diff."','".$username."','".$stamp."')");	
		
							$resultb= mysqli_query($conn,"update items set ".$userdep."='".$diff."' where ItemCode='".$code."'");
							$resulta = mysqli_query($conn,"insert into goodsreturned values('0','".$rcptno."','".$code."','".$name."','".$unit."','".$part."','".$pprice."','".$date."','".$total."','".$sname."','".$batch."','".$invoice."','".$expiry."','".$lpo."','".$reason."','".$pack."','".date('Ymd')."','".$username."',1,'".$totalsale."')");	
								}
				if($resulta&&$resultb){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." returns goods.Rcpt No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	


			//update ledgers-acs/payable
					$amount=$fintot;
					$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='629'");
					$rowb=mysqli_fetch_array($resultb);
					$acbal=stripslashes($rowb['bal']);
					$acbal=$acbal-$amount;
					
					$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
					$rowc=mysqli_fetch_array($resultc);
					$costbal=stripslashes($rowc['bal']);
					$costbal=$costbal-$amount;
					
					$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','629','Accounts Payable','".$amount."','Goods Returned Outwards','".$date."','".$costbal."','".$acbal."','".$stamp."','','',0)");
					$resultm = mysqli_query($conn,"update ledgers set bal='".$acbal."' where ledgerid='629'");
					$resultn = mysqli_query($conn,"update ledgers set bal='".$costbal."' where ledgerid='630'");
			

					//post credit note
					$resultc =mysqli_query($conn,"SELECT * FROM creditsuppliers WHERE CustomerId='".$sid."'");
					$rowc=mysqli_fetch_array($resultc);
					$bal2=stripslashes($rowc['Bal']);
					$bal3=$bal2-$amount;										
					$resulta = mysqli_query($conn,"insert into supplierdebts values('0','".$sid."','".$sname."','".$invoice."','".$rcptno."','".$amount."','cr','0','".$bal3."','".$bal3."','Purchases','".date('d/m/Y')."','".$stamp."',1)");
					$resultn = mysqli_query($conn,"update creditsuppliers set Bal='".$bal3."' where CustomerId='".$sid."'");


unset($_SESSION['ret']);
				echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
					echo"<script>		
										window.open('report.php?id=51&rcptno=".$rcptno."');
										setTimeout(function() {
											returnout();},500);
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							case 91:
							$stamp=date('Ymd');
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM lpo order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['lpono'])+1;
							
							
							$max=count($_SESSION['lpo']);
							for ($i = 0; $i < $max; $i++){
							$code=$_SESSION['lpo'][$i][0];
							$name=$_SESSION['lpo'][$i][1];
							$unit=$_SESSION['lpo'][$i][2];
							$part=$_SESSION['lpo'][$i][3];
							$pprice=$_SESSION['lpo'][$i][4];
							$date=$_SESSION['lpo'][$i][5];
							$total=$_SESSION['lpo'][$i][6];
							$sname=$_SESSION['lpo'][$i][7];
							$pack=$_SESSION['lpo'][$i][8];
							
							$resulta = mysqli_query($conn,"insert into lpo values('0','".$rcptno."','".$sname."','".$date."','".$name."','".$pack."','".$unit."','".$part."','".$pprice."','".$total."','".date('Ymd')."','".$username."',1)");	
								}
				if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." prepares lpo.Rcpt No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
unset($_SESSION['lpo']);
				echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
					echo"<script>		
										window.open('report.php?id=52&rcptno=".$rcptno."');
										setTimeout(function() {
											lpo();},500);
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
										e.preventDefault();
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							case 92:
							$nbal=$_GET['nbal'];
							$total=$_GET['total'];
							$lid=$_GET['lid'];
							$lname=$_GET['lname'];
							$refno=$_GET['refno'];
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							$totinv='';
							$max=count($_SESSION['credinvoice']);
							foreach ($_SESSION['credinvoice'] as $i => $val) {
							$code=$_SESSION['credinvoice'][$i][0];
							$amount=$_SESSION['credinvoice'][$i][1];
							$cid=$_SESSION['credinvoice'][$i][2];
							$cname=$_SESSION['credinvoice'][$i][3];
							$invno=$_SESSION['credinvoice'][$i][4];
							$totinv.=$invno.';';
							$bal=$_SESSION['credinvoice'][$i][5];
							$paying=$_SESSION['credinvoice'][$i][6];
							$invbal=$_SESSION['credinvoice'][$i][7];
							$paid=$_SESSION['credinvoice'][$i][8];
							$sbal=$amount-$paying;
							$npaid=$paid+$paying;
							$ninvbal=$invbal-$paying;
							
						$resulta = mysqli_query($conn,"insert into customerdebts values('0','".$cid."','".$cname."','".$invno."','".$paying."','cr','".$npaid."','".$ninvbal."','".$bal."','Payment of Invoice-Inv No-".$invno."-Ref No".$refno."','".date('Y/m/d')."','".date('Ymd')."',1,'','')");
						$resultb = mysqli_query($conn,"update customerdebts set InvBal='".$ninvbal."',Paid='".$npaid."' where TransNo='".$code."'");
						if($ninvbal==0){
						$resultc = mysqli_query($conn,"update customerdebts set Status=2 where TransNo='".$code."'");
						}
						
						
								}
				if($resulta){
$result = mysqli_query($conn,"update creditcustomers set Bal='".$nbal."' where CustomerId='".$cid."'");	

								//update ledger
								$resultf = mysqli_query($conn,"select * from ledgers where ledgerid=628");
								$row=mysqli_fetch_array($resultf);
								$bal=stripslashes($row['bal']);
								$balc=$bal-$total;
								
								$resultg = mysqli_query($conn,"select * from ledgers where ledgerid=".$lid."");
								$row=mysqli_fetch_array($resultg);
								$bal=stripslashes($row['bal']);
								$bald=$bal+$total;
								
								
								$resulte = mysqli_query($conn,"insert into ledgerentries values('0','".$lid."','".$lname."','628','Accounts Receivable','".$total."','Income from Credit sales','".$date."','".$bald."','".$balc."','".$stamp."','','',0)");
								$resultf = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid=628");
								$resultg = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid=".$lid."");
								
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM debtreceipts order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['id'])+1;
								
				$resulta = mysqli_query($conn,"insert into debtreceipts values('".$rcptno."','".$cid."','".$cname."','".$total."','".$totinv."','".$nbal."','".date('Y/m/d')."','".date('Ymd')."','".$username."',1)");
				
				
$resulta = mysqli_query($conn,"insert into log values('0','".$username." receives payment from debtor.Invoice No.".$invno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
unset($_SESSION['credinvoice']);
				echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
					echo"<script>window.open('output.php?id=18&rcptno=".$rcptno."');</script>";	
					echo"<script>	$('#total').val('');	$('#bal').val('');
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
											$.ajax({
											url:'link.php',
											data:{id:22,cus:'".$cid."'},
											success:function(data){
											$('#display').html(data);
											}
										});
										
										
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							case 93:
							
							$category=$_GET['category'];
							$benamount=$_GET['benamount'];
							$smartstatus=$_GET['smartstatus'];
							$ampaid=$_GET['ampaid'];


							//credit note
							if($ampaid<0){
								//send email
								$rcptno=$_SESSION['pay'][0][2];
								$resultd =mysqli_query($conn,"SELECT * FROM receipts WHERE rcptno='".$rcptno."' limit 0,1");
								$rowd=mysqli_fetch_array($resultd);
								$message='System Alert: Patient '.stripslashes($rowd['patname']).',Patient no:'.stripslashes($rowd['patid']).', has been given a credit note/reversal for amount '.$ampaid.'. The Reversal reference number is '.$rcptno.'. The transaction has been carried out by '.getuser(stripslashes($rowd['username'])).' at '.stripslashes($rowd['time']).' hrs on '.dateprint(stripslashes($rowd['date'])).'.';
								sendemail($message);
							}



							
							//get details of cash a/c
							$result =mysqli_query($conn,"select * from ledgers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								if($username==substr(stripslashes($row['name']),0,5)){
									$cashacc=stripslashes($row['ledgerid']);
									$cashname=stripslashes($row['name']);
								}
							}
								
							//get details of chief cashier
							$resulta =mysqli_query($conn,"select * from users where position='ChiefCashier'");
							$rowa=mysqli_fetch_array($resulta);  
							$chiefcashier=stripslashes($rowa['name']);
		
							$credo=$_GET['credit'];							
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							$totmode='';
							$max=count($_SESSION['pay']);

							for ($i = 0; $i < $max; $i++){
								$patid=$_SESSION['pay'][$i][0];
								$patname=$_SESSION['pay'][$i][1];
								$rcptno=$_SESSION['pay'][$i][2];
								$mode=$_SESSION['pay'][$i][3];
								$cid=$_SESSION['pay'][$i][4];
								$cname=$_SESSION['pay'][$i][5];
								$cardno=$_SESSION['pay'][$i][6];
								$amount=$_SESSION['pay'][$i][7];
								
								$totmode.=$mode.';';
								$resultp = mysqli_query($conn,"insert into receipts values('0','".$date."','".$patid."','".$patname."','".$rcptno."','".$mode."','".$cid."','".$cname."','".$cardno."','".$amount."','".$stamp."',1,'".$username."','','".$category."','".date('Hi')."','".$stamp."".date('Hi')."')");
								
								//If mode is Cash
								
								if($mode=='Cash'){
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='".$cashacc."'");
									$rowb=mysqli_fetch_array($resultb);
									$cashbal=stripslashes($rowb['bal']);
									$cashbal=$cashbal+$amount;
									//get balance of income revenue ledger
									$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
									$rowz=mysqli_fetch_array($resultz);
									$incomebal=stripslashes($rowz['bal']);
									
									$incomebal=$incomebal+$amount;
									
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','".$cashacc."','".$cashname."','635','Income Revenue','".$amount."','Income from Cash sales-Inv No:".$rcptno."','".$date."','".$cashbal."','".$incomebal."','".$stamp."','','',0)");
									$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$cashbal."' where ledgerid='".$cashacc."'");
									
									if($chiefcashier!=''&&$cashbal>50000){
										$resultb = mysqli_query($conn,"insert into messages values('0','".$chiefcashier."','System','".$cashname."-".$cashbal." .<br/>Cash in Hand Limit exceeded-".date('d/m/Y')."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
									}
								}
									
								//If mode is credit
								if($mode=='Credit'){
									/*if ($patid == null || $patid == '' || $patid == 0) {
										exit;
										echo"<script>
											$().customAlert();
											alert('Sorry!', '<p>You cannot credit an unregistered client.</p>');
											e.preventDefault();
											</script>";
									}*/

									$query =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE PatientId='".$patid."' AND PatientId <> '' AND PatientId <> '0' AND PatientId <> 0");		
									$count = mysqli_num_rows($query);
									if($count==0){
										$query =mysqli_query($conn,"select * from creditcustomers order by CustomerId desc limit 0,1");
										$row=mysqli_fetch_array($query);
										$cusid=stripslashes($row['CustomerId'])+1;
										$resultb = mysqli_query($conn,"insert into creditcustomers values('".$cusid."','".$patname."','".$patname."','".$patid."','','','','','','')");
										$resultc =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE CustomerId=".$cusid);
									}else{
										$resultc =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE PatientId='".$patid."'");
									}

									
									$rowc=mysqli_fetch_array($resultc);
									$cusid=stripslashes($rowc['CustomerId']);
									$bal2=stripslashes($rowc['Bal']);
									$bal3=$bal2+$amount;;
									$resultd = mysqli_query($conn,"insert into customerdebts values('0','".$cusid."','".$patname."','".$rcptno."','".$amount."','dr','0','".$bal3."','".$bal3."','Hospital charges on ".$date."','".$date."','".$stamp."',1,'".$patid."','".$patname."')");	
									$resulte = mysqli_query($conn,"update creditcustomers set Bal='".$bal3."' where CustomerId='".$cusid."'");	
									
									//update ledgers
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=628");
									$rowb=mysqli_fetch_array($resultb);
									$recbal=stripslashes($rowb['bal']);
									$recbal=$recbal+$amount;
									//get balance of income revenue ledger
									$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
									$rowz=mysqli_fetch_array($resultz);
									$incomebal=stripslashes($rowz['bal']);
									$incomebal=$incomebal+$amount;
									
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','628','Accounts Receivable','635','Income Revenue','".$amount."','Income from Credit sales-Inv No:".$rcptno."','".$date."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
									$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='628'");
							
								}
										
										//If mode is companies 
								if($mode=='Companies'){
									if($smartstatus==1){
										$benamount=$benamount-$amount;
										$resulte = mysqli_query($conn,"update patients set benamount='".$benamount."' where pntno='".$patid."'");	
									}
									echo"<script>window.open('output.php?id=5&rcptno=".$rcptno."');</script>";				
								}
								//If mode is bank
								if($mode=='Bank'){
										//update ledgers
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='".$cid."'");
									$rowb=mysqli_fetch_array($resultb);
									$bankbal=stripslashes($rowb['bal']);
									$bankbal=$bankbal+$amount;
									
									//get balance of income revenue ledger
									$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
									$rowz=mysqli_fetch_array($resultz);
									$incomebal=stripslashes($rowz['bal']);
											
									$incomebal=$incomebal+$amount;
									
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','".$cid."','".$cname."','635','Income Revenue','".$amount."','Income through bank payments-Ref No:".$cardno."','".$date."','".$bankbal."','".$incomebal."','".$stamp."','','',0)");
									$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$bankbal."' where ledgerid='".$cid."'");											
								}
								if($mode=='Waiver'){
									//update ledgers-waivers expenses
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='700'");
									$rowb=mysqli_fetch_array($resultb);
									$waiverbal=stripslashes($rowb['bal']);
									$waiverbal=$waiverbal+$amount;
									
									//get balance of income revenue ledger
									$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
									$rowz=mysqli_fetch_array($resultz);
									$incomebal=stripslashes($rowz['bal']);
											
									$incomebal=$incomebal+$amount;
									
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','700','Waiver Account','635','Income Revenue','".$amount."','Income through Waivers -Waiver No:".$cardno."','".$date."','".$waiverbal."','".$incomebal."','".$stamp."','','',0)");

									$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$waiverbal."' where ledgerid='700'");	
								}

								if($mode!='Companies'&&$amount>0){
								echo"<script>window.open('report.php?id=62&rcptno=".$rcptno."');</script>";
								}	
							}

							$resultq = mysqli_query($conn,"update sales set Status=1,Cashier='".$username."' where RcptNo='".$rcptno."'");
							//update lab table,radiology table,pharmacy table,theatre table.
							$resultq = mysqli_query($conn,"update radrequests set paid=1 where rcptno='".$rcptno."'");
							$resultq = mysqli_query($conn,"update labrequests set paid=1 where rcptno='".$rcptno."'");
							//UPDATE DATABASE -REDUCTION OF STOCK ITEMS
							//reduce stock
							$result =mysqli_query($conn,"select * from sales where RcptNo='".$rcptno."' and Dispensed=0");
							$num_results = mysqli_num_rows($result);

							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$itcode=stripslashes($row['ItemCode']);
								$itname=stripslashes($row['ItemName']);
								$categ=stripslashes($row['Category']);
								$cname=stripslashes($row['ClientName']);
								$qty=stripslashes($row['Qty']);
								$totcost=stripslashes($row['TotalCost']);
								$totprice=stripslashes($row['TotalPrice']);
									
								$query =mysqli_query($conn,"select * from items where ItemCode='".$itcode."'");
								$rowq=mysqli_fetch_array($query);
								$type=stripslashes($rowq['Type']);

								if($type=='GOOD'){
									$bal=stripslashes($rowq['PHARMACY']);
									$type=stripslashes($rowq['Type']);
									$pack=stripslashes($rowq['Pack']);
									$diff=$bal-$qty;
										//update ledgers				
									$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
									$rowb=mysqli_fetch_array($resultb);
									$invbal=stripslashes($rowb['bal']);
									$invbal=$invbal-$totprice;
										
									$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='644'");
									$rowc=mysqli_fetch_array($resultc);
									$supbal=stripslashes($rowc['bal']);
									$supbal=$supbal+$totprice;
										//insert into stock track
									$resultd = mysqli_query($conn,"insert into stocktrack values('0','".$date."','PHARMACY','".$itcode."','".$itname."','".$pack."','OUTPATIENT SALES-".$cname."','".$qty."','".$diff."','".$username."','".$stamp."')");	
								
									$resultx= mysqli_query($conn,"update items set PHARMACY='".$diff."' where ItemCode='".$itcode."'  and Type='GOOD'");
										
									$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','644','Cost of Goods Sold','".$totprice."','Goods Sold-Inv No:".$rcptno."','".$date."','".$invbal."','".$supbal."','".$stamp."','','',0)");
									$resultm = mysqli_query($conn,"update ledgers set bal='".$invbal."' where ledgerid='630'");
									$resultn = mysqli_query($conn,"update ledgers set bal='".$supbal."' where ledgerid='644'");	
								}								
							}
			
							if($resultp&&$resultq){

								$resulta = mysqli_query($conn,"insert into log values('0','".$username." receives payment.Receipt No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								unset($_SESSION['pay']);
								echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	


								//check whether its a consultation charge

								/*
								$consultation='';
								$resultd =mysqli_query("SELECT * FROM items WHERE SubCategory='CONSULTATION'");
								$num_resultsd = mysqli_num_rows($resultd);
								for ($d=0; $d <$num_resultsd; $d++) {
								$rowd=mysqli_fetch_array($resultd);
								$code=stripslashes($rowd['ItemCode']);
									if($d==0){$consultation.='ItemCode='.$code;}else{$consultation.=' OR ItemCode='.$code;}
								}

								if(strlen($consultation)>1){$consultation=' AND ('.$consultation.')';}else $consultation='';

								$question =mysqli_query("SELECT * FROM sales where RcptNo='".$rcptno."' ".$consultation."");
								if(mysqli_num_rows($question)>0){

										$sendto='TRIAGE';

										$date=date('Y/m/d');
										$stamp=date('Ymd');
										$cur=date('Y-m');
										$inp=0;
							
									
										$resultd =mysqli_query("SELECT * FROM newprescription WHERE PatId='".$patid."'");
										$num_resultsd = mysqli_num_rows($resultd);
										if($num_resultsd>0){
										$type='Revisit';
										}else{$type='NewPatient';}

										$resultc =mysqli_query("SELECT * FROM encounters WHERE Month='".$cur."'");
										$rowc=mysqli_fetch_array($resultc);
										$a=stripslashes($rowc[$type]);
										$a++;

										$resultc =mysqli_query("SELECT * FROM patients where pntno='".$patid."' limit 0,1");
										$rowc=mysqli_fetch_array($resultc);
										$inp=stripslashes($rowc['accum']);	
				

										
										//get pres
										$question =mysqli_query("SELECT * FROM newprescription order by Id desc limit 0,1");
										$ans=mysqli_fetch_array($question);
										$pres=stripslashes($ans['Id'])+1;
										$pres='O-'.$pres;
										$resulta = mysqli_query("insert into newprescription values('0','".$pres."','".date('Y/m/d')."','".$type."','".$patid."','','','".$patname."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','1','".$stamp."','".date('H:i')."','','','','','','GENERAL CONSULTATIONS','','','".$inp."','','','')")  or die (mysql_error());
										$resultb= mysqli_query("update encounters set ".$type."='".$a."' where Month='".$cur."'");
										$resultc= mysqli_query("update Sales set Status=2 where RcptNo='".$rcptno."'");
										
										if($resulta){
										//send popups
												if($sendto=='TRIAGE'){
												$dep='TRIAGE';	
												}else{$dep=$sendto;}
												$resultc =mysqli_query("SELECT * FROM compips WHERE dept='".$dep."'");
												$num_resultsc = mysqli_num_rows($resultc);	
												for ($i=0; $i <$num_resultsc; $i++) {
												$rowc=mysqli_fetch_array($resultc);
												$ip=stripslashes($rowc['ip']);		
												
													$resultd =mysqli_query("SELECT * FROM logintable WHERE computerip='".$ip."'");
													$num_resultsd = mysqli_num_rows($resultd);	
													for ($d=0; $d <$num_resultsd; $d++) {
													$rowd=mysqli_fetch_array($resultd);
													$user=stripslashes($rowd['username']);
													$resulte = mysqli_query("insert into messages values('','".$user."','System','Incoming Patient from Reception-".$patname."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
													}
															
												}


										$resulta = mysqli_query("insert into log values('','".$username." starts a new  consultation-NAME:".$patname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
								}//END RESULTA

							}//end num rows

							*/


				
								echo"<script>
									$().customAlert();
									alert('Success!', '<p>Payment Posted.</p>');
									setTimeout(function() {
									payments();},500);
									</script>";	
									
								echo"<script>$('#totitems').val('');
									$('#lid76').val('');
									$('#lname76').val('');
									$('#ref76').val('');
									$('#amount76').val('');
									$('#ampaid').val('');
									$('#changeam').val('');
									</script>";
								exit;
							}else{
								echo"<script>
									$().customAlert();
									alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
									e.preventDefault();
									</script>";
							}
							
						break;

						case 93.3:
							
							$category=$_GET['category'];
													
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							$totmode='';
							$max=count($_SESSION['pay']);

							//for ($i = 0; $i < $max; $i++){
								$patid=$_SESSION['pay'][0][0];
								$patname=$_SESSION['pay'][0][1];
								$rcptno=$_SESSION['pay'][0][2];
								$amount=$_SESSION['pay'][0][7];
								
								$totmode.=$mode.';';
								$resultp = mysqli_query($conn,"insert into receipts values('0','".$date."','".$patid."','".$patname."','".$rcptno."','Cumulative','','','','".$amount."','".$stamp."',1,'".$username."','','".$category."','".date('Hi')."','".$stamp."".date('Hi')."')");
								
								//If mode is Cash


								$resultx = mysqli_query($conn,"select * from sales where RcptNo = '".$rcptno."'");
								$num_results = mysqli_num_rows($resultx);
								$rowx=mysqli_fetch_array($resultx);
								
								
								echo"<script>window.open('report.php?id=62&rcptno=".$rcptno."');</script>";	

								$a='nurse';
								$date=date('d/m/Y').'-'.date('H:i');
								if(isset($_SESSION[$a])){
									$max=count($_SESSION[$a]);
									$_SESSION[$a][$max]=array($rowx['ItemCode'],$rowx['ItemName'],$rowx['Qty'],$rowx['UnitPrice'],$rowx['TotalPrice'],$rowx['ClientName'],$rowx['ClientId'],$category,$rowx['TotalCost'],$rowx['Discount'],$rowx['TotalPrice'],$rowx['Date'],$rowx['Iid'],$fullname,$date);	
									$max=count($_SESSION[$a]);
								}else{
									$_SESSION[$a]=array(array());
									$_SESSION[$a][0]=array($rowx['ItemCode'],$rowx['ItemName'],$rowx['Qty'],$rowx['UnitPrice'],$rowx['TotalPrice'],$rowx['ClientName'],$rowx['ClientId'],$category,$rowx['TotalCost'],$rowx['Discount'],$rowx['TotalPrice'],$rowx['Date'],$rowx['Iid'],$fullname,$date);	
									$max=count($_SESSION[$a]);
								}

								$resulta = mysqli_query($conn,"insert into daycare values('0','".$rowx['ClientId']."','".$rowx['ClientName']."','".$rowx['ItemCode']."','".$rowx['ItemName']."','".$category."','".$rowx['UnitPrice']."',
								'".$rowx['Qty']."','".$rowx['TotalPrice']."','".$rowx['Discount']."','".$rowx['TotalPrice']."','".$rowx['Date']."','".$rowx['Iid']."')");
								
								$resultn = mysqli_query($conn,"update sales set Status=2 where RcptNo='".$rcptno."'");	
							//}

							
							if($resultp&&$resulta){

								$resulta = mysqli_query($conn,"insert into log values('0','".$username." posts cumulative payment.Receipt No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								unset($_SESSION['pay']);
								echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	

				
								echo"<script>
									$().customAlert();
									alert('Success!', '<p>Payment Posted.</p>');
									setTimeout(function() {
									payments();},500);
									</script>";			
								echo"<script>$('#totitems').val('');
									$('#lid76').val('');
									$('#lname76').val('');
									$('#ref76').val('');
									$('#amount76').val('');
									$('#ampaid').val('');
									$('#changeam').val('');
									</script>";
								exit;
							}else{
								echo"<script>
									$().customAlert();
									alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
									e.preventDefault();
									</script>";
							}
							
						break;
							
							
						case 94:
							$nbal=$_GET['nbal'];
							$total=$_GET['total'];
							$refno=$_GET['refno'];
							$lid=$_GET['lid'];
							$lname=$_GET['lname'];
							$stamp=date('Ymd');
							$date=date('Y/m/d');
							
							$max=count($_SESSION['supinvoice']);
							foreach ($_SESSION['supinvoice'] as $i => $val) {
							$code=$_SESSION['supinvoice'][$i][0];
							$amount=$_SESSION['supinvoice'][$i][1];
							$cid=$_SESSION['supinvoice'][$i][2];
							$cname=$_SESSION['supinvoice'][$i][3];
							$invno=$_SESSION['supinvoice'][$i][4];
							$bal=$_SESSION['supinvoice'][$i][5];
							$paying=$_SESSION['supinvoice'][$i][6];
							$invbal=$_SESSION['supinvoice'][$i][7];
							$paid=$_SESSION['supinvoice'][$i][8];
							$sbal=$amount-$paying;
							$npaid=$paid+$paying;
							$ninvbal=$invbal-$paying;
							
							
							
	$resulta = mysqli_query($conn,"insert into supplierdebts values('0','".$cid."','".$cname."','".$invno."','','".$paying."','cr','".$npaid."','".$ninvbal."','".$bal."','Payment of GRN Invoice-".$invno."-Ref No".$refno."','".date('d/m/Y')."','".date('Ymd')."',1)");
						$resultb = mysqli_query($conn,"update supplierdebts set InvBal='".$ninvbal."',Paid='".$npaid."' where TransNo='".$code."'");
						if($ninvbal==0){
						$resultc = mysqli_query($conn,"update supplierdebts set Status=2 where TransNo='".$code."'");
						}
						
						}
				if($resulta){
$result = mysqli_query($conn,"update creditsuppliers set Bal='".$nbal."' where CustomerId='".$cid."'");	

								//update ledger
								$resultf = mysqli_query($conn,"select * from ledgers where ledgerid=629");
								$row=mysqli_fetch_array($resultf);
								$bal=stripslashes($row['bal']);
								$balc=$bal-$total;
								
								$resultg = mysqli_query($conn,"select * from ledgers where ledgerid=".$lid."");
								$row=mysqli_fetch_array($resultg);
								$bal=stripslashes($row['bal']);
								$bald=$bal-$total;
								
								
								$resulte = mysqli_query($conn,"insert into ledgerentries values('0','629','Accounts Payable','".$lid."','".$lname."','".$total."','Payment of Creditors','".$date."','".$balc."','".$bald."','".$stamp."','','',0)");
								$resultf = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid=629");
								$resultg = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid=".$lid."");
								
								
$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes payment to creditor.Invoice No.".$invno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
unset($_SESSION['supinvoice']);
				echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
					echo"<script>	$('#total').val('');	$('#bal').val('');
										$().customAlert();
										alert('Success!', '<p>Transaction Successful.</p>');
											$.ajax({
											url:'link.php',
											data:{id:31,cus:'".$cid."'},
											success:function(data){
											$('#display').html(data);
											}
										});
										
										
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							case 95:
							$b=$_GET['b'];
							$code=$_GET['code'];
							$dep=$_GET['dep'];
							$resultg = mysqli_query($conn,"update accesstbl set ".$dep."='".$b."' where AccessCode=".$code."");
							break;

							
							case 96:
							$sumno=$_GET['sumno'];
							$prescid=$_GET['prescid'];

							if(isset($_SESSION['dis'])){
								$diseases=implode(";",$_SESSION['dis']);
							}else $diseases=NULL;

							$s=strlen($diseases);
							$diseases=substr($diseases,0,$s);
							
							$resultb= mysqli_query($conn,"update inpatients set DiagName='".$diseases."' where  PrescId='".$_GET['prescid']."'");

							if($sumno>0){
							$rcptno=$sumno;
							$result = mysqli_query($conn,"DELETE from discharge where sumno='".$sumno."'");	
							}else{
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM discharge order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['sumno'])+1;
							}
							$result = mysqli_query($conn,"insert into discharge values('0','".$rcptno."','".$_GET['patid']."','".$_GET['patname']."','".$_GET['admdate']."','".$_GET['disdate']."','".$_GET['age']."','".$_GET['sex']."','".$_GET['disdiag']."','".$_GET['dismed']."','".$_GET['clinsumm']."','".$_GET['doctor']."','".$_GET['nextapp']."','".date('d/m/Y')."','".date('Ymd')."',1,'".$fullname."','".$prescid."')");
								if($result){
								echo"<script>
								window.open('report.php?id=58&rcptno=".$rcptno."');
								$().customAlert();
										alert('Success!', '<p>Summary processed.</p>');
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please repeat again.</p>');
										e.preventDefault();
										</script>";
									}
							break;
							
							case 97:
							$resultc = mysqli_query($conn,"insert into admsumm values('0','".date('d/m/Y')."','".$_GET['patid']."','".$_GET['patname']."','".$_GET['mode']."','".$_GET['doctor']."','".$_GET['diag']."','".$_GET['code']."','".$_GET['admdate']."','".$_GET['disdate']."','".mysql_real_escape_string(trim($_GET['odetail']))."','".date('Ymd')."',1,'".$fullname."','".$_GET['invoice']."')");
							
							$pid=$_GET['pid'];
							$result =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$num_results = mysqli_num_rows($result);
							$rowb=mysqli_fetch_array($result);
							$bno=stripslashes($rowb['BedNo']);
							$rno=stripslashes($rowb['RoomNo']);
							$patid=stripslashes($rowb['PatId']);
							$resulta= mysqli_query($conn,"update wardbeds set status=0,patname='',patid='',doctor='' where bedno='".$bno."' and roomno='".$rno."'  and patid='".$patid."'");
							$resultb= mysqli_query($conn,"update inpatients set Admitted=0,Discharge='".$_GET['disdate']."' where  PrescId='".$_GET['pid']."'");
								$resultb = mysqli_query($conn,"DELETE from tempbill where patid='".$patid."'");	
								if($resultc&&$resultb){
								echo"<script>
										$().customAlert();
										alert('Success!', '<p>Patient Discharged.</p>');
										setTimeout(function() {
											admsumm1();},500);
										</script>";
											
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please repeat again.</p>');
										e.preventDefault();
										</script>";
									}
							break;
							
							
							case 98:
							$pid=$_GET['pid'];
							$resultg = mysqli_query($conn,"update newprescription set Admitted=3 where PrescId='".$pid."'");
							if($resultg){
								echo"STATUS:<b>PATIENT DUE FOR ADMISSION AT RECORDS OFFICE</b>";
							}
							break;
							
							case 99:
							$patid=$_GET['patid'];
							$pay=strtoupper($_GET['pay']);
							$ward=$_GET['ward'];
							$ipnosett=$_GET['ipnosett'];
							$ipno=$_GET['ipno'];
							$doc=strtoupper($_GET['doc']);
							$medrec=$_GET['medrec'];
							
							
							//sort out inpatient NO
							if($ipnosett==1){
							//get i/p no if new patient
							$result =mysqli_query($conn,"select * from ipnos order by id desc limit 0,1");
							$num_results = mysqli_num_rows($result);
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$ipno='1/'.date('Y');
								}else {
									$d=substr(stripslashes($row['ipno']),-4,4);
										if($d!=date('Y')){
										$ipno='1/'.date('Y');	
										}
										else{
										$a=substr(stripslashes($row['ipno']),-5,5);
										$b=preg_replace('~'.$a.'~', '', stripslashes($row['ipno']));
										$c=$b + 1;
										$ipno=$c.'/'.date('Y');}
								}
								$resulte = mysqli_query($conn,"insert into ipnos values('0','".$ipno."')");
							}
							
							$resultg = mysqli_query($conn,"update patients set ipno='".$ipno."' where pntno=".$patid."");
							
							//SORT OUT MEDICAL RECORD ISSUE
							
							if($medrec==0){
							$resultc =mysqli_query($conn,"SELECT * FROM inpatients WHERE PatId='".$patid."' order by PrescId desc limit 0,1");
								if(mysqli_num_rows($resultc)==0){

										
										echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>No medical record exists for this patient. Select Create New Record under Medical Record Setting.</p>');
										e.preventDefault();
										</script>";
										
											exit;
								}
							
							$rowc=mysqli_fetch_array($resultc);
							$prescid=stripslashes($rowc['PrescId']);
							$resulth = mysqli_query($conn,"update inpatients set Admitted=1,AdmDate='".date('d/m/Y')."',PayMode='".$pay."',Doctor='".$doc."' where PrescId='".$prescid."'");
							
							}
							
							if($medrec==1){
							$resultc =mysqli_query($conn,"SELECT * FROM inpatients order by Id desc limit 0,1");
							$rowc=mysqli_fetch_array($resultc);
							$prescid=stripslashes($rowc['Id'])+1;
							$prescid='I-'.$prescid;


							$resultd =mysqli_query($conn,"SELECT * FROM inpatients WHERE PatId='".$patid."' and Admitted!=0 order by PrescId desc limit 0,1");
								if(mysqli_num_rows($resultd)>0){

										
										echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>Patient has already been admitted!</p>');
										e.preventDefault();
										</script>";
										
											exit;
								}
							//check if patient has paid admission deposit

								/*
							
								$resultd =mysqli_query("SELECT * FROM SALES WHERE ClientId='".$patid."' and Status=1 and ItemCode='84' order by TransNo desc limit 0,1");
								if(mysqli_num_rows($resultd)==0&&$pay=='CASH'){

										
										echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>Patient has not paid inpatient admission fee!</p>');
										e.preventDefault();
										</script>";
										
											exit;
								}else{

								$rowd=mysqli_fetch_array($resultd);
								$transno=stripslashes($rowd['TransNo']);
								$resulth = mysqli_query("update sales set Status=2 where TransNo='".$transno."'");
							

								}

								*/
								
							
							
							$resultc =mysqli_query($conn,"SELECT * FROM patients where pntno='".$patid."' order by auto desc limit 0,1");
							$rowc=mysqli_fetch_array($resultc);


							
							
							$resulta = mysqli_query($conn,"insert into inpatients values('0','".$prescid."','".date('Y/m/d')."','".$patid."','".stripslashes($rowc['fullnames'])."','".$ward."','1','','','','".date('d/m/Y')."','','".$doc."','',1,".date('Ymd').",'".$pay."','','')");
							
							}
							
							
							
							
							
			if($resultc>0){
				//send popups
				$resultc =mysqli_query($conn,"SELECT * FROM compips WHERE dept='".$ward."'");
				$num_resultsc = mysqli_num_rows($resultc);	
				for ($i=0; $i <$num_resultsc; $i++) {
				$rowc=mysqli_fetch_array($resultc);
				$ip=stripslashes($rowc['ip']);		
				
					$resultd =mysqli_query($conn,"SELECT * FROM logintable WHERE computerip='".$ip."'");
					$num_resultsd = mysqli_num_rows($resultd);	
					for ($d=0; $d <$num_resultsd; $d++) {
					$rowd=mysqli_fetch_array($resultd);
					$user=stripslashes($rowd['username']);
					$resulte = mysqli_query($conn,"insert into messages values('0','".$user."','System','Incoming Patient for Admission from Records','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
					}
							
				}
							
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a patient admission from records.IP No:".$ipno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
											echo'<img src="images/tick.png" width="30px" height="30px"/>';
						echo"<script>
							window.open('report.php?id=66&rcptno=".$prescid."');
							
						$().customAlert();
							alert('Successful!', '<p>Patient admitted.<br/>System Patient No:<b>".$patid."</b><br/>I/P No:<b>".$ipno."</b></p>');
								setTimeout(function() {
											editpatient(158);},500);
										</script>";
										
										exit;
									}
									else{
														echo'<img src="images/delete.png" width="30px" height="30px"/>';
									echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>Please try again.Check Direct Admission if patient has not seen the doctor yet.</p>');
										e.preventDefault();
										</script>";
									}
						
							break;
							
							case 100:
							$a='ward';
							
							if(isset($_SESSION[$a])){
							$max=count($_SESSION[$a]);
							for ($i = 0; $i < $max; $i++){
							$itcode = $_SESSION[$a][$i][0];
							$itname = $_SESSION[$a][$i][1];
							$itquat = $_SESSION[$a][$i][2];
							$itprice = $_SESSION[$a][$i][3];
							$tprice = $_SESSION[$a][$i][4];
							$oname = $_SESSION[$a][$i][5];
							$regn = $_SESSION[$a][$i][6];
							$categ = $_SESSION[$a][$i][7];
							$total = $_SESSION[$a][$i][8];
							$disc = $_SESSION[$a][$i][9];
							$subn = $_SESSION[$a][$i][10];
							$date = $_SESSION[$a][$i][14];
							$stamp=preg_replace('~/~', '', $date);
							$date=$date.'-'.date('H:i');
							$iid = $_SESSION[$a][$i][12];
							$names = $_SESSION[$a][$i][13];
							$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$oname."','".$itcode."','".$itname."','".$categ."','".$itprice."','".$itquat."','".$tprice."','".$disc."','".$subn."','".$date."','".$iid."','".$names."','".$stamp."',1)");
							
							
							
							//update reduction of items
							$query =mysqli_query($conn,"select * from items where ItemCode='".$itcode."'");
								$rowq=mysqli_fetch_array($query);
								$bal=stripslashes($rowq[$categ]);
								$type=stripslashes($rowq['Type']);
								$pack=stripslashes($rowq['Pack']);
								$diff=$bal-$itquat;
								
							//insert into stock track
		$resultd = mysqli_query($conn,"insert into stocktrack values('0','".date('Y/m/d')."','".$categ."','".$itcode."','".$itname."','".$pack."','INPATIENT SALES-".$oname."','".$itquat."','".$diff."','".$username."','".$stamp."')");			
								
								$resultx= mysqli_query($conn,"update items set ".$categ."='".$diff."' where ItemCode='".$itcode."'  and Type='GOOD'");
								
								//update ledgers
							
				if($type=='GOOD'){
					$resultb = mysqli_query($conn,"select * from ledgers where ledgerid='630'");
					$rowb=mysqli_fetch_array($resultb);
					$invbal=stripslashes($rowb['bal']);
					$invbal=$invbal-$subn;
					
					$resultc = mysqli_query($conn,"select * from ledgers where ledgerid='644'");
					$rowc=mysqli_fetch_array($resultc);
					$supbal=stripslashes($rowc['bal']);
					$supbal=$supbal+$subn;
					
			$resultl = mysqli_query($conn,"insert into ledgerentries values('0','630','Inventory','644','Cost of Goods Sold','".$subn."','Inpatient Drugs','".$date."','".$invbal."','".$supbal."','".$stamp."','','',0)");
			$resultm = mysqli_query($conn,"update ledgers set bal='".$invbal."' where ledgerid='630'");
			$resultn = mysqli_query($conn,"update ledgers set bal='".$supbal."' where ledgerid='644'");	
								}
								
								
							}//end for loop


}
			

					if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." adds item to patient interim bill','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
						unset($_SESSION[$a]);	
						echo"<script>
							window.open('report.php?id=40&regn=".$regn."');
										$().customAlert();
										alert('Successful!', '<p>Item added to charge sheet.</p>');
											setTimeout(function() {
											inbill();},500);
										</script>";
										exit;
									}
									else{
									echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>Please try again.</p>');
										e.preventDefault();
										</script>";
									}

							
							break;

						case 101:
							$stamp=date('Ymd');
							$dat=date('Y/m/d');
							$regn=$_GET['regn'];
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['RcptNo'])+1;
							
							$c=0;
							$result =mysqli_query($conn,"select * from  tempbill where patid='".$regn."' and status=1");
							$num_results = mysqli_num_rows($result);
							if($num_results==0){
								echo"<script>
										$().customAlert();
										alert('Sorry!', '<p>The patient bill is empty. Add some items first before submitting.</p>');
										e.preventDefault();
										</script>";
										exit;
							}
							
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$resulta = mysqli_query($conn,"insert into sales values('0','".$rcptno."','".stripslashes($row['category'])."','".stripslashes($row['itcode'])."','".stripslashes($row['itname'])."','".stripslashes($row['quat'])."','".stripslashes($row['price'])."',0,'".stripslashes($row['disc'])."','".stripslashes($row['subnet'])."',0,1,'".$dat."','".stripslashes($row['patid'])."','".stripslashes($row['patname'])."','','','','','','','','','','','".$stamp."','','".$username."',0,'".stripslashes($row['iid'])."','')");
							}						
							
							if($resulta){
							$resultb= mysqli_query($conn,"update tempbill set status=0 where patid='".$patid."'");		
									echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
									echo"<script>$('#totitems').val('');$('#total').val('');$('#tprice').val('');$('#price44').val('');$('#quat44').val('');$('#disc44').val('');$('#sub44').val('');
									$('#disc44').prop('readonly',true);$('#disc44').css({'border' : 'solid #f00 1px'});</script>";
										$resultc = mysqli_query($conn,"insert into log values('0','".$username." posts bill.Rcpt No:".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo"
										<script>
										$().customAlert();
										alert('Success!', '<p>Bill Posted.</p>');
										</script>";
										exit;
									}
									else{
									$result = mysqli_query($conn,"DELETE from sales where rcptno='".$rcptno."'");
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}
							
							break;
							
							case '102':
							$code=$_GET['code'];
							$resulta = mysqli_query($conn,"update drugrecord set drugs='".$_GET['b']."',dose='".$_GET['c']."',route='".$_GET['d']."',notes='".$_GET['e']."',cost='".$_GET['f']."',tid='".$code."' where id='".$code."'");	
								
							
								if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits drug record table.id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="16px" height="16px"/>';
								}
								else{
									echo'<img src="images/tick.png" width="16px" height="16px"/>';
									}
							break;
							
							case '103':
							$code=$_GET['code'];
							$resulta = mysqli_query($conn,"update drugrecord set ".$_GET['box']."='".$_GET['a']."' where id='".$code."'");	
								
							break;
							
							case '104':
							$pid=$_GET['pid'];
						
							$resulta = mysqli_query($conn,"insert into drugrecord values('0','".$_GET['pid']."','".$_GET['patid']."','".$_GET['patname']."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");
							if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." adds new row into drug record table.pid:".$_GET['pid']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo"
				<script>
				$.ajax({
				url:'link.php',
				data:{id:43,pid:'".$pid."'},
				success:function(data){
				$('#mainp').html(data);
				}
				});
			</script>";
								}
								
								
							break;
							
							case 105:
							$a=$_GET['a'];
							$b=$_GET['b'];
							
							$resulta = mysqli_query($conn,"select * from wardbeds where id='".$a."'");
							$rowa=mysqli_fetch_array($resulta);
							
							$resultb= mysqli_query($conn,"update wardbeds set status=1,patname='".stripslashes($rowa['patname'])."',patid='".stripslashes($rowa['patid'])."',doctor='".stripslashes($rowa['doctor'])."' where id='".$_GET['b']."'");
							$resultc= mysqli_query($conn,"update wardbeds set status=0,patname='',patid='',doctor='' where id='".$_GET['a']."'");
							
							$result = mysqli_query($conn,"select * from inpatients where PatId='".stripslashes($rowa['patid'])."' order by PrescId desc limit 0,1");
							$row=mysqli_fetch_array($result);
							$pid=stripslashes($row['PrescId']);
							
							$resultd = mysqli_query($conn,"select * from wardbeds where id='".$b."'");
							$rowd=mysqli_fetch_array($resultd);
							
							
							$resultb= mysqli_query($conn,"update inpatients set BedNo='".stripslashes($rowd['bedno'])."',RoomNo='".stripslashes($rowd['roomno'])."',WardType='".stripslashes($rowd['wardtype'])."',Doctor='".stripslashes($rowd['doctor'])."' WHERE PrescId='".$pid."'");
							
							
							if($resultb){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." transfers patient to new bed.Bed No:".$_GET['b']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo"
										<script>
										setTimeout(function() {
											inpatient();},1000);
										</script>";
							}else{echo'<p><img src="images/delete.png" style="margin-top:0px; margin-right:10px; width:20px; height:20px"></p>';}
							
							
							
							break;
							
							case 106:
							$dat=$_GET['dat'];
							$a=$_GET['a'];
							
							$resulta = mysqli_query($conn,"select * from drugrecord where id='".$a."'");
							$rowa=mysqli_fetch_array($resulta);
							$pid=stripslashes($rowa['pid']);
							
							$resultb = mysqli_query($conn,"insert into drugrecord values('0','".stripslashes($rowa['pid'])."','".stripslashes($rowa['patid'])."','".stripslashes($rowa['patname'])."','".$_GET['dat']."','".stripslashes($rowa['drugs'])."','".stripslashes($rowa['dose'])."','".stripslashes($rowa['route'])."','".stripslashes($rowa['notes'])."','".stripslashes($rowa['cost'])."','','','','','','','','','','','','','','','','','','','','','','','','','".date('Ymd')."',1,'".stripslashes($rowa['tid'])."')");
							
							
							if($resultb){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." Adds new day of :".stripslashes($rowa['drugs'])."-Day:".$_GET['dat']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'<img src="images/tick.png" width="16px" height="16px"/>';
						echo"
							<script>
							$.ajax({
							url:'link.php',
							data:{id:43,pid:'".$pid."'},
							success:function(data){
							$('#mainp').html(data);
							}
							});
							$('#addnewday' ).dialog( 'close' );
						</script>";
								}
								else{
									echo'<img src="images/tick.png" width="16px" height="16px"/>';
									}
							
							
							break;
							case 107:
							$b=$_GET['b'];
							$code=$_GET['code'];
							$dep=$_GET['dep'];
							$resultg = mysqli_query($conn,"update sections set ".$dep."='".$b."' where id=".$code."");
							break;
							case '108':
							$code=$_GET['code'];
							$result = mysqli_query($conn,"DELETE from compips where id=".$code."");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes computer from computer ips database.Comp ID:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							case '109':
							$code=$_GET['code'];
							$ip=$_GET['ip'];
							$name=$_GET['name'];
							$dept=$_GET['dept'];
							$result = mysqli_query($conn,"update compips set dept='".$_GET['dept']."',name='".$_GET['name']."',ip='".$_GET['ip']."' where id='".$code."'");	
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates Computer IPs database.Comp Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:16px; height:16px; margin-top:-10px; margin-left:20px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="width:16px; height:16px; margin-top:0px"></p>';
									}
							break;
							
							case '110':
						$result= mysqli_query($conn,"insert into compips values('0','".$_GET['ip']."','".$_GET['dept']."','".$_GET['name']."')");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into computer ips database.IP No:".$_GET['ip']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
							if($result){
									echo'<p><img src="images/tick.png" style="width:30px; height:30px"></p>';
									echo "<script>paginate(15,0);</script>";
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px"></p>';
										}
							
							break;	
							case '111':
							$code=$_GET['code'];
							$result = mysqli_query($conn,"DELETE from banktbl where id=".$code."");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes bank from banks database.Bank ID:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
							
							case '112':
							$code=$_GET['code'];
							$name=$_GET['name'];
							$result = mysqli_query($conn,"update banktbl set bank='".$_GET['name']."' where id=".$code."");	
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates Banks database.Bank Id:".$code."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if($result){
									echo'<p><img src="images/tick.png" style="width:16px; height:16px; margin-top:-10px; margin-left:20px"></p>';
									}
									else{
										echo'<p><img src="images/delete.png" style="width:16px; height:16px; margin-top:0px"></p>';
									}
							break;
							
							case '113':
						$result= mysqli_query($conn,"insert into banktbl values('0','".$_GET['name']."')");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts data into banks database.Bank Name:".$_GET['name']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
							if($result){
									echo'<p><img src="images/tick.png" style="width:30px; height:30px"></p>';
									echo "<script>paginate(16,0);</script>";
									}
									else{
										echo'<p><img src="images/delete.png" style="width:30px; height:30px"></p>';
										}
							
							break;	
							case '114':
								
							$cr=$_GET['cr'];
							$crname=$_GET['crname'];
							$desc=$_GET['desc'];
							$amount=$_GET['amount'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
						$result =mysqli_query($conn,"select * from ledgers");
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);
						if($username==substr(stripslashes($row['name']),0,5)){
							$dr=stripslashes($row['ledgerid']);
							$drname=stripslashes($row['name']);
							$bald=stripslashes($row['bal']);
							}
						}
						if($dr==''){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>You have to be registered as a chief cashier to carry out this transaction.</p>');
									e.preventDefault();
									</script>";
									exit;
						}
						
						//cashier account	
						$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$cr."");
						$row=mysqli_fetch_array($resulta);
						$balc=stripslashes($row['bal']);
						
						$balc=$balc-$amount;//new cr bal
						$bald=$bald+$amount;//new dr bal
						/*if($balc<0){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>Cashier Account balance cannot be less than zero.</p>');
									e.preventDefault();
									</script>";
									exit;
						}*/
						
						
						
						
			$resultb = mysqli_query($conn,"insert into ledgerentries values('0','".$dr."','".$drname."','".$cr."','".$crname."','".$amount."','".$desc."','".$date."','".$bald."','".$balc."','".$stamp."','','',0)");
			$resulte = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid='".$cr."'");
			$resultf = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid='".$dr."'");
			
			if($resultb&&$resulte&&$resultf){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a cash collection from ".$crname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
								echo"<script>
								setTimeout(function() {
											cashcollect();},500);
									</script>";
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
								break;
							case '115':
								
							$dr=$_GET['dr'];
							$drname=$_GET['drname'];
							$desc=$_GET['desc'];
							$amount=$_GET['amount'];
							$date=$_GET['date'];
							$stamp=preg_replace('~/~', '', $date);
							
							$cr='';
							$result =mysqli_query("select * from ledgers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							if($username==substr(stripslashes($row['name']),0,5)){
								$cr=stripslashes($row['ledgerid']);
								$crname=stripslashes($row['name']);
								$balc=stripslashes($row['bal']);
								}
							}
							if($cr==''){
									echo"<script>
										$().customAlert();
										alert('Error!', '<p>You have to be registered as a chief cashier to carry out this transaction.</p>');
										e.preventDefault();
										</script>";
										exit;
							}
						//expense account	
						$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$dr."");
						$row=mysqli_fetch_array($resulta);
						$bald=stripslashes($row['bal']);
						
						$balc=$balc-$amount;
						$bald=$bald+$amount;
						if($balc<0){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>Chief Cashier Account balance cannot be less than zero.</p>');
									e.preventDefault();
									</script>";
									exit;
						}
						
						
						
						
			$resultb = mysqli_query($conn,"insert into ledgerentries values('0','".$dr."','".$drname."','".$cr."','".$crname."','".$amount."','".$desc."','".$date."','".$bald."','".$balc."','".$stamp."','','',0)");
			$resulte = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid='".$cr."'");
			$resultf = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid='".$dr."'");
			
			if($resultb&&$resulte&&$resultf){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes an expenses management entry. Expense Account:".$drname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
								echo"<script>
								setTimeout(function() {
											expman();},500);
									</script>";
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
								break;
							
							case '116':
								
							$dr=$_GET['dr'];
							$drname=$_GET['drname'];
							$desc=$_GET['desc'];
							$amount=$_GET['amount'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
							$result =mysqli_query($conn,"select * from ledgers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							if($username==substr(stripslashes($row['name']),0,5)){
								$cr=stripslashes($row['ledgerid']);
								$crname=stripslashes($row['name']);
								$balc=stripslashes($row['bal']);
								}
							}
							if($cr==''){
									echo"<script>
										$().customAlert();
										alert('Error!', '<p>You have to be registered as a chief cashier to carry out this transaction.</p>');
										e.preventDefault();
										</script>";
										exit;
							}
						
						//expense account	
						$resulta = mysqli_query($conn,"select * from ledgers where ledgerid=".$dr."");
						$row=mysqli_fetch_array($resulta);
						$bald=stripslashes($row['bal']);
						
						$balc=$balc-$amount;
						$bald=$bald+$amount;
						if($balc<0){
								echo"<script>
									$().customAlert();
									alert('Error!', '<p>Chief Cashier Account balance cannot be less than zero.</p>');
									e.preventDefault();
									</script>";
									exit;
						}
						
						
						
						
			$resultb = mysqli_query($conn,"insert into ledgerentries values('0','".$dr."','".$drname."','".$cr."','".$crname."','".$amount."','".$desc."','".$date."','".$bald."','".$balc."','".$stamp."','','',0)");
			$resulte = mysqli_query($conn,"update ledgers set bal='".$balc."' where ledgerid='".$cr."'");
			$resultf = mysqli_query($conn,"update ledgers set bal='".$bald."' where ledgerid='".$dr."'");
			$resultg = mysqli_query($conn,"insert into bankdeposits values('0','".$drname."','".$amount."','".$date."','".$stamp."',1)");
			
			
			if($resultb&&$resulte&&$resultf){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a bank deposit entry. Bank Account:".$drname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
								echo"<script>
								setTimeout(function() {
											bankdep();},500);
									</script>";
									
									}
								else{
									echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									}
								break;
							
							case 117:
							$amount=$_GET['amount'];
							$smartstatus=$_GET['smartstatus'];
							$exid=$_GET['exid'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');

							//check if progress_flag has been updated
							if($smartstatus==1){

								  //connect to smart db
							      connectsmart();
								  $result =mysqli_query($conn,"select * from exchange_files where ID='".$exid."' and Progress_Flag='4' limit 0,1");
								  $num_results = mysqli_num_rows($result);
								  if($num_results==0){

				  					echo"
									<script>
									$().customAlert();
									alert('Sorry!', '<p>Cannot print the Invoice.Save the claim on Smartlink first.</p>');
									e.preventDefault();
									</script>";

								  	exit;
								  }else{

								  	$resultm = mysqli_query($conn,"update exchange_files set Progress_Flag='0' where ID='".$exid."'");
								  }

								  //connect to local db
								   connectlocal();
							}
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM customerdebts where DrCr='dr' order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['InvoiceNo'])+1;
							
							
							foreach ($_SESSION['consinvoice'] as $i => $val) {
							$resulta = mysqli_query($conn,"update receipts set invno='".$rcptno."' where rcptno='".$val."' and paymode='Companies'");
							$resultb = mysqli_query($conn,"update sales set InvNo='".$rcptno."' where RcptNo='".$val."'");
						
							}
							if($resulta&&$resultb){
					
							//update credit customers
							$resultd =mysqli_query($conn,"SELECT * FROM receipts WHERE rcptno='".$val."'");
							$rowd=mysqli_fetch_array($resultd);
							$cid=stripslashes($rowd['cid']);
							
							$resultc =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE CustomerId='".$cid."'");
							$rowc=mysqli_fetch_array($resultc);
							$bal2=stripslashes($rowc['Bal']);
							$bal3=$bal2+$amount;
						
							
							$resultd = mysqli_query($conn,"insert into customerdebts values('0','".$cid."','".stripslashes($rowd['cname'])."','".$rcptno."','".$amount."','dr','0','".$amount."','".$bal3."','Patient Name:".stripslashes($rowd['patname'])."; Patient No:".stripslashes($rowd['patid'])."; Ref No:".stripslashes($rowd['cardno'])."','".date('Y/m/d')."','".date('Ymd')."',1,'".stripslashes($rowd['patid'])."','".stripslashes($rowd['patname'])."')");	
							$resulte = mysqli_query($conn,"update creditcustomers set Bal='".$bal3."' where CustomerId='".$cid."'");	
						
						//update ledgers
							$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=628");
							$rowb=mysqli_fetch_array($resultb);
							$recbal=stripslashes($rowb['bal']);
							$recbal=$recbal+$amount;
							
							//get balance of income revenue ledger
							$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
							$rowz=mysqli_fetch_array($resultz);
							$incomebal=stripslashes($rowz['bal']);
							$incomebal=$incomebal+$amount;
					
							$resultl = mysqli_query($conn,"insert into ledgerentries values('0','628','Accounts Receivable','635','Income Revenue','".$amount."','Income from Credit sales-Inv No:".$rcptno."','".$date."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
							$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
							$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='628'");
			
				
							
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." consolidates invoices.Consolidated Invoice No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							unset($_SESSION['consinvoice']);
							echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
								echo"<script>
								window.open('output.php?id=6&rcptno=".$rcptno."');
													$().customAlert();
													alert('Success!', '<p>Transaction Successful.</p>');
													setTimeout(function() {
														consinv();},500);
												</script>";
										exit;
												}
												else{
													echo"
													<script>
													$().customAlert();
													alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
													e.preventDefault();
													</script>";
												}
							
							break;

							case 117.1:
							$amount=$_GET['amount'];
							$pntno=$_GET['pntno'];
							$copayrcptno=$_GET['copayrcptno'];
							$copayamount=$_GET['copayamount'];
							$copayam=$copayamount*-1;
							$icd10=$_GET['icd10'];
							if($icd10==''){$icd10=0;}
							
							$date=date('Y/m/d');
							$claimdate=date('Y-m-d');
							$claimtime=date('H:i:s');
							$stamp=date('Ymd');



							//START OF VARIABLES

							$Practice_Number=$Group_Practice_Number='SKSP_2907';
							$Group_Practice_Name='STRATUS MEDICAL IMAGING SOLUTIONS';
							$Pre_Authorization_Number=12;
							$Pre_Authorization_Amount=0;
							$Dependant='Y';
							$Discharge_Notes='Text Data as Discharge';
							$Role='SP';
							$Stage='P';
							$Code_Type='ICD10';
							$Code=$icd10;
							$Code_Set='INTERNAL';
							$Reason='0';

							//END OF VARIABLES 
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."' limit 0,1");
							$row=mysqli_fetch_array($result);
							$patname=stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']);
							$insid=stripslashes($row['insid']);	
							$insurer=stripslashes($row['insurer']);		
							$cardno=stripslashes($row['cardno']);
							$paytype=stripslashes($row['paytype']);
							$benamount=stripslashes($row['benamount']);
							$exid=stripslashes($row['exid']);
							$forwardid=stripslashes($row['forwardid']);

							$First_Name=stripslashes($row['name']);
							$Middle_Name=stripslashes($row['oname']);
							$Surname=stripslashes($row['lname']);
							$dob=stripslashes($row['dob']);
							$Date_Of_Birth=substr($dob,6,4).'-'.substr($dob,3,2).'-'.substr($dob,0,2);
							$g=stripslashes($row['gender']);
							if($g=='male'){$Gender='M';}else{$Gender='F';}

							 //connect to smart db
							 connectsmart();
							//update progress_flag
							$resultm = mysqli_query($conn,"update exchange_files set Progress_Flag='2' where ID='".$exid."'");

							


							//connect to local db
							connectlocal();

						    $result =mysqli_query($conn,"select * from forwardedcarddata where id='".$forwardid."' limit 0,1");
							$row=mysqli_fetch_array($result);
							$Benefit_Nr=stripslashes($row['Benefit_Nr']);
							$PaymentType1=1;
							$PaymentAmount1=$copayamount;
							$Receipt=$copayrcptno;
							$PaymentType2=stripslashes($row['PaymentType2']);
							$NHIF_Member_Nr=0;
							$NHIF_Contributor_Nr=0;
							$NHIF_Employer_Code=0;
							$NHIF_Site_Nr=0;
							$NHIF_Patient_Relation=0;
							$Diagnosis_Code=0;
							$Admit_Date=$claimdate;
							$Discharge_Date=$claimdate;
							$Days_Used=0;
							$NHIF_Amount=0;
							$Membership_Number=stripslashes($row['medicalaid_number']);
							$Scheme_Code=stripslashes($row['medicalaid_code']);
							$Scheme_Plan=stripslashes($row['medicalaid_plan']);
							$card_serialnumber=stripslashes($row['card_serialnumber']);
							 
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM customerdebts where DrCr='dr' order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['InvoiceNo'])+1;

							$no_of_services=0;
							foreach ($_SESSION['consinvoice'] as $i => $val) {
							$result =mysqli_query($conn,"SELECT * FROM sales WHERE RcptNo='".$val."' and Status!=0");
							$num_results = mysqli_num_rows($result);
							$no_of_services+=$num_results;
							}





							$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
							$root_element = "Claim"; //fruits
							$xml         .= "<Claim>";
							$xml         .= "<Claim_Header>";
							$xml         .= "<Invoice_Number>".$rcptno."</Invoice_Number>";
							$xml         .= "<Claim_Date>".$claimdate."</Claim_Date>";
							$xml         .= "<Claim_Time>".$claimtime."</Claim_Time>";
							$xml         .= "<Pool_Number>".$Benefit_Nr."</Pool_Number>";
							$xml         .= "<Total_Services>".$no_of_services."</Total_Services>";
							$xml         .= "<Gross_Amount>".$amount."</Gross_Amount>";
							$xml         .= "<Provider>";
							$xml         .= "<Role>SP</Role>";
							$xml         .= "<Country_Code>KEN</Country_Code>";
							$xml         .= "<Group_Practice_Number>".$Group_Practice_Number."</Group_Practice_Number>";
							$xml         .= "<Group_Practice_Name>".$Group_Practice_Name."</Group_Practice_Name>";
							$xml         .= "</Provider>";
							$xml         .= "<Authorization>";
							$xml         .= "<Pre_Authorization_Number>".$Pre_Authorization_Number."</Pre_Authorization_Number>";
							$xml         .= "<Pre_Authorization_Amount>".$Pre_Authorization_Amount."</Pre_Authorization_Amount>";
							$xml         .= "</Authorization>";
							$xml         .= "<Payment_Modifiers>";
							$xml         .= "<Payment_Modifier>";
							$xml         .= "<Type>".$PaymentType1."</Type>";
							$xml         .= "<Amount>".$PaymentAmount1."</Amount>";
							$xml         .= "<Receipt>".$Receipt."</Receipt>";
							$xml         .= "</Payment_Modifier>";
							$xml         .= "<Payment_Modifier>";
							$xml         .= "<Type>".$PaymentType2."</Type>";
							$xml         .= "<NHIF_Member_Nr>".$NHIF_Member_Nr."</NHIF_Member_Nr>";
							$xml         .= "<NHIF_Contributor_Nr>".$NHIF_Contributor_Nr."</NHIF_Contributor_Nr>";
							$xml         .= "<NHIF_Employer_Code>".$NHIF_Employer_Code."</NHIF_Employer_Code>";
							$xml         .= "<NHIF_Site_Nr>".$NHIF_Site_Nr."</NHIF_Site_Nr>";
							$xml         .= "<NHIF_Patient_Relation>".$NHIF_Patient_Relation."</NHIF_Patient_Relation>";
							$xml         .= "<Diagnosis_Code>".$Diagnosis_Code."</Diagnosis_Code>";
							$xml         .= "<Admit_Date>".$Admit_Date."</Admit_Date>";
							$xml         .= "<Discharge_Date>".$Discharge_Date."</Discharge_Date>";
							$xml         .= "<Days_Used>".$Days_Used."</Days_Used>";
							$xml         .= "<Amount>".$NHIF_Amount."</Amount>";
							$xml         .= "</Payment_Modifier>";
							$xml         .= "</Payment_Modifiers>";
							$xml  		 .= "</Claim_Header>";
							$xml         .= "<Member>";
							$xml         .= "<Membership_Number>".$Membership_Number."</Membership_Number>";
							$xml         .= "<card_serialnumber>".$card_serialnumber."</card_serialnumber>";
							$xml         .= "<Scheme_Code>".$Scheme_Code."</Scheme_Code>";
							$xml         .= "<Scheme_Plan>".$Scheme_Plan."</Scheme_Plan>";
							$xml         .= "</Member>";
							$xml         .= "<Patient>";
							$xml         .= "<Dependant>".$Dependant."</Dependant>";
							$xml         .= "<First_Name>".$First_Name."</First_Name>";
							$xml         .= "<Middle_Name>".$Middle_Name."</Middle_Name>";
							$xml         .= "<Surname>".$Surname."</Surname>";
							$xml         .= "<Date_Of_Birth>".$Date_Of_Birth."</Date_Of_Birth>";
							$xml         .= "<Gender>".$Gender."</Gender>";
							$xml         .= "</Patient>";
							$xml         .= "<Claim_Data>";
							$xml         .= "<Discharge_Notes>".$Discharge_Notes."</Discharge_Notes>";


							//copay element
							$itemno=0;
							if($copayam!=0){


								foreach ($_SESSION['consinvoice'] as $i => $val) {
									//frm receipts
									$question =mysqli_query($conn,"SELECT * FROM receipts where rcptno='".$val."' limit 0,1");
									$ans=mysqli_fetch_array($question);
									$second=rand(10,59);
									$stamp=stripslashes($ans['stamp']);$Start_Date=substr($stamp,0,4).'-'.substr($stamp,4,2).'-'.substr($stamp,6,2);
									$time=stripslashes($ans['time']);$Start_Time=substr($time,0,2).':'.substr($time,2,2).':'.$second;
								}

										 $itemno+=1;


										 $xml .= "<Service>";
										 $xml .= "<Number>".$itemno."</Number>";
										 $xml .= "<Invoice_Number>".$rcptno."</Invoice_Number>";
										 $xml .= "<Global_Invoice_Nr>".$rcptno."</Global_Invoice_Nr>";
										 $xml .= "<Start_Date>".$Start_Date."</Start_Date>";
										 $xml .= "<Start_Time>".$Start_Time."</Start_Time>";
										 $xml .= "<Provider>";
										 $xml .= "<Role>".$Role."</Role>";
										 $xml .= "<Practice_Number>".$Practice_Number."</Practice_Number>";
										 $xml .="</Provider>";
										 $xml .= "<Diagnosis>";
										 $xml .= "<Stage>".$Stage."</Stage>";
										 $xml .= "<Code_Type>".$Code_Type."</Code_Type>";
										 $xml .= "<Code>".$Code."</Code>";
										 $xml .="</Diagnosis>";
										 $xml .= "<Encounter_Type>CO-PAY</Encounter_Type>";
										 $xml .= "<Code_Type>".$Code_Set."</Code_Type>";
										 $xml .= "<Code>000</Code>";
										 $xml .= "<Code_Description>CO-PAY</Code_Description>";
										 $xml .= "<Quantity>1</Quantity>";
										 $xml .= "<Total_Amount>".$copayam."</Total_Amount>";
										 $xml .= "<Reason>0</Reason>";
										 $xml .="</Service>";

										

							}

							//add services
							
							foreach ($_SESSION['consinvoice'] as $i => $val) {
							//frm receipts
							$question =mysqli_query($conn,"SELECT * FROM receipts where rcptno='".$val."' limit 0,1");
							$ans=mysqli_fetch_array($question);
							$second=rand(10,59);
							$stamp=stripslashes($ans['stamp']);$Start_Date=substr($stamp,0,4).'-'.substr($stamp,4,2).'-'.substr($stamp,6,2);
							$time=stripslashes($ans['time']);$Start_Time=substr($time,0,2).':'.substr($time,2,2).':'.$second;

							$result =mysqli_query($conn,"SELECT * FROM sales WHERE RcptNo='".$val."' and Status!=0");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
										$itemno+=1;
										$row=mysqli_fetch_array($result);
										$TransNo=stripslashes($row['TransNo']);
										$Category=stripslashes($row['Category']);
										$ItemCode=stripslashes($row['ItemCode']);
										$ItemName=stripslashes($row['ItemName']);
										$Quantity=stripslashes($row['Qty']);
										$TotalPrice=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
										 if($Category=='CUSTOMERCARE'){$Encounter_Type='Consultations';}else if($Category=='PHARMACY'){$Encounter_Type='Medication';}else if($Category=='LABORATORY'){$Encounter_Type='Laboratory';}else if($Category=='RADIOLOGY'){$Encounter_Type='Radiology';}else if($Category=='THEATRE'){$Encounter_Type='Procedure';}else{$Encounter_Type='Administration costs)';}
										 $xml .= "<Service>";
										 $xml .= "<Number>".$itemno."</Number>";
										 $xml .= "<Invoice_Number>".$rcptno."</Invoice_Number>";
										 $xml .= "<Global_Invoice_Nr>".$rcptno."</Global_Invoice_Nr>";
										 $xml .= "<Start_Date>".$Start_Date."</Start_Date>";
										 $xml .= "<Start_Time>".$Start_Time."</Start_Time>";
										 $xml .= "<Provider>";
										 $xml .= "<Role>".$Role."</Role>";
										 $xml .= "<Practice_Number>".$Practice_Number."</Practice_Number>";
										 $xml .="</Provider>";
										 $xml .= "<Diagnosis>";
										 $xml .= "<Stage>".$Stage."</Stage>";
										 $xml .= "<Code_Type>".$Code_Type."</Code_Type>";
										 $xml .= "<Code>".$Code."</Code>";
										 $xml .="</Diagnosis>";
										 $xml .= "<Encounter_Type>".$Encounter_Type."</Encounter_Type>";
										 $xml .= "<Code_Type>".$Code_Set."</Code_Type>";
										 $xml .= "<Code>".$ItemCode."</Code>";
										 $xml .= "<Code_Description>".$ItemName."</Code_Description>";
										 $xml .= "<Quantity>".$Quantity."</Quantity>";
										 $xml .= "<Total_Amount>".$TotalPrice."</Total_Amount>";
										 $xml .= "<Reason>".$Reason."</Reason>";
										 $xml .="</Service>";
								}
							}

							//close the root element
							$xml .= "</Claim_Data>";
							$xml .= "</Claim>";

		 					
							//output the XML data
							$myfile = fopen("smartlink/hospitalclaimfile.xml", "w");
							fwrite($myfile, $xml);
							fclose($myfile);

							
							//connect to smart db
							connectsmart();
							//update progress_flag
							$resultm = mysqli_query("update exchange_files set Exchange_File='".$xml."',Exchange_Date='".date('Y-m-d H:i:s')."' where ID='".$exid."'");
							

							//connect to local db
							connectlocal();

							if($resultm){
					
							//update credit customers
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." forwards data to smart system.Consolidated Invoice No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<div class="cleaner" style="width:100%;height:10px"></div>';
								echo"<input type=\"button\" value=\"Print Invoice\" id=\"submit\"   style=\"margin-left:10px; float:left; cursor:pointer;width:130px;background:#0f6\" class=\"in_field\" onclick=\"submitconsinvoice(1);\"/>";
								echo'<div class="cleaner" style="width:100%;height:10px"></div>';
							echo"
								<script>
								$().customAlert();
								alert('Sorry!', '<p>Success.Data forwarded to Smart System.</p>');
								e.preventDefault();
								</script>";

							exit;
							}
							else{
								echo"
								<script>
								$().customAlert();
								alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
								e.preventDefault();
								</script>";
							}
							
							break;
							
							case 118:
							$code=$_GET['code'];
							$pro=array(array());
							
								$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
								$num_results = mysqli_num_rows($result);
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bname=stripslashes($row['Branchname']);
								
								if($bname=='PROCUREMENT'){$dept='Bal';}else{$dept=$bname;}
								
								$resultd =mysqli_query($conn,"SELECT * FROM ITEMS WHERE ItemCode='".$code."'");
								$rowd=mysqli_fetch_array($resultd);
								$bal=stripslashes($rowd[$dept]);
								$itname=stripslashes($rowd['ItemName']);
								if($bal>0){
									
									$pack=stripslashes($rowd['Pack']);
									$part=$bal%$pack;
									$unit=explode('.',($bal/$pack));
									$unit=$unit[0];
									$max=count($pro);
									if($max==0){
									$pro[0]=array($bname,$unit,$part);	
									}else{$pro[$max]=array($bname,$unit,$part);	}
								}
								
								
								
							}
							
							echo"<script>
							$(window).keydown(function(e) {
							if (e.keyCode == '27') {
								hidealert();
							}
							});
				</script>";
							echo'
							<div id="modalDiv">	</div>
							<div id="alertDiv" style="width:400px; height:200px;background:#fff;opacity:1000">
							<p class="title" style="margin-top:0">STOCK AVAILABILITY</p>
							<div class="message" style="padding:5px 15px">
								<h5>'.$itname.'-Pack:'.$pack.'</h5>
							<div id="inside" style="height:106px; overflow-y:auto">
									<div id="title">
									<div id="figure1" style="width:200px">Department</div>
									<div id="figure1" style="width:50px">Unit</div>
									<div id="figure1" style="width:50px">Part</div>
									</div>';
										$max=count($pro);
									for ($i=1; $i <$max; $i++) {
									echo"<div id=\"normal\" onclick=\"getstock('".$userdep."','".$pro[$i][0]."')\" title=\"Request from ".$pro[$i][0]."\">";
									echo"
									<div id=\"figure2\" style=\"width:200px\">".$pro[$i][0]."</div>
									<div id=\"figure2\" style=\"width:51px\">".$pro[$i][1]."</div>
									<div id=\"figure2\" style=\"width:51px\">".$pro[$i][2]."</div>
									</div><div class=\"cleaner\"></div>";
								
									}
									
							
						
							
							echo'
							</div>
						
							</div>
							
							</div>';
							break;
							
							case 119:
							$code=$_GET['code'];
							$pro=array(array());
							$itname='';
							
								$result =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
								$num_results = mysqli_num_rows($result);
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$supid=stripslashes($row['CustomerId']);
								$sname=stripslashes($row['CustomerName']);
									
								$resultd =mysqli_query($conn,"SELECT * FROM purchases WHERE SupplierId='".$supid."' and ItemCode='".$code."' order by TransNo desc limit 0,1");
								$num_resultsd = mysqli_num_rows($resultd);
								
								if($num_resultsd>0){
								$rowd=mysqli_fetch_array($resultd);
								$price=stripslashes($rowd['PurchPrice']);
								$itname=stripslashes($rowd['ItemName']);
								$max=count($pro);
									if($max==0){
									$pro[0]=array($sname,$price);	
									}else{$pro[$max]=array($sname,$price);		}
								}
							
							}
							
						echo"<script>
							$(window).keydown(function(e) {
							if (e.keyCode == '27') {
								hidealert();
							}
							});
							</script>";
							echo'<div id="modalDiv">	</div>
							<div id="alertDiv" style="width:400px; height:200px;background:#fff;opacity:1000">
							<p class="title" style="margin-top:0">PURCHASE PRICE COMPARISON</p>
							<div class="message" style="padding:5px 15px">
							<h5>'.$itname.'</h5>
							<div id="inside" style="height:106px; overflow-y:auto">
									<div id="title">
									<div id="figure1" style="width:250px">Supplier</div>
									<div id="figure1" style="width:50px">Price</div>
									</div>';
									$max=count($pro);
									for ($i=1; $i <$max; $i++) {
									echo'
									<div id="normal">';
									echo"
									<div id=\"figure2\" style=\"width:250px\">".$pro[$i][0]."</div>
									<div id=\"figure2\" style=\"width:51px\">".$pro[$i][1]."</div>
									</div><div class=\"cleaner\"></div>";
								
									}
									
							
						
							
							echo'</div></div>
							
							</div>';
							break;
							
							case 120:
							$name=$_GET['name'];
							$pass=$_GET['pass'];
							$authid=$_GET['authid'];
							
							switch($authid){
								case 1:
								$result = mysqli_query($conn,"select * from users  where name='".$name."' and password = sha1('".$pass."') and ((dept='".$userdep."' and hod='HOD') or (Position='Admin' or Position='Store'))");
								$num_results = mysqli_num_rows($result);
								if($num_results>0){
									$resulta = mysqli_query($conn,"insert into log values('0','".$name." authorizes Stock request transaction.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
									echo"<script>
										$( '#adminauth2' ).dialog( 'close' );
									submitissue();</script>";
									
								}
								 else{echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';}
							
								
								break;
								
								
							}

							break;
							case 121:
							
							$stamp=date('Ymd');
							$dat=date('Y/m/d');
							$regn=$_GET['regn'];
							$name=$_GET['name'];
							$adm=$_GET['adm'];
							$bfrom=$_GET['bfrom'];
							$bto=$_GET['bto'];
							$bday=$_GET['bday'];
							$bed=$_GET['bed'];
							$btype=$_GET['btype'];
							
							$insid=$cid=$_GET['insid'];
							$insname=$_GET['insname'];
							
							$hf1=$_GET['hf1'];
							$dn1=$_GET['dn1'];
							$parts=explode('θ',$dn1);
							$did1=$parts[0];
							$dn1=$parts[1];							
							$dt1=$_GET['dt1'];

							$hf2=$_GET['hf2'];
							$dn2=$_GET['dn2'];
							$parts=explode('θ',$dn2);
							$did2=$parts[0];
							$dn2=$parts[1];	
							$dt2=$_GET['dt2'];

							$hf3=$_GET['hf3'];
							$dn3=$_GET['dn3'];
							$parts=explode('θ',$dn3);
							$did3=$parts[0];
							$dn3=$parts[1];
							
							$dt3=$_GET['dt3'];
							
							$otdesc=$_GET['otdesc'];
							$ottotal=$_GET['ottotal'];
							
							$subtotal=$_GET['subtotal'];
							$claimno=$_GET['claimno'];
							$nhiftotal=$_GET['nhiftotal'];
							$comtotal=$_GET['comtotal'];
							$cashtotal=$_GET['cashtotal'];
							$losstotal=$_GET['losstotal'];
							$disctotal=$_GET['disctotal'];
							$deptotal=$_GET['deptotal'];
							
							
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM customerdebts  where DrCr='dr' order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$invno=stripslashes($ans['InvoiceNo'])+1;
							
							$arr=array();$k=0;
							$resultc =mysqli_query($conn,"select * from maindepts order by Branchname");
							$num_resultsc = mysqli_num_rows($resultc);
							for ($z=0; $z <$num_resultsc; $z++) {
								$rowc=mysqli_fetch_array($resultc);
								$bname=stripslashes($rowc['Branchname']);
										
										$e=0;
								$resultd =mysqli_query($conn,"select * from  tempbill where patid='".$regn."' and category='".$bname."' and status=1 and itcode!='84'");
										$num_resultsd = mysqli_num_rows($resultd);
										for ($i=0; $i <$num_resultsd; $i++) {
										$rowd=mysqli_fetch_array($resultd);
										$e+=preg_replace('~,~', '', stripslashes($rowd['subnet']));
										}
										
										
										if($e>0){
											$arr[$bname]=$e;
										}
										$k+=$e;
							}
							
							
										$x=0;//deposit
										$resultd =mysqli_query($conn,"select * from  tempbill where patid='".$regn."'  and status=1 and itcode='84'");
										$num_resultsd = mysqli_num_rows($resultd);
										for ($i=0; $i <$num_resultsd; $i++) {
										$rowd=mysqli_fetch_array($resultd);
										$x+=preg_replace('~,~', '', stripslashes($rowd['subnet']));
										}
										
								
						//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM finalbill order by id desc limit 0,1");
							if(mysqli_num_rows($question)==0){
							$frcpt=1;
							}else{
							$ans=mysqli_fetch_array($question);
							$frcpt=stripslashes($ans['rcptno'])+1;
							}
							
							//insert DATA into final bill
							if($x!=0){
								$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','INPATIENT CASH DEPOSIT','','','','".$deptotal."','',1,'".$dat."','".$stamp."','".$username."')");		
							}
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','ADMISSION FEES','','','','".$adm."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','BED CHARGES','".$bfrom."','".$bto."','".$bday."','".$bed."','".$btype."',1,'".$dat."','".$stamp."','".$username."')");
								foreach ($arr as $key => $val) {
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','".$key."','','','','".$val."','',1,'".$dat."','".$stamp."','".$username."')");		
								}
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','HOSPITAL FEES - ".$hf1."','".$dn1."','','','".$dt1."','',1,'".$dat."','".$stamp."','".$username."')");
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','HOSPITAL FEES - ".$hf2."','".$dn2."','','','".$dt2."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','HOSPITAL FEES - ".$hf3."','".$dn3."','','','".$dt3."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','OTHER FEES','".$otdesc."','','','".$ottotal."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','SUBTOTAL','','','','".$subtotal."','',1,'".$dat."','".$stamp."','".$username."')");
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','DISCOUNT','','','','".$disctotal."','',1,'".$dat."','".$stamp."','".$username."')");			
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','NHIF REBATE','".$claimno."','','','".$nhiftotal."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','COMPANY TO PAY','".$insname."','','','".$comtotal."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','CASH TO PAY','','','','".$cashtotal."','',1,'".$dat."','".$stamp."','".$username."')");	
							$resultz = mysqli_query($conn,"insert into finalbill values('0','".$frcpt."','".$invno."','".$regn."','".$name."','DIFFERENCE','','','','".$losstotal."','',1,'".$dat."','".$stamp."','".$username."')");	
										
							
			//insert the four services into tempbill
							
			//admission
			if($adm>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','723','INPATIENT ADMISSION FEES','WARD','".$adm."','1','".$adm."','','".$adm."','".$dat."-".date('H:i')."','','".$fullname."','".$stamp."',1)");	
			}
			//bed
			if($bed>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','724','INPATIENT BED CHARGES','WARD','".$bed."','1','".$bed."','','".$bed."','".$dat."-".date('H:i')."','','".$fullname."','".$stamp."',1)");	
			}
							
			//doctor charges
			if($dt1>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','725','INPATIENT DOCTORS FEES','WARD','".$dt1."','1','".$dt1."','','".$dt1."','".$dat."-".date('H:i')."','".$did1."','".$fullname."','".$stamp."',1)");
			}
			if($dt2>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','725','INPATIENT DOCTORS FEES','WARD','".$dt2."','1','".$dt2."','','".$dt2."','".$dat."-".date('H:i')."','".$did2."','".$fullname."','".$stamp."',1)");	
			}
			if($dt3>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','725','INPATIENT DOCTORS FEES','WARD','".$dt3."','1','".$dt3."','','".$dt3."','".$dat."-".date('H:i')."','".$did3."','".$fullname."','".$stamp."',1)");		
			}
											
			
			//other fees
			if($ottotal>0){
			$resulta = mysqli_query($conn,"insert into tempbill values('0','".$regn."','".$name."','726','INPATIENT OTHER CHARGES','WARD','".$ottotal."','1','".$ottotal."','','".$ottotal."','".$dat."-".date('H:i')."','','".$fullname."','".$stamp."',1)");	
			}
							
				//transfer data from tempbill to sales and delete from tempbill
				
				//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno=stripslashes($ans['RcptNo'])+1;
				
							$result =mysqli_query($conn,"select * from  tempbill where patid='".$regn."' and status=1");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							
							$resulta = mysqli_query($conn,"insert into sales values('0','".$rcptno."','".stripslashes($row['category'])."','".stripslashes($row['itcode'])."','".stripslashes($row['itname'])."','".stripslashes($row['quat'])."','".stripslashes($row['price'])."',0,'".stripslashes($row['disc'])."','".stripslashes($row['subnet'])."',0,1,'".$dat."','".stripslashes($row['patid'])."','".stripslashes($row['patname'])."','','','','','','','','','','','".$stamp."','','".$username."',0,'".stripslashes($row['iid'])."','')");
							}		
							
							$result = mysqli_query($conn,"DELETE from tempbill where patid='".$regn."'");	
							//take care of the payments side
							
							//cash
							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							$rcptno2=stripslashes($ans['RcptNo'])+1;
							
							
							if($cashtotal!=0){
							$resulta = mysqli_query($conn,"insert into sales values('0','".$rcptno2."','WARD','2019','INPATIENT CASH PAID','1','".$cashtotal."',0,'','".$cashtotal."',0,0,'".date('Y/m/d')."','".$regn."','".$name."','','','','','','','','','','','".date('Ymd')."','".$username."','".$username."',0,'1','')");	
							}
							
							
							
						//company
						if($comtotal>0){
						$amount=$comtotal;
						$resultc =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE CustomerId='".$insid."'");
						$rowc=mysqli_fetch_array($resultc);
						$bal2=stripslashes($rowc['Bal']);
						$bal3=$bal2+$amount;
						
						
						
							
					$resultd = mysqli_query($conn,"insert into customerdebts values('0','".$insid."','".$insname."','".$invno."','".$comtotal."','dr','0','".$comtotal."','".$bal3."','Patient Name:".$name."; Patient No:".$regn."','".date('Y/m/d')."','".date('Ymd')."',1,'".$regn."','".$name."')");	
						$resulte = mysqli_query($conn,"update creditcustomers set Bal='".$bal3."' where CustomerId='".$cid."'");	
						
						
						$resultp = mysqli_query($conn,"insert into receipts values('0','".date('Y/m/d')."','".$regn."','".$name."','".$rcptno2."','Companies','".$insid."','".$insname."','','".$amount."','".date('Ymd')."',1,'".$username."','".$invno."','WARD','".date('Hi')."','".date('Ymd')."".date('Hi')."')");
					
						
							//update ledgers
							$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=628");
							$rowb=mysqli_fetch_array($resultb);
							$recbal=stripslashes($rowb['bal']);
							$recbal=$recbal+$amount;
					
							//get balance of income revenue ledger
							$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
							$rowz=mysqli_fetch_array($resultz);
							$incomebal=stripslashes($rowz['bal']);
							$incomebal=$incomebal+$amount;
							
							$resultl = mysqli_query($conn,"insert into ledgerentries values('0','628','Accounts Receivable','635','Income Revenue','".$amount."','Income from Credit sales-Inv No:".$rcptno."','".$dat."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
			$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
			$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='628'");
			
			
							}
							
							//nhif
						if($nhiftotal>0){
						$amount=$nhiftotal;
						$resultc =mysqli_query($conn,"SELECT * FROM creditcustomers WHERE CustomerId=1");
						$rowc=mysqli_fetch_array($resultc);
						$bal2=stripslashes($rowc['Bal']);
						$bal3=$bal2+$amount;
						
						$resultd = mysqli_query($conn,"insert into customerdebts values('0','1','NHIF','".$invno."','".$nhiftotal."','dr','0','".$nhiftotal."','".$bal3."','Patient Name:".$name."; Patient No:".$regn."','".date('Y/m/d')."','".date('Ymd')."',1,'".$regn."','".$name."')");	
						$resulte = mysqli_query($conn,"update creditcustomers set Bal='".$bal3."' where CustomerId=1");	
						
							$resultp = mysqli_query($conn,"insert into receipts values('0','".date('Y/m/d')."','".$regn."','".$name."','".$rcptno2."','Companies','31','NHIF','','".$amount."','".date('Ymd')."',1,'".$username."','".$invno."','WARD','".date('Hi')."','".date('Ymd')."".date('Hi')."')");
							//update ledgers
							$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=628");
							$rowb=mysqli_fetch_array($resultb);
							$recbal=stripslashes($rowb['bal']);
							$recbal=$recbal+$amount;
					
							//get balance of income revenue ledger
							$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=635");
							$rowz=mysqli_fetch_array($resultz);
							$incomebal=stripslashes($rowz['bal']);
							$incomebal=$incomebal+$amount;
							
							$resultl = mysqli_query($conn,"insert into ledgerentries values('0','628','Accounts Receivable','635','Income Revenue','".$amount."','Income from Credit sales-Inv No:".$rcptno."','".$dat."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
							$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='635'");
							$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='628'");
								
							}
							
							//difference
						if($losstotal>0){
						$amount=$losstotal;
						//update ledgers
							$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=683");
							$rowb=mysqli_fetch_array($resultb);
							$recbal=stripslashes($rowb['bal']);
							$recbal=$recbal+$amount;
					
							//get balance of income revenue ledger
							$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=684");
							$rowz=mysqli_fetch_array($resultz);
							$incomebal=stripslashes($rowz['bal']);
							$incomebal=$incomebal+$amount;
							
							$resultl = mysqli_query($conn,"insert into ledgerentries values('0','683','Differences Expense','684','Differences Liability','".$amount."','Differences from Inpatient Bill. Inv No:".$invno."','".$dat."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
							$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='684'");
							$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='683'");
								
							}
							
									//difference
						if($disctotal>0){
						$amount=$losstotal;
						//update ledgers
							$resultb = mysqli_query($conn,"select * from ledgers where ledgerid=686");
							$rowb=mysqli_fetch_array($resultb);
							$recbal=stripslashes($rowb['bal']);
							$recbal=$recbal+$amount;
					
							//get balance of income revenue ledger
							$resultz = mysqli_query($conn,"select * from ledgers where ledgerid=687");
							$rowz=mysqli_fetch_array($resultz);
							$incomebal=stripslashes($rowz['bal']);
							$incomebal=$incomebal+$amount;
							
							$resultl = mysqli_query($conn,"insert into ledgerentries values('0','686','Discounts Expense','687','Discounts Liability','".$amount."','Discounts from Inpatient Bill. Inv No:".$invno."','".$dat."','".$recbal."','".$incomebal."','".$stamp."','','',0)");
							$resultm = mysqli_query($conn,"update ledgers set bal='".$incomebal."' where ledgerid='687'");
							$resultn = mysqli_query($conn,"update ledgers set bal='".$recbal."' where ledgerid='686'");
								
							}
							
						if($resultz){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." Posts Inpatient Final Bill.Receipt No.".$rcptno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<embed src="images/honk3.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';	
									echo"
										<script>
										window.open('report.php?id=68&rcptno=".$frcpt."');
										$().customAlert();
										alert('Success!', '<p>Bill Posted.</p>');
										setTimeout(function() {
											infinalbill();},500);
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Transaction Failure.Please Repeat the transaction.</p>');
										e.preventDefault();
										</script>";
									}	
							
						
							
							break;

							case 122:
							$names=$_GET['names'];
							$patid=$_GET['patid'];
							$amc=$_GET['amc'];
							$amp=$_GET['amp'];
							$amw=$_GET['amw'];
							$diagn=$_GET['diagn'];
							$rcpt=$_GET['rcpt'];
							$social=$_GET['social'];
							

							//get receipt no
							$question =mysqli_query($conn,"SELECT * FROM waivers order by id desc limit 0,1");
							$ans=mysqli_fetch_array($question);
							
							if(mysqli_num_rows($question)==0){
							$waiverno='1/'.date('Y');
								}else {
									$d=substr(stripslashes($ans['waiverno']),-4,4);
										if($d!=date('Y')){
										$waiverno='1/'.date('Y');	
										}
										else{
										$a=substr(stripslashes($ans['waiverno']),-5,5);
										$b=preg_replace('~'.$a.'~', '', stripslashes($ans['waiverno']));
										$c=$b + 1;
										$waiverno=$c.'/'.date('Y');}
								}
							
							$result = mysqli_query($conn,"insert into waivers values('0','".$waiverno."','".$patid."','".$names."','".date('d/m/Y')."','".date('Ymd')."','".$amc."','".$amp."','".$amw."','".$diagn."','".$rcpt."','".mysql_real_escape_string(trim($social))."',1,'".$fullname."')");
								if($result){
									$resulta = mysqli_query($conn,"insert into log values('0','".$username." processes waiver note.Waiver No.".$waiverno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<script>
								window.open('report.php?id=69&rcptno=".$waiverno."');
								$().customAlert();
										alert('Success!', '<p>Waiver Note processed.</p>');
										setTimeout(function() {
											editpatient(160);},500);
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please repeat again.</p>');
										e.preventDefault();
										</script>";
									}
							break;

							case 123:
							$wid=$_GET['wid'];
							$waiverno=$_GET['waiverno'];
							$amc=$_GET['amc'];
							$amp=$_GET['amp'];
							$amw=$_GET['amw'];
							$diagn=$_GET['diagn'];
							$rcpt=$_GET['rcpt'];
							$social=$_GET['social'];
							

							$result = mysqli_query($conn,"update waivers set amount_charged='".$_GET['amc']."',amount_paid='".$_GET['amp']."',amount_waived='".$_GET['amw']."',diagnosis='".$_GET['diagn']."',receiptnos='".$_GET['rcpt']."',notes='".$_GET['social']."' where id=".$wid."");	
							
							if($result){
									$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates waiver note.Waiver ID.".$wid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<script>
								window.open('report.php?id=69&rcptno=".$waiverno."');
								$().customAlert();
										alert('Success!', '<p>Waiver Note Updated.</p>');
										setTimeout(function() {
											editpatient(160);},500);
										</script>";
							exit;
									}
									else{
										echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Please repeat again.</p>');
										e.preventDefault();
										</script>";
									}
							break;
							
							case 124:
							$pid=$_POST['pid'];
							$presc=$_POST['presc'];
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$patid=stripslashes($rowa['PatId']);
							$patname=stripslashes($rowa['PatName']);
							$stamp=date('Ymd');
							$dat=date('Y/m/d');
							$arr=array();

							//get receipt no
								$question =mysqli_query($conn,"SELECT * FROM sales order by TransNo desc limit 0,1");
								$ans=mysqli_fetch_array($question);
								$rcptno=stripslashes($ans['RcptNo'])+1;
							
							
							if($_POST['recp']==1){
								$arr[]='PHARMACY';
								$resulty = mysqli_query($conn,"insert into pharmrequests values('0','".$pid."','".$patid."','".$patname."','".mysql_real_escape_string(trim($_POST['presc']))."','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1)");	
							}
							if($_POST['recl']==1){
								
								//insert into lab requests
								$question =mysqli_query($conn,"SELECT * FROM labrequests order by id desc limit 0,1");
								$ans=mysqli_fetch_array($question);
								$labno=stripslashes($ans['labno'])+1;
								
								$a='lab';
								
								
								$max=count($_SESSION[$a]);
								for ($i = 0; $i < $max; $i++){
									$itcode = $_SESSION[$a][$i][0];
									$itname = $_SESSION[$a][$i][1];
									$itquat = $_SESSION[$a][$i][2];
									$itprice = $_SESSION[$a][$i][3];
									$tprice = $_SESSION[$a][$i][4];
									$oname = $_SESSION[$a][$i][5];
									$regn = $_SESSION[$a][$i][6];
									$categ = $_SESSION[$a][$i][7];
									$total = $_SESSION[$a][$i][8];
									$disc = $_SESSION[$a][$i][9];
									$subn = $_SESSION[$a][$i][10];
									$iid = $_SESSION[$a][$i][12];
									$disp=0;
									$arr[]=$categ;
									$dept=$categ;

									$resultc =mysqli_query($conn,"SELECT * FROM items WHERE ItemCode='".$itcode."'");
									$rowc=mysqli_fetch_array($resultc);
									$sec=stripslashes($rowc['SubCategory']);	
							
								//$resulta = mysqli_query("insert into sales values('0','".$rcptno."','".$dept."','".$itcode."','".$itname."','".$itquat."','".$itprice."',0,'".$disc."','".$subn."',0,'".$disp."','".$dat."','".$regn."','".$oname."','','','','','','','','','','','".$stamp."','','".$username."',0,'".$iid."','')");
								$resulty = mysqli_query($conn,"insert into labrequests values('0','".$labno."','".$pid."','".$patid."','".$patname."','".$sec."','".$itname."','','".date('H:i')."','','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'".$rcptno."',0,'','','','','','','')");	
								
								}

							}


							if($_POST['recr']==1){
								
								//insert into rad requests
								$question =mysqli_query($conn,"SELECT * FROM radrequests order by id desc limit 0,1");
								$ans=mysqli_fetch_array($question);
								$radno=stripslashes($ans['radno'])+1;
								
								$a='rad';
								
								
								$max=count($_SESSION[$a]);
								for ($i = 0; $i < $max; $i++){
									$itcode = $_SESSION[$a][$i][0];
									$itname = $_SESSION[$a][$i][1];
									$itquat = $_SESSION[$a][$i][2];
									$itprice = $_SESSION[$a][$i][3];
									$tprice = $_SESSION[$a][$i][4];
									$oname = $_SESSION[$a][$i][5];
									$regn = $_SESSION[$a][$i][6];
									$categ = $_SESSION[$a][$i][7];
									$total = $_SESSION[$a][$i][8];
									$disc = $_SESSION[$a][$i][9];
									$subn = $_SESSION[$a][$i][10];
									$iid = $_SESSION[$a][$i][12];
									$disp=0;

									$arr[]=$categ;
									$dept=$categ;


							
								//$resulta = mysqli_query("insert into sales values('0','".$rcptno."','".$dept."','".$itcode."','".$itname."','".$itquat."','".$itprice."',0,'".$disc."','".$subn."',0,'".$disp."','".$dat."','".$regn."','".$oname."','','','','','','','','','','','".$stamp."','','".$username."',0,'".$iid."','')");
								$resulty = mysqli_query($conn,"insert into radrequests values('0','".$radno."','".$pid."','".$patid."','".$patname."','".$itname."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1,'".$rcptno."',0)");	
								
								}

							}
					
							if($_POST['rect']==1){
								$arr[]='THEATRE';
								$resulty = mysqli_query($conn,"insert into theatrequests values('0','".$pid."','".$patid."','".$patname."','".mysql_real_escape_string(trim($_POST['theatre']))."','','".date('H:i')."','','".date('d/m/Y')."','".date('Ymd')."','".$fullname."','',1)");	
							}



					if($resulta){
				//send popups
			foreach ($arr as $key => $val) {
				$resultc =mysqli_query($conn,"SELECT * FROM compips WHERE dept='".$val."'");
				$num_resultsc = mysqli_num_rows($resultc);	
				for ($i=0; $i <$num_resultsc; $i++) {
				$rowc=mysqli_fetch_array($resultc);
				$ip=stripslashes($rowc['ip']);		
				
					$resultd =mysqli_query($conn,"SELECT * FROM logintable WHERE computerip='".$ip."'");
					$num_resultsd = mysqli_num_rows($resultd);	
					for ($d=0; $d <$num_resultsd; $d++) {
					$rowd=mysqli_fetch_array($resultd);
					$user=stripslashes($rowd['username']);
					$resulte = mysqli_query($conn,"insert into messages values('0','".$user."','System','Incoming Patient from Inpatient-".$patname."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
					}
							
				}
			}
					
					
				$resulta = mysqli_query($conn,"insert into log values('0','".$username." manages inpatient-NAME:".$patname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<img src="images/tick.png" style="width:30px; height:30px;">
										';
										echo"<script>
									setTimeout(function() {
											treatchart2();},500);
									</script>";
										exit;
										
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">
										
										';
									}
						
						break;

						case 125:
							
							$regn=$_GET['regn'];
							$names=strtoupper($_GET['names']);
							$dob=$_GET['dob'];
							$gender=$_GET['gender'];
							$phone=$_GET['phone'];
							$postal=$_GET['postal'];
							$email=$_GET['email'];
							$bgroup=$_GET['bgroup'];


							$gname=$_GET['gname'];
							$rship=$_GET['rship'];
							$gphone=$_GET['gphone'];
							$gaddress=$_GET['gaddress'];
							
							$stamp=date('Ymd');
							$cur=date('Y-m');
							
							
						
								$query =mysqli_query($conn,"select * from cccpats where pntno='".$regn."' order by id desc");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There exists a similar patient Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}


				$resulta = mysqli_query($conn,"insert into cccpats values('0','".$regn."','".$names."','".$dob."','".$gender."','".$phone."','".$postal."','".$email."','".$bgroup."','".$gname."','".$gphone."','".$rship."','".$gaddress."','1','".$stamp."')");
				$new=$regn+1;
				
							
							if($resulta){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." insers new ccc patient into database-NAME:".$names."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<script>
								$().customAlert();
										alert('Success!', '<p>Record created.Patient No:".$regn."</p>');
									e.preventDefault();

								</script>";
										
								exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;

							case 126:
							
							$regn=$_GET['regn'];
							
							
							$stamp=date('Ymd');
							$cur=date('Y-m');
							
							
						
								$query =mysqli_query($conn,"select * from cccpats where pntno='".$regn."' order by id desc");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}

				$resulta = mysqli_query($conn,"update cccpats set names='".strtoupper($_GET['names'])."',dob='".$_GET['dob']."',gender='".$_GET['gender']."',phone='".$_GET['phone']."',address='".$_GET['postal']."',email='".$_GET['email']."',bgroup='".$_GET['bgroup']."',gname='".$_GET['gname']."',gcont='".$_GET['gphone']."',rship='".$_GET['rship']."',gaddress='".$_GET['gaddress']."'  where pntno=".$regn."");	
							
						
							if($resulta){

								$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits ccc patient data-NAME:".strtoupper($_GET['names'])."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated.Patient No:".$regn."</p>');
									e.preventDefault();

								</script>";
										
								exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;

							case 127:
							
							$regn=$_GET['regn'];
							
							
							$stamp=date('Ymd');
							$date=date('d/m/Y');
							
							
						
								$query =mysqli_query($conn,"select * from cccpats where pntno='".$regn."' order by id desc");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}

							$row=mysqli_fetch_array($query);
							$names=stripslashes($row['names']);

				$resulta = mysqli_query($conn,"insert into cccpresc values('0','".$date."','".$regn."','".$names."','','','','','','','','','','','','".$stamp."',1)");
							
						
							if($resulta){

								$resulta = mysqli_query($conn,"insert into log values('0','".$username." starts a new ccc consultation -NAME:".$names."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<script>
								$().customAlert();
										alert('Success!', '<p>Consultation Record Created.Patient No:".$regn."</p>');
									e.preventDefault();

								</script>";
										
								exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;

							case 128:
							
							$pid=$_GET['pid'];
							$temp=$_GET['temp'];
							$bp=$_GET['bp'];
							$weight=$_GET['weight'];
							$pr=$_GET['pr'];
							$br=$_GET['br'];
							$history=mysql_real_escape_string(trim($_GET['history']));
							$diagnosis=mysql_real_escape_string(trim($_GET['diagnosis']));
							$lab=mysql_real_escape_string(trim($_GET['lab']));


							$stamp=date('Ymd');
							$date=date('d/m/Y');
							$cur=date('Y-m');
							
							
						$resulta =mysqli_query($conn,"update cccpresc set Lab='".$lab."',Temp='".$temp."',Bp='".$bp."',Weight='".$weight."',PulseRate='".$pr."',BreathRate='".$br."',History='".$history."',Diagnosis='".$diagnosis."' where PrescId='".$pid."'");

					
				
							
							if($resulta){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ccc consultations (Consultation Stage)-Presc id:".strtoupper($_GET['pid'])."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated</p>');
									e.preventDefault();

								</script>";								
								exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;


							case 129:
							$pid=$_GET['pid'];
							$notes=mysql_real_escape_string(trim($_GET['notes']));
							
							$resulta =mysqli_query($conn,"update cccpresc set Nutrition='".$notes."' where PrescId='".$pid."'");

							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ccc consultations[Nutrition information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							echo"
										
										<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated</p>');
									e.preventDefault();

								</script>";		
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;

							case 130:
							$pid=$_GET['pid'];
							$notes=mysql_real_escape_string(trim($_GET['notes']));
							
							$resulta =mysqli_query($conn,"update cccpresc set Counselling='".$notes."' where PrescId='".$pid."'");

							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ccc consultations[Counselling information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							echo"
										
										<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated</p>');
									e.preventDefault();

								</script>";		
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;

							case 131:
							$pid=$_GET['pid'];
							$notes=mysql_real_escape_string(trim($_GET['notes']));
							
							$resulta =mysqli_query($conn,"update cccpresc set Prescription='".$notes."' where PrescId='".$pid."'");

							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates ccc consultations[Prescription information].Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							echo"
										
										<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated</p>');
									e.preventDefault();

								</script>";		
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;

							case 132:
							
							$regn=$_GET['regn'];
							$stamp=date('Ymd');
							$date=date('d/m/Y');
							
							
						
								$query =mysqli_query($conn,"select * from patients where pntno='".$regn."' order by auto desc");
									$count = mysqli_num_rows($query);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}

							$row=mysqli_fetch_array($query);
							$names=stripslashes($row['fullnames']);

				$resulta = mysqli_query($conn,"insert into counselling values('0','".$date."','".$regn."','".$names."','','','','','','".$stamp."',1)");
							
						
							if($resulta){

								$resulta = mysqli_query($conn,"insert into log values('0','".$username." starts a new counselling consultation -NAME:".$names."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				
								echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>
								<script>
								$().customAlert();
										alert('Success!', '<p>Consultation Record Created.Patient No:".$regn."</p>');
									e.preventDefault();

								</script>";
										
								exit;
									}
									else {
										echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
										}
							
							break;

							case 133:
							$pid=$_GET['pid'];
							$subcat=$_GET['subcat'];
							$notes=mysql_real_escape_string(trim($_GET['notes']));

							$resultb =mysqli_query($conn,"select * from counscats where id='".$subcat."'");
							$rowb=mysqli_fetch_array($resultb);
							
							
							$resulta =mysqli_query($conn,"update counselling set Notes='".$notes."',Category='".stripslashes($rowb['cat'])."',SubCategory='".stripslashes($rowb['name'])."',SubCatId='".stripslashes($rowb['id'])."',CatId='".stripslashes($rowb['catid'])."' where PrescId='".$pid."'");

							if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates Counselling consultations. Presc No:".$pid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							echo'<img src="images/tick.png" style="width:30px; height:30px;">';
							echo"
										
										<script>
								$().customAlert();
										alert('Success!', '<p>Record Updated</p>');
									e.preventDefault();

								</script>";		
										exit;
									}
									else{
										echo'<img src="images/delete.png" style="width:30px; height:30px;">';
									}
						
							break;


				case 133.1:
				$resulta = mysqli_query($conn,"update employee set terminationdate='".$_GET['dot']."',terminationreason='".$_GET['reason']."',status=0 where emp='".$_GET['emp']."'");
					if($resulta){
					$resulta = mysqli_query($conn,"insert into log values('0','".$username." terminates employment .PF No:".$_GET['emp']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo"<script>$().customAlert();alert('Success!', '<p>Employment terminated.</p>');e.preventDefault();</script>";
									exit;
									}
									else{echo"<script>$().customAlert();alert('Failure!', '<p>Please repeat again.</p>');e.preventDefault();</script>";}
				
				break;


				case 134:
				$rdate=$_GET['tdate'];
				$stamp=preg_replace('~/~', '', $rdate);
				$action=$_GET['action'];
				$aid=$_GET['a'];
				
				$x=substr($rdate,8,2);
				$y=substr($rdate,5,2);
				$z=substr($rdate,0,4);
				
				$mon=$y.'_'.$z;
				$k=$x.'c';
				
				$result =mysqli_query($conn,"select * from ".$mon." where id='".$aid."'");
				$row=mysqli_fetch_array($result);
				$pfno=stripslashes($row['pfno']);
				
				//check if leave is valid
				
				
				if($action==2){
				
					
				$result =mysqli_query($conn,"select * from leaves where endstamp>='".$stamp."' and emp='".$pfno."' and status=2");
				$num_results = mysqli_num_rows($result);	
				if($num_results==0){
					echo"<script>$().customAlert();alert('Error!', '<p>This employee is not on work leave</p>');e.preventDefault();</script>";
			
					$action=0;
				  }
				}
				
					
				if($action==3){
					
				$q=0;
				$result =mysqli_query($conn,"select * from ".$mon." where id='".$aid."'");
				$row=mysqli_fetch_array($result);
					
				for ($i=1; $i <32; $i++) {
							$d=sprintf("%02d",$i);
							$d=$d.'c';
							if(stripslashes($row[$d])==3){
								$q++;
							}
				}
				
				if($q>=7){
					echo"<script>$().customAlert();alert('Error!', '<p>Maximum number of days for sick leave exceeded.</p>');e.preventDefault();</script>";
				  	$action=0;	
					}
				}
				
				
				
				
				$resulta = mysqli_query($conn,"update  ".$mon." set ".$k."='".$action."' where id='".$_GET['a']."'");
				
				$resultb =mysqli_query($conn,"select * from employee where emp='".$pfno."'");
				$rowb=mysqli_fetch_array($resultb);
				$att=stripslashes($rowb['attendance']);
				$tot=stripslashes($rowb['totattendance']);
				
				if($action==0){
					$tot=$tot+1;
					
				}else{
					$tot=$tot+1;
					$att=$att+1;
				}
				
				
				$resultn = mysqli_query($conn,"update employee set attendance='".$att."',totattendance='".$tot."' where emp='".$pfno."'");	
				
				break;
				
				case 135:
				$emp=$_GET['emp'];
				$result =mysqli_query($conn,"select * from employee where emp='".$emp."' and status=1");
				$num_results = mysqli_num_rows($result);
				if($num_results==0){
								echo"<script>$().customAlert();alert('Error!', '<p>The PF No. entered is incorrect</p>');e.preventDefault();</script>";
						
					  exit;
				}
				
				
				$row=mysqli_fetch_array($result);
				$name=stripslashes($row['fname']).' '.stripslashes($row['mname']).' '.stripslashes($row['lname']);
				$resulta = mysqli_query($conn,"insert into leaves values('0','".$_GET['emp']."','".$name."','".stripslashes($row['branch'])."','".stripslashes($row['position'])."','".$_GET['from']."','".$_GET['to']."','".$_GET['days']."','".$_GET['shadow']."','".date('d/m/Y')."','".date('Ymd')."',0,'".$username."','".preg_replace('~/~', '',$_GET['from'])."','".preg_replace('~/~', '',$_GET['to'])."')") or die (mysql_error());
					
					if($resulta){
$resulta = mysqli_query($conn,"insert into log values('0','".$username." makes a leave application .PF No:".$_GET['emp']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<script>hidenewstude();
					$().customAlert();alert('Success!', '<p>Leave Application successful.</p>');e.preventDefault();</script>";
						
						exit;
					}
					else{	echo"<script>$().customAlert();alert('Failure!', '<p>Please repeat the request</p>');e.preventDefault();</script>";
						
					}
				
				break;
				case 136:
				
				
				
				$lid=$_GET['a'];
				$result =mysqli_query($conn,"select * from leaves where id='".$lid."'");
				$row=mysqli_fetch_array($result);
				$emp=stripslashes($row['emp']);
				$cdate=stripslashes($row['commencedate']);
				$days=stripslashes($row['days']);
				
				$resultb =mysqli_query($conn,"select * from employee where emp='".$emp."'");
				$rowb=mysqli_fetch_array($resultb);
				$leave=stripslashes($rowb['leaveac']);
				
				$action=$_GET['action'];
				if($action=='Approve'){
					$stat=2;$x='approved';$leave=$leave-$days;
				}else{$stat=1;$x='denied';}
				
				$result =mysqli_query($conn,"select * from users where pfno='".$emp."'");
				$row=mysqli_fetch_array($result);
				$user=stripslashes($row['name']);
				
				$resulta = mysqli_query($conn,"update leaves set status='".$stat."' where id='".$_GET['a']."'");
				
				
				$resultm = mysqli_query($conn,"update employee set leaveac='".$leave."' where emp='".$emp."'");	
			
					if($resulta){

$resulta = mysqli_query($conn,"insert into log values('0','".$username." authorizes leave .ID No:".$_GET['a']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$resultb = mysqli_query($conn,"insert into messages values('0','".$user."','System','Your Leave Request Commencing on ".$cdate." has been ".$x."','','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
				exit;
			}
								
				
				break;
				
				case 137:
									
								
									$mon=$_GET['mon'];
									$query =mysqli_query($conn,"select * from salregister where month='".$mon."'");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Payroll for the Month has already been created.</p>');
									e.preventDefault();
									</script>";	
										exit;
									}
								else{
									
								
							
									
									
								$resultb =mysqli_query($conn,"select * from employee where status=1");
								$num_results = mysqli_num_rows($resultb);
								for ($i=0; $i <$num_results; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$emp=stripslashes($rowb['emp']);
								$leave=stripslashes($rowb['leaveac']);
								$names=stripslashes($rowb['fname']).' '.stripslashes($rowb['mname']).' '.stripslashes($rowb['lname']);	
								
								$q=0;
								$resultx =mysqli_query($conn,"select * from ".$mon." where pfno='".$emp."'");
								if(!$resultx){
									$q=26;
									}
								$rowx=mysqli_fetch_array($resultx);
					
								for ($x=1; $x<32; $x++) {
											$d=sprintf("%02d",$x);
											$d=$d.'c';
											if(stripslashes($rowx[$d])==1||stripslashes($rowx[$d])==2||stripslashes($rowx[$d])==3){
												$q++;
											}
								}
								
								
								$result =mysqli_query($conn,"select * from payroll where status=1 and emp='".$emp."' order by serial desc limit 0,1");
								$row=mysqli_fetch_array($result);
														
$resultc = mysqli_query($conn,"insert into payroll values('0','".$mon."','".stripslashes($rowb['emp'])."','".$names."','".stripslashes($rowb['dept'])."','".stripslashes($row['sal'])."','".stripslashes($row['allow'])."','','','','','','','','','','','',0,'".stripslashes($rowb['bid'])."','".stripslashes($rowb['bname'])."','".stripslashes($rowb['acno'])."','".$q."')");

									if($q>=26){
									$leave=$leave+2;	
		$resultm = mysqli_query($conn,"update employee set leaveac='".$leave."' where emp='".$emp."'");	
							}


									}
								if($result){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." adds new payroll.Month:".$mon."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$result= mysqli_query($conn,"insert into salregister values('".$mon."','','','','','','','','','','','','','','',1)");						
									echo "<script>
									payroll('".$mon."');
									</script>";
									exit;
									}
									else{
									echo "<script>
									$().customAlert();
									alert('Error!', '<p>Payroll not Created</p>');
									e.preventDefault();
									</script>";
									exit;
										}
										
									}
							break;
							
							case 138:
							$emp=$_GET['emp'];
							$phone=$_GET['phone'];if($phone==''){$phone=0;}
							$health=$_GET['health'];if($health==''){$health=0;}
							$vehicle=$_GET['vehicle'];if($vehicle==''){$vehicle=0;}
							$entertainment=$_GET['entertainment'];if($entertainment==''){$entertainment=0;}
							$house=$_GET['house'];if($house==''){$house=0;}
							$perdiem=$_GET['perdiem'];if($perdiem==''){$perdiem=0;}
							$others=$_GET['others'];if($others==''){$others=0;}
							$date= date('m_Y');  
							
							
		
		$resulta = mysqli_query($conn,"update benefits set phone='".$phone."',
		health='".$health."',vehicle='".$vehicle."',house='".$house."',entertainment='".$entertainment."',perdiem='".$perdiem."',others='".$others."',status=1 where pfno='".$emp."'");
		
		if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits Employee Benefits;Emp id:".$emp."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

									echo'<img src="images/tick.png"  width="22" height="22"/>';
									
									}
								else{
									echo'<img src="images/delete.png"  width="21.5" height="21.5"/>';
									}
								break;
								
						case 139:
							$ser=$_GET['ser'];
							$result = mysqli_query($conn,"DELETE from benefits where id='".$ser."'");
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from benefits table','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							break;
						
					

					case 140:
									$emp=$_GET['emp'];
									
									$query =mysqli_query($conn,"select * from benefits where pfno='".$emp."'");
									$count = mysqli_num_rows($query);
									if($count>0){
										
									
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Employee already exists in the Benefits scheme.</p>');
									e.preventDefault();
									</script>";
										
									exit;	
									}
									else{
								$resultb =mysqli_query($conn,"select * from employee where emp='".$emp."'");
								$rowb=mysqli_fetch_array($resultb);
								$emp=stripslashes($rowb['emp']);
								$names=stripslashes($rowb['fname']).' '.stripslashes($rowb['mname']).' '.stripslashes($rowb['lname']);	
								
					
$resultc = mysqli_query($conn,"insert into benefits values('0','".$emp."','".$names."','','','','','','','','','1')");				
										
										
									if($resultc){	
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts new employee into benefits scheme.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo'<p><img src="images/tick.png" style="width:30px; height:30px; margin-top:-5px"></p>';
									echo "<script>$('#mon').hide();empben();</script>";
										
									}
									
									}
							break;


							case 141:
							$a=$_GET['a'];
							$regn=$_GET['regn'];
							$name=strtoupper($_GET['name']);
							$vname=strtoupper($_GET['vname']);
							$dop=$_GET['dop'];
							$dispdate=$_GET['dispdate'];
							$asscat=$_GET['asscat'];
							$catname=$_GET['catname'];
							$location=$_GET['location'];
							$deprate=$_GET['deprate'];
							$price=$_GET['price'];
							$odetail=$_GET['odetail'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
							
							
							if($a==1){	
							$resulta = mysqli_query($conn,"select * from assets where assetid='".$regn."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							if($num_resultsa!=0){
								echo"
														<script>
														$().customAlert();
														alert('Error!', '<p>Asset ID already exists.</p>');
														e.preventDefault();
														</script>";
														exit;
							}
									
						$resulta = mysqli_query($conn,"insert into assets values('0','".$regn."','".$name."','".$asscat."','".$catname."','".$vname."','".$dop."','".$dispdate."','".$location."','".$price."','".$deprate."','".$odetail."','".$date."','".$stamp."',1)");
							$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','New Asset','New Asset Registration','".$price."','".$date."','".$stamp."',1,'".$username."')");
							}else{
						$resulta = mysqli_query($conn,"update assets set assetid='".$regn."',name='".$name."',subcatid='".$asscat."',category='".$catname."',vendor='".$vname."',dateofpurchase='".$dop."',disposaldate='".$dispdate."',location='".$location."',price='".$price."',deprate='".$deprate."',odetail='".$odetail."' where assetid=".$regn."");
						$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','Edit Asset','Asset editing','".$price."','".$date."','".$stamp."',1,'".$username."')");
							}
												
							
						if($resulta){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates assets database.Asset No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo"<img src=\"images/tick.png\" style=\"\"  width=\"30\" height=\"30\"/>";
						if($a==1){
						echo"<script>setTimeout(function() {addasset();},500);</script>";	
						}else{
							echo"<script>setTimeout(function() {editasset(113);},500);</script>";	
						}
								
							}
							else {echo"<img src=\"images/delete.png\" style=\"\"  width=\"30\" height=\"30\"/>";}
							
							break;
							
							case 142:
							$regn=$_GET['regn'];
							$name=strtoupper($_GET['name']);
							$doa=$_GET['doa'];
							$dor=$_GET['dor'];
							$assby=$_GET['assby'];
							$assto=$_GET['assto'];
							$location=$_GET['location'];
							$price=$_GET['price'];
							$odetail=$_GET['odetail'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
		
					
		$resulta = mysqli_query($conn,"insert into assignments values('0','".$regn."','".$name."','".$price."','".$location."','".$assby."','".$assto."','".$doa."','".$dor."','','".$odetail."','".$date."','".$stamp."',1,'".$username."')");
		$resultb= mysqli_query($conn,"update assets set status=2 where assetid='".$regn."'");
			
			if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." assigns asset.Asset No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','Asset Assignment','Asset Assigned by ".$assby." to ".$assto."','".$price."','".$date."','".$stamp."',1,'".$username."')");
echo"<img src=\"images/tick.png\" style=\"\"  width=\"30\" height=\"30\"/>";
echo"<script>setTimeout(function() {assignasset(117);},500);</script>";	
}
							else {echo"<img src=\"images/delete.png\" style=\"\"  width=\"30\" height=\"30\"/>";}
							
							break;
							
							case 143:
							$regn=$_GET['regn'];
							$assid=$_GET['assid'];
							$dor=$_GET['dor'];
							$recby=$_GET['recby'];
							$odetail=$_GET['odetail'];
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							$price=$_GET['price'];
							$name=$_GET['name'];
		
		$resulta= mysqli_query($conn,"update assignments set dor='".$dor."',receivedby='".$recby."',odetail='".$odetail."',status=2 where id=".$assid."");
		$resultb= mysqli_query($conn,"update assets set status=1 where assetid='".$regn."'");
			
			if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." returns asset.Asset No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','Asset Return','Asset returned  to ".$recby."','".$price."','".$date."','".$stamp."',1,'".$username."')");
echo"<img src=\"images/tick.png\" style=\"\"  width=\"30\" height=\"30\"/>";
echo"<script>setTimeout(function() {returnasset(119);},500);</script>";	
}
							else {echo"<img src=\"images/delete.png\" style=\"\"  width=\"30\" height=\"30\"/>";}
							
							break;
							
							case 144:
					
							$assid=$_GET['param'];
							$result = mysqli_query($conn,"select * from assets where id='".$assid."'");
							$row=mysqli_fetch_array($result);
							$regn=stripslashes($row['assetid']);
							$price=stripslashes($row['price']);
							$name=stripslashes($row['name']);
							
							
							$date=date('Y/m/d');
							$stamp=date('Ymd');
						
		
		$resulta= mysqli_query($conn,"update assignments set status=0 where assid=".$regn."");
		$resultb= mysqli_query($conn,"update assets set status=0 where id='".$assid."'");
			
			if($resulta){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." disposes asset.Asset No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','Asset Disposal','Asset disposed  by ".$username."','".$price."','".$date."','".$stamp."',1,'".$username."')");
	echo"<script>$().customAlert();alert('Success!', '<p>Asset Disposed.</p>');e.preventDefault();</script>";
echo"<script>setTimeout(function() {dispasset(121);},500);</script>";	
}
							else {echo"<script>$().customAlert();alert('Error!', '<p>Failed. Please try again.</p>');e.preventDefault();</script>";}
							
							break;
							
							case 145:
					
							$assid=$_GET['assid'];
							$odetail=$_GET['odetail'];
							$price=$_GET['price'];
							$result = mysqli_query($conn,"select * from assets where id='".$assid."'");
							$row=mysqli_fetch_array($result);
							$regn=stripslashes($row['assetid']);
							$name=stripslashes($row['name']);
							
							
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
							$resultx = mysqli_query($conn,"insert into assettrack values('0','".$regn."','".$name."','Asset Management','".$odetail."','".$price."','".$date."','".$stamp."',1,'".$username."')");
						
		if($resultx){
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." manages asset.Asset No:".$regn."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
	echo"<script>$().customAlert();alert('Success!', '<p>Details captured.</p>');e.preventDefault();</script>";
echo"<script>setTimeout(function() {dispasset(122);},500);</script>";	
}
							else {echo"<script>$().customAlert();alert('Success!', '<p>Asset Disposed.</p>');e.preventDefault();</script>";}
							
							break;

							case 146:
							$name=$_GET['name'];
							$cat=$_GET['cat'];
							$result = mysqli_query($conn,"insert into ".$cat." values('0','".$name."')");	
					
							if($result){
			$resulta = mysqli_query($conn,"insert into log values('0','".$username." inserts a new data into ".$cat." table.name:".$name."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
								echo'<script>setTimeout(function() {editvariables();},500);</script>';	
							}
							else echo"<img src=\"images/delete.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>";
							
							break;
							case 147:
							$vname=$_GET['vname'];
							$sysvar=$_GET['sysvar'];
							$bid=$_GET['bid'];
							
					$result = mysqli_query($conn,"update ".$sysvar." set name='".$vname."' where id='".$bid."'");		
					
						if($result){
								
	$resulta = mysqli_query($conn,"insert into log values('0','".$username." updates system variable.Name:".$vname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
						echo'<img src="images/tick.png" style=" width:30px; height:30px; margin:0px 0 0 0px">';
								echo'<script>setTimeout(function() {editvariables();},500);</script>';	
									}
								else{
									echo'<img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px">';
									}
							
								break;
							
							case 148:
							$sysvar=$_GET['sysvar'];
								$bid=$_GET['bid'];
								$vname=$_GET['vname'];
								$result = mysqli_query($conn,"DELETE from ".$sysvar." where id='".$bid."'");
								if($result){
								
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes system variable.Name:".$vname."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
						echo'<img src="images/tick.png" style=" width:30px; height:30px; margin:0px 0 0 0px">';
						echo'<script>setTimeout(function() {editvariables();},500);</script>';
									
									}
								else{
									echo'<img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px">';
									}
							
								break;


							case 149:
							
							$pntno=$_GET['pntno'];
							$accum=$_GET['accum'];
							$inscom=$_GET['inscom'];
							$company=$_GET['company'];
							$cardno=$_GET['cardno'];
							$benamount=$_GET['benamount'];
							$exid=$_GET['exid'];
							$forwardid=$_GET['forwardid'];
							$inp=$_GET['inp'];

							$smartstatus=0;$insname='';
							

							if($accum==1){
							//get insurance name
							$resultc =mysqli_query($conn,"SELECT * FROM schemes WHERE SchemeId='".$inscom."' limit 0,1");
							$rowc=mysqli_fetch_array($resultc);
							$insname=stripslashes($rowc['SchemeName']);
							$smartstatus=stripslashes($rowc['SmartComp']);

								if($smartstatus==1&&$benamount==''){

										
										echo"<script>
										$().customAlert();
										alert('Error!', '<p>The Insurance Company Chosen is Smart Compliant. Pick the Smart Details first before continuing.</p>');
										e.preventDefault();
										</script>";
										exit;
								}

							}

							if($smartstatus==1){
							//delete file
							//unlink("smartlink/forwardedcarddata.xml");
							}
					

							
							$resultz = mysqli_query($conn,"update patients set insid='".$inscom."',insurer='".$insname."',cardno='".$cardno."',company='".$company."',paytype='".$accum."',smartstatus='".$smartstatus."',benamount='".$benamount."',exid='".$exid."',forwardid='".$forwardid."',accum='".$inp."' where pntno='".$pntno."'");		
					
							if($resultz){
								
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." saves payment registraton details.Patient No:".$pntno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							

							echo'<img src="images/tick.png" style=" width:30px; height:30px; margin:0px 0 0 0px">';
							//echo'<script>setTimeout(function() {reception();},500);</script>';	
								}
							else{
								echo'<img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px">';
								}
						


							break;

							case 151:
					
							
							
							$date=date('Y/m/d');
							$stamp=date('Ymd');
							
							$resultx = mysqli_query($conn,"insert into referrals values('0','".$_GET['patname']."','".$_GET['testname']."','".$_GET['requested']."','".$_GET['type']."','".$_GET['facility']."','".$_GET['amountpaid']."','".$date."','".$stamp."','".$username."',1)");
						
							if($resultx){
							$resulta = mysqli_query($conn,"insert into log values('0','".$username." captures info of outsourced procedure/test','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<script>$().customAlert();alert('Success!', '<p>Details captured.</p>');e.preventDefault();</script>";
							echo"<script>setTimeout(function() {referrals();},500);</script>";	
							}
							else {echo"<script>$().customAlert();alert('Error!', '<p>Details not captured.</p>');e.preventDefault();</script>";}
							
							break;

							
							

				
							
							
		}

?>
							
							
