<?php
	function getDocOptions()
	{
		include ('connect.php');
	
		
		$query = "SELECT `sid`,`sname` from staff where role ='Doctor'";
		$res = mysqli_query($connect,$query);

		if($res)
		{

			while(($row=mysqli_fetch_assoc($res)))
			{
				$value = $row['sid'];
				$option = $row['sname'];
				echo "<option value=".$value.">$option</option>";
			}
		}
		

	}
	function getEqpOptions()
	{
		include ('connect.php');
	
		
		$query = "SELECT `eqname` from equipments ";
		$res = mysqli_query($connect,$query);

		if($res)
		{

			while(($row=mysqli_fetch_assoc($res)))
			{
				$value = $row['eqname'];
				echo "<option value=".$value.">$value</option>";
			}
		}
		

	}
	
/*	function getReqId()
	{
		$query = "select * from op_consultation3";
		$res = mysql_query($query);
		if($res)
		{
			$no = mysql_num_rows($res) + 1;

		}
		else
			$no = 1;
		$cNo = "OP".$no;
		return $cNo;
	}*/
?>

<html>
<head>
<title> Messsage </title>

  
</head>
<body> 
<center>	
	<form action="req.php" method="POST">
   
	<textarea  name="des"  required placeholder="messaage" style="width: 500px; height: 50px;"></textarea><br>
	<select  name="requip">
    <option value=''>select</option>
	<?php getEqpOptions()?>	
	</select><br>
	<select  name="doctid">
		<option value=''>select</option>
		<?php getDocOptions()?>	
	</select><br><br>
	<input type="submit" name="submit" value="send"> 
	</form>
</center>
</body>
</html>
<?php

      include ('connect.php');
      $myquery="select * from request";
	 $r = mysqli_query($connect,$myquery);
	 $x=mysqli_num_rows($r);
	 $rid='reqno'.$x;  
	 $x++;
     $requip=@$_POST['requip'];
     $docid=@$_POST['doctid'];
     $des=@$_POST['des'];
   //  $rhos=@$_POST['hospital'];
     if($des)
     {
     $insert = mysqli_query($connect, "INSERT INTO `request` (`rid`,`des`,`requip`,`doctid`) VALUES ( '".$rid."','".$des."','".$requip."','".$docid."');");
			 if($insert){
				echo "success";
			} 
			else {
			echo "failed";
		
	 		}	


}
?>