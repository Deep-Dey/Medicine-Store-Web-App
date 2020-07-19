<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='example';
$dbc=mysql_connect($hostname,$username,$password);
	if(!$dbc)
	{
		die('notconnected with database'.mysql_error());
	}
	$sds=mysql_select_db($dbname,$dbc);
	if(!$sds)
	{
		die('not connected with instance'.mysql_error());
	}
?>	