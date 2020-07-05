<?php 
include_once 'db_fns.php';
function dateprint($date){
$a=substr($date,0,4);
$b=substr($date,5,2);
$c=substr($date,8,2);
$d=$c.'/'.$b.'/'.$a;
return $d;	
}

function dateprint2($date){
$a=substr($date,0,4);
$b=getmonthname(substr($date,5,2));
$c=substr($date,8,2);
$d=$c.'-'.$b.'-'.$a;
return $d;	
}

function daysdifference($date1,$date2){
    
     $date1 = strtotime($date1);
     $date2 = strtotime($date2);
     $datediff = $date2 - $date1;
     return floor($datediff/(60*60*24));

}

function weekstart($date){
$time = strtotime($date);
$weekStartDate = date('d-M-Y',strtotime("last Monday", $time));
return $weekStartDate;
}

function stampreverse($date){
$a=substr($date,0,2);
$b=substr($date,3,2);
$c=substr($date,6,4);
$d=$c.$b.$a;
return $d;	
}
function stamptodate($date){
$a=substr($date,0,4);
$b=substr($date,4,2);
$c=substr($date,6,2);
$d=$c.'/'.$b.'/'.$a;
return $d;	
}

function getmonthname($monthNum){
	$monthName = date('M', mktime(0, 0, 0, $monthNum, 10)); 
	return $monthName;
}
function getuser($user){
	$resulta =mysqli_query($conn,"select * from users where name='".$user."' limit 0,1");
	$row=mysqli_fetch_array($resulta);
	return stripslashes($row['fullname']);
}
function stamptostamp($date){
$a=substr($date,0,4);
$b=substr($date,4,2);
$c=substr($date,6,2);
$d=$a.'/'.$b.'/'.$c;
return $d;	
}
function like_match($pattern,$subject){

	$pattern=str_replace('%', '.*', preg_quote($pattern));
	return (bool) preg_match("/^{$pattern}$/i", $subject);
}
function convtime($time){
$a=substr($time,0,2);
$b=substr($time,2,2);	
	if($a=='00'){
	$time='12:'.$b.' AM';
	}
	else if($a>11&&$a!=12){
	$a=$a-12;
	$time=$a.':'.$b.' PM';
	}
	else if($a=='12'){
	$time=$a.':'.$b.' PM';	
	}
	else{
		$time=$a.':'.$b.' AM';	
	
	}
	
	return $time;	
}
function backtime($time){
$a=substr($time,0,2);
$b=substr($time,3,2);	
$c=substr($time,5,2);

if($time=='12:30am'){
	$time='0030';
	return $time;
}
else if($time=='12:30pm'){
	$time='1230';
	return $time;
}
else if($time=='12:00pm'){
	$time='1200';
	return $time;
}
else if($time=='12:00am'){
	$time='0000';
	return $time;
}
else if($c=='am'){
	$time=$a.$b;
	return $time;
}
else if($c=='pm'){
	$a=$a+12;
	$time=$a.$b;
	return $time;
}
else{
	$time=$a.$b;
	return $time;
}
}
function timeconvert($y,$x){
	$x=preg_replace('~:~', '', $x);
	$y=preg_replace('~:~', '', $y);
	$a=substr($x, 0, 2);
	$b=substr($y, 0, 2);
	$c=substr($y, 2, 2);
	
	
	if($a>$b){
		$b=$b+24;
		$y=$b.$c;
	}
	$a=substr($x, 0, 2);
	$b=substr($y, 0, 2);
	$c=substr($x, 2, 2);
	$d=substr($y, 2, 2);
	
	$e=$b-$a;
	$f=$e * 60;
	$g=$d-$c;
	
	$h=$f+$g;
	return $h;
}
function clean($string){
	$string=str_replace('', '', $string);
	$string=str_replace('-', '', $string);
	return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
function cartitems($max){
	echo'<div id="chati" style="width:760px; height:240px; overflow-y:scroll">
				
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1" style="width:60px">Quantity</div>
									<div id="figure1"  style="width:70px">Unit Price</div>
									<div id="figure1"  style="width:70px">Total Price</div>
									<div id="figure1"  style="width:60px">VAT</div>
									<div id="figure1"  style="width:60px">Discount</div>
									<div id="figure1"  style="width:70px">SubTotal</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;height:16px; overflow:hidden\">".$_SESSION['cart'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['cart'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['cart'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['cart'][$row][4]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['cart'][$row][5]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['cart'][$row][6]."</div>
										<div id=\"figure2t\" style=\"width:77px\">".$_SESSION['cart'][$row][7]."</div>
				<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitem(".$row.")\" style=\"height:16px;width:50px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
							echo'</div></div>';
}

function footasset($result,$param,$a){	
									
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									echo'
									<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px;width:71px">Asset Code</div>
									<div id="figure1" style="width:250px"> Asset Name</div>
									<div id="figure1"  style="width:220px">Category</div>
									<div id="figure1" style="width:71px">Price</div>
									<div id="figure1" style="width:72px">Location</div>
									</div>';
									}
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['id']);
									$p=stripslashes($row['name']);
									echo'
									<div id="normal">';
									echo"<div id=\"figure2\" style=\"width:71px\">".stripslashes($row['assetid'])."</div>
									<div id=\"figure2\" style=\"width:252.4px; overflow:hidden;\">".stripslashes($row['name'])."</div>
									<div id=\"figure2\"  style=\"width:221px\">".stripslashes($row['category'])."</div>
									<div id=\"figure2\" style=\"width:71.9px\">".stripslashes($row['price'])."</div>
									<div id=\"figure2\" style=\"width:71.9px\">".stripslashes($row['location'])."</div>
									</div>";
									
									
									}
									echo'</div>';
									if($param!='default'){
									addsearch($p,$a,$code);
									}
	
}
function cartbill($max,$a){
	echo'<div id="chati" style="width:700px; height:200px; overflow-y:scroll">
				<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1" style="width:60px">Quantity</div>
									<div id="figure1"  style="width:70px">Unit Price</div>
									<div id="figure1"  style="width:70px">Total Price</div>
									<div id="figure1"  style="width:70px">Discount</div>
									<div id="figure1"  style="width:65px">Subnet</div>';
									echo'<div id="figure1"  style="width:55px">Remove</div>';	
									
									echo'</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;height:16px; overflow:hidden\" title=\"".$_SESSION[$a][$row][1]."\">".$_SESSION[$a][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION[$a][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION[$a][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION[$a][$row][4]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION[$a][$row][9]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION[$a][$row][10]."</div>";
									echo"<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delbill(".$row.",'".$a."')\" style=\"height:16px;width:56px; border-right:1px solid #333\"><img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>";
									
				echo"</div>";
										}
									
							echo'</div></div>';
}
function cartbill2($max,$a){
	echo'<div id="chati" style="width:350px; height:200px; overflow-y:auto">
				<div id="inside" style="">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:240px">ItemName</div>
									<div id="figure1"  style="width:55px">Remove</div>';	
									
									echo'</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
								echo"<div id=\"figure2t\" style=\"width:240px;height:16px; overflow:hidden\" title=\"".$_SESSION[$a][$row][1]."\">".$_SESSION[$a][$row][1]."</div>";
									echo"<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delbill2(".$row.",'".$a."')\" style=\"height:16px;width:56px; border-right:1px solid #333\"><img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>";
									
				echo"</div>";	}
									
							echo'</div></div>';
}
function cartbill3($max,$a){
	echo'<div id="chati" style="width:350px; height:200px; overflow-y:auto">
				<div id="inside" style="">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:240px">ItemName</div>
									<div id="figure1"  style="width:55px">Remove</div>';	
									
									echo'</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
								echo"<div id=\"figure2t\" style=\"width:240px;height:16px; overflow:hidden\" title=\"".$_SESSION[$a][$row][1]."\">".$_SESSION[$a][$row][1]."</div>";
									echo"<div id=\"delrad".$row."\" class=\"figure2t\" onclick=\"delbill3(".$row.",'".$a."')\" style=\"height:16px;width:56px; border-right:1px solid #333\"><img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>";
									
				echo"</div>";	}
									
							echo'</div></div>';
}
function cartitemsquot($max){
	echo'<div id="chati" style="width:760px; height:290px; overflow-y:scroll">
							<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1" style="width:60px">Quantity</div>
									<div id="figure1"  style="width:70px">Unit Price</div>
									<div id="figure1"  style="width:70px">Total Price</div>
									<div id="figure1"  style="width:60px">VAT</div>
									<div id="figure1"  style="width:60px">Discount</div>
									<div id="figure1"  style="width:70px">SubTotal</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;overflow:hidden;height:16px;\">".$_SESSION['quot'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['quot'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['quot'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['quot'][$row][4]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['quot'][$row][5]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['quot'][$row][6]."</div>
										<div id=\"figure2t\" style=\"width:77px\">".$_SESSION['quot'][$row][7]."</div>
				<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitemquot(".$row.")\" style=\"height:16px;width:50px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}

function cartitemspur($max){
	echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1"  style="width:60px">Batch No</div>
									<div id="figure1" style="width:60px">Unit</div>
									<div id="figure1"  style="width:70px">Part</div>
									<div id="figure1"  style="width:70px">Total Price</div>
									<div id="figure1"  style="width:60px">Purchase</div>
									<div id="figure1"  style="width:70px">Selling</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;overflow:hidden;height:16px;\">".$_SESSION['pur'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['pur'][$row][12]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['pur'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['pur'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['pur'][$row][9]."</div>
										<div id=\"figure2t\" style=\"width:77px\">".$_SESSION['pur'][$row][5]."</div>
										<div id=\"figure2t\" style=\"width:60px\">".$_SESSION['pur'][$row][4]."</div>
										
				<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitempur(".$row.")\" style=\"height:16px;width:50px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}
function cartitemsret($max){
	echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1"  style="width:100px">Batch No</div>
									<div id="figure1" style="width:100px">Unit</div>
									<div id="figure1"  style="width:100px">Part</div>
									<div id="figure1"  style="width:100px">Total Price</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;overflow:hidden;height:16px;\">".$_SESSION['ret'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['ret'][$row][8]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['ret'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['ret'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['ret'][$row][6]."</div>
										<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitemret(".$row.")\" style=\"height:16px;width:55px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}
function cartitemslpo($max){
	echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:200px">ItemName</div>
									<div id="figure1" style="width:100px">Unit</div>
									<div id="figure1"  style="width:100px">Part</div>
									<div id="figure1"  style="width:100px">Price</div>
									<div id="figure1"  style="width:100px">Total Price</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:200px;overflow:hidden;height:16px;\">".$_SESSION['lpo'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['lpo'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['lpo'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['lpo'][$row][4]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['lpo'][$row][6]."</div>
										<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitemlpo(".$row.")\" style=\"height:16px;width:55px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}
function cartitemspay($max){
	echo'<div id="chati" style="width:740px; height:230px; overflow-y:scroll">
							<div id="inside" style="min-height:230px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:100px">Mode</div>
									<div id="figure1" style="width:100px">A/c Id</div>
									<div id="figure1"  style="width:170px">A/c Name</div>
									<div id="figure1"  style="width:100px">Ref No.</div>
									<div id="figure1"  style="width:100px">Amount</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:100px;overflow:hidden;height:16px;\">".$_SESSION['pay'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['pay'][$row][4]."</div>
										<div id=\"figure2t\" style=\"width:170px\">".$_SESSION['pay'][$row][5]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['pay'][$row][6]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['pay'][$row][7]."</div>
										<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delpaymode(".$row.")\" style=\"height:16px;width:55px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}
function cartitemstock($max){
echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:300px">ItemName</div>
									<div id="figure1"  style="width:100px">Unit</div>
									<div id="figure1" style="width:100px">Part</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:300px;overflow:hidden;height:16px;\">".$_SESSION['stock'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['stock'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:103px\">".$_SESSION['stock'][$row][3]."</div>
					<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delitemstock(".$row.")\" style=\"height:16px;width:50px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}

function cartexpense($max){
echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1"  style="width:70px">Item Code</div>
									<div id="figure1" style="margin-left:0px; width:270px">ItemName</div>
									<div id="figure1"  style="width:130px">Amount</div>
									<div id="figure1" style="width:120px">Date</div>
									<div id="figure1"  style="width:70px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:70px\">".$_SESSION['expense'][$row][0]."</div>
										<div id=\"figure2t\" style=\"width:270px;overflow:hidden;height:16px;\">".$_SESSION['expense'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:130px\">".$_SESSION['expense'][$row][2]."</div>
										<div id=\"figure2t\" style=\"width:120px\">".$_SESSION['expense'][$row][3]."</div>
										
				<div id=\"del".$row."\" class=\"figure2t\" onclick=\"deleteexpense(".$row.")\" style=\"height:16px;width:74px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}

function cartissue($max){
echo'<div id="chati" style="width:760px; height:250px; overflow-y:scroll">
							<div id="inside" style="min-height:250px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:300px">ItemName</div>
									<div id="figure1"  style="width:100px">Unit</div>
									<div id="figure1" style="width:100px">Part</div>
									<div id="figure1"  style="width:50px">Remove</div>
									</div>';
									for ($row = 0; $row < $max; $row++)
									{
									echo'<div id="normal">';
										echo"<div id=\"figure2t\" style=\"width:300px;overflow:hidden;height:16px;\">".$_SESSION['issue'][$row][1]."</div>
										<div id=\"figure2t\" style=\"width:100px\">".$_SESSION['issue'][$row][3]."</div>
										<div id=\"figure2t\" style=\"width:103px\">".$_SESSION['issue'][$row][4]."</div>
					<div id=\"del".$row."\" class=\"figure2t\" onclick=\"delissue(".$row.")\" style=\"height:16px;width:50px; border-right:1px solid #333\">
										<img src=\"images/discard.png\" width=\"20\" height=\"22\" /></div>
										</div>";
										}
									
									echo'</div></div>';
}

function footemp($result,$param,$a){	
									
									$num_results = mysqli_num_rows($result);
									
									if($num_results>0){
									echo'
									<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px">PF No.</div>
									<div id="figure1">Name</div>
									<div id="figure1">Branch</div>
									<div id="figure1">Position</div>
									<div id="figure1">Contact</div>
									</div>';
									
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$emp=stripslashes($row['pfno']);
									$fname=stripslashes($row['fname']);
									$mname=stripslashes($row['mname']);
									$lname=stripslashes($row['lname']);
									$p=$fname.' '.$mname.' '.$lname;
									$dept=stripslashes($row['dept']);
									$pos=stripslashes($row['position']);
									$phone=stripslashes($row['phone']);
									
									echo"
									<div id=\"normal\" onclick=\"empchart('".$emp."')\">
									<div id=\"figure2\" style=\"overflow:hidden\">".$emp."</div>
									<div id=\"figure2\" style=\"overflow:hidden\">".$p."</div>
									<div id=\"figure2\" style=\"overflow:hidden\">".$dept."</div>
									<div id=\"figure2\" style=\"overflow:hidden\">".$pos."</div>
									<div id=\"figure2\" style=\"overflow:hidden\">".$phone."</div>
									</div>";
									
									
									}
									echo'</div>';
									
									if($param!='default'){
									addsearch($p,$a,$emp);
									}
									}
}

function footitem($result,$param,$a,$userdep){	
									
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
									echo'
									<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:60px">Code</div>
									<div id="figure1" style="width:235px"> Item Name</div>
									<div id="figure1"  style="width:120px">Category</div>
									<div id="figure1" style="width:64px">Pack</div>
									<div id="figure1" style="width:71px">SalePrice</div>
									<div id="figure1" style="width:60px">Unit</div>
									<div id="figure1" style="width:62px">Part</div>
									
									</div>';
									}
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$code=stripslashes($row['ItemCode']);
									$p=stripslashes($row['ItemName']);
									$pack=stripslashes($row['Pack']);
									if($userdep=='PROCUREMENT'){
									$qty=stripslashes($row['Bal']);
									}else{$qty=stripslashes($row[$userdep]);}
									if($pack==0||$pack==''){$pack=1;}
									$part=$qty%$pack;
									$unit=explode('.',($qty/$pack));
									$unit=$unit[0];
									
									echo'
									<div id="normal"  class="rightclickarea" >';
									echo"<div id=\"figure2\" style=\"width:61.9px\" name=\"itemcoding\">".stripslashes($row['ItemCode'])."</div>
		<div id=\"figure2\" style=\"width:236.9px; overflow:hidden;\" title=\"".stripslashes($row['ItemName'])."\">".stripslashes($row['ItemName'])."</div>
									<div id=\"figure2\"  style=\"width:121.9px;overflow:hidden;\">".stripslashes($row['Category'])."</div>
									<div id=\"figure2\" style=\"width:61.9px\">".$pack."</div>
									<div id=\"figure2\" style=\"width:71.9px\">".stripslashes($row['SalePrice'])."</div>
									<div id=\"figure2\" style=\"width:61.9px\">".$unit."</div>
									<div id=\"figure2\" style=\"width:61.9px\">".$part."</div>
									<input type=\"hidden\" id=\"code\" value=\"".stripslashes($row['ItemCode'])."\"/>
									</div>";
									
									echo'<div class="vmenu">';
		echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['ItemCode']).'θ12</span>Stock Availability</div>
		<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['ItemCode']).'θ13</span>Compare Purchase</div>
		</div>';
									
									}
									echo'</div>';
									if($param!='default'){
									addsearch($p,$a,$code);
									}
	
}

function footinvoice($result,$param,$a){	
									
									
									$num_results = mysqli_num_rows($result);
									if($num_results>0){
										$pro=array();
										$num_resultsa = mysqli_num_rows($result);	
										for ($i=0; $i <$num_resultsa; $i++) {
										$rowa=mysqli_fetch_array($result);
										$pro[stripslashes($rowa['rcptno'])]=stripslashes($rowa['patname']);
									}								
							$arr=array(array());	
							foreach ($pro as $key => $val) {
							$resulta =mysqli_query($conn,"SELECT * FROM receipts WHERE rcptno='".$key."' and paymode='Companies'");
							$rowa=mysqli_fetch_array($resulta);
							$max=count($arr);
			$arr[$max]=array(dateprint(stripslashes($rowa['date'])),stripslashes($rowa['invno']),stripslashes($rowa['patname']),stripslashes($rowa['patid']),stripslashes($rowa['paymode']),stripslashes($rowa['cname']),stripslashes($rowa['amount']));
							}
										
									
										
										
									echo'
									<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px; width:100px">Date</div>
									<div id="figure1" style="width:141px">Invoice No.</div>
									<div id="figure1" style="width:305px">Patient Name</div>
									<div id="figure1"  style="width:153px">Patient ID</div>
									</div>';
									}
									$max=count($arr);
									for ($i=1; $i <$max; $i++) {
										$p=$arr[$i][2].'-'.$arr[$i][1];
										$code=$arr[$i][1];
									echo"
									<div id=\"normal\"  onclick=\"window.open('output.php?id=6&rcptno=' + ".$arr[$i][1].")\">";
									echo"<div id=\"figure2\" style=\"width:101.9px\">".$arr[$i][0]."</div>
									<div id=\"figure2\" style=\"width:141.9px; overflow:hidden;\">".$arr[$i][1]."</div>
									<div id=\"figure2\"  style=\"width:305.9px;overflow:hidden;\"  title=\"".$arr[$i][2]."\">".$arr[$i][2]."</div>
									<div id=\"figure2\" style=\"width:151.9px\">".$arr[$i][3]."</div>
									</div>";
									
									
									}
									echo'</div>';
									if($param!='default'){
									addsearch($p,$a,$code);
									}
	
}
function diffdays($a,$b){

	$diff = abs(strtotime($b) - strtotime($a));

	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	return $days;

}
function diffdays2($a,$b){

	$diff = abs(strtotime($b) - strtotime($a));

	$years = floor($diff / (365*60*60*24));
	$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
	$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

	return $days;

}
function footpat($result,$param,$a,$usertype){	

									$arr=array();
									$resulta =mysqli_query("select * from accesstbl");
									$num_resultsa = mysqli_num_rows($resulta);
									for ($v=0; $v <$num_resultsa; $v++) {
										$rowa=mysqli_fetch_array($resulta);
										$var=stripslashes($rowa[$usertype]);
										$code=stripslashes($rowa['AccessCode']);
										$arr[$code]=$var;
									}
				
									
									$num_results = mysqli_num_rows($result);
									
									if($num_results>0){
									echo'
									<div id="inside" style="min-height:300px;">
									<div id="title">
									<div id="figure1" style="margin-left:0px">Pat No.</div>
									<div id="figure1" style="width:291px"> PatientName</div>
									<div id="figure1">BGroup</div>
									<div id="figure1">Contact</div>
									</div>';
									}
									for ($i=0; $i <$num_results; $i++) {
									$row=mysqli_fetch_array($result);
									$pntno=stripslashes($row['pntno']);
									$name=stripslashes($row['fullnames']);
									$bgroup=stripslashes($row['bgroup']);
									$phone=stripslashes($row['contact']);
									
									echo"
									<div class=\"rightclickarea\" id=\"normal\">";
									echo"<div id=\"figure2\">".$pntno."</div>
									<div id=\"figure2\"  style=\"width:291.9px\">".$name."</div>
									<div id=\"figure2\">".$bgroup."</div>
									<div id=\"figure2\">".$phone."</div>
									</div>";
									echo'<div class="vmenu" style="font-size:11px">';
			if($arr[106]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ5</span>Reception Billing</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Reception Billing</div>';
				if($arr[102]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ6</span>Edit Patient Details</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Edit Patient Details</div>';
				if($arr[103]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ7</span>Open Patient Chart</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Open Patient Chart</div>';
					if($arr[171]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ14</span>Admit Patient</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Admit Patient</div>';
				
				if($arr[135]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ8</span>View Income Statement</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">View Income Statement</div>';

				if($arr[109]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ15</span>Lab Billing</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Lab Billing</div>';

				if($arr[106]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ16</span>Radiology Billing</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Radiology Billing</div>';

				if($arr[111]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ17</span>Pharmacy Billing</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Pharmacy Billing</div>';

				if($arr[116]=='YES'){
					echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ18</span>Mortuary</div>';
				}else echo'<div class="first_li" style="border-bottom:1px solid #ccc;color:#ccc">Mortuary</div>';
				echo'<div class="first_li"  style="border-bottom:1px solid #ccc;"><span style="display:none">'.stripslashes($row['pntno']).'θ19</span>General Billing</div>';


 	       
		 echo'</div>';
									
									}
									echo'</div>';
									if($param!='default'){
									addsearch($name,$a,$pntno);
									}
	
}

function tasks($uid,$userid,$username){
	
	echo'<div id="mytasks" style="float:left;height:233px; width:501px; background:#fff; margin:0 0px 5px 0;padding-left:0px; border-radius:5px" onmouseover="showtaskadd();" onmouseout="hidetaskadd();">
			<div style="width:auto; height:25px; background:#f0f0f0; border-radius:5px 5px 0 0">
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
		echo'<input type="text"  id="" class="" style="font-size:12px; display:none; width:50px"/>';
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
}

function addsearch($param,$des,$regn){
		
		
		if(isset($_SESSION['recent'])){
				if(is_array($_SESSION['recent'])){
				$max=count($_SESSION['recent']);
				$_SESSION['recent'][$max]=array($param,$des,$regn,);
				$_SESSION['recent'] = array_unique($_SESSION['recent'], SORT_REGULAR);
					}
			}
		
		else{
			$_SESSION['recent']=array(array());
			$_SESSION['recent'][0]=array($param,$des,$regn,);
			$_SESSION['recent'] = array_unique($_SESSION['recent'], SORT_REGULAR);
							
			
		}
	
}

function sendemail($message){
require('fpdf.php');
require 'PHPMailerAutoload.php';


$comemail=$Live_Email='qafyahmis@gmail.com';
$Live_Email_Password='qafya123+';
$comname='Q-AFYA HMIS-LUMBOKA';
$names='System Administrator';
//$cusemail='accounts@blissgvs.co.ke';
$cusemail='princemunene@gmail.com';

	//send mail

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $Live_Email;                 // SMTP username
$mail->Password = $Live_Email_Password;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($comemail, 'Q-Afya Hospital Management System');
$mail->addAddress($cusemail, $names);     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo($comemail, $comname);
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('docs/'.$docname.'.pdf');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $comname.'-SYSTEM ALERT';
$mail->Body    = '<table border="0" cellpadding="0" cellspacing="0" width="100%">    
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" bgcolor="#70bbd9" style="padding: 40px 0 30px 0; color: #153643; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                           <b style="color:#fff">Q-AFYA HMIS LUMBOKA HOSPITAL</b>
                           </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 24px;">
                                        <b>Greetings!</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding: 20px 0 30px 0; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px;">
                                       Hello Admin,

                                       '.$message.'
                                       <br/><br/>
                                       Best Regards,<br/>
                                       Q-AFYA HMIS TEAM
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ee4c50" style="padding: 30px 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;" width="75%">
                                        &reg; Q-AFYA HMIS '.date('Y').'<br/>
                                     </td>
                                    <td align="right" width="25%">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="http://www.twitter.com/tulip-healthcare" style="color: #ffffff;">
                                                        <img src="http://njowambu.co.ke/water/htmlemail/images/tw.gif" alt="Twitter" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                                <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                                                <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;">
                                                    <a href="http://www.facebook.com/tulip-healthcare" style="color: #ffffff;">
                                                        <img src="http://njowambu.co.ke/water/htmlemail/images/fb.gif" alt="Facebook" width="38" height="38" style="display: block;" border="0" />
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>';
$mail->AltBody = 'Mail from Q-AFYA HMIS';

if(!$mail->send()) {
   // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    //echo 'Email has been sent';
}



}
function page($param,$count,$z,$page){
	//pagination
	$per_page = 10;
    $pages = ceil($count/$per_page);
	$b=$page;
	echo'</div><div class="cleaner_h10"></div><ul id="pagination">';
		$c=$pages-5;
		if($b<=$c){
										$b=$page+5;
										}
										else{
											$b=$pages;
											}
										if($page>6){
											$f=$page-5;
											echo'<a style="font-size:30px; float:left; margin-right:5px"> ...</a>';
										}
										else{
											$f=1;
											}
										for($i=$f; $i<=$page-1; $i++){
										echo "<li id=\"".$i."\" onclick=\"paginateteach('".$z."','".$param."',".$i.")\">".$i."</li>";
										}
										

		echo "<li id=\"onspot\" onclick=\"paginateteach('".$z."','".$param."',".$page.")\" style=\"color:#FF0084; border:1px solid #999\">".$page."</li>";		
                 						for($i=$page+1; $i<=$b; $i++){
										echo "<li id=\"".$i."\" onclick=\"paginateteach('".$z."','".$param."',".$i.")\">".$i."</li>";
										}
										if($b!=$pages){echo'<p style="font-size:30px"> ...</p>';}
					 					echo '</ul>';
	
}
function page2($param,$count,$z,$page,$subid){
									//pagination
										$per_page = 10;
                    					$pages = ceil($count/$per_page);
										$b=$page;
								echo'</div>
								<div class="cleaner_h10"></div>
								<ul id="pagination">';
										$c=$pages-5;
										if($b<=$c){
										$b=$page+5;
										}
										else{
											$b=$pages;
											}
										if($page>6){
											$f=$page-5;
											echo'<a style="font-size:30px; float:left; margin-right:5px"> ...</a>';
										}
										else{
											$f=1;
											}
										for($i=$f; $i<=$page-1; $i++){
										echo "<li id=\"".$i."\" onclick=\"catepage('".$z."','".$i."','".$param."','".$subid."')\">".$i."</li>";
										}
										

		echo "<li id=\"onspot\" onclick=\"catepage('".$z."','".$i."','".$param."','".$subid."')\" style=\"color:#FF0084; border:1px solid #999\">".$page."</li>";		
                 						for($i=$page+1; $i<=$b; $i++){
										echo "<li id=\"".$i."\" onclick=\"catepage('".$z."','".$i."','".$param."','".$subid."')\">".$i."</li>";
										}
										if($b!=$pages){echo'<p style="font-size:30px"> ...</p>';}
					 					echo '</ul>';
	
}

function recent($a,$b){		
							echo'</div>
							</div>
							<div id="recentstude">
							<h5 style="margin-left:10px">Recent Searches</h5>';
							if(isset($_SESSION['recent'])){
								if(is_array($_SESSION['recent'])){
								$max=count($_SESSION['recent']);
								$least=0;
								if($max>=10){$least=$max-10;}
									
									for($i=$max-1;$i>=$least;$i--){
									$param=$_SESSION['recent'][$i][0];
									$des=$_SESSION['recent'][$i][1];
									$regn=$_SESSION['recent'][$i][2];
									if($des==$a){  
									echo"
<p style=\"font-size:11px; color:#333; margin-left:10px; cursor:pointer;\" onclick=\"paginate('".$b."','".$regn."')\">";
				echo"<img src=\"images/bullet.png\" style=\"width:12px; height:12px; margin:0 3px -2px 0\" onclick=\"paginate('".$b."','".$regn."')\">".$param."</p>";
									
										}
									}
							}
							}
							echo'</div>
							</div>';
}
function studreport($result,$result2,$server,$usertype){
	$row=mysqli_fetch_array($result);
	?>
	<div id="wrapper" style="color:#000; text-transform:uppercase">

  <div class="wrapper-mid">
    <!-- Begin Paper -->
  <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
        
                    <?php 
$result = mysqli_query($conn,"select * from company");
$row2=mysqli_fetch_array($result);
$comname=stripslashes($row2['CompanyName']);
$tel=stripslashes($row2['Tel']);
$Add=stripslashes($row2['Address']);
$email=stripslashes($row2['Email']);
?>
        <div class="entry">
    <p style="text-align:center;font-size:18px;color:#0085b2; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:14px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O BOX <?php  echo $Add ?><BR/>Tel: <?php  echo $tel ?><br/>Email: <?php  echo $email ?></p>
<div class="cleaner_h20"></div>
</div>        
          <!-- Begin Image -->
          <img class="portrait" src="<?php echo stripslashes($row['image']) ?>" alt="Photo" style="margin-left:0px" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 style="width:auto; margin-top:30px; margin-left:10px;color:#0085b2"><?php echo stripslashes($row['fullnames']) ?></h1>
            
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
       
        </div>
        <!-- Begin 1st Row -->
        
        <div class="entry">
        <div class="cleaner_h20"></div>
        <div class="detail_l">
        <h>Personal Details</h>
        
        	<ul>
            <li class=""><strong>Patient No: </strong><?php echo stripslashes($row['pntno']) ?></li>
             <li class=""><strong>O/P No: </strong><?php echo stripslashes($row['opno']) ?></li>
             <li class=""><strong>Date of Birth: </strong><?php echo stripslashes($row['dob']) ?></li>
              <li class=""><strong>Age: </strong><?php 
			   $a=date('Y')-substr(stripslashes($row['dob']),-4,4);
			  echo $a ?></li>
              <script>calcage(<?php substr(stripslashes($row['dob'])) ?>)</script>
              <li class=""><strong>Contact: </strong><?php echo stripslashes($row['contact']) ?></li>
              <li class=""><strong>Address: </strong><?php echo stripslashes($row['address']) ?></li>
             <li class=""><strong>Email: </strong><?php echo stripslashes($row['email']) ?></li>
             
           
            </ul>
        </div>
        <div class="detail_r">
         <h>Guardian Details</h>
        
        	<ul>
            <li class=""><strong>Names: </strong><?php echo stripslashes($row['gname']) ?></li>
              <li class=""><strong>R-Ship: </strong><?php echo stripslashes($row['grship']) ?></li>
              <li class=""><strong>Contacts: </strong><?php echo stripslashes($row['gcont']) ?></li>
              <li class=""><strong>Emergency No: </strong><?php echo stripslashes($row['geno']) ?></li>
              <li class=""><strong>Address: </strong><?php echo stripslashes($row['gaddress']) ?></li>
      	</ul>
        
        </div>
          <div class="cleaner_h20"></div>  
             <div class="cleaner_h20"></div> 
        <div class="detail_l" style="height:120px">
         <h>Employer Details</h>
        
        	<ul>
            <li class=""><strong>Employer Name: </strong><?php echo stripslashes($row['empname']) ?></li>
              <li class=""><strong>Employee No: </strong><?php echo stripslashes($row['empno']) ?></li>
              
      	</ul>
        </div>
        <div class="detail_r" style="height:120px">
        <h>Insurance Details</h>
        
        	<ul>
            <li class=""><strong>Insurer: </strong><?php echo stripslashes($row['insurer']) ?></li>
              <li class=""><strong>Card No: </strong><?php echo stripslashes($row['cardno']) ?></li>
              
      	</ul>
        </div>
          <div class="cleaner_h20"></div> 
        <div class="detaill" style="float:left;width:auto; min-height:100px; margin-left:20px;">
        <h>Documents</h>
        <img style="float:right; width:30px; height:30px; cursor:pointer" src="images/plus.png" title="Add Document" onclick="addoc();" />
         <div class="cleaner_h10"></div> 
         <?php 
		$num_results2 = mysqli_num_rows($result2);
		for ($i=0; $i <$num_results2; $i++) {
		$row2=mysqli_fetch_array($result2);
		if(stripslashes($row2['Type'])=='Image'){
		?>
        <div class="pot" title="click to Open">
        <img class="portrait2" src="<?php echo stripslashes($row2['Link']) ?>" alt="Photo"  onclick="window.open('http://<?php echo $server ?>/q-afya/<?php echo stripslashes($row2['Link']) ?>')" style="max-width:100px; max-height:100px" />
        <p><?php echo stripslashes($row2['Name']) ?></p>
        </div>
		<?php } 
		if(stripslashes($row2['Type'])=='Document'){
		?>
        <div class="pot"  title="click to Open">
        <img class="portrait2" src="images/adobe.png" alt="Document"  onclick="window.open('http://<?php echo $server ?>/q-afya/<?php echo stripslashes($row2['Link']) ?>')" />
      <p><?php echo stripslashes($row2['Name']) ?></p>
        </div> <?php } 
		}
		$stamp =RAND(1,99).date('s').RAND(1,99);
		$pntno=stripslashes($row['pntno']);
		?>
        </div>
            <div class="cleaner_h20"></div> 
            <div id="dok" style="width:auto; height:340px; border:1px solid #ccc; padding:10px; display:none">
            <img style="float:right; width:30px; height:30px; cursor:pointer" src="images/delete.png" title="Hide" onclick="hidedoc();" />
        	
            <div class="cleaner_h10"></div>
            <form method="post" action="upload.php" enctype="multipart/form-data" target="leiframe">
      					<a class="labels">File Name:</a>
        	<input type="text" id="fname" required="required" name="fname" class="in_field" style="height:30px; margin-left:10px; float:left; width:150px"/>
            <div class="cleaner_h10"></div>
             <a class="labels">Type:</a>
            <select class="select" id="type" name="type" style="float:left; padding:5px; margin-left:10px">
            <option value="Image">Image</option>
            <option value="Document">Document</option>
            </select>	
            <div class="cleaner_h10"></div>	
            <a class="labels">Details:</a>
            <textarea name="details" style="width:300px; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; height:120px; border:1px solid #0085b2; float:left; margin-left:10px; border-radius:5px"></textarea>
								
								 <dd class="custuploadblock_js">
								<input style="opacity:0; float:left;" name="image" id="photoupload"  
								class="transfileform_js" type="file">
								</dd>
								<iframe name="leiframe" id="leiframe" class="leiframe" style="float:right">
								</iframe>
                                <input type="hidden" id="pntno" name="pntno" value="<?php echo $pntno ?>"/>
                            	<input type="hidden" id="stamp" name="stamp" value="<?php echo $stamp ?>"/>
								<input type="hidden" id="id" name="id"  value="7"/>
								<div class="cleaner_h20"></div>
     							<input type="submit" value="upload" id="send"  
								style="margin-left:50px; float:left; cursor:pointer; height:35px"class="in_field"/>
								</form>
            
            </div>
            <div class="cleaner_h40" style="border-bottom:2px solid #ccc"></div>
          <div class="cleaner_h10"></div>  
          
           <?php
		   $result =mysqli_query($conn,"select * from accesstbl where AccessCode=113");
			$row=mysqli_fetch_array($result);
			$var=stripslashes($row[$usertype]);
		   
           $result =mysqli_query($conn,"select * from newprescription where PatId='".$pntno."'");
			$num_results = mysqli_num_rows($result);
			if($num_results>0&&$var=='YES'){
			?>
             <h1 style="text-align:center; margin-top:0; font-size:25px">OutPatient Medical Records</h1>
           <p style="margin-left:50px"><strong>No. of Records: </strong><?php echo $num_results ?></p>
          <div style="clear:both; margin-bottom:10px"></div>
         
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333;border-right:1.5px solid #333;">
<div style="width:155px; height:20px;border-right:1.5px solid #333;border-left:1.5px solid #333;  float:left; overflow:hidden">
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Date</p>
</div>

<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">History</p>
</div>
<div style="width:185px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Diagnosis</p>
</div>
<div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Prescription</p>
</div>
</div>

<table id="datatable"  style="width:100%;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; padding:0; " >
<tbody>


 <?php
			
		for ($i=0; $i <$num_results; $i++) {
		$row=mysqli_fetch_array($result);
		$pid=stripslashes($row['PrescId']);
		?>
		<?php
		echo"<tr style=\"width:auto; height:20px;color:#333;cursor:pointer;font-weight:normal;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4&rcptno=".stripslashes($row['PrescId'])."')\">";
		?>
   		<td  style="width:113px;"><?php echo dateprint(stripslashes($row['TransDate'])); ?></td>
        <td  style="width:134px"><?php echo stripslashes($row['History'])?></td>
        <td  style="width:137px"><?php echo stripslashes($row['Diagnosis'])?></td>
         <td  style="width:204px;">
         	
         	<?php

				$resultb =mysqli_query($conn,"select * from pharmrequests where prescid='".$pid."' order by id");
														$num_resultsb = mysqli_num_rows($resultb);	
														for ($x=0; $x <$num_resultsb; $x++) {
															$rowb=mysqli_fetch_array($resultb);
															
				
				echo stripslashes($rowb['prescription']).'<br/>';

					}
         	?>
         </td>
       
    </tr>
<?php } ?>

</tbody>
</table>
 <div style="clear:both; margin-bottom:10px"></div>
   <?php }

    $result =mysqli_query($conn,"select * from inpatients where PatId='".$pntno."'");
			$num_results = mysqli_num_rows($result);
			if($num_results>0&&$var=='YES'){
			?>
             <h1 style="text-align:center; margin-top:0; font-size:25px">Inpatient Medical Records</h1>
           <p style="margin-left:50px"><strong>No. of Records: </strong><?php echo $num_results ?></p>
          <div style="clear:both; margin-bottom:10px"></div>
         
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333;border-right:1.5px solid #333;">
<div style="width:155px; height:20px;border-right:1.5px solid #333;border-left:1.5px solid #333;  float:left; overflow:hidden">
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Date</p>
</div>

<div style="width:180px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Doctor in Charge</p>
</div>

<div>
<p style="text-align:center;font-size:12px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:5 0 0 0px">Admission Notes</p>
</div>
</div>

<table id="datatable"  style="width:100%;text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; padding:0; " >
<tbody>


 <?php
			
		for ($i=0; $i <$num_results; $i++) {
		$row=mysqli_fetch_array($result);
		$pid=stripslashes($row['PrescId']);
		?>
		<?php
		echo"<tr style=\"width:auto; height:20px;color:#333;cursor:pointer;font-weight:normal;  padding:0\" onclick=\"window.open('http://$server/q-afya/report.php?id=4.1&rcptno=".stripslashes($row['PrescId'])."')\">";
		?>
   		<td  style="width:135px;"><?php echo dateprint(stripslashes($row['TransDate'])); ?></td>
        <td  style="width:160px"><?php echo stripslashes($row['Doctor'])?></td>
        <td  style=""><?php echo stripslashes($row['AdmNotes'])?></td>
          </tr>
<?php } ?>

</tbody>
</table>
   <?php }?>
          
        </div>
        <!-- Begin 5th Row -->
      </div>
   
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>

</div>

<?php 
}
function employreport($result,$resulta){
	$row=mysqli_fetch_array($result);
	$rowa=mysqli_fetch_array($resulta);
?>
<!-- Begin Wrapper -->
<div id="container" style="height:1250px;">
<div id="wrapper">

  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="<?php echo stripslashes($row['image']) ?>" alt="Photo" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 style="width:auto; margin-top:30px"><?php echo stripslashes($row['name']); echo' &nbsp'. stripslashes($row['oname']) ?></h1>
            
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
       
        </div>
        <!-- Begin 1st Row -->
        
        <div class="entry">
        <div class="cleaner_h20"></div>
        <div class="detail_l">
        <h>Personal Details</h>
        
        	<ul>
            <li class=""><strong>Emp No: </strong><?php echo stripslashes($row['emp']) ?></li>
             <li class=""><strong>Age: </strong><?php echo stripslashes($row['dob']) ?></li>
              <li class=""><strong>Phone: </strong><?php echo stripslashes($row['phone']) ?></li>
               <li class=""><strong>Address: </strong><?php echo stripslashes($row['address']) ?></li>
              <li class=""><strong>Dept: </strong><?php echo stripslashes($row['dept']) ?></li>
              <li class=""><strong>Position: </strong><?php echo stripslashes($row['pos']) ?></li>
              
            
            </ul>
        </div>
          
          
        <div class="detail_r" style="height:120px">
        <h>Salary Details</h>
        
        	<ul>
            <li class=""><strong>Gross Salary: </strong><?php echo stripslashes($rowa['sal']) ?></li>
             <li class=""><strong>Total Allowances: </strong><?php echo stripslashes($rowa['allow']) ?></li>
             <li class=""><strong>Advance: </strong><?php echo stripslashes($rowa['adva']) ?></li>
             <li class=""><strong>Insurance: </strong><?php echo stripslashes($rowa['ins']) ?></li>
              <li class=""><strong>NHIF: </strong><?php echo stripslashes($rowa['nhif']) ?></li>
               <li class=""><strong>NSSF: </strong><?php echo stripslashes($rowa['nssf']) ?></li>
                <li class=""><strong>Tax: </strong><?php echo stripslashes($rowa['tax']) ?></li>
             <li class=""><strong>Other Deductions: </strong><?php echo stripslashes($rowa['ded']) ?></li>
             <li class=""><strong>Overtime Hours: </strong><?php echo stripslashes($rowa['othrs']) ?></li>
             <li class=""><strong> Overtime Rate: </strong><?php echo stripslashes($rowa['rateot']) ?></li>
             <li class=""><strong>Net Pay: </strong><?php echo stripslashes($rowa['net']) ?></li>
              
            
           
            </ul>
        </div>
        <?php
		if(stripslashes($row['totattendance'])!=0){
        $a=stripslashes($row['attendance']) / stripslashes($row['totattendance']);
		$a=round($a,2)*100;
		$a=$a.'%';
		}else $a='0%';
		?>
        	
          <div class="cleaner_h50"></div>  
          
           <div class="detail_l">
          <h>Medical Details</h>
        
        	<ul>
            <li class=""><strong>Blood Group: </strong><?php echo stripslashes($row['bgroup']) ?></li>
              <li class=""><strong>Known Allergies: </strong><?php echo stripslashes($row['alergy']) ?></li>
              
      	</ul>
          <div class="cleaner_h10"></div>  
        <h>Other Details</h>
     
        	<ul>
            <li class=""><strong>Bank: </strong><?php echo stripslashes($row['bname'])?></li>
              <li class=""><strong>A/C No: </strong><?php echo stripslashes($row['acno'])?></li>
              <li class=""><strong>Attendance Level: </strong><?php echo $a ?></li>
      	</ul>
        </div>
     
         <div class="cleaner_h20"></div>  
        <h style="margin-left:250px"><strong>As of:</strong><?php echo stripslashes($rowa['month']) ?></h>
          
        </div>
        <!-- Begin 5th Row -->
      </div>
   
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>

</div>
</div>

<?php
}

function implement($result,$reg){
$row=mysqli_fetch_array($result);

?>
  	
      
       <div  class="owner">
        <div class="ptopret"></div>
       <div class="paper-top"></div>
       <div class="ptopret"></div>
     
      </div>
       <div class="cleaner"></div>
   
      <div id="paper-mid">
      
=====================================================================================================================================================         
        <div class="entry">
        
          <div class="self">
       
            <h1 style="width:100%">
			<?php 
			$resultx =mysqli_query($conn,"select * from company");
			$rowx=mysqli_fetch_array($resultx);
			echo stripslashes($rowx['CompanyName'])?><br/></h1>
           <h1 style="width:100%">Payroll Report<br/></h1>
			<h1 style="width:100%">Month: <?php echo' &nbsp'. stripslashes($row['month']) ?><br/></h1>
            
            <h1 style="width:100%">Allocation: 
			<script>
             var ex  =( <?php  echo stripslashes($row['amount']) ?>).formatMoney(2, '.', ',');
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
        <div class="entry">
        <div class="cleaner_h20"></div>
       
      								<div id="figure6">
									<div id="figure7" style="width:60px">Emp</div>
									<div id="figure7" style="width:142px">Name</div>
									<div id="figure7" style="width:102px">Sal.</div>
									<div id="figure7" style="width:82px">Allow.</div>
                                    <div id="figure7" style="width:82px">OT hrs.</div>
									<div id="figure7" style="width:82px">Rate.</div>
									<div id="figure7" style="width:82px">Total OT.</div>
									<div id="figure7" style="width:82px">Adva.</div>
									<div id="figure7" style="width:82px">Insu.</div>
									<div id="figure7" style="width:82px">Deds.</div>
                                    <div id="figure7" style="width:82px">Tax.</div>
                                    <div id="figure7" style="width:82px">NSSF.</div>
									<div id="figure7" style="width:82px">NHIF.</div>
									
									<div id="figure7" style="width:104px">Net Pay</div>
									</div>
                             <?php 
							$result =mysqli_query($conn,"select * from payroll where month='".$reg."'");
						$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
								$net=stripslashes($row['net']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['ins']);
								$ded=stripslashes($row['ded']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalnet+=$net;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
							
							if(stripslashes($row['status'])==0){
							echo"<script>
							$('.entry').hide();
										$().customAlert();
									alert('Error!', '<p>Cannot Preview Payroll.Details of ".stripslashes($row['name'])." have not been saved yet!</p>');
									e.preventDefault();
									</script>";	
								exit;	
							}
							echo'<div id="figure8">
									<div id="figure9a" class="figure9" style="width:60px">'.stripslashes($row['emp']).'</div>
									<div id="figure9" style="width:140px">'.stripslashes($row['name']).'</div>';?>
									<div id="figure9" style="width:100px">
									<script>
             						document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));
             						</script>
                                    </div>
                                    <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><?php echo stripslashes($row['othrs']) ?></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['rateot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure9b" class="figure9" style="width:100px"><script>
             						document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));
             						</script></div>
									
                                    
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ins']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ded']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     
                                    
                                   
									</div>
									<div class="cleaner"></div>
                                    <?php }
										?>
                                    <div id="figure6">
									<div id="figure7i" style="width:60px">Total</div>
									<div id="figure7i" style="width:142px"></div>
									<div id="figure7i" style="width:102px"><script>
             						document.writeln(( <?php  echo $totalsal ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure7i" style="width:82px"><?php echo $totalothrs ?></div>
                                    <div id="figure7i" style="width:82px"></div>
                                  <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));
             						</script></div>
									
                                    
									
                                    <div id="figure7i" style="width:104px">
									<script>
             						document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));
             						</script></div>
									</div>
                                    
        
      </div>
   </div>
<?php }

function implement2(){

?>
  	
      
       <div  class="owner">
        <div class="ptopret"></div>
       <div class="paper-top"></div>
       <div class="ptopret"></div>
     
      </div>
       <div class="cleaner"></div>
   
      <div id="paper-mid">
      
=====================================================================================================================================================         
        <div class="entry">
        
          <div class="self">
       
            <h1 style="width:100%">
			<?php 
			$resultx =mysqli_query($conn,"select * from company");
			$rowx=mysqli_fetch_array($resultx);
			echo stripslashes($rowx['CompanyName'])?><br/></h1>
           <h1 style="width:100%">Payroll Report<br/></h1>
			<h1 style="width:100%">Salaries Summary<br/></h1>
            
            
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
       
        </div>
        <!-- Begin 1st Row -->
=====================================================================================================================================================       
        <div class="entry" style="margin-left:30px">
        <div class="cleaner_h20"></div>
       
      								<div id="figure6">
									<div id="figure7" style="width:120px">Month</div>
									<div id="figure7" style="width:132px">Amount</div>
									<div id="figure7" style="width:122px">Sal.</div>
									<div id="figure7" style="width:82px">Allow.</div>
									<div id="figure7" style="width:82px">Adva.</div>
									<div id="figure7" style="width:82px">Insu.</div>
									<div id="figure7" style="width:82px">Deds.</div>
                                    <div id="figure7" style="width:82px">NSSF.</div>
									<div id="figure7" style="width:82px">NHIF.</div>
									<div id="figure7" style="width:82px">Tax.</div>
									<div id="figure7" style="width:82px">OT hrs.</div>
									<div id="figure7" style="width:82px">Rate.</div>
									<div id="figure7" style="width:82px">Total OT.</div>
									</div>
                             <?php 
							$result =mysqli_query($conn,"select * from salregister");
						$totalnet=0;$totalam=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
								$amount=stripslashes($row['amount']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['ins']);
								$ded=stripslashes($row['ded']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalam+=$amount;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
							
							
							echo'<div id="figure8">
									<div id="figure9a" class="figure9" style="width:120px">'.stripslashes($row['month']).'</div>';?>
									<div id="figure9" style="width:130px"><script>
             						document.writeln(( <?php  echo stripslashes($row['amount']) ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure9" style="width:120px">
									<script>
             						document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));
             						</script>
                                    </div>
                                    <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ins']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ded']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                    <div id="figure9" style="width:80px"><?php echo stripslashes($row['othrs']) ?></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['rateot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9b" class="figure9" style="width:78px"><script>
             						document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                   
									</div>
									<div class="cleaner"></div>
                                    <?php }
										?>
                                    <div id="figure6">
									<div id="figure7i" style="width:120px">Total</div>
									<div id="figure7i" style="width:132px">
                                    <script>
             						document.writeln(( <?php  echo $totalam ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:122px"><script>
             						document.writeln(( <?php  echo $totalsal ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                    <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
									<div id="figure7i" style="width:82px"><?php echo $totalothrs ?></div>
                                    <div id="figure7i" style="width:82px"></div>
                                  <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));
             						</script></div>
                                   
									</div>
                                    
        
      </div>
   </div>
<?php }
function implement3($result,$reg){
$row=mysqli_fetch_array($result);

?>
  	
      
       <div  class="owner">
        <div class="ptopret"></div>
       <div class="paper-top"></div>
       <div class="ptopret"></div>
     
      </div>
       <div class="cleaner"></div>
   
      <div id="paper-mid">
      
=====================================================================================================================================================         
        <div class="entry">
        
          <div class="self">
       
            <h1 style="width:100%">
			<?php 
			$resultx =mysqli_query($conn,"select * from company");
			$rowx=mysqli_fetch_array($resultx);
			echo stripslashes($rowx['CompanyName'])?><br/></h1>
           <h1 style="width:100%">Employee Payroll Summary<br/></h1>
			 <h1 style="width:100%">Emp id: <?php  echo $reg ?>
			 
		
		<br/></h1>
			</h1>
            
            
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
       
        </div>
        <!-- Begin 1st Row -->
=====================================================================================================================================================       
        <div class="entry">
        <div class="cleaner_h20"></div>
       
      								<div id="figure6">
									<div id="figure7" style="width:60px">Emp</div>
									<div id="figure7" style="width:142px">Name</div>
									<div id="figure7" style="width:102px">Sal.</div>
									<div id="figure7" style="width:82px">Allow.</div>
									<div id="figure7" style="width:82px">Adva.</div>
									<div id="figure7" style="width:82px">Insu.</div>
									<div id="figure7" style="width:82px">Deds.</div>
                                    <div id="figure7" style="width:82px">NSSF.</div>
									<div id="figure7" style="width:82px">NHIF.</div>
									<div id="figure7" style="width:82px">Tax.</div>
									<div id="figure7" style="width:82px">OT hrs.</div>
									<div id="figure7" style="width:82px">Rate.</div>
									<div id="figure7" style="width:82px">Total OT.</div>
									<div id="figure7" style="width:104px">Net Pay</div>
									</div>
                             <?php 
							$result =mysqli_query($conn,"select * from payroll where emp='".$reg."'");
						$totalnet=0;$totalsal=0;$totalallow=0;$totaladva=0;$totalins=0;$totalded=0;$totalothrs=0;$totalotal=0;$totalnssf=0;$totalnhif=0;$totaltax=0;
						$num_results = mysqli_num_rows($result);
							for ($i=0; $i <$num_results; $i++) {
							$row=mysqli_fetch_array($result);
								$net=stripslashes($row['net']);
								$sal=stripslashes($row['sal']);
								$allow=stripslashes($row['allow']);
								$adva=stripslashes($row['adva']);
								$ins=stripslashes($row['ins']);
								$ded=stripslashes($row['ded']);
								$othrs=stripslashes($row['othrs']);
								$totalot=stripslashes($row['totalot']);
								$nssf=stripslashes($row['nssf']);
								$nhif=stripslashes($row['nhif']);
								$tax=stripslashes($row['tax']);
								$totalnet+=$net;
								$totalsal+=$sal;
								$totalallow+=$allow;
								$totaladva+=$adva;
								$totalins+=$ins;
								$totalded+=$ded;
								$totalothrs+=$othrs;
								$totalotal+=$totalot;
								$totalnssf+=$nssf;
								$totalnhif+=$nhif;
								$totaltax+=$tax;
							
							
							echo'<div id="figure8">
									<div id="figure9a" class="figure9" style="width:60px">'.stripslashes($row['emp']).'</div>
									<div id="figure9" style="width:140px">'.stripslashes($row['month']).'</div>';?>
									<div id="figure9" style="width:100px">
									<script>
             						document.writeln(( <?php  echo stripslashes($row['sal']) ?>).formatMoney(2, '.', ','));
             						</script>
                                    </div>
                                    <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['allow']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['adva']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ins']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['ded']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nssf']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['nhif']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                     <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['tax']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                    <div id="figure9" style="width:80px"><?php echo stripslashes($row['othrs']) ?></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['rateot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                      <div id="figure9" style="width:80px"><script>
             						document.writeln(( <?php  echo stripslashes($row['totalot']) ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure9b" class="figure9" style="width:100px"><script>
             						document.writeln(( <?php  echo stripslashes($row['net']) ?>).formatMoney(2, '.', ','));
             						</script></div>
									
									</div>
									<div class="cleaner"></div>
                                    <?php }
										?>
                                    <div id="figure6">
									<div id="figure7i" style="width:60px">Total</div>
									<div id="figure7i" style="width:142px"></div>
									<div id="figure7i" style="width:102px"><script>
             						document.writeln(( <?php  echo $totalsal ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalallow ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaladva ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalins ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalded ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
                                    <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnssf ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalnhif ?>).formatMoney(2, '.', ','));
             						</script></div>
									<div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totaltax ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    
									<div id="figure7i" style="width:82px"><?php echo $totalothrs ?></div>
                                    <div id="figure7i" style="width:82px"></div>
                                  <div id="figure7i" style="width:82px"><script>
             						document.writeln(( <?php  echo $totalotal ?>).formatMoney(2, '.', ','));
             						</script></div>
                                    <div id="figure7i" style="width:104px">
									<script>
             						document.writeln(( <?php  echo $totalnet ?>).formatMoney(2, '.', ','));
             						</script></div>
									</div>
                                    
        
      </div>
   </div>
<?php }

?>