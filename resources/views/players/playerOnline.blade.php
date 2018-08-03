
<div class="sideplay">

@auth
	<!--<h2 class="titulo">  {{ Auth::user()->name }}</h2>--> 
	<h4 class="titulo" id="nombrePlayer">{{$player->nickname}}</h4><a href="#openModal" id="amodal">Cambiar Nickname</a>
	<!-- Este <a> es para el user que se mete por primera vez-->
		<a href="#openModal2" id="amodal2" hidden style="display: none"></a>
		
	<div class="container">

    <form method="post" action="" enctype="multipart/form-data" id="myform">
    	@csrf
        <div >
           <img class="profile-pic" id="img" src="{{asset('/storage/'.$player->avatar)}}" > 
        </div>
        <div >
        	<input type="button" id="up" class="subirFoto" value="Cambiar Foto"></button>
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

<div id="openModal2" class="modalDialog">
	<div >
		<a href="#close" title="Close" class="close">X</a>
		<h2 class="tituloModal" style="font-family: Hanalei fill">Bienvenido a Clcker PvP!</h2>
		<h3 style="color: White;font-family: Hanalei fill">Cómo Jugar</h3>
		<p style="color: yellow;font-family: Hanalei fill"><img src="{{asset('img/esferas/e1.png')}}" width="30px" height="25px">-Primero Elige un personaje</p>
		<p style="color: yellow;font-family: Hanalei fill"><img src="{{asset('img/esferas/e2.png')}}" width="30px" height="25px">-Una vez que tengas tu personaje puedes crear una partida</p>
		<p style="color: yellow;font-family: Hanalei fill"><img src="{{asset('img/esferas/e3.png')}}" width="30px" height="25px">-cuando otro jugador haga click en el lobby sobre tu partida esta iniciará</p>
		<h3 style="color: White;font-family: Hanalei fill">El Mapa</h3>
		<p style="color: yellow;font-family: Hanalei fill"><img src="{{asset('img/esferas/e4.png')}}" width="30px" height="25px">-Busca las esferas del dragon utilizando las milllas que ganaras en cada batalla y obten las recompensas!</p>		
		<a class="modalSubmit2" href="#close" style="font-size:15px;color: white;background-color: red;text-align: center; font-family: Hanalei fill ">Comenzar</a> >
		
	</div>
</div>


@endguest
</div>
	
