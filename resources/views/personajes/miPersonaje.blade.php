<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/player/miPersonaje.css') }}">
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
	
	@if(isset($personaje))

<div class="player-container clearfix" >
	
	<div id="img-container">

		<div class="click-content click-display-container">

				<div class="click-display-container mySlides">
				  <img src={{ asset('img'.$personaje->img).'.png' }} >
				  <div class="click-display-bottomleft click-large click-container click-padding-16 click-black">
					{{$personaje->name}}
				  </div>

				</div>

		</div>


	</div>
	
	
		
	<div class="power-container ">
		<h3>Habilidades</h3>
		@include('personajes.poderes')

	</div>


</div>
@if(isset($succes))
	<h1 class="alert alert-success">{{$succes}}</h1>
@endif
@if(isset($error))
	<h1 class="alert alert-errors">{{$error}}</h1>
@endif

@else
	<div class="sin-personaje">
		
	         <h4>Sin Personaje</h4>
            <img src={{asset("img/sinPersonaje.png")}} alt="imagen" id="img-1">
	</div>
@endif

</main>	

</body>
</html>