
<?php

echo'<div id="tabs-6" style="overflow-y:auto;height:375px;">

<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">ADMISSION DETAILS ['.stripslashes($rown['AdmDate']).']</a>
	<div class="cleaner_h5"></div>
	<a class="labels">'.stripslashes($rown['AdmNotes']).'</a>
	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PROGRESS NOTES</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from progress where pid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">CADEX</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from cadex where pid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['notes']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PHARMACY PRESCRIPTIONS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from pharmrequests where prescid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> '.stripslashes($row['prescription']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>PRESCRIBED BY:</b> '.stripslashes($row['requested']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">LABORATORY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from labrequests where prescid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">RADIOLOGY REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from radrequests where prescid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['request']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['results']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">THEATRE REQUESTS</a>
	<div class="cleaner_h5"></div>';
	$resulta =mysql_query("select * from theatrequests where prescid='".$pid."'");
							$num_resultsa = mysql_num_rows($resulta);	
							for ($i=0; $i <$num_resultsa; $i++) {
								$row=mysql_fetch_array($resulta);
								echo '<a class="labels"><b>['.stripslashes($row['date']).'</b>] <br/> 
								<b>REQUEST:</b><BR/>'.stripslashes($row['procedures']).'</a><div class="cleaner_h5"></div>
								<b>RESULTS:</b><BR/>'.stripslashes($row['notes']).'</a><div class="cleaner_h5"></div>
								<a class="labels"><b>REQUESTED BY:</b> '.stripslashes($row['requested']).'</a><br/><div class="cleaner"></div>
								<a class="labels"><b>DONE BY:</b> '.stripslashes($row['doneby']).'</a><div class="cleaner_h5" style="border-top:1.5px dashed #333"></div>';
						}
	
	echo'


	<div class="cleaner_h5"></div>

		<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">PRESCRIPTION ADMINISTRATION CHART</a>
	<div class="cleaner_h5"></div>';

	$result = mysql_query("SELECT * FROM  drugrecord where pid='".$pid."' and status=1 order by stamp asc");
									$num_results = mysql_num_rows($result);
									if($num_results>0){
									
									echo'
									<div class="cleaner_h5"></div>
									<div id="inside" style="min-height:110px; border-bottom:0; margin-left:0px">
									<div id="title"">
									<div id="figure1" style="width:80px">Date.</div>
									<div id="figure1" style="width:120px">Drugs</div>
									<div id="figure1" style="width:50px">Dose</div>
									<div id="figure1" style="width:50px">Route</div>
									<div id="figure1" style="width:100px">Notes</div>
									<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
									<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">AM</strong></div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">1</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">2</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">3</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">4</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">5</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">6</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">7</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">8</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">9</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">10</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">11</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">12</div>
									</div>
									
							<div style="width:240px;padding:0; margin:0; height:25px; float:left; border-right:1px solid #fff">
									<div style="width:240px; height:12px;padding:0; margin:0;float:left"><strong style="float:left; margin-left:45px; color:#fff">PM</strong></div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;border-left:0 ;color:#fff; text-align:center">1</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">2</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">3</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">4</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0 ;color:#fff; text-align:center">5</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">6</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">7</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">8</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0 ; color:#fff; text-align:center">9</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff; border-right:0; color:#fff; text-align:center">10</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:0;  color:#fff; text-align:center">11</div>
									<div style="width:19px; height:12px;padding:0; margin:0;float:left; border:1px solid #fff;border-right:1px solid #000;color:#fff; text-align:center">12</div>			</div>			
									
									
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysql_fetch_array($result);
										$code=stripslashes($row['id']);
										if($i%2==0){
	echo'<div style="width:auto; height:20px; border-bottom:0px solid #333;" id="normal'.$i.'" class="normal">';
	}else{
		echo'<div style="width:auto; height:20px;background:#fff;border-bottom:0px solid #333;"  id="normal'.$i.'" class="normal">';
	}
									
									echo'<div class="figure2x" style="width:85px;padding:2px 2px;font-size:10px">'.stripslashes($row['date']).'</div>
										<div class="figure2x" style="width:125px;padding:2px 2px;font-size:10px">'.stripslashes($row['drugs']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['dose']).'</div>
										<div class="figure2x" style="width:55px;padding:2px 2px;font-size:10px">'.stripslashes($row['route']).'</div>
										<div class="figure2x" style="width:115px;padding:2px 2px;font-size:10px">'.stripslashes($row['notes']).'</div>';
									
										
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['1am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['2am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['3am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['4am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['5am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['6am'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['7am'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['8am'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['9am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['10am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['11am'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['12am'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['1pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['2pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['3pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['4pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['5pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['6pm'])==1){echo'checked="checked"';} echo' /></div>	';	
	
	echo'<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input style="float:left" type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['7pm'])==1){echo'checked="checked"';} echo'/></div>
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled" value="1"'; if(stripslashes($row['8pm'])==1){echo'checked="checked"';} echo'/></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['9pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['10pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1" '; if(stripslashes($row['11pm'])==1){echo'checked="checked"';} echo' /></div>	
	<div class="figure2x" style="width:16px;padding:2.5px 3px 2.5px 0px;"><input type="checkbox" disabled="disabled"  value="1"'; if(stripslashes($row['12pm'])==1){echo'checked="checked"';} echo' /></div>	';	
	
				
				
								echo"</div><div class=\"cleaner\"></div>";
										
										}
									}

echo'		<div class="cleaner_h10"></div>
<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS ENTRIES</a>
	<div class="cleaner_h5"></div>';
		$result = mysql_query("SELECT * FROM  vitals where prescid='".$pid."'");
									$num_results = mysql_num_rows($result);
									echo'
									
									<div id="inside" style="min-height:110px;">
									<div id="title">
									<div id="figure1" style="width:120px">Date-Time</div>
									<div id="figure1" style="width:80px">Temp</div>
									<div id="figure1" style="width:80px">Bp</div>
									<div id="figure1" style="width:80px">Weight</div>
									<div id="figure1" style="width:80px">Pulse</div>
									<div id="figure1" style="width:80px">Breath</div>
									<div id="figure1" style="width:80px">RBS</div>
									</div>';
									
										
										
									for ($i=0; $i <$num_results; $i++) {
										$row=mysql_fetch_array($result);
										$code=stripslashes($row['id']);
										echo"
										<div id=\"normal13".$code."\" class=\"normal\">";
										echo'<div class="figure2x" style="width:125px;padding:3px 2px"><input disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['datetime']).'" id="date'.$code.'" style="background:#fff;width:120px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['temp']).'" id="temp'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['bp1']).'/'.stripslashes($row['bp2']).'" id="bp1'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['weight']).'" id="weight'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['pulse']).'" id="pulse'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:85px;padding:3px 2px;"><input  disabled="disabled" type="text" class="put_field" value="'.stripslashes($row['breath']).'" id="breath'.$code.'" style="background:#fff;width:80px; font-size:10px"/></div>
										<div class="figure2x" style="width:98px;padding:3px 2px;"><input disabled="disabled"  disabled="disabled"  type="text" class="put_field" value="'.stripslashes($row['random']).'" id="random'.$code.'" style="background:#fff;width:90px; font-size:10px"/></div>';
										echo"</div><div class=\"cleaner\"></div>";
										}	
										
									
										
						echo'</div>
<div class="cleaner_h5"></div>

	<a class="labels" style="margin-left:0px;font-size:16px;font-weight:bold; text-align:center;text-decoration:underline">VITALS CHARTS</a>
	<div class="cleaner_h5"></div>';
					$result = mysql_query("SELECT * FROM  vitals where prescid='".$pid."' order by id desc limit 0,7");
					$num_results = mysql_num_rows($result);
					if($num_results>0){

					for ($i=0; $i <$num_results; $i++) {
					$row2=mysql_fetch_array($result);
					$arr1[]='"'.stripslashes($row2['datetime']).'"';
					$arr2[]=stripslashes($row2['temp']);
					$arr3[]=stripslashes($row2['bp1']);
					$arr4[]=stripslashes($row2['bp2']);
					$arr5[]=stripslashes($row2['pulse']);
					$arr6[]=stripslashes($row2['breath']);
					$arr7[]=stripslashes($row2['weight']);
					$arr8[]=stripslashes($row2['random']);
					}
				$arr1=array_reverse($arr1);$arr2=array_reverse($arr2);$arr3=array_reverse($arr3);$arr4=array_reverse($arr4);$arr5=array_reverse($arr5);$arr6=array_reverse($arr6);$arr7=array_reverse($arr7);$arr8=array_reverse($arr8);
				$a=implode($arr1,",");$b=implode($arr2,",");$c=implode($arr3,",");$d=implode($arr4,",");$e=implode($arr5,",");$f=implode($arr6,",");$g=implode($arr7,",");$h=implode($arr8,",");
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Temparature Curve</p>";
	echo'<canvas id="line1" height="200" width="950"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#0ff",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$b.']
				}
			]
			
		}

	new Chart(document.getElementById("line1").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Blood Pressure Chart</p>";
	echo'<canvas id="bar" height="200" width="950"></canvas>
	
<script>

		var barChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#46bfbd",
					strokeColor : "#ccc",
					data : ['.$c.']
				},
				
				{
					fillColor : "#f00",
					strokeColor : "#ccc",
					data : ['.$d.']
				}
			]
			
		}

	new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
	
	</script>
	
	<div class="cleaner_h10"></div>
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Pulse Rate Curve</p>";
	echo'
	<canvas id="line2" height="200" width="950"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#fdb45c",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$e.']
				}
			]
			
		}

	new Chart(document.getElementById("line2").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Respiratory Rate Curve</p>";
	echo'
	<canvas id="line3" height="200" width="950"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#666",
					strokeColor : "#333",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$f.']
				}
			]
			
		}

	new Chart(document.getElementById("line3").getContext("2d")).Line(lineChartData);
	</script>
	<div class="cleaner_h10"></div>
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Weight Curve</p>";
	echo'
	<canvas id="line4" height="200" width="950"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#0085b2",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$g.']
				}
			]
			
		}

	new Chart(document.getElementById("line4").getContext("2d")).Line(lineChartData);
	</script>
	
	<div class="cleaner_h10"></div>
	';
	echo"<p style=\"margin-top:0px; margin-left:20px;font-size:11px;font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif;\">Random Blood Sugars Curve</p>";
	echo'
	<canvas id="line5" height="200" width="950"></canvas>
	
<script>

		var lineChartData = {
			labels : ['.$a.'],
			datasets : [
				{
					fillColor : "#ff3",
					strokeColor : "#666",
					pointColor : "#fff",
					pointStrokeColor : "#000",
					data : ['.$h.']
				}
			]
			
		}

	new Chart(document.getElementById("line5").getContext("2d")).Line(lineChartData);
	</script>';
}
	
	echo'


	<div class="cleaner_h5"></div>


	</div>
		</div>';

		?>
				