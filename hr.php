<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysqli_query($conn,"select * from users where name='".$username."'");
$row=mysqli_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}

?>
<script src="js/functions.js"></script>
<script src="js/help.js"></script>
<script src="js/ajax.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.txt"></script>
<script type="text/javascript" src="js/auth.js"></script>
<script src="ui/jquery.ui.position.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
<script src="js/confirmscript.js"></script>
<script src="jquery.confirm/jquery.confirm.js"></script>
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<script type="text/javascript" src="js/chart.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>

<link href='css/fullcalendar.css' rel='stylesheet' />
<script src='js/moment.min.js'></script>
<script src='js/fullcalendar.min.js'></script>

	
<script>
				
						$('#datepick').live('mouseover', function() {
						$( "#datepick" ).datepicker();
						function backal(d){
							alert(d);
							$( "#datepick" ).datepicker();
						}
				
						});
						$('#datepick2').live('mouseover', function() {
						$( "#datepick2" ).datepicker();
						});
						
						$('#datepick3').live('mouseover', function() {
						$( "#datepick3" ).datepicker();
						});
						$('#datepick4').live('mouseover', function() {
						$( "#datepick4" ).datepicker();
						});
						$('#datepick5').live('mouseover', function() {
						$( "#datepick5" ).datepicker();
						});
						$('#datepick6').live('mouseover', function() {
						$( "#datepick6" ).datepicker();
						});
						$('#datepick7').live('mouseover', function() {
						$( "#datepick7" ).datepicker();
						});
						$('#datepick8').live('mouseover', function() {
						$( "#datepick8" ).datepicker();
						});
		
		</script>
<script>
	$(function() {
		$( "#tabs" ).tabs();$( "#tabs2" ).tabs();
	});
	</script>
<script type="text/javascript">
$( "#ncalendar" ).dialog({autoOpen: false,modal: true});
$( "#newcalendar" ).click(function() {
		$( "#ncalendar" ).dialog( "open" );
		return false;
		});
		
$( "#nevent" ).dialog({autoOpen: false,modal: true});
$( "#newevent" ).click(function() {
		$( "#nevent" ).dialog( "open" );
	$('#pname2').val('');
	$('#pidd2').val('');
	$('#subject2').val('');
	$('#crex2').val(1);
	$('#eid2').val('');
	$('#location2').val('');
	$('#category2').val('');
	$('#datepick6').val('');
	$('#datepick4').val('');
	$('#datepick5').val('');
	$('#recpattern').val('');
	$('#status2').val('');
	$('#priority2').val('');
	$('#completer2').val('');
		return false;
		});

</script>
<script>window.onload = setupRefresh</script>
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
<script type="text/javascript">
	$(function() {
		$('.light').lightBox({overlayBgColor: '#000',overlayOpacity:0.6});
	});
</script>
<script>
$(document).ready(function(){
	$("#itemn" ).combobox();
		$( "#toggle" ).click(function() {
		$( "#itemn" ).toggle();
		});
	$("#itemn").parent().find("input:first").focus();	
	});


	</script>
<script type="text/javascript">
      $(function () {
        $('#default_widget').monthpicker();
		$('#other_widget').monthpicker();
		 $('#default_widgeta').monthpicker();
		$('#other_widgeta').monthpicker();
		 $('#default_widgetb').monthpicker();
		$('#other_widgetb').monthpicker();
        $('.monthpicker').monthpicker();

        $('#custom_widget').monthpicker({
            pattern: 'yyyy-mm',
            selectedYear: 2010,
            startYear: 2004,
            finalYear: 2022,
            monthNames: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
        });

        $('#events_widget').monthpicker().bind('monthpicker-click-month', function (e, month) {
            alert('You clicked on month ' + month);

        }).bind('monthpicker-change-year', function (e, year) {
            alert('You chosed the year ' + year);

        }).bind('monthpicker-show', function () {
            alert('showing... ' + $(this).attr('id'));
            
        }).bind('monthpicker-hide', function () {
            alert('hiding... ' + $(this).attr('id'));
        });

        $('#last_widget').monthpicker({selectedYear: 2009, startYear: 2004, finalYear: 2022, openOnFocus: false});

        $('#last_widget').monthpicker().bind('monthpicker-change-year', function (e, year) {
            $('#last_widget').monthpicker('disableMonths', []);
            if (year === '2008') {
                $('#last_widget').monthpicker('disableMonths', [1, 2, 3, 4]);
            }
            if (year === '2010') {
                $('#last_widget').monthpicker('disableMonths', [9, 10, 11, 12]);
            }
        });
 });
    </script>
     <script>

$('input').live('keypress',function
(e){
	if(e.keyCode==13){
		var inputs=
		$(this).parents('form').eq(0).find
		(':input');
		var idx=inputs.index
		(this);
		if(idx ==
		inputs.length-1){
			inputs[0].select()
		}else{
			inputs[idx +
			1].focus();
			inputs[idx +
			1].select();
		}
		return false;
	}
});
							   
	
$(function() {
 
			$('.rightclickarea').bind('contextmenu',function(e){
			var $cmenu = $(this).next();
			$('<div class="overlay"></div>').css({left : '0px', top : '0px',position: 'absolute', width:                                                   '100%', height: '100%', zIndex: '100' }).mouseover(function() {
				$(this).remove();
				$cmenu.hide();
			}).bind('contextmenu' , function(){return false;}).appendTo(document.body);
			$(this).next().css({ left: e.pageX, top: e.pageY, zIndex: '101' }).show(100);
 
			return false;
			 });
 
			 $('.vmenu .first_li').live('click',function() {
				if( $(this).children().size() == 1 ) {
						b=openlinks($(this).children().text());
						window[b]();
					$('.vmenu').hide();
					$('.overlay').hide();
				}
			 });
 
			 $('.vmenu .inner_li span').live('click',function() {
					alert($(this).text());
					$('.vmenu').hide();
					$('.overlay').hide();
			 });
 
 
			$(".first_li , .sec_li, .inner_li span").hover(function () {
				$(this).css({backgroundColor : '#E0EDFE' , cursor : 'pointer'});
			if ( $(this).children().size() >0 )
					$(this).find('.inner_li').show();	
					$(this).css({cursor : 'pointer',backgroundColor : '#E0EDFE'});
			}, 
			function () {
				$(this).css('background-color' , '#fff' );
				$(this).find('.inner_li').hide();
			});
 
 
		});
		</script>	
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/grid.css">
<link href="css/page.css" rel="stylesheet" type="text/css" />
<?php
$id=$_GET['id'];

switch($id){
						




						case '36.1':
									
							echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">NEW PAYROLL
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">Month:<span>*</span></a>
		<input type="text" id="default_widget"  class="in_field" value="" style="width:60%;float:right;margin-right:10px; text-transform:none; " readonly="readonly"/> 
<div class="cleaner_h10"></div>
				<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="newpayroll();"/>
									<div id="taskstud" style="float:right;height:20px;margin-right:10px "></div>	
				<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
							case '36.2':
							$mon=$_GET['mon'];
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payroll Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						$query =mysqli_query($conn,"select * from salregister where month='".$mon."' and status=0");
									$count = mysqli_num_rows($query);
									if($count>0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>Payroll for Month does not exist or has already been posted.</p>');
									e.preventDefault();
									</script>";	
										exit;
									}
								
							echo'<input type="hidden" id="curmon" value="'.$mon.'"/>
						<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">PAYROLL:'.$mon.'</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:5px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:55px" class="in_field" onclick="hidenewstude();"/></div>
								
								<div id="saveclose" style="width:55px; height:30px;float:right;margin-right:10px;">
									<input type="button" value="Commit"  style="padding:5px 5px; border-color:#fff; background:#0F6; float:right; cursor:pointer;width:50px" class="in_field" onclick="commitpay();"/></div>
									
									<div id="saveclose" style="width:55px; height:30px;float:right;margin-right:0px;">
								<input type="button" value="Preview"  style="padding:5px 5px; border-color:#fff; background:#FF3; float:right; cursor:pointer;width:55px" class="in_field" onclick="openpayreport2();"/></div>
								
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:5px;">
									<input type="button" value="Add"  style="padding:5px 5px; border-color:#fff; background:#0085b2; float:right; cursor:pointer;width:50px" class="in_field" onclick="addtopay();"/>
								</div>
								<div id="mes" style="width:50px; height:30px;float:right;margin-right:5px;"></div>
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
	<div id="block1" style="height:424px; width:996px;  background:#fff; padding:5px; margin:5px 5px 5px 0;">
				
				
				<div id="display">
							<div id="title">
									<div id="figure1" style="width:80px">PF No.</div>
									<div id="figure1" style="width:120px">Name</div>
									<div id="figure1" style="width:50px">B.Sal.</div>
									<div id="figure1" style="width:50px">Allow.</div>
									<div id="figure1" style="width:40px">Overtime</div>
									<div id="figure1" style="width:40px">NSSF.</div>
									<div id="figure1" style="width:40px">Tax.</div>
									<div id="figure1" style="width:40px">NHIF.</div>
									<div id="figure1" style="width:40px">Adva.</div>
									<div id="figure1" style="width:50px">Sacco.</div>
									<div id="figure1" style="width:50px">Welfare</div>
									<div id="figure1" style="width:50px">Kitchen</div>
									<div id="figure1" style="width:70px">Net Pay</div>
									<div id="figure1" style="width:40px">Rem</div>
									<div id="figure1" style="width:40px">Save</div>
								
									
					</div>
						<div class="cleaner"></div>
				';
					$result =mysqli_query($conn,"select * from payroll where month='".$mon."'");
					$num_results = mysqli_num_rows($result);	
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									if($i%2==0){
	echo'<div class="normal1"  style="min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none" id="pay'.stripslashes($row['serial']).'">';
	}else{
		echo'<div  class="normal2" style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none" id="pay'.stripslashes($row['serial']).'">';}
		
		
									$sta=stripslashes($row['status']);
									$emp=stripslashes($row['emp']);

									$resultx =mysqli_query($conn,"select * from employee where emp='".$emp."' limit 0,1");
									$rowx=mysqli_fetch_array($resultx);
									$pfno=stripslashes($rowx['pfno']);



									$name=stripslashes($row['name']);
									$sal=stripslashes($row['sal']);
									$allow=stripslashes($row['allow']);
									$hrs=stripslashes($row['othrs']);
									$rate=stripslashes($row['rateot']);
									$ot=stripslashes($row['totalot']);
									$nssf=stripslashes($row['nssf']);
									$tax=stripslashes($row['tax']);
									$nhif=stripslashes($row['nhif']);
									$adva=stripslashes($row['adva']);
									$ins=stripslashes($row['sacco']);
									$ded=stripslashes($row['welfare']);
									$kitchen=stripslashes($row['kitchen']);
									$net=stripslashes($row['net']);
									$days=stripslashes($row['days']);
		
	
									
									echo'
				<div id="figure2" style="width:80px; margin-left:0" >'.$pfno.'</div>
				<div id="figure2" style="width:120px; overflow:hidden" >'.stripslashes($row['name']).'</div>
				<div id="figure2" style="width:55px;height:22px; padding:2px" ><input class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.$sal.'" id="sal'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px" ><input class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.$allow.'" id="allow'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px;display:none" ><input  class="input_field"type="text" style="width:90%;padding:1px 1px" value="'.$hrs.'" id="hrs'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px;display:none" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px " value="'.$rate.'" id="rate'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px" ><input class="input_field" type="text"  style="width:90%;padding:1px 1px;background:#fff; " value="'.$ot.'" id="ot'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px" ><input class="input_field" type="text"  disabled="disabled"  style=" background:#fff; border-color:#f00;width:90%;padding:1px 1px" value="'.$nssf.'" id="nssf'.$emp.'"/></div>
				<div id="figure2" style="width:50px; padding:2px;height:22px" ><input class="input_field" type="text"  disabled="disabled"  style="width:90%;padding:1px 1px; background:#fff; border-color:#f00" value="'.$tax.'" id="tax'.$emp.'"/></div>
				<div id="figure2" style="width:45px; padding:2px;height:22px" ><input class="input_field" type="text"  disabled="disabled"  style="width:90%; background:#fff; border-color:#f00;padding:1px 1px;" value="'.$nhif.'" id="nhif'.$emp.'"/></div>
				<div id="figure2" style="width:45px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px; " value="'.$adva.'" id="adva'.$emp.'"/></div>
				<input  class="input_field" type="hidden" style="width:90%;padding:1px 1px; " value="'.$days.'" id="days'.$emp.'"/>
				<div id="figure2" style="width:55px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px; " value="'.$ins.'" id="ins'.$emp.'"/></div>
			<div id="figure2" style="width:60px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px; " value="'.$ded.'" id="ded'.$emp.'"/></div>
				<div id="figure2" style="width:59px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px; " value="'.$kitchen.'" id="kitchen'.$emp.'"/></div>
				<div id="figure2" style="width:75px; padding:2px;height:22px" ><input class="input_field" type="text"  disabled="disabled"  style="width:90%;padding:1px 1px; background:#fff; border-color:#f00; font-weight:bold" value="'.$net.'" id="net'.$emp.'"/></div>';
				echo"<div class=\"figure2\" id=\"rem".$emp."\" onclick=\"deletepayemp(".stripslashes($row['serial']).")\" style=\"width:50px;padding:2px;height:22px\" ><img src=\"images/delete.png\" style=\"height:22px;width:22px\" /></div>
				<div class=\"figure2\" id=\"save".$emp."\" onclick=\"savepayemp('".$emp."','".$mon."')\" style=\"width:49px;padding:2px;height:22px\" ><img src=\"images/save.jpg\" style=\"height:20px;width:20px\" /></div>";
					echo'</div>
					<div class="cleaner"></div>';
					}
		 
			
			
			
			echo'<div class="cleaner_h5"></div>
			
			</div></div>';
										
							
							break;
							
							case '36.3':
									
							echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">EDIT PAYROLL
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">Month:<span>*</span></a>
		<input type="text" id="default_widget"  class="in_field" value="" style="width:60%;float:right;margin-right:10px; text-transform:none; " readonly="readonly"/> 
