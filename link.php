<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include('db_fns.php');
date_default_timezone_set('Africa/Nairobi');
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
<script src="jquery.confirm/jquery.confirm.js"></script>
<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
<script type="text/javascript" src="js/jquery.tinyscrollbar.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<script type="text/javascript" src="js/chart.js"></script>
	
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
							
							
							case 1:
						echo"<script>$('#itemcat3').parent().find('input:first').width(150);
						$('#supplier1').parent().find('input:first').width(180);
						$('#itemcat2').parent().find('input:first').width(150);
						$('#supplier2').parent().find('input:first').width(180);</script>";				
			$result = mysqli_query("insert into log values('0','".$username." accesses Add/Edit stock items Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			$bra=$_GET['bra'];
			
			echo'	<input type="hidden" id="cat" value="'.$bra.'"/>
							<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">'.$bra.'-Add Stock Item</h5>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help37()\"/></div>";								
$result =mysqli_query($conn,"select * from items order by ItemCode desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){
							$itemcode=1;
							}else $itemcode=stripslashes($row['ItemCode']) + 1;
							
	echo'<a class="labels" style="margin-left:5px">Item Code:</a>
				<input type="text" id="itcode1" class="input_field" disabled="disabled" style="width:50px; margin-left:10px;border-color:#f00;" value="'.$itemcode.'"/> 
						<a class="labels" style="margin-left:5px">Item Name:<span>*</span></a>
							  <input type="text" id="itname1" class="input_field"  style="width:250px; margin-left:10px;"/> 
							  <a class="labels" style="margin-left:5px">Pack Size:<span>*</span></a>
							  <input type="text" id="packsize" class="input_field"  style="width:50px; margin-left:10px;"/> 
							
							<div class="cleaner_h5"></div>
						
						<a class="labels">Category:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="select" id="itemcat3" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							if($bra=='PROCUREMENT'){$result =mysqli_query($conn,"select * from subcategories order by name");
							}else{$result =mysqli_query($conn,"select * from subcategories where branch='".$bra."' order by name");}
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
							}
							echo'</select>	
							</div>
							<a class="labels" style="margin-left:5px">Minimum Bal(Departmental):</a>
							<input type="text" id="mbal1" class="input_field"  style="width:70px; margin-left:10px;" title="In terms of Units not parts"/>
							<a class="labels" style="margin-left:5px">Price:<span>*</span></a>
						<input type="text" id="price1" class="input_field"  style="width:50px; margin-left:10px;" value=""/>
						<div class="cleaner_h5"></div>';
						if($bra=='PHARMACEUTICALS'){
						echo'<a class="labels" style="margin-left:5px">Molecule:</a>
						<input type="text" id="molecule" class="input_field"  style="width:150px; margin-left:10px;" value=""/>';
						}
						echo'<a class="labels" style="margin-left:0px">Supplier:</a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:15px">
							<select class="select" id="supplier1" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
							</div>
								  	
					<a class="labels" style="margin-left:5px">Lead Time:</a>
						<input type="text" id="ltime1" class="input_field"  style="width:50px; margin-left:10px;" value=""/>
						';
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"addstock2()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
			<div style="height:166px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">'.$bra.'-Edit/Delete Stock Item</h5>
	<a class="labels" style="margin-left:0px">Item Name:</a>
<div class="ui_widget"  style="margin-left:0px;float:left;">
		<select id="item55">
		<option value="">Select one...</option>';
		if($bra=='PROCUREMENT'){$result =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");}
		else{$result =mysqli_query($conn,"select * from items where Type='GOOD' and Category='".$bra."' order by ItemName");}
		
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pack=stripslashes($row['Pack']);
								$itcode = stripslashes($row['ItemCode']);
								$cat=stripslashes($row['SubCategory']);
								$lead = stripslashes($row['LeadTime']);
								
								$resultc =mysqli_query($conn,"select * from minbal where ItemCode=".$itcode."");
								$rowc=mysqli_fetch_array($resultc);
								$mbal = stripslashes($rowc[$userdep]);
								
								$name = stripslashes($row['ItemName']);
								$sup = stripslashes($row['Supplier']);
								$mol = stripslashes($row['Molecule']);
								$spr = stripslashes($row['SalePrice']);
							echo'<option value="'.$itcode.'θ'.$pack.'θ'.$cat.'θ'.$mbal.'θ'.$lead.'θ'.$sup.'θ'.$name.'θ'.$spr.'θ'.$mol.'">'.stripslashes($row['ItemName']).'</option>';
							}
		echo'
	</select>
	</div>			
	
	<a class="labels" style="margin-left:30px">Code:</a>
							  <input type="text" id="itcode2" class="input_field" disabled="disabled"  style="width:60px; margin-left:10px;border-color:#f00;"/> 
							 	  <a class="labels" style="margin-left:5px">Pack Size:<span>*</span></a>
							  <input type="text" id="packsize2" class="input_field"  style="width:50px; margin-left:10px;"/> 
 <a class="labels" style="margin-left:5px">Price:<span>*</span></a>
							  <input type="text" id="sprice2" class="input_field"  style="width:50px; margin-left:10px;"/> 
							<div class="cleaner_h5"></div>
						
						<a class="labels">Category:</a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:10px">
							<select class="select" id="itemcat2" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							if($bra=='PROCUREMENT'){$result =mysqli_query("select * from subcategories order by name");
							}else{$result =mysqli_query($conn,"select * from subcategories where branch='".$bra."' order by name");}
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
							}
							echo'</select>	
							</div>
							<a class="labels" style="margin-left:5px">Min Bal:</a>
							<input type="text" id="mbal2" class="input_field"  style="width:50px; margin-left:10px;"/>
							<a class="labels" style="margin-left:5px">Lead Time:</a>
						<input type="text" id="ltime2" class="input_field"  style="width:30px; margin-left:10px;" value=""/>
						<a class="labels" style="margin-left:5px">Molecule:</a>
						<input type="text" id="molecule2" class="input_field"  style="width:140px; margin-left:10px;" value=""/><div class="cleaner_h5"></div>
						<a class="labels" style="margin-left:0px">Supplier:</a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:15px">
							<select class="select" id="supplier2" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
							</div>
							<a class="labels" style="margin-left:5px">New Name:</a>
							<input type="text" id="itname2" class="input_field"  style="width:200px; margin-left:10px;"/>';
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Edit Item\" onclick=\"editstock2('".$bra."')\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Item\" onclick=\"deleteitem(2)\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div></div>
					
					<div style="height:129px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
					
					</div>			
							
										
									</div>
									
									<div id="recentstude">
										</div>
									</div>';
						break;
						
						case 2:
								
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses  Stock Transfer Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
$issueno=$_GET['param'];
$result =mysqli_query($conn,"select * from issuetable where IssueNo='".$issueno."' and status=1 order by TransNo asc");
$row=mysqli_fetch_array($result);
$dep1=stripslashes($row['Dep1']);
$dep2=stripslashes($row['Dep2']);
if($dep2=='PROCUREMENT'){$x='Bal';}else{$x=$dep2;}
echo'<div id="newstude">
	<div id="results" style="min-height:350px;">
	<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px;">
							<h5 style="text-align:center;">Stock Transfer from '.$dep2.' to '.$dep1.'; ISSUE No: '.$issueno.'</h5>
							<div id="depbal" style="float:right; margin-right:10px"></div>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help57()\"/></div>";								
echo'<div class="cleaner_h5"></div>
	<div style="width:950px;height:400px; overflow-y:auto">
									<div id="title">
									<div id="figure1" style="margin-left:0px;width:300px">Item Name</div>
									<div id="figure1" style="width:80px">Pack</div>
									<div id="figure1" style="width:100px">Unit</div>
									<div id="figure1" style="width:100px">Part</div>
									<div id="figure1" style="width:120px">Transfer</div>
									<div id="figure1" style="width:120px">Revoke</div>
									</div>';
$result =mysqli_query($conn,"select * from issuetable where IssueNo='".$issueno."' and status=1 order by TransNo asc");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
							$transno=stripslashes($row['TransNo']);
							$itcode=stripslashes($row['ItemCode']);
							$qty=stripslashes($row['Qty']);
							$resultx =mysqli_query($conn,"select * from items where ItemCode='".$itcode."'");
							$rowx=mysqli_fetch_array($resultx);
							$cbal=stripslashes($rowx[$x]);
							if($cbal<$qty){echo"<div class=\"rightclickarea\" ><div class=\"normal\" id=\"normal".$transno."\" style=\"background:#f00\" >";}
							else {echo"<div class=\"rightclickarea\" ><div class=\"normal\" id=\"normal".$transno."\" >";}
									echo"<div id=\"figure2\" style=\"width:300px\">".stripslashes($row['ItemName'])."</div>
										<div id=\"figure2\"  style=\"width:80px\">".stripslashes($row['Pack'])."</div>
									<div id=\"figure2\"  style=\"width:100px\">".stripslashes($row['UnitBox'])."</div>
									<div id=\"figure2\"   style=\"width:100px\">".stripslashes($row['PartBox'])."</div>
			<div id=\"transfer".$transno."\" class=\"figure2\" onclick=\"transfer(".$transno.")\" style=\"height:16px;width:120px; border-right:1px solid #333\">							<img src=\"images/right3green.png\" width=\"20\" height=\"22\" /></div>
								<div id=\"revoke".$transno."\" class=\"figure2\" onclick=\"revoke(".$transno.")\" style=\"height:16px;width:125px; border-right:1px solid #333\">							<img src=\"images/redarrow.png\" width=\"20\" height=\"22\" /></div>
							
									</div></div>";
					echo'<div class="vmenu">';
		echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['ItemCode']).'θ12</span>Stock Availability</div>
		<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['ItemCode']).'θ13</span>Compare Purchase</div>
		</div>';
									
									}
									echo'</div><div id="mes"></div>';
							
	
	
	
	echo'</div>
	</div></div>
							';
							break;
							
							case 3:
					echo"<script>$('#dept5').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Stock Taking';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
	
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="dept5"  style="width:260px; margin-left:10px;">
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
							
							case 4:
					echo"<script>$('#dept6').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Add/Edit Stock Items';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
	
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="dept6"  style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from categories where Type='GOOD' order by ItemCat");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$bname=stripslashes($row['ItemCat']);
								echo'<option value="'.$bname.'">'.stripslashes($row['ItemCat']).'</option>';
							}
		echo'
			</select>
		</div>
	<div class="cleaner_h5"></div>
			
				</div>';	
							break;
							
							case 5:
						
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
       viewcartret(); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
       	additemret(); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitret(); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help60(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
        emptycartret(); 
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
		removelastret();
      	}
		
		 }</script>';
	echo"<script>$('#supname').parent().find('input:first').width(180);</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchase Stock Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:186px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Goods Returned Outwards</h5><div id="depbal" style="float:right; margin-right:10px"></div>';
	echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help60()\"/></div>";								
echo'
								<a class="labels">Supplier:<span>*</span></a>
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
							</div><a class="labels" style="margin-left:5px">Invoice No:<span>*</span></a>
							  <input type="text" id="invoice" class="input_field"  style="width:80px; margin-left:10px;float:left"/> 
							<a class="labels" style="margin-left:5px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:100px; margin-left:10px;float:left"/>
							<a class="labels" style="margin-left:5px">LPO No:</a>
							  <input type="text" id="lpono" class="input_field"  style="width:60px; margin-left:10px;float:left"/> 
							  <div class="cleaner_h5"></div><a class="labels">Item:<span>*</span></a>
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
							<input type="text" id="unit58" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
							<a class="labels" style="margin-left:5px">Part:</a>
							<input type="text" id="part58" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
						<a class="labels" style="margin-left:5px">Batch No:<span>*</span></a>
							<input type="text" id="batch" class="input_field"  style="width:70px;margin-left:5px;float:left"/>
							 <div class="cleaner_h5"></div>	
							 <a class="labels" style="margin-left:5px">Expiry Date:</a>
							<input type="text" id="datepick2" class="input_field"  style="width:90px; margin-left:10px;float:left"/>
						<a class="labels" style="margin-left:5px">Reason:</a>
							<input type="text" id="reason" class="input_field"  style="width:380px; margin-left:10px;float:left"/>
							<div class="cleaner_h5"></div>		
								<a class="labels" style="margin-left:5px">Pur. Price:</a>
							<input type="text" id="price58" class="input_field"  style="width:70px; margin-left:10px;float:left" title="Double Click to fetch price" ondblclick="fetchpurch()"/>
								<a class="labels" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:70px; margin-left:10px;float:left; border-color:#f00"/>';
							
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additemret()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcartret()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycartret()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:280px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:250px;">
	
	</div>
	</div>				</div>
									
									<div id="recentstude">
									<h5 style="margin-left:10px">Receive Goods</h5>';
							if(isset($_SESSION['ret'])){
							$max=count($_SESSION['ret']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['ret'][$i][6]);
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
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitret()\"/>";
								echo'</div>
									</div>';
						
										
							break;	
							
							case 6:
							$code=$_GET['code'];
							$batch=$_GET['batch'];
							$invoice=$_GET['invoice'];
							$result =mysqli_query($conn,"select * from purchases where InvoiceNo='".$invoice."' and  BatchNo='".$batch."' and ItemCode='".$code."'");
							$num_results = mysqli_num_rows($result);
							if($num_results>0){
							$row=mysqli_fetch_array($result);
							$itcost = stripslashes($row['PurchPrice']);
							echo"
										<script>
										$('#price58').val(".$itcost.");
										var pack = $('#pack').val();
										var part = $('#part58').val();
										if(part==''){part=0;}
										var unit1 = $('#unit58').val();
										var qty=(unit1*pack) + parseInt(part,10);
										var cost='".$itcost."';
										var cost=cost/pack;
										var tot=qty*cost;
										tot=Math.round(tot);
										sot=(tot).formatMoney(2, '.', ',');
										$('#tprice').val(sot);
										</script>";
							}else{echo"
										<script>
										$('#price58').val(0);
										</script>";}
							
							break;
							
							case 7:
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$total=$_GET['total'];
							$unit1=$_GET['unit1'];
							$part=$_GET['part'];
							$batch=$_GET['batch'];
							$date=$_GET['date'];
							$sname=$_GET['sname'];
							$invoice=$_GET['invoice'];
							$expiry=$_GET['expiry'];
							$qty=$_GET['qty'];
							$lpo=$_GET['lpo'];
							$reason=$_GET['reason'];
							$pack=$_GET['pack'];
							$bal=$_GET['bal'];
							$tsale=$_GET['tsale'];
							$sid=$_GET['sid'];
							if(isset($_SESSION['ret'])){
							$max=count($_SESSION['ret']);
							$a=0;
							for ($i = 0; $i < $max; $i++){
								if($code==$_SESSION['ret'][$i][0]){
									$a++;
								}
							}
								if($a==0){
							$_SESSION['ret'][$max]=array($code,$name,$unit1,$part,$pprice,$date,$total,$sname,$batch,$invoice,$expiry,$lpo,$reason,$pack,$bal,$qty,$tsale,$sid);
							$max=count($_SESSION['ret']);
								}
								else{
								echo"
											<script>
											$().customAlert();
											alert('Sorry!', '<p>Item cannot be reentered. Remove the first entry if you want to make another entry.</p>');
											e.preventDefault();
											</script>";	
											echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
											cartitemsret($max);
											exit;
								}
							}
							
							else{
							$_SESSION['ret']=array(array());
							$_SESSION['ret'][0]=array($code,$name,$unit1,$part,$pprice,$date,$total,$sname,$batch,$invoice,$expiry,$lpo,$reason,$pack,$bal,$qty,$tsale,$sid);
							$max=count($_SESSION['ret']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['ret'][$i][6]);
							
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
							cartitemsret($max);
							
					break;	
					
					case 8:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['ret'])){
							$max=count($_SESSION['ret']);
							cartitemsret($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Return cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 9:
					
					
					if(isset($_SESSION['ret'])){
							unset($_SESSION['ret']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 10:
					$pid=$_GET['pid'];
					unset($_SESSION['ret'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['ret']=array_values($_SESSION['ret']);
					$max=count($_SESSION['ret']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['ret'][$i][6]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemsret($max);
								
					break;
					
					case '10.1':
					end($_SESSION['ret']);
					$pid= key($_SESSION['ret']);
					unset($_SESSION['ret'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['ret']=array_values($_SESSION['ret']);
					$max=count($_SESSION['ret']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['ret'][$i][6]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemsret($max);
								
					break;
					
					
					case 11:
					echo"<script>$('#supname').focus();$('#itemxa').parent().find('input:first').width(330);</script>";
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
     viewcartlpo(); 
      	}
     	 if (evt.keyCode==112){ //f1
		 evt.preventDefault();
      additemlpo(); 
      	}
		if (evt.keyCode==121){ //f10
		evt.preventDefault();
		submitlpo(); 
      	}
		if (evt.keyCode==123){ //f12
		evt.preventDefault();
		help39(); 
      	}
		if (evt.keyCode==120){ //f9
		evt.preventDefault();
       emptycartlpo(); 
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
		removelastlpo();
      	}
		
		
     	 
    }</script>';
	echo"<script>$('#supname').parent().find('input:first').width(180);</script>";
	$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Local Purchase Order Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	
								echo'
							<div id="newstude">
	<div id="results">						
	<div style="height:156px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Local Purchase Order</h5><div id="depbal" style="float:right; margin-right:10px"></div>';
								
echo'
								<a class="labels">Supplier:<span>*</span></a>
						<div class="ui-widget" style="margin-left:5px;float:left; width:200px; margin-right:15px">
							<select class="select" id="supname" style="width:200px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerName']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
							</div><a class="labels" style="margin-left:5px">Date:</a>
							<input type="text" id="datepick" class="input_field" value="'.date('Y/m/d').'"  style="width:100px; margin-left:10px;float:left"/>
							<div class="cleaner_h5"></div><a class="labels">Item Name:<span>*</span></a>
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
								$bal = stripslashes($row['Bal']);
								$qsold = stripslashes($row['Qsold']);
								$qpurch = stripslashes($row['Qpurch']);
								$name = stripslashes($row['ItemName']);
								$pack = stripslashes($row['Pack']);
								
					echo'<option value="'.$spr.'θ'.$itemc.'θ'.$itcost.'θ'.$bal.'θ'.$qpurch.'θ'.$qsold.'θ'.$name.'θ'.$pack.'">'.stripslashes($row['ItemName']).'</option>';
							}
	echo'</select>
	</div>
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
					<a class="labels" style="margin-left:35px">Pack:</a>
							<input type="text" id="pack" class="input_field"  style="width:40px; margin-left:10px;float:left; border-color:#f00" disabled="disabled""/>
							
							<a class="labels" style="margin-left:5px">Unit:</a>
							<input type="text" id="unit59" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
							<a class="labels" style="margin-left:5px">Part:</a>
							<input type="text" id="part59" class="input_field"  style="width:50px; margin-left:5px;float:left"/>
							<div class="cleaner_h10"></div>	
							<a class="labels" style="margin-left:5px">Pur. Price:</a>
							<input type="text" id="price59" class="input_field"  style="width:70px; margin-left:5px;float:left" title="Double Click to fetch price" ondblclick="fetchpurch()"/>
								
								<a class="labels" style="margin-left:5px">Total Price:</a>
							<input type="text" disabled="disabled" id="tprice" class="input_field"  style="width:70px; margin-left:10px;float:left; border-color:#f00"/>';
							
							
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Item\" onclick=\"additemlpo()\"/>";
				echo"<img src=\"images/zoom.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"View Current Cart\" onclick=\"viewcartlpo()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Empty Current Cart\" onclick=\"emptycartlpo()\"/>";
					 	
										
									echo'</div>
	<div id="itemsdisp" style="height:310px; width:766px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="text-align:center">Items</h5>
	<div id="display" style="margin-top:0px; height:280px;">
	
	</div>
	</div>				</div>
									
									<div id="recentstude">
									<h5 style="margin-left:10px">Submit LPO</h5>';
							if(isset($_SESSION['lpo'])){
							$max=count($_SESSION['lpo']);
							$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['lpo'][$i][6]);
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
							echo"<img src=\"images/subm.jpg\" width=\"100\" height=\"50\" style=\"cursor:pointer; margin:0px 0 0 60px; float:left\" title=\"Submit\" onclick=\"submitlpo()\"/>";
								echo'</div>
									</div>';
						
										
							break;	
							
							case 12:
							$code=$_GET['code'];
							$name=$_GET['name'];
							$pprice=$_GET['pprice'];
							$total=$_GET['total'];
							$unit1=$_GET['unit1'];
							$part=$_GET['part'];
							$date=$_GET['date'];
							$sname=$_GET['sname'];
							$qty=$_GET['qty'];
							$pack=$_GET['pack'];
							$bal=$_GET['bal'];
							if(isset($_SESSION['lpo'])){
							$max=count($_SESSION['lpo']);
							$a=0;
							for ($i = 0; $i < $max; $i++){
								if($name==$_SESSION['lpo'][$i][1]){
									$a++;
								}
							}
								if($a==0){
							$_SESSION['lpo'][$max]=array($code,$name,$unit1,$part,$pprice,$date,$total,$sname,$pack);
							$max=count($_SESSION['lpo']);
								}
								else{
								echo"
											<script>
											$().customAlert();
											alert('Sorry!', '<p>Item cannot be reentered. Remove the first entry if you want to make another entry.</p>');
											e.preventDefault();
											</script>";	
											echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
											cartitemslpo($max);
											exit;
								}
							}
							
							else{
							$_SESSION['lpo']=array(array());
							$_SESSION['lpo'][0]=array($code,$name,$unit1,$part,$pprice,$date,$total,$sname,$pack);
							$max=count($_SESSION['lpo']);}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['lpo'][$i][6]);
							
							}
							echo"<script>$('#totitems').val(".$max.");$('#unit59').val('');$('#part59').val('');$('#price59').val('');$('#tprice').val('');</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
							cartitemslpo($max);
							
					break;	
					
					case 13:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['lpo'])){
							$max=count($_SESSION['lpo']);
							cartitemslpo($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Lpo cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 14:
					
					
					if(isset($_SESSION['lpo'])){
							unset($_SESSION['lpo']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#totprice').val('');$('#totdisc').val('');$('#fintot').val('');$('#ampaid').val('');
							$('#change').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 15:
					$pid=$_GET['pid'];
					unset($_SESSION['lpo'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['lpo']=array_values($_SESSION['lpo']);
					$max=count($_SESSION['lpo']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['lpo'][$i][6]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemslpo($max);
								
					break;
					
					case '15.1':
					end($_SESSION['lpo']);
					$pid= key($_SESSION['lpo']);
					unset($_SESSION['lpo'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['lpo']=array_values($_SESSION['lpo']);
					$max=count($_SESSION['lpo']);
					$tprice=0;$tvat=0;$tdisc=0;$ftotal=0;
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['lpo'][$i][6]);
							}
							echo"<script>$('#totitems').val(".$max.")</script>
							<script>$('#totprice').val((".$tprice.").formatMoney(2, '.', ','))</script>";
					cartitemslpo($max);
								
					break;
					
					case 16:
					$a=$_GET['a'];
					echo"<script>$('#docx1').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			if($a==1){
				echo'Reprint Goods Received Note';
			}
			if($a==2){
				echo'Reprint Goods Return Note';
			}
			if($a==3){
				echo'Reprint Local Purchase Order';
			}
			
			if($a==4){
				echo'Reprint  Discharge Summary';
			}
			if($a==5){
				echo'Reprint Variance Report';
			}
				if($a==6){
				echo'Reprint Admission Form';
			}
				if($a==7){
				echo'Reprint Final Bill';
			}
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		
	<div id="op1">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="docx1" class="docx" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$arr=array();
		if($a==1){
		$result =mysqli_query($conn,"select * from purchases");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['PurchNo'])]=stripslashes($row['PurchNo']).'-'.stripslashes($row['Supplier']).'-'.stripslashes($row['PurchDate']).'-'.stripslashes($row['InvoiceNo']);
			}
		}
		if($a==2){
		$result =mysqli_query($conn,"select * from goodsreturned");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['gnrno'])]=stripslashes($row['gnrno']).'-'.stripslashes($row['sname']).'-'.stripslashes($row['date']);
			}
		}
		if($a==3){
		$result =mysqli_query($conn,"select * from lpo");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['lpono'])]=stripslashes($row['lpono']).'-'.stripslashes($row['supplier']).'-'.stripslashes($row['date']);
			}
		}
		if($a==4){
		$result =mysqli_query($conn,"select * from discharge");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['sumno'])]=stripslashes($row['sumno']).'-'.stripslashes($row['patname']).'-'.stripslashes($row['date']);
			}
		}
		
		if($a==5){
		$result =mysqli_query($conn,"select * from variance");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['vno'])]=stripslashes($row['vno']).'-'.stripslashes($row['dept']).'-'.dateprint(stripslashes($row['date']));
			}
		}
		
		
								if($a==6){
		$result =mysqli_query($conn,"select * from inpatients");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['PrescId'])]=stripslashes($row['PatName']).'-Patient No:'.stripslashes($row['PatId']).'-AdmDate'.stripslashes($row['AdmDate']);
			}
		}
		
							if($a==7){
		$result =mysqli_query($conn,"select * from finalbill");
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$arr[stripslashes($row['invno'])]=stripslashes($row['patname']).'-Patient No:'.stripslashes($row['patid']).'-Date:'.dateprint(stripslashes($row['date'])).'-Inv No:'.stripslashes($row['rcptno']);
			}
		}
		
		
							
							foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$val.'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	
			<div class="cleaner_h5"></div>
			
				</div>';	
							break;							
							case 17:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Invoice Listing  (Inwards) Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Invoice Listing (Inwards) Rep.
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
									cursor:pointer; width:80px" class="select" onclick="enterinvoicelist();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case '17.1':
					
						echo"<script>$('#itemname').parent().find('input:first').focus().width(230);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inventory Movement Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:250px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Stock Movement  Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Dept Name:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">';
						if($usertype=='Admin'||$usertype=='Accountant'||$usertype=='Store'){
							echo'
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
								}else{echo'<option value="'.$userdep.'">'.$userdep.'</option>';}
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
									cursor:pointer; width:80px" class="select" onclick="enterinvmov();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case 18:
					
					
						echo"<script>$('#reorderx').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Re-Order Level Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Re-Order Level-By Supplier
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="reorderx" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
					<div class="cleaner_h5"></div>
									
					</div>';
						
							break;
							case 19:
					
						echo"<script>$('#dep90').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inventory Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Inventory Report-By Category
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="dep90" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories order by ItemCat");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['ItemCat'])."\">".stripslashes($row['ItemCat'])."</option>";
							}
							echo'</select>
							</div>
						<div class="cleaner_h5"></div>
				</div>';
							break;
							
							case 20:
						echo"<script>$('#dep90').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Inventory Report-By Supplier
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
				<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="dep90" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditsuppliers");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
							}
							echo'</select>	
						<div class="cleaner_h5"></div>
			</div>';
						
							break;
							
							case 21:
				echo"<script>$('#item89').parent().find('input:first').width(150).focus();$('#ac89').parent().find('input:first').width(150);</script>";
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Debtors Management Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">INSURANCE COMPANIES/Debtors Management<strong id="debtorp"></strong><strong id="debtord"></strong></h2>';
	echo'
					<div class="cleaner" style="border-bottom:2px solid #333"></div>
					<div id="tabs" style="width:1000px; height:436px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Receive Payments</a></li>
				<li><a href="#tabs-2">Add New Debtor</a></li>
				<li><a href="#tabs-3">Edit/Delete Debtors</a></li>
				<li><a href="#tabs-4">Statements</a></li>
				<li><a href="#tabs-5">Reprint Debtor Receipt</a></li>
				<li><a href="#tabs-6">Inpatient Debtors</a></li>
				<li><a href="#tabs-7">Add New Scheme</a></li>
				<li><a href="#tabs-8">Edit/Delete Schemes</a></li>
				</ul>
			<div id="tabs-1">
				<a class="labels" style="margin-left:10px">Debtor Name:</a>
			<div class="ui_widget"  style="margin-left:10px;float:left; width:200px">
		<select id="item89">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['CustomerId'])."\">".stripslashes($rowa['CustomerName'])."</option>";
						}
		echo'
		</select></div>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:220px;">	
		<a class="labels" style="margin-left:20px">A/c:<span>*</span></a>					
		<select id="ac89" style="margin-left:10px">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from ledgers where type='Asset'");
							$num_resultsa = mysqli_num_rows($resulta);
							for ($i=0; $i <$num_resultsa; $i++) {
							$rowa=mysqli_fetch_array($resulta);
							echo'<option value="'.stripslashes($rowa['ledgerid']).'">'.stripslashes($rowa['name']).'</option>';			
							}
		echo'</select>
		</div>
		<input type="text" disabled="disabled" id="bal" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Balance:</a>
