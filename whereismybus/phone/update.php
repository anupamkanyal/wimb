<?php
	include('../config.inc');

        $busnumber = $_POST['busnumber'];
        $password = $_POST['password'];
        $routenumber = $_POST['routenumber'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];

        $query = mysql_query(" SELECT * FROM bus WHERE busnumber='$busnumber' AND password='$password'",$connection);
        if(mysql_num_rows($query)==1) {
		if($routenumber=="") {
			if(mysql_query("UPDATE bus SET latitude='$latitude',longitude='$longitude' WHERE busnumber='$busnumber'")) echo "success";
			else echo "failed";
		} else {
			if(mysql_query("UPDATE bus SET latitude='0',longitude='0',routenumber='$routenumber' WHERE busnumber='$busnumber'")) echo "success";
			else echo "failed";
		}
        }
        else echo "failed";
        mysql_close($connection);
?>

