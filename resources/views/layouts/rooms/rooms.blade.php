

	<link rel="stylesheet" type="text/css" href="{{ asset('css/sidebar.css') }}">



<div class="sidenav">
@guest
<h1>Players</h1>
@else
<h1>Menu</h1>
	<ul class="ul-menu">
		<li>

			<a href="/game/Crear+Personaje" clase="link-menu">Personaje</a>
			
		</li>
				<li>
			<a href="/game/Perfil" clase="link-menu">Perfil</a>
			
		</li>
				<li>
			<a href="/game/Tienda" clase="link-menu">Tienda</a>
			
		</li>

	</ul>

	
@endguest
</div>
	
