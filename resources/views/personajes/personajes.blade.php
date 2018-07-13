<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/player/createPersonaje.css') }}">
	<meta charset="UTF-8">
	<title>Player</title>
</head>
<body>
@include('nav.navbar')

<main>
	

<div class="player-container clearfix" >
	
	<div id="img-container">
			<form id="name-input" action="/game/GuardarPersonaje" mclass="" method="POST" id="myForm" >
			@csrf
		<section class="select-image" >
			<img src="{{ asset('img/gg-icon.png') }}" alt="Avatar">
			<!--

			


			<h3>{{}}</h3>
			-->
		</section>
				<label for="name">Nombre</label>
				<input name="name" id="name" type="text">
				<select name="Especie" id="">
					<option value="1">America</option>
					<option value="2">Africa-Oceania</option>
					<option value="3">Europa-Asia</option>
				</select>
				<input type="submit" value="Guardar">
			</form>
	</div>
	
	
		
	<div class="power-container ">
		<h3>Habilidades</h3>
		@include('personajes.poderes')

	</div>


</div>

</main>	

</body>
</html>