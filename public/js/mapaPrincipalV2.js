function initMap(){
	var bsAs = {lat: -34.603722,lng:  -58.381592};
	var options ={
		zoom: 2,
		center:bsAs,
		scrollwheel:false,
		draggable:true,
		mapTypeId: google.maps.MapTypeId.SATELLITE  
	}
	var map = new google.maps.Map(document.getElementById('map'),options);

	/* agrego markers
	addMarker({lat: 51.509865 ,lng:  -0.118092});
	addMarker({lat:  -33.447487,lng:  -70.673676});
	addMarker({lat:  -23.533773,lng:  -46.625290});
	addMarker({lat:  -12.592502,lng:  18.723946});
	addMarker({lat:  -22.420846,lng:  23.777657});
	addMarker({lat:  -2.837668,lng:  24.232843});
	addMarker({lat:  5.593246,lng:  12.553059});
	addMarker({lat:  26.396317,lng:  28.921499});*/

	function addMarker(coords){
		var marker = new google.maps.Marker({
			position:coords,
			map:map

		});
	}
}