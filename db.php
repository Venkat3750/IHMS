<?php
$user_name = "root";
$pass_word = " ";
$database = "ihms";
$server = "localhost";
$db_handle = mysqli_connect($server, $user_name, $pass_word);


function quote_smart($value, $handle) 
{
	if (get_magic_quotes_gpc()) 
	{
		$value = stripslashes($value);
	}
	if (!is_numeric($value)) 
	{
		$value = "'" . mysql_real_escape_string($value, $handle) . "'";
	}
   return $value;
}
?>