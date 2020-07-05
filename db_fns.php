<?php session_start();
	 $server='localhost';
	 $smartip='192.168.1.107';
	 
	
	 
	 //$smartconn = mysql_connect('192.168.1.107:3307', 'integ_user', 'integ123',true) or die(mysql_error());
	 
     function connectsmart(){
     	$smartdb='smartlink';
     	$smartconn = mysql_connect('localhost', 'root', 'admin@123+',true) or die(mysql_error());
		mysql_select_db($smartdb,$smartconn);
     }

     /*function connectlocal(){
     	$localdb='samaad';
        $localconn = mysql_connect('localhost', 'root', '',true) or die(mysql_error());
		mysql_select_db($localdb,$localconn);
	 }
	 
	 function connectlocal(){
		$localdb='samaad';
		$user = 'root';
		$password = '';
		$localdb = new mysqli('localhost',$user,$password,$localdb) or die(mysql_error());
		
	 }


	 connectlocal();*/
	 $dbServername = "localhost";
     $dbUsername = "root";
     $dbPassword = "passionate!438";
     $dbName = "samaad";



     $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


     if(!$conn){
	    die("Connection error ".mysqli_connect_error());
     }

  
	 
	 

?>
