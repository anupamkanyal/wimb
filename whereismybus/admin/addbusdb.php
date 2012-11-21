<?php
session_start();
if(!isset($_SESSION['username']))
{
		header('Location: index.php');
}
?>
<?php
include ('../config.inc');
$busnumber = strip_tags($_POST['busnumber']);
$password1 = strip_tags($_POST['password1']);
$password2 = strip_tags($_POST['password2']);

$query = "SELECT * FROM bus WHERE busnumber='$busnumber'";
$sql_ans=mysql_query($query,$connection);
$result = mysql_num_rows($sql_ans);
if ($result == 0)
{   
		if ($password1==$password2)
		{   
				mysql_query("INSERT INTO bus(busnumber,password) VALUES ('$busnumber','$password1')",$connection);
				header("Location: addbusform.php?msg=New Bus added");
		}   
		else
		{
				header("Location: addbusform.php?msg=Password didnt match");
		}
}
else
{
		header("Location: addbusform.php?msg=Bus number already exist in DB");
}
?>
