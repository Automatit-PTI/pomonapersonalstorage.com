// JavaScript Document
	
	var directionDisplay;
	var directionsService = new google.maps.DirectionsService();
	
	function initialize() {
	directionsDisplay = new google.maps.DirectionsRenderer();
	var myOptions = {
	  zoom: 13,
	  mapTypeId: google.maps.MapTypeId.ROADMAP,
	  center: new google.maps.LatLng(34.025987,-117.730425)
	};
	var map = new google.maps.Map(document.getElementById('map_canvas'),
		myOptions);
	directionsDisplay.setMap(map);
	
	var marker = new google.maps.Marker({
	position: new google.maps.LatLng(34.025987,-117.730425), 
	map: map
	});   

	}
	
	function calcRoute() {
	var start = document.getElementById('start').value;
	var end = document.getElementById('end').value;
	var request = {
	  origin: start,
	  destination: end,
	  travelMode: google.maps.DirectionsTravelMode.DRIVING
	};
	directionsService.route(request, function(response, status) {
	  if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
	  }
	});
	}
	google.maps.event.addDomListener(window, 'load', initialize);