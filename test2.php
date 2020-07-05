<?php include('db_fns.php');
$amount=6400;
$pntno=73;
$date=date('Y/m/d');
$claimdate=date('Y-m-d');
$claimtime=date('H:i:s');
$stamp=date('Ymd');

//START OF VARIABLES

$Group_Practice_Number='001';
$Group_Practice_Name='STRATUS MEDICAL IMAGING SOLUTIONS';
$Pre_Authorization_Number=12;
$Pre_Authorization_Amount=0;
$Dependant='Y';
$Discharge_Notes='';
$Role='DP';
$Stage='P';
$Code_Type='ICD';
$Code='';
$Code_Set='';
$Reason='';
//END OF VARIABLES 
$result =mysql_query("select * from patients where pntno='".$pntno."' limit 0,1");
$row=mysql_fetch_array($result);
$patname=stripslashes($row['name']).' '.stripslashes($row['oname']).' '.stripslashes($row['lname']);
$insid=stripslashes($row['insid']);	
$insurer=stripslashes($row['insurer']);		
$cardno=stripslashes($row['cardno']);
$paytype=stripslashes($row['paytype']);
$benamount=stripslashes($row['benamount']);
$exid=stripslashes($row['exid']);
$forwardid=stripslashes($row['forwardid']);

$First_Name=stripslashes($row['name']);
$Middle_Name=stripslashes($row['oname']);
$Surname=stripslashes($row['lname']);
$dob=stripslashes($row['dob']);
$Date_Of_Birth=substr($dob,6,4).'-'.substr($dob,3,2).'-'.substr($dob,0,2);
$g=stripslashes($row['gender']);
if($g=='male'){$Gender='M';}else{$Gender='F';}

 mysql_select_db('smartlink',$db);

$result =mysql_query("select * from forwardedcarddata where id='".$forwardid."' limit 0,1");
$row=mysql_fetch_array($result);
$Benefit_Nr=stripslashes($row['Benefit_Nr']);
$PaymentType1=stripslashes($row['PaymentType1']);
$PaymentAmount1=stripslashes($row['PaymentAmount1']);
$Receipt=stripslashes($row['Receipt']);
$PaymentType2=stripslashes($row['PaymentType2']);
$NHIF_Member_Nr=stripslashes($row['NHIF_Member_Nr']);
$NHIF_Contributor_Nr=stripslashes($row['NHIF_Contributor_Nr']);
$NHIF_Employer_Code=stripslashes($row['NHIF_Employer_Code']);
$NHIF_Site_Nr=stripslashes($row['NHIF_Site_Nr']);
$NHIF_Patient_Relation=stripslashes($row['NHIF_Patient_Relation']);
$Diagnosis_Code=stripslashes($row['Diagnosis_Code']);
$Admit_Date=stripslashes($row['Admit_Date']);
$Discharge_Date=stripslashes($row['Discharge_Date']);
$Days_Used=stripslashes($row['Days_Used']);
$NHIF_Amount=stripslashes($row['Amount']);
$Membership_Number=stripslashes($row['medicalaid_number']);
$Scheme_Code=stripslashes($row['medicalaid_code']);
$Scheme_Plan=stripslashes($row['medicalaid_plan']);

 mysql_select_db('stratus',$db);

//get receipt no
$question =mysql_query("SELECT * FROM customerdebts where DrCr='dr' order by TransNo desc limit 0,1");
$ans=mysql_fetch_array($question);
$rcptno=stripslashes($ans['InvoiceNo'])+1;

$no_of_services=0;
foreach ($_SESSION['consinvoice'] as $i => $val) {
$result =mysql_query("SELECT * FROM sales WHERE RcptNo='".$val."' and Status!=0");
$num_results = mysql_num_rows($result);
$no_of_services+=$num_results;
}



