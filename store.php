<?php include('db_fns.php');

//compare all tables
//update customer Debts-names
	$resulta =mysql_query("select * from customerdebts");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta); 
	$a=substr(stripslashes($rowa['Description']),62,50);
	$id=stripslashes($rowa['TransNo']);
	 
	$resultb= mysql_query("update customerdebts set PatName='".$a."' where TransNo='".$id."'");
							
	}
	


//update customer debts-description
$resulta =mysql_query("select * from customerdebts");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	
	$a=stripslashes($rowa['Description']);
	$len=strlen($a);
	$len-=47;
	$a= substr($a,1,$len); 
	$a=substr(stripslashes($rowa['Description']),62,50);
	$id=stripslashes($rowa['TransNo']);
	 
	$resultb= mysql_query("update customerdebts set Description='".$a."' where TransNo='".$id."'");
							
	}

	//update sales-update in limits for speed.
	$arr=array();
	$resulta =mysql_query("select * from sales");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['RcptNo']);
	$arr[stripslashes($rowa['RcptNo'])]=stripslashes($rowa['ClientId']);
	
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update sales set RcptNo='".$b."' where RcptNo='".$key."'");
			$resultc= mysql_query("update receipts set rcptno='".$b."' where rcptno='".$key."'");
			$resultd= mysql_query("update customerdebts set InvoiceNo='".$b."' where InvoiceNo='".$key."'");
			$b++;
			}
			
			
		//consolidate invoice No.s
	$arr=array();
	$resulta =mysql_query("select * from receipts");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['rcptno']);
	$arr[stripslashes($rowa['rcptno'])]=stripslashes($rowa['rcptno']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update customerdebts set InvoiceNo='".$b."' where InvoiceNo='".$key."'");
			$resultc= mysql_query("update sales set InvNo='".$b."' where RcptNo='".$key."'");
			$resultd= mysql_query("update receipts set invno='".$b."' where rcptno='".$key."'");
			$b++;
			}
			
			
	//update newprescription-o/p no
	$arr=array();
	$resulta =mysql_query("select * from newprescription where Admitted=''");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$id=stripslashes($rowa['PrescId']);
	$opno=$id.'/2014';
	$resultb= mysql_query("update  newprescription set OpNo='".$opno."' where PrescId='".$id."'");
	}
	
	//update newprescription-i/p no
	$arr=array();
	$resulta =mysql_query("select * from newprescription where Admitted!=''");	
	$num_resultsa = mysql_num_rows($resulta);	
	$a=1;
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$id=stripslashes($rowa['PrescId']);
	$ipno=$a.'/2014';
	$resultb= mysql_query("update  newprescription set IpNo='".$ipno."' where PrescId='".$id."'");
	$a++;
	}
	
	
	//create new column in patients called newpatno
	
	//update newpatno
	$resulta =mysql_query("select * from patients");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$id=stripslashes($rowa['auto']);
	$resultb= mysql_query("update  patients set newpatno=auto");
	}
		
	//update patient nos-new prescription
	$resulta =mysql_query("select * from patients");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$pntno=stripslashes($rowa['pntno']);
	$newno=stripslashes($rowa['newpatno']);
	$patname=stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).' '.stripslashes($rowa['lname']);
	$resultb= mysql_query("update  newprescription set PatId='".$newno."' where PatId='".$pntno."'");
	}
	//admsumm
	$resultb= mysql_query("update  admsumm set patid='".$newno."' where patid='".$pntno."'");	
	
	//calendar
	$resultb= mysql_query("update  calendar set Pat_id='".$newno."' where Pat_id='".$pntno."'");
	
	//creditcustomers
	$resultb= mysql_query("update  creditcustomers set CustomerId='".$newno."' where CustomerId='".$pntno."'");
	
	//customerdebts
	$resultb= mysql_query("update  customerdebts set PatId='".$newno."',PatName='".$patname."' where PatId='".$pntno."'");
	
	//daycare
	$resultb= mysql_query("update  daycare set patid='".$newno."' where patid='".$pntno."'");
	
	//deathsregister
	$resultb= mysql_query("update  deathsregister set patid='".$newno."' where patid='".$pntno."'");
	
	//discharge
	$resultb= mysql_query("update  discharge set patid='".$newno."' where patid='".$pntno."'");
	
	//documents
		$resultb= mysql_query("update  documents set Pntno='".$newno."' where Pntno='".$pntno."'");
		
	//drugrecord
	$resultb= mysql_query("update  drugrecord set patid='".$newno."' where patid='".$pntno."'");
	
	//receipts
	$resultb= mysql_query("update  receipts set patid='".$newno."' where patid='".$pntno."'");
	
	//sales
	$resultb= mysql_query("update  sales set ClientId='".$newno."' where ClientId='".$pntno."'");
	
	//tempbill
	$resultb= mysql_query("update  tempbill set patid='".$newno."' where patid='".$pntno."'");
	
	//vitals
	$resultb= mysql_query("update  vitals set patid='".$newno."' where patid='".$pntno."'");
	
	//wardbed
	$resultb= mysql_query("update  wardbeds set patid='".$newno."' where patid='".$pntno."'");
	
	//change newpatno to pntno and delete pntno
	
	//update creditcustomers
	$resulta =mysql_query("select * from creditcustomers");	
	$num_resultsa = mysql_num_rows($resulta);	
	$a=1;
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$id=stripslashes($rowa['CustomerId']);
	$resultb= mysql_query("update  creditcustomers set CustomerId='".$a."' where CustomerId='".$id."'");
	$resultc= mysql_query("update  customerdebts set CustomerId='".$a."' where CustomerId='".$id."'");
	$a++;
	}	
			
	//change creditcustomers to auto increment
	
	//sort out creditnotes
	
	
	//update discharge
	$resulta =mysql_query("select * from discharge");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$resultb= mysql_query("update  discharge set sumno=id");
	}
		
	//sort out goodsreturned
	$arr=array();
	$resulta =mysql_query("select * from goodsreturned");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['gnrno']);
	$arr[stripslashes($rowa['gnrno'])]=stripslashes($rowa['gnrno']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update goodsreturned set gnrno='".$b."' where gnrno='".$key."'");
			$b++;
			}
			
			
		//sort out creditnotes
	$arr=array();
	$resulta =mysql_query("select * from creditnotes");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['Creditno']);
	$arr[stripslashes($rowa['Creditno'])]=stripslashes($rowa['Creditno']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update creditnotes set Creditno='".$b."' where Creditno='".$key."'");
			$b++;
			}
			
			//sort out issuetable
	$arr=array();
	$resulta =mysql_query("select * from issuetable");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['IssueNo']);
	$arr[stripslashes($rowa['IssueNo'])]=stripslashes($rowa['IssueNo']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update issuetable set IssueNo='".$b."' where IssueNo='".$key."'");
			$b++;
			}
			
			
			//sort out lpo
	$arr=array();
	$resulta =mysql_query("select * from lpo");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['lpono']);
	$arr[stripslashes($rowa['lpono'])]=stripslashes($rowa['lpono']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update lpo set lpono='".$b."' where lpono='".$key."'");
			$b++;
			}

