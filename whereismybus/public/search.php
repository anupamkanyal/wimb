<!doctype html>
<html lang="en-US">

<head>
	<title>WhereIsMyBus - Search</title>

	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
	<meta http-equiv="keywords" content="whereismybus,live,bus,tracking,through,GPS,APSRTC,schedule,maps,IIIT,Hyderabad" />
	<meta http-equiv="description" content="WhereIsMyBus.com: Track Buses in Realtime" />
	<link rel="stylesheet" type="text/css" href="/whereismybus/default.css" />
        <script type="text/javascript">
	function OpenMap(busnumber,routenumber,stop0,stop9) {
		window.open("track.php?busnumber="+busnumber+"&routenumber="+routenumber+"&stop0="+stop0+"&stop9="+stop9,
		"","titlebar=no,scrollbars=no,menubar=no,status=no,resizable=no,location=no,height=600,width=800");
	}
	</script>
</head>

<body>
    <div id="outer">
	<?php include('../header.inc')?>
	<div id="primarycontent"> 
            <div class="post">
                <div class="header">
                    <h3>1. Search for a Bus</h3>
                </div>
                <div id="content" class="form">
                    <form method="POST" action='search.php'>
                    <table  cellspacing="5px" cellpadding="5px">
                    <tr>
                        <td><input type="radio" name="searchtype" value="busnumber"/>By Bus Number:</td>
                        <td><select name="busnumber">
                        <?php
                            include("../config.inc");
                            $query=mysql_query("SELECT busnumber FROM bus ORDER BY busnumber");
                            while($row=mysql_fetch_array($query)) {
                                    echo "<option value=\"".$row['busnumber']."\">".$row['busnumber']."</option>";
                            }
                        ?>
                        </select></td>
                    </tr>
                    <tr>
                            <td><input type="radio" name="searchtype" value="routenumber" checked="true"/>By Route Number:</td>
                            <td><select name="routenumber">
                            <?php
                                    $query=mysql_query("SELECT routenumber FROM route ORDER BY routenumber");
                                    while($row=mysql_fetch_array($query)) {
                                            echo "<option value=\"".$row['routenumber']."\">".$row['routenumber']."</option>";
                                    }
                            ?>
                            </select></td>
                    </tr>
                    <tr>
                            <td><input type="radio" name="searchtype" value="stop"/>By Bus Stop:</td>
                            <td>
                            Source Stop: <select name="sourcestop">
                            <?php
                                    $query=mysql_query("SELECT stop0 FROM stops ORDER BY stop0");
                                    while($row=mysql_fetch_array($query)) {
                                            echo "<option value=\"".$row['stop0']."\">".$row['stop0']."</option>";
                                    }
                            ?>
                            </select><br/>
                            Destination Stop: <select name="deststop">
                            <?php
                                    $query=mysql_query("SELECT stop0 FROM stops ORDER BY stop0");
                                    while($row=mysql_fetch_array($query)) {
                                            echo "<option value=\"".$row['stop0']."\">".$row['stop0']."</option>";
                                    }
                            ?>
                            </select>
                            </td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="submit"/></td>
                    </tr>
                    </table>
                    </form>
                </div>
            </div>
            <div class="post">
            <?php
                function PrintResults($query) {
                    while($row=mysql_fetch_array($query)) {
                            echo '<tr>';
                            echo '<td><a href=\'javascript:OpenMap("'.$row['busnumber'].'","'.$row['routenumber'].'","'.
                            $row['stop0'].'","'.$row['stop9'].'")\'>'.$row['busnumber'].'</a></td>';
                            echo '<td>'.$row['routenumber'].'</td>';
                            echo '<td>'.$row['stop0'].'</td>';
                            echo '<td>'.$row['stop9'].'</td>';
                            echo '</tr>';
                    }
            }

                
            if($_POST['submit']=="submit") {
                    echo '<div class="header">
                        <h3>2. Choose your Bus</h3>
                        </div>
                        <div id="content">

                            <table id = "bustable">
                            <tr><th>BusNumber</th><th>RouteNumber</th><th>Source</th><th>Destination</th></tr>';
                            switch($_POST['searchtype']) {
                                case "busnumber":
                                    $busnumber=$_POST['busnumber'];
                                    $query=mysql_query("SELECT stop0,stop9,busnumber,routenumber FROM bus NATURAL JOIN route WHERE busnumber='$busnumber'");
                                    PrintResults($query);
                                    echo "</table><br/><h4>Your search returned ".mysql_num_rows($query)." result(s).</h4>";
                                    break;
                                case "routenumber":
                                    $routenumber=$_POST['routenumber'];
                                    $query=mysql_query("SELECT stop0,stop9,busnumber,routenumber FROM bus NATURAL JOIN route WHERE routenumber='$routenumber'");
                                    PrintResults($query);
                                    echo "</table><br/><h4>Your search returned ".mysql_num_rows($query)." result(s).</h4>";
                                    break;
                                case "stop":
                                    $sourcestop=$_POST['sourcestop'];
                                    $deststop=$_POST['deststop'];
                                    $res=0;
                                    for ($i=0;$i<=9;$i++){ 
                                        for ($j=0;$j<=9;$j++) {
                                            $query=mysql_query("SELECT stop0,stop9,busnumber,routenumber FROM bus NATURAL JOIN route WHERE
                                            stop$i='$sourcestop' AND stop$j='$deststop'");
                                            $res=$res+mysql_num_rows($query);
                                            PrintResults($query);
                                        }
                                    }
                                    echo "</table><br/><h4>Your search returned ".$res." result(s).</h4>";
                                    break;
                            }
                        echo '</div>    ';
                    } 
                mysql_close($connection);
                ?>
            </div>


        </div>      <!-- end of primary content-->
        <?php include('../sidebar.inc'); 
        include('../footer.inc'); ?>
    </div>          
</body>
</html>

