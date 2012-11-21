<?php
        session_start();
        if(($_SESSION['username'])=="admin") {
		echo	'<table width="100%" border="1px" align="center" style="text-align:center;font-weight:bold;">
				<tr>
					<td><a href="?action=addbus">Add Bus</a></td>
					<td><a href="?action=shwbus">Show Buses</a></td>
					<td><a href="?action=addrut">Add Route</a></td>
					<td><a href="?action=shwrut">Show Routes</a></td>
					<td><a href="?action=logout">Logout</a></td>
				</tr>
			 </table>';

		include('config.php');

		switch($_GET['action']) {
			case "addbus":
				if ($_GET['submit']=="submit") {
					$busnumber=$_GET['busnumber'];
					$password=$_GET['password'];
					if(mysql_query("INSERT INTO bus(busnumber,password) VALUES ('$busnumber','$password')",$connection)) {
						header('Location: login.php?action=shwbus&mesg=Successfully Added New Bus!');
					} else {
						header('Location: login.php?action=addbus&mesg=Failed to Add New Bus: '.mysql_error());
					}
				}else{
					echo	'<h3>Add Bus</h3>
						<form method="GET">
							<table>
								<tr><td>Busnumber: </td><td><input name="busnumber" type="text"/></td></tr>
								<tr><td>Password: </td><td><input name="password" type="password"/></td></tr>
								<tr><td></td><td><input name="submit" type="submit" value="submit"/></td></tr>
								<input name="action" type="hidden" value="addbus"/>
							 </table>
						 </form>';	
				}
				break;
			case "rembus":
				$busnumber=$_GET['busnumber'];
				if (mysql_query("DELETE FROM bus WHERE busnumber='$busnumber'",$connection)) {
					header('Location: login.php?action=shwbus&mesg=Successfully Deleted Bus!');
				} else {
					header('Location: login.php?action=shwbus&mesg=Failed to Delete Bus: '.mysql_error());
				}
				break;
			case "shwbus":
				echo	'<h3>List of Buses</h3>
					<table width="100%" border="1px" align="center" style="text-align:center;">
						<tr><th>BusNumber</th><th>RouteNumber</th><th>Password</th><th>Latitude</th>
						<th>Longitude</th><th>Delete?</th></tr>';
				$query=mysql_query("SELECT * FROM bus");
				while($row=mysql_fetch_array($query)) {
					echo "<tr>";
					echo "<td>".$row['busnumber']."</td>";
					echo "<td>".$row['routenumber']."</td>";
					echo "<td>".$row['password']."</td>";
					echo "<td>".$row['latitude']."</td>";
					echo "<td>".$row['longitude']."</td>";
					echo "<td><a href=\"?action=rembus&busnumber=".$row['busnumber']."\">Delete</a></td>";
					echo "</tr>";
				}
				echo	'</table>';
				break;
			case "addrut":
				if ($_GET['submit']=="submit") {
					$routenumber=$_GET['routenumber'];
					$stop0=$_GET['stop0'];
					$stop1=$_GET['stop1'];
					$stop2=$_GET['stop2'];
					$stop3=$_GET['stop3'];
					$stop4=$_GET['stop4'];
					$stop5=$_GET['stop5'];
					$stop6=$_GET['stop6'];
					$stop7=$_GET['stop7'];
					$stop8=$_GET['stop8'];
					$stop9=$_GET['stop9'];
					if(mysql_query("INSERT INTO route(routenumber,stop0,stop1,stop2,stop3,stop4,stop5,stop6,stop7,stop8,stop9) VALUES ('$routenumber','$stop0','$stop1','$stop2','$stop3','$stop4','$stop5','$stop6','$stop7','$stop8','$stop9')",$connection)) {
						header('Location: login.php?action=shwrut&mesg=Successfully Added New Route!');
					} else {
						header('Location: login.php?action=addrut&mesg=Failed to Add New Route: '.mysql_error());
					}
				}else{
					echo	'<h3>Add Route</h3>
						<form method="GET">
							<table>
								<tr><td>RouteNumber: </td><td><input name="routenumber" type="text"/></td></tr>
								<tr><td>Stop0: </td><td><input name="stop0" type="text"/></td></tr>
								<tr><td>Stop1: </td><td><input name="stop1" type="text"/></td></tr>
								<tr><td>Stop2: </td><td><input name="stop2" type="text"/></td></tr>
								<tr><td>Stop3: </td><td><input name="stop3" type="text"/></td></tr>
								<tr><td>Stop4: </td><td><input name="stop4" type="text"/></td></tr>
								<tr><td>Stop5: </td><td><input name="stop5" type="text"/></td></tr>
								<tr><td>Stop6: </td><td><input name="stop6" type="text"/></td></tr>
								<tr><td>Stop7: </td><td><input name="stop7" type="text"/></td></tr>
								<tr><td>Stop8: </td><td><input name="stop8" type="text"/></td></tr>
								<tr><td>Stop9: </td><td><input name="stop9" type="text"/></td></tr>
								<tr><td></td><td><input name="submit" type="submit" value="submit"/></td></tr>
								<input name="action" type="hidden" value="addrut"/>
							 </table>
						 </form>';	
				}
				break;
			case "remrut":
				$routenumber=$_GET['routenumber'];
				if (mysql_query("DELETE FROM route WHERE routenumber='$routenumber'",$connection)) {
					header('Location: login.php?action=shwrut&mesg=Successfully Deleted Route!');
				} else {
					header('Location: login.php?action=shwrut&mesg=Failed to Delete Route: '.mysql_error());
				}
				break;
			case "shwrut":
				echo	'<h3>List of Routes</h3>
					<table width="100%" border="1px" align="center" style="text-align:center;">
						<tr><th>RouteNumber</th><th>Stops</th><th>Delete?</th></tr>';
				$query=mysql_query("SELECT * FROM route");
				while($row=mysql_fetch_array($query)) {
					echo "<tr>";
					echo "<td>".$row['routenumber']."</td>";
					echo "<td style=\"text-align:left;\"><ol>";
					echo "<li>".$row['stop0']."</li>";
					echo "<li>".$row['stop1']."</li>";
					echo "<li>".$row['stop2']."</li>";
					echo "<li>".$row['stop3']."</li>";
					echo "<li>".$row['stop4']."</li>";
					echo "<li>".$row['stop5']."</li>";
					echo "<li>".$row['stop6']."</li>";
					echo "<li>".$row['stop7']."</li>";
					echo "<li>".$row['stop8']."</li>";
					echo "<li>".$row['stop9']."</li>";
					echo "</ol></td>";
					echo "<td><a href=\"?action=remrut&routenumber=".$row['routenumber']."\">Delete</a></td>";
					echo "</tr>";
				}
				echo	'</table>';
				break;
			case "logout":
				unset($_SESSION['username']);
				session_destroy();
				header('Location: login.php?mesg=Successfully Logged Out!');
				break;
			default:
				echo '<br/>Welcome! Please choose an action.';
		}
        } else {
		if($_GET['submit']=="submit") {
			if ($_GET['username']=="admin" && $_GET['password']=="jvsiiith321") {
				$_SESSION['username']="admin";
				header('Location: login.php');
			}else {
				header('Location: login.php?mesg=Wrong Credentials!');
			}
		}else {
			echo	'<h3>Login</h3>
				<form method="GET">
					<table>
						<tr><td>Username: </td><td><input name="username" type="text"/></td></tr>
						<tr><td>Password: </td><td><input name="password" type="password"/></td></tr>
						<tr><td></td><td><input name="submit" type="submit" value="submit"/></td></tr>
					 </table>
				 </form>';
		}
	}
	echo "<br/>".$_GET['mesg']."<br/>";
?>