<div class="cleaner_h10"></div>
				<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="editpayroll();"/>
									<div id="taskstud" style="float:right;height:20px;margin-right:10px "></div>	
				<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
							case '36.4':
							echo"<script>$('#addemp').parent().find('input:first').focus().width(320);</script>";				
						echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:370px; border:1px solid #333">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">ADD TO PAYROLL
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px;">
				<select id="addemp" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by fname");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select></div>
	<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
								case '36.5':
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payroll Settings Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
								
							echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">PAYROLL SETTINGS</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:5px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:55px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="mes" style="width:50px; height:30px;float:right;margin-right:5px;"></div>
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
	<div id="block1" style="height:424px; width:996px;  background:#fff; padding:5px; margin:5px 5px 5px 0;">
				
		<div id="tabs" style="width:950px; height:424px; float:left; margin:0px 5px 0 0px">
				<ul>
				<li><a href="#tabs-1">NHIF RATES</a></li>
				<li><a href="#tabs-2">TAX RATES</a></li>
				<li><a href="#tabs-3">NSSF RATES</a></li>
				<li><a href="#tabs-4">OVERTIME RATES</a></li>
				</ul>
			
			<div id="tabs-1">							
     <div id="title">
									<div id="figure1" style="margin-left:0px;width:200px">Lower</div>
									<div id="figure1" style="width:200px">Upper</div>
									<div id="figure1" style="width:200px">Amount</div>
									<div id="figure1" style="width:83px">Save</div>
					</div>
						<div class="cleaner"></div>
					<div id="display" style="overflow-y:auto; height:350px; text-align:center">';
					$result = mysqli_query($conn,"SELECT * FROM  nhif");
									$num_results = mysqli_num_rows($result);
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['id']);
								
									if($i%2==0){
	echo'<div class="normal1" style="min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none">';
	}else{
		echo'<div  class="normal2"  style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none">';
	}	
									
									echo'
			<div id="figure2" style="width:200px; padding:2px; height:22px" ><input type="text"  class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['lower']).'" id="lower'.$code.'"/></div>
			<div id="figure2" style="width:200px;  padding:2px; height:22px" ><input type="text" class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['upper']).'" id="upper'.$code.'"/></div>
			<div id="figure2" style="width:200px;  padding:2px; height:22px" ><input type="text" class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['amount']).'" id="amount'.$code.'"/></div>';
									
									echo"<div class=\"figure2\" style=\"width:110px; padding:2px; height:22px\" id=\"save".$code."\" onclick=\"savenhif(".$code.")\"><img src=\"images/tick.png\" style=\"width:22px;height:22px\"/></div>
									</div>
									<div class=\"cleaner\"></div>";
					}
		 
		 
       echo'   <div class="cleaner_h10"></div> </div> 
	   <div class="cleaner_h50"></div> 
	   
	    </div>
       	<div id="tabs-2">	
		
		<div id="title">
									<div id="figure1" style="margin-left:0px;width:200px">Lower</div>
									<div id="figure1" style="width:200px">Upper</div>
									<div id="figure1" style="width:200px">Ratio</div>
									<div id="figure1" style="width:83px">Save</div>
					</div>
							<div class="cleaner"></div>
						<div id="display" style="overflow-y:auto; height:350px">';
					$result = mysqli_query($conn,"SELECT * FROM  tax");
									$num_results = mysqli_num_rows($result);
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['id']);
								
									if($i%2==0){
	echo'<div class="normal1" style="min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none">';
	}else{
		echo'<div  class="normal2"  style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none">';
	}	
									
									echo'
			<div id="figure2" style="width:200px; padding:2px; height:22px" ><input type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['lower']).'" id="taxlower'.$code.'"/></div>
			<div id="figure2" style="width:200px;  padding:2px; height:22px" ><input type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['upper']).'" id="taxupper'.$code.'"/></div>
			<div id="figure2" style="width:200px;  padding:2px; height:22px" ><input type="text" style="width:90%;padding:1px 1px" value="'.stripslashes($row['tax']).'" id="taxpercent'.$code.'"/></div>';
									
									echo"<div class=\"figure2\" style=\"width:110px; padding:2px; height:22px\" id=\"taxsave".$code."\" onclick=\"savetax(".$code.")\"><img src=\"images/tick.png\" style=\"width:22px;height:22px\"/></div>
									
									</div>
									<div class=\"cleaner\"></div>";
					}
		 
		 
       echo' </div> <div class="cleaner_h50"></div></div> 
	  
	<div id="tabs-3">	';
		$result = mysqli_query($conn,"SELECT * FROM  nssf where id=1");
						$row=mysqli_fetch_array($result);
						$employee=stripslashes($row['amount']);
						
				echo'<a class="labels" style="margin-left:15px" >Employee:(%)</a>
						<input type="text" title="Rate in percent" id="employeenssf" class="input_field" value="'.$employee.'"  style="width:100px; margin-left:10px;float:left"/>
						<input class="in_field" type="button" value="Save" id="submit"  style="padding:5px 5px; border-color:#fff; background:#0f3; float:left; cursor:pointer;width:50px; margin-left:10px; border:1px solid #333" class="in_field" onclick="submnssf();"/>
						<div id="mes3" style="float:left;width:40px; height:40px; margin-left:10px"></div>
		
		
		<div class="cleaner_h50"></div>
		</div>
		
		
		 	<div id="tabs-4">	';
		$result = mysqli_query($conn,"SELECT * FROM  overtime where id=1");
						$row=mysqli_fetch_array($result);
						$amount=stripslashes($row['rate']);
				echo'<a class="labels" style="margin-left:15px" >Overtime Rate per Hour:</a>
						<input type="text" title="Rate per Hour" id="overtime" class="input_field" value="'.$amount.'"  style="width:100px; margin-left:10px;float:left"/>
						<input class="in_field" type="button" value="Save" id="submit"  style="padding:5px 5px; border-color:#fff; background:#0f3; float:left; cursor:pointer;width:50px; margin-left:10px; border:1px solid #333" class="in_field" onclick="submover();"/>
						<div id="mes4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
		
		
		<div class="cleaner_h50"></div>
		</div>		
				
		<div class="cleaner_h5"></div>
			
			</div></div>';
										
							
							break;
							case '36.6':
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee Benefits Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
								
							echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">EMPLOYEE BENEFITS</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:5px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:55px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="ADD" id="submit"  style="padding:5px 5px; border-color:#fff; background:#0f6; float:right; cursor:pointer;width:55px" class="in_field" onclick="addempben();"/></div>
								<div id="mes" style="width:50px; height:30px;float:right;margin-right:5px;"></div>
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
	<div id="block1" style="height:424px; width:996px;  background:#fff; padding:5px; margin:5px 5px 5px 0;">
				
		<div id="title">
									<div id="figure1" style="width:50px">PF No.</div>
									<div id="figure1" style="width:200px">Name</div>
									<div id="figure1" style="width:80px">Phone Mins.</div>
									<div id="figure1" style="width:60px">Health Ins.</div>
									<div id="figure1" style="width:80px">Co. Vehicle.</div>
									<div id="figure1" style="width:60px">Co. Hse</div>
									<div id="figure1" style="width:70px">Entertainment</div>
									<div id="figure1" style="width:60px">Per Diem</div>
									<div id="figure1" style="width:60px">Others</div>
									<div id="figure1" style="width:60px">Rem</div>
									<div id="figure1" style="width:60px">Save</div>
								
									
					</div>
						<div class="cleaner"></div>
					<div id="display" style="overflow-x:hidden">';
					$result =mysqli_query($conn,"select * from benefits");
					$num_results = mysqli_num_rows($result);	
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									if($i%2==0){
	echo'<div class="normal1"  style="min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none" id="pay'.stripslashes($row['id']).'">';
	}else{
		echo'<div  class="normal2" style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none" id="pay'.stripslashes($row['id']).'">';}
		
		
									$sta=stripslashes($row['status']);
									$emp=stripslashes($row['pfno']);
									$name=stripslashes($row['names']);
									$phone=stripslashes($row['phone']);
									$health=stripslashes($row['health']);
									$vehicle=stripslashes($row['vehicle']);
									$house=stripslashes($row['house']);
									$entertainment=stripslashes($row['entertainment']);
									$perdiem=stripslashes($row['perdiem']);
									$others=stripslashes($row['others']);
						echo'
				<div id="figure2" style="width:50px; margin-left:0" >'.stripslashes($row['pfno']).'</div>
				<div id="figure2" style="width:200px" >'.stripslashes($row['names']).'</div>
				<div id="figure2" style="width:80px; padding:2px;height:22px" ><input class="input_field" type="text" style="width:90%;padding:1px 1px"  value="'.$phone.'" id="phone'.$emp.'"/></div>
				<div id="figure2" style="width:75px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px" value="'.$health.'" id="health'.$emp.'"/></div>
				<div id="figure2" style="width:85px; padding:2px;height:22px" ><input  class="input_field" type="text" style="width:90%;padding:1px 1px"  value="'.$vehicle.'" id="vehicle'.$emp.'"/></div>
				<div id="figure2" style="width:75px; padding:2px;height:22px" ><input class="input_field"  type="text" style="width:90%;padding:1px 1px" value="'.$house.'" id="house'.$emp.'"/></div>
				<div id="figure2" style="width:75px; padding:2px;height:22px" ><input  class="input_field" type="text"style="width:90%;padding:1px 1px; background:#fff; " value="'.$entertainment.'" id="entertainment'.$emp.'"/></div>
				<div id="figure2" style="width:75px; padding:2px;height:22px" ><input  class="input_field" type="text"  style="width:90%;padding:1px 1px; background:#fff; " value="'.$perdiem.'" id="perdiem'.$emp.'"/></div>
				<div id="figure2" style="width:69px; padding:2px;height:22px" ><input   class="input_field" type="text"  style="width:90%;padding:1px 1px; background:#fff; " value="'.$others.'" id="others'.$emp.'"/></div>';
				echo"<div class=\"figure2\" id=\"rem".$emp."\" onclick=\"deletebenemp(".stripslashes($row['id']).")\" style=\"width:60px;padding:2px;height:22px\" ><img src=\"images/delete.png\" style=\"height:22px;width:22px\" /></div>
				<div class=\"figure2\" id=\"save".$emp."\" onclick=\"savebenemp('".$emp."')\" style=\"width:60px;padding:2px;height:22px\" ><img src=\"images/save.jpg\" style=\"height:20px;width:20px\" /></div>";
					echo'</div><div class="cleaner"></div>';
					}
		 	
				
		echo'<div class="cleaner_h5"></div>
			
			</div></div>';
										
							
							break;
							
								case '36.7':
							echo"<script>$('#addempben').parent().find('input:first').focus().width(320);</script>";				
							echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:370px; border:1px solid #333">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">ADD TO BENEFITS
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px;">
				<select id="addempben" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by fname");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select></div>
	<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
							
							
							case '37.2':
							
						echo'<div style="width:990px; height:377px;padding-top:10px" id="paysett">
						
						<div style="height:370px;border-right:2px solid #0085b2; width:460px;float:left">';
						echo"<script>$('#scrollbar5').tinyscrollbar();$('#scrollbar6').tinyscrollbar();</script>";
				echo'<h5 style="text-align:center; float:left; margin-left:200px">NHIF</h5>';
						echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new NHIF row\"onclick=\"addnewrow()\"/>";
									
	echo'<div class="cleaner"></div><div id="scrollbar5" style="width:460px; height:340px">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:440px; height:340px">
			 <div class="overview">';
			
						
									$result = mysqli_query($conn,"SELECT * FROM  nhif");
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									echo'
									
									<div id="inside" style="min-height:310px;">
									<div id="title">
									<div id="figure1" style="width:100px">Lower.</div>
									<div id="figure1" style="width:100px">Upper</div>
									<div id="figure1" style="width:120px">Amount</div>
									<div id="figure1" style="width:50px">Save</div>
									</div>';
									}
										for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal2".$i."\" class=\"normal\" style=\"display:none\">";
										echo'<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="" id="lower2'.$i.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="" id="upper2'.$i.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:125px;padding:1px 2px"><input type="text" class="put_field" value="" id="amount2'.$i.'" style="background:#fff;width:90px"/></div>';
				echo"<div class=\"figure2x\" style=\"width:56px\" id=\"save2".$i."\" onclick=\"savenhif2(".$i.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
									}
									
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										$lower=stripslashes($row['lower']);
										$upper=stripslashes($row['upper']);
										$amount=stripslashes($row['amount']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="'.$lower.'" id="lower'.$code.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="'.$upper.'" id="upper'.$code.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:125px;padding:1px 2px"><input type="text" class="put_field" value="'.$amount.'" id="amount'.$code.'" style="background:#fff;width:90px"/></div>';
				echo"<div class=\"figure2\" style=\"width:56px\" id=\"save".$code."\" onclick=\"savenhif(".$code.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
									
									
									echo'</div>
						</div></div></div></div>
						
						<div style="height:370px;width:510px; float:left;padding-left:10px">
						<h5 style="text-align:center; float:left; margin-left:200px">NSSF</h5>
						<div class="cleaner_h5"></div>';
						$result = mysqli_query($conn,"SELECT * FROM  nssf where id=1");
						$row=mysqli_fetch_array($result);
						$employee=stripslashes($row['amount']);
						
						$result = mysqli_query($conn,"SELECT * FROM  nssf where id=2");
						$row=mysqli_fetch_array($result);
						$employer=stripslashes($row['amount']);
				echo'<a class="labels" style="margin-left:5px">Employer:</a>
						<input type="text" id="employernssf" value="'.$employer.'" class="input_field"  style="width:100px; margin-left:10px;float:left"/>
						<a class="labels" style="margin-left:15px" >Employee:</a>
						<input type="text" id="employeenssf" class="input_field" value="'.$employee.'"  style="width:100px; margin-left:10px;float:left"/>';
						echo"<img src=\"images/subm.jpg\" width=\"50\" height=\"25\" style=\"cursor:pointer; margin:5px 0px 0 15px; float:left\" title=\"Submit\"onclick=\"submnssf()\"/>";
						echo'<div id="mes3" style="float:left;width:40px; height:40px; margin-left:10px"></div>
						<div class="cleaner_h5"></div>
						
						<h5 style="text-align:center; float:left; margin-left:200px">Overtime Rate</h5>
						<div class="cleaner_h5"></div>';
						$result = mysqli_query($conn,"SELECT * FROM  overtime where id=1");
						$row=mysqli_fetch_array($result);
						$amount=stripslashes($row['rate']);
						
						
				echo'<a class="labels" style="margin-left:5px">Rate per hour:</a>
						<input type="text" id="overtime" value="'.$amount.'" class="input_field"  style="width:100px; margin-left:10px;float:left"/>';
						echo"<img src=\"images/subm.jpg\" width=\"50\" height=\"25\" style=\"cursor:pointer; margin:5px 0px 0 15px; float:left\" title=\"Submit\"onclick=\"submover()\"/>";
						echo'<div id="mes4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
						<div class="cleaner_h5"></div>
						<h5 style="text-align:center; float:left; margin-left:200px">Tax Rates</h5>';
						echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new Tax row\"onclick=\"addnewrow2()\"/>";
						
						echo'<div class="cleaner_h5"></div>
						
				<div class="cleaner"></div><div id="scrollbar1" style="width:520px; height:160px">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:500px; height:160px">
			 <div class="overview">';
			 $result = mysqli_query($conn,"SELECT * FROM  tax");
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									echo'
									
									<div id="inside" style="min-height:310px;">
									<div id="title">
									<div id="figure1" style="width:100px">Lower.</div>
									<div id="figure1" style="width:100px">Upper</div>
									<div id="figure1" style="width:90px" title="Tax in percent">Percent</div>
									<div id="figure1" style="width:90px" title="Relief is in KShs.">Relief</div>
									<div id="figure1" style="width:50px">Save</div>
									</div>';
									}
										for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal3".$i."\" class=\"normal\" style=\"display:none\">";
										echo'<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="" id="lower3'.$i.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="" id="upper3'.$i.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:95px;padding:1px 2px"><input type="text" class="put_field" value="" id="amount3'.$i.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:97px;padding:1px 2px"><input type="text" class="put_field" value="" id="relief3'.$i.'" style="background:#fff;width:90px"/></div>';
				echo"<div class=\"figure2\" style=\"width:56px\" id=\"save3".$i."\" onclick=\"savetax3(".$i.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
									}
									
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										$lower=stripslashes($row['lower']);
										$upper=stripslashes($row['upper']);
										$amount=stripslashes($row['tax']);
										$relief=stripslashes($row['relief']);
										echo"
										<div id=\"normal4".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="'.$lower.'" id="lower4'.$code.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:105px;padding:1px 2px"><input type="text" class="put_field" value="'.$upper.'" id="upper4'.$code.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:95px;padding:1px 2px"><input type="text" class="put_field" value="'.$amount.'" id="amount4'.$code.'" style="background:#fff;width:90px"/></div>
										<div class="figure2x" style="width:97px;padding:1px 2px"><input type="text" class="put_field" value="'.$relief.'" id="relief4'.$code.'" style="background:#fff;width:90px"/></div>';
				echo"<div class=\"figure2\" style=\"width:56px\" id=\"save4".$code."\" onclick=\"savetax4(".$code.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
						echo'</div></div></div>
						</div>
						</div>';
							break;
							
							case '49.3':
							
									echo"<script>$('#month1').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">Monthly Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month1" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
						
						</div>';
							break;
							
								case '49.4':
					
						echo"<script>$('#month14').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Monthly Bank Summary
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month14" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
						
						</div>';
							break;
							
							case '49.5':
						echo"<script>$('#empbank').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Individual Bank Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Bank:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="empbank" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from banktbl");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['name']).'</option>';
							}
		echo'
	</select>
	</div>
	<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Month:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="monthsum" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
			<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterindbank();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;



							case '49.6':
							
				echo"<script>$('#month3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Monthly Deductions Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Category:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="category" style="width:260px; margin-left:10px;">
					<option value="tax">PAYE</option>
					<option value="sacco">WEC SACCO</option>
					<option value="welfare">WELFARE</option>
					<option value="kitchen">KITCHEN</option>
					<option value="nhif">NHIF</option>
					<option value="nssf">NSSF</option>
					
				</select>
				</div>


				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Month:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month3" style="width:260px; margin-left:10px;">
					<option value="">Select one...</option>';
					$resulta =mysqli_query($conn,"select * from salregister");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$rowa=mysqli_fetch_array($resulta);
											echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
										}
					echo'
				</select>
				</div>

				<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entermonded();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;

					case '49.7':
				echo"<script>$('#empyear').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">P9A Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Year:</a>';
				$arr=array();
				$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$arr[substr(stripslashes($rowa['month']),3,4)]=substr(stripslashes($rowa['month']),3,4);
							}
				echo'<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="empyear" class="combos"  style="width:260px; margin-left:10px;">
				<option value="">Select one...</option>';
					foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$key.'</option>';
							}
		echo'
	</select>
	</div>
	<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Employee:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="empname" class="combos" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
			$resulta =mysqli_query($conn,"select * from employee");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select>
	</div>
			<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterpnine();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;
							case '49.8':
							
				echo"<script>$('#month4').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">P10 Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>';
				$arr=array();
				$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$arr[substr(stripslashes($rowa['month']),3,4)]=substr(stripslashes($rowa['month']),3,4);
							}
				echo'<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month4" class="combos"  style="width:260px; margin-left:10px;">
				<option value="">Select one...</option>';
					foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$key.'</option>';
							}
					echo'
				</select>
				</div>
						
						</div>';
							break;
							case '49.9':
							
				echo"<script>$('#month5').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">P10A Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>';
				$arr=array();
				$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$arr[substr(stripslashes($rowa['month']),3,4)]=substr(stripslashes($rowa['month']),3,4);
							}
				echo'<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month5" class="combos"  style="width:260px; margin-left:10px;">
				<option value="">Select one...</option>';
					foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$key.'</option>';
							}
					echo'
				</select>
				</div>
						
						</div>';
							break;
							
							case '50.3':
						
									echo"<script>$('#cus9').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">Employee Payroll Summary
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="cus9" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select>
	</div>
						
						</div>';
						break;

						case '57.2':
						echo"<script>$('#cus19').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Individual Pay Slips
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Employee:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="cus19" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select>
	</div>
	<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Month:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="monthsum" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
			<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterindpayslip();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
							case '57.3':
						
									echo"<script>$('#month2').parent().find('input:first').focus();</script>";
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Process PaySlips
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="month2" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from salregister");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
						
						</div>';
							break;	

						case 59:
							$_SESSION['lan']=$_SESSION['skl']=$_SESSION['hobby']=$_SESSION['exp']=$_SESSION['edu']=array();
							$result =mysqli_query($conn,"select * from employee order by emp desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$emp=1;
								}else $emp=stripslashes($row['emp']) + 1;
			$result = mysqli_query($conn,"insert into log values('0','".$username." accesses New Employee Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			
			echo"<script>$('.combos').parent().find('input:first').width(120);	</script>";	
								echo'<script>
								$(window).bind("keydown",
								function(evt){
									
									if(evt.ctrlKey&&(evt.which==83)){
									addnewemp(1);
									evt.preventDefault();
									return false;	
									}
									});
									
							</script>';
		
							echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; ">New Employee Information</h2>';
									echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewemp(1);"/></div>';
														
								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal" style="overflow-y:auto">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">PF No:<span>*</span></a>
								<input type="hidden" id="emp" name="emp" class="in_field" value="'.$emp.'" style="border-color:#f00"/> 
                                <input type="text" id="pfno" name="pfno" class="in_field" value="'.$emp.'" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">F.Name:<span>*</span></a>
                                <input type="text" id="fname" name="field" class="in_field" />
								<div class="cleaner_h5"></div>
								 <a class="labels">M. Name:<span>*</span></a>
                                <input type="text" id="mname" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">L. Name:<span>*</span></a>
                                <input type="text" id="lname" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">D.O.B:</a>
							  <input id="dob" name="dob" class="in_field" placeholder="" type="text">
							   <div class="cleaner_h5"></div>
								 <a class="labels">Mar. Status:</a>
                                <select class="select" id="mar" name="mar" style="float:right; text-transform:uppercase;width:120px">
								<option value="Single">Single</option>
								<option value="Engaged">Engaged</option>
								<option value="Married">Married</option>
								<option value="Divorced">Divorced</option>
								<option value="Widowed">Widowed</option>
								</select> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Languages:</a>
                               		
								<div class="ui-widget"  style="float:right; margin-right:25px">
	<select id="language" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from languages order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
							$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
<div class="cleaner_h5"></div>
<div id="languages" style="width:100%;"></div>
								<div class="cleaner_h5"></div>
								
								  <a class="labels" style="margin-right:30px">Gender:</a>
                                <input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								 <input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.
									<div class="cleaner_h5"></div>
								<a class="labels">ID NO:<span>*</span></a>
                                <input type="text" id="idno" name="field" class="in_field" onkeyup="validatenum(\'idno\')"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">Pin No:</a>
                                <input type="text" id="pinno" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>	
								<a class="labels">Phone No:<span>*</span></a>
								 <input type="text" id="phone" name="phone" class="in_field" onkeyup="validatenum(\'phone\')" style="width:130px"/> 
								<div class="cleaner_h5"></div>
								<div id="music"></div>
								<a class="labels">Phone No[2]:</a>
								 <input type="text" id="phone2" name="phone2" class="in_field" onkeyup="validatenum(\'phone2\')"  style="width:130px"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email Add:</a>
								 <input type="text" id="emailadd" name="emailadd" class="in_field" style="text-transform:lowercase"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phy Add:</a>
                                <input type="text" id="phyadd" name="phyadd" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Location:</a>
                               		
								<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="town" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from towns order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
<div class="cleaner_h5"></div>
								
								</div>
							
								<div id="personal" style="overflow-y:auto">
								<h5>Salary Details</h5>
								<a class="labels">Basic Sal:<span>*</span></a>
								<input type="text" id="sal" name="sal" class="in_field" onkeyup="validatenum(\'sal\')"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">D.O.E:<span>*</span></a>
								<input id="datepick" name="doe" class="in_field"  type="text" readonly="readonly">
							   <div class="cleaner_h5"></div>
								
								<a class="labels" style="margin-right:10px">Emp Type:<span>*</span></a>
	<input  id="Permanent" name="emptype" type="radio" checked="checked" value="Permanent" onclick="hidecontract()"/>Permanent
		<input  id="Contract" name="emptype" type="radio" value="Contract"  onclick="showcontract()"/>Contract
		<input  id="Temporary" name="emptype" type="radio" value="Temporary"  onclick="hidecontract()"/>Temporary
		
								<div id="contract" style="display:none">
								<a class="labels">From:<span>*</span></a>
								<input type="text" id="datepick2" name="from" class="in_field"/>
								<div class="cleaner_h5"></div>
								<a class="labels">To:<span>*</span></a>
								<input type="text" id="datepick3" name="to" class="in_field"/>
								</div>
								
								<div class="cleaner_h5"></div>
								<a class="labels">Branch:<span>*</span></a>
                                <div class="ui-widget" style="float:right; margin-right:25px">
								<select id="branch" class="combos">
									<option value="BUNGOMA" selected="selected" disabled="disabled">BUNGOMA</option>
								</select></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Dept:<span>*</span></a>
                                <div class="ui-widget" style="float:right; margin-right:25px">
	<select id="dept" class="combos"><option value="" selected="selected" disabled="disabled">Select One...</option>
								';
		$resulta =mysqli_query($conn,"select * from dept order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Position:<span>*</span></a>
                               		<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="pos" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from positions order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
								<div class="cleaner_h5"></div>
								<a class="labels">Job Description:</a>
								<textarea class="textarea" id="jobdesc" style="width:200px"></textarea>
								<div class="cleaner_h5"></div>
								<h5>MEDICAL DETAILS</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right ;text-transform:uppercase">
								 <option value="" selected="selected" disabled="disabled">Select One...</option>
								<option value="A Rh+">A Rh+</option>
								<option value="A Rh-">A Rh-</option>
								<option value="B Rh+">B Rh+</option>
								<option value="B Rh-">B Rh-</option>
								<option value="AB Rh+">AB Rh+</option>
								<option value="AB Rh-">AB Rh-</option>
								<option value="O Rh+">O Rh+</option>
								<option value="O Rh-">O Rh-</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Known Health Problems/Alergies:</a>
								<div class="cleaner_h5"></div>
								<textarea class="textarea" id="alergy"  style="width:200px"></textarea>
								<div class="cleaner_h5"></div>
						</div>
								
								<div id="personal" style="overflow-y:auto">
									<h5>EMERGENCY CONTACT</h5>
								<a class="labels">Name:<span>*</span></a>
								 <input id="ename" name="ename" class="in_field" placeholder="" type="text"  >
								<div class="cleaner_h5"></div>
								<a class="labels">Phone:<span>*</span></a>
                               <input id="ephone" name="dob" class="in_field" placeholder="" type="text"  >
								<div class="cleaner_h5"></div>
								<a class="labels">Postal Add:</a>
                               <input id="epostal" name="dob"  style="width:130px" class="in_field" placeholder="" type="text"  )">
								<div class="cleaner"></div>
								<h5>EDUCATION DETAILS</h5>
								<a class="labels">Course:</a>
								<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="certificate"  class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from courses order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select></div>
		<div class="cleaner_h5"></div>

	
	
		
		<div id="bachelors" style="width:100%;"></div>
	<div class="cleaner"></div>							
							<h5>EXPERIENCE DETAILS</h5>		
						<a class="labels">Experience:</a>
                               		
								<div class="ui-widget"  style="float:right; margin-right:25px">
	<select id="experience" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from experience order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$k=stripslashes($row['id']);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select>
</div>

			<div class="cleaner_h5"></div>								
	<div id="experiences" style="width:100%;"></div>
		<div class="cleaner"></div>		
								<h5>PAYSLIP DETAILS</h5>
								
								<a class="labels">Bank:</a>
                               <div class="ui-widget"  style="float:right; margin-right:25px">
				<select id="bank" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from banktbl order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$bid=stripslashes($row['id']);
								echo"<option value=\"".$bid."#".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
								<div class="cleaner_h5"></div>
								 <a class="labels">A/C No:</a>
                                <input type="text" id="acno" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								
								 <a class="labels">NHIF No.:</a>
                                <input type="text" id="nhif" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">NSSF No.:</a>
                                <input type="text" id="nssf" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>						
									
									
								</div>
								<div id="personal" style="overflow-y:auto">
								</form>
									<h5>SKILLS</h5>
								<a class="labels">Skill:</a>
								<input style="" type="text" id="skill" name="field" class="in_field" placeholder="Type and Press and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="skills" style="width:100%;"></div>
								<div class="cleaner"></div>
								<h5>HOBBIES</h5>
								<a class="labels">Hobby:</a>
								<input type="text" id="hobby" name="field" class="in_field" placeholder="Type and Press and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="hobbies" style="width:100%;"></div>
								<div class="cleaner"></div>
								<h5>PROFILE PICTURE UPLOAD</h5><div class="cleaner_h5"></div>
								</form>
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$emp.'"/>
								<input type="hidden" id="id" name="id"  value="5"/>
								<div class="cleaner_h5"></div>
     							<input type="submit" value="upload" id="send"  style="width:100px;margin-left:60px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h5"></div>
								<h5>OTHER FILES UPLOAD</h5><div class="cleaner_h5"></div>
								<div class="content">
											<div id="drop-files" ondragover="return false">
												Drop Images/Documents Here
											</div>
											
											<div id="uploaded-holder">
												<div id="dropped-files">
													<div id="upload-button">
														<a href="#" class="upload">Upload!</a>
														<a href="#" class="delete">delete</a>
														<span>0 Files</span>
													</div>
												</div>
												<div id="extra-files">
													<div class="number">
														0
													</div>
													<div id="file-list">
														<ul></ul>
													</div>
												</div>
											</div>
											
											<div id="loading">
												<div id="loading-bar">
													<div class="loading-color"> </div>
												</div>
												<div id="loading-content"></div>
											</div>
											</div>
								</div>
								</div>
   							';
							
							break;
							
							case '59.1':
							$cat=$_GET['cat'];
							$k=$_GET['k'];
							$param=$_GET['param'];
							$_SESSION[$cat][$k]=$param;
					
							
							break;
							
							case '59.2':
							$cat=$_GET['cat'];
							$param=$_GET['param'];
							unset($_SESSION[$cat][$param]);
							break;
							
							case 60:
						
						$a=$_GET['a'];
						if($a=='61'){
							$x='Edit Employee Information';
						}
						if($a=='74'){
							$x='Remove Employee Record';
						}
						if($a=='62.1'){
							$x='Employee Chart';
						}
						
							
							echo"<script>$('#stude4').parent().find('input:first').focus();</script>";	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 5px 0 0">
			<h5 style="margin-right:0px; color:#fff">'.$x.'';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help30()\"/></div>";								
echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
				<div class="cleaner_h5"></div>
						<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
						<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="stude4" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by fname");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).'  '.stripslashes($rowa['lname']).'</option>';
							}
		echo'
	</select>
	</div>
				</div>';
				
							
							break;
							case 61:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Employee Panel.Employee No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								
							$_SESSION['lan']=$_SESSION['skl']=$_SESSION['hobby']=$_SESSION['exp']=$_SESSION['edu']=array();
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Employee Panel.Employee No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$param=$_GET['param'];		
							$resultx =mysqli_query($conn,"select * from employee where emp='".$param."'");		
							$rowx=mysqli_fetch_array($resultx);
							$emp=stripslashes($rowx['emp']);
							echo"<script>$('.combos').parent().find('input:first').width(120);	</script>";	
								echo'<script>
								$(window).bind("keydown",
								function(evt){
									
									if(evt.ctrlKey&&(evt.which==83)){
									addnewemp(2);
									evt.preventDefault();
									return false;	
									}
									});
								  </script>';
								
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin-bottom:10px">Edit Employee INFO:'.stripslashes($rowx['fname']).' '.stripslashes($rowx['mname']).' '.stripslashes($rowx['lname']).'-P.F No:'.stripslashes($rowx['pfno']).'</h2>';
								echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewemp(2);"/></div>';
								
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<input type="hidden" name="post" value="Send" />
								<div id="personal" style="overflow:auto">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">PF No:<span>*</span></a>
                                <input type="hidden" id="emp" name="emp" class="in_field" value="'.$emp.'" style="border-color:#f00" disabled="disabled"/> 
                                <input type="text" id="pfno" name="pfno" class="in_field" value="'.stripslashes($rowx['pfno']).'" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">F.Name:<span>*</span></a>
                                <input type="text" id="fname" name="field" class="in_field"onkeyup="validatealp(\'fname\')" value="'.stripslashes($rowx['fname']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">M. Name:<span>*</span></a>
                                <input type="text" id="mname" name="field" class="in_field" value="'.stripslashes($rowx['mname']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">L. Name:<span>*</span></a>
                                <input type="text" id="lname" name="field" class="in_field"  value="'.stripslashes($rowx['lname']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">D.O.B:</a>
							  <input id="dob" name="dob" class="in_field" placeholder="" type="text" value="'.stripslashes($rowx['dob']).'">
							   <div class="cleaner_h5"></div>
								 <a class="labels">Mar. Status:</a>
								 <select class="select" id="mar" name="mar" style="float:right; text-transform:uppercase;width:120px">
								 <option value="'.stripslashes($rowx['marital']).'" selected="selected">'.stripslashes($rowx['marital']).'</option>
								<option value="Single">Single</option>
								<option value="Engaged">Engaged</option>
								<option value="Married">Married</option>
								<option value="Divorced">Divorced</option>
								<option value="Widowed">Widowed</option>
								</select> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Languages:</a>
                               		
								<div class="ui-widget"  style="float:right; margin-right:25px">
	<select id="language" class="combos">
		<option value="">Select one...</option>';
		
		$resulta =mysqli_query($conn,"select * from languages order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
<div class="cleaner_h5"></div>
<div id="languages" style="width:100%;">';
$parts=explode(';',stripslashes($rowx['languages']));
		foreach ($parts as $key => $val) {
		$_SESSION['lan'][$key]=$val;
		echo'<div class="tag alert-info alert-dismissable" id="lantag'.$key.'"><button type="button" class="close" onclick="dismisslan(\''.$key.'\')"  aria-hidden="true">&times;</button>'.$val.'</div>';
		}
echo'</div>
								<div class="cleaner_h5"></div>
								
								 
								
								<a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
							if(stripslashes($rowx['gender'])=='MALE'){
			 echo'<input  id="maleGender" name="gender" type="radio" checked="checked" value="male" class="radio"/>Male
		<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"/>Female'; 
								 }
							 else{
          echo'<input  id="maleGender" name="gender" type="radio" value="male" class="radio"/>Male
		<input  id="femaleGender" name="gender" type="radio" value="female"  checked="checked" class="radio"/>Female';}
		echo'
								<div class="cleaner_h5"></div>
								<a class="labels">ID NO:<span>*</span></a>
                                <input type="text" id="idno" name="field" class="in_field" onkeyup="validatenum(\'idno\')"  value="'.stripslashes($rowx['idno']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">Pin No:</a>
                                <input type="text" id="pinno" name="field" class="in_field" value="'.stripslashes($rowx['pinno']).'" /> 
								<div class="cleaner_h5"></div>	
								<a class="labels">Phone No:<span>*</span></a>
								 <input type="text" id="phone"  style="width:130px" name="phone" class="in_field"  value="'.stripslashes($rowx['phone']).'" onkeyup="validatenum(\'phone\')"/> 
								<div class="cleaner_h5"></div>
								<div id="music"></div>
								<a class="labels">Phone No[2]:</a>
								 <input type="text" id="phone2" style="width:130px" name="phone2" class="in_field"  value="'.stripslashes($rowx['phone2']).'" onkeyup="validatenum(\'phone2\')"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email Add:</a>
								 <input type="text" id="emailadd" name="emailadd"  value="'.stripslashes($rowx['email']).'" class="in_field" style="text-transform:lowercase"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phy Add:</a>
                                <input type="text" id="phyadd" name="phyadd"  value="'.stripslashes($rowx['phyadd']).'" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Location:</a>
                               		
								<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="town" class="combos">
			 <option value="'.stripslashes($rowx['town']).'" selected="selected">'.stripslashes($rowx['town']).'</option>';
		$resulta =mysqli_query($conn,"select * from towns order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
<div class="cleaner_h5"></div>
								</div>
								
								<div id="personal" style="overflow:auto">
									<h5>EMPLOYMENT DETAILS</h5>
								
								<a class="labels">Basic Sal:<span>*</span></a>
								<input type="text" id="sal" name="sal" class="in_field" onkeyup="validatenum(\'sal\')"  value="'.stripslashes($rowx['salary']).'" />
								<div class="cleaner_h5"></div>
								 <a class="labels">D.O.E:<span>*</span></a>
								<input id="datepick" name="doe" class="in_field"  type="text" readonly="readonly"   value="'.stripslashes($rowx['employdate']).'" >
							   <div class="cleaner_h5"></div>
								
								<a class="labels" style="margin-right:30px">Emp. Type:<span>*</span></a>
								';
								
		if(stripslashes($rowx['emptype'])=='PERMANENT'){
			 echo'<input  id="Permanent" name="emptype" type="radio" checked="checked" value="Permanent" class="radio" onclick="hidecontract()"/>Permanent
		<input  id="Contract" name="emptype" type="radio" value="Contract" class="radio" onclick="showcontract()"/>Contract
		<input  id="Other" name="emptype" type="radio" value="Other" class="radio" onclick="hidecontract()"/>Other
		'; 
								 }
								 else if(stripslashes($rowx['emptype'])=='CONTRACT'){
			 echo'<input  id="Permanent" name="emptype" type="radio" value="Permanent" class="radio" onclick="hidecontract()"/>Permanent
		<input  id="Contract" name="emptype" type="radio" value="Contract"  checked="checked" class="radio" onclick="showcontract()"/>Contract
		<input  id="Other" name="emptype" type="radio" value="Other" class="radio" onclick="hidecontract()"/>Other
		'; 
								 }
							 else{
          echo'<input  id="Permanent" name="emptype" type="radio" value="Permanent" class="radio" onclick="hidecontract()"/>Permanent
		<input  id="Contract" name="emptype" type="radio" value="Contract" class="radio" onclick="showcontract()"/>Contract
		<input  id="Temporary" name="emptype" type="radio" value="Temporary"  checked="checked" class="radio" onclick="hidecontract()"/>Temporary
	';}
		echo'
			
								<div id="contract" style="display:none">
								<a class="labels">From:<span>*</span></a>
								<input type="text" id="datepick2" name="from" class="in_field"  value="'.stripslashes($rowx['contractfrom']).'"/>
								<div class="cleaner_h5"></div>
								<a class="labels">To:<span>*</span></a>
								<input type="text" id="datepick3" name="to" class="in_field" value="'.stripslashes($rowx['contractto']).'"/>
								</div>
								
								<div class="cleaner_h5"></div>
								
									<a class="labels">Branch:<span>*</span></a>
                                <div class="ui-widget" style="float:right; margin-right:25px">
								<select id="branch" class="combos">
									<option value="WAJIR" selected="selected" disabled="disabled">WAJIR</option>
								</select></div>
								<div class="cleaner_h5"></div>
								
								<a class="labels">Dept:<span>*</span></a>
                                  <div class="ui-widget" style="float:right; margin-right:25px">
	<select id="dept" class="combos"><option value="" selected="selected" disabled="disabled">Select One...</option>
		<option value="'.stripslashes($rowx['dept']).'" selected="selected">'.stripslashes($rowx['dept']).'</option>';
		$resulta =mysqli_query($conn,"select * from dept order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Position:<span>*</span></a>
                               		<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="pos" class="combos">
		<option value="'.stripslashes($rowx['position']).'" selected="selected">'.stripslashes($rowx['position']).'</option>';
		$resulta =mysqli_query($conn,"select * from positions order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
								<div class="cleaner_h5"></div>
								<a class="labels">Job Description:</a>
								<textarea class="alergy" id="jobdesc" style="width:200px">'.stripslashes($rowx['jobdesc']).'</textarea>
								<div class="cleaner"></div>
								<h5>MEDICAL DETAILS</h5>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right ;text-transform:uppercase">
								 <option value="'.stripslashes($rowx['bgroup']).'" selected="selected">'.stripslashes($rowx['bgroup']).'</option>
								<option value="A Rh+">A Rh+</option>
								<option value="A Rh-">A Rh-</option>
								<option value="B Rh+">B Rh+</option>
								<option value="B Rh-">B Rh-</option>
								<option value="AB Rh+">AB Rh+</option>
								<option value="AB Rh-">AB Rh-</option>
								<option value="O Rh+">O Rh+</option>
								<option value="O Rh-">O Rh-</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Known Health Problems/Alergies:</a>
								<div class="cleaner_h5"></div>
								<textarea class="alergy" id="alergy" style="width:200px">'.stripslashes($rowx['alergy']).'</textarea>
								<div class="cleaner_h5"></div>
						

								
								</div>
								
								
								<div id="personal" style="overflow:auto">
							<h5>EMERGENCY CONTACT</h5>
								<a class="labels">Name:<span>*</span></a>
                               <input id="ename" name="ename" class="in_field" placeholder=""  value="'.stripslashes($rowx['ename']).'" type="text">  
								<div class="cleaner_h5"></div>
								<a class="labels">Phone:<span>*</span></a>
                               <input id="ephone" name="dob" class="in_field" placeholder="" type="text"  value="'.stripslashes($rowx['ephone']).'" >
								<div class="cleaner_h5"></div>
								<a class="labels">Postal Add:</a>
                               <input id="epostal" name="dob" class="in_field" style="width:130px" placeholder="" type="text"  value="'.stripslashes($rowx['epostal']).'" >
								<div class="cleaner"></div>
								<h5>EDUCATION DETAILS</h5>
								
								<a class="labels">Course:</a>
								<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="certificate"  class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from courses  order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select></div><div class="cleaner_h5"></div>
		
		<div id="bachelors" style="width:100%;">';
$parts=explode(';',stripslashes($rowx['education']));
		foreach ($parts as $key => $val) {
		$_SESSION['edu'][$key]=$val;
		echo'<div class="tag alert-info alert-dismissable" id="edutag'.$key.'"><button type="button" class="close" onclick="dismissbach(\''.$key.'\')"  aria-hidden="true">&times;</button>'.$val.'</div>';
		}
echo'</div>
	<div class="cleaner"></div>							
							<h5>EXPERIENCE DETAILS</h5>		
						<a class="labels">Experience:</a>
                               		
								<div class="ui-widget"  style="float:right; margin-right:25px">
	<select id="experience" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from experience order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select>
</div>

			<div class="cleaner_h5"></div>								
	<div id="experiences" style="width:100%;">';
		$parts=explode(';',stripslashes($rowx['experience']));
		foreach ($parts as $key => $val) {
		$_SESSION['exp'][$key]=$val;
		echo"<div class=\"tag alert-info alert-dismissable\" id=\"exptag".$key."\"><button type=\"button\" class=\"close\" onclick=\"dismissexp('".$key."')\"  aria-hidden=\"true\">&times;</button>".$val."</div>";
		}
echo'</div>
		<div class="cleaner"></div>		
								<h5>PAYSLIP DETAILS</h5>
								<a class="labels">Bank:</a>
                               <div class="ui-widget"  style="float:right; margin-right:25px">
				<select id="bank" class="combos">
		<option value="'.stripslashes($rowx['bid']).'#'.stripslashes($rowx['bname']).'" selected="selected">'.stripslashes($rowx['bname']).'</option>';
		$resulta =mysqli_query($conn,"select * from banktbl order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$bid=stripslashes($row['id']);
								echo"<option value=\"".$bid."#".$name."\">".$name."</option>";
						}
		echo'</select>
</div>
								<div class="cleaner_h5"></div>
								 <a class="labels">A/C No:</a>
                                <input type="text" id="acno" name="field" class="in_field" value="'.stripslashes($rowx['acno']).'" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">NHIF No.:</a>
                                <input type="text" id="nhif" name="field" class="in_field" value="'.stripslashes($rowx['nhif']).'" /> 
								<div class="cleaner_h5"></div>
								 <a class="labels">NSSF No.:</a>
                                <input type="text" id="nssf" name="field" class="in_field" value="'.stripslashes($rowx['nssf']).'" /> 
								<div class="cleaner_h5"></div>					
								</div>
								
								
								<div id="personal" style="overflow:auto">
							
								<h5>SKILLS</h5>
								<a class="labels">Skill:</a>
								<input style=" type="text" id="skill" name="field" class="in_field" placeholder="Type and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="skills" style="width:100%;">';
		$parts=explode(';',stripslashes($rowx['skills']));
		foreach ($parts as $key => $val) {
		$_SESSION['skl'][$key]=$val;
		echo"<div class=\"tag alert-info alert-dismissable\" id=\"skilltag".$key."\"><button type=\"button\" class=\"close\" onclick=\"dismissskl('".$key."')\"  aria-hidden=\"true\">&times;</button>".$val."</div>";
		}
echo'</div>
								<div class="cleaner"></div>
								<h5>HOBBIES</h5>
								<a class="labels">Hobby:</a>
								<input type="text" id="hobby" name="field" class="in_field" placeholder="Type  and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="hobbies" style="width:100%;">';
		$parts=explode(';',stripslashes($rowx['hobbies']));
		foreach ($parts as $key => $val) {
		$_SESSION['hobby'][$key]=$val;
		echo"<div class=\"tag alert-info alert-dismissable\" id=\"hobbytag".$key."\"><button type=\"button\" class=\"close\" onclick=\"dismisshobby('".$key."')\"  aria-hidden=\"true\">&times;</button>".$val."</div>";
		}
echo'</div>
								<div class="cleaner"></div>
								<h5>PROFILE PICTURE UPLOAD</h5>
								<div class="cleaner_h5"></div>
								</form>
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" src="images/employees/'.$emp.'.jpg">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$emp.'"/>
								<input type="hidden" id="id" name="id"  value="5"/>
								<div class="cleaner_h5"></div>
     							<input type="submit" value="upload" id="send"  style="width:100px;margin-left:60px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h5"></div>
								<h5>OTHER FILES UPLOAD</h5><div class="cleaner_h5"></div>
								<div class="content">
											<div id="drop-files" ondragover="return false">
												Drop Images/Documents Here
											</div>
											
											<div id="uploaded-holder">
												<div id="dropped-files">
													<div id="upload-button">
														<a href="#" class="upload">Upload!</a>
														<a href="#" class="delete">delete</a>
														<span>0 Files</span>
													</div>
												</div>
												<div id="extra-files">
													<div class="number">
														0
													</div>
													<div id="file-list">
														<ul></ul>
													</div>
												</div>
											</div>
											
											<div id="loading">
												<div id="loading-bar">
													<div class="loading-color"> </div>
												</div>
												<div id="loading-content"></div>
											</div>
											</div>
								
							</div>
								</div>
								';
						
							break;
							
							case 62:
							$param=$_GET['param'];
									echo"<script>$('#emp1').parent().find('input:first').focus();</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude">';
								
							echo'	<h5 style="margin-left:10px">Employee Search Panel</h5>';							
echo' <div class="ui-widget" style="margin:10px; float:left">
	<select id="emp1">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1  order by fname");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'</option>';
							}
	echo'</select>
	</div>

	<div id="cate" style="float:right">
				<h5 style="margin-right:10px">Browse by Department</h5>
						<select class="select" id="categ" name="categ" onchange="categemp();"">';
				$resulta =mysqli_query($conn,"select * from dept order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$name."\">".$name."</option>";
							}
		
						echo'</select>
	</div>
							<div id="results" style="min-height:350px; min-width:700px">';
									$per_page = 10;
                    					$result =mysqli_query($conn,"select * from employee where status=1");
                    					$count = mysqli_num_rows($result);
                    					$pages = ceil($count/$per_page);
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate('0.4','".$param."');</script>";
										recent(4,5);
										}
										
											else {
											echo "<script>paginate(5,'".$param."');</script>";
											recent(4,5);
											}	
									

							break;
							
							case '62.1':
							
							
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee File Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from employee where emp='".$param."'");		
							$row=mysqli_fetch_array($result);
							$emp=stripslashes($row['emp']);
			
						echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">Employee Chart:'.stripslashes($row['fname']).' '.stripslashes($row['mname']).' '.stripslashes($row['lname']).'-P.F No:'.stripslashes($row['emp']).'</h2>';
			echo'<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>		<input type="hidden" id="stamp" value="'.$emp.'"/>	';					
														
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
	<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0">
	<div id="wrapper" style="width:100%;  margin:0 auto;border-right:2px solid #0085b2; border-left:2px solid #0085b2;border-top:2px solid #0085b2;">
<div style="float:left; width:200px">
<img src="'.stripslashes($row['photo']).'" alt="Photo" style="max-width:95%; float:left; margin:2%; border:1px solid #272727" />
<div style="float:left; width:200px">
<h5 style="font-size:20px; text-decoration:underline; color:#0085b2">Attendance</h5>
<canvas id="pie" height="100%" width="100%" style="background:#fff; float:left"></canvas>';

$a=stripslashes($row['attendance']);
$b=stripslashes($row['totattendance'])-stripslashes($row['attendance']);
echo'<script>
var pieData = [
				{
					value: '.$b.',
					color:"#fff"
				},
				
				{
					value : '.$a.',
					color : "#F38630"
				}
			
			];
			
			new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
			</script>
			</div>
 </div>
<div style="float:left; width:780px;  border-left:2px solid #0085b2; height:400px; overflow-y:auto">
	<ul style="list-style:none; width:330px; float:left; text-align:left; padding:10px">
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Personal Details</h5>
            <li class=""><strong>P.F No: </strong>'.stripslashes($row['pfno']).'</li>
			 <li class=""><strong>Names: </strong>'.stripslashes($row['fname']).' '.stripslashes($row['mname']).' '.stripslashes($row['lname']).'</li>
             <li class=""><strong>D.O.B: </strong>'.stripslashes($row['dob']).'</li>
			  <li class=""><strong>Gender: </strong>'.stripslashes($row['gender']).'</li>
			   <li class=""><strong>Marital Status: </strong>'.stripslashes($row['marital']).'</li>
              <li class=""><strong>Phone: </strong>'.stripslashes($row['phone']).'</li>
			    <li class=""><strong>ID No: </strong>'.stripslashes($row['idno']).'</li>
				  <li class=""><strong>Pin No: </strong>'.stripslashes($row['pinno']).'</li>
              <li class=""><strong>Languages: </strong>'.stripslashes($row['languages']).'</li>
       		 <li class=""><strong>Address: </strong>'.stripslashes($row['phyadd']).'</li>
			  <li class=""><strong>Location: </strong>'.stripslashes($row['town']).'</li>
             </ul>
			 
			  <ul style="list-style:none; width:350px; float:left; text-align:left;padding:10px">
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Employment Details</h5>
            <li class=""><strong>Salary: </strong>'.stripslashes($row['salary']).'</li>
             <li class=""><strong>D.O.E: </strong>'.stripslashes($row['employdate']).'</li>
			  <li class=""><strong>Emp Type: </strong>'.stripslashes($row['emptype']).'</li>';
			  if(stripslashes($row['emptype'])=='CONTRACT'){
				echo'<li class=""><strong>From: </strong>'.stripslashes($row['contractfrom']).'</li>
			  <li class=""><strong>To: </strong>'.stripslashes($row['contractto']).'</li>';  
			  }
			  
			   echo'<li class=""><strong>Branch: </strong>'.stripslashes($row['branch']).'</li>
			   <li class=""><strong>Dept: </strong>'.stripslashes($row['dept']).'</li>
              <li class=""><strong>Position: </strong>'.stripslashes($row['position']).'</li>
			    <li class=""><strong>Job Desc: </strong>'.stripslashes($row['jobdesc']).'</li>';
				 if(stripslashes($row['status'])=='0'){
			echo'<li class=""><strong>Termination Date: </strong>'.stripslashes($row['terminationdate']).'</li>
			  <li class=""><strong>Termination Reason: </strong>'.stripslashes($row['terminationreason']).'</li>';  
			  }
			  
				
            echo' </ul>
			
<div class="cleaner" style="border-bottom:2px solid #0085b2"></div>


			  <ul style="list-style:none; width:330px; float:left; text-align:left;padding:10px">
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Medical Details</h5>
            <li class=""><strong>Blood Group: </strong>'.stripslashes($row['bgroup']).'</li>
             <li class=""><strong>Known Problems: </strong>'.stripslashes($row['alergy']).'</li>
			   <div class="cleaner_h10"></div>  
			 <h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Emergency Contact Details</h5>
            <li class=""><strong>Names: </strong>'.stripslashes($row['ename']).'</li>
             <li class=""><strong>Phone: </strong>'.stripslashes($row['ephone']).'</li>
			 <li class=""><strong>Postal Address: </strong>'.stripslashes($row['epostal']).'</li>
			  <div class="cleaner_h10"></div>  
			 <h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Payslip Details</h5>
            <li class=""><strong>Bank: </strong>'.stripslashes($row['bname']).'</li>
             <li class=""><strong>A/C No: </strong>'.stripslashes($row['acno']).'</li>
			 <li class=""><strong>NSSF No: </strong>'.stripslashes($row['nssf']).'</li>
			 <li class=""><strong>NHIF No: </strong>'.stripslashes($row['nhif']).'</li>
			 </ul>
			 
			 <ul style="list-style:none; width:330px; float:left; text-align:left;padding:10px">
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Education Details</h5>
            <li class="">'.stripslashes($row['education']).'</li>
			<div class="cleaner_h10"></div>  
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Experience Details</h5>
            <li class="">'.stripslashes($row['experience']).'</li>
			<div class="cleaner_h10"></div>  
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Skills</h5>
            <li class="">'.stripslashes($row['skills']).'</li>
			<div class="cleaner_h10"></div>  
			<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Hobbies</h5>
            <li class="">'.stripslashes($row['hobbies']).'</li>
			 </ul>
			 
	<div class="cleaner" style="border-bottom:2px solid #0085b2"></div>
<h5 style="font-size:15px; text-decoration:underline; color:#0085b2">Documents</h5> <div class="cleaner_h5"></div> 
';

$resultd =mysqli_query($conn,"select * from empdocs where empno='".$emp."' order by stamp desc");
$num_results = mysqli_num_rows($resultd);
for ($i=0; $i <$num_results; $i++) {		
$rowd=mysqli_fetch_array($resultd);
echo"<div id=\"photo".stripslashes($rowd['id'])."\" style=\"float:left;position:relative;width:19%;height:200px; margin-left:2%;border:1px solid; cursor:pointer \" onclick=\"window.open('http://".$server."/Q-Afya/upload/".stripslashes($rowd['image'])."')\">";
if(exif_imagetype('upload/'.stripslashes($rowd['image']).'')){
echo'
  <img src="upload/'.stripslashes($rowd['image']).'" alt="Photo" style="float:left;width:100%; height:90%">';
}
else{
	echo'<img src="images/adobe.png" alt="Photo" style="float:left; ;width:100%; height:90%">';
}
echo'<p>'.stripslashes($rowd['image']).'</p></div>';					
}
		  	 
echo'
 <div id="picreview"  class="usp"></div>

<div class="cleaner_h5"></div>
								<h5>OTHER FILES UPLOAD</h5><div class="cleaner_h5"></div>
								<div class="content">
											<div id="drop-files" ondragover="return false" style="width:100%">
												Drop Images/Documents Here
											</div>
											
											<div id="uploaded-holder">
												<div id="dropped-files">
													<div id="upload-button">
														<a href="#" class="upload">Upload!</a>
														<a href="#" class="delete">delete</a>
														<span>0 Files</span>
													</div>
												</div>
												<div id="extra-files">
													<div class="number">
														0
													</div>
													<div id="file-list">
														<ul></ul>
													</div>
												</div>
											</div>
											
											<div id="loading">
												<div id="loading-bar">
													<div class="loading-color"> </div>
												</div>
												<div id="loading-content"></div>
											</div>
											</div>

  <div class="cleaner_h50"></div>  <div class="cleaner_h50"></div>
 </div>
	
	</div>
								
								</div>
   							';
							break;
							
							case 63:
							echo'<div id="newstude">
						<div id="findstude">
								
								<h5 style="margin-left:10px">Payroll Panel</h5>';
								echo'<div class="cleaner_h20"></div>
								<div id="loading"></div>
								<div id="results" style="min-height:350px; min-width:600px;">
								<div style="float:left;width:360px;min-height:350px; border-right:2px solid #0085b2; padding:0 10px">
								<h5 style="text-align:center">Create Payroll</h5>
								<div class="cleaner_h5"></div>
					<h5>Select Month</h5>
				<input class="input_field" style="float:right;  margin-right:120px" id="default_widget" type="text"/>
				<div class="cleaner_h5"></div>
					<input type="button" value="Submit" style="float:left; margin-left:100px; 
									cursor:pointer; width:80px" class="select" onclick="submpay();"/>	
								<div id="aes" style="width:40px; height:40px; float:left; margin-left:20px"/>
							<div class="cleaner_h5"></div>
							<h5 style="border-top:2px solid #0085b2; text-align:center; padding-top:10px">Edit Payroll</h5>	
								
								<div class="cleaner_h5"></div>
					<h5>Select Month</h5>
				<input class="input_field" style="float:right;  margin-right:120px" id="default_widgeta" type="text"/>
				<div class="cleaner_h5"></div>
					<input type="button" value="Submit" style="float:left; margin-left:100px; 
									cursor:pointer; width:80px" class="select" onclick="submeditpay();"/>	
								<div id="bes" style="width:40px; height:40px; float:left; margin-left:20px"/>	
								</div>
							
								<div  style="float:left;min-height:350px; padding:0 10px">
								<h5 style="text-align:center">Payslips</h5>
								<div class="cleaner_h5"></div>
						
				Month:<input class="input_field" style="float:right;  margin-right:120px" id="default_widgetb" type="text"/>	
				<div class="cleaner_h5"></div>	
				<h5>Single PaySlip</h5>
					
						<input class="input_field" style="float:left; width:200px" id="empid" type="text" placeholder="Enter Emp ID."> <div class="cleaner_h5"></div>
					<input type="button" value="Submit" style="float:left; margin-left:60px; 
									cursor:pointer; width:80px" class="select" onclick="genpayslip(1);"/>	
								<div id="ges" style="width:40px; height:40px; float:left; margin-left:20px"/>
								<div class="cleaner_h20"></div>	
							<h5 style="border-top:2px solid #0085b2; padding-top:10px">Multiple PaySlips</h5>	
							<select style="float:left; width:210px"class="select" id="multslp" name="category" size="1" >
									<option value="Accounting">Accounting</option>
								<option value="Medical">Medical</option>
								<option value="Kitchen">Kitchen</option>
								<option value="Cleaning">Cleaning</option>
								<option value="Others">Others</option>
									</select>
									<div class="cleaner_h5"></div>
								<input type="button" value="Submit" style="float:left; margin-left:60px; 
									cursor:pointer; width:80px" class="select" onclick="multpayslip(2);"/>	
									<div id="hes" style="width:40px; height:40px; float:left; margin-left:20px"/>
								</div>
						
									';
									
									recent();
							
							break;
							
							case 64:
							$mon=$_GET['mon'];	
							$result =mysqli_query($conn,"select * from salaryledger where month='".$mon."'");
							$num_results = mysqli_num_rows($result);
							if($num_results==0){
							$num_results = mysqli_num_rows($result);
							$resulta = mysqli_query($conn,"SELECT * from salaryledger order by stamp desc");
							
								$row=mysqli_fetch_array($resulta);
								$bal=stripslashes($row['Balance']);
								$am=stripslashes($row['amount']);
							$stp = date('YmdHis');
							
							$resultb = mysqli_query($conn,"insert into salaryledger values('".$mon."','0','".$stp."','0','0','0','0','0','0','0','".$bal."',1)");
							$resultc = mysqli_query($conn,"CREATE TABLE ".$mon." (serial INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY) AS (SELECT * FROM salary)");
							$resultd = mysqli_query($conn,"update ".$mon." set month='".$mon."'");
							
							
							
							echo'
							
							<div id="newstude">
								<div id="createpay">
								<h5 style="margin-left:10px">Payroll of Month: '.$mon.'</h5>';
							echo"<div id=\"im\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/foto.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Commit Payroll\" onclick=\"commitpay('".$mon."');\"/></div>";
								echo"<img src=\"images/print.png\"  style=\"float:right; cursor:pointer; margin:-20px 10px 0 0\" title=\"Pull Report\" onclick=\"window.open('payreport.php?id=1&reg=".$mon."')\"/>";
								echo"<img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"float:right; cursor:pointer; margin:-20px 10px 0 0\" title=\"Add to Payroll\" onclick=\"addtopay('".$mon."');\"/>";
								
								echo'<div id="results" style="min-height:380px; min-width:990px;">';
									
									 	$per_page = 10;
                    					$result =mysqli_query($conn,"select * from ".$mon."");
                    					$count = mysqli_num_rows($result);
                    					$pages = ceil($count/$per_page);
										
                    					echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:380px;"></div>
                						<div class="cleaner_h5"></div>';
                    					
					 					echo "<script>paginate(9,'".$mon."');</script>
										</div></div></div>";
							}
							else  {echo"<script>
								$().customAlert();
								alert('Sorry!', '<p>Month already exists in the Salary Ledger!!!</p>');
								e.preventDefault();
								
								</script>";
							}
							
									break;
									
								case 65:
							$mon=$_GET['mon'];	
						
							
								
							echo'
							
							<div id="newstude">
								<div id="createpay">
								<h5 style="margin-left:10px">Payroll of Month: '.$mon.'</h5>';
								echo"<div id=\"im\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/foto.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Commit Payroll\" onclick=\"commitpay('".$mon."');\"/></div>";
								echo"<img src=\"images/print.png\"  style=\"float:right; cursor:pointer; margin:-20px 10px 0 0\" title=\"Pull Report\" onclick=\"window.open('payreport.php?id=1&reg=".$mon."')\"/>";
								
								echo"<img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"float:right; cursor:pointer; margin:-20px 10px 0 0\" title=\"Add to Payroll\" onclick=\"addtopay('".$mon."');\"/>";
											
								
								
								echo'<div id="results" style="min-height:380px; min-width:990px;">';
									
									 	$per_page = 10;
                    					$result =mysqli_query($conn,"select * from ".$mon."");
                    					$count = mysqli_num_rows($result);
                    					$pages = ceil($count/$per_page);
										
                    					echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:380px;"></div>
                						<div class="cleaner_h5"></div>';
                    					
					 					echo "<script>paginate(9,'".$mon."');</script></div></div></div>";
										
							
									break;
									
									case 66:
									
							$emp=$_GET['emp'];
							$cas=$_GET['cas'];
							$mon=$_GET['mon'];
							
							$result =mysqli_query($conn,"select * from salaryledger where month='".$mon."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>=1){
							
								switch($cas){
									case 1:
									echo'<p id="regno" style="display:none">'.$emp.'</p>
							<p id="mon" style="display:none">'.$mon.'</p>';
									$result =mysqli_query($conn,"select * from ".$mon." where emp='".$emp."' and status=1");
								
									$num_results = mysqli_num_rows($result);
									if($num_results>=1){
										echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
										?>
<script>
										var emp = $('#regno').html();
										var mon = $('#mon').html();
										setTimeout(function() {
										window.open("payslip.php?id=1&emp=" + emp  + '&' + "\nmon=" + mon);},1000);
										</script>
<?php	}else{echo'<script>notregisteredemp();</script>';}
	
										break;
										
										case 2:
									echo'<p id="no" style="display:none">'.$emp.'</p>
							<p id="mon" style="display:none">'.$mon.'</p>';
										echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
									?>
<script>
										var empp = $('#no').html();
										var mon = $('#mon').html();
										setTimeout(function() {
										window.open("payslip.php?id=2&emp=" + empp  + '&' + "\nmon=" + mon);},1000);
										</script>
<?php										
										break;
								}
							}else echo'<p><img src="images/delete.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';	
								
							break;
							case 67:
							$mon=$_GET['mon'];
							echo'
							<div id="loading" ></div>
                    		<div id="display" style="height:380px;">
							<h5 style="margin-left:10px">Add an Employee to Payroll</h5>
							<div class="cleaner_h5"></div>
									<div id="inside">
									<div id="title">
									<div id="figure3" style="margin-left:0px">Emp No.</div>
									<div id="figure3">Name</div>
									<div id="figure3">Sal.</div>
									<div id="figure3">Allow.</div>
									<div id="figure3">Adva.</div>
									<div id="figure3">Insu.</div>
									<div id="figure3">Deds.</div>
									<div id="figure3">OT hrs.</div>
									<div id="figure3">Rate.</div>
									<div id="figure3">Total OT.</div>
									<div id="figure3">Net Pay</div>
									<div id="figure3">Save</div>
									<div id="figure3">Cancel</div>
									</div>
									<div id="normal">
									<div class="figure4"><input type="text" class="payinput" value="" id="emp"/></div>
									<div class="figure4"><input type="text" class="payinput" value="" id="name"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="sal"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="allow"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="adva"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="ins"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="ded"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="hrs"/></div>
									<div class="figure4"><input type="text" class="payinput" value="0" id="rate"/></div>
									<div class="figure4">';
				echo"<input type=\"text\" onclick=\"calctotal()\" id=\"otot\" class=\"payinput\">";
				echo'</div><div class="figure4">';
				echo "<input type=\"text\" onclick=\"calcnetal()\" id=\"nett\" class=\"payinput\"></div>";
				echo'<div class="figure4" id="save" >';
			echo"<img src=\"images/save.jpg\" width=\"16\" height=\"18\"  onclick=\"saveaddemp(1,'".$mon."')\"/></div>";
				echo'<div class="figure4" id="save" >';
				echo"<img src=\"images/delete.png\" width=\"20\" height=\"20\"  onclick=\"pagerefresh(1,9,'".$mon."')\"/></div>";
				echo'</div></div></div>';
						break;
						
						case 68:
						echo'<div id="newstude">
						<div id="findstude">
								
								<h5 style="margin-left:10px">Employee Reports Panel</h5>';
							
			
								echo'<div class="cleaner_h20"></div>
								<div id="loading"></div>
								<div id="results" style="min-height:350px; min-width:600px;">
								<div style="float:left;width:230px;min-height:350px; border-right:2px solid #0085b2; padding:0 10px">
								<h5 style="text-align:center">Employee Reports</h5>
								<div class="cleaner_h5"></div>
					<h5>Single Report</h5>
					
						<input class="input_field" style="float:left; width:200px" id="emprepee" type="text" placeholder="Enter Employee ID."> <div class="cleaner_h5"></div>
					<input type="button" value="Submit" style="float:left; margin-left:60px; 
									cursor:pointer; width:80px" class="select" onclick="employeereport(1);"/>	
								<div id="aes" style="width:40px; height:40px; float:right; margin-right:20px"/>
								<div class="cleaner_h20"></div>	
							<h5 style="border-top:2px solid #0085b2; padding-top:10px">Multiple Reports</h5>	
							<select style="float:left; width:210px"class="select" id="multrep" name="category" size="1" >
									<option value="Accounting">Accounting</option>
									<option value="Medical">Medical</option>
								<option value="Kitchen">Kitchen</option>
								<option value="Cleaning">Cleaning</option>
								<option value="Others">Others</option>
									</select>
									<div class="cleaner_h5"></div>
								<input type="button" value="Submit" style="float:left; margin-left:60px; 
									cursor:pointer; width:80px" class="select" onclick="multipleempreport(2);"/>	
									<div id="bes" style="width:40px; height:40px; float:right; margin-right:20px"/>
								</div>
							
								<div  style="float:left;width:230px;min-height:350px;border-right:2px solid #0085b2;  padding:0 10px">
								<h5 style="text-align:center">Salary Ledger Report</h5>
					
					<h5 style="margin-right:10px; text-align:center">Month & Year Range:</h5>
					<div class="cleaner_h5"></div>
					From:
					<input class="input_field" style="float:right; width="40px" margin-right:80px" id="default_widget" type="text"/>
					<div class="cleaner_h5"></div>
					To:
					<input class="input_field" style="float:right; width="40px" margin-right:80px" id="other_widget" type="text"/> 
					<div class="cleaner_h5"></div>
				
					<input type="button" value="Submit" style="float:left; margin-left:70px; 
									cursor:pointer; width:80px" class="select" onclick="generatesal();"/>	
									<div id="des" style="width:40px; height:40px; float:right; margin-right:20px"/>
								</div>
								<div  style="float:left;min-height:350px;border-right:0px solid #0085b2; padding:0 10px">
								<h5 style="text-align:center">Payroll Reports</h5>
	<h5 style="margin-right:10px; text-align:center">Single Month Payroll:</h5>
					<div class="cleaner_h5"></div>
					Month:
					<input class="input_field" style="float:right; width="40px" margin-right:80px" id="default_widgeta" type="text"/>
					<div class="cleaner_h5"></div>
	<input type="button" value="Submit" style="float:left; margin-left:60px; cursor:pointer; width:60px" class="select" onclick="generatepay();">
	<div id="ees" style="width:40px; height:40px; float:left; margin:0px 0 0 10px;"/>
		<div class="cleaner_h5"></div>
	<h5 style="border-top:2px solid #0085b2; padding-top:10px">Multiple Month Payroll</h5>	
	
					<div class="cleaner_h5"></div>
					From:
					<input class="input_field" style="float:right; width="40px" margin-right:80px" id="default_widgetb" type="text"/>
					<div class="cleaner_h5"></div>
					To:
					<input class="input_field" style="float:right; width="40px" margin-right:80px" id="other_widgetb" type="text"/> 
					<div class="cleaner_h5"></div>
	<input type="button" value="Submit" style="float:left; margin-left:60px; cursor:pointer; width:60px" class="select" onclick="generatepaymult();"/>	<div id="fes" style="width:40px; height:40px; float:left; margin:0px 0 0 10px;"/>					
										
										
								</div>
									';
							recent();
							
							break;
							
							case 69:
							$reg=$_GET['param'];
							$cas=$_GET['cas'];
							echo'<p id="regno" style="display:none">'.$reg.'</p>';
							
							switch($cas){
									case 1:
									$result =mysqli_query($conn,"select * from employee where emp='".$reg."' and status=1");
									$num_results = mysqli_num_rows($result);
									if($num_results>=1){
										echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
										echo"<script>
										var reg = $('#regno').html();
										setTimeout(function() {
										window.open('empreport.php?id=1&reg=' + reg);},1000);
										</script>";
										
									}else{echo'<script>notregisteredemp();</script>';}
									
										break;
										
										case 2:
									
										echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:-10px 0 0 0px"></p>';
										echo"<script>
										var reg = $('#regno').html();
										setTimeout(function() {
										window.open('empreport.php?id=2&reg=' + reg);},1000);
										</script>";
										
										break;
										
							
							}
							break;
							
							case 70:
							$monfrom=$_GET['monfrom'];	
							$monto=$_GET['monto'];
							$resulta =mysqli_query($conn,"select * from ".$monfrom."");
							$resultb =mysqli_query($conn,"select * from ".$monto."");
							if($resulta&&$resultb){
							echo"<script>window.open('payreport.php?id=3&reg=".$monfrom."&reg2=".$monto."')</script>";
										}
										else{
											echo"<script>
								$().customAlert();
								alert('Sorry!', '<p>Month selected does not exist in the Salary Ledger!!!</p>');
								e.preventDefault();
								
								</script>";}
							break;
							
							
							case 71:
							$mon=$_GET['mon'];	
							$result =mysqli_query($conn,"select * from ".$mon."");
							if($result){
								echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:0px 0 0 10px"></p>';
							echo"<script>window.open('payreport.php?id=1&reg=".$mon."')</script>";
										}
										else{
											echo"<script>
								$().customAlert();
								alert('Sorry!', '<p>Month selected does not exist in the Salary Ledger!!!</p>');
								e.preventDefault();
								
								</script>";}
							break;
							
							case 72:
							$monfrom=$_GET['monfrom'];	
							$monto=$_GET['monto'];
							$resulta =mysqli_query($conn,"select * from ".$monfrom."");
							$resultb =mysqli_query($conn,"select * from ".$monto."");
							if($resulta&&$resultb){
							echo'<p><img src="images/tick.png" style=" width:30px; height:30px; margin:0px 0 0 0px"></p>';
							echo"<script>window.open('payreport.php?id=2&reg=".$monfrom."&reg2=".$monto."')</script>";
										}
										else{
											echo"<script>
								$().customAlert();
								alert('Sorry!', '<p>Month selected does not exist in the Salary Ledger!!!</p>');
								e.preventDefault();
								
								</script>";}
							break;
							
						case 73:
					$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee Attendance Manager Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">ATTENDANCE MANAGER</h2>';
			echo'<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>	
				<div class="cleaner" style="border-bottom:2px solid #333"></div>
	<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0">		
			 <div id="title">
			 <div class="figure1" id="tdate" style="float:left;margin-left:0px;width:100%; border-bottom:1px solid #75c5cf">
			<b style="float:left;margin-LEFT:5px;margin-top:5px;color:#0085b2">Date: </b>
			 <input id="datepick" name="doe" class="in_field" value="'.date('Y/m/d').'"  type="text" readonly="readonly" style="width:150PX;float:left; margin-left:10px"> 
			 	   <img src="images/zoom.png" style="width:30px; height:30px; float:left; margin-left:10px; cursor:pointer" onclick="showattendance()" title="View Attendance">
				
			 <div id="resu" style=""></div>
			</div>
			 </div>
			 
         
		 			<div id="title">
									<div id="figure1" style="margin-left:0px;width:150PX">PF No</div>
									<div id="figure1" style="margin-left:0px;width:500PX">Name</div>
									<div id="figure1" style="width:200PX">Action</div>
					</div>
					<div id="display">';
					$result =mysqli_query($conn,"select * from ".date('m_Y')." order by names");
					$num_results = mysqli_num_rows($result);	
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									if($i%2==0){
	echo'<div class="normal1"  style="min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none">';
	}else{
		echo'<div  class="normal2" style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none">';
	}	
									
									echo"
									<div id=\"figure2\" style=\"width:162px;\" >".stripslashes($row['pfno'])."</div>
									<div id=\"figure2\" style=\"width:500px\" >".stripslashes($row['names'])."</div>";
									
									$x=date('d').'c';
									$status=stripslashes($row[$x]);
									if($status=='0'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#f00\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\"  disabled=\"disabled\">Select</option>
									<option selected=\"selected\" value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									else if($status=='1'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#0f6\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\"  selected=\"selected\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else if($status=='2'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#0ff\" id=\"back".stripslashes($row['id'])."\" >
									<select class=\"select\"  style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  selected=\"selected\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else if($status=='3'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0;background:#ff3\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  selected=\"selected\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else {
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0\" id=\"back".stripslashes($row['id'])."\" >
									<select   class=\"select\"  style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\"  selected=\"selected\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									echo"
									</div>
									<div class=\"cleaner\"></div>";
					}
		 
							
							echo'</div></div></div>';
							
								break;
								
								case 74:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." removes employee record.Employee No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$emp=$_GET['param'];
							$resulta = mysqli_query($conn,"DELETE from employee where emp='".$emp."'");
							if($resulta){
							echo"
										<script>
										$().customAlert();
										alert('Success!', '<p>Delete Successful.</p>');
										e.preventDefault();
										</script>";	
							}
							
							
							break;
							
							case 75:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee Chart Panel.Registration No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$emp=$_GET['param'];
							$result =mysqli_query($conn,"select * from employee where emp='".$emp."'");		
							$num_results = mysqli_num_rows($result);
							if($num_results>=1){
							echo"<script>window.open('empreport.php?id=1&reg=' + '".$emp."');</script>";
							}else{echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>No Employee is registered under that number.</p>');
										e.preventDefault();
										</script>";}
								
								break;
							
							case 76:	
							
					echo"<script>$('#emp2').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Ex-Employees Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude">';
								
							echo'	<h5 style="margin-left:10px">Ex-Employees Search Panel</h5>';
							echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help33()\"/></div>";								
echo'<div class="ui-widget" style="margin:10px; float:left">
	<select id="emp2">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=0 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).','.stripslashes($rowa['oname']).'</option>';
							}
	echo'</select>
	</div>
	
									<div id="results" style="min-height:350px; min-width:700px">';
									
									 	$per_page = 10;
                    					$result =mysqli_query($conn,"select * from employee where status=0");
                    					$count = mysqli_num_rows($result);
                    					$pages = ceil($count/$per_page);
										if(isset($_GET['param'])){
										$param=$_GET['param'];}
										else $param='default';
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate(9,'".$param."');</script>";
										recent(5,10);
										}
										
											else {
											echo "<script>paginate(10,'".$param."');</script>";
											recent(5,10);
											}	
						
						
							break;

							case 76.1:
								$param=$_GET['param'];
								$resultd =mysqli_query($conn,"select * from empdocs where id='".$param."'");
								$rowd=mysqli_fetch_array($resultd);
								echo'<div id="modalDiv"></div>
		<div id="alertDiv"  class="bounceIn appear" data-start="200" style="width:40%; height:40%; left:30%">
		<div style="float:left;width:35%; height:100%;">';
		if(exif_imagetype('upload/'.stripslashes($rowd['image']).'')){
echo'
  <img src="upload/'.stripslashes($rowd['image']).'" alt="Photo" style="float:left;width:100%; height:100%">';
}
else{
	echo'<img src="images/adobe.png" alt="Photo" style="float:left; ;width:100%; height:100%">';
}
		echo'</div>
		<div style="float:left;width:65%; height:100%;padding:2%">
			<a class="labels">File Name:<span>*</span></a>
			<input type="text" id="fname" name="sal" class="in_field"  value="'.stripslashes($rowd['name']).'" style="text-transform:none" />
				<div class="cleaner_h5"></div>  
			<a class="labels">File Description:</a>
				<textarea class="textarea" id="filedesc">'.stripslashes($rowd['filedesc']).'</textarea>
		<div class="cleaner_h5"></div>  
			<a class="labels">Uploaded on:</a>
				<input type="text" style="border-color:#f00" id="datepicker" name="sal" class="in_field"  value="'.stripslashes($rowd['date']).'" disabled="disabled" />
				<div class="cleaner_h20"></div>  
				 <a class="btn btn-sm btn-success" onclick="updatephoto('.stripslashes($rowd['id']).')"><i class="fa fa-save"></i>UPDATE</a>';
		echo"<a class=\"btn btn-sm btn-info\"  href=\"#\" onclick=\"window.open('http://".$server."/Q-Afya/upload/".stripslashes($rowd['image'])."')\">
				 <i class=\"fa fa-info-circle\"></i> VIEW</a>";
				  echo'<a class="btn btn-sm btn-warning" href="#" onclick="hidediv()"><i class="fa fa-warning"></i>CLOSE</a> <a class="btn btn-sm btn-danger" onclick="deletephoto('.stripslashes($rowd['id']).')"><i class="fa fa-trash-o"></i> DELETE</a>
				 	<div class="cleaner_h5"></div>  
				<div id="uphoto" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
		</div>
		
		
	 
		
		</div>
	</div>';
								break;


								case 150:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Terminate Employment Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");		
							echo"<script>$('#emp55').parent().find('input:first').focus().width(200);</script>";	
								echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:200px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">TERMINATE EMPLOYMENT
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				
				
				<a class="labels" style="margin-left:5px">Employee:<span>*</span></a>
					<div class="ui_widget"  style="margin-right:10%;float:right;">
				<select id="emp55" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by fname");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']).' '.stripslashes($rowa['lname']).'-'.stripslashes($rowa['pfno']).'</option>';
							}
		echo'
	</select>
	</div>
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px">Date:<span>*</span></a>
		<input type="text" id="datepick"  class="in_field" value="'.date('Y/m/d').'" style="width:70%;float:right;margin-right:10px; text-transform:none; "/> 
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px">Reason:<span>*</span></a>
<textarea id="reason" style="float:right;height:60px; width:90%; float:left; margin-left:10px" class="alergy" ></textarea>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="termemp();"/>
				<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
							case '151':
							
							
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses HR Documents Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
						
			
						echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">DOWNLOAD H/R DOCUMENTS</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>	';
						
														
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
	<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0">
	
 <div style="width:250px; border-right:2px solid #75c5cf; height:380px; overflow-y:auto; float:left; padding:2%">';
						
						$resulta =mysqli_query($conn,"select * from hrmdocs order by name");
							$num_resultsa = mysqli_num_rows($resulta);
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$len=strlen(stripslashes($rowa['name']));
								$a=$len-3;
								$type=substr(stripslashes($rowa['name']),$a,3);
								if($type=='pdf'){
									$x='adobe';
								}
								else if($type=='xls'){
									$x='excel';
								}
								else if($type=='doc'||$type=='rtf'){
									$x='word';
								}
								echo"<div style=\"border:1px solid #333; margin-bottom:10px;\" >";
								echo"<img  onclick=\"loadpdf('".stripslashes($rowa['name'])."')\" src=\"images/".$x.".png\" alt=\"Photo\" style=\"float:left; width:40%; height:100px; cursor:pointer\">
								<a href=\"hrmdocs/".stripslashes($rowa['name'])."\"><img src=\"images/save.jpg\" alt=\"Save\" style=\"float:right; cursor:pointer; margin:1% \"></a>
									<div class=\"cleaner\"></div>
								".stripslashes($rowa['name'])."
								</div>";
							}
								
							echo'<div class="cleaner_h50"></div></div>
							<div style="width:700px;  height:430px; overflow-y:auto; float:left; " id="display">
							</div>		
									
 
 </div>
	</div>
   							';
							break;
							
							case 152:
							
					$mon=$_GET['mon'];$date=$_GET['tdate'];
					$result =mysqli_query($conn,"select * from attendancelog where month='".$_GET['mon']."'");
					$num_results = mysqli_num_rows($result);	
					if($num_results==0){
						echo"<script>$().customAlert();alert('Sorry!', '<p>No attendance logs for this date.</p>');e.preventDefault();</script>";
				  exit;	
					}
					
					
					$result =mysqli_query($conn,"select * from ".$mon." order by names");
					$num_results = mysqli_num_rows($result);	
					
					
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									if($i%2==0){
	echo'<div class="normal1"  style="min-height:20px; border-left:1.5px solid #333; cursor:pointer; background:none">';
	}else{
		echo'<div  class="normal2" style="min-height:20px;  border-left:1.5px solid #333;cursor:pointer; background:none">';
	}	
									
									echo"
									<div id=\"figure2\" style=\"width:162px\" >".stripslashes($row['pfno'])."</div>
									<div id=\"figure2\" style=\"width:500px\" >".stripslashes($row['names'])."</div>";
									
									$x=$date.'c';
									$status=stripslashes($row[$x]);
								if($status=='0'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#f00\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\"  disabled=\"disabled\">Select</option>
									<option selected=\"selected\" value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									else if($status=='1'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#0f6\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\"  selected=\"selected\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else if($status=='2'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#0ff\" id=\"back".stripslashes($row['id'])."\" >
									<select class=\"select\"  style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  selected=\"selected\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else if($status=='3'){
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0; background:#ff3\" id=\"back".stripslashes($row['id'])."\" >
									<select  class=\"select\"   style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  selected=\"selected\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									
									else {
									echo"<div class=\"figure2\" style=\"width:200px;padding:5px 0\" id=\"back".stripslashes($row['id'])."\" >
									<select   class=\"select\"  style=\"margin-left:20px;margin-top:-3px;padding:0 \"id=\"action".stripslashes($row['id'])."\">
									<option value=\"0\"  selected=\"selected\" disabled=\"disabled\">Select</option>
									<option  value=\"0\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Absent</option>
									<option value=\"1\" onclick=\"checkatt(".stripslashes($row['id']).")\" >Present</option>
									<option  value=\"2\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Work Leave</option>
									<option  value=\"3\"  onclick=\"checkatt(".stripslashes($row['id']).")\" >Sick Leave</option>
									</select></div>";	
									}
									echo"
									</div>
									<div class=\"cleaner\"></div>";
					}
		 
							
							break;
							
							case 153:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Leave Request Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");		
							echo"<script>$('#emp55').parent().find('input:first').focus().width(200);</script>";	
							echo'	<div id="modalDiv"></div>
		<div id="alertDiv" style="min-height:200px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">LEAVE REQUEST
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">PF No:<span>*</span></a>
					<input type="text" id="pfno"  class="in_field" value="" style="width:70%;float:right;margin-right:10px; text-transform:none; "/> 
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px">Commence Date:<span>*</span></a>
		<input type="text" id="datepick"  class="in_field" value="" style="width:60%;float:right;margin-right:10px; text-transform:none; "/> 
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px">Return Date:<span>*</span></a>
		<input type="text" id="datepick2"  class="in_field" value="" style="width:60%;float:right;margin-right:10px; text-transform:none; "/> 
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px" title=Person to take duties">Person to take duties:<span>*</span></a>
	<input type="text" id="shadow"  class="in_field" value="" style="width:50%;float:right;margin-right:10px; text-transform:none; "/> 
				
				<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="submleave();"/>
									<div id="taskstud" style="float:right;height:20px;margin-right:10px "></div>	
				<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
								case '154':
							
							
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Leave Authorization Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
						
			
						echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">LEAVE AUTHORIZATION</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>	';
						
														
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
	<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0">


									<div id="title">
									<div id="figure1" style="margin-left:0px;width:80px">Date</div>
									<div id="figure1" style="width:50px">PF No.</div>
									<div id="figure1" style="width:120px">Name</div>
									<div id="figure1" style="width:100px">Branch</div>
									<div id="figure1" style="width:100px">Position</div>
									<div id="figure1" style="width:80px">Commence</div>
									<div id="figure1" style="width:80px">End Date</div>
									<div id="figure1" style="width:50px">Days</div>
									<div id="figure1" style="width:100px">Shadow</div>
									<div id="figure1" style="width:80px">Action</div>
									</div>';
					$result =mysqli_query($conn,"select * from leaves where status=0 order by stamp asc");
					$num_results = mysqli_num_rows($result);	
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									if($i%2==0){
	echo'<div class="normal1"  style="float:left;min-height:20px; border-left:1.5px solid #333; cursor:pointer;background:none" id="leave'.stripslashes($row['id']).'">';
	}else{
		echo'<div  class="normal2" style="float:left;min-height:20px;  border-left:1.5px solid #333;cursor:pointer;background:none" id="leave'.stripslashes($row['id']).'">';
	}	
									
									echo"
									<div id=\"figure2\" style=\"width:80px\" >".stripslashes($row['date'])."</div>
									<div id=\"figure2\" style=\"width:50px\" >".stripslashes($row['emp'])."</div>
									<div id=\"figure2\" style=\"width:120px; overflow:hidden\" >".stripslashes($row['name'])."</div>
									<div id=\"figure2\" style=\"width:100px; overflow:hidden\" >".stripslashes($row['branch'])."</div>
									<div id=\"figure2\" style=\"width:100px; overflow:hidden\" >".stripslashes($row['position'])."</div>
									<div id=\"figure2\" style=\"width:80px\" >".dateprint(stripslashes($row['commencedate']))."</div>
									<div id=\"figure2\" style=\"width:80px\" >".dateprint(stripslashes($row['enddate']))."</div>
									<div id=\"figure2\" style=\"width:50px\" >".stripslashes($row['days'])."</div>
									<div id=\"figure2\" style=\"width:100px; overflow:hidden\" >".stripslashes($row['shadow'])."</div>
										<div id=\"figure2\" style=\"width:89px;padding:5px 5px\" >
										<select class=\"select\" style=\"width:80px;margin-top:-3px;padding:0  \"id=\"action".stripslashes($row['id'])."\">
										<option value=\"0\" selected=\"selected\" disabled=\"disabled\">Select</option>
										<option value=\"Deny\"  onclick=\"leaveauth(".stripslashes($row['id']).")\" >Deny</option>
										<option value=\"Approve\"  onclick=\"leaveauth(".stripslashes($row['id']).")\" >Approve</option>
										</select>
										</div>
									</div>
									<div class=\"cleaner\"></div>";
					}
 
echo' </div>
	</div>
   							';
							break;
							
							case '155':
							
							
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Leave Calendar Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
						
			
						echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 2px 0; ">LEAVE CALENDAR</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
	<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0; overflow-y:auto">
								<div id="calendar"></div>	';
						
		$date=strtotime(date('Y-m-d'));
			$newdate=date('Y-m-d', strtotime('+1 month', $date));
			$a=substr($newdate,8,2);
			$b=substr($newdate,5,2);
			$c=substr($newdate,0,4);
			$date2=$a.'/'.$b.'/'.$c;
			$stamp2=$c.$b.$a;
			
					$arr=array();
					$result =mysqli_query($conn,"select * from leaves where status=2 and  ((commstamp>='".date('Ymd')."' and commstamp<='".$stamp2."')OR(endstamp>='".date('Ymd')."' and endstamp<='".$stamp2."')) order by stamp asc");
					$num_results = mysqli_num_rows($result);	
					for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
					$arr1[]=stripslashes($row['commencedate']);
					$arr2[]=stripslashes($row['enddate']);
				}
					$arr1 = array_unique($arr1);
					$arr2 = array_unique($arr2);
					
					$vector='';   
					
					
					foreach ($arr1 as $key => $val) {
					$result =mysqli_query($conn,"select * from leaves where status=2 and commencedate='".$val."'");
					$row=mysqli_fetch_array($result);
					$a=substr($val,8,2);
					$b=substr($val,5,2);
					$c=substr($val,0,4);
					$date=$c.'-'.$b.'-'.$a;
					$vector.="{title: 'Leave Start for ".stripslashes($row['name'])."',start: '".$date."'},";
	
					}
					
					foreach ($arr2 as $key => $val) {
					$result =mysqli_query($conn,"select * from leaves where status=2 and enddate='".$val."'");
					$row=mysqli_fetch_array($result);
					$a=substr($val,8,2);
					$b=substr($val,5,2);
					$c=substr($val,0,4);
					$date=$c.'-'.$b.'-'.$a;
					$vector.="{title: 'Leave End for ".stripslashes($row['name'])."',start: '".$date."'},";
	
					}
					
					$len=strlen($vector);
					$a=$len-1;
					$vector=substr($vector,0,$a);

    
   echo" <script>

	$(document).ready(function() {
	$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultView: 'month',
			defaultDate: '".date('Y-m-d')."',
			editable: true,
			eventLimit: true,
			events: [".$vector."]
		});
		
	});

