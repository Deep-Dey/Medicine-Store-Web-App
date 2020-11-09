<?php
$hostname='localhost';
$username='root';
$password='';
$dbname='example';
$dbc=mysqli_connect($hostname,$username,$password);
	if(!$dbc)
	{
		die('notconnected with database'.mysql_error());
	}
	$sds=mysqli_select_db($dbc,$dbname);
	if(!$sds)
	{
		die('not connected with instance'.mysql_error());
	}
?>	