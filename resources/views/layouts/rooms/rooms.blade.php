

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">
<link href='https://fonts.googleapis.com/css?family=Fjalla One' rel='stylesheet'>


<div class="sidenav">
@guest

@else
<h1>Menu</h1>
	<ul class="ul-menu">
		<li>


			<a href="/game/Crear+Personaje" clase="link-menu">Seleccionar Personaje</a>

			
		</li>
		<li>
			<a href="/game/Mi+Personaje" clase="link-menu">Mi Personaje</a>
			
		
		</li>
		
		<li>
			<a href="/game/Trainer" clase="link-menu">Velocidad</a>
			
		</li>
		<li>
			<a href="/game/Perfil" clase="link-menu">Tabla de Posiciones</a>
			
		</li>
				<li>
			<a href="/game/Reacciona" clase="link-menu">Reacciona</a>
			
		</li>

	</ul>

	
@endguest
</div>
	
