
<?php include('db_fns.php'); 
date_default_timezone_set('Africa/Nairobi');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysqli_query($conn,"select * from users where name='".$username."'");
$row=mysqli_fetch_array($result);
$usertype=stripslashes($row['position']);
$photo=stripslashes($row['photo']);
$userid=stripslashes($row['userid']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Med Hospital Manager</title>
<meta name="keywords" content="Q-Afya" />
<meta name="description" content="Q-Afya" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link id="favicon" href="images/fav.ico" rel="icon" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css">
<script type="text/javascript">$(document).ready(function() {$('.fancybox').fancybox();});</script>


<script type="text/javascript">
  window.onload = setupRefresh;
  var timer=0;
  function setupRefresh(){
	var b = $('#remote').val();
	var c = $('#server').val();

	serverstuff();
	
	
	refreshchat();
	setInterval("refreshchat();",60000);	
	timer=setInterval("auto_logout();",1200000);

	
}

function reset_interval(){
	if(timer!=0){
		clearInterval(timer);
		timer=0;
		timer=setInterval("auto_logout();",1200000);
	}
}
function auto_logout(){
	var b = $('#remote').val();
	if(b!='127.0.0.1'){
	window.location.href = "index.php";
	}
}
   
$('#taskfield').live('keydown', function(evt) {
	if (!evt) evt = event;
	if (evt.keyCode==13){ 
	posttask('<?php echo $userid	 ?>');
	}
});
$('#comme').live('keydown', function(evt) {
	if (!evt) evt = event;
	if (evt.keyCode==13){ 
	postchat('<?php echo $username ?>');
	}
});
  </script>
 
<link rel="stylesheet" href="ui/jquery.ui.all.css">
<script src="js/functions.js"></script>
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.datepicker.js"></script>
<script src="ui/jquery.ui.position.js"></script>
<script src="ui/jquery.ui.dialog.js"></script>
<script src="ui/jquery.ui.tabs.js"></script>
<script src="ui/jquery.ui.autocomplete.js"></script>
<script src="ui/jquery.ui.tooltip.js"></script>
<script src="ui/jquery.ui.resizable.js"></script>
<script src="ui/jquery.ui.mouse.js"></script>
<script src="ui/jquery.ui.button.js"></script>
<script src="ui/jquery.ui.menu.js"></script>
<script src="ui/jquery.ui.draggable.js"></script>
<script src="ui/jquery.ui.droppable.js"></script>
<script src="ui/jquery.ui.mouse.js"></script>
<script src="ui/jquery.ui.resizable.js"></script>
<script src="ui/jquery.ui.progressbar.js"></script>
<link rel="stylesheet" href="css/style.css">



<script src="ui/jquery.ui.accordion.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
 <script src="js/scripter.js"></script>
 <script src="js/ajax.js"></script>
 <script type="text/javascript" src="js/jquery.txt"></script>
<script type="text/javascript" src="js/DatePicker.js"></script>
 <script src="js/ajax.js"></script>
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script> 
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
<script src="js/help.js"></script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.js"></script>

<script>

$(function() {
	$("#datepickermain" ).datepicker();
		$( "#datepicker" ).datepicker();$( ".datepicker" ).datepicker();
		$( "#datepicker" ).datepicker( "option", "showAnim", "bounce" );
		$("#datepicker2" ).datepicker();
		$( "#datepicker2" ).datepicker( "option", "showAnim", "bounce" );
		$("#datepicker3" ).datepicker();
		$( "#datepicker3" ).datepicker( "option", "showAnim", "bounce" );
		$("#datepick17" ).datepicker();
		$( "#datepick17" ).datepicker( "option", "showAnim", "bounce" );
		
		//$( "#datepickermain" ).datepicker( "option", "showAnim", "bounce" );
		
	});
</script>
<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
	
	</script>
	<script>
	// increase the default animation speed to exaggerate the effect
	$.fx.speeds._default = 1000;
	
			$("#mytask" ).dialog({
			autoOpen: false,
			show: "explode",
			hide: "explode",
			modal:true
		});
		
		$("#mycalendar" ).dialog({
			autoOpen: false,
			show: "explode",
			hide: "explode",
			modal:true
		});
		$(function() {
		$("#warddialog" ).dialog({
			autoOpen: false,
			show: "bounce",
			hide: "explode",
			modal: true
		});
		});
		$(function() {
		$("#newledger" ).dialog({
			autoOpen: false,
			show: "bounce",
			hide: "explode",
			modal: true
		});
		});
		$(function() {
		$("#newbed" ).dialog({
			autoOpen: false,
			show: "bounce",
			hide: "explode",
			modal: true
		});
		});
		
	</script>
    <script>$('#pnt4').parent().find('input:first').width(120);</script>
    <script type="text/javascript">

// The following should be put in your external js file,
// with the rest of your ondomready actions.
window.addEvent('domready', function(){

	$$('input.DatePicker').each( function(el){
	new DatePicker(el);
	});

});
$(function() {
		$( "#dialog-modal" ).dialog({
			height: 140,
			modal: true
		});
	});
</script>
	<script>
	$(function() {
		$( "#accordion" ).accordion({
			event: "click"
		});
		$( "#progressbar" ).progressbar({
			value: 100
		});
	});

	var def=0;

	</script>	
<script type="text/javascript">
$('#scrollbar1').live('mouseenter', function() {
$('#scrollbar1').tinyscrollbar();
});
$(document).ready(function(){
$('#scrollbar2').tinyscrollbar();	
});
function scroller2(){
$('#scrollbar2').tinyscrollbar();	
}

</script>
<script src="js/functions.js"></script>

<style>   
 	.vmenu{border:1px solid #ccc;position:fixed;top:0;left:0;background:#fff;	display:none;font-size:0.75em;}
       .vmenu .first_li{width:150px;display:block;padding:5px 10px;cursor:pointer;margin: 0;display: block;list-style: none;padding: 5px 5px;font-size:11px;  }
        
        .vmenu .first_li:hover,.vmenu .last_li:hover{background-color: #E0EDFE;}
</style>

<style>
.ui-progressbar .ui-progressbar-value { background-image: url(images/pbar-ani.gif);}
	.custom-combobox {
		position: relative;
		display: inline-block;
	}
	.custom-combobox-toggle {
		position: absolute;
		top: 0;
		bottom: 0;
		margin-left: -1px;
		padding: 0;
		/* support: IE7 */
		*height: 1.7em;
		*top: 0.1em;
	}
	.custom-combobox-input {
		margin: 0;
		padding: 0.0em 0.3em;
	}
	.ui-autocomplete {
	max-height: 150px;
		overflow-y: auto;
		/* prevent horizontal scrollbar */
		overflow-x: hidden;
}
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	-webkit-box-shadow: 0 0 5px #aaa;
	box-shadow: 0 0 5px #aaa;
}
body .ui-tooltip {
	border-width: 2px;
}
	</style>
 	
  <style>
	#resizable { width: 150px; height: 150px; padding: 0.5em; }
	#resizable h3 { text-align: center; margin: 0; }
	.ui-resizable-helper { border: 2px dotted #00F; }
	</style>	
    
    
<script>
	$(function() {
		$( "#sidep" ).resizable({
			animate: true,
			helper: "ui-resizable-helper",
			alsoResize: ".site",
			maxHeight: 480,
			maxWidth: 320,
			minHeight: 480,
			minWidth: 235
			
		});
		
		
		
	});
	
	</script>
    	<script>
	$(function() {
		$( "#show-option" ).tooltip({
			show: {
				effect: "slideDown",
				delay: 250
			}
		});
		$( "#hide-option" ).tooltip({
			hide: {
				effect: "explode",
				delay: 250
			}
		});
		$( "#sidep" ).tooltip({
			show: null,
			position: {
				my: "left top",
				at: "left bottom"
			},
			open: function( event, ui ) {
				ui.tooltip.animate({ top: ui.tooltip.position().top + 10 }, "fast" );
			}
		});
	});
	</script>  		
    <script type="text/javascript" src="js/nicEdit.js"></script>
<script>
var area1, area2,area3,area4,area5,area6,area7,area8,area9,area10,area11,area12,area13,area14,area15,;
</script>	

	
</head>
<body id="body"style="background-image: url(images/main-background.jpg); background-repeat: no-repeat; background-size: cover;" onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

<div id="templatemo_container"  class="site">
 <div id="header">
    	<div class="site" id="sitename_panel"><img src="images/applogo.png" style="width:50px;height:50px" /></div>
        
<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
               
          	<li><a class="patients"></a>
             <ul>
             <?php 
			 //check if cashier has ledger
			 	$cashacc=0;
			 	$result =mysqli_query($conn,"select * from ledgers");
				$num_results = mysqli_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
				$row=mysqli_fetch_array($result);
				if($username==substr(stripslashes($row['name']),0,5)){$cashacc=1;}
				}
			 
			 
			 	$arr=array();
				$result =mysqli_query($conn,"select * from accesstbl");
				$num_results = mysqli_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
					$var=stripslashes($row[$usertype]);
					$code=stripslashes($row['AccessCode']);
					$arr[$code]=$var;
				}
				
				
				
				
				
				if($arr[101]=='YES'){
					echo'<li><a onclick="newpatient();">Add new Patient</a>';
				}else echo'<li><p style="color:#ccc">Add new Patient</p></li>';
				if($arr[102]=='YES'){
				echo'<li><a onclick="editpatient(21);">Edit Patient Details</a></li>';
				}else echo'<li><p style="color:#ccc">Edit Patient Details</p></li>';
				if($arr[103]=='YES'){
				echo'<li><a onclick="editpatient(114);">Patient Chart</a></li>';
				}else echo'<li><p style="color:#ccc">Patient Chart</p></li>';
				if($arr[104]=='YES'){
				echo'<li><a onclick="findpatient();">Find Patient</a></li>';
				}else echo'<li><p style="color:#ccc">Find Patient</p></li>';
				if($arr[105]=='YES'){
				echo' <li><a onclick="editpatient(157);">Delete Patient Record</a></li>';
				}else echo'<li><p style="color:#ccc">Delete Patient Record</p></li>';

				if($arr[106]=='YES'){
				echo' <li><a onclick="appointments();">Appointments Calendar</a></li>';
				}else echo'<li><p style="color:#ccc">Appointments Calendar</p></li>';
				
              ?>
             </ul> 
            </li>
              <li><a class="consultations"></a>
                 <ul style="width:495px">
             <li style="width:164px; border-right:2px  dashed #000; float:left">
                <?php
              if($arr[106]=='YES'){
				echo' <a onclick="reception()">Reception</a>';
				}else echo'<p style="color:#ccc">Reception</p>';
				if($arr[112]=='YES'&&$cashacc==1){
				echo' <a onclick="payments();">Payments</a>';
				}else echo'<p style="color:#ccc">Payments</p>';


					if($arr[107]=='YES'){
				echo' <a onclick="triage()">Triage</a>';
				}else echo'<p style="color:#ccc">Triage</p>';
				  if($arr[108]=='YES'){
				echo"<a onclick=\"docexam('GENERAL CONSULTATIONS');\">Consultations</a>";
				}else echo'<p style="color:#ccc">Consultations</p>';
				if($arr[109]=='YES'){
				echo' <a onclick="labbill();">Lab Billing</a>';
				}else echo'<p style="color:#ccc">Lab Billing</p>';
				if($arr[109]=='YES'){
				echo' <a onclick="labrecep();">Lab Reception</a>';
				}else echo'<p style="color:#ccc">Lab Reception</p>';
				 if($arr[109]=='YES'){
				echo' <a onclick="labanal();">Lab Analysis</a>';
				}else echo'<p style="color:#ccc">Lab Analysis</p>';
				if($arr[110]=='YES'){
				echo' <a onclick="radbill();">Radiology Billing</a>';
				}else echo'<p style="color:#ccc">Radiology Billing</p>';

				if($arr[110]=='YES'){
				echo' <a onclick="radiology();">Radiology Analysis</a>';
				}else echo'<p style="color:#ccc">Radiology Analysis</p>';

				if($arr[111]=='YES'){
				echo'<a onclick="makeasale();">Pharmacy</a>';
				}else echo'<p style="color:#ccc">Pharmacy</p>';

				if($arr[151]=='YES'){
				echo' <a onclick="theatre();">Theatre</a>';
				}else echo'<p style="color:#ccc">Theatre</p>';
				if($arr[112]=='YES'){
				echo' <a onclick="consinv();">Consolidate Invoices</a>';
				}else echo'<p style="color:#ccc">Consolidate Invoices</p>';
				
				if($arr[113]=='YES'){
				echo' <a onclick="viewhistory();">Patient History</a>';
				}else echo'<p style="color:#ccc">Patient History</p>';
				
				if($arr[161]=='YES'){
				echo' <a onclick="stockitems();">Manage Billable Services</a>';
				}else{ echo'<p style="color:#ccc">Manage Billable Services</p>';}
				if($arr[130]=='YES'){
				echo' <a onclick="printreceipt();">Reprint Receipt/Invoice</a>';
				}else{ echo'<p style="color:#ccc">Reprint Receipt/Invoice</p>';}
				

				if($arr[159]=='YES'){
				echo"<a onclick=\"docexam('MCH');\">Mother Child Health</a>";
				}else echo'<p style="color:#ccc">Mother Child Health</p>';

				if($arr[195]=='YES'){
				echo"<a onclick=\"ccc()\">Comprehensive Care Center</a>";
				}else echo'<p style="color:#ccc">CCC</p>';

				if($arr[197]=='YES'){
				echo"<a onclick=\"nutrition()\">Nutrition</a>";
				}else echo'<p style="color:#ccc">Nutrition</p>';

				// if($arr[187]=='YES'){
				//echo' <a onclick="jobcard();">Bio Medical Job Cards</a>';
				//}else echo'<p style="color:#ccc">Bio Medical Job Cards</p>';

				
				
				


				echo' </li> <li style="width:164px;float:left; border-right:2px  dashed #000;">';

				


				
				if($arr[155]=='YES'){
				echo"<a onclick=\"docexam('DENTAL CLINIC');\">Dental Clinic</a>";
				}else echo'<p style="color:#ccc">Dental Clinic</p>';
				
				if($arr[175]=='YES'){
				echo"<a onclick=\"docexam('PAEDIATRICS');\">Paediatrics</a>";
				}else echo'<p style="color:#ccc">Paediatrics</p>';

				

				 if($arr[157]=='YES'){
				echo"<a onclick=\"docexam('EMERGENCIES');\">Emergencies</a>";
				}else echo'<p style="color:#ccc">Emergencies</p>';
				if($arr[158]=='YES'){
				echo"<a onclick=\"docexam('HDU');\">HDU</a>";
				}else echo'<p style="color:#ccc">HDU</p>';
				if($arr[173]=='YES'){
				echo"<a onclick=\"docexam('DIALYSIS');\">Dialysis</a>";
				}else echo'<p style="color:#ccc">Dialysis</p>';
				
				if($arr[174]=='YES'){
				echo"<a onclick=\"docexam('AMBULANCE');\">Ambulance</a>";
				}else echo'<p style="color:#ccc">Ambulance</p>';
				
				
				
				
					 
				
				 if($arr[187]=='YES'){
				echo' <a onclick="cssdbill();">Surgicals Billing</a>';
				}else echo'<p style="color:#ccc">Surgicals Billing</p>';
				
				if($arr[149]=='YES'){
				echo' <a onclick="nursing();">Corporate Billing/DayCare</a>';
				}else echo'<p style="color:#ccc">Corporate Billing/DayCare</p>';
				


				if($arr[193]=='YES'){
				echo' <a onclick="editpatient(160)">Social Works</a>';
				}else echo'<p style="color:#ccc">Social Works</p>';

			
				 
				
				if($arr[154]=='YES'){
				echo"<a onclick=\"docexam('EYE CLINIC');\">Eye Clinic</a>";
				}else echo'<p style="color:#ccc">Eye Clinic</p>';
				
				 if($arr[156]=='YES'){
				echo"<a onclick=\"docexam('PHYSIOTHERAPY');\">Physiotherapy</a>";
				}else echo'<p style="color:#ccc">Physiotherapy</p>';
				
				if($arr[193]=='YES'){
				echo"<a onclick=\"counselling()\">Counselling</a>";
				}else echo'<p style="color:#ccc">Counselling</p>';
				
				
				
				echo' </li>
				<li style="width:164px; border-right:0px dashed #000; float:left">';



				

				echo'<p style="color:#0085b2; text-decoration:underline">Inpatient Management</P>';
				
				if($arr[171]=='YES'){
				echo'<a onclick="editpatient(158);">Admit Patients</a>';
				}else echo'<p style="color:#ccc">Admit Patients</p>';
				if($arr[164]=='YES'){
				echo' <a onclick="inpatient();">Ward Manager</a>';
				}else echo'<p style="color:#ccc">Ward Manager</p>';
				 if($arr[114]=='YES'){
				echo' <a onclick="inbill();">Inpatients Charge Sheet</a>';
				}else echo'<p style="color:#ccc">Inpatients Charge Sheet</p>';
				if($arr[163]=='YES'){
				echo' <a onclick="treatchart();">Inpatient Treatment(Nurse)</a>';
				}else echo'<p style="color:#ccc">Inpatient Treatment(Nurse)</p>';

				if($arr[108]=='YES'){
				echo' <a onclick="treatchart2();">Inpatient Treatment(Doctor)</a>';
				}else echo'<p style="color:#ccc">Inpatient Treatment(Doctor)</p>';
					
				

				if($arr[170]=='YES'){
				echo' <a onclick="discharge();">Discharge Summary</a>';
				}else echo'<p style="color:#ccc">Discharge Summary</p>';
				
				 if($arr[190]=='YES'){
				echo' <a onclick="infinalbill();">Inpatients Final Bill</a>';
				}else echo'<p style="color:#ccc">Inpatients Final Bill</p>';
				
				if($arr[171]=='YES'){
				echo'<a onclick="admsumm1();">Discharge Patient</a>';
				}else echo'<p style="color:#ccc">Discharge Patient</p>';
				

				

				if($arr[190]=='YES'){
				echo'<a onclick="repgrn(7);">Reprint Final Bill</a>';
				}else echo'<p style="color:#ccc">Reprint Final Bill</p>';
				 
                	if($arr[115]=='YES'){
				echo' <a onclick="birthsregister();">Births Register</a>';
				}else echo'<p style="color:#ccc">Births Register</p>';
					if($arr[116]=='YES'){
				echo' <a onclick="editpatient(122);">Mortuary</a>';
				}else echo'<p style="color:#ccc">Mortuary</p>';
				echo' <a onclick="generalbill()">General Billing</a>'; 
				echo' <a onclick="referrals()">Refferal Patients</a>';
				


				
				
				echo' </li> ';
				
						 ?>
                </ul>
              </li>
             <li><a class="finance"></a>
                    <ul>
                     <?php
                  if($arr[117]=='YES'){
				echo' <li><a onclick="journalent();">Make Journal Entries</a></li>';
				}else echo'<li><p style="color:#ccc">Make Journal Entries</p></li>';
				 if($arr[118]=='YES'){
				echo'<li><a onclick="findentries();">Find Journal Entries</a></li>';
				}else echo'<li><p style="color:#ccc">Find Journal Entries</p></li>';
				 if($arr[119]=='YES'){
				echo'<li><a onclick="ledgers();">Ledgers Panel</a></li>';
				}else echo'<li><p style="color:#ccc">Ledgers Panel</p></li>';
				
				 if($arr[123]=='YES'){
				echo'<li><a onclick="creditcust();">Debtors Management</a></li>';
				}else echo'<li><p style="color:#ccc">Debtors Management</p></li>';
				 if($arr[162]=='YES'){
				echo'<li><a onclick="creditsup();">Creditors Management</a></li>';
				}else echo'<li><p style="color:#ccc">Creditors Management</p></li>';
				if($arr[162]=='YES'){
				echo'<li><a onclick="findinvoice();">Find Invoices</a></li>';
				}else echo'<li><p style="color:#ccc">Find Invoices</p></li>';
				//if($arr[132]=='YES'){
				//echo'<li><a onclick="issuecredit();">Pharmacy Credit Note</a></li>';
				//}else echo'<li><p style="color:#ccc">Pharmacy Credit Note</p></li>';
				
				 if($arr[178]=='YES'){
				echo'<li><a onclick="cashcollect();">Cash Collection</a></li>';
				}else echo'<li><p style="color:#ccc">Cash Collection</p></li>';
				if($arr[179]=='YES'){
				echo'<li><a onclick="expman();">Expenses Management</a></li>';
				}else echo'<li><p style="color:#ccc">Expenses Management</p></li>';
				if($arr[180]=='YES'){
				echo'<li><a onclick="bankdep();">Bank Deposits</a></li>';
				}else echo'<li><p style="color:#ccc">Bank Deposits</p></li>';
				?>
             	 </ul>
               </li>
              <li><a class="inventory"></a>
                <ul style="width:328px">
             	<li style="width:164px; border-right:2px  dashed #000; float:left">
             	 <p style="color:#0085B2; text-decoration:underline">Stock Management</p>
                <?php
				 if($arr[124]=='YES'){
				echo' <a onclick="finditem();">Find Stock Items</a>';
				}else echo'<p style="color:#ccc">Find Stock Items</p>';
          			if($arr[153]=='YES'){
					echo'<a onclick="addstockit();">Add/Edit Stock Items</a>';
					}else {echo'<p style="color:#ccc">Add/Edit Stock Items</p>';}
				 if($arr[126]=='YES'){
					echo'<a onclick="purchase();">Goods Received Inwards</a>';
				}else {echo'<p style="color:#ccc">Goods Received Inwards</p>';}
					 if($arr[128]=='YES'){
					echo'<a onclick="stockrequest();">Stock Request</a>';
					}else {echo'<p style="color:#ccc">Stock Request</p>';}
					 if($arr[128]=='YES'){
					echo'<a onclick="stocktransfer();">Stock Transfer </a>';
					}else {echo'<p style="color:#ccc">Stock Transfer</p>';}
					  if($arr[127]=='YES'){
				echo"<a onclick=\"stocktake()\">Stock Taking</a>";
				}else echo'<p style="color:#ccc">Stock Taking</p>';
				if($arr[185]=='YES'){
				echo"<a onclick=\"randomstocktake()\">Random Stock Take</a>";
				}else echo'<p style="color:#ccc">Random Stock Take</p>';
					  if($arr[165]=='YES'){
				echo'<a onclick="stockadj()">Stock Adjustment</a>';
				}else echo'<p style="color:#ccc">Stock Adjustment</p>';
				  if($arr[181]=='YES'){
				echo'<a onclick="stockval()">Stock Valuation</a>';
				}else echo'<p style="color:#ccc">Stock Adjustment</p>';
				if($arr[152]=='YES'){
				echo'<a onclick="stockusage()">Stock Usage Register</a>';
				}else echo'<p style="color:#ccc">Stock Usage Register</p>';
				if($arr[166]=='YES'){
				echo'  <a onclick="returnout();">Goods Returned Outwards</a>';
				}else echo'<p style="color:#ccc">Goods Returned Outwards</p>';
				  if($arr[129]=='YES'){
				echo'<a onclick="lpo();">Local Purchase Order</a>';
				}else echo'<p style="color:#ccc">Local Purchase Order</p>';
				?>
            	<li style="width:164px; float:left">
                 <p style="color:#0085B2; text-decoration:underline">Asset Management</p>
                      <?php
                 if($arr[200]=='YES'){
				echo' <a onclick="addasset();">Add New Asset</a>';
				}else echo'<p style="color:#ccc">Add New Asset</p>';
				if($arr[201]=='YES'){
				echo' <a onclick="editasset(113);">Edit Asset Details</a>';
				}else echo'<p style="color:#ccc">Edit Asset Details</p>';
				if($arr[202]=='YES'){
				echo' <a onclick="editasset(114);">Delete Asset</a>';
				}else echo'<p style="color:#ccc">Delete Asset</p>';
				if($arr[203]=='YES'){
				echo' <a onclick="findasset();">Find Assets</a>';
				}else echo'<p style="color:#ccc">Find Assets</p>';
				if($arr[204]=='YES'){
				echo' <a onclick="assignasset(117);">Assign Asset</a>';
				}else echo'<p style="color:#ccc">Assign Asset</p>';
				if($arr[205]=='YES'){
				echo' <a onclick="returnasset(119);">Return Asset</a>';
				}else echo'<p style="color:#ccc">Return Asset</p>';
				if($arr[206]=='YES'){
				echo' <a onclick="dispasset(144);">Dispose Asset</a>';
				}else echo'<p style="color:#ccc">Dispose Asset</p>';
				if($arr[207]=='YES'){
				echo' <a onclick="dispasset(121);">Manage Asset</a>';
				}else echo'<p style="color:#ccc">Manage Asset</p>';
				if($arr[208]=='YES'){
				echo' <a onclick="assetcount();">Asset Count</a>';
				}else {echo'<p style="color:#ccc">Asset Count</p>';}
				
				?>
                   </li>
                     </ul> 
            
              
              <li><a class="reports"></a> 
            <ul style="width:824px">
             <li style="width:164px; border-right:2px  dashed #000; float:left">
              <?php
			  if($arr[167]=='YES'){
				echo' <a onclick="cashierdaily()">Cashier Daily Summary</a>
				<a onclick="salesrep(10);">Unposted Entries</a>';
				}else echo'<p style="color:#ccc">Cashier Daily Summary</p>';
				if($arr[133]=='YES'){
				echo"<a onclick=\"threemonths();\">Several Months Summary</a>";
				echo' <a onclick="dailysumm()">Managerial Daily Summary</a>';
				echo'<a onclick="billdata()">Billing Data</a>
				<a onclick="nursedata()">Nursing Data</a>';
				//<a onclick="hospsummary()">Overview Summary</a>
				}else echo'<p style="color:#ccc">Managerial Summary</p>';
                  if($arr[133]=='YES'){
				echo' <p style="color:#0085b2; text-decoration:underline">Financial Statements</P>
                ';echo"<a onclick=\"finrep(25)\">Trial Balance</a>
                <a onclick=\"finrep(26)\">Income Statement</a>
              	<a onclick=\"finrep(27)\">Balance Sheet</a>";
               }else echo'<p style="color:#ccc">Financial Statements</p>';
				if($arr[135]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Income Report</p>
               ';echo" <a onclick=\"window.open('report.php?id=13&code=6');\">Today Income</a>";
                echo'<a onclick="salesrep(1);">All</a>
              	<a onclick="salesrep(2);">With Profit</a>
                <a onclick="salesrep(3);">With Loss</a>
                <a onclick="salesrepun(4);">By Cashier</a>
                <a onclick="salesun(5);">By Item</a>
				<a onclick="salesun2(7);">By Department</a>
				<a onclick="salesun3(8);">By Patient</a>
				<a onclick="salesun7(9);">By Doctor</a>
				
               ';
				}else echo'<p style="color:#ccc">Invoices/Receipts Report</p>';
				if($arr[177]=='YES'){
				echo'<a onclick="depincome(7)">Departmental Income</a>';
				}else {echo'<p style="color:#ccc">Departmental Income</p>';}
				
				if($arr[135]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Invoices Report</p>
               ';echo" <a onclick=\"window.open('report.php?id=63&code=1');\">Today Invoices</a>";
                echo'<a onclick="invoicerep(2);">All Invoices</a>
				<a onclick="invoicerep2(3);">By Company</a>
				<a onclick="invoicerep(4);">Receipts(Cash Paying)</a>
              	 ';
				}else {echo'<p style="color:#ccc">Invoices Report</p>';}
				
			
				echo'</li>
					 <li style="width:164px; border-right:2px  dashed #000; float:left">';
					if($arr[136]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Procurement</p>
               		 <a onclick="purchaserep(1,85);">Goods Received-All</a>
              		<a onclick="purchaserep(2,86);">Goods Received-By Item</a>
					<a onclick="purchaserep(3,87);">Goods Received-By Supplier</a>
					
					  <a onclick="returnrep(1,66);">Goods Returned-All</a>
              		<a onclick="returnrep(2,67);">Goods Returned-By Item</a>
					<a onclick="returnrep(3,68);">Goods Returned-By Supplier</a>
					
					<a onclick="repgrn(1);">Reprint GRN(Received)</a>
					<a onclick="repgrn(2);">Reprint GRN(Returned)</a>
					<a onclick="repgrn(3);">Reprint LPO</a>
					<a  onclick="lposumm(5)">LPO Summaries</a>
					<a onclick="invoicelist();">Invoice Listing-Inwards</a>
					<a onclick="invoicelist2();">Invoice Listing-Outwards</a>
					<a onclick="bincard();">Summarized Bin Card</a>';
					echo"<a onclick=\"window.open('report.php?id=55&code=1')\">Inventory-All</a>";
					echo'<a onclick="invrep2(2);">Inventory-By Category</a>
					<a onclick="invrep3(3);">Inventory-By Supplier</a>
					<a onclick="expreport();">Expiry Report</a>
               
                ';
				}else echo'<p style="color:#ccc">Procurement</p>';
				if($arr[186]=='YES'){
				echo'<a  onclick="repgrn(5)">Reprint Variance Report</a>';
				}else echo'<p style="color:#ccc">Reprint Variance Report</p>';
				if($arr[186]=='YES'){
				echo'<a  onclick="varsum(5)">Variance Reports</a>';
				}else echo'<p style="color:#ccc">Variance Reports</p>';
				if($arr[186]=='YES'){
				echo'<a  onclick="varsum2(5)">Variance Summaries</a>';
				}else echo'<p style="color:#ccc">Variance Summaries</p>';
				
				 if($arr[188]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Goods Price List</p>';
                  echo" <a onclick=\"window.open('output.php?id=8&code=1')\">All</a>";
              		echo'<a onclick="goodspricelist(2);">By Section</a>
                ';
				}else {echo'<p style="color:#ccc">Stock Price List</p>';}
				 
				
				
				 echo'</li>
				   
				   
					 <li style="width:160px; border-right:2px  dashed #000; float:left">';
					 
			
			
				echo'<p style="color:#0085b2; text-decoration:underline">HR Reports</p>';
				
				  if($arr[138]=='YES'){
					echo'  <a onclick="monthrep()">Detailed Monthly Report</a>
					<a onclick="monthbank()">Monthly Bank Summary</a>
					<a onclick="monthind()">Individual Bank Report</a>';
						echo"<a onclick=\"window.open('hroutput.php?id=16&code=1')\">Salaries Summary</a>";
                 echo' <a onclick="employeesum()">Employee Summary</a>
                <a onclick="indpayslip()">Individual Pay Slips</a>
					<a onclick="payslip()">All Pay Slips</a>
					 <a onclick="attendancerep()">Attendance Report</a>
					 <a onclick="leaverep()">Leave Report</a>
					 <a onclick="emplist()">Employees List</a>
					  <a onclick="payerep()">Monthly Deductions Report</a>
					 <a onclick="pnine()">P9A Reports</a>
					 <a onclick="pten()">P10 Reports</a>
					 <a onclick="ptena()">P10A Reports</a>
					 ';
					    }else {echo'<p style="color:#ccc">HR Reports</p>';}
				
				echo'<p style="color:#0085b2; text-decoration:underline">Other Reports</p>
				';
				if($arr[146]=='YES'){
				echo'<a  onclick="stockuserep()">Stock Usage Report</a>';
				}else {echo'<p style="color:#ccc">Stock Usage  Report</p>';}
				
				 if($arr[139]=='YES'){
				echo'<a onclick="ledrep()">Ledger Reports</a>';
				}else echo'<p style="color:#ccc">Ledger Reports</p>';
				if($arr[139]=='YES'){
				echo'<a onclick="exprep()">Expenses Reports</a>';
				}else echo'<p style="color:#ccc">Expenses Reports</p>';
				  if($arr[176]=='YES'){
				echo'<a onclick="queuerep()">Queue Reports</a>';
				}else echo'<p style="color:#ccc">Queue Reports</p>';
				echo'<a onclick="mesrep(2)">Message Reports</a>';
				   if($arr[145]=='YES'){
				echo'<a onclick="logrep()">Activity Log-All</a>';
				}else echo'<p style="color:#ccc">Activity Log-All</p>';
				 if($arr[145]=='YES'){
				echo'<a onclick="logrepuser()">Activity Log By User</a>';
				}else echo'<p style="color:#ccc">Activity Log  By User</p>';
				if($arr[168]=='YES'){
				echo"<a onclick=\"window.open('report.php?id=32&code=1')\">Debtors List</a>";
				}else echo'<p style="color:#ccc">Debtors List</p>';
				if($arr[143]=='YES'){
				echo"<a onclick=\"window.open('report.php?id=57&code=1')\">System Users List</a>";
				}else echo'<p style="color:#ccc">System Users  List</p>';
				if($arr[169]=='YES'){
				echo"<a onclick=\"window.open('report.php?id=33&code=1')\">Creditors List</a>";
				}else {echo'<p style="color:#ccc">Creditors List</p>';}
			
			if($arr[182]=='YES'){
				echo'<a onclick="invmov();">Stock Movement Report</a>';
				}else {echo'<p style="color:#ccc">Stock Movement Report</p>';}

				 echo'<a onclick="refrep()">Refferal Report</a>';
				
				  
				
				
			
				
				
				echo'</li>

				 <li style="width:160px; border-right:2px  dashed #000; float:left">';
					 
			 if($arr[193]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Social Works Report</p>';
                 
              		echo'<a onclick="waiverrep();">Waiver Reports</a>
              		<a onclick="counsrep();">Counselling Reports</a>';
				}else {echo'<p style="color:#ccc">Social Works Report</p>';}	
			if($arr[109]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Lab Reports</p>
				 	<a onclick="labrep1()">All Tests</a>
                     <a onclick="labrep2()">By Source</a>
                    <a onclick="labrep3()">By Test</a>
				  <a onclick="labrep4()">By Sample</a>
				   <a onclick="labrep5()">By Patient</a>
					 <a onclick="labrep6()">By Section</a>';
				}else{ echo'<p style="color:#ccc">Lab Reports</p>';}

				if($arr[110]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Radiology Reports</p>
				 	<a onclick="radrep1()">All Tests</a>
                     <a onclick="radrep2()">By Test</a>
				   <a onclick="radrep3()">By Patient</a>';
				}else{ echo'<p style="color:#ccc">Radiology Reports</p>';}

				if($arr[111]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Pharmacy Reports</p>
				 	<a onclick="pharmrep1()">All Prescriptions</a>
                    <a onclick="pharmrep2()">By Patient</a>';
				}else{echo'<p style="color:#ccc">Pharmacy Reports</p>';}

				if($arr[111]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Theatre Reports</p>
				 	<a onclick="theatrep1()">All Procedures</a>
                    <a onclick="theatrep2()">By Patient</a>';
				}else{echo'<p style="color:#ccc">Theatre Reports</p>';}

				 if($arr[188]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Services Price List</p>';
                  echo" <a onclick=\"window.open('report.php?id=16&code=1')\">All</a>";
              		echo'<a onclick="pricelist(2);">By Dept</a>
                ';
				}else {echo'<p style="color:#ccc">Stock Price List</p>';}	
				
				
		
				 
				
				
				echo'</li>
				
				 <li style="width:160px; border-right:0px  dashed #000; float:left">
				 <p style="color:#0085b2; text-decoration:underline">Records Reports</p>';
				 
					if($arr[190]=='YES'){
				echo'<a onclick="repgrn(6);">Reprint Admisssion Form</a>
				<a onclick="repgrn(4);">Reprint Discharge Summ</a>';}
				
				if($arr[141]=='YES'){
				echo'<a onclick="diagrep()">Diagnosis Reports (OPD)</a>
				<a onclick="birthrep()">Births Reports</a>
				<a onclick="deathrep()">Deaths Reports</a>';
                   echo"<a onclick=\"patlist()\">All Patients</a>";
					echo'<a onclick="patientrep(1);">Outpatients Summary</a>
					<a onclick="patientrep(4);">Unregistered Patients</a>
					<a onclick="patientrev(3);">Patients Review Report</a>';
					}else {echo'<p style="color:#ccc">Records Reports</p>';}

				
				if($arr[141]=='YES'){
				echo'<a onclick="admrep()">Inpatient Discharges</a>
				<a onclick="inpatlist()">In-Patients List</a>
				<a onclick="diagrep2()">Diagnosis Reports (IPD)</a>
				<a onclick="patientrep(2);">Inpatients Summary</a>';
               	}else {echo'<p style="color:#ccc">Records Reports</p>';}
               	
				
			
				
			if($arr[128]=='YES'){
				echo'<p style="color:#0085b2; text-decoration:underline">Stock Transfer Report</p>
				 <a onclick="issuerep1(1);">Stock Transfer-All</a>
					<a onclick="issuerep2(2);">Stock Transfer-By Dept</a>
                  <a  onclick="transfersumm(5)">Transfer Summaries</a>
				';
				}else echo'<p style="color:#ccc">Stock Transfer Report</p>';
				if($arr[128]=='YES'){
				echo'<a  onclick="depbincard()">Bin Card</a>';
				}else echo'<p style="color:#ccc">Bin Card</p>';
				
				
				
				if($arr[184]=='YES'){
				echo'<a onclick="reorder1(1);">Re-Order Level-By Section</a>
					<a onclick="reorder(2);">Re-Order Level-By Supplier</a>';
				}

				echo'<p style="color:#0085B2; text-decoration:underline">Assets Reports</p>';
					   if($arr[209]=='YES'){
					echo'<a onclick="asslist(2);">Asset List-All</a>
					<a onclick="asstrack(2);">Asset Tracking</a>';
					    }else {echo'<p style="color:#ccc">Assets Reports</p>';}


				
				
			
				
			echo'	
				</li>
				';
				 
				
				?>
                </ul>
                </li>
                <li><a class="employees"></a>
              <ul style="width:495px">
             	<li style="width:164px; border-right:2px  dashed #000; float:left">
                        <?php
                 if($arr[142]=='YES'){
				echo' <a onclick="newemp();">Add New Employee</a>';
				}else echo'<p style="color:#ccc">Add New Employee</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="seeemp(61);">Edit Employee Info</a>';
				}else echo'<p style="color:#ccc">Edit Employee Info</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="findemp();">Find Employee</a>';
				}else echo'<p style="color:#ccc">Find Employee</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="seeemp(74);">Delete Employee Record</a>';
				}else echo'<p style="color:#ccc">Delete Employee Record</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="seeemp(62.1);">Employee Chart</a>';
				}else echo'<p style="color:#ccc">Employee Chart</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="terminate();">Terminate Employment</a>';
				}else echo'<p style="color:#ccc">Terminate Employment</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="documents();">Download H/R Documents</a>';
				}else echo'<p style="color:#ccc">Download H/R Documents</p>';
				  if($arr[142]=='YES'){
				echo' <a onclick="exemp();">Ex-Employees Panel</a>';
				}else {echo'<p style="color:#ccc">Ex-Employees Panel</p>';}
				
				?>
           </li>
                    
              <li style="width:164px; float:left;border-right:2px  dashed #000;">
                    <?php
                 if($arr[142]=='YES'){
				echo' <a onclick="takeatt();">Attendance Manager</a>';
				}else echo'<p style="color:#ccc">Attendance Manager</p>';
				 if($arr[198]=='YES'){
				echo' <a onclick="reqleave();">Request for Leave</a>';
				}else echo'<p style="color:#ccc">Request for Leave</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="authleave();">Authorize Leave</a>';
				}else echo'<p style="color:#ccc">Authorize Leave</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="leavecal();">Leave Calendar</a>';
				}else echo'<p style="color:#ccc">Leave Calendar</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="newpay();">New Payroll</a>';
				}else echo'<p style="color:#ccc">New Payroll</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="editpay();">Edit Payroll</a>';
				}else echo'<p style="color:#ccc">Edit Payroll</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="paysett();">Payroll Settings</a>';
				}else echo'<p style="color:#ccc">Payroll Settings</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="empben();">Employee Benefits</a>';
				}else {echo'<p style="color:#ccc">Employee Benefits</p>';}
				?>
               </li>
               <li style="width:164px; float:left">
               <p style="color:#0085b2; text-decoration:underline">External Medics</p>
                    <?php
                if($arr[142]=='YES'){
				echo'<a onclick="newextmedic();">Add/Edit External Medics</a>';
				}else echo'<p style="color:#ccc">Add/Edit External Medics</p>';
				 if($arr[142]=='YES'){
				echo' <a onclick="locregister();">Locums Register</a>';
				}else echo'<p style="color:#ccc">Locums Register</p>';



				 if($arr[106]=='YES'){
				echo' <a onclick="locin();">Locum Check-in</a>';
				}else echo'<p style="color:#ccc">Locum Check-in</p>';
				 if($arr[106]=='YES'){
				echo' <a onclick="locout();">Locum Check-out</a>';
				}else echo'<p style="color:#ccc">Locum Check-out</p>';
				?>
               </li>
              	</ul>
              </li>
             <li><a class="settings"></a>
              <ul>
               <?php
			  	if($arr[143]=='YES'){
				echo'<li><a onclick="company();">Company Details</a></li>';
				}else echo'<li><p style="color:#ccc">Company Details</p></li>';
				if($arr[143]=='YES'){
				echo'<li><a onclick="adduser();">System Users Manager</a></li>';
				}else echo'<li><p style="color:#ccc">System Users Manager</p></li>';
				if($arr[143]=='YES'){
				echo'<li><a onclick="useraccess();">User Access Rights</a></li>';
				}else echo'<li><p style="color:#ccc">User Access Rights</p></li>';
				if($arr[143]=='YES'){
				echo'<li><a onclick="itemaccess();">Items Access Rights</a></li>';
				}else echo'<li><p style="color:#ccc">Items Access Rights</p></li>';
				if($arr[144]=='YES'){
				echo'<li><a onclick="changelogin();">Change Password</a></li>';
				}else echo'<li><p style="color:#ccc">Change Password</p></li>';
				if($arr[201]=='YES'){
				echo' <li><a onclick="editvariables();">Edit System Variables</a></li>';
				}else echo'<li><p style="color:#ccc">Edit System Variables</p></li>';
				if($arr[143]=='YES'){
				echo'<li><a onclick="setupbeds();">Set Ward Beds</a></li>';
				}else echo'<li><p style="color:#ccc">Set Ward Beds</p></li>';
				
				if($arr[143]=='YES'){
				echo'<li><a onclick="setupcomp();">Set up Comp IPS</a></li>';
				}else echo'<li><p style="color:#ccc">Set up Comp IPS</p></li>';
				
				if($arr[143]=='YES'||$arr[142]=='YES'){
				echo'<li><a onclick="setupbank();">Set up Banks</a></li>';
				}else echo'<li><p style="color:#ccc">Set up Banks</p></li>';
				
				if($arr[148]=='YES'){
				echo' <li><a onclick="notes();">Medical Notes</a></li>';
				}else echo'<li><p style="color:#ccc">Deaths Register</p></li>';  
				if($arr[144]=='YES'){
				echo'<li><a onclick="addmedical();">Add/Edit Medical Data</a></li>';
				}else echo'<li><p style="color:#ccc">Add/Edit Medical Data</p></li>';
				
				if($arr[143]=='YES'){
				echo"<li><a onclick=\"window.open('http://$server/phpmyadmin/index.php?token=fd48725802dc5e54c6495e7c509943ff#PMAURL:server=1&target=server_import.php&token=fd48725802dc5e54c6495e7c509943ff');\">Import Database</a></li>
                   <li><a onclick=\"window.open('http://$server/phpmyadmin/index.php?db=qafya&token=0b8f67207311cbf3278b4a49eb48f627#PMAURL:db=qafya&server=1&target=db_export.php&token=0b8f67207311cbf3278b4a49eb48f627');\">Export Database</a></li>";
             }else echo'<li><p style="color:#ccc">Database Manager</p></li>';
				?>
              	 </ul>
                </li>
                
             </ul>    	

          <div class="cleaner"></div>  	
          
        </div>
        

  </div><!--end header-->
  <div class="cleaner"></div> 
 <div id="sidep" style="overflow:hidden" title="">
  <div class="demo">
  <div style="width:auto; height:40px; border:1px solid #0085b2; background:#fff; padding:0 0px; border-radius:0px">
  <?php 
  	
	echo'<img src="'.$photo.'" style="float:left;max-height:40px;">
	<p style="margin-left:10px; color:#0085b2; font-size:11px; margin-top:3px; float:left">Logged in as: '.$username.'<br/>
	<small style="size:10px">Dept:'.$userdep.'</small></p>';
	?>
   
  </div>
  <?php
