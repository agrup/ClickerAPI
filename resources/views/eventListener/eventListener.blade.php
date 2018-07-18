	@auth
		<script src={{asset("js/app.js")}} charset="utf-8"></script>
	<meta charset="UTF-8">
	




	<body>

  
	<div id="app">
  @csrf
    @if(isset($personajes))
    <select name="Personaje" id="select-personaje">
      @foreach($personajes as $personaje)
        <option value="{{$personaje->name}}">{{$personaje->name}}</option>
      @endforeach
    </select>
    <button  value="CREAR" id="input-game" class="clase" @click.prevent="postComment">Crear</button>
  
    @endif
		<p>Evento</p>
	</div>



  <script>
      const app = new Vue({
          el: '#app',
          data: {
              partida: {},
              partidaName: '',
              Personaje: 'Agu',
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
                           this.partida = response.data
                       })
                       .catch(function (error) {
                           console.log(error);
                       }
                  );
              },
              postComment() {
                
                  axios.post('/game', {
                      api_token: this.user.api_token,
                      partida: 'this.partidaName'
                  })
                  .then((response) => {
                      this.partida.unshift(response.data);
                      this.partidaName = '';
                  })
                  .catch((error) => {
                      console.log(error);
                  })
              },
              	listen() {
              	 Echo.channel('channelEvent')
  		    	       .listen('eventTrigger', (e) => {
  				//alert('Evento');
  				          var h = document.createElement("H1");
  			            var t = document.createTextNode("Hello World");
  			            h.appendChild(t);
                    document.body.appendChild(h);
  				          $('p-partida').append('Evento');

		    	         })
        		}
          }
      })
/*

        Echo.private('post.'+this.post.id)
                .listen('NewComment', (comment) => {
                this.comments.unshift(comment);
              })
*/
  </script>

	@endauth

</body> 
</html>