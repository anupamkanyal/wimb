<?php
session_start();
if(!isset($_SESSION['username']))
{
		header('Location: index.php');
}
?>
<?php
include ('../config.inc');
$routenumber = strip_tags($_POST['routenumber']);
$stop0 = strip_tags($_POST['stop0']);
$stop1 = strip_tags($_POST['stop1']);
$stop2 = strip_tags($_POST['stop2']);
$stop3 = strip_tags($_POST['stop3']);
$stop4 = strip_tags($_POST['stop4']);
$stop5 = strip_tags($_POST['stop5']);
$stop6 = strip_tags($_POST['stop6']);
$stop7 = strip_tags($_POST['stop7']);
$stop8 = strip_tags($_POST['stop8']);
$stop9 = strip_tags($_POST['stop9']);

   
	mysql_query("UPDATE route set routenumber='$routenumber',stop0='$stop0',stop1='$stop1',stop2='$stop2',stop3='$stop3',stop4='$stop4',stop5='$stop5',stop6='$stop6',stop7='$stop7',stop8='$stop8',stop9='$stop9' WHERE routenumber='$routenumber'",$connection);
	header("Location: viewroute.php?msg=Bus Route updated");

?>
