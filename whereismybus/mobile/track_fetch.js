var gmap;var marker;var xmlhttp;var busnumber;
function updateHTML() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		var response = xmlhttp.responseText.split(" ");
		document.getElementById("businfo").innerHTML="Latitude: " + response[0] + " Longitude: " + response[1];
		var latlng = new google.maps.LatLng(response[0],response[1]);
		marker.setPosition(latlng);
		gmap.panTo(latlng);
	}
}
function updateXY() {
	if (window.XMLHttpRequest) { xmlhttp=new XMLHttpRequest(); } else { xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); }
	xmlhttp.onreadystatechange=updateHTML;
	xmlhttp.open("GET","track_fetch.php?busnumber="+busnumber,true);
	xmlhttp.send();setTimeout("updateXY()",3000);
}
function initialise(busnum) {
	busnumber=busnum;
	var latlng = new google.maps.LatLng(16.316, 78.934);
	var myOptions = {zoom: 17, center: latlng, mapTypeId: google.maps.MapTypeId.HYBRID };
	gmap = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
	myOptions = {map: gmap, position: latlng, title: busnumber};
	marker = new google.maps.Marker(myOptions);
	updateXY();
}