<input type="text" disabled="disabled" id="total" value="0" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Total:</a>
				<input type="text"  id="refno" class="input_field"  style="width:80px; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Ref No:</a>';
				echo'
	<div id="itemsdisp" style="height:350px; width:666px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="">Invoices</h5>
	<div id="display" style="margin-top:0px; height:330px;">
	
	</div>
	</div>	';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"savepayrec();\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			
				
				<div id="tabs-2">
				
					<a class="labels" style="margin-left:5px">Name:<span>*</span></a>
					<input type="text" id="cname1" class="input_field"  style="width:190px; margin-left:10px;"/> 
					<a class="labels" style="margin-left:5px">Telephone:<span>*</span></a>
					<input type="text" id="tel1" class="input_field"  style="width:100px; margin-left:10px;"/>

					<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="smartcomp"  id="smartcomp" value="1"/>
					<a class="labels" style="float:left;margin-left:5px">Smart Compatible</a>
					<input type="hidden" id="obal1" class="input_field"  style="width:100px; margin-left:10px;"/>';
					echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Account\" onclick=\"addnewcus()\"/>";
					echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div>
	
				
				


				
				</div>		
				
				
				<div id="tabs-3">

	<a class="labels" style="margin-left:10px">Debtor Name:</a>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
		<select id="item29">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$cid=stripslashes($row['CustomerId']);
								$name=stripslashes($row['CustomerName']);
								$tel = stripslashes($row['Tel']);
								$bal = stripslashes($row['Bal']);
								$smartcomp = stripslashes($row['SmartComp']);
					echo'<option value="'.$cid.'θ'.$name.'θ'.$tel.'θ'.$bal.'θ'.$smartcomp.'">'.stripslashes($row['CustomerName']).'</option>';
						}
		echo'
		</select></div>
			<input type="hidden" id="cid2" class="input_field" style="width:80px; margin-left:10px;border-color:#f00"/> 
				<div class="cleaner_h5"></div>
			 <a class="labels" style="margin-left:10px">Name:</a>
			<input type="text" id="cname2" class="input_field" style="width:200px; margin-left:10px;"/>
			<a class="labels" style="margin-left:5px">Telephone:</a>
			<input type="text" id="tel2" class="input_field"  style="width:100px; margin-left:10px;"/>

			<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="smartcomp2"  id="smartcomp2" value="1"/>
			<a class="labels" style="float:left;margin-left:5px">Smart Compatible:</a>';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Edit Detail\" onclick=\"savecredcust()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Delete Debtor\" onclick=\"delcreditcus()\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div>



		
				</div>
				
		<div id="tabs-5">
		<a class="labels" style="margin-left:10px">Search:</a>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
		<select id="item37">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from debtreceipts order by id desc");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
						echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['cname']).'-'.stripslashes($row['date']).'-'.stripslashes($row['amount']).'</option>';
						}
		echo'
		</select></div>
			
				</div>
				
		<div id="tabs-6">';
		
		$arr=array();
		$resulta =mysqli_query($conn,"select * from tempbill where status=1");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$arr[stripslashes($row['patid'])]=	stripslashes($row['patname']);
							}
			echo'<div id="chati" style="width:750px; height:350px; overflow-y:auto">';
				echo'<div id="inside" style="min-height:260px;">
									<div id="title">
									<div id="figure1"  style="margin-left:0px; width:150px">Pat Id</div>
									<div id="figure1"  style="margin-left:0px; width:300px">Pat Name</div>
									<div id="figure1" style="width:200px">Amount</div>
									</div>
								';				
				$a=0;			
		foreach ($arr as $key => $val) {
			
									$resulta =mysqli_query($conn,"select * from tempbill where patid='".$key."' and status=1");
									$num_resultsa = mysqli_num_rows($resulta);
									$e=0;	
									for ($i=0; $i <$num_resultsa; $i++) {
										$row=mysqli_fetch_array($resulta);
										$e+=preg_replace('~,~', '', stripslashes($row['subnet']));
									}	
									if($a%2==0){
	echo"<div id=\"normal\" onclick=\"window.open('report.php?id=40&regn=' + ".$key.")\" >";
	}else{
		echo"<div id=\"normal\" style=\"background:#fff\" onclick=\"window.open('report.php?id=40&regn=' + ".$key.")\" >";
	}
								echo"<div id=\"figure2t\" style=\"width:152px;\">".$key."</div>
										<div id=\"figure2t\" style=\"width:300px\">".$val."</div>
										<div id=\"figure2t\" style=\"width:200px\">".$e."</div>
										</div>
										<div class=\"cleaner\"></div>";
								$a++;


							}
			
		echo'</div></div></div>
			
				<div id="tabs-4">
					<a class="labels" style="margin-left:5px">Debtor Name:</a>
					<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
					<select id="item30">
					<option value="">Select one...</option>';
					$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$cid=stripslashes($row['CustomerId']);
								$name=stripslashes($row['CustomerName']);
						echo'<option value="'.$cid.'">'.stripslashes($row['CustomerName']).'-'.$cid.'</option>';
						}
					echo'
					</select></div>
						<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">From:</a>
						<input type="text" id="datepick" class="input_field"  style="float:left;width:190px; margin-left:50px;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">To:</a>
							<input type="text" id="datepick2" class="input_field"  style="float:left;width:190px; margin-left:65px;" value=""/>
							<div class="cleaner_h5"></div>
							<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="viewall" value="1"/>
							<a class="labels" style="float:left;margin-left:5px">View All:</a>
							<div class="cleaner_h10"></div>';
							echo"<input type=\"button\" value=\"View\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"viewstatement();\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 
					</div>	


				<div id="tabs-7">

					<a class="labels" style="margin-left:5px">Company Name:<span>*</span></a>
					<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
					<select id="scid" class="combos">
					<option value="">Select one...</option>';
					$resulta =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$cid=stripslashes($row['CustomerId']);
								$name=stripslashes($row['CustomerName']);
						echo'<option value="'.$cid.'">'.stripslashes($row['CustomerName']).'</option>';
						}
					echo'
					</select></div>
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">Name:<span>*</span></a>
					<input type="text" id="scname1" class="input_field"  style="width:290px; margin-left:10px;"/> 
					<div class="cleaner_h5"></div>
					<a class="labels" style="margin-left:5px">Telephone:<span>*</span></a>
					<input type="text" id="stel1" class="input_field"  style="width:100px; margin-left:10px;"/>

					<div class="cleaner_h5"></div>

					<input type="checkbox" style="float:left; margin:8px 0 0 5px;" name="ssmartcomp"  id="ssmartcomp" value="1"/>
					<a class="labels" style="float:left;margin-left:5px">Smart Compatible</a>

					<div class="cleaner_h5"></div>

					<input type="checkbox" style="float:left; margin:8px 0 0 5px;" name="copay1"  id="copay1" value="1" onclick="copaydiv(1)"/>
					<a class="labels" style="float:left;margin-left:5px">Copay</a>

					<div id="copaydiv1" style="display:none">
					<input type="text" id="copayam1" class="input_field"  style="width:50px; margin-left:10px;"/>
					<select id="copaytype1" class="select" style="margin-left:5px;width:60px;padding:4px 5px">
					<option value="ksh">Kshs</option>
					<option value="%">%</option>
					</select>
					</div>

					<div class="cleaner_h5"></div>

					<input type="hidden" id="sobal1" class="input_field"  style="width:100px; margin-left:10px;"/>';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 0px; float:left\" title=\"Add Account\" onclick=\"addnewcus2()\"/>";
				echo'<div id="res6" style="float:left;width:40px; height:40px; margin-left:10px"></div>
	
				
				


				
				</div>		
				


			<div id="tabs-8">

				<table class="display"  cellspacing="0"  id="thetable" style="width:100%">
                      <thead>
                        <tr>
                          <th style="width:20%">Company Name</th>
                          <th style="width:30%">Scheme Name</th>
                           <th style="display:none">Scheme Name</th>
                          <th>Telephone</th>
                          <th>Smart Status</th>
                          <th>Co-pay Status</th>
                          <th>Co-pay Type</th>
                          <th>Co-pay Amount</th>
                          <th>Save</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>';
                    $result =mysqli_query($conn,"select * from schemes order by CompanyName asc");
                    $num_results = mysqli_num_rows($result);
                      for ($i=0; $i <$num_results; $i++) {
                      	$rowa=mysqli_fetch_array($result);
                      	$code=stripslashes($rowa['SchemeId']);
                         
                          echo'<tr class="gradeX"  id="norm'.$code.'">
                          <td style="width:15%">
                          <select class="select" id="company'.$code.'" style="width:100%; padding:0">
						  <option value="'.stripslashes($rowa['CompanyId']).'" selected="selected">'.stripslashes($rowa['CompanyName']).'</option>';
						  $resultx =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_resultsx = mysqli_num_rows($resultx);	
							for ($x=0; $x <$num_resultsx; $x++) {
								$rowx=mysqli_fetch_array($resultx);
								echo'<option value="'.stripslashes($rowx['CustomerId']).'">'.stripslashes($rowx['CustomerName']).'</option>';
						}
							echo'</select></td>
						 <td  style="display:none">'.stripslashes($rowa['SchemeName']).'</td>
                          <td style="width:35%"><input type="text" class="put_field" value="'.stripslashes($rowa['SchemeName']).'" id="scheme'.$code.'" style="background:#fff;width:100%"/></td>
                          <td><input type="text" class="put_field" value="'.stripslashes($rowa['Tel']).'" id="schemetel'.$code.'" style="background:#fff;width:100%"/></td>
                          <td><input type="checkbox" style="float:left; margin:8px 0 0 5px;" name="smart'.$code.'"  id="smartcomp'.$code.'" value="1"></td>
                          <td><input type="checkbox" style="float:left; margin:8px 0 0 5px;" name="schemecopay'.$code.'"  id="copay'.$code.'" value="1"></td>
                          <td>
                            <select id="schemetype'.$code.'" class="select" style="margin-left:5px;width:60px;padding:4px 5px">
                            <option value="'.stripslashes($rowa['CoPayType']).'" selected="selected">'.stripslashes($rowa['CoPayType']).'</option>
							<option value="ksh">Kshs</option>
							<option value="%">%</option>
							</select>
                          </td>

                          <td><input type="text" class="put_field" value="'.stripslashes($rowa['CoPayAm']).'" id="schemeam'.$code.'" style="background:#fff;width:100%"/></td>
                          <td style="cursor:pointer"  id="save'.$code.'" onclick="savescheme('.$code.')"><img src="images/save.jpg" style="width:20px"/></td>
                          <td style="cursor:pointer" id="delete'.$code.'" onclick="delscheme('.$code.')"><img src="images/delete.png" style="width:20px;"/></td>

                           </tr>';

                           if(stripslashes($rowa['SmartComp'])==1){echo "<script>$('input[name=smart".$code."]').prop('checked',true);</script>";}
                           if(stripslashes($rowa['CoPay'])==1){echo "<script>$('input[name=schemecopay".$code."]').prop('checked',true);</script>";}

                        }
                       
                      echo'</tbody>
                    </table>
                     <script type="text/javascript">
				     $(document).ready(function() {
						$("#thetable").DataTable();
						});
				      </script> 
		
				</div>	
				
					
			

			</div></div>';

				break;
				
				case 22:
				$cus=$_GET['cus'];
				
				$_SESSION['credinvoice']=array(array());
				unset($_SESSION['credinvoice'][0]);
				$max=count($_SESSION['credinvoice']);
				echo'<div id="chati" style="width:950px; height:280px; overflow-y:auto">';
				echo"<a style=\"float:right; margin-right:10px; cursor:pointer; text-decoration:underline\" onclick=\"window.open('output.php?id=14&rcptno=".$cus."')\">Print Open Invoices</a>";
				echo'<div id="inside" style="min-height:260px;">
									<div id="title">
									<div id="figure1"  style="margin-left:0px; width:50px">Check</div>
									<div id="figure1"  style="margin-left:0px; width:75px">Date</div>
									<div id="figure1" style="width:250px">Patient Details</div>
									<div id="figure1" style="width:120px">Invoice No</div>
									<div id="figure1" style="width:80px">Amount</div>
									<div id="figure1" style="width:80px">Paid</div>
									<div id="figure1" style="width:80px">Bal</div>
									<div id="figure1" style="width:90px">Paying</div>
									</div>
								';
								
				$result =mysqli_query($conn,"select * from creditcustomers where CustomerId='".$cus."'");
				$row=mysqli_fetch_array($result);
				$bal=stripslashes($row['Bal']);
				echo"<script>$('#bal').val(".$bal.");
				bal=(".$bal.").formatMoney(2, '.', ',');
				$('#debtord').html('-Balance:' + bal);</script>";
				
				$resulta =mysqli_query($conn,"select * from customerdebts where CustomerId='".$cus."' and DrCr='dr' and Status=1");
				$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
							$rowa=mysqli_fetch_array($resulta);
							$tno=stripslashes($rowa['TransNo']);
										echo"<div id=\"normal\" >";
										echo"<div id=\"figure2t\" style=\"width:50px;height:16px; overflow:hidden\"><input type=\"checkbox\" id=\"check".$tno."\" onclick=\"checkinv('".$tno."','".stripslashes($rowa['Amount'])."','".stripslashes($rowa['CustomerId'])."','".stripslashes($rowa['CustomerName'])."','".stripslashes($rowa['InvoiceNo'])."','".stripslashes($rowa['InvBal'])."','".stripslashes($rowa['Paid'])."')\" name=\"check".$tno."\" value=\"1\" /></div>
										<div id=\"figure2t\" style=\"width:75px;\">".dateprint(stripslashes($rowa['Date']))."</div>
										<div id=\"figure2t\" style=\"width:250px;overflow:hidden\" onclick=\"window.open('output.php?id=6&rcptno=' + ".stripslashes($rowa['InvoiceNo']).");window.open('report.php?id=1&rcptno=' + ".stripslashes($rowa['InvoiceNo']).")\"  title=\"".stripslashes($rowa['Description'])."\" >".stripslashes($rowa['PatName'])."-[".stripslashes($rowa['PatId'])."]</div>
										<div id=\"figure2t\" style=\"width:120px\">".stripslashes($rowa['InvoiceNo'])."</div>
										<div id=\"figure2t\" style=\"width:80px\">".stripslashes($rowa['Amount'])."</div>
											<div id=\"figure2t\" style=\"width:80px\">".stripslashes($rowa['Paid'])."</div>
												<div class=\"figure2t\" id=\"invbal".$tno."\" style=\"width:80px\">".stripslashes($rowa['InvBal'])."</div>
										<div id=\"figure2t\" style=\"width:97px\"><input type=\"text\" onkeyup=\"checkinvbal(".$tno.")\" id=\"am".$tno."\" style=\"text-align:center; margin-top:-2px;width:70px\" /> </div>
										</div>
										<div class=\"cleaner\"></div>";
							}
							
							
				
				break;
				
				case 23:
				
				$tno=$_GET['tno'];
				$amount=$_GET['amount'];
				$max=count($_SESSION['credinvoice']);
				$_SESSION['credinvoice'][$tno]=array($tno,$amount,$_GET['cid'],$_GET['cname'],$_GET['invno'],$_GET['bal'],$_GET['paying'],$_GET['invbal'],$_GET['paid']);	
				break;
				
				case 24:
				
				$tno=$_GET['tno'];
				unset($_SESSION['credinvoice'][$tno]);
				
				break;
				
				
				
				case 26:
							$patid=$_GET['patid'];
							$patname=$_GET['patname'];
							$rcptno=$_GET['rcptno'];
							$mode=$_GET['mode'];
							$cid=$_GET['cid'];
							$cname=$_GET['cname'];
							$cardno=$_GET['cardno'];
							$amount=$_GET['amount'];
							$bill=$_GET['bill'];

							if($mode=='Waiver'){
								$result =mysqli_query($conn,"select * from waivers where patid='".$patid."' and waiverno='".$cardno."' and stamp='".date('Ymd')."'");
								if(mysqli_num_rows($result)==0){
								echo"
										<script>
										$().customAlert();
										alert('Error!', '<p>Invalid Waiver Number.</p>');
										e.preventDefault();
										</script>";	
										exit;
								}
							}
							
							if(isset($_SESSION['pay'])){
								$max=count($_SESSION['pay']);
								$_SESSION['pay'][$max]=array($patid,$patname,$rcptno,$mode,$cid,$cname,$cardno,$amount,$bill);
								$max=count($_SESSION['pay']);
							}else{
								$_SESSION['pay']=array(array());
								$_SESSION['pay'][0]=array($patid,$patname,$rcptno,$mode,$cid,$cname,$cardno,$amount,$bill);
								$max=count($_SESSION['pay']);
							}
							echo'<embed src="images/beep-02.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							$tprice=0;
							for ($i = 0; $i < $max; $i++){
								$tprice+=preg_replace('~,~', '', $_SESSION['pay'][$i][7]);
							}
							$bal=$bill-$tprice;
							echo"<script>$('#ampaid').val((".$tprice.").formatMoney(2, '.', ','));
							$('#changeam').val((".$bal.").formatMoney(2, '.', ','))</script>";
							cartitemspay($max);
							
					break;
					
					
					case 27:
					
					echo'<embed src="images/beep-08.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					if(isset($_SESSION['pay'])){
							$max=count($_SESSION['pay']);
							$tprice=0;$bill='';
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pay'][$i][7]);
							$bill=$_SESSION['pay'][$i][8];
							}
							
							$bal=$bill-$tprice;
							echo"<script>$('#ampaid').val((".$tprice.").formatMoney(2, '.', ','));
							$('#changeam').val((".$bal.").formatMoney(2, '.', ','))</script>";
							cartitemspay($max);
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Payments cart is empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 28:
					
					
					if(isset($_SESSION['pay'])){
							unset($_SESSION['pay']);
							echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
							echo"<script>$('#totitems').val('');
							$('#lid76').val('');
							$('#lname76').val('');
							$('#ref76').val('');
							$('#amount76').val('');
							$('#ampaid').val('');
							$('#changeam').val('');
							</script>";
					}
					else	{ echo"
										<script>
										$().customAlert();
										alert('Sorry!', '<p>The Current Pay cart is already empty.</p>');
										e.preventDefault();
										</script>";
										
									}
								
					break;
					
					case 29:
					$pid=$_GET['pid'];
					unset($_SESSION['pay'][$pid]);
					echo'<embed src="images/beep-01.wav" autostart="true" width="0" height="0" id="sound1" enablejavascript="true">';
					$_SESSION['pay']=array_values($_SESSION['pay']);
					$max=count($_SESSION['pay']);
					$tprice=0;$bill='';
							for ($i = 0; $i < $max; $i++){
							$tprice+=preg_replace('~,~', '', $_SESSION['pay'][$i][7]);
							$bill=$_SESSION['pay'][$i][8];
							}
							
							$bal=$bill-$tprice;
							echo"<script>$('#ampaid').val((".$tprice.").formatMoney(2, '.', ','));
							$('#changeam').val((".$bal.").formatMoney(2, '.', ','))</script>";
							cartitemspay($max);
								
					break;
					
						case 30:
				echo"<script>$('#item79').parent().find('input:first').width(150).focus();$('#ac79').parent().find('input:first').width(150);</script>";
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Creditors/Vendors Management Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Creditors/Vendors Management<strong id="debtorp"></strong><strong id="debtord"></strong></h2>';
	echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
					<div id="tabs" style="width:1000px; height:436px; float:left; margin:5px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Make Payments</a></li>
				<li><a href="#tabs-2">Add New Creditor</a></li>
				<li><a href="#tabs-3">Edit/Delete Creditors</a></li>
				<li><a href="#tabs-4">Statements</a></li>
				</ul>
			<div id="tabs-1">
				<a class="labels" style="margin-left:10px">Creditor Name:</a>
			<div class="ui_widget"  style="margin-left:10px;float:left; width:200px">
		<select id="item79">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo"<option value=\"".stripslashes($rowa['CustomerId'])."\">".stripslashes($rowa['CustomerName'])."</option>";
						}
		echo'
		</select></div>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:220px;">	
		<a class="labels" style="margin-left:20px">A/c:<span>*</span></a>					
		<select id="ac79" style="margin-left:10px">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from ledgers where type='Asset'");
							$num_resultsa = mysqli_num_rows($resulta);
							for ($i=0; $i <$num_resultsa; $i++) {
							$rowa=mysqli_fetch_array($resulta);
							echo'<option value="'.stripslashes($rowa['ledgerid']).'">'.stripslashes($rowa['name']).'</option>';			
							}
		echo'</select>
		</div>

		<input type="text" disabled="disabled" id="bal" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Balance:</a>
