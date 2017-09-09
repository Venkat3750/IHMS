<html>
<head>
<title> Register an account </title>
<script src="JQuery/jquery-3.0.0.js"></script>
    <script>
        function validateForm()
        {
            
        	if($("#name").val().length< 5 || $("#name").val().length > 25)
            {
            
            alert("username must be between 5 and 25 characters");
            return false;
            }
           if($("#pwd").val().length< 6)
            {
             alert("password must be longer than 6 characters");
             return false;
            }
                
           if($("#pwd").val() != $("#cpwd").val())
            {
                alert("password and confirm password does not match");
                $(".passwd").css("background-color","red");
                return false;
            }
            var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            var email=document.getElementById("email").value;
            if(!expr.test(email))
            {
                 alert("Invalid email address.");
                 return false;
            }
        };
       </script>
</head>
<body> 
<center>	
	<form action="staff.php" method="POST" onsubmit="return validateForm();">

	Staffname: 		 <input type="text"  required  id="name"name="username"><br><br>
	Password:		 <input type="password"  required  id="pwd" name="password"><br><br>
	Confirm Password:<input type="password" required id="cpwd" name="repassword"><br><br>
	Email:			 <input type="text" required id="email" name="email"><br><br>
	Role:			 <select  name="role"><br> 
	<option value="Ceo">CEO</option>
	<option value="Doctor">Doctor</option>
	<option value="Frontdesk">Frontdesk</option>
	<option value="Admin">Admin</option>
	</select><br><br>
    Qualification:  <input type="text"  name="qfn"><br><br> 
	
	<input type="submit" name="submit" value="Register" action="staff.php">
	
	</form>
</center>
</body>
</html>
<?php

include ('connect.php');

$sname = @$_POST['username'];
$password = @$_POST['password'];
$repass = @$_POST['repassword'];
$email=@$_POST['email'];
$qfn=@$_POST['qfn'];
$role=@$_POST['role'];
//$cby=@$_POST['createdby'];
   switch($role)
    {

 case "Admin":$myquery="select * from staff where role='Admin'";
     $r = mysqli_query($connect,$myquery);
     $x=mysqli_num_rows($r);
    // if($x==0)

     $sid='adminno'.$x;  
     $x++;
     break;
 

 case "Doctor":
 
     $myquery="select * from staff where role='Doctor'";
     $r = mysqli_query($connect,$myquery);
     $k=mysqli_num_rows($r);
     $sid='Docno'.$k;  
     $k++;
     break;

 case "Frontdesk":
    $myquery="select * from staff where role='Frontdesk'";
     $r = mysqli_query($connect,$myquery);
     $z=mysqli_num_rows($r);
     $sid='fdskno'.$z;  
     $z++;
     break;
 case "Ceo":
  $myquery="select * from staff where role='Ceo'";
     $r = mysqli_query($connect,$myquery);
     $y=mysqli_num_rows($r);
     $sid='ceono'.$y;  
     $y++;
     break;
 }
 
 

		
if($sname && $password && $repass && $email){
    if($role=='Doctor')
    {
$insert1 = mysqli_query($connect, "INSERT INTO `staff` ( `sid`,`sname`,`password`,`email`,`role`) VALUES ( '".$sid."', '".$sname."', '".$password."','".$email."','".$role."');");
    $insert2= mysqli_query($connect, "INSERT INTO `doctors` ( `doctid`,`dname`,`qfn`) VALUES ( '".$sid."', '".$sname."', '".$qfn."');");
               
            if($insert1&&$insert2){
                echo "success";
            } else {
        
                echo "failed";
            }
    }
    else
    {
	
	$insert = mysqli_query($connect, "INSERT INTO `staff` ( `sid`,`sname`,`password`,`email`,`role`) VALUES ( '".$sid."', '".$sname."', '".$password."','".$email."','".$role."');");
			if($insert){
				
				echo "success";
			} else {
		
				echo "failed";
	 		}	
  }
	 	
} 

?>