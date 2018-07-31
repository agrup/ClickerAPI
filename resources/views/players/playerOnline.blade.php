
<div class="sideplay">

@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h4 class="titulo" id="nombrePlayer">{{$player->nickname}}</h4><a href="#openModal">Cambiar Nickname</a>

		
		
	
	<!--<form action="/editar" method="get">
		<input type="submit" name="" value="Editar" class="botonEditar">
	</form>
	<div class="upload-button">Upload Image</div>
	<input class="file-upload" type="file" accept="image/*"/>-->

	<div class="container">

    <form method="post" action="" enctype="multipart/form-data" id="myform">
    	@csrf
        <div >
           <img class="profile-pic" id="img" src="{{asset('/storage/'.$player->avatar)}}" > 
        </div>
        <div >
        	<input type="button" id="up">Subir Foto</button>
            <input type="file" id="file" name="file"  accept="image/*" hidden />
            <input type="button" class="button" value="Subir" id="but_upload" hidden>
        </div>
    </form>
	</div>

	<h5 class="datosPlayer">Nivel: {{$player->nivel}}</h3>
	<h5 class="datosPlayer">Experiencia: {{$player->experiencia}}</h3>
	<h5 class="datosPlayer">Oro: {{$player->oro}}</h3>
	<h5 class="datosPlayer" id="millas" data-valor="{{$player->millas}}">Millas: {{$player->millas}}</h3>

	
	<div id="openModal" class="modalDialog">
	<div >
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="tituloModal">Ingresa tu nuevo NickName:</h2>
	
			<input type="text" name="nickname" class="modalInput " >
			<a class="modalSubmit" href="#close">Aceptar</a> >
		
	</div>
</div>
@endguest
</div>
	