//sort out purchases-make sure that all credit suppliers have incremental no.s
	$arr=array();
	$resulta =mysql_query("select * from purchases");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$rcptno=stripslashes($rowa['PurchNo']);
	$arr[stripslashes($rowa['PurchNo'])]=stripslashes($rowa['PurchNo']);
	}
			$b=1;
			foreach ($arr as $key => $val) {
			$resultb= mysql_query("update purchases set PurchNo='".$b."' where PurchNo='".$key."'");
			$resultb= mysql_query("update supplierdebts set GrnNo='".$b."' where GrnNo='".$key."'");
			$b++;
			}

	//sort credit suppliers issue-auto increment
	
	
	
	//PURCHASES EXP STAMP


function stampreverse($date){
$a=substr($date,0,2);
$b=substr($date,2,2);
$c=substr($date,4,4);
$d=$c.$b.$a;
return $d;	
}

	
	$resulta =mysql_query("select * from purchases");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$tno=stripslashes($rowa['TransNo']);
	$expstamp=stampreverse(stripslashes($rowa['expstamp']));
	$resultb= mysql_query("update purchases set expstamp='".$expstamp."' where TransNo='".$tno."'");
	}
			


//update final bill
	$arr=array();
	$resulta =mysql_query("select * from finalbill");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$arr[stripslashes($rowa['rcptno'])]=stripslashes($rowa['patid']);
	}
	
	
	foreach ($arr as $key => $val) {
	
	
		$resulta =mysql_query("select * from customerdebts where PatId='".$val."' order by TransNo desc limit 0,1");	
		$rowa=mysql_fetch_array($resulta);
		$rcptno=stripslashes($rowa['InvoiceNo']);
		$resultb= mysql_query("update finalbill set invno='".$rcptno."' where rcptno='".$key."'");
		if($resultb){
			echo $key.'-'.$rcptno.'<br/>';
		}
	
	}
	
	//update customer debts
	$arr=array();
	$resulta =mysql_query("select * from customerdebts where CustomerId=31");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$invno=stripslashes($rowa['InvoiceNo']);
	
		$resultx =mysql_query("select * from finalbill where invno='".$invno."' and col1='NHIF REBATE'");	
		$rowx=mysql_fetch_array($resultx);
		$amount=stripslashes($rowx['col5']);
		$resultb= mysql_query("update customerdebts set Amount='".$amount."' where InvoiceNo='".$invno."'");
		if($resultb){
			echo $invno.'-'.$amount.'<br/>';
		}
	
	
	}
	
	//update customer debts
	$arr=array();
	$resulta =mysql_query("select * from customerdebts where CustomerId=31 and Amount=''");	
	$num_resultsa = mysql_num_rows($resulta);	
	for ($i=0; $i <$num_resultsa; $i++) {
	$rowa=mysql_fetch_array($resulta);
	$invno=stripslashes($rowa['InvoiceNo']);
	$amount=stripslashes($rowa['InvBal']);
		$resultb= mysql_query("update customerdebts set Amount='".$amount."' where InvoiceNo='".$invno."'");
		if($resultb){
			echo $invno.'-'.$amount.'<br/>';
		}
	
	
	}

	case 95:
							
$result = mysql_query("insert into log values('','".$username." accesses Consultations Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
							$pid=$_GET['pid'];
							$resulta =mysql_query("select * from newprescription where PrescId=".$pid."");
							$rowa=mysql_fetch_array($resulta);
							$patid=stripslashes($rowa['PatId']);
							$dept=stripslashes($rowa['Dept']);
							$dcare=stripslashes($rowa['DayCare']);
							$result =mysql_query("select * from patients where pntno='".stripslashes($rowa['PatId'])."'");
							$row=mysql_fetch_array($result);
							
							
							echo'<div id="newstude">';
						echo'<script>
							document.onkeydown = keydown;
							function keydown(evt){
							if (!evt) evt = event;
							if (evt.keyCode==123){ //f12
							savenewpresc('.$pid.'); 
							}
							}
							</script>';
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">".$dept."-".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])." [".stripslashes($row['pntno'])."] </h2>";
								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 5px 0 0px; cursor:pointer\" onclick=\"window.open('report.php?id=4&rcptno=".$pid."')\" title=\"Print Patient Report\">";
		echo'<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Help" id="submit"  style="padding:2px 5px; border-color:#fff; background:#ff3; float:left; cursor:pointer;width:50px" class="in_field" onclick="help53();"/></div>
								<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"savenewpresc(".$pid.")\"/></div>";
		
		
		
		echo"<script>$('#currentins').parent().find('input:first').width(130).prop('disabled',true);</script>
						<script>
							
						$('#currentins').css({'border' : 'solid #f00 1px'});
						$('#symptoms').parent().find('input:first').width(530);
						$('#diagt').parent().find('input:first').width(330);
						$('#surgt').parent().find('input:first').width(530);
						$('#treat').parent().find('input:first').width(530);
						$('#presct').parent().find('input:first').width(530);
						$('#labt').parent().find('input:first').width(300);
						$('#dr1').parent().find('input:first').width(180);
						$('.dr').parent().find('input:first').width(75);
						$('#radt').parent().find('input:first').width(300);
						$('#widg1').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							clearsymp();
								}
							});
							$('#widg2').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							clearlab();
								}
							});
							$('#widg3').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							clearrad();
								}
							});
							$('#widg4').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							cleardiag();
								}
							});
							$('#widg5').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							clearsurg();
								}
							});
							$('#widg6').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							cleartreat();
								}
							});
							$('#widg7').live('keydown', function(evt) {
							if (!evt) evt = event;
							if (evt.keyCode==13){ 
							clearpresc();
								}
							});
							</script>";		
				echo'<script>
				$(function(){
				area2 = new nicEditor({fullPanel : true,maxHeight :255 }).panelInstance("allergies");
				area1 = new nicEditor({fullPanel : true,maxHeight :255}).panelInstance("hodetails");
				area3 = new nicEditor({fullPanel : true,maxHeight :310}).panelInstance("history");
				area4 = new nicEditor({fullPanel : true,maxHeight :240}).panelInstance("labtests");
				area5 = new nicEditor({fullPanel : true,maxHeight :240}).panelInstance("radtests");
				area6 = new nicEditor({fullPanel : true,maxHeight :300}).panelInstance("labres");
				area7 = new nicEditor({fullPanel : true,maxHeight :140}).panelInstance("radres");
				area8 = new nicEditor({fullPanel : true,maxHeight :310}).panelInstance("diagnosis");
				area9 = new nicEditor({fullPanel : true,maxHeight :310}).panelInstance("treatment");
				area10 = new nicEditor({fullPanel : true,maxHeight :230}).panelInstance("prescription");
				area11 = new nicEditor({fullPanel : true,maxHeight :350}).panelInstance("progress");
				area12 = new nicEditor({fullPanel : true,maxHeight :350}).panelInstance("docnotes");
				area13 = new nicEditor({fullPanel : true,maxHeight :350}).panelInstance("nursenotes");
				area14 = new nicEditor({fullPanel : true,maxHeight :350}).panelInstance("phyexam");
				});