$result =mysqli_query($conn,"select * from company");
$row=mysqli_fetch_array($result);

  ?>
<div style="height:105px; border:1px solid #125d30; background:#fff; padding:0 0px; border-radius:0px;margin-top:5px">
 <img src="<?php echo stripslashes($row['Logo']) ?>" style="float:left;max-height:85px; margin:0px 10px 0 0px"/>
 <p style="font-size:11px; margin-top:20px; margin-right:5px; color:#000">This copy is licensed to:<br/><strong style="font-size:15px;color:#333;"><?php echo strtoupper(stripslashes($row['CompanyName'])) ?><br/></strong></p>
</div>
<h2 style="color:#fff;margin:7px 0 7px 5px">Quick Access Panel</h2>
<div id="accordion">
<h3 ><a style="color:#fff" href="#">Start a Task</a></h3>
	<div>
    <img src="images/profile.png" style="width:17px; height:17px; margin-top:0px; float:left"/>
	<a id="sidelink" style="float:left; margin:1px 0 0 5px; font-size:11px; color:#000;cursor:pointer; text-decoration:none" onclick="homepage();">Dashboard</a>
    <div class="cleaner" style="margin-bottom:5px"></div> 
	<img src="images/plus.png" style="width:17px; height:17px; margin-top:0px; float:left"/>
	<a id="sidelink" style="float:left; margin:1px 0 0 5px; font-size:11px; color:#000;cursor:pointer; text-decoration:none" onclick="newpatient();">Register Patient</a>
    <div class="cleaner" style="margin-bottom:5px"></div> 
    <img src="images/att.jpg" style="width:17px; height:17px; margin-top:0px; float:left"/>
	<a id="sidelink" style="float:left; margin:1px 0 0 5px; font-size:11px; color:#000; cursor:pointer; text-decoration:none" onclick="reception();">Reception</a>
    <div class="cleaner" style="margin-bottom:5px"></div> 
    <img src="images/attend.png" style="width:17px; height:17px; margin-top:0px; float:left"/>
	<a id="sidelink" style="float:left; margin:1px 0 0 5px; font-size:11px; color:#000; cursor:pointer; text-decoration:none" onclick="appointments();">Appointments</a>
    <div class="cleaner" style="margin-bottom:5px"></div> 
     <img src="images/delete.png" style="width:17px; height:17px; margin-top:0px; float:left"/>
	<a id="sidelink" style="float:left; margin:1px 0 0 5px; font-size:11px; color:#000; cursor:pointer; text-decoration:none" onclick="hidenewstude();">Exit Main Display</a>
    <div class="cleaner" style="margin-bottom:5px"></div> 
  	</div>
	<h3 style="color:#fff"><a style="color:#fff" href="#">Quick Item Find</a></h3>
	<div>
	  <div class="ui-widget" style="margin-left:-12px">
	<select id="item1">
		<option value="">Select one...</option>
        <?php
		$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['ItemCode']).'">'.stripslashes($rowa['ItemName']).'</option>';
							}
		?>
	</select>
	</div>
	</div>
    <h3 style="color:#fff"><a style="color:#fff" href="#">Quick Patient Find</a></h3>
            <div style="height:70px">
             
            </div>
            
            <h3 style="color:#fff"><a style="color:#fff" href="#">Ongoing Notifications</a></h3>
            <div>
                        <?php 
