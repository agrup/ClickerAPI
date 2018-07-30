@section('jugador2')
	

	
 <div id="map" class="mapa"></div>
 @foreach($markers as $marka)
 	<div id="{{$marka->id}}" class="markerConteiner" hidden>
 		<p id="{{$marka->distancia}}" hidden>distancia</p>
 		<p id="{{$marka->latitud}}" hidden>latitud</p>
 		<p id="{{$marka->longitud}}" hidden>longitud</p>
 		<p id="{{$marka->oro}}" hidden>oro</p>
 		<p id="{{$marka->millas}}" hidden>millas</p>
 		<p id="{{$marka->experiencia}}" hidden>experiencia</p>
 		<p id="{{$marka->ataque}}" hidden>ataque</p>
 		<p id="{{$marka->vida}}" hidden>vida</p>
 	</div>

 @endforeach

    <script type="text/javascript" src="{{asset("js/mapaPrincipalV3.js")}}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_MAP_KEY")}}&callback=initMap">
    </script>

@endsection

