<?php
	session_start();
	$username = $_GET['username'];
	$password = $_GET['password'];
	if($password == 'jvsiiith321')	//if username and paswd match jump to securepage.php
	{
		$_SESSION['username']="admin";
		header('Location: adminpage.php');		
	}
	else
	{
		$error1="Password didn't match !! Try again";
       		header("Location: index.php?msg=$error1");
	}
?>

