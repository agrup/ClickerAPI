
<div class="sideplay">

@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h2 class="titulo">{{$player->nickname}}</h2>
	<form>
		
	</form>
	<h3 class="titulo">Nivel: {{$player->nivel}}</h3>
	<h3 class="titulo">Experiencia: {{$player->experiencia}}</h3>
	<h3 class="titulo">Oro: {{$player->oro}}</h3>
	<h3 class="titulo">Millas: {{$player->millas}}</h3>

	
	<img src="">
@endguest
</div>
	