echo'<div id="chata" style="height:90px; padding-bottom:5px;" ondblclick="refreshchat();" onmouseenter="scroller2();" title="Double Click to Refresh">
		<div id="scrollbar2" style="width:200px; height:90px" >
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
										
										
								echo'</div></div></div>	</div><div class="cleaner"></div> 
		
		<form action="#" method="get">
		<div id="search" class="input_field" style="float:left;margin:10px;width:180px; padding:0">
		<input type="text" placeholder="Write Something..." name="keyword" id="comme"  class="input_field" style="border:0; float:left;width:130px;"';echo"/>";
		echo'<input type="text"  id="" class="" style="font-size:12px; display:none; width:50px"/>';
				echo"<img src=\"images/back2.png\" onclick=\"postchat('".$username."')\" height=\"24\" width=\"24\" id=\"searchbutton\" style=\"margin:3px 5px 0 0; float:right; cursor:pointer\">
				</div></form>";
				echo'<div id="xclusive" style="width:50px; height:50px; display:none"></div>';
?>  
   
         </div>

</div>

</div><!-- End demo -->

  </div>
   <div id="mainp">

				
   
     
   
   
<div id="progressbar" style="width:190px;margin-top:22%;margin-left:39%">
<div style="float:left; margin-top:3px;  margin-left:5px;color:#0085b2; font-weight:bold">Loading Dashboard...Kindly Wait</div></div>



        
        
        
  
 </div>
    		<div id="mytask" title="Task Reminder"></div> 
                  <div id="mycalendar" title="Event/Appointment Reminder"></div>          
                
    <div class="cleaner"></div> 
     <div id="bottomp" class="site">
            <div id="footer_menul" class="ddsmoothmenu">
                    <ul>
                        <li><a onclick="logout()" class="logout"></a></li>  
                    
                     </ul>
             </div>
             <div id="footer_menuc" class="ddsmoothmenu">
             <div id="clock">
             <SCRIPT LANGUAGE="JavaScript">var clocksize=60;</SCRIPT>
			<SCRIPT LANGUAGE="JavaScript">
            var clocksize;
			if(!clocksize||clocksize=='SIZE')clocksize='100';
			
			document.write('<OBJECT CLASSID="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" CODEBASE="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="'+clocksize+'" HEIGHT="'+clocksize+'"  BGCOLOR="#FFFFFF">');
			
			document.write('<PARAM NAME="movie" VALUE="clockswf.swf">');
			document.write('<PARAM NAME="quality" VALUE="high">');
			document.write('<PARAM NAME="color" VALUE="#FFFFFF">');
			document.write('<PARAM NAME="wmode" VALUE="transparent">');
			document.write('<PARAM NAME="menu" VALUE="false">');
			
			document.write('<EMBED SRC="clockswf.swf" WIDTH="'+clocksize+'" HEIGHT="'+clocksize+'" QUALITY="high" WMODE="transparent" MENU="false" BGCOLOR="#FFFFFF"></EMBED>');
			
			document.write('</OBJECT>');
            
            </SCRIPT>
            </div>
             </div>
             <div id="footer_menur" class="ddsmoothmenu">
                    <ul>
                  <li><input type="button"  id="datepickermain" class="datepick" style="font-size:0px"/></li>
                	
                         
                         
                    </ul>
             </div>
  	</div>
    <div class="cleaner"></div>
    
