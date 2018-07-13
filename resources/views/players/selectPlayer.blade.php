<h6>Seleccion de Personajes</h6>

<div class="vertical-menu">
  @isset ($personajes)
      
    @foreach(json_decode($personajes) as $personaje)
      <a class="room" href="">{{$personaje->Personaje}}</a>
  	
    @endforeach

  @endisset


</div>