<input type="text" disabled="disabled" id="total" value="0" class="input_field"  style="width:80px;border-color:#f00; font-weight:bold; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Total:</a>
					<input type="text"  id="refno" class="input_field"  style="width:80px; margin-left:5px; float:right"/>
				<a class="labels" style="margin-left:5px; float:right">Ref No:</a>';
				echo'
	<div id="itemsdisp" style="height:350px; width:666px; background:#fff; margin-right:5px; padding-left:10px; border-radius:0px">
	<h5 style="">Invoices</h5>
	<div id="display" style="margin-top:0px; height:330px;">
	
	</div>
	</div>	';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"savepayrec2();\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 <div id="newstudent" style="float:right; margin-right:10px;height:40px; "></div>
				</div>
			
				
				<div id="tabs-2">
				<a class="labels" style="margin-left:5px">Name:<span>*</span></a>
					<input type="text" id="cname1" class="input_field"  style="width:190px; margin-left:10px;"/> 
						<a class="labels" style="margin-left:5px">Telephone:<span>*</span></a>
					<input type="text" id="tel1" class="input_field"  style="width:100px; margin-left:10px;"/>
					<a class="labels" style="margin-left:5px">Arrears B/F:<span>*</span></a>
					<input type="text" id="obal1" class="input_field"  style="width:100px; margin-left:10px;"/>';
				echo"<img src=\"images/plus.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:-5px 0 0 10px; float:left\" title=\"Add Account\" onclick=\"addnewsup()\"/>";
				echo'<div id="res2" style="float:left;width:40px; height:40px; margin-left:10px"></div>
				</div>		
				
				
				<div id="tabs-3">
		<a class="labels" style="margin-left:10px">Creditor Name:</a>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
		<select id="item29">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$cid=stripslashes($row['CustomerId']);
								$name=stripslashes($row['CustomerName']);
								$tel = stripslashes($row['Tel']);
								$bal = stripslashes($row['Bal']);
					echo'<option value="'.$cid.'θ'.$name.'θ'.$tel.'θ'.$bal.'">'.stripslashes($row['CustomerName']).'</option>';
						}
		echo'
		</select></div>
			<a class="labels" style="margin-left:20px">Cust ID:</a>
			<input type="text" id="cid2" disabled="disabled" class="input_field" style="width:80px; margin-left:10px;border-color:#f00"/> 
				<div class="cleaner_h5"></div>
			 <a class="labels" style="margin-left:0px">Name:</a>
			<input type="text" id="cname2" class="input_field" style="width:200px; margin-left:10px;"/>
			<a class="labels" style="margin-left:5px">Telephone:</a>
			<input type="text" id="tel2" class="input_field"  style="width:100px; margin-left:10px;"/>
			<input type="hidden" id="bal2" class="input_field"  style="width:100px; margin-left:10px;"/>
						';
						
							
				echo"<img src=\"images/back.jpg\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0px 0 0 10px; float:left\" title=\"Edit Detail\" onclick=\"savecredsup()\"/>";
				echo"<img src=\"images/empty.png\" width=\"40\" height=\"40\" style=\"cursor:pointer; margin:0px 0 0 10px; float:left\" title=\"Delete Debtor\" onclick=\"delcreditsup()\"/>";
				echo'<div id="res3" style="float:left;width:40px; height:40px; margin-left:10px"></div>
				</div>
			
				<div id="tabs-4">
					<a class="labels" style="margin-left:5px">Creditor Name:</a>
					<div class="ui_widget"  style="margin-left:10px;float:left; width:300px">
					<select id="item30">
					<option value="">Select one...</option>';
					$resulta =mysqli_query($conn,"select * from creditsuppliers order by CustomerName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								$cid=stripslashes($row['CustomerId']);
								$name=stripslashes($row['CustomerName']);
						echo'<option value="'.$cid.'">'.stripslashes($row['CustomerName']).'-'.$cid.'</option>';
						}
					echo'
					</select></div>
						<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">From:</a>
						<input type="text" id="datepick" class="input_field"  style="float:left;width:190px; margin-left:50px;" value=""/>
							<div class="cleaner_h5"></div>
							<a class="labels" style="margin-left:5px">To:</a>
							<input type="text" id="datepick2" class="input_field"  style="float:left;width:190px; margin-left:65px;" value=""/>
							<div class="cleaner_h5"></div>
							<input type="checkbox" style="float:left; margin:8px 0 0 10px;" name="viewall" value="1"/>
							<a class="labels" style="float:left;margin-left:5px">View All:</a>
							<div class="cleaner_h10"></div>';
							echo"<input type=\"button\" value=\"View\" id=\"submit\"  
								style=\"margin-left:60px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"viewstatement2();\"/>";
								
								echo'<input type="button" value="Exit" id="exit" style="margin-left:10px;
								 float:left; cursor:pointer;width:50px" class="in_field" 
								 onclick="hidenewstude();"/>	
								 	
								 
					</div>		
				
					
			

			</div></div>';

				break;
				
				case 31:
				$cus=$_GET['cus'];
				$_SESSION['supinvoice']=array(array());
				unset($_SESSION['supinvoice'][0]);
				$max=count($_SESSION['supinvoice']);
				echo'<div id="chati" style="width:950px; height:280px; overflow-y:auto">
				<div id="inside" style="min-height:260px;">
									<div id="title">
									<div id="figure1"  style="margin-left:0px; width:100px">Check</div>
									<div id="figure1"  style="margin-left:0px; width:125px">Date</div>
									<div id="figure1" style="width:150px">Invoice No</div>
									<div id="figure1" style="width:100px">Amount</div>
									<div id="figure1" style="width:100px">Paid</div>
									<div id="figure1" style="width:100px">Bal</div>
									<div id="figure1" style="width:130px">Paying</div>
									</div>
								';
								
				$result =mysqli_query($conn,"select * from creditsuppliers where CustomerId='".$cus."'");
				$row=mysqli_fetch_array($result);
				$bal=stripslashes($row['Bal']);
				echo"<script>$('#bal').val(".$bal.");
				bal=(".$bal.").formatMoney(2, '.', ',');
				$('#debtord').html('-Balance:' + bal);</script>";
				
				$resulta =mysqli_query($conn,"select * from supplierdebts where SupplierId='".$cus."' and DrCr='dr' and Status=1");
				$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
							$rowa=mysqli_fetch_array($resulta);
							$tno=stripslashes($rowa['TransNo']);
										echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:100px;height:16px; overflow:hidden\"><input type=\"checkbox\" id=\"check".$tno."\" onclick=\"checkinv2('".$tno."','".stripslashes($rowa['Amount'])."','".stripslashes($rowa['SupplierId'])."','".stripslashes($rowa['SupplierName'])."','".stripslashes($rowa['InvoiceNo'])."','".stripslashes($rowa['InvBal'])."','".stripslashes($rowa['Paid'])."')\" name=\"check".$tno."\" value=\"1\" /></div>
										<div id=\"figure2t\" style=\"width:125px\">".stripslashes($rowa['Date'])."</div>
										<div id=\"figure2t\" style=\"width:150px\">".stripslashes($rowa['InvoiceNo'])."</div>
											<div id=\"figure2t\" style=\"width:100px\">".stripslashes($rowa['Amount'])."</div>
											<div id=\"figure2t\" style=\"width:100px\">".stripslashes($rowa['Paid'])."</div>
												<div class=\"figure2t\" id=\"invbal".$tno."\" style=\"width:100px\">".stripslashes($rowa['InvBal'])."</div>
										<div id=\"figure2t\" style=\"width:136px\"><input type=\"text\" onkeyup=\"checkinvbal(".$tno.")\" id=\"am".$tno."\" style=\"text-align:center; margin-top:-2px\" /> </div>
										</div>
										<div class=\"cleaner\"></div>";
							}
							
							
				
				break;
				
				case 32:
				
				$tno=$_GET['tno'];
				$amount=$_GET['amount'];
				$max=count($_SESSION['supinvoice']);
				$_SESSION['supinvoice'][$tno]=array($tno,$amount,$_GET['cid'],$_GET['cname'],$_GET['invno'],$_GET['bal'],$_GET['paying'],$_GET['invbal'],$_GET['paid']);
				break;
				
				case 33:
				
				$tno=$_GET['tno'];
				unset($_SESSION['supinvoice'][$tno]);
				
				break;
				
					case 34:
					echo"<script>$('#dept9').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">User Access Rights';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
	
	 <div class="ui-widget" style="margin-left:10px; float:left; width:270px">
	<select class="select" id="dept9" style="width:260px;float:left; ">
	<option value="">Select one...</option>
								<option value="Admin">Admin</option>
								<option value="Doctor">Doctor</option>
								<option value="MOI">Medical Officer Incharge</option>
								<option value="Pharm">Pharmacist</option>
								<option value="ChiefCashier">Chief Cashier</option>
								<option value="Lab">LabTech</option>
								<option value="User">User</option>
								<option value="Rad">Radiology</option>
								<option value="Recep">Customer Care</option>
								<option value="ExtMedic">External Medic</option>
								<option value="Accounts">Accounts</option>
								<option value="Store">Procurement</option>
								<option value="Emp">Employee Manager</option>
								<option value="Triage">Triage</option>
								<option value="Nurse">Nurse</option>
								<option value="Eye">Eye Clinic</option>
								<option value="Dental">Dental</option>
								<option value="Mch">MCH</option>
								<option value="Hdu">HDU/Dialysis</option>
								<option value="Physiotherapy">Physiotherapy</option>
								<option value="Emergencies">Emergencies</option>
								<option value="Theatre">Theatre</option>
								<option value="Cssd">CSSD</option>
								<option value="Records">Records</option>
								<option value="Paediatrics">Paediatrics</option>
								<option value="Dialysis">Dialysis</option>
								<option value="Ambulance">Ambulance</option>
								<option value="Accountant">Accountant</option>
								<option value="CreditController">Credit Controller</option>
								<option value="Matron">Matron</option>
								<option value="Counselling">Counselling</option>

								<option value="Social">Social</option>
								<option value="Nutrition">Nutrition</option>
								<option value="Vct">Vct</option>
								<option value="Mortuary">Mortuary</option>
								<option value="BioMedic">BioMedic</option>
								
						</select>
						</div>
	<div class="cleaner_h5"></div>
			
				</div>';	
							break;	
							
							case 35:
							$dep9=$_GET['dep9'];
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses User Access Rights Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:471px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px; overflow-y:auto">
	<h5 style="text-align:center">User Access Rights-Position: '.$dep9.'</h5>';
		$result =mysqli_query($conn,"select * from accesstbl order by Descrip");
									$num_results = mysqli_num_rows($result);
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['AccessCode']);
									if(stripslashes($row[$dep9])=='YES'){
	echo "<input type=\"checkbox\" name=\"access".$code."\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkaccess('".$code."','".$dep9."')\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">".stripslashes($row['Descrip'])."</a>	<div class=\"cleaner_h5\"></div>";	
									}
									else{
		echo "<input type=\"checkbox\"  name=\"access".$code."\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkaccess('".$code."','".$dep9."')\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">".stripslashes($row['Descrip'])."</a>	<div class=\"cleaner_h5\"></div>";										
										
									}
									
									}
				
				
							
										
									echo'</div>
									</div>	
									<div id="recentstude">
										</div>
									</div>';
						
							break;
							
							case 36:
					$stamp=date('Ymd');
					echo"<script>$('#cons21').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:110px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Discharge Summary:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()">
				</h5></div>';
			$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PrescId desc");
			$num_results = mysqli_num_rows($result);
				echo'<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons21">
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
				case 37:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Discharge Summary Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=$rowq=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=mysqli_fetch_array($result);
							
							$resultb =mysqli_query($conn,"select * from admdetails where pid='".$pid."'");
							$rowb=mysqli_fetch_array($resultb);
							
							$resultc =mysqli_query($conn,"select * from discharge where patid='".$pntno."' order by id desc limit 0,1");
							$rowc=mysqli_fetch_array($resultc);
								echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">DISCHARGE SUMMARY-'.stripslashes($rowa['PatName']).'-'.stripslashes($rowa['PatId']).'</h2>';
									
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('report.php?id=4&rcptno='".$pid."')\" title=\"Print Patient Report\">";
		echo'	<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"savedischarge('".stripslashes($rowc['sumno'])."','".$pid."')\"/></div>";
				echo'	 <div id="res2" style="float:right;width:40px; height:40px; margin-left:10px"></div>';
								echo'
			<div id="tabs" style="width:1000px; height:425px; float:left; margin:0px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Admission Details</a></li>
				<li><a href="#tabs-2">Diagnosis</a></li>
				<li><a href="#tabs-3">Medication</a></li>
				<li><a href="#tabs-4">Clinical Summary</a></li>
			
				</ul>
			<div id="tabs-1">
			<a class="labels" style="float:left">Pat No:</a>
       <input type="text" id="patid" name="patid"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['pntno']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Pat Name:</a>
      <input type="text" id="patname" name="patname"   style="float:left;margin-left:10px;width:200px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['PatName']).'" disabled="disabled"/> 
	
		<a class="labels" style="float:left; margin-left:10px">Address:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:90px;border-color:#f00" class="in_field" value="'.stripslashes($row['address']).'" disabled="disabled"/> 
	  <a class="labels" style="float:left; margin-left:10px">Age:</a>
						  <input type="text" style="display:none" id="tdate" value="'.date('Y').'">
						 <input type="text" id="age" name="age" disabled="disabled" class="in_field"  style="float:left;border-color:#f00;margin-left:10px"/> 
						 <input type="hidden" id="dob" value="'.stripslashes($row['dob']).'"/>';
						 echo"<script>calcage('".stripslashes($row['dob'])."')</script>";
								echo'
 
	<a class="labels" style="float:left; margin-left:10px">Sex:</a>
      <input type="text" id="sex" name="oname"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($row['gender']).'" disabled="disabled"/> 	
		<div class="cleaner_h5"></div>
		
	<a class="labels" style="float:left; margin-left:0px">Contact:</a>
      <input type="text" id="contact" name="oname"   style="float:left;margin-left:10px;width:120px;border-color:#f00" class="in_field" value="'.stripslashes($row['contact']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Doctor:</a>
      <input type="text" id="doctor" name="oname"   style="float:left;margin-left:10px;width:200px;" class="in_field" value="'.stripslashes($rowa['Doctor']).'"/> 
	  <a class="labels" style="float:left; margin-left:10px">Ward:</a>
      <input type="text" id="ward" name="oname"   style="float:left;margin-left:10px;width:130px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['WardType']).'" disabled="disabled"/> 
	  <a class="labels" style="float:left; margin-left:10px">Room No:</a>
      <input type="text" id="roomno" name="oname"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['RoomNo']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Bed No:</a>
      <input type="text" id="bednum" name="oname"   style="float:left;margin-left:10px;width:50px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['BedNo']).'" disabled="disabled"/> 
	<div class="cleaner_h5"></div>
	<a class="labels" style="float:left;">Date of Admission:</a>
      <input type="text" id="datepick" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['AdmDate']).'" disabled="disabled"/> 
	  <a class="labels" style="float:left; margin-left:10px">Date of Discharge:</a>
      <input type="text" id="datepick2" name="oname"   style="float:left;margin-left:10px;width:100px;" class="in_field" value="'.date('Y/m/d').'" /> 
	  <a class="labels" style="float:left; margin-left:10px">Next appointment:</a>
      <input type="text" id="datepick3" name="oname"   style="float:left;margin-left:10px;width:150px;" class="in_field" value="'.stripslashes($rowc['nextapp']).'"/> 
	<div class="cleaner_h5"></div>
			</div>	
			<div id="tabs-2">

			<script>area31 = new nicEditor({fullPanel : true,maxHeight : 350}).panelInstance("disdiag");</script>
			<div style="width:520px;float:left">
		<textarea id="disdiag"  style="float:left;height:320px; width:500px" class="alergy">'.stripslashes($rowc['diagnosis']).'</textarea>
		</div>


		<div style="width:370px; border:1px solid #ccc; height:310px; float:left; margin-left:20px">
					<a class="labels" style="margin-left:20px;font-weight:bold">Diseases Summary:</a>';
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
		$parts=explode(';',stripslashes($rowq['DiagName']));
		foreach ($parts as $key => $val) {
		$_SESSION['dis'][$key]=$val;
			if($val!=''){
			echo'<div class="tag alert-info alert-dismissable" id="lantag'.$key.'"><button type="button" class="close" onclick="dismissdis(\''.$key.'\')"  aria-hidden="true">&times;</button>'.$val.'</div>';
			}
		}


					echo'</div>';

				echo'</div>
			</div>	
			<div id="tabs-3">
			<script>area32 = new nicEditor({fullPanel : true,maxHeight : 350}).panelInstance("dismed");</script>
	<textarea id="dismed"  style="float:left;height:340px; width:960px" class="alergy">'.stripslashes($rowc['medical']).'</textarea>
			</div>	
			<div id="tabs-4">
			<script>area33 = new nicEditor({fullPanel : true,maxHeight : 350}).panelInstance("clinsumm");</script>
	<textarea id="clinsumm"  style="float:left;height:340px; width:960px" class="alergy">'.stripslashes($rowc['clinical']).'</textarea>
			</div>	
		</div>
		
		</div>			';	
							
							break;
							
							case 38:
			$pid=$_GET['pid'];
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Admissions Summary Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
	$result =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$num_results = mysqli_num_rows($result);
							$row=mysqli_fetch_array($result);
							echo'<div id="newstude">
						<h2  style="float:left; padding:5px 5px 0 0; margin:0">Discharge Patient</h2>';
			echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"></div>";						
				echo'
								<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">
								<a class="labels">Pay Mode:<span>*</span></a>
                                 <input type="text" id="mode" name="oname" class="in_field" value="'.stripslashes($row['PayMode']).'" /> 
								<div class="cleaner_h5"></div>
							 <a class="labels">Pnt Name<span>*</span></a>
                                <input type="text" id="pname" name="oname" style="border-color:#f00"  class="in_field" value="'.stripslashes($row['PatName']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Patient No.<span>*</span></a>
                                <input type="text" id="patno" name="oname" style="border-color:#f00" class="in_field" value="'.stripslashes($row['PatId']).'" disabled="disabled"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Diagnosis<span>*</span></a>
                                <input type="text" id="diagnosis" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Diag. Code<span>*</span></a>
                                <input type="text" id="diagcode" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Invoice No.</a>
                                <input type="text" id="invoice" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels" title="">Doctor:<span>*</span></a>
                                <input type="text" id="doctor" name="oname" style="border-color:#f00" class="in_field" value="" title="'.stripslashes($row['Doctor']).'"/> 
								<div class="cleaner_h5"></div>
									<a class="labels">Adm Date.<span>*</span></a>
                                <input type="text" id="datepick" name="oname" class="in_field" value="'.stripslashes($row['AdmDate']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Discharge:<span>*</span></a>
                                <input type="text" id="datepick2" name="oname" class="in_field" value=""/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Billing Completed?</a>
								<input type="checkbox" style="float:left; margin:8px 5px 0 20px" name="billing" value="1">
								<div class="cleaner_h5"></div>
								<a class="labels">Discharge Summary?</a>
								<input type="checkbox" style="float:left; margin:8px 5px 0 10px" name="discharge" value="1">
								<div class="cleaner_h5"></div>
								
								</div>
							
								
								
								<div id="personal">
								<h5>Submit Details</h5>
								<a class="labels">Other Details:</a>
								<textarea id="odetail" style="float:right;height:170px" class="alergy"></textarea>
								<div class="cleaner_h5"></div>';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  
								style=\"margin-left:40px; float:left; cursor:pointer;width:50px\"
								 class=\"in_field\" onclick=\"saveadmsumm('".$pid."');\"/>";
								
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
							
							case 39:
					
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Admissions Reports Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Admissions Report
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
									cursor:pointer; width:80px" class="select" onclick="enteradm();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case 40:
										echo"<script>$('#itemname').parent().find('input:first').focus().width(250);</script>";
											echo"<script>$('.combos').parent().find('input:first').width(250);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Diagnosis Reports Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Diagnosis Report (OPD)
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>
								<option value="GENERAL CONSULTATIONS">General Consultations</option>
								<option value="PHYSIOTHERAPY">Physiotherapy</option>
								<option value="EYE CLINIC">Eye Clinic</option>
								<option value="MCH">MCH</option>
								<option value="DENTAL CLINIC">Dental Clinic</option>
								<option value="PAEDIATRICS">Paediatrics</option>
								<
						</select>
							</div>
						<div class="cleaner_h5"></div>';

						$result =mysqli_query($conn,"select * from diseases  order by name");
							$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:20px">Disease:</a>
				<div class="ui-widget" style="margin-left:10px; float:left">
				<select class="combos" id="diseas" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
						
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['name'])."\">".stripslashes($row['name'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="enterdiagrep();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;


							case 41:
										echo"<script>$('#itemname').parent().find('input:first').focus().width(250);</script>";
											echo"<script>$('.combos').parent().find('input:first').width(250);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Diagnosis Reports Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Diagnosis Report (IPD)
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="All">All</option>
								<option value="MALE_WARD">MALE_WARD</option>
								<option value="FEMALE_WARD">FEMALE_WARD</option>
								<option value="CHEMOTHERAPY">CHEMOTHERAPY</option>
								<option value="ELDERS_WARD">ELDERS WARD</option>
								<option value="PRIVATE_WARD">PRIVATE WARD</option>
								
						</select>
							</div>
						<div class="cleaner_h5"></div>';

						$result =mysqli_query($conn,"select * from diseases  order by name");
							$num_results = mysqli_num_rows($result);
				echo'<a class="labels" style="margin-left:20px">Disease:</a>
				<div class="ui-widget" style="margin-left:10px; float:left">
				<select class="combos" id="diseas" style="width:250px; margin-left:10px;">
						<option value="All">All</option>';
						
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['name'])."\">".stripslashes($row['name'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="enterdiagrep2();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

							
							
							
							case 42:
				echo"<script>$('#itemv').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Discharge Patient Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Patient Discharge
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>';
					$result =mysqli_query($conn,"select * from inpatients where Admitted!=0 order by PatName");
							$num_results = mysqli_num_rows($result);
							echo'
			
				<div class="ui-widget" style="margin-left:10px; float:left">
						<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
				<select class="select" id="itemv" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
						
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['PrescId'])."\">".stripslashes($row['PatName'])."-".stripslashes($row['PatId'])."</option>";
							}
							echo'</select>
				</div>
				<div class="cleaner_h5"></div>
				
						
						</div>';
							break;
							
							case 43:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Prescription Administration Chart Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=$rown=mysqli_fetch_array($resulta);mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=$rowp=mysqli_fetch_array($result);
							
							$resultb =mysqli_query($conn,"select * from admdetails where pid='".$pid."'");
							$rowb=mysqli_fetch_array($resultb);
								
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">INPATIENT TREATMENT [NURSE MODULE]-'.stripslashes($rowa['PatName']).'-'.stripslashes($rowa['PatId']).'</h2>';
									
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('report.php?id=4.1&rcptno=".$pid."')\" title=\"Print Patient Report\">";
				
								echo'
			<div id="tabs" style="width:1000px; height:435px; float:left; margin:0px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Admission Details</a></li>
				<li><a href="#tabs-2">Drug Record Sheet</a></li>
				<li><a href="#tabs-3">Nurses Notes (Cadex)</a></li>
				<li><a href="#tabs-4">Vitals Entries</a></li>
				<li><a href="#tabs-6">Patient File</a></li>
				<li><a href="#tabs-5">Patient Interim Bill</a></li>
				</ul>
			<div id="tabs-1">
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
		<input type="text" style="display:none" id="tdate" value="'.date('Y').'">
						 <input type="text" id="age" name="age" disabled="disabled" class="in_field"  style="float:left;margin-left:10px;border-color:#f00"/> 
						 <input type="hidden" id="dob" value="'.stripslashes($row['dob']).'"/>';
						 echo"<script>calcage('".stripslashes($row['dob'])."')</script>";
      
	echo'<a class="labels" style="float:left; margin-left:10px">Sex:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['gender']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Contact:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['contact']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Doctor:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:130px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['Doctor']).'" disabled="disabled"/> 
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
	<div id="save1" style="float:right; width:30px; height:30px;"><img src="images/back.jpg" style="float:right; width:30px; height:30px; cursor:pointer" onclick="savein1(\''.$pid.'\')"/></div>					
	<div class="cleaner"></div>
					</div> 


					<div id="tabs-3" style="overflow-y:auto;height:375px;">';
	echo"<div id=\"savez\" style=\"float:right; width:30px; height:30px;\"><img src=\"images/back.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 0px 0 0px; float:right\" title=\"Save Nurse Notes\"onclick=\"savenursenotes('".$pid."')\"/></div>";
	echo'<script>area20 = new nicEditor({fullPanel : true,maxHeight : 360}).panelInstance("nursenotes");</script>
	<textarea id="nursenotes"  style="float:left;height:350px; width:930px" class="alergy"></textarea>

				</div>



				<div id="tabs-2" style="height:350px;overflow-y:auto ">';
	echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:left\" title=\"Add new Drug\"onclick=\"addnewrowz('".$pid."','".stripslashes($rowa['PatName'])."','".$pntno."')\"/>	
	<div class=\"cleaner_h5\"></div>";
						
	$result = mysqli_query($conn,"SELECT * FROM  drugrecord where pid='".$pid."' and status=0");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="">
									<div id="title">
									<div id="figure1" style="width:250px">Drugs</div>
									<div id="figure1" style="width:100px">Dose</div>
									<div id="figure1" style="width:100px">Route</div>
									<div id="figure1" style="width:292px">Notes</div>
									<div id="figure1" style="width:65px;">Save </div>
									</div>';
									
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal".$code."\" class=\"normal\" style=\"border-top:2px solid #000\">";
									echo'
										<div class="figure2x" style="width:255px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['drugs']).'" id="drugs'.$code.'" style="background:#fff;width:250px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['dose']).'" id="dose'.$code.'" style="background:#fff;width:100px; font-size:10px"/></div>
										<div class="figure2x" style="width:105px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['route']).'" id="route'.$code.'" style="background:#fff;width:100px; font-size:10px"/></div>
										<div class="figure2x" style="width:295px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['notes']).'" id="notes'.$code.'" style="background:#fff;width:220px; font-size:10px"/></div>
										<div class="figure2x" style="width:65px;padding:3px 2px;display:none"><input type="text" class="put_field" value="'.stripslashes($row['cost']).'" id="cost'.$code.'" style="background:#fff;width:60px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" title=\"Save Record\" style=\"width:32px;padding:5px 5px;\" id=\"savethat".$code."\" onclick=\"savethat(".$code.")\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";
										echo"<div class=\"figure2\"  title=\"Add New Day\" style=\"width:32px;padding:5px 5px;\" id=\"addthat".$code."\" onclick=\"openewday(".$code.")\"><img src=\"images/plus.png\" style=\"width:20px;height:20px\"/></div>";
									echo'</div>
									<div class="cleaner"></div>';	
									
									
									$resulta = mysqli_query($conn,"SELECT * FROM  drugrecord where tid='".$code."' and status=1");
									$num_resultsa = mysqli_num_rows($resulta);
								
									for ($x=0; $x <$num_resultsa; $x++) {
										$rowa=mysqli_fetch_array($resulta);
										$cod=stripslashes($rowa['id']);
										echo"
										<div id=\"normal".$cod."\" class=\"normal\">";
										
									echo'<div class="figure2x" style="width:255px;padding:6px 2px"><input type="text" class="put_field" value="'.stripslashes($rowa['date']).'" id="date'.$cod.'" style="background:#fff;width:150px; font-size:10px" disabled="disabled"/></div>
									<div class="figure2x" style="width:35px;padding:7.5px 2px"><b>AM</b></div>
									
									
									<div style="float:left">
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left;border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">1</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">2</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">3</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000; border-bottom:0;  color:#000; text-align:center">4</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">5</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">6</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left;border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">7</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">8</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">9</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000; border-bottom:0;  color:#000; text-align:center">10</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">11</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">12</div>
									
									<div class="cleaner"></div>
									<div class="figure2x" style="width:15px;padding:2px 3px;"><input style="float:left" type="checkbox"  value="1" onclick=tickdrug("1am",'.$cod.')  name="1am'.$cod.'"';  if(stripslashes($rowa['1am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("2am",'.$cod.')  name="2am'.$cod.'"'; if(stripslashes($rowa['2am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("3am",'.$cod.')  name="3am'.$cod.'"'; if(stripslashes($rowa['3am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("4am",'.$cod.')  name="4am'.$cod.'"'; if(stripslashes($rowa['4am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("5am",'.$cod.')  name="5am'.$cod.'"'; if(stripslashes($rowa['5am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox" value="1" onclick=tickdrug("6am",'.$cod.')  name="6am'.$cod.'"';  if(stripslashes($rowa['6am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("7am",'.$cod.')  name="7am'.$cod.'"';  if(stripslashes($rowa['7am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("8am",'.$cod.')  name="8am'.$cod.'"'; if(stripslashes($rowa['8am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("9am",'.$cod.')  name="9am'.$cod.'"'; if(stripslashes($rowa['9am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("10am",'.$cod.')  name="10am'.$cod.'"'; if(stripslashes($rowa['10am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("11am",'.$cod.')  name="11am'.$cod.'"'; if(stripslashes($rowa['11am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox" value="1" onclick=tickdrug("12am",'.$cod.')  name="12am'.$cod.'"';  if(stripslashes($rowa['12am'])==1){echo'checked="checked"';} echo' /></div>	
	
	</div>
		<div class="figure2x" style="width:33px;padding:7.5px 2px"><b>PM</b></div>
		
			<div style="float:left">
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left;border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">1</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">2</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">3</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000; border-bottom:0;  color:#000; text-align:center">4</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">5</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">6</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left;border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">7</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">8</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">9</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000; border-bottom:0;  color:#000; text-align:center">10</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">11</div>
									<div style="width:16px; height:12px;padding:0 2.5px; margin:0;float:left; border-right:1px solid #000;border-bottom:0;   color:#000; text-align:center">12</div>
									
									<div class="cleaner"></div>
									<div class="figure2x" style="width:15px;padding:2px 3px;"><input style="float:left" type="checkbox"  value="1" onclick=tickdrug("1pm",'.$cod.')  name="1pm'.$cod.'"';  if(stripslashes($rowa['1pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("2pm",'.$cod.')  name="2pm'.$cod.'"'; if(stripslashes($rowa['2pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("3pm",'.$cod.')  name="3pm'.$cod.'"'; if(stripslashes($rowa['3pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("4pm",'.$cod.')  name="4pm'.$cod.'"'; if(stripslashes($rowa['4pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("5pm",'.$cod.')  name="5pm'.$cod.'"'; if(stripslashes($rowa['5pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox" value="1" onclick=tickdrug("6pm",'.$cod.')  name="6pm'.$cod.'"';  if(stripslashes($rowa['6pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("7pm",'.$cod.')  name="7pm'.$cod.'"';  if(stripslashes($rowa['7pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("8pm",'.$cod.')  name="8pm'.$cod.'"'; if(stripslashes($rowa['8pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("9pm",'.$cod.')  name="9pm'.$cod.'"'; if(stripslashes($rowa['9pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("10pm",'.$cod.')  name="10pm'.$cod.'"'; if(stripslashes($rowa['10pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox"  value="1" onclick=tickdrug("11pm",'.$cod.')  name="11pm'.$cod.'"'; if(stripslashes($rowa['11pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:15px;padding:2px 3px;"><input type="checkbox" value="1" onclick=tickdrug("12pm",'.$cod.')  name="12pm'.$cod.'"';  if(stripslashes($rowa['12pm'])==1){echo'checked="checked"';} echo' /></div>	
	
	</div>
	
	
	</div><div class="cleaner"></div>';	
									}
									
									echo'<div class="cleaner"></div>';
									}
									
									echo'	
									</div>	
				
					</div>
								
				



				<div id="tabs-6" style="overflow-y:auto;height:375px;">

