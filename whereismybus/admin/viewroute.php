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
        <title>Bus Route</title>
</head>
<body>
	<div id="outer">
	<?php include('../header.inc')?>
	<div id="primarycontent">
            <div id="avcontainer">
                <ul >
                    <li > <a href='viewbus.php' >List Buses</a></li> 
                    <li id="active"> <a href='viewroute.php' id="current">List Route</a></li>
                    <li><a href='addbusform.php' >Add Bus</a> </li>
                    <li><a href='addrouteform.php'>Add Route</a></li>
		    <li><a href='logout.php'>Logout</a></li>
                </ul>
            </div>
            <br/>
            <br/>
            <div id="post">
                <div class="header">
                    <h3>Information about all buses :</h3>
                </div>
                <?php
                if ($_GET['msg'] != "")  {
                    echo '<div id = "msg">';
                    echo $_GET['msg'];
                    echo '</div>';
                }
                ?>  
                <div id="content">
                <?php
                    include('../config.inc');
                    $query = mysql_query("SELECT * FROM route ORDER BY routenumber");
                    echo '<table id = "bustable">';
                    echo "<tr>
                        <th>Route No.</th>
                        <th>Source</th>
                        <th>Destination</th>
                        <th>Edit ?</th>
                        <th>Delete ?</th>
                        </tr>";
                    $i = 1;
                    while($row = mysql_fetch_array($query))
                    {
                        if($i % 2 == 0)
                        {
                            echo '<tr class = "alt">';
                        }
                        else
                        {
                            echo "<tr>";
                        }
                        echo "<td>".$row["routenumber"]."</td>";
                        echo "<td>".$row['stop0']."</td>";
                        echo "<td>".$row['stop9']."</td>";
                        echo "<td> <a href='editrouteform.php?routenumber=".$row["routenumber"]."'>Edit</a></td>";
                        echo "<td> <a href='deleteroutedb.php?routenumber=".$row["routenumber"]."'>Delete</a></td>";
                        echo "</tr>";
                        $i++;
                    }	
                    echo "</table>";
                    mysql_close($connection);
                ?>
                </div>
             </div>
	</div>
    	<?php include('../sidebar.inc'); 
		include('../footer.inc'); ?>
	</div>
</body>
</html>
