

 Mapa={
  markers:[],
  millas:0,
  bsAs : {lat: -34.603722,lng:  -58.381592},
  infowindow : [],
	iniciar:function initMap(){
		
		//var bsAs = {lat: -34.603722,lng:  -58.381592};
		var options ={
			zoom: 2,
			center:this.bsAs,
			scrollwheel:false,
			draggable:true,
			 mapTypeControl: false,
			 disableDefaultUI: true,
			 label:false,
			mapTypeId: google.maps.MapTypeId.SATELLITE  
		}
		var map = new google.maps.Map(document.getElementById('map'),options);
		

	$(".markerConteiner").each(function(index){
			
			i=index+1;
			let lat=$('.latitud'+i).data('marka');
			let lng=$('.longitud'+i).data('marka');	
			let completa=$('.completa'+i).data('marka');	
			//addMarker({lat:lat,lng:lng});
			var coord=({lat:lat,lng:lng});
			
			var mark = new google.maps.Marker({
		 		position:coord,
		 		map: map,
		 		title: 'Esfera de '+i+' estrellas',
		 		icon: '/img/esferas/e'+i+'.png',
		 		
		 	});
		 	//si ya se hizo la mision se marca azul
		 	if(completa=="completa"){
		 		mark.setIcon(pinImageAzul);
		 	}else{
		 		mark.addListener('click', function() {
            	Mapa.infowindow [1].open(map, this);
            	
            
			});

		 		Mapa.infowindow [1]= new google.maps.InfoWindow({
		          content: document.getElementById("infobox"+i),
		        });
		 	}
		 	
	});

	
	},

};
