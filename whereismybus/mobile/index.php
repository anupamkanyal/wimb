<!doctype html>
<html lang="en-US">

<head>
	<title>WhereIsMyBus</title>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<link rel="shortcut icon" type="image/x-icon" href="resources/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="resources/style.css"/>
	<meta http-equiv="keywords" content="whereismybus,live,bus,tracking,through,GPS,APSRTC,schedule,maps,IIIT,Hyderabad" />
	<meta http-equiv="description" content="WhereIsMyBus: Track Buses in Realtime" />
</head>

<body>
	<table>
		<tr id="header">
			<td id="headerC"></td>
		</tr>
		<tr id="navigation">
			<td>
				<br/>
				<ul>
					<li><button type="button" onclick='document.getElementById("cframe").src="home.php";'>Home</button></li>
					<li><button type="button" onclick='document.getElementById("cframe").src="search.php";'>StartTracking!</button></li>
					<li><button type="button" onclick='document.getElementById("cframe").src="about.php";'>AboutUs</button></li>
					<li><button type="button" onclick='document.getElementById("cframe").src="login.php";'>Admin</button></li>
				</ul>
			</td>
		</tr>
		<tr id="content">
			<td>
				<iframe id="cframe" src="home.php"></iframe>
			</td>
		</tr>
		<tr id="footer">
			<td>
				<hr/>
				&copy; 2011 Team 11. All Rights Reserved <br/> You are seeing a mobile version. <a href="../index.php">Click Here</a> for normal version.
				<hr/>
			</td>
		<tr/>
	</table>
</body>
</html>

