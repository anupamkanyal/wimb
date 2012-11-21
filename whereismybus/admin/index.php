<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	session_start();
	if(isset($_SESSION['username']))
	{
		header('Location: adminpage.php');
	}
?>

<html>

<head>
 	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />	
	<title>Where Is My Bus Login</title>
	<link rel="stylesheet" type="text/css" href="/whereismybus/default.css" />
</head> 

<body >
	<div id="outer">
   	 <?php include('../header.inc');?>
	<div id="primarycontent">
  	
             <?php
            if ($_GET['msg'] != "") {
                echo '<div id = "msg">';
                echo $_GET['msg'];
                echo '</div>';
            }
            ?>
            <br/><br/>
            <div id="login-box">
   		 <form method="GET" action="update.php">
			<h2 align="center">Admin Login</h2>
                        <br/><br/><br/>
                        
    			<div style="margin-bottom:75px">
                           
    			<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" type="password" class="form-login" size="30" maxlength="2048" /></div>
    				</div>
                        <input type="image" name="login" src="../images/login-btn.png" width="103" height="42" style="margin-left:90px;" > </input>
    		</form>
	</div>
	</div>
	<?php include('../sidebar.inc'); 
		include('../footer.inc'); ?>
	</div>
</body>

</html> 
