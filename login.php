<?php  

//session_start();

require_once('db_fns.php');
//include_once 'db_fns.php';

if(isset($_GET['username'])){
$username = $_GET['username'];
}
if(isset($_GET['passwd'])){
$password = $_GET['passwd'];}

  /*$result = mysql_query("select * from users
                         where name='".$username."'
						 and password = sha1('".$password."') and status = 1")  or die (mysql_error());	*/
	
	$result = mysqli_query($conn,"SELECT * FROM users 
							WHERE name = '".$username."'
							and password = '".$password."' and status = 1") or die(mysqli_error());	
	/*$sql = "SELECT * FROM users where name = '$username' AND password = '$password';";
	$result = mysqli_query($conn,$sql);*/				 

$num_results = mysqli_num_rows($result);

if($num_results>0){
	$_SESSION['valid_user']=strtoupper($username);
	$resulta = mysqli_query($conn,"insert into logintable values('','".$_SESSION['valid_user']."','".$_SERVER['REMOTE_ADDR']."')");
	$resultb = mysqli_query($conn,"insert into log values('','".$username." logs into system-COMPUTER IP ADDRESS:".$_SERVER['REMOTE_ADDR']."','".$username."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
				$row=mysqli_fetch_array($result);
				$userdep=stripslashes($row['dept']);


					$ba='';$ca='';$da='';$fa='';$ga='';$ha='';$ja='';$ma='';$na='';$pa='';$sa='';$ta='';$la='';$qa='';$xa='';$ya='';$za='';$maa='';$yaa='';$zaa='';$aaa='';$zy='';$yw='';$wv='';$man='';$ban='';$can='';$ean='';$dan='';$fan='';$gan='';$han='';$ian='';$jan='';$kan='';$lan='';$man='';$nan='';$oan='';$pan='';
								$result =mysqli_query($conn,"select * from sections where branch='".$userdep."'");
								/*$sql ="SELECT * FROM sections WHERE branch = '$userdep';";
								$result = mysqli_query($conn,$sql);	*/

								$row=mysqli_fetch_array($result);
								if(stripslashes($row['lab'])==1){
								$ba='LABORATORY';
								}
								
								if(stripslashes($row['pharmaceutical'])==1){
								$ca='PHARMACEUTICALS';
								}
								if(stripslashes($row['cssd'])==1){
								$da='CSSD';
								}
								if(stripslashes($row['housekeeping'])==1){
								$fa='HOUSEKEEPING';
								}
								if(stripslashes($row['stationery'])==1){
								$ga='STATIONERY';
								}
								if(stripslashes($row['general'])==1){
								$ha='GENERAL';
								}
								if(stripslashes($row['kitchen'])==1){
								$ja='KITCHEN';
								}
								if(stripslashes($row['rad'])==1){
								$la='RADIOLOGY';
								}
								if(stripslashes($row['amb'])==1){
								$ma='AMBULANCE';
								}
								if(stripslashes($row['dental'])==1){
								$na='DENTAL';
								}
								if(stripslashes($row['eye'])==1){
								$pa='EYECLINIC';
								}
								if(stripslashes($row['theatre'])==1){
								$ta='THEATRE';
								}
								if(stripslashes($row['opd'])==1){
								$sa='OPD SERVICES';
								}
								if(stripslashes($row['cus'])==1){
								$qa='CUSTOMERCARE';
								}
								if(stripslashes($row['cus'])==1){
								$xa='PHYSIOTHERAPY';
								}
								if(stripslashes($row['hdu'])==1){
								$ya='HDU';
								}
								if(stripslashes($row['mch'])==1){
								$za='MCH';
								}
								
								if(stripslashes($row['inpatient'])==1){
								$yaa='NURSING';
								}
								if(stripslashes($row['counselling'])==1){
								$zaa='COUNSELLING';
								}
								if(stripslashes($row['dialysis'])==1){
								$man='DIALYSIS';
								}
								
								if(stripslashes($row['nutrition'])==1){
								$dan='NUTRITION';
								}
								if(stripslashes($row['vct'])==1){
								$ean='VCT';
								}
								if(stripslashes($row['mortuary'])==1){
								$fan='MORTUARY';
								}
								if(stripslashes($row['ward'])==1){
								$gan='WARD';
								}
					$_SESSION['rights']="(Category='".$ba."' or Category='".$ca."' or Category='".$da."' or Category='".$fa."' or Category='".$ga."' or Category='".$ha."' or Category='".$ja."' or Category='".$la."' or Category='".$ma."' or Category='".$na."' or Category='".$pa."' or Category='".$sa."' or Category='".$ta."' or Category='".$qa."' or Category='".$xa."' or Category='".$ya."' or Category='".$za."' or Category='".$maa."' or Category='".$yaa."' or Category='".$zaa."' or Category='".$aaa."' or Category='".$zy."' or Category='".$yw."' or Category='".$wv."' or Category='".$man."' or Category='".$ban."'  or Category='".$dan."'  or Category='".$ean."'   or Category='".$fan."'   or Category='".$gan."')";
								
								
echo 0;
}
else echo"<img src=\"images/delete.png\" style=\"margin-top:10px\"  width=\"30\" height=\"30\"/>";
     
	 ?>
        