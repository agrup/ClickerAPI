<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	@auth
	<form enctype="multipart/form-data" action="{{route('editar')}}" method="post" >
		@csrf
			@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h2 class="titulo">{{$player->nickname}}</h2>
	<img src="">
	<h3 class="titulo">Nivel: {{$player->nivel}}</h3>
	<h3 class="titulo">Experiencia: {{$player->experiencia}}</h3>
	<h3 class="titulo">Oro: {{$player->oro}}</h3>
	<h3 class="titulo">Millas: {{$player->millas}}</h3>
	
	<input type="file" name="avatar">
	<input type="submit" name="">
	</form>
	
@endguest




</body>
</html>