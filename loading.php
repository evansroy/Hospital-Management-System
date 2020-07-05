<?php 
//session_start();
include('db_fns.php');
if(isset($_SESSION['valid_user'])){
$username=$_SESSION['valid_user']; 

}
else{echo"<script>window.location.href = \"index.php\";</script>";}

$result =mysqli_query($conn,"select * from company");
$row=mysqli_fetch_array($result);
$lic=stripslashes($row['License']);
$counts=stripslashes($row['Counts']);
if($lic=='DEMO'){
	if($counts==0){
echo"<script>alert('Time is up! Buy full version now. Contact 0722910477');</script>";
echo"<script>window.location.href = \"index.php\";</script>";
	}
	else{
		$counts--;
		$resultf= mysqli_query($conn,"update company set counts='".$counts."'");
		if($counts<5){
		echo"<script>alert('".$counts." more times left for you to login. Buy full version now. Contact 0722910477');</script>";
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="language" content="en-au">
		<meta name="robots" content="ALL">
		<meta name="revisit-after" content="7 Days">
		<title>System Loading...</title>
		<meta name="keywords" content="css3, jquery, pie, graph, chart, timer">
		<meta name="description" content="CSS3 pie graph timer with jquery">
        <link id="favicon" href="images/fav.png" rel="icon" type="image/png"/>
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<style>
			.timer {
				position:relative;
				font-size: 200px;
				width:1em;
				height:1em;
				float: left;
			}
			.timer > .percent {
				position: absolute;
				font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
				top: 1.8em;
				left: 0.7em;
				width: 3.33em;
				font-size:0.2em;
				text-align:center;color:#fff
			}
			.timer > #slice {
				position:absolute;
				width:1em;
				height:1em;
				clip:rect(0px,1em,1em,0.5em);
			}
			.timer > #slice.gt50 {
				clip:rect(auto, auto, auto, auto);
			}
			.timer > #slice > .pie {
				border: 0.1em solid #0085b2;
				position:absolute;
				width:0.8em; /* 1 - (2 * border width) */
				height:0.8em; /* 1 - (2 * border width) */
				clip:rect(0em,0.5em,1em,0em);
				-moz-border-radius:0.5em;
				-webkit-border-radius:0.5em; 
				border-radius:0.5em; 
			}
			.timer > #slice > .pie.fill {
				-moz-transform:rotate(180deg) !important;
				-webkit-transform:rotate(180deg) !important;
				-o-transform:rotate(180deg) !important;
				transform:rotate(180deg) !important;
			}
			.timer.fill > .percent {
				display: none;
			}
			.timer.fill > #slice > .pie {
				border: transparent;
				background-color: #0085b2;
				width:1em;
				height:1em;
			}
		</style>
		<script type="text/javascript">
			var timer;
			var timerCurrent;
			var timerFinish;
			var timerSeconds;
			function drawTimer(percent){
				$('div.timer').html('<div class="percent"></div><div id="slice"'+(percent > 50?' class="gt50"':'')+'><div class="pie"></div>'+(percent > 50?'<div class="pie fill"></div>':'')+'</div>');
				var deg = 360/100*percent;
				$('#slice .pie').css({
					'-moz-transform':'rotate('+deg+'deg)',
					'-webkit-transform':'rotate('+deg+'deg)',
					'-o-transform':'rotate('+deg+'deg)',
					'transform':'rotate('+deg+'deg)'
				});
				$('.percent').html('E-MED');
			}
			function stopWatch(){
				var seconds = (timerFinish-(new Date().getTime()))/1000;
				if(seconds <= 0){
					drawTimer(100);
					clearInterval(timer);
					$('input[type=button]#watch').val('Start');
					window.location.href = "main.php";
				}else{
					var percent = 100-((seconds/timerSeconds)*100);
					drawTimer(percent);
				}
			}
            $(document).ready(function(){
				$('input[type=button]#percent').click(function(e){
					e.preventDefault();
					drawTimer($('input[type=text]#percent').val());
				});
				$('input[type=button]#size').click(function(e){
					e.preventDefault();
					$('.timer').css('font-size',$('input[type=text]#size').val()+'px');
				});
				$('input[type=button]#watch').click(function(e){
					e.preventDefault();
					if($('input[type=button]#watch').val() == 'Start'){
						$('input[type=button]#watch').val('Stop');
						timerSeconds = $('input[type=text]#watch').val();
						timerCurrent = 0;
						timerFinish = new Date().getTime()+(timerSeconds*1000);
						timer = setInterval('stopWatch()',50);
					}else{
						$('input[type=button]#watch').val('Start');
						clearInterval(timer);
					}
				});
				$('input[type=button]#watch').click();
			});
		</script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-3164054-6']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
	</head>
	<body style="background-image: url(images/medical-04.jpg)">
<input id="watch" value="Start" type="button" style="display:none" ><input id="watch" size="2" value="5" type="text" style="display:none">
		
        
      <div id="boss" style="position:absolute; top:30%; left:40%; border-radius:5px; padding:20px 30px">
        <div class="timer" >
       </div><br/><br/>
    <p style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#0085b2; font-size:14px; margin-left:20px ">Initializing components...</p></div>


	
</body></html>