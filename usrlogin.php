<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{


$userid=htmlspecialchars($_POST['uid'],ENT_QUOTES,"UTF-8");


$password=htmlspecialchars($_POST['password'],ENT_QUOTES,"UTF-8");


//connect to database

include ('connect.php');

//execute query

$query ="SELECT * from `users` where uid='".$userid."' and password='".$password."'";

$result=mysqli_query($connect,$query);


while($row = mysqli_fetch_array($result))
{
	
	if($_POST['uid']==$row['uid'] && $_POST['password']==$row['password'])
	{
	
		$_SESSION['uid']=$userid;
		$_SESSION['password']=$password;
		
		header("Location: /nex/user.php");
	}
	else 
	{
		echo '<script language="javascript">';
		echo 'alert("You got credentials wrong")';
		echo '</script>';
		echo "You got credentials wrong";
	}
}
echo '<script language="javascript">';
echo 'alert("Wrong or Invalid credintials\nPlease enter the credentials again")';
echo '</script>';

}


?>
<html>
<head>
	<link rel="stylesheet" href="assets/reg.css" type="text/css" />

</head>
<body>
<center>
<div id="login-form">
<form method="post" action="<?php htmlspecialchars("PHP_SELF", ENT_QUOTES,"UTF-8"); ?>">
	<h1>UserLogin</h1>
<table align="center" width="30%" border="0">
<tr>
<td><input type="text" name="uid"id="uname" placeholder="User Id" required /></td>
</tr>

<tr>
<td><input type="password" name="password"id="pwd"  placeholder="Your Password" required /></td>
</tr>

</table>

<table><tr><td><button type="submit">Login</button></td></tr></table><br>

</form>
</div>
</center>
</body>
</html>
 
 
 
 
