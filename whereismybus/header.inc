<?php
echo '

<div id="upbg"></div>
<div id="inner">

	<!--<div id="header">
		<h1><span>Where Is My</span> BUS</h1>
	</div> -->
	
	<div id="splash"></div>
	
	<div id="menu">
		<ul>
			<li class="first"><a href="/whereismybus/index.php">Home</a></li>
			<li><a href="/whereismybus/public/search.php">StartTracking!</a></li>
			<li><a href="/whereismybus/contact.php">AboutUs</a></li>
                        
                        <li><a href="/whereismybus/admin/index.php">Admin</a></li>
                </ul>        
		<div id="date">
			<script type = "text/javascript">
				var DayArray = new Array("Sunday","Monday","Tuesday","Wednesday","Friday","Saturday");
				var MonthArray = new Array ("January","February","March","April","May","June","July","August","September","October","November","December");
				var mydate = new Date();
				var year = mydate.getYear();
				if (year < 1000)
					year+=1900;
				var day = mydate.getDay();
				var month = mydate.getMonth();
				var ddate = mydate.getDate();
				document.write(DayArray[day]+", "+MonthArray[month]+" "+ddate+", "+year);
			</script>
		</div>
	</div>
</div>
';
?>
