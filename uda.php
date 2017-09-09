<html>
<head>
<title> Appointment </title>

  
</head>
<body> 
<center>	
	<form action="#" method="POST">
    <input type="text"  required placeholder="PatientName" name="upname"><br><br>
	Select Doctor:	<br> <select  name="udname">
	<option value="Dr.samaram">Dr.samaram</option>
	<option value="Dr.vinod">Dr.vinod</option>
	<option value="Dr.ramesh">Dr.ramesh</option>
	<option value="Dr.anil">Dr.anil</option>
	</select><br><br>
	<textarea rows=5 name="udes" placeholder="Description of problem"></textarea><br><br>
	<input type="text" name="fdate" placeholder=" Date of appointment"><br>

	 <input type="text" name="ftime" placeholder= "Time">
	 <select name="m">
	 <option value="PM">PM</option>
	 <option value="AM">AM</option>
	 </select><br>

	 <input type="submit" name="submit" value="sign up!"> 
	
	</form>
</center>
</body>
</html>
<?php

      include ('connect.php');
     $myquery="select * from udapp";
	 $result = mysqli_query($connect,$myquery);
	 $x=mysqli_num_rows($result);
	 $appno='udappno'.$x;  
	 $x++;
     $dname=@$_POST['udname'];
     $fdate=@$_POST['fdate'];
     $ftime=@$_POST['ftime']; 
     $des=@$_POST['udes'];
     $pname=@$_POST['upname'];
     $m=@$_POST['m'];
     $ftime=$ftime.$m;
     $status='pending';
 if($dname && $fdate){
	
		$insert = mysqli_query($connect, "INSERT INTO `udapp` ( `uapno`, `fdate`,`ftime`,`udname`,`upname`,`udes`,`status`) VALUES ( '".$appno."','".$fdate."','".$ftime."','".$dname."','".$pname."','".$des."','".$status."');");
			 if($insert){
				echo "sucess";
			} else {
			
				echo "failed";
	 		}	
	 	             }


?>
