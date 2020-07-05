<?php include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysql_query("select * from users where name='".$username."'");
$row=mysql_fetch_array($result);
$usertype=stripslashes($row['position']);
$userid=stripslashes($row['userid']);
$fullname=stripslashes($row['fullname']);
$userdep=stripslashes($row['dept']);
include('functions.php'); 
$id=$_GET['id'];
$emp=$_GET['emp'];
$year=$_GET['year'];

$result =mysql_query("select * from company");
$rowx=mysql_fetch_array($result);
$comname=stripslashes($rowx['CompanyName']);
$compin=stripslashes($rowx['Pin']);



$resulta =mysql_query("select * from employee where emp='".$emp."' limit 0,1");
$rowa=mysql_fetch_array($resulta);
$emppin=stripslashes($rowa['pinno']);





}
else{echo"<script>window.location.href = \"index.php\";</script>";}

?>
<HTML>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<META http-equiv="X-UA-Compatible" content="IE=8">
<TITLE>Q-Shule P9A Form</TITLE>
<script src="js/functions.js"></script>
<link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
<STYLE type="text/css">

body {margin-top: 0px;margin-left: 0px;}

#page_1 {position:relative; overflow: hidden;margin: 41px 0px 55px 19px;padding: 0px;border: none;width: 1037px;}

#page_1 #dimg1 {position:absolute;top:0px;left:308px;z-index:-1;width:403px;height:76px;}
#page_1 #dimg1 #img1 {width:403px;height:76px;}




.dclr {clear:both;float:none;height:1px;margin:0px;padding:0px;overflow:hidden;}

.ft0{font: bold 14px 'Tahoma';line-height: 17px;}
.ft1{font: 1px 'Tahoma';line-height: 1px;}
.ft2{font: bold 15px 'Tahoma';line-height: 18px;}
.ft3{font: bold 11px 'Tahoma';line-height: 13px;}
.ft4{font: 11px 'Tahoma';line-height: 13px;}
.ft5{font: 1px 'Tahoma';line-height: 3px;}
.ft6{font: 1px 'Tahoma';line-height: 2px;}
.ft7{font: 1px 'Tahoma';line-height: 10px;}
.ft8{font: 1px 'Tahoma';line-height: 9px;}
.ft9{font: 1px 'Tahoma';line-height: 5px;}
.ft10{font: bold 10px 'Tahoma';line-height: 11px;}
.ft11{font: bold 9px 'Tahoma';line-height: 11px;}
.ft12{font: bold 8px 'Tahoma';line-height: 10px;}
.ft13{font: bold 10px 'Tahoma';line-height: 12px;}
.ft14{font: 1px 'Tahoma';line-height: 8px;}
.ft15{font: bold 10px 'Tahoma';line-height: 8px;}
.ft16{font: 1px 'Tahoma';line-height: 4px;}
.ft17{font: 10px 'Tahoma';line-height: 12px;}
.ft18{font: bold 9px 'Times New Roman';text-decoration: underline;line-height: 12px;}
.ft19{font: 9px 'Tahoma';line-height: 11px;}
.ft20{font: 8px 'Tahoma';line-height: 10px;}
.ft21{font: 1px 'Tahoma';line-height: 7px;}
.ft22{font: bold 9px 'Tahoma';line-height: 8px;}

