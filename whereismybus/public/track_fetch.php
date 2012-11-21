<?php
	include('../config.inc');
	$query=mysql_query("SELECT * FROM bus WHERE busnumber='$_GET[busnumber]'");
	$row=mysql_fetch_array($query);
	echo $row['latitude'] . " " . $row['longitude'];
?>

