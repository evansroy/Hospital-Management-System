<?php include('db_fns.php'); ?>
<script type="text/javascript" src="js/functions.js"></script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Q-Shule Statements</title>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/green.css" media="screen" />
<link type="text/css" rel="stylesheet" href="css/payprint.css" media="print" />
</head>
<?php 
$regn=$_GET['regn'];
$resulta =mysql_query("select * from feebalance where regn='".$regn."'",$db1 );
$num_results = mysql_num_rows($resulta);
if($num_results>0){
$row=mysql_fetch_array($resulta);
$name=stripslashes($row['name']);
$clas=stripslashes($row['clas']);
$bal=stripslashes($row['balance']);

?>
<body>
 
       <div  class="owner">
        <div class="ptopret"></div>
       <div class="paper-top"></div>
       <div class="ptopret"></div>
     
      </div>
       <div class="cleaner"></div>
   
      <div id="paper-mid">
      <div class="print" onclick="window.print() " title="Print"></div>
       <div class="adobe" title="Convert to pdf and save"> <a href="http://pdfcrowd.com/url_to_pdf/" ></a></div>
=====================================================================================================================================================         
        <div class="entry">
        
          <div class="selfn">
       
            <h1 style="width:100%">
			Q-Shule<br/></h1>
           <h1 style="width:100%">Student Fee Statements<br/></h1>
           <h1 style="width:100%">Name:<?php  echo $name ?> &nbsp; Regn:<?php  echo $regn ?> &nbsp; Class:<?php  echo $clas ?><br/></h1>
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
        <div class="entry" style="padding-left:50px">
        <div class="cleaner_h20"></div>
       
      								<div id="figure6">
									<div id="figa7">Date</div>
                                    <div id="figa7">Trans ID</div>
									<div id="figa7x">Description</div>
									<div id="figure7">Cr.</div>
                                    <div id="figure7">Dr.</div>
									</div>
                             <?php

$resulta =mysql_query("select * from fee where regn='".$regn."'",$db1 );
$num_results = mysql_num_rows($resulta);
$cr=0;$dr=0;
for ($i=0; $i <$num_results; $i++) {
	$row=mysql_fetch_array($resulta);
	echo'<div id="figure8">
									<div id="figa9a" class="figa9">'.stripslashes($row['date']).'</div>
									<div id="figa9">'.stripslashes($row['vouchno']).'</div>
									<div id="figa9x" class="figa9">'.stripslashes($row['paytype']).'</div>';
									if(stripslashes($row['drcr'])=='dr'){
									?>
									<div id="figure9" class="figure9"><script>
             						document.writeln(( <?php  echo abs(stripslashes($row['amount'])) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure19" class="figure9" style="border-right:0">&nbsp;</div>
                                    <?php
									$dr+=abs(stripslashes($row['amount']));
									}
									if(stripslashes($row['drcr'])=='cr'){
									?>
									<div id="figure9" class="figure9">&nbsp;</div>
                                    <div id="figure19" class="figure9" style="border-right:0"><script>
             						document.writeln(( <?php  echo abs(stripslashes($row['amount'])) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <?php
									$cr+=abs(stripslashes($row['amount']));
									}
									?>
                              	
                                
                                
                                </div>
									<div class="cleaner"></div>
                                    
<?php
}

?>
											<div id="figure6">
									<div id="figa7">&nbsp;</div>
                                    <div id="figa7">&nbsp;</div>
									<div id="figa7x" style="color:#fff">Total</div>
									<div id="re7" class="figure7" style="color:#fff"><script>
             						document.writeln(( <?php  echo abs($dr) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="re7"  class="figure7" style="color:#fff"><script>
             						document.writeln(( <?php  echo abs($cr) ?>).formatMoney(2, '.', ','));
             						</script></div>
									</div>                                  
                                    
        
      </div>
   </div>
</body>
<?php } ?>
</html>