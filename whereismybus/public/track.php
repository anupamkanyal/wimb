<html>
<head>
	<title>WhereIsMyBus - Track</title>
	<link rel="stylesheet" type="text/css" href="../default.css" />
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"> </script>
	<script type="text/javascript" src="track_fetch.js"> </script>
</head>
<body onload='initialise("<?php echo $_GET['busnumber']; ?>")'>
	<center>
	<div id="map_canvas" style="width:700px; height:450px"></div>
	<br/>
	<table id="bustable"  style="text-align:center">
		<tr><th>BusNumber</th><th>RouteNumber</th><th>SourceStop</th><th>DestinationStop</th><th>Coordinates</th></tr>
		<tr><td><?php echo $_GET['busnumber']; ?></td><td><?php echo $_GET['routenumber']; ?></td><td><?php echo $_GET['stop0']; ?></td>
		<td><?php echo $_GET['stop9']; ?></td><td id="businfo"></td></tr>
	</table>
</body>
</html>

