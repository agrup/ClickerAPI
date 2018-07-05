<!DOCTYPE html>
<html>

<head>
<title>Clicker PVP </title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">


<link rel="stylesheet" type="text/css" href="{{ asset('css/nav.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/players.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">


   </head>


  <body >

  <div class="fixed-top">

	@include('nav.navbar')

  </div>
	<div class="bar-containers">
		<section class="left">
			
			
			@include('layouts.rooms.rooms')
		</section>
		
		<section class="principal">
			
    		@yield('hi')
		</section>
		
		<section class="right">
			
			@include('players.playersOnline')
		</section>

  	
	</div>


</body>

</html>