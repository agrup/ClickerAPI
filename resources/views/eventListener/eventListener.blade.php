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

    <button  value="CREAR" id="input-game" class="clase" @click.prevent="postComment">Crear</button>
  
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
              postComment() {
                  axios.post('/game', {
                      //partida: this.user.id,
                      personaje:this.PersonajeSelect,

                  })
                  .then((response) => {
                    console.log('this2',this.partidas);
                    console.log('this3',response.data);
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
                    //console.log(e.id);
                    //this.partidas.unshift('e');
                    //var a = document.createElement("a");
                    //a.attr('href',e.url);
                    //a.attr('value','Partida'+e.id)
                    //alert(e);
                    console.log('this4',e);
                    console.log('Partidas: ',this.partidas)
                    console.log('Partidas2: ',this);
                    //this.partidas.push(e);
                    //var a = document.createTextNode('a');
                    //a.attr('href',e.url);
                    //h.appendChild(t);
                    //document.body.appendChild(a);
                    
                    $('.ul-container').append('<li><a href="'+e.url+'" >HOST: '+e.personaje_p1+' Partida: '+e.id+'</a></li>');
                    /*
                    */

		    	         })
        		}
          }
      })

  </script>

	@endauth

</body> 
</html>