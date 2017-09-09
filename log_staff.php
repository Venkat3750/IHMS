<?php
if ($_SERVER['REQUEST_METHOD'] == 'post'){
	require_once 'connect.php';
	if ($connect)
	{
		$name = $_POST['name'];
		$passwd =  $_POST['passwd'];
		if ($connect) 
		{
			$uname = $name;
			$p=md5($passwd);
			$SQL =	"select * from users where user_id = $uname";
			$result = mysqli_query($connect,$SQL);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows > 0) {
				$row = mysql_fetch_array($result);
				if($p == $row["password"])
				{
					session_start();
					$_SESSION['loggedin']=true;
					$_SESSION['username']=$name;
					$_SESSION['LAST_ACTIVITY'] = time();
					header("Location: /nex/admin.php");
					exit();
				}
				
			}
			else
			{
				echo "User Does not exist";
			}
		}
			mysqli_close($connect);
	}
	else
	{
		$eM="Data Base Not Found";
	}
	
}		
?>