<?php include('db_fns.php');
include('functions.php'); 
date_default_timezone_set('Africa/Nairobi');
$value=$_GET['value'];
$resultx =mysql_query("select * from ledgers where ledgerid='".$value."'");
$rowx=mysql_fetch_array($resultx);
$bal=stripslashes($rowx['bal']);
$name=stripslashes($rowx['name']);
if(isset($_GET['d1'])){
	$d1=$_GET['d1'];
}else $d1=0;
if(isset($_GET['d2'])){
	$d2=$_GET['d2'];
}else $d2=0;





?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Q-Afya Reports</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/green.css" media="all" />
<script type="text/javascript" src="js/functions.js"></script>
</head>

<body>
 
       <div  class="owner">
        <div class="ptopret"></div>
       <div class="paper-top"></div>
       <div class="ptopret"></div>
     
      </div>
       <div class="cleaner"></div>
   
      <div id="paper-mid">
     
=====================================================================================================================================================         
        <div class="entry">
        
          <div class="selfx">
       
             <h1 style="width:100%">
			<?php 
			$resultx =mysql_query("select * from company");
			$rowx=mysql_fetch_array($resultx);
			echo stripslashes($rowx['CompanyName'])?><br/></h1>
           <h1 style="width:100%"><?php echo $name ?> Ledger Report<br/></h1>
           <?php if($d1==0){?>
           <h1 style="width:100%">Full Report<br/></h1>
			 <?php } else {?><h1 style="width:100%">From: <?php echo' &nbsp'.dateprint($d1) ?> to <?php echo' &nbsp'.dateprint($d2) ?> <br/></h1><?php } ?>
            <h1 style="width:100%">Balance: 
			<script>
             var ex  =( <?php  echo $bal ?>).formatMoney(2, '.', ',');
             document.writeln(ex);
             </script>   
		
		<br/></h1>
			</h1>
            
            
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
       
        </div>
        <!-- Begin 1st Row -->
=====================================================================================================================================================       
        <div class="entry" style="padding-left:20px">
        <div class="cleaner_h20"></div>
       
      								
 <?php 
$d1=preg_replace('~/~', '', $d1); $d2=preg_replace('~/~', '', $d2);

if($value==601){
	echo'<div id="figure6">
									<div id="fig7"  style="width:100px">Date</div>
                                    <div id="fig7"  style="width:102px">Trans ID.</div>
									<div id="fig7"  style="width:222px">Ledger Id</div>
									<div id="fig7x" style="width:452px">Ledger Name</div>
									<div id="fig7"  style="width:243px">Balance</div>
									</div>';
	if($d1==0){
$result =mysql_query("select * from generalledger order by transid desc");
}
else{
	$result =mysql_query("select * from generalledger  where stamp>='".$d1."' and stamp<='".$d2."'  order by transid desc");
	}
$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
							
							echo'<div id="figure8">
								
									<div id="fig9a" class="fig9"style="width:100px">'.dateprint(stripslashes($row['date'])).'</div>
									<div id="fig9" style="width:100px">'.stripslashes($row['transid']).'</div>';
									echo'<div id="fig9" style="width:220px">'.stripslashes($row['lid']).'</div>';
									echo'<div id="fig9x" class="fig9" style="width:450px">'.stripslashes($row['lname']).'</div>';?>
						<div id="fig9b" class="fig9" style="width:240px">
									<script>
             						document.writeln(( <?php  echo stripslashes($row['balance']) ?>).formatMoney(2, '.', ','));
             						</script>
                                    
                                    </div>
                              	</div>
									<div class="cleaner"></div>
                                    <?php }
										
	
	

exit;
}

echo'								<div id="figure6">
									<div id="fig7"  style="width:100px">Date</div>
                                    <div id="fig7"  style="width:102px">Trans ID.</div>
									<div id="fig7"  style="width:222px">From</div>
									<div id="fig7x" style="width:452px">Description</div>
									<div id="fig7" style="width:102px">Amount</div>
									<div id="fig7"  style="width:143px">Balance</div>
									</div>';

if($d1==0){
$result =mysql_query("select * from ledgerentries where crid=".$value." or drid=".$value." order by transid desc");
}
else{
	$result =mysql_query("select * from ledgerentries  where stamp>='".$d1."' and stamp<='".$d2."' and (crid=".$value." or drid=".$value.") order by transid desc");
	}
$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysql_fetch_array($result);
							
							echo'<div id="figure8">
								
									<div id="fig9a" class="fig9"style="width:100px">'.dateprint(stripslashes($row['date'])).'</div>
									<div id="fig9" style="width:100px">'.stripslashes($row['transid']).'</div>';
									if(stripslashes($row['crid'])==$value){
									echo'<div id="fig9" style="width:220px">'.stripslashes($row['drname']).'</div>';
									}else echo'<div id="fig9" style="width:220px">'.stripslashes($row['crname']).'</div>';
									echo'
									<div id="fig9x" class="fig9" style="width:450px">'.stripslashes($row['description']).'</div>';?>
									<div id="fig9" style="width:100px"><script>
             						document.writeln(( <?php  echo stripslashes($row['amount']) ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="fig9b" class="fig9" style="width:140px">
									<?php if(stripslashes($row['crid'])==$value){ ?>
	                                    <script>
	             						document.writeln(( <?php  echo stripslashes($row['crbal']) ?>).formatMoney(2, '.', ','));
	             						</script>
                                    <?php } else { ?>
	                                    <script>
	             						document.writeln(( <?php  echo stripslashes($row['drbal']) ?>).formatMoney(2, '.', ','));
	             						</script>
                                      <?php }?>
                                    </div>
                              	</div>
									<div class="cleaner"></div>
                                    <?php }
										?>
                                  
                                    
        
      </div>
   </div>
</body>
</html>