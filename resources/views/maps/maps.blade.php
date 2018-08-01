@section('jugador2')
	

	
 <div id="map" class="mapa"></div>

 @foreach($markers as $marka)
 	<div data-marka="{{$marka->id}}" class="markerConteiner" hidden>
 		<p data-marka="{{$marka->distancia}}" hidden class="distancia{{$marka->id}}">distancia</p>
 		<p data-marka="{{$marka->latitud}}" hidden class="latitud{{$marka->id}}">latitud</p>
 		<p data-marka="{{$marka->longitud}}" hidden class="longitud{{$marka->id}}">longitud</p>
 		<p data-marka="{{$marka->oro}}" hidden class="oro{{$marka->id}}">oro</p>
 		<p data-marka="{{$marka->millas}}" hidden class="millas{{$marka->id}}">millas</p>
 		<p data-marka="{{$marka->experiencia}}" hidden class="experiencia{{$marka->id}}">experiencia</p>
 		<p data-marka="{{$marka->ataque}}" hidden class="ataque{{$marka->id}}">ataque</p>
 		<p data-marka="{{$marka->vida}}" hidden class="vida{{$marka->id}}">vida</p>
 		
 	</div>
       
            
        	 <div id="infobox{{$marka->id}}" class="infoboxMapa" >
                    <div id="siteNotice">

                    </div>
                    <form method="post" action="{{route('viajar')}}">
                        @csrf
                    <p data-marka="{{$marka->completa}}"  class="completa{{$marka->id}}">{{$marka->pivot->completa}}</p>
                    <h1 id="firstHeading" >Botín</h1>
                    <div id="bodyContent">
                    <h3>Distancia: {{$marka->distancia}}</h3>
                    @if($marka->oro)
                        <p><b>+{{$marka->oro}} Oro</b></p>
                        <input type="" name="oro" hidden value="{{$marka->oro}}">
                    @endif
                    @if($marka->millas)
                        <p><b>+{{$marka->millas}} Millas</b></p>
                        <input type="" name="milas" hidden value="{{$marka->milas}}">
                    @endif
                    @if($marka->experiencia)
                        <p><b>+{{$marka->experiencia}} Experiencia</b></p>
                        <input type="" name="experiencia" hidden value="{{$marka->experiencia}}">
                    @endif
                    @if($marka->ataque)
                        <p><b>+{{$marka->ataque}} Ataque</b></p>
                        <input type="" name="ataque" hidden value="{{$marka->ataque}}">
                    @endif
                    @if($marka->vida)
                        <p><b>+{{$marka->vida}} Vida</b></p>
                        <input type="" name="vida" hidden value="{{$marka->vida}}">
                    @endif
                    @if(($player->millas)>=($marka->distancia))
                 
                    @if($marka->pivot->completa=='incompleta')
                     <input type="submit" name="" value="Viajar y Cobrar">
                    @endif
                    <input type="" name="id" hidden value="{{$marka->id}}">        	
                       
            </form>
            @else
                <p style="font-color : red"><b>No posee sufieciente millas para viajar</b></p>    
            @endif
            
       </div>
       </div>
 @endforeach

 

    <script type="text/javascript" src="{{asset("js/mapaPrincipalV2.js")}}"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={{env("GOOGLE_MAP_KEY")}}&callback=Mapa.iniciar">
    </script>

@endsection

