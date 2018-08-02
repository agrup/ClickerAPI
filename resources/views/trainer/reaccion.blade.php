<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset("js/trainer/reaccion.js")}}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/trainer/trainer.css') }}">
	<!--
		<script type="text/javascript" src="{{asset("js/trainer/trainer.js")}}"></script>
	<script type="text/javascript" src="reaccion.js"></script>
	<link rel="stylesheet" type="text/css" href="reaccion.css">
	-->
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">	  </script>
	    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		
	<meta charset="UTF-8">
	<title>Trainer</title>
</head>
@include('nav.navbar')
<!--
-->
<body>
	<main>
		
	
	<section>
	<div class="container-Trainer">
		
		<div class="click-Zone">
			<h1>Mide tu Reaccion</h1>
				<div class="clickeable">
					<img src="/img/broly.png" alt="">
				</div>
		</div>
	</div>
					<div id="dialog" title="Basic dialog">
					  <p>Click para comenzar 
					  	Vuelve a clickear cuando el personaje cambie
						
					  </p>
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

			
				    </div>
				  </div>

				</div>


	</section>

	    <script type="text/javascript">
	    		  	
	  	        document.addEventListener("DOMContentLoaded", function() {
            reaccion.init();
            
        });
	    	
	    </script>
	</main>

</body>
</html>