	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/player/poderes.css') }}">

@section('meta')
		
@endsection

	@foreach($personajeModel as $personaje)
	<div class="icons-container">
		<div class="principal-container">
		
			<div class="card">
			  <div class="card-header">Ataque</div>
			  <div class="card-main">
			    <i class="material-icons">touch_app</i>
			    <div class="main-description">{{$personaje->ataque}}</div>
			  </div>
			</div>

			<div class="card">
			  <div class="card-header">Vida</div>
			  <div class="card-main">
			    <i class="material-icons">favorite</i>
			    <div class="main-description">{{$personaje->vida}}</div>
			  </div>
			</div>

			<div class="card">
			  <div class="card-header">Defensa</div>
			  <div class="card-main">
			    <i class="material-icons">verified_user</i>
			    <div class="main-description">{{$personaje->defensa}}</div>
			  </div>
			</div>
		</div>

		<div class="special-container">
			


			<div class="card">
			  <div class="card-header">Fuerza</div>
			  <div class="card-main">
			    <i class="material-icons">touch_app</i>
			    <div class="main-description">{{$personaje->Fuerza}}</div>
			  </div>
			</div>
			
			<div class="card">
			  <div class="card-header">Velocidad</div>
			  <div class="card-main">
			    <i class="material-icons">touch_app</i>
			    <div class="main-description">{{$personaje->Velocidad}}</div>
			  </div>
			</div>
			
			<div class="card">
			  <div class="card-header">Inteligencia</div>
			  <div class="card-main">
			    <i class="material-icons">favorite</i>
			    <div class="main-description">{{$personaje->Inteligencia}}</div>
			  </div>
			</div>


		</div>


	</div>
	@endforeach

