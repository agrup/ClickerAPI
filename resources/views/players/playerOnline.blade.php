
<div class="sideplay">

@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h4 class="titulo">{{$player->nickname}}</h2>
	@if($player->avatar=="default.jgp")
		<img class="fotoPerfil" src="{{asset('/storage/default.jpg')}}" > 
	@endif	
		<img class="fotoPerfil" src="{{asset('/storage/'.$player->avatar)}}" > 
	
	<form action="/editar" method="get">
		<input type="submit" name="" value="Editar" class="botonEditar">
	</form>
	<h5 class="datosPlayer">Nivel: {{$player->nivel}}</h3>
	<h5 class="datosPlayer">Experiencia: {{$player->experiencia}}</h3>
	<h5 class="datosPlayer">Oro: {{$player->oro}}</h3>
	<h5 class="datosPlayer">Millas: {{$player->millas}}</h3>

	
	
@endguest
</div>
	