</div><!--end container-->
<div id="warddialog" title="Assign a Bed">
<a class="labels" style="">Bed No:</a>
<input type="text" id="bednoo"  class="in_field" value="" style="width:120px;float:right; margin-right:10px; border-color:#f00" disabled="disabled"/> 
<input type="text" id="a"  class="in_field" value="" style="display:none"/> 
<div class="cleaner_h10"></div>
<a class="labels" style="">Room No:</a>
<input type="text" id="roomno"  class="in_field" value="" style="width:120px;float:right; margin-right:10px ;border-color:#f00" disabled="disabled"/> 
<div class="cleaner_h10"></div>
<a class="labels" style="">Room Type:</a>
<input type="text" id="roomtype"  class="in_field" value="" style="width:120px;float:right; margin-right:10px; border-color:#f00" disabled="disabled"/> 
<div class="cleaner_h10"></div>
<a class="labels" style="">Ward Type:</a>
<input type="text" id="wardtype"  class="in_field" value="" style="width:120px;float:right; margin-right:10px; border-color:#f00" disabled="disabled"/> 
<input type="hidden" id="bbid"/>
<div class="cleaner_h10"></div>
 <a class="labels" style="">Patient:<span>*</span></a><div class="cleaner"></div>
<div id="yepyep">

</div>
 <div class="cleaner_h10"></div>
