<?php

session_start();
include ('connect.php');
$username=$_SESSION['username'];
$query ="SELECT * from `users` where username='$username'";
$result=mysqli_query($connect,$query);
$rows = mysqli_num_rows($result);
if($rows > 0) 
$row = mysqli_fetch_array($result);

        echo "Your Id is",$row['uid'];
    
?> 