$xml          = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
$root_element = "Claim"; //fruits
$xml         .= "<Claim>";
$xml         .= "<ClaimHeader>";
$xml         .= "<Claim_Number>".$rcptno."</Claim_Number>";
$xml         .= "<Claim_Date>".$claimdate."</Claim_Date>";
$xml         .= "<Claim_Time>".$claimtime."</Claim_Time>";
$xml         .= "<Pool_Number>".$Benefit_Nr."</Pool_Number>";
$xml         .= "<Total_Services>".$no_of_services."</Total_Services>";
$xml         .= "<Gross_Amount>".$amount."</Gross_Amount>";
$xml         .= "<Provider>";
$xml         .= "<Role>SP</Role>";
$xml         .= "<Country_Code>KEN</Country_Code>";
$xml         .= "<Group_Practice_Number>".$Group_Practice_Number."</Group_Practice_Number>";
$xml         .= "<Group_Practice_Name>".$Group_Practice_Name."</Group_Practice_Name>";
$xml         .= "</Provider>";
$xml         .= "<Authorization>";
$xml         .= "<Pre_Authorization_Number>".$Pre_Authorization_Number."</Pre_Authorization_Number>";
$xml         .= "<Pre_Authorization_Amount>".$Pre_Authorization_Amount."</Pre_Authorization_Amount>";
$xml         .= "</Authorization>";
$xml         .= "<Payment_Modifiers>";
$xml         .= "<Payment_Modifier>";
$xml         .= "<Type>".$PaymentType1."</Type>";
$xml         .= "<Amount>".$PaymentAmount1."</Amount>";
$xml         .= "<Receipt>".$Receipt."</Receipt>";
$xml         .= "</Payment_Modifier>";
$xml         .= "<Payment_Modifier>";
$xml         .= "<Type>".$PaymentType2."</Type>";
$xml         .= "<NHIF_Member_Nr>".$NHIF_Member_Nr."</NHIF_Member_Nr>";
$xml         .= "<NHIF_Contributor_Nr>".$NHIF_Contributor_Nr."</NHIF_Contributor_Nr>";
$xml         .= "<NHIF_Employer_Code>".$NHIF_Employer_Code."</NHIF_Employer_Code>";
$xml         .= "<NHIF_Site_Nr>".$NHIF_Site_Nr."</NHIF_Site_Nr>";
$xml         .= "<NHIF_Patient_Relation>".$NHIF_Patient_Relation."</NHIF_Patient_Relation>";
$xml         .= "<Diagnosis_Code>".$Diagnosis_Code."</Diagnosis_Code>";
$xml         .= "<Admit_Date>".$Admit_Date."</Admit_Date>";
$xml         .= "<Discharge_Date>".$Discharge_Date."</Discharge_Date>";
$xml         .= "<Days_Used>".$Days_Used."</Days_Used>";
$xml         .= "<Amount>".$NHIF_Amount."</Amount>";
$xml         .= "</Payment_Modifier>";
$xml         .= "</Payment_Modifiers>";
$xml  		 .= "</ClaimHeader>";
$xml         .= "<Member>";
$xml         .= "<Membership_Number>".$Membership_Number."</Membership_Number>";
$xml         .= "<Scheme_Code>".$Scheme_Code."</Scheme_Code>";
$xml         .= "<Scheme_Plan>".$Scheme_Plan."</Scheme_Plan>";
$xml         .= "</Member>";
$xml         .= "<Patient>";
$xml         .= "<Dependant>".$Dependant."</Dependant>";
$xml         .= "<First_Name>".$First_Name."</First_Name>";
$xml         .= "<Middle_Name>".$Middle_Name."</Middle_Name>";
$xml         .= "<Surname>".$Surname."</Surname>";
$xml         .= "<Date_Of_Birth>".$Date_Of_Birth."</Date_Of_Birth>";
$xml         .= "<Gender>".$Gender."</Gender>";
$xml         .= "</Patient>";
$xml         .= "<Claim_Data>";
$xml         .= "<Discharge_Notes>".$Discharge_Notes."</Discharge_Notes>";

//add services
$itemno=0;
foreach ($_SESSION['consinvoice'] as $i => $val) {
//frm receipts
$question =mysql_query("SELECT * FROM receipts where rcptno='".$val."' limit 0,1");
$ans=mysql_fetch_array($question);
$second=rand(10,59);
$stamp=stripslashes($ans['stamp']);$Start_Date=substr($stamp,0,4).'-'.substr($stamp,4,2).'-'.substr($stamp,6,2);
$time=stripslashes($ans['time']);$Start_Time=substr($time,0,2).':'.substr($time,2,2).':'.$second;

$result =mysql_query("SELECT * FROM sales WHERE RcptNo='".$val."' and Status!=0");
$num_results = mysql_num_rows($result);
for ($i=0; $i <$num_results; $i++) {
			$itemno+=1;
			$row=mysql_fetch_array($result);
			$TransNo=stripslashes($row['TransNo']);
			$Category=stripslashes($row['Category']);
			$ItemCode=stripslashes($row['ItemCode']);
			$ItemName=stripslashes($row['ItemName']);
			$Quantity=stripslashes($row['Qty']);
			$TotalPrice=preg_replace('~,~', '', stripslashes($row['TotalPrice']));
			 if($Category='CUSTOMERCARE'){$Encounter_Type='Consultations';}else if($Category='PHARMACY'){$Encounter_Type='Medication';}else if($Category='THEATRE'){$Encounter_Type='Procedure';}else{$Encounter_Type='Administration costs)';}
			 $xml .= "<Service>";
			 $xml .= "<Number>".$itemno."</Number>";
			 $xml .= "<Invoice_Number>".$rcptno."</Invoice_Number>";
			 $xml .= "<Start_Date>".$Start_Date."</Start_Date>";
			 $xml .= "<Start_Time>".$Start_Time."</Start_Time>";
			 $xml .= "<Provider>";
			 $xml .= "<Role>".$Role."</Role>";
			 $xml .="</Provider>";
			 $xml .= "<Diagnosis>";
			 $xml .= "<Stage>".$Stage."</Stage>";
			 $xml .= "<Code_Type>".$Code_Type."</Code_Type>";
			 $xml .= "<Code>".$Code."</Code>";
			 $xml .="</Diagnosis>";
			 $xml .= "<Encounter_Type>".$Encounter_Type."</Encounter_Type>";
			 $xml .= "<Code_Type>".$Code_Set."</Code_Type>";
			 $xml .= "<Code>".$ItemCode."</Code>";
			 $xml .= "<Code_Description>".$ItemName."</Code_Description>";
			 $xml .= "<Quantity>".$Quantity."</Quantity>";
			 $xml .= "<Total_Amount>".$TotalPrice."</Total_Amount>";
			 $xml .= "<Reason>".$Reason."</Reason>";
			 $xml .="</Service>";
	}
}

