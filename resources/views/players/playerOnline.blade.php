
<div class="sideplay">

@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h4 class="titulo" id="nombrePlayer">{{$player->nickname}}</h4><a href="#openModal">Lanzar el modal</a>

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
	<h5 class="datosPlayer" id="millas" data-valor="{{$player->millas}}">Millas: {{$player->millas}}</h3>

	
	<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="tituloModal">Ingresa tu nuevo NickName:</h2>
		<form  method="post">
			<input type="text" name="nickname" class="modalInput">
			<input type="button" name="" value="Aceptar" class="modalSubmit">
		</form>
	</div>
</div>
@endguest
</div>
	
