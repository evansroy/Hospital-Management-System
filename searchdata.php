<?php include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user'];
$result =mysql_query("select * from users where name='".$username."'");
$row=mysql_fetch_array($result);
$usertype=stripslashes($row['position']);
include('functions.php'); 
}
else{echo"<script>window.location.href = \"index.php\";</script>";}
?>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/functions.js"></script>
<?php
 $param = $_GET["searchData"];
	$per_page = 10;
	$id=$_GET['id'];
	
	
	
	switch($id){
							
							case 1:
								$result = mysql_query("SELECT * FROM spersonal WHERE regn LIKE '%".$param."%' OR name 
							LIKE '%".$param."%' OR oname LIKE '%".$param."%' OR class LIKE '%".$param."%' OR house 
							LIKE '%".$param."%' OR bgroup LIKE '%".$param."%' limit 0,10");
							$num_results = mysql_num_rows($result);
							
							if($num_results>0){
							echo'<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h10"></div>';
							echo "<script>paginate('a','".$param."');</script>";
							exit;}
								
								
								break;	
								
								case 2:
								$result = mysql_query("SELECT * FROM employee WHERE emp LIKE '%".$param."%' OR name 
							LIKE '%".$param."%' OR oname LIKE '%".$param."%' OR dept LIKE '%".$param."%' OR pos 
							LIKE '%".$param."%' OR bgroup LIKE '%".$param."%' limit 0,10");
							$num_results = mysql_num_rows($result);
								if($num_results>0){
								echo'<div id="loading" ></div>
                    					<div id="display" style="height:310px;"></div>
                						<div class="cleaner_h10"></div>';
								echo "</ul><script>paginate('b','".$param."');</script>";
								exit;}
								
								
								break;
									
							case 3:
							$result= mysql_query("SELECT * FROM library WHERE isbn LIKE '%".$param."%' OR name 
							LIKE '%".$param."%' OR status LIKE '%".$param."%' OR author LIKE '%".$param."%' OR bookid 
							LIKE '%".$param."%' OR category LIKE '%".$param."%' limit 0,10");
							$num_results = mysql_num_rows($result);
							if($num_results>0){
							echo "
							<div class=\"cleaner_h10\"></div>
							<div id=\"display\"></div>
							<script>paginateteach(16,'".$param."',1);</script>";
							exit;}
								
								
								break;	
								
								
								case 4:
								$result= mysql_query("SELECT * FROM vendors WHERE vendorid LIKE '%".$param."%' OR vendorname 
							LIKE '%".$param."%' OR company LIKE '%".$param."%' OR phone LIKE '%".$param."%' OR address 
							LIKE '%".$param."%' OR email LIKE '%".$param."%'");
							$num_results = mysql_num_rows($result);
							if($num_results>=1){
							echo'<div id="inside" style="">
									<div id="title">
									<div id="figure3" style="width:80px">Vendor ID</div>
									<div id="figure3" style="width:130px">Vendor Name</div>
									<div id="figure3" style="width:130px">Company</div>
									</div>
									<div class="cleaner"></div>';
							for ($i=0; $i <$num_results; $i++) {
								$row=mysql_fetch_array($result);
								$vname=stripslashes($row['vendorname']);
								$vid=stripslashes($row['vendorid']);
								$vcom=stripslashes($row['company']);
							echo"
							<div id=\"normal\" style=\" background:#e0e0e0\">
							<div class=\"figure4\" style=\"float:left;width:80px\" onclick=\"addvendorto(".$vid.")\">".$vid."</div>
							<div class=\"figure4\" style=\"float:left;width:130px\" onclick=\"addvendorto(".$vid.")\">".$vname."</div>
							<div class=\"figure4\" style=\"float:left;width:132px\" onclick=\"addvendorto(".$vid.")\">".$vcom."</div>
							</div><div class=\"cleaner\"></div>
							</div>
							";
							}
							}
								break;
								
								case 5:
						$result= mysql_query("SELECT * FROM products WHERE prodid LIKE '%".$param."%' OR name LIKE '%".$param."%'");
							$num_results = mysql_num_rows($result);
							if($num_results>=1){
							echo'<div id="inside" style="">
									<div id="title">
									<div id="figure3" style="width:80px">Product ID</div>
									<div id="figure3" style="width:130px">Product Name</div>
									</div>
									<div class="cleaner"></div>';
							for ($i=0; $i <$num_results; $i++) {
								$row=mysql_fetch_array($result);
								$name=stripslashes($row['name']);
								$prodid=stripslashes($row['prodid']);
								
							echo"
							<div id=\"normal\" style=\" background:#e0e0e0\">
							<div class=\"figure4\" style=\"float:left;width:80px\" onclick=\"additemto('".$prodid."','".$name."')\">".$prodid."</div>
							<div class=\"figure4\" style=\"float:left;width:131px\" onclick=\"additemto('".$prodid."','".$name."')\">".$name."</div>
							</div><div class=\"cleaner\"></div>
							</div>
							";
							}
							}
								break;
								
						case 6:
						$result =mysql_query("SELECT * FROM items WHERE ItemCode LIKE '%".$param."%' OR ItemName 
							LIKE '%".$param."%' OR Category LIKE '%".$param."%'");
							$num_results = mysql_num_rows($result);
							if($num_results>0){
							echo "
							<div id=\"display\"></div>
							<script>paginateteach(34,'".$param."',1);</script>";
							exit;}
								break;
								
								case 7:
						$result =mysql_query("SELECT * FROM spersonal WHERE pntno LIKE '%".$param."%' OR name 
							LIKE '%".$param."%' OR oname LIKE '%".$param."%' OR bgroup LIKE '%".$param."%'");
							$num_results = mysql_num_rows($result);
							if($num_results>0){
							echo "
							<div id=\"display\"></div>
							<script>paginateteach(36,'".$param."',1);</script>";
							exit;}
								break;
								
									
									
									
							
		 
							

								
			


	}
?>