<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">ADMISSION DETAILS ['.stripslashes($rown['AdmDate']).']</a>
	<div class="cleaner_h5"></div>
	<a class="labels">'.stripslashes($rown['AdmNotes']).'</a>
	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PROGRESS NOTES</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from progress where pid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">CADEX</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from cadex where pid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PHARMACY PRESCRIPTIONS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['prescription']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>PRESCRIBED BY:</b> '.stripslashes($row['requested']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">LABORATORY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from labrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">RADIOLOGY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from radrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">THEATRE REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from theatrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['procedures']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

		<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PRESCRIPTION ADMINISTRATION CHART</a>
	<div class="cleaner_h5"></div>';

	$result = mysqli_query($conn,"SELECT * FROM  drugrecord where pid='".$pid."' and status=1 order by stamp asc");
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									
									echo'
									<div class="cleaner_h5"></div>
									<div id="inside" style=" border-bottom:0; margin-left:0px">
									<div id="title"">
											<div id="figure1" style="width:80px">Date.</div>
											<div id="figure1" style="width:120px">Drugs</div>
											<div id="figure1" style="width:50px">Dose</div>
											<div id="figure1" style="width:50px">Route</div>
											<div id="figure1" style="width:100px">Notes</div>
											<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
											<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">AM</strong></div>
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
											<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">PM</strong></div>
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
											<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:1px solid #000;color:#fff; text-align:center">12</div>	
											</div>			
											
											
											</div>

											</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:0px solid #333;" id="normal'.$i.'" class="normal">';
	}else{
		echo'<div style="width:auto; height:20px;background:#fff;border-bottom:0px solid #333;"  id="normal'.$i.'" class="normal">';
	}
									
									echo'<div class="figure2x" style="width:85px;padding:2px 2px;font-size:10px">'.stripslashes($row['date']).'</div>
										<div class="figure2x" style="width:125px;padding:2px 2px;font-size:10px">'.stripslashes($row['drugs']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['dose']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['route']).'</div>
										<div class="figure2x" style="width:115px;padding:2px 2px;font-size:10px">'.stripslashes($row['notes']).'</div>';
									
										
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

	
echo'		<div class="cleaner_h10"></div>
<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS ENTRIES</a>
	<div class="cleaner_h5"></div>';
		$result = mysqli_query($conn,"SELECT * FROM  vitals where prescid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:120px">Date-Time</div>
									<div id="figure1" style="width:80px">Temp</div>
									<div id="figure1" style="width:80px">Bp</div>
									<div id="figure1" style="width:80px">Weight</div>
									<div id="figure1" style="width:80px">Pulse</div>
									<div id="figure1" style="width:80px">Breath</div>
									<div id="figure1" style="width:80px">RBS</div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal13".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['datetime']).'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['temp']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['bp1']).'/'.stripslashes($row['bp2']).'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['weight']).'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['pulse']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['breath']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:98px;padding:3px 2px;"><input disabled="disabled"  disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['random']).'"  style="background:#fff;width:90px; font-size:10px"/></div>';
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
									
										
						echo'</div>
<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS CHARTS</a>
	<div class="cleaner_h5"></div>';
					$result = mysqli_query($conn,"SELECT * FROM  vitals where prescid='".$pid."' order by id desc limit 0,7");
					$num_results = mysqli_num_rows($result);
					if($num_results>0){

					for ($i=0; $i <$num_results; $i++) {
					$row2=mysqli_fetch_array($result);
					$arr1[]='"'.stripslashes($row2['datetime']).'"';
					$arr2[]=stripslashes($row2['temp']);
					$arr3[]=stripslashes($row2['bp1']);
					$arr4[]=stripslashes($row2['bp2']);
					$arr5[]=stripslashes($row2['pulse']);
					$arr6[]=stripslashes($row2['breath']);
					$arr7[]=stripslashes($row2['weight']);
					$arr8[]=stripslashes($row2['random']);
					}
				$arr1=array_reverse($arr1);$arr2=array_reverse($arr2);$arr3=array_reverse($arr3);$arr4=array_reverse($arr4);$arr5=array_reverse($arr5);$arr6=array_reverse($arr6);$arr7=array_reverse($arr7);$arr8=array_reverse($arr8);
				$a=implode($arr1,",");$b=implode($arr2,",");$c=implode($arr3,",");$d=implode($arr4,",");$e=implode($arr5,",");$f=implode($arr6,",");$g=implode($arr7,",");$h=implode($arr8,",");
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Temparature Curve</p>";
	echo'<canvas id="line1" height="200" width="950"></canvas>
	
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
	<div class="cleaner_h10"></div>';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Blood Pressure Chart</p>";
	echo'<canvas id="bar" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Pulse Rate Curve</p>";
	echo'
	<canvas id="line2" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Respiratory Rate Curve</p>";
	echo'
	<canvas id="line3" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Weight Curve</p>";
	echo'
	<canvas id="line4" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Random Blood Sugars Curve</p>";
	echo'
	<canvas id="line5" height="200" width="950"></canvas>
	
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
	</script>';
}
	
	echo'<div class="cleaner_h5"></div>


	</div>

					
					
				
			<div id="tabs-4" style="height:350px;overflow-y:auto ">';
			echo"<img src=\"images/document_add.png\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 20px 0 0px; float:right\" title=\"Add new row\"onclick=\"addnewrowa(13)\"/>";
	
	$result = mysqli_query($conn,"SELECT * FROM  vitals where prescid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;width:100%;">
									<div id="title">
									<div id="figure1" style="width:120px">Date-Time</div>
									<div id="figure1" style="width:80px">Temp</div>
									<div id="figure1" style="width:80px">Bp1</div>
									<div id="figure1" style="width:80px">Bp2</div>
									<div id="figure1" style="width:80px">Weight</div>
									<div id="figure1" style="width:80px">Pulse</div>
									<div id="figure1" style="width:80px">Breath</div>
									<div id="figure1" style="width:80px">RBS</div>
									<div id="figure1" style="width:38px;">Save </div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal13".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['datetime']).'" id="date'.$code.'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['temp']).'" id="temp'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['bp1']).'" id="bp1'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['bp2']).'" id="bp2'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['weight']).'" id="weight'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field" value="'.stripslashes($row['pulse']).'" id="pulse'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['breath']).'" id="breath'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:95px;padding:3px 2px;"><input type="text" class="put_field" value="'.stripslashes($row['random']).'" id="random'.$code.'" style="background:#fff;width:90px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:44px;padding:5px 5px;\" id=\"savevitals".$code."\" onclick=\"savevitals(".$code.",1,'".$pid."')\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";						
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
											for ($i=100; $i <200; $i++) {
									echo"
									<div id=\"normal13".$i."\" class=\"normal\" style=\"display:none\">";
									echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input type="text" class="put_field" value="'.date('d/m/Y-H:i').'"  id="date'.$i.'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field" id="temp'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field" id="bp1'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field" id="bp2'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field"  id="weight'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input type="text" class="put_field"id="pulse'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input type="text" class="put_field"  id="breath'.$i.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:95px;padding:3px 2px;"><input type="text" class="put_field"  id="random'.$i.'" style="background:#fff;width:90px; font-size:10px"/></div>';
										echo"<div class=\"figure2\" style=\"width:44px;padding:5px 5px;\" id=\"savevitals".$i."\" onclick=\"savevitals(".$i.",2,'".$pid."')\"><img src=\"images/save.jpg\" style=\"width:20px;height:16px\"/></div>";	
								
									echo"</div><div class=\"cleaner\"></div>";
										}
										
						echo'</div></div>
<div id="tabs-5" style="height:350px;overflow-y:auto ">
					
				<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
	<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Date-Time</p>
	</div>
	<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Department</p>
	</div>
	<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Item Name</p>
	</div>
	<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Unit Price</p>
	</div>
	<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Qty</p>
	</div>
	<div style="width:135px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Total Price</p>
	</div>
	<div style="height:20px; float:left;width:127px; overflow:hidden;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Username</p>
	</div>
	</div>';


		$result =mysqli_query($conn,"select * from  tempbill where patid='".$pntno."' and status=1");
		$c=0;
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
		$row=mysqli_fetch_array($result);
		$patname=stripslashes($row['patname']) ;
		$c+=preg_replace('~,~', '', stripslashes($row['subnet']));
		if($i%2==0){
			echo'<div style="height:20px; border-bottom:1.5px solid #333; border-left:1.5px solid #333;" id="normal'.$i.'"">';
			}else{
				echo'<div style="height:20px; border-bottom:1.5px solid #333;border-left:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
			}
		
		echo'
		<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['date']).'</p>
		</div>
		<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['category']).'</p>
		</div>
		<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['itname']).'</p>
		</div>
		<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['price']).'</p>
		</div>
		<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['quat']).'</p>
		</div>
		<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['subnet']).'</p>
		</div>
		<div style="height:20px;border-right:1.5px solid #333; float:left;width:130px; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['fullname']).'</p>
		</div>
		
		</div><div class="cleaner"></div>';

	}

echo'
<div class="cleaner_h10"></div>
<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">Total:<b>'.number_format($c, 2).'</b></p>

				</div>
					</div>';
							break;
							
							case 44:
							 
echo'<div class="ui-widget" style="margin:0 10px 0 0px;  float:left; width:120px">
	<select id="pnt4">
		<option value="">Select one...</option>';
	$resulta =mysqli_query($conn,"select * from inpatients where Admitted=1 order by PatName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['PatId']).'">'.stripslashes($rowa['PatName']).'-'.stripslashes($rowa['PatId']).'</option>';
							}
	echo'</select>
	</div>';                

							
							break;
							
							case 45:
					$a=$_GET['a'];
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Invoices Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Invoices/Receipts Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterinvoices('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
					break;
					
					case 46:
					$a=$_GET['a'];
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Invoices Report-By company
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Company Name:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					
					<select class="select" id="itemname" style="width:280px; margin-left:10px;">
					<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from creditcustomers order by CustomerName");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['CustomerId']).'">'.stripslashes($row['CustomerName']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="enterinvoicesp('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 47:
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Bin Card Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Summ. Bin Card (Procurement)
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Item:</a>
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
									cursor:pointer; width:80px" class="select" onclick="enterbincard();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 48:
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Departmental Bin Card Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:300px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Bin Card
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							if($usertype=='Admin'||$usertype=='Accountant'||$usertype=='Store'){
							echo'
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
								}else{echo'<option value="'.$userdep.'">'.$userdep.'</option>';}
							echo'</select></div>
						<a class="labels" style="margin-left:20px">Item:</a>
						<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname101" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from items where Type='GOOD' order by ItemName");
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
									cursor:pointer; width:80px" class="select" onclick="enterdepbincard();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case 49:
							$param=$_GET['param'];
echo"<script>$('#item22').parent().find('input:first').focus().width(400);</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Invoice Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude" style=""><h5 style="margin-left:10px">Invoice Search Panel</h5>';
echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help1()\"/></div>";
						$arr=array();
						$resulta =mysqli_query($conn,"select * from receipts where paymode='Companies'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$arr[stripslashes($rowa['invno'])]=stripslashes($rowa['patname']).'-'.stripslashes($rowa['patid']);
							}								
									
							echo'<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="item22">
		<option value="">Select one...</option>';
		
			foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$val.'-'.$key.'</option>';
							}
			
	echo'</select>
	</div>';			
	echo'<div id="results" style="min-height:350px; min-width:700px">';
										
										if(isset($_GET['param'])){
										$param=$_GET['param'];}
										else $param='default';
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate(13,'".$param."');</script>";
										recent(13,14);
										}
										
											else {
											echo "<script>paginate(14,'".$param."');</script>";
										recent(13,14);
											}	
							break;
								case 50:
				
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Messages Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Messages Report
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
									cursor:pointer; width:80px" class="select" onclick="entermessages();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;
					
						case 51:
				
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Queue Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Queue Report
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
									cursor:pointer; width:80px" class="select" onclick="enterqueue();"/>
					<div class="cleaner"></div>
						
						</div>';
					break;
					case '52':
					$a=$_GET['a'];
					echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Income Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Departmental Income Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Department:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
				
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">';
							
			echo"<option value=\"".$userdep."\">".$userdep."</option>";
							
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
							
							case 53:
					echo"<script>$('#dept13').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">Items Access Rights';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
	
	 <div class="ui-widget" style="margin-left:10px; float:left; width:270px">
