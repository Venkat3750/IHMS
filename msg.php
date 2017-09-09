<?php

session_start();
include ('connect.php');
$query ="SELECT * from `request`";
$result=mysqli_query($connect,$query);
$rows = mysqli_num_rows($result);
if($rows > 0)	
while($row = mysqli_fetch_array($result))
{?> 


    <html>	
    	
    <table>	
    	<tr >
    		<?php
    			if(strlen($row['doctid']) ==0)
    				$dname = "";
 				else if(strlen($row['doctid']) !=0 )
 				{
 	 				 $myquery="select dname from doctors where doctid='".$row['doctid']."'";
 	 			     $r = mysqli_query($connect,$myquery);
	                 $row2 = mysqli_fetch_assoc($r);
	                 $dname = $row2['dname'];

 				}
				
 					echo  $row['des'],   $dname ,  $row['requip']; 
}
 ?>
    
</tr></table></html>
 
    