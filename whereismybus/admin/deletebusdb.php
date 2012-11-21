<?php
session_start();
if(!isset($_SESSION['username']))
{
		header('Location: index.php');
}
?>
<?php
	include ('../config.inc');
	$busnumber = strip_tags($_GET['busnumber']);
        echo $busnumber;
	mysql_query("DELETE FROM bus WHERE busnumber='$busnumber'",$connection);
	header("Location: viewbus.php?msg=Bus record deleted");
?>