</script>
						<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
<div id="tabs" style="width:996px; height:433px">
	<ul>
		<li><a href="#tabs-1">Demographics</a></li>
		<li><a href="#tabs-2">Triage</a></li>
		<li><a href="#tabs-3">History</a></li>
		<li><a href="#tabs-8">Phy. Exam.</a></li>
		<li><a href="#tabs-7">Diagnosis</a></li>
		<li><a href="#tabs-9">Theatre</a></li>
		<li><a href="#tabs-10">Pharmacy</a></li>
		<li><a href="#tabs-5">Lab.</a></li>
		<li><a href="#tabs-6">Radiology</a></li>
		<li><a href="#tabs-11">Admissions</a></li>
		<li><a href="#tabs-16">Progress</a></li>
		<li><a href="#tabs-4">Treatment Sheet</a></li>
		<li><a href="#tabs-13">Cadex</a></li>
		<li><a href="#tabs-14">Appointments</a></li>
		<li><a href="#tabs-15">Billing</a></li>
	</ul>';
	if($dcare==1){
		$xxx=0;
								echo"<script>
									$().customAlert();
									alert('Alert!', '<p> This is a Company Paying Patient</p>');
									e.preventDefault();
									</script>";
							}else {$xxx=1;}
	echo'<div id="tabs-1">
	<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px">
								<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;border-color:#f00" disabled="disabled" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
							<div class="cleaner_h5"></div>
						 <a class="labels">Age:</a>
						  <input type="text" style="display:none" id="tdate" value="'.date('Y').'">
						 <input type="text" id="age" name="age" disabled="disabled" class="in_field"  style="border-color:#f00"/> 
						 <input type="hidden" id="dob" value="'.stripslashes($row['dob']).'"/>';
						 echo"<script>calcage('".stripslashes($row['dob'])."')</script>";
								echo'<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($row['gender'])=='male'){
									 echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio" disabled="disabled">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked disabled="disabled">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" id="stream"  disabled="disabled"  style="border-color:#f00" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:<strong style="margin-left:20px"> '.stripslashes($row['bgroup']).'</strong></a>
                                <div class="cleaner_h5"></div>
				
					</div>
								
							
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px">
								<h5>Employer Details</h5>
								<a class="labels">Employer:</a>
								<input type="text" id="tcr" name="gaddress" class="in_field" value="'.stripslashes($row['empname']).'" disabled="disabled" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Emp. No:</a>
								<input type="text" id="tdr" name="gaddress" class="in_field" value="'.stripslashes($row['empno']).'" disabled="disabled" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<h5>Insurance Scheme Details</h5>
								<a class="labels">Insurer:</a>
								<div class="ui-widget" style="margin-right:25px; float:right;border-color:#f00"  disabled="disabled" >
								<select id="currentins" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									echo'<option value="'.stripslashes($row['insid']).'θ'.stripslashes($row['name']).'" selected="selected">'.stripslashes($row['insurer']).'</option>';
									$resultb =mysql_query("select * from inscompanies order by name");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div><div class="cleaner_h5"></div>
								<a class="labels">Card No:</a>
								<input type="text" id="cardno" name="gaddress" class="in_field" value="'.stripslashes($row['cardno']).'"  disabled="disabled" style="border-color:#f00"/> 
								<input type="text" id="insid" name="oname"  class="in_field" style="display:none"/> 
								<input type="text" id="insname" name="oname"  class="in_field" style="display:none"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Other Details/Notes:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy" class="alergy"  disabled="disabled" style="border-color:#f00">'.stripslashes($row['odetails']).'</textarea>
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px">
								<h5>Guardian/Next of Kin Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname" name="gname" class="in_field" disabled="disabled" style="border-color:#f00" value="'.stripslashes($row['gname']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship" name="rship" style="float:right;border-color:#f00" disabled="disabled">
								<option value="'.stripslashes($row['grship']).'" selected="selected">'.stripslashes($row['grship']).'</option>
								<option value="father">Father</option>
								<option value="mother">Mother</option>
								<option value="sister">Sister</option>
								<option value="Brother">Brother</option>
								<option value="uncle">Uncle</option>
								<option value="aunt">Aunt</option>
								<option value="cousin">Cousin</option>
								<option value="others">Others</option>
								</select> 
								<div class="cleaner_h5"></div>
								<a class="labels">Contacts:</a>
                                <input type="text" id="gphone" name="gphone" class="in_field" value="'.stripslashes($row['gcont']).'" disabled="disabled" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">E-No:</a>
                                <input type="text" id="geno" name="geno" class="in_field" value="'.stripslashes($row['geno']).'" disabled="disabled" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress" name="gaddress" class="in_field" value="'.stripslashes($row['gaddress']).'" disabled="disabled" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								</div>
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px; width:172px">
								<h5>Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
								<iframe name="leiframe" id="leiframe" class="leiframe" src="'.stripslashes($row['image']).'" style="float:left;margin-left:20px">
								</iframe>
                            	
								</div>
					</div>
	<div id="tabs-2">
								
							
								
								
								
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px; width:300px">
								<h5>Triage Analysis</h5>
								<a class="labels">Temp:</a>
                                <input type="text" id="temp" name="oname"  class="in_field" value="'.stripslashes($rowa['Temp']).'"  style="width:30px; float:left; margin-left:50px"/> 
								<div style="float:left; margin-top:2px"><a class="labels" style="font-size:5px; margin-top:0px;font-weight:bold; margin-left:5px">0</a></div><div style="float:left; margin=left:3px"><a style="font-size:11px;font-weight:bold;"  class="labels">C</a></div>
 								<div class="cleaner_h5"></div>
								<a class="labels">B.P:</a>
                                <div style="width:40px; float:left;margin-left:62px; padding:1px " class="in_field">
								<div style="float:left; border-bottom:1px solid #333; width:35px"><input type="text" id="bp1" name="oname" value="'.stripslashes($rowa['Bp1']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px; margin-top:0px;margin-bottom:2px;text-align:center"/> </div>
								<div class="cleaner"></div>
								<div style="float:left"><input type="text" id="bp2" name="oname" value="'.stripslashes($rowa['Bp2']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px;  margin-top:2px;text-align:center"/>  </div>
								</div>
								
								<a class="labels" style="font-weight:bold; margin-left:5px; margin-top:20px">mmHg</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Weight:</a>
                                <input type="text" id="weight" name="oname" class="in_field" value="'.stripslashes($rowa['Weight']).'"  style="width:30px; float:left; margin-left:42px"/> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Kgs</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Resp. Rate:</a>
                                <input type="text" id="resprate" name="oname" class="in_field" value="'.stripslashes($rowa['RespRate']).'"  style="width:30px; float:left; margin-left:23px" /> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Breaths/Min</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Pulse Rate:</a>
                                <input type="text" id="pulserate" name="oname" class="in_field" value="'.stripslashes($rowa['PulseRate']).'"  style="width:30px; float:left; margin-left:25px" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">Beats/Min</a>
							<div class="cleaner_h5"></div>
								<a class="labels">R.B.S:</a>
                                <input type="text" id="rbs" name="oname" class="in_field" value="'.stripslashes($rowa['Rbs']).'"  style="width:30px; float:left; margin-left:54px" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">mMoles/Ltr</a>
								</div>
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px; width:300px">
								<h5>Health Problems/Allergies</h5>
								<textarea id="allergies" style="float:right;height:255px; width:290px" class="alergy">'.stripslashes($rowa['Allergies']).'</textarea>
								</div>
								<div id="personal" style="border:2px solid #333; height:365px; margin-left:0px; width:300px">
								<h5>Other Details</h5>
								<textarea id="hodetails" style="float:right;height:255px; width:290px" class="alergy">'.stripslashes($rowa['OtherDetails']).'</textarea>
								</div>
							
	
	</div>
	<div id="tabs-3">
	<a class="labels">Type Symptom name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg1" >
								<select id="symptoms" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from symptoms order by name");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="history" style="float:right;height:310px; width:950px" class="alergy">'.stripslashes($rowa['History']).'</textarea>
	<textarea id="complaint" style="float:right;height:310px; width:950px; display:none" class="alergy"></textarea>
	
	</div>
	
	<div id="tabs-5">
	<div style="float:left; padding-right:10px; border-right:2px solid #333">
	<h5>Lab Tests</h5>
	<input type="checkbox" value="1" name="labrec" id="labrec" style="float:left;margin:8px 0 0 10px">
	<a class="labels" style="margin-left:10px">Send to Lab</a>
	 <div class="cleaner"></div>
	
	<a class="labels">Type Test Name:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg2" >
								<select id="labt" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from items where Category='LABORATORY' order by ItemName");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['ItemName']).'">'.stripslashes($rowb['ItemName']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="labtests" style="float:left;height:260px; width:450px" class="alergy">'.stripslashes($rowa['LabTests']).'</textarea>
	</div>
		<div style="float:left; padding-left:10px">
		<h5>Lab Results</h5>
		<input type="checkbox" value="1" name="printlab" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Lab Analysis on Save</a>
		<div class="cleaner"></div>
		<textarea id="labres" style="float:left;height:270px; width:470px" class="alergy">'.stripslashes($rowa['LabResults']).'</textarea>
		</div>
	</div>
	<div id="tabs-6">
	<div style="float:left; padding-right:10px; border-right:2px solid #333">
	<h5>Radiology Tests</h5>
	<input type="checkbox" value="1" name="radrec" id="radrec" style="float:left;margin:8px 0 0 10px">
	<a class="labels" style="margin-left:10px">Reccommend to Radiology</a>
	 <div class="cleaner"></div>
	<a class="labels">Type Test Name:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg3" >
								<select id="radt" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from items where Category='RADIOLOGY' order by ItemName");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['ItemName']).'">'.stripslashes($rowb['ItemName']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="radtests" style="float:left;height:260px; width:450px" class="alergy">'.stripslashes($rowa['RadTests']).'</textarea>
	</div>
		<div style="float:left; padding-left:10px">
		<h5>Radiology Results</h5>
		<input type="checkbox" value="1" name="printrad" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Radiology Analysis on Save</a>
		<div class="cleaner"></div>
		<textarea id="radres" style="float:left;height:110px; width:440px" class="alergy">'.stripslashes($rowa['RadiologyResults']).'</textarea>
			  <div class="cleaner_h5"></div>
			  <h5>Scan Images</h5>
			  <div id="wrap" style="width:440px; height:100px; background:#f0f0f0; border:1px solid #0085b2; BORDER-RADIUS:0PX; padding:10px; padding-right:5px; overflow:auto;">';
		$result2 =mysql_query("select * from documents where Pntno='".$patid."' order by Stamp desc");
		$num_results2 = mysql_num_rows($result2);
		for ($i=0; $i <$num_results2; $i++) {
		$row2=mysql_fetch_array($result2);
			if(stripslashes($row2['Type'])=='Image'){
			echo"<img src=\"". stripslashes($row2['Link'])."\" style=\"margin-right:5px; max-width:100px;cursor:pointer;margin-bottom:5px; max-height:100px\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\"  onclick=\"window.open('http://$server/q-afya/".stripslashes($row2['Link'])."')\" />";
		 } 
		if(stripslashes($row2['Type'])=='Document'){
		echo"<img src=\"images/adobe.png\" style=\"margin-right:5px; max-width:100px;cursor:pointer;margin-bottom:5px; max-height:100px\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\"  onclick=\"window.open('http://$server/q-afya/".stripslashes($row2['Link'])."')\" />";
		 } 
		}
			
			echo'</div>
		</div>
	</div>
	<div id="tabs-7">
	<a class="labels">Send To:<span>*</span></a>
                                <select  class="select" id="deptsendto" style="margin-left:20px; width:250px">
								<option selected="selected" value="'.$dept.'">'.$dept.'</option>
								<option value="GENERAL CONSULTATIONS">General Consultations</option>
								<option value="PHYSIOTHERAPY">Physiotherapy</option>
								<option value="EYE CLINIC">Eye Clinic</option>
								<option value="MCH">MCH</option>
								<option value="VCT">VCT</option>
								<option value="NUTRITION">Nutrition</option>
								<option value="DENTAL CLINIC">Dental Clinic</option>
								<option value="PAEDIATRICS">Paediatrics</option>
								<option value="COUNSELLING">Counselling</option>
								</select>
	<a class="labels" style="margin-left:20px">Type Diagnosis name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg4" >
								<select id="diagt" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from diagnosis order by name asc");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="diagnosis" style="float:right;height:310px; width:950px" class="alergy">'.stripslashes($rowa['Diagnosis']).'</textarea>
	</div>
	<div id="tabs-8">
	<textarea id="phyexam"  style="float:right;height:330px; width:950px" class="alergy">'.stripslashes($rowa['PhyExam']).'</textarea>
	</div>
	<div id="tabs-9">
	<input type="checkbox" value="1" name="rectheatre" id="rectheatre" style="float:left;margin:8px 0 0 10px">
	<a class="labels" style="margin-left:10px">Send to Theatre</a>
	<a class="labels" style="margin-left:20px">Type Procedure name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg6" >
								<select id="treat" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from procedures order by name asc");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="treatment" style="float:right;height:310px; width:950px" class="alergy">'.stripslashes($rowa['Treatment']).'</textarea>
	</div>
	<div id="tabs-10">
	<a class="labels">Type Prescription name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg7" >
								<select id="presct" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysql_query("select * from prescriptions order by name asc");
														$num_resultsb = mysql_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysql_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
	<input type="checkbox" value="1" name="printrec" style="float:left;margin:8px 3px 0 30px;"><a class="labels">Print Precription on Save</a>
	<a class="labels">Or fill the details below and click [Add].</a>';
	if(stripslashes($rowa['RecPharm'])!=2){
	echo'<input type="checkbox" value="1" name="recpharm" id="recpharm" style="float:left;margin:8px 0 0 400px">
	<a class="labels" style="margin-left:10px">Send to Pharmacy/CSSD?</a>
	 <div class="cleaner"></div>';
	}
	echo'<div class="cleaner"></div>
	<a class="labels">Drug Name</a><a class="labels" style="margin-left:210px">Dosage</a>	
	<a class="labels" style="margin-left:100px">Route</a><a class="labels" style="margin-left:90px">Frequency</a>		
	<a class="labels" style="margin-left:100px">Duration</a><a class="labels" style="margin-left:70px">Quantity</a>
	<div class="cleaner"></div>		
	<div class="ui-widget" style="margin-left:0px; float:left;" >
		<select class="drugname" id="dr1" style="width:260px; margin-left:0px;">
		<option value="">Select one...</option>';
			$resultb =mysql_query("select * from items where PHARMACY>0 and Type='GOOD' order by ItemName");
			$num_resultsb = mysql_num_rows($resultb);
			$resultc =mysql_query("select * from items where CSSD>0 and Type='GOOD' order by ItemName");
			$num_resultsc = mysql_num_rows($resultc);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysql_fetch_array($resultb);
								echo'<option value="'.stripslashes($rowb['ItemName']).'θ'.stripslashes($rowb['PHARMACY']).'">'.stripslashes($rowb['ItemName']).', Bal:'.stripslashes($rowb['PHARMACY']).'</option>';
							}
							for ($i=0; $i <$num_resultsc; $i++) {
								$rowc=mysql_fetch_array($resultc);
								echo'<option value="'.stripslashes($rowc['ItemName']).'θ'.stripslashes($rowc['CSSD']).'">'.stripslashes($rowc['ItemName']).', Bal:'.stripslashes($rowc['CSSD']).'</option>';
							}
								echo'</select>
								</div>
	<input type="hidden" id="dname"/><input type="hidden" id="dbal"/>
	
	<input type="text" id="dr9" class="in_field" value="" style="width:30px; float:left; margin-left:50px"/> 
		
		<div class="ui-widget" style="margin-left:2px; float:left;" >
		<select class="dr" id="dr4" style="">
		<option value="">Select one...</option>
		<option value="Tabs">Tabs</option>
		<option value="Mls">Mls</option>
		<option value="Capsules">Capsules</option>
		<option value="Suspensions">Suspensions</option>
		<option value="Elixirs">Elixirs</option>
		<option value="Syrups">Syrups</option>
		<option value="Creams">Creams</option>
		<option value="Ointments">Ointments</option>
		<option value="Suppositories">Suppositories</option>
		<option value="Inhalers">Inhalers</option>
		<option value="Vials">Vials</option>
		<option value="Patch">Patch</option>
		
		</select>
		</div>
		
		<div class="ui-widget" style="margin-left:35px; float:left;" >
		<select class="dr" id="dr6" style="">
		<option value="">Select one...</option>
		<option value="Oral">Oral</option>
		<option value="Rectal">Rectal</option>
		<option value="I.V">I.V</option>
		<option value="I.M">I.M</option>
		<option value="S.C">S.C</option>
		<option value="Intraspinal Injection">Intraspinal Injection</option>
		<option value="Inhalation">Inhalation</option>
		</select>
		</div>
		
		
		<div class="ui-widget" style="margin-left:35px; float:left;" >
		<select class="dr" id="dr5" style="">
		<option value="">Select one...</option>
		<option value="1">stat</option>
		<option value="1">n/a</option>
		<option value="24">Once Hourly</option>
		<option value="1">Once Daily</option>
		<option value="2">Twice Daily</option>
		<option value="3">Thrice Daily</option>
		<option value="0.1429">Once Weekly</option>
		<option value="0.2857">Twice Weekly</option>
		<option value="0.4286">Thrice Weekly</option>
		</select>
		</div>
		
		
		
		<input type="text" id="dr7" name="oname" class="in_field" value="" style="width:30px; float:left; margin-left:50px"/> 
		
		<div class="ui-widget" style="margin-left:2px; float:left;" >
		<select class="dr" id="dr8" style="">
		<option value="">Select one...</option>
		<option value="1">stat</option>
		<option value="1">n/a</option>
		<option value="0.04167">Hours</option>
		<option value="1">days</option>
		<option value="7">weeks</option>
		<option value="30">months</option>
		<option value="1">Single Dose</option>
		<option value="1">Continous</option>
		<option value="1">When Needed</option>
		</select>
		</div>
		
		<input type="text" id="dr3" name="oname" class="in_field" value="" style="width:30px; float:left; margin-left:30px" title="This is the actual quantity that is billed."/> 
		
		<img src="images/document_add.png" style="margin-left:30px; width:30px; height:30px; cursor:pointer" onclick="addthispresc()"/>												
	<div class="cleaner_h5"></div>
	<textarea id="prescription" style="float:right;height:230px; width:950px" class="alergy">'.stripslashes($rowa['Prescription']).'</textarea>
	<script></script>
	</div>
	<div id="tabs-11">';
	if(stripslashes($rowa['Admitted'])==4){
	echo'STATUS:<b>DISCHARGED</b>';	
	}
	
	else if(stripslashes($rowa['Admitted'])==1||stripslashes($rowa['Admitted'])==2||stripslashes($rowa['Admitted'])==3)
	{echo'STATUS:<b>ADMITTED</b>';	}
	else {echo'<div style="" id="bedan"><a class="labels">Admit Patient?</a><input type="checkbox" value="1"  name="patadmit" style="float:left;margin:8px 3px 0 5px;" onclick="admitdat('.$pid.');"></div>';}
	echo'
	<input type="hidden" value="'.$pid.'" id="pid1"/>
	<input type="hidden" value="'.$patid.'" id="patid1"/>
	<h5>Admission Notes</h5>
	<textarea id="docnotes" style="float:right;height:290px; width:950px" class="alergy">'.stripslashes($rowa['DoctorNotes']).'</textarea>
	</div>
	<div id="tabs-16">
	<textarea id="progress"  disabled="disabled" style="border-color:#f00;float:right;height:340px; width:950px" class="alergy">'.stripslashes($rowa['ProgressNotes']).'</textarea>
	</div>
	<div id="tabs-4">';
	$resultb =mysql_query("select * from in1 where pid='".$pid."'");
							$rowb=mysql_fetch_array($resultb);
								echo'<div style="height:380px;overflow-y:scroll">
	<h5 style="text-align:center">Prescription Administration Chart</h5>
