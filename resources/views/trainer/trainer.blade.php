<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/trainer/trainer.css') }}">
	<script type="text/javascript" src="{{asset("js/trainer/trainer.js")}}"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	    <link href='https://fonts.googleapis.com/css?family=Hanalei Fill' rel='stylesheet'>
  		
	<meta charset="UTF-8">
	<title>Trainer</title>
</head>
@include('nav.navbar')
<body>
	<main>
		
	
	<section>
	<div class="container-Trainer">
		
		<div class="click-Zone">
			<h1>Mide tu Velocidad</h1>
				<div class="clickeable">
					<img src="/img/goku-trainer.png" alt="">
				</div>
		</div>
	</div>
					<div id="dialog" title="Basic dialog">
					  <p>Click para comenzar y medir tu velocidad
						
					  </p>
					</div>

				<div class="card tablero">
				  <div class="card-tablero ">Tablero</div>
				  <div class="card-main">
				    
				    <div class="main-description" ></div>
				    	
				<div class="card">
				  <div class="card-header">Velocidad</div>
				  <div class="card-main">
				    
				    <div class="main-description" id="velocidad"></div>
				  </div>
				</div>

				<div class="card">
				  <div class="card-header">Cantidad</div>
				  <div class="card-main">
				    
				    <div class="main-description" id="cantidad"></div>
				  </div>
				</div>


				<div class="card">
				  <div class="card-header">Tiempo</div>
				  <div class="card-main">
				    
				    <div class="main-description" id="tiempo"></div>
				  </div>
				</div>

			
				    </div>
				  </div>
				  
				  <div class="card records tablero">
				  <div class="card-tablero ">Records</div>
				  <div class="card-main">
				    
				    <div class="main-description" ></div>
				    	


				


				<div class="card">
				  <div class="card-header">Mejor Velocidad</div>
				  <div class="card-main">
				    
				    <div class="main-description" id="bestSpeed"></div>
				  </div>
				</div>
				<div class="card">
				  <div class="card-header">Mejor Tiempo</div>
				  <div class="card-main">
				    
				    <div class="main-description" id="bestTime"></div>
				  </div>
				</div>
			
				    </div>
				  </div>

				</div>


	</section>

	</main>

</body>
</html>