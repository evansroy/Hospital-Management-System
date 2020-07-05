case 1:
$result =mysql_query("select * from sales where RcptNo='".$rcptno."'");
$row=mysql_fetch_array($result);
$amount=stripslashes($row['AmountPaid']);
$change=stripslashes($row['Balance']);
$cname=stripslashes($row['ClientName']);
$date=stripslashes($row['Date']);
$a=substr($date,0,4);
$b=substr($date,5,2);
$c=substr($date,8,2);
$d=$c.'/'.$b.'/'.$a;
?>
<div style="width:370px;min-height:370px; border:2px solid #333">

<div style="clear:both; margin-bottom:10px"></div>
<img src="<?php echo $logo ?>" style="max-height:105px; margin:0px 10px 0 10px; position:absolute;"/>
<p style="text-align:center;font-size:18px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $comname ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">P.O BOX <?php  echo $Add ?></br>TEL: <?php  echo $tel ?></p>
<div style="clear:both"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">OFFICIAL RECEIPT<br/><strong style="font-size:11px">Date:<?php  echo $d ?>&nbsp; &nbsp; &nbsp; Receipt No: <?php  echo $rcptno ?></strong></p>
<div style="clear:both"></div>

<div style="clear:both"/>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<a style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Item name</a>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<a style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 5px">Qty.</a>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<a style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 20px">Price.</a>
</div>
<div>
<a style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 20px">Total.</a>
</div>
</div>
<?php
$result =mysql_query("select * from sales where RcptNo='".$rcptno."'");
$num_results = mysql_num_rows($result);
$qty=0;$itot=0;$tam=0;$b=0;$c=0;$d=0;
for ($i=0; $i <$num_results; $i++) {
$row=mysql_fetch_array($result);
$qty+=preg_replace('~,~', '', stripslashes($row['Qty']));
$tam+=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
$itot=preg_replace('~,~', '', stripslashes($row['Qty'])) *  preg_replace('~,~', '', stripslashes($row['UnitPrice']));
$c+=preg_replace('~,~', '', stripslashes($row['Vat']));
$d+=preg_replace('~,~', '', stripslashes($row['Discount']));
$b+=$itot;
?>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-weight:normal;font-size:10px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 4px">
<?php  echo stripslashes($row['ItemName']) ?></p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:10px;font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo stripslashes($row['Qty']) ?></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:10px;font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['UnitPrice']) ?>).formatMoney(2, '.', ','));</script></p>
</div>
<div>
<p style="text-align:center;font-size:10px;font-weight:normal; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $itot ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>

<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:0px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Total</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><?php  echo $qty ?></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $b ?>).formatMoney(2, '.', ','));</script></a>
</div>
</div>



<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:0px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Discount</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $d ?>).formatMoney(2, '.', ','));</script></a>
</div>
</div>
<div style="clear:both; margin-bottom:20px"></div>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:1.5px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Total Amount</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $tam ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:0px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Amount Paid</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 20px"></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $amount ?>).formatMoney(2, '.', ','));</script></a>
</div>
</div>
<?php  if(stripslashes($row['Instatus'])==1){?>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:0px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Insurance</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 20px"></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo stripslashes($row['Insamount'])?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<?php } ?>
<div style="width:auto; height:20px; border-bottom:1.5px solid #333;  border-top:0px solid #333">
<div style="width:160px; height:20px;border-right:1.5px solid #333; float:left; overflow:hidden">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 40px">Change</p>
</div>
<div style="width:40px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 20px"></p>
</div>
<div style="width:70px; height:20px;border-right:1.5px solid #333; float:left;">
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"></p>
</div>
<div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px"><script>document.writeln(( <?php  echo $change ?>).formatMoney(2, '.', ','));</script></p>
</div>
</div>
<div style="clear:both; margin-bottom:20px"></div>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">We wish you quick recovery.</p>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Transaction By <?php  echo $username ?>.</p>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">System Developer: Quantal ExaTechnologies</p>
<p style="text-align:center;font-size:11px; font-weight:bold;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;margin:0 0 0 0px">Tel: 0726738023</p>
</div>

<?php 
break;