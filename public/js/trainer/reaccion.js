var reaccion ={

inicio: false,
cambio:false,
perdio:false,
dt:null,
dt2:null,
mejorTiempo:1000,
	reacciona: function(){
				var a = $('img');
				var c = $('.clickeable');
				//cambia();
				setTimeout(function(){
					reaccion.editsrc(a,c);
					/*
					a.attr('src','img/broly2.png')
					c.addClass('reaccionable');
					reaccion.cambia(c);
					dt = new Date();
					*/
					},2000);

				//console.log(a);
		} ,

	init:function(){
 
			$( "#dialog" ).dialog({
				title:"Click entrenamiento",
				//position: [2000,5],
				left:100,
				top:2000,
				show: { effect: "blind", duration: 800 },
			});

			$('.clickeable').on('click',function(){
				this.perdio=false;
				$('.clickeable').removeClass('clickeable');
				$( ".ui-dialog" ).hide();
				if (!this.inicio ){
				this.inicio = true;
				reaccion.reacciona();
				console.log('casa');
				
				}else{
					this.perdio=true;
					console.log('perdio2 ',this.perdio);
					reaccion.perder();
					
				}
			});
				

	},

	editsrc: function(a,c){
		if(!this.perdio){
		a.attr('src','/img/broly2.png')

		c.addClass('reaccionable');
		//c.removeClass('clickeable');

		reaccion.cambia(c);
		dt = new Date();
		this.cambio= true; 
		}
	},

	cambia : function(obj){
		obj.on('click',function(){
			dt2 = new Date();
			console.log(dt-dt2);
			let tiempo = dt-dt2
			alert(tiempo+' segundos');
			if(tiempo < this.mejorTiempo){
				$('#bestSpeed').text(tiempo);
				this.mejorTiempo= tiempo;
			}
		});
	},
	perder: function(){
		alert('Click apurado');
	}

		


}