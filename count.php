<html>
<head>
<title> Appointment </title>

  
</head>
<body> 

</body>
</html>
<?php

      include ('connect.php');
     $myquery="select * from udapp";
	 $r = mysqli_query($connect,$myquery);
	 $x=mysqli_num_rows($r);
	 $appno='udappno'.$x;  
	
  echo $x;
?>