.p0{text-align: left;padding-left: 13px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p1{text-align: left;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p2{text-align: left;padding-left: 26px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p3{text-align: left;padding-left: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p4{text-align: right;padding-right: 67px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p5{text-align: right;padding-right: 66px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p6{text-align: left;padding-left: 17px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p7{text-align: center;padding-right: 1px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p8{text-align: center;padding-right: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p9{text-align: center;padding-right: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p10{text-align: center;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p11{text-align: center;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p12{text-align: center;padding-right: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p13{text-align: center;padding-right: 20px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p14{text-align: center;padding-right: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p15{text-align: center;padding-left: 9px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p16{text-align: center;padding-right: 25px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p17{text-align: right;padding-right: 25px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p18{text-align: left;padding-left: 5px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p19{text-align: left;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p20{text-align: center;padding-left: 6px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p21{text-align: center;padding-right: 21px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p22{text-align: center;padding-right: 36px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p23{text-align: center;padding-right: 37px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p24{text-align: left;padding-left: 19px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p25{text-align: left;padding-left: 20px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p26{text-align: right;padding-right: 14px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p27{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p28{text-align: left;padding-left: 12px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p29{text-align: left;padding-left: 7px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p30{text-align: left;padding-left: 18px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p31{text-align: left;padding-left: 8px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p32{text-align: right;padding-right: 3px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p33{text-align: left;padding-left: 2px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p34{text-align: left;padding-left: 11px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p35{text-align: right;padding-right: 4px;margin-top: 0px;margin-bottom: 0px;white-space: nowrap;}
.p36{text-align: left;padding-left: 15px;margin-top: 0px;margin-bottom: 0px;}
.p37{text-align: left;padding-left: 543px;margin-top: 0px;margin-bottom: 0px;}

.td0{padding: 0px;margin: 0px;width: 73px;vertical-align: bottom;}
.td1{padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td2{padding: 0px;margin: 0px;width: 62px;vertical-align: bottom;}
.td3{padding: 0px;margin: 0px;width: 15px;vertical-align: bottom;}
.td4{padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
.td5{padding: 0px;margin: 0px;width: 323px;vertical-align: bottom;}
.td6{padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td7{padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td8{padding: 0px;margin: 0px;width: 22px;vertical-align: bottom;}
.td9{padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td10{padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td11{padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;}
.td12{padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
.td13{padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td14{padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td15{padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td16{padding: 0px;margin: 0px;width: 10px;vertical-align: bottom;}
.td17{padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td18{padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
.td19{padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td20{padding: 0px;margin: 0px;width: 318px;vertical-align: bottom;}
.td21{padding: 0px;margin: 0px;width: 301px;vertical-align: bottom;}
.td22{padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td23{padding: 0px;margin: 0px;width: 54px;vertical-align: bottom;}
.td24{padding: 0px;margin: 0px;width: 158px;vertical-align: bottom;}
.td25{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 28px;vertical-align: bottom;}
.td26{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 22px;vertical-align: bottom;}
.td27{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td28{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 13px;vertical-align: bottom;}
.td29{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 15px;vertical-align: bottom;}
.td30{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 20px;vertical-align: bottom;}
.td31{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
.td32{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td33{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 8px;vertical-align: bottom;}
.td34{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 18px;vertical-align: bottom;}
.td35{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 10px;vertical-align: bottom;}
.td36{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 16px;vertical-align: bottom;}
.td37{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td38{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td39{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td40{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td41{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
.td42{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
.td43{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td44{padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td45{padding: 0px;margin: 0px;width: 80px;vertical-align: bottom;}
.td46{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 27px;vertical-align: bottom;}
.td47{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td48{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 14px;vertical-align: bottom;}
.td49{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 6px;vertical-align: bottom;}
.td50{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 26px;vertical-align: bottom;}
.td51{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 7px;vertical-align: bottom;}
.td52{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 9px;vertical-align: bottom;}
.td53{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 23px;vertical-align: bottom;}
.td54{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 50px;vertical-align: bottom;}
.td55{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 89px;vertical-align: bottom;}
.td56{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 62px;vertical-align: bottom;}
.td57{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 69px;vertical-align: bottom;}
.td58{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 5px;vertical-align: bottom;}
.td59{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td60{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 54px;vertical-align: bottom;}
.td61{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td62{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 80px;vertical-align: bottom;}
.td63{border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td64{border-left: #000000 1px solid;border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 71px;vertical-align: bottom;}
.td65{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 88px;vertical-align: bottom;}
.td66{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td67{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td68{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 159px;vertical-align: bottom;}
.td69{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 79px;vertical-align: bottom;}
.td70{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 66px;vertical-align: bottom;}
.td71{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 62px;vertical-align: bottom;}
.td72{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 74px;vertical-align: bottom;}
.td73{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 73px;vertical-align: bottom;}
.td74{border-left: #000000 1px solid;padding: 0px;margin: 0px;width: 22px;vertical-align: bottom;}
.td75{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td76{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td77{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 21px;vertical-align: bottom;}
.td78{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td79{padding: 0px;margin: 0px;width: 55px;vertical-align: bottom;}
.td80{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td81{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 45px;vertical-align: bottom;}
.td82{border-left: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 22px;vertical-align: bottom;}
.td83{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 49px;vertical-align: bottom;}
.td84{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 88px;vertical-align: bottom;}
.td85{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 61px;vertical-align: bottom;}
.td86{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 4px;vertical-align: bottom;}
.td87{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 52px;vertical-align: bottom;}
.td88{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 79px;vertical-align: bottom;}
.td89{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 21px;vertical-align: bottom;}
.td90{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 19px;vertical-align: bottom;}
.td91{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 17px;vertical-align: bottom;}
.td92{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 47px;vertical-align: bottom;}
.td93{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 46px;vertical-align: bottom;}
.td94{border-right: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td95{border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 53px;vertical-align: bottom;}
.td96{border-left: #000000 1px solid;border-right: #000000 1px solid;border-bottom: #000000 1px solid;padding: 0px;margin: 0px;width: 71px;vertical-align: bottom;}
.td97{padding: 0px;margin: 0px;width: 224px;vertical-align: bottom;}
.td98{padding: 0px;margin: 0px;width: 297px;vertical-align: bottom;}
.td99{padding: 0px;margin: 0px;width: 370px;vertical-align: bottom;}
.td100{padding: 0px;margin: 0px;width: 389px;vertical-align: bottom;}
.td101{padding: 0px;margin: 0px;width: 87px;vertical-align: bottom;}
.td102{padding: 0px;margin: 0px;width: 253px;vertical-align: bottom;}
.td103{padding: 0px;margin: 0px;width: 228px;vertical-align: bottom;}
.td104{padding: 0px;margin: 0px;width: 314px;vertical-align: bottom;}
.td105{padding: 0px;margin: 0px;width: 459px;vertical-align: bottom;}

.tr0{height: 22px;}
.tr1{height: 14px;}
.tr2{height: 3px;}
.tr3{height: 2px;}
.tr4{height: 11px;}
.tr5{height: 20px;}
.tr6{height: 10px;}
.tr7{height: 9px;}
.tr8{height: 15px;}
.tr9{height: 5px;}
.tr10{height: 16px;}
.tr11{height: 12px;}
.tr12{height: 13px;}
.tr13{height: 25px;}
.tr14{height: 26px;}
.tr15{height: 23px;}
.tr16{height: 8px;}
.tr17{height: 4px;}
.tr18{height: 27px;}
.tr19{height: 28px;}
.tr20{height: 38px;}
.tr21{height: 17px;}
.tr22{height: 7px;}

.t0{width: 1016px;margin-top: 72px;font: bold 10px 'Tahoma';}

</STYLE>
</HEAD>

<BODY>
<DIV id="page_1">
<DIV id="dimg1">
<IMG src="images/kralogo1.jpg" id="img1">
</DIV>


<DIV class="dclr"></DIV>
<TABLE cellpadding=0 cellspacing=0 class="t0">
<TR>
	<TD colspan=2 class="tr0 td0"><P class="p0 ft0">P9A</P></TD>
	<TD class="tr0 td1"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=8 class="tr0 td5"><P class="p1 ft2">DOMESTIC TAXES DEPARTMENT</P></TD>
	<TD class="tr0 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td8"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td13"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr1 td17"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td18"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td1"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=7 class="tr1 td20"><P class="p2 ft3" style="">TAX DEDUCTION CARD YEAR <a style="border-bottom:1px #000 dotted"><?php echo $year ?></a></P></TD>
	<TD class="tr1 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td8"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td13"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=6 rowspan=2 class="tr1 td21"><P class="p3 ft4">Employers Name <a style="border-bottom:1px #000 dotted"><?php echo $comname ?></a></P></TD>
	<TD class="tr2 td4"><P class="p1 ft5">&nbsp;</P></TD>
	<TD class="tr2 td19"><P class="p1 ft5">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p1 ft5">&nbsp;</P></TD>
	<TD class="tr2 td23"><P class="p1 ft5">&nbsp;</P></TD>
	<TD class="tr2 td22"><P class="p1 ft5">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr1 td24"><P class="p4 ft4">Employer’s PIN</P></TD>
	<TD class="tr2 td6"><P class="p1 ft5">&nbsp;</P></TD>
	<TD class="tr3 td25"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td26"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td27"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td28"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td29"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td25"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td30"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td31"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td25"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td32"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td30"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td33"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td25"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td25"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td34"><P class="p1 ft6">&nbsp;</P></TD>
	<TD class="tr3 td35"><P class="p1 ft6">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr4 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td36"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td37"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,0,1) ?></p></TD>
	<TD class="tr4 td8"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,1,1) ?></p></TD>
	<TD class="tr4 td38"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td10"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0;margin-right:-7px"><?php echo substr($compin,2,1) ?></p></TD>
	<TD class="tr4 td39"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td37"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,3,1) ?></p></TD>
	<TD class="tr4 td11"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,4,1) ?></p></TD>
	<TD class="tr4 td40"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td37"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,5,1) ?></p></TD>
	<TD class="tr4 td41"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,6,1) ?></p></TD>
	<TD class="tr4 td11"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,7,1) ?></p></TD>
	<TD class="tr4 td42"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td37"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,8,1) ?></p></TD>
	<TD class="tr4 td37"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,9,1) ?></p></TD>
	<TD class="tr4 td15"><p style="font-size:12px;text-align:center;margin-bottom:-7px;padding:0"><?php echo substr($compin,10,1) ?></p></TD>
	<TD class="tr4 td43"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=6 rowspan=2 class="tr5 td21"><P class="p3 ft4">Employee’s Main Name <a style="border-bottom:1px #000 dotted"><?php echo stripslashes($rowa['lname']) ?></a></P></TD>
	<TD class="tr4 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td16"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td45"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td36"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr6 td46"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td26"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td47"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td28"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td48"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td46"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td30"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td49"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td46"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td50"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td30"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td51"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td46"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td46"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td34"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td52"><P class="p1 ft7">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr7 td4"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td19"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td22"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td23"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td22"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td44"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td16"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td45"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td12"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td6"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td8"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td9"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td10"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td3"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td11"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td12"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td13"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td11"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td14"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td7"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td15"><P class="p1 ft8">&nbsp;</P></TD>
	<TD class="tr7 td16"><P class="p1 ft8">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=6 rowspan=2 class="tr5 td21"><P class="p3 ft4">Employee’s Other Names <a style="border-bottom:1px #000 dotted"><?php echo stripslashes($rowa['fname']).' '.stripslashes($rowa['mname']) ?></a></P></TD>
	<TD class="tr8 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr5 td24"><P class="p5 ft4">Employee’s PIN</P></TD>
	<TD class="tr8 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td26"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td27"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td28"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td32"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td30"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td33"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td34"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr1 td35"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td4"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td19"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td22"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td23"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td22"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td36"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td37"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td8"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td38"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td10"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td39"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td37"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td11"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td40"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td37"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td41"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td11"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td42"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td37"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td37"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td15"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td43"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr10 td0"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td1"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td16"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td45"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td36"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td46"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,0,1) ?></p></TD>
	<TD class="tr8 td26"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,1,1) ?></p></TD>
	<TD class="tr8 td47"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td28"><p style="font-size:12px;text-align:center;margin-right:-5px;margin-top:-5px"><?php echo substr($emppin,2,1) ?></p></TD>
	<TD class="tr8 td48"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td46"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,3,1) ?></p></TD>
	<TD class="tr8 td30"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,4,1) ?></p></TD>
	<TD class="tr8 td49"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td46"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,5,1) ?></p></TD>
	<TD class="tr8 td50"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,6,1) ?></p></TD>
	<TD class="tr8 td30"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,7,1) ?></p></TD>
	<TD class="tr8 td51"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr8 td46"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,8,1) ?></p></TD>
	<TD class="tr8 td46"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,9,1) ?></p></TD>
	<TD class="tr8 td34"><p style="font-size:12px;text-align:center;margin-top:-5px"><?php echo substr($emppin,10,1) ?></p></TD>
	<TD class="tr8 td52"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td53"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td54"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td55"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td56"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td56"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td57"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td58"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td59"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td60"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td59"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td61"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td35"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td62"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td63"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td26"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td27"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td28"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td30"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td32"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td30"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td33"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td34"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 class="tr4 td64"><P class="p6 ft10">MONTH</P></TD>
	<TD class="tr4 td65"><P class="p7 ft10">Basic Salary</P></TD>
	<TD class="tr4 td66"><P class="p8 ft10">Benefits</P></TD>
	<TD class="tr4 td66"><P class="p7 ft10">Value of</P></TD>
	<TD class="tr4 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td4"><P class="p9 ft10">Total Gross</P></TD>
	<TD class="tr4 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td68"><P class="p7 ft10">Defined Contribution</P></TD>
	<TD class="tr4 td44"><P class="p10 ft11">Owner-</P></TD>
	<TD class="tr4 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td69"><P class="p11 ft10">Retirement</P></TD>
	<TD class="tr4 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td70"><P class="p12 ft10">Chargeable</P></TD>
	<TD class="tr4 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr4 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td71"><P class="p13 ft12">Tax</P></TD>
	<TD class="tr4 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td72"><P class="p14 ft10">Personal</P></TD>
	<TD class="tr4 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr4 td73"><P class="p1 ft10">PAYE Tax (J-</P></TD>
	<TD class="tr4 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td65"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td66"><P class="p7 ft13">– Non-</P></TD>
	<TD class="tr11 td66"><P class="p7 ft12">Quarters</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p9 ft13">Pay</P></TD>
	<TD class="tr11 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td68"><P class="p7 ft13">Retirement Scheme</P></TD>
	<TD class="tr11 td44"><P class="p15 ft13">Occupied</P></TD>
	<TD class="tr11 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td69"><P class="p7 ft13">Contribution</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td75"><P class="p16 ft12">Pay</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td71"><P class="p13 ft13">Charged</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td72"><P class="p12 ft13">Relief</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td73"><P class="p12 ft13">K)</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td65"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td66"><P class="p7 ft13">Cash</P></TD>
	<TD class="tr11 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td76"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p10 ft13">Interest</P></TD>
	<TD class="tr11 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td69"><P class="p7 ft11">& Owner</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td77"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td78"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td79"><P class="p17 ft13">+</P></TD>
	<TD class="tr11 td78"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td80"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr12 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td65"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td76"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td69"><P class="p7 ft13">Occupied</P></TD>
	<TD class="tr12 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td77"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td78"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr12 td72"><P class="p1 ft13">Insurance</P></TD>
	<TD class="tr12 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr12 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr13 td81"><P class="p18 ft13">Kshs.</P></TD>
	<TD class="tr12 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td65"><P class="p7 ft13">Kshs.</P></TD>
	<TD class="tr11 td66"><P class="p18 ft13">Kshs.</P></TD>
	<TD class="tr11 td66"><P class="p19 ft13">Kshs.</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p9 ft13">Kshs.</P></TD>
	<TD class="tr11 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td76"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td69"><P class="p11 ft13">Interest</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td77"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td78"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td72"><P class="p12 ft13">Relief</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td65"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p8 ft13">Kshs.</P></TD>
	<TD class="tr11 td76"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p10 ft13">Kshs.</P></TD>
	<TD class="tr11 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td69"><P class="p20 ft13">Kshs.</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td75"><P class="p1 ft13">Kshs.</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td71"><P class="p21 ft13">Kshs.</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=3 class="tr11 td72"><P class="p12 ft13">Kshs.</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td80"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr13 td82"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td83"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td84"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td85"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td85"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td57"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td86"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td59"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td60"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td87"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td61"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td52"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td88"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td63"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td89"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td27"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td28"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td32"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td33"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr13 td91"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td65"><P class="p7 ft12">A</P></TD>
	<TD class="tr11 td66"><P class="p8 ft13">B</P></TD>
	<TD class="tr11 td66"><P class="p7 ft12">C</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p9 ft11">D</P></TD>
	<TD class="tr11 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p8 ft13">E</P></TD>
	<TD class="tr11 td76"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p10 ft12">F</P></TD>
	<TD class="tr11 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td69"><P class="p7 ft13">G</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td75"><P class="p16 ft13">H</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td92"><P class="p22 ft13">J</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td93"><P class="p23 ft13">K</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=2 class="tr11 td81"><P class="p23 ft13">L</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr15 td74"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td75"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td65"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td66"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td67"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td59"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td60"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td87"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td44"><P class="p10 ft13">Amount of</P></TD>
	<TD class="tr15 td43"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td69"><P class="p11 ft13">The lowest</P></TD>
	<TD class="tr0 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td63"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td89"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td27"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td28"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td32"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td33"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr0 td91"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr15 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td74"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td75"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td65"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td66"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td66"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td3"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td4"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td67"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td76"><P class="p24 ft15">E1</P></TD>
	<TD class="tr16 td94"><P class="p25 ft15">E2</P></TD>
	<TD class="tr16 td76"><P class="p24 ft15">E3</P></TD>
	<TD rowspan=2 class="tr11 td44"><P class="p10 ft13">Interest</P></TD>
	<TD class="tr16 td43"><P class="p1 ft14">&nbsp;</P></TD>
	<TD rowspan=2 class="tr11 td69"><P class="p7 ft13">of E added to</P></TD>
	<TD class="tr16 td12"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td6"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td77"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td9"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td10"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td3"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td78"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td12"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=3 class="tr16 td72"><P class="p25 ft15">Total</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td80"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr17 td74"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td75"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td65"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td66"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td66"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td3"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td4"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td67"><P class="p1 ft16">&nbsp;</P></TD>
	<TD rowspan=2 class="tr11 td76"><P class="p26 ft13">30%</P></TD>
	<TD class="tr17 td94"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td76"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td43"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td12"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td6"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td7"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td77"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td9"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td10"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td3"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td7"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td78"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td12"><P class="p1 ft16">&nbsp;</P></TD>
	<TD colspan=3 rowspan=2 class="tr11 td72"><P class="p12 ft13">Kshs.</P></TD>
	<TD class="tr17 td14"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td7"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td7"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td80"><P class="p1 ft16">&nbsp;</P></TD>
	<TD class="tr17 td16"><P class="p1 ft16">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td74"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td75"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td65"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td66"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td66"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td3"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td4"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td67"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td94"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td76"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td44"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td43"><P class="p1 ft14">&nbsp;</P></TD>
	<TD rowspan=2 class="tr12 td69"><P class="p7 ft13">F</P></TD>
	<TD class="tr16 td12"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td6"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td77"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td9"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td10"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td3"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td78"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td12"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td80"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td74"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td75"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td65"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td66"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td66"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td3"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td4"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td67"><P class="p1 ft9">&nbsp;</P></TD>
	<TD rowspan=2 class="tr12 td87"><P class="p27 ft13">of A</P></TD>
	<TD rowspan=2 class="tr12 td95"><P class="p7 ft13">Actual</P></TD>
	<TD rowspan=2 class="tr12 td87"><P class="p28 ft13">Fixed</P></TD>
	<TD class="tr9 td44"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td43"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td12"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td6"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td77"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td9"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td10"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td3"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td78"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td12"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td13"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td78"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td14"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td80"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td16"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td82"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td83"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td84"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td85"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td85"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td29"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td57"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td86"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td61"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td52"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td88"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td31"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td63"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td25"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td89"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td27"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td28"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td29"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td25"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td90"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td31"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td25"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td32"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td90"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td33"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td25"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td25"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td91"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr7 td16"><P class="p1 ft8">&nbsp;</P></TD>
</TR>

<?php
$tota=$totb=$totc=$totd=$tote1=$tote2=$tote3=$totf=$totg=$toth=$totj=$totk=$totl=0;
$resultb =mysql_query("select * from payroll where emp='".$emp."' and month like '%".$year."%' order by month asc");
$num_resultsb = mysql_num_rows($resultb);	
for ($i=0; $i <$num_resultsb; $i++) {
	$rowb=mysql_fetch_array($resultb);;
	$mon=substr(stripslashes($rowb['month']),0,2);
	$a=stripslashes($rowb['sal']) ;$tota+=$a;
	$b=0;$totb+=$b;
	$c=0;$totc+=$c;
	$d=$a+$b+$c;$totd+=$d;
	$e1=0.3*stripslashes($rowb['sal']) ;
	$tote1+=$e1;
	
	if ($emp == 2 || $emp == 3 || $emp == 26) {
		$k=0;
		$e2=0;
	} else {
		$k=1162;
		$e2=200;
	}
	$tote2+=$e2;
	$e3=20000;
	$tote3+=$e3;
	$f=0;$totf+=$f;
	$g=0;$totg+=$g;
	$h=$d-$e2;$toth+=$h;
	
	
	
	$totk+=$k;
	$l=stripslashes($rowb['tax']) ;$totl+=$l;
	$j=$l+$k;$totj+=$j;
		switch($mon){
			case '01':
			$month='January';
			break;
			case '02':
			$month='February';
			break;
			case '03':
			$month='March';
			break;
			case '04':
			$month='April';
			break;
			case '05':
			$month='May';
			break;
			case '06':
			$month='June';
			break;
			case '07':
			$month='July';
			break;
			case '08':
			$month='August';
			break;
			case '09':
			$month='September';
			break;
			case '10':
			$month='October';
			break;
			case '11':
			$month='November';
			break;
			case '12':
			$month='December';
			break;
		}
				
			?>
				<TR>
				<TD colspan=2 class="tr12 td96"><P class="p29 ft4"><?php  echo $month ?></P></TD>
				<TD class="tr12 td84"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $a ?></p></TD>
				<TD class="tr12 td85"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $b ?></p></TD>
				<TD class="tr12 td85"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $c ?></p></TD>
				<TD class="tr12 td29"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td57"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $d ?></p></TD>
				<TD class="tr12 td86"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td87"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $e1 ?></p></TD>
				<TD class="tr12 td95"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $e2 ?></p></TD>
				<TD class="tr12 td87"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $e3 ?></p></TD>
				<TD class="tr12 td61"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $f ?></p></TD>
				<TD class="tr12 td52"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td88"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $g ?></p></TD>
				<TD class="tr12 td31"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td63"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $h ?></p></TD>
				<TD class="tr12 td89"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td27"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td28"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td29"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $j ?></p></TD>
				<TD class="tr12 td90"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td31"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td25"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td32"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $k ?></p></TD>
				<TD class="tr12 td90"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td33"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td25"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr12 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $l ?></p></TD>
				<TD class="tr12 td91"><P class="p1 ft1">&nbsp;</P></TD>
				<TD class="tr1 td16"><P class="p1 ft1">&nbsp;</P></TD>
				</TR>
		<?php
		
}
?>

<TR>
	<TD colspan=2 class="tr18 td96"><P class="p29 ft3">TOTALS</P></TD>
	<TD class="tr18 td84"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $tota ?></p></TD>
	<TD class="tr18 td85"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totb ?></p></TD>
	<TD class="tr18 td85"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totc ?></p></TD>
	<TD class="tr18 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td57"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totd ?></p></TD>
	<TD class="tr18 td86"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td87"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $tote1 ?></p></TD>
	<TD class="tr18 td95"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $tote2 ?></p></TD>
	<TD class="tr18 td87"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $tote3 ?></p></TD>
	<TD class="tr18 td61"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totf ?></p></TD>
	<TD class="tr18 td52"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td88"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totg ?></p></TD>
	<TD class="tr18 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td63"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $toth ?></p></TD>
	<TD class="tr18 td89"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td27"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td28"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td29"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totj ?></p></TD>
	<TD class="tr18 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td31"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td32"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totk ?></p></TD>
	<TD class="tr18 td90"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td33"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td25"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr18 td25"><p style="font-size:9px;text-align:center;margin:0;padding:0"><?php  echo $totl ?></p></TD>
	<TD class="tr18 td91"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr19 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=4 rowspan=2 class="tr20 td97"><P class="p3 ft17">To be completed by Employer at end of year</P></TD>
	<TD class="tr14 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=10 class="tr14 td98"><P class="p30 ft3">TOTAL TAX (COL. L) Kshs.  <a style="border-bottom:1px #000 dotted"><?php echo $totl ?></a></P></TD>
	<TD class="tr14 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td13"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr14 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr11 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td45"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td8"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td13"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=7 class="tr11 td99"><P class="p3 ft13">TOTAL CHARGEABLE PAY (COL. H) <SPAN class="ft17">Ksh. </SPAN> <a style="border-bottom:1px #000 dotted"><?php echo $toth ?></a></P></TD>
	<TD class="tr11 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td44"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td45"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td6"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td8"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td9"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td10"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td12"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td13"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td11"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr11 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD colspan=2 rowspan=2 class="tr14 td0"><P class="p28 ft18">IMPORTANT</P></TD>
	<TD class="tr10 td1"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td2"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td3"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td4"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td19"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td23"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td22"><P class="p1 ft1">&nbsp;</P></TD>
	<TD colspan=16 class="tr10 td100"><P class="p31 ft19"><SPAN class="ft17">(</SPAN>b) Attach (i) Photostat copy of interest certificate and statement of account from the</P></TD>
	<TD class="tr10 td14"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td7"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td15"><P class="p1 ft1">&nbsp;</P></TD>
	<TD class="tr10 td16"><P class="p1 ft1">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr6 td1"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td2"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td2"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td3"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td4"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td19"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td22"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td23"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td22"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td44"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td16"><P class="p1 ft7">&nbsp;</P></TD>
	<TD colspan=2 rowspan=2 class="tr21 td101"><P class="p11 ft20">Financial Institution.</P></TD>
	<TD class="tr6 td6"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td8"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td9"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td10"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td3"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td11"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td12"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td13"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td11"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td14"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td7"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td15"><P class="p1 ft7">&nbsp;</P></TD>
	<TD class="tr6 td16"><P class="p1 ft7">&nbsp;</P></TD>
</TR>
<TR>
	<TD rowspan=2 class="tr8 td17"><P class="p32 ft19">1.</P></TD>
	<TD rowspan=2 class="tr8 td18"><P class="p33 ft19">Use P9A</P></TD>
	<TD colspan=5 rowspan=2 class="tr8 td98"><P class="p1 ft19">(a) For all liable employees and where director/employee received</P></TD>
	<TD class="tr22 td19"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td22"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td23"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td22"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td44"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td16"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td6"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td7"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td8"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td9"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td10"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td3"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td7"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td11"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td12"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td7"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td13"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td11"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td14"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td7"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td7"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td15"><P class="p1 ft21">&nbsp;</P></TD>
	<TD class="tr22 td16"><P class="p1 ft21">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td19"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td23"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td44"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=12 rowspan=2 class="tr10 td102"><P class="p1 ft19">(ii) The DECLARATION duly signed by the employee.</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td17"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td18"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=4 rowspan=2 class="tr10 td103"><P class="p34 ft19">Benefits in addition to cash emoluments.</P></TD>
	<TD class="tr16 td4"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td19"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td23"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td44"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td17"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td18"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td4"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td19"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td23"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=13 rowspan=2 class="tr10 td104"><P class="p31 ft12">NAMES OF FINANCIAL INSTITUTION ADVANCING MORTGAGE LOAN</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td17"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td18"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=5 rowspan=2 class="tr10 td98"><P class="p1 ft20">(b) Where an employee is eligible to deduction on owner occupier interest.</P></TD>
	<TD class="tr16 td19"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td23"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td17"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td18"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td19"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td23"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=13 rowspan=2 class="tr10 td104"><P class="p35 ft20">_______________________________________________________________</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD rowspan=2 class="tr10 td17"><P class="p32 ft19">2.</P></TD>
	<TD colspan=9 rowspan=2 class="tr10 td105"><P class="p33 ft19">(a) Allowable interest in respect of any month must not exceed Kshs. 12,500/= or Kshs. 150,000 per year.</P></TD>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td13"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td11"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr16 td22"><P class="p1 ft14">&nbsp;</P></TD>
	<TD colspan=16 rowspan=2 class="tr12 td100"><P class="p31 ft11">L R NO. OF OWNER OCCUPIED PROPERTY:……………………………………………….</P></TD>
	<TD class="tr16 td14"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td7"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td15"><P class="p1 ft14">&nbsp;</P></TD>
	<TD class="tr16 td16"><P class="p1 ft14">&nbsp;</P></TD>
</TR>
<TR>
	<TD class="tr9 td17"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td18"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td1"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td2"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td2"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td3"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td4"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td19"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td22"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td23"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td22"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td14"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td7"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td15"><P class="p1 ft9">&nbsp;</P></TD>
	<TD class="tr9 td16"><P class="p1 ft9">&nbsp;</P></TD>
</TR>
</TABLE>
<P class="p36 ft22">(See back of this card for further information required by the Department).</P>
<P class="p37 ft11">DATE OF OCCUPATION OF HOUSE:…………………………………………………………</P>
</DIV>
</BODY>
</HTML>