<input type="button" value="Submit" style="float:left; margin-left:80px; cursor:pointer; width:80px" class="select" onclick="admitpatient();"/>
<div id="wod" style="float:right;height:20px; "></div>	
 </div>
 
 
 <!-- New Ledger -->
  <div style="display:none" id="newledger" title="Add New Ledger"/>
    <a class="labels">Ledger Name:<span>*</span></a>
  <input type="text" id="ledgername" class="input_field" style="width:250px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Ledger Type:<span>*</span></a>
 <select class="select" id="ledgertype" style="width:150px;">
										<option value="Asset">Asset</option>
										<option value="Liability">Liability</option>
										<option value="Revenue">Revenue</option>
										<option value="Equity">Equity</option>
										<option value="Expense">Expense</option>
										</select> 
	<div class="cleaner_h10"></div>
     <a class="labels">Category:<span>*</span></a>
 <select class="select" id="ledgercat" style="width:150px; margin-left:20px">
										<option value="Other">Other</option>
										<option value="Cashier">Cashier</option>
										<option value="Bank">Bank</option>
										</select> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="addnewledger()"/>
 <div id="newled" style="float:right"></div>
  </div>
 
   <!-- Admin Authorization -->
  <script>
  $('#adminauth').live('keydown', function(evt) {
	if (!evt) evt = event;
	if (evt.keyCode==13){ 
	adlog();
	}
});
		</script>
  <div style="display:none" id="adminauth" title="Function Authorization"/>
    <a class="labels" style="text-decoration:blink">User Name:<span>*</span></a>
  <input type="text" id="adname" class="input_field" style="width:150px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Password:<span>*</span></a>
  <input type="password" id="adpass" class="input_field" style="width:150px; margin-left:10px"/> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="adlog()"/>
 <div id="adlog" style="float:right"></div>
  </div>
  
  
   <div style="display:none" id="adminauth2" title="Function Authorization"/>
    <a class="labels" style="text-decoration:blink">User Name:<span>*</span></a>
  <input type="text" id="adname2" class="input_field" style="width:150px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Password:<span>*</span></a>
  <input type="password" id="adpass2" class="input_field" style="width:150px; margin-left:10px"/>
  <input type="hidden" id="authid"/> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="adlog2()"/>
 <div id="adlog2" style="float:right"></div>
  </div>

   <div style="display:none" id="searchappoint" title="Search Appointments"/>
    <a class="labels" style="text-decoration:blink">From:<span>*</span></a>
   <input type="text" id="date1" class="input_field datepicker" style="width:150px;float:right"/> 
	<div class="cleaner_h10"></div>
     <a class="labels" style="text-decoration:blink">To:<span>*</span></a>
   <input type="text" id="date2" class="input_field datepicker" style="width:150px;float:right"/> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="searchappointments()"/>
 <div id="searchap" style="float:right"></div>
  </div>

  
  
  <div  style="display:none" id="addnewday" title="Add New Day-Drug Record"/>
    <a class="labels" style="text-decoration:blink">Day:<span>*</span></a>
  <input type="text" id="datepick16" class="input_field" style="width:150px"/> 
  <input type="hidden" id="daycode"/>
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="adsiku()"/>
 <div id="adsiku" style="float:right"></div>
  </div>
 
 <div style="display:none" id="messagelog" title="New Message Alert">
    <a class="labels" id="mess"></a>
    <div id="messaudio" style="float:right"></div>
  </div>
    <div style="display:none" id="newmessage" title="Create New Message"/>
      <a class="labels">To:<span>*</span></a>
   <?php 
