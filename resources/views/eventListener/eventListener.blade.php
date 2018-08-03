  @auth
  <meta charset="UTF-8">
  

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    
    <script src={{asset("js/app.js")}} charset="utf-8"></script>
    <script src={{asset("js/partidas/partidas.js")}} charset="utf-8"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/partidas/partidas.css') }}">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <div class="games-container">
    


    <div id="app">
      <div calss="incon-container">
        
        @if(isset($personajeActual) )
          <h4>{{$personajeActual->name}}</h4>
          @if(isset($personajes))

<!-- 
      <input type="text" name="Personaje" id="select-personaje" v-model="PersonajeSelect" value={{$personajes[0]->id}}>
      
    
      <select name="Personaje" id="select-personaje" v-model="PersonajeSelect">
        

        @foreach($personajes as $personaje)
          <option value="{{$personaje->id}}">{{$personaje->name}}</option>
        @endforeach
          <option value="{{$personaje->id}}" selected>{{$personaje->name}} </option>
      </select>
-->
        <img src={{asset("img/")}}{{$personaje->img}}-2.png alt="imagen" id="img-1">

      <button  value="CREAR" id="input-game" class="clase" @click.prevent="postCreate">Crear Nueva Partida</button>
    




        @endif
        @else

          <h4>Sin Personaje</h4>
            <img src={{asset("img/sinPersonaje.png")}} alt="imagen" id="img-1">
     @endif

  
      </div>
      
    </div>
      <div class="tab">
      <div class="title-container">
        
        <h2 class="loby">Partidas</h2>
        <p>Desafia a un amigo y obtene Experiencia y Oro</p>
      </div>
      <div class="lista" id="lista">
        
      @foreach($partidas as $game)
        <a href="{{asset("/game/unirme/")}}/{{$game['id']}}">
          
          <button class="tablinks" @click="openGame('{{$game['id']}}')">Partida:{{$game['id']}} {{$game['Personaje']}}->->{{$game['User']}}</button>
        </a>

      @endforeach

      </div>
      </div>
  </div>
<!--
 -->
  <script>

  var obj = document.createElement("audio");
  obj.src = "https://bigsoundbank.com/UPLOAD/ogg/0364.ogg";
  obj.volume = 0.1;
  obj.autoPlay = false;
  obj.preLoad = true;
  obj.controls = true;

      const app = new Vue({
          el: '#app',
          data: {
              partidas: [],
              partida:'',
              personajes: '',
              PersonajeSelect: '',
              user: {!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
          },
          mounted() {
              this.getComments();
               this.listen();
               //this.error();
          },
          methods: {
              getComments() {
                  axios.get('/game')
                       .then((response) => {

                        //console.log('this',response.data);
                           //this.partidas = response.data
                           //this.partidas = this.PersonajeSelect
                       })
                       .catch(function (error) {
                           console.log(error);
                       }
                  );
              },
              postCreate() {
                  axios.post('/game', {
                      //partida: this.user.id,
                      //personaje:this.PersonajeSelect,

                  })
                  .then((response) => {

                      this.partidas.push(response.data);
                    console.log('this5',this.partidas);

                      this.partidaName = '';
                  })
                  .catch((error) => {
                      console.log(error);
                  })
              },
                listen() {
                 Echo.channel('channelEvent')
                   .listen('eventTrigger', (e) => {
                     obj.play();
                    
                    $('#lista').prepend("<a href=/game/unirme/"+e.id+" >  <button class='tablinks' id="+e.id+" )'>Partida:"+e.id+" "+e.personaje+"->->"+e.user+"</button> </a>");
 

                    $('#'+e.id).animate({
                        backgroundColor: "yellow",
                        color: 'red',
                    },5000 , function(){

                    $('#'+e.id).animate({
                        backgroundColor: '#f1f1f1',
                        color: 'black',
                    },20);
                  });

/*

                    /*
                    */
                    console.log('Partidas: ',this.partidas)
                    console.log('Partidas2: ',this);
                  
                    $('.ul-container').append('<li><a href=/game/unirme/'+e.id+' >HOST: '+e.personaje_p1+' Partida: '+e.id+'</a></li>');
                   });

            },

              openGame(id){
                  axios.get('/game/unirme/'+id)
                       .then((response) => {
                        //console.log(response);
                        console.log('casa2');
                        //console.log('this',response.data);
                           //this.partidas = response.data
                           //this.partidas = this.PersonajeSelect
                       })
                       .catch(function (error) {
                           console.log(error);
                       }
                  );
              }
          }
      })

  </script>

  @endauth

</body> 
</html>