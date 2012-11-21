<?php
	include('../config.inc');
	$query=mysql_query("SELECT busnumber FROM bus");
	while ($row=mysql_fetch_array($query)) {
		echo $row['busnumber']." ";
	}
	echo "\n";
	$query=mysql_query("SELECT routenumber FROM route");
	while ($row=mysql_fetch_array($query)) {
		echo $row['routenumber']." ";
	}
	mysql_close($connection);
?>