<div id="op1"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(1)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Admission Details</a>						
	<div class="cleaner_h5"></div>
	<div id="div1" style="width:900px;border:1px solid #333; padding:10px;display:none">
	 <a class="labels" style="float:left">Pat No:</a>
       <input type="text" id="patid" name="patid"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['pntno']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Pat Name:</a>
      <input type="text" id="patname" name="patname"   style="float:left;margin-left:10px;width:250px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['PatName']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Ward:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:130px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['WardType']).'" disabled="disabled"/> 
		<a class="labels" style="float:left; margin-left:10px">Address:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:130px;border-color:#f00" class="in_field" value="'.stripslashes($row['address']).'" disabled="disabled"/> 
		<div class="cleaner_h5"></div>
		<a class="labels" style="float:left">Age:</a>
       <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($row['age']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Sex:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['gender']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Contact:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:120px;border-color:#f00" class="in_field" value="'.stripslashes($row['contact']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Doctor:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:200px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['Doctor']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Bed No:</a>
      <input type="text" id="bednu" name="oname"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['BedNo']).'" disabled="disabled"/> 
	<div class="cleaner_h5"></div>
	<a class="labels" style="float:left">Transferred To:</a>
		<input type="text" id="tw1" name="oname"   style="float:left;margin-left:10px;width:150px;" class="in_field" value="'.stripslashes($rowb['tw1']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Bed No:</a>
      <input type="text" id="tb1" name="oname"   style="float:left;margin-left:10px;width:80px" class="in_field" value="'.stripslashes($rowb['tb1']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Date:</a>
      <input type="text" id="td1" name="oname"   style="float:left;margin-left:10px;width:110px;" class="in_field" value="'.stripslashes($rowb['td1']).'"/> 
		<div class="cleaner_h5"></div>
		<a class="labels" style="float:left; ">Transferred To:</a>
		<input type="text" id="tw2" name="oname"   style="float:left;margin-left:10px;width:150px;" class="in_field" value="'.stripslashes($rowb['tw2']).'"/> 
		<a class="labels" style="float:left; margin-left:10px">Bed No:</a>
      <input type="text" id="tb2" name="oname"   style="float:left;margin-left:10px;width:80px" class="in_field" value="'.stripslashes($rowb['tb2']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Date:</a>
      <input type="text" id="td2" name="oname"   style="float:left;margin-left:10px;width:110px;" class="in_field" value="'.stripslashes($rowb['td2']).'"/> 
	<div class="cleaner_h5"></div>
	
	<a class="labels" style="float:left; ">Physician:</a>
		<input type="text" id="phy" name="oname"   style="float:left;margin-left:10px;width:130px;" class="in_field" value="'.stripslashes($rowb['physician']).'"/> 
		<a class="labels" style="float:left; margin-left:10px">Surgeon:</a>
      <input type="text" id="sur" name="oname"   style="float:left;margin-left:10px;width:130px" class="in_field" value="'.stripslashes($rowb['surgeon']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Anaesthetist:</a>
      <input type="text" id="anae" name="oname"   style="float:left;margin-left:10px;width:130px;" class="in_field" value="'.stripslashes($rowb['anaesthetist']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Paeditrician:</a>
      <input type="text" id="paed" name="oname"   style="float:left;margin-left:10px;width:130px;" class="in_field" value="'.stripslashes($rowb['paeditrician']).'"/> 
	<div class="cleaner_h5"></div>
	
	
	<a class="labels" style="float:left;">Previous:</a>
      <input type="text" id="previous" name="oname"   style="float:left;margin-left:10px;width:280px" class="in_field" value="'.stripslashes($rowb['previous']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Current:</a>
      <input type="text" id="current" name="oname"   style="float:left;margin-left:10px;width:280px" class="in_field" value="'.stripslashes($rowb['current']).'"/> 
	<div class="cleaner_h5"></div>
	<a class="labels" style="float:left">Height:</a>
		<input type="text" id="height" name="oname"   style="float:left;margin-left:10px;width:50px;" class="in_field" value="'.stripslashes($rowb['height']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">Weight:</a>
      <input type="text" id="weight" name="oname"   style="float:left;margin-left:10px;width:50px" class="in_field" value="'.stripslashes($rowb['weight']).'"/> 
	<a class="labels" style="float:left; margin-left:10px">BMI:</a>
      <input type="text" id="bmi" name="oname"   style="float:left;margin-left:10px;width:70px; border-color:#f00" disabled class="in_field" value="'.stripslashes($rowb['bmi']).'"/> 
		<a class="labels" style="float:left; margin-left:10px">STEROID THERAPY:</a>';
		 if(stripslashes($rowb['steroid'])=='yes'){
									 echo'<input style="float:left; margin-top:8px""  id="maleGender" name="steroid" type="radio" value="yes" class="radio" checked="checked"><a class="labels" style="float:left;">YES.</a>
								<input  style="float:left; margin-top:8px"  id="femaleGender" name="steroid" type="radio" value="no" class="radio"><a class="labels" style="float:left;">NO.</a>'; 
								 }
							 else{
                                echo'<input  style="float:left; margin-top:8px"  id="maleGender" name="steroid" type="radio" value="yes" class="radio"><a class="labels" style="float:left;">YES.</a>
								<input  style="float:left; margin-top:8px"  id="femaleGender" name="steroid" type="radio" value="no" class="radio"  checked="checked"><a class="labels" style="float:left;">NO.</a>';}							
		echo'<a class="labels" style="float:left;margin-left:10px;">Date:</a>
		<input type="text" id="steroidate" name="oname"   style="float:left;margin-left:10px;width:90px;" class="in_field" value="'.stripslashes($rowb['steroidate']).'"/> 
	<div id="save1" style="float:right; width:30px; height:30px;"><img src="images/back.jpg" style="float:right; width:30px; height:30px; cursor:pointer" onclick="savein1('.$pid.')"/></div>					
	<div class="cleaner"></div>
		
		
										
	</div>
	<div class="cleaner_h5"></div>							
	<div id="op2"><img src="images/close.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="closer(2)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Drug Record Sheet</a>						
	<div class="cleaner_h5"></div>
	<div id="div2" style="width:916px;border:1px solid #333; padding:10px; ">';
					
	$result = mysql_query("SELECT * FROM  drugrecord where pid='".$pid."' and status=1 order by Stamp desc");
									$num_results = mysql_num_rows($result);
									if($num_results>0){
									
									echo'
									<div id="inside" style="min-height:110px; border-bottom:0">
									<div id="title"">
									<div id="figure1" style="width:80px">Date.</div>
									<div id="figure1" style="width:120px">Drugs</div>
									<div id="figure1" style="width:50px">Dose</div>
									<div id="figure1" style="width:50px">Route</div>
									<div id="figure1" style="width:70px">Notes</div>
									<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
									<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#0085b2">AM</strong></div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">1</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">2</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">3</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">4</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">5</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">6</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">7</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">8</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">9</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">10</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">11</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">12</div>
									</div>
									
							<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
									<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#0085b2">PM</strong></div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;border-left:0 ;color:#fff; text-align:center">1</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">2</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">3</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">4</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">5</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">6</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">7</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">8</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">9</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">10</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">11</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:1px solid #000;color:#fff; text-align:center">12</div>			</div>			
									
									
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysql_fetch_array($result);
										$code=stripslashes($row['id']);
										if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:1.5px solid #333;" id="normal'.$i.'" class="normal">';
	}else{
		echo'<div style="width:auto; height:20px;background:#fff;border-bottom:1.5px solid #333;"  id="normal'.$i.'" class="normal">';
	}
									
									echo'<div class="figure2x" style="width:85px;padding:3px 2px">'.stripslashes($row['date']).'</div>
										<div class="figure2x" style="width:125px;padding:3px 2px">'.stripslashes($row['drugs']).'</div>
										<div class="figure2x" style="width:55px;padding:3px 2px">'.stripslashes($row['dose']).'</div>
										<div class="figure2x" style="width:55px;padding:3px 2px">'.stripslashes($row['route']).'</div>
										<div class="figure2x" style="width:85px;padding:3px 2px">'.stripslashes($row['notes']).'</div>';
									
										
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['1am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['2am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['3am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['4am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['5am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['6am'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['7am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['8am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['9am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['10am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['11am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['12am'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['1pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['2pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['3pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['4pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['5pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['6pm'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['7pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['8pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['9pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['10pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['11pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['12pm'])==1){echo'checked="checked"';} echo' /></div>	';	
	
				
				
								echo"</div><div class=\"cleaner\"></div>";
										
										}
									}
										
	echo'</div>
	
	<div class="cleaner_h5"></div>							
	
	
	
			
		<div id="op9"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(9)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Vitals Charts</a>						
	<div class="cleaner_h5"></div>	
	<div id="div9" style="width:900px;border:1px solid #333; padding:10px; display:none; min-height:360px">';
	 	$arr1=array();$arr2=array();$arr3=array(); $arr4=array();$arr5=array();$arr6=array();$arr7=array();$arr8=array();
		$result =mysql_query("select * from vitals where patid='".$patid."' order by id desc limit 0,7");
		$num_results = mysql_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysql_fetch_array($result);
					$arr1[]='"'.stripslashes($row['datetime']).'"';
					$arr2[]=stripslashes($row['temp']);
					$arr3[]=stripslashes($row['bp1']);
					$arr4[]=stripslashes($row['bp2']);
					$arr5[]=stripslashes($row['pulse']);
					$arr6[]=stripslashes($row['breath']);
					$arr7[]=stripslashes($row['weight']);
					$arr8[]=stripslashes($row['random']);
					}
				$arr1=array_reverse($arr1);$arr2=array_reverse($arr2);$arr3=array_reverse($arr3);$arr4=array_reverse($arr4);$arr5=array_reverse($arr5);$arr6=array_reverse($arr6);$arr7=array_reverse($arr7);$arr8=array_reverse($arr8);
				$a=implode($arr1,",");$b=implode($arr2,",");$c=implode($arr3,",");$d=implode($arr4,",");$e=implode($arr5,",");$f=implode($arr6,",");$g=implode($arr7,",");$h=implode($arr8,",");
	echo'<p style="margin-top:0px; margin-left:20px">Temparature Curve</p>
	<canvas id="line1" height="240" width="850"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#0ff",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$b.']
				}
			]
			
		}

	new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>
	
	<p style="margin-top:0px; margin-left:20px">Blood Pressure Chart</p>
	<canvas id="bar" height="240" width="850"></canvas>
	
<script>

		var barChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#46bfbd",
					strokeColor : "#ccc",
					data : ['.$c.']
				},
				
				{
					fillColor : "#f00",
					strokeColor : "#ccc",
					data : ['.$d.']
				}
			]
			
		}

	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	
	</script>
	
	<div class="cleaner_h10"></div>
	
	<p style="margin-top:0px; margin-left:20px">Pulse Rate Curve</p>
	<canvas id="line2" height="240" width="850"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#fdb45c",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$e.']
				}
			]
			
		}

	new Chart(document.getElementById("line2").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>
	
	<p style="margin-top:0px; margin-left:20px">Respiratory Rate Curve</p>
	<canvas id="line3" height="240" width="850"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#666",
					strokeColor : "#333",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$f.']
				}
			]
			
		}

	new Chart(document.getElementById("line3").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>
	
	<p style="margin-top:0px; margin-left:20px">Weight Curve</p>
	<canvas id="line4" height="240" width="850"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#0085b2",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$g.']
				}
			]
			
		}

	new Chart(document.getElementById("line4").getContext("2d")).Line(lineChartData);
	</script>
	
	<div class="cleaner_h10"></div>
	
	<p style="margin-top:0px; margin-left:20px">Random Blood Sugars Curve</p>
	<canvas id="line5" height="240" width="850"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#ff3",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$h.']
				}
			]
			
		}

	new Chart(document.getElementById("line5").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>		
	
	</div>
		</div>	
	</div>
	
	<div id="tabs-13">
	<textarea id="nursenotes"  disabled="disabled" style="border-color:#f00;float:right;height:340px; width:950px" class="alergy">'.stripslashes($rowa['NursesNotes']).'</textarea>
	</div>
	<div id="tabs-15">
	<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		
	   if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("special"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("special",'.$xxx.'); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("special"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("special"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("special");
      	}
		
		
		
     	 
    }</script>
	<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
	<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysql_query("select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ = stripslashes($row['Category']);
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select><input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
	</div>
							<a class="labels" style="margin-left:10px">Qty:</a>
							<input type="text" id="quat44" class="input_field"  style="width:40px; margin-left:10px;" value="1"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price44" class="input_field"  style="width:70px; margin-left:10px;border-color:#f00" disabled="disabled""/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('special',".$xxx.")\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('special')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('special')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
					<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>
							<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"  />	
							<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
						
<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysql_query("select * from extmedics order by id");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								$id=stripslashes($row['id']);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$id."\">".$name."</option>";
						}
echo"<script>$('#income44').parent().find('input:first').width(100);</script>";
		echo'
		</select>
	</div>		
			<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Final Total:</a>';
				echo'
	<div id="itemsdisp" style="height:270px; width:666px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>	';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"submitbill('special');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
	</div>
	<div id="tabs-14" style="overflow-y:auto">
	<h5>All Appointments</h5>
	<img src="images/plus.png" style="width:30px; height:30px; float:right; margin:0px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Appointment" id="newevent" />
			';
		$result =mysql_query("select * from calendar where  Pat_id='".$patid."' order by Event_id desc");
							$num_results = mysql_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysql_fetch_array($result);
								$start=stripslashes($row['StartTime']);
								$sd=dateprint(stripslashes($row['StartDate']));
								$pat=stripslashes($row['Pat_name']);
								$reason=stripslashes($row['Reason']);
								$rece=stripslashes($row['ReccurEnd']);
								$rece=substr($rece,0,4).'/'.substr($rece,4,2).'/'.substr($rece,6,2);
								echo'<a class="leb" style="margin-left:10px">'.$sd.'</a><a class="leb" style="margin-left:10px">'.$start.'</a><a class="leb" style="margin-left:10px">'.$pat.'</a><div class="cleaner"></div>';
					echo"<a class=\"leb\" style=\"margin-left:10px; cursor:pointer; font-weight:normal; color:#0085b2;\" 
				onclick=\"viewevent(".stripslashes($row['Event_id']).",'".stripslashes($row['Reason'])."','".stripslashes($row['Category'])."','".stripslashes($row['Location'])."'
				,'".stripslashes($row['TaskStatus'])."','".stripslashes($row['Priority'])."','".stripslashes($row['Complete'])."','".stripslashes($row['StartDate'])."','".stripslashes($row['StartTime'])."'
				,'".stripslashes($row['EndDate'])."','".stripslashes($row['EndTime'])."','".stripslashes($row['ReminderStatus'])."','".stripslashes($row['ReminderDate'])."','".stripslashes($row['ReminderTime'])."'
				,'".stripslashes($row['Status'])."','".stripslashes($row['User_id'])."','".stripslashes($row['Notes'])."','".stripslashes($row['ReccurenceStatus'])."'
				,'".stripslashes($row['ReccurPattern'])."','".stripslashes($row['ReccurStart'])."','".$rece."','".stripslashes($row['Pat_name'])."','".stripslashes($row['Pat_id'])."')\">".$reason."</a>";
					echo'<div class="cleaner"></div>';
							}
	echo'</div>
	
</div>
							</div>
   							';
							
					break;

 ?>