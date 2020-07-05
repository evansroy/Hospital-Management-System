
<?php

$conn=odbc_connect('MYDB','','') or die("error in connection");
$sql="select * from TEST_RESULT where SAMPLE_ID='20050519012'";
$rs=odbc_exec($conn,$sql);
if(!$rs)
{exit("Error in SQL");}
echo "<table><tr>";
echo "<th>name</th>";
echo "<th>result</th></tr>";

while (odbc_fetch_row($rs))
{
	$name=odbc_result($rs, "ITEM_NAME");
	$res=odbc_result($rs, "RESULT");
	echo "<tr><td>$name</td>";
	echo "<td>$res</td><tr>";
}
odbc_close($conn);
echo "</table>";

?>