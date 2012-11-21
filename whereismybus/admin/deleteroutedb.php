<?php
session_start();
if(!isset($_SESSION['username']))
{
		header('Location: index.php');
}
?>
<?php
	include ('../config.inc');
	$routenumber = strip_tags($_GET['routenumber']);
	mysql_query("DELETE FROM route WHERE routenumber='$routenumber'",$connection);
	header("Location: viewroute.php?msg=Bus Route record deleted");
?>
