

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">



<div class="sidenav">
@guest
<h1>Players</h1>
@else
<h1>Menu</h1>
	<ul class="ul-menu">
		<li>

			<a href="/game/Crear+Personaje">Personaje</a>
			
		</li>
				<li>
			<a href="/game/Crear+Personaje">Perfil</a>
			
		</li>
				<li>
			<a href="/game/Crear+Personaje">Tienda</a>
			
		</li>
		<li>
			
			
		</li>
	</ul>

	
@endguest
</div>
	
