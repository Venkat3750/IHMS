<?php
session_start();
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true)
	{
		if(isset($_SESSION['LAST_ACTIVITY']) && (time()-$_SESSION['LAST_ACTIVITY'] > 360))
		{
			session_destroy();
			session_unset();
			header ("Location: login.php");
		}
		else
		{
			$_SESSION['LAST_ACTIVITY']=time();
			
		}
	}
	else
	{
		header ("Location: login.php");
		exit();
	}
?>