<?php
include('db_fns.php');
$id=$_GET['id'];
function prowess($pro,$title){
echo'<table style="">
	<caption>'.$title.'</caption>
	<thead>
		<tr>
			<td></td>';
			$max=count($pro);
			if($max>12){
			$may=$max-12;
			}else $may=1;
			for ($i = $may; $i < $max; $i++){
			echo'<th scope="col">'.$pro[$i][0].'</th>';
			}
			echo'</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Sales</th>';
			for ($a = $may; $a < $max; $a++){
			echo'<td>'.$pro[$a][1].'</td>';
			}
			echo'</tr>
			<tr>
			<th scope="row">Cost</th>';
			for ($a = $may; $a < $max; $a++){
			echo'<td>'.$pro[$a][2].'</td>';
			}
			echo'</tr>
	</tbody>
</table>';		
}
function prowess2($pro,$title){
echo'<table style="">
	<caption>'.$title.'</caption>
	<thead>
		<tr>
			<td></td>';
			$max=count($pro);
			if($max>12){
			$may=$max-12;
			}else $may=1;
			for ($i = $may; $i < $max; $i++){
			echo'<th scope="col">'.$pro[$i][0].'</th>';
			}
			echo'</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">Treatment Income</th>';
			for ($a = $may; $a < $max; $a++){
			echo'<td>'.$pro[$a][1].'</td>';
			}
			echo'</tr>
			
			
	</tbody>
</table>';		
}
switch($id){
	case 1:
	$title='Q-Afya Receipts';
	break;
	case 2:
	$title='Q-Afya Credit Quotations';
	break;
	case 3:
	$title='Q-Afya Credit Notes ';
	break;
	case 4:
	$title='Q-Afya Patient Records ';
	break;
	case 5:
	$title='Q-Afya Patient Records ';
	break;
	case 6:
	$title='Q-Afya Purchase Report ';
	break;
	
	case 7:
	$title='Q-Afya Stock Valuation Report ';
	break;
	
	case 8:
	$title='Q-Afya Stock Tracking Report ';
	break;
	
	case 9:
	$title='Q-Afya Stock Issue Report ';
	break;
	
	case 10:
	$title='Q-Afya Credit Customer Statement ';
	break;
	
	case 11:
	$title='Q-Afya Credit Supplier Statement ';
	break;
	
	case 12:
	$title='Q-Afya Profit and Loss Report ';
	break;
	
	case 13:
	$title='Q-Afya Income Report Graphical Representation';
	break;
	
	case 14:
	$title='Q-Afya Expenses Report ';
	break;
	
	case 15:
	$title='Q-Afya Bank Statement Report ';
	break;
	
	case 16:
	$title='Q-Afya Price List Report ';
	break;
	
	case 17:
	$title='Q-Afya Purchases Report ';
	break;
	
	case 18:
	$title='Q-Afya Expiry Report ';
	break;
	
	case 19:
	$title='Q-Afya Issue Report ';
	break;
	
	case 20:
	$title='Q-Afya Treatment Income Graphical Representation';
	break;
	
	case 21:
	$title='Q-Afya Receipts';
	break;
	case 22:
	$title='Q-Afya Receipts';
	break;
	case 23:
	$title='Q-Afya Receipts';
	break;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title><?php echo $title ?></title>
	<link href="css/basic.css" type="text/css" rel="stylesheet" />
    <link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
	<script type="text/javascript" src="js/enhance.js"></script>
	<script type="text/javascript">
		// Run capabilities test
		enhance({
			loadScripts: [
				'js/excanvas.js',
				'js/jquery.js',
				'js/visualize.jQuery.js',
				'js/example.js'
			],
			loadStyles: [
				'css/visualize.css',
				'css/visualize-light.css'
			]	
		});   
    </script>
</head>
<body style="margin-left:8%; background:#333">


 <?php
 switch($id){
	case 13:
	$code=$_GET['code'];	
	
			if(isset($_GET['d1'])){
				$d1=$_GET['d1'];
			}else $d1=0;
			if(isset($_GET['d2'])){
				$d2=$_GET['d2'];
			}else $d2=0;	
			$d1=preg_replace('~/~', '', $d1); $d2=preg_replace('~/~', '', $d2);
 			$pre=array();
			
switch($code){
case 1:
	if($d1==0){
	$result =mysql_query("select * from sales where Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where Stamp>='".$d1."' and Stamp<='".$d2."'  and Status!=0");
	}
break;
case 2:
	if($d1==0){
	$result =mysql_query("select * from sales where Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where  Stamp>='".$d1."' and Stamp<='".$d2."' and Status!=0");
	}
				
	$new=array();$new2=array();
	$num_results = mysql_num_rows($result);
	for ($i=0; $i <$num_results; $i++) {
	$row=mysql_fetch_array($result);
			if(preg_replace('~,~', '', stripslashes($row['TotalPrice']))>preg_replace('~,~', '', stripslashes($row['TotalCost']))){
				$new[]=stripslashes($row['Date']);
			}
	}
	$new = array_unique($new);
	
	$pro=array(array()); 
	foreach ($new as $key => $val) {
	$tot=0;$toc=0;
	$result =mysql_query("select * from sales where Date='".$val."' and Status!=0");
				$num_results = mysql_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysql_fetch_array($result);
					if(preg_replace('~,~', '', stripslashes($row['TotalPrice']))>preg_replace('~,~', '', stripslashes($row['TotalCost']))){
							$tot+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
							$toc+=preg_replace('~,~', '', stripslashes($row['TotalCost']));
							}
				}
					$date=$val;
					$a=substr($date,0,4);
					$b=substr($date,5,2);
					$c=substr($date,8,2);
					$d=$c.'/'.$b.'/'.$a;
				$pro[]=array($d,$tot,$toc);	
		}
				prowess($pro,$title);		
							

break;
case 3:
		if($d1==0){
	$result =mysql_query("select * from sales where Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where  Stamp>='".$d1."' and Stamp<='".$d2."' and Status!=0");
	}
				
	$new=array();$new2=array();
	$num_results = mysql_num_rows($result);
	for ($i=0; $i <$num_results; $i++) {
	$row=mysql_fetch_array($result);
			if(preg_replace('~,~', '', stripslashes($row['TotalPrice']))<preg_replace('~,~', '', stripslashes($row['TotalCost']))){
				$new[]=stripslashes($row['Date']);
			}
	}
	$new = array_unique($new);
	
	$pro=array(array()); 
	foreach ($new as $key => $val) {
	$tot=0;$toc=0;
	$result =mysql_query("select * from sales where Date='".$val."' and Status!=0");
				$num_results = mysql_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysql_fetch_array($result);
					if(preg_replace('~,~', '', stripslashes($row['TotalPrice']))<preg_replace('~,~', '', stripslashes($row['TotalCost']))){
							$tot+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
							$toc+=preg_replace('~,~', '', stripslashes($row['TotalCost']));
							}
				}
					$date=$val;
					$a=substr($date,0,4);
					$b=substr($date,5,2);
					$c=substr($date,8,2);
					$d=$c.'/'.$b.'/'.$a;
				$pro[]=array($d,$tot,$toc);	
		}
				prowess($pro,$title);

break;
case 4:
$name=$_GET['name'];
	if($d1==0){
	$result =mysql_query("select * from sales where Cashier='".$name."' and Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where Cashier='".$name."' and Stamp>='".$d1."' and Stamp<='".$d2."' and Status!=0");
	}

break;
case 5:
$name=$_GET['name'];
	if($d1==0){
	$result =mysql_query("select * from sales where ItemCode='".$name."' and Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where ItemCode='".$name."' and Stamp>='".$d1."' and Stamp<='".$d2."' and Status!=0");
	}

break;
case 6:

	$result =mysql_query("select * from sales  where Stamp>='".date('Ymd')."' and Stamp<='".date('Ymd')."' and Status!=0");

break;
case 7:
$name=$_GET['name'];
	if($d1==0){
	$result =mysql_query("select * from sales where Category='".$name."' and Status!=0");
	}
	else{
	$result =mysql_query("select * from sales  where Category='".$name."' and Stamp>='".$d1."' and Stamp<='".$d2."' and Status!=0");
	}

break;
}
				if($code==1||$code==4||$code==5||$code==7){
				$num_results = mysql_num_rows($result);
				for ($i=0; $i <$num_results; $i++) {
					$row=mysql_fetch_array($result);
					$pre[]=stripslashes($row['Date']);
				}
				$pre = array_unique($pre);
				$pro=array(array()); 
				foreach ($pre as $key => $val) {
				switch($code){
				case 1:
				$result =mysql_query("select * from sales where Date='".$val."' and Status!=0");
				break;	
				case 4:
				$result =mysql_query("select * from sales where Date='".$val."' and Status!=0 and Cashier='".$name."'");
				break;
				case 5:
				$result =mysql_query("select * from sales where Date='".$val."' and Status!=0 and  ItemCode='".$name."'");
				break;
				case 7:
				$result =mysql_query("select * from sales where Date='".$val."' and Status!=0 and  Category='".$name."'");
				break;
				}
				$num_results = mysql_num_rows($result);
				$tot=0;$toc=0;
					for ($i=0; $i <$num_results; $i++) {
									$row=mysql_fetch_array($result);
								$tot+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
								$toc+=preg_replace('~,~', '', stripslashes($row['TotalCost']));
					}
					$date=$val;
					$a=substr($date,0,4);
					$b=substr($date,5,2);
					$c=substr($date,8,2);
					$d=$c.'/'.$b.'/'.$a;
				$pro[]=array($d,$tot,$toc);	
				}
				prowess($pro,$title);
				}
				
