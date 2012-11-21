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
	<title>Add Bus</title>
	 <link rel="stylesheet" type="text/css" href="/whereismybus/default.css" />
</head> 

<body >
    <div id="outer">
	<?php include('../header.inc')?>
	<div id="primarycontent"> 
           
            <div id="avcontainer">
                <ul id="avlist">
                <li> <a href='viewbus.php' >List Buses</a></li>
                <li> <a href='viewroute.php'>List Route</a></li>
                <li id ="active"><a href='addbusform.php' id="current">Add Bus</a> </li>
                <li><a href='addrouteform.php'>Add Route</a></li>
                <li><a href='logout.php'>Logout</a></li>

                </ul>
            </div>
            <br/><br/>
                        <div class="post">
                <div class="header">
                    <h3>Add new bus form</h3> 
                </div>
                
                <?php
                if ($_GET['msg'] != "")  {
                    echo '<div id = "msg">';
                    echo $_GET['msg'];
                    echo '</div>';
                    }   
                ?>
            <div id="content">
                
                 
                <table id="mytable" >
                <form method='POST' action='addbusdb.php'>				 
                <tr>
                    <th><label>Bus Number<br /> </th>
                    <th>:</th>
                    <td><input type="text" size="20" name="busnumber"/></label> </td> 
                </tr> 
                <tr> 
                    <th><label>Password<br /> </th>
                    <th>:</th>
                    <td><input type="password" size="20" name="password1"/></label> </td>
                </tr> 
                <tr> 
                    <th><label>Retype Password<br /> </th>
                    <th>:</th>
                    <td><input type="password" size="20" name="password2"/></label> </td>
                </tr> 
                <tr>
                    <td></td>
                    <td></td>
                    <td align="right"><input type="submit" value="Register"</td>
                </tr>
                </form> 
                </table>
            </div>
        </div>
     </div>
     <?php include('../sidebar.inc'); 
     	include('../footer.inc'); ?>
     </div>

</body>

</html> 