echo'<div class="ui-widget" style="margin:0 10px 0 0px;  float:left; width:120px">
	<select id="user1">
		<option value="">Select one...</option>';
	$resulta =mysqli_query($conn,"select * from users where name!='".$username."' order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$resultb =mysqli_query($conn,"select * from logintable where username='".stripslashes($rowa['name'])."'");
								if(mysqli_num_rows($resultb)>0){
								echo'<option value="1'.stripslashes($rowa['name']).'" style="font-weight:bold"><b>'.stripslashes($rowa['name']).'-'.stripslashes($rowa['fullname']).' ['.stripslashes($rowa['dept']).']....Online</b></option>';
								}else{
								echo'<option value="1'.stripslashes($rowa['name']).'"><b>'.stripslashes($rowa['name']).'-'.stripslashes($rowa['fullname']).' ['.stripslashes($rowa['dept']).']</option>';	
								}
							}
							
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"2".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo"<option value=\"3All\">Everyone</option>";
	echo'</select>
	</div>
		<div class="cleaner_h5"></div>
	<form action="#" method="get">
	<a class="labels">Message:<span>*</span></a>
		<div class="cleaner"></div>
		<div id="taskadd" class="input_field" style="float:left;margin:5px 10px 10px 0px;width:330px; padding:0; background:#fff">
		<textarea  id="mezzage"  class="input_field" style="border:0; float:left;width:280px; font-size:11px;background:#fff; height:60px"';echo"></textarea>";
		echo'<input type="text"  id="" class="" style="font-size:12px; display:none; width:50px"/>';
				echo"<img src=\"images/back2.png\" title=\"Send Message\" onclick=\"sendmessage('".$username."')\" height=\"24\" width=\"24\" id=\"searchbutton\" style=\"margin:3px 5px 0 0; float:right; cursor:pointer\">
				</div>";                
 ?> 
  
  </div>
  
   <!-- New Bed -->
  <div style="display:none" id="newbed" title="Add New Bed"/>
    <a class="labels">Bed No:<span>*</span></a>
  <input type="text" id="bedno1" class="input_field" style="width:150px; float:right; margin-right:10px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Room No:<span>*</span></a>
  <input type="text" id="roomna2" class="input_field" style="width:150px; float:right; margin-right:10px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Room Type:<span>*</span></a>
 <select class="select" id="roomtyp1" style="width:150px; float:right; margin-right:10px">
										<option value="male">male</option>
										<option value="female">female</option>
                                        <option value="either">Either</option>
	</select> 
	<div class="cleaner_h10"></div>
      <a class="labels">Ward Type:<span>*</span></a>
 <select class="select" id="wardtyp1" style="width:150px; float:right; margin-right:10px">
								<option value="MALE_WARD">MALE WARD</option>
								<option value="FEMALE_WARD">FEMALE WARD</option>
								<option value="SURGICAL_WARD">SURGICAL_WARD</option>
								<option value="MATERNITY">MATERNITY</option>
								<option value="PAEDIATRICS">PAEDIATRICS</option>
	</select> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="addnewbed()"/>
 <div id="newward" style="float:right"></div>
  </div>
  
  
   <!-- New Computer -->
  <div style="display:none" id="addnewcomp" title="Add New Computer"/>
    <a class="labels">Name:<span>*</span></a>
  <input type="text" id="compname" class="input_field" style="width:150px; float:right; margin-right:10px"/> 
	<div class="cleaner_h10"></div>
    <a class="labels">Dept:<span>*</span></a>
    <?php
	$arr=array();
	$result =mysqli_query($conn,"select * from branchtbl");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[]=stripslashes($row['Branchname']);
							}
	?>
 <select class="select" id="compdep" style="width:250px; float:right; margin-right:10px">
										<option value="male">TRIAGE</option>
										<option value="female">GENERAL CONSULTATIONS</option>
                                        <?php
										foreach ($arr as $key => $val) {echo"<option value=\"".$val."\">".$val."</option>";}
										?>
	</select> 
	<div class="cleaner_h10"></div>
    <a class="labels">IP:<span>*</span></a>
  <input type="text" id="compip" class="input_field" style="width:150px; float:right; margin-right:10px"/> 
	<div class="cleaner_h10"></div>
    
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="addnewcomp()"/>
 <div id="newcomp" style="float:right"></div>
  </div>
  
     <!-- New Bank -->
  <div style="display:none" id="addnewbank" title="Add New Bank"/>
    <a class="labels">Name:<span>*</span></a>
  <input type="text" id="bankname" class="input_field" style="width:250px; float:right; margin-right:10px"/> 
	<div class="cleaner_h10"></div>
 <img src="images/subm.jpg" style="width:60px; height:30px; margin-left:100px; cursor:pointer" onclick="addnewbank()"/>
 <div id="newbank" style="float:right"></div>
  </div>


  <?php                
