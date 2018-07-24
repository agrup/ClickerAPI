	@auth
  <meta charset="UTF-8">
  

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		
    <script src={{asset("js/app.js")}} charset="utf-8"></script>


	<body>

  
	<div id="app">
  
    @if(isset($personajes))
    <select name="Personaje" id="select-personaje" v-model="PersonajeSelect">
      @foreach($personajes as $personaje)
        <option value="{{$personaje->id}}">{{$personaje->name}}</option>
      @endforeach
    </select>

    <button  value="CREAR" id="input-game" class="clase" @click.prevent="postCreate">Crear</button>
  
    <div class="partidas-container"  >

      <div class="c">
        <h4 class="media-heading"></h4>
        <ul class="ul-container">
         
        </ul>
        
      </div>
    </div>




   @endif
		
	</div>


  <script>
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
                      personaje:this.PersonajeSelect,

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
                    console.log('Partidas: ',this.partidas)
                    console.log('Partidas2: ',this);
                  
                    $('.ul-container').append('<li><a href=/game/unirme/'+e.id+' >HOST: '+e.personaje_p1+' Partida: '+e.id+'</a></li>');
		    	         })
        		}
          }
      })

  </script>

	@endauth

</body> 
</html>