<?php
	$hostname='localhost';
	$username='whereismybus';
	$password='iiith321';
	$dbname  ='whereismybus';

	$connection = mysql_connect($hostname,$username,$password);
	$connection OR DIE('Connection to sql server failed'. mysql_error());
	mysql_select_db($dbname,$connection) OR DIE('Could not select database' . mysql_error());
?>

