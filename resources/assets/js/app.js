
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.

Vue.component('example-component', require('./components/ExampleComponent.vue'));

window.addEventListener('load', function () {


const app = new Vue({
          el: '#api',
          data: {
              partidas: [],
              partida:'',
              personajes: '',
              PersonajeSelect: '',
              user: 1{!! Auth::check() ? Auth::user()->toJson() : 'null' !!}
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
})

const app = new Vue({
    el: '#app',
    created(){

	    Echo.channel('channelEvent')
		    .listen('eventTrigger', (e) => {
				//alert('Evento');
				var h = document.createElement("H1");
			    var t = document.createTextNode("Hello World");
			    h.appendChild(t);
				alert('hola');
			    document.body.appendChild(h);
				$('p-partida').append('Evento');

		    });
    }
});

 */