//check if month is registered in attendancelog
	$cur=date('m_Y');
	$arr=array();
	
	$result =mysqli_query($conn,"select * from attendancelog");
	$num_results = mysqli_num_rows($result);	
	for ($i=0; $i <$num_results; $i++) {
	$row=mysqli_fetch_array($result);
	$mon=stripslashes($row['month']);
		if($mon==$cur){
			$arr[]=$mon;
		}
	}
	if(count($arr)==0){
	$result = mysqli_query($conn,"insert into attendancelog values('','".$cur."',0)");
	$resultb = mysqli_query($conn,"CREATE TABLE qafya.".$cur." (id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY) AS (SELECT * FROM attendance)");
	$resultc =mysqli_query($conn,"select * from employee where status=1 order by branch");
									$num_resultsc = mysqli_num_rows($resultc);
									for ($a=0; $a <$num_resultsc; $a++) {
									set_time_limit (0);
									$rowb=mysqli_fetch_array($resultc);
									$name=stripslashes($rowb['fname']).' '.stripslashes($rowb['mname']).' '.stripslashes($rowb['lname']);
								$resultd = mysqli_query($conn,"insert into ".$cur." values('','".stripslashes($rowb['emp'])."','".stripslashes($rowb['branch'])."','".$name."','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','')");								
								}
	
	}
	
 ?>
  
  <?php                
//check if month is registered in encounters
	$cur=date('Y-m');
	$arr=array();
	
	$result =mysqli_query($conn,"select * from encounters");
	$num_results = mysqli_num_rows($result);	
	for ($i=0; $i <$num_results; $i++) {
	$row=mysqli_fetch_array($result);
	$mon=stripslashes($row['Month']);
		if($mon==$cur){
			$arr[]=$mon;
		}
	}
	if(count($arr)==0){
	$result = mysqli_query($conn,"insert into encounters values('','".$cur."','0','0','0')");
	//check if any employee contract is due for renewal


		$d1=date('Ymd');
		$date=strtotime(date('Y-m-d'));
		$d2=date('Ymd', strtotime('+1 month', $date));

			$resultc =mysqli_query($conn,"select * from employee where status=1  and emptype='CONTRACT' and stampexp>='".$d1."'  and stampexp<='".$d2."' order by emp");
			$num_resultsc = mysqli_num_rows($resultc);
			for ($a=0; $a <$num_resultsc; $a++) {
			$rowb=mysql_fetch_array($resultc);
			$names=stripslashes($rowb['fname']).' '.stripslashes($rowb['mname']).' '.stripslashes($rowb['lname']);
			
								$resulta =mysqli_query("select * from users where position='Emp' or position='Accountant' order by name");
								$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);  
									$name=stripslashes($rowa['name']);
									$resultb = mysqli_query("insert into messages values('0','".$name."','System','Employment contract for ".$names." is expiring on  ".dateprint(stripslashes($rowb['contractto']))."','".date('d/m/Y-H:i')."','".date('Ymd')."',0)");
		
								}		


			}
	

	}

	
 ?>
