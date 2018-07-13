@section('jugador2')
	
 <div id="map" class="mapa"></div>

    <script type="text/javascript" src="{{asset("js/mapaPrincipal.js")}}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bVgO6G2tR2LQmzAp9CIGWibfTDkqDjc&callback=initMap">
    </script>

@endsection