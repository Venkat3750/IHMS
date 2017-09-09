<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'connect.php';
/*
if(isset($_POST['btn-signup']))
{
 $uname = mysql_real_escape_string($_POST['uname']);
 $email = mysql_real_escape_string($_POST['email']);
 $upass = md5(mysql_real_escape_string($_POST['pass']));
 
 if(mysqli_query("INSERT INTO users(username,email,password) VALUES('$uname','$email','$upass')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <script src="JQuery/jquery-3.0.0.js"></script>
        <script>
        function validateForm()
        {
            
        
           if($("#uname").val().length< 5 || $("#uname").val().length > 25)
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
        
            var pattern=/^\d{10}$/;
            if(!pattern.test(($("#mobno").val())))
            {
                 alert("Invalid mobile no");
                 return false;
            }
            
        };
        

        </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Registration System</title>
<link rel="stylesheet" href="assets/reg.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="POST"  onsubmit="return validateForm();">
	<h1>Registration</h1>
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="username"id="uname" placeholder="User Name" required /></td>
</tr>
<tr>
<td><input type="email" name="email" placeholder="Your Email" required /></td>
</tr>
<tr>
<td><input type="password" name="password"id="pwd"  placeholder="Your Password" required /></td>
</tr>
<tr><td><input id="cpwd" required type="password" class="passwd" placeholder="Confirm Password" name="repassword"></td>
</tr>
<tr>
	<td><input required type="text" name="place" placeholder="Place"></td>
</tr>
<tr>
	<td><input required type="text" name="age" placeholder="Age"></td>
</tr>
<tr>
	<td><input required type="text" name="mobno" id="mobno" placeholder="MobileNo"></td>
</tr>
</table>
<input type="radio" name="gender" value="Male" > Male
<input type="radio" required name="gender" value="Female" > Female

<table><tr><td><button type="submit" name="btn-signup">Register</button></td></tr></table><br>

</form>
</div>
</center>
</body>
</html>
<?php
 

include ('connect.php');

$x=0;
$username = @$_POST['username'];
$_SESSION['username']=@$_POST['username'];
$password = @$_POST['password'];
$repass = @$_POST['repassword'];
$place = @$_POST['place'];
$email=@$_POST['email'];
$age=@$_POST['age'];
$gender=@$_POST['gender'];
$mobno=@$_POST['mobno'];
$date = date("y-m-d");
$color = "color";
$myquery="select * from users";
$r = mysqli_query($connect,$myquery);
$x=mysqli_num_rows($r);
$uid='user'.$x;  
$x++;
         if($username&&$password&&$email)
        {
            $insert = mysqli_query($connect, "INSERT INTO `users` ( `username`, `password`, `place`,`email`,`age`,`gender`,`mobno`,`uid`) VALUES ( '".$username."', '".$password."', '".$place."','".$email."','".$age."','".$gender."','".$mobno."','".$uid."');");
            
        if($insert){
              echo '<script language="javascript">';
            echo 'alert("Registration Successfull")';
            echo '</script>';
           header("Location: /nex/userid.php");
            } 
        else {
           
             echo '<script language="javascript">';
            echo 'alert("Registration Failed")';
            echo '</script>';
            }   
        }
        

?>