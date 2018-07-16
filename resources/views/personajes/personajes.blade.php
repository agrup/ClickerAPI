<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/player/createPersonaje.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset("js/personaje/personaje.js")}}"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Player</title>
</head>
<body>
@include('nav.navbar')

<main>
	

<div class="player-container clearfix" >
	
	<div id="img-container">
			
			<!--

			


			
			-->
		<div class="click-content click-display-container">
			@foreach($personajeModel as $personaje)
				<div class="click-display-container mySlides">
				  <img src={{ asset('img'.$personaje->img).'.png' }} >
				  <div class="click-display-bottomleft click-large click-container click-padding-16 click-black">
					{{$personaje->name}}
				  </div>

				</div>
				


			@endforeach


			<button class="click-button click-display-left click-black" id="plusDivs-1" >&#10094;</button>
			<button class="click-button click-display-right click-black" id="plusDivs1" >&#10095;</button>

		</div>

<form id="name-input" action="/game/GuardarPersonaje" mclass="" method="POST" id="myForm" >
			@csrf
		<section class="select-image" >
		

		</section>
				
				<label for="name">Nombre</label>
				<input name="name" id="name" type="text">
				<input name="Especie" type="text" id="Especie">	
				<input type="submit" value="Guardar">
			</form>
	</div>
	
	
		
	<div class="power-container ">
		<h3>Habilidades</h3>
		@include('personajes.poderes')

	</div>


</div>
@if(isset($succes))
	<h1>{{$succes}}</h1>
@endif
</main>	

</body>
</html>