//close the root element
$xml .= "</Claim_Data>";
$xml .= "</Claim>";

 
//send the xml header to the browser
//header ("Content-Type:text/xml");
 
//output the XML data
echo $xml;
$myfile = fopen("smartlink/hospitalclaimfile.xml", "w");
fwrite($myfile, $xml);
fclose($myfile);




/*

mysql_connect('server', 'user', 'pass');
mysql_select_db('database');

$sql = "SELECT ItemCode, ItemName, SalePrice FROM items WHERE ItemName!='' ORDER BY ItemCode limit 0,12";
$res = mysql_query($sql);

$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('items');

while ($row = mysql_fetch_assoc($res)) {
  $xml->startElement("ItemName");

  $xml->writeAttribute('ItemCode', $row['ItemCode']);
  $xml->writeAttribute('Price', $row['SalePrice']);
  $xml->writeRaw($row['ItemName']);

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/xml');
$xml->flush();

/*

//PAYMENT MODIFIER
$xml=simplexml_load_file("smartlink/forwardedcarddata.xml") or die("Error: Cannot create object");
$Admit_Notes=$xml->Admit_Notes;
$PaymentType1=$xml->PaymentModifiers->PaymentModifier[0]->Type;
$PaymentAmount1=$xml->PaymentModifiers->PaymentModifier[0]->Amount_Required;
$Receipt=$xml->PaymentModifiers->PaymentModifier[0]->Receipt;
$PaymentType2=$xml->PaymentModifiers->PaymentModifier[1]->Type;
$NHIF_Member_Nr=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Member_Nr;
$NHIF_Contributor_Nr=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Contributor_Nr;
$NHIF_Employer_Code=$xml->PaymentModifiers->PaymentModifier[1]->NHIF_Employer_Code;
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

//insert into forwardedcarddata
$resulta = mysql_query("insert into forwardedcarddata values('0','".$Admit_Notes."','".$PaymentType1."','".$PaymentAmount1."','".$Receipt."','".$PaymentType2."','".$NHIF_Member_Nr."'
	,'".$NHIF_Contributor_Nr."','".$NHIF_Employer_Code."','".$NHIF_Patient_Relation."','".$Diagnosis_Code."','".$Admit_Date."','".$Discharge_Date."','".$Days_Used."','".$Amount."','".$card_issuedate."',
	'".$card_retmasscounter."','".$card_issuername."','".$card_serialnumber."','".$card_validitystatus."','".$card_retcounter."','".$patient_marriagestatus."'
	,'".$policy_country."','".$patient_surname."','".$patient_partnerprevioussurname."','".$patient_previoussurname."','".$patient_marriagedate."','".$patient_partnerdob."','".$patient_forenames."',
	'".$patient_dob."','".$patient_title."','".$policy_currency."','".$policy_id."','".$patient_language."','".$medicalaid_expiry."','".$medicalaid_rules."','".$medicalaid_showpools."'
	,'".$medicalaid_number."','".$medicalaid_plan."','".$medicalaid_limit."','".$medicalaid_groupstatus."','".$nhif_membernumber."','".$medicalaid_regdate."','".$global_id."','".$medicalaid_code."',
	'".$dependant_number."','".$card_claimingreason."','".$card_reterrors."','".$switch_integrated."','".$supervisor_password."','".$card_claimfilesloading."'
	,'".$card_claimingpossible."','".$medicalaid_scheme."','".$btupdate_completed."','".$patient_hospitalnumber."','".$card_retcompleted."','".$virtualcard."','".$Benefit_Nr."',
	'".$Benefit_Description."','".$Benefit_Amount."','".$PreAuthNeeded."','".$Claimable."','".date('Y/m/d')."','".date('Ymd')."','1')")  or die (mysql_error());


						
*/
?>