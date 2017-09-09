<?php
session_start();
include ('connect.php');
$query ="SELECT * from `udapp` where status='pending'";
$result=mysqli_query($connect,$query);
$rows = mysqli_num_rows($result);
if($rows > 0)	
while($row = mysqli_fetch_array($result))
{?>


    <html>	
    	
    <table>	<tr ><?php echo "patient name is    ", $row['upname'] ,"   having problem regarding   ", $row['udes'];?>
    <form action="#" method="post" >
	<input type="submit" required value="accept" name='<?php echo $row['uapno']; ?>'>
	<input type="submit" required value="reject" name='<?php echo $row['uapno']; ?>'> 

	</form></tr></table></html>
	<?php echo "<br>";
	//include_once("admin_header.php");
	$status=@$_POST[$row['uapno']];
	if($status)
	{
		//$name=$row['upname'];
		$apno=$row['uapno'];
	
		$sql="update udapp set status='$status' where uapno='$apno' " ;
		    $insert = mysqli_query($connect, $sql);
		   /* if($insert)
		   {
		   	header("Location: /temp/dlogin?status=reg-success");
		   } 	
		   else
		   {
		   header("Location: /temp/dlogin?status=reg-failed");
		   }*/
            
	}
}

?>
	