<select id="dept13"  style="width:260px; margin-left:10px;">
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
							case 54:
							$dep=$_GET['dep'];
						$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Items Access Rights Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<div id="newstude">
	<div id="results">						
	<div id="block1" style="height:471px; width:766px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px; overflow-y:auto">
	<h5 style="text-align:center">Items Access Rights-Department:'.$dep.'</h5>';
		$result =mysqli_query($conn,"select * from sections where branch='".$dep."'");
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['id']);
				
			if(stripslashes($row['amb'])==1){
echo "<input type=\"checkbox\" name=\"access1\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','amb',1)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">AMBULANCE</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access1\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','amb',1)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">AMBULANCE</a>	<div class=\"cleaner_h5\"></div>";	}
			
		if(stripslashes($row['counselling'])==1){
echo "<input type=\"checkbox\" name=\"access2\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','counselling',2)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">COUNSELLING</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access2\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','counselling',2)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">COUNSELLING</a>	<div class=\"cleaner_h5\"></div>";	}
									
		if(stripslashes($row['cssd'])==1){
echo "<input type=\"checkbox\" name=\"access3\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','cssd',3)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">CSSD</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access3\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','cssd',3)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">CSSD</a>	<div class=\"cleaner_h5\"></div>";	}
		if(stripslashes($row['cus'])==1){
echo "<input type=\"checkbox\" name=\"access4\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','cus',4)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">CUSTOMER CARE</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access4\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','cus',4)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">CUSTOMER CARE</a>	<div class=\"cleaner_h5\"></div>";	}
			
				if(stripslashes($row['dental'])==1){
echo "<input type=\"checkbox\" name=\"access5\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','dental',5)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">DENTAL CLINIC</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access5\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','dental',5)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">DENTAL CLINIC</a>	<div class=\"cleaner_h5\"></div>";	}
					
				if(stripslashes($row['dialysis'])==1){
echo "<input type=\"checkbox\" name=\"access6\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','dialysis',6)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">DIALYSIS</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access6\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','dialysis',6)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">DIALYSIS</a>	<div class=\"cleaner_h5\"></div>";	}	
					if(stripslashes($row['emergencies'])==1){
echo "<input type=\"checkbox\" name=\"access7\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','emergencies',7)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">EMERGENCIES</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access7\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','emergencies',7)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">EMERGENCIES</a>	<div class=\"cleaner_h5\"></div>";	}
			if(stripslashes($row['eye'])==1){
echo "<input type=\"checkbox\" name=\"access8\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','eye',8)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">EYE CLINIC</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access8\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','eye',8)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">EYE CLINIC</a>	<div class=\"cleaner_h5\"></div>";	}	
					if(stripslashes($row['general'])==1){
echo "<input type=\"checkbox\" name=\"access9\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','general',9)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">GENERAL</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access9\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','general',9)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">GENERAL</a>	<div class=\"cleaner_h5\"></div>";	}
				if(stripslashes($row['hdu'])==1){
echo "<input type=\"checkbox\" name=\"access10\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','hdu',10)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">HDU</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access10\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','hdu',10)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">HDU</a>	<div class=\"cleaner_h5\"></div>";	}	
			if(stripslashes($row['housekeeping'])==1){
echo "<input type=\"checkbox\" name=\"access24\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','housekeeping',24)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">HOUSEKEEPING</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access24\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','housekeeping',24)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">HOUSEKEEPING</a>	<div class=\"cleaner_h5\"></div>";	}	
				if(stripslashes($row['ward'])==1){
echo "<input type=\"checkbox\" name=\"access11\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','ward',11)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">WARD</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access11\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','ward',11)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">WARD</a>	<div class=\"cleaner_h5\"></div>";	}
		if(stripslashes($row['kitchen'])==1){
echo "<input type=\"checkbox\" name=\"access12\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','kitchen',12)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">KITCHEN</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access12\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','kitchen',12)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">KITCHEN</a>	<div class=\"cleaner_h5\"></div>";	}
			if(stripslashes($row['lab'])==1){
echo "<input type=\"checkbox\" name=\"access13\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','lab',13)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">LABORATORY</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access13\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','lab',13)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">LABORATORY</a>	<div class=\"cleaner_h5\"></div>";	}
			if(stripslashes($row['maternity'])==1){
echo "<input type=\"checkbox\" name=\"access14\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','maternity',14)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">MATERNITY</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access14\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','maternity',14)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">MATERNITY</a>	<div class=\"cleaner_h5\"></div>";	}
				if(stripslashes($row['mch'])==1){
echo "<input type=\"checkbox\" name=\"access15\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','mch',15)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">MCH</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access15\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','mch',15)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">MCH</a>	<div class=\"cleaner_h5\"></div>";	}
			if(stripslashes($row['ortho'])==1){
echo "<input type=\"checkbox\" name=\"access16\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','ortho',16)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">ORTHOPAEDIC</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access16\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','ortho',16)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">ORTHOPAEDIC</a>	<div class=\"cleaner_h5\"></div>";	}	
			if(stripslashes($row['opd'])==1){
echo "<input type=\"checkbox\" name=\"access17\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','opd',17)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">OUTPATIENT</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access17\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','opd',17)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">OUTPATIENT</a>	<div class=\"cleaner_h5\"></div>";	}
			
		if(stripslashes($row['paediatrics'])==1){
echo "<input type=\"checkbox\" name=\"access18\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','paediatrics',18)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PAEDIATRICS</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access18\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','paediatrics',18)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PAEDIATRICS</a>	<div class=\"cleaner_h5\"></div>";	}								
		if(stripslashes($row['pharmaceutical'])==1){
echo "<input type=\"checkbox\" name=\"access19\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','pharmaceutical',19)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PHARMACEUTICALS</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access19\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','pharmaceutical',19)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PHARMACEUTICALS</a>	<div class=\"cleaner_h5\"></div>";	}							
			
			if(stripslashes($row['phy'])==1){
echo "<input type=\"checkbox\" name=\"access20\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','phy',20)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PHYSIOTHERAPY</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access20\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','phy',20)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">PHYSIOTHERAPY</a>	<div class=\"cleaner_h5\"></div>";	}
			
			if(stripslashes($row['rad'])==1){
echo "<input type=\"checkbox\" name=\"access21\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','rad',21)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">RADIOLOGY</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access21\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','rad',21)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">RADIOLOGY</a>	<div class=\"cleaner_h5\"></div>";	}		
				
		if(stripslashes($row['stationery'])==1){
echo "<input type=\"checkbox\" name=\"access22\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','stationery',22)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">STATIONERY</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access22\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','stationery',22)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">STATIONERY</a>	<div class=\"cleaner_h5\"></div>";	}
		if(stripslashes($row['theatre'])==1){
echo "<input type=\"checkbox\" name=\"access23\" style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" checked=\"checked\" onclick=\"checkitemac('".$code."','theatre',23)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">THEATRE</a><div class=\"cleaner_h5\"></div>";	
									}else{
		echo "<input type=\"checkbox\"  name=\"access23\"  style=\"float:left; margin:8px 0 0 10px;\" value=\"1\" onclick=\"checkitemac('".$code."','theatre',23)\"/><a class=\"labels\" style=\"float:left;margin-left:5px; margin-right:20px\">THEATRE</a>	<div class=\"cleaner_h5\"></div>";	}					
										
									echo'</div>
									</div>	
									<div id="recentstude">
										</div>
									</div>';
						
							break;
							case '55':
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set up Comp IPs Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
								
							echo'<h5 style="text-align:center;">Set up Computer IPs Panel</h5><div class="cleaner"></div>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help58()\"/></div>";								
						echo"<div id=\"newle\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Add New Computer\" onclick=\"opencomp()\"/></div>";		
									
									 	echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						';
                    					echo "<script>paginate(15,0);</script>";
										
											
									
							echo'</div></div>
						</div></div>';
							
							break;
							case '56':
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Set up Banks Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px">';
								
							echo'<h5 style="text-align:center;">Set up Banks Panel</h5><div class="cleaner"></div>';
									echo"<div id=\"backatt\" style=\"width:30px; height:30px; float:right;margin:-25px 5px 0 0\"><img src=\"images/findstud.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help59()\"/></div>";								
						echo"<div id=\"newle\" style=\"width:30px; height:30px; float:right;margin:0px 10px 0 0\"><img src=\"images/plus.png\" width=\"30\" height=\"30\" style=\"cursor:pointer;\" title=\"Add New Computer\" onclick=\"openbank()\"/></div>";		
									
									 	echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						';
                    					echo "<script>paginate(16,0);</script>";
										
											
									
							echo'</div></div>
						</div></div>';
							
							break;
							case '57':
						
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Cash Collection Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px;">
							<div style="width:456px; float:left">	
							<h5 style="text-align:center; margin-top:20px">CHIEF CASHIER:CASH COLLECTION</h5>';
																
							echo'<div class="cleaner_h5"></div>
						<a class="labels" style="float:left; margin-left:10px;">Cashier Account:<span>*</span></a>
							 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="crledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where category='Cashier' order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
									if($username!=substr(stripslashes($row['name']),0,5)){
									echo'<option value="'.$value.'">'.$name.'</option>';
									}
							}
										
										echo'</select></div>
										<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Amount:<span>*</span></a>
		<input type="text" id="amount" name="name" class="input_field" value=""  style="width:240px; float:right; margin-right:10px"/>		
		<div class="cleaner_h5"></div>	
			<a class="labels" style="margin-left:10px">Notes:<span>*</span></a>
			<textarea id="desc" class="input_field"  style="width:240px;height:100px; margin-right:10px; float:right; font-size:11px"/>
	<div class="cleaner_h20"></div>';
			echo"<input type=\"button\" value=\"Submit\" id=\"submit\" style=\"margin-left:220px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"savecashcollect();\"/>";							
		echo'<div id="postresp" style="float:left; width:40px;height:40px; margin-left:20px"></div>';
							echo'</div>
							
						<div style="width:400px; float:left; border-left:2px solid #0085b2; height:400px; margin-left:50px; padding-left:20px; margin-top:20px">
							<h5 style="text-align:center; ">CURRENT CASHIER BALANCES</h5>
							<div class="cleaner_h5"></div>
						<div style="height:380px; width:400px; overflow-y:auto;">';
						$result =mysqli_query($conn,"select * from ledgers where category='Cashier' order by bal desc");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									if($username==substr(stripslashes($row['name']),0,5)){
										echo'<p style="color:#f00">'.$name.'-<b>'.stripslashes($row['bal']).'</b></p>';
									}else{echo'<p>'.$name.'-<b>'.stripslashes($row['bal']).'</b></p>';}
							}
						echo'
						</div>
						</div>	
							
							
							</div></div>
							';
							break;
							
							case '58':
							
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Expenses Management Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px;">
							<div style="width:456px; float:left">	
							<h5 style="text-align:center; margin-top:20px">Expenses Management</h5>';
																
							echo'<div class="cleaner_h5"></div>
						<a class="labels" style="float:left; margin-left:10px;">Expense Account:<span>*</span></a>
							 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="drledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where type='Expense' order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
								echo'<option value="'.$value.'">'.$name.'</option>';
									
							}
										
										echo'</select></div>
										<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Amount:<span>*</span></a>
		<input type="text" id="amount" name="name" class="input_field" value=""  style="width:240px; float:right; margin-right:10px"/>		
		<div class="cleaner_h5"></div>	
		<a class="labels" style="float:left; margin-left:10px;">Date:<span>*</span></a>
			<input type="text" id="datepick" name="name" class="input_field" value="'.date('Y/m/d').'"  style="width:240px; float:right; margin-right:10px;border-color:#f00" disabled/>	<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:10px">Notes:<span>*</span></a>
			<textarea id="desc" class="input_field"  style="width:240px;height:100px; margin-right:10px; float:right; font-size:11px"/>
	<div class="cleaner_h20"></div>';
			echo"<input type=\"button\" value=\"Submit\" id=\"submit\" style=\"margin-left:220px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"saveexpman();\"/>";							
		echo'<div id="postresp" style="float:left; width:40px;height:40px; margin-left:20px"></div>';
							echo'</div>
							
						<div style="width:400px; float:left; border-left:2px solid #0085b2; height:400px; margin-left:50px; padding-left:20px; margin-top:20px">
							<h5 style="text-align:center; ">CURRENT ACCOUNT BALANCE</h5>
							<div class="cleaner_h5"></div>
						<div style="height:380px; width:400px; overflow-y:auto;">';
						$result =mysqli_query($conn,"select * from ledgers where category='Cashier' order by bal desc");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									if($username==substr(stripslashes($row['name']),0,5)){
										echo'<p style="color:#f00; font-size:13px">'.$name.'-<b>'.stripslashes($row['bal']).'</b></p>';
									}
							}
									
						echo'
						</div>
						</div>	
							
							
							</div></div>
							';
							break;

							case '59':
							
								$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Bank Deposits Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

								echo'
							<div id="newstude">
							<div id="results" style="min-height:350px;">
						<div id="block1" style="float:left;height:470px; width:996px; background:#fff; margin:0 5px 5px 0;padding-left:10px; border-radius:0px;">
							<div style="width:456px; float:left">	
							<h5 style="text-align:center; margin-top:20px">Bank Deposits</h5>';
																
							echo'<div class="cleaner_h5"></div>
						<a class="labels" style="float:left; margin-left:10px;">Bank Account:<span>*</span></a>
							 <div class="ui-widget" style="margin-right:10px; float:right">
							<select style="float:left; margin-left:20px; width:250px" class="select" id="drledger">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from ledgers where category='Bank' order by name");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									$value=stripslashes($row['ledgerid']);
									echo'<option value="'.$value.'">'.$name.'</option>';
									
							}
										
										echo'</select></div>
										<div class="cleaner_h5"></div>
			<a class="labels" style="float:left; margin-left:10px;">Amount:<span>*</span></a>
		<input type="text" id="amount" name="name" class="input_field" value=""  style="width:240px; float:right; margin-right:10px"/>		
		<div class="cleaner_h5"></div>	
			<a class="labels" style="margin-left:10px">Notes:<span>*</span></a>
			<textarea id="desc" class="input_field"  style="width:240px;height:100px; margin-right:10px; float:right; font-size:11px"/>
	<div class="cleaner_h20"></div>';
			echo"<input type=\"button\" value=\"Submit\" id=\"submit\" style=\"margin-left:220px; float:left; cursor:pointer;width:60px\" class=\"input_field\" onclick=\"savebankdep();\"/>";							
		echo'<div id="postresp" style="float:left; width:40px;height:40px; margin-left:20px"></div>';
							echo'</div>
							
						<div style="width:400px; float:left; border-left:2px solid #0085b2; height:400px; margin-left:50px; padding-left:20px; margin-top:20px">
							<h5 style="text-align:center; ">CURRENT ACCOUNT BALANCE</h5>
							<div class="cleaner_h5"></div>
						<div style="height:380px; width:400px; overflow-y:auto;">';
						$result =mysqli_query($conn,"select * from ledgers where category='Cashier' order by bal desc");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$name=stripslashes($row['name']);
									if($username==substr(stripslashes($row['name']),0,5)){
										echo'<p style="color:#f00; font-size:13px">'.$name.'-<b>'.stripslashes($row['bal']).'</b></p>';
									}
							}
						echo'
						</div>
						</div>	
							
							
							</div></div>
							';
							break;
						
				
				case 61:
				
				$tno=$_GET['tno'];
				$_SESSION['consinvoice'][$tno]=$tno;
				break;
				
				case 62:
				
				$tno=$_GET['tno'];
				unset($_SESSION['consinvoice'][$tno]);
				
				break;
				
					case 63:
					$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Valuation Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<script>$('#dept89').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:180px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Stock Valuation:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="float:left; margin-left:10px;">Dept:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="dept89">';
							if($usertype=='Admin'||$usertype=='Accountant'||$usertype=='Store'){
							echo'
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
								}else{echo'<option value="'.$userdep.'">'.$userdep.'</option>';}
							echo'</select></div>
								<div class="cleaner_h5"></div>
								<a class="labels" style="float:left; margin-left:10px;">Section:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="categ90">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from categories where Type='GOOD'");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
							
							echo'	<option value="All">All</option></select></div>
				<div class="cleaner_h10"></div>
				
				
				<div id="letacateg"></div>
				
			
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstockval();"/>
					<div class="cleaner_h5"></div>
								</div>
								</div>	
		';
							break;
					
							case 64:
					$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Stock Taking Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<script>$('#dept89').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:180px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Stock Taking:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="float:left; margin-left:10px;">Dept:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="dept89">';
							if($usertype=='Admin'||$usertype=='Accountant'||$usertype=='Store'){
							echo'
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from branchtbl order by Branchname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['Branchname']).'">'.stripslashes($row['Branchname']).'</option>';
							}
								}else{echo'<option value="'.$userdep.'">'.$userdep.'</option>';}
							echo'</select></div>
								<div class="cleaner_h5"></div>
							<a class="labels" style="float:left; margin-left:10px;">Section:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="categ90">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from categories where Type='GOOD'");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
							
							echo'	<option value="All">All</option></select></div>
				<div class="cleaner_h10"></div>
				
				
				<div id="letacateg"></div>
				
			
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterstocktaking();"/>
					<div class="cleaner_h5"></div>
								</div>
								</div>	
		';
							break;
							
								case 65:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Goods Price List Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:170px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Price List
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<a class="labels" style="margin-left:20px">Section:</a>
					<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="itemname" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories where Type='GOOD'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
						echo'</select>
						<div class="cleaner_h5"></div>
					<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="entergoodsprice('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 66:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Goods Returned Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Returned Report-All
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
									cursor:pointer; width:80px" class="select" onclick="enterreturn('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 67:
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:250px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Returned Report-By Item
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterreturnrep('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
						
							break;
							case 68:
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Purchases Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

					$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:250px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Goods Returned-By Supplier
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
							echo'<option  value="'.stripslashes($row['CustomerName']).'">'.stripslashes($row['CustomerName']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="enterreturnrep('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
						
							break;
							
							case 69:
					
						echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Invoice Listing-Outwards Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Invoice Listing (Outwards)
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
									cursor:pointer; width:80px" class="select" onclick="enterinvoicelist2();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
							case 70:
					
					
						echo"<script>$('#categ90').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Re-Order Level Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Re-Order Level-By Section/All
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="float:left; margin-left:10px;">Section:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="categ90">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from categories where Type='GOOD'");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
							
							echo'	<option value="All">All</option></select></div>
				<div class="cleaner_h10"></div>
				
				
				<div id="letacateg"></div>
				
			
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="enterreorder();"/>
					<div class="cleaner_h5"></div>
								
					</div>';
						
							break;
							
							case 71:
							$name=$_GET['name'];
							echo'<a class="labels" style="float:left; margin-left:10px;">Sub-Category:</a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="subcateg89">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from subcategories where branch='".$name."' order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option  value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
							}
							echo'	<option value="All">All</option></select></div>
				<div class="cleaner_h10"></div>';
							
							break;
							
							case 72:
					
					
						echo"<script>$('#randomstock').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Random Stock Take Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Random Stock Take
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="randomstock" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from categories where Type='GOOD'");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['ItemCat']).'">'.stripslashes($row['ItemCat']).'</option>';
							}
							echo'<option value="All">All</option></select>	
					<div class="cleaner_h5"></div>
									
					</div>';
						
							break;
							
							case 73:
				$a=$_GET['a'];
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Patients Reports Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">';
				if($a==1){
				echo'<h5 style="margin-right:10px; color:#fff">OutPatients Report';
				}
				else if($a==2){
				echo'<h5 style="margin-right:10px; color:#fff">InPatients Report';
				}else if($a==4){
				echo'<h5 style="margin-right:10px; color:#fff">Unregistered Patients Report';
				}else{echo'<h5 style="margin-right:10px; color:#fff">All Patients Report';}
				echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterpatreport('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case '73.1':
				$a=$_GET['a'];
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Patients Reviews Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
$a=$_GET['a'];
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">';
				echo'<h5 style="margin-right:10px; color:#fff">Patients Review Report';
				echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterpatreview('.$a.');"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							case '73.2':
		
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Patients List Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">';
				echo'<h5 style="margin-right:10px; color:#fff">Patients List Report';
				echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterpatlist();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;
							
								case '73.3':
					
					
						echo"<script>$('#inpatlist').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatients List Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Current In-Patients List
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="select" id="inpatlist" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
					echo'<option value="All">All</option>
					<option value="MALE_WARD">MALE WARD</option>
					<option value="MATERNITY">MATERNITY</option>
					<option value="FEMALE_WARD">FEMALE WARD</option>
					<option value="PAEDIATRICS">PAEDIATRICS</option>
					</select>	
					<div class="cleaner_h5"></div>
									
					</div>';
						
							break;
							
							case '73.4':
					
					
						echo"<script>$('#dispcat').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatients List Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Pharmacy Dispenses Report
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
					<div class="ui-widget" style="margin-left:10px; float:left">
					<select class="combos" id="dispcat" style="width:250px; margin-left:10px;">
						<option value="">Select one...</option>';
					echo'<option value="All">All Patients</option>
					<option value="Unregistered">Unregistered Patients</option>
					<option value="Registered">Registered Patients</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterpharmdisp();"/>
					<div class="cleaner_h5"></div>
					
									
					</div>';
						
							break;
							
							
							case 74:
							
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Consultations Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
		
							$pid=25;
							$resulta =mysqli_query($conn,"select * from newprescription where PrescId='".$pid."'");
							$rowa=mysqli_fetch_array($resulta);
							$patid=stripslashes($rowa['PatId']);
							$dept=stripslashes($rowa['Dept']);
							$dcare=stripslashes($rowa['DayCare']);
							$result =mysqli_query($conn,"select * from patients where pntno='".stripslashes($rowa['PatId'])."'");
							$row=mysqli_fetch_array($result);
							
							
							echo'<div id="newstude">';
						
								echo"<h2  style=\"float:left; padding:5px 5px 0 0; margin:0\">".$dept."-".stripslashes($row['name'])." ".stripslashes($row['oname'])." ".stripslashes($row['lname'])." [".stripslashes($row['pntno'])."] </h2>";
								
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 5px 0 0px; cursor:pointer\" onclick=\"window.open('report.php?id=4&rcptno=".$pid."')\" title=\"Print Patient Report\">";
		echo'<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Help" id="submit"  style="padding:2px 5px; border-color:#fff; background:#ff3; float:left; cursor:pointer;width:50px" class="in_field" onclick="help53();"/></div>
								<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"savenewpresc('".$pid."'')\"/></div>";
		
echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								
<div id="tabs5" style="width:996px; height:433px">
	<ul>
		<li><a href="#tabs-1">Demographics</a></li>
		<li><a href="#tabs-2">Triage</a></li>
		<li><a href="#tabs-3">History</a></li>
		<li><a href="#tabs-8">Phy. Exam.</a></li>
		<li><a href="#tabs-7">Diagnosis</a></li>
		<li><a href="#tabs-9">Theatre</a></li>
		
	</ul>';
	if($dcare==1){
		$xxx=0;
								echo"<script>
									$().customAlert();
									alert('Alert!', '<p> This Patient is registerd as a corporate. <br/>Any billing should be done in the Corporate Billing/Accumulative Billing Panel.</p>');
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
								<a class="labels">1<sup>st</sup> Name:<span>*</span></a>
                                <input type="text" id="name" name="name" disabled="disabled"  style="border-color:#f00" class="in_field" value="'.stripslashes($row['name']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">2<sup>nd</sup> Name:<span>*</span></a>
                                <input type="text" id="oname" name="oname"  style="" class="in_field" value="'.stripslashes($row['oname']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">3<sup>rd</sup> Name:<span>*</span></a>
                                <input type="text" id="lname" name="oname"  disabled="disabled"  style="border-color:#f00"  class="in_field" value="'.stripslashes($row['lname']).'"/> 
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

	
	

	
</div>
							</div>
   							';
							
					break;
					
					case 75:
					echo'<a class="labels" style="margin-left:10px; font-weight:bold">Search By:</a>
		<select class="input_field" id="menusearch" style="float:right; margin-right:10px">
		<option value="1" onclick="menuop(1)">Patient Name</option>
		<option value="2" onclick="menuop(2)">Patient No</option>
		<option value="3" onclick="menuop(3)">Next of Kin</option>
		<option value="4" onclick="menuop(4)">Phone No</option>
			<option value="5" onclick="menuop(5)">O/P No</option>
		</select>
		<div class="cleaner_h5"></div>
	<div id="op1">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt31" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	<div id="op2" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt32" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by pntno");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['pntno']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	<div id="op3" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt33" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by gname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['gname']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	<div id="op4" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt34" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by contact");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['contact']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	<div id="op5" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt35" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by opno asc");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['opno']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	<div class="cleaner_h5"></div>';
	break;
	
	case 76:
	echo'<a class="labels" style="margin-left:10px; font-weight:bold">Search By:</a>
		<select class="input_field" id="menusearch" style="float:right; margin-right:10px">
		<option value="1" onclick="menuop(1)">Patient Name</option>
		<option value="2" onclick="menuop(2)">Patient No</option>
		<option value="3" onclick="menuop(3)">Next of Kin</option>
		<option value="4" onclick="menuop(4)">Phone No</option>
		<option value="5" onclick="menuop(5)">O/P No</option>
		
		</select>
		<div class="cleaner_h5"></div>
	<div id="op1">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt31" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	<div id="op2" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt32" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by pntno");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['pntno']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	<div id="op3" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt33" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by gname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['gname']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	<div id="op4" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt34" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by contact");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['contact']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>
	
	<div id="op5" style="display:none">
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="pnt35" class="pnt3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from patients where status=1 order by opno asc");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$pntno=stripslashes($row['pntno']);
								echo'<option value="'.$pntno.'">'.stripslashes($row['opno']).'</option>';
							}
		echo'
			</select>
		</div>
	</div>';
	break;

		case 77:
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Inpatient Management-Doctor Module Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							$pid=$_GET['pid'];
							
							$resulta =mysqli_query($conn,"select * from inpatients where PrescId='".$pid."'");
							$rowa=$rown=mysqli_fetch_array($resulta);
							$pntno=stripslashes($rowa['PatId']);
							$result =mysqli_query($conn,"select * from patients where pntno='".$pntno."'");
							$row=$rowp=mysqli_fetch_array($result);
							$oname=stripslashes($row['fullnames']);
							$regn=stripslashes($row['pntno']);
							
							$resultb =mysqli_query($conn,"select * from admdetails where pid='".$pid."'");
							$rowb=mysqli_fetch_array($resultb);
								
							echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">INPATIENT [DOCTOR MODULE]-'.stripslashes($rowa['PatName']).'-'.stripslashes($rowa['PatId']).'</h2>';
		
		echo'<div id="" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">';
								echo"<input type=\"button\" value=\"Save\" id=\"submit\"  style=\"padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px\" class=\"in_field\" onclick=\"savedocin('".$pid."')\"/></div>";
									
		echo"<img src=\"images/print.png\" width=\"30\" height=\"30\" style=\"float:right; margin:0px 10px 0 10px; cursor:pointer\" onclick=\"window.open('report.php?id=4.1&rcptno=".$pid."')\" title=\"Print Patient Report\">";
				
								echo'
			<div id="tabs" style="width:1000px; height:435px; float:left; margin:0px 0 0 0px">
			<ul>
				<li><a href="#tabs-1">Admission Details</a></li>
				<li><a href="#tabs-10">Previous History</a></li>
				<li><a href="#tabs-2">Admission Notes</a></li>
				<li><a href="#tabs-6">Patient File</a></li>
				<li><a href="#tabs-9">Patient Interim Bill</a></li>
				<li><a href="#tabs-3">Progress Notes</a></li>
				<li><a href="#tabs-4">Pharmacy</a></li>
				<li><a href="#tabs-5">Laboratory</a></li>
				<li><a href="#tabs-7">Radiology</a></li>
				<li><a href="#tabs-8">Theatre</a></li>
				</ul>
			<div id="tabs-1">
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
		<input type="text" style="display:none" id="tdate" value="'.date('Y').'">
						 <input type="text" id="age" name="age" disabled="disabled" class="in_field"  style="float:left;margin-left:10px;border-color:#f00"/> 
						 <input type="hidden" id="dob" value="'.stripslashes($row['dob']).'"/>';
						 echo"<script>calcage('".stripslashes($row['dob'])."')</script>";
      
	echo'<a class="labels" style="float:left; margin-left:10px">Sex:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['gender']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Contact:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:100px;border-color:#f00" class="in_field" value="'.stripslashes($row['contact']).'" disabled="disabled"/> 
	<a class="labels" style="float:left; margin-left:10px">Doctor:</a>
      <input type="text" id="temp" name="oname"   style="float:left;margin-left:10px;width:130px;border-color:#f00" class="in_field" value="'.stripslashes($rowa['Doctor']).'" disabled="disabled"/> 
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
	<div id="save1" style="float:right; width:30px; height:30px;"><img src="images/back.jpg" style="float:right; width:30px; height:30px; cursor:pointer" onclick="savein1(\''.$pid.'\')"/></div>					
	<div class="cleaner"></div>
					</div> 
					
					<div id="tabs-2" style="height:350px;verflow-y:auto ">';
	echo"<div id=\"savey\" style=\"float:right; width:30px; height:30px;\"><img src=\"images/back.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 0px 0 0px; float:right\" title=\"Save Admission Notes\"onclick=\"saveadmnotes('".$pid."')\"/></div>";
	echo'<script>area12 = new nicEditor({fullPanel : true,maxHeight :360}).panelInstance("docnotes");</script>
	<textarea id="docnotes" style="float:right;height:350px; width:930px" class="alergy">'.stripslashes($rowa['AdmNotes']).'</textarea>
	
				
					</div>
								
				<div id="tabs-3" style="overflow-y:auto;height:375px;">';
	echo"<div id=\"savez\" style=\"float:right; width:30px; height:30px;\"><img src=\"images/back.jpg\" width=\"30\" height=\"30\" style=\"cursor:pointer; margin:-3px 0px 0 0px; float:right\" title=\"Save Progress Notes\"onclick=\"saveprognotes('".$pid."')\"/></div>";
	echo'<script>area20 = new nicEditor({fullPanel : true,maxHeight : 360}).panelInstance("prognotes");</script>
	<textarea id="prognotes"  style="float:left;height:350px; width:930px" class="alergy"></textarea>

				</div>
				<div id="tabs-4" style="overflow-y:auto;height:375px;">';
			echo"<script> $('#presct').parent().find('input:first').width(530);
						$('#labt').parent().find('input:first').width(300);
						$('#dr1').parent().find('input:first').width(180);
						$('.dr').parent().find('input:first').width(75);
						area10 = new nicEditor({fullPanel : true,maxHeight :230}).panelInstance('prescription');
						</script>
						";
						

echo'<a class="labels">Type Prescription name and press enter:</a>
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
	
	<a class="labels">Or fill the details below and click [Add].</a>';
	
	echo'<input type="checkbox" value="1" name="recpharm" id="recpharm" style="float:left;margin:8px 0 0 400px">
	<a class="labels" style="margin-left:10px">Send Prescription to Pharmacy On Save </a>
	 <div class="cleaner"></div>';
	
	echo'<div class="cleaner"></div>
	<a class="labels">Drug Name</a><a class="labels" style="margin-left:210px">Dosage</a>	
	<a class="labels" style="margin-left:100px">Route</a><a class="labels" style="margin-left:90px">Frequency</a>		
	<a class="labels" style="margin-left:100px">Duration</a><a class="labels" style="margin-left:70px">Quantity</a>
	<div class="cleaner"></div>		
	<div class="ui-widget" style="margin-left:0px; float:left;" >
		<select class="drugname" id="dr1" style="width:260px; margin-left:0px;">
		<option value="">Select one...</option>';
			$resultb =mysqli_query($conn,"select * from items where PHARMACY>0 and Type='GOOD' order by ItemName");
			$num_resultsb = mysqli_num_rows($resultb);
			$resultc =mysqli_query($conn,"select * from items where CSSD>0 and Type='GOOD' order by ItemName");
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
	<div style="width:500px; float:left">
	<textarea id="prescription" style="float:right;height:210px; width:480px" class="alergy"></textarea>

	<div class="cleaner"></div>
	<input type="checkbox" value="1" name="printrec" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Precription on Save</a>
	</div>
<div style="width:440px; float:left;padding:2px;">
<h5>Prescriptions Summary</h5>
<div style="width:430px; float:left;padding:2px;height:230px; overflow-y:auto; border:1px solid #ccc;">';
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
		<div id="tabs-6" style="overflow-y:auto;height:375px;">

<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">ADMISSION DETAILS ['.stripslashes($rown['AdmDate']).']</a>
	<div class="cleaner_h5"></div>
	<a class="labels">'.stripslashes($rown['AdmNotes']).'</a>
	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PROGRESS NOTES</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from progress where pid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">CADEX</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from cadex where pid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PHARMACY PRESCRIPTIONS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['prescription']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>PRESCRIBED BY:</b> '.stripslashes($row['requested']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">LABORATORY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from labrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">RADIOLOGY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from radrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">THEATRE REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysqli_query($conn,"select * from theatrequests where prescid='".$pid."'");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysqli_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['procedures']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

		<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PRESCRIPTION ADMINISTRATION CHART</a>
	<div class="cleaner_h5"></div>';

	$result = mysqli_query($conn,"SELECT * FROM  drugrecord where pid='".$pid."' and status=1 order by stamp asc");
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									
									echo'
									<div class="cleaner_h5"></div>
									<div id="inside" style=" border-bottom:0; margin-left:0px">
									<div id="title"">
											<div id="figure1" style="width:80px">Date.</div>
											<div id="figure1" style="width:120px">Drugs</div>
											<div id="figure1" style="width:50px">Dose</div>
											<div id="figure1" style="width:50px">Route</div>
											<div id="figure1" style="width:100px">Notes</div>
											<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
											<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">AM</strong></div>
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
											<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">PM</strong></div>
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
											<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:1px solid #000;color:#fff; text-align:center">12</div>	
											</div>			
											
											
											</div>

											</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:0px solid #333;" id="normal'.$i.'" class="normal">';
	}else{
		echo'<div style="width:auto; height:20px;background:#fff;border-bottom:0px solid #333;"  id="normal'.$i.'" class="normal">';
	}
									
									echo'<div class="figure2x" style="width:85px;padding:2px 2px;font-size:10px">'.stripslashes($row['date']).'</div>
										<div class="figure2x" style="width:125px;padding:2px 2px;font-size:10px">'.stripslashes($row['drugs']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['dose']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['route']).'</div>
										<div class="figure2x" style="width:115px;padding:2px 2px;font-size:10px">'.stripslashes($row['notes']).'</div>';
									
										
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

	
echo'		<div class="cleaner_h10"></div>
<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS ENTRIES</a>
	<div class="cleaner_h5"></div>';
		$result = mysqli_query($conn,"SELECT * FROM  vitals where prescid='".$pid."'");
									$num_results = mysqli_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:120px">Date-Time</div>
									<div id="figure1" style="width:80px">Temp</div>
									<div id="figure1" style="width:80px">Bp</div>
									<div id="figure1" style="width:80px">Weight</div>
									<div id="figure1" style="width:80px">Pulse</div>
									<div id="figure1" style="width:80px">Breath</div>
									<div id="figure1" style="width:80px">RBS</div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysqli_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal13".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['datetime']).'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['temp']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['bp1']).'/'.stripslashes($row['bp2']).'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['weight']).'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['pulse']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['breath']).'"  style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:98px;padding:3px 2px;"><input disabled="disabled"  disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['random']).'"  style="background:#fff;width:90px; font-size:10px"/></div>';
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
									
										
						echo'</div>
<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS CHARTS</a>
	<div class="cleaner_h5"></div>';
					$result = mysqli_query($conn,"SELECT * FROM  vitals where prescid='".$pid."' order by id desc limit 0,7");
					$num_results = mysqli_num_rows($result);
					if($num_results>0){

					for ($i=0; $i <$num_results; $i++) {
					$row2=mysqli_fetch_array($result);
					$arr1[]='"'.stripslashes($row2['datetime']).'"';
					$arr2[]=stripslashes($row2['temp']);
					$arr3[]=stripslashes($row2['bp1']);
					$arr4[]=stripslashes($row2['bp2']);
					$arr5[]=stripslashes($row2['pulse']);
					$arr6[]=stripslashes($row2['breath']);
					$arr7[]=stripslashes($row2['weight']);
					$arr8[]=stripslashes($row2['random']);
					}
				$arr1=array_reverse($arr1);$arr2=array_reverse($arr2);$arr3=array_reverse($arr3);$arr4=array_reverse($arr4);$arr5=array_reverse($arr5);$arr6=array_reverse($arr6);$arr7=array_reverse($arr7);$arr8=array_reverse($arr8);
				$a=implode($arr1,",");$b=implode($arr2,",");$c=implode($arr3,",");$d=implode($arr4,",");$e=implode($arr5,",");$f=implode($arr6,",");$g=implode($arr7,",");$h=implode($arr8,",");
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Temparature Curve</p>";
	echo'<canvas id="line1" height="200" width="950"></canvas>
	
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
	<div class="cleaner_h10"></div>';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Blood Pressure Chart</p>";
	echo'<canvas id="bar" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Pulse Rate Curve</p>";
	echo'
	<canvas id="line2" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Respiratory Rate Curve</p>";
	echo'
	<canvas id="line3" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Weight Curve</p>";
	echo'
	<canvas id="line4" height="200" width="950"></canvas>
	
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
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Random Blood Sugars Curve</p>";
	echo'
	<canvas id="line5" height="200" width="950"></canvas>
	
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
	</script>';
}
	
	echo'<div class="cleaner_h5"></div>


	</div>
				<div id="tabs-10" style="">

		<div class="cleaner_h5"></div>
		 <div style="height:360px; overflow-y:auto; border:0px solid #ccc;width:100%;padding:2px">';


		 	 $result =mysqli_query($conn,"select * from newprescription where PatId='".$pntno."'");
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
   				
   				$result =mysqli_query($conn,"select * from inpatients where PatId='".$pntno."' and PrescId!='".$pid."'");
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

	<div id="tabs-5" style="">';
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
				<input type="hidden" id="regn" value="'.$regn.'"/><input type="hidden" id="oname" value="'.$oname.'"/>';
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

		echo'</div>
		</div>
</div>';
//end tabs 6


echo'<div id="tabs-7" style="">';
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
				<input type="hidden" id="regn" value="'.$regn.'"/><input type="hidden" id="oname" value="'.$oname.'"/>';
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
		//<input type="checkbox" value="1" name="printlab" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Lab Analysis on Save</a>
		 echo'<div class="cleaner_h5"></div>
		 <div style="height:340px; overflow-y:auto; border:1px solid #ccc;width:520px;padding:2px">';
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
		</div>
</div>';//end tabs 7


	echo'<div id="tabs-9" style="overflow-y:auto;height:375px;">

	<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333; background:#333">
	<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Date-Time</p>
	</div>
	<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Department</p>
	</div>
	<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Item Name</p>
	</div>
	<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Unit Price</p>
	</div>
	<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Qty</p>
	</div>
	<div style="width:100px; height:20px;border-right:1.5px solid #333; float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Total Price</p>
	</div>
	<div style="width:120px; height:20px;float:left;">
	<p style="color:#fff;text-align:center;font-size:11px; font-weight:bold;margin:0 0 0 0px">Username</p>
	</div>
	</div>';


		$result =mysqli_query($conn,"select * from  tempbill where patid='".$regn."' and status=1");
		$c=0;
		$num_results = mysqli_num_rows($result);
		for ($i=0; $i <$num_results; $i++) {
		$row=mysqli_fetch_array($result);
		$patname=stripslashes($row['patname']) ;
		$c+=preg_replace('~,~', '', stripslashes($row['subnet']));
		if($i%2==0){
			echo'<div style="height:20px; border-bottom:1.5px solid #333; border-left:1.5px solid #333;" id="normal'.$i.'"">';
			}else{
				echo'<div style="height:20px; border-bottom:1.5px solid #333;border-left:1.5px solid #333;background:#d1d1d1 "  id="normal'.$i.'"">';
			}
		
		echo'
		<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['date']).'</p>
		</div>
		<div style="width:120px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['category']).'</p>
		</div>
		<div style="width:250px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['itname']).'</p>
		</div>
		<div style="width:130px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['price']).'</p>
		</div>
		<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['quat']).'</p>
		</div>
		<div style="width:100px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['subnet']).'</p>
		</div>
		<div style="height:20px;border-right:1.5px solid #333; float:left;width:120px; overflow:hidden">
		<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">'.stripslashes($row['fullname']).'</p>
		</div>
		
		</div><div class="cleaner"></div>';

	}

echo'
<div class="cleaner_h10"></div>
<p style="text-align:center; font-weight:normal;font-size:11px;margin:0 0 0 0px">Total:<b>'.number_format($c, 2).'</b></p>';
	echo'</div>';

echo'<div id="tabs-8" style="">';
		
	
	 echo '<script>	area9 = new nicEditor({fullPanel : true,maxHeight :240 }).panelInstance("treatment");</script>';
	echo'<div style="float:left; padding-right:10px; border-right:2px solid #333;width:440px">
					<h5>MAKE A THEATRE REQUEST</h5>

<input type="checkbox" value="1" name="rectheatre" id="rectheatre" style="float:left;margin:8px 0 0 10px">
	<a class="labels" style="margin-left:0px">Send to Theatre  on Save</a>
	<div class="cleaner_h5"></div>
	<a class="labels" style="margin-left:0px">Procedure name:</a>
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
	<script></script>
	<textarea id="treatment" style="float:left;height:220px; width:420px" class="alergy"></textarea>

	
</div>
	

		<div style="float:left; padding-left:10px">
		<h5>THEATRE notes</h5>';
		//<input type="checkbox" value="1" name="printlab" style="float:left;margin:8px 3px 0 0px;"><a class="labels">Print Lab Analysis on Save</a>
		 echo'<div class="cleaner_h5"></div>
		 <div style="height:340px; overflow-y:auto; border:1px solid #ccc;width:480px;padding:2px">';
		$resultb =mysqli_query($conn,"select * from theatrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															if(stripslashes($rowb['status'])==1){$x='<b style="color:#F00"> - [PENDING]</b>';}
															else{$x='<b style="color:#0085b2"> - [COMPLETED]</b>';}
				
				echo'
				
				<a class="labels">Date: <b>'.stripslashes($rowb['date']).'</b></a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Request</b>'.$x.'</a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['procedures']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-bottom:2px;margin-top:2px"></div>
				<a class="labels"><b>Theatre Notes</b></a><div class="cleaner"></div>
				<a class="labels">'.stripslashes($rowb['notes']).'</a>
				<div class="cleaner" style="border-top:1px dashed #333; margin-top:2px;margin-bottom:20px"></div>
				';



														}

		echo'</div>
		</div>
</div>';//end tabs 8


			echo'</div></div>';
							break;

							case 78:
				
							
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses CCC Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Comprehensive Care Center [CCC]<strong id="debtorp"></strong><strong id="debtord"></strong></h2>';
	echo'<input type="button" value="Exit" id="submit"  style="margin-right:10px;padding:2px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/>';
								
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
					<div id="tabs" style="width:1000px; height:436px; float:left; margin:5px 0 0 0px">

						<ul>
						<li><a href="#tabs-1">New Patient</a></li>
						<li style="cursor:pointer" onclick="loadccpats(2)"><a  href="#tabs-2">Edit Patient</a></li>
						<li style="cursor:pointer" onclick="loadccpats(3)"><a  href="#tabs-3">New Consultation</a></li>
						<li style="cursor:pointer" onclick="loadccpresc(4)"><a href="#tabs-4">Consultation</a></li>
						<li style="cursor:pointer" onclick="loadccpresc(5)"><a href="#tabs-5">Nutrition</a></li>
						<li style="cursor:pointer" onclick="loadccpresc(6)"><a href="#tabs-6">Counselling</a></li>
						<li style="cursor:pointer" onclick="loadccpresc(7)"><a href="#tabs-7">Pharmacy</a></li>
						<li><a href="#tabs-8">Reports</a></li>
						</ul>
						

						<div id="tabs-1">';

						$result =mysqli_query($conn,"select * from cccpats order by id desc limit 0,1");
							$row=mysqli_fetch_array($result);
							if(mysqli_num_rows($result)==0){$pntno=1;
								}else {
									$pntno=stripslashes($row['pntno'])+1;	}

							echo'
							<div id="personal" style="height:300px">
							<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn" name="field" class="in_field" value="'.$pntno.'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="names" name="field" class="in_field" style="text-transform:uppercase"/>
								<div class="cleaner_h5"></div>
								 
							
								 <a class="labels">D.o.b:<span>*</span></a>
								<input id="dob" style="" name="dob" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10">
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <select class="select" id="gender" style="float:right">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="phone" name="stream" class="in_field"/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Postal Add:</a>
                                <input type="text" id="postal" name="house" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email" name="course" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup" name="bgroup" style="float:right">
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
							
								<div id="personal"  style="height:300px">
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
								
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress" name="gaddress" class="in_field"/> 
								<div class="cleaner_h20"></div>


								
								<input type="button" value="Save" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:70px;margin-left:170px" class="in_field" onclick="addnewccc();"/>
			
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>';



							
						echo'</div>

						<div id="tabs-2">


						</div>
						<div id="tabs-3">


						</div>
						<div id="tabs-4">


						</div>

						<div id="tabs-5">


						</div>
						<div id="tabs-6">


						</div>
						<div id="tabs-7">


						</div>
						<div id="tabs-8">



							<div id="personal" style="height:300px;width:300px">
								<h5>Patients List</h5>
								<a class="labels">From:<span>*</span></a>
                                <input type="text" id="datepick" name="field" class="in_field" style="" placeholder="dd/mm/yyyy" />
								<div class="cleaner_h5"></div>
								<a class="labels">To:<span>*</span></a>
                                <input type="text" id="datepick2" name="field" class="in_field" style="" placeholder="dd/mm/yyyy" />
								<div class="cleaner_h5"></div>
								<div class="cleaner"></div>
								<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall" value="1">
								<a class="labels" style="margin-left:10px; float:left">View All</a>
								<input type="button" value="Submit" id="submit"  style="padding:5px 5px; float:left; cursor:pointer;width:70px;margin-left:170px" class="in_field" onclick="enterccc1();"/>
			
								<script>$("#itemname").parent().find("input:first").focus().width(180);</script>
								<div class="cleaner_h5"></div>
								<h5>Patients Medical Records</h5>
								<a class="labels" style="margin-left:0px">Patient Name:</a>
							<div class="ui-widget" style="margin-left:25px; float:left;" id="widg6" >
								<select id="itemname" style="width:260px; margin-left:10px;">
								<option value="All">All</option>';
									$resultb =mysqli_query($conn,"select * from cccpats order by names asc");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($i=0; $i <$num_resultsb; $i++) {
															$rowb=mysqli_fetch_array($resultb);
															echo'<option value="'.stripslashes($rowb['pntno']).'">'.stripslashes($rowb['names']).'-'.stripslashes($rowb['pntno']).'</option>';
														}
								echo'</select>
								</div>
								<div class="cleaner_h5"></div>
								<a class="labels">From:<span>*</span></a>
                                <input type="text" id="datepick3" name="field" class="in_field" style="" placeholder="dd/mm/yyyy" />
								<div class="cleaner_h5"></div>
								<a class="labels">To:<span>*</span></a>
                                <input type="text" id="datepick4" name="field" class="in_field" style="" placeholder="dd/mm/yyyy" />
								<div class="cleaner_h5"></div>
								<div class="cleaner"></div>
								<input type="checkbox" style="float:left; margin:8px 5px 0 30px" name="viewall2" value="1">
								<a class="labels" style="margin-left:10px; float:left">View All</a>
								<input type="button" value="Submit" id="submit"  style="padding:5px 5px; float:left; cursor:pointer;width:70px;margin-left:170px" class="in_field" onclick="enterccc2();"/>
			
								</div>




							</div>
			
				
			
			

			</div></div>';

				break;

				case 79:
				$a=$_GET['a'];
				if($a==2){
					$x='Edit CCC Patient Details';
					$ser=81;
				}
				if($a==3){
					$x='NEW CCC CONSULTATION';
					$ser=82;
				}
				

			echo"<script>$('#patientnoccc').focus();</script>";	
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:380px">
					<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">'.$x.'';
			
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
		<div class="cleaner_h5"></div>
	<div class="cleaner"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$ser.'"/>
		<input type="hidden" id="d" name="ser"  value="'.$a.'"/>
			<a class="labels" style="margin-left:10px">Patient No:</a>	
	 <input type="text" id="patientnoccc" name="regn" placeholder="Type Number and Press Enter" class="in_field" value=""  style="float:left;margin-left:10px;width:180px"/>
	 		 <img src="images/zoom.png" style="width:30px; height:30px; float:right; cursor:pointer; margin-right:5px" onclick="searchccc()"/> 
	 	<a class="labels" style="float:right;margin-right:10px">Or  Search</a>	
	<div class="cleaner_h5"></div>	
		<div class="cleaner_h5"></div>	
		<div id="searchccc">
			<div class="cleaner_h5"></div>	
		</div>							
			<div class="cleaner"></div>';
			echo'</div>
		<div class="cleaner_h5"></div>
				</div>';	
					break;


					case 80:
										echo'<a class="labels" style="margin-left:10px; font-weight:bold">Search By:</a>
							<select class="input_field" id="menusearch" style="float:right; margin-right:10px">
							<option value="1" onclick="menuop(1)">Patient Name</option>
							<option value="2" onclick="menuop(2)">Patient No</option>
							<option value="3" onclick="menuop(3)">Next of Kin</option>
							<option value="4" onclick="menuop(4)">Phone No</option>
							</select>
							<div class="cleaner_h5"></div>
						<div id="op1">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt51" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from cccpats where status=1 order by names");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['names']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						<div id="op2" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt52" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from cccpats where status=1 order by pntno");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['pntno']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						
						<div id="op3" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt53" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from cccpats where status=1 order by gname");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['gname']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						
						<div id="op4" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt54" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from cccpats where status=1 order by phone");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['phone']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						<div class="cleaner_h5"></div>
						';
						break;		

						case 81:
						$pntno=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpats where pntno='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							echo'
							<div id="personal" style="height:300px">
							<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn2" name="field" class="in_field" value="'.$pntno.'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="names2" value="'.stripslashes($row['names']).'" name="field" class="in_field" style="text-transform:uppercase"/>
								<div class="cleaner_h5"></div>
								 
							
								 <a class="labels">D.o.b:<span>*</span></a>
								<input id="dob2" style="" name="dob2" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10" value="'.stripslashes($row['dob']).'">
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <select class="select" id="gender2" style="float:right">
                                <option value="'.stripslashes($row['gender']).'">'.stripslashes($row['gender']).'</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="phone2" name="stream" class="in_field" value="'.stripslashes($row['phone']).'"/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Postal Add:</a>
                                <input type="text" id="postal2" name="house" class="in_field" value="'.stripslashes($row['address']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email2" name="course" class="in_field"  value="'.stripslashes($row['email']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup2" name="bgroup" style="float:right">
                                 <option value="'.stripslashes($row['bgroup']).'">'.stripslashes($row['bgroup']).'</option>
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
							
								<div id="personal"  style="height:300px">
								<h5>Guardian Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname2" name="gname" class="in_field"   value="'.stripslashes($row['gname']).'"/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship2" name="rship" style="float:right">
								 <option value="'.stripslashes($row['rship']).'">'.stripslashes($row['rship']).'</option>
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
                                <input type="text" id="gphone2" name="gphone" class="in_field"   value="'.stripslashes($row['gcont']).'"/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress2" name="gaddress" class="in_field"   value="'.stripslashes($row['gaddress']).'"/> 
								<div class="cleaner_h20"></div>


								
								<input type="button" value="Save" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:70px;margin-left:170px" class="in_field" onclick="editpatccc('.$pntno.');"/>
			
								<div id="newstudent2" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>';




						break;		

						case 82:
						$pntno=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpats where pntno='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							echo'
							<div id="personal" style="height:300px">
							<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn2" name="field" class="in_field" value="'.$pntno.'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="names2" value="'.stripslashes($row['names']).'" name="field"  disabled="disabled" class="in_field" style="text-transform:uppercase;border-color:#f00;"/>
								<div class="cleaner_h5"></div>
								 
							
								 <a class="labels">D.o.b:<span>*</span></a>
								<input id="dob2" disabled="disabled" style="border-color:#f00; " name="dob2" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10" value="'.stripslashes($row['dob']).'">
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <select class="select" id="gender2" style="float:right;border-color:#f00;"  disabled="disabled">
                                <option value="'.stripslashes($row['gender']).'">'.stripslashes($row['gender']).'</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="phone2" name="stream" class="in_field" value="'.stripslashes($row['phone']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Postal Add:</a>
                                <input type="text" id="postal2" name="house" class="in_field" value="'.stripslashes($row['address']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email2" name="course" class="in_field"  value="'.stripslashes($row['email']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup2" name="bgroup" style="float:right;border-color:#f00;"   disabled="disabled" >
                                 <option value="'.stripslashes($row['bgroup']).'">'.stripslashes($row['bgroup']).'</option>
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
							
								<div id="personal"  style="height:300px">
								<h5>Guardian Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname2" name="gname" class="in_field"   value="'.stripslashes($row['gname']).'"  disabled="disabled" style="border-color:#f00; "/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship2" name="rship" style="float:right;border-color:#f00;"   disabled="disabled" >
								 <option value="'.stripslashes($row['rship']).'">'.stripslashes($row['rship']).'</option>
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
                                <input type="text" id="gphone2" name="gphone" class="in_field"   value="'.stripslashes($row['gcont']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress2" name="gaddress" class="in_field"   value="'.stripslashes($row['gaddress']).'"   disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Date:</a>
                                <input type="text" id="Date" name="gaddress" class="in_field"   value="'.date('d/m/Y').'"   disabled="disabled" style="border-color:#f00;font-weight:BOLD "/> 
								<div class="cleaner_h20"></div>


								
								<input type="button" value="Start New Consultation" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:80px" class="in_field" onclick="startccc('.$pntno.');"/>
			
								<div id="newstudent3" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>';




						break;	


							case 83:
								$a=$_GET['a'];
								if($a==4){
									$x='CCC CONSULTATIONS';
									$ser=84;
								}
								if($a==5){
									$x='CCC NUTRITION';
									$ser=85;
								}
								if($a==6){
									$x='CCC COUNSELLING';
									$ser=86;
								}
								if($a==7){
									$x='CCC PHARMACY';
									$ser=87;
								}
								
									$stamp=date('Ymd');
							echo"<script>$('#cons29').parent().find('input:first').focus();</script>";
							echo'<div id="modalDiv"></div>';
							echo'<div id="alertDiv" style="min-height:90px; width:380px;TOP:20%">
									<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
							<h5 style="margin-right:0px; color:#fff">'.$x.'
							<input type="hidden" id="ser" name="ser"  value="'.$ser.'"/>
						<input type="hidden" id="d" name="ser"  value="'.$a.'"/>
							
							<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
						<div class="cleaner_h5"></div>';
					$result =mysqli_query($conn,"select * from cccpresc where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId asc");
			$num_results = mysqli_num_rows($result);
				echo'<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Consultations using these dates" onclick="searchpayccc(29,2);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons29">
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
									<div id="figure1" style="margin-left:0px; width:240px">Pat. Name</div>
									<div id="figure1" style="width:69px">Pat. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from cccpresc where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId desc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['PrescId']);
		if(stripslashes($rowb['Status'])==1){
		echo"<div class=\"normal1\" style=\"\" onclick=\"seeccc('".$pid."',".$ser.")\">";
		}else {echo"<div class=\"normal2\"  style=\"\" onclick=\"seeccc('".$pid."',".$ser.")\">";}
		echo'<div id="figure2" style="width:240px">'.stripslashes($rowb['PatName']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div>
								</div>';	
									break;	

						case 84:
							$pid=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpresc where PrescId='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							echo'
							<div id="personal" style="height:300px">
							<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn3" name="field" class="in_field" value="'.stripslashes($row['PatId']).'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="names3" value="'.stripslashes($row['PatName']).'" name="field"  disabled="disabled" class="in_field" style="text-transform:uppercase;border-color:#f00;"/>
								<div class="cleaner_h5"></div>

								<h5>Triage Details</h5>
								<a class="labels">Temp:</a>
                                <input type="text" placeholder="Celsius" id="temp" name="field" class="in_field" value="'.stripslashes($row['Temp']).'" style=" "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B/P:</a>
                                <input type="text"  placeholder="mmHg" id="bp" value="'.stripslashes($row['Bp']).'" name="field" class="in_field" style=""/>
								<div class="cleaner_h5"></div>
								<a class="labels">Weight:</a>
                                <input type="text"  placeholder="Kgs" id="weight" value="'.stripslashes($row['Weight']).'" name="field" class="in_field" style=""/>
								<div class="cleaner_h5"></div>
								<a class="labels">Pulse Rate:</a>
                                <input type="text"  placeholder="Beats/Min" id="pr" value="'.stripslashes($row['PulseRate']).'" name="field" class="in_field" style=""/>
								<div class="cleaner_h5"></div>
								<a class="labels">Breath Rate:</a>
                                <input type="text"  placeholder="Breaths/Min" id="br" value="'.stripslashes($row['BreathRate']).'" name="field" class="in_field" style=""/>
								<div class="cleaner_h5"></div>
								 
							
								</div>
							
								


								<div id="personal"  style="height:300px">
								<h5>History Details</h5>
								<textarea class="alergy" id="history" style="width:210px;height:100px;padding:10px">'.stripslashes($row['History']).'</textarea>
								<div class="cleaner_h5"></div>
								<h5>Lab Details</h5>
								<textarea class="alergy" id="lab"  style="width:210px;height:100px;padding:10px">'.stripslashes($row['Lab']).'</textarea>
								<div class="cleaner_h5"></div>
								
								</div>


								<div id="personal"  style="height:300px">
								
								<h5>Diagnosis Details</h5>
								<textarea class="alergy" id="diagnosis"   style="width:210px;height:100px;padding:10px">'.stripslashes($row['Diagnosis']).'</textarea>
								<div class="cleaner_h5"></div>

								
								<input type="button" value="Save Consultation" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:20px" class="in_field" onclick="saveconsccc('.$pid.');"/>
			
								<div id="newstudent4" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>





								';




						break;	

						case 85:
							$pid=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpresc where PrescId='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							
								echo'<script>area42 = new nicEditor({fullPanel : true,maxHeight : 310}).panelInstance("nutrition");</script>
								<textarea id="nutrition"  style="float:left;height:300px; width:930px" class="alergy">'.stripslashes($row['Nutrition']).'</textarea>
								<div class="cleaner_h5"></div>
								<input type="button" value="Save Notes" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:20px" class="in_field" onclick="savenutccc('.$pid.');"/>
			
								<div id="newstudent5" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>





								';




						break;	

						case 86:
							$pid=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpresc where PrescId='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							
								echo'<script>area43 = new nicEditor({fullPanel : true,maxHeight : 310}).panelInstance("counselling");</script>
								<textarea id="counselling"  style="float:left;height:300px; width:930px" class="alergy">'.stripslashes($row['Counselling']).'</textarea>
								<div class="cleaner_h5"></div>
								<input type="button" value="Save Notes" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:20px" class="in_field" onclick="saveconccc('.$pid.');"/>
			
								<div id="newstudent6" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>





								';




						break;	

						case 87:
							$pid=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from cccpresc where PrescId='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							
								echo'<script>area44 = new nicEditor({fullPanel : true,maxHeight : 310}).panelInstance("prescription");</script>
								<textarea id="prescription"  style="float:left;height:300px; width:930px" class="alergy">'.stripslashes($row['Prescription']).'</textarea>
								<div class="cleaner_h5"></div>
								<input type="button" value="Save Notes" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:20px" class="in_field" onclick="savepharmccc('.$pid.');"/>
			
								<div id="newstudent7" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>





								';




						break;	

						case 88:
				
							
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Counselling Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Counselling<strong id="debtorp"></strong><strong id="debtord"></strong></h2>';
	echo'<input type="button" value="Exit" id="submit"  style="margin-right:10px;padding:2px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/>';
								
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
					<div id="tabs" style="width:1000px; height:436px; float:left; margin:5px 0 0 0px">

						<ul>
						<li style="cursor:pointer" onclick="loadcounspats(9)"><a  href="#tabs-9">New Consultation</a></li>
						<li style="cursor:pointer" onclick="loadcounspresc(10)"><a href="#tabs-10">Consultation</a></li>
						</ul>
						

						
						<div id="tabs-9">


						</div>
						<div id="tabs-10">


						</div>
						

					</div></div>';

				break;

				case 89:
				$a=$_GET['a'];
				if($a==9){
					$x='NEW CONSULTATION';
					$ser=91;
				}
				echo"<script>$('#patientnoccc').focus();</script>";	
			echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:90px; width:380px">
					<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">'.$x.'';
			
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
		<div class="cleaner_h5"></div>
	<div class="cleaner"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$ser.'"/>
		<input type="hidden" id="d" name="ser"  value="'.$a.'"/>
			<a class="labels" style="margin-left:10px">Patient No:</a>	
	 <input type="text" id="patientnoccc" name="regn" placeholder="Type Number and Press Enter" class="in_field" value=""  style="float:left;margin-left:10px;width:180px"/>
	 		 <img src="images/zoom.png" style="width:30px; height:30px; float:right; cursor:pointer; margin-right:5px" onclick="searchcouns()"/> 
	 	<a class="labels" style="float:right;margin-right:10px">Or  Search</a>	
	<div class="cleaner_h5"></div>	
		<div class="cleaner_h5"></div>	
		<div id="searchccc">
			<div class="cleaner_h5"></div>	
		</div>							
			<div class="cleaner"></div>';
			echo'</div>
		<div class="cleaner_h5"></div>
				</div>';	
					break;


					case 90:
								echo'<a class="labels" style="margin-left:10px; font-weight:bold">Search By:</a>
							<select class="input_field" id="menusearch" style="float:right; margin-right:10px">
							<option value="1" onclick="menuop(1)">Patient Name</option>
							<option value="2" onclick="menuop(2)">Patient No</option>
							<option value="3" onclick="menuop(3)">Next of Kin</option>
							<option value="4" onclick="menuop(4)">Phone No</option>
							</select>
							<div class="cleaner_h5"></div>
						<div id="op1">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt51" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients where status=1 order by fullnames");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['fullnames']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						<div id="op2" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt52" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients where status=1 order by pntno");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['pntno']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						
						<div id="op3" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt53" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients where status=1 order by gname");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['gname']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						
						<div id="op4" style="display:none">
							<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
							<select id="pnt54" class="pnt5" style="width:260px; margin-left:10px;">
							<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from patients where status=1 order by contact");
												$num_results = mysqli_num_rows($result);
												for ($i=0; $i <$num_results; $i++) {
													$row=mysqli_fetch_array($result);
													$pntno=stripslashes($row['pntno']);
													echo'<option value="'.$pntno.'">'.stripslashes($row['contact']).'</option>';
												}
							echo'
								</select>
							</div>
						</div>
						<div class="cleaner_h5"></div>
						';
						break;	

						case 91:
						$pntno=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from patients where pntno='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							echo'
							<div id="personal" style="height:300px">
							<h5>Personal Details</h5>
								<a class="labels">Patient No:<span>*</span></a>
                                <input type="text" id="regn2" name="field" class="in_field" value="'.$pntno.'" disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Names:<span>*</span></a>
                                <input type="text" id="names2" value="'.stripslashes($row['fullnames']).'" name="field"  disabled="disabled" class="in_field" style="text-transform:uppercase;border-color:#f00;"/>
								<div class="cleaner_h5"></div>
								 
							
								 <a class="labels">D.o.b:<span>*</span></a>
								<input id="dob2" disabled="disabled" style="border-color:#f00; " name="dob2" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10" value="'.stripslashes($row['dob']).'">
								<div class="cleaner_h5"></div>
								 <a class="labels" style="margin-right:30px">Gender:</a>
                                <select class="select" id="gender2" style="float:right;border-color:#f00;"  disabled="disabled">
                                <option value="'.stripslashes($row['gender']).'">'.stripslashes($row['gender']).'</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								
								</select>
								<div class="cleaner_h5"></div>
								<a class="labels">Phone No:<span>*</span></a>
                                <input type="text" id="phone2" name="stream" class="in_field" value="'.stripslashes($row['contact']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Postal Add:</a>
                                <input type="text" id="postal2" name="house" class="in_field" value="'.stripslashes($row['address']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Email:</a>
                                <input type="text" id="email2" name="course" class="in_field"  value="'.stripslashes($row['email']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">B.Group:</a>
                                <select class="select" id="bgroup2" name="bgroup" style="float:right;border-color:#f00;"   disabled="disabled" >
                                 <option value="'.stripslashes($row['bgroup']).'">'.stripslashes($row['bgroup']).'</option>
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
							
								<div id="personal"  style="height:300px">
								<h5>Guardian Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Names:</a>
                                <input type="text" id="gname2" name="gname" class="in_field"   value="'.stripslashes($row['gname']).'"  disabled="disabled" style="border-color:#f00; "/>
								<div class="cleaner_h5"></div>
								 <a class="labels">R-ship:</a>
                                <select class="select" id="rship2" name="rship" style="float:right;border-color:#f00;"   disabled="disabled" >
								 <option value="'.stripslashes($row['grship']).'">'.stripslashes($row['grship']).'</option>
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
                                <input type="text" id="gphone2" name="gphone" class="in_field"   value="'.stripslashes($row['gcont']).'"  disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								
								<a class="labels">Address:</a>
                                <input type="text" id="gaddress2" name="gaddress" class="in_field"   value="'.stripslashes($row['gaddress']).'"   disabled="disabled" style="border-color:#f00; "/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Date:</a>
                                <input type="text" id="Date" name="gaddress" class="in_field"   value="'.date('d/m/Y').'"   disabled="disabled" style="border-color:#f00;font-weight:BOLD "/> 
								<div class="cleaner_h20"></div>


								
								<input type="button" value="Start New Consultation" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:80px" class="in_field" onclick="startcouns('.$pntno.');"/>
			
								<div id="newstudent3" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>';




						break;	


							case 92:
								$a=$_GET['a'];
								if($a==10){
									$x='Counselling CONSULTATIONS';
									$ser=93;
									$table='counselling';
								}
								
									$stamp=date('Ymd');
							echo"<script>$('#cons29').parent().find('input:first').focus();</script>";
							echo'<div id="modalDiv"></div>';
							echo'<div id="alertDiv" style="min-height:90px; width:380px;TOP:20%">
									<div id="tit" style="width:360px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
							<h5 style="margin-right:0px; color:#fff">'.$x.'
							<input type="hidden" id="ser" name="ser"  value="'.$ser.'"/>
						<input type="hidden" id="d" name="ser"  value="'.$a.'"/>
							
							<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidealert()"></h5></div>
						<div class="cleaner_h5"></div>';
					$result =mysqli_query($conn,"select * from ".$table." where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId asc");
			$num_results = mysqli_num_rows($result);
				echo'<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:10px">From:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick" type="text" value="'.date('Y/m/d').'">
				<a class="labels" style="margin-left:10px">To:</a>
				<input class="input_field" style="float:left; margin-left:10px; width:80px; font-size:11px" id="datepick2" type="text" value="'.date('Y/m/d').'">				
					<img src="images/back2.png" style="float:left; margin-left:10px;width:30px;height:30px; cursor:pointer" title="Search Consultations using these dates" onclick="sachcouns(29,1);"/>
					<div class="cleaner"></div>
			<div class="ui-widget" style="margin:0 10px 0 10px; float:left" id="searchpay">
			<a class="labels" style="margin-left:0px">No. of Patients:<strong id="nump"> '.$num_results.'</strong></a>
			<div class="cleaner_h5"></div>
			<select id="cons29">
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
									<div id="figure1" style="margin-left:0px; width:240px">Pat. Name</div>
									<div id="figure1" style="width:69px">Pat. No</div>
									</div><div class="cleaner"></div>
	<div id="inside" style="max-height:108px; overflow-y:auto; margin-left:10px">';
	$resultb =mysqli_query($conn,"select * from ".$table."  where Stamp>='".date('Ymd')."' and  Stamp<='".date('Ymd')."' order by PrescId desc");
			$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$pid=stripslashes($rowb['PrescId']);
		if(stripslashes($rowb['Status'])==1){
		echo"<div class=\"normal1\" style=\"\" onclick=\"seeccc('".$pid."',".$ser.")\">";
		}else {echo"<div class=\"normal2\"  style=\"\" onclick=\"seeccc('".$pid."',".$ser.")\">";}
		echo'<div id="figure2" style="width:240px">'.stripslashes($rowb['PatName']).'</div>
		<div id="figure2" style="width:70px">'.stripslashes($rowb['PatId']).'</div>
		</div>
		<div class="cleaner"></div>
		';}
		echo'</div>
		
		<div class="cleaner_h5"></div>
								</div>';	
									break;	

							case 93:
							$pid=$param=$_GET['param'];
							$result =mysqli_query($conn,"select * from counselling where PrescId='".$param."'");
							$count = mysqli_num_rows($result);
									if($count==0){
									echo"<script>
									$().customAlert();
									alert('Error!', '<p>There is no patient registered under this Number in the database!</p>');
									e.preventDefault();
									</script>";	
								exit;
							}
							$row=mysqli_fetch_array($result);

							$arr=array();
							$resultb =mysqli_query($conn,"select * from counscats order by cat");
							$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$arr[stripslashes($rowb['catid'])]=stripslashes($rowb['cat']);
							}
								
							echo'
							<a class="labels" style="margin-left:10px; font-weight:bold">Name:<b>'.stripslashes($row['PatName']).'</b></a>
							<a class="labels" style="margin-left:10px; font-weight:bold">Category</a>
							<select class="input_field" id="maincat" style="float:left; margin-left:10px;width:250px">';
							echo '<option value="'.stripslashes($row['CatId']).'">'.stripslashes($row['Category']).'</option>';
							foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'" onclick="loadsubcat('.$key.')">'.$val.'</option>';
							}
							echo'</select>';
							$arr=array();
							$resultb =mysqli_query($conn,"select * from counscats where catid!='".stripslashes($row['SubCatId'])."' order by name");
							$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$arr[stripslashes($rowb['id'])]=stripslashes($rowb['name']);
							}
							echo'<div id="subcategory" style="margin-left:20px">
									<a class="labels" style="margin-left:10px; font-weight:bold">Sub-Category</a>
									<select class="input_field" id="subcat" style="float:left; margin-left:10px;width:250px;">
									<option value="'.stripslashes($row['SubCatId']).'">'.stripslashes($row['SubCategory']).'</option>';
									foreach ($arr as $key => $val) {
										echo'<option value="'.$key.'">'.$val.'</option>';
										}
									echo'</select>

							</div>

							<div class="cleaner_h10"></div>';

							
								echo'<script>area43 = new nicEditor({fullPanel : true,maxHeight : 280}).panelInstance("counselling");</script>
								<textarea id="counselling"  style="float:left;height:270px; width:950px" class="alergy">'.stripslashes($row['Notes']).'</textarea>
								<div class="cleaner_h5"></div>
								<input type="button" value="Save Notes" id="submit"  style="padding:5px 5px; background:#fff;  float:left; cursor:pointer;width:150px;margin-left:20px" class="in_field" onclick="saveconmain('.$pid.');"/>
			
								<div id="newstudent6" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								</div>';

						break;	

						case 94:

						$a=$_GET['a'];

						$arr=array();
							$resultb =mysqli_query($conn,"select * from counscats where catid='".$a."' order by name");
							$num_resultsb = mysqli_num_rows($resultb);
							for ($i=0; $i <$num_resultsb; $i++) {
								$rowb=mysqli_fetch_array($resultb);
								$arr[stripslashes($rowb['id'])]=stripslashes($rowb['name']);
							}
								
							echo'
							<a class="labels" style="margin-left:10px; font-weight:bold">Sub-Category</a>
							<select class="input_field" id="subcat" style="float:left; margin-left:10px;width:250px">';
							echo '<option value="" disabled="disabled" selected="selected">Select One....</option>';
							foreach ($arr as $key => $val) {
								echo'<option value="'.$key.'">'.$val.'</option>';
							}
							echo'</select>';


						break;

						case 95:
				
							
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Nutrition Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

				echo'<div id="newstude">
							<h2  style="float:left; padding:5px 5px 0 0; margin:0">Nutrition<strong id="debtorp"></strong><strong id="debtord"></strong></h2>';
	echo'<input type="button" value="Exit" id="submit"  style="margin-right:10px;padding:2px 5px; border-color:#fff; background:#f00; float:right; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/>';
								
	echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
					<div id="tabs" style="width:1000px; height:436px; float:left; margin:5px 0 0 0px">

						<ul>
						<li style="cursor:pointer" onclick="loadcounspats(9)"><a  href="#tabs-9">New Consultation</a></li>
						<li style="cursor:pointer" onclick="loadcounspresc(10)"><a href="#tabs-10">Consultation</a></li>
						</ul>
						

						
						<div id="tabs-9">


						</div>
						<div id="tabs-10">


						</div>
						

					</div></div>';

				break;

				case 96:
				
				$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Waivers Reports Report Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:200px">
					<div id="tit" style="width:280px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">';
				echo'<h5 style="margin-right:10px; color:#fff">Waiver Reports';
				echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5>
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
									cursor:pointer; width:80px" class="select" onclick="enterwaiverrep();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

					case 97:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Counselling Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Category:</a>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
		<option value="All">All</option>';
		$resulta =mysqli_query($conn,"select * from counscats order by name");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								echo'<option value="'.stripslashes($rowa['id']).'">'.stripslashes($rowa['name']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="entercounsrep();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;


							case 98:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">All Tests Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep1();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

					case 99:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Source Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Source:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">
				<option value="OUTPATIENT">OUTPATIENT</option>
								<option value="MALE WARD">MALE WARD</option>
								<option value="FEMALE WARD">FEMALE WARD</option>
								<option value="MATERNITY">MATERNITY</option>
								<option value="PAEDIATRICS">PAEDIATRICS</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep2();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;


							case 100:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Test Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Test Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$resulta =mysqli_query($conn,"select * from items  where Category='Laboratory' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);

								echo '	<option value="'.stripslashes($rowa['ItemName']).'">'.stripslashes($rowa['ItemName']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep3();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

								case 101:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Sample Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Test Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$result =mysqli_query($conn,"select * from labsamples order by name");
			
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['name']).'">'.stripslashes($row['name']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep4();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

					case 102:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Patient Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Patient Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['fullnames'])."-".stripslashes($row['pntno'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep5();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;
				case 103:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Section Lab Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Test Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">
						<option value="LABORATORY_MAIN">LABORATORY_MAIN</option>
							<option value="LAB_HISTOLOGY">LAB_HISTOLOGY</option>
							<option value="LAB_SEROLOGY">LAB_SEROLOGY</option>
							<option value="LAB_MCH">LAB_MCH</option>
							<option value="LAB_HEMATOLOGY">LAB_HEMATOLOGY</option>
							<option value="LAB_BACTERIOLOGY">LAB_BACTERIOLOGY</option>
							<option value="LAB_PARASITOLOGY">LAB_PARASITOLOGY</option>
							<option value="LAB_BIOCHEMISTRY">LAB_BIOCHEMISTRY</option>
							<option value="LAB_MANYATTA">LAB_MANYATTA</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterlabrep6();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

					case 104:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">All Tests Radiology Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterradrep1();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;


					case 105:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Test Radiology Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Test Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$resulta =mysqli_query($conn,"select * from items  where Category='Radiology' order by ItemName");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);

								echo '	<option value="'.stripslashes($rowa['ItemName']).'">'.stripslashes($rowa['ItemName']).'</option>';
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
									cursor:pointer; width:80px" class="select" onclick="enterradrep2();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

				case 106:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Patient Rad. Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Done</option>
				<option value="0">Not Done</option>
				<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Patient Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['fullnames'])."-".stripslashes($row['pntno'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="enterradrep3();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

				case 107:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Pharmacy Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
					<option value="1">Dispensed</option>
					<option value="0">Not Dispensed</option>
					<option value="2">All</option>
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
									cursor:pointer; width:80px" class="select" onclick="enterpharmrep1();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

							case 108:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Patient Pharm. Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Dispensed</option>
					<option value="0">Not Dispensed</option>
					<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Patient Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['fullnames'])."-".stripslashes($row['pntno'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="enterpharmrep2();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;

				case 109:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Theatre Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
					<option value="1">Dispensed</option>
					<option value="0">Not Dispensed</option>
					<option value="2">All</option>
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
									cursor:pointer; width:80px" class="select" onclick="entertheatrep1();"/>
					<div class="cleaner"></div>
						
						</div>';
							break;

				case 110:
				echo"<script>$('#itemname').parent().find('input:first').focus();</script>";
				echo'<div id="modalDiv"></div>';
			echo'<div id="alertDiv" style="min-height:260px; width:320px">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">By Patient Theatre Reports
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<a class="labels" style="margin-left:20px">Status:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname" style="width:260px; margin-left:10px;">
				<option value="1">Dispensed</option>
					<option value="0">Not Dispensed</option>
					<option value="2">All</option>
				</select>
				</div>
			<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:20px">Patient Name:</a>
				<div class="ui_widget" style="margin-left:10px;float:left; width:270px">
				<select id="itemname2" class="combos" style="width:260px; margin-left:10px;">';

				$result =mysqli_query($conn,"select * from patients order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
			echo"<option value=\"".stripslashes($row['pntno'])."\">".stripslashes($row['fullnames'])."-".stripslashes($row['pntno'])."</option>";
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
									cursor:pointer; width:80px" class="select" onclick="entertheatrep2();"/>
					<div class="cleaner_h5"></div>
						
						</div>';
							break;


							case 111:
							echo"<script>$('.combos').parent().find('input:first').width(130);</script>";
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses New Asset Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
							 echo'<div id="page">
							 <div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; margin:0;">New Asset Information</h2>';
								echo'
									<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;"></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewasset(1);"/></div>';
										

								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Asset Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Asset ID:<span>*</span></a>
                                <input type="text" id="assid" name="field" class="in_field" value="" style="border-color:#f00" onkeyup="setstamp()"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Asset Name:<span>*</span></a>
                                <input type="text" id="assname" name="field" class="in_field" style="text-transform:uppercase"/>
								<div class="cleaner_h5"></div>
								<a class="labels" style="margin-left:0px">Category:<span>*</span></a>
	<div class="ui-widget" style="margin-right:25px; float:right">
					<select class="combos" id="asscat" style="width:200px; margin-left:10px;">
						<option value="">Select one...</option>';
							$result =mysqli_query($conn,"select * from assetsubcategories  order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['name']).'</option>';
						
							}
										
						echo'</select></div>
	<div class="cleaner_h5"></div>
								<a class="labels">Vendor:</a>
                                <input type="text" id="vname" name="field" class="in_field" style="text-transform:uppercase"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Date of Purchase:</a>
			<input id="dop" style="width:100px" name="dop" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10">
								<div class="cleaner_h5"></div>
							<a class="labels">Disposal Date:</a>
                                <input placeholder="dd/mm/yyyy" type="text" maxlength="10" id="dispdate"  class="in_field" style="width:130px"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Location:</a>
                                <input type="text" id="location"  class="in_field"/> 
								<div class="cleaner_h5"></div>
									<a class="labels">Price:</a>
                                <input type="text" id="price" class="in_field"/> 
								<div class="cleaner_h5"></div>
								<a class="labels" >App/Dep. Rate:<span>[%]</span></a>
                                <input type="text" id="deprate"  class="in_field"title="Appreciation/Depreciation Rate per year in Percent" style="width:110px" /> 
								<div class="cleaner_h5"></div>
								
								
								</div>
							
								
								
								<div id="personal" style="width:491px">
								<h5>Other Details[NOTES]</h5>
								<div class="cleaner_h5"></div>
								<script>
								area1=new nicEditor({fullPanel : true,maxHeight : 300}).panelInstance("odetail");
								</script>
								<textarea id="odetail" style="float:left;width:470px;height:290px;"></textarea>
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
                            	<input type="hidden" id="stamp" name="stamp" value=""/>
								<input type="hidden" id="id" name="id"  value="9"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								</div>
								</div>
   							';
						
							
							break;
							
						
							
							case 112:
					$a=$_GET['a'];
					echo"<script>$('#ass1').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			
			if($a==113){
				echo'Edit Asset Information';
			}
			if($a==114){
				echo'Delete Asset Record';
			}
			
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="ass1" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from assets order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$assid=stripslashes($row['id']);
								echo'<option value="'.$assid.'">'.stripslashes($row['assetid']).'-'.stripslashes($row['name']).'-{'.stripslashes($row['category']).'}</option>';
							}
		echo'
	</select>
	</div>
				</div>';
							
							break;
							
								case 113:
								$reg=$_GET['param'];
							echo"<script>$('.combos').parent().find('input:first').width(130);</script>";
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Edit Asset Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
								$resultd =mysqli_query($conn,"select * from assets where id='".$reg."'");
							$rowd=mysqli_fetch_array($resultd);	
							 echo'<div id="page">
							 <div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; margin:0;">Edit Asset Information</h2>';
								echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="addnewasset(2);"/></div>';
										

								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<form method="post" name="personal_form" action="#">
								<input type="hidden" name="post" value="Send" />
								<div id="personal">
								<h5>Asset Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Asset ID:<span>*</span></a>
                                <input type="text" id="assid" name="field" class="in_field" value="'.stripslashes($rowd['assetid']).'" style="border-color:#f00" onkeyup="setstamp()"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Asset Name:<span>*</span></a>
                                <input type="text" id="assname" name="field" class="in_field" style="text-transform:uppercase" value="'.stripslashes($rowd['name']).'"/>
								<div class="cleaner_h5"></div>
								<a class="labels" style="margin-left:0px">Category:<span>*</span></a>
	<div class="ui-widget" style="margin-right:25px; float:right">
					<select class="combos" id="asscat" style="width:200px; margin-left:10px;">
					<option value="'.stripslashes($rowd['subcatid']).'" selected="selected">'.stripslashes($rowd['category']).'</option>';
							$result =mysqli_query($conn,"select * from assetsubcategories  order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
							echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['name']).'</option>';
						
							}
										
						echo'</select></div>
	<div class="cleaner_h5"></div>
								<a class="labels">Vendor:</a>
                                <input type="text" id="vname" name="field" class="in_field" style="text-transform:uppercase" value="'.stripslashes($rowd['vendor']).'"/> 
								<div class="cleaner_h5"></div>
								 <a class="labels">Date of Purchase:</a>
			<input id="dop" style="width:100px" name="dop" class="in_field"  placeholder="dd/mm/yyyy" type="text" maxlength="10" value="'.stripslashes($rowd['dateofpurchase']).'">
								<div class="cleaner_h5"></div>
							<a class="labels">Disposal Date:</a>
                                <input placeholder="dd/mm/yyyy" type="text" maxlength="10" id="dispdate"  class="in_field" style="width:130px" value="'.stripslashes($rowd['disposaldate']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Location:</a>
                                <input type="text" id="location"  class="in_field" value="'.stripslashes($rowd['location']).'"/> 
								<div class="cleaner_h5"></div>
									<a class="labels">Price:</a>
                                <input type="text" id="price" class="in_field" value="'.stripslashes($rowd['price']).'"/> 
								<div class="cleaner_h5"></div>
								<a class="labels" >App/Dep. Rate:<span>[%]</span></a>
                                <input type="text" id="deprate"  class="in_field"title="Appreciation/Depreciation Rate per year in Percent" style="width:110px" value="'.stripslashes($rowd['deprate']).'" /> 
								<div class="cleaner_h5"></div>
								
								
								</div>
							
								
								
								<div id="personal" style="width:491px">
								<h5>Other Details[NOTES]</h5>
								<div class="cleaner_h5"></div>
								<script>
								area1=new nicEditor({fullPanel : true,maxHeight : 300}).panelInstance("odetail");
								</script>
								<textarea id="odetail" style="float:left;width:470px;height:290px;">'.stripslashes($rowd['odetail']).'</textarea>
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
								<iframe name="leiframe" id="leiframe" class="leiframe"  src="images/assets/'.stripslashes($rowd['assetid']).'.jpg">
								</iframe>
                            	<input type="hidden" id="stamp" name="stamp" value=""/>
								<input type="hidden" id="id" name="id"  value="9"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer"class="in_field"/>
								</form>
								</div>
								</div>
   							';
						
							
							break;
							
							case 114:
							$assno=$_GET['param'];
							$result = mysqli_query($conn,"DELETE from assets where id='".$assno."'");
							if($result){
						$resulta = mysqli_query($conn,"insert into log values('0','".$username." deletes data from assets database.Asset No:".$assno."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
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
							
							case 115:
							$param='Default';
							
echo"<script>$('#cus2').parent().find('input:first').focus();</script>";
$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Assets Search Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	

							echo'
							<div id="newstude">
								<div id="findstude"><h5 style="margin-left:10px">Assets Search Panel</h5>';
							
									
							echo'<div class="ui-widget" style="margin:0 10px 0 10px; float:left">
	<select id="ass2">
		<option value="">Select one...</option>';
		$resulta =mysqli_query($conn,"select * from assets order by assetid");
							$num_resultsa = mysqli_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$rowa=mysqli_fetch_array($resulta);
								$assid=stripslashes($rowa['id']);
								echo'<option value="'.$assid.'">'.stripslashes($rowa['assetid']).'-'.stripslashes($rowa['name']).'-{'.stripslashes($rowa['category']).'}</option>';}
	echo'</select>
	</div>';			
	echo'<div id="results" style="min-height:350px; min-width:700px">';
										
										if(isset($_GET['param'])){
										$param=$_GET['param'];}
										else $param='default';
										echo'
										<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h5"></div>';
                    					if($param=='default'){
                    					echo "<script>paginate(17,'".$param."');</script>";
										recent(9,18);
										}
										
											else {
											echo "<script>paginate(18,'".$param."');</script>";
										recent(9,18);
											}	
							
							break;
							
							case 116:
					$a=$_GET['a'];
					echo"<script>$('#ass3').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			
			if($a==117){
				echo'ASSET ASSIGNMENT';
			}
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="ass3" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from assets where status=1 order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$assid=stripslashes($row['id']);
								echo'<option value="'.$assid.'">'.stripslashes($row['assetid']).'-'.stripslashes($row['name']).'-{'.stripslashes($row['category']).'}</option>';
							}
		echo'
	</select>
	</div>
				</div>';
							
							break;
							
								case 117:
								$reg=$_GET['param'];
							echo"<script>$('.combos').parent().find('input:first').width(130);</script>";
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Assign Asset Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
								$resultd =mysqli_query($conn,"select * from assets where id='".$reg."'");
							$rowd=mysqli_fetch_array($resultd);	
							 echo'<div id="page">
							 <div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; margin:0;">Assign Asset-Asset Code:'.stripslashes($rowd['assetid']).'</h2>';
								echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="assignnewasset();"/></div>';
										

								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">
								<h5>Asset Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
								<iframe name="leiframe" style="width:170px; height:170px; margin-left:30px; float:left" id="leiframe" class="leiframe"  src="images/assets/'.stripslashes($rowd['assetid']).'.jpg">
								</iframe>
								<h5>Asset Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Asset ID:<span>*</span></a>
                                <input type="text" id="assid" name="field" class="in_field" value="'.stripslashes($rowd['assetid']).'" style="border-color:#f00" disabled="disabled" onkeyup="setstamp()"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Asset Name:<span>*</span></a>
                                <input type="text" id="assname" name="field" class="in_field" style="text-transform:uppercase;border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['name']).'"/>
								<div class="cleaner_h5"></div>
								<a class="labels">Location:</a>
                                <input type="text" id="location"  class="in_field" style="border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['location']).'"/> 
								<div class="cleaner_h5"></div>
									<a class="labels">Price:</a>
                                <input type="text" id="price" class="in_field" style="border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['price']).'"/> 
								<div class="cleaner_h5"></div>
								
                            	</div>
								<div id="personal">
									<h5>Assignment Details</h5>
									<a class="labels">Assigned To:<span>*</span></a>
			<input id="assignto" style="" name="assignto" class="in_field"  type="text" >
								<div class="cleaner_h5"></div>
									<a class="labels">Assigned By:<span>*</span></a>
			<input id="assignby" style="" name="assignby" class="in_field"  type="text" >
								<div class="cleaner_h5"></div>
								
								<a class="labels">Date of Assign:<span>*</span></a>
			<input id="datepick" style="width:100px" name="doa" class="in_field"  type="text" maxlength="10" value="'.date('Y/m/d').'">
								<div class="cleaner_h5"></div>
								<a class="labels">Date of Return:</a>
			<input id="datepick2" style="width:100px" name="dor" class="in_field"  type="text" maxlength="10" value="">
								<div class="cleaner_h5"></div>
						
								
							
								
								
								</div>
							
								
								
								<div id="personal" style="width:491px">
								<h5>Assignment NOTES</h5>
								<div class="cleaner_h5"></div>
								<script>
								area1=new nicEditor({fullPanel : true,maxHeight : 300}).panelInstance("odetail");
								</script>
								<textarea id="odetail" style="float:left;width:470px;height:290px;"></textarea>
								</div>
								
								</div>
   							';
						
							
							break;
							
							case 118:
					$a=$_GET['a'];
					echo"<script>$('#ass4').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			
			if($a==119){
				echo'ASSET Return';
			}
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="ass4" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from assignments where status=1 order by assname");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$assid=stripslashes($row['id']);
								echo'<option value="'.$assid.'">'.stripslashes($row['assid']).'-'.stripslashes($row['assname']).'</option>';
							}
		echo'
	</select>
	</div>
				</div>';
							
							break;
							
							case 119:
								$reg=$_GET['param'];
							echo"<script>$('.combos').parent().find('input:first').width(130);</script>";
							$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Assign return Panel','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");
							$resulte=mysqli_query($conn,"select * from assignments where id='".$reg."'");
							$rowe=mysqli_fetch_array($resulte);	
							
							$resultd =mysqli_query($conn,"select * from assets where assetid='".stripslashes($rowe['assid'])."'");
							$rowd=mysqli_fetch_array($resultd);	
							
							 echo'<div id="page">
							 <div id="newstude">
								<h2 style="float:left; padding:5px 5px 0 0; margin:0;">Return Asset-Asset Code:'.stripslashes($rowd['assetid']).'</h2>';
								echo'
								<div id="saveclose" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Exit" id="submit"  style="padding:2px 5px; border-color:#fff; background:#f00; float:left; cursor:pointer;width:50px" class="in_field" onclick="hidenewstude();"/></div>
								<div id="newstudent" style="width:50px; height:30px;float:right;margin-right:10px;">
								<input type="button" value="Save" id="submit"  style="padding:2px 5px; border-color:#fff; background:#0f6; float:left; cursor:pointer;width:50px" class="in_field" onclick="returnnewasset('.$reg.');"/></div>';
										

								echo'<div class="cleaner" style="border-bottom:2px solid #333"></div>
								<div id="personal">
								<h5>Asset Photo</h5>';
								echo'<div class="cleaner_h5"></div>
								
								<iframe name="leiframe" style="width:170px; height:170px; margin-left:30px; float:left" id="leiframe" class="leiframe"  src="images/assets/'.stripslashes($rowd['assetid']).'.jpg">
								</iframe>
								<h5>Asset Details</h5>
								<div class="cleaner_h5"></div>
								<a class="labels">Asset ID:<span>*</span></a>
                                <input type="text" id="assid" name="field" class="in_field" value="'.stripslashes($rowd['assetid']).'" style="border-color:#f00" disabled="disabled" onkeyup="setstamp()"/> 
								<div class="cleaner_h5"></div>
								<a class="labels">Asset Name:<span>*</span></a>
                                <input type="text" id="assname" name="field" class="in_field" style="text-transform:uppercase;border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['name']).'"/>
								<div class="cleaner_h5"></div>
								<a class="labels">Location:</a>
                                <input type="text" id="location"  class="in_field" style="border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['location']).'"/> 
								<div class="cleaner_h5"></div>
									<a class="labels">Price:</a>
                                <input type="text" id="price" class="in_field" style="border-color:#f00" disabled="disabled" value="'.stripslashes($rowd['price']).'"/> 
								<div class="cleaner_h5"></div>
								
                            	</div>
								<div id="personal">
									<h5>Assignment Details</h5>
									<a class="labels">Assigned To:<span>*</span></a>
			<input id="assignto"  name="assignto" class="in_field"  type="text" style="border-color:#f00" disabled="disabled" value="'.stripslashes($rowe['assto']).'"  >
								<div class="cleaner_h5"></div>
									<a class="labels">Assigned By:<span>*</span></a>
			<input id="assignby"  name="assignby" class="in_field"  type="text" style="border-color:#f00" disabled="disabled"  value="'.stripslashes($rowe['assby']).'" >
								<div class="cleaner_h5"></div>
								
								<a class="labels">Date of Assign:<span>*</span></a>
			<input id="datepick" style="width:100px;border-color:#f00" name="doa" class="in_field"   disabled="disabled"  type="text" maxlength="10"  value="'.stripslashes($rowe['doa']).'">
								<div class="cleaner_h5"></div>
								<a class="labels">Received By:<span>*</span></a>
			<input id="receivedby" style="" name="receivedby" class="in_field"  type="text" >
								<div class="cleaner_h5"></div>
								<a class="labels">Date of Return:<span>*</span></a>
			<input id="datepick2" style="width:100px" name="dor" class="in_field"  type="text" maxlength="10"   value="'.stripslashes($rowe['dor']).'">
								<div class="cleaner_h5"></div>
						
								
							
								
								
								</div>
							
								
								
								<div id="personal" style="width:491px">
								<h5>Assignment/Reception NOTES</h5>
								<div class="cleaner_h5"></div>
								<script>
								area1=new nicEditor({fullPanel : true,maxHeight : 300}).panelInstance("odetail");
								</script>
								<textarea id="odetail" style="float:left;width:470px;height:290px;">'.stripslashes($rowe['odetail']).'</textarea>
								</div>
								
								</div>
   							';
						
							
							break;
							
								case 120:
					$a=$_GET['a'];
					echo"<script>$('#ass5').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			
			if($a==144){
				echo'ASSET Disposal';
			}
			if($a==121){
				echo'ASSET Management';
			}
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<input type="hidden" id="ser" name="ser"  value="'.$a.'"/>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
		<select id="ass5" style="width:260px; margin-left:10px;">
		<option value="">Select one...</option>';
	$result =mysqli_query($conn,"select * from assets where status!=0 order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$assid=stripslashes($row['id']);
								echo'<option value="'.$assid.'">'.stripslashes($row['assetid']).'-'.stripslashes($row['name']).'-{'.stripslashes($row['category']).'}</option>';
							}
		echo'
	</select>
	</div>
				</div>';
							
							break;
							
								
								case 121:
						$param=$_GET['param'];
						$result = mysqli_query($conn,"select * from assets where id='".$param."'");
						$row=mysqli_fetch_array($result);
						$regn=stripslashes($row['assetid']);
						$price=stripslashes($row['price']);
						$name=stripslashes($row['name']);
					echo"<script>$('#ass5').parent().find('input:first').focus();</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">ASSET MANAGEMENT';
			
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<a class="labels"  style="margin-left:10px">Code:<b>'.$regn.'</b></a>
		<div class="cleaner_h5"></div>
		<a class="labels"  style="margin-left:10px">Name:<b>'.$name.'</b></a>
		<div class="cleaner_h5"></div>
			<a class="labels" style="margin-left:10px">Notes<span>*</span></a>
		<textarea id="odetail" class="alergy" style="float:left;width:280px;height:100px;MARGIN-LEFT:10PX"></textarea>
		<div class="cleaner_h5"></div>
					<a class="labels"  style="margin-left:10px">Amount:<span>*</span></a>
			<input id="amount"  name="amount" class="in_field"  type="text" style="float:right; margin-right:10px" value=""  >
		<div class="cleaner_h5"></div>
									<input type="button" value="Cancel" style="float:right; margin-right:70px; cursor:pointer; width:80px" class="select" onclick="hidediv()"/>
									<input type="button" value="Submit" style="float:right; margin-right:10px; 
									cursor:pointer; width:80px" class="select" onclick="manageasset('.$param.');"/>
					<div class="cleaner"></div>
				<div class="cleaner_h10"></div>
			</div>';
							
							break;



					case 122:
					$result = mysqli_query($conn,"insert into log values('0','".$username." accesses Asset Count Panel.','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
					echo"<script>$('#categ96').parent().find('input:first').focus().width(250);</script>";
				echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">';
			echo"<h5 style=\"margin-right:10px; color:#fff\">Asset Count:";
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								
			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()">
				</h5></div>
				<div class="cleaner_h5"></div>
					<a class="labels" style="float:left; margin-left:10px;">Category:<span>*</span></a>
					<div class="cleaner_h5"></div>
				<div class="ui-widget" style="margin-left:10px; float:left">
							<select style="float:left; margin-left:10px; width:250px" class="select" id="categ96">
							<option value="">Select one...</option>';
						$result =mysqli_query($conn,"select * from assetsubcategories");
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
								echo'<option value="'.stripslashes($row['id']).'">'.stripslashes($row['name']).'</option>';
							}
							
							echo'	<option value="All">ALL</option></select></div>
				<div class="cleaner_h10"></div>
				</div>
								</div>	
		';
							break;


								case 123:
					echo"<script>$('#ass99').parent().find('input:first').width(250).focus();</script>";
				echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 0px 5px 20px;border-radius:0px 0px 0 0">
				<h5 style="margin-right:10px; color:#fff">Assets List
				<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:0px; cursor:pointer" onclick="hidediv()"></h5>
				</div>
				<div class="cleaner_h5"></div>
				<div class="ui_widget"  style="margin-left:10px;float:left; width:270px">
				<select id="ass99" style="width:260px; margin-left:10px;">
				<option value="">Select one...</option>
		<option value="1">Active Assets</option>
		<option value="0">Disposed Assets</option>
		<option value="2">All Assets</option>
	</select>
	</div>
						<div class="cleaner_h5"></div>
						
						</div>';
							break;
							
								case 124:
				echo"<script>$('#ass97').parent().find('input:first').focus().width(230);</script>";	
					echo'<div id="modalDiv"></div>';
				echo'<div id="alertDiv" style="min-height:90px; width:320px;top:20%;border:5px solid #666">
					<div id="tit" style="width:300px; background:#0085b2; padding:5px 10px;border-radius:0px 0px 0 0">
			<h5 style="margin-right:0px; color:#fff">';
			
		echo'Asset Tracking Report';
			echo"<div id=\"backatt\" style=\"width:9px; height:20px; float:right;margin:0px 5px 0 10px\"><img src=\"images/helper.png\" width=\"10\" height=\"20\" style=\"cursor:pointer;\" title=\"Help\" onclick=\"help4()\"/></div>";								

			echo'<img src="images/delete.png" style="width:20px; height:20px; float:right; border:1px solid #fff; border-radius:2px; cursor:pointer" onclick="hidediv()"></h5></div>
		<div class="cleaner_h5"></div>
		<a class="labels" style="margin-left:5px">Asset:</a>
		<div class="ui_widget"  style="margin-left:10px;float:left; width:200px">
		<select id="ass97" style="width:240px; margin-left:5px;">
		<option value="">Select one...</option>';
		$result =mysqli_query($conn,"select * from assets order by name");
							$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysqli_fetch_array($result);
								$assid=stripslashes($row['id']);
								echo'<option value="'.$assid.'">'.stripslashes($row['assetid']).'-'.stripslashes($row['name']).'-{'.stripslashes($row['category']).'}</option>';
							}
		echo'
	</select>
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
									cursor:pointer; width:80px" class="select" onclick="enterasstrack();"/>
						<div class="cleaner_h5"></div>
				</div>';
							
							break;

							case 125:



   echo'<div id="tabs-2">
				<link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css">
				<script type="text/javascript" src="js/jquery.dataTables.js"></script>
				
				<table class="table table-striped" id="thetable">
                      <thead>
                        <tr>
                          <th>Contact Name</th>
                          <th>Business Name</th>
                        
                        </tr>
                      </thead>
                      <tbody>';
                    $result =mysqli_query($conn,"select * from creditcustomers");
                    $num_results = mysqli_num_rows($result);
                      for ($i=0; $i <$num_results; $i++) {
                         
                          echo'<tr class="gradeX">
                          <td>1</td>
                          <td>2</td>
                           </tr>';

                        }
                       
                      echo'</tbody>
                    </table>
                     <script type="text/javascript">
				     $(document).ready(function() {
						$("#thetable").DataTable();
						});
				      </script> 


				</div>	';
break;	
							


							
							









	
					
					
}