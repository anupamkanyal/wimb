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
$query = "SELECT * FROM route  WHERE routenumber = '$routenumber'";
$sql_ans=mysql_query($query);
$result = mysql_num_rows($sql_ans);
if ($result == 0)
{   
	mysql_query("INSERT INTO route VALUES ('$routenumber','$stop0','$stop1','$stop2','$stop3','$stop4','$stop5','$stop6','$stop7','$stop8','$stop9')",$connection);
	header("Location: addrouteform.php?msg=New Bus Route added");
}
else
{
	header("Location: addrouteform.php?msg=Bus route already exist in DB");
}
?>
