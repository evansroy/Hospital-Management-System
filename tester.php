<?php include('db_fns.php');

function daysdifference($date1,$date2){
    
     $date1 = strtotime($date1);
     $date2 = strtotime($date2);
     $datediff = $date2 - $date1;
     return floor($datediff/(60*60*24));

}

		echo daysdifference('01-01-2017','25-01-2017');			
                    
?> 

  



