

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">



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
		<li>
			<a href="/game/Perfil" class="link-menu">Tabla de Posiciones</a>
			
		</li>
				<li>
			<a href="/game/Reacciona" class="link-menu">Reacciona</a>
			
		</li>

	</ul>

	
@endguest
</div>
	
