<!DOCTYPE html>
<html>

<head>
<title>Clicker PVP </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://apis.google.com/js/platform.js" async defer></script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('css/log.css') }}">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script src={{asset("js/room/room.js")}} ></script>
<script src={{asset("js/cambiarNombre.js")}} ></script>
<script src={{asset("js/avatar.js")}} ></script>

<link href='https://fonts.googleapis.com/css?family=Hanalei Fill' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/selectPersonaje.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/players.css') }}">


   </head>


  <body >

	<div class="container-vertical">
		<div>
			
			@include('nav.navbar')
		</div>

@auth
		<div class="bar-vertical">
			
		
			<div class="bar-containers ">
				<section class="left">
					
					@include('layouts.rooms.rooms')
			
				</section>
@endauth
				
				<section class="principal">
					@guest
					@yield('content')
					@include('bienvenido')
					@endif
		    		@yield('jugador2')
		    	

				</section>
@auth
				
				<section class="right">
					
					@include('players.playerOnline')
				
				</section>
				
@endauth
		  			
			</div>
		</div>	

			<!--@include('players.selectPlayer')-->
		
		@include('eventListener.eventListener')
	</div>


</body>

</html>