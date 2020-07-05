<?php
include('db_fns.php');
$userid=1;
$clas=$_GET['clas'];
$end=$_GET['end'];
$term=substr($end, -5, 1);
$year=substr($end, -4, 4);
$result =mysql_query("select * from users where position='Hteacher'",$db1 );
$row=mysql_fetch_array($result);
$ha=stripslashes($row['init']);
$result =mysql_query("select * from classteachers where userid=".$userid."",$db1 );
$row=mysql_fetch_array($result);
$ta=stripslashes($row['init']);
 ?>
<script src="js/functions.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Q-Shule Report Card Generator</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<link type="text/css" rel="stylesheet" href="css/orange.css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/repprint.css" media="print" />
<script type="text/javascript" src="js/jquery.min.js"></script></head>
<body>
 <?php
							//implement associative array to storefull names of subjects,		
									$db='db';
									$dp=$db.$end;
									$tbl='report';
									$tbl=$tbl.$clas.$end;
									$dbname='qshule_'.$end;
									$dp = mysql_connect('localhost', 'munene', '',true) or die(mysql_error());
     								mysql_select_db($dbname,$dp); 
									
									
									$arr=array();
									$resultx =mysql_query("select * from subjects where status=1",$db1 );
									$num_resultsx = mysql_num_rows($resultx);
									for ($x=0; $x <$num_resultsx; $x++) {
									$rowx=mysql_fetch_array($resultx);
									$comp=stripslashes($rowx['name']);
									$full=stripslashes($rowx['full']);
									$arr[$full]=$comp;
								}
							
							
							$resultb =mysql_query("select * from ".$tbl."",$dp );
							$num_resultsb = mysql_num_rows($resultb);
							
							
							for ($b=0; $b <$num_resultsb; $b++) {
								$rowb=mysql_fetch_array($resultb);
								$regn=stripslashes($rowb['regn']);
								$nam=stripslashes($rowb['name']);
								$post=stripslashes($rowb['position']);
								$mks=stripslashes($rowb['marks']);
								$trmk=stripslashes($rowb['tremarks']);
								$poit=stripslashes($rowb['points']);
								$grd=stripslashes($rowb['grade']);
								$hrmk=stripslashes($rowb['hremarks']);
							

							echo'
							<div id="wrap">
							<div id="headed">
							<div id="logoq"><img src="images/logoq.png" width="100" height="100"/></div>
							<div id="schtit">
							<h1 class="hir">Q-SHULE HIGH SCHOOL</h1>
							<p class="titlep">P.O BOX 812-00200</p>
							<p class="titlep">NAIROBI</p>
							<p class="titlep">TEL: 0726-738023/0727596626</p>
							<p class="titlep">EMAIL: info@prince.co.ke</p>
							<p class="titlep">off Kamiti Road, KahawaWest 44.</p>
							</div>
							</div><!-- End headed -->
							<div  class="bord"></div>
							<h1 class="hia">MOTTO:LEARN TO SERVE</h1> 
							<h1 class="hib">STUDENTS TERMINAL REPORT CARD</h1>
							  
							<h1 class="hic">NAME:'.$nam.'  &nbsp  &nbsp   ADM NO: '.$regn.'  &nbsp &nbsp  CLASS:'.$clas.'  &nbsp &nbsp   TERM:'.$term.'  &nbsp &nbsp  &nbsp    YEAR:'.$year.'</h1> 
							 <div class="cleaner"></div> 
								 <div id="container">
											 <div id="reptit">
											 <div id="figa">SUBJECT</div>
											  <div id="figb">BEG EXAM</div>
											 <div id="figb">MID EXAM</div>
											 <div id="figb">END EXAM</div>
											 <div id="figb">AVERAGE</div>
											 <div id="figb">GRADE</div>
											 <div id="figb">POINTS</div>
											 <div id="figc">REMARKS</div>
											  <div id="figd">INITIALS</div>
											 </div>
										  ';			
									
																	
									foreach ($arr as $key => $val) {
									$tbl2=$val;
									$tbl2=$tbl2.$clas.$end;
									$resulta =mysql_query("select * from ".$tbl2." where regn=".$regn."",$dp );
									$rowa=mysql_fetch_array($resulta);
									$begexam=stripslashes($rowa['begexam']);
									$midexam=stripslashes($rowa['midexam']);
									$endexam=stripslashes($rowa['endexam']);
									$pos=stripslashes($rowa['pos']);
									$ave=stripslashes($rowa['ave']);
									$grade=stripslashes($rowa['grade']);
									$rmk=stripslashes($rowa['remarks']);
									$init=stripslashes($rowa['initial']);
									
									
									echo'<div id="reptit">
									<div id="figa">'.$key.'</div>
									 <div id="figb">'.$begexam.'</div>
										<div id="figb">'.$midexam.'</div>
									 <div id="figb">'.$endexam.'</div>
									 <div id="figb">'.$ave.'</div>
									 <div id="figb">'.$grade.'</div>
									 <div id="figb">'.$pos.'</div>
									 <div id="figc">'.$rmk.'</div>
									  <div id="figd">'.$init.'</div>
									 </div>	';
									 }
									
			
	echo'</div>
<div class="cleaner_h10"></div>';
									
echo'<h1 class="hia">TOTAL MARKS:'.$mks.' &nbsp  &nbsp OUT OF:700 &nbsp  &nbsp TOTAL POINTS:'.$poit.' &nbsp  &nbsp M/GRADE:'.$grd.'</h1> <h1 class="hia">POSITION:'.$post.' &nbsp  &nbsp OUT OF:'.$num_resultsb.'</h1> 
<div class="comme1"><h1 class="hic">Class Teacher Remarks:<p class="rmks">'.$trmk.'</p></h1></div>
<div class="comme2"><h1 class="hic">Initials:<p class="rmks">'.$ta.'</p></h1></div>
<div class="comme3"><h1 class="hic">Date:<p class="rmks">'.date('j/m/y').'</p></h1></div>
<div class="cleaner_h10"></div>
<div class="comme1"><h1 class="hic">HeadTeacher Remarks:<p class="rmks">'.$hrmk.'</p></h1></div>
<div class="comme2"><h1 class="hic">Initials:<p class="rmks">'.$ha.'</p></h1></div>
<div class="comme3"><h1 class="hic">Date:<p class="rmks">'.date('j/m/y').'</p></h1></div>
</div><!-- End Wrapper -->
 ';
		}
				 ?>
</body>
</html>
