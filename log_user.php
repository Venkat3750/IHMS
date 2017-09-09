<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	require_once 'db_connect.php';
	if ($db_found)
	{
		$name = $_POST['name'];
		$passwd =  $_POST['passwd'];
		if ($db_found) 
		{
			$uname = quote_smart($name, $db_handle);
			$p=md5($passwd);
			$SQL =	"select * from users where user_id = $uname";
			$result = mysql_query($SQL);
			$num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
				$row = mysql_fetch_array($result);
				if($p == $row["password"])
				{
					session_start();
					$_SESSION['loggedin']=true;
					$_SESSION['username']=$name;
					$_SESSION['LAST_ACTIVITY'] = time();
					header("Location:index.php");
					exit();
				}
				
			}
			else
			{
				echo "User Does not exist";
			}
		}
			mysql_close($db_handle);
	}
	else
	{
		$eM="Data Base Not Found";
	}
	
}		
?>