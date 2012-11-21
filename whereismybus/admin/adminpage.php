<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />    
	 <link rel="stylesheet" type="text/css" href="/whereismybus/default.css" />
         <title>Admin - Home</title>
</head>
<body>
	<div id="outer">
	   <?php include('../header.inc');?>
	<div id="primarycontent"> 
		<div align="center">
		   <div id="navcontainer">
			<h1>Welcome to Admin page!</h1>

				<br/>
				<br/>
				<br/>
				<h2><ul id="navlist">
					<li><a href='viewbus.php'>List buses</a> </li>
                                        <li><a href='viewroute.php'>List Route</a> </li>
					<li><a href='addbusform.php' >Add Bus</a> </li>
					<li><a href='addrouteform.php'>Add Bus Route</a></li>
					<li><a href='logout.php'>Logout</a></li>
 
			      </ul>
			     
			</h2>
		   </div>
	      </div>
	</div>
     	<?php include('../sidebar.inc'); 
		include('../footer.inc'); ?>
	</div>
</body>
</html>

