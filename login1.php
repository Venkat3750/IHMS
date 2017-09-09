<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{


$username=@$_POST['username'];


$password=@$_POST['password'];

//connect to database
include_once 'connect.php';

//execute query

$query ="SELECT * from `users` where username='".$username."' and password='".$password."'";
$result=mysqli_query($connect,$query);
$num_rows=mysqli_num_rows($result);
$p=md5($password);
echo $num_rows;
if ($num_rows > 0) {
while($row = mysqli_fetch_array($result)){
	echo $num_rows;

	if($_POST['username']==$row['username'])
	{
		
		$_SESSION['username']=$username;
		header("Location:/nex/user.php");
	}
	else 
	{
		echo '<script language="javascript">';
		echo 'alert("You got credentials wrong")';
		echo '</script>';
		echo "You got credentials wrong";
	}
}
}
}


?>
<form method="post" action="login1.php">

</br>
</br>
<label>Username :</label><input type="text" name="username"></br></br>
<label>Password :</label><input type="password" name="password"></br>
<br/>
<input type="submit" value="submit"></br>
</form>	
</head>
 
 
 
 
 
