@extends('layouts.principal')
@section('hi')
	 <div id="map" class="mapa"></div>

    <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.

      function initMap() {
        var bsAs = {lat: -34.603722,lng:  -58.381592};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 3,
          center: bsAs
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" >Uluru</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Uluru</b></p>'+
            '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
            'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
            '(last visited June 22, 2009).</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        var inglaterra={lat: 51.509865 ,lng:  -0.118092};
        var sdChile={lat:  -33.447487,lng:  -70.673676};
        var saoPaulo={lat:  -23.533773,lng:  -46.625290};

        
         var marker = new google.maps.Marker({
          position: bsAs,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        var marker2 = new google.maps.Marker({
          position: inglaterra,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        var marker3 = new google.maps.Marker({
          position: sdChile,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        var marker4 = new google.maps.Marker({
          position: saoPaulo,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });

        marker2.addListener('click', function() {
          infowindow.open(map, marker2);
        });
        marker3.addListener('click', function() {
          infowindow.open(map, marker3);
        });
        marker4.addListener('click', function() {
          infowindow.open(map, marker4);
        });
         var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" >Botín</h1>'+
            '<div id="bodyContent">'+
            '<p><b>+10 Oro</b></p>'+
             '<p><b>+15000 Millas</b></p>'+
            '<a href="#">Obtener</a> '+
        
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

       
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
        marker2.addListener('click', function() {
          infowindow.open(map, marker2);
        });
        marker3.addListener('click', function() {
          infowindow.open(map, marker3);
        });
        marker4.addListener('click', function() {
          infowindow.open(map, marker4);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bVgO6G2tR2LQmzAp9CIGWibfTDkqDjc&callback=initMap">
    </script>

@endsection
