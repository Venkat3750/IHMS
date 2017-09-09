<?php
$user_name = "root";
$pass_word = "1234";
$database = "dbtest";
$server = "localhost";
$db_handle = mysql_connect($server, $user_name, $pass_word);
$db_found = mysql_select_db($database, $db_handle);

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