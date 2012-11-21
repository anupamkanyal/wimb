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
	<title>Add Bus route</title>
	<link rel="stylesheet" type="text/css" href="/whereismybus/default.css" />
	
</head> 

<body >
    <div id="outer">
    <?php include('../header.inc')?>
        <div id="primarycontent">
            <div id="avcontainer">
                <ul id="avlist">
                    <li> <a href='viewbus.php'>List Buses</a></li>
                    <li> <a href='viewroute.php'>List Route</a></li>
                    <li><a href='addbusform.php' >Add Bus</a> </li>
                    <li id="active"><a href='addrouteform.php' id="current">Add Route</a></li>
            	    <li><a href='logout.php'>Logout</a></li>
		</ul>
             </div>
            <br/>
            <br/>
            <div class="post">
                <div class="header">
                    <h3>Add new bus route </h3> 
                </div>
                <?php
                if ($_GET['msg'] != "")  {
                    echo '<div id = "msg">';
                    echo $_GET['msg'];
                    echo '</div>';
                }
                ?>    
                <div class="content">

                    <table id="mytable">
                    <form method='POST' action='addroutedb.php'>	 
                    <tr>
                        <th><label>Bus route No.<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="routenumber"/></label> </td> 
                    </tr> 
                    <tr> 
                        <th><label>Stop 0<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop0"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 1<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop1"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 2<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop2"/></label> </td>
                    </tr> 
                    <tr> 
                        <th><label>Stop 3<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop3"/></label> </td>
                    <tr> 
                        <th><label>Stop 4<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop4"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 5<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop5"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 6<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop6"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 7<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop7"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 8<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop8"/></label> </td>
                    </tr>
                    <tr> 
                        <th><label>Stop 9<br /> </th>
                        <th>:</th>
                        <td><input type="text" size="30" name="stop9"/></label> </td>
                    </tr> 
                    <tr>
                        <th></th>
                        <th></th>
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
