<?php

//session_start();

require_once('db_fns.php');

//include_once 'db_fns.php';

date_default_timezone_set('Africa/Nairobi'); 
if(isset($_SESSION['valid_user'])){
$old_user = $_SESSION['valid_user'];
$resulta = mysqli_query("DELETE from logintable where username='".$_SESSION['valid_user']."'");	
$resultb = mysqli_query("insert into log values('','".$_SESSION['valid_user']." logs out of system-COMPUTER IP ADDRESS:".$_SERVER['REMOTE_ADDR']."','".$_SESSION['valid_user']."','".date('YmdHi')."','".date('H:i')."','".date('d/m/Y')."','1')");	
// store  to test if they *were* logged in
unset($_SESSION['valid_user']);
$result_dest = session_destroy();
		if (!empty($old_user)) {
				  if ($result_dest)  {
					// if they were logged in and are now logged out
					echo"<script>window.location.href = \"index.php\";</script>";
						} else {// they were logged in and could not be logged out
				  		echo"<script>window.location.href = \"index.php\";</script>";
				  		}
		} else {// if they weren't logged in but came to this page somehow
					echo"<script>window.location.href = \"index.php\";</script>";
		}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Med Login</title>
<meta name="keywords" content="Q-Bima" />
<meta name="description" content="Q-Bima" />
<link href="css/templatemo_styleadmin.css" rel="stylesheet" type="text/css" />
<link id="favicon" href="images/fav.ico" rel="icon" type="image/png"/>
<link href="css/page.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style2.css" />
<script type='text/javascript' src='js/jquery.min.js'></script>
<link type="text/css" rel="stylesheet" href="css/jquery.custom.alerts.css">
<link rel="stylesheet"href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<script type="text/javascript" src="js/jquery.custom.alerts.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#username').focus();
});
document.onkeydown = keydown;
    	function keydown(evt){
      	if (!evt) evt = event;
     	 if (evt.keyCode==13){ //enter
		 if($('#username').val!=''&& $('#passwd').val()!=''){
        	login();
		 }else{
			$('#passwd').focus();
		 }
      	}
	}

function login(){
	var username=$('#username').val();
	var passwd=$('#passwd').val();
	 if(username==''){
		$().customAlert();
		alert('Error!', '<p>Enter your Username!</p>');
		e.preventDefault();
		}
		else  if(passwd==''){
		$().customAlert();
		alert('Error!', '<p>Enter your password!</p>');
		e.preventDefault();
		}
		else {
	 $('#message').html('<img id="img-spinner" src="images/load.gif" style="margin-top:20px" alt="Loading"/>');
	$.ajax({
	url:'login.php',
	data:{username:username, passwd:passwd},
	success:function(data){
		if(data==0){
			$('#message').html('');
	
		}else $('#message').html(data);
			
				if(data==0){
				window.location.href = "loading.php";
			  	}
		}
		});
		}
}

</script>

</head>   
<body id="bod" style = "background-image: url(images/login-background.png); background-repeat: no-repeat; background-size: cover;">

<div id="templatemo_wrapper" style="background:#0085b2; opacity:0.8; border-radius:20px;position: absolute;left: 50%; top: 50%; 
right:50%;transform:translate(-50%,-50%);">
	<div id="templatemo_header">
<div class="cleaner h40"></div>


  <div id="site_title"><img src="images/clogo.jpg" style="width:200px;margin-left:100px;float:left;border-radius:50%;"/></div>
<div class="cleaner h20"></div>
<p style="font-size:25px; margin-left:180px; color:#fff;font-weight:bold;">Welcome to E-Med</p>
    </div>
    
    <div id="templatemo_main" style="border:0;">
    
    	
          <div id="wrapper">
          <div class="cleaner"></div>
 
                        <div id="login" class="animate form">
                            <form  action="" autocomplete="on"> 
                 
                                <p> 
									<!--<label for="username" class="uname" style="color:#fff">Username </label>-->
									
									<input id="username" name="username"placeholder="Enter Username"  required type="text"style="background: transparent;border:none;border-bottom: 1px solid #fff;
									outline: none;border-radius:20px; color: white;"/>
                                </p>
                                 <div class="cleaner h20"></div>
                                <p> 
									<!--<label for="password" class="youpasswd"style="color:#fff">Password </label>-->
									
                                    <input id="passwd" name="passwd" placeholder="Enter Password" required type="password"style="background: transparent;border:none;border-bottom: 1px solid #fff;
									outline: none;border-radius:20px;color: white;"/> 
                                </p>
                             
                                <p class="login button"> 
                                 
                                    <input type="button" id="create" value="Login" onclick="login()" style="border-radius: 20px;"/>
                                </p>
                                   <div id="message" style="height:40px; width:40px; float:right; margin:10px"></div>
                            </form>
                        </div>
                        <div class="cleaner h10"></div>
                        <a onclick="window.open('http://www.qet.co.ke')" href="#" style="font-size:12px; margin-left:200px; color:#0085b2; font-weight:bold">  &copy; QET SYSTEMS</a>

              
						
                    </div>	
      
      
           
            </div><!-- END mainbox -->
		</div> <!-- END of home -->
        

</div> 

</body>
</html>