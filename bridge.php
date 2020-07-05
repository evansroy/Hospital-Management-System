<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('db_fns.php');
date_default_timezone_set('Africa/Nairobi');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysqli_query($conn,"select * from users where name='".$username."'");
$row=mysqli_fetch_array($result);
$usertype=stripslashes($row['position']);
$fullname=stripslashes($row['fullname']);
$userid=stripslashes($row['userid']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}

?>
<script src="js/functions.js"></script>
<script src="js/ajax.js"></script>
<script src="js/help.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.txt"></script>
<script type="text/javascript" src="js/auth.js"></script>
<script src="ui/jquery.ui.position.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.confirm/jquery.confirm.css" />
<script src="jquery.confirm/jquery.confirm.js"></script>
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<script type="text/javascript" src="js/chart.js"></script>


<script type="text/javascript" >


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
		$( "#tabs" ).tabs();$( "#tabs2" ).tabs();$( "#tabs3" ).tabs();
	});
	</script>
    <style>
	.draggable{ opacity:2; z-index:1 }
	</style>
    <script>
	$(function() {
		$( ".draggable" ).droppable();
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
	/*
	document.onkeydown = keydown2;
    	function keydown2(evt){
      	if (!evt) evt = event;
     	if (evt.keyCode==27){ //esc
        hidenewstude(); 
		hidediv();
      	}
		}
		*/
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
							   
		 </script>
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/grid.css">
<link href="css/page.css" rel="stylesheet" type="text/css" />
<?php
$id=$_GET['id'];
switch($id){
							
							
							case 1:
							$param=$_GET['param'];
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		
     	 
    }</script>';
echo"<script>$('#cus2').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Item Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
						
								<div id="findstude" style=""><h5 style="margin-left:10px">Item Search Panel-Department: '.$userdep.'</h5>';
echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help1()\"/></div>";								
									
							echo'<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="item2">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items   where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['ItemCode']).'">'.stripslashes($rowa['ItemName']).'</option>';
							}
	echo'</select>
	</div><div id="depbal" style="float:right; margin-right:10px"></div>';			
	echo'<div id="results" style="min-height:350px; min-width:700px">';
										
										if(isset($_GET['param'])){
										$param=$_GET['param'];}
										else $param='default';
										echo'
										<div id="loading" >	</div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate(1,'".$param."');</script>";
										recent(1,2);
										}
										
											else {
											echo "<script>paginate(2,'".$param."');</script>";
										recent(1,2);
											}	
							break;
							
							case 2:
							$param=$_GET['param'];
					
echo"<script>$('#parametersearch2').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Patient Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude"><h5 style="margin-left:10px">Patient Search Panel</h5>';
echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help2()\"/></div>";								
echo'<input class="input_field" style="float:left; margin-left:10px; width:300px; font-size:11px" id="parametersearch2" type="text" placeholder="Enter Search Term...">	';
	echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 2px; float:left\" title=\"Search\" onclick=\"sachpatient('')\"/>";
		echo'<select class="input_field" id="menusearch" style="float:right; margin-right:10px">
		<option value="fullnames">Patient Name</option>
		<option value="pntno">Patient No</option>
		<option value="gname">Next of Kin</option>
		<option value="contact">Phone No</option>
		<option value="opno">O/P No</option>
	</select>
	<a class="labels" style="float:right;margin-right:10px; font-weight:bold">Search By:</a>';			
	echo'<div id="results" style="min-height:350px; min-width:700px">';
										
										if(isset($_GET['param'])){
										$param=$_GET['param'];}
										else $param='default';
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate(3,'".$param."');</script>";
										recent(2,4);
										}
										
											else {
											echo "<script>paginate(4,'".$param."');</script>";
										recent(2,4);
											}	
									
							break;
							
							case '0.7':
							
						$stamp=date('Ymd');
					echo"<script>$('#cons14').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Pharmacy Billing:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";
										
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from pharmrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' order by prescid asc");
					$num_results = mysqli_num_rows($result);
				echo'<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Pharmacy using these dates" onclick="searchpharmacy(14,7);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpharmacy">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons14">
				<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['prescid']).'">'.stripslashes($row['patname']).'-'.stripslashes($row['patid']).'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="0.1">
		<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>
		<a class="labels" style="margin-right:10px;float:right;cursor:pointer" onclick="findpatient()"><u>Find Patients</u></a>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
	<div id="figure1" style="width:69px">Pat. No</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from pharmrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' order by prescid asc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['prescid']);
		
		if(stripslashes($rowb['status'])==1){
		
		echo"<div class=\"normal1\"  onclick=\"seepat('".$pid."',0.1)\">";
		}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$pid."',0.1)\">";}
		
		echo'<div id="figure2" style="width:200px">'.stripslashes($rowb['patname']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['patid']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							
							
							break;
							
								case '0.8':
							
						$stamp=date('Ymd');
					echo"<script>$('#cons63').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">CSSD Billing:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' and (RecPharm=1 or RecPharm=2)order by PrescId asc");
					$num_results = mysqli_num_rows($result);
				echo'<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Pharmacy using these dates" onclick="searchpay(63,7);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons63">
				<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="155">
		<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
	<div id="figure1" style="width:69px">Pat. No</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' and (RecPharm=1 or RecPharm=2) order by PrescId desc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['PrescId']);
		
		if(stripslashes($rowb['RecPharm'])==1){
		
		echo"<div class=\"normal1\"  onclick=\"seepat('".$pid."',155)\">";
		}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$pid."',155)\">";}
		
		echo'<div id="figure2" style="width:200px">'.stripslashes($rowb['PatName']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							
							
							break;
							case '0.1':
							
			

		if(isset($_GET['pid'])){
		$pid=$_GET['pid'];
		
		
		
		$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
		$rowa=mysqli_fetch_array($resulta);
		$pntno=stripslashes($rowa['PatId']);
		$dcare=stripslashes($rowa['DayCare']);
		$weight=stripslashes($rowa['Weight']);
		$patname=stripslashes($rowa['PatName']);

							
							
				if($dcare==1){
				$xxx=0;
				}else {$xxx=1;}
				}else{ $pid=0;$dcare=0;$xxx=1;$weight=0;}

			if(isset($_SESSION['cart'])){unset($_SESSION['cart']);}


			if(isset($_GET['pntno'])){$pntno=$_GET['pntno'];}

			$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
			$row=mysqli_fetch_array($result);
			$patname=stripslashes($row['fullnames']);
			$paytype=stripslashes($row['paytype']);
			$smartstatus=stripslashes($row['smartstatus']);
			$benamount=stripslashes($row['benamount']);

			$ratio=1;
			if($paytype==1){$ratio=1.6;}


		echo"<script>$('#pmode').val('Regular');
		$('#ampaid').attr('disabled','disabled');
		$('#ampaid').css({'border' : 'solid #f00 1px'});</script>";

		
		
	
		echo"<script>$('#item4').parent().find('input:first').focus();$('.dr').parent().find('input:first').width(60);</script>";
echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		if (evt.keyCode==113){ //f2
		showpat2();
		 $("#ampaid").focus();
	   }
	   if (evt.keyCode==115){ //f4
	   evt.preventDefault();
      	$("#item4").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
       viewcart(); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       	 additem('.$xxx.'); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitpos(); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help19(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
        emptycart(); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		
		if (evt.keyCode==114){ //f4
		evt.preventDefault();
		removelastcart();
      	}
     	 
    }</script>';					
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Pharmacy Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:196px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Pharmacy Billing</h5>
	<div id="depbal" style="float:right; margin-right:10px"></div>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help19()\"/></div>";	
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/presc.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Prescription\"  onclick=\"window.open('report.php?id=36&rcptno=".$pid."')\"/></div>";								
echo'
								<select class="select" id="smode" style="width:100px; margin-left:10px; display:none">
								<option value="cash"  onclick="setcash();">Cash</option>
								</select>					
							<a class="labels" style="margin-left:0px">Patient Name:<span>*</span></a>
							<div id="option1">
							 <input type="text" id="cname" class="input_field"  style="width:230px; margin-left:10px;" value="'.$patname.'"/> 
							</div>
							<div id="option2" style="display:none">
						</div>
							
							<a class="labels" style="margin-left:20px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:100px; margin-left:10px;"/>

							<a class="labels" style="margin-left:20px">Mult. Factor:</a>
							<input type="text" id="ratio" class="input_field" value="'.$ratio.'"  style="width:50px; margin-left:10px;border-color:#f00" disabled/>

							<div class="cleaner_h5"></div><a class="labels">Item Name:</a>
							
			<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item4">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items where ".$_SESSION['rights']." and Type='GOOD' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$vat=stripslashes($row['Vat']);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$itcost = stripslashes($row['PurchPrice']);
								$bal = stripslashes($row['PHARMACY']);
								$qsold = stripslashes($row['Qsold']);
								$categ = stripslashes($row['Category']);
								echo"<option value=\"".$vat."θ".$itemp."θ".$item."θ".$code."θ".$itcost."θ".$bal."θ".$qsold."θ".$categ."\">".$item."-Bal:".$bal."-Price:".$itemp."</option>";
						}
		echo'
	</select>
</div>
									
					<input type="text" id="type" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="1"/>		
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itcost" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="cusid" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="pr" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="discpr" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="climit" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="qsold" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="patid" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$pntno.'"/>
					<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;" value=""/>
					
							<a class="labels" style="margin-left:10px">Quantity:</a>
							<input type="text" id="quat" class="input_field"  style="width:70px; margin-left:10px;"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price" class="input_field"  style="width:70px; margin-left:10px; "/>	
							<a class="labels" style="margin-left:5px">Vat:</a>
							<input type="text" id="vat" disabled="disabled" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;"/>
							  <div class="cleaner_h5"></div>
					
		<a class="labels" style="margin-left:5px">Dosage:</a>
	<input type="text" id="dr9" class="in_field" value="" style="width:30px; float:left; margin-left:10px;padding:6px 5px"/> 
		
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
		<option value="Pessaries">Pessaries</option>
		<option value="Ampoule"></option>

		
		</select>
		</div>
			<a class="labels" style="margin-left:35px">Route:</a>
		<div class="ui-widget" style="margin-left:5px; float:left;" >
		<select class="dr" id="dr6" style="">
		<option value="">Select one...</option>
		<option value="Oral">Oral</option>
		<option value="Rectal">Rectal</option>
		<option value="I.V">I.V</option>
		<option value="I.M">I.M</option>
		<option value="S.C">S.C</option>
		<option value="Intraspinal Injection">Intraspinal Injection</option>
		<option value="Inhalation">Inhalation</option>
		<option value="Vaginal">Vaginal</option>
		<option value="Aural">Aural</option>
		<option value="Intranasal">Intranasal</option>
		</select>
		</div>
		
		<a class="labels" style="margin-left:35px">Frequency:</a>
		<div class="ui-widget" style="margin-left:5px; float:left;" >
		<select class="dr" id="dr5" style="">
		<option value="">Select one...</option>
		<option value="1">stat</option>
		<option value="1">n/a</option>
		<option value="24">Once Hourly</option>
		<option value="1">Once Daily</option>
		<option value="2">Twice Daily</option>
		<option value="3">Thrice Daily</option>
		<option value="4">Four Times Daily</option>
		<option value="0.1429">Once Weekly</option>
		<option value="0.2857">Twice Weekly</option>
		<option value="0.4286">Thrice Weekly</option>
		<option value="0.5714">Four Times Weekly</option>
		<option value="1">Mane</option>
		<option value="1">Nocte</option>
		<option value="4">Qid/Qds</option>
		<option value="1">P.R.N</option>
		</select>
		</div>
		
		
		<a class="labels" style="margin-left:35px">Duration:</a>
		<input type="text" id="dr7" name="oname" class="in_field" value="" style="width:30px; float:left; margin-left:5px;padding:6px 5px"/> 
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
		 <div class="cleaner_h5"></div>		  
							  
							  
							  	
							  <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" placeholder="" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	

							<a class="labels" style="margin-left:5px">Total Vat:</a>
							<input type="text" id="tvat" class="input_field"  style="width:70px;border-color:#f00; margin-left:10px;" disabled="disabled"/>
							<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				
					echo '<input type="text" id="disc"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:10px;"/>';
				
			
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin: 0px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additem(".$xxx.")\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0x 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcart()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0px 0 0 0px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycart()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:270px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:240px;">
	
	</div>
	</div>						
							
										
									</div>
									
									<div id="recentstude">
							<div id="pat11" style="font-color:#333;cursor:pointer;background:#f00;width:68px;float:left; margin:5px 5px 0 0px;  border-radius:0px; border:1px solid #000" onclick="showpat1()">
							<p style="margin-left:2px;color:#333;font-weight:normal">Prescription</p>
							</div> 
							<div id="pat13" style="font-color:#333;cursor:pointer;background:#0f6;width:58px;float:left; margin:5px 5px 0 0px; border-radius:0px; border:1px solid #000" onclick="showpat3()">
							<p style="margin-left:7px;color:#333;font-weight:normal">Patient</p>
							</div> 
							
					
							<div id="pat12"  style="cursor:pointer;background:#ff3;width:58px;float:left; margin:5px 0px 0 0px; border-radius:0px; border:1px solid #000"  onclick="showpat2()">
							<p style="margin-left:5px; color:#333; font-weight:normal">Payments</p>
							</div> 
					  <div class="cleaner_h5"></div>
								<div id="pat1">

								<h5>Prescription Summary</h5>
										<div style="width:208px; float:left;padding:2px;height:380px; overflow-y:auto; border:1px solid #ccc;">';
										$resultb =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."' order by id");
																					$num_resultsb = mysqli_num_rows($resultb);	
																					for ($i=0; $i <$num_resultsb; $i++) {
																						$rowb=mysqli_fetch_array($resultb);
																						
											
											echo'
											
											<a class="labels" style="margin-top:10px;margin-bottom:5px">Date: <b>'.stripslashes($rowb['date']).'</b></a>
											<div class="cleaner"></div>
											<a class="labels">'.stripslashes($rowb['prescription']).'</a> 
											<div class="cleaner_h5"></div>
											<a class="labels" style="margin-top:10px;margin-bottom:5px">Prescribed By: <b>'.stripslashes($rowb['requested']).'</b></a>
											<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>';
										}


							echo'</div>
								</div>
								<div id="pat3" style="display:none">';
							$resulta =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);

							$result =mysqli_query("select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
								echo'<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="'.stripslashes($row['image']).'"></iframe>
								<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00; width:120px" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">1<sup>st</sup> Name:<span>*</span></a>
                                <input type="text" id="name" name="name" disabled="disabled"  style="border-color:#f00;width:120px" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">2<sup>nd</sup> Name:<span>*</span></a>
                                <input type="text" id="oname" disabled="disabled" name="oname"  style="border-color:#f00;width:120px" class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">3<sup>rd</sup> Name:<span>*</span></a>
                                <input type="text" id="lname" name="oname"  disabled="disabled"  style="border-color:#f00;width:120px"  class="in_field" value="'.stripslashes($row['lname']).'"/> 
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
                                <input type="text" id="stream"  disabled="disabled"  style="border-color:#f00;width:120px" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:<strong style="margin-left:20px;width:120px"> '.stripslashes($row['bgroup']).'</strong></a>
                                <div class="cleaner_h5"></div>
								<a class="labels"> Weight:<span>*</span></a>
                                <input type="text" id="lname" name="oname"  disabled="disabled"  style="border-color:#f00;width:120px"  class="in_field" value="'.$weight.' Kgs"/> 
								<div class="cleaner_h5"></div>
	
								</div>
									<div id="pat2" style="display:none">';
						if(isset($_SESSION['cart'])){
							$max=count($_SESSION['cart']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['cart'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['cart'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['cart'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['cart'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							}
							
							echo'<a class="labels" style="margin-left:5px">Total Items:</a>';
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Amount:</a>
							<input type="text" disabled="disabled" id="totprice" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Vat:</a>
							<input type="text" disabled="disabled" id="totvat" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Disc.:</a>
							<input type="text" disabled="disabled" id="totdisc" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Final Total:</a>
							<input type="text" disabled="disabled" id="fintot" class="input_field"  style="float:right;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
							<h5 style="border-bottom:2px solid #0085b2"></h5>
							<div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:5px">Mode:</a>
						<select class="select" id="pmode" style="float:right;width:140px; margin-left:10px; border-color:#f00" disabled="disabled">
								<option value="OTC Sale">OTC Sale</option>
								<option value="Regular">Regular</option>
								
						</select>
						<div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:5px">Amount Paid:</a>
							<input type="text" id="ampaid" class="input_field"  style="float:right;width:100px; font-weight:bold; margin-left:10px;" value=""/>
							<div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:5px">Change:</a>
							<input type="text" disabled="disabled" id="change" class="input_field"  style="float:right;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitpos('".$pid."')\"/>";
								echo'</div>
									</div>
									</div>';
								//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

										
							break;	
							case '0.2':
							$price=$_GET['price'];
							$tprice=$_GET['tprice'];
							$quat=$_GET['quat'];
							$code=$_GET['code'];
							$name=$_GET['name'];
							$tvat=$_GET['tvat'];
							$disc=$_GET['disc'];
							$total=$_GET['total'];
							$date=$_GET['date'];
							$itcost=$_GET['itcost'];
							$cname=$_GET['cname'];
							$bal=$_GET['bal'];
							$qsold=$_GET['qsold'];
							$categ=$_GET['categ'];
							
							$freq=$_GET['freq'];
							$route=$_GET['route'];
							$duration=$_GET['duration'];
							$dosage=$_GET['dosage'];
							
							$itcost=$itcost*$quat;
							if($disc==NULL){$disc=0;}
							if(isset($_SESSION['cart'])){
							$max=count($_SESSION['cart']);
							$_SESSION['cart'][$max]=array($code,$name,$quat,$price,$tprice,$tvat,$disc,$total,$date,$cname,$itcost,$bal,$qsold,$categ,$freq,$route,$duration,$dosage);					$_SESSION['cart'] = array_unique($_SESSION['cart'], SORT_REGULAR);
							$max=count($_SESSION['cart']);
							}
							
							else{
							$_SESSION['cart']=array(array());
							$_SESSION['cart'][0]=array($code,$name,$quat,$price,$tprice,$tvat,$disc,$total,$date,$cname,$itcost,$bal,$qsold,$categ,$freq,$route,$duration,$dosage);					$_SESSION['cart'] = array_unique($_SESSION['cart'], SORT_REGULAR);
							$max=count($_SESSION['cart']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['cart'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['cart'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['cart'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['cart'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartitems($max);
							
					break;
					
					case 3:
					$pid=$_GET['pid'];
					unset($_SESSION['cart'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['cart']=array_values($_SESSION['cart']);
					$max=count($_SESSION['cart']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['cart'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['cart'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['cart'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['cart'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
					cartitems($max);
								
					break;
					
					case '3.1':
					end($_SESSION['cart']);
					$pid= key($_SESSION['cart']);
					unset($_SESSION['cart'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['cart']=array_values($_SESSION['cart']);
					$max=count($_SESSION['cart']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['cart'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['cart'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['cart'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['cart'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
					cartitems($max);
								
					break;
					
					case 4:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['cart'])){
							$max=count($_SESSION['cart']);
							cartitems($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 5:
					
					
					if(isset($_SESSION['cart'])){
							unset($_SESSION['cart']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totvat').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');$('#cname').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					case 6:
							
						
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Prepare Quotation Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
								echo"<script>$('#itemname7').parent().find('input:first').focus();</script>";
								echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		if (evt.keyCode==113){ //f2
       $("#quat").focus();
	   }
	   if (evt.keyCode==115){ //f4
     	 $("#itemname7").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
       viewcartquot(); 
      	}
     	 if (evt.keyCode==112){ //f1
        additemquot(); 
      	}
		if (evt.keyCode==123){ //f12
		submitposquot(); 
      	}
		if (evt.keyCode==120){ //f9
        emptycartquot(); 
      	}
     	 
    }</script>';
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:126px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Make a Quotation</h5>';
			echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help39()\"/></div>";								
echo'<a class="labels">Item Name:</a>
								 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="itemname7" style="width:200px; margin-left:5px;float:left">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$vat=stripslashes($row['Vat']);
								$spr=stripslashes($row['SalePrice']);
								$itemc=stripslashes($row['ItemCode']);
								$itcost = stripslashes($row['PurchPrice']);
								$bal = stripslashes($row['Bal']);
								$name = stripslashes($row['ItemName']);
			echo"<option value=\"".$spr."θ".$vat."θ".$itemc."θ".$itcost."θ".$bal."θ".$name."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>	
							</div>
					<input type="text" id="itname7" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itcost" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<a class="labels" style="margin-left:30px">Quantity:</a>
							<input type="text" id="quat" class="input_field"  style="width:70px; margin-left:10px; float:left"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price" class="input_field"  style="width:70px; margin-left:10px; float:left"/>	
							<a class="labels" style="margin-left:5px">Vat:</a>
							<input type="text" id="vat" disabled="disabled" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px; float:left"/>
							  <div class="cleaner_h5"></div>	
							  <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px; float:left"/>	
							<a class="labels" style="margin-left:5px">Total Vat:</a>
							<input type="text" id="tvat" class="input_field"  style="width:70px;border-color:#f00; margin-left:10px; float:left" disabled="disabled"/>
							<a class="labels" style="margin-left:5px">Discount:</a>
							<input type="text" id="disc" class="input_field"  style="width:60px; margin-left:10px; float:left"/>
							<a class="labels" style="margin-left:5px">SubNet:</a>
							<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:10px; float:left"/>';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additemquot()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcartquot()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycartquot()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:340px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>						
							
										
									</div>
									
									<div id="recentstude">
									<h5 style="margin-left:10px">Analysis</h5>';
							if(isset($_SESSION['quot'])){
							$max=count($_SESSION['quot']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['quot'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['quot'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['quot'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['quot'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							}
							
							echo'<a class="labels" style="margin-left:5px">Total Items:</a>';
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Amount:</a>
							<input type="text" disabled="disabled" id="totprice" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Vat:</a>
							<input type="text" disabled="disabled" id="totvat" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Disc.:</a>
							<input type="text" disabled="disabled" id="totdisc" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Final Total:</a>
							<input type="text" disabled="disabled" id="fintot" class="input_field"  style="float:right;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
						<select class="select" id="pmode" style="float:right;width:140px; margin-left:10px; display:none">
								<option value="Cash">Cash</option>
								<option value="Cheque">Cheque</option>
								<option value="cash">Cash</option>
								<option value="Complimentary">Complimentary</option>
								<option value="Credit">Credit</option>
								<option value="Credit Card">Credit Card</option>
								
						</select>
							<input type="text" id="ampaid" class="input_field"  style="display:none;float:right;width:100px; font-weight:bold; margin-left:10px;" value=""/>
							<input type="text" disabled="disabled" id="change" class="input_field"  style="display:none;float:right;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitposquot()\"/>";
								echo'</div>
									</div>';
					
							break;
							
							case 7:
							$price=$_GET['price'];
							$tprice=$_GET['tprice'];
							$quat=$_GET['quat'];
							$code=$_GET['code'];
							$name=$_GET['name'];
							$tvat=$_GET['tvat'];
							$disc=$_GET['disc'];
							$total=$_GET['total'];
							$date=date('Y/m/d');
							$itcost=$_GET['itcost'];
							$bal=$_GET['bal'];
							$itcost=$itcost*$quat;
							if($disc==NULL){$disc=0;}
							if(isset($_SESSION['quot'])){
							$max=count($_SESSION['quot']);
							$_SESSION['quot'][$max]=array($code,$name,$quat,$price,$tprice,$tvat,$disc,$total,$date,$itcost,$bal);
							$max=count($_SESSION['quot']);
							}
							
							else{
							$_SESSION['quot']=array(array());
							$_SESSION['quot'][0]=array($code,$name,$quat,$price,$tprice,$tvat,$disc,$total,$date,$itcost,$bal);
							$max=count($_SESSION['quot']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['quot'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['quot'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['quot'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['quot'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartitemsquot($max);
							
					break;	
					
					case 8:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['quot'])){
							$max=count($_SESSION['quot']);
							cartitemsquot($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current quotation cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 9:
					
					
					if(isset($_SESSION['quot'])){
							unset($_SESSION['quot']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totvat').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The quotation cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 10:
					$pid=$_GET['pid'];
					unset($_SESSION['quot'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['quot']=array_values($_SESSION['quot']);
					$max=count($_SESSION['quot']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['quot'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['quot'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['quot'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['quot'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
					cartitemsquot($max);
								
					break;
					
						
									case 11:
							
					
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Reprint receipt/Invoice Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:106px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Reprint Receipt/Invoice</h5>';
					echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help40()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Search By:</a>
							<select class="select" id="itemcat" style="width:200px; margin-left:10px;">
									<option value="RcptNo" onclick="setdefault();">Rcpt/Inv No</option>
									<option value="InvNo" onclick="setdefault();">Consolidated Inv No</option>
									<option value="Date" onclick="setitemdate();">Date</option>
									<option value="ClientId" onclick="setdefault();">Patient No</option>
									<option value="ItemName" onclick="setitemname();">Item Name</option>
									<option value="AmountPaid"  onclick="setdefault();">Amount Paid</option>
									</select>
							<a class="labels" style="margin-left:10px">Search Term:</a>
							<div id="option1">
							<input type="text" id="itemdefault" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>
							<div id="option2" style="display:none">
							 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="itemname" style="width:200px; margin-left:5px;float:left">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemName'])."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>	
							</div>
							</div>
							<div id="option3" style="display:none">
							<input type="text" id="datepick" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>';
							  	echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 30px; float:left\" title=\"Search\" onclick=\"searchitem()\"/>";
								echo'<div class="cleaner"></div>
							<div id="option4" style="width:auto"></div></div>
									<div id="itemsdisp" style="height:360px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
									<h5 style="text-align:center">Receipts/Invoices</h5>
									<div id="display" style="margin-top:0px; height:250px;">
	
									</div>
									</div>						
							
										
									</div>
									
									<div id="recentstude">
									
									</div></div>';
							
				break;
							
							case 12:
							$modee=$_GET['itemmode'];
							$searchh=$_GET['searchdata'];
							if($modee=='ClientId'){
						$result =mysqli_query($conn,"SELECT * FROM sales WHERE ".$modee."=".$searchh." limit 0,100");
							}else{
								$result =mysqli_query($conn,"SELECT * FROM sales WHERE ".$modee." LIKE '%".$searchh."%' limit 0,100");
							}
							
							$count = mysqli_num_rows($result);
	echo"<script>$('#option4').html('<p style=\"font-size:10px; margin-left:10px\">".$count." Results Found.</p>')</script>";
	echo'<div id="chati"  style="width:760px; height:320px; overflow-y:scroll" >
		
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="width:130px">Rcpt/Inv No.</div>
									<div id="figure1"  style="width:100px">Date</div>
									<div id="figure1" style="width:170px">ItemName</div>
									<div id="figure1"  style="width:100px">Client Name</div>
									<div id="figure1"  style="width:90px">Total</div>
									<div id="figure1"  style="width:40px">Status</div>
									</div>';
									for ($i = 0; $i < $count; $i++)
									{
								$row=mysqli_fetch_array($result);
								$rcptno=stripslashes($row['RcptNo']);
									echo"<div  class=\"rightclickarea\" id=\"normal\" title=\"Right Click to open receipt/Invoice\">";
										echo"<div id=\"figure2t\" style=\"width:130px\">".stripslashes($row['RcptNo'])."</div>
										<div id=\"figure2t\" style=\"width:100px\">".dateprint(stripslashes($row['Date']))."</div>
										<div id=\"figure2t\" style=\"width:170px; overflow:hidden;height:16px;\" >".stripslashes($row['ItemName'])."</div>
										<div id=\"figure2t\" style=\"width:90px;overflow:hidden;\">".stripslashes($row['ClientName'])."</div>
										<div id=\"figure2t\" style=\"width:105px\" >".stripslashes($row['TotalPrice'])."</div>";
										if(stripslashes($row['Status'])==0){
										echo"<div id=\"figure2t\" onclick=\"r\" style=\"height:16px;width:40px;  border-right:1px solid #333\">
										<img src=\"images/yel.png\" width=\"22\" height=\"22\"/></div>";
										}else{
										echo"<div id=\"figure2t\" onclick=\"r\" style=\"height:16px;width:40px; border-right:1px solid #333\">
										<img src=\"images/notif.jpg\" width=\"22\" height=\"22\"  style=\"margin-top:-4px\" /></div>";	
										}
				echo"
										</div>";
										
										
										echo'<div class="vmenu">
										<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['InvNo']).'θ9</span>Consolidated Invoice</div>
											<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['RcptNo']).'θ10</span>Reprint Receipt</div>
												<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['RcptNo']).'θ11</span>Reprint Invoice</div>
										
										</div>';
										
										}
									
							echo'</div></div>';
							break;
							
							case 13:
						
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Reprint Quotation Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:106px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Reprint Quotation</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help40()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Search By:</a>
							<select class="select" id="itemcat" style="width:200px; margin-left:10px;">
									<option value="RcptNo" onclick="setdefault();">Receipt No</option>
									<option value="Date" onclick="setitemdate();">Date</option>
									<option value="ItemName" onclick="setitemname();">Item Name</option>
									<option value="AmountPaid"  onclick="setdefault();">Amount Paid</option>
									</select>
							<a class="labels" style="margin-left:10px">Search Term:</a>
							<div id="option1">
							<input type="text" id="itemdefault" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>
							<div id="option2" style="display:none">
							 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="itemname" style="width:200px; margin-left:5px;float:left">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemName'])."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>	
							</div>
							</div>
							<div id="option3" style="display:none">
							<input type="text" id="datepick" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>';
							  	echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 30px; float:left\" title=\"Search\" onclick=\"searchquot()\"/>";
								echo'<div class="cleaner"></div>
							<div id="option4" style="width:auto"></div></div>
									<div id="itemsdisp" style="height:360px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
									<h5 style="text-align:center">Quotations</h5>
									<div id="display" style="margin-top:0px; height:250px;">
	
									</div>
									</div>						
							
										
									</div>
									
									<div id="recentstude">
									
									</div></div>';
								break;
							
							case 14:
							$modee=$_GET['itemmode'];
							$searchh=$_GET['searchdata'];
						$result =mysqli_query($conn,"SELECT * FROM quotation WHERE ".$modee." LIKE '%".$searchh."%' limit 0,100");
							$count = mysqli_num_rows($result);
	echo"<script>$('#option4').html('<p style=\"font-size:10px; margin-left:10px\">".$count." Results Found.</p>')</script>";
	echo'<div id="chati">
				<div id="scrollbar1" style="width:760px; height:320px" onmouseenter="scroller();">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:740px; height:320px">
			 <div class="overview">
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="width:100px">Receipt No.</div>
									<div id="figure1"  style="width:100px">Date</div>
									<div id="figure1" style="width:200px">ItemName</div>
									<div id="figure1"  style="width:100px">Client Name</div>
									<div id="figure1"  style="width:60px">Reprint</div>
									</div>';
									for ($i = 0; $i < $count; $i++)
									{
								$row=mysqli_fetch_array($result);
								$rcptno=stripslashes($row['RcptNo']);
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['RcptNo'])."</div>
										<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['Date'])."</div>
										<div id=\"figure2t\" style=\"width:200px; overflow:hidden;height:16px;\">".stripslashes($row['ItemName'])."</div>
										<div id=\"figure2t\" style=\"width:104px\">".stripslashes($row['TotalPrice'])."</div>
				<div id=\"figure2t\" onclick=\"window.open('report.php?id=2&rcptno=".$rcptno."')\" style=\"padding:height:16px;width:60px; border-right:1px solid #333\">
										<img src=\"images/preview.png\" width=\"22\" height=\"22\" /></div>
										</div>";
										}
									
							echo'</div></div></div></div></div>';
							break;
							
							case 15:
						
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Issue Credit Note Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:126px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Issue Credit Note</h5>';
						echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help41()\"/></div>";								
echo'<a class="labels" style="margin-left:10px">Receipt No:</a>
					<input type="text" id="rcptno" class="input_field"  style="width:170px; margin-left:10px;"/>';
					echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Search Receipt\" onclick=\"searchreceipt()\"/>";
							echo'<div id="option4" style="float:left;margin-left:70px"></div>
							  <div class="cleaner_h5"></div>	
							<a class="labels" style="margin-left:5px">Return Total:</a>
							<input type="text" disabled="disabled" id="retotal" class="input_field"  style="width:100px;border-color:#f00; font-weight:bold; margin-left:10px;"/>';
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Issue Credit Note\" onclick=\"iscredit()\"/>";
				
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:340px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>						
							
										
									</div>
									
									<div id="recentstude">
									
								</div>
									</div>';
						
							break;
							
							case 16:
							echo"<script>$('#retotal').val('');</script>";
							$searchh=$_GET['searchdata'];
							$result =mysqli_query($conn,"SELECT * FROM sales WHERE RcptNo='".$searchh."' and Status!=0");
							$count = mysqli_num_rows($result);
							if($count==0){
	echo"<script>$('#option4').html('<p style=\"font-size:10px; margin-left:10px\">Invalid Receipt Number-Either non existent or has not been posted.</p>')</script>";
	exit;
							}
else{							
								$a=0;
								for ($i = 0; $i < $count; $i++){
								$row=mysqli_fetch_array($result);
								$a=stripslashes($row['AmountPaid']);
								$date=stripslashes($row['Date']);
									}
	echo"<script>$('#option4').html('<img src=\"images/tick.png\" style=\"margin-top:0px\"  width=\"30\" height=\"30\"/>');
	$('#cdate').val('".$date."');
	$('#crct').val('".$searchh."');
	$('#csale').val((".$a.").formatMoney(2, '.', ','));
</script>";}
	echo'<div id="chati">
				<div id="scrollbar1" style="width:760px; height:300px" onmouseenter="scroller();">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:740px; height:300px">
			 <div class="overview">
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:236px">ItemName</div>
									<div id="figure1"  style="width:70px">Unit Price</div>
									<div id="figure1" style="width:80px">Qty. Prchsd</div>
									<div id="figure1"  style="width:70px">Return Qty</div>
									<div id="figure1"  style="width:75px">Remain Qty</div>
									<div id="figure1"  style="width:80px">Return Total</div>
									<div id="figure1"  style="width:45px">Add</div>
									
									</div>';
				if($count>0){
				$_SESSION['credit']=array(array());
				$result =mysqli_query($conn,"SELECT * FROM sales WHERE RcptNo='".$searchh."'");
				$rcptno=$searchh;
				$count = mysqli_num_rows($result);
				for ($i = 0; $i < $count; $i++){
				$row=mysqli_fetch_array($result);
				$code=stripslashes($row['ItemCode']);
				$tno=stripslashes($row['TransNo']);
				$name=stripslashes($row['ItemName']);
				$price=stripslashes($row['UnitPrice']);
				$qty=stripslashes($row['Qty']);
				echo'<div id="normal">';
				echo"<div id=\"name".$code."\" class=\"figure2t\" style=\"width:240px;height:16px;overflow:hidden\">".$name."</div>
		<div id=\"price".$code."\" class=\"figure2t\" style=\"width:70px\">".$price."</div>
	<div id=\"iqty".$code."\" class=\"figure2t\" style=\"width:80px; overflow:hidden\">".$qty."</div>
		<div id=\"figure2t\" style=\"width:70px; padding:3px 5px; height:20px\"><input type=\"text\" id=\"rqty".$code."\" onkeyup=\"qtykeyup(".$code.")\" class=\"put_field\" style=\"width:70px; background:fff; border:0\"/></div>
			<div id=\"remqty".$code."\" class=\"figure2t\" style=\"width:80px\"></div>
				<div  id=\"rtot".$code."\" class=\"figure2t\" style=\"width:80px;\"></div>
				<div  id=\"add".$code."\" class=\"figure2t\" style=\"width:42px; height:16px; border-right:1px solid #333\">
				<img src=\"images/document_add.png\" width=\"22\"  onclick=\"addcredit(".$code.",".$tno.")\" height=\"22\" /></div></div>";
										}
					}
							echo'</div></div></div></div></div>';
							break;
							
							case 17:
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">
							<img src="images/tick.png" width="19" height="19" />';
							$price=$_GET['price'];
							$quat=$_GET['quat'];
							$rquat=$_GET['rquat'];
							$remquat=$_GET['remquat'];
							$rtot=$_GET['rtot'];
							$code=$_GET['code'];
							$name=$_GET['name'];
							$tno=$_GET['tno'];
							if(isset($_SESSION['credit'])){
							$max=count($_SESSION['credit']);
							$_SESSION['credit'][$max]=array($code,$name,$quat,$price,$rquat,$rtot,$remquat,$tno);
							}
							
							else{
							$_SESSION['credit']=array(array());
							$_SESSION['credit'][0]=array($code,$name,$quat,$price,$rquat,$rtot,$remquat,$tno);}
							$a=0;
							$max=count($_SESSION['credit']);
						
							for ($i =1; $i < $max; $i++){
							$a+=preg_replace('~,~', '', $_SESSION['credit'][$i][5]);
							}
							echo"<script>$('#retotal').val((".$a.").formatMoney(2, '.', ','));</script>";
							break;
							
							case 18:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Reprint Credit Note Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:106px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Reprint CreditNote</h5>';
						echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help40()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Search By:</a>
							<select class="select" id="itemcat" style="width:200px; margin-left:10px;">
									<option value="Creditno" onclick="setdefault();">Credit No</option>
									<option value="RcptNo" onclick="setdefault();">Receipt No</option>
									<option value="TransDate" onclick="setitemdate();">Transaction Date</option>
									<option value="ReceiptDate" onclick="setitemdate();">Receipt Date</option>
									<option value="ItemName" onclick="setitemname();">Item Name</option>
									<option value="ReceiptAmount"  onclick="setdefault();">Receipt Amount</option>
									</select>
							<a class="labels" style="margin-left:10px">Search Term:</a>
							<div id="option1">
							<input type="text" id="itemdefault" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>
							<div id="option2" style="display:none">
							 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="itemname" style="width:200px; margin-left:5px;float:left">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemName'])."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>	
							</div>
							</div>
							<div id="option3" style="display:none">
							<input type="text" id="datepick" class="input_field"  style="width:270px; margin-left:10px;"/>
							</div>';
							  	echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 30px; float:left\" title=\"Search\" onclick=\"searchcredit()\"/>";
								echo'<div class="cleaner"></div>
							<div id="option4" style="width:auto"></div></div>
									<div id="itemsdisp" style="height:360px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
									<h5 style="text-align:center">Credit Notes</h5>
									<div id="display" style="margin-top:0px; height:250px;">
	
									</div>
									</div>						
							
										
									</div>
									
									<div id="recentstude">
									
									</div></div>';
							break;
							
							case 19:
							$modee=$_GET['itemmode'];
							$searchh=$_GET['searchdata'];
						$result =mysqli_query($conn,"SELECT * FROM creditnotes WHERE ".$modee." LIKE '%".$searchh."%' limit 0,100");
							$count = mysqli_num_rows($result);
	echo"<script>$('#option4').html('<p style=\"font-size:10px; margin-left:10px\">".$count." Results Found.</p>')</script>";
	echo'<div id="chati">
				<div id="scrollbar1" style="width:760px; height:320px" onmouseenter="scroller();">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:740px; height:320px">
			 <div class="overview">
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="width:100px">Credit No.</div>
									<div id="figure1"  style="width:100px">Trans. Date</div>
									<div id="figure1"  style="width:100px">Receipt Date</div>
									<div id="figure1" style="width:200px">ItemName</div>
									<div id="figure1"  style="width:100px">Sale Amount</div>
									<div id="figure1"  style="width:60px">Reprint</div>
									</div>';
									for ($i = 0; $i < $count; $i++)
									{
								$row=mysqli_fetch_array($result);
								$crdtno=stripslashes($row['Creditno']);
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['Creditno'])."</div>
					<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['TransDate'])."</div>
					<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['ReceiptDate'])."</div>
				<div id=\"figure2t\" style=\"width:200px; overflow:hidden;height:16px;\">".stripslashes($row['ItemName'])."</div>
				<div id=\"figure2t\" style=\"width:105px\">".stripslashes($row['ReceiptAmount'])."</div>
				<div id=\"figure2t\" onclick=\"window.open('report.php?id=3&rcptno=".$crdtno."')\" style=\"padding:height:16px;width:60px; border-right:1px solid #333\">
										<img src=\"images/preview.png\" width=\"22\" height=\"22\" /></div>
										</div>";
										}
									
							echo'</div></div></div></div></div>';
							break;
							
							case 20:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses New Patient Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$result =mysqli_query($conn,"select * from patients order by auto desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){$pntno=1;
								}else {
									$pntno=stripslashes($row['pntno'])+1;	}
								echo"<script>$('#currentins2').parent().find('input:first').width(140);</script>";
								echo'<script>document.onkeydown = keydown;
								function keydown(evt){
								if (!evt) evt = event;
								if (evt.keyCode==121){ //f2
								evt.preventDefault();
							   addnewpat();
							   }
							   if (evt.keyCode==112){ //f2
								evt.preventDefault();
							   help3();
							   }
								}
								 </script>';
							 echo' <input type="text" style="display:none" id="tdate" value="'.date('Y').'">	
							 <div id="page">';	
							echo'<div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; margin:0;">New Patient Information</h2>';
								
								echo'<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Help" id="submit"  style="padding:2px 5px; border-color:#fff; background:#ff3; float:left; cursor:pointer;width:50px" class="in_field" onclick="help3();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewpat();"/></div>';
			
					
		
																

								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="field" class="in_field" value="'.$pntno.'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">1st Name:<span>*</span></a>
                                <input type="text" id="fname" name="field" class="in_field" style="text-transform:uppercase"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">2nd Name:<span>*</span></a>
                                <input type="text" id="oname" name="field" class="in_field" style="text-transform:uppercase"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">3rd:</a>
                                <input type="text" id="lname" name="field" class="in_field" style="text-transform:uppercase;width:77px;margin-left:5px;float:left"/> 
                                <a class="labels" style="margin-left:5px">4th:</a>
                                <input type="text" id="fourthname" name="field" class="in_field" style="text-transform:uppercase;width:77px;margin-left:5px;float:left"/> 
								<div class="cleaner_h5"></div>
							
								 <a class="labels">D.o.b:<span>*</span></a>
	<input id="dob" style="" name="dob" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10">
								<div class="cleaner_h5"></div>
								 <a class="labels">Age:<span>*</span></a>
<input type="text" id="age" name="age" class="in_field" style="border-color:#f00;margin-left:5px;" readonly="readonly"/> 
							<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								 <input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.
								<div class="cleaner"></div> 
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="stream" name="stream" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No[2]:</a>
                                <input type="text" id="phone2" name="stream" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phy Add:</a>
                                <input type="text" id="house" name="house" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="course" name="course" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right; padding:2px 5px">
								<option value="">None</option>
								<option value="A Rh+">A Rh+</option>
								<option value="A Rh-">A Rh-</option>
								<option value="B Rh+">B Rh+</option>
								<option value="B Rh-">B Rh-</option>
								<option value="AB Rh+">AB Rh+</option>
								<option value="AB Rh-">AB Rh-</option>
								<option value="O Rh+">O Rh+</option>
								<option value="O Rh-">O Rh-</option>
								</select>
								</div>
							
								<div id="personal">
								<a class="labels">Id No:<span>*</span></a>
                                <input type="text" id="idno" name="idno" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">MCC No:</a>
                                <input type="text" id="mccno" name="mccno" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<h5>Guardian Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname" name="gname" class="in_field"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship" name="rship" style="float:right">
								<option value="">None</option>
								<option value="Father">Father</option>
								<option value="Mother">Mother</option>
								<option value="Husband">Husband</option>
								<option value="Wife">Wife</option>
								<option value="Brother">Brother</option>
								<option value="Sister">Sister</option>
								<option value="Uncle">Uncle</option>
								<option value="Aunt">Aunt</option>
								<option value="Cousin">Cousin</option>
								<option value="Son">Son</option>
								<option value="Daughter">Daughter</option>
								<option value="Others">Others</option>
								</select> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No:</a>
                                <input type="text" id="gphone" name="gphone" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No[2]:</a>
                                <input type="text" id="geno" name="geno" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress" name="gaddress" class="in_field"/> 
								<div class="cleaner_h5"></div>
								
								</div>
								
								<div id="personal">
								<h5>Employer Details</h5>
								<a class="labels">Employer:</a>
								<input type="text" id="tcr" name="gaddress" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Emp. No:</a>
								<input type="text" id="tdr" name="gaddress" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<h5>Insurance Scheme Details</h5>
								<a class="labels">Insurer:</a>
								<div class="ui-widget" style="margin-right:25px; float:right">
								<select id="currentins2" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
								$resulta =mysqli_query($conn,"select * from schemes order by CompanyName");
								$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);
									echo"<option value=\"".stripslashes($rowa['SchemeId'])."θ".stripslashes($rowa['SchemeName'])."θ".stripslashes($rowa['CompanyName'])."\">".stripslashes($rowa['SchemeName'])."</option>";	
								}
								echo'</select></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Card No:</a>
								<input type="text" id="cardno" name="gaddress" class="in_field"/> 
								<input type="text" id="insid" name="oname"  class="in_field" style="display:none"/> 
								<input type="text" id="insname" name="oname"  class="in_field" style="display:none"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Company:</a>
								<input type="text" id="company" name="" class="in_field" disabled style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Other Details/Notes:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy"></textarea>
								<div class="cleaner_h5"></div>
									
								</div>
								<div id="personal">
								</form>
								<h5>Upload Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
							
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$pntno.'"/>
								<input type="hidden" id="id" name="id"  value="1"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h40"></div>
								
								<div class="cleaner_h20"></div>
								<div id="newstudent" style="float:right; margin-right:20px;height:20px; "></div>
								</div>
								</div>
   							';
							break;
							
							case 21:
							$reg=$_GET['param'];
							echo"<script>$('#currentins2').parent().find('input:first').width(140);</script>";
		
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Patient Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$result =mysqli_query("select * from patients where pntno='".$reg."'");
							if( mysqli_num_rows($result)==0){
			echo "<script>editpatient(21);</script>";
			
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
							$row=mysqli_fetch_array($result);
							
							echo'<script>document.onkeydown = keydown;
								function keydown(evt){
								if (!evt) evt = event;
								if (evt.keyCode==121){ //f2
								evt.preventDefault();
							   editpat('.$reg.');
							   }
							  
								}
								 </script>';
							
							echo'<div id="newstude">
						<h2  style="float:left; padding:5px 5px 0 0; margin:0">Edit Patient Information</h2>';
									
echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$reg."')\" title=\"Print Report\">";
		echo'<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Help" id="submit"  style="padding:2px 5px; border-color:#fff; background:#ff3; float:left; cursor:pointer;width:50px" class="in_field" onclick="help5();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"editpat('".$reg."');\"/></div>";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>

								
								<a class="labels">1st Name:<span>*</span></a>
                                <input type="text" id="fname" name="field"   value="'.stripslashes($row['name']).'" class="in_field" style="text-transform:uppercase"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">2nd Name:<span>*</span></a>
                                <input type="text" id="oname" name="field"   value="'.stripslashes($row['oname']).'" class="in_field" style="text-transform:uppercase"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">3rd:</a>
                                <input type="text" id="lname" name="field"   value="'.stripslashes($row['lname']).'" class="in_field" style="text-transform:uppercase;width:77px;margin-left:5px;float:left"/> 
                                <a class="labels" style="margin-left:5px">4th:</a>
                                <input type="text" id="fourthname" name="field"   value="'.stripslashes($row['fourthname']).'" class="in_field" style="text-transform:uppercase;width:77px;margin-left:5px;float:left"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">D.o.b:<span>*</span></a>
 <input type="text" style="display:none" id="tdate" value="'.date('Y').'">';
 $a=date('Y')-substr(stripslashes($row['dob']),-4,4);
echo'<input id="dob" style="" name="dob" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10" value="'.stripslashes($row['dob']).'">
	
								<div class="cleaner_h5"></div>
								<a class="labels">Age:<span>*</span></a>
<input type="text" id="age" name="age" class="in_field" style="border-color:#f00;margin-left:5px;" disabled="disabled" value="'.$a.'"/> 
									<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($row['gender'])=='male'){
									 echo'<input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked">Female.';}
								echo'<div class="cleaner"></div> 
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="stream" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No[2]:</a>
                                <input type="text" id="phone2" name="stream" class="in_field" value="'.stripslashes($row['phone2']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="house" name="house" class="in_field" value="'.stripslashes($row['address']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="course" name="course" class="in_field" value="'.stripslashes($row['email']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup"  style="float:right;padding:2px 5px">
								<option value="'.stripslashes($row['bgroup']).'" selected="selected">'.stripslashes($row['bgroup']).'</option>
								<option value="None">None</option>
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
								</div>
								</form>
								
							
								<div id="personal">
								<a class="labels">Id No:<span>*</span></a>
                                <input type="text" id="idno" name="idno" class="in_field" value="'.stripslashes($row['idno']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">MCC No:</a>
                                <input type="text" id="mccno" name="mccno" class="in_field" value="'.stripslashes($row['mccno']).'"/> 
								<div class="cleaner_h5"></div>
								<h5>Employer Details</h5>
								<a class="labels">Employer:</a>
								<input type="text" id="tcr" name="gaddress" class="in_field" value="'.stripslashes($row['empname']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Emp. No:</a>
								<input type="text" id="tdr" name="gaddress" class="in_field" value="'.stripslashes($row['empno']).'"/> 
								<div class="cleaner_h5"></div>
								<h5>Insurance Scheme Details</h5>
								<a class="labels">Insurer:</a>
								<div class="ui-widget" style="margin-right:25px; float:right">
								<select id="currentins2" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									echo'<option value="'.stripslashes($row['insid']).'θ'.stripslashes($row['insurer']).'" selected="selected">'.stripslashes($row['insurer']).'</option>';
								$resulta =mysqli_query($conn,"select * from schemes order by CompanyName");
								$num_resultsa = mysqli_num_rows($resulta);	
								for ($i=0; $i <$num_resultsa; $i++) {
									$rowa=mysqli_fetch_array($resulta);
									echo"<option value=\"".stripslashes($rowa['SchemeId'])."θ".stripslashes($rowa['SchemeName'])."θ".stripslashes($rowa['CompanyName'])."\">".stripslashes($rowa['SchemeName'])."</option>";	
								}
								echo'</select>
								</div><div class="cleaner_h5"></div>
								<a class="labels">Card No:</a>
								<input type="text" id="cardno" name="gaddress" class="in_field" value="'.stripslashes($row['cardno']).'"/> 
								<input type="text" id="insid" name="oname"  class="in_field" style="display:none" value="'.stripslashes($row['insid']).'"/> 
								<input type="text" id="insname" name="oname"  class="in_field" style="display:none"  value="'.stripslashes($row['insurer']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Company:</a>
								<input type="text" id="company" class="in_field" value="'.stripslashes($row['company']).'" disabled style="border-color:#f00"/>
								<div class="cleaner_h5"></div> 
								<a class="labels">Other Details/Notes:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy" class="alergy">'.stripslashes($row['odetails']).'</textarea>
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">

								
								<h5>Guardian Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname" name="gname" class="in_field" value="'.stripslashes($row['gname']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship" name="rship" style="float:right">
								<option value="'.stripslashes($row['grship']).'" selected="selected">'.stripslashes($row['grship']).'</option>
								<option value="Father">Father</option>
								<option value="Mother">Mother</option>
								<option value="Husband">Husband</option>
								<option value="Wife">Wife</option>
								<option value="Brother">Brother</option>
								<option value="Sister">Sister</option>
								<option value="Uncle">Uncle</option>
								<option value="Aunt">Aunt</option>
								<option value="Cousin">Cousin</option>
								<option value="Son">Son</option>
								<option value="Daughter">Daughter</option>
								<option value="Others">Others</option>
								</select> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No.:</a>
                                <input type="text" id="gphone" name="gphone" class="in_field" value="'.stripslashes($row['gcont']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No[2]:</a>
                                <input type="text" id="geno" name="geno" class="in_field" value="'.stripslashes($row['geno']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress" name="gaddress" class="in_field" value="'.stripslashes($row['gaddress']).'"/> 
								<div class="cleaner_h5"></div>
								<h5>Inpatient Details</h5>
								<a class="labels">I/P No.:</a>
                                <input type="text" id="inpatient" name="gphone" class="in_field" value="'.stripslashes($row['ipno']).'"/> 
								<div class="cleaner_h5"></div>
								</div>
								<div id="personal">
								<h5>Edit Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload" 
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" src="'.stripslashes($row['image']).'">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.stripslashes($row['pntno']).'"/>
								<input type="hidden" id="id" name="id"  value="2"/>
								<input type="hidden" id="regno" name="regno"  value="'.stripslashes($row['pntno']).'"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h5"></div>';
							echo'</div>';
							echo"<script>calcage('".stripslashes($row['dob'])."')</script>";
							break;
							
					case 22:
					$a=$_GET['a'];
					echo"<script>$('#patientnoall').focus();</script>";	
					echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			if($a==114){
				echo'Patient Chart';
			}
			if($a==21){
				echo'Edit Patient Info';
			}
			if($a==157){
				echo'Delete Patient Record';
			}
			if($a==93){
				echo'Triage';
			}
			if($a==122){
				echo'Deaths Register';
			}
			if($a==130){
				echo'Reception';
			}
			if($a==158){
				echo'Inpatient Admission';
			}
			if($a==160){
				echo'Social Works';
			}
			
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		
		<a class="labels" style="margin-left:10px">Patient No:</a>	
	 <input type="text" id="patientnoall" name="regn" placeholder="Type Number and Press Enter" class="in_field" value=""  style="float:left;margin-left:10px;width:180px"/>
	 <div class="cleaner_h5"></div>
	 	
		<a class="labels" style="float:left;margin-left:100px">Or  Search</a>	
			 <img src="images/zoom.png" style="width:30px; height:30px; float:left; cursor:pointer; margin-left:5px" onclick="findpatient()"/> 
	 	<div class="cleaner_h5"></div>	
		<div id="searchres">
			<div class="cleaner_h5"></div>	
		</div>	
			<div class="cleaner_h5"></div>
			
				</div>';	
							break;
							
							case 23:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Process Prescription Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$stat=stripslashes($rowa['Status']);
							if($stat==4&&stripslashes($rowa['Tests'])!=''){
							$s=2;$p='Lab Analysis';	
							}else {$s=1;$p='Doctor Examination';}	
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							
							echo'<div id="newstude">';
								echo"<script>$('#item3').parent().find('input:first').width(200);$('#bedno').parent().find('input:first').width(130);
								$('#bedno').parent().find('input:first').prop('disabled',true);
$('#bedno').parent().find('input:first').css({'border' : 'solid #ccc 1px'});</script>";	
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Process Prescription</h2>";
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help9()\"/></div>";		
	echo"<img src=\"images/back.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:0px 10px 0 0px; float:right\" title=\"Roll Back to Previous Stage\" onclick=\"rollback(".$s.",".$pid.",'".$p."')\"/>";					
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name" name="name" disabled="disabled" style="border-color:#f00"  class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" name="oname" disabled="disabled" style="border-color:#f00"  class="in_field" value="'.stripslashes($row['oname']).'"/> 
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
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked" disabled="disabled">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" id="stream"  disabled="disabled"  style="border-color:#f00" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
								</form>
								<div id="personal">
								<h5>Medical Info</h5>
								<a class="labels">B.Group:<strong> '.stripslashes($row['bgroup']).'</strong></a>
                                <div class="cleaner_h5"></div>
								<a class="labels">Known Health Problems/Allergies:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy" class="alergy " style="height:60px;border-color:#f00" disabled="disabled">'.stripslashes($row['alergy']).'</textarea>
								<div class="cleaner_h5"></div>';
								echo"<h5>Triage Analysis</h5>";
								echo'<div class="cleaner_h5"></div>
								 <a class="labels">Temp:</a>
                                <input type="text" id="temp" name="oname"  class="in_field"  style="border-color:#f00" value="'.stripslashes($rowa['Temp']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.P:</a>
                                <input type="text" id="bp" name="oname" class="in_field"  style="border-color:#f00" value="'.stripslashes($rowa['Bp']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Weight:</a>
                                <input type="text" id="weight" name="oname" class="in_field"  style="border-color:#f00" value="'.stripslashes($rowa['Weight']).'" disabled="disabled"/> 
								<a class="labels">Other Details:</a>
								<textarea id="odetail" style="float:right;height:35px;border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowa['OtherDetails']).'</textarea>
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">
								<h5>Examination Results</h5>
								<a class="labels">Patient Complaints:</a>
								<textarea id="complaint" style="float:right;height:70px;border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowa['Complaint']).'</textarea>
								<div class="cleaner_h5"></div>';
								if($stat==4&&stripslashes($rowa['Tests'])!=''){$a='YES';}else {$a='NO';}
								echo'<a class="labels">Lab Test:<strong> '.$a.'</strong></a>';
								if($stat==4&&stripslashes($rowa['Tests'])!=''){
								echo'<div class="cleaner"></div>
								<a class="labels">Test Done:</a>
								<textarea id="rectest" style="float:right;height:70px;border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowa['Tests']).'</textarea>
								<a class="labels">Lab Results:</a>
								<textarea id="labres" style="float:right;height:70px;border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowa['LabResults']).';'.stripslashes($rowa['RadiologyResults']).'</textarea>
								';}
								echo'</div>
								
								<div id="personal">
								<h5>Final Analysis</h5>
								<a class="labels">Diagnosis:<span>*</span></a>
								<textarea id="diagnosis" style="float:right;height:30px;" class="alergy"></textarea>
								<a class="labels">Medication:</a>
								<div class="cleaner"></div>
								<div class="ui_widget"  style="margin-left:0px;float:left;">
		<select id="item3">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from items where Bal>0 order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$rowd=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($rowd['ItemName']).'">'.stripslashes($rowd['ItemName']).', Bal:'.stripslashes($rowd['Bal']).'</option>';
							}
		echo'
	</select>
	</div><div class="cleaner"></div>
	<a class="labels">Medication Details:<span>*</span></a>
	<div class="cleaner"></div>
								<textarea id="medication" style="float:right;height:90px;" class="alergy" title="Format:Drug Name-Dosage-Frequency-Period;"></textarea>
								<div class="cleaner"></div>
								<a class="labels">Finish Entry:</a>
		<input type="checkbox" value="1" name="finishent" style="margin:8px 0 0 10px">
		<div class="cleaner_h5"></div>';
								
								
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"savepresc('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; width:40px;"></div>
							</div>
   							';
							
					break;
					
					case 24:
						echo"<script>$('#pntno').parent().find('input:first').focus();</script>";	
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses View Patient History Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:136px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">View Patient History</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-20px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help28()\"/></div>";								
echo'<div class="cleaner_h5"></div>
		<a class="labels" style="margin-left:0px">Patient Name:</a>
					<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="pntno" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from patients where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['pntno']).'">'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).' '.stripslashes($rowa['lname']).'-'.stripslashes($rowa['pntno']).'</option>';
							}
		echo'
	</select></div>
					<div class="cleaner_h5"></div>
					<a class="labels">Filter From:</a>
					<input type="text" id="datepick" class="input_field"  style="float:left;width:100px; margin-left:10px;"/>
					<a class="labels" style="margin-left:20px">To:</a>
					<input type="text" id="datepick2" class="input_field"  style="float:left;width:100px; margin-left:10px;"/>';
					echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Filter Records\" onclick=\"filterrecord()\"/>";
					echo'<a class="labels" style="margin-left:20px">Or View All:</a>';
					echo"<img src=\"images/search-icon.png\" width=\"45\" height=\"45\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View All Records\" onclick=\"viewallrec()\"/>";
					echo'<a class="labels" style="margin-left:20px">Or Print All:</a>';
					echo"<img src=\"images/printer.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Print All Records\" onclick=\"printallrec()\"/>";
					echo'</div>
									<div id="itemsdisp" style="height:330px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
									<h5 style="text-align:center">Patient Records</h5>
									<div id="display" style="margin-top:0px; height:250px;">
	
									</div>
									</div>						
							
										
									</div>
									
									<div id="recentstude">
									
									</div></div>';
							break;
							
							case 25:
							echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$pntno=$_GET['pntno'];
							$a=$_GET['a'];
							if($a==1){
							$date1=preg_replace('~/~', '', $_GET['date1']);
							$date2=preg_replace('~/~', '', $_GET['date2']);
								$result =mysqli_query($conn,"SELECT * FROM newprescription WHERE PatId='".$pntno."' and Stamp>='".$date1."' and Stamp<='".$date2."'");
							}
							else if($a==2){
								$result =mysqli_query($conn,"SELECT * FROM newprescription WHERE PatId='".$pntno."'");
							}
						
							$count = mysqli_num_rows($result);
						
	echo'<div id="chati">
				<div id="scrollbar1" style="width:760px; height:300px" onmouseenter="scroller();">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:740px; height:300px">
			 <div class="overview">
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1"  style="width:100px">Date</div>
									<div id="figure1" style="width:200px">Complaints</div>
									<div id="figure1"  style="width:150px">Diagnosis</div>
									<div id="figure1"  style="width:202px">Prescription</div>
									
									</div>';
							if($count==0){
								
								echo'<div class="cleaner_h5"></div>
								No records to display under this selection.';
							}
			
								for ($i = 0; $i < $count; $i++){
								$row=mysqli_fetch_array($result);
								$com=stripslashes($row['Complaint']);
								$pres=stripslashes($row['Prescription']);
								$dia=stripslashes($row['Diagnosis']);
								$date=stripslashes($row['TransDate']);
								$code=stripslashes($row['PrescId']);
				echo"<div id=\"normal\" onclick=\"window.open('report.php?id=4&rcptno=".$code."')\" title=\"Preview Record\" >";
				echo"<div id=\"date".$code."\" class=\"figure2t\" style=\"width:100px\">".dateprint($date)."</div>
		<div id=\"test".$code."\" class=\"figure2t\" style=\"width:200px; height:16px; overflow:hidden\">".$com."</div>
	<div id=\"pres".$code."\" class=\"figure2t\" style=\"width:150px; height:16px; overflow:hidden\">".$dia."</div>
		<div id=\"dia".$code."\" class=\"figure2t\" style=\"width:205px; height:16px; overflow:hidden\">".$pres."</div>
		</div>
";
										}
					echo'</div></div></div></div></div>';
							break;
							
							case 26:
						
								echo"<script>
								$('#supname').focus();
								$('#itemxa').parent().find('input:first').width(230);</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		
		if (evt.keyCode==113){ //f2
		   evt.preventDefault();
		 $("#ampaid").focus();
	   }
	   if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
      	 $("#itemname1").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
           viewcartpur(); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       	  additempur(); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
			submitpur(); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help36(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
        emptycartpur(); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		if (evt.keyCode==116){ //f5
		evt.preventDefault();
		purchasesumm();
      	}
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastpur();
      	}
     	 
		if (evt.keyCode==122){ //f11
		evt.preventDefault();
		var dat = $("#itemdet").val();
        $().customAlert();
		alert("Item Details", "<p>" + dat + "</p>");
		e.preventDefault();
      	}
     	 
    }</script>';
	echo"<script>$('#supname').parent().find('input:first').width(180);</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchase Stock Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:186px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Goods Received Inwards(GRN)</h5>
	<div id="depbal" style="float:right; margin-right:10px"></div>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help36()\"/></div>";								
echo'
								<a class="labels">Supplier Name:</a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:15px">
							<select class="select" id="supname" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
							</div><a class="labels" style="margin-left:20px">Invoice Number:</a>
							  <input type="text" id="invoice" class="input_field"  style="width:100px; margin-left:10px;float:left"/> 
							<a class="labels" style="margin-left:20px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:100px; margin-left:10px;float:left"/><div class="cleaner_h5"></div><a class="labels">Item:</a>
							 <div class="ui-widget" style="margin-left:10px; float:left">
	<select id="itemxa" style="float:left">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$spr=stripslashes($row['SalePrice']);
								$itemc=stripslashes($row['ItemCode']);
								$itcost = stripslashes($row['PurchPrice']);
								$bal = stripslashes($row['PHARMACY']);
								$qsold = stripslashes($row['Qsold']);
								$qpurch = stripslashes($row['Qpurch']);
								$name = stripslashes($row['ItemName']);
								$pack = stripslashes($row['Pack']);
								
					echo'<option value="'.$spr.'θ'.$itemc.'θ'.$itcost.'θ'.$bal.'θ'.$qpurch.'θ'.$qsold.'θ'.$name.'θ'.$pack.'">'.stripslashes($row['ItemName']).'</option>';
							}
	echo'</select>
	</div>
	<input type="text" id="itemdet" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itemsale" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itname7" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itcost" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="qpurch" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="cusid" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="vat" value="" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="tvat" value="" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="qty" value="" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="sp56" value="" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="pp56" value="" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<a class="labels" style="margin-left:35px">Pack:</a>
							<input type="text" id="pack" class="input_field"  style="width:40px; margin-left:10px;float:left; border-color:#f00" disabled="disabled""/>
							
							<a class="labels" style="margin-left:5px">Unit:</a>
							<input type="text" id="unit56" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
							<a class="labels" style="margin-left:5px">Part:</a>
							<input type="text" id="part56" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
							<a class="labels" style="margin-left:5px">Pur. Price:</a>
							<input type="text" id="price56" class="input_field"  style="width:60px; margin-left:5px;float:left"/>
							 <div class="cleaner_h5"></div>	
							<a class="labels" style="margin-left:5px">Batch No:</a>
							<input type="text" id="batch" class="input_field"  style="width:50px;margin-left:10px;float:left"/>
							 <a class="labels" style="margin-left:5px">Expiry Date:</a>
							<input type="text" id="datepick22" class="input_field"  style="width:90px; margin-left:10px;float:left" placeholder="dd/mm/yyyy"/>
							<a class="labels" style="margin-left:5px">Margin:</a>
							<input type="text" id="margin" class="input_field" value="1"  style="width:50px; margin-left:10px;float:left; border-color:#f00" disabled="disabled"/>
							 <a class="labels"  disabled="disabled" style="margin-left:5px">Tot.Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:80px;border-color:#f00; margin-left:10px;float:left"/>	
							
							<input type="hidden" id="pricet" class="input_field"  style="width:60px; margin-left:10px;float:left;" title="In Part Price"/>
							
							 
							<input type="text" id="discc" class="input_field"  style="width:50px; margin-left:10px;float:left; display:none"/>
							<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:10px;float:left; display:none""/>
										 <div class="cleaner_h5"></div>	
							
                       <input type="checkbox" value="1" name="bonus" id="" style="float:left;margin:10px 0 0 10px">
					   <a class="labels" style="margin-left:10px">Bonus:</a>
					   
					     <input type="checkbox" value="1" name="billable" id="" style="float:left;margin:10px 0 0 10px" onclick="checkbill()">
					   <a class="labels" style="margin-left:10px">Non-billable?</a>
								 	<a class="labels" style="margin-left:10px">Sale Price Setting:</a>
									<select class="select" id="saleset">
									<option value="3">Old Price</option>
									<option value="1">Average</option>
									<option value="2">Set New Price</option>
									
									</select>
									';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additempur()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcartpur()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycartpur()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:280px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>				</div>
									
									<div id="recentstude">
									<h5 style="margin-left:10px">Receive Goods</h5>';
							if(isset($_SESSION['pur'])){
							$max=count($_SESSION['pur']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pur'][$i][9]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
							}
							
							echo'<a class="labels" style="margin-left:5px">Total Items:</a>';
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Total Amount:</a>
							<input type="text" disabled="disabled" id="totprice" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
								
							<div class="cleaner_h5"></div>
					<h5 style="border-bottom:2px solid #0085b2"></h5>
					<div class="cleaner_h5"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitpur()\"/>";
								echo'</div>
									</div>';
						
										
							break;	
							
							case 27:
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$sprice=$_GET['sprice'];
							$total=$_GET['total'];
							$unit1=$_GET['unit1'];
							$part=$_GET['part'];
							$batch=$_GET['batch'];
							$sp=$_GET['sp'];
							$pp=$_GET['pp'];
							$total=$_GET['total'];
							$date=$_GET['date'];
							$sname=$_GET['sname'];
							$sid=$_GET['sid'];
							$bal=$_GET['bal'];
							$qpurch=$_GET['qpurch'];
							$invoice=$_GET['invoice'];
							$expiry=$_GET['expiry'];
							$saleset=$_GET['saleset'];
							$bonus=$_GET['bonus'];
							$qty=$_GET['qty'];
							$oprice=$_GET['oprice'];
							$marg=$_GET['marg'];
							$pack=$_GET['pack'];
							if(isset($_SESSION['pur'])){
							$max=count($_SESSION['pur']);
							$_SESSION['pur'][$max]=array($code,$name,$unit1,$part,$sprice,$pprice,$sp,$pp,$date,$total,$bal,$sname,$batch,$invoice,$expiry,$qpurch,$bonus,$saleset,$qty,$oprice,$marg,$sid,$pack);
							$max=count($_SESSION['pur']);
							}
							
							else{
							$_SESSION['pur']=array(array());
							$_SESSION['pur'][0]=array($code,$name,$unit1,$part,$sprice,$pprice,$sp,$pp,$date,$total,$bal,$sname,$batch,$invoice,$expiry,$qpurch,$bonus,$saleset,$qty,$oprice,$marg,$sid,$pack);
							$max=count($_SESSION['pur']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pur'][$i][9]);
							
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
							cartitemspur($max);
							
					break;	
					
					case 28:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['pur'])){
							$max=count($_SESSION['pur']);
							cartitemspur($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Purchase cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 29:
					
					
					if(isset($_SESSION['pur'])){
							unset($_SESSION['pur']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Purchase cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 30:
					$pid=$_GET['pid'];
					unset($_SESSION['pur'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['pur']=array_values($_SESSION['pur']);
					$max=count($_SESSION['pur']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pur'][$i][9]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemspur($max);
								
					break;
					
					case '30.1':
					end($_SESSION['pur']);
					$pid= key($_SESSION['pur']);
					unset($_SESSION['pur'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['pur']=array_values($_SESSION['pur']);
					$max=count($_SESSION['pur']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pur'][$i][9]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemspur($max);
								
					break;
					
					case 31:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Add Billable Service Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo"<script>$('#labitem').parent().find('input:first').width(150);</script>";	
echo"<script>$('#labsection').parent().find('input:first').width(150);</script>";	
			echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add Billable Service</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help37()\"/></div>";								
$result =mysqli_query($conn,"select * from items order by ItemCode desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$itemcode=1;
							}else $itemcode=stripslashes($row['ItemCode']) + 1;
							
	echo'<a class="labels" style="margin-left:5px">Item Code:</a>
				<input type="text" id="itcode1" class="input_field" disabled="disabled" style="width:50px; margin-left:10px;border-color:#f00;" value="'.$itemcode.'"/> 
						<a class="labels" style="margin-left:5px">Item Name:<span>*</span></a>
							  <input type="text" id="itname1" class="input_field"  style="width:200px; margin-left:10px;"/> 
							<a class="labels" style="margin-left:5px">Sale Price:<span>*</span></a>
							<input type="text" id="sprice1" class="input_field"  style="width:70px; margin-left:10px;"/>
						<div class="cleaner_h5"></div>	
						<a class="labels">Dept:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="combos" id="labitem" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories WHERE Type='SERVICE' order by ItemCat");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemCat'])."\">".stripslashes($row['ItemCat'])."</option>";
							}
							echo'</select>
							</div>

						<div style="display:none" id="labsec">
						<a class="labels">Section:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="combos" id="labsection" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>
							<option value="LABORATORY_MAIN">LABORATORY_MAIN</option>
							<option value="LAB_HISTOLOGY">LAB_HISTOLOGY</option>
							<option value="LAB_SEROLOGY">LAB_SEROLOGY</option>
							<option value="LAB_MCH">LAB_MCH</option>
							<option value="LAB_HEMATOLOGY">LAB_HEMATOLOGY</option>
							<option value="LAB_BACTERIOLOGY">LAB_BACTERIOLOGY</option>
							<option value="LAB_PARASITOLOGY">LAB_PARASITOLOGY</option>
							<option value="LAB_BIOCHEMISTRY">LAB_BIOCHEMISTRY</option>';
							
							echo'</select>
							</div>
							</div>
							';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addnewstock()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			<div style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit/Delete Billable Services</h5>
	<a class="labels" style="margin-left:0px">Item Name:<span>*</span></a>
<div class="ui_widget"  style="margin-left:0px;float:left;">
		<select id="item5">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from items where Type='SERVICE' order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$sprice=stripslashes($row['SalePrice']);
								$itcode=stripslashes($row['ItemCode']);
								$name = stripslashes($row['ItemName']);
								$itcat = stripslashes($row['Category']);
								$sec = stripslashes($row['SubCategory']);
					echo'<option value="'.$sprice.'θ'.$itcode.'θ'.$name.'θ'.$itcat.'θ'.$sec.'">'.stripslashes($row['ItemName']).'</option>';
							}
		echo'
	</select>
	</div>
								<a class="labels" style="margin-left:35px">Item Code:</a>
				<input type="text" id="itcode2" class="input_field" disabled="disabled" style="width:50px; margin-left:10px;border-color:#f00;" value=""/> 
						<a class="labels" style="margin-left:5px">Sale Price:<span>*</span></a>
							<input type="text" id="sprice2" class="input_field"  style="width:70px; margin-left:10px;"/>
						<div class="cleaner_h10"></div>	
						<a class="labels">Dept:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="select" id="labitem2" style="width:200px; margin-left:10px;" onchange="seleclab()">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories  WHERE Type='SERVICE' order by ItemCat");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemCat'])."\">".stripslashes($row['ItemCat'])."</option>";
							}
							echo'</select>
							</div>
							<a class="labels" style="margin-left:5px">New Name:</a>
							<input type="text" id="itname2" class="input_field"  style="width:250px; margin-left:10px;"/>';
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Edit Item\" onclick=\"editstock()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Item\" onclick=\"deleteitem(1)\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div>

				<div class="cleaner_h5"></div>	
					<div style="display:none" id="labsec2"><a class="labels">Section:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="select" id="labsection2" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>
							<option value="LABORATORY_MAIN">LABORATORY_MAIN</option>
							<option value="LAB_HISTOLOGY">LAB_HISTOLOGY</option>
							<option value="LAB_SEROLOGY">LAB_SEROLOGY</option>
							<option value="LAB_MCH">LAB_MCH</option>
							<option value="LAB_HEMATOLOGY">LAB_HEMATOLOGY</option>
							<option value="LAB_BACTERIOLOGY">LAB_BACTERIOLOGY</option>
							<option value="LAB_PARASITOLOGY">LAB_PARASITOLOGY</option>
							<option value="LAB_BIOCHEMISTRY">LAB_BIOCHEMISTRY</option>';
							
							echo'</select>
							</div></div>
				</div>
					
					<div style="height:129px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
					
					</div>			
							
										
									</div>
									
									<div id="recentstude">
										</div>
									</div>';
						break;	
					
				case 33:
				$branch=$_GET['param'];
					echo"<script>$('#itemxb').parent().find('input:first').focus().width(230);</script>";
									echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		
			
		if (evt.keyCode==113){ //f2
		   evt.preventDefault();
		     $("#quat").focus();
	   }
	   if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
         $("#itemname6").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
               viewtakestock(\''.$branch.'\'); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       	   addtakestock(); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
			submitstock(\''.$branch.'\'); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help38(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
        emptytakestock(); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		if (evt.keyCode==116){ //f5
		evt.preventDefault();
		purchasesumm();
      	}
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelaststock();
      	}
	
     	 
    }</script>';	
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Adjustment Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								
		
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:126px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Stock Adjustment-Dept: '.$branch.'</h5><div id="depbal" style="float:right; margin-right:10px"></div>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help38()\"/></div>";								
echo'<a class="labels">Item Name:</a>
							  <div class="ui-widget" style="margin-left:10px; float:left">
	<select id="itemxb" style="float:left">
		<option value="">Select one...</option>';
		$x=$branch;
		if($branch=='PROCUREMENT'){$x='Bal';}
		$result =mysqli_query($conn,"select * from items  WHERE Type='GOOD' and ".$_SESSION['rights']." order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
								$pack=stripslashes($row['Pack']);
								$itemc=stripslashes($row['ItemCode']);
								$bal = stripslashes($row[$x]);
								$name = stripslashes($row['ItemName']);
							$spr = stripslashes($row['PurchPrice']);
								
					echo'<option value="'.$pack.'θ'.$itemc.'θ'.$bal.'θ'.$name.'θ'.$spr.'">'.stripslashes($row['ItemName']).'</option>';
							}
	echo'</select>
	</div>
					<input type="text" id="spr" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="dep1" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$branch.'"/>
					<input type="text" id="dep2" class="input_field"  style="display:none;width:20px; margin-left:5px;" value=""/>
					<input type="text" id="itname7" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<a class="labels" style="margin-left:35px">Pack:</a>
					<input type="text" disabled="disabled" id="pack" class="input_field"  style="width:30px;border-color:#f00; margin-left:10px;float:left"/>
					<a class="labels"  style="margin-left:5px; font-weight:bold">Current Bal:</a>
					<a class="labels" style="margin-left:10px">Units:</a>
					<input type="text" disabled="disabled" id="bal1" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;float:left"/>
					<a class="labels" style="margin-left:5px">Parts:</a>	
					<input type="text" disabled="disabled" id="bal2" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;float:left"/>	
					<div class="cleaner_h5"></div>	
						<a class="labels" style="margin-left:5px; font-weight:bold">New Balance:</a>		
						<a class="labels" style="margin-left:30px">Units:</a>
							<input type="text" id="unit58" class="input_field"  style="width:70px; margin-left:10px;float:left"/>
							<a class="labels" style="margin-left:5px">Parts:</a>
							<input type="text" id="part58" class="input_field"  style="width:70px; margin-left:10px;float:left"/>';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addtakestock()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewtakestock('".$branch."')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptytakestock()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:340px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>						
							
										
									</div>
									
									<div id="recentstude">
									<h5 style="margin-left:10px">Analysis</h5>';
							if(isset($_SESSION['stock'])){
							$max=count($_SESSION['stock']);
							
							echo"<script>$('#totitems').val(".$max.")</script>";
							}
							
							echo'<a class="labels" style="margin-left:5px">Total Items:</a>';
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
						<div class="cleaner_h5"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitstock('".$branch."')\"/>";
								echo'</div>
									</div>';
						
										
							break;
							case '33.1':
					echo"<script>$('#branches').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Stock Adjustment';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
	
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="branches"  style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bname=stripslashes($row['Branchname']);
								
								echo'<option value="'.$bname.'">'.stripslashes($row['Branchname']).'</option>';
							}
		echo'
			</select>
		</div>
	<div class="cleaner_h5"></div>
			
				</div>';	
							break;
								
							case 34:
							
							$bal=$_GET['bal'];
							$dep1=$_GET['dep1'];
							$qty=$_GET['qty'];
							$code=$_GET['code'];
							$name=$_GET['name'];
							$unit=$_GET['unit1'];
							$part=$_GET['part'];
							$pack=$_GET['pack'];
							$spr=$_GET['spr'];
							
							if(isset($_SESSION['stock'])){
							$max=count($_SESSION['stock']);
							$a=0;
							for ($i = 0; $i < $max; $i++){
								if($code==$_SESSION['stock'][$i][0]){
									$a++;
								}
							}
								if($a==0){
								$_SESSION['stock'][$max]=array($code,$name,$unit,$part,$qty,$bal,$dep1,$pack,$spr);
								$max=count($_SESSION['stock']);
								}else{
								echo"
											<script>
											$().customAlert();
											alert('Sorry!', '<p>Item cannot be reentered. Remove the first entry if you want to make another entry.</p>');
											e.preventDefault();
											</script>";	
											echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
											cartitemstock($max);
											exit;
								}
							}
							
							else{
							$_SESSION['stock']=array(array());
							$_SESSION['stock'][0]=array($code,$name,$unit,$part,$qty,$bal,$dep1,$pack,$spr);
							$max=count($_SESSION['stock']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val(".$max.")</script>";
							cartitemstock($max);
							
					break;	
					
					case 35: 
					$pid=$_GET['pid'];
					unset($_SESSION['stock'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['stock']=array_values($_SESSION['stock']);
					$max=count($_SESSION['stock']);
					
							echo"<script>$('#totitems').val(".$max.")</script>";
					cartitemstock($max);
								
					break;
					
					case '35.1':
					end($_SESSION['stock']);
					$pid= key($_SESSION['stock']);
					unset($_SESSION['stock'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['stock']=array_values($_SESSION['stock']);
					$max=count($_SESSION['stock']);
					
							echo"<script>$('#totitems').val(".$max.")</script>";
					cartitemstock($max);
								
					break;
					
					case 36:
					$bra=$_GET['bra'];
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['stock'])){
							$max=count($_SESSION['stock']);
							cartitemstock($max);
							$a=1;
							echo"<script>window.open('report.php?id=50&rcptno=".$bra."&a=".$a."')</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Stock cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 37:
					
					
					if(isset($_SESSION['stock'])){
							unset($_SESSION['stock']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Stock cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					
							
							case 39:
							
							$code=$_GET['code'];
							$amount=$_GET['amount'];
							$date=$_GET['date'];
							$name=$_GET['name'];
							
							
							if(isset($_SESSION['expense'])){
							$max=count($_SESSION['expense']);
							$_SESSION['expense'][$max]=array($code,$name,$amount,$date);
							$max=count($_SESSION['expense']);
							}
							
							else{
							$_SESSION['expense']=array(array());
							$_SESSION['expense'][0]=array($code,$name,$amount,$date);
							$max=count($_SESSION['expense']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION['expense'][$i][2]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartexpense($max);
							
					break;	
					case 40:
					$pid=$_GET['pid'];
					unset($_SESSION['expense'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['expense']=array_values($_SESSION['expense']);
					$max=count($_SESSION['expense']);
					$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION['expense'][$i][2]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
					cartexpense($max);
								
					break;
					
					case 41:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['expense'])){
							$max=count($_SESSION['expense']);
							cartexpense($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Expense cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 42:
					
					
					if(isset($_SESSION['expense'])){
							unset($_SESSION['expense']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');$('#fintot').val('');</script>";
							
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Expense cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
							case 43:
						echo'
							<div id="newstude">
	<div id="results">						
	
			<div style="height:148px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Cash /Cheque Deposit</h5>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help51()\"/></div>";								
echo'<a class="labels" style="margin-left:0px">Account Name:</a>
							<select class="select" id="acname2" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from banktbl order by BankName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bal=stripslashes($row['Bal']);
								$acno=stripslashes($row['AccNo']);
								$acname=stripslashes($row['AccName']);
								echo"<option onclick=\"pickacc('".$acno."','".$bal."')\"  value=\"".stripslashes($row['AccName'])."\">".stripslashes($row['BankName']).",".stripslashes($row['AccName'])."</option>";
							}
							echo'</select>					
							<a class="labels" style="margin-left:20px">A/c No:</a>
							  <input type="text" id="acno2" disabled="disabled" class="input_field" style="width:150px; margin-left:10px;border-color:#f00"/> 
							  <a class="labels" style="margin-left:20px">A.c Bal:</a>
							  <input type="text" id="acbal2" disabled="disabled" class="input_field" style="width:110px; margin-left:10px; border-color:#f00""/>
							<div class="cleaner_h5"></div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Amount:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="amount2" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">BankSlip/Cheque No:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="bankslip2" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Deposited By:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="dep2" class="input_field"  style="width:150px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Other Info:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="info2" class="input_field"  style="width:200px; margin-left:10px;"/>
							</div>';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Deposit Amount\" onclick=\"deposit()\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
					
					<div style="height:147px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Cash Withdrawal</h5>
	<a class="labels" style="margin-left:0px">Account Name:</a>
							<select class="select" id="acname3" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from banktbl order by BankName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bal=stripslashes($row['Bal']);
								$acno=stripslashes($row['AccNo']);
								$acname=stripslashes($row['AccName']);
								echo"<option onclick=\"pickacc2('".$acno."','".$bal."')\"  value=\"".stripslashes($row['AccName'])."\">".stripslashes($row['BankName']).",".stripslashes($row['AccName'])."</option>";
							}
							echo'</select>					
							<a class="labels" style="margin-left:20px">A/c No:</a>
							  <input type="text" id="acno3" disabled="disabled" class="input_field" style="width:150px; margin-left:10px;border-color:#f00"/> 
							  <a class="labels" style="margin-left:20px">A.c Bal:</a>
							  <input type="text" id="acbal3" disabled="disabled" class="input_field" style="width:110px; margin-left:10px; border-color:#f00""/>
							<div class="cleaner_h5"></div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Amount:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="amount3" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">BankSlip No:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="bankslip3" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Withdrawn By:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="dep3" class="input_field"  style="width:150px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Other Info:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="info3" class="input_field"  style="width:200px; margin-left:10px;"/>
							</div>';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Withdraw Amount\" onclick=\"withdraw()\"/>";
				echo'<div id="res4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
					<div class="cleaner_h5"></div>	
				</div>			
			
			<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px"></div>		
										
									</div>
									
									<div id="recentstude">
										</div>
									</div>';
										
							break;	
							
							case 44:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Company Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				$result =mysqli_query($conn,"select * from company");
							$row=mysqli_fetch_array($result);	
							$lic=stripslashes($row['License']);	
						echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:566px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<div class="cleaner_h5"></div> 
	<h5 style="text-align:center">Edit Company Details</h5>
	<div class="cleaner_h5"></div> 
	<a class="labels" style="margin-left:5px">Company Name:</a>
	<input type="text" id="cname" class="input_field"  style="width:250px;float:right; margin-right:50px; border:1px solid #f00" disabled="disabled" value="'.stripslashes($row['CompanyName']).'"/> 
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Address:</a>
	<input type="text" id="add" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Address']).'"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Telephone:</a>
	<input type="text" id="tel" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Tel']).'"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Website:</a>
	<input type="text" id="web" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Website']).'"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Email:</a>
	<input type="text" id="email" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Email']).'"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">TagLine:</a>
	<input type="text" id="motto" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Motto']).'"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Location Description:</a>
	<input type="text" id="loc" class="input_field"  style="width:250px;float:right; margin-right:50px;" value="'.stripslashes($row['Description']).'"/>
	<div class="cleaner_h5"></div>';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"editcompany()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			
										
									</div>
									
									<div id="recentstude" style="width:415px">
									<div class="cleaner_h5"></div> 
							<h5 style="text-align:center">Change Company Logo</h5>';
							echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-30px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help18()\"/></div>";								
						echo'<div class="cleaner_h5"></div> 
	 						<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe" style="margin-right:50px">
      							 <dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" style="float:right"  src="images/clogo.jpg">
								</iframe>
                               <input type="hidden" id="stamp" name="stamp" value=""/>
								<input type="hidden" id="id" name="id"  value="8"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:150px; float:left; cursor:pointer; height:35px"class="in_field"/>
								</form>
										</div>
									</div>';				
										
							break;	
							
							
						case 45:
							 $usid=date('s').RAND(1,99);
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses User Manager Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:566px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<div class="cleaner_h5"></div> 
	<h5 style="text-align:center">Add New System User</h5>
	<div class="cleaner_h5"></div> ';
		$result =mysqli_query($conn,"select * from users order by userid desc limit 0,1");
							$row=mysqli_fetch_array($result);
							$name=stripslashes($row['name']);
							$a=substr($name,2,3);
							$a=$a+1;
							$b=sprintf("%03s",$a);
							echo"<script>$('.combos').parent().find('input:first').width(150);</script>";
							
	echo'
	<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
	<a class="labels" style="margin-left:5px">User Name:<span>*</span></a>
	<input type="text" id="name1" required="required" class="input_field"  style="width:20px;float:left; margin-left:10px;" value="" maxlength="2"/> 
	<input type="text"  id="name2" class="input_field"  style="width:30px;float:left; margin-left:2px; border-color:#f00" value="'.$b.'" maxlength="2" disabled="disabled"/> 
	
	<input type="checkbox" value="HOD" name="hod" id="" style="float:left;margin:8px 0 0 100px">
		<a class="labels" style="margin-left:5px">H.O.D</a>
	
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Full Names:<span>*</span></a>
	<input type="text" id="fname" class="input_field"  style="width:200px;float:left; margin-left:10px;" value=""/> 
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Password:</a>
	<input type="text" id="pass1" class="input_field"  style="width:200px;float:left; margin-left:23px;" value="password"/>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Dept Name:</a>
	<div class="ui-widget" style="margin-left:15px; float:left">
					<select class="combos" id="itemname" style="width:200px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
								<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Position:</a>
	  <div class="ui-widget" style="margin-left:30px; float:left">
	<select class="select" id="pos1" style="width:260px;float:left; ">
	<option value="">Select one...</option>
								<option value="Admin">Admin</option>
								<option value="Doctor">Doctor</option>
								<option value="MOI">Medical Officer Incharge</option>
								<option value="Pharm">Pharmacist</option>
								<option value="Cashier">Cashier</option>
								<option value="Lab">LabTech</option>
								<option value="User">User</option>
								<option value="Rad">Radiology</option>
								<option value="Recep">Reception</option>
								<option value="ExtMedic">External Medic</option>
								<option value="Accounts">Accounts</option>
								<option value="Store">Procurement</option>
								<option value="Emp">Employee Manager</option>
								<option value="Triage">Triage</option>
								<option value="Nurse">Nurse</option>
								<option value="Eye">Eye Clinic</option>
								<option value="Dental">Dental</option>
								<option value="Mch">MCH</option>
								<option value="Hdu">HDU</option>
								<option value="Dialysis">Dialysis</option>
								<option value="Paediatrics">Paediatrics</option>
								<option value="Ambulance">Ambulance</option>
								<option value="Physiotherapy">Physiotherapy</option>
								<option value="Emergencies">Emergencies</option>
								<option value="Theatre">Theatre</option>
								<option value="Cssd">CSSD</option>
								<option value="Records">Records</option>
								<option value="Matron">Matron</option>
								<option value="ChiefCashier">Chief Cashier</option>
								<option value="CreditController">Credit Controller</option>
								<option value="IT">IT</option>
								<option value="Accountant">Accountant</option>

								<option value="Social">Social</option>
								<option value="Nutrition">Nutrition</option>
								<option value="Vct">Vct</option>
								<option value="Mortuary">Mortuary</option>
								<option value="BioMedic">BioMedic</option>
								
								
						</select>
						</div>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Photo:</a>
	
      							
								<dd class="custuploadblock_js" style="float:right; margin-right:40px">
								<input style="opacity:0;" name="image" id="photoupload" 
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" src="" style="margin-right:40px">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$usid.'"/>
								<input type="hidden" id="id" name="id"  value="3"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:300px; float:left; cursor:pointer"class="in_field"/>
								</form>
	<div class="cleaner_h5"></div>';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"addnewuser(".$usid.")\"/>";
				echo'<div id="res1" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			
										
									</div>
									
								
									<div id="results">						
	<div id="block1" style="height:470px; width:415px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<div class="cleaner_h5"></div> 
	<h5 style="text-align:center">Edit System Users</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-27px 10px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help11()\"/></div>";								
	echo'
	<div class="cleaner_h5"></div> 
	<a class="labels" style="margin-left:5px">User Name:</a>
	<div class="ui-widget" style="margin-left:10px; float:left">
	<select class="select" id="acname3"  style="width:260px;float:left; margin-right:10px;">
		<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from users order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$dept=stripslashes($row['dept']);
								$name2=stripslashes($row['name']);
								$pos2=stripslashes($row['position']);
								$photo2=stripslashes($row['photo']);
								$hod2=stripslashes($row['hod']);
								echo'<option value="'.$dept.'θ'.$name2.'θ'.$pos2.'θ'.$photo2.'θ'.$hod2.'">'.stripslashes($row['name']).'-'.stripslashes($row['fullname']).'</option>';
							}
							echo'</select>	</div>
							<div class="cleaner_h5"></div>
<input type="hidden" id="stamper"/>
<a class="labels" style="margin-left:5px">Dept Name:</a>
	<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemnames" style="width:250px; margin-left:0px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Position:</a>
	<div class="ui-widget" style="margin-left:10px; float:left">
	<select class="select" id="pos2" style="width:260px;float:left; margin-left:20px;">
		<option value="">Select one...</option>
								<option value="Admin">Admin</option>
								<option value="Doctor">Doctor</option>
								<option value="MOI">Medical Officer Incharge</option>
								<option value="Pharm">Pharmacist</option>
								<option value="Cashier">Cashier</option>
								<option value="Lab">LabTech</option>
								<option value="User">User</option>
								<option value="Rad">Radiology</option>
								<option value="Recep">Reception</option>
								<option value="ExtMedic">External Medic</option>
								<option value="Accounts">Accounts</option>
								<option value="Store">Procurement</option>
								<option value="Emp">Employee Manager</option>
								<option value="Triage">Triage</option>
								<option value="Nurse">Nurse</option>
								<option value="Eye">Eye Clinic</option>
								<option value="Dental">Dental</option>
								<option value="Mch">MCH</option>
								<option value="Hdu">HDU</option>
								<option value="Dialysis">Dialysis</option>
								<option value="Paediatrics">Paediatrics</option>
								<option value="Ambulance">Ambulance</option>
								<option value="Physiotherapy">Physiotherapy</option>
								<option value="Emergencies">Emergencies</option>
								<option value="Theatre">Theatre</option>
								<option value="Cssd">CSSD</option>
								<option value="Records">Records</option>
								<option value="Matron">Matron</option>
								<option value="ChiefCashier">Chief Cashier</option>
								<option value="CreditController">Credit Controller</option>
								<option value="IT">IT</option>
								<option value="Accountant">Accountant</option>

								<option value="Social">Social</option>
								<option value="Nutrition">Nutrition</option>
								<option value="Vct">Vct</option>
								<option value="Mortuary">Mortuary</option>
								<option value="BioMedic">BioMedic</option>
								
						</select>
	</div>					
	<div class="cleaner_h5"></div>
<input type="checkbox" value="1" name="respas" id="" style="float:left;margin:10px 0 0 10px">
		<a class="labels" style="margin-left:10px">Reset Password</a>
			
	<input type="checkbox" value="HOD" name="hod2" id="" style="float:left;margin:8px 0 0 100px">
		<a class="labels" style="margin-left:5px">H.O.D</a>
	
		
<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:5px">Photo:</a>
	<div id="lei2"></div>
	<div class="cleaner_h5"></div>';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"edituser()\"/>";
				echo"<img src=\"images/empty.png\" width=\"50\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 20px; float:left\" title=\"Delete User\" onclick=\"deluser()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
				</div>
									
								
									</div>';
			
										
							break;	
							
							case 46:
							$usid=date('s').RAND(1,99);
							echo"<script>$('#scrollbar5').tinyscrollbar();</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set User Access Rights Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
											
							echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:987px;overflow-x:auto; background:#fff; margin:0 5px 5px 0;padding-left:10px;padding-right:10px; border-radius:0px">
	<h5 style="text-align:center">Set User Access Rights</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help12()\"/></div>";								
	echo'
	<div class="cleaner_h5"></div>
	<div id="title" style="float:left; width:1300px">
									<div id="figure1" style="margin-left:0px; width:80px">Access Code</div>
									<div id="figure1"  style="width:200px">Description</div>
									<div id="figure1" style="width:63px">Admin</div>
									<div id="figure1"  style="width:63px">Doctor</div>
									<div id="figure1"  style="width:53px">Cashier</div>
									<div id="figure1"  style="width:53px">User</div>
									<div id="figure1"  style="width:53px">Pharm</div>
									<div id="figure1"  style="width:53px">Lab</div>
									<div id="figure1" style="width:53px">Rad</div>
									<div id="figure1"  style="width:53px">Recep</div>
									<div id="figure1"  style="width:53px">ExtMedic</div>
									<div id="figure1"  style="width:53px">Accounts</div>
									<div id="figure1"  style="width:53px">Store</div>
									<div id="figure1"  style="width:53px">EmpMan</div>
									<div id="figure1"  style="width:53px">Triage</div>
									<div id="figure1"  style="width:53px">Nurse</div>
									<div id="figure1"  style="width:50px">Save</div>
									
									</div><div class="cleaner"></div>
	<div id="scrollbar5" style="width:1320px; height:370px; float:left">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:1300px; height:370px">
			 <div class="overview"> 
	<div id="inside" style="min-height:400px;">
									';
									$result =mysqli_query($conn,"select * from accesstbl");
									$num_results = mysqli_num_rows($result);
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['AccessCode']);
									echo'<div id="normal"  title="'.stripslashes($row['Descrip']).'">';
										echo"<div id=\"figure2t\" style=\"width:80px;overflow:hidden;height:16px;\">".$code."</div>
<div id=\"descrip".$code."\" class=\"figure2t\" style=\"width:205px\">".stripslashes($row['Descrip'])."</div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Admin".$code."\" style=\"width:50px;padding:0;\"><option value=\"".stripslashes($row['Admin'])."\" selected=\"selected\">".stripslashes($row['Admin'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Doctor".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Doctor'])."\" selected=\"selected\">".stripslashes($row['Doctor'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Cashier".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Cashier'])."\" selected=\"selected\">".stripslashes($row['Cashier'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"User".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['User'])."\" selected=\"selected\">".stripslashes($row['User'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px;\"><select class=\"select\" id=\"Pharm".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Pharm'])."\" selected=\"selected\">".stripslashes($row['Pharm'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Lab".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Lab'])."\" selected=\"selected\">".stripslashes($row['Lab'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Rad".$code."\" style=\"width:50px;padding:0;\"><option value=\"".stripslashes($row['Rad'])."\" selected=\"selected\">".stripslashes($row['Rad'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Recep".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Recep'])."\" selected=\"selected\">".stripslashes($row['Recep'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"ExtMedic".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['ExtMedic'])."\" selected=\"selected\">".stripslashes($row['ExtMedic'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Accounts".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Accounts'])."\" selected=\"selected\">".stripslashes($row['Accounts'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px;\"><select class=\"select\" id=\"Store".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Store'])."\" selected=\"selected\">".stripslashes($row['Store'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
									<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Emp".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Emp'])."\" selected=\"selected\">".stripslashes($row['Emp'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Triage".$code."\" style=\"width:50px;padding:0;\"><option value=\"".stripslashes($row['Triage'])."\" selected=\"selected\">".stripslashes($row['Triage'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
										<div id=\"figure2t\" style=\"width:55px; height:21px; padding-top:0px\"><select class=\"select\" id=\"Nurse".$code."\" style=\"width:50px;padding:0\"><option value=\"".stripslashes($row['Nurse'])."\" selected=\"selected\">".stripslashes($row['Nurse'])."</option><option value=\"YES\">YES</option><option value=\"NO\">NO</option></select></div>
												
				<div id=\"save".$code."\" class=\"figure2t\" onclick=\"saveaccess(".$code.")\" style=\" height:19px; padding-top:2px;width:56px; border-right:1px solid #333\"><img src=\"images/save.jpg\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div>
			
										
									</div></div>
					</div></div></div>		
								</div>';
							break;
							
							case 47:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Add Branches Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add a Branch</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help21()\"/></div>";								
	echo'<div class="cleaner_h5"></div>	
	<a class="labels" style="margin-left:5px">Branch Name:</a>
					<input type="text" id="bname1" class="input_field"  style="width:150px; margin-left:10px;"/> ';
			echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Branch\" onclick=\"addnewbr()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			<div style="height:148px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Delete Branches</h5>
	<div class="cleaner_h5"></div>	
	<a class="labels" style="margin-left:0px">Branch Name:</a>
							<select class="select" id="bname2" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bid=stripslashes($row['BranchId']);
								
						echo"<option value=\"".$bid."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>';
						
						if($num_results>0){	
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Branch\" onclick=\"delbranch(".$bid.")\"/>";
				
						}echo'<div id="res4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
					<div class="cleaner_h5"></div>	
				</div>	
				<div style="height:147px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	
				</div>			
							
										
									</div>
									
									<div id="recentstude">
										</div>
									</div>';
							break;

							case 47.5:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Add Branches Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add System Variable</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help21()\"/></div>";								
	echo'<div class="cleaner_h5"></div>	
		<a class="labels">Category:<span>*</span></a>
							<select class="select" id="cat1" style="float:left; margin-left:10px ">
									<option value="" selected="selected" disabled="disabled">Select one...</option>
								<option value="assetsubcategories">ASSET CATEGORIES</option>
						</select>
	<a class="labels" style="margin-left:15px"> Name:</a>
					<input type="text" id="name1" class="input_field"  style="width:250px; margin-left:10px;"/> ';
			echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Branch\" onclick=\"addnewvar()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			<div style="height:198px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit/Delete System Variables</h5>
	<div class="cleaner_h5"></div>	
	<a class="labels" style="margin-left:0px">Category:</a>
							<select class="select" id="cat2" style="float:left; margin-left:10px" onchange="changecatt()">
									<option value="" selected="selected" disabled="disabled">Select one...</option>
								<option value="12θassetsubcategories">ASSET CATEGORIES</option>
						</select>
					<div class="cleaner_h5"></div>	
						
							<div id="opt12" style="display:none">
		<a class="labels">Variable:<span>*</span></a>
		<select class="select" style="width:250px;float:left; margin-left:10px"  id="syscat12"  onchange="setvar(12)">
		<option value="" selected="selected" disabled="disabled"Select one...</option>';
		$result =mysqli_query($conn,"select * from assetsubcategories order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bid=stripslashes($row['id']);
								$name=strtoupper(stripslashes($row['name']));
								echo"<option value=\"".$bid."θ".$name."\">".$name."</option>";
							}
		echo'
			</select>
			<div class="cleaner_h5"></div>
						</div>
						
			
					<div class="cleaner_h5"></div>	
						<a class="labels">Name:<span>*</span></a>
                      	<input type="text" id="name2" class="input_field"  style="width:250px; margin-left:23px;"/>
							';
						
			
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Edit Item\" onclick=\"editvar()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Item\" onclick=\"delvar()\"/>";
				
						echo'<div id="res4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
					<div class="cleaner_h5"></div>	
				</div>	
				<div style="height:97px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	
				</div>			
							
										
									</div>
									
									<div id="recentstude">
										</div>
									</div>';
							
										
							break;	
							
							case 48:
							
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Account Details Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
						echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:566px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	';
							$result =mysqli_query($conn,"select * from users where userid='".$userid."'");
							$row=mysqli_fetch_array($result);
							$name=stripslashes($row['name']);
							$pos=stripslashes($row['position']);
							$photo=stripslashes($row['photo']);
							$userno=stripslashes($row['userno']);
							
							echo'<div class="cleaner_h5"></div>
							<h5 style="color:#0085b2; text-align:center">Edit Account Details</h5>';
							echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-20px 10px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help20()\"/></div>";								
	echo'<div class="cleaner_h5"></div>
								<div style="width:250px; min-height:300px; float:left">
								<h5 style="color:#0085b2; text-align:center">Change Password</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Old Pass:<span>*</span></a>
                                <input type="password" id="opass" name="name" class="input_field" value="" style="margin-left:6px"/>
								<div class="cleaner_h5"></div>
								<a class="labels">New Pass:<span>*</span></a>
                                <input type="password" id="npass" name="name" class="input_field" value=""/>
								<div class="cleaner_h5"></div>
								<a class="labels">Confirm:<span>*</span></a>
                                <input type="password" id="cpass" name="name" class="input_field" value="" style="margin-left:7px"/>
								<div class="cleaner_h5"></div>';
								echo"<input type=\"button\" value=\"Submit\" id=\"submit\" style=\"margin-left:100px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"postpass('".$userid."');\"/>";
							echo'<div id="aresp" style="float:left; height:40px; margin-left:20px"></div>';	
							echo'
								
								</div>
							<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe" style=" height:200px; float:right;">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload" 
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" src="'.$photo.'">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$userno.'"/>
								<input type="hidden" id="id" name="id"  value="4"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-right:20px; float:right; cursor:pointer"class="input_field"/>
								</form>
								<div class="cleaner_h20"></div>
			
										
									</div></div>
									
									<div id="recentstude" style="width:415px">
										</div>
									</div>';
							break;
							
							
							case 49:
							echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add an Expense</h5>
	<div class="cleaner_h5"></div>	
	<a class="labels" style="margin-left:5px">Expense Name:</a>
					<input type="text" id="bname1" class="input_field"  style="width:150px; margin-left:10px;"/> ';
			echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Branch\" onclick=\"addnewexp()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			<div style="height:148px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Delete Expenses</h5>
	<div class="cleaner_h5"></div>	
	<a class="labels" style="margin-left:0px">Expense Name:</a>
							<select class="select" id="bname2" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from expensetbl order by ExpenseName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bid=stripslashes($row['ExpenseId']);
								
						echo"<option value=\"".$bid."\">".stripslashes($row['ExpenseName'])."</option>";
							}
							echo'</select>';
						
							
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Branch\" onclick=\"delexpense(".$bid.")\"/>";
				echo'<div id="res4" style="float:left;width:40px; height:40px; margin-left:10px"></div>
					<div class="cleaner_h5"></div>	
				</div>	
				<div style="height:147px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	
				</div>			
				</div>
									
									<div id="recentstude">
										</div>
									</div>';
									break;	
							
							
							
							case 51:
							$nid=$_GET['nid'];
							echo'<div id="scrollbar1" style="width:400px; height:350px" onmouseenter="scroller();">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:380px; height:250px">
			 <div class="overview">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:158px">Account Name</div>
									<div id="figure1"  style="width:90px">Acq. Date</div>
									<div id="figure1" style="width:90px">Amount</div>
									
									</div>';
							$result =mysqli_query($conn,"select * from nominaldata where NominalAcc='".$nid."'");
							$num_results = mysqli_num_rows($result);
							
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:160px;overflow:hidden;height:16px;\">".stripslashes($row['AccName'])."</div>
										<div id=\"figure2t\" style=\"width:90px\">".stripslashes($row['AquisitionDate'])."</div>
										<div id=\"figure2t\" style=\"width:90px; border-right:1px solid #333\">".stripslashes($row['Amount'])."</div></div>";
										}
										echo'</div></div></div>';
									break;
								
						case 52:
							
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Request Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	echo"<script>$('#itemxb').parent().find('input:first').width(230);</script>";
		echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		
		
		if (evt.keyCode==113){ //f2
		   evt.preventDefault();
		    $("#quatt").focus();
	   }
	   if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
      	  $("#itemname1").parent().find("input:first").focus();		
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
         viewissue(); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       	  addissue(); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		openadmin2(1);
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help35(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
         emptyissue(); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastissue();
      	}
		
		
     	 
    }</script>';
				$dep1=$_GET['dep1'];
					$dep2=$_GET['dep2'];
									echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Stock Request from '.$dep1.' to '.$dep2.'</h5><div id="depbal" style="float:right; margin-right:10px"></div>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help35()\"/></div>";								
echo'<a class="labels">Item Name:</a>
							  <div class="ui-widget" style="margin-left:10px; float:left">
	<select id="itemxb" style="float:left">
		<option value="">Select one...</option>';
		if($dep2=='PROCUREMENT'){
			$x='Bal';
		}else $x=$dep2;
		if($dep1=='PROCUREMENT'){
			$y='Bal';
		}else $y=$dep1;
		$result =mysqli_query($conn,"select * from items  WHERE Type='GOOD' and ".$_SESSION['rights']." order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
								$pack=stripslashes($row['Pack']);
								$itemc=stripslashes($row['ItemCode']);
								$bal = stripslashes($row[$x]);
								$bal2 = stripslashes($row[$y]);
								$name = stripslashes($row['ItemName']);
								$spr = stripslashes($row['PurchPrice']);
								
					echo'<option value="'.$pack.'θ'.$itemc.'θ'.$bal.'θ'.$name.'θ'.$spr.'">'.stripslashes($row['ItemName']).'-Bal:'.$bal2.'</option>';
							}
	echo'</select>
	</div>
					<input type="text" id="spr" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="dep1" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$dep1.'"/>
					<input type="text" id="dep2" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$dep2.'"/>
					<input type="text" id="itname7" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
				
					<a class="labels" style="margin-left:25px">Pack:</a>	
					<input type="text" disabled="disabled" id="pack" class="input_field"  style="width:30px;border-color:#f00; margin-left:10px;float:left"/>	
					
					<a class="labels"  style="margin-left:5px; font-weight:bold">Current Bal:</a>
					<a class="labels" style="margin-left:5px">Units:</a>
					<input type="text" disabled="disabled" id="bal1" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;float:left"/>
					<a class="labels" style="margin-left:5px">Parts:</a>	
					<input type="text" disabled="disabled" id="bal2" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;float:left"/>	
					<div class="cleaner_h5"></div>	
						<a class="labels" style="margin-left:5px; font-weight:bold">Requesting:</a>		
						<a class="labels" style="margin-left:30px">Units:</a>
							<input type="text" id="unit57" class="input_field"  style="width:70px; margin-left:10px;float:left"/>
							<a class="labels" style="margin-left:5px">Parts:</a>
							<input type="text" id="part57" class="input_field"  style="width:70px; margin-left:10px;float:left"/>';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addissue()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewissue()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptyissue()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:300px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>						
							
										
									</div>';
									
							
							echo'									
									<div id="recentstude">
							<h5 style="margin-left:10px">Request Goods</h5>';
							if(isset($_SESSION['issue'])){
							$max=count($_SESSION['issue']);
							echo"<script>$('#totitems').val(".$max.")</script>";
							}
							
							echo'<a class="labels" style="margin-left:5px">Total Items:</a>';
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;" value=""/>
							<div class="cleaner_h5"></div>
							<h5 style="border-bottom:2px solid #0085b2"></h5>
						<div class="cleaner_h5"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"openadmin2(1)\"/>";
								echo'</div>
									</div>';
							
							break;		
							
							case 53:
							
							$dep1=$_GET['dep1'];
							$dep2=$_GET['dep2'];
							$qty=$_GET['qty'];
							$part=$_GET['part'];
							$unit1=$_GET['unit1'];
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pack=$_GET['pack'];
							$tot=$_GET['tot'];
							if(isset($_SESSION['issue'])){
							$max=count($_SESSION['issue']);
							$_SESSION['issue'][$max]=array($code,$name,$qty,$unit1,$part,$pack,$dep1,$dep2,$tot);
							$max=count($_SESSION['issue']);
							}
							
							else{
							$_SESSION['issue']=array(array());
							$_SESSION['issue'][0]=array($code,$name,$qty,$unit1,$part,$pack,$dep1,$dep2,$tot);
							$max=count($_SESSION['issue']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							
							echo"<script>$('#totitems').val(".$max.")</script>";
							cartissue($max);
							
					break;	
					
					case 54:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['issue'])){
							$max=count($_SESSION['issue']);
							cartissue($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Request cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 55:
					
					
					if(isset($_SESSION['issue'])){
							unset($_SESSION['issue']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Request cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 56:
					$pid=$_GET['pid'];
					unset($_SESSION['issue'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['issue']=array_values($_SESSION['issue']);
					$max=count($_SESSION['issue']);
					echo"<script>$('#totitems').val(".$max.")</script>";
					cartissue($max);
								
					break;
					case '56.1':
					end($_SESSION['issue']);
					$pid= key($_SESSION['issue']);
					unset($_SESSION['issue'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['issue']=array_values($_SESSION['issue']);
					$max=count($_SESSION['issue']);
					echo"<script>$('#totitems').val(".$max.")</script>";
					cartissue($max);
								
					break;
					
					
					case 57:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Debtors Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:76px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add New Debtor</h5>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help50()\"/></div>";								
echo'<a class="labels" style="margin-left:5px">Name:<span>*</span></a>
					<input type="text" id="cname1" class="input_field"  style="width:190px; margin-left:10px;"/> 
						<a class="labels" style="margin-left:5px">Telephone:<span>*</span></a>
					<input type="text" id="tel1" class="input_field"  style="width:100px; margin-left:10px;"/> 
					<a class="labels" style="margin-left:5px">Credit Limit:<span>*</span></a>
				<input type="text" id="clim1" class="input_field"  style="width:100px; margin-left:10px;"/> ';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Account\" onclick=\"addnewcus()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			
	<div style="height:135px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit Debtor Detail</h5>
	<a class="labels" style="margin-left:0px">Cust. Name:</a>
							<select class="select" id="cn2" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$cid=stripslashes($row['CustomerId']);
								$tel=stripslashes($row['Tel']);
								$cname=stripslashes($row['CustomerName']);
								$post=stripslashes($row['BoxNo']);
								$email=stripslashes($row['Email']);
								$clim=stripslashes($row['CreditLimit']);
								$rcred=stripslashes($row['RemainingCredit']);
								echo"<option onclick=\"pickcredcust('".$cid."','".$cname."','".$clim."','".$rcred."','".$tel."','".$post."','".$email."','".$rcred."')\"  value=\"".stripslashes($row['CustomerName'])."\">".stripslashes($row['CustomerName'])."</option>";
							}
							echo'</select>					
							<a class="labels" style="margin-left:20px">Cust ID:</a>
							  <input type="text" id="cid2" disabled="disabled" class="input_field" style="width:80px; margin-left:10px;border-color:#f00"/> 
							  <a class="labels" style="margin-left:20px">Name:</a>
							  <input type="text" id="cname2" class="input_field" style="width:200px; margin-left:10px;"/>
							<div class="cleaner"></div>
						<div style="float:left">
						<a class="labels" style="margin-left:5px">Telephone:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="tel2" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>
							<div style="float:left">
						<a class="labels" style="margin-left:5px">Limit:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="lim2" class="input_field"  style="width:100px; margin-left:10px;"/>
							</div>';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Edit Detail\" onclick=\"savecredcust()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Delete Customer\" onclick=\"delcreditcus()\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
					
					<div style="height:250px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	
				</div>			
							
										
									</div>
									
									<div id="recentstude">
							<h5 style="margin-left:10px">Account Statement</h5>
							<a class="labels" style="margin-left:5px">Customer Name:</a>
							<select class="select" id="cn3" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$cid=stripslashes($row['CustomerId']);
								$bal=stripslashes($row['Bal']);
								echo"<option onclick=\"pickcredcust3('".$cid."')\"  value=\"".stripslashes($row['CustomerName'])."\">".stripslashes($row['CustomerName'])."</option>";
							}
							echo'</select>	
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Customer ID:</a>
							<div class="cleaner_h5"></div><input type="text" disabled="disabled" id="cid4" class="input_field"  style="float:left;width:190px; margin-left:10px;border-color:#f00" value=""/>
							<div class="cleaner_h5"></div>
								<a class="labels" style="margin-left:5px">From:</a>
							<div class="cleaner_h5"></div><input type="text" id="datepick" class="input_field"  style="float:left;width:190px; margin-left:10px;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">To:</a>
							<div class="cleaner_h5"></div><input type="text" id="datepick2" class="input_field"  style="float:left;width:190px; margin-left:10px;" value=""/>
							<div class="cleaner_h5"></div>
							<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="viewall" value="1"/>
							<a class="labels" style="float:left;margin-left:5px">View All:</a>
							<div class="cleaner_h20"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"viewstatement()\"/>";
										echo'</div>
									</div>';
							break;	
					
					case 58:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Creditors Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:76px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add New Creditor</h5>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help50()\"/></div>";								
echo'<a class="labels" style="margin-left:5px">Name:</a>
					<input type="text" id="cname1" class="input_field"  style="width:190px; margin-left:10px;"/> 
						<a class="labels" style="margin-left:5px">Telephone:</a>
					<input type="text" id="tel1" class="input_field"  style="width:100px; margin-left:10px;"/> 
				<input type="text" id="clim1" class="input_field"  style="width:100px; margin-left:10px;display:none;"/> ';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Account\" onclick=\"addnewsup()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			
	<div style="height:135px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit Creditor Detail</h5>
	<a class="labels" style="margin-left:0px">Name:</a>
							<select class="select" id="cn2" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$cid=stripslashes($row['CustomerId']);
								$tel=stripslashes($row['Tel']);
								$cname=stripslashes($row['CustomerName']);
								$post=stripslashes($row['BoxNo']);
								$email=stripslashes($row['Email']);
								$clim=stripslashes($row['CreditLimit']);
								$rcred=stripslashes($row['RemainingCredit']);
								echo"<option onclick=\"pickcredcust('".$cid."','".$cname."','".$clim."','".$rcred."','".$tel."','".$post."','".$email."','".$rcred."')\"  value=\"".stripslashes($row['CustomerName'])."\">".stripslashes($row['CustomerName'])."</option>";
							}
							echo'</select>					
							<a class="labels" style="margin-left:20px">Creditor ID:</a>
							  <input type="text" id="cid2" disabled="disabled" class="input_field" style="width:50px; margin-left:10px;border-color:#f00"/> 
							  <a class="labels" style="margin-left:20px">Name:</a>
							  <input type="text" id="cname2" class="input_field" style="width:200px; margin-left:10px;"/>
							<div class="cleaner"></div>
						<div style="float:left">
						<a class="labels" style="margin-left:5px">Telephone:</a>
						<div class="cleaner_h5"></div>
							<input type="text" id="tel2" class="input_field"  style="width:100px; margin-left:10px;"/>
						</div>
						<input type="text" id="lim2" class="input_field"  style="width:100px; margin-left:10px;display:none"/>
							';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Edit Detail\" onclick=\"savecredsup()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:25px 0 0 10px; float:left\" title=\"Delete Customer\" onclick=\"delcreditsup()\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
					
					<div style="height:250px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	
				</div>			
							
										
									</div>
									
									<div id="recentstude">
							<h5 style="margin-left:10px">Account Statement</h5>
							<a class="labels" style="margin-left:5px">Customer Name:</a>
							<select class="select" id="cn3" style="width:200px; margin-left:10px;">';
							$result =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$cid=stripslashes($row['CustomerId']);
								$bal=stripslashes($row['Bal']);
								echo"<option onclick=\"pickcredcust3('".$cid."')\"  value=\"".stripslashes($row['CustomerName'])."\">".stripslashes($row['CustomerName'])."</option>";
							}
							echo'</select>	
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">Customer ID:</a>
							<div class="cleaner_h5"></div><input type="text" disabled="disabled" id="cid4" class="input_field"  style="float:left;width:190px; margin-left:10px;border-color:#f00" value=""/>
							<div class="cleaner_h5"></div>
								<a class="labels" style="margin-left:5px">From:</a>
							<div class="cleaner_h5"></div><input type="text" id="datepick" class="input_field"  style="float:left;width:190px; margin-left:10px;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">To:</a>
							<div class="cleaner_h5"></div><input type="text" id="datepick2" class="input_field"  style="float:left;width:190px; margin-left:10px;" value=""/>
							<div class="cleaner_h5"></div>
							<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="viewall" value="1"/>
							<a class="labels" style="float:left;margin-left:5px">View All:</a>
							<div class="cleaner_h20"></div>';
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"viewstatement2()\"/>";
										echo'</div>
									</div>';
									break;	
							
							case 59:
							$result =mysqli_query($conn,"select * from employee order by serial desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$emp=1;
								}else $emp=stripslashes($row['emp']) + 1;
			$result = mysqli_query($conn,"insert into log values('0','".$username." accesses New Employee Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		echo"<script>$('#empbank').parent().find('input:first').width(130).prop('disabled',false);</script>";
							echo'<div id="newstude">
								<h2>New Employee Information</h2>';
								echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-32px 5px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help29()\"/></div>";								
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Emp. No:<span>*</span></a>
                                <input type="text" id="emp" name="emp" class="in_field" value="'.$emp.'"  style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name" name="field" class="in_field"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" name="field" class="in_field"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">DOB:</a>
                               <input id="dob" name="dob" class="in_field" tabindex="1" placeholder="" type="text">
							
								<div class="cleaner_h5"></div>
								<a class="labels" style="margin-right:30px">Gender:<span>*</span></a>
                                <input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								 <input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.
								<div class="cleaner_h5"></div> 
								<a class="labels">Phone No:<span>*</span></a>
								 <input type="text" id="phone" name="phone" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:<span>*</span></a>
                                <input type="text" id="address" name="address" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Dept:<span>*</span></a>
                                <select class="select" id="dept" name="dept" style="float:right">
								<option value="Accounting">Accounting</option>
								<option value="Medical">Medical</option>
								<option value="Kitchen">Kitchen</option>
								<option value="Pharmacy">Pharmacy</option>
								<option value="Cash">Cash</option>
								<option value="Nursing">Nursing</option>
								<option value="Cleaning">Cleaning</option>
								<option value="Others">Others</option>
								<option value="Administration">Administration</option>
								<option value="Customer Care">Customer Care</option>
								</select> 
								<div class="cleaner_h5"></div>
								<a class="labels">Position:<span>*</span></a>
                                <input type="text" id="pos" name="pos" class="in_field"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
							
								<div id="personal">
								<h5>Salary Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Basic Sal:<span>*</span></a>
                                <input type="text" id="sal" name="sal" class="in_field" placeholder="0.00"/>
								<div class="cleaner_h5"></div>
								<a class="labels">Bank:</a>
                               <div class="ui-widget" style="margin-right:25px; float:right;" >
								<select id="empbank" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
								$resultb =mysqli_query($conn,"select * from banktbl order by bank");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['bank']).'">'.stripslashes($rowb['bank']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								<a class="labels">A/c No:</a>
                                <input type="text" id="acno" name="" class="in_field"/>
								<div class="cleaner_h5"></div>
								</div>
								
								<div id="personal">
								<h5>Medical Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right">
								<option value="None">None</option>
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
								<a class="labels">Known Health Problems/Allergies:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy"></textarea>
								<div class="cleaner_h5"></div>
									
								</div>
								<div id="personal">
								</form>
								<h5>Upload Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
							
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$emp.'"/>
								<input type="hidden" id="id" name="id"  value="5"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h40"></div>
								<input type="button" value="Save" id="submit"  
								style="margin-left:50px; float:left; cursor:pointer;width:50px"
								 class="in_field" onClick="addnewemp();"/>
								<input type="button" value="Exit" id="exit" style="margin-right:40px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>
								<div class="cleaner_h20"></div>
								<div id="newemployee" style="float:right; margin-right:20px;height:20px; "></div>
								</div>
								</div>';
								break;
							
							case 60:
						
						$a=$_GET['a'];
							
							echo"<script>$('#stude4').parent().find('input:first').focus();</script>";	
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Select an Employee:';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help30()\"/></div>";								
echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5></div>
				<div class="cleaner_h5"></div>
						<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
						<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="stude4" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).'</option>';
							}
		echo'
	</select>
	</div>
				</div>';
				
							
							break;
							case 61:
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Employee Panel.Employee No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$param=$_GET['param'];		
							$result =mysqli_query($conn,"select * from employee where emp='".$param."'");		
							$row=mysqli_fetch_array($result);
							$emp=stripslashes($row['emp']);
							$resulta =mysqli_query($conn,"select * from salary where emp='".$emp."' order by serial desc");
							$rowa=mysqli_fetch_array($resulta);
		echo"<script>$('#empbank').parent().find('input:first').width(130).prop('disabled',false);</script>";
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin-bottom:10px">Edit Employee</h2>';
								echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:-3px 10px 0 10px; cursor:pointer\" onclick=\"window.open('empreport.php?id=1&reg=".$emp."')\">";
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Emp No:<span>*</span></a>
                                <input type="text" id="emp" name="emp" class="in_field"  
								value="'.stripslashes($row['emp']).'" disabled="disabled"  style="border-color:#f00"  /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name" name="name" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" name="oname" class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">D.O.B:</a>
                               <input id="dob" name="dob" class="in_field" tabindex="1" value="'.stripslashes($row['dob']).'" type="text">
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($row['gender'])=='male'){
									 echo'<input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="phone" name="phone" class="in_field" value="'.stripslashes($row['phone']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="address" name="address" class="in_field" value="'.stripslashes($row['address']).'" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Dept:</a>
                                <select class="select" id="dept" name="dept"  style="float:right">
							<option value="'.stripslashes($row['dept']).'" selected="selected">'.stripslashes($row['dept']).'</option>
							<option value="Accounting">Accounting</option>
								<option value="Medical">Medical</option>
								<option value="Kitchen">Kitchen</option>
								<option value="Pharmacy">Pharmacy</option>
								<option value="Cash">Cash</option>
								<option value="Nursing">Nursing</option>
								<option value="Cleaning">Cleaning</option>
								<option value="Others">Others</option>
								<option value="Administration">Administration</option>
<option value="Customer Care">Customer Care</option>
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Position:</a>
                                <input type="text" id="pos" name="pos" class="in_field" value="'.stripslashes($row['pos']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Bank:</a>
                               <div class="ui-widget" style="margin-right:25px; float:right;" >
								<select id="empbank" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>
								<option value="'.stripslashes($row['bid']).'θ'.stripslashes($row['bname']).'" selected="selected">'.stripslashes($row['bname']).'</option>';
								$resultb =mysqli_query($conn,"select * from banktbl order by bank");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['bank']).'">'.stripslashes($rowb['bank']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								<a class="labels">A/c No:</a>
                                <input type="text" id="acno" name="" class="in_field" value="'.stripslashes($row['acno']).'"/>
								<div class="cleaner_h5"></div>
								
								</div>
								</form>
								<div id="personal">
							
								<h5>Photo</h5>';
								$stamp =date('dHis').RAND(1,100);
								echo'<div class="cleaner_h5"></div>
								
							
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      							
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload" 
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" src="'.stripslashes($row['image']).'">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value="'.$stamp.'"/>
								<input type="hidden" id="id" name="id"  value="6"/>
								<input type="hidden" id="regno" name="regno"  value="'.stripslashes($row['emp']).'"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								<div class="cleaner_h20"></div>
								
								<h5>Medical Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right">
								<option value="'.stripslashes($row['bgroup']).'" selected="selected">'.stripslashes($row['bgroup']).'</option>
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
								<a class="labels">Known Health Problems/Allergies:</a>
								<div class="cleaner_h5"></div>
								<textarea id="alergy" class="alergy">'.stripslashes($row['alergy']).'</textarea>
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">
								<h5>Salary Details (Last Month)</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Basic Sal:<span>*</span></a>
                                <input type="text" id="sal" disabled="disabled" style="border-color:#f00" name="sal" class="in_field"  value="'.stripslashes($rowa['sal']).'"/>
								<div class="cleaner_h5"></div>
								<a class="labels">Allow:</a>
                                <input type="text" id="allow" disabled="disabled"  style="border-color:#f00" name="allow" class="in_field"  value="'.stripslashes($rowa['allow']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Advances:</a>
                                <input type="text" id="adva" disabled="disabled"  style="border-color:#f00" name="adva" class="in_field"  value="'.stripslashes($rowa['adva']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Insurance:</a>
                                <input type="text" id="ins"  disabled="disabled" style="border-color:#f00" name="ins" class="in_field"  value="'.stripslashes($rowa['ins']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Oth. Deds:</a>
                                <input type="text" id="ded"  disabled="disabled"  style="border-color:#f00"name="ded" class="in_field"  value="'.stripslashes($rowa['ded']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">NHIF:</a>
                                <input type="text" id="nhif" disabled="disabled"   style="border-color:#f00"name="othrs" class="in_field"  value="'.stripslashes($rowa['nhif']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">NSSF:</a>
                                <input type="text" id="nssf"  disabled="disabled"  style="border-color:#f00"name="rateot" class="in_field"  value="'.stripslashes($rowa['nssf']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Tax:</a>
                                <input type="text" id="tax"  disabled="disabled"  style="border-color:#f00"name="net" class="in_field"  value="'.stripslashes($rowa['tax']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">OT hrs:</a>
                                <input type="text" id="othrs" disabled="disabled"   style="border-color:#f00"name="othrs" class="in_field"  value="'.stripslashes($rowa['othrs']).'"/> 
								</div>
								
								<div id="personal">
								<h5>Save Panel</h5>
								<div class="cleaner_h20"></div>
								<a class="labels">Rate(OT):</a>
                                <input type="text" id="rateot"  disabled="disabled"  style="border-color:#f00"name="rateot" class="in_field"  value="'.stripslashes($rowa['rateot']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Net Pay:</a>
                                <input type="text" id="net"  disabled="disabled"  style="border-color:#f00"name="net" class="in_field"  value="'.stripslashes($rowa['net']).'"/> 
								<div class="cleaner_h5"></div>';
								
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:20px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"editemp('".$emp."');\"/>";
								 
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	<div class="cleaner_h20"></div>
								 <div id="newemp" style="float:right; margin-right:20px;height:20px; "></div>
								</div>
								
								</div>
							
							</div>';
							break;
							
							case 62:
							$param=$_GET['param'];
						echo"<script>$('#emp1').parent().find('input:first').focus();</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Employee Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude">';
								
							echo'	<h5 style="margin-left:10px">Employee Search Panel</h5>';
							echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help32()\"/></div>";								
echo' <div class="ui-widget" style="margin:10px; float:left">
	<select id="emp1">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1  order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).','.stripslashes($rowa['oname']).'</option>';
							}
	echo'</select>
	</div>

	<div id="cate" style="float:right">
				<h5 style="margin-right:10px">Browse by Category</h5>
				<select class="select" id="categ" name="categ" onchange="categemp();"">
								<option value="Accounting">Accounting</option>
								<option value="Medical">Medical</option>
								<option value="Kitchen">Kitchen</option>
								<option value="Teaching">Teaching</option>
								<option value="Cleaning">Cleaning</option>
								<option value="Others">Others</option>
								<option value="Administration">Administration</option>
<option value="Customer Care">Customer Care</option>
					</select>
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
							echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:566px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
						echo'<h5 style="text-align:center; float:left">Employee Attendance Manager</h5>';
												echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:3px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help34()\"/></div>";								
echo'<div class="cleaner"></div>';
										
									 	$per_page = 10;
                    					$result =mysqli_query($conn,"select * from employee where status=1");
                    					$count = mysqli_num_rows($result);
										$row=mysqli_fetch_array($result);
                    					$pages = ceil($count/$per_page);
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					
											echo "<script>paginate(7,0);</script>";
												
									
							echo'</div></div>
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:416px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
						
							
							echo'</div></div></div>';
						
								break;
								
								case 74:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." removes employee record.Employee No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$emp=$_GET['param'];
							$result =mysqli_query("select * from employee where emp='".$emp."'");		
							$resulta = mysqli_query("update employee set status=0 where emp='".$emp."'");
							$resultb = mysqli_query("update salary set status=0 where emp='".$emp."'");
							if($resulta&&$resultb){
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
							echo"<script>window.open('empreport.php?id=1&reg=' + '".$emp."');</script>";
							
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
                    					$result =mysqli_query("select * from employee where status=0");
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
							
					case 78:
					$a=$_GET['a'];
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

	
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersales('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
					break;
					case '78.1':
					$a=$_GET['a'];
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Financial Statements Panel Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

	
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:240px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">';
				if($a==25){echo'Trial Balance';}
				if($a==26){echo'Income Statement';}
				if($a==27){echo'Balance Sheet';}
				echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">	
				<div class="cleaner_h5"></div>			
				<div class="cleaner" style="border-bottom:1px dashed #333; margin-bottom:10px"></div>
				<a class="labels" style="margin-left:10px; float:left">As At</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick3" type="text">				
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterfin('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case 79:
					$a=$_GET['a'];
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Cashier User Id:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					
					<select class="select" id="itemname" style="width:280px; margin-left:10px;">
					<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from users  order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'-'.stripslashes($row['fullname']).'</option>';
							}
						echo'</select>
						</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case '79.1':
					$a=$_GET['a'];
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Cashier Summary Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Cashier Summary Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Cashier User Id:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					
					<select class="select" id="itemname" style="width:280px; margin-left:10px;">
					<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from users where position='Recep' or dept='ACCOUNTS' order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'-'.stripslashes($row['fullname']).'</option>';
							}
						echo'</select>
						</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left;width:80px; margin-left:10px" id="datepick" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<select class="select" id="timer1" style="float:left; margin-left:10px;width:80px">
					<option value="12:00am">12:00am</option>
						<option value="12:30am">12:30am</option>
						<option value="01:00am">1:00am</option>
						<option value="01:30am">1:30am</option>
						<option value="02:00am">2:00am</option>
						<option value="02:30am">2:30am</option>
						<option value="03:00am">3:00am</option>
						<option value="03:30am">3:30am</option>
						<option value="04:00am">4:00am</option>
						<option value="04:30am">4:30am</option>
						<option value="05:00am">5:00am</option>
						<option value="05:30am">5:30am</option>
						<option value="06:00am">6:00am</option>
						<option value="06:30am">6:30am</option>
						<option value="07:00am">7:00am</option>
						<option value="07:30am">7:30am</option>
						<option value="08:00am">8:00am</option>
						<option value="08:30am">8:30am</option>
						<option value="09:00am">9:00am</option>
						<option value="09:30am">9:30am</option>
						<option value="10:00am">10:00am</option>
						<option value="10:30am">10:30am</option>
						<option value="11:00am">11:00am</option>
						<option value="11:30am">11:30am</option>
						<option value="12:00pm">12:00pm</option>
						<option value="12:30pm">12:30pm</option>
						<option value="01:00pm">1:00pm</option>
						<option value="01:30pm">1:30pm</option>
						<option value="02:00pm">2:00pm</option>
						<option value="02:30pm">2:30pm</option>
						<option value="03:00pm">3:00pm</option>
						<option value="03:30pm">3:30pm</option>
						<option value="04:00pm">4:00pm</option>
						<option value="04:30pm">4:30pm</option>
						<option value="05:00pm">5:00pm</option>
						<option value="05:30pm">5:30pm</option>
						<option value="06:00pm">6:00pm</option>
						<option value="06:30pm">6:30pm</option>
						<option value="07:00pm">7:00pm</option>
						<option value="07:30pm">7:30pm</option>
						<option value="08:00pm">8:00pm</option>
						<option value="08:30pm">8:30pm</option>
						<option value="09:00pm">9:00pm</option>
						<option value="09:30pm">9:30pm</option>
						<option value="10:00pm">10:00pm</option>
						<option value="10:30pm">10:30pm</option>
						<option value="11:00pm">11:00pm</option>
						<option value="11:30pm">11:30pm</option>
						
						
					</select>
				
				<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left;width:80px; margin-left:25px" id="datepick2" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<select class="select" id="timer2" style="float:left; margin-left:10px;width:80px">
					<option value="12:00am">12:00am</option>
						<option value="12:30am">12:30am</option>
						<option value="01:00am">1:00am</option>
						<option value="01:30am">1:30am</option>
						<option value="02:00am">2:00am</option>
						<option value="02:30am">2:30am</option>
						<option value="03:00am">3:00am</option>
						<option value="03:30am">3:30am</option>
						<option value="04:00am">4:00am</option>
						<option value="04:30am">4:30am</option>
						<option value="05:00am">5:00am</option>
						<option value="05:30am">5:30am</option>
						<option value="06:00am">6:00am</option>
						<option value="06:30am">6:30am</option>
						<option value="07:00am">7:00am</option>
						<option value="07:30am">7:30am</option>
						<option value="08:00am">8:00am</option>
						<option value="08:30am">8:30am</option>
						<option value="09:00am">9:00am</option>
						<option value="09:30am">9:30am</option>
						<option value="10:00am">10:00am</option>
						<option value="10:30am">10:30am</option>
						<option value="11:00am">11:00am</option>
						<option value="11:30am">11:30am</option>
						<option value="12:00pm">12:00pm</option>
						<option value="12:30pm">12:30pm</option>
						<option value="01:00pm">1:00pm</option>
						<option value="01:30pm">1:30pm</option>
						<option value="02:00pm">2:00pm</option>
						<option value="02:30pm">2:30pm</option>
						<option value="03:00pm">3:00pm</option>
						<option value="03:30pm">3:30pm</option>
						<option value="04:00pm">4:00pm</option>
						<option value="04:30pm">4:30pm</option>
						<option value="05:00pm">5:00pm</option>
						<option value="05:30pm">5:30pm</option>
						<option value="06:00pm">6:00pm</option>
						<option value="06:30pm">6:30pm</option>
						<option value="07:00pm">7:00pm</option>
						<option value="07:30pm">7:30pm</option>
						<option value="08:00pm">8:00pm</option>
						<option value="08:30pm">8:30pm</option>
						<option value="09:00pm">9:00pm</option>
						<option value="09:30pm">9:30pm</option>
						<option value="10:00pm">10:00pm</option>
						<option value="10:30pm">10:30pm</option>
						<option value="11:00pm">11:00pm</option>
						<option value="11:30pm">11:30pm</option>
						
						
					</select>
				
				<div class="cleaner_h5"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalescashier('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

					case '79.2':
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Financial Statements Panel Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:90px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">managerial Daily Summary
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px; float:left">From</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">				
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:10px; float:left">To</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterdailysumm();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;
					case 80:
					$a=$_GET['a'];
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Item:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemCode'])."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
						case 81:
					$a=$_GET['a'];
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from maindepts order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

case '81.1':
					$a=$_GET['a'];
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report-By Patient
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Patient:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])."-".stripslashes($row['pntno'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

case '81.2':
					$a=$_GET['a'];
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Income Report-By Doctor
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Doctor:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from extmedics order by id");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['id'])."\">".stripslashes($row['name'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entersalesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
						
							
							case 83:
				
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Bank Statement Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Bank Statement
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Bank Account:</a>
					<div class="cleaner_h5"></div>
						<div class="ui-widget" style="margin-left:10px; float:left">
				<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from banktbl");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['AccNo']).'">'.stripslashes($row['BankName']).','.stripslashes($row['AccName']).'</option>';
							}
						echo'</select>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterbank();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							
							case 84:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Price List Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:170px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Price List
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories order by ItemCat");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
						echo'</select>
						<div class="cleaner_h5"></div>
					<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterprice('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 85:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Received Report-All
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterpurch('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 86:
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:250px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Received Report-By Item
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Item Name:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemCode'])."\">".stripslashes($row['ItemName'])."</option>";
							}
							echo'</select>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterpurchase('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
						
							break;
							case 87:
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:250px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Received-By Supplier
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Supplier Name:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterpurchase('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
						
							break;
							case '86.1':
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:120px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Balance Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Below:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="below" type="text">
				<div class="cleaner_h5"></div>
				
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstockbal();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
						
				case 88:
				
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Transfer Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Transfer Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterissue('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
						case '88.1':
				
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Expiry Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Expiry Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterexpiry();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;	
							case 89:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Transfer Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Transfer Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Dept Name(From):</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Dept Name(To):</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname2" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterissue2('.$a.');"/>
					<div class="cleaner_h10"></div>
						
						</div>';
							break;
							
							
							case '89.1':
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock usage Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Usage Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Branch Name:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['BranchId'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstockuse();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case '89.2':
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Transfer Summary Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Transfer Summary
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Dept Name(From):</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Dept Name(To):</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname2" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterissue3('.$a.');"/>
					<div class="cleaner_h10"></div>
						
						</div>';
							break;
							

							
							case 92:
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Variance  Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Variance  Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstockvar();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case '92.1':
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Variance Summary Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Variance Summary Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['Branchname'])."\">".stripslashes($row['Branchname'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstockvar2();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case '92.2':
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses LPO Summary Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">LPO Summary Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Supplier:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerName']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterlposumm();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 93:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Triage Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$patid=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".stripslashes($rowa['PatId'])."'");
							$row=mysqli_fetch_array($result);
							
							echo"<div id=\"newstude\">
						
								<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">TRIAGE-".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])." [".stripslashes($row['pntno'])."]</h2>";
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help6()\"/></div>";								
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/chem.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Prescription\"  onclick=\"window.open('report.php?id=36&rcptno=".$pid."')\"/></div>";		
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$patid."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
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
								
								
								<div id="personal">
								<h5>Triage Analysis</h5>
								<a class="labels">Temp:<span>*</span></a>
                                <input type="text" id="temp" name="oname"  class="in_field" value="'.stripslashes($rowa['Temp']).'"  style="width:30px; float:left; margin-left:50px"/> 
								<div style="float:left; margin-top:2px"><a class="labels" style="font-size:5px; margin-top:0px;font-weight:bold; margin-left:5px">0</a></div><div style="float:left; margin=left:3px"><a style="font-size:11px;font-weight:bold;"  class="labels">C</a></div>
 								<div class="cleaner_h5"></div>
								<a class="labels">B.P:<span>*</span></a>
                                <div style="width:40px; float:left;margin-left:65px; padding:1px " class="in_field">
								<div style="float:left; border-bottom:1px solid #333; width:35px"><input type="text" id="bp1" name="oname" value="'.stripslashes($rowa['Bp1']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px; margin-top:0px;margin-bottom:2px;text-align:center"/> </div>
								<div class="cleaner"></div>
								<div style="float:left"><input type="text" id="bp2" name="oname" value="'.stripslashes($rowa['Bp2']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px;  margin-top:2px;text-align:center"/>  </div>
								</div>
								
								<a class="labels" style="font-weight:bold; margin-left:5px; margin-top:20px">mmHg</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Weight:<span>*</span></a>
                                <input type="text" id="weight" name="oname" class="in_field" value="'.stripslashes($rowa['Weight']).'"  style="width:30px; float:left; margin-left:44px"/> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Kgs</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Resp. Rate:</a>
                                <input type="text" id="resprate" name="oname" class="in_field" value="'.stripslashes($rowa['RespRate']).'"  style="width:30px; float:left; margin-left:30px" /> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Breaths/Min</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Pulse Rate:<span>*</span></a>
                                <input type="text" id="pulserate" name="oname" class="in_field" value="'.stripslashes($rowa['PulseRate']).'"  style="width:30px; float:left; margin-left:25px" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">Beats/Min</a>
								<div class="cleaner_h5"></div>
								<a class="labels">R.B.S:</a>
                                <input type="text" id="rbs" name="oname" class="in_field" value="'.stripslashes($rowa['Rbs']).'"  style="width:30px; float:left; margin-left:62px" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">mMoles/Ltr</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Send To:<span>*</span></a>
                                <select  class="select" id="sendto" style="margin-left:10px">
                              	<option value="GENERAL CONSULTATIONS">General Consultations</option>
								<option value="PHYSIOTHERAPY">Physiotherapy</option>
								<option value="EYE CLINIC">Eye Clinic</option>
								<option value="MCH">MCH</option>
								<option value="NUTRITION">Nutrition</option>
								<option value="DENTAL CLINIC">Dental Clinic</option>
								<option value="PAEDIATRICS">Paediatrics</option>
								<option value="COUNSELLING">Counselling</option>
								</select>
								</div>
								<div id="personal" style="width:491px">
								<h5>Other Details</h5>
								<a class="labels">Known Problems/Allergies:</a>
								<div class="cleaner"></div>
								<script>
								area14=new nicEditor({fullPanel : true,maxHeight : 100}).panelInstance("allergies");
								</script>
								<textarea id="allergies" style="float:left;width:480px;height:100px;" class="alergy">'.stripslashes($rowa['Allergies']).'</textarea>
								<div class="cleaner"></div>
								<a class="labels">Additional Details:</a>
								<div class="cleaner"></div>
								<script>area15 = new nicEditor({fullPanel : true,maxHeight : 85}).panelInstance("odetail");</script>
								<textarea id="odetail" style="float:left;width:480px;height:85px" class="alergy">'.stripslashes($rowa['OtherDetails']).'</textarea>
								<div class="cleaner_h5"></div>';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"savetriage('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:left; width:30px; margin-left:10px;height:30px;"></div>
								</div>
							
   							';
					break;
					
					case 94:
					//Clinic Patient Selection Interface
					$stamp=date('Ymd');
					$a=$_GET['a'];
					echo"<script>$('#cons1').parent().find('input:first').focus();</script>";
					echo'<div id="modalDiv2"></div>';
					echo'<div id="mon" style="min-height:110px;max-height:320px;  width:320px;">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
					echo"<h5 style=\"margin-right:10px; color:#fff\">".$a.":";
					echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
					echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
					</h5></div>';
					$result =mysqli_query($conn,"select * from newprescription where Dept='".$a."' and Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId asc");
					$num_results = mysqli_num_rows($result);
					echo'<div class="cleaner_h5"></div>
					<input class="input_field" style="display:none" id="idpay" type="text" value="95">
					<a class="labels" style="margin-left:10px">From:</a>
					<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
					<a class="labels" style="margin-left:10px">To:</a>
					<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">	';			
					echo"<img src=\"images/back2.png\" style=\"float:left; margin-left:10px;width:30px;height:30px; cursor:pointer\" title=\"Search Consultations using these dates\" onclick=\"searchpay(1,'".$a."');\"/>";
					echo'<div class="cleaner"></div>
					<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
					<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
					<div class="cleaner_h5"></div>
					<select id="cons1">
					<option value="">Select one...</option>';
					for ($i=0; $i <$num_results; $i++) {
						$row=mysqli_fetch_array($result);
						$pid=stripslashes($row['PrescId']);
						echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'</option>';
					}
					echo'</select></div>';
					echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
					echo'<div class="cleaner"></div>
					<div id="title" style="margin-left:10px">
					<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
					<div id="figure1" style="width:69px">Pat. No</div>
					</div><div class="cleaner"></div>
					<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
					$resultb =mysqli_query($conn,"select * from newprescription where Dept='".$a."' and Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId desc");
					$num_resultsb = mysqli_num_rows($resultb);
					for ($i=0; $i <$num_resultsb; $i++) {
						$rowb=mysqli_fetch_array($resultb);
						$pid=stripslashes($rowb['PrescId']);
						if(stripslashes($rowb['Status'])==2){
							echo"<div class=\"normal1\" style=\"\" onclick=\"seepat('".$pid."',95)\">";
						}else {
							echo"<div class=\"normal2\" style=\"\" onclick=\"seepat('".$pid."',95)\">";
						}
						echo'<div id="figure2" style="width:200px">'.stripslashes($rowb['PatName']).'</div>
						<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
						</div><div class="cleaner"></div>';
					}
					echo'</div><div class="cleaner_h5"></div></div></div>';
							
					break;
							
					case 95:
						//Consultations panel		
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Consultations Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
						$pid=$_GET['pid'];
						$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
						$rowa=mysqli_fetch_array($resulta);
						$pntno=$patid=stripslashes($rowa['PatId']);
						$dept=stripslashes($rowa['Dept']);
						$dcare=stripslashes($rowa['DayCare']);
						$result =mysqli_query($conn,"select * from patients where pntno='".stripslashes($rowa['PatId'])."'");
						$row=mysqli_fetch_array($result);
						$patname=stripslashes($row['fullnames']);
						$paytype=stripslashes($row['paytype']);
						$smartstatus=stripslashes($row['smartstatus']);
						$benamount=stripslashes($row['benamount']);


						echo'<div id="newstude">';
						echo"<script>
							document.onkeydown = keydown;
							function keydown(evt){
								if (!evt) evt = event;
								if (evt.keyCode==123){ //f12
									savenewpresc('".$pid."'); 
								}
							}
							</script>";
						echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">".$dept."-".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])." [".stripslashes($row['pntno'])."] </h2>";
								
						echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$patid."')\" title=\"Print Patient Report\">";
						echo'<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
						<input type="button" value="Help" id="submit"  style="padding:2px 5px; border-color:#fff; background:#ff3; float:left; cursor:pointer;width:50px" class="in_field" onclick="help53();"/></div>
						<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
						<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
						<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
						<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">';
						echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"savenewpresc('".$pid."')\"/></div>";
						echo"<script>$('#currentins').parent().find('input:first').width(130).prop('disabled',true);</script>
						<script>
							
						$('#currentins').css({'border' : 'solid #f00 1px'});
						$('#symptoms').parent().find('input:first').width(530);
						$('#diagt').parent().find('input:first').width(330);
						$('#surgt').parent().find('input:first').width(530);
						$('#treat').parent().find('input:first').width(530);
						$('#presct').parent().find('input:first').width(430);
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
						
						area3 = new nicEditor({fullPanel : true,maxHeight :320}).panelInstance("history");
						area8 = new nicEditor({fullPanel : true,maxHeight :320}).panelInstance("diagnosis");
						area9 = new nicEditor({fullPanel : true,maxHeight :300}).panelInstance("treatment");
						area10 = new nicEditor({fullPanel : true,maxHeight :220}).panelInstance("prescription");
						area14 = new nicEditor({fullPanel : true,maxHeight :350}).panelInstance("phyexam");
						});
						</script>
						<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
						<div id="tabs" style="width:996px; height:433px">
						<ul>
							<li><a href="#tabs-1">Demographics</a></li>
							<li><a href="#tabs-2">Triage Analysis</a></li>
							<li><a href="#tabs-12">Past History</a></li>
							<li><a href="#tabs-3">Current History</a></li>
							<li><a href="#tabs-8">Physical Examination</a></li>
							<li><a href="#tabs-7">Diagnosis</a></li>
							<li><a href="#tabs-9">Theatre</a></li>
							<li><a href="#tabs-10">Pharmacy</a></li>
							<li><a href="#tabs-5">Laboratory</a></li>
							<li><a href="#tabs-6">Radiology</a></li>
							<li><a href="#tabs-11">Other Details</a></li>
							
						</ul>';
	if($dcare==1){
		$xxx=0;
							
							}else {$xxx=1;}
	echo'<div id="tabs-1">
	<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal" style="border-right:1px solid #ccc; height:365px; margin-left:0px">
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
								
							
								<div id="personal" style="border-right:1px solid #ccc;  height:365px; margin-left:0px">
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
									$resultb =mysqli_query($conn,"select * from inscompanies order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
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
							
								<div id="personal" style="border-right:1px solid #ccc;  height:365px; margin-left:0px">
								<h5>Guardian Details</h5>
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
								<option value="Son">Son</option>
								<option value="Daughter">Daughter</option>
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
								<div id="personal" style="border:0;height:365px; margin-left:0px; width:172px">
								<h5>Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
								<iframe name="leiframe" id="leiframe" class="leiframe" src="'.stripslashes($row['image']).'" style="float:left;margin-left:20px" onerror="if(this.src!='.stripslashes($row['image']).') this.src="images/clogo.png"">
								</iframe>
                            	
								</div>
								</div>
								<div id="tabs-2">
								<div id="personal" style="border-right:1px solid #ccc; height:365px; margin-left:0px; width:300px">
								<h5>Triage Analysis</h5>
								<a class="labels">Temp:</a>
                                <input type="text" id="temp" name="oname"  class="in_field" value="'.stripslashes($rowa['Temp']).'"  style="width:30px; float:left; margin-left:46px;border-color:#f00" disabled="disabled"/> 
								<div style="float:left; margin-top:2px"><a class="labels" style="font-size:5px; margin-top:0px;font-weight:bold; margin-left:5px">0</a></div><div style="float:left; margin=left:3px"><a style="font-size:11px;font-weight:bold;"  class="labels">C</a></div>
 								<div class="cleaner_h5"></div>
								<a class="labels">B.P:</a>
                                <div style="width:40px; float:left;margin-left:62px; padding:1px ;border-color:#f00" class="in_field">
								<div style="float:left; border-bottom:1px solid #333; width:35px"><input type="text" id="bp1" name="oname" value="'.stripslashes($rowa['Bp1']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px; margin-top:0px;margin-bottom:2px;text-align:center;border-color:#f00" disabled="disabled"> </div>
								<div class="cleaner"></div>
								<div style="float:left"><input type="text" id="bp2" name="oname" value="'.stripslashes($rowa['Bp2']).'"  style="width:25px; float:left;background:none;font-size:11px; margin-left:5px;  margin-top:2px;text-align:center;border-color:#f00" disabled="disabled"/>  </div>
								</div>
								
								<a class="labels" style="font-weight:bold; margin-left:5px; margin-top:20px">mmHg</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Weight:</a>
                                <input type="text" id="weight" name="oname" class="in_field" value="'.stripslashes($rowa['Weight']).'"  style="width:30px; float:left; margin-left:42px;border-color:#f00" disabled="disabled"/> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Kgs</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Resp. Rate:</a>
                                <input type="text" id="resprate" name="oname" class="in_field" value="'.stripslashes($rowa['RespRate']).'"  style="width:30px; float:left; margin-left:23px;border-color:#f00" disabled="disabled" /> 
								<a class="labels" style="font-weight:bold; margin-left:5px">Breaths/Min</a>
								<div class="cleaner_h5"></div>
								<a class="labels">Pulse Rate:</a>
                                <input type="text" id="pulserate" name="oname" class="in_field" value="'.stripslashes($rowa['PulseRate']).'"  style="width:30px; float:left; margin-left:25px;border-color:#f00" disabled="disabled" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">Beats/Min</a>
							<div class="cleaner_h5"></div>
								<a class="labels">R.B.S:</a>
                                <input type="text" id="rbs" name="oname" class="in_field" value="'.stripslashes($rowa['Rbs']).'"  style="width:30px; float:left; margin-left:54px;border-color:#f00" disabled="disabled" /> 
							<a class="labels" style="font-weight:bold; margin-left:5px">mMoles/Ltr</a>
								</div>
								<div id="personal" style="border-right:1px solid #ccc; height:365px; margin-left:0px; width:300px">
								<h5>Health Problems/Allergies</h5>
								<textarea id="allergies" style="float:right;height:315px; width:280px;border:0" disabled="disabled" class="alergy">'.stripslashes($rowa['Allergies']).'</textarea>
								</div>
								<div id="personal" style="border:0; height:365px; margin-left:0px; width:300px">
								<h5>Other Details</h5>
								<textarea id="hodetails" style="float:right;height:315px; width:280px;border:0" disabled="disabled" class="alergy">'.stripslashes($rowa['OtherDetails']).'</textarea>
								</div>
							
	
	</div>
	<div id="tabs-3">
	<a class="labels">Type Symptom name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg1" >
								<select id="symptoms" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from symptoms order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<textarea id="history" style="float:right;height:310px; width:950px" class="alergy">'.stripslashes($rowa['History']).'</textarea>
	<textarea id="complaint" style="float:right;height:310px; width:950px; display:none" class="alergy"></textarea>
	
	</div>
	
	<div id="tabs-5">';
	

if(isset($_SESSION['lab'])){
							unset($_SESSION['lab']);
						}
	 echo" <script>$('#labt').parent().find('input:first').width(250);</script>";
	echo'<div style="float:left; padding-right:10px; border-right:0">
					<h5>MAKE A LAB REQUEST</h5>
					<input type="checkbox" value="1" name="labrec" id="labrec" style="float:left;margin:8px 0 0 10px">
					<a class="labels" style="margin-left:10px">Send Request to Lab on Save</a>
					 <div class="cleaner"></div>
					



<a class="labels" style="margin-left:10px">Lab Test:</a>
<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where Category='Laboratory' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ = stripslashes($row['Category']);
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select>
		<input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		</div>
							<input type="text" id="quat44" class="input_field"  style="width:40px; margin-left:10px;display:none" value="1"/>
							<input type="text" id="price44" class="input_field"  style="width:70px; margin-left:10px;display:none"/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
						';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill2('lab',0)\"/>";
				echo'<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;display:none"/>';
				echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;display:none"/>
				<input type="hidden" id="regn" value="'.$patid.'"/><input type="hidden" id="oname" value="'.$patname.'"/>';
				echo'<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;display:none""/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px;display:none">
			<select id="income44">';
				$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$id=stripslashes($row['id']);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$id."\">".$name."</option>";
						}
			echo"<script>$('#income44').parent().find('input:first').width(100);</script>";
		echo'</select></div>
<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right;display:none""/>';
				echo'
	<div id="itemsdisp" style="height:270px; width:366px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="">LAB TESTS</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>	
</div>
	

		<div style="float:left; padding-left:10px">
		<h5>Lab Results</h5>';
		//<input type="checkbox" value="1" name="printlab" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Lab Analysis on Save</a>
		 echo'<div class="cleaner_h5"></div>
		 <div style="height:340px; overflow-y:auto; border:1px solid #ccc;width:520px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else if(stripslashes($rowb['status'])==2){$x='<b style="color:#F00"> - [COMPLETED]</b>';}
															else if(stripslashes($rowb['status'])==3){$x='<b style="color:#F00"> - [IN PROCESS]</b>';}
															else{$x='<b style="color:#0085b2"> - [SAMPLE REJECTED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Lab Request</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['request']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Lab Results</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['results']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div></div>
	</div>
	<div id="tabs-6">';
		if(isset($_SESSION['rad'])){
							unset($_SESSION['rad']);
						}
	 echo" <script>$('#labt').parent().find('input:first').width(250);</script>";
	echo'<div style="float:left; padding-right:10px; border-right:0px solid #333">
					<h5>MAKE A RADIOLOGY REQUEST</h5>
					<input type="checkbox" value="1" name="radrec" id="radrec" style="float:left;margin:8px 0 0 10px">
					<a class="labels" style="margin-left:10px">Send to Radiology on Save</a>
					 <div class="cleaner"></div>
					



<a class="labels" style="margin-left:10px">Rad Test:</a>
<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item45">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where Category='Radiology' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ = stripslashes($row['Category']);
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select>
		<input type="text" id="bal45" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type45" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		</div>
							<input type="text" id="quat45" class="input_field"  style="width:40px; margin-left:10px;display:none" value="1"/>
							<input type="text" id="price45" class="input_field"  style="width:70px; margin-left:10px;display:none"/>
							<input type="text" id="red45" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ45" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code45" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
						';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill3('rad',0)\"/>";
				echo'<input type="text" disabled="disabled" id="tprice45" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;display:none"/>';
				echo '<input type="text" id="disc45"  class="input_field"  value="0" style="width:60px; margin-left:10px;display:none"/>
				<input type="hidden" id="regn" value="'.$patid.'"/><input type="hidden" id="oname" value="'.$patname.'"/>';
				echo'<input type="text" disabled="disabled" id="sub45" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;display:none""/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px;display:none">
			<select id="income45">';
				$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$id=stripslashes($row['id']);
								$name=stripslashes($row['name']);
								echo"<option value=\"".$id."\">".$name."</option>";
						}
			echo"<script>$('#income45').parent().find('input:first').width(100);</script>";
		echo'</select></div>
<input type="text" disabled="disabled" id="total45" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right;display:none""/>';
				echo'
	<div id="itemsdisp" style="height:270px; width:366px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="">RADIOLOGY TESTS</h5>
	<div id="display45" style="margin-top:0px; height:250px;">
	
	</div>
	</div>	
</div>
	
		<div style="float:left; padding-left:10px">
		<h5>Radiology Results</h5>';
		//<input type="checkbox" value="1" name="printrad" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Radiology Analysis on Save</a>
		echo'
		<div style="height:190px; overflow-y:auto; border:1px solid #ccc;width:500px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from radrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else{$x='<b style="color:#0085b2"> - [COMPLETED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Radiology Request</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['request']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Radiology Results</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['results']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div>
			  <div class="cleaner_h5"></div>
			  <h5>Scan Images</h5>
			  <div id="wrap" style="width:490px; height:100px; background:#fff; border:1px solid #ccc; BORDER-RADIUS:0PX; padding:10px; padding-right:5px; overflow:auto;">';
		$result2 =mysqli_query($conn,"select * from raddocuments where PrescId='".$pid."' order by Stamp desc");
		$num_results2 = mysqli_num_rows($result2);
		for ($i=0; $i <$num_results2; $i++) {
		$row2=mysqli_fetch_array($result2);
			if(stripslashes($row2['Type'])=='Image'){
		echo"<a class=\"fancybox\" href=\"". stripslashes($row2['Link'])."\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"". stripslashes($row2['Link'])."\" style=\"max-height:100px;margin-right:5px; max-width:100px;\" /></a>";

		 } 
		if(stripslashes($row2['Type'])=='Document'){
		echo"<a class=\"fancybox\" href=\"images/adobe.png\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"images/adobe.png\" style=\"max-height:100px;margin-right:5px; max-width:100px;\" /></a>";
 } 
		}
			
			echo'</div>
		</div>
	</div>

	<div id="tabs-12" style="">

		<div class="cleaner_h5"></div>
		 <div style="height:360px; overflow-y:auto; border:0px solid #ccc;width:100%;padding:2px">';


		 	 $result =mysqli_query($conn,"select * from newprescription where PatId='".$pntno."' and PrescId!='".$pid."'");
			$num_results = mysqli_num_rows($result);
			if($num_results>0){
			
             echo'<h5 style="text-align:center;">OutPatient Medical Records ['.$num_results.']</h1>
           		<div style="clear:both; margin-bottom:10px"></div>
         
					<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
					<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Date</p>
					</div>
					<div style="width:30%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">History</p>
					</div>
					<div style="width:30%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Diagnosis</p>
					</div>
					<div style="width:29%; height:20px;float:left;">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Prescription</p>
					</div>
					</div>

			<table id="datatable"  style="width:100%;text-align:center;font-size:11px; font-weight:bold;padding:0; " >
			<tbody>';

					for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
					$opid=stripslashes($row['PrescId']);
					if($i%2==0){
					echo"<tr title=\"Click to Open\" style=\"width:100%; height:20px;color:#333;cursor:pointer;font-weight:normal;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4&rcptno=".stripslashes($row['PrescId'])."')\">";
					}
					else{
					echo"<tr title=\"Click to Open\" style=\"width:100%; height:20px;color:#333;cursor:pointer;font-weight:normal;background:#f0f0f0;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4&rcptno=".stripslashes($row['PrescId'])."')\">";
					}
					echo'<td  style="width:10%;border-width:0.5px; border-color:#666; border-style:solid;">'.dateprint(stripslashes($row['TransDate'])).'</td>
				    <td  style="width:30%;border-width:0.5px; border-color:#666; border-style:solid;">'.stripslashes($row['History']).'</td>
				    <td  style="width:30%;border-width:0.5px; border-color:#666; border-style:solid;">'.stripslashes($row['Diagnosis']).'</td>
				     <td  style="width:29%;border-width:0.5px; border-color:#666; border-style:solid;">';
				     	$resultb =mysqli_query($conn,"select * from pharmrequests where prescid='".$opid."' order by id");
																	$num_resultsb = mysqli_num_rows($resultb);	
																	for ($x=0; $x <$num_resultsb; $x++) {
																		$rowb=mysqli_fetch_array($resultb);
																		
							
							echo stripslashes($rowb['prescription']).'<br/>';

								}
				     	
				     echo'</td>
				     </tr>';
						} 

echo'</tbody></table><div style="clear:both; margin-bottom:10px"></div>';
   				}

   				$result =mysqli_query($conn,"select * from inpatients where PatId='".$pntno."'");
			$num_results = mysqli_num_rows($result);
			if($num_results>0){
			
             echo'<h5 style="text-align:center;">Inpatient Medical Records ['.$num_results.']</h1>
           		<div style="clear:both; margin-bottom:10px"></div>
         
					<div style="width:100%; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
					<div style="width:10%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Date</p>
					</div>
					<div style="width:20%; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Doctor in Charge</p>
					</div>
					
					<div style="width:69%; height:20px;float:left;">
					<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Admission Notes</p>
					</div>
					</div>

			<table id="datatable"  style="width:100%;text-align:center;font-size:11px; font-weight:bold;padding:0; " >
			<tbody>';

					for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
					$pid=stripslashes($row['PrescId']);
					if($i%2==0){
					echo"<tr title=\"Click to Open\" style=\"width:100%; height:20px;color:#333;cursor:pointer;font-weight:normal;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4.1&rcptno=".stripslashes($row['PrescId'])."')\">";
					}
					else{
					echo"<tr title=\"Click to Open\" style=\"width:100%; height:20px;color:#333;cursor:pointer;font-weight:normal;background:#f0f0f0;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4.1&rcptno=".stripslashes($row['PrescId'])."')\">";
						
					}
					echo'<td  style="width:10%;border-width:0.5px; border-color:#666; border-style:solid;">'.dateprint(stripslashes($row['TransDate'])).'</td>
				    <td  style="width:20%;border-width:0.5px; border-color:#666; border-style:solid;">'.stripslashes($row['Doctor']).'</td>
				 	 <td  style="width:69%;border-width:0.5px; border-color:#666; border-style:solid;">'.stripslashes($row['AdmNotes']).'</td>
				     </tr>';
						} 

echo'</tbody></table><div style="clear:both; margin-bottom:10px"></div>';
   				}

		 echo'</div>


				</div>

	<div id="tabs-7">
		<input type="hidden" value="'.stripslashes($rowa['Icd10']).'" id="icd10"/><div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:20px">Type Diagnosis name and press enter (ICD10 Format):</a>

	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg4" >
								<select id="diagt" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from icd10 order by name asc limit 0,100");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['code']).'#'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
			<div style="width:520px;float:left">
			<textarea id="diagnosis" style="float:left;height:290px; width:500px" class="alergy">'.stripslashes($rowa['Diagnosis']).'</textarea>
				</div>
				<div style="width:370px; border:1px solid #ccc; height:310px; float:left; margin-left:20px">
					<a class="labels" style="margin-left:20px;font-weight:bold">Diseases Summary (G.O.K Format):</a>';
					if(isset($_SESSION['dis'])){
							unset($_SESSION['dis']);
						}
					$_SESSION['diseases']=array();

	echo'<div class="cleaner_h5"></div>
	<div class="ui-widget"  style="float:left; margin-left:25px">
	<select id="disease" class="combos">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from diseases order by name");
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
					<div id="diseases" style="width:100%;">';
		$parts=explode(';',stripslashes($rowa['DiagName']));
		foreach ($parts as $key => $val) {
		$_SESSION['dis'][$key]=$val;
			if($val!=''){
			echo'<div class="tag alert-info alert-dismissable" id="lantag'.$key.'"><button type="button" class="close" onclick="dismissdis(\''.$key.'\')"  aria-hidden="true">&times;</button>'.$val.'</div>';
			}
	}


					echo'</div>';

				echo'</div>
	</div>
	<div id="tabs-8">
	<textarea id="phyexam"  style="float:right;height:330px; width:950px" class="alergy">'.stripslashes($rowa['PhyExam']).'</textarea>
	</div>
	<div id="tabs-11">
	<a class="labels">Send To Other Doctor(On Save):<span>*</span></a>
                                <select  class="select" id="deptsendto" style="margin-left:20px; width:250px">
								<option selected="selected" value="'.$dept.'">'.$dept.'</option>
								<option value="GENERAL CONSULTATIONS">General Consultations</option>
								<option value="PHYSIOTHERAPY">Physiotherapy</option>
								<option value="EYE CLINIC">Eye Clinic</option>
								<option value="MCH">MCH</option>
								<option value="NUTRITION">Nutrition</option>
								<option value="DENTAL CLINIC">Dental Clinic</option>
								<option value="PAEDIATRICS">Paediatrics</option>
								<option value="COUNSELLING">Counselling</option>
								</select>

<a class="labels" style="margin-left:20px">Next Review Date:</a>
<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick3" type="text" value="">
				
								</div>
	<div id="tabs-9">
	<input type="checkbox" value="1" name="rectheatre" id="rectheatre" style="float:left;margin:8px 0 0 10px">
	<a class="labels" style="margin-left:10px"><b>Send to Theatre On Save</b></a>
	<a class="labels" style="margin-left:20px">Type Procedure :</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg6" >
								<select id="treat" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from procedures order by name asc");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
	<div style="width:490px; float:left;">							
	<textarea id="treatment" style="float:right;height:290px; width:480px" class="alergy">'.stripslashes($rowa['Treatment']).'</textarea>
	</div>

<div style="width:470px; float:left;padding:2px;">
<h5>Theatre Summary</h5>
<div style="width:460px; float:left;padding:2px;height:315px; overflow-y:auto; border:1px solid #ccc;">';
$resultb =mysqli_query($conn,"select * from theatrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else{$x='<b style="color:#0085b2"> - [COMPLETED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Procedures</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['procedures']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Notes</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['notes']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}


echo'</div></div>

	</div>
	<div id="tabs-10">
	<input type="checkbox" value="1" name="recpharm" id="recpharm" style="float:left;margin:8px 0 0 0px">
	<a class="labels" style="margin-left:10px"><b>Send Prescription to Pharmacy On Save</b></a>
	<a class="labels" style="margin-left:30px">Prescription Templates:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;" id="widg7" >
								<select id="presct" style="width:260px; margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from prescriptions order by name asc");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
	
	
	 <div class="cleaner"></div>
	<div class="cleaner"></div>
	<a class="labels">Drug Name</a><a class="labels" style="margin-left:210px">Dosage</a>	
	<a class="labels" style="margin-left:100px">Route</a><a class="labels" style="margin-left:90px">Frequency</a>		
	<a class="labels" style="margin-left:100px">Duration</a><a class="labels" style="margin-left:70px">Quantity</a>
	<div class="cleaner"></div>		
	<div class="ui-widget" style="margin-left:0px; float:left;" >
		<select class="drugname" id="dr1" style="width:260px; margin-left:0px;">
		<option value="">Select one...</option>';
			$resultb =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");
			$num_resultsb = mysqli_num_rows($resultb);
			$resultc =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");
			$num_resultsc = mysqli_num_rows($resultc);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								echo'<option value="'.stripslashes($rowb['ItemName']).'θ'.stripslashes($rowb['PHARMACY']).'">'.stripslashes($rowb['ItemName']).', Bal:'.stripslashes($rowb['PHARMACY']).'</option>';
							}
							for ($i=0; $i <$num_resultsc; $i++) {
								$rowc=mysqli_fetch_array($resultc);
								echo'<option value="'.stripslashes($rowc['ItemName']).'θ'.stripslashes($rowc['CSSD']).'">'.stripslashes($rowc['ItemName']).', Bal:'.stripslashes($rowc['CSSD']).'</option>';
							}
								echo'</select>
								</div>
	<input type="hidden" id="dname"/><input type="hidden" id="dbal"/>
	
	<input type="text" id="dr9" class="in_field" value="" style="width:30px; float:left; margin-left:50px;padding:6px 5px"/> 
		
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
		<option value="Pessaries">Pessaries</option>
		<option value="Ampules">Ampules</option>
		<option value="gsm">gsm</option>
		<option value="mgs">mgs</option>
		<option value="drops">drops</option>

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
		<option value="Vaginal">Vaginal</option>
		<option value="Aural">Aural</option>
		<option value="Intranasal">Intranasal</option>
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
		<option value="4">Four Times Daily</option>
		<option value="0.1429">Once Weekly</option>
		<option value="0.2857">Twice Weekly</option>
		<option value="0.4286">Thrice Weekly</option>
		<option value="0.5714">Four Times Weekly</option>
		<option value="1">Mane</option>
		<option value="1">Nocte</option>
		<option value="4">Qid/Qds</option>
		<option value="1">P.R.N</option>
		</select>
		</div>
		
		
		
		<input type="text" id="dr7" name="oname" class="in_field" value="" style="width:30px; float:left; margin-left:50px;padding:6px 5px"/> 
		
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
		
		<input type="text" id="dr3" name="oname" class="in_field" value="" style="width:30px; float:left; margin-left:30px;padding:6px 5px" title="This is the actual quantity that is billed."/> 
		
		<img src="images/document_add.png" style="margin-left:30px; width:30px; height:30px; cursor:pointer" onclick="addthispresc()"/>												
	<div class="cleaner_h5"></div>
	<div style="width:520px; float:left">
	<textarea id="prescription" style="float:right;height:210px; width:500px" class="alergy"></textarea>

	<div class="cleaner"></div>
	<input type="checkbox" value="1" name="printrec" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Prescription on Save</a>
	</div>
<div style="width:440px; float:left;padding:2px;">
<h5>Prescriptions Summary</h5>
<div style="width:430px; float:left;padding:2px;height:240px; overflow-y:auto; border:1px solid #ccc;">';
$resultb =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															
				
				echo'
				
				<a class="labels" style="margin-top:10px;margin-bottom:5px">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['prescription']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				
				';



														}

echo'</div></div>

	</div>
		
	</div>
	
	
							</div>
   							';

   					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

							
					break;
					case '95.7':
					echo'<h5>All Appointments</h5>
	<img src="images/plus.png" style="width:30px; height:30px; float:right; margin:0px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Appointment" id="newevent" />
			';
			$patid=$_GET['patid'];
		$result =mysqli_query($conn,"select * from calendar where  Pat_id='".$patid."' order by Event_id desc");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
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
					
					
					break;

					case '95.1':
							$cat=$_GET['cat'];
							$k=$_GET['k'];
							$param=$_GET['param'];

							
							$_SESSION[$cat][$k]=$param;
							

							foreach ($_SESSION[$cat] as $key => $val) {
								if($val!=''){
								echo '<div class="tag alert-info alert-dismissable" id="distag'.$key.'"><button type="button" class="close" onclick="dismissdis('.$key.')"  aria-hidden="true">&times;</button>'.$val.'</div></div>';
							}
							}
					
							
							break;
							
							case '95.2':
							$cat=$_GET['cat'];
							$param=$_GET['param'];
							unset($_SESSION[$cat][$param]);

							foreach ($_SESSION[$cat] as $key => $val) {
								if($val!=''){
								echo '<div class="tag alert-info alert-dismissable" id="distag'.$key.'"><button type="button" class="close" onclick="dismissdis('.$key.')"  aria-hidden="true">&times;</button>'.$val.'</div></div>';
							}
						}
					
							break;
					case 96:
					
						$stamp=date('Ymd');
					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Lab Analysis:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from labrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."'  and status>=1 order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']).'-'.stripslashes($row['unique_no']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="97">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Laboratory using these dates" onclick="searchlab(3,3);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchlab">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons3">
				<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="96.1">';
		//<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		//<a class="labels" style="margin-left:10px">Unregistered Patient</a>
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

						foreach ($arr as $key => $val) {
							$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$key."'  and status=3 ");
							$num_resultsb = mysqli_num_rows($resultb);
							if($num_resultsb>0){
							
							echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',96.1)\">";
							}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',96.1)\">";}

							echo'<div id="figure2" style="width:280px">'.$val.'</div>
							</div>
							<div class="cleaner"></div>
							';

						}

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;

					case 96.1:
					$param=$_GET['pid'];
					$stamp=date('Ymd');

					$result =mysqli_query($conn,"select * from labrequests where prescid='".$param."'");
					$row=mysqli_fetch_array($result);
					$patid=stripslashes($row['patid']);
					$patname=stripslashes($row['patname']);
					$labno=stripslashes($row['labno']);
					$unique=stripslashes($row['unique_no']);

					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:620px; position:absolute;left:20%;top:15%" >
					<div id="tit" style="width:600px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Lab Analysis:". $patname." - [". $patid."]";
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<h5 style="margin-left:10px;color:#333">LAB NO: '.$unique.'</h5>';
					$result =mysqli_query($conn,"select * from labrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' and status>=1 order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:120px;color:#fff">Request Date-Time</div>
	<div id="figure1" style="margin-left:0px; width:280px;color:#fff">Test</div>
	<div id="figure1" style="margin-left:0px; width:150px;color:#fff">Section</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:248px; overflow-y:auto; margin-left:10px">';

						
							//access control
								/*
							if($usertype!='Admin'&&$userdep!='LABORATORY_MAIN'){
								

											$result =mysqli_query("select * from labrequests where prescid='".$param."' and section='".$userdep."'  and (status=2 or status=3) ");
											$num_results = mysqli_num_rows($result);
											
											for ($i=0; $i <$num_results; $i++) {
												$row=mysqli_fetch_array($result);
												$tid=stripslashes($row['id']);

											if(stripslashes($row['status'])==3){
											echo'<div class="normal1" style="" onclick="seepat('.$tid.',97)">';
											}else {echo'<div class="normal2"  style="" onclick="seepat('.$tid.',97)">';}
											echo'<div id="figure2" style="width:120px">'.stripslashes($row['date']).'-'.stripslashes($row['reqtime']).'</div>
											<div id="figure2" style="width:280px;overflow:hidden">'.stripslashes($row['request']).'</div>
											<div id="figure2" style="width:152px">'.stripslashes($row['section']).'</div>
											</div>
											<div class="cleaner"></div>
											';
											}

											echo'<div class="cleaner_h5"></div><h5 style="margin-left:10px;color:#333">OTHER TESTS REQUESTED</h5>
											<div id="title" style="margin-left:0px">
												<div id="figure1" style="margin-left:0px; width:120px;color:#fff">Request Date-Time</div>
												<div id="figure1" style="margin-left:0px; width:280px;color:#fff">Test</div>
												<div id="figure1" style="margin-left:0px; width:150px;color:#fff">Section</div>
												</div><div class="cleaner"></div>';
											$result =mysqli_query("select * from labrequests where prescid='".$param."' and section!='".$userdep."'  and (status=2 or status=3) ");
											$num_results = mysqli_num_rows($result);
											
											for ($i=0; $i <$num_results; $i++) {
												$row=mysqli_fetch_array($result);
												$tid=stripslashes($row['id']);
												
											if(stripslashes($row['status'])==3){
											echo'<div class="normal1" disabled="disabled" style="background:#f06; cursor:default">';
											}else {echo'<div class="normal2"   style="background:#0ff; cursor:default">';}
											echo'<div id="figure2" style="width:120px">'.stripslashes($row['date']).'-'.stripslashes($row['reqtime']).'</div>
											<div id="figure2" style="width:280px;overflow:hidden">'.stripslashes($row['request']).'</div>
											<div id="figure2" style="width:152px">'.stripslashes($row['section']).'</div>
											</div>
											<div class="cleaner"></div>
											';
											}
							/*

							}

							else{
								*/

							$result =mysqli_query($conn,"select * from labrequests where prescid='".$param."'  and (status=2 or status=3) ");
							$num_results = mysqli_num_rows($result);
							
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$tid=stripslashes($row['id']);
							if(stripslashes($row['status'])==3){
							echo'<div class="normal1" style="" onclick="seepat('.$tid.',97)">';
							}else {echo'<div class="normal2"  style="" onclick="seepat('.$tid.',97)">';}
							echo'<div id="figure2" style="width:120px">'.stripslashes($row['date']).'-'.stripslashes($row['reqtime']).'</div>
							<div id="figure2" style="width:280px;overflow:hidden">'.stripslashes($row['request']).'</div>
							<div id="figure2" style="width:152px">'.stripslashes($row['section']).'</div>
							</div>
							<div class="cleaner"></div>
							';
							}

						/*
						}
						*/

						

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;

							case 96.2:
					
							$stamp=date('Ymd');
							echo"<script>$('#cons31').parent().find('input:first').focus();</script>";
							echo'<div id="modalDiv2"></div>';
							echo'<div id="mon" style="min-height:110px; width:320px">
									<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
							echo"<h5 style=\"margin-right:10px; color:#fff\">Lab Reception:";
							echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
							echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
								</h5></div>';
							$result =mysqli_query($conn,"select * from labrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' AND status=1  order by prescid asc");
							$num_results = mysqli_num_rows($result);
							$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

							echo'<div class="cleaner_h5"></div>
							<input class="input_field" style="display:none" id="idpay" type="text" value="97">
							<a class="labels" style="margin-left:10px">From:</a>
							<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
							<a class="labels" style="margin-left:10px">To:</a>
							<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
								<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Laboratory using these dates" onclick="searchlab2(31,3);"/>
								<div class="cleaner"></div>
							<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchlab">
							<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
							<div class="cleaner_h5"></div>
							<select id="cons31">
							<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['patname']).'-'.stripslashes($row['patid']).'</option>';
							}
							echo'</select></div><div class="cleaner"></div>
							<input class="input_field" style="display:none" id="idpay" type="text" value="96.3">';
								//<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
								//<a class="labels" style="margin-left:10px">Unregistered Patient</a>
							echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Patients in the Queue</strong></a>";
							echo'<div class="cleaner"></div>
							<div id="title" style="margin-left:10px">
							<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
							</div><div class="cleaner"></div>
							<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

							foreach ($arr as $key => $val) {
								$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$key."' and status=1");
								$num_resultsb = mysqli_num_rows($resultb);
								if($num_resultsb>0){
								
								echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',96.3)\">";
								}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',96.3)\">";}

								echo'<div id="figure2" style="width:280px">'.$val.'</div>
								</div>
								<div class="cleaner"></div>
								';

							}

							echo'</div><div class="cleaner_h5"></div></div></div></div>';
							break;


							case 96.3:
					$param=$_GET['pid'];
					$stamp=date('Ymd');

					$result =mysqli_query($conn,"select * from labrequests where prescid='".$param."'");
					$row=mysqli_fetch_array($result);
					$patid=stripslashes($row['patid']);
					$patname=stripslashes($row['patname']);
					$labno=stripslashes($row['labno']);


					
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:620px; position:absolute;left:20%;top:15%" >
					<div id="tit" style="width:600px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Lab Reception:". $patname." - [". $patid."]";
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
					$result =mysqli_query($conn,"select * from labrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."'  AND status=1 order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:120px;color:#fff">Request Date-Time</div>
	<div id="figure1" style="margin-left:0px; width:280px;color:#fff">Test</div>
	<div id="figure1" style="margin-left:0px; width:150px;color:#fff">Section</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:248px; overflow-y:auto; margin-left:10px">';

						
							

							$result =mysqli_query($conn,"select * from labrequests where prescid='".$param."'  AND status=1 ");
							$num_results = mysqli_num_rows($result);
							
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$tid=stripslashes($row['id']);
							if(stripslashes($row['status'])==1){
							echo'<div class="normal1" style="" onclick="seepat('.$tid.',96.4)">';
							}else {echo'<div class="normal2"  style="" onclick="seepat('.$tid.',96.4)">';}
							echo'<div id="figure2" style="width:120px">'.stripslashes($row['date']).'-'.stripslashes($row['reqtime']).'</div>
							<div id="figure2" style="width:280px;overflow:hidden">'.stripslashes($row['request']).'</div>
							<div id="figure2" style="width:152px">'.stripslashes($row['section']).'</div>
							</div>
							<div class="cleaner"></div>
							';
							}

						

						

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
					
							break;

							case 96.4:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Lab Reception Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
	if(isset($_GET['pid'])){
		$lid=$_GET['pid'];
	}else {$lid=0;$pid=0;}


							$resultq =mysqli_query("select * from labrequests where id='".$lid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							$pid=stripslashes($rowq['prescid']);
							$labno=stripslashes($rowq['labno']);
							$patname=stripslashes($rowq['patname']);
							$stat=stripslashes($rowq['status']);
							$paid=stripslashes($rowq['paid']);

							if(stripslashes($rowq['status'])==1){
								$labstatus='<b style="color:#F00"> PENDING</b>';
							}else{$labstatus='<b style="color:#0085b2">COMPLETED</b>';}

							if($paid==1){$xx='PAID';}else{$xx='NOT PAID';}

							$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 and PatId='".$pntno."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
								$paid=1;
								$xx='INPATIENT';
							}

							
							
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$patname=stripslashes($row['fullnames']);
							$accum=stripslashes($row['accum']);

							if($accum==1&&$paid!=1){$paid=1;$xx='CORPORATE';}

							//$paid=1;
							
						
								
							
							echo'<div id="newstude">

							<input type="hidden" id="paid" value="'.$paid.'"/>

							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Laboratory Reception-'.$xx.'</h2>';
						echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			
			<ul>
			<li><a href="#tabs-2">Requested Test</a></li>
			</ul>
			
			<div id="tabs-2">
				<h5>Requested Test Details</h5>
				<a class="labels" style="margin-left:5px;">Test Name: <b>'.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Request Time: <b>'.stripslashes($rowq['date']).'  ['.stripslashes($rowq['reqtime']).']</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Requested By: <b>'.stripslashes($rowq['requested']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Status: '.$labstatus.'</a><br/><div class="cleaner"></div>
				
				<div style="width:320px;">
				<a class="labels" style="margin-left:5px;">Sample:<span>*</span></a>

				<select class="select" id="sample" style="width:150px; margin-left:10px;float:right ">';

				$result =mysqli_query($conn,"select * from labsamples order by name");
				echo'<option value="">Select one...</option>';
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
							}
								echo'</select>	
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px;">Condition:<span>*</span></a>
					 <input type="text" id="condition"  style="float:right;margin-left:10px;width:200px" class="in_field" value=""/> 
							<div class="cleaner_h5"></div>	
						<a class="labels" style="margin-left:5px;">Rejected/Accepted:<span>*</span></a>

				<select class="select" id="rejacc" style="width:150px; margin-left:10px;float:right ">
				<option value="">Select one...</option>
							<option value="1">Accepted</option>
							<option value="0">Rejected</option>
						</select>
						<div class="cleaner_h5"></div>	
						<a class="labels" style="margin-left:5px;">Source:<span>*</span></a>

				<select class="select" id="source" style="width:150px; margin-left:10px;float:right ">
				<option value="">Select one...</option>
							<option value="OUTPATIENT">OUTPATIENT</option>
								<option value="MALE WARD">MALE WARD</option>
								<option value="FEMALE WARD">FEMALE WARD</option>
								<option value="MATERNITY">MATERNITY</option>
								<option value="PAEDIATRICS">PAEDIATRICS</option>
						</select>	
							<div class="cleaner_h5"></div>	
						<a class="labels" style="margin-left:5px;">Other Details:</a>
					 <input type="text" id="odetail"  style="float:right;margin-left:10px;width:200px" class="in_field" value=""/> 
					 <div class="cleaner_h5"></div>	';

					 echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"labreceive('".$pid."',".$lid.");\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:40px;"></div>

					 </div>	

			</div>
			</div>
			</div>	
   							';
							

							
					break;
							case 97:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Lab Analysis Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
	if(isset($_GET['pid'])){
		$lid=$_GET['pid'];
	}else {$lid=0;$pid=0;}

	if(isset($_SESSION['lab'])){unset($_SESSION['lab']);}

							$resultq =mysqli_query($conn,"select * from labrequests where id='".$lid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							$pid=stripslashes($rowq['prescid']);
							$labno=stripslashes($rowq['labno']);
							$unique=stripslashes($rowq['unique_no']);
							$patname=stripslashes($rowq['patname']);
							$stat=stripslashes($rowq['status']);
							if(stripslashes($rowq['status'])==3){
								$labstatus='<b style="color:#F00"> PENDING</b>';
							}else{$labstatus='<b style="color:#0085b2">COMPLETED</b>';}

							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							
						echo'<div id="newstude">

							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Laboratory-LAB NO: '.$unique.'</h2>';
						echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('report.php?id=38&rcptno=".$lid."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			
			<ul>';


			
				echo'
				<li><a href="#tabs-2">Requested Test</a></li>
					<li><a href="#tabs-3">Lab Results</a></li>
					<li><a href="#tabs-4">Lab Summary</a></li>
					<li><a href="#tabs-5">Lab Templates</a></li>
					<li><a href="#tabs-6">Import Results</a></li>';
				
					echo'
				

				</ul>
		
			<div id="tabs-2">
				<h5>Requested Test Details</h5>
				<a class="labels" style="margin-left:5px;">Test Name: <b>'.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Status: '.$labstatus.'</a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Request Time: <b>'.stripslashes($rowq['date']).'  ['.stripslashes($rowq['reqtime']).']</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Requested By: <b>'.stripslashes($rowq['requested']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Received Time: <b>'.stripslashes($rowq['date']).'  ['.stripslashes($rowq['rectime']).']</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Sample: <b>'.stripslashes($rowq['sample']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Sample Condition:<b> '.stripslashes($rowq['sample_condition']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Source: <b>'.stripslashes($rowq['source']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Other Details:<b> '.stripslashes($rowq['other_details']).'</b></a><br/><div class="cleaner"></div>';

				if($stat==2){

				echo'<a class="labels" style="margin-left:5px;">Done By: <b>'.stripslashes($rowq['doneby']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Time of Completion: <b>'.stripslashes($rowq['servtime']).'</b></a><br/><div class="cleaner"></div>';	
				}
				echo'
				
			</div>
			<div id="tabs-5">
				<h5>Lab Templates</h5>
				<a class="labels">Type Result name and press enter:</a>
	<div class="ui-widget" style="margin-left:25px; float:left;width:400px" id="widg34" >
								<select id="labrt" style="margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from labresults order by name asc");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['id']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>';

				echo'<div class="cleaner_h10"></div>
				 <div id="labtemp" style="height:290px; overflow-y:auto; border:1px solid #ccc;width:700px;padding:2px">
				 </div>	
				</div>
					<div id="tabs-6">
				<h5>Import Lab Results</h5>
				<a class="labels">Type Test Name:</a>
				<div class="ui-widget" style="margin-left:25px; float:left;width:400px" id="widg34" >
								<select id="labtst" class="combos" style="margin-left:10px;">
								<option value="">Select one...</option>';
									$resultb =mysqli_query($conn,"select * from labtestdb order by name asc");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['casevalue']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>';

				echo'<div class="cleaner_h10"></div>
				<a class="labels">Sample ID:<span>*</span></a>
                <input type="text" id="sampleid1"  style="float:left;margin-left:10px;width:70px" class="in_field" value="'.date('Ymd').'"/> 
                 <input type="text" id="sampleid2"  style="float:left;margin-left:10px;width:30px" class="in_field" value=""/>';
                	echo"<input type=\"button\" value=\"Import\"  style=\"margin-left:20px; float:left; cursor:pointer;width:60px\" class=\"in_field\" onclick=\"importlab();\"/>";
								
				echo'<div class="cleaner_h5"></div>
				 <div id="labtestimport" style="height:250px; overflow-y:auto; border:1px solid #ccc;width:700px;padding:2px">
				 </div>	
				</div>
			<div id="tabs-4">
				<h5>Lab Summary</h5>
				<div class="cleaner_h5"></div>
		 <div style="height:320px; overflow-y:auto; border:1px solid #ccc;width:700px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from labrequests where id='".$lid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else if(stripslashes($rowb['status'])==2){$x='<b style="color:#F00"> - [COMPLETED]</b>';}
															else if(stripslashes($rowb['status'])==3){$x='<b style="color:#F00"> - [IN PROCESS]</b>';}
															else{$x='<b style="color:#0085b2"> - [SAMPLE REJECTED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Lab Request</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['request']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Lab Results</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['results']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div>
				
			</div>
				
				<div id="tabs-3">';
					//<a class="labels">Select Payment:<span>*</span></a>
	//<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">';
	
			//$result =mysqli_query("select * from sales where Status=1  and Category='LABORATORY'  and ClientId='".$pntno."' order by TransNo desc");
			//$arr=array();
			//$num_results = mysqli_num_rows($result);
			//for ($i=0; $i <$num_results; $i++) {
			//$row=mysqli_fetch_array($result);
			//$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']);
		//}
		//echo'<select id="consfee">
		//<option value="">Select one...</option>';
		//foreach ($arr as $key => $val) {
		//						echo"<option value=\"".$key."\">".$val.",Rcpt No:".$key."</option>";
		//				}
		//
		//</select>
	//</div>
//<a class="labels" style="margin-left:8px">Inpatient:</a>
		echo'<input type="checkbox" value="1" name="inpat" disabled="disabled" id="inpat" style="margin:8px 0 0 10px;display:none">';
	//<div class="cleaner_h5"></div>';

							$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 and PatId='".$pntno."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
								echo"<script>$('#inpat').prop('checked',true);</script>";
							}
	
					//if($stat==1||$usertype=='Admin'||$userdep=='LABORATORY_MAIN'){
					echo'
					<a class="labels" style="margin-left:5px;">Result Type:</a>

				<select class="select" id="restype" style="width:150px; margin-left:10px;float:left ">
				<option value="'.stripslashes($rowq['restype']).'">'.stripslashes($rowq['restype']).'</option>
							<option value="POSITIVE">Positive</option>
							<option value="NEGATIVE">Negative</option>
						</select>
						<div class="cleaner_h5"></div>	
				<script>area17 = new nicEditor({fullPanel : true,maxHeight : 280}).panelInstance("labresults");</script>
				<textarea  id="labresults" style="float:left;width:710px;height:290px;" class="alergy" >'.stripslashes($rowq['results']).'</textarea>
												
								
								</select>
								<div class="cleaner_h5"></div>';
						echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"labres('".$pid."',0,".$lid.");\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:40px;"></div>';

							/*}

							else{
							echo '<a class="labels" style="font-weight:bold;color:#f00;font-size:16px">TEST RESULTS ALREADY SUBMITTED. ONLY THE LAB SUPERVISOR CAN MAKE CHANGES TO THIS REPORT.</a>';
							}
							*/
				
				echo'</div></div>
							
   							';
							

							
					break;

					case '97.1':
					$param=$_GET['param'];
					$resultb =mysqli_query($conn,"select * from labresults where id='".$param."'");
					$rowb=mysqli_fetch_array($resultb);
					echo '<BR/>'.stripslashes($rowb['name']).'<BR/>';


					break;

					case '97.2':
					
						$stamp=date('Ymd');
					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Lab Billing:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from labrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."'  and status=1  order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']).'-'.stripslashes($row['labno']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="97.3">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Laboratory using these dates" onclick="searchlab(3,3);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchlab">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons3">
				<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="97.3">
		<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>

		<a class="labels" style="margin-right:10px;float:right;cursor:pointer" onclick="findpatient()"><u>Find Patients</u></a>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

						foreach ($arr as $key => $val) {
							$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$key."'  and status=1 ");
							$num_resultsb = mysqli_num_rows($resultb);
							if($num_resultsb>0){
							
							echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',97.3)\">";
							}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',97.3)\">";}

							echo'<div id="figure2" style="width:280px">'.$val.'</div>
							</div>
							<div class="cleaner"></div>
							';

						}

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;

					case '97.3':
						
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Lab Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
		if(isset($_GET['pid'])){
			$pid=$_GET['pid'];
		}else {$pid=0;$pid=0;}

		

		if(isset($_SESSION['lab'])){unset($_SESSION['lab']);}

							$resultq =mysqli_query($conn,"select * from labrequests where prescid='".$pid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							$pid=stripslashes($rowq['prescid']);
							$labno=stripslashes($rowq['labno']);
							$unique=stripslashes($rowq['unique_no']);
							$patname=stripslashes($rowq['patname']);
							$stat=stripslashes($rowq['status']);
							if(stripslashes($rowq['status'])==3){
								$labstatus='<b style="color:#F00"> PENDING</b>';
							}else{$labstatus='<b style="color:#0085b2">COMPLETED</b>';}

							if($labno==0||$labno==''){$pntno=0;}

							if(isset($_GET['pntno'])){
								$pntno=$_GET['pntno'];
							}

							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$patname=stripslashes($row['fullnames']);
							$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);
							
						
							
								echo"<script>$('#item44').parent().find('input:first').focus();</script>";
							echo'<script>document.onkeydown = keydown;
						    	function keydown(evt){
						      	if (!evt) evt = event;
								
								 if (evt.keyCode==115){ //f4
							   	evt.preventDefault();
						     	$("#item44").parent().find("input:first").focus();	
							   }
								 if (evt.keyCode==119){ //f8
								 evt.preventDefault();
						     	viewbill("lab"); 
						      	}
						     	 if (evt.keyCode==112){ //f1
								 evt.preventDefault();
						       addbill("lab",0); 
						      	}
								if (evt.keyCode==121){ //f10
								evt.preventDefault();
								submitbill("lab"); 
						      	}
								if (evt.keyCode==123){ //f12
								evt.preventDefault();
								help61(); 
						      	}
								if (evt.keyCode==120){ //f9
								evt.preventDefault();
						          emptybill("lab"); 
						      	}
								
								
								if (evt.keyCode==114){ //f3
								evt.preventDefault();
								removelastbill("lab");
						      	}
						     	 
						    }</script>';	
							
							echo'<div id="newstude">

							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Lab Billing-LAB NO: '.$labno.'</h2>';
						echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.$pntno.'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.$pntno.'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			
			<ul>


					<li><a href="#tabs-1">Requested Test</a></li>
					<li><a href="#tabs-2">Lab Billing</a></li>
			</ul>
			<div id="tabs-1">
				<h5>Requested Test Details</h5>';
				$resultq =mysqli_query($conn,"select * from labrequests where prescid='".$pid."'");
				$num_resultsa = mysqli_num_rows($resultq);
				$xa=1;	
				for ($i=0; $i <$num_resultsa; $i++) {
						$rowq=mysqli_fetch_array($resultq);
						echo '<a class="labels" style="margin-left:5px;">Test Name: <b>'.$xa.'. '.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>';
						$xa++;
				}
				
				echo'
				
			</div>
			<div id="tabs-2">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where Category='Laboratory' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
							<input type="text" id="price44" class="input_field"  style="width:70px; margin-left:10px;"/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('lab',0)\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('lab')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('lab')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
				<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								 class=\"in_field\" onclick=\"submitbill('lab');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>';
		
		
				
				echo'</div></div>
							
   							';


   							//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

							

							
					break;
					
					case 98:
				$stamp=date('Ymd');
					echo"<script>$('#cons4').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:10px; color:#fff">Process Prescription:';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
				$result =mysqli_query($conn,"select * from newprescription where (status=3 or status=4) and Stamp=".$stamp." order by PrescId asc");
				$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:10px">Patients in Queue:<strong> '.$num_results.'</strong></a>
				<div class="cleaner_h5"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="cons4">
		<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'</option>';
							}
	echo'</select>
	</div>
				</div>';
						break;
							
							case 99:
							
					$stamp=date('Ymd');
					echo"<script>$('#cons5').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Pharmacy:Dispense Drugs";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from sales where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' and Dispensed=0 and Category='PHARMACY' and Status=1 order by TransNo asc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']);
			}
			echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="100">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Sales using these dates" onclick="searchpharm(5);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpharm">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.count($arr).'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons5">
				<option value="">Select one...</option>';
							foreach ($arr as $key => $val) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.$key.'">'.$key.','.$val.'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner_h5"></div>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Posted Payments</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:180px">Pat. Name</div>
									<div id="figure1" style="width:89px">Rcpt. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
		foreach ($arr as $key => $val) {
		echo'<div class="normal2"  style="" onclick="seepat('.$key.',113)">';
		echo'<div id="figure2" style="width:180px">'.$val.'</div>
		<div id="figure2" style="width:90px">'.$key.'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		<div class="cleaner_h5"></div>
		</div>';
				
							break;
							
							case 100:
							
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payments(outpatient) Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							if(isset($_GET['pid'])){
								$pid=$_GET['pid'];
								$resultc =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
								$rowc=mysqli_fetch_array($resultc);
								$pntno=stripslashes($rowc['PatId']);
								$resultb =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
								$rowb=mysqli_fetch_array($resultb);
							}
							else if(isset($_GET['patid'])){
								$pntno=$_GET['patid'];
								$resultb =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
								$rowb=mysqli_fetch_array($resultb);
								$pid=0;
								$rowc=0;
							}
							else {$pid=0;$rowb=0;$rowc=0;}
									
									
									echo"<script>$('#item4').parent().find('input:first').focus();</script>";
									echo"<script>$('#currentins').parent().find('input:first').width(130).prop('disabled',true);
						$('#currentins').css({'border' : 'solid #ccc 1px'});;</script>";
									echo"<script>document.onkeydown = keydown;
							function keydown(evt){
							if (!evt) evt = event;
							
							if (evt.keyCode==113){ //f2
						   	showpat2();
						    $('#payam').focus();
						   }
						   if (evt.keyCode==115){ //f4
						  $('#item4').parent().find('input:first').focus();	
						   }
							 if (evt.keyCode==119){ //f8
						   viewcart(); 
							}
							 if (evt.keyCode==112){ //f1
							additem(); 
							}
							if (evt.keyCode==123){ //f12
							submam('".$pid."'); 
							}
							if (evt.keyCode==120){ //f9
							emptycart(); 
							}
     	 
    }</script>";

								echo'<div id="newstude">
								
							<div style="height:471px; width:215px; background:#fff; margin:0 5px 5px 0;padding-left:6px; padding-right:5px;BORDER-RADIUS:0PX; float:right">
							<div id="pat11" style="font-color:#333;cursor:pointer;background:#fff;width:98px;float:left; margin:5px 5px 0 0px; padding:0px 2px 0px 2px; BORDER-RADIUS:0PX; border:1px solid #0085b2" onclick="showpat1()">
							<h5 style="margin-left:15px;color:#333;font-weight:normal">Patient</h5>
							</div> 
							<div id="pat12"  style="cursor:pointer;background:#ccc;width:98px;float:left; margin:5px 0px 0 0px; padding:0px 2px 0px 2px;BORDER-RADIUS:0PX; border:1px solid #0085b2"  onclick="showpat2()">
							<h5 style="margin-left:12px; color:#333; font-weight:normal">Payments</h5>
							</div> 
							<h5 style="border-bottom:2px solid #0085b2; margin:0px 0 5px 0; padding-top:3px"></h5>
								<div id="pat1">
								<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="'.stripslashes($rowb['image']).'"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Pnt. No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowb['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="oname" name="oname"  class="in_field" value="'.stripslashes($rowb['oname']).'"/> 
								<h5 style="border-bottom:2px solid #0085b2"></h5>
								<h5>Examination Details</h5>
								
	<div id="tabs" style="height:185px">
	<ul>
	<li><a href="#tabs-1">Lab.</a></li>
		<li><a href="#tabs-2">Rad.</a></li>
		<li><a href="#tabs-3">Presc.</a></li>
		<li><a href="#tabs-4">Proc.</a></li>
		<li><a href="#tabs-5">Surg.</a></li>
	</ul>
	<div id="tabs-1">
	<textarea id="presc" style="float:left;margin-left:-10px;height:115px; width:175px; border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['LabTests']).'</textarea>
	</div>
		<div id="tabs-2">
	<textarea id="presc" style="float:left;margin-left:-10px;height:115px; width:175px; border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['RadTests']).'</textarea>
	</div>
		<div id="tabs-3">
	<textarea id="presc" style="float:left;margin-left:-10px;height:115px; width:175px; border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['Prescription']).'</textarea>
	</div>
		<div id="tabs-4">
	<textarea id="presc" style="float:left;margin-left:-10px;height:115px; width:175px; border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['Treatment']).'</textarea>
	</div>
	<div id="tabs-5">
	<textarea id="presc" style="float:left;margin-left:-10px;height:115px; width:175px; border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['Surgery']).'</textarea>
	</div>
</div>
								</div>
								<div id="pat2" style="display:none">
								<h5>Pay By Insurance</h5>
								<a class="labels">Pay by Insurance?:</a>
		<input type="checkbox" value="1" name="instatus" id="admit" style="margin:8px 0 0 10px" onclick="recins();">
							<div class="cleaner_h5"></div>
								<a class="labels">Insurer:<span>*</span></a>
								<div class="ui-widget" style="margin-left:5px;float:left; width:130px">
	<select id="currentins" disabled="disabled">
		<option value="">Select one...</option>';
		echo'<option value="'.stripslashes($rowb['insid']).'θ'.stripslashes($rowb['name']).'" selected="selected">'.stripslashes($rowb['insurer']).'</option>';
		$resulta =mysqli_query($conn,"select * from inscompanies order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['id']).'θ'.stripslashes($rowa['name']).'">'.stripslashes($rowa['name']).'</option>';
							}
	echo'</select>
	</div>						<div class="cleaner_h5"></div>
								<a class="labels">Card No:</a>
								<input type="text" id="cardno" name="oname"  class="in_field" value="'.stripslashes($rowb['cardno']).'" disabled="disabled" style="border-color:#ccc"/> 
								<input type="text" id="insid" name="oname"  class="in_field" style="display:none" value="'.stripslashes($rowb['insid']).'" /> 
								<input type="text" id="insname" name="oname"  class="in_field" style="display:none" value="'.stripslashes($rowb['insurer']).'" /> 
								
								<div class="cleaner_h5"></div>
							<a class="labels">Amount:</a>
								<input type="text" id="amountins" name="oname"  class="in_field" value="" disabled="disabled" style="border-color:#ccc"/> 
								<div class="cleaner_h5"></div>
							<h5>Pay By Cash</h5>
								<a class="labels">Amount:</a>
								<input type="text" id="payam" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5" style="border-bottom:2px solid #0085b2"></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Enable Credit?:</a>
		<input type="checkbox" value="1" name="credstatus" id="admit" style="margin:8px 0 0 10px" onclick="openadmin();">
		<div class="cleaner_h5"></div>
								<a class="labels">Balance:</a>
								<input type="text" id="changeam" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
							';
								echo"<input type=\"button\" value=\"Submit\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"submam('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								</div>
								</div>
											
	<div style="height:166px; width:766px; background:#fff; margin:0 0px 5px 0;padding-left:10px; BORDER-RADIUS:0PX; float:left">
	<h5 style="text-align:center">Process Payments</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help14()\"/></div>";								
echo'<select class="select" id="smode" style="width:100px; margin-left:10px; display:none">
								<option value="cash"  onclick="setcash();">Cash</option>
								<option value="credit" onclick="setcredit();">Credit</option>
								</select>					
							
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:100px; margin-left:10px;display:none"/>
							<a class="labels">Item Name:</a>
			<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item4">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$vat=stripslashes($row['Vat']);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$itcost = stripslashes($row['PurchPrice']);
								$bal = stripslashes($row['Bal']);
								$qsold = stripslashes($row['Qsold']);
								$categ = stripslashes($row['Type']);
								echo"<option value=\"".$vat."θ".$itemp."θ".$item."θ".$code."θ".$itcost."θ".$bal."θ".$qsold."θ".$categ."\">".$item."</option>";
							}
							echo'</select>';
		
							if(isset($_SESSION['cart'])){
							$max=count($_SESSION['cart']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['cart'][$i][4]);
							$tvat+=preg_replace('~,~', '', $_SESSION['cart'][$i][5]);
							$tdisc+=preg_replace('~,~', '', $_SESSION['cart'][$i][6]);
							$ftotal+=preg_replace('~,~', '', $_SESSION['cart'][$i][7]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>
							<script>$('#totvat').val((".$tvat.").formatMoney(2, '.', ','))</script>
							<script>$('#totdisc').val((".$tdisc.").formatMoney(2, '.', ','))</script>
							<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							}
						
							echo'<input type="text" disabled="disabled" id="totitems" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00; display:none" value=""/>
							<input type="text" disabled="disabled" id="totprice" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;display:none" value=""/>
							<input type="text" disabled="disabled" id="totvat" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;display:none" value=""/>
							<input type="text" disabled="disabled" id="totdisc" class="input_field"  style="float:right;width:100px; margin-left:10px;border-color:#f00;display:none" value=""/>
							<select class="select" id="pmode" style="float:right;width:140px; margin-left:10px; display:none">
								<option value="Cash">Cash</option>
							</select>
							<div class="cleaner_h5"></div>';
								
		echo'
	</select>
</div>
							
					<input type="text" id="pid" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$pid.'"/>
					<input type="text" id="type" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="2"/>		
					<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="itcost" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="cusid" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="climit" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="cname" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="bal" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="qsold" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
							<a class="labels" style="margin-left:10px">Quantity:</a>
							<input type="text" id="quat" class="input_field"  style="width:70px; margin-left:10px;"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price" class="input_field"  style="width:70px; margin-left:10px;"/>	
							<a class="labels" style="margin-left:5px">Vat:</a>
							<input type="text" id="vat" disabled="disabled" class="input_field"  style="width:50px;border-color:#f00; margin-left:10px;"/>
							  <div class="cleaner_h5"></div>	
							  <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
							<a class="labels" style="margin-left:5px">Total Vat:</a>
							<input type="text" id="tvat" class="input_field"  style="width:70px;border-color:#f00; margin-left:10px;" disabled="disabled"/>
							<a class="labels" style="margin-left:5px">Discount:</a>
							<input type="text" id="disc" class="input_field"  style="width:60px; margin-left:10px;"/>
							<a class="labels" style="margin-left:5px">SubNet:</a>
							<input type="text" disabled="disabled" id="total" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:10px;"/>';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additem()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcart()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycart()\"/>";
					echo'<div class="cleaner_h5"></div> 	
					<a class="labels" style="margin-left:5px">Final Total:</a>
<input type="text" disabled="disabled" id="fintot" class="input_field"  style="float:left;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
<input type="text" id="ampaid" class="input_field"  style="display:none;float:left;width:100px; font-weight:bold; margin-left:10px;" value=""/>
<input type="text" disabled="disabled" id="change" class="input_field"  style="display:none;float:left;width:100px; font-weight:bold; margin-left:10px;border-color:#f00;" value=""/>
							';
echo'</div>
	<div id="itemsdisp" style="height:300px; width:766px; background:#fff; margin-right:0px; padding-left:10px; BORDER-RADIUS:0PX; float:left">
<h5 style="text-align:center">Drugs</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>						
							
										
									</div>
									
									
									</div>';
							break;
							
							case 101:
					
							$stamp=date('Ymd');
					echo"<script>$('#cons8').parent().find('input:first').focus().width(480);</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:560px;position:absolute; top:30%; left:23%;">
					<div id="tit" style="width:540px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">PAYMENTS";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from sales where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' and Status=0 order by TransNo asc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['RcptNo'])]=stripslashes($row['RcptNo']).'#'.stripslashes($row['ClientName']).'#'.stripslashes($row['ClientId']).'#'.stripslashes($row['Date']).'#'.stripslashes($row['Category']);
			}
			
			
			echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="100">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:180px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:180px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Payments using these dates" onclick="searchpay2(8);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.count($arr).'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons8">
				<option value="">Select one...</option>';
							foreach ($arr as $key => $val) {
								$pieces=explode("#",$val);
								echo'<option value="'.$key.'">'.$pieces[1].'-'.$pieces[2].'-'.$pieces[4].'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner"></div>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Patients In Queue</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:170px">Pat. Name</div>
									<div id="figure1" style="width:109px">Rcpt. No</div>
									<div id="figure1" style="width:119px">Department</div>
									<div id="figure1" style="width:79px">Date</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
		foreach ($arr as $key => $val) {
			$pieces=explode("#",$val);
		echo'<div class="normal1"  style="" onclick="seepat('.$key.',137)">';
		echo'<div id="figure2" style="width:170px">'.$pieces[1].'</div>
		<div id="figure2" style="width:110px">'.$key.'</div>
		<div id="figure2" style="width:120px">'.$pieces[4].'</div>
		<div id="figure2" style="width:80px">'.dateprint($pieces[3]).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		<div class="cleaner_h5"></div>
		</div>';
							break;
							
							case 102:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payments(outpatient) Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=12;
							$resultc =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowc=mysqli_fetch_array($resultc);
							$pntno=stripslashes($rowc['PatId']);
							$resultb =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$rowb=mysqli_fetch_array($resultb);
							echo'<div id="newstude">';
						echo"<script>$('#currentins').parent().find('input:first').width(130).prop('disabled',true);
						$('#currentins').css({'border' : 'solid #ccc 1px'});;</script>";
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Process Payments</h2>";
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help10()\"/></div>";		
					echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
								<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="'.stripslashes($rowb['image']).'"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowb['pntno']).'" disabled="disabled"  style="border-color:#f00"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name" name="name"  style="border-color:#f00"disabled="disabled" class="in_field" value="'.stripslashes($rowb['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" name="oname"  style="border-color:#f00"disabled="disabled" class="in_field" value="'.stripslashes($rowb['oname']).'"/> 
								<div class="cleaner_h5"></div>
						 <a class="labels">Age:</a>
                          <input type="text" id="age" name="age"  style="border-color:#f00"disabled="disabled" class="in_field" value="'.stripslashes($rowb['age']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($rowb['gender'])=='male'){
									 echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio" disabled="disabled">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked" disabled="disabled">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" style="border-color:#f00" id="stream"  disabled="disabled" name="stream" class="in_field" value="'.stripslashes($rowb['contact']).'"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
								</form>
								<div id="personal">
								<h5>Finance Details</h5><a class="labels">Consult.:</a>
                                <input type="text" id="cfee" name="oname" style="border-color:#f00"  class="in_field" value="'.stripslashes($rowc['Consultation']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Lab Charge:</a>
                                <input type="text" id="lfee" name="oname" style="border-color:#f00" class="in_field" value="'.stripslashes($rowc['LabCharge']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Drugs Fee:</a>
                                <input type="text" id="dfee" name="oname"  style="border-color:#f00"class="in_field" value="'.stripslashes($rowc['DrugsFee']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Other Fee:</a>
								<input type="text" id="otfee" name="oname" class="in_field" value="'.stripslashes($rowc['OtherFee']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Ward Fee:</a>
								<input type="text" id="wardfee" name="oname"  style="" class="in_field" value="'.stripslashes($rowc['WardFee']).'"/> 
								<div class="cleaner_h5"></div>';
								$tot=stripslashes($rowc['Consultation'])+stripslashes($rowc['LabCharge'])+stripslashes($rowc['DrugsFee'])+stripslashes($rowc['OtherFee']);
								echo"<script>$('#totfee').val((".$tot.").formatMoney(2, '.', ','));
								$('#cfee').val((".stripslashes($rowc['Consultation']).").formatMoney(2, '.', ','));
								$('#lfee').val((".stripslashes($rowc['LabCharge']).").formatMoney(2, '.', ','));
								$('#dfee').val((".stripslashes($rowc['DrugsFee']).").formatMoney(2, '.', ','));
								$('#otfee').val((".stripslashes($rowc['OtherFee']).").formatMoney(2, '.', ','));</script>";
								echo'<a class="labels">Total Fee:</a>
								<input type="text" id="totfee" name="oname" class="in_field" value="'.$tot.'" disabled="disabled" style="border-color:#f00"/> 
								<input type="text" id="totfe" name="oname" class="in_field" value="'.$tot.'" disabled="disabled" style="border-color:#f00; display:none"/> 
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">
								<h5>Pay By Insurance</h5>
								<a class="labels">Pay by Insurance?:</a>
		<input type="checkbox" value="1" name="instatus" id="admit" style="margin:8px 0 0 10px" onclick="recins();">
							<div class="cleaner_h5"></div>
								<a class="labels">Insurer:<span>*</span></a>
								<div class="ui-widget" style="margin-left:25px;float:left; width:130px">
	<select id="currentins" disabled="disabled">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from inscompanies order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['id']).'θ'.stripslashes($rowa['name']).'">'.stripslashes($rowa['name']).'</option>';
							}
	echo'</select>
	</div>						<div class="cleaner_h5"></div>
								<a class="labels">Card No:</a>
								<input type="text" id="cardno" name="oname"  class="in_field" value="" disabled="disabled" style="border-color:#ccc"/> 
								<input type="text" id="insid" name="oname"  class="in_field" style="display:none"/> 
								<input type="text" id="insname" name="oname"  class="in_field" style="display:none"/> 
								
								<div class="cleaner_h5"></div>
							<a class="labels">Amount:</a>
								<input type="text" id="amountins" name="oname"  class="in_field" value="" disabled="disabled" style="border-color:#ccc"/> 
								<div class="cleaner_h5"></div>
							';
								
								echo'
								<h5>Pay By Cash</h5>
								<a class="labels">Amnt Paid:</a>
								<input type="text" id="payam" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5" style="border-bottom:2px solid #0085b2"></div>
								<div class="cleaner_h5"></div>
								<a class="labels">Balance:</a>
								<input type="text" id="changeam" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
							';
								echo"<input type=\"button\" value=\"Submit\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"submam('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								</div>
								
								<div id="personal">
								
								</div>
   							';
					break;
					
					case 103:
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Pay Consultation Charges Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Pay Consultation Charges';
				echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help7()\"/></div>";								
echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Name:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:20px" id="name" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Charges:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:20px" id="amount" type="text">				
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Amount Paid:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:20px" id="apcons" type="text">				
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Change:</a>
				<input class="input_field" style="float:right; margin-right:20px; border-color:#f00" id="change" type="text" disabled="disabled">				
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="conspay();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
							case 104:
					$stamp=date('Ymd');
					$a=$_GET['a'];
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:100px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:10px; color:#fff">Triage:
			<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5>
			</div>
				<div class="cleaner_h20"></div>';
				$result =mysqli_query($conn,"select * from consfee where Status=1 order by auto asc");
				$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:10px">Patients in Queue:<strong> '.$num_results.'</strong><br/>
				Select Patient:</a>
				
				<div class="cleaner_h5"></div>
				<select class="select" id="itemname" style="width:280px; margin-left:10px;">';
							
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$auto=stripslashes($row['auto']);
								
							echo'<option onclick="paynew('.$auto.','.$a.')"  value="'.$auto.'">'.stripslashes($row['Name']).'</option>';
							}
							echo'</select></div>';
							
							break;
							
							case 105:
					$stamp=date('Ymd');
					echo"<script>$('#cons2').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:10px; color:#fff">Pay Lab Charges:';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
				$result =mysqli_query($conn,"select * from newprescription where status=8 and Stamp=".$stamp." order by PrescId asc");
				$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:10px">Patients in Queue:<strong> '.$num_results.'</strong></a>
				<div class="cleaner_h5"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="cons2">
		<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'</option>';
							}
	echo'</select>
	</div>
				</div>';
								break;
							
							case 106:
								
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Pay Lab Charges Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							$resultc =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowc=mysqli_fetch_array($resultc);
							$pntno=stripslashes($rowc['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Pay Lab Charge</h2>";
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help8()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>
								<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name"  style="border-color:#f00" name="name" disabled="disabled" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" style="border-color:#f00" name="oname" disabled="disabled" class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
						 <a class="labels">Age:</a>
                          <input type="text" id="age" name="age" style="border-color:#f00" disabled="disabled" class="in_field" value="'.stripslashes($row['age']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($row['gender'])=='male'){
									 echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio" disabled="disabled">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked" disabled="disabled">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" id="stream" style="border-color:#f00"  disabled="disabled" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
								</form>
								<div id="personal">
								<h5>Recommended Tests</h5>
								<textarea id="rectest" style="float:right;height:230px;border-color:#f00" class="alergy" disabled="disabled">'.stripslashes($rowc['Tests']).'</textarea>
								<div class="cleaner_h5"></div>
								<h5>Finance Details</h5>
								<a class="labels">Lab Charge:</a>
                                <input type="text" id="lfee" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">
								<h5>Receive Amount</h5>
								<a class="labels">Amnt. Paid:</a>
								<input type="text" id="amountl" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Change:</a>
								<input type="text" id="changeam" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
							';
								echo"<input type=\"button\" value=\"Submit\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"sublab('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								</div>
								
								<div id="personal">
								
								</div>
   							';		
					break;
					case 107:
					$stamp=date('Ymd');
					echo"<script>$('#cons6').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:10px; color:#fff">Pharmacy-Dispense Drugs:';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
				$result =mysqli_query($conn,"select * from newprescription where status=9 and Stamp=".$stamp." order by PrescId asc");
				$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:10px">Patients in Queue:<strong> '.$num_results.'</strong></a>
				<div class="cleaner_h5"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="cons6">
		<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'</option>';
							}
	echo'</select>
	</div>
				</div>';
					break;
							
							case 108:
		echo'
	<div id="newstude">
		<div id="results">						
			<div id="todayev" style="float:left; height:233px; width:501px; background:#fff; margin:0 0px 5px 0;padding-left:0px; border-radius:0px">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0">
			<h5 style="text-align:center">Appointments Reminders</h5>
			</div>
		<img src="images/zoom.png" style="position:relative;width:20px; height:20px; float:left; margin:-22px 10px 0 10px; cursor:pointer" onclick="searchappoint()"  title="Search Appointments" id="" />
		<img src="images/plus.png" style="position:relative;width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Event" id="newevent" />
							
			<div style="overflow-y:auto;height:200px;">';
			//calculate next reccur date
			$result =mysqli_query($conn,"select * from calendar where Status=1 and ReccurenceStatus=1 and '".date('Ymd')."'<=ReccurEnd and StartDate!='".date('Y/m/d')."'");
			$num_results = mysqli_num_rows($result);	
			if($num_results>0){
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							
							$starter=preg_replace('~/~', '', stripslashes($row['StartDate']));
							
							
							$a=substr($starter, 0, 4);
							$b=substr($starter, 4, 4);
							$starter=$a.$b;
							$c=stripslashes($row['ReccurPattern']);
							$starter+=$c;
							
							if($b>1231){
								$a+=1;
								$d=$b-1200;
								$d=sprintf("%04d",$d);
								$g=substr($d, -4, 2);
								$h=substr($d, -2, 2);
							if($g==4||$g==6||$g==9||$g==11){
									if($h>30){
										$h=$h-30;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							else if($g==02){
									if($h>28&&($a%4!=0)){
									$h=$h-28;$g++;$g=sprintf("%02d",$g);
									}else {$h=$h-29;$g++;$g=sprintf("%02d",$g);}
								}
								
							else if($g==1||$g==3||$g==5||$g==7||$g==8||$g==10||$g==12||$g==00){
								if($h>31){
										$h=$h-31;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							$stampexp=$a.$g.$h;
							}
							
							else{
							$a=substr($starter, -8, 4);
							$g=substr($starter, -4, 2);
							$h=substr($starter, -2, 2);
							if($g==4||$g==6||$g==9||$g==11){
									if($h>30){
										$h=$h-30;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							else if($g==02){
									if($h>28&&($a%4!=0)){
									$h=$h-28;$g++;$g=sprintf("%02d",$g);
									}else {$h=$h-29;$g++;$g=sprintf("%02d",$g);}
								}
								
							else if($g==1||$g==3||$g==5||$g==7||$g==8||$g==10||$g==31||$g==00){
								if($h>31){
										$h=$h-31;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							
							$stampexp=$a.$g.$h;
							}
							
							if($stampexp==date('Ymd')){
						$result= mysqli_query($conn,"update calendar set StartDate='".date('Y/m/d')."'");	
							}
								
			}
			
			}
							
							if(isset($_GET['d1'])){
								$d1=$_GET['d1'];
							}else $d1=0;
							if(isset($_GET['d2'])){
								$d2=$_GET['d2'];
							}else $d2=0;

							if($d1!=0){
								$d1=preg_replace('~/~', '', $d1); $d2=preg_replace('~/~', '', $d2);
								$result =mysqli_query($conn,"select * from calendar where DateStamp>='".$d1."' and DateStamp<='".$d2."' order by Pat_id desc");
							}else{
								$result =mysqli_query($conn,"select * from calendar where DateStamp>='".date('Ymd')."' order by Pat_id desc");
							}

							
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
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
				,'".stripslashes($row['ReccurPattern'])."','".stripslashes($row['ReccurStart'])."','".$rece."','".stripslashes($row['Pat_name'])."','".stripslashes($row['Pat_id'])."')\">".$reason."-".stripslashes($row['Location'])."</a>";
					echo'<div class="cleaner"></div>';
							}
							
							
				
							
			echo'</div></div>
			
			
			<div id="encounters" style="float:left;height:233px; width:501px; background:#fff; margin:0 5px 5px 5px;padding-left:0px; border-radius:0px">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 5px">
							<h5 style="text-align:center">Summaries</h5>
							</div>
							';
							
				echo'
				<div id="tabs" style="width:488px; height:198px; float:left; margin:0px 5px 0 0px">
				<ul>
				<li><a href="#tabs-1">Income Summary</a></li>
				<li><a href="#tabs-3">Ledgers Summary</a></li>
				<li><a href="#tabs-2">Patients Visits</a></li>
				</ul>
			
			<div id="tabs-1">';
			
		$pre=array();
		$result =mysqli_query($conn,"select * from sales where Status!=0 order by TransNo desc limit 0,3000");
		$num_results = mysqli_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
					$pre[]=stripslashes($row['Date']);
					}
				$pre = array_unique($pre);
				$pro=array(array()); $arr1=array();$arr2=array();$arr3=array();
				foreach ($pre as $key => $val) {
				$result =mysqli_query($conn,"select * from sales where Date='".$val."' and Status!=0");
				$num_results = mysqli_num_rows($result);
				$tot=0;$toc=0;
					for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								$tot+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
								$toc+=preg_replace('~,~', '', stripslashes($row['TotalCost']));
					}
					$date=$val;
					$a=substr($date,0,4);
					$b=substr($date,5,2);
					$c=substr($date,8,2);
					$d=$c.'-'.$b;
					$tot=round($tot/1000);$toc=round($toc/1000);
					$arr1[]='"'.$d.'"';	$arr2[]=$tot;	$arr3[]=$toc;	
				}
				$arr1=array_slice($arr1,0,7);$arr2=array_slice($arr2,0,7);$arr3=array_slice($arr3,0,7);
				$arr1=array_reverse($arr1);$arr2=array_reverse($arr2);$arr3=array_reverse($arr3);
				$pa=implode($arr1,",");$xy=implode($arr2,",");$ab=implode($arr3,",");
	echo'<canvas id="line" height="140" width="450"></canvas>
<script>

		var lineChartData = {
			labels : ['.$pa.'],
			datasets : [
				{
					fillColor : "#0ff",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$xy.']
				},
				{
					fillColor : "#f00",
					strokeColor : "#00085b2",
					pointColor : "#000",
					pointStrokeColor : "#fff",
					data : ['.$ab.']
				}
			]
			
		}

	new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
	
	</script>
<p style="margin-top:0px"><input type="button" style="background:#0ff; height:10px; width:10px;"/><small style="margin-top:-15px">Income</small>
		<input type="button" style="background:#f00; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Costs</small></p>	';	

		
		
		
		echo'</div>
			
			<div id="tabs-2">';
							$result =mysqli_query($conn,"select * from encounters order by Entry_id desc limit 0,7");
							$num_results = mysqli_num_rows($result);
							$arr4=$arr5=$arr6=$arr7=array();	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr4[]='"'.stripslashes($row['Month']).'"';
								$arr5[]=stripslashes($row['Revisit']);
								$arr6[]=stripslashes($row['Review']);
								$arr7[]=stripslashes($row['NewPatient']);
								
				
				}	
			$arr4=array_reverse($arr4);$arr5=array_reverse($arr5);$arr6=array_reverse($arr6);$arr7=array_reverse($arr7);			
			$ka=implode($arr4,",");$la=implode($arr5,",");$ma=implode($arr6,",");$na=implode($arr7,",");					
			echo'<canvas id="bar" height="140" width="450"></canvas>
		

	<script>

		var barChartData = {
			labels : ['.$ka.'],
			datasets : [
				{
					fillColor : "#0ff",
					strokeColor : "#ccc",
					data : ['.$na.']
				},
				
				{
					fillColor : "#f00",
					strokeColor : "#ccc",
					data : ['.$la.']
				},
				{
					fillColor : "#333",
					strokeColor : "#ccc",
					data : ['.$ma.']
				}
			]
			
		}

	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	
	</script>
			
		<p style="margin-top:0px"><input type="button" style="background:#0ff; height:10px; width:10px;"/><small style="margin-top:-15px">New Patients</small>	
		<input type="button" style="background:#f00; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Revisits</small>	
		<input type="button" style="background:#333; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Reviews</small>	</p>	
			
			</div>
		
		<div id="tabs-3">';
		
		$a=$b=$c=$d=$e=0;
							$result =mysqli_query($conn,"select * from ledgers where type='Asset'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$a+=stripslashes($row['bal']);
							}
							$result =mysqli_query($conn,"select * from ledgers where type='Expense'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$b+=stripslashes($row['bal']);
							}
							$result =mysqli_query($conn,"select * from ledgers where type='Revenue'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$c+=stripslashes($row['bal']);
							}
							$result =mysqli_query($conn,"select * from ledgers where type='Equity'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$d+=stripslashes($row['bal']);
							}
							$result =mysqli_query($conn,"select * from ledgers where type='Liability'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$e+=stripslashes($row['bal']);
							}
		echo'<canvas id="doughnut" height="140" width="450"></canvas>
		<script>

		var doughnutData = [
				{
					value: '.$a.',
					color:"#F7464A"
				},
				{
					value : '.$b.',
					color : "#46BFBD"
				},
				{
					value : '.$c.',
					color : "#FDB45C"
				},
				{
					value : '.$d.',
					color : "#949FB1"
				},
				{
					value : '.$e.',
					color : "#4D5360"
				}
			
			];
			new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData);
	</script>
	<p style="margin-top:0px"><input type="button" style="background:#F7464A; height:10px; width:10px;"/><small style="margin-top:-15px">Assets</small>	
		<input type="button" style="background:#46BFBD; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Expenses</small>	
		<input type="button" style="background:#FDB45C; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Revenue</small>	
			<input type="button" style="background:#949FB1; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Equity</small>	<input type="button" style="background:#4D5360; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Liability</small>
		</p>';

		
			
		
		echo'</div>
		
		
		</div></div>
		
			<div id="mytasks" style="float:left;height:233px; width:501px; background:#fff; margin:0 0px 5px 0;padding-left:0px; border-radius:0px" onmouseover="showtaskadd();" onmouseout="hidetaskadd();">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0">
							<h5 style="text-align:center">Personal Manager</h5>
							</div>
										<img src="images/refresh.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="refreshmytasks()"  title="Refresh"/>
						
				<div id="tabs2" style="width:493px; height:200px; float:left; margin:0px 5px 0 0px">
				<ul>
				<li><a href="#tabs-4">Messages</a><img src="images/print.png" style="width:20px; height:20px; float:right; margin:4px 10px 0 0; cursor:pointer" onclick="window.open(\'output.php?id=3&reg='.$username.'\')"  title="Export Messages Report"/>
				<img src="images/plus.png" style="width:20px; height:20px; float:right; margin:4px 10px 0 0; cursor:pointer" onclick="createnewmess()"  title="Create Message"/></li>
				<li><a href="#tabs-5">My To do List</a><img src="images/plus.png" style="width:20px; height:20px; float:right; margin:4px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Task" id="newcalendar"/></li>
				</ul>
			
			<div id="tabs-5">
							<div style="height:120px; overflow-y:auto">';
							$result =mysqli_query($conn,"select * from mytasks where status=1 and User_id=".$userid." order by Event_id desc");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$eid=stripslashes($row['Event_id']);
								$reason=stripslashes($row['Reason']);
				echo"<div id=\"task".$i."\">";
				echo'<input type="checkbox" style="float:left; margin:8px 0px 0 10px" onclick="checktask('.$i.','.$eid.');"/>';
				echo"<a class=\"leb\" style=\"margin-left:10px; cursor:pointer\" 
				onclick=\"viewtask(".stripslashes($row['Event_id']).",'".stripslashes($row['Reason'])."','".stripslashes($row['Category'])."','".stripslashes($row['Location'])."'
				,'".stripslashes($row['TaskStatus'])."','".stripslashes($row['Priority'])."','".stripslashes($row['Complete'])."','".stripslashes($row['StartDate'])."','".stripslashes($row['StartTime'])."'
				,'".stripslashes($row['DueDate'])."','".stripslashes($row['DueTime'])."','".stripslashes($row['ReminderStatus'])."','".stripslashes($row['ReminderDate'])."','".stripslashes($row['ReminderTime'])."'
				,'".stripslashes($row['Status'])."','".stripslashes($row['User_id'])."','".stripslashes($row['Notes'])."')\">".$reason."</a>";
					echo'<div class="cleaner"></div>
					</div>';
							}
								
			echo'</div>
			<form action="#" method="get">
		<div id="taskadd" class="input_field" style="display:none;float:left;margin:5px 10px 10px 0px;width:460px; padding:0; background:#fff">
		<input type="text" placeholder="Type a task and press Enter..." name="keyword" id="taskfield"  class="input_field" style="border:0; float:left;width:400px; font-size:11px;background:#fff"';echo"/>";
		echo'<input type="text"  id="" class="" style="font-size:11px; display:none; width:50px"/>';
				echo"<img src=\"images/back2.png\" onclick=\"posttask('".$userid."')\" height=\"24\" width=\"24\" id=\"searchbutton\" style=\"margin:3px 5px 0 0; float:right; cursor:pointer\">
				</div></form>";
			echo'</div>
			<div id="tabs-4">
							<div style="height:150px; overflow-y:auto">';
							$result =mysqli_query($conn,"select * from messages where sender='".$username."' or name='".$username."' order by id desc limit 0,100");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$id=stripslashes($row['id']);
								$message=stripslashes($row['message']);
								$from=stripslashes($row['sender']);
								$name=stripslashes($row['name']);
								$sta=stripslashes($row['status']);
								if($from==$username){
									$im="images/redarrow.png";$in=$name;
								}else {$im="images/right3green.png";$in=$from;}
				echo"<div id=\"mes".$i."\">";
				echo"<div class=\"cleaner\"></div><img src=\"".$im."\" style=\"width:20px; height:20px; float:left; margin-top:2px\"/>";
				if($sta==0&&$name==$username){echo"
				<a class=\"leb\" id=\"lebo".$i."\" style=\"margin-left:10px; cursor:pointer; font-weight:bold; background:#3f9; padding:2px\" >".$message."";
				echo'<br/><input id="check'.$i.'" type="checkbox" style="float:right; margin:0px 0px 0 10px" onclick="checkmess('.$i.','.$id.');" title="Mark as Read"/><small style="float:right; font-weight:normal">['.stripslashes($row['date']).']-<b style="color:#f00">'.$in.'</b></small></a>';
				}else{echo"<a class=\"leb\" style=\"margin-left:10px; cursor:pointer\" >".$message."";echo'<br/><small style="float:right; font-weight:normal">['.stripslashes($row['date']).']-<b style="color:#f00">'.$in.'</b></small></a>';}
				echo'</div><div class=\"cleaner_h5\"></div>';
							}
				
				echo'</div></div>
			</div></div>
			<div id="recentpat" style="float:left;height:233px; width:501px; background:#fff; margin:0 5px 5px 5px;padding-left:0px; border-radius:0px">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0">
							<h5 style="text-align:center">Queue Manager<img src="images/print.png" style="width:20px; height:20px; float:right; margin:-3px 10px 0 0; cursor:pointer" onclick="window.open(\'output.php?id=4&reg=1\')"  title="Export Queue Report"/></h5>
							</div>
							
					<div id="tabs3" style="width:493px; height:200px; float:left; margin:0px 5px 0 0px">
					<ul>
				<li><a href="#tabs-6">Current Queue</a></li>
				<li><a href="#tabs-7">Average Time</a></li>
				<li><a href="#tabs-8">Efficiency Chart</a></li>
				<li><a href="#tabs-9">Efficiency Pie Chart</a></li>
				</ul>
					<div id="tabs-6">
				
				
							<div id="title" style="margin-left:5px; font-color:#fff">
									<div id="figure1" style="margin-left:0px; width:145px">Patient</div>
									<div id="figure1" style="width:35px">Start</div>
									<div id="figure1"  style="width:35px">Triage</div>
									<div id="figure1"  style="width:35px">Cons</div>
									<div id="figure1"  style="width:35px">Lab</div>
									<div id="figure1"  style="width:35px">Pharm</div>
									<div id="figure1"  style="width:35px">Rad</div>
									
									</div>
								<div class="cleaner"></div>
								<div id="inside" style="height:130px;overflow-y:auto;margin-left:5px; font-size:10px">';
							$resultb =mysqli_query($conn,"select * from queue where id=1");
							$rowb=mysqli_fetch_array($resultb);
							;


	$result =mysqli_query($conn,"select * from newprescription where Stamp='".date('Ymd')."' order by PrescId desc");
	$num_results = mysqli_num_rows($result);	$a=$b=$c=$d=$e='-';$v=$w=$x=$y=$z=0;$k=$l=$m=$n=$o=0;
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
if(stripslashes($row['TriageTime'])!=''){
$a=timeconvert(stripslashes($row['TriageTime']),stripslashes($row['StartTime']));
$v+=$a;$k++;
}
if(stripslashes($row['ConsTime'])!=''&&stripslashes($row['TriageTime'])!=''){
$b=timeconvert(stripslashes($row['ConsTime']),stripslashes($row['TriageTime']));
$w+=$b;$l++;
}
if(stripslashes($row['LabTime'])!=''&&stripslashes($row['ConsTime'])!=''){
$c=timeconvert(stripslashes($row['LabTime']),stripslashes($row['ConsTime']));
$x+=$c;$m++;
}
if(stripslashes($row['RadTime'])!=''&&stripslashes($row['ConsTime'])!=''){
$d=timeconvert(stripslashes($row['RadTime']),stripslashes($row['ConsTime']));
$y+=$d;$n++;
}
if(stripslashes($row['PharmTime'])!=''&&stripslashes($row['ConsTime'])!=''){
$e=timeconvert(stripslashes($row['PharmTime']),stripslashes($row['ConsTime']));
$z+=$e;$o++;
}

								echo'<div id="normal">';
		echo"<div id=\"figure2t\" style=\"width:149px;height:16px; overflow:hidden; background:#fff; font-size:11px\">".stripslashes($row['PatName'])."</div>
										<div id=\"figure2t\" style=\"width:39px; background:#fff; font-size:11px; padding-left:3px\">".stripslashes($row['StartTime'])." </div>";
										
										if($a=='-'){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#ff3; font-size:11px; padding-left:1px\"></div>";	
										}
										else if(stripslashes($rowb['triage'])<$a){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#f00; font-size:11px; padding-left:1px\">".stripslashes($row['TriageTime'])."</div>";}
										else {echo"<div id=\"figure2t\" style=\"width:39px; background:#0ff; font-size:11px; padding-left:1px\">".stripslashes($row['TriageTime'])."</div>";}
										
										
										if($b=='-'){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#ff3; font-size:11px; padding-left:1px\"></div>";	
										}
										else if(stripslashes($rowb['cons'])<$b){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#f00; font-size:11px; padding-left:1px\">".stripslashes($row['ConsTime'])."</div>";}
										else {echo"<div id=\"figure2t\" style=\"width:39px; background:#0ff; font-size:11px; padding-left:1px\">".stripslashes($row['ConsTime'])."</div>";}

										if($c=='-'&&stripslashes($row['Reclab'])==''){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#fff; font-size:11px; padding-left:1px\"></div>";	
										}
										else if($c=='-'&&stripslashes($row['Reclab'])==1){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#ff3; font-size:11px; padding-left:1px\"></div>";	
										}
										else if(stripslashes($rowb['lab'])<$c){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#f00; font-size:11px; padding-left:1px\">".stripslashes($row['LabTime'])."</div>";}
										else {echo"<div id=\"figure2t\" style=\"width:39px; background:#0ff; font-size:11px; padding-left:1px\">".stripslashes($row['LabTime'])."</div>";}
										if($e=='-'&&stripslashes($row['RecPharm'])==''){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#fff; font-size:11px; padding-left:1px\"></div>";	
										}
										else if($e=='-'&&stripslashes($row['RecPharm'])==1){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#ff3; font-size:11px; padding-left:1px\"></div>";	
										}else if(stripslashes($rowb['pharm'])<$e){
											echo"<div id=\"figure2t\" style=\"width:39px; background:#f00; font-size:11px; padding-left:1px\">".stripslashes($row['PharmTime'])."</div>";}
										else {echo"<div id=\"figure2t\" style=\"width:39px; background:#0ff; font-size:11px; padding-left:1px\">".stripslashes($row['PharmTime'])."</div>";}
										
										if($d=='-'&&stripslashes($row['Recrad'])==''){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#fff; font-size:11px; padding-left:1px\"></div>";	
										}
										else if($d=='-'&&stripslashes($row['Recrad'])==1){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#ff3; font-size:11px; padding-left:1px\"></div>";	
										}
										else if(stripslashes($rowb['rad'])<$d){
										echo"<div id=\"figure2t\" style=\"width:39px; background:#f00; font-size:11px; padding-left:1px\">".stripslashes($row['RadTime'])."</div>";}
										else {echo"<div id=\"figure2t\" style=\"width:39px; background:#0ff; font-size:11px; padding-left:1px\">".stripslashes($row['RadTime'])."</div>";}
										echo"</div><div class=\"cleaner\"></div>";
							}
								
			echo'</div>	
									
									
									
						</div>
						
						<div id="tabs-7">';
						$arr1=$arr2=$arr3=$arr4=array();
						if($k==0){$k=1;}if($l==0){$l=1;}if($m==0){$m=1;}if($n==0){$n=1;}if($o==0){$o=1;}
$a=$v/$k;
$b=$w/$l;
$c=$x/$m;
$d=$y/$n;
$e=$z/$o;



					$arr1[]="'Triage'";$arr1[]="'Consultation'";$arr1[]="'Laboratory'";$arr1[]="'Pharmacy'";$arr1[]="'Radiology'";
					$arr2[]=$a;$arr2[]=$b;$arr2[]=$c;$arr2[]=$e;$arr2[]=$d;
					$xx=implode($arr1,",");$yy=implode($arr2,",");
	
	echo'<canvas id="line2" height="140" width="450"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$xx.'],
			datasets : [
				{
					fillColor : "#0ff",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$yy.']
				}
			]
			
		}

	new Chart(document.getElementById("line2").getContext("2d")).Line(lineChartData);
	</script>
						</div>
						
						<div id="tabs-8">';
	
	$k=((stripslashes($rowb['triage'])-$a)*100)/1;
	$l=((stripslashes($rowb['cons'])-$b)*100)/1;
	$m=((stripslashes($rowb['lab'])-$c)*100)/1;
	$n=((stripslashes($rowb['rad'])-$d)*100)/1;
	$o=((stripslashes($rowb['pharm'])-$e)*100)/1;
	$arr3[]=$k;$arr3[]=$l;$arr3[]=$m;$arr3[]=$o;$arr3[]=$n;
	$zz=implode($arr3,",");
	
	
	echo'<canvas id="bar2" height="140" width="450"></canvas>
	
<script>

		var barChartData = {
			labels : ['.$xx.'],
			datasets : [
				
				
				{
					fillColor : "#f00",
					strokeColor : "#ccc",
					data : ['.$zz.']
				}
			]
			
		}

	new Chart(document.getElementById("bar2").getContext("2d")).Bar(barChartData);
	
	</script>
					</div>
						
						<div id="tabs-9">';
						
						$g=((stripslashes($rowb['triage'])-$a)*100);if($g<0){$g=0;}
	$h=((stripslashes($rowb['cons'])-$b)*100);if($h<0){$h=0;}
	$i=((stripslashes($rowb['lab'])-$c)*100);if($i<0){$i=0;}
	$j=((stripslashes($rowb['rad'])-$d)*100);if($j<0){$j=0;}
	$k=((stripslashes($rowb['pharm'])-$e)*100);if($k<0){$k=0;}
	
	echo'<canvas id="canvas" height="140" width="450"></canvas>


	<script>

		var pieData = [
				{
					value: '.$g.',
					color:"#F7464A"
				},
				{
					value: '.$h.',
					color : "#46BFBD"
				},
				{
					value: '.$i.',
					color : "#FDB45C"
				},
				{
					value: '.$k.',
					color : "#949FB1"
				},
				{
					value: '.$j.',
					color : "#4D5360"
				}
			
			
			];

	var myPie = new Chart(document.getElementById("canvas").getContext("2d")).Pie(pieData);
	
	</script>
	<p style="margin-top:0px"><input type="button" style="background:#F7464A; height:10px; width:10px;"/><small style="margin-top:-15px">Triage</small>	
		<input type="button" style="background:#46BFBD; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Consultation</small>	
		<input type="button" style="background:#FDB45C; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Laboratory</small>	
			<input type="button" style="background:#949FB1; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Radiology</small>	<input type="button" style="background:#4D5360; height:10px; width:10px; margin-left:10px"/><small style="margin-top:-15px">Pharmacy</small>
		</p>
						
						</div>
						
						
						
					</div>
					
					
			</div>
										</div> 	</div> ';
									
							
										
							break;	
							
							case 109:
							echo'
							<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0">
							<h5 style="text-align:center">Appointments Reminders</h5>
							</div>
							<img src="images/refresh.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="refreshtoday()" title="Refresh"/>
					<img src="images/plus.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Task" id="newevent"/>
							
					<div style="overflow-y:auto;height:200px; ">';
					//calculate next reccur date
			$result =mysqli_query($conn,"select * from calendar where Status=1 and ReccurenceStatus=1 and '".date('Ymd')."'<=ReccurEnd and StartDate!='".date('Y/m/d')."'");
			$num_results = mysqli_num_rows($result);
			if($num_results>0){	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							
							$starter=preg_replace('~/~', '', stripslashes($row['StartDate']));
							
							
							$a=substr($starter, 0, 4);
							$b=substr($starter, 4, 4);
							$starter=$a.$b;
							$c=stripslashes($row['ReccurPattern']);
							$starter+=$c;
							
							if($b>1231){
								$a+=1;
								$d=$b-1200;
								$d=sprintf("%04d",$d);
								$g=substr($d, -4, 2);
								$h=substr($d, -2, 2);
							if($g==4||$g==6||$g==9||$g==11){
									if($h>30){
										$h=$h-30;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							else if($g==02){
									if($h>28&&($a%4!=0)){
									$h=$h-28;$g++;$g=sprintf("%02d",$g);
									}else {$h=$h-29;$g++;$g=sprintf("%02d",$g);}
								}
								
							else if($g==1||$g==3||$g==5||$g==7||$g==8||$g==10||$g==12||$g==00){
								if($h>31){
										$h=$h-31;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							$stampexp=$a.$g.$h;
							}
							
							else{
							$a=substr($starter, -8, 4);
							$g=substr($starter, -4, 2);
							$h=substr($starter, -2, 2);
							if($g==4||$g==6||$g==9||$g==11){
									if($h>30){
										$h=$h-30;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							else if($g==02){
									if($h>28&&($a%4!=0)){
									$h=$h-28;$g++;$g=sprintf("%02d",$g);
									}else {$h=$h-29;$g++;$g=sprintf("%02d",$g);}
								}
								
							else if($g==1||$g==3||$g==5||$g==7||$g==8||$g==10||$g=12||$g==00){
								if($h>31){
										$h=$h-31;
										$g++;$g=sprintf("%02d",$g);
									}
							}
							
							$stampexp=$a.$g.$h;
							}
							
							if($stampexp==date('Ymd')){
						$result= mysqli_query("update calendar set StartDate='".date('Y/m/d')."'");	
							}
								
			}
			}
				$result =mysqli_query($conn,"select * from calendar where DateStamp>='".date('Ymd')."' order by Pat_id desc");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
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
							echo'</div>';
							break;
							
							case 110:
							echo'<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0"><h5 style="text-align:center">Encounters</h5></div>
							<img src="images/refresh.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="refreshencounters()"  title="Refresh"/>';
							
				echo'<a class="leb" style="font-weight:bold; margin-left:10px ">Month</a>
				<a class="leb" style="margin-left:50px; font-weight:bold;">New Patients</a>
				<a class="leb" style="margin-left:70px; font-weight:bold;">Revisits</a>
				<a class="leb" style="margin-left:80px; font-weight:bold;">Reviews</a>
					<div class="cleaner"></div>';
							$result =mysqli_query($conn,"select * from encounters order by Entry_id desc limit 0,5");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$mon=stripslashes($row['Month']);
								$revisit=stripslashes($row['Revisit']);
								$review=stripslashes($row['Review']);
								$newp=stripslashes($row['NewPatient']);
				if(($i%2)==0){				
				echo'<div style="width:auto;background:#f0f0f0; height:25px; margin:0 10px 2px 10px">';
				}
				else{
				echo'<div style="width:auto;background:#fff; height:25px; margin:0 10px 2px 10px">';	
				}
				echo'<a class="leb" style="margin-left:2px; ">'.$mon.'</a>
				<a class="leb" style="margin-left:80px;">'.$newp.'</a>
				<a class="leb" style="margin-left:100px; ">'.$revisit.'</a>
				<a class="leb" style="margin-left:120px;">'.$review.'</a></div>
				<div class="cleaner"></div>';
				}
							break;
							
							case 111:
							echo'<div id="mytasks" style="float:left;height:233px; width:501px; background:#fff; margin:0 0px 5px 0;padding-left:0px; border-radius:0px" onmouseover="showtaskadd();" onmouseout="hidetaskadd();">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0">
							<h5 style="text-align:center">Personal Manager</h5>
							</div>
							<img src="images/refresh.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="refreshmytasks()"  title="Refresh"/>		
				<div id="tabs2" style="width:493px; height:200px; float:left; margin:0px 5px 0 0px">
				<ul>
				<li><a href="#tabs-4">Messages</a><img src="images/plus.png" style="width:20px; height:20px; float:right; margin:4px 10px 0 0; cursor:pointer" onclick="createnewmess()"  title="Create Message"/></li>
				<li><a href="#tabs-5">My To do List</a><img src="images/plus.png" style="width:20px; height:20px; float:right; margin:4px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Task" id="newcalendar"/></li>
				</ul>
			
			<div id="tabs-5">
							<div style="height:120px; overflow-y:auto">';
							$result =mysqli_query($conn,"select * from mytasks where status=1 and User_id=".$userid." order by Event_id desc");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$eid=stripslashes($row['Event_id']);
								$reason=stripslashes($row['Reason']);
				echo"<div id=\"task".$i."\">";
				echo'<input type="checkbox" style="float:left; margin:8px 0px 0 10px" onclick="checktask('.$i.','.$eid.');"/>';
				echo"<a class=\"leb\" style=\"margin-left:10px; cursor:pointer\" 
				onclick=\"viewtask(".stripslashes($row['Event_id']).",'".stripslashes($row['Reason'])."','".stripslashes($row['Category'])."','".stripslashes($row['Location'])."'
				,'".stripslashes($row['TaskStatus'])."','".stripslashes($row['Priority'])."','".stripslashes($row['Complete'])."','".stripslashes($row['StartDate'])."','".stripslashes($row['StartTime'])."'
				,'".stripslashes($row['DueDate'])."','".stripslashes($row['DueTime'])."','".stripslashes($row['ReminderStatus'])."','".stripslashes($row['ReminderDate'])."','".stripslashes($row['ReminderTime'])."'
				,'".stripslashes($row['Status'])."','".stripslashes($row['User_id'])."','".stripslashes($row['Notes'])."')\">".$reason."</a>";
					echo'<div class="cleaner"></div>
					</div>';
							}
								
			echo'</div>
			<form action="#" method="get">
		<div id="taskadd" class="input_field" style="display:none;float:left;margin:5px 10px 10px 0px;width:460px; padding:0; background:#fff">
		<input type="text" placeholder="Type a task and press Enter..." name="keyword" id="taskfield"  class="input_field" style="border:0; float:left;width:400px; font-size:11px;background:#fff"';echo"/>";
		echo'<input type="text"  id="" class="" style="font-size:11px; display:none; width:50px"/>';
				echo"<img src=\"images/back2.png\" onclick=\"posttask('".$userid."')\" height=\"24\" width=\"24\" id=\"searchbutton\" style=\"margin:3px 5px 0 0; float:right; cursor:pointer\">
				</div></form>";
			echo'</div>
			<div id="tabs-4">
							<div style="height:150px; overflow-y:auto">';
							$result =mysqli_query($conn,"select * from messages where sender='".$username."' or name='".$username."' order by id desc LIMIT 0,50");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$id=stripslashes($row['id']);
								$message=stripslashes($row['message']);
								$from=stripslashes($row['sender']);
								$name=stripslashes($row['name']);
								$sta=stripslashes($row['status']);
									if($from==$username){
									$im="images/redarrow.png";$in=$name;
								}else {$im="images/right3green.png";$in=$from;}
				echo"<div id=\"mes".$i."\">";
				echo"<div class=\"cleaner\"></div><img src=\"".$im."\" style=\"width:20px; height:20px; float:left; margin-top:2px\"/>";
				if($sta==0&&$name==$username){echo"
				<a class=\"leb\" id=\"lebo".$i."\" style=\"margin-left:10px; cursor:pointer; font-weight:bold; background:#3f9; padding:2px\" >".$message."";
				echo'<br/><input id="check'.$i.'" type="checkbox" style="float:right; margin:0px 0px 0 10px" onclick="checkmess('.$i.','.$id.');" title="Mark as Read"/><small style="float:right; font-weight:normal">['.stripslashes($row['date']).']-<b style="color:#f00">'.$in.'</b></small></a>';
				}else{echo"<a class=\"leb\" style=\"margin-left:10px; cursor:pointer\" >".$message."";echo'<br/><small style="float:right; font-weight:normal">['.stripslashes($row['date']).']-<b style="color:#f00">'.$in.'</b></small></a>';}
				echo'</div><div class=\"cleaner_h5\"></div>';
							}
				
				echo'</div></div>
			</div></div>';
							break;
							
							case '111.1':
							$pre=$_GET['pre'];
							$a='prelabel';
							if(isset($_SESSION[$a])){
							$max=count($_SESSION[$a]);
							$_SESSION[$a][$max]=$pre;
							}
							
							else{
							$_SESSION[$a]=array();
							$_SESSION[$a][0]=$pre;
							}
							echo'<script>area29 = new nicEditor({fullPanel : true,maxHeight :120}).panelInstance("prelabel");</script>';
echo'<textarea id="prelabel" style="float:left;margin-left:0px;height:110px; width:310px; border-color:#f00;  overflow:scroll" class="alergy"></textarea>';
							break;
							
							case 112:
							echo'<div style="width:auto; height:25px; background:#f0f0f0; border-radius:0px 0px 0 0"><h5 style="text-align:center">Recent Patients</h5></div>
				<img src="images/refresh.png" style="width:20px; height:20px; float:right; margin:-22px 10px 0 0; cursor:pointer" onclick="refreshpatients()"  title="Refresh"/>';
							if(isset($_SESSION['recent'])){
								if(is_array($_SESSION['recent'])){
								$max=count($_SESSION['recent']);
								$least=0;
								if($max>=7){$least=$max-7;}
									
									for($i=$max-1;$i>=$least;$i--){
									$param=$_SESSION['recent'][$i][0];
									$des=$_SESSION['recent'][$i][1];
									$regn=$_SESSION['recent'][$i][2];
									if($des==2){  
									echo"
<p style=\"font-size:11px; color:#333; margin-left:10px; cursor:pointer;\"  onclick=\"window.open('http://$server/q-afya/patreport.php?id=1&reg=".$regn."')\">";
				echo"<img src=\"images/bullet.png\" style=\"width:12px; height:12px; margin:0 3px -2px 0\">".$param."</p>";
									
										}
									}
							}
							}
								
			echo'</div>';

							break;
					
					case 113:
					
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Pharmacy Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							$resultc =mysqli_query($conn,"select * from sales where RcptNo=".$pid."");
							$rowc=mysqli_fetch_array($resultc);
							$rcptno=stripslashes($rowc['RcptNo']);
							$cname=stripslashes($rowc['ClientName']);
							
							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Pharmacy-Dispense Drugs</h2>";
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help15()\"/></div>";														
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
									<div id="personal" style="width:490px">
								<h5>Prepare Prescription Labels</h5>
									<script>area29 = new nicEditor({fullPanel : true,maxHeight :120}).panelInstance("prelabel");</script>';
									echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:0px 20px 0 0px; float:right\" title=\"Prepare Label\"onclick=\"addlabel()\"/>";
echo'<div id="prelab"><textarea id="prelabel" style="float:left;margin-left:0px;height:110px; width:310px; border-color:#f00;  overflow:scroll" class="alergy"></textarea></div>
<div class="cleaner_h10"></div>';
echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"savelabel()\"/>";
echo'</div>
								<div id="personal" style="overflow:auto; width:491px">
								<h5>Prescription Details</h5>
								<a class="labels">Patient Name:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.$cname.'" disabled="disabled" style="float:left;border-color:#f00; width:200px" /> 
								<h5>Drugs Checklist</h5>';
								$result =mysqli_query($conn,"select * from sales where RcptNo='".$pid."' and Category='PHARMACY'");
								$num_results = mysqli_num_rows($result);
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								echo'<input type="checkbox" value="1" name="check'.$i.'" style="float:left; margin:8px 0 0 5px"/><a class="labels" style="margin-left:5px">'.stripslashes($row['ItemName']). '  ['.stripslashes($row['Qty']).']</a><div class="cleaner"></div>';
								}
								echo'<div class="cleaner_h5"></div>
								<h5>Submit</h5>';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"subdrugs('".$pid."','".$num_results."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="float:left;margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 <div id="newstudent" style="float:left; margin-left:20px;height:20px; "></div>
								<div class="cleaner_h5"></div>
								</div>
							
   							';
					break;
					
					case 114:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Patient Chart Panel.Patient No:".$_GET['param']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$regn=$_GET['param'];
							$result =mysqli_query($conn,"select * from patients where pntno='".$regn."'");
							if( mysqli_num_rows($result)==0){
			echo "<script>editpatient(114);</script>";
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
			
						echo"<script>window.open('patreport.php?id=1&reg=' + '".$regn."');</script>";
		
										
							break;
					case 115:
						
echo'<script>
		$(function() {
			
			$( "#warddialog" ).dialog({autoOpen: false,modal: true});
			});	
		
        </script>';
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatients Manager Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
$result =mysqli_query($conn,"select * from accesstbl where AccessCode=172");
$row=mysqli_fetch_array($result);
$var=stripslashes($row[$usertype]);

							echo'
							<div id="newstude" style="width:996px">
								<div id="findstude"  style="width:996px"><h5 style="margin-left:10px">Inpatients Manager</h5>';
echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help16()\"/></div>";								
	echo'<div id="results" style="height:420px;width:990px;overflow-y:scroll">
	';
			 				$ward=array();
			 				
							
			if($userdep=='MATERNITY'){
			$result =mysqli_query($conn,"select * from wardbeds where wardtype='MATERNITY'");
			}
			else if($userdep=='MALE_WARD'){
			$result =mysqli_query($conn,"select * from wardbeds where wardtype='MALE_WARD'");	
			}
			else if($userdep=='PAEDIATRICS'){
			$result =mysqli_query($conn,"select * from wardbeds where wardtype='PAEDIATRICS'");	
			}
			else if($userdep=='FEMALE_WARD'){
			$result =mysqli_query($conn,"select * from wardbeds where wardtype='FEMALE_WARD'");	
			}
				else{
			$result =mysqli_query($conn,"select * from wardbeds order by wardtype");
			}
			 				
							$num_results = mysqli_num_rows($result);	
						
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$ward[]=stripslashes($row['wardtype']);
								}
								$ward = array_unique($ward);
								
		
						foreach ($ward as $key => $val) {
						echo'<h2 style="text-align:center">'.$val.' Ward</h5>';
							$roomno=array();
							$result =mysqli_query($conn,"select * from wardbeds where wardtype='".$val."' order by roomno");
							$num_results = mysqli_num_rows($result);	
								for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$roomno[stripslashes($row['roomno'])]=stripslashes($row['type']);
								}
				foreach ($roomno as $key1 => $val1) {
				echo'<div style="width:970px; min-height:200px; background:#f0f0f0; BORDER-RADIUS:0PX; position:relative;float:left">';
				echo'<h1 style="text-align:center; font-size:15px; font-weight:bold;">Room '.$key1.'; Type:'.$val1.'</h1>
				<div class="cleaner_h5"></div>';
				$resultb =mysqli_query($conn,"select * from wardbeds where roomno='".$key1."' and wardtype='".$val."' order by bedno");
							$num_resultsb = mysqli_num_rows($resultb);	
							for ($b=0; $b <$num_resultsb; $b++) {
								$rowb=mysqli_fetch_array($resultb);
				echo'<div style="width:126.5px; height:160px; background:#666; BORDER-RADIUS:0PX; float:left;position:relative; margin-left:10px; margin-bottom:10px"  >
				<div style="width:116.5px; height:20px; background:#fff; BORDER-RADIUS:0PX; margin:5px 5px 0 5px"><p class="labels" style="text-align:center; margin:2px 0px 0 37px">Bed '.stripslashes($rowb['bedno']).'</p></div>';
				if(stripslashes($rowb['status'])==0){
					echo"<div style=\"width:116.5px; height:125px; BORDER-RADIUS:0PX; margin:-5px 5px 5px 5px\" class=\"droppable\">
					<img src=\"images/plus.png\" style=\"width:60px; height:60px; float:right; margin:30px 33px 0 0; cursor:pointer\"  title=\"Admit Patient\" onclick=\"openward('".stripslashes($rowb['wardtype'])."','".stripslashes($rowb['type'])."','".stripslashes($rowb['roomno'])."','".stripslashes($rowb['bedno'])."',1,'".stripslashes($rowb['id'])."');\"/><a  style=\"display:none\">".stripslashes($rowb['status'])."</a><p  style=\"display:none\">".stripslashes($rowb['id'])."</p></div>";
				}
				if(stripslashes($rowb['status'])==1){
					$resultc =mysqli_query($conn,"select * from inpatients where PatId='".stripslashes($rowb['patid'])."' and Admitted!=0 and BedNo='".stripslashes($rowb['bedno'])."'");
					$rowc=mysqli_fetch_array($resultc);
				echo"<div  class=\"rightclickarea\"><div  style=\"width:116.5px; height:125px; background:#fff; BORDER-RADIUS:0PX; margin:-5px 5px 5px 5px; cursor:move\" class=\"draggable\" onmouseover=\"dragit(".stripslashes($rowb['id']).")\" ><a style=\"display:none\">".stripslashes($rowb['status'])."</a>";
				
				echo'<a class="test" id="'.stripslashes($rowb['patid']).'"><p style="text-align:center;font-size:10px">
				<strong>'.stripslashes($rowb['patname']).'</strong><br/>Medic:<strong>'.stripslashes($rowb['doctor']).'</strong><br/>Admn:<strong>'.stripslashes($rowc['AdmDate']).'</strong><br/>Mode:<strong>'.stripslashes($rowc['PayMode']).'</strong></p></a>';
				
				echo'</div></div>
			<div class="vmenu">
 	       <div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($rowc['PrescId']).'θ1</span>Open Billing Panel</div>
	       <div class="first_li" style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($rowc['PrescId']).'θ2</span>Open Treatment Sheet</div>
		    <div class="first_li" style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($rowc['PrescId']).'θ3</span>View Medical Record</div>';
			if($var=='YES'){
			echo'<div class="first_li" style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($rowc['PrescId']).'θ4</span>Discharge Patient</div>';}
			else {echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Discharge Patient</div>';}
             echo'
			  </div>
	';
					
				}
				
				echo'</div>';				
								
							}
				echo'</div><div class="cleaner_h5"></div>';
							}
				echo'<div class="cleaner_h20"></div>';
				}
				echo'
			
				<div id="savex"></div>
				  			
			</div>
			
			
			
			';	
				break;
							
					case 116:
			
			echo"<script>$('#pnt4').parent().find('input:first').focus().width(150);</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Pay Inpatient Charges Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Pay Inpatient Charges';
				echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help7()\"/></div>";								
echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Name:<span>*</span></a>
				<div class="ui-widget" style="margin:0 10px 0 30px;  float:left; width:120px">
	<select id="pnt4">
		<option value="">Select one...</option>';
	$resulta =mysqli_query($conn,"select * from patients where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['oname']).'">'.stripslashes($rowa['name']).','.stripslashes($rowa['oname']).'</option>';
							}
	echo'</select>
	</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Charges:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:20px" id="amount" type="text">				
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Amount Paid:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:20px" id="apcons" type="text">				
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:20px">Change:</a>
				<input class="input_field" style="float:right; margin-right:20px; border-color:#f00" id="change" type="text" disabled="disabled">				
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="wardpay();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
							case 117:
					$stamp=date('Ymd');
					echo"<script>$('#cons7').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:10px; color:#fff">Inpatients Progress:';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
				$result =mysqli_query($conn,"select * from inpatients where status=1 order by patname asc");
				$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:10px">No. of Patients Admitted:<strong> '.$num_results.'</strong></a>
				<div class="cleaner_h5"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="cons7">
		<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['patid']).'">'.stripslashes($row['patname']).'</option>';
							}
	echo'</select>
	</div>
				</div>';
								break;
							
							case 118:
								
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatients Progress Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$patid=$_GET['patid'];
							$resultc =mysqli_query($conn,"select * from inpatients where patid=".$patid."");
							$rowc=mysqli_fetch_array($resultc);
							$result =mysqli_query("select * from patients where pntno='".$patid."'");
							$row=mysqli_fetch_array($result);
							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Inpatients Progress</h2>";
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help17()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$patid."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Personal Details</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>
								<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Surname:<span>*</span></a>
                                <input type="text" id="name"  style="border-color:#f00" name="name" disabled="disabled" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">O. Names:<span>*</span></a>
                                <input type="text" id="oname" style="border-color:#f00" name="oname" disabled="disabled" class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
						 <a class="labels">Age:</a>
                          <input type="text" id="age" name="age" style="border-color:#f00" disabled="disabled" class="in_field" value="'.stripslashes($row['age']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:<span>*</span></a>';
								 if(stripslashes($row['gender'])=='male'){
									 echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio" disabled="disabled">Female.'; 
								 }
							 else{
                                echo'<input  id="maleGender" disabled="disabled" name="gender" type="radio" value="male" class="radio">Male.
								<input  id="femaleGender" name="gender" type="radio" value="female" class="radio"  checked="checked" disabled="disabled">Female.';}
								echo'<div class="cleaner_h5"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" id="stream" style="border-color:#f00"  disabled="disabled" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
								</form>
								<div id="personal">
								<h5>Admission Details</h5>
								<a class="labels">Bed No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowc['bedno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Room No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowc['roomno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Room Type:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowc['roomtype']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Ward Type:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowc['wardtype']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Admission Date:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.dateprint(stripslashes($rowc['date'])).'" disabled="disabled" style="border-color:#f00; width:120px" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Medic:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($rowc['medic']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								</div>
							
								<div id="personal">
								<h5>Progress Notes</h5>
								<textarea id="notes" style="float:right;height:330px;" class="alergy">'.stripslashes($rowc['progress']).'</textarea>
								<div class="cleaner_h5"></div>
								<a class="labels">Start New Consultation:</a>
		<input type="checkbox" value="1" name="recnew" id="admit" style="margin:8px 0 0 10px">
								</div>
								<div id="personal">
								<h5>Submit Details</h5>
							
							';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"subprogress('".$patid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								</div>';
							
							
					break;
							
							case 119:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Disclaimer Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude" style="width:996px">
								<div id="findstude" style="width:996px; overflow-y:auto;">';
								
							echo'<h5 style="text-align:center;">QET SYSTEMS END-USER LICENSE AGREEMENT</h5>
							<div class="cleaner_h5"></div>
							<div id="scrollbar1" style="width:996px; height:420px">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport" style="width:976px; height:420px">
			 <div class="overview">
							<p style="font-size:14px;"> 
IMPORTANT: THIS END-USER LICENSE AGREEMENT ("EULA") IS A LEGAL AGREEMENT BETWEEN YOU AND QUANTAL EXATECHNOLOGIES FOR THE SOFTWARE  THAT ACCOMPANIES THIS EULA.
YOU AGREE TO BE BOUND BY THE TERMS OF THIS EULA BY DOWNLOADING, INSTALLING, COPYING, OR OTHERWISE USING THE SOFTWARE.
IF YOU DO NOT AGREE TO BE BOUND BY THESE TERMS, RESTRICTIONS AND CONDITIONS, THEN DO NOT DOWNLOAD, INSTALL OR USE THE  SOFTWARE.
<BR/><BR/>
<strong>1. License Grants</strong><BR/>
Subject to the terms and conditions of this Agreement, QET hereby grants, and you accept, the right and license  to install and use the Software on a single computer. A license for the Software may not be shared, installed nor used  concurrently on different computers, unless the computers are used under the same company/business name of which only a maximum of three computers is allowed.
<BR/><BR/>
<strong>2. License Restrictions</strong>
<BR/>
	a) You may not make or distribute copies of the Software, or electronically transfer the Software from one computer to  another or over a network
<BR/>
	b) You may not alter, merge, modify, adapt or translate the Software, or decompile, reverse engineer, disassemble, or  otherwise reduce the Software to a human-perceivable form

	<BR/>c) You may not sell or transfer the Software
<BR/>
	d) Quantal ExaTechnologies reserves all rights not expressly granted to you in this EULA. The Software is protected by copyright and  other intellectual property laws and treaties. Quantal ExaTechnologies owns the title, copyright, and other intellectual property  rights in the Software. The Software is licensed, not sold.
<BR/>
	e) You agree that Quantal ExaTechnologies and its affiliates may collect and use technical information gathered as part of the  product support services provided to you, if any, related to the Software. Quantal ExaTechnologies may use this information solely  to improve our products or to provide customized services or technologies to you and will not disclose this information in a  form that personally identifies you.
<BR/><BR/>
<strong>3. Warranty Disclaimer/Limitation on Liability</strong>
<BR/>
	a) YOU ACKNOWLEDGE AND AGREE THAT THE SOFTWARE IS PROVIDED "AS IS" AND "WITH ALL FAULTS". QUANTAL EXATECHNOLOGIES AND ITS SUPPLIERS  HEREBY DISCLAIM ALL WARRANTIES, EXPRESS, IMPLIED OR OTHERWISE RELATING TO THE SOFTWARE, INCLUDING WITHOUT LIMITATION  WARRANTIES OF PERFORMANCE, MERCHANTABILITY, OR FITNESS FOR A PARTICULAR PURPOSE. IN ADDITION, QUANTAL EXATECHNOLOGIES AND ITS  SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES OF TITLE, NONINFRINGEMENT OR QUIET ENJOYMENT. QUANTAL EXATECHNOLOGIES DOES NOT WARRANT THAT  THE SOFTWARE IS ERROR-FREE OR WILL OPERATE WITHOUT INTERRUPTION. 
NO ORAL OR WRITTEN INFORMATION OR ADVICE GIVEN BY QUANTAL EXATECHNOLOGIES, ITS EMPLOYEES OR ANY THIRD PARTY SHALL CREATE A WARRANTY.  YOU BEAR ALL RISKS OF PERFORMANCE OF THE SOFTWARE
<BR/>
	b) NEITHER QUANTAL EXATECHNOLOGIES NOR ITS SUPPLIERS SHALL BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY INDIRECT, SPECIAL,  INCIDENTAL, PUNITIVE, COVER OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR THE INABILITY TO USE  EQUIPMENT OR ACCESS DATA, LOSS OF BUSINESS, LOSS OF PROFITS, BUSINESS INTERRUPTION OR THE LIKE), ARISING OUT OF THE USE OF,  OR INABILITY TO USE, THE SOFTWARE AND BASED ON ANY THEORY OF LIABILITY INCLUDING BREACH OF CONTRACT, BREACH OF WARRANTY, TORT  (INCLUDING NEGLIGENCE), PRODUCT LIABILITY OR OTHERWISE, EVEN IF QUANTAL EXATECHNOLOGIES OR ITS REPRESENTATIVES HAVE BEEN ADVISED OF  THE POSSIBILITY OF SUCH DAMAGES AND EVEN IF A REMEDY SET FORTH HEREIN IS FOUND TO HAVE FAILED OF ITS ESSENTIAL PURPOSE
<BR/>
	c) THE FOREGOING LIMITATIONS ON LIABILITY ARE INTENDED TO APPLY TO ALL ASPECTS OF THIS AGREEMENT.
<BR/><BR/>
<strong>4. Term and Termination</strong>
<BR/>
	Without prejudice to any other rights, Quantal ExaTechnologies may terminate this EULA if you fail to comply with the terms and  conditions of this EULA. In such event, you must destroy all copies of the Software and all of its component parts.
<BR/><BR/>
<strong>5. General Provisions</strong>
<BR/>
	a) The terms and conditions of this Agreement constitute the entire agreement between You and Quantal ExaTechnologies with respect  to the subject matter hereof and will supersede and replace all prior understandings and agreements, in whatever form,  regarding the subject matter.
<BR/>
	b) Should any term or provision hereof be deemed invalid, void or enforceable either in its entirety or in a particular  application, the remainder of this Agreement shall nonetheless remain in full force and effect.
<BR/>
	c) Applicable Law. This Agreement shall be governed by and construed in accordance with the Kenyan laws without giving  effect to the conflict of laws or provisions of Kenya or Your actual state or country of residence.

<BR/>	d) Competent Court. Any legal proceedings arising out of or relating to this Agreement will be subject to the jurisdiction of  the Kenyan Courts.

<BR/><BR/>
	YOU EXPRESSLY ACKNOWLEDGE THAT YOU HAVE READ THIS AGREEMENT AND UNDERSTAND THE RIGHTS, OBLIGATIONS, TERMS AND CONDITIONS SET  FORTH HEREIN. BY CONTINUING TO INSTALL THE QUANTAL EXATECHNOLOGIES SOFTWARE, YOU EXPRESSLY CONSENT TO BE BOUND BY ITS TERMS AND  CONDITIONS AND GRANT TO QUANTAL EXATECHNOLOGIES THE RIGHTS SET FORTH HEREIN.

</p>';
							echo'</div></div></div></div></div></div>';
							
							break;
							
							case 120:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses About Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<script>$('#div1').fadeIn();
					$('#link1').css({'color' : '#0085b2'});	</script>";
					echo'<div id="newstude" style="width:996px">
					
								<div id="findstude" style="width:996px; overflow-y:auto;">
								<h5 style="text-align:center;">ABOUT QUANTAL EXA-TECHNOLOGIES</h5>
								
<div id="main">
 		<div class="cleaner" style="border-bottom:1px solid #ccc; float:left; width:970px; height:5px"></div> 

		<div id="sidepanel">
				   <h1 style=" margin:0px 0 10px 0px; padding:0; font-size:15px; color:#333; font-weight:bold">Company Info</h1>
				   <ul class="side">
					 <li><a  id="link1" class="showSingle" onclick="aboutdiv(1);" target="1">The Company</a></li>
					 <li><a id="link2" class="showSingle" onclick="aboutdiv(2);" target="2">The Product</a></li>
					 <li><a id="link3" class="showSingle" onclick="aboutdiv(3);" target="3">The Developer</a></li>
					 </ul>
					 <div class="cleaner_h5"></div> 
					 <h1 style=" margin:0px 0 10px 0px; padding:0; font-size:15px; color:#333; font-weight:bold">Our Services</h1>
				   <ul class="side">
					 <li><a  id="link4" class="showSingle" onclick="aboutdiv(4);" target="4">Web-Design & Maintenance</a></li>
					 <li><a id="link5" class="showSingle" onclick="aboutdiv(5);" target="5">Software Applications Design</a></li>
					 <li><a id="link6" class="showSingle" onclick="aboutdiv(6);" target="6">Computer Repair & Maintenance</a></li>
					 <li><a id="link7" class="showSingle" onclick="aboutdiv(7);" target="7">Networking Solutions</a></li>
					  <li><a  id="link8" class="showSingle" onclick="aboutdiv(8);" target="8">Social Media Marketing</a></li>
					</ul>
					 <div class="cleaner_h5"></div> 
					  <h1 style=" margin:0px 0 10px 0px; padding:0; font-size:15px; color:#333; font-weight:bold">Other Products</h1>
				   <ul class="side">
					 <li><a id="link9" class="showSingle" target="9" onclick="aboutdiv(9);">Q-Kodi</a></li>
					 <li><a id="link10" class="showSingle" target="10" onclick="aboutdiv(10);">Q-Shule</a></li>
					 <li><a id="link11" class="showSingle" target="11" onclick="aboutdiv(11);">Q-Biz</a></li>
					 <li><a id="link12" class="showSingle" target="12" onclick="aboutdiv(12);">Q-Bima</a></li>
					</ul>
	</div> 
<div id="mainpanel">
<div id="div1" class="targetDiv" style="display:none">
<h1 style="float:left;margin:0 250px; padding:2px; font-size:13px; color:#666; font-weight:bold">Background</h1>
<h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
Quantal ExaTechnologies is a technology company based in Kenya. We provide the best technology solutions to challenges facing companies,institutions and individuals in East Africa.<br/><br/>
Quantal ExaTechnologies Ltd. was founded late 2012 by four partners-Prince Munene, Alex Mbaka, John Irungu and Gideon Kolesh who were then students at Jomo Kenyatta University of Agriculture and Technology undertaking a degree in Computer Engineering. <br/><br/></h1>
<h1 style="float:left;margin:0 250px; padding:2px; font-size:13px; color:#666; font-weight:bold">Corporate Philosophies</h1>
<h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
<strong>Our Mission: </strong>To continually research on and offer the best tech solutions to challenges facing companies, institutions and individuals.<br/>
<strong>Our Vision: </strong>To be the Ultimate Technology Company.<br/>
<strong>Our Slogan: </strong>Next Generation Technologies...<br/></h1>
<div class="cleaner_h20"></div> 
<h1 style="float:left;margin:0 250px; padding:2px; font-size:13px; color:#666; font-weight:bold">Contact Details</h1>
<h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
<strong>Website: </strong>www.qet.co.ke<br/>
<strong>Email: </strong>info@qet.co.ke<br/>
<strong>Phone: </strong>0726738023<br/>
</h1>
     </div>
       <div id="div2" class="targetDiv" style="display:none">
<h1 style="float:left;padding:2px; font-size:13px; color:#666;">
A web based clinic/hospital/pharmacy management system with a load of functionalities which include:</h1>
<div class="cleaner"></div>
<ul style="list-style:none;font-size:13px; margin-left:-10px">
  <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Patients Info Management.</li><div class="cleaner"></div>
   <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Processing Consultations and Prescriptions.</li><div class="cleaner"></div>
   <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Finance Module.</li><div class="cleaner"></div>
   <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Inventory Management.</li><div class="cleaner"></div>
   <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Employees and Payroll.</li><div class="cleaner"></div>
     <li><img src="images/bullet.png" style="float:left;margin:2px 12px 0 10px; height:15px; width:15px">Reports.</li>
 
        </ul>
     </div>
    
     
   <div id="div3" class="targetDiv" style="display:none">
   <img src="images/prof.jpg" style="float:left; width:120px; height:120px; margin:0 0px"/>
		 <div style="float:left; margin:40px 0 0 20px; width:200px">
		<h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
		<strong>Name: </strong>Prince Munene<br/>
		<strong>Email: </strong>prince@qet.co.ke<br/>
		<strong>Phone: </strong>0726738023<br/>
		</h1>
		</div>
    </div>
 
  <div id="div4" class="targetDiv"  style="display:none">
    
<div>
<img src="images/website.jpg" style="float:left;margin:2px 12px 0 190px;">
</div>
<div>
<h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
This service encompasses the design and creation of both personal and commercial websites. We have programmers with deep understanding of web-design languages who stop at nothing less than beautiful, eye-catching, user-friendly websites.<br/><br/>
Get your own website at a friendly fee. 
</h1></div>
     </div>
       <div id="div5" class="targetDiv"  style="display:none">
		
        <div>
        <img src="images/soft.jpg" style="float:left;margin:2px 12px 0 190px;">
        </div>
        <div>
        <h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
       We design and develop several types of software for desktop, mobile and web environments. Get your own custom-made system to help you manage your business.<br/><br/>
       Our application systems are built using high level programming languages-a choice that gives us an advantage over the competition. </h1></div>
     </div>
    
     
   <div id="div6" class="targetDiv"  style="display:none">
		
        <div>
        <img src="images/lp.jpg" style="float:left;margin:2px 12px 0 190px;">
        </div>
        <div>
        <h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
         Having problems with your laptop or desktop computer? Worry no more because at QET, we have the solutions to fix them.<br/><br/>
       This package involves blowing(computers,printers etc.), formatting and updating of antivirus software. </h1></div>
    </div>
   <div id="div7" class="targetDiv"  style="display:none">
 
        <div>
        <img src="images/nwork.jpg" style="float:left;margin:2px 12px 10px 190px;">
        </div>
        <div>
        <h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
       We offer all sorts of networking solutions...consult us for help in fixing and setting up of networking equipments and maintenance of the same.<br/><br/>
     We offer assistance with designing the hardware configuration for your specific needs. </h1></div>
     </div>
<div id="div8" class="targetDiv"  style="display:none">
  
        <div>
        <img src="images/social.jpg" style="float:left;margin:2px 12px 20px 190px;">
        </div>
        <div>
        <h1 style="float:left;margin:0 0px; padding:2px; font-size:13px; color:#666;">
      Need your company or business to be marketed on social media like facebook, twitter and get the highest degree of public awareness?<br/><br/>
     Call us and let us tweet for you, get thousands of people to like your page and get to know more about your business. Call us now! </h1></div>
     </div>
	 
	 <div id="div9" class="targetDiv"  style="display:none">
  <img src="images/30.jpg" style="float:left;">
	</div> 
	 <div id="div10" class="targetDiv"  style="display:none">
  <img src="images/28.jpg" style="float:left;">
	</div>
	 <div id="div11" class="targetDiv"  style="display:none">
  <img src="images/27.jpg" style="float:left;">
	</div>
	 <div id="div12" class="targetDiv"  style="display:none">
  <img src="images/26.jpg" style="float:left;">
	</div>
</div></div></div>';
				
							break;
							case 121:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Ledgers Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
								
							echo'<h5 style="text-align:center;">Ledgers Panel</h5><div class="cleaner"></div>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help48()\"/></div>";								
						echo"<div id=\"newle\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Add New Ledger\" onclick=\"openlen()\"/></div>";		
									
									 	echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						';
                    					echo "<script>paginate(8,0);</script>";
										
											
									
							echo'</div></div>
						</div></div>';
							break;
							
							case '31.2':
							$result =mysqli_query($conn,"select * from ledgerentries order by transid desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$transid=1;
								}else $transid=stripslashes($row['transid']) + 1;
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Journal Entries Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; BORDER-RADIUS:0PX;">
							<div style="width:456px">	
							<h5 style="text-align:center;">Add New Journal Entry</h5>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help45()\"/></div>";								
echo'<div class="cleaner_h5"></div>
		<input type="hidden" id="transid" name="name" class="input_field" value="'.$transid.'"  style="width:240px; float:right; margin-right:10px; border-color:#f00"  disabled="disabled"/>		
	
							<a class="labels" style="float:left; margin-left:10px;">Debit SubLedger:<span>*</span></a>
							 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="crledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where ledgerid!=601 order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
									echo'<option value="'.$value.'">'.$name.'</option>';
							}
										
										echo'</select></div><div class="cleaner_h5"></div>
				
				<a class="labels" style="margin-left:10px">Credit SubLedger:<span>*</span></a>
			 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="drledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where ledgerid!=601 order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
									$bal=stripslashes($row['bal']);
									echo'<option value="'.$value.'">'.$name.'</option>';
							}
										
										echo'</select></div>
				<div id="bankdiv" style="display:none">
				<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Bank:<span>*</span></a>
			 <div class="ui-widget" style="margin-right:10px; float:right">
							<select class="select" id="bank" style="float:left; margin-left:20px; width:250px">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from banktbl order by BankName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								
			echo"<option value=\"".stripslashes($row['Bankid'])."\">".stripslashes($row['BankName']).",".stripslashes($row['AccName'])."</option>";
							}
							echo'</select>
							</div>
		</div>	
			<div id="meddiv" style="display:none">
				<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Medic:<span>*</span></a>
			 <div class="ui-widget" style="margin-right:10px; float:right">
							<select class="select" id="medic1" style="float:left; margin-left:20px; width:250px">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from extmedics order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								
							echo"<option value=\"".stripslashes($row['id'])."\">".stripslashes($row['name'])."</option>";
							}
							echo'</select>
							</div>
		</div>	
			<div id="insdiv" style="display:none">
				<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Scheme:<span>*</span></a>
			 <div class="ui-widget" style="margin-right:10px; float:right">
							<select class="select" id="insd1" style="float:left; margin-left:20px; width:250px">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from inscompanies order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								
								echo"<option value=\"".stripslashes($row['id'])."\">".stripslashes($row['name'])."</option>";
							}
							echo'</select>
							</div>
		</div>	
			
			<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Amount:<span>*</span></a>
		<input type="text" id="amount" name="name" class="input_field" value=""  style="width:240px; float:right; margin-right:10px"/>		
		<div class="cleaner_h5"></div>	
			<a class="labels" style="margin-left:10px">Notes:<span>*</span></a>
			<textarea id="desc" class="input_field"  style="width:240px;height:100px; margin-right:10px; float:right; font-size:11px"/>
	<div class="cleaner_h20"></div>';
			echo"<input type=\"button\" value=\"Submit\" id=\"submit\" style=\"margin-left:220px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"savetrans();\"/>";							
		echo'<div id="postresp" style="float:left; width:40px;height:40px; margin-left:20px"></div>';
							echo'</div></div></div>
							';
							break;
							case '32.2':
								
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Find Journal Entries Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:106px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Find Journal Entries</h5>';
			echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help46()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Search By:</a>
							<select class="select" id="itemcat" style="width:200px; margin-left:10px; float:left">
									<option value="transid" onclick="setdefault();">Trans No</option>
									<option value="description" onclick="setdefault();">Description</option>
									<option value="date" onclick="setitemdate();">Date</option>
									<option value="ledger" onclick="setbranch();">Ledger Name</option>
									<option value="amount" onclick="setdefault();">Amount</option>
									<option value="bankid" onclick="setitemname();">Bank Account</option>
									</select>
							<a class="labels" style="margin-left:10px">Search Term:</a>
							<div id="option1">
							<input type="text" id="itemdefault" class="input_field"  style="width:270px; margin-left:10px; float:left"/>
							</div>
							<div id="option2" style="display:none">
							 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="bank">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from banktbl order by BankName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								
			echo"<option value=\"".stripslashes($row['Bankid'])."\">".stripslashes($row['BankName']).",".stripslashes($row['AccName'])."</option>";
							}
							echo'</select>
							</div>
						
							</div>
							<div id="option3" style="display:none">
							<input type="text" id="datepick" class="input_field"  style="width:270px; margin-left:10px; float:left"/>
							</div>
							<div id="option5" style="display:none">
							 <div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="ledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where ledgerid!=601 order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
									echo'<option value="'.$value.'">'.$name.'</option>';
							}
										
										echo'</select></div></div>';
							  	echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 30px; float:left\" title=\"Search\" onclick=\"searchjournal()\"/>";
								echo'<div id="mes" style="float:right; margin-right:5px; width:30px; height:30px;"></div>	';

								echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 10px 0 10px; float:right\" title=\"Post unposted entries to General Ledger\" onclick=\"postgeneral()\"/>";
								
								echo'<div class="cleaner"></div><div id="option4" style="width:auto"></div>
							</div>
									<div id="itemsdisp" style="height:360px; width:996px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
									<h5 style="text-align:center">Journal Entries</h5>
									<div id="display" style="margin-top:0px; height:250px;">
	
									</div>
									</div>						
							
										
									</div>
									
									</div>';
									break;
							
							case '33.2':
							$modee=$_GET['itemmode'];
							$searchh=$_GET['searchdata'];
							if($modee=='ledger'){
							$result =mysqli_query($conn,"SELECT * FROM ledgerentries WHERE crid='".$searchh."' OR drid='".$searchh."' limit 0,1000");	
							}else{
							$result =mysqli_query($conn,"SELECT * FROM ledgerentries WHERE ".$modee." LIKE '%".$searchh."%' limit 0,1000");
							}
							$count = mysqli_num_rows($result);
							
	echo"<script>$('#option4').html('<p style=\"font-size:10px; margin-left:10px\">".$count." Results Found.</p>')</script>";
	if($count>0){
	echo'
				<div id="inside" style="height:320px; overflow-y:scroll">
									<div id="title">
									<div id="figure1"  style="width:100px">Date</div>
									<div id="figure1" style="width:150px">Credit</div>
									<div id="figure1" style="width:150px">Debit</div>
									<div id="figure1"  style="width:100px">Amount</div>
									<div id="figure1"  style="width:284px">Desc</div>
									<div id="figure1"  style="width:50px">Posted</div>
									<div id="figure1"  style="width:50px">Reverse</div>
									</div>';
									for ($i = 0; $i < $count; $i++)
									{
								$row=mysqli_fetch_array($result);
								$rcptno=stripslashes($row['transid']);
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['date'])."</div>
										<div id=\"figure2t\" style=\"width:150px; overflow:hidden;height:16px;\">".stripslashes($row['drname'])."</div>
										<div id=\"figure2t\" style=\"width:150px; overflow:hidden;height:16px;\">".stripslashes($row['crname'])."</div>
										<div id=\"figure2t\" style=\"width:100px\">".stripslashes($row['amount'])."</div>
										<div id=\"figure2t\" title=\"".stripslashes($row['description'])."\" style=\"width:300px; overflow:hidden;height:16px;\">".stripslashes($row['description'])."</div>";
							if(stripslashes($row['status'])==0){
						echo"<div id=\"figure2t\" style=\"width:30px; border-right:1px solid #333\"><img src=\"images/yel.png\" style=\"margin-top:-4px\" width=\"22\" height=\"22\" /></div>";		
							}else {
			echo"<div id=\"figure2t\" style=\"width:30px; border-right:1px solid #333\"><img src=\"images/notif.jpg\"  style=\"margin-top:-4px\" width=\"22\" height=\"22\" /></div>";					
							}
				echo"<div class=\"figure2t\" id=\"save".$rcptno."\" style=\"width:60px; border-right:1px solid #333\">
										<img src=\"images/back.png\" width=\"22\"  style=\"margin-top:-4px\" height=\"22\" onclick=\"reversejournal(".$rcptno.",".stripslashes($row['status']).")\"  /></div>
										</div>";
										}
									
							echo'</div></div>';
							}
							break;
							
							case '34.2':
							
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Banks Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:216px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add New Bank Account</h5>';
			echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help47()\"/></div>";								
echo'<a class="labels" style="margin-left:5px">Bank Name:<span>*</span></a>
					<input type="text" id="bankname" class="input_field"  style="width:150px; margin-left:10px; float:left"/> 
			<a class="labels" style="margin-left:5px">Branch Name:<span>*</span></a>
					<input type="text" id="branchname" class="input_field"  style="width:120px; margin-left:10px;float:left"/>
					<a class="labels" style="margin-left:5px">Postal Address:</a>
					<input type="text" id="postadd" class="input_field"  style="width:150px; margin-left:10px;float:left"/> 
					<div class="cleaner_h5"></div> 
					<a class="labels" style="margin-left:5px">Email Address:</a>
					<input type="text" id="emailadd" class="input_field"  style="width:130px; margin-left:10px;float:left"/> 
					<a class="labels" style="margin-left:5px">Telephone:</a>
					<input type="text" id="telephone" class="input_field"  style="width:130px; margin-left:10px;float:left"/> 
					<a class="labels" style="margin-left:5px">Date Opened:</a>
				<input type="text" id="datepick" class="input_field"  style="width:150px; margin-left:10px;float:left"/>   
							<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:5px">A/c Name:<span>*</span></a>
					<input type="text" id="acname" class="input_field"  style="width:200px; margin-left:10px;float:left"/> 
					<a class="labels" style="margin-left:5px">A/c Type:</a>
					<select class="select" id="actype" style="float:left;width:150px; margin-left:10px;float:left">
								<option value="Normal">Normal</option>
								<option value="Savings">Savings</option>
								<option value="Business">Business</option>
								<option value="Fixed Deposit">Fixed Deposit</option>
								
						</select> 
				<a class="labels" style="margin-left:5px">A/c No:<span>*</span></a>
				<input type="text" id="acno" class="input_field"  style="width:170px; margin-left:10px;float:left"/>
				 <div class="cleaner_h5"></div>';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Account\" onclick=\"addnewacc()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div>
				</div>
			<div style="height:250px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit Accounts</h5>
	<a class="labels" style="margin-left:0px">Account Name:</a>
	 <div class="ui-widget" style="margin-left:10px; float:left">
							<select class="select" id="acbank">
								<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from banktbl order by BankName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								
			echo"<option value=\"".stripslashes($row['Bankid'])."θ".stripslashes($row['BankName'])."θ".stripslashes($row['Postal'])."
			#".stripslashes($row['BranchName'])."θ".stripslashes($row['TelNo'])."θ".stripslashes($row['Email'])."
			#".stripslashes($row['AccName'])."θ".stripslashes($row['AccType'])."θ".stripslashes($row['AccNo'])."θ".stripslashes($row['OpenDate'])."\">".stripslashes($row['BankName']).",".stripslashes($row['AccName'])."</option>";
							}
							echo'</select>
							</div>
					<a class="labels" style="margin-left:40px">	Acc Name<span>*</span></a>
							  <input type="text" id="acname2" class="input_field" style="width:250px; margin-left:10px;float:left"/> 
							   <input type="text" id="acid2" class="input_field" style="display:none"/> 
							<div class="cleaner_h5"></div>
							  <a class="labels" style="margin-left:0px">A/c No:<span>*</span></a>
							  <input type="text" id="acno2" class="input_field" style="width:160px; margin-left:10px;float:left""/>
						
						<a class="labels" style="margin-left:5px">Postal Address:</a>
						<input type="text" id="postal2" class="input_field"  style="width:150px; margin-left:10px;float:left"/>
						
						<a class="labels" style="margin-left:5px">Email Address:</a>
						<input type="text" id="email2" class="input_field"  style="width:150px; margin-left:10px;float:left"/>
						<div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:5px">Bank Name:<span>*</span></a>
						<input type="text" id="bname2" class="input_field"  style="width:160px; margin-left:10px;float:left"/>
						<a class="labels" style="margin-left:5px">Branch:<span>*</span></a>
						<input type="text" id="branch2" class="input_field"  style="width:170px; margin-left:10px;float:left"/>
						<a class="labels" style="margin-left:5px">Telephone:</a>
						<input type="text" id="tel2" class="input_field"  style="width:150px; margin-left:10px;float:left"/>
						<div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:5px">Date Opened:</a>
						<input type="text" id="datepick2" class="input_field"  style="width:150px; margin-left:10px;float:left"/>
						<a class="labels" style="margin-left:5px">Acc Type:</a>
					<select class="select" id="actype2" style="float:left;width:150px; margin-left:10px;float:left">
								<option value="Normal">Normal</option>
								<option value="Savings">Savings</option>
								<option value="Business">Business</option>
								<option value="Fixed Deposit">Fixed Deposit</option>
								
						</select> ';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0px 0 0 10px; float:left\" title=\"Edit Account\" onclick=\"editbank()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0px 0 0 10px; float:left\" title=\"Delete Account\" onclick=\"delbank()\"/>";
				echo'<div id="mes" style="float:left;width:40px; height:40px; margin-left:10px"></div>
				
				</div>
					
					</div>
									<div id="recentstude">
										</div>
									</div>';
						break;
							
							case '36.2':
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payroll Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								
							echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:80px; width:996px;  background:#fff;margin:0 5px 5px 0;padding-left:10px;padding-right:0px; border-radius:0px">
	<h5 style="text-align:center">Payroll</h5>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help49()\"/></div>";								
	echo'<div class="cleaner"></div> 
	<a class="labels" style="margin-left:5px">Month:</a>
		<input class="input_field" style="float:left;  margin-left:20px" id="default_widget" type="text"/>';
		echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:left\" title=\"New Payroll\" onclick=\"newpayroll()\"/>";
				echo"<img src=\"images/edit.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:left\" title=\"Edit Payroll\" onclick=\"editpayroll()\"/>";
				echo'<div id="mes" style="float:left;width:40px; height:40px; margin-left:10px"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px;display:none" id="empdi">
				<select id="emppay" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).','.stripslashes($rowa['oname']).'</option>';
							}
		echo'
	</select></div>
				
				<div id="mes2" style="float:right;width:40px; height:40px; margin-left:10px"></div>';
				echo"<img src=\"images/set.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:right\" title=\"Payroll Settings\"onclick=\"payrollset()\"/>";
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:right\" title=\"Commit Payroll\"onclick=\"commitpay()\"/>";
				echo"<img src=\"images/prev.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:right\" title=\"Preview Payroll\" onclick=\"openpayreport()\"/>";
				echo"<img src=\"images/newemp.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-3px 0 0 10px; float:right\" title=\"Add to Payroll\" onclick=\"addpay()\"/>";
				echo'
				
				</div>
	<div id="block1" style="height:386px; width:996px;   background:#fff;margin:0 5px 5px 0;padding-left:10px;padding-right:0px; border-radius:0px">

										<div id="loading" ></div>
                    					<div id="display" style="height:310px; width:990px">
							
										
										</div>
                						<div class="cleaner_h5"></div>
													
</div></div></div>';
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
				echo"<div class=\"figure2x\" style=\"width:56px;padding:4px 5px\" id=\"save2".$i."\" onclick=\"savenhif2(".$i.")\"><img src=\"images/save.jpg\" style=\"width:18px;height:16px\"/></div>";						
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
				echo"<div class=\"figure2\" style=\"width:56px;padding:4px 5px\" id=\"save".$code."\" onclick=\"savenhif(".$code.")\"><img src=\"images/save.jpg\" style=\"width:18px;height:16px\"/></div>";						
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
						<input type="text" title="Rate in percent" id="employeenssf" class="input_field" value="'.$employee.'"  style="width:100px; margin-left:10px;float:left"/>';
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
				echo"<div class=\"figure2\" style=\"width:56px;padding:4px 5px\" id=\"save3".$i."\" onclick=\"savetax3(".$i.")\"><img src=\"images/save.jpg\" style=\"width:18px;height:16px\"/></div>";						
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
				echo"<div class=\"figure2\" style=\"width:56px;padding:4px 5px\" id=\"save4".$code."\" onclick=\"savetax4(".$code.")\"><img src=\"images/save.jpg\" style=\"width:18px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
						echo'</div></div></div>
						</div>
						</div>';
							break;
							
							case '49.3':
						echo"<script>$('#month1').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Monthly Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
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
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Monthly Report
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
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
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
								echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['bank']).'</option>';
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
							case '50.3':
							echo"<script>$('#cus9').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Employee Payroll Summary
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="cus9" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from employee");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).'</option>';
							}
		echo'
	</select>
	</div>
						
						</div>';
							break;
							
							case '51.3':
						echo"<script>$('#cus8').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Ledger Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Ledger Name:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="cus8" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from ledgers where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['ledgerid']).'">'.stripslashes($rowa['name']).'</option>';
							}
		echo'
	</select>
	</div>
	<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterled();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case '52.3':
							
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">System Activity Log
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
			
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="width:90px;float:left; margin-left:10px" id="datepick" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<input class="input_field" style="float:left;width:35px; margin-left:10px" id="time1" onkeyup="timed1()" type="text" value="00" title="In 24 hr Format">
				<input class="input_field" style="float:left;width:35px; margin-left:5px" id="time2" type="text" value="00" title="In 24 hr Format">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="width:90px;float:left; margin-left:25px" id="datepick2" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<input class="input_field" style="float:left;width:35px; margin-left:10px" id="time3" onkeyup="timed2()" type="text" value="00" title="In 24 hr Format">
				<input class="input_field" style="float:left;width:35px; margin-left:5px" id="time4" type="text" value="00" title="In 24 hr Format">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterlog(1);"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case '52.4':
							
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:250px; width:370px">
					<div id="tit" style="width:350px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">System Activity Log-By User
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">User Id:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					
					<select class="select" id="itemname" style="width:280px; margin-left:10px;">
					<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from users order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
							}
						echo'</select>
						</div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="width:90px;float:left; margin-left:10px" id="datepick" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<input class="input_field" style="float:left;width:35px; margin-left:10px" id="time1" onkeyup="timed1()" type="text" value="00" title="In 24 hr Format">
				<input class="input_field" style="float:left;width:35px; margin-left:5px" id="time2" type="text" value="00" title="In 24 hr Format">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="width:90px;float:left; margin-left:25px" id="datepick2" type="text">
				<a class="labels" style="margin-left:10px">Time:</a>
				<input class="input_field" style="float:left;width:35px; margin-left:10px" id="time3" onkeyup="timed2()" type="text" value="00" title="In 24 hr Format">
				<input class="input_field" style="float:left;width:35px; margin-left:5px" id="time4" type="text" value="00" title="In 24 hr Format">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterlog(2);"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case '57.2':
						echo"<script>$('#cus19').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
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
								echo'<option value="'.stripslashes($rowa['emp']).'">'.stripslashes($rowa['name']).' '.stripslashes($rowa['oname']).'</option>';
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
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
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
							
							case '57.4':
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set up Ward Beds Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
								
							echo'<h5 style="text-align:center;">Set up Ward Beds Panel</h5><div class="cleaner"></div>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help52()\"/></div>";								
						echo"<div id=\"newle\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Add New Bed\" onclick=\"openbed()\"/></div>";		
									
									 	echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						';
                    					echo "<script>paginate(12,0);</script>";
										
											
									
							echo'</div></div>
						</div></div>';
							
							break;	
							
							case '30.9':
							echo"<script>$('#insa').parent().find('input:first').width(245);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set Insurance Companies Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									
							echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:491px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add New Insurance Scheme/Company</h5>
	<div class="cleaner_h5"></div> 
								<a class="labels">Name:<span>*</span></a>
                                <input type="text" id="name" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">A/c No:</a>
                                <input type="text" id="acno" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Balance B/F:</a>
                                <input type="text" id="bal" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Address:</a>
                                <input type="text" id="add" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="town" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:</a>
                                <input type="text" id="mobile" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Email:</a>
                                <input type="text" id="email" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"addins(1)\"/>";
				echo'<div id="res1" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			
			</div>
									
								
									<div id="results">						
	<div id="block1" style="height:470px; width:490px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit Insurance Schemes/Companies</h5>
	<div class="cleaner_h5"></div> 
	<a class="labels">Name:<span>*</span></a>
								
                                <div class="ui_widget"  style="margin-left:155px;float:left; width:200px">
				<select id="insa" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from inscompanies where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
echo'<option value="'.stripslashes($rowa['id']).'θ'.stripslashes($rowa['acno']).'θ'.stripslashes($rowa['name']).'θ'.stripslashes($rowa['balance']).'θ'.stripslashes($rowa['address']).'θ'.stripslashes($rowa['town']).'θ'.stripslashes($rowa['tel']).'θ'.stripslashes($rowa['mobile']).'θ'.stripslashes($rowa['email']).'">'.stripslashes($rowa['name']).'</option>';
				}
		echo'
	</select>
	</div><div class="cleaner_h5"></div>
	<a class="labels">New Name:<span>*</span></a>
	<input type="text" id="regn" name="age" class="in_field"   style="display:none" value=""/> 
								
                                <input type="text" id="name2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">A/c No:</a>
                                <input type="text" id="acno2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Balance B/F:</a>
                                <input type="text" id="bal2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Address:</a>
                                <input type="text" id="add2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="town2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:</a>
                                <input type="text" id="mobile2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Email:</a>
                                <input type="text" id="email2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 200px; float:left\" title=\"Submit\" onclick=\"editins(2)\"/>";
				echo"<img src=\"images/empty.png\" width=\"50\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 20px; float:left\" title=\"Delete User\" onclick=\"delins()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
				</div>
									
								
									</div>';
								
							break;	
							
							case 122:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Mortuary Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$reg=$_GET['param'];
							$result =mysqli_query("select * from patients where pntno='".$reg."'");
							$result =mysqli_query("select * from patients where pntno='".$reg."'");
							if( mysqli_num_rows($result)==0){
			echo "<script>editpatient(122);</script>";
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
			
							$row=mysqli_fetch_array($result);
							
							echo'<div id="newstude">
						
								<h2  style="float:left; padding:5px 5px 0 0; margin:0">Mortuary/Deaths Register</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help55()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$reg."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
							<div class="cleaner_h5"></div>
						 <a class="labels">Age:</a>';
						  $a=date('Y')-substr(stripslashes($row['dob']),-4,4);
                         echo' <input type="text" id="age" name="age" disabled="disabled" class="in_field"  style="border-color:#f00" value="'.$a.'"/> 
								<div class="cleaner_h5"></div>
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
								
								<div id="personal">';
								echo"<h5>Register Death</h5>";
								echo'<div class="cleaner_h5"></div>
								 <a class="labels">T.O.D:<span>*</span></a>
                                <input type="text" id="tod" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">D.O.D:<span>*</span></a>
                                <input type="text" id="datepick" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Cause:<span>*</span></a>
                                <textarea id="cod" style="float:right;height:70px" class="alergy"></textarea>
								<div class="cleaner_h5"></div>
								<a class="labels" title="Name of Person who confirmed death">Confirmed:<span>*</span></a>
                                <input type="text" id="confirmed" name="oname" class="in_field" value="" title="Name of Person who confirmed death"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Morgue:<span>*</span></a>
                                <input type="text" id="morgue" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								
								</div>
							
								
								
								<div id="personal">
								<h5>Submit Details</h5>
								<a class="labels">Other Details:</a>
								<textarea id="odetail" style="float:right;height:70px" class="alergy"></textarea>
								<div class="cleaner_h5"></div>';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"regdeath('".$reg."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-right:20px;
								 float:right; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								
								</div>
								<div id="personal">
								
								</div>
   							';
							
					break;
					
					case 123:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Bank Statement Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Insurance Statement
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Insurance Company:</a>
					<div class="cleaner_h5"></div>
						<div class="ui-widget" style="margin-left:10px; float:left">
				<select id="insa" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from inscompanies where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
							echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['name']).'</option>';
				}
		echo'
	</select></div>
						<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterinsur();"/>
					<div class="cleaner"></div>
						
						</div>';
						
							break;
							
							case 124:
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Death Reports Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Deaths Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterdeath();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case '124.1':
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Births Reports Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Births Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterbirth();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

							case 125:
					
						$stamp=date('Ymd');
					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Radiology:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from radrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="126">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Radiology using these dates" onclick="searchrad(11,4);"/>
					<div class="cleaner"></div>

			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchrad">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons3">
				<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								
		echo'</select>
		</div>
	<div class="cleaner"></div
	<input class="input_field" style="display:none" id="idpay" type="text" value="125.1">';
		//<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		//<a class="labels" style="margin-left:10px">Unregistered Patient</a>
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

						foreach ($arr as $key => $val) {
							$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$key."' and status=1");
							$num_resultsb = mysqli_num_rows($resultb);
							if($num_resultsb>0){
							
							echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',125.1)\">";
							}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',125.1)\">";}
							echo'<div id="figure2" style="width:280px">'.$val.'</div>
							</div>
							<div class="cleaner"></div>
							';

						}

		echo'</div>
		<div class="cleaner_h5"></div>

		<div class="cleaner_h5"></div>

		</div>

		</div>';
							break;
							case 125.1:
					$param=$_GET['pid'];
					$stamp=date('Ymd');

					$result =mysqli_query($conn,"select * from radrequests where prescid='".$param."'");
					$row=mysqli_fetch_array($result);
					$patid=stripslashes($row['patid']);
					$patname=stripslashes($row['patname']);
					$radno=stripslashes($row['radno']);

					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:620px; position:absolute;left:20%;top:15%" >
					<div id="tit" style="width:600px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Radiology Analysis:". $patname." - [". $patid."]";
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<h5 style="margin-left:10px;color:#333">RADIOLOGY NO: '.$radno.'</h5>';
					$result =mysqli_query($conn,"select * from radrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:120px;color:#fff">Request Date-Time</div>
	<div id="figure1" style="margin-left:0px; width:280px;color:#fff">Test</div>
	<div id="figure1" style="margin-left:0px; width:150px;color:#fff">Requested</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:248px; overflow-y:auto; margin-left:10px">';

						
							

							$result =mysqli_query($conn,"select * from radrequests where prescid='".$param."'");
							$num_results = mysqli_num_rows($result);
							
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$tid=stripslashes($row['id']);
							if(stripslashes($row['status'])==1){
							echo'<div class="normal1" style="" onclick="seepat('.$tid.',126)">';
							}else {echo'<div class="normal2"  style="" onclick="seepat('.$tid.',126)">';}
							echo'<div id="figure2" style="width:120px">'.stripslashes($row['date']).'-'.stripslashes($row['reqtime']).'</div>
							<div id="figure2" style="width:280px;overflow:hidden">'.stripslashes($row['request']).'</div>
							<div id="figure2" style="width:152px">'.stripslashes($row['requested']).'</div>
							</div>
							<div class="cleaner"></div>
							';
							}

						
						

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;

							case '125.2':
					
						$stamp=date('Ymd');
					echo"<script>$('#cons3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Radiology Billing:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from radrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."'  and status=1 and paid=0 order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']).'-'.stripslashes($row['radno']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="125.3">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Radiology using these dates" onclick="searchrad(3,3);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchlab">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons3">
				<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="125.3">
		<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>
		<a class="labels" style="margin-right:10px;float:right;cursor:pointer" onclick="findpatient()"><u>Find Patients</u></a>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

						foreach ($arr as $key => $val) {
							$resultb =mysqli_query($conn,"select * from labrequests where prescid='".$key."'  and status=1 ");
							$num_resultsb = mysqli_num_rows($resultb);
							if($num_resultsb>0){
							
							echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',125.3)\">";
							}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',125.3)\">";}

							echo'<div id="figure2" style="width:280px">'.$val.'</div>
							</div>
							<div class="cleaner"></div>
							';

						}

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;

					case '125.3':
						
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Radiology Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					
		if(isset($_GET['pid'])){
			$pid=$_GET['pid'];
		}else {$pid=0;$pid=0;}

		

		

							if(isset($_SESSION['rad'])){unset($_SESSION['rad']);}

							$resultq =mysqli_query($conn,"select * from radrequests where prescid='".$pid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							//$pid=stripslashes($rowq['prescid']);
							$stat=stripslashes($rowq['status']);
							$radno=stripslashes($rowq['radno']);
							$paid=stripslashes($rowq['paid']);

							$patname=stripslashes($rowq['patname']);
							if(stripslashes($rowq['status'])==1){
								$radstatus='<b style="color:#F00"> PENDING</b>';
							}else{$radstatus='<b style="color:#0085b2">COMPLETED</b>';}

							if($paid==1){$xx='PAID';}else{$xx='NOT PAID';}

							if(isset($_GET['pntno'])){
								$pntno=$_GET['pntno'];
							}

							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$patname=stripslashes($row['fullnames']);
								$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);
							$accum=stripslashes($row['accum']);

							if($accum==1&&$paid!=1){$paid=1;$xx='CORPORATE';}

							


						
							
								echo"<script>$('#item44').parent().find('input:first').focus();</script>";
							echo'<script>document.onkeydown = keydown;
						    	function keydown(evt){
						      	if (!evt) evt = event;
								
							 if (evt.keyCode==115){ //f4
							   	evt.preventDefault();
						     $("#item44").parent().find("input:first").focus();	
							   }
								 if (evt.keyCode==119){ //f8
								 evt.preventDefault();
						     	viewbill("rad"); 
						      	}
						     	 if (evt.keyCode==112){ //f1
								 evt.preventDefault();
						       addbill("rad",0); 
						      	}
								if (evt.keyCode==121){ //f10
								evt.preventDefault();
								submitbill("rad"); 
						      	}
								if (evt.keyCode==123){ //f12
								evt.preventDefault();
								help61(); 
						      	}
								if (evt.keyCode==120){ //f9
								evt.preventDefault();
						          emptybill("rad"); 
						      	}
								if (evt.keyCode==118){ //f7
								evt.preventDefault();
								deptbalance(); 
						      	}
								
								
								
								if (evt.keyCode==114){ //f3
								evt.preventDefault();
								removelastbill("rad");
						      	}
						     	 
						    }</script>';
						
							echo'<div id="newstude">

							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Radiology Billing-Radiology NO: '.$radno.'</h2>';
						echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.$pntno.'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			
			<ul>


					<li><a href="#tabs-1">Requested Test</a></li>
					<li><a href="#tabs-2">Radiology Billing</a></li>
			</ul>
			<div id="tabs-1">
				<h5>Requested Test Details</h5>';
				$resultq =mysqli_query($conn,"select * from radrequests where prescid='".$pid."'");
				$num_resultsa = mysqli_num_rows($resultq);
				$xa=1;	
				for ($i=0; $i <$num_resultsa; $i++) {
						$rowq=mysqli_fetch_array($resultq);
						echo '<a class="labels" style="margin-left:5px;">Test Name: <b>'.$xa.'. '.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>';

				}
				
				echo'
				
			</div>
			<div id="tabs-2">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where Category='Radiology' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
							<input type="text" id="price44" class="input_field"  style="width:70px; margin-left:10px;"/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('rad',0)\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('rad')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('rad')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
				<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								 class=\"in_field\" onclick=\"submitbill('rad');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>';
		
		
				
				echo'</div></div>
							
   							';



					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

							

							
					break;
							
							case 126:

							if(isset($_SESSION['rad'])){unset($_SESSION['rad']);}
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Radiology Analysis Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

	if(isset($_GET['pid'])){
		$lid=$_GET['pid'];
	}else {$lid=0;$pid=0;}

							$resultq =mysqli_query($conn,"select * from radrequests where id='".$lid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							$pid=stripslashes($rowq['prescid']);
							$stat=stripslashes($rowq['status']);
							$radno=stripslashes($rowq['radno']);
							$paid=stripslashes($rowq['paid']);

							$patname=stripslashes($rowq['patname']);
							if(stripslashes($rowq['status'])==1){
								$radstatus='<b style="color:#F00"> PENDING</b>';
							}else{$radstatus='<b style="color:#0085b2">COMPLETED</b>';}

							if($paid==1){$xx='PAID';}else{$xx='NOT PAID';}

							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							//$paid=1;

							$accum=stripslashes($row['accum']);

							if($accum==1&&$paid!=1){$paid=1;$xx='CORPORATE';}

									
							echo'<div id="newstude">
							<input type="hidden" id="paid" value="'.$paid.'"/>
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Radiology-Radiology No:'.$radno.'-'.$xx.'</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
				
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
				<ul>';

				echo'
				<li><a href="#tabs-2">Radiology Tests</a></li>
				<li><a href="#tabs-3">Radiology Analysis</a></li>
				<li><a href="#tabs-5">Upload Scans</a></li>
				<li><a href="#tabs-4">Radiology Summary</a></li>
				</ul>
			
				<div id="tabs-4">
				<h5>Radiology Summary</h5>
				<div class="cleaner_h5"></div>
		 <div style="height:320px; overflow-y:auto; border:1px solid #ccc;width:700px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from radrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else{$x='<b style="color:#0085b2"> - [COMPLETED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Radiology Request</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['request']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Radiology Results</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['results']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div></div>

		<div id="tabs-5">


				<div style="float:left">
				<a class="labels" style="margin-left:50px">Upload Scan Images:</a>
								<form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe2">
								 <div class="cleaner"></div> 
								 <a class="labels">File Name:</a>
								 <input type="text" required="required" id="fname" name="fname" class="in_field" value="" style="width:160px; margin-right:50px"/>
								<div class="cleaner_h5"></div>
								<dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe2" id="leiframe" class="leiframe2">
								</iframe>
								<input type="hidden" id="type" name="type" value="Image"/>
								<input type="hidden"  name="pntno" value="'.$pntno.'"/>
								<input type="hidden"  name="presc" value="'.$pid.'"/>
								<input type="hidden" id="id" name="id"  value="9"/>
								<div class="cleaner_h5"></div>';
     							echo"<input type=\"submit\" value=\"upload\" id=\"send\"  
								style=\"margin-right:50px; float:right; cursor:pointer\" class=\"in_field\" onclick=\"uphoto('".$pid."')\"/>";
								echo'</form>
								<div class="cleaner_h5"></div>								
			</div>
			

			<div style="float:right; width:420px; border:1px solid #ccc; height:360px;overflow-y:auto;padding:5px" id="imageslog">';
		$result2 =mysqli_query($conn,"select * from raddocuments where PrescId='".$pid."' order by Stamp desc");
		$num_results2 = mysqli_num_rows($result2);
		for ($i=0; $i <$num_results2; $i++) {
		$row2=mysqli_fetch_array($result2);
			if(stripslashes($row2['Type'])=='Image'){
		echo"<a class=\"fancybox\" href=\"". stripslashes($row2['Link'])."\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"". stripslashes($row2['Link'])."\" style=\"max-height:100px;margin-right:5px;margin-top:5px; max-width:100px;\" /></a>";

		 } 
		if(stripslashes($row2['Type'])=='Document'){
		echo"<a class=\"fancybox\" href=\"images/adobe.png\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"images/adobe.png\" style=\"max-height:100px;margin-right:5px; max-width:100px;margin-top:5px;\" /></a>";
 			} 
		}

			echo'</div>


		</div>

		<div id="tabs-2">
		
				<h5>Requested Test Details</h5>
				<a class="labels" style="margin-left:5px;">Test Name: <b>'.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Request Time: <b>'.stripslashes($rowq['date']).'  ['.stripslashes($rowq['reqtime']).']</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Requested By: <b>'.stripslashes($rowq['requested']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Status: '.$radstatus.'</a><br/><div class="cleaner"></div>';

				if($stat==2){

				echo'<a class="labels" style="margin-left:5px;">Done By: <b>'.stripslashes($rowq['doneby']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Time of Completion: <b>'.stripslashes($rowq['servtime']).'</b></a><br/><div class="cleaner"></div>';	
				}
				echo'
			

	</div>

				
					<div id="tabs-3">';

					//<a class="labels">Select Payment:</a>
	//<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">';
			//$result =mysqli_query("select * from sales where Status=1  and Category='RADIOLOGY' and ClientId='".$pntno."'  order by TransNo desc");
			//$arr=array();
			//$num_results = mysqli_num_rows($result);
			//for ($i=0; $i <$num_results; $i++) {
			//$row=mysqli_fetch_array($result);
			//$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']);
		//}
		//echo'<select id="consfee">
		//<option value="">Select one...</option>';
		//foreach ($arr as $key => $val) {
		//						echo"<option value=\"".$key."\">".$val.",Rcpt No:".$key."</option>";
		//				}
		//echo'
	//	</select>
	//</div>

		//<input type="checkbox" value="1" name="inpat" id="inpat" disabled="disabled" style="margin:8px 0 0 10px">
		echo'<div class="cleaner"></div>';
	$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 and PatId='".$pntno."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
								echo"<script>$('#inpat').prop('checked',true);</script>";
							}
						echo'
				<script>area19= new nicEditor({fullPanel : true,maxHeight : 310}).panelInstance("radresults");</script>
				<textarea id="radresults" style="float:left;width:700px;height:320px;" class="alergy">'.stripslashes($rowq['results']).'</textarea>
			
								<div class="cleaner_h5"></div>';
					echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"radres('".$pid."',0,".$lid.");\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:40px;"></div>
					</div> 
					
					</div>';
					
					break;

					case 126.1:

					$pid=$_GET['pid'];

		$result2 =mysqli_query($conn,"select * from raddocuments where PrescId='".$pid."' order by Stamp desc");
		$num_results2 = mysqli_num_rows($result2);
		for ($i=0; $i <$num_results2; $i++) {
		$row2=mysqli_fetch_array($result2);
			if(stripslashes($row2['Type'])=='Image'){
		echo"<a class=\"fancybox\" href=\"". stripslashes($row2['Link'])."\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"". stripslashes($row2['Link'])."\" style=\"max-height:100px;margin-top:5px;margin-right:5px; max-width:100px;\" /></a>";

		 } 
		if(stripslashes($row2['Type'])=='Document'){
		echo"<a class=\"fancybox\" href=\"images/adobe.png\" title=\"".stripslashes($row2['Name'])."-".stripslashes($row2['Date'])."\" data-fancybox-group=\"gallery\" ><img src=\"images/adobe.png\" style=\"max-height:100px;margin-right:5px; margin-top:5px;max-width:100px;\" /></a>";
 			} 
		}

					break;
					
						case 127:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Add Medical Data Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
							echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:236px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add Medical Data</h5>';
					echo"<div id=\"backatt\" style=\"display:none;width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help40()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Category:</a>
							<select class="select" id="itemcat" style="width:300px; margin-left:10px;">
									<option value="labresults">Lab Results</option>
									<option value="symptoms">Symptoms</option>
									<option value="diagnosis">Diagnosis</option>
									<option value="procedures">Procedures/Treatments/Surgeries)</option>
									<option value="prescriptions">Prescriptions</option>
									
									</select>
							<div class="cleaner"></div>
							<a class="labels" style="margin-left:10px">Data:</a>
							<div class="cleaner_h5"></div>
							<script>a0 = new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance("medata");</script>
				<textarea  id="medata" style="float:left;width:600px;height:50px;" class="alergy"></textarea>
					 <div id="newstudent" style="float:right; margin-left:10px;margin-top:-60px;height:20px;width:30px "></div>';
							  	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-30px 10px 0 30px; float:right\" title=\"Add\" onclick=\"adata()\"/>";
								
									echo'
						</div>
							<div style="height:230px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Edit/Delete Medical Data</h5>';
					echo"<div id=\"backatt\" style=\"display:none;width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help40()\"/></div>";								
echo'<div class="cleaner_h5"></div>
								<a class="labels">Category:</a>
							<select class="select" id="itemcat2" style="width:300px; margin-left:10px;">
									<option value="symptoms" onclick="ops(1)">Symptoms</option>
									<option value="diagnosis" onclick="ops(2)">Diagnosis</option>
									<option value="procedures" onclick="ops(3)">Procedures/Treatments/Surgeries)</option>
									<option value="prescriptions" onclick="ops(4)">Prescriptions</option>
									<option value="labresults" onclick="ops(5)">Lab Results</option>
									</select>
									<script>
									$(".opo").live("keydown", function(evt) {
									if (!evt) evt = event;
									if (evt.keyCode==13){ 
									clearops();
									}
									});
							var a2;
							a2 = new nicEditor({fullPanel : true,maxHeight : 50}).panelInstance("medata2");</script>
							<div id="op1" class="opo">
	<div class="ui_widget"  style="margin-left:10px;float:left; width:300px" id="op1">
	<select id="coz1" class="coz">
		<option value="">Select one...</option>';
		$resultb =mysqli_query($conn,"select * from symptoms order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
			echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
							</div>
							<div id="op2" class="opo" style="display:none">
	<div class="ui_widget"  style="margin-left:10px;float:left; width:300px" id="op1">
	<select id="coz2" class="coz">
		<option value="">Select one...</option>';
		$resultb =mysqli_query($conn,"select * from diagnosis order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
			echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
							</div>
							<div id="op3" class="opo" style="display:none">
	<div class="ui_widget"  style="margin-left:10px;float:left; width:300px" id="op1">
	<select id="coz3" class="coz">
		<option value="">Select one...</option>';
		$resultb =mysqli_query($conn,"select * from procedures order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
			echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
							</div>
							<div id="op4" class="opo" style="display:none">
	<div class="ui_widget"  style="margin-left:10px;float:left; width:300px" id="op1">
	<select id="coz4" class="coz">
		<option value="">Select one...</option>';
		$resultb =mysqli_query($conn,"select * from prescriptions order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
			echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
							</div>
							<div id="op5" class="opo" style="display:none">
	<div class="ui_widget"  style="margin-left:10px;float:left; width:300px" id="op1">
	<select id="coz5" class="coz">
		<option value="">Select one...</option>';
		$resultb =mysqli_query($conn,"select * from labresults order by name");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
			echo'<option value="'.stripslashes($rowb['id']).'θ'.stripslashes($rowb['name']).'">'.stripslashes($rowb['name']).'</option>';
														}
								echo'</select>
								</div>
							</div>
							<div class="cleaner"></div>
							<a class="labels" style="margin-left:10px">Data:</a>
							<div class="cleaner_h5"></div>
							<input type="hidden" id="itid"/>
							
							
				<textarea  id="medata2" style="float:left;width:600px;height:50px;" class="alergy"></textarea>
				 <div id="newstudent2" style="float:right; margin-left:10px;margin-top:-60px;height:20px;width:30px "></div>';
				echo"<img src=\"images/empty.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-20px 10px 0 10px; float:right\" title=\"Delete\" onclick=\"ddata()\"/>";
							  	echo"<img src=\"images/back.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-20px 0px 0 30px; float:right\" title=\"Edit\" onclick=\"edata()\"/>";
							
							
									echo'
						</div>							
							
										
									</div>
									
									<div id="recentstude">
									</div></div>';
						break;
						case 128:

						if($_GET['to']=='43'){$x='NURSE';}else if($_GET['to']=='77'){$x='DOCTOR';}
						$stamp=date('Ymd');
					echo"<script>$('#cons12').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px; width:320px">
				<input type="hidden" id="to" value="'.$_GET['to'].'"/>
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Treatment SHEET-".$x."";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0  order by PrescId asc");
			$num_results = mysqli_num_rows($result);
			echo'<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons12">
				<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner_h5"></div>
		</div>';
							break;	


						case 129:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Prescription Administration Chart Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							
							$resultb =mysqli_query($conn,"select * from in1 where pid='".$pid."'");
							$rowb=mysqli_fetch_array($resultb);
								echo'
							<div id="newstude">
	<div style="height:471px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; BORDER-RADIUS:0PX; overflow-y:scroll">
	<h5 style="text-align:center">INPATIENT TREATMENT SHEET</h5>';
	echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 5px 0 0px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
	echo'<div id="op1"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(1)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Admission Details</a>						
	<div class="cleaner_h5"></div>
	<div id="div1" style="width:900px;border:1px solid #333; padding:10px;display:none">
	 <a class="labels" style="float:left">Pat No:</a>
       <input type="text" id="patid" name="patid"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($row['pntno']).'" disabled="disabled"/> 
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
		<input type="text" id="steroidate" name="oname"   style="float:left;margin-left:10px;width:90px;" class="in_field" value="'.stripslashes($rowb['steroidate']).'"/>'; 
	echo"<div id=\"save1\" style=\"float:right; width:30px; height:30px;\"><img src=\"images/back.jpg\" style=\"float:right; width:30px; height:30px; cursor:pointer\" onclick=\"savein1('".$pid."')\"/></div>";					
	echo'<div class="cleaner"></div>
		
		
										
	</div>
	<div class="cleaner_h5"></div>							
	<div id="op2"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(2)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Once Only/Premedicant Drugs</a>						
	<div class="cleaner_h5"></div>
	<div id="div2" style="width:900px;border:1px solid #333; padding:10px;display:none ">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(2)\"/>";
						
	$result = mysqli_query($conn,"SELECT * FROM  in2 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:50px">Time</div>
									<div id="figure1" style="width:320px">Drug</div>
									<div id="figure1" style="width:50px">Dose</div>
									<div id="figure1" style="width:60px">Route.</div>
									<div id="figure1" style="width:57px">Given By</div>
									<div id="figure1" style="width:40px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da1'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug1'.$code.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route1'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate1'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm1'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward1'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce1".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,2,1)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal2".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da2'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.date('H:i').'" id="ti2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug2'.$i.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="" id="dose2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="route2'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="dsign2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="" id="given2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="tgiven2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pdate2'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pqty2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="phm2'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="ward2'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce2".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,2,2)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
	echo'</div></div>
	

									
									
	
	<div class="cleaner_h5"></div>							
	<div id="op3"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(3)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Regular Prescriptions</a>						
	<div class="cleaner_h5"></div>	
	<div id="div3" style="width:900px;border:1px solid #333; padding:10px; display:none">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(4)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  in3 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:50px">Time</div>
									<div id="figure1" style="width:320px">Drug</div>
									<div id="figure1" style="width:50px">Dose</div>
									<div id="figure1" style="width:60px">Route.</div>
									<div id="figure1" style="width:57px">Frequency</div>
									<div id="figure1" style="width:70px">Given By</div>
									<div id="figure1" style="width:38px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da3'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug3'.$code.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route3'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign3'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate3'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm3'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward3'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce3".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,3,3)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal4".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da4'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.date('H:i').'" id="ti4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug4'.$i.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="" id="dose4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="route4'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="" id="given4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="dsign4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="tgiven4'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pdate4'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pqty4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="phm4'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="ward4'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce4".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,3,4)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	
	
	
	<div class="cleaner_h5"></div>							
	<div id="op4"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(4)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">As Required Medication</a>						
	<div class="cleaner_h5"></div>	
	<div id="div4" style="width:900px;border:1px solid #333; padding:10px;display:none">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(6)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  in4 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:50px">Time</div>
									<div id="figure1" style="width:320px">Drug</div>
									<div id="figure1" style="width:50px">Dose</div>
									<div id="figure1" style="width:60px">Route</div>
									<div id="figure1" style="width:70px">Given By</div>
									<div id="figure1" style="width:117px">Instructions</div>
									<div id="figure1" style="width:35px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da5'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti5'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug5'.$code.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose5'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route5'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign5'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given5'.$code.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven5'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate5'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty5'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm5'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward5'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce5".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,4,5)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal6".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da6'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="'.date('H:i').'" id="ti6'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:325px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug6'.$i.'" style="background:#fff;width:320px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px"><input type="text" class="put_field" value="" id="dose6'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="route6'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="dsign6'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px"><input type="text" class="put_field" value="" id="given6'.$i.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="tgiven6'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pdate6'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pqty6'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="phm6'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="ward6'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce6".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,4,6)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	
	
	<div class="cleaner_h5"></div>							
	<div id="op5"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(5)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Intravenous Infusion Therapy</a>						
	<div class="cleaner_h5"></div>	
	<div id="div5" style="width:900px;border:1px solid #333; padding:10px;display:none">';

	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(8)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  in5 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:270px">Fluid Type</div>
									<div id="figure1" style="width:110px">Volume.</div>
									<div id="figure1" style="width:117px">Duration</div>
									<div id="figure1" style="width:70px">Given By</div>
									<div id="figure1" style="width:35px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da7'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti7'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:275px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug7'.$code.'" style="background:#fff;width:270px; font-size:10px"/></div>
										<div class="figure2x" style="width:115px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose7'.$code.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:118px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route7'.$code.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign7'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given7'.$code.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven7'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate7'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty7'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm7'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward7'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce7".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,5,7)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal8".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da8'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.date('H:i').'" id="ti8'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:275px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug8'.$i.'" style="background:#fff;width:270px; font-size:10px"/></div>
										<div class="figure2x" style="width:115px;padding:3px 2px"><input type="text" class="put_field" value="" id="dose8'.$i.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:118px;padding:3px 2px"><input type="text" class="put_field" value="" id="route8'.$i.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="" id="dsign8'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="given8'.$i.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="tgiven8'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pdate8'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="pqty8'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="phm8'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="ward8'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce8".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,5,8)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	
	
	<div class="cleaner_h5"></div>							
	<div id="op6"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(6)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Variable Dose Prescription</a>						
	<div class="cleaner_h5"></div>	
	<div id="div6" style="width:900px;border:1px solid #333; padding:10px;display:none">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(10)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  in6 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:300px">Medication</div>
									<div id="figure1" style="width:100px">Time Given.</div>
									<div id="figure1" style="width:121px">Given by</div>
								<div id="figure1" style="width:37px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da9'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:305px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug9'.$code.'" style="background:#fff;width:300px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose9'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route9'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign9'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti9'.$code.'" style="background:#fff;width:100px; font-size:10px"/></div>
										<div class="figure2x" style="width:122px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given9'.$code.'" style="background:#fff;width:118px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven9'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate9'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty9'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm9'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward9'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce9".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,6,9)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal10".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da10'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:305px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug10'.$i.'" style="background:#fff;width:300px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none""><input type="text" class="put_field" value="" id="dose10'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;display:none""><input type="text" class="put_field" value="" id="route10'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="dsign10'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px"><input type="text" class="put_field"  id="ti10'.$i.'" style="background:#fff;width:100px; font-size:10px"  value="'.date('H:i').'"/></div>
										<div class="figure2x" style="width:122px;padding:3px 2px"><input type="text" class="put_field" value="" id="given10'.$i.'" style="background:#fff;width:118px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="tgiven10'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="pdate10'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="pqty10'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="phm10'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="ward10'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce10".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,6,10)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	

	<div class="cleaner_h5"></div>							
	<div id="op7"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(7)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Drugs to Take Home</a>						
	<div class="cleaner_h5"></div>	
	<div id="div7" style="width:900px;border:1px solid #333; padding:10px; display:none">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(12)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  in7 where pid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:60px">Date.</div>
									<div id="figure1" style="width:260px">Drug</div>
									<div id="figure1" style="width:120px">Dose</div>
									<div id="figure1" style="width:100px">Given By</div>
									<div id="figure1" style="width:35px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['date']).'" id="da11'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['time']).'" id="ti11'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:265px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drug']).'" id="drug11'.$code.'" style="background:#fff;width:260px; font-size:10px"/></div>
										<div class="figure2x" style="width:119px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose11'.$code.'" style="background:#fff;width:114px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route11'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dsign']).'" id="dsign11'.$code.'" style="background:#fff;width:100px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['givenby']).'" id="given11'.$code.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmtime']).'" id="tgiven11'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmdate']).'" id="pdate11'.$code.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px ;display:none"><input type="text" class="put_field" value="'.stripslashes($row['pharmqty']).'" id="pqty11'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.stripslashes($row['phm']).'" id="phm11'.$code.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px ;display:none"><input type="text" class="put_field" value="'.stripslashes($row['ward']).'" id="ward11'.$code.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce11".$code."\" onclick=\"saveonce(".$code.",".$pid.",1,7,11)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=0; $i <200; $i++) {
									echo"
									<div id=\"normal12".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:75px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y').'" id="da12'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="'.date('H:i').'" id="ti12'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:265px;padding:3px 2px"><input type="text" class="put_field" value="" id="drug12'.$i.'" style="background:#fff;width:260px; font-size:10px"/></div>
										<div class="figure2x" style="width:119px;padding:3px 2px"><input type="text" class="put_field" value="" id="dose12'.$i.'" style="background:#fff;width:114px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="route12'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px"><input type="text" class="put_field" value="" id="dsign12'.$i.'" style="background:#fff;width:100px; font-size:10px"/></div>
										<div class="figure2x" style="width:112px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="given12'.$i.'" style="background:#fff;width:110px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px;display:none"><input type="text" class="put_field" value="" id="tgiven12'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px ;display:none"><input type="text" class="put_field" value="" id="pdate12'.$i.'" style="background:#fff;width:70px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px ;display:none"><input type="text" class="put_field" value="" id="pqty12'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:55px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="phm12'.$i.'" style="background:#fff;width:50px; font-size:10px"/></div>
										<div class="figure2x" style="width:50px;padding:3px 2px; display:none"><input type="text" class="put_field" value="" id="ward12'.$i.'" style="background:#fff;width:45px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:39px\" id=\"saveonce12".$i."\" onclick=\"saveonce(".$i.",".$pid.",2,7,12)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	<div class="cleaner_h5"></div>							
	<div id="op8"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(8)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Nurses Notes</a>						
	<div class="cleaner_h5"></div>	
	<div id="div8" style="width:900px;border:1px solid #333; padding:10px; display:none; min-height:360px">';
	echo"<div id=\"savez\" style=\"float:right; width:30px; height:30px;\"><img src=\"images/back.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 0px 0 0px; float:right\" title=\"Save Nurse Notes\"onclick=\"savenursenotes('".$pid."')\"/></div>";
	echo'<script>area20 = new nicEditor({fullPanel : true,maxHeight : 320}).panelInstance("nursenotes");</script>
	<textarea id="nursenotes"  style="float:left;height:340px; width:830px" class="alergy"></textarea>
	</div>
		<div class="cleaner_h5"></div>
		
		<div id="op10"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(10)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Vitals Entries</a>						
	<div class="cleaner_h5"></div>	
	<div id="div10" style="width:900px;border:1px solid #333; padding:10px; display:none">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(13)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  vitals where patid='".$pntno."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:120px">Date-Time</div>
									<div id="figure1" style="width:60px">Temp</div>
									<div id="figure1" style="width:60px">Bp1</div>
									<div id="figure1" style="width:60px">Bp2</div>
									<div id="figure1" style="width:60px">Weight</div>
									<div id="figure1" style="width:60px">Pulse</div>
									<div id="figure1" style="width:60px">Breath</div>
									<div id="figure1" style="width:60px">Random</div>
									<div id="figure1" style="width:38px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										$pid=stripslashes($row['prescid']);
										echo"
										<div id=\"normal13".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['datetime']).'" id="date'.$code.'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['temp']).'" id="temp'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['bp1']).'" id="bp1'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['bp2']).'" id="bp2'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['weight']).'" id="weight'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['pulse']).'" id="pulse'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['breath']).'" id="breath'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['random']).'" id="random'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:44px\" id=\"savevitals".$code."\" onclick=\"savevitals(".$code.",1,".$pid.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=100; $i <200; $i++) {
									echo"
									<div id=\"normal13".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y-H:i').'"  id="date'.$i.'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field" id="temp'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field" id="bp1'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field" id="bp2'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field"  id="weight'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px"><input type="text" class="put_field"id="pulse'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;"><input type="text" class="put_field"  id="breath'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>
										<div class="figure2x" style="width:75px;padding:3px 2px;"><input type="text" class="put_field"  id="random'.$i.'" style="background:#fff;width:60px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:44px\" id=\"savevitals".$i."\" onclick=\"savevitals(".$i.",2,0)\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";	
								
									
									
														
										echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
	
	<div class="cleaner_h5"></div>	
			
		<div id="op9"><img src="images/open.png" style="float:left; width:30px; height:30px; cursor:pointer" onclick="opener(9)"/></div>	<a style="float:left; margin:10px; color:#333; font-weight:normal; font-size:18px">Vitals Charts</a>						
	<div class="cleaner_h5"></div>	
	<div id="div9" style="width:900px;border:1px solid #333; padding:10px; display:none; min-height:360px">';
	 	$arr1=array();$arr2=array();$arr3=array(); $arr4=array();$arr5=array();$arr6=array();$arr7=array();$arr8=array();
		$result =mysqli_query($conn,"select * from vitals where patid='".$pntno."' order by id desc limit 0,7");
		$num_results = mysqli_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysqli_fetch_array($result);
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
		<div class="cleaner_h10"></div>	
		
	</div></div>';
						
							break;
						case 131:
							$price=$_GET['price'];
							$tprice=$_GET['tprice'];
							$quat=$_GET['quat'];
							$code=$_GET['code'];
							$disc=$_GET['disc'];
							$subn=$_GET['subn'];
							$name=$_GET['name'];
							$reg=$_GET['regn'];
							$dat=$_GET['dat'];
							$oname=$_GET['oname'];
							$categ=$_GET['categ'];
							$total=$_GET['total'];
							$iid=$_GET['iid'];
							$type=$_GET['type'];
							if($type=='GOOD'){
							$categ=$userdep;	
							}
							$a=$_GET['a'];
							$date=date('d/m/Y').'-'.date('H:i');
							if(isset($_SESSION[$a])){
								$max=count($_SESSION[$a]);
								$_SESSION[$a][$max]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
								$max=count($_SESSION[$a]);
								echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
								$ftotal=0;
								for ($i = 0; $i < $max; $i++){
									$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
								}
								echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
								cartbill($max,$a);
							}else{
								$_SESSION[$a]=array(array());
								$_SESSION[$a][0]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
								$max=count($_SESSION[$a]);
								echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
								$ftotal=0;
								for ($i = 0; $i < $max; $i++){
									$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
								}
								echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
								cartbill($max,$a);
							}
					break;

					case '131.1':
							$price=$_GET['price'];
							$tprice=$_GET['tprice'];
							$quat=$_GET['quat'];
							$code=$_GET['code'];
							$disc=$_GET['disc'];
							$subn=$_GET['subn'];
							$name=$_GET['name'];
							$reg=$_GET['regn'];
							$dat=$_GET['dat'];
							$oname=$_GET['oname'];
							$categ=$_GET['categ'];
							$total=$_GET['total'];
							$iid=$_GET['iid'];
							$type=$_GET['type'];
							if($type=='GOOD'){
							$categ=$userdep;	
							}
							$a=$_GET['a'];
							$date=date('d/m/Y').'-'.date('H:i');
							if(isset($_SESSION[$a])){
							$max=count($_SESSION[$a]);
							$_SESSION[$a][$max]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
							$max=count($_SESSION[$a]);
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill2($max,$a);
							}
							
							else{
							$_SESSION[$a]=array(array());
							$_SESSION[$a][0]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
							$max=count($_SESSION[$a]);
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill2($max,$a);
								
							}

							if($max>0){
									if($a=='lab'){
										echo'<script>$("#labrec").prop("checked",true)</script>';
									}
								}
								else{
									if($a=='lab'){
										echo'<script>$("#labrec").prop("checked",false)</script>';
									}
								}
							
							
					break;

					case '131.2':
							$price=$_GET['price'];
							$tprice=$_GET['tprice'];
							$quat=$_GET['quat'];
							$code=$_GET['code'];
							$disc=$_GET['disc'];
							$subn=$_GET['subn'];
							$name=$_GET['name'];
							$reg=$_GET['regn'];
							$dat=$_GET['dat'];
							$oname=$_GET['oname'];
							$categ=$_GET['categ'];
							$total=$_GET['total'];
							$iid=$_GET['iid'];
							$type=$_GET['type'];
							if($type=='GOOD'){
							$categ=$userdep;	
							}
							$a=$_GET['a'];
							$date=date('d/m/Y').'-'.date('H:i');
							if(isset($_SESSION[$a])){
							$max=count($_SESSION[$a]);
							$_SESSION[$a][$max]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
							$max=count($_SESSION[$a]);
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total45').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill3($max,$a);
							}
							
							else{
							$_SESSION[$a]=array(array());
							$_SESSION[$a][0]=array($code,$name,$quat,$price,$tprice,$oname,$reg,$categ,$total,$disc,$subn,$date,$iid,$fullname,$dat);	
							$max=count($_SESSION[$a]);
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total45').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill3($max,$a);
								
							}

							if($max>0){
									if($a=='rad'){
										echo'<script>$("#radrec").prop("checked",true)</script>';
									}
								}
								else{
									if($a=='rad'){
										echo'<script>$("#radrec").prop("checked",false)</script>';
									}
								}
							
							
					break;
					
					case 132:
					$pid=$_GET['pid'];
					$a=$_GET['a'];
					unset($_SESSION[$a][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION[$a]=array_values($_SESSION[$a]);
					$max=count($_SESSION[$a]);
					$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill($max,$a);
								
					break;
					case '132.1':
					$a=$_GET['a'];
					end($_SESSION[$a]);
					$pid= key($_SESSION[$a]);
					unset($_SESSION[$a][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION[$a]=array_values($_SESSION[$a]);
					$max=count($_SESSION[$a]);
					$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill($max,$a);
								
					break;
					case '132.2':
					$pid=$_GET['pid'];
					$a=$_GET['a'];
					unset($_SESSION[$a][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION[$a]=array_values($_SESSION[$a]);
					$max=count($_SESSION[$a]);
					$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill2($max,$a);
							if($max>0){
									if($a=='lab'){
										echo'<script>$("#labrec").prop("checked",true)</script>';
									}
								}
								else{
									if($a=='lab'){
										echo'<script>$("#labrec").prop("checked",false)</script>';
									}
								}
								
					break;

					case '132.3':
					$pid=$_GET['pid'];
					$a=$_GET['a'];
					unset($_SESSION[$a][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION[$a]=array_values($_SESSION[$a]);
					$max=count($_SESSION[$a]);
					$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total45').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill3($max,$a);
							if($max>0){
									if($a=='rad'){
										echo'<script>$("#radrec").prop("checked",true)</script>';
									}
								}
								else{
									if($a=='rad'){
										echo'<script>$("#radrec").prop("checked",false)</script>';
									}
								}
								
					break;
					
					
					case 133:
					$a=$_GET['a'];
					$regn=$_GET['regn'];
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					
					if($a=='nurse'){
							unset($_SESSION[$a]);
							$result = mysqli_query($conn,"SELECT * FROM  daycare where patid='".$regn."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
							$_SESSION[$a]=array(array());
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$_SESSION[$a][$i]=array(stripslashes($row['itcode']),stripslashes($row['itname']),stripslashes($row['quat']),stripslashes($row['price']),stripslashes($row['total']),stripslashes($row['patname']),stripslashes($row['patid']),stripslashes($row['category']),0,stripslashes($row['disc']),stripslashes($row['subnet']),stripslashes($row['date']),stripslashes($row['iid']));			
							}
							$max=count($_SESSION[$a]);
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
							cartbill($max,$a);
							
						}
						else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current cart is empty.</p>');
										e.preventDefault();
										</script>";
										
						}
						
						
					
					}
					

				else{
					if(isset($_SESSION[$a])){
							$max=count($_SESSION[$a]);
							$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$ftotal+=preg_replace('~,~', '', $_SESSION[$a][$i][10]);
							}
							echo"<script>$('#total').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
								cartbill($max,$a);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
					}
								
					break;
					
					case 134:
					$a=$_GET['a'];
					if(isset($_SESSION[$a])){
							unset($_SESSION[$a]);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#total').val('');
							$('#tprice').val('');
							$('#price44').val('');
							$('#quat44').val('');
							$('#disc44').val('');
							$('#sub44').val('');
							
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					case 135:
					echo"<script>$('#patientnorecep').focus();</script>";	
					echo'<div id="modalDiv2"></div>';
					echo'<div id="mon" style="min-height:90px; width:380px">
					<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
					<h5 style="margin-right:0px; color:#fff">Reception';
					echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
					echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
					<div class="cleaner_h5"></div>
					<div class="cleaner"></div>
					<input type="hidden" id="ser" name="ser"  value="136"/>
					<a class="labels" style="margin-left:10px">Patient No:</a>	
				 	<input type="text" id="patientnorecep" name="regn" placeholder="Type Number and Press Enter" class="in_field" value=""  style="float:left;margin-left:10px;width:180px"/>
				 	<img src="images/zoom.png" style="width:30px; height:30px; float:right; cursor:pointer; margin-right:5px" onclick="findpatient()"/> 
				 	<a class="labels" style="float:right;margin-right:10px">Or  Search</a>	
					<div class="cleaner_h5"></div>	
					<input class="input_field" style="display:none" id="idpay" type="text" value="136">
					<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
					<a class="labels" style="margin-left:10px">Unregistered Patient</a>	
					<div class="cleaner_h5"></div>	
					<div id="searchres">
						<div class="cleaner_h5"></div>	
					</div>							
	
			<div class="cleaner"></div>';
			$result =mysqli_query($conn,"select * from sales where (Status=1 or Status = 2)and (Category!='PHARMACY') and Stamp='".date('Ymd')."' order by TransNo desc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['RcptNo'])]=stripslashes($row['ClientName']);
			}
			echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Posted Payments</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
									<div id="figure1" style="width:129px">Rcpt. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
		foreach ($arr as $key => $val) {
		echo'<div class="normal2"  style="" onclick="seepat2('.$key.',136)">';
		echo'<div id="figure2" style="width:200px">'.$val.'</div>
		<div id="figure2" style="width:130px">'.$key.'</div>
		</div>
		<div class="cleaner"></div>
		';}
		
		echo'</div>
		<div class="cleaner_h5"></div>
				</div>';	
					
				break;
				case 136:
				if(isset($_SESSION['cons'])){unset($_SESSION['cons']);}
						
				echo"<script>$('#item44').parent().find('input:first').focus();</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		 if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("cons"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("cons",1); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("cons"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("cons"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
	
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("cons");
      	}
		
		
     	 
    }</script>';						
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Reception Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		if(isset($_GET['rcpt'])){
		$rcpt=$_GET['rcpt'];
		$resultb =mysqli_query($conn,"select * from sales where RcptNo=".$rcpt."");
		$rowb=mysqli_fetch_array($resultb);
		$reg=stripslashes($rowb['ClientId']);
		$stat=stripslashes($rowb['Status']);
		$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
		$row=mysqli_fetch_array($result);
	}else if(isset($_GET['param'])){
		$reg=$_GET['param'];
		$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
		if( mysqli_num_rows($result)==0){
			echo "<script>reception();</script>";
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
		$row=mysqli_fetch_array($result);
		
	}else if(isset($_GET['pid'])){
		$reg=$_GET['pid'];
		$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
		$row=mysqli_fetch_array($result);
	}
	

							$rowy=$row;
		
							
							$names=stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']);
							$pntno=stripslashes($row['pntno']);

							$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);

							$resultz =mysqli_query($conn,"select * from newprescription where PatId='".$reg."' order by Id desc limit 0,1");
							$rowz=mysqli_fetch_array($resultz);

							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Reception-PATIENT LAST VISIT:'.dateprint(stripslashes($rowz['TransDate'])).'-REVIEW DATE:'.dateprint(stripslashes($rowz['ReviewDate'])).'</h2>
							<input type="hidden" id="lastdate" value="'.dateprint(stripslashes($rowz['TransDate'])).'"/>
							<input type="hidden" id="reviewdate" value="'.preg_replace('~/~', '', stripslashes($rowz['TransDate'])).'"/>
							<input type="hidden" id="todaystamp" value="'.date('Ymd').'"/>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$reg."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">O/P No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['opno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>

								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
								echo'<div class="cleaner"></div> 
								<a class="labels">Contact:<span>*</span></a>
                                <input type="text" id="stream"  disabled="disabled"  style="border-color:#f00" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:<strong style="margin-left:20px"> '.stripslashes($row['bgroup']).'</strong></a>
                                <div class="cleaner_h5"></div>
				
					</div>
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
			    <li><a href="#tabs-3">Payment Registration</a></li>
				<li><a href="#tabs-1">Consultation Billing</a></li>
				<li><a href="#tabs-2">Start New Consultation</a></li>
				</ul>

				<div id="tabs-3">
				<div style="width:300px;float:left">
					<a class="labels">Payment Type:<span>*</span></a>
			        <select  class="select" id="accum" style="float:right" onchange="togglecomdiv()">
					<option value="0">Cash</option>
					<option value="1">Company</option>
					</select>
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:0px">Day Care/Corporate/Accumulative Billing?</a>
					<input type="checkbox" value="1" name="corporate" id="corporate" style="margin:8px 0 0 10px">
					<div class="cleaner_h5"></div>
					<div id="comdiv" style="display:none">
					<a class="labels">Scheme:<span>*</span></a>
			        <select  class="select" id="inscom" style="float:right;border-color:#f00" disabled>
			        <option value="'.stripslashes($rowy['insid']).'">'.stripslashes($rowy['insurer']).'</option>';

	        		$resulta =mysqli_query($conn,"select * from schemes order by CompanyName");
					$num_resultsa = mysqli_num_rows($resulta);	
					for ($i=0; $i <$num_resultsa; $i++) {
						$rowa=mysqli_fetch_array($resulta);
						echo"<option value=\"".stripslashes($rowa['SchemeId'])."\">".stripslashes($rowa['SchemeName'])."</option>";	
					}

					echo'</select>
					<div class="cleaner_h5"></div>

					<a class="labels">Company:<span>*</span></a>
			        <input type="text" id="company" class="input_field" value="'.stripslashes($rowy['company']).'"  style="float:right;width:200px;border-color:#f00" disabled/>
					<div class="cleaner_h5"></div>

					<a class="labels">Ref No/Card No:<span>*</span></a>
			        <input type="text" id="cardno" class="input_field"   value="'.stripslashes($rowy['cardno']).'"  style="float:right;border-color:#f00" disabled/>
			        <input type="hidden" id="benamount" class="input_field"   value=""  style="float:right;"/>
			        <input type="hidden"  value=""  id="exid"/>
			        <input type="hidden"  value=""  id="forwardid"/>
					<div class="cleaner_h5"></div>';
					echo"<input type=\"button\" value=\"Pick Smart Data\" id=\"submit\" style=\"background:#ff3;float:right; cursor:pointer;width:100px\" class=\"in_field\" onclick=\"picksmart('".$pntno."');\"/>";	
					echo'</div>
	
								
				<div class="cleaner_h5"></div>';
				echo"<input type=\"button\" value=\"Save Billing Info\" id=\"submit\" style=\"margin-left:20px; float:left; cursor:pointer;width:130px\" class=\"in_field\" onclick=\"savebillinfo('".$pntno."');\"/>";
				echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;  float:left; cursor:pointer;width:50px" class="in_field"   onclick="hidenewstude();"/>	
				 <div id="res2" style="float:left; margin-left:10px;height:20px;"></div>
				
				</div>

				<div style="width:350px;float:right;height:350px;" id="picksmart">



				</div>


			</div>
			<div id="tabs-1">
				
								<h5>Billing</h5>
								
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
			<select id="item44">
				<option value="">Select one...</option>';
					$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$itemp=stripslashes($rowa['SalePrice']);
								$item=stripslashes($rowa['ItemName']);
								$code=stripslashes($rowa['ItemCode']);
								$categ = stripslashes($rowa['Category']);
								$type = stripslashes($rowa['Type']);
								$bal = stripslashes($rowa[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select><input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
	</div>
							<a class="labels" style="margin-left:10px">Qty:</a>
							<input type="text" id="quat44" class="input_field"  style="width:40px; margin-left:10px;" value="1"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price44" class="input_field"  style="width:70px; margin-left:10px;"/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('cons',1)\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('cons')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('cons')\"/>";
				echo'<div class="cleaner_h5"></div> 
<a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>
							<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			
<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								 class=\"in_field\" onclick=\"submitbill('cons');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			
				
					<div id="tabs-2">';
			echo'
			<div class="ui_widget"  style="margin-left:10px;float:left; width:300px;display:none">';
			$resultc =mysqli_query($conn,"select * from sales where Status=1   and ItemCode='2' and ClientId='".$reg."' order by TransNo desc");
			$arr=array();
			$num_resultsc = mysqli_num_rows($resultc);
			for ($i=0; $i <$num_resultsc; $i++) {
			$rowc=mysqli_fetch_array($resultc);
			$arr[stripslashes($rowc['RcptNo'])]=stripslashes($rowc['ClientName']);
		}
		echo'<select id="consfee">';
		if(isset($_GET['rcpt'])){
			$rcptno=$_GET['rcpt'];
		echo"<option value=\"".$_GET['rcpt']."\">".$names.",Rcpt No:".$_GET['rcpt']."</option>";	
		}else{
		echo'<option value="">Select one...</option>';
		$rcptno='';
		foreach ($arr as $key => $val) {
								echo"<option value=\"".$key."\">".$val.",Rcpt No:".$key."</option>";
						}
		}
		echo'
		</select>
	</div>';
	/*
	<a class="labels" style="margin-left:8px">Corporate/Accumulative Billing?</a>
<input type="checkbox" value="1" name="accum" id="accum" style="margin:8px 0 0 10px">';
*/
	
	echo'<div class="cleaner_h5"></div>
				
								<a class="labels">Type:<span>*</span></a>
                                <select  class="select" id="ctype" style="margin-left:65px">
								<option value="NewPatient">New Patient</option>
								<option value="Revisit">Revisit</option>
								<option value="Review">Review</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Send To:<span>*</span></a>
                                <select  class="select" id="sendto" style="margin-left:50px">
								<option value="GENERAL CONSULTATIONS">General Consultations</option>
								<option value="PHYSIOTHERAPY">Physiotherapy</option>
								<option value="EYE CLINIC">Eye Clinic</option>
								<option value="MCH">MCH</option>
								<option value="EMERGENCIES">Emergencies</option>
								<option value="DENTAL CLINIC">Dental Clinic</option>
								<option value="HDU">HDU</option>
								<option value="DIALYSIS">Dialysis</option>
								<option value="PAEDIATRICS">Paediatrics</option>
								<option value="AMBULANCE">Ambulance</option>
								<option value="COUNSELLING">Counselling</option>
								</select>
								
								
								<div class="cleaner_h5"></div>';	
					echo"<input type=\"button\" value=\"Send Patient\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:100px\"
								 class=\"in_field\" onclick=\"addpresc();\"/>";

								 if($rcptno!=''){
								 	echo"<input type=\"button\" value=\"Print Receipt\" id=\"submit\"  style=\"margin-left:100px; float:left; cursor:pointer;width:100px\" class=\"in_field\" onclick=\"window.open('report.php?id=62&rcptno=".$rcptno."');\"/>";
								 }

								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:20px;"></div>
				
				</div>


					
					</div>';


					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}





				break;

				case 136.1:
				$pntno=$_GET['pntno'];
				//connect to smart_link db

				   connectsmart();
				   
				   $result =mysqli_query($conn,"select * from exchange_locations where SP_ID='".$smartip."' limit 0,1");
				   $row=mysqli_fetch_array($result);
				   $ipid=stripslashes($row['ID']);
				    $result =mysqli_query($conn,"select * from exchange_files where Location_ID='".$ipid."' and Progress_Flag='1' and Member_Nr='".$pntno."' and Exchange_Type='1' limit 0,1");
				   $num_results = mysqli_num_rows($result);
				   if($num_results>0){

				   	$row=mysqli_fetch_array($result);
				    $exchange_id=stripslashes($row['ID']);
				    $xml=stripslashes($row['Smart_File']);
				   

				   $myXMLData ="<?xml version='1.0' encoding='UTF-8'?>";
				   $myXMLData.=$xml;
				   $xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");

				   	//PAYMENT MODIFIER
					//$xml=simplexml_load_file('//192.168.1.107\$C:\xml\forwardedcarddata.xml') or die("Error: Cannot create object");
					$Admit_Notes=$xml->Admit_Notes;
					$PaymentType1=$xml->PaymentModifiers->PaymentModifier[0]->Type;
					$PaymentAmount1=$xml->PaymentModifiers->PaymentModifier[0]->Amount_Required;
					$Receipt=$xml->PaymentModifiers->PaymentModifier[0]->Receipt;
					$PaymentType2=$xml->PaymentModifiers->PaymentModifier[1]->Type;
					$NHIF_Member_Nr=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Member_Nr;
					$NHIF_Contributor_Nr=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Contributor_Nr;
					$NHIF_Employer_Code=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Employer_Code;
					$NHIF_Site_Nr=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Site_Nr;
					$NHIF_Patient_Relation=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Patient_Relation;
					$Diagnosis_Code=$xml->PaymentModifiers->PaymentModifier[1]->Diagnosis_Code;
					$Admit_Date=$xml->PaymentModifiers->PaymentModifier[1]->Admit_Date;
					$Discharge_Date=$xml->PaymentModifiers->PaymentModifier[1]->Discharge_Date;
					$Days_Used=$xml->PaymentModifiers->PaymentModifier[1]->Days_Used;
					$Amount=$xml->PaymentModifiers->PaymentModifier[1]->Amount;

					//A1
					$card_issuedate=$xml->A1->card_issuedate;
					$card_retmasscounter=$xml->A1->card_retmasscounter;
					$card_issuername=$xml->A1->card_issuername;
					$card_serialnumber=$xml->A1->card_serialnumber;
					$card_validitystatus=$xml->A1->card_validitystatus;
					$card_retcounter=$xml->A1->card_retcounter;



					//A2
					$patient_marriagestatus=$xml->A2->patient_marriagestatus;
					$policy_country=$xml->A2->policy_country;
					$patient_surname=$xml->A2->patient_surname;
					$patient_partnerprevioussurname=$xml->A2->patient_partnerprevioussurname;
					$patient_previoussurname=$xml->A2->patient_previoussurname;
					$patient_marriagedate=$xml->A2->patient_marriagedate;
					$patient_partnerdob=$xml->A2->patient_partnerdob;
					$patient_forenames=$xml->A2->patient_forenames;
					$patient_dob=$xml->A2->patient_dob;
					$patient_title=$xml->A2->patient_title;
					$policy_currency=$xml->A2->policy_currency;
					$policy_id=$xml->A2->policy_id;
					$patient_language=$xml->A2->patient_language;

					//B1
					$medicalaid_expiry=$xml->B1->medicalaid_expiry;
					$medicalaid_rules=$xml->B1->medicalaid_rules;
					$medicalaid_showpools=$xml->B1->medicalaid_showpools;
					$medicalaid_number=$xml->B1->medicalaid_number;
					$medicalaid_plan=$xml->B1->medicalaid_plan;
					$medicalaid_limit=$xml->B1->medicalaid_limit;

					$medicalaid_groupstatus=$xml->B1->medicalaid_groupstatus;
					$nhif_membernumber=$xml->B1->nhif_membernumber;
					$medicalaid_regdate=$xml->B1->medicalaid_regdate;
					$global_id=$xml->B1->global_id;
					$medicalaid_code=$xml->B1->medicalaid_code;
					$dependant_number=$xml->B1->dependant_number;

					//NONMEMMAP
					$card_claimingreason=$xml->NonMemMap->card_claimingreason;
					$card_reterrors=$xml->NonMemMap->card_reterrors;
					$switch_integrated=$xml->NonMemMap->switch_integrated;
					$supervisor_password=$xml->NonMemMap->supervisor_password;
					$card_claimfilesloading=$xml->NonMemMap->card_claimfilesloading;
					$card_claimingpossible=$xml->NonMemMap->card_claimingpossible;
					$medicalaid_scheme=$xml->NonMemMap->medicalaid_scheme;
					$btupdate_completed=$xml->NonMemMap->btupdate_completed;
					$patient_hospitalnumber=$xml->NonMemMap->patient_hospitalnumber;
					$card_retcompleted=$xml->NonMemMap->card_retcompleted;
					$virtualcard=$xml->NonMemMap->virtualcard;

					//BENEFTS
					$Benefit_Nr=$xml->Benefits->Benefit->Nr;
					$Benefit_Description=$xml->Benefits->Benefit->Description;
					$Benefit_Amount=$xml->Benefits->Benefit->Amount;
					$PreAuthNeeded=$xml->Benefits->Benefit->PreAuthNeeded;
					$Claimable=$xml->Benefits->Benefit->Claimable;

					//connect to local db
					connectlocal();

					$result =mysqli_query($conn,"select * from forwardedcarddata order by id desc limit 0,1");
					$row=mysqli_fetch_array($result);
					$forwardid=stripslashes($row['id'])+1;

					//insert into forwardedcarddata
					$resulta = mysqli_query($conn,"insert into forwardedcarddata values('".$forwardid."','".$Admit_Notes."','".$PaymentType1."','".$PaymentAmount1."','".$Receipt."','".$PaymentType2."','".$NHIF_Member_Nr."'
				,'".$NHIF_Contributor_Nr."','".$NHIF_Employer_Code."','".$NHIF_Site_Nr."','".$NHIF_Patient_Relation."','".$Diagnosis_Code."','".$Admit_Date."','".$Discharge_Date."','".$Days_Used."','".$Amount."','".$card_issuedate."',
				'".$card_retmasscounter."','".$card_issuername."','".$card_serialnumber."','".$card_validitystatus."','".$card_retcounter."','".$patient_marriagestatus."'
				,'".$policy_country."','".$patient_surname."','".$patient_partnerprevioussurname."','".$patient_previoussurname."','".$patient_marriagedate."','".$patient_partnerdob."','".$patient_forenames."',
				'".$patient_dob."','".$patient_title."','".$policy_currency."','".$policy_id."','".$patient_language."','".$medicalaid_expiry."','".$medicalaid_rules."','".$medicalaid_showpools."'
				,'".$medicalaid_number."','".$medicalaid_plan."','".$medicalaid_limit."','".$medicalaid_groupstatus."','".$nhif_membernumber."','".$medicalaid_regdate."','".$global_id."','".$medicalaid_code."',
				'".$dependant_number."','".$card_claimingreason."','".$card_reterrors."','".$switch_integrated."','".$supervisor_password."','".$card_claimfilesloading."'
				,'".$card_claimingpossible."','".$medicalaid_scheme."','".$btupdate_completed."','".$patient_hospitalnumber."','".$card_retcompleted."','".$virtualcard."','".$Benefit_Nr."',
				'".$Benefit_Description."','".$Benefit_Amount."','".$PreAuthNeeded."','".$Claimable."','".date('Y/m/d')."','".date('Ymd')."','1')")  or die (mysql_error());

					//output info

					echo'<div style="width:100%;height:100%;border:1px solid #ccc; background:#fff;padding:5px">
					
					<img src="images/smart.jpg">
					<div class="cleaner_h5"></div>
					<h2 style="color:#0f6">Data Importation Succesful</h2>
					<a class="labels">Names:</a>
			        <input type="text"  class="input_field" value="'.$patient_forenames.' '.$patient_surname.'"  style="float:right;width:200px; border-color:#666" disabled/>
					<div class="cleaner_h5"></div>
					<a class="labels">Insurer:</a>
			        <input type="text"  class="input_field" value="'.$medicalaid_plan.'"  style="float:right;width:200px; border-color:#666" disabled/>
					<div class="cleaner_h5"></div>
					<a class="labels">Scheme:</a>
			        <input type="text"  class="input_field" value="'.$medicalaid_scheme.'"  style="float:right;width:200px; border-color:#666" disabled/>
					<div class="cleaner_h5"></div>
					<a class="labels">Scheme No:</a>
			        <input type="text"  class="input_field" value="'.$medicalaid_number.'"  style="float:right;width:200px; border-color:#666" disabled/>
					<div class="cleaner_h5"></div>
					<a class="labels">Benefit Description:</a>
			        <input type="text"  class="input_field" value="'.$Benefit_Description.'"  style="float:right;width:200px; border-color:#666" disabled/>
					<div class="cleaner_h5"></div>
					<a class="labels">Benefit Amount:</a>
			        <input type="text"  class="input_field" value="'.$Benefit_Amount.'"  style="float:right;width:200px; border-color:#666" disabled/>
			        <div class="cleaner_h5"></div>



					</div>';

					echo"<script>$('#benamount').val('".$Benefit_Amount."')</script>";
					echo"<script>$('#exid').val('".$exchange_id."')</script>";
					echo"<script>$('#forwardid').val('".$forwardid."')</script>";


				   }else{

				   	echo"<script>
					$().customAlert();
					alert('Sorry!', '<p>System unable to pick data from Smart System. Please try again.</p>');
					e.preventDefault();
					</script>";
			  		 }



				break;
				
				
				case 137:
				$pid=$_GET['pid'];
				$cashbal=0;
				if(isset($_SESSION['pay'])){unset($_SESSION['pay']);}
				$payment_mode='PAYMENT MODE:CASH';		
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Payments Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				$result =mysqli_query($conn,"select * from sales where RcptNo=".$pid."");
							$num_results = mysqli_num_rows($result);
							$ftotal=0;$dc=0;
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$ftotal+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
								$patid=stripslashes($row['ClientId']);
								$cname=stripslashes($row['ClientName']);
								$status=stripslashes($row['Status']);
								$category=stripslashes($row['Category']);
								$itcode=stripslashes($row['ItemCode']);
								//daycare 
								if($itcode==599){$dc=1;}
							}
							if($status==0){$j='NOT POSTED';}else{$j='POSTED';}
							
								$result =mysqli_query($conn,"select * from ledgers");
								$num_results = mysqli_num_rows($result);
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								if($username==substr(stripslashes($row['name']),0,5)){$cashbal=stripslashes($row['bal']);}
								}
								
								
							$resulta =mysqli_query($conn,"select * from newprescription where PatId='".$patid."' and TransDate='".date('Y/m/d')."'");
							$rowa=mysqli_fetch_array($resulta);
							$dcare=stripslashes($rowa['DayCare']);
							
							
						
						$resulta =mysqli_query($conn,"select * from patients where pntno='".$patid."'");
						$row=mysqli_fetch_array($resulta);	
						$schemeid=stripslashes($row['insid']);	
						$cardno=stripslashes($row['cardno']);
						$paytype=stripslashes($row['paytype']);
						$benamount=stripslashes($row['benamount']);
						$smartstatus=stripslashes($row['smartstatus']);if($smartstatus==1){$ss='ON';}else{$ss='OFF';}

						$resulta =mysqli_query($conn,"select * from schemes where SchemeId='".$schemeid."' limit 0,1");
						$row=mysqli_fetch_array($resulta);	
						$insid=stripslashes($row['CompanyId']);	
						$insurer=stripslashes($row['CompanyName']);	


						if($paytype==1){
						$payment_mode='PAYMENT MODE:'.$insurer.'-CARD NO:'.$cardno.'-BALANCE:'.$benamount.'-SMART STATUS:'.$ss.'';	
						echo"<script>$('#lid76').val('".$insid."')</script>";echo"<script>$('#lname76').val('".$insurer."')</script>";
						}	


								
				echo"<script>$('#maef').html((".$cashbal.").formatMoney(2, '.', ','))</script>";				
				echo'<script>document.onkeydown = keydown;
			    	function keydown(evt){
			      	if (!evt) evt = event;
					
					 if (evt.keyCode==119){ //f8
			       viewpaymode(); 
				   evt.preventDefault();
			      	}
			     	 if (evt.keyCode==112){ //f1
			        addpaymode(); 
					  evt.preventDefault();
			      	}
					if (evt.keyCode==121){ //f10
					 evt.preventDefault();
					submitpaymode(\''.$pid.'\',\''.$category.'\');
					
			      	}
					if (evt.keyCode==120){ //f9
			        emptypaymode(); 
					  evt.preventDefault();
			      	}
			     	 }</script>';			
					echo"<script>$('#item76').parent().find('input:first').width(100);$('#amount76').focus();
					$('#bname76').parent().find('input:first').width(150);$('#cname76').parent().find('input:first').width(150);
						$('#currentins').css({'border' : 'solid #ccc 1px'});</script>";
							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">PAYMENTS-".$cname."-".$patid."-Inv No:".$pid."-".$j."</h2>";
								echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"></div><div class=\"cleaner\" style=\"border-bottom:2px solid #333\"></div>";														
								echo"<h2  style=\"float:left; padding:5px 5px 5px 0; margin:0\">".$payment_mode."</h2>";
								echo"<div class=\"cleaner\" style=\"border-bottom:2px solid #333\"></div>";	
								echo'
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<input type="hidden" id="smartstatus" value="'.$smartstatus.'" /><input type="hidden" id="benamount" value="'.$benamount.'" />
								<div style="width:753px; float:left">
								<div id="personal" style="width:744px; height:110px">
								<h5 style="text-align:center">Receive Payments</h5>
			<a class="labels" style="margin-left:10px">Mode:</a>	
			<div class="ui_widget"  style="margin-left:10px;float:left; width:120px">						
			<select id="item76">
				<option value="">Select one...</option>
				<option value="Cash" selected="selected">Cash</option>
				<option value="Waiver" >Waiver</option>
				<option value="Credit">Credit</option>
				<option value="Companies">Companies</option>
				<option value="Bank">Bank</option>
				</select>
				</div>
		<input type="text" id="lid76" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="lname76" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="rcptno76" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$pid.'"/>
		<input type="text" id="patid76" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$patid.'"/>
		<input type="text" id="patname76" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$cname.'"/>
		<input type="text" id="dc76" class="input_field"  style="display:none;width:20px; margin-left:5px;" value="'.$dc.'"/>
		
		<div class="ui_widget"  style="margin-left:10px;float:left; width:220px; display:none" id="acdiv1">	
		<a class="labels" style="margin-left:20px">A/c:<span>*</span></a>					
		<select id="bname76" style="margin-left:10px">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from ledgers where type='Asset' and category='Bank'");
							$num_resultsa = mysqli_num_rows($resulta);
							for ($i=0; $i <$num_resultsa; $i++) {
							$rowa=mysqli_fetch_array($resulta);
							echo'<option value="'.stripslashes($rowa['ledgerid']).'">'.stripslashes($rowa['name']).'</option>';			
							}
		echo'</select>
		</div>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:220px; display:none" id="acdiv2">	
		<a class="labels" style="margin-left:20px">A/c:<span>*</span></a>					
		<select id="cname76" style="margin-left:10px">';
		if($insurer!=''){
		echo'<option selected="selected" value="'.$insid.'">'.$insurer.'</option>';}else{echo'<option value="">Select one...</option>';}
		$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['CustomerId'])."\">".stripslashes($rowa['CustomerName'])."</option>";	
							}
		echo'</select>
		</div>
		<div id="acdiv3" style="display:none">
		<a class="labels" style="margin-left:25px">Ref No:<span>*</span></a>
		<input type="text" id="ref76" class="input_field"  style="width:70px; margin-left:10px;" value="'.$cardno.'"/>
		</div>
		
		
	<a class="labels"  id="amtlabel" style="margin-left:15px">Amount:<span>*</span></a>
	<input type="text" id="amount76" class="input_field"  style="width:70px; margin-left:10px;"/>
	<div class="cleaner_h10"></div>					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addpaymode()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewpaymode()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptypaymode()\"/>";
					echo'<a class="labels" style="float:right;margin-right:3x">Credit Note?</a>
		<input type="checkbox" value="1" name="creditnote" id="creditnote" style="float:right;margin:8px 3px 0 3px" onclick="issuecred()">		';
		echo'<input type="checkbox" value="1" name="cummulative" id="cummulative" style="display:none;float:right;margin:8px 3px 0 3px">		';				
				
							
							echo"<script>$('#fintot').val((".$ftotal.").formatMoney(2, '.', ','))</script>";
								echo'
								<div class="cleaner_h5"></div>
								
								
								
								
								</div>
								
								<div id="personal" style="width:744px; height:270px; float:left; margin-top:0px">
								<h5 style="text-align:center">Payments</h5>
								<div id="display" style="margin-top:0px; height:241px;">
	
								</div>
								</div>
								</div>
								
								<div id="personal" style="float:right;height:395px">
								<a class="labels">Bill:</a>
								<input type="text" id="fintot" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Paid:</a>
								<input type="text" id="ampaid" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Balance:</a>
								<input type="text" id="changeam" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
							';
							/*
							echo"<input type=\"button\" value=\"Preview\" id=\"preview\"  
								style=\"margin-left:20px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"previewreceipt('".$pid."');\"/>";
								 */

								echo"<input type=\"button\" value=\"Submit\" id=\"submit\"  
								style=\"margin-left:20px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"submitpaymode('".$pid."','".$category."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:20px; "></div>
								 
								 <div style="margin-top:265px; width:235px; height:50px; background:#0ff; border:2px solid #333;display:none">
								 <h5 style="text-align:center; color:#000">'.$username.' CASHIER A/C</h5>';
								echo"<h5 style=\"text-align:center; color:#000\">BAL:<a id=\"maef\"></a>
								</h5> 
								 </div>
								</div>
								
   							";
							if($dcare==1){
							
							}
	
				break;
				case 138:
				$stamp=date('Ymd');
					echo"<script>$('#cons13').parent().find('input:first').focus();</script>";
					echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:110px;max-height:320px;  width:320px;top:20%">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Triage:";
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId asc");
			$num_results = mysqli_num_rows($result);
				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="93">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Consultations using these dates" onclick="searchpay(13,2);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons13">
				<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'</option>';
							}
		echo'</select>
		</div>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
									<div id="figure1" style="width:69px">Pat. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId desc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['PrescId']);
		if(stripslashes($rowb['Status'])==1){
		echo"<div class=\"normal1\" style=\"\" onclick=\"seepat('".$pid."',93)\">";
		}else {echo"<div class=\"normal2\"  style=\"\" onclick=\"seepat('".$pid."',93)\">";}
		echo'<div id="figure2" style="width:200px">'.stripslashes($rowb['PatName']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>';
				
				break;
				case 139:
				echo"<script>$('.pnt3').parent().find('input:first').focus();</script>";	
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Inpatient Billing';
			
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="140"/>

		<select class="input_field" id="menusearch" style="float:right; margin-right:10px;display:none">
		<option value="1" onclick="menuop(1)">Patient Name</option>
		</select>

		<div class="cleaner_h5"></div>
	<div id="op1">';
	if($userdep=='WARD'||$userdep=='MATERNITY'||$userdep=='HDU'||$userdep=='DIALYSIS'){
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PatName asc");
			}else{
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PatName asc");
			}
							$num_results = mysqli_num_rows($result);
							
		echo'<a class="labels" style="margin-left:10px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
		<div class="cleaner_h5"></div>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt31" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
			
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['PatId']);
								$presc=stripslashes($row['PrescId']);
								echo'<option value="'.$presc.'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	

	<div class="cleaner_h5"></div>
	
				</div>';	
					
				break;
				case '139.1':
				echo"<script>$('.pnt3').parent().find('input:first').focus();</script>";	
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Inpatient Compiled Bill';
			
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="156"/>
		<select class="input_field" id="menusearch" style="float:right; margin-right:10px;display:none">
		<option value="1" onclick="menuop(1)">Patient Name</option>
		</select>
		
		<a class="labels" style="margin-left:10px; font-weight:bold">Search By:</a>
		<div id="op1">';
	if($userdep=='WARD'||$userdep=='MATERNITY'||$userdep=='HDU'||$userdep=='DIALYSIS'){
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PatName asc");
			}else{
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PatName asc");
			}
							$num_results = mysqli_num_rows($result);
							
		echo'<a class="labels" style="margin-left:10px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
		<div class="cleaner_h5"></div>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt31" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
			
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['PatId']);
								$presc=stripslashes($row['PrescId']);
								echo'<option value="'.$presc.'">'.stripslashes($row['PatName']).'-'.stripslashes($row['PatId']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	

	<div class="cleaner_h5"></div>
	
				</div>';	
					
				break;
				case 140:
						if(isset($_SESSION['ward'])){unset($_SESSION['ward']);}
		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatient Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

	echo"<script>$('#item44').parent().find('input:first').focus().width(200);</script>";
	echo"<script>$('#income44').parent().find('input:first').width(130);</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		 if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("ward"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("ward",1); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		savewardbill("ward"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("ward"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("ward");
      	}
     	 
    }</script>';						
	$pid=$_GET['param'];
							
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$mode=stripslashes($rowa['PayMode']);
							$patname=stripslashes($rowa['PatName']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Inpatient Billing-'.$patname.'-'.$pntno.'-PAYMODE:'.$mode.'</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Inpatient Billing</a></li>
				</ul>
			<div id="tabs-1">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:0px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:70px; margin-left:0px;"/>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:0px;float:left; width:230px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ =stripslashes($row['Category']);
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select><input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
	</div>
							<a class="labels" style="margin-left:10px">Qty:</a>
							<input type="text" id="quat44" class="input_field"  style="width:30px; margin-left:10px;" value="1"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price44" class="input_field"  style="width:60px; margin-left:10px; "/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('ward',1)\"/>";
			
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 5px; float:left\" title=\"View Current Bill\" onclick=\"window.open('report.php?id=40&regn=".$pntno."')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 5px; float:left\" title=\"Empty Current Bill\" onclick=\"emptybill('ward')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
					<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>

<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44"><option value=""></option>';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								echo"<input type=\"button\" value=\"Save to Bill\" id=\"submit\"  
								style=\"margin-left:150px; float:left; cursor:pointer;width:110px\"
								 class=\"in_field\" onclick=\"savewardbill('ward');\"/>";
								 
								
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
				</div>';

							
					break;
							
							case 141:
$reg='';
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Birth Entries Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
							$row=mysqli_fetch_array($result);
							
							echo'<div id="newstude">
						
								<h2  style="float:left; padding:5px 5px 0 0; margin:0">Births Register</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help55()\"/></div>";								
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">';
								echo"<h5>Register Birth</h5>";
								echo'<div class="cleaner_h5"></div>
								<a class="labels">Name:</a>
                                 <input type="text" id="name" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <input  id="maleGender" name="gender" type="radio" value="male" class="radio" checked="checked">Male.
								 <input  id="femaleGender" name="gender" type="radio" value="female" class="radio">Female.
								<div class="cleaner_h5"></div> 
								 <a class="labels">T.O.B:<span>*</span></a>
                                <input type="text" id="tob" name="oname"  class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">D.O.B:<span>*</span></a>
                                <input type="text" id="datepick" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Mother:<span>*</span></a>
                                <input type="text" id="mother" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels" title="">Doctor:<span>*</span></a>
                                <input type="text" id="doctor" name="oname" class="in_field" value="" title="Name of Person who confirmed death"/> 
								<div class="cleaner_h5"></div>
								
								
								</div>
							
								
								
								<div id="personal">
								<h5>Submit Details</h5>
								<a class="labels">Other Details:</a>
								<textarea id="odetail" style="float:right;height:70px" class="alergy"></textarea>
								<div class="cleaner_h5"></div>';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:40px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"regbirth('".$reg."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:60px;height:20px; "></div>
								
								</div>
								<div id="personal">
								
								</div>
								
								<div id="personal">
								
								</div>
   							';
							
					break;	
					case '142':
							echo"<script>$('#extmedic').parent().find('input:first').width(245);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set Insurance Companies Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
									
							echo'
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:470px; width:491px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Add New External Medic</h5>
	<div class="cleaner_h5"></div> 
								<a class="labels">Name:<span>*</span></a>
                                <input type="text" id="name" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Bank A/c No:</a>
                                <input type="text" id="acno" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="add" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="towna" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:</a>
                                <input type="text" id="mobile" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:20px 0 0 200px; float:left\" title=\"Submit\" onclick=\"addmed(1)\"/>";
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
		$resulta =mysqli_query($conn,"select * from extmedics where status=1 order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
echo'<option value="'.stripslashes($rowa['id']).'θ'.stripslashes($rowa['name']).'θ'.stripslashes($rowa['acno']).'θ'.stripslashes($rowa['address']).'θ'.stripslashes($rowa['town']).'θ'.stripslashes($rowa['tel']).'θ'.stripslashes($rowa['mobile']).'θ'.stripslashes($rowa['email']).'">'.stripslashes($rowa['name']).'</option>';
				}
		echo'
	</select>
	</div><div class="cleaner_h5"></div>
	<a class="labels">New Name:<span>*</span></a>
	<input type="text" id="regn" name="age" class="in_field"   style="display:none" value=""/> 
								
                                <input type="text" id="name2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Bank A/c No:</a>
                                <input type="text" id="acno2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Address:</a>
                                <input type="text" id="add2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Town:</a>
                                <input type="text" id="town2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Mobile No:</a>
                                <input type="text" id="mobile2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Tel:</a>
                                <input type="text" id="tel2" name="age" class="in_field"   style="width:270px;margin-right:10px" value=""/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Email:</a>
                                <input type="text" id="email2" name="age" class="in_field"   style="width:270px; margin-right:10px" value=""/> 
								';
				echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 200px; float:left\" title=\"Submit\" onclick=\"editmed(2)\"/>";
				echo"<img src=\"images/empty.png\" width=\"50\" height=\"50\" style=\"cursor:pointer; margin:5px 0 0 20px; float:left\" title=\"Delete User\" onclick=\"delmed()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
				</div>
									
								
									</div>';
								
							break;
							case 143:
							echo'<div id="newstude" style="width:996px">
								<div id="findstude" style="width:996px;">
								<h5 style="margin-left:10px">Medical Notes</h5>
								<object data="images/documents/mednotes.pdf" type="application/pdf" width="100%" height="95%">
								
								</object>
								
								</div></div>';
				
							break;
							case 144:
					
					$stamp=date('Ymd');
					echo"<script>$('#cons17').parent().find('input:first').focus();</script>";
					echo'<div id="modalDiv2"></div>';
					echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
					echo"<h5 style=\"margin-right:10px; color:#fff\">Corporate/Accum. Billing:";
					echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()">
						</h5></div>';
					$result =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' and DayCare=1 order by PrescId asc");
					$num_results = mysqli_num_rows($result);
					echo'<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:10px">From:</a>
					<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
					<a class="labels" style="margin-left:10px">To:</a>
					<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search DayCare using these dates" onclick="searchpay(17,6);"/>
					<div class="cleaner"></div>
					<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
					<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
					<div class="cleaner_h5"></div>
					<select id="cons17">
						<option value="">Select one...</option>';
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['PrescId']).'">'.stripslashes($row['PatName']).'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="145">
	<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>	';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:200px">Pat. Name</div>
	<div id="figure1" style="width:69px">Pat. No</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from newprescription where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."'  and DayCare=1 order by PrescId desc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['PrescId']);
		if(stripslashes($rowb['RecNurse'])==1){
		echo"<div class=\"normal1\"  onclick=\"seepat('".$pid."',145)\">";
		}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$pid."',145)\">";}
		echo'<div id="figure2" style="width:200px">'.stripslashes($rowb['PatName']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
					
					
							break;
							case 145:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Corporate Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

						echo"<script>$('#item44').parent().find('input:first').focus();</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		  if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("nurse"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("nurse",1); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("nurse"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("nurse"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("nurse");
      	}
     	 
    }</script>';						
	if(isset($_GET['pid'])){
		$pid=$_GET['pid'];
	}else {$pid=0;}
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Corporate Billing</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Day Care Billing</a></li>
			<li><a href="#tabs-2">Pharmacy</a></li>
			<li><a href="#tabs-3">Laboratory</a></li>
			<li><a href="#tabs-4">Radiology</a></li>
				</ul>
			<div id="tabs-1">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ = $userdep;
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."-Bal:".$bal."</option>";
						}
		echo'
		</select><input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
	</div>
							<a class="labels" style="margin-left:10px">Qty:</a>
							<input type="text" id="quat44" class="input_field"  style="width:40px; margin-left:10px;" value="1"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price44" disabled="disabled" class="input_field"  style="width:70px; ;border-color:#f00;margin-left:10px;" />
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('nurse',1)\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('nurse')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('nurse')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
					<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  disabled="disabled" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00"/>	';
				}else{
							echo'<input type="text" disabled="disabled" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
	<script>viewbill("nurse")</script>
	</div>
	</div>	';
								
echo"<input type=\"button\" value=\"Save to Bill\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:110px\"
								 class=\"in_field\" onclick=\"savenursebill('nurse');\"/>";
								 
								echo"<input type=\"button\" value=\"Submit to Cashier\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:110px\"
								 class=\"in_field\" onclick=\"submitbill('nurse');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			
			<div id="tabs-2">
					<div style="width:100%; float:left;padding:2px;height:370px; overflow-y:auto; border:1px solid #ccc;">
						<h5>Prescriptions</h5>';
										$resultb =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."' order by id");
																					$num_resultsb = mysqli_num_rows($resultb);	
																					for ($i=0; $i <$num_resultsb; $i++) {
																						$rowb=mysqli_fetch_array($resultb);
																						
											
											echo'
											
											<a class="labels" style="margin-top:10px;margin-bottom:5px">Date: <b>'.stripslashes($rowb['date']).'</b></a>
											<div class="cleaner"></div>
											<a class="labels">'.stripslashes($rowb['prescription']).'</a> 
											<div class="cleaner_h5"></div>
											<a class="labels" style="margin-top:10px;margin-bottom:5px">Prescribed By: <b>'.stripslashes($rowb['requested']).'</b></a>
											<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>';
										}
				
			echo'</div></div>
					<div id="tabs-3">
					<div style="width:100%; float:left;padding:2px;height:370px; overflow-y:auto; border:1px solid #ccc;">
					<h5>Requested Test Details</h5>';
				$resultq =mysqli_query($conn,"select * from labrequests where prescid='".$pid."'");
				$num_resultsa = mysqli_num_rows($resultq);
				$xa=1;	
				for ($i=0; $i <$num_resultsa; $i++) {
						$rowq=mysqli_fetch_array($resultq);
						echo '<a class="labels" style="margin-left:5px;">Test Name: <b>'.$xa.'. '.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>';
						$xa++;
				}
				
				
		echo'	</div>
				</div>
						
				<div id="tabs-4">
				<div style="width:100%; float:left;padding:2px;height:370px; overflow-y:auto; border:1px solid #ccc;">
					<h5>Requested Test Details</h5>';
				$resultq =mysqli_query($conn,"select * from radrequests where prescid='".$pid."'");
				$num_resultsa = mysqli_num_rows($resultq);
				$xa=1;	
				for ($i=0; $i <$num_resultsa; $i++) {
						$rowq=mysqli_fetch_array($resultq);
						echo '<a class="labels" style="margin-left:5px;">Test Name: <b>'.$xa.'. '.stripslashes($rowq['request']).'</b></a><br/><div class="cleaner"></div>';
						$xa++;
				}
				
				
		echo'	</div>
				
			</div>
								
					
					</div>';


					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}



					break;

					case 146:
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv2"></div>';
	
				echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Deposits Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterdeposits();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;


					case 147:
					
						$stamp=date('Ymd');
					echo"<script>$('#cons20').parent().find('input:first').focus();</script>";
					echo'<div id="modalDiv2"></div>';
				echo'<div id="mon" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Theatre:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from theatrequests where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' order by prescid asc");
					$num_results = mysqli_num_rows($result);
					$arr=array();
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['prescid']);
								$arr[stripslashes($row['prescid'])]=stripslashes($row['patname']).'-'.stripslashes($row['patid']);
								}
								$count=count($arr);

				echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="148">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Theatre using these dates" onclick="searchtheatre(20,3);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchtheatre">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$count.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons20">
				<option value="">Select one...</option>';

							foreach ($arr as $key => $val) {
							echo"<option value=\"".$key."\">".$val."</option>";
							}
								for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pid=stripslashes($row['PrescId']);
								echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['patname']).'-'.stripslashes($row['patid']).'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner"></div>
	<input class="input_field" style="display:none" id="idpay" type="text" value="148">
		<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
		<a class="labels" style="margin-left:10px">Unregistered Patient</a>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Patients</strong></a>";
	echo'<div class="cleaner"></div>
	<div id="title" style="margin-left:10px">
	<div id="figure1" style="margin-left:0px; width:280px">Patient Name</div>
	</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';

						foreach ($arr as $key => $val) {
							$resultb =mysqli_query($conn,"select * from theatrequests where prescid='".$key."' and status=1");
							$num_resultsb = mysqli_num_rows($resultb);
							if($num_resultsb>0){
							echo"<div class=\"normal1\"  onclick=\"seepat('".$key."',148)\">";
							}else {echo"<div class=\"normal2\"  onclick=\"seepat('".$key."',148)\">";}

							echo'<div id="figure2" style="width:280px">'.$val.'</div>
							</div>
							<div class="cleaner"></div>
							';

						}

		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>
		</div>';
							break;
					
					
					
							break;
							case 148:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Theatre Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

										
	if(isset($_GET['pid'])){
		$lid=$pid=$_GET['pid'];
	}else {$pid=0;}
							if(isset($_SESSION['theatre'])){unset($_SESSION['theatre']);}

							$resultq =mysqli_query($conn,"select * from theatrequests where prescid='".$pid."'");
							$rowq=mysqli_fetch_array($resultq);
							$pntno=stripslashes($rowq['patid']);
							$pid=stripslashes($rowq['prescid']);
							$stat=stripslashes($rowq['status']);
							$patname=stripslashes($rowq['patname']);
							$dcare=0;
							if(stripslashes($rowq['status'])==1){
								$labstatus='<b style="color:#F00"> PENDING</b>';
							}else{$labstatus='<b style="color:#0085b2">COMPLETED</b>';}


							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);
							
							if($dcare==1){
							$xxx=0;
							}else {$xxx=1;}
							
		echo"<script>$('#item44').parent().find('input:first').focus();</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		 if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("theatre"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("theatre",'.$xxx.'); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("theatre"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("theatre"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("theatre");
      	}
     	 
    }</script>';
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Theatre</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('report.php?id=39.1&rcptno=".$pid."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.$patname.'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>';
			if($pntno==''){
				echo'
				<li style="display:none"><a href="#tabs-4" >Theatre Requests</a></li>
				<li style="display:none"><a href="#tabs-1" >Theatre Notes</a></li>
				<li style="display:none"><a href="#tabs-5" >Theatre Summary</a></li>';
			}else{

				echo'
				<li><a href="#tabs-4">Theatre Requests</a></li>
				<li><a href="#tabs-1">Theatre Notes</a></li>
				<li><a href="#tabs-5">Theatre Summary</a></li>';
			}


				echo'<li><a href="#tabs-2">Theatre Time Table</a></li>
				<li><a href="#tabs-3" disabled="disabled">Theatre Billing/Make a Request</a></li>
				
				</ul>

				';

if($pntno==''){echo'<div id="tabs-5" style="display:none">';}else {echo'<div id="tabs-5">';}
			echo'<h5>Theatre Summary</h5>
				<div class="cleaner_h5"></div>
		 <div style="height:320px; overflow-y:auto; border:1px solid #ccc;width:700px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from theatrequests where prescid='".$lid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else{$x='<b style="color:#0085b2"> - [COMPLETED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Procedure</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['procedures']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Notes</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['notes']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div>
				
			</div>
		
			';
if($pntno==''){echo'<div id="tabs-1" style="display:none">';}else {echo'<div id="tabs-1">';}
			echo'
				
								<h5>Theatre Notes</h5>
								<script>area35= new nicEditor({fullPanel : true,maxHeight : 280}).panelInstance("theatre");</script>
				<textarea id="theatre" style="float:left;width:700px;height:280px;" class="alergy">'.stripslashes($rowq['notes']).'</textarea>
			
								<div class="cleaner_h5"></div>';
					echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"theatres('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:40px;"></div>
					</div> ';
					if($pntno==''){echo'<div id="tabs-4" style="display:none">';}else {echo'<div id="tabs-4">';}
			echo'
				<h5>Requested Test Details</h5>
				<a class="labels" style="margin-left:5px;">Procedure Name: <b>'.stripslashes($rowq['procedures']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Request Time: <b>'.stripslashes($rowq['date']).'  ['.stripslashes($rowq['reqtime']).']</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Requested By: <b>'.stripslashes($rowq['requested']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Status: '.$labstatus.'</a><br/><div class="cleaner"></div>';

				if($stat==2){

				echo'<a class="labels" style="margin-left:5px;">Done By: <b>'.stripslashes($rowq['doneby']).'</b></a><br/><div class="cleaner"></div>
				<a class="labels" style="margin-left:5px;">Time of Completion: <b>'.stripslashes($rowq['servtime']).'</b></a><br/><div class="cleaner"></div>';	
				}
				echo'
				
			</div>
								
				<div id="tabs-3">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where Category='Theatre' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('theatre',".$xxx.")\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('theatre')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('theatre')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
				<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								 class=\"in_field\" onclick=\"submitbill('theatre');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			
					<div id="tabs-2">
				<img src="images/plus.png" style="width:30px; height:30px; float:right; margin:0px 10px 0 0; cursor:pointer" onclick="createbigtask()"  title="Create Appointment" id="newevent" />
			';
		$result =mysqli_query($conn,"select * from calendar where  Category=23 order by Event_id desc");
							$num_results = mysqli_num_rows($result);	
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
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
	echo'
					
					</div>
					</div>';
					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

					break;
					
					
							case '149':
								
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses  Stock Usage Register Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; BORDER-RADIUS:0PX;">
							<div style="width:456px">	
							<h5 style="text-align:center;">Stock Usage Register</h5>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help56()\"/></div>";								
echo'<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:10px">Branch:<span>*</span></a>
			 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="brancht">
							<option value="'.$userdep.'">'.$userdep.'</option></select></div>
										<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:10px">Item:<span>*</span></a>
										 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="itemname">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from items where Type='GOOD' and ".$_SESSION['rights']." order by ItemName");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['ItemCode']).'">'.stripslashes($row['ItemName']).'</option>';
							}
										
										echo'</select></div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Qty Used:<span>*</span></a>
		<input type="text" id="qty" name="name" class="input_field" value=""  style="width:240px; float:right; margin-right:10px"/>		
		<div class="cleaner_h5"></div>	
			<a class="labels" style="margin-left:10px">Notes:<span>*</span></a>
			<textarea id="notes" class="input_field"  style="width:240px;height:100px; margin-right:10px; float:right; font-size:11px"/>
	<div class="cleaner_h20"></div>';
			echo"<input type=\"button\" value=\"Save\" id=\"submit\" style=\"margin-left:220px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"submitstockuse();\"/>";							
		echo'<div id="postresp" style="float:left; width:40px;height:40px; margin-left:20px"></div>';
							echo'</div></div></div>
							';
							break;
							
							case 150:
					
					echo"<script>$('#dept1').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:180px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Stock Request:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="float:left; margin-left:10px;">Requesting Branch:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="dept1">';
							echo'<option value="'.$userdep.'">'.$userdep.'</option>';
							echo'</select></div>
								<div class="cleaner_h5"></div>
							<a class="labels" style="float:left; margin-left:10px;">Requesting From:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="dept2">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
							echo'</select></div>
			</div>		<div class="cleaner_h10"></div>
								</div>
		';
							break;
							
							case 151:
					echo"<script>$('#dept3').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:100px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Stock Transfer:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="float:left; margin-left:10px;">Branch:(From)<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="dept3">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
							echo'</select></div>
			<div class="cleaner_h10"></div>
								</div>
		';
							break;
							
							case 152:
					$dep3=$userdep;
					echo"<script>$('#dept4').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:100px; width:420px">
					<div id="tit" style="width:400px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Stock Transfer:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<a class="labels" style="float:left; margin-left:10px;">Branch: <strong>'.$dep3.'</strong></a>
					<div class="cleaner_h5"></div>';
					$arr=array();
						$result =mysqli_query($conn,"select * from issuetable where Dep2='".$dep3."' and status=1 order by TransNo desc");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['IssueNo'])]='FROM '.stripslashes($row['Dep1']).'-'.stripslashes($row['TransDate']).'';
							}
							echo'
			<a class="labels" style="margin-left:10px">No. of Results:<strong id="nump"> '.count($arr).'</strong></a>
			<div class="cleaner_h5"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
			<select id="dept4">
				<option value="">Select one...</option>';
							foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$key.','.$val.'</option>';
							}
		echo'</select>
		</div>
	<div class="cleaner_h5"></div>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Issues Requested</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:280px">Dept</div>
									<div id="figure1" style="width:89px">Issue. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
		foreach ($arr as $key => $val) {
		echo"<div class=\"normal2\"  style=\"background:#f00\" onclick=\"seeissue('".$key."')\">";
		echo'<div id="figure2" style="width:280px">'.$val.'</div>
		<div id="figure2" style="width:90px">'.$key.'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		<div class="cleaner_h5"></div>
		</div></div>
		';
							break;
								case 153:
					$stamp=date('Ymd');
					echo"<script>$('#cons23').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="min-height:110px;max-height:320px;  width:320px;">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Consolidate Invoices:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from receipts where stamp>='".date('Ymd')."' and  stamp<='".date('Ymd')."' and paymode='Companies' and invno='' order by id desc");
			$arr=array();
			$num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++) {
			$row=mysqli_fetch_array($result);
			$arr[stripslashes($row['patid'])]=stripslashes($row['rcptno']).'#'.stripslashes($row['patname']).'#'.stripslashes($row['patid']).'#'.stripslashes($row['date']).'#'.stripslashes($row['category']);
			}
			echo'<div class="cleaner_h5"></div>
				<input class="input_field" style="display:none" id="idpay" type="text" value="153">
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Payments using these dates" onclick="searchpay3(23,8);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.count($arr).'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons23">
				<option value="">Select one...</option>';
						foreach ($arr as $key => $val) {
								$pieces=explode("#",$val);
								echo'<option value="'.$key.'">'.$pieces[1].'-'.$key.'</option>';
							}
		echo'</select>
		</div>';
	echo"<a class=\"labels\" style=\"margin-left:90px\"><strong>Today's Payments</strong></a>";
	echo'<div class="cleaner"></div>
									<div id="title" style="margin-left:10px">
									<div id="figure1" style="margin-left:0px; width:69px">Pat. No</div>
									<div id="figure1" style="width:200px">Pat. Name</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	foreach ($arr as $key => $val) {
			$pieces=explode("#",$val);
		echo"<div class=\"normal1\"  onclick=\"seeconsinv('".$key."')\">";
		echo'<div id="figure2" style="width:70px">'.$key.'</div>
		<div id="figure2" style="width:200px">'.$pieces[1].'</div>
		</div>
		<div class="cleaner"></div>
		';
	}
		echo'</div>
		
		<div class="cleaner_h5"></div></div>
								</div>';
				
				break;
				
				case 154:
				$patid=$_GET['pid'];
				echo"<script>$('#icd10').parent().find('input:first').width(120);</script>";
				$_SESSION['consinvoice']=array(array());
				unset($_SESSION['consinvoice'][0]);
				
					$result =mysqli_query($conn,"select * from patients where pntno='".$patid."'");
					$row=mysqli_fetch_array($result);
					$patname=stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']);
					$schemeid=stripslashes($row['insid']);	
					$schemename=stripslashes($row['insurer']);		
					$cardno=stripslashes($row['cardno']);
					$paytype=stripslashes($row['paytype']);
					$benamount=stripslashes($row['benamount']);
					$exid=stripslashes($row['exid']);
					$smartstatus=stripslashes($row['smartstatus']);if($smartstatus==1){$ss='ON';}else{$ss='OFF';}
					$payment_mode='PAYMENT MODE:'.$insurer.'-CARD NO:'.$cardno.'-SMART STATUS:'.$ss.'';	

					$resulta =mysqli_query($conn,"select * from schemes where SchemeId='".$schemeid."' limit 0,1");
					$row=mysqli_fetch_array($resulta);	
					$insid=stripslashes($row['CompanyId']);	
					$insurer=stripslashes($row['CompanyName']);	
					
					$d1=preg_replace('~/~', '', $_GET['d1']);
					$d2=preg_replace('~/~', '', $_GET['d2']);

					$result =mysqli_query($conn,"select * from newprescription where PatId='".$patid."' order by Id desc limit 0,1");
					$row=mysqli_fetch_array($result);
					$prescid=stripslashes($row['PrescId']);
					$parts=explode(';',stripslashes($row['Icd10']));
					$icd10=$parts[0];


					$result =mysqli_query($conn,"select * from creditcustomers where CustomerId='".$insid."'  limit 0,1");
					$row=mysqli_fetch_array($result);
					$copay=stripslashes($row['CoPay']);
					$copayam=stripslashes($row['CoPayAm']);	
					$copaytype=stripslashes($row['CoPayType']);	

					$result =mysqli_query($conn,"select * from receipts where patid='".$patid."' and stamp>='".$d1."' and  stamp<='".$d2."' and paymode!='Companies' order by id asc limit 0,1");
					$row=mysqli_fetch_array($result);
					$copayrcptno=stripslashes($row['rcptno']);
					if($copayrcptno==''){$copayrcptno=0;}
						
				    $result = mysqli_query($conn,"insert into log values('0','".$username." accesses Consolidate Invoices Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				

							echo '<input type="hidden" id="copay" value="'.$copay.'"/>
							<input type="hidden" id="copayam" value="'.$copayam.'"/>
							<input type="hidden" id="copaytype" value="'.$copaytype.'"/>';

							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">Consolidate Invoices-".$patname."-".$patid."</h2>";
								echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/rep.png\" width=\"25\" height=\"30\" style=\"cursor:pointer;\" title=\"Open Consultation Record\"  onclick=\"window.open('report.php?id=4&rcptno=".$prescid."')\" /></div><div class=\"cleaner\" style=\"border-bottom:2px solid #333\"></div>";														
								echo"<h2  style=\"float:left; padding:5px 5px 5px 0; margin:0\">".$payment_mode."</h2>";
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<input type="hidden" id="exid" value="'.$exid.'" />
								
								
								<div id="personal" style="width:744px; height:395px">
								<h5 style="text-align:center">Interim Invoices</h5>
									<div class="cleaner_h10"></div>
									<div id="inside" style="height:300px; overflow-y:auto">
									<div id="title" style="margin-left:0px">
									<div id="figure1" style="width:109px">Date</div>
									<div id="figure1" style="width:159px">Interim Inv. No</div>
									<div id="figure1" style="width:229px">Department</div>
									<div id="figure1" style="width:100px">Amount</div>
									<div id="figure1" style="width:79px">Add/Remove</div>
									</div>
								
								';
						$result =mysqli_query($conn,"select * from receipts where patid='".$patid."' and stamp>='".$d1."' and  stamp<='".$d2."' and paymode='Companies' and invno='' order by id asc");
						$num_results = mysqli_num_rows($result);
						for ($i=0; $i <$num_results; $i++) {
						$rowa=mysqli_fetch_array($result);
						$rcptno=stripslashes($rowa['rcptno']);
						$tno=$rcptno;
						echo"<div class=\"normal\"   >";
						echo'<div id="figure2" style="width:110px; margin-left:0">'.dateprint(stripslashes($rowa['date'])).'</div>';
						echo"<div id=\"figure2\" title=\"View Invoice\" style=\"width:160px\" onclick=\"window.open('output.php?id=5&rcptno=".$rcptno."')\" >".stripslashes($rowa['rcptno'])."</div>";
						echo'<div id="figure2" style="width:230px">'.stripslashes($rowa['category']).'</div>';
						echo'<div id="figure2" style="width:100px">'.stripslashes($rowa['amount']).'</div>';
						echo"<div id=\"figure2\" style=\"width:80px;height:16px; overflow:hidden\"><input type=\"checkbox\" id=\"tick".$tno."\" onclick=\"tickinv('".$tno."','".stripslashes($rowa['amount'])."')\" name=\"check".$tno."\" value=\"1\" /></div>";
						echo'</div>
						<div class="cleaner"></div>';
							
						
						}
			
						echo'</div>
						</div>
								
								
								<div id="personal" style="float:left;width:238px; height:395px">
								<a class="labels">Total:</a>
								<input type="text" id="total" name="oname"  class="in_field" value="" style=" border-color:#f00" disabled="disabled"/> 
								<div class="cleaner_h10"></div>';
								if($smartstatus==0){
								echo"<input type=\"button\" value=\"Submit\" id=\"submit\"   style=\"margin-left:40px; float:left; cursor:pointer;width:60px\" class=\"in_field\" onclick=\"submitconsinvoice(0);\"/>";
								}else{

									echo'
									<a class="labels">Co-Pay R/No:</a>
								    <input type="text" id="copayrcptno"  class="in_field" value="'.$copayrcptno.'" style="width:100px; border-color:#f00"/>
								    <div class="cleaner_h10"></div>
								    <a class="labels">Co-Pay Amount:</a>
								    <input type="text" id="copayamount"  class="in_field" value="0" style="width:100px; border-color:#f00"/>
								    <div class="cleaner_h10"></div>
								    <a class="labels">ICD10 Code:</a>
								    <input type="text" id="icd10"  class="in_field" value="'.$icd10.'" style="width:130px; border-color:#f00"/>
								   <div class="cleaner_h10"></div>';
									echo"<input type=\"button\" value=\"Forward to Smart\" id=\"submit\"   style=\"margin-left:10px; float:left; cursor:pointer;width:130px;background:#ff3\" class=\"in_field\" onclick=\"forwardtosmart('".$patid."');\"/>";
									echo'<div class="cleaner" style="width:100%;height:10px"></div>';
									echo '<div id="newstudent2" style="width:100%; margin-right:10px;"></div>';
								}
								
								echo'<div class="cleaner" style="width:100%;height:10px"></div>
								<input type="button" value="Exit" id="exit" style="margin-left:10px; background:#f00;float:left; cursor:pointer;width:50px" class="in_field"  onclick="hidenewstude();"/><div class="cleaner" style="width:100%;height:10px"></div>
								
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:20px; "></div>
								 
								</div></div>';
	
				break;
				
				case 155:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses CSSD Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

										
	if(isset($_GET['pid'])){
		$pid=$_GET['pid'];
	}else {$pid=0;}
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$dcare=stripslashes($rowa['DayCare']);
							$result =mysqli_query("select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$paytype=stripslashes($row['paytype']);
							$smartstatus=stripslashes($row['smartstatus']);
							$benamount=stripslashes($row['benamount']);
							
							if($dcare==1){
							$xxx=0;
							}else {$xxx=1;}
							
		echo"<script>$('#item44').parent().find('input:first').focus();</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		 if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("cssd"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("cssd",'.$xxx.'); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("cssd"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("cssd"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("cssd");
      	}
     	 
    }</script>';
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">CSSD</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">CSSD Billing</a></li>
				</ul>
		
								
				<div id="tabs-1">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('cssd',".$xxx.")\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewbill('cssd')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptybill('cssd')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
				<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>		
			<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44">';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								 class=\"in_field\" onclick=\"submitbill('cssd');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			</div>';
					//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}

					break;
						
						
						
						case 156:
						
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatient Final Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$pid=$_GET['param'];

$arr=array();
							
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$mode=stripslashes($rowa['PayMode']);
							$patname=stripslashes($rowa['PatName']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							$k=0;
							$resultc =mysqli_query($conn,"select * from maindepts order by Branchname");
							$num_resultsc = mysqli_num_rows($resultc);
							for ($z=0; $z <$num_resultsc; $z++) {
								$rowc=mysqli_fetch_array($resultc);
								$bname=stripslashes($rowc['Branchname']);
								//deposit issue
										
										$e=0;
										$resultd =mysqli_query($conn,"select * from  tempbill where patid='".$pntno."' and category='".$bname."' and status=1 and itcode!='1443'");
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
							
										$x=0;
										$resultd =mysqli_query($conn,"select * from  tempbill where patid='".$pntno."'  and status=1 and itcode='84'");
										$num_resultsd = mysqli_num_rows($resultd);
										for ($i=0; $i <$num_resultsd; $i++) {
										$rowd=mysqli_fetch_array($resultd);
										$x+=preg_replace('~,~', '', stripslashes($rowd['subnet']));
										}
										
							$k+=$x;
										
							
							echo"<script>$('#subtotal').val((".$k.").formatMoney(2, '.', ','));
							$('#losstotal').val((".$k.").formatMoney(2, '.', ','));
							$('#deptotal').val((".$x.").formatMoney(2, '.', ','))</script>";
										
							
							
								
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Inpatient Final Bill-'.$patname.'-'.$pntno.'-PAYMODE:'.$mode.'</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Inpatient Final Bill</a></li>
				</ul>
			<div id="tabs-1">
		<div id="itemsdisp" style="height:330px; width:686px; background:#fff; margin-right:5px; padding-left:10px; BORDER-RADIUS:0PX; overflow-y:auto">
	<div id="display" style="margin-top:0px; ">';
	
										
										echo'<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px">DEPOSIT PAID</div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" disabled="disabled" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px; border-color:#f00" id="deptotal"/></div>
										</div>
										<div class="cleaner"></div>';
											
										
										
										
										echo'<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px">ADMISSION CHARGES</div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="admtotal" onkeyup="calcinpatient()"/></div>
										</div>
										<div class="cleaner"></div>
										<div class="normal" style="">
										<div id="figure2" style="width:80px">BED CHARGES</div>
										<div id="figure2" style="width:69px">
										<select class="put_field" id="btype" style="width:65px; margin-left:0px;">
										<option value="General">General</option>
										<option value="Private">Private</option>
										</select>
										</div>
										<div id="figure2" style="width:110PX">FROM
										<input type="text" class="put_field" value="'.stripslashes($rowa['AdmDate']).'"
										style="background:#fff;width:70px; margin-top:-4px" id="fromdate"/></div>
										<div id="figure2" style="width:100PX">TO
										<input type="text" class="put_field" value="'.date('d/m/Y').'" 
										style="background:#fff;width:70px; margin-top:-4px" id="todate"/></div>
										<div id="figure2" style="width:110PX">PER DAY
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:50px; margin-top:-4px" id="perday"/></div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="bedtotal"  onkeyup="calcinpatient()"/></div>
										</div>
										
										<div class="cleaner"></div>';
										foreach ($arr as $key => $val) {
								echo"<div title=\"View Bill\" class=\"normal\" style=\"border-top:0px solid #333\" onclick=\"window.open('report.php?id=40&regn=".$pntno."&categ=".$key."')\">";
										echo'<div id="figure2" style="width:513px">'.$key.'</div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" disabled="disabled" class="put_field" value="'.$val.'" 
										style="background:#fff;width:80px; margin-top:-4px; border-color:#f00" id="" onkeyup="calcinpatient()"/></div>
										</div><div class="cleaner"></div>';
						}
										
							
								echo'<div class="normal" style="border-top:0px solid #333">
										<div id="figure2" style="width:200px">HOSPITAL FEES</div>

										<div id="figure2" style="width:132px">
											<select class="put_field" id="hosfee1" style="width:120px; margin-left:10px;">								
												<option value="θ">Select fee type...</option>
												<option value="Doctors Fee">Doctors Fee</option>
												<option value="Nursing Care">Nursing Care</option>
											</select>
										</div>

										<div id="figure2" style="width:159px">
											<select class="put_field" id="docname1" style="width:130px; margin-left:10px;">
								
									<option value="θ">Service by...</option>';
							$resulta =mysqli_query($conn,"select * from extmedics where id!=1 order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['id'])."θ".stripslashes($rowa['name'])."\">".stripslashes($rowa['name'])."</option>";	
							}
							
							echo'</select></div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="doctotal1" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:0px solid #333">
										<div id="figure2" style="width:200px">HOSPITAL FEES</div>

										<div id="figure2" style="width:132px">
											<select class="put_field" id="hosfee2" style="width:120px; margin-left:10px;">								
												<option value="θ">Select fee type...</option>
												<option value="Doctors Fee">Doctors Fee</option>
												<option value="Nursing Care">Nursing Care</option>
											</select>
										</div>
											
										<div id="figure2" style="width:159px">
										<select class="put_field" id="docname2" style="width:130px; margin-left:10px;">
								
									<option value="θ">Service by...</option>';
							$resulta =mysqli_query($conn,"select * from extmedics where id!=1 order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['id'])."θ".stripslashes($rowa['name'])."\">".stripslashes($rowa['name'])."</option>";	
							}
							
							echo'</select>
									</div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="doctotal2" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:0px solid #333">
										<div id="figure2" style="width:200px">HOSPITAL FEES</div>

										<div id="figure2" style="width:132px">
											<select class="put_field" id="hosfee3" style="width:120px; margin-left:10px;">								
												<option value="θ">Select fee type...</option>
												<option value="Doctors Fee">Doctors Fee</option>
												<option value="Nursing Care">Nursing Care</option>
											</select>
										</div>
											
										<div id="figure2" style="width:159px">
											<select class="put_field" id="docname3" style="width:130px; margin-left:10px;">
								
									<option value="θ">Service by...</option>';
							$resulta =mysqli_query($conn,"select * from extmedics where id!=1 order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['id'])."θ".stripslashes($rowa['name'])."\">".stripslashes($rowa['name'])."</option>";	
							}
							
							echo'</select></div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="doctotal3" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										
										<div class="normal" style="border-top:0px solid #333">
										<div id="figure2" style="width:170px">OTHER FEES</div>
										<div id="figure2" style="width:332px">DESC:
										<input type="text" class="put_field" value=""
										style="background:#fff;width:260px; margin-top:-4px" id="otdesc"/></div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="othertotal" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px"><b>SUB TOTAL</b></div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="hidden" id="subt" value="'.$k.'"/>
										<input disabled="disabled" type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px; border-color:#f00" id="subtotal"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px"><b>DISCOUNT</b></div>
										<div id="figure2" style="width:130PX">AMNT.';
										
										$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
										$row=mysqli_fetch_array($result);
										if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44" onkeyup="calcinpatient()"class="put_field"  value="0" style="background:#fff;width:80px; margin-top:-4px;"/>	';
				}else{
							echo'<input type="text" onkeyup="calcinpatient()" id="disc44" title="Double Click to Get Authorization" class="put_field"  value="0" style="background:#fff;width:80px; margin-top:-4px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}echo'</div>
										</div>	<div class="cleaner"></div>	
											
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:332px"><b>NHIF</b></div>
										
										<div id="figure2" style="width:170PX">CLAIM NO:
										<input type="text" class="put_field" value=""
										style="background:#fff;width:100px; margin-top:-4px" id="claimno"/></div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="nhiftotal" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
											
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:170px"><b>COMPANY TO PAY</b></div>
												
												<div id="figure2" style="width:332PX;">
								<select class="put_field" id="compay" style="width:200px; margin-left:10px;">
								
									<option value="">Select one...</option>';
								$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['CustomerId'])."θ".stripslashes($rowa['CustomerName'])."\">".stripslashes($rowa['CustomerName'])."</option>";	
							}
								echo'</select>
										</div>
										
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="comtotal" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px"><b>CASH/BALANCE TO PAY [<small style="font-weight:normal"> Negative incase of refund.]</small></b></div>
										<div id="figure2" style="width:130PX">TOTAL
										<input type="text" class="put_field" value="" 
										style="background:#fff;width:80px; margin-top:-4px" id="cashtotal" onkeyup="calcinpatient()"/></div>
										</div>	<div class="cleaner"></div>	
										
										<div class="normal" style="border-top:1px solid #333">
										<div id="figure2" style="width:513px"><b>AMOUNT PENDING/DIFFERENCE</b></div>
										<div id="figure2" style="width:130PX">TOTAL
										<input disabled="disabled" type="text" class="put_field"  
										style="background:#fff;width:80px; margin-top:-4px; border-color:#f00" id="losstotal"/></div>
										</div><div class="cleaner"></div>			
	</div>
	</div>  <div class="cleaner_h5"></div>	';
								
								
								
								echo"<input type=\"button\" value=\"Submit Bill\" id=\"submit\"  
								style=\"margin-left:150px; float:left; cursor:pointer;width:110px\"
								 class=\"in_field\" onclick=\"submitinfinal();\"/>";
								 echo"<input type=\"button\" value=\"View Interim Bill\" id=\"submit\"  
								style=\"margin-left:10px; float:left; cursor:pointer;width:150px\"
								 class=\"in_field\" onclick=\"previewinfinal();\"/>";
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
				</div>';

							
					break;
							
							case 157:
							$patid=$_GET['param'];
							$result =mysqli_query($conn,"select * from patients where pntno='".$patid."'");
							if( mysqli_num_rows($result)==0){
			echo "<script>editpatient(157);</script>";
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
			
							$result = mysqli_query($conn,"DELETE from patients where pntno='".$patid."'");
							if($result){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from patients database.Patient No:".$patid."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
								echo"<script>
										$().customAlert();
										alert('Success!', '<p>Delete Succesful.</p>');
										e.preventDefault();
										</script>"	;
							}else{echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>Delete not Succesful.</p>');
										e.preventDefault();
										</script>";}
							break;
							
			case 158:
			$param=$_GET['param'];
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Admissions  Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$result =mysqli_query($conn,"select * from patients where pntno='".$param."'");
							$num_results = mysqli_num_rows($result);
							if( mysqli_num_rows($result)==0){
			echo "<script>editpatient(158);</script>";
			
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
							$row=mysqli_fetch_array($result);
							$ipno=stripslashes($row['ipno']);
							
							echo'<div id="newstude">
						<h2  style="float:left; padding:5px 5px 0 0; margin:0">InPatient Admission-'.stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']).'-'.stripslashes($row['pntno']).'</h2>';
		echo'	<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"admitmsee('".$param."')\"/></div>";
				echo'	 <div id="res2" style="float:right;width:30px; height:30px; margin-left:10px"></div>';						
				echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>	
																	<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">1<sup>st</sup> Name:<span>*</span></a>
                                <input type="text" id="name" name="name" disabled="disabled"  style="border-color:#f00" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">2<sup>nd</sup> Name:<span>*</span></a>
                                <input type="text" id="oname" name="oname"   disabled="disabled"  style="border-color:#f00"class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">3<sup>rd</sup> Name:<span>*</span></a>
                                <input type="text" id="lname" name="oname"  disabled="disabled"  style="border-color:#f00"  class="in_field" value="'.stripslashes($row['lname']).'"/> 
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
							
								
								
								
								<div id="personal" style="width:491px">
								<h5>Demographics</h5>
								<a class="labels" style="">Payment Mode:<span>*</span></a>
								
								<select class="select" id="paymode" style="float:right; width:290px; margin-left:10px;">
								<option value="">Select one...</option>
								
								<option value="CASH">CASH</option>
								<option value="INSURANCE">INSURANCE</option>
								<option value="NHIF">NHIF</option>
								<option value="FREE">FREE</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels" style="">Doctor:<span>*</span></a>';
								echo'<input class="input_field" style="float:right; margin-left:10px;width:280px;" value="" id="doctor" type="text">';
								echo'<div class="cleaner_h5"></div>
								<a class="labels" style="">Ward:<span>*</span></a>
								<select class="select" id="wardlist" style="float:right; width:290px; margin-left:10px;">
								<option value="">Select one...</option>
								<option value="MALE_WARD">MALE WARD</option>
								<option value="FEMALE_WARD">FEMALE WARD</option>
								<option value="SURGICAL_WARD">SURGICAL_WARD</option>
								<option value="MATERNITY">MATERNITY</option>
								<option value="PAEDIATRICS">PAEDIATRICS</option>

								
								</select>	
								<div class="cleaner_h5"></div>
								<a class="labels" style="">Medical Record Setting:<span>*</span></a>
								<select class="select" id="medrecord" style="float:right; width:290px; margin-left:10px;">
								';
								echo'
								<option value="1">Create New Encounter</option>
								<option value="0">Use Last Medical Encounter</option>
								
								</select>	
									<div class="cleaner_h5"></div>
							<a class="labels" style="">Inpatient No Setting:<span>*</span></a>
								<select class="select" id="ipnosett" style="float:right; width:290px; margin-left:10px;">
								';
								echo'
								<option value="1"  onclick="hideip(0)">Auto-generate New I/P</option>
								<option value="0" onclick="hideip(1)">Use Current I/P No</option>
								
								</select>	
							<div class="cleaner_h5"></div>
							<div id="ip" style="display:none">		
							<a class="labels" style="">Inpatient No:<span>*</span></a>
							<input class="input_field" style="float:right; margin-left:10px;width:280px" id="ipno" type="text" value="'.$ipno.'">
							<div class="cleaner_h5"></div>
							</div>
								</div>
								
								<div id="personal">
								
								</div>
   							';
							break;	
							
							case 159:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Admit Patient Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv2"></div>';
			echo'<div id="mon" style="height:310px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Patient Admission
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Patient:</a>
				
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])."-".stripslashes($row['pntno'])."</option>";
							}
							echo'</select>
				</div>
				<a class="labels" style="margin-left:20px">Payment Mode:</a>
				<div class="cleaner_h5"></div>
				<input class="input_field" style="float:left; margin-left:10px;width:280px" id="paymode" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-right:20px;margin-left:20px">Send To:</a>
                                <input  style="margin-top:8px"   name="idbmat" type="radio" value="WARD" class="radio">WARD
								 <input  style="margin-top:8px"  name="idbmat" type="radio" value="MATERNITY" class="radio">Maternity
								 <input  style="margin-top:8px"  name="idbmat" type="radio" value="HDU" class="radio">HDU
								 <input  style="margin-top:8px"  name="idbmat" type="radio" value="DIALYSIS" class="radio">Dialysis.
					<a class="labels" style="margin-left:20px">Doctor:</a>
					<div class="cleaner_h5"></div>
				<input class="input_field" style="float:left; margin-left:10px;width:280px" id="doctor" type="text">
			<input type="checkbox" value="1" name="direct" id="admit" style="float:left;margin:10px 0 0 10px">
		<a class="labels" style="margin-left:10px">New Patient?/Create New File?</a>
		<div class="cleaner_h5"></div>
			<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="admitmsee();"/>
									
					<div class="cleaner"></div>
						
						</div>';
							break;

							case 160:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Social Works Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$pid=$pntno=$_GET['param'];
	
							
							$result =mysqli_query($conn,"select * from patients where pntno='".$pid."'");
							$row=mysqli_fetch_array($result);
							
		
							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Social Works</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('patreport.php?id=1&reg=".$pntno."')\" title=\"Print Patient Report\">";
				
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Apply for Waiver</a></li>
				<li><a href="#tabs-2">Edit Waiver Note</a></li>
				</ul>
			<div id="tabs-1">
				<a class="labels">Amount Charged:</a>
                      <input type="text" id="amc1" onkeyup="calcsocial(1)" name="" class="in_field"  value=""style="float:left;margin-left:10px;width:100px" /> 
                      <a class="labels" style="margin-left:10px">Amount Paid:</a>
                      <input type="text" id="amp1"  onkeyup="calcsocial(1)" name="" class="in_field"  value=""style="float:left;margin-left:10px;width:100px" /> 
                       <a class="labels" style="margin-left:10px">Amount Waived:</a>
                      <input type="text" id="amw1"  onkeyup="calcsocial(1)" name="" class="in_field"  value=""style="float:left;margin-left:10px;width:100px;border-color:#f00" disabled="disabled"  /> 
                      	<div class="cleaner_h5"></div>

                      	<a class="labels">Diagnosis:</a>
                      <input type="text" id="diagn1" name="" class="in_field"  value=""style="float:left;margin-left:10px;width:150px" /> 

                      	<a class="labels"  style="margin-left:10px">Receipt Numbers:</a>
                      <input type="text" id="rcpt1" name="" class="in_field"  value=""style="float:left;margin-left:10px;width:200px" /> 
							          	<div class="cleaner_h5"></div>	
								<h5>WAIVER Notes</h5>
								<script>area41= new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance("social1");</script>
				<textarea id="social1" style="float:left;width:700px;height:200px;" class="alergy"></textarea>
			
								<div class="cleaner_h5"></div>';
					echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"applywaiver('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent2" style="float:left; margin-left:10px;height:40px;"></div>
					</div> 
						
						<div id="tabs-2">
					<a class="labels">Waiver No:</a>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="waivernos" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from waivers where patid='".$pntno."' order by id desc");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['id'])."\">".stripslashes($row['waiverno'])."-".stripslashes($row['date'])."</option>";
							}
							echo'</select>
				</div>
					<div class="cleaner_h5"></div>
				<div id="display"></div>
						</div>		
				
					</div>';
					
					break;
						
					case 161:

						$pid=$_GET['pid'];
						$result =mysqli_query($conn,"select * from waivers where id='".$pid."' order by id desc limit 0,1");
						$row=mysqli_fetch_array($result);

						echo'<a class="labels">Amount Charged:</a>
                      <input type="text" id="amc2" onkeyup="calcsocial(2)" name="" class="in_field"  value="'.stripslashes($row['amount_charged']).'" style="float:left;margin-left:10px;width:100px" /> 
                      <a class="labels" style="margin-left:10px">Amount Paid:</a>
                      <input type="text" id="amp2"  onkeyup="calcsocial(2)" name="" class="in_field"   value="'.stripslashes($row['amount_paid']).'" style="float:left;margin-left:10px;width:100px" /> 
                       <a class="labels" style="margin-left:10px">Amount Waived:</a>
                      <input type="text" id="amw2"  onkeyup="calcsocial(2)" name="" class="in_field"   value="'.stripslashes($row['amount_waived']).'" style="float:left;margin-left:10px;width:100px;border-color:#f00" disabled="disabled"  /> 
                      	<div class="cleaner_h5"></div>
                      	<input type="hidden" id="waiverno2"  value="'.stripslashes($row['waiverno']).'"/>

                      	<a class="labels">Diagnosis:</a>
                      <input type="text" id="diagn2" name="" class="in_field"   value="'.stripslashes($row['diagnosis']).'" style="float:left;margin-left:10px;width:150px" /> 

                      	<a class="labels"  style="margin-left:10px">Receipt Numbers:</a>
                      <input type="text" id="rcpt2" name="" class="in_field"   value="'.stripslashes($row['receiptnos']).'" style="float:left;margin-left:10px;width:200px" /> 
							          	<div class="cleaner_h5"></div>	
								<h5>WAIVER Notes</h5>
								<script>area42= new nicEditor({fullPanel : true,maxHeight : 180}).panelInstance("social2");</script>
				<textarea id="social2" style="float:left;width:700px;height:180px;" class="alergy">'.stripslashes($row['notes']).'</textarea>
			
								<div class="cleaner_h5"></div>';
					echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:100px; float:left; cursor:pointer;width:60px\"
								 class=\"in_field\" onclick=\"editwaiver('".$pid."');\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:20px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent3" style="float:left; margin-left:10px;height:40px;"></div>';

						break;


					case 162:
					
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Several Months Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv2"></div>';
	
				echo'<div id="mon" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Months(6) Summary Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="default_widgeta" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="default_widgetb" type="text">				
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enter3months();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;

				case 163:
					echo"<script>$('#patientnorecep').focus();</script>";	
					echo'<div id="modalDiv2"></div>';
					echo'<div id="mon" style="min-height:90px; width:380px">
					<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
					<h5 style="margin-right:0px; color:#fff">General Billing';
					echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
					echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
					<div class="cleaner_h5"></div>
					<div class="cleaner"></div>
					<input type="hidden" id="ser" name="ser"  value="164"/>
					<a class="labels" style="margin-left:10px">Patient No:</a>	
				 	<input type="text" id="patientnogeneral" name="regn" placeholder="Type Number and Press Enter" class="in_field" value=""  style="float:left;margin-left:10px;width:180px"/>
				 	<img src="images/zoom.png" style="width:30px; height:30px; float:right; cursor:pointer; margin-right:5px" onclick="findpatient()"/> 
				 	<a class="labels" style="float:right;margin-right:10px">Or  Search</a>	
					<div class="cleaner_h5"></div>	
					<input class="input_field" style="display:none" id="idpay" type="text" value="164">
					<input type="checkbox" value="1" name="recnew" id="admit" style="float:left;margin:10px 0 0 10px" onclick="unregnpat()">
					<a class="labels" style="margin-left:10px">Unregistered Patient</a>	
					<div class="cleaner_h5"></div>	
					<div id="searchres">
						<div class="cleaner_h5"></div>	
					</div>							
					<div class="cleaner_h5"></div>
						</div>';	
					
				break;

		case 164:
		if(isset($_SESSION['others'])){unset($_SESSION['others']);}

		if(isset($_GET['param'])){
		$reg=$_GET['param'];
		$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
		if( mysqli_num_rows($result)==0){
			echo "<script>reception();</script>";
			echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>No patient is registered under this number.</p>');
										e.preventDefault();
										</script>";
										
										exit;
		}
		$row=mysqli_fetch_array($result);
		
		}else if(isset($_GET['pid'])){
			$reg=$_GET['pid'];
			$result =mysqli_query($conn,"select * from patients where pntno='".$reg."'");
			$row=mysqli_fetch_array($result);
		}
	

							$rowy=$row;
			
								
		$patname=$names=stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']);
		$pntno=stripslashes($row['pntno']);

		$paytype=stripslashes($row['paytype']);
		$smartstatus=stripslashes($row['smartstatus']);
		$benamount=stripslashes($row['benamount']);


							

		$result = mysqli_query($conn,"insert into log values('0','".$username." accesses General Billing Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

	echo"<script>$('#item44').parent().find('input:first').focus().width(200);</script>";
	echo"<script>$('#income44').parent().find('input:first').width(130);</script>";
	echo'<script>document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
		
		 if (evt.keyCode==115){ //f4
	   	evt.preventDefault();
     $("#item44").parent().find("input:first").focus();	
	   }
		 if (evt.keyCode==119){ //f8
		 evt.preventDefault();
     	viewbill("others"); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       addbill("others",1); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitbill("others"); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help61(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
          emptybill("others"); 
      	}
		if (evt.keyCode==118){ //f7
		evt.preventDefault();
		deptbalance(); 
      	}
		
		
		if (evt.keyCode==114){ //f3
		evt.preventDefault();
		removelastbill("others");
      	}
     	 
    }</script>';						

							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">General/Others Billing-'.$patname.'-'.$pntno.'</h2>';
		echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/h.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help61()\"/></div>";								
								echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
				<div id="personal">			
				<h5>Demographics</h5>
								<div class="cleaner_h5"></div>
			<iframe name="leiframe" style="margin-right:60px" id="leiframe" class="leiframe" src="images/patients/'.stripslashes($row['pntno']).'.jpg"></iframe>					<div class="cleaner_h5"></div>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="regn" class="in_field"  
								value="'.stripslashes($row['pntno']).'" disabled="disabled" style="border-color:#f00" /> 
								<div class="cleaner_h5"></div>
								<a class="labels">Full Names:<span>*</span></a>
								<textarea id="oname" style="float:right;height:40px;" class="alergy" >'.stripslashes($row['fullnames']).'</textarea>
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
					<div id="tabs" style="width:748px; height:428px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Inpatient Billing</a></li>
				</ul>
			<div id="tabs-1">
				
								<h5>Billing<div id="depbal" style="float:right; margin-right:10px"></div></h5>
								<a class="labels" style="margin-left:0px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:70px; margin-left:0px;"/>
								<a class="labels" style="margin-left:10px">Item:</a>
								<div class="ui_widget"  style="margin-left:0px;float:left; width:230px">
	<select id="item44">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from items  where ".$_SESSION['rights']." order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$itemp=stripslashes($row['SalePrice']);
								$item=stripslashes($row['ItemName']);
								$code=stripslashes($row['ItemCode']);
								$categ =stripslashes($row['Category']);
								$type = stripslashes($row['Type']);
								$bal = stripslashes($row[$userdep]);
								echo"<option value=\"".$itemp."θ".$item."θ".$code."θ".$categ."θ".$bal."θ".$type."\">".$item."</option>";
						}
		echo'
		</select><input type="text" id="bal44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
		<input type="text" id="type44" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
	</div>
							<a class="labels" style="margin-left:10px">Qty:</a>
							<input type="text" id="quat44" class="input_field"  style="width:30px; margin-left:10px;" value="1"/>
							<a class="labels" style="margin-left:5px">Price:</a>
							<input type="text" id="price44" class="input_field"  style="width:60px; margin-left:10px; "/>
							<input type="text" id="red" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="categ" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
							<input type="text" id="code" class="input_field"  style="display:none;width:20px; margin-left:5px;"/>
					
						
							';
							echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addbill('others',1)\"/>";
			
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 5px; float:left\" title=\"View Current Bill\" onclick=\"window.open('report.php?id=40&regn=".$pntno."')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 5px; float:left\" title=\"Empty Current Bill\" onclick=\"emptybill('others')\"/>";
				echo'<div class="cleaner_h5"></div> <a class="labels"  disabled="disabled" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>	
					<a class="labels"  disabled="disabled" style="margin-left:5px">Discount:</a>';
				$result =mysqli_query($conn,"select * from accesstbl where AccessCode=147");
				$row=mysqli_fetch_array($result);
				if(stripslashes($row[$usertype])=='YES'){
					echo '<input type="text" id="disc44"  class="input_field"  value="0" style="width:60px; margin-left:10px;"/>	';
				}else{
							echo'<input type="text" id="disc44" title="Double Click to Get Authorization" class="input_field"  value="0" style="width:60px; margin-left:10px;border-color:#f00;" ondblclick="openadmin()" readonly="readonly"/>	';}
							echo'<a class="labels"  disabled="disabled" style="margin-left:5px">Subnet:</a>
							<input type="text" disabled="disabled" id="sub44" class="input_field"  style="width:60px;border-color:#f00; margin-left:10px;"/>

<div class="ui_widget"  style="margin-left:10px;float:left; width:100px">
	<select id="income44"><option value=""></option>';
		$resulta =mysqli_query($conn,"select * from extmedics order by id");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
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
								echo"<input type=\"button\" value=\"Submit Bill\" id=\"submit\"  
								style=\"margin-left:150px; float:left; cursor:pointer;width:110px\"
								 class=\"in_field\" onclick=\"submitbill('others');\"/>";
								 
								
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
				</div>';

				//CHECK INSURANCE DETAILS
					if($paytype==1&&$smartstatus==0){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. Smart Compliance <b>NOT</b> in effect.</p>');
						e.preventDefault();
						</script>";
					}

					else if($smartstatus==1){

						echo"<script>
						$().customAlert();
						alert('Insurance Paying Patient!', '<p> This is an Insurance Paying Patient. <B>Smart Compliance in effect.</B><br/> Pending Benefit Amount: <b>".number_format($benamount,2)."</b></p>');
						e.preventDefault();
						</script>";
					}


							
					break;

					case 166:
					
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Referral Tests Register Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv2"></div>';
	
				echo'<div id="mon" style="min-height:90px;top:10%;width:320px; ">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Referral Tests Register
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:10px">Referral Type:<span>*</span></a>
				<div class="ui-widget" style="margin-left:10px; float:left">
					
					<select class="select" id="itemname" style="width:280px; margin-left:10px;">
					<option value="">Select one...</option>
					<option value="Inwards">Inwards</option>
					<option value="Outwards">Outwards</option></select>
						</div>
						<div class="cleaner_h5"></div>

				<a class="labels" style="margin-left:10px">Patient Name:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:10px" id="patname" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">Service:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:10px" id="testname" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">Reffered By:</a>
				<input class="input_field" style="float:right; margin-right:10px" id="requested" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">Facility:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:10px" id="facility" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">Date Sent:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:10px" id="datepick" value="'.date('Y/m/d').'" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">Amount Paid:<span>*</span></a>
				<input class="input_field" style="float:right; margin-right:10px" id="amountpaid" type="text">
				<div class="cleaner_h5"></div>

									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterreferral();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
					break;


					case 167:
				
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Referral Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Referrals Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterref();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;


					case 168:
				
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Expenses Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Expenses Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterexprep();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;

					case 169:
				
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Billing Data Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Billing Data Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterbilldata();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;


					case 170:
				
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Nursing Data Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="height:200px">
				<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Nursing Data Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">From:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick" type="text">
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">To:</a>
				<input class="input_field" style="float:right; margin-right:80px" id="datepick2" type="text">				
					<div class="cleaner"></div>
					<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
					<a class="labels" style="margin-left:10px; float:left">View All</a>
					
					<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enternursedata();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;








							
							


								
					
}

?>
