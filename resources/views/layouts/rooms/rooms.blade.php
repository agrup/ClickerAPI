

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
<link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>


<div class="sidenav">
@guest

@else

	<ul class="ul-menu">
		<li>


			<a href="/game/Crear+Personaje" class="link-menu">Seleccionar Personaje</a>

			
		</li>
		<li>
			<a href="/game/Mi+Personaje" class="link-menu">Mi Personaje</a>
			
		
		</li>
		
		<li>
			<a href="/game/Trainer" class="link-menu">Velocidad</a>
			
		</li>


	</ul>

	
@endguest
</div>
	