<?php
echo'<div id="ncalendar" title="My Tasks" style="overflow-y:auto; height:700px; display:none">
					<a class="labels" style="">Subject:<span>*</span></a><input type="text" id="subject" name="oname"  class="in_field" value="" style="width:280px;float:left; margin-left:10px"/> 
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Location:</a><input type="text" id="location" name="oname"  class="in_field" value=""  style="width:280px;float:left; margin-left:10px"/> 
					<div class="cleaner_h10"></div>';
					$resultc =mysqli_query($conn,"select * from tasks order by Name asc");
					$num_resultsc = mysqli_num_rows($resultc);
					echo'<a class="labels" style="">Category:</a>
					<select class="select" id="category" style="float:left; width:200px; margin-left:10px">';
							
							for ($i=0; $i <$num_resultsc; $i++) {
								$rowc=mysqli_fetch_array($resultc);
							echo'<option value="'.stripslashes($rowc['Index']).'">'.stripslashes($rowc['Name']).'</option>';
							}
							echo'
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Due:</a><input type="text" id="datepick" name="oname"  class="in_field" value="" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time1" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time2" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time3" style="float:left; width:60px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Start:</a><input type="text" id="datepick2" name="oname"  class="in_field" value="" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time4" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time5" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time6" style="float:left; width:60px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Status:</a>
					<select class="select" id="status" style="float:left; width:100px; margin-left:5px;">
						<option value="Not Started">Not Started</option>
						<option value="In Progress">In Progress</option>
						<option value="Completed">Completed</option>
						<option value="Waiting on Someone Else">Waiting on Someone Else</option>
						<option value="Deferred">Deferred</option>
					</select>
					<a class="labels" style="margin-left:5px">Priority:</a>
					<select class="select" id="priority" style="float:left; width:80px; margin-left:5px;">
						<option value="Normal">Normal</option>
						<option value="High">High</option>
						<option value="Low">Low</option>
					</select>
					<input id="crex" style="display:none" value="1"/>
					<input id="eid" style="display:none" value="00"/>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Complete:</a>
					<select class="select" id="completer" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <101; $i=$i+5) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select><a class="labels" style="margin-left:3px">%</a>
					<a class="labels" style="margin-left:10px">Reminder?</a>
					<input type="checkbox" name="remind" id="remind" style="margin:8px 0 0 5px" onclick="showrem()" value="1"/>
					<div class="cleaner_h10"></div>
					<div id="showrem" style="display:none">
					<a class="labels" style="">Reminder:</a><input type="text" id="datepick3" name="oname"  class="in_field" value="'.date('Y/m/d').'" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time7" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time8" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time9" style="float:left; width:55px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					</div>
					<div class="cleaner"></div>
					<a class="labels" style="">Notes</a>
					<div class="cleaner_h10"></div>
					<textarea id="notes" style="float:left;height:70px; width:320px" class="alergy" ></textarea>
					<div class="cleaner_h10"></div>
					<input type="button" value="Submit" style="float:left; margin-left:80px; cursor:pointer; width:80px" class="select" onclick="newtasks();"/>
					<div id="taskstud" style="float:right;height:20px; "></div>			
               </div>';
			   
	
	
	echo'<div id="nevent" title="Appointments" style="overflow-y:auto; height:700px; display:none">
	<a class="labels" style="">Patient:<span>*</span></a>
	
				<div class="ui-widget" style="margin:0 10px 0 10px;  float:left; width:280px">
				<select id="patname14">
					<option value="">Select one...</option>';
				$resulta =mysqli_query($conn,"select * from patients where status=1 order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$rowa=mysqli_fetch_array($resulta);
											echo'<option value="'.stripslashes($rowa['pntno']).'θ'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).' '.stripslashes($rowa['lname']).'">'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).' '.stripslashes($rowa['lname']).'-'.stripslashes($rowa['pntno']).'</option>';
										}
				echo'</select>
				</div>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Subject:<span>*</span></a><input type="text" id="subject2" name="oname"  class="in_field" value="" style="width:280px;float:left; margin-left:10px"/> 
					<input type="hidden" id="pidd2" name="oname"  class="in_field" value="" style="diplay:none"/> 
					<input type="hidden" id="pname2" name="oname"  class="in_field" value="" style="diplay:none"/> 
					
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Doctor:</a><input type="text" id="location2" name="oname"  class="in_field" value=""  style="width:280px;float:left; margin-left:10px"/> 
					<div class="cleaner_h10"></div>';
					$resultc =mysqli_query($conn,"select * from tasks order by Name asc");
					$num_resultsc = mysqli_num_rows($resultc);
					echo'<a class="labels" style="">Category:</a>
					<select class="select" id="category2" style="float:left; width:200px; margin-left:10px">';
							
							for ($i=0; $i <$num_resultsc; $i++) {
								$rowc=mysqli_fetch_array($resultc);
							echo'<option value="'.stripslashes($rowc['Index']).'">'.stripslashes($rowc['Name']).'</option>';
							}
							echo'
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Start:</a><input type="text" id="datepick6" name="oname"  class="in_field" value="'.date('Y/m/d').'" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time12" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time22" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time32" style="float:left; width:60px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">End:</a><input type="text" id="datepick7" name="oname"  class="in_field" value="" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time42" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time52" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time62" style="float:left; width:60px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Status:</a>
					<select class="select" id="status2" style="float:left; width:100px; margin-left:5px;">
						<option value="Not Started">Not Started</option>
						<option value="In Progress">In Progress</option>
						<option value="Completed">Completed</option>
						<option value="Waiting on Someone Else">Waiting on Someone Else</option>
						<option value="Deferred">Deferred</option>
					</select>
					<a class="labels" style="margin-left:5px">Priority:</a>
					<select class="select" id="priority2" style="float:left; width:80px; margin-left:5px;">
						<option value="Normal">Normal</option>
						<option value="High">High</option>
						<option value="Low">Low</option>
					</select>
					<input id="crex2" style="display:none" value="1"/>
					<input id="eid2" style="display:none" value="00"/>
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Complete:</a>
					<select class="select" id="completer2" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <101; $i=$i+5) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select><a class="labels" style="margin-left:3px">%</a>
					<a class="labels" style="margin-left:10px">Reminder?</a>
					<input type="checkbox" name="remind2" id="remind2" style="float:left;margin:8px 5px 0 5px" onclick="showrem2()" value="1"/>
					<a class="labels" style="margin-left:10px">Reccur?</a>
					<input type="checkbox" name="reccur" id="reccur" style="float:left;margin:8px 0px 0 5px" onclick="showrec()" value="1"/>
					<div class="cleaner_h10"></div>
					<div id="showrem2" style="display:none">
					<a class="labels" style="">Reminder:</a><input type="text" id="datepick8" name="oname"  class="in_field" value="" style="float:left;width:80px;margin-left:5px"/> 
					<select class="select" id="time72" style="float:left; width:55px; margin-left:5px">';
					for ($i=1; $i <13; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time82" style="float:left; width:55px; margin-left:5px">';
					for ($i=0; $i <60; $i++) {
						echo'<option value="'.sprintf("%02d",$i).'">'.sprintf("%02d",$i).'</option>';
							}
							echo'
					</select>
					<select class="select" id="time92" style="float:left; width:55px; margin-left:5px;">
						<option value="AM">AM</option>
						<option value="PM">PM</option>
					</select>
					<div class="cleaner_h10"></div>
					</div>
					
					<div id="showrec" style="display:none">
					<a class="labels" style="">Reccur Start:</a><input type="text" id="datepick4" name="oname"  class="in_field" value="'.date('Y/m/d').'" style="float:left;width:80px;margin-left:5px"/> 
					<a class="labels" style="margin-left:5px">End:</a>
					<input type="text" id="datepick5" name="oname"  class="in_field" value="" style="float:left;width:80px;margin-left:5px"/> 
					<div class="cleaner_h10"></div>
					<a class="labels" style="">Reccurence Pattern:</a>
					<select class="select" id="recpattern" style="float:left; width:85px; margin-left:5px;">
						<option value="1">Daily</option>
						<option value="7">Weekly</option>
						<option value="30">Monthly</option>
						<option value="365">Yearly</option>
					</select>
					</div>
					
					<div class="cleaner"></div>
					<a class="labels" style="">Notes</a>
					<textarea id="notes2" style="float:left;height:70px; width:320px" class="alergy" ></textarea>
					<div class="cleaner_h10"></div>
					<input type="button" value="Submit" style="float:left; margin-left:80px; cursor:pointer; width:80px" class="select" onclick="newevents();"/>
					<div id="taskevent" style="float:right;height:20px; "></div>			
               </div>';
		   
?>
<input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR'] ?>" id="remote" />
<input type="hidden" value="<?php echo $server ?>" id="server" />
</body>
<script type="text/javascript">
if((screen.width)<1366){
$("#templatemo_container").css({'width' : '1257px'});
$("#sidep").css({'width' : '235px'});
$("#sitename_panel").css({'width' : '37px'});
$("#bottomp").css({'width' : '1257px'});
}
</script>
<script type="text/javascript">homepage();</script>
</html>