break;

case 20:	
			if(isset($_GET['d1'])){
				$d1=$_GET['d1'];
			}else $d1=0;
			if(isset($_GET['d2'])){
				$d2=$_GET['d2'];
			}else $d2=0;	
			$d1=preg_replace('~/~', '', $d1); $d2=preg_replace('~/~', '', $d2);
 			$pre=array();
			if($d1==0){
	$result =mysql_query("select * from newprescription");
	}
	else{
	$result =mysql_query("select * from newprescription  where Stamp>='".$d1."' and Stamp<='".$d2."'");
	}
			$num_results = mysql_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
								$row=mysql_fetch_array($result);
								$pre[]=stripslashes($row['TransDate']);
				}
				$pre = array_unique($pre);
				
				$pro=array(array()); 
				foreach ($pre as $key => $val) {
				$result =mysql_query("select * from newprescription where TransDate='".$val."'");
				$num_results = mysql_num_rows($result);
				$tot=0;
					for ($i=0; $i <$num_results; $i++) {
									$row=mysql_fetch_array($result);
								$tot+=preg_replace('~,~', '', stripslashes($row['TotFees']));
					}
					
				$resultb =mysql_query("select * from wardfee where date='".$val."'");
				$num_resultsb = mysql_num_rows($resultb);
				$ward=0;
					for ($b=0; $b <$num_resultsb; $b++) {
									$rowb=mysql_fetch_array($resultb);
								$ward+=preg_replace('~,~', '', stripslashes($rowb['Amount']));
					}
					$date=$val;
					$a=substr($date,0,4);
					$b=substr($date,5,2);
					$c=substr($date,8,2);
					$d=$c.'/'.$b.'/'.$a;
				$pro[]=array($d,$tot,$ward);	
				}
				prowess2($pro,$title);
				
break;

 }
			?>


</body>
</html>