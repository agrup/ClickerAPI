@extends('layouts.principal')
@section('hi')
	 <div id="map" class="mapa"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bVgO6G2tR2LQmzAp9CIGWibfTDkqDjc&callback=initMap">
    </script>
  </script>
@endsection
