<div id = "page-wrapper" style = "padding: 10px">

<div class = "row">
<h2 class = "col-lg-12">Track</h2>
</div>
	<div id = "map-canvas" style = "height: 500px;">
	</div>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdcZnovrfQTeCIYZvK8yFHexUjM2a7hZg&sensor=false"> </script>
	 	<script type = "text/javascript">
			$(document).ready(function(){
				getCoordinates();
				setInterval(getCoordinates, 5000);
				mapInitialized = false;
				lineCoordinates = new Array();
			});	


			function getCoordinates(){
					$.ajax({
					    type: 'get',
					    url: 'getCoordinates',
					    crossDomain: true,
					    success: function(data) {
					    if(data == "failure"){
					    	document.write("Error fetching map data. Try again later");
					    }else{
					    
						    	if(mapInitialized){
						       		plot(data);
						   		}else{
						   			initMap(data);
						   			mapInitialized = true;
						   		}	
						    }
					    }
					});

				}
				   function initMap(data) {
				   		var coordinates = data.split(",");
				        var mapOptions = {
				          center: new google.maps.LatLng(coordinates[0], coordinates[1]),
				          zoom: 8
				        };
				         map = new google.maps.Map(document.getElementById("map-canvas"),
				            mapOptions);
				    }

				    function plot(data){
				    	coordinates = data.split(",");
				    	var myLatlng = new google.maps.LatLng(coordinates[0],coordinates[1]);
				    	lineCoordinates.push(myLatlng);
				    	var marker = new google.maps.Marker({
    						position: myLatlng,
   						 	title:"Coordinate"
						});
						marker.setMap(map);
						connectPoints();
				    }

				    function connectPoints(){
				    	 travelPath = new google.maps.Polyline({
							  path:lineCoordinates,
							  strokeColor:"#0000FF",
							  strokeOpacity:0.8,
							  strokeWeight:2
						});

				    	 travelPath.setMap(map);
				    }

	</script>
</div>