</script>";
echo'<div class="cleaner_h50">	</div>											

 
 </div>
	</div>	';
							break;
							
							
							case 156:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Activate License Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");		
							echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:150px; width:420px">
					<div id="tit" style="width:400px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 5px 0 0">
				<h5 style="margin-right:10px; color:#fff">ACTIVATE LICENSE
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">Company:<span>*</span></a>
					<input type="text" id="cname"  class="in_field" value="" style="width:70%;float:right;margin-right:10px; text-transform:none; "/> 
	<div class="cleaner_h10"></div>
	<a class="labels" style="margin-left:5px">Key:<span>*</span></a>
		<input type="text" id="key5"  class="in_field" value="" onkeyup="countdig(5)" style="width:50px;float:right;margin-right:5px; text-transform:uppercase; " maxlength="5"/> 
		<a class="labels" style="float:right;margin-right:5px">-</a>
			<input type="text" id="key4"  class="in_field" value=""  onkeyup="countdig(4)" style="width:50px;float:right;margin-right:5px; text-transform:uppercase; " maxlength="5"/>
			<a class="labels" style="float:right;margin-right:5px">-</a> 
			<input type="text" id="key3"  class="in_field" value=""  onkeyup="countdig(3)" style="width:50px;float:right;margin-right:5px; text-transform:uppercase; " maxlength="5"/>
			<a class="labels" style="float:right;margin-right:5px">-</a> 
			<input type="text" id="key2"  class="in_field" value=""  onkeyup="countdig(2)" style="width:50px;float:right;margin-right:5px; text-transform:uppercase; " maxlength="5"/>
			<a class="labels" style="float:right;margin-right:5px">-</a> 
			<input type="text" id="key1"  class="in_field" value="" onkeyup="countdig(1)" style="width:50px;float:right;margin-right:5px; text-transform:uppercase; " maxlength="5"/>
	<div class="cleaner_h10"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:120px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="getlicense();"/>
									<div id="taskstud" style="float:right;height:20px;margin-right:10px "></div>	
				<div class="cleaner_h5"></div>
						
						</div>';
							
							break;
							
								case '157':
					echo"<script>$('#emp99').parent().find('input:first').width(250).focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Employees List
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="emp99" style="width:260px; margin-left:10px;">
				<option value="">Select one...</option>
		<option value="1">Active Employees</option>
		<option value="0">Ex-Employees</option>
		<option value="2">All Employees</option>
	</select>
	</div>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
						case 158:
						echo"<script>$('#cus19').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Attendance Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Branch:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select class="combos" id="branch" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from branchtbl");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['name']).'">'.stripslashes($rowa['name']).'</option>';
							}
		echo'
		<option value="All">All Branches</option>
	</select>
	</div>
	<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Month:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="monthsum" style="width:260px; margin-left:10px;" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from attendancelog");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['month']).'">'.stripslashes($rowa['month']).'</option>';
							}
		echo'
	</select>
	</div>
			<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterattendance();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
							case 159:
						echo"<script>$('#cus19').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Leave Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:5px">From:</a>
				<input id="datepick" name="doe" class="in_field" type="text"  style="width:80%;float:right; margin-right:10px"> 
				<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:5px">To:</a>
			 <input id="datepick2" name="doe" class="in_field" v  type="text"  style="width:80%;float:right; margin-right:10px"> 
			 <div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
			 	<div class="cleaner_h5"></div>
			
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterleaverep();"/>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;

							case 200:
							$_SESSION['lan']=$_SESSION['skl']=$_SESSION['hobby']=$_SESSION['exp']=$_SESSION['edu']=array();
							$result =mysqli_query($conn,"select * from locums order by emp desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$emp=1;
								}else $emp=stripslashes($row['emp']) + 1;
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses New Locum Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							
							echo"<script>$('.combos').parent().find('input:first').width(120);	</script>";	
								echo'<script>
								$(window).bind("keydown",
								function(evt){
									
									if(evt.ctrlKey&&(evt.which==83)){
									addnewemp(1);
									evt.preventDefault();
									return false;	
									}
									});
									
							</script>';
		
							echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; ">New Locum Information</h2>';
									echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewloc(1);"/></div>';
														
							echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal" style="overflow-y:auto">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">PF No:<span>*</span></a>
                                <input type="text" id="emp" name="emp" class="in_field" value="'.$emp.'" style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">F.Name:<span>*</span></a>
                                <input type="text" id="fname" name="field" class="in_field" />
								<div class="cleaner_h5"></div>
								 <a class="labels">M. Name:<span>*</span></a>
                                <input type="text" id="mname" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">L. Name:<span>*</span></a>
                                <input type="text" id="lname" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 
					<div id="languages" style="width:100%;"></div>
								<div class="cleaner_h5"></div>
								
								  <a class="labels" style="margin-right:30px">Gender:</a>
                                <input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								 <input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.
									<div class="cleaner_h5"></div>
								<a class="labels">ID NO:<span>*</span></a>
                                <input type="text" id="idno" name="field" class="in_field" onkeyup="validatenum(\'idno\')"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">Pin No:</a>
                                <input type="text" id="pinno" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>	
								<a class="labels">Phone No:<span>*</span></a>
								 <input type="text" id="phone" name="phone" class="in_field" onkeyup="validatenum(\'phone\')" style="width:130px"/> 
								<div class="cleaner_h5"></div>
								<div id="music"></div>
								<a class="labels">Phone No[2]:</a>
								 <input type="text" id="phone2" name="phone2" class="in_field" onkeyup="validatenum(\'phone2\')"  style="width:130px"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email Add:</a>
								 <input type="text" id="emailadd" name="emailadd" class="in_field" style="text-transform:lowercase"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phy Add:</a>
                                <input type="text" id="phyadd" name="phyadd" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Location:</a>
                               		
								<div class="ui-widget" style="float:right; margin-right:25px">
									<select id="town" class="combos">
										<option value="">Select one...</option>';
										$resulta =mysqli_query($conn,"select * from towns order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$row=mysqli_fetch_array($resulta);
											$name=stripslashes($row['name']);
											echo"<option value=\"".$name."\">".$name."</option>";
										}
									echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								
								</div>
							
								<div id="personal" style="overflow-y:auto">
								<h5>Role Details</h5>
								<a class="labels">Position:<span>*</span></a>
                               	<div class="ui-widget" style="float:right; margin-right:25px">
									<select id="pos" class="combos">
										<option value="">Select one...</option>';
										$resulta =mysqli_query($conn,"select * from positions order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$row=mysqli_fetch_array($resulta);
											$name=stripslashes($row['name']);
											echo"<option value=\"".$name."\">".$name."</option>";
										}
									echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								<a class="labels">Job Description:</a>
								<textarea class="textarea" id="jobdesc" style="width:200px"></textarea>
								<div class="cleaner_h5"></div>
								<h5>MEDICAL DETAILS</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right ;text-transform:uppercase">
								 	<option value="" selected="selected" disabled="disabled">Select One...</option>
									<option value="A Rh+">A Rh+</option>
									<option value="A Rh-">A Rh-</option>
									<option value="B Rh+">B Rh+</option>
									<option value="B Rh-">B Rh-</option>
									<option value="AB Rh+">AB Rh+</option>
									<option value="AB Rh-">AB Rh-</option>
									<option value="O Rh+">O Rh+</option>
									<option value="O Rh-">O Rh-</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Known Health Problems/Alergies:</a>
								<div class="cleaner_h5"></div>
								<textarea class="textarea" id="alergy"  style="width:200px"></textarea>
								<div class="cleaner_h5"></div>
						</div>
								
								<div id="personal" style="overflow-y:auto">
									<h5>EMERGENCY CONTACT</h5>
								<a class="labels">Name:<span>*</span></a>
								 <input id="ename" name="ename" class="in_field" placeholder="" type="text"  >
								<div class="cleaner_h5"></div>
								<a class="labels">Phone:<span>*</span></a>
                               <input id="ephone" name="dob" class="in_field" placeholder="" type="text"  >
								<div class="cleaner_h5"></div>
								<a class="labels">Postal Add:</a>
                               <input id="epostal" name="dob"  style="width:130px" class="in_field" placeholder="" type="text"  )">
								<div class="cleaner"></div>
								<h5>EDUCATION DETAILS</h5>
								<a class="labels">Course:</a>
								<div class="ui-widget" style="float:right; margin-right:25px">
	<select id="certificate"  class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from courses order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$name=stripslashes($row['name']);
								$k=stripslashes($row['id']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select></div>
		<div class="cleaner_h5"></div>

	
	
		
		<div id="bachelors" style="width:100%;"></div>
	<div class="cleaner"></div>							
							<h5>EXPERIENCE DETAILS</h5>		
						<a class="labels">Experience:</a>
                               		
								<div class="ui-widget"  style="float:right; margin-right:25px">
	<select id="experience" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from experience order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$k=stripslashes($row['id']);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$k."θ".$name."\">".$name."</option>";
						}
		echo'</select>
</div>

			<div class="cleaner_h5"></div>								
	<div id="experiences" style="width:100%;"></div>
		<div class="cleaner"></div>		
								<h5>REMMITANCE DETAILS</h5>
								
								<a class="labels">Bank:</a>
		                        <div class="ui-widget"  style="float:right; margin-right:25px">
									<select id="bank" class="combos">
										<option value="">Select one...</option>';
										$resulta =mysqli_query($conn,"select * from banktbl order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$row=mysqli_fetch_array($resulta);
											$name=stripslashes($row['name']);
											$bid=stripslashes($row['id']);
											echo"<option value=\"".$bid."#".$name."\">".$name."</option>";
										}
									echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								 <a class="labels">A/C No:</a>
                                <input type="text" id="acno" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>

								</div>
								<div id="personal" style="overflow-y:auto">
								</form>
									<h5>SKILLS</h5>
								<a class="labels">Skill:</a>
								<input style="" type="text" id="skill" name="field" class="in_field" placeholder="Type and Press and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="skills" style="width:100%;"></div>
								<div class="cleaner"></div>
								<h5>HOBBIES</h5>
								<a class="labels">Hobby:</a>
								<input type="text" id="hobby" name="field" class="in_field" placeholder="Type and Press and Enter..."/> 
								<div class="cleaner_h5"></div>
								<div id="hobbies" style="width:100%;"></div>
								<div class="cleaner"></div>
								<h5>PROFILE PICTURE UPLOAD</h5><div class="cleaner_h5"></div>
								</form>
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$emp.'"/>
								<input type="hidden" id="id" name="id"  value="5"/>
								<div class="cleaner_h5"></div>
     							<input type="submit" value="upload" id="send"  style="width:100px;margin-left:60px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h5"></div>
								<h5>OTHER FILES UPLOAD</h5><div class="cleaner_h5"></div>
								<div class="content">
											<div id="drop-files" ondragover="return false">
												Drop Images/Documents Here
											</div>
											
											<div id="uploaded-holder">
												<div id="dropped-files">
													<div id="upload-button">
														<a href="#" class="upload">Upload!</a>
														<a href="#" class="delete">delete</a>
														<span>0 Files</span>
													</div>
												</div>
												<div id="extra-files">
													<div class="number">
														0
													</div>
													<div id="file-list">
														<ul></ul>
													</div>
												</div>
											</div>
											
											<div id="loading">
												<div id="loading-bar">
													<div class="loading-color"> </div>
												</div>
												<div id="loading-content"></div>
											</div>
											</div>
								</div>
								</div>
   							';
							
							break;

							case 201:
							echo"<script>$('#extmedic').parent().find('input:first').width(245);</script>";
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses external medics Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									
							echo'
							<div id="newstude">
								<div id="results">						
								<div id="block1" style="height:470px; width:491px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
								<h5 style="text-align:center">Add New External Medic</h5>
								<div class="cleaner_h5"></div> 
								<a class="labels">Name:<span>*</span></a>
                                <input type="text" id="name" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Type:<span>*</span></a>
                                <select class="select" id="type" name="type" style="width:282px;float:right;margin-right:10px;text-transform:uppercase">
								 	<option value="" selected="selected" disabled="disabled">Select One...</option>
									<option value="Locum">Locum</option>
									<option value="Consultant">Consultant</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Position:<span>*</span></a>
								<select id="pos" class="select" style="width:282px;float:right;margin-right:10px">
										<option value="">Select one...</option>';
										$resulta =mysqli_query($conn,"select * from positions order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$row=mysqli_fetch_array($resulta);
											$name=stripslashes($row['name']);
											echo"<option value=\"".$name."\">".$name."</option>";
										}
									echo'</select>
								<div class="cleaner_h5"></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="add" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="towna" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:<span>*</span></a>
                                <input type="text" id="mobile" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
                                <div class="cleaner_h5"></div>
								 <a class="labels">User Name:<span>*</span></a>
                                <input type="text" id="uname" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/>
								<div class="cleaner_h5"></div>';
								echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"addextmed(1)\"/>";
								echo'<div id="res1" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
							</div>
									
							<div id="results">						
								<div id="block1" style="height:470px; width:490px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
								<h5 style="text-align:center">Edit External Medics</h5>
								<div class="cleaner_h5"></div> 
								<a class="labels">Name:<span>*</span></a>
								
                                <div class="ui_widget"  style="margin-left:155px;float:left; width:200px">
								<select id="extmedic" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
								$resulta =mysqli_query($conn,"select * from extmedics order by name");
								$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);
									echo'<option value="'.stripslashes($rowa['id']).'θ'.stripslashes($rowa['name']).'θ'.stripslashes($rowa['type']).'θ'.stripslashes($rowa['pos']).'θ'.stripslashes($rowa['address']).'θ'.stripslashes($rowa['town']).'θ'.stripslashes($rowa['tel']).'θ'.stripslashes($rowa['mobile']).'θ'.stripslashes($rowa['email']).'θ'.stripslashes($rowa['uname']).'">'.stripslashes($rowa['name']).'</option>';
								}
								echo'</select>
								</div><div class="cleaner_h5"></div>
								<a class="labels">New Name:<span>*</span></a>
								<input type="text" id="regn" name="age" class="in_field"   style="display:none" value=""/>
                                <input type="text" id="name2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Type:<span>*</span></a>
                                <select class="select" id="type2" name="type" style="width:282px;float:right;margin-right:10px;text-transform:uppercase">
								 	<option value="" selected="selected" disabled="disabled">Select One...</option>
									<option value="Locum">Locum</option>
									<option value="Consultant">Consultant</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Position:<span>*</span></a>
								<select id="pos2" class="select"  style="width:282px;float:right;margin-right:10px">
										<option value="">Select one...</option>';
										$resulta =mysqli_query($conn,"select * from positions order by name");
										$num_resultsa = mysqli_num_rows($resulta);	
										for ($i=0; $i <$num_resultsa; $i++) {
											$row=mysqli_fetch_array($resulta);
											$name=stripslashes($row['name']);
											echo"<option value=\"".$name."\">".$name."</option>";
										}
									echo'</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="add2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="town2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:<span>*</span></a>
                                <input type="text" id="mobile2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Email:</a>
                                <input type="text" id="email2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/>
                                <div class="cleaner_h5"></div>
								 <a class="labels">User Name:<span>*</span></a>
                                <input type="text" id="uname2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/>';
								echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 200px; float:left\" title=\"Submit\" onclick=\"editextmed(2)\"/>";
								echo"<img src=\"images/empty.png\" width=\"50\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 20px; float:left\" title=\"Delete User\" onclick=\"delextmed()\"/>";
								echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
								</div>
									
								
									</div>';
								
							break;

							case 202:
							$a=$_GET['a'];
							if($a==1){
							$result= mysqli_query($conn,"insert into extmedics values('0','".$_GET['type']."','".$_GET['pos']."','".$_GET['name']."','".$_GET['add']."','".$_GET['town']."','".$_GET['tel']."','".$_GET['mobile']."','".$_GET['email']."',0,'".$_GET['uname']."')");
							$result2= mysqli_query($conn,"update users set status=0 where name LIKE '%".$_GET['uname']."%'");
							}
							if($a==2){
							$regn=$_GET['regn'];
							$result= mysqli_query($conn,"update extmedics set type='".$_GET['type']."',pos='".$_GET['pos']."',name='".$_GET['name']."',address='".$_GET['add']."',town='".$_GET['town']."',tel='".$_GET['tel']."',mobile='".$_GET['mobile']."',email='".$_GET['email']."',uname='".$_GET['uname']."' where id='".$regn."'");
							}
							if($result){
								$resulta = mysqli_query($conn,"insert into log values('0','".$username." edits External Medics database.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
									echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>
									<script>
										newextmedic();
										$().customAlert();
										alert("Success!", "<p>Medic Profile Saved.</p>");
										e.preventDefault();
										</script>';
									}
									else{
										echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
										}
							
							break;

							case 203:
								$regn=$_GET['regn'];
								$result = mysqli_query($conn,"DELETE from extmedics where id='".$regn."'");
								if($result){
									$resulta = mysqli_query("insert into log values('0','".$username." deletes data from External Medics database.Id:".$_GET['regn']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									echo'<p><img src="images/tick.png" style="margin-top:0px;width:30px; height:30px"></p>';
								}else{
									echo'<p><img src="images/delete.png" style="margin-top:0px;width:30px; height:30px"></p>';
								}
							break;

							case 204:
					
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Locum Register ','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'<div id="newstude">
								<div id="findstude" style="width:996px"><h5 style="margin-left:10px">Locum Register</h5>';
							echo'<div id="results" style="min-height:350px; width:900px">';
										
										echo'<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                						echo "<script>paginate(19,0);</script></div></div></div>";
							break;

							case 205:									
								echo"<script>$('#loc4').parent().find('input:first').focus();</script>";	
								echo'<div id="modalDiv"></div>';
								echo'<div id="alertDiv" style="min-height:90px; width:320px">
								<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 5px 0 0">
								<h5 style="margin-right:0px; color:#fff">Locum Punch-In';
								echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help30()\"/></div>";								
								echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
										<div class="cleaner_h5"></div>
								<input type="hidden" id="ser" name="ser"  value="207"/>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
								<select id="loc4" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
								$resulta =mysqli_query($conn,"select * from extmedics where status=0 and type = 'Locum' order by name");
									$num_resultsa = mysqli_num_rows($resulta);	
									for ($i=0; $i <$num_resultsa; $i++) {
										$rowa=mysqli_fetch_array($resulta);
										echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['name']).'</option>';
									}
								echo'</select>
									</div>
								</div>';
							break;

							case 206:									
								echo"<script>$('#loc4').parent().find('input:first').focus();</script>";	
								echo'<div id="modalDiv"></div>';
								echo'<div id="alertDiv" style="min-height:90px; width:320px">
								<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 5px 0 0">
								<h5 style="margin-right:0px; color:#fff">Locum Punch-Out';
								echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help30()\"/></div>";								
								echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
										<div class="cleaner_h5"></div>
								<input type="hidden" id="ser" name="ser"  value="208"/>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
								<select id="loc4" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
								$resulta =mysqli_query($conn,"select * from extmedics where status=1 and type = 'Locum' order by name");
									$num_resultsa = mysqli_num_rows($resulta);	
									for ($i=0; $i <$num_resultsa; $i++) {
										$rowa=mysqli_fetch_array($resulta);
										echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['name']).'</option>';
									}
								echo'</select>
									</div>
								</div>';
							break;

							case 207:
					
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Locum Punch-In ','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$resulta =mysqli_query($conn,"select * from extmedics where id=".$_GET['param']);
							$rowa=mysqli_fetch_array($resulta);
							$uname = stripslashes($rowa['uname']);
							$result2= mysqli_query($conn,"update users set status=1 where name LIKE '%".$uname."%'");
							$result= mysqli_query($conn,"update extmedics set status=1 where id=".$_GET['param']);

							echo'<script>
									$().customAlert();
									alert("Success!", "<p>Locum Checked-In.</p>");
									e.preventDefault();
								</script>';
							break;

							case 208:
					
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Locum Punch-Out ','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$resulta =mysqli_query($conn,"select * from extmedics where id=".$_GET['param']);
							$rowa=mysqli_fetch_array($resulta);
							$uname = stripslashes($rowa['uname']);
							$result2= mysqli_query($conn,"update users set status=0 where name LIKE '%".$uname."%'");
							$result= mysqli_query($conn,"update extmedics set status=0 where id=".$_GET['param']);
							echo'
									<script>
										$().customAlert();
										alert("Success!", "<p>Locum Checked-Out.</p>");
										e.preventDefault();
										</script>';
							break;

							case '209':
							
							
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Appointments Calendar Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						
			
							echo'<div id="newstude">
							<h2 style="float:left; padding:5px 5px 2px 0; ">APPOINTMENTS CALENDAR</h2>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:5px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								
								<div id="saveclose" style="width:120px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Add Appointment" id="submit"  style="padding:5px 5px; border-color:#fff; background:#0f6; float:right; cursor:pointer;width:120px" class="in_field" onclick="newappoint();"/></div>
								
								

								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div style="width:996px; background:#fff;height:424px; padding:5px; margin:5px 5px 5px 0; overflow-y:auto">
								<div id="calendar"></div>';
						
								$date=strtotime(date('Y-m-d'));
								$newdate=date('Y-m-d', strtotime('+1 month', $date));
								$a=substr($newdate,8,2);
								$b=substr($newdate,5,2);
								$c=substr($newdate,0,4);
								$date2=$a.'/'.$b.'/'.$c;
								$stamp2=$c.$b.$a;
								
										$vector='';
										$result =mysqli_query($conn,"select * from calendar where DateStamp>='".date('Ymd')."' order by DateStamp asc");
										$num_results = mysqli_num_rows($result);	
										for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$title=stripslashes($row['Pat_name']).'-'.stripslashes($row['Location']).'['.stripslashes($row['Reason']).']';
										$date=stripslashes($row['StartDate']);
										$date=preg_replace('~/~', '-', $date);
										$time=stripslashes($row['StartTime']);
										$aa=substr($time,0,2);
										$bb=substr($time,3,2);
										$cc=substr($time,5,2);
										if($cc=='PM'){$aa+=12;}
										$start=$date.'T'.$aa.':'.$bb.':00';
										$vector.="{title: '".$title."',start: '".$start."'},";

										}
										  
										
										
									
										
										$len=strlen($vector);
										$a=$len-1;
										$vector=substr($vector,0,$a);
										
								   echo" <script>

										$(document).ready(function() {

											$('#calendar').fullCalendar({
												theme: true,
												header: {
													left: 'prev,next today',
													center: 'title',
													right: 'month,agendaWeek,agendaDay'
												},
												defaultDate: '".date('Y-m-d')."',
												editable: true,
												eventLimit: true, // allow more link when too many events
												events: [".$vector."]
											});
											
										});

								</script>";
								echo'<div class="cleaner_h50">	</div>											

								 
								 </div>
									</div>	';


							break;

}