

 Mapa={
  markers:[],
  millas:0,
  bsAs : {lat: -34.603722,lng:  -58.381592},
	iniciar:function initMap(){
		
		//var bsAs = {lat: -34.603722,lng:  -58.381592};
		var options ={
			zoom: 2,
			center:this.bsAs,
			scrollwheel:false,
			draggable:true,
			mapTypeId: google.maps.MapTypeId.SATELLITE  
		}
		var map = new google.maps.Map(document.getElementById('map'),options);
		
	  //////////////color azull /////////////////
	  var pinColor = "0066FF";
      var pinImageAzul = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
          new google.maps.Size(21, 34),
          new google.maps.Point(0,0),
          new google.maps.Point(10, 34));
      //////////////--------------- /////////////////

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
		 		title: 'Uluru (Ayers Rock)',
		 		
		 	});
		 	//si ya se hizo la mision se marca azul
		 	if(completa=="completa"){
		 		mark.setIcon(pinImageAzul);
		 	}else{
		 		mark.addListener('click', function() {
            	infowindow.open(map, this);
            
			});
		 		var infowindow = new google.maps.InfoWindow({
		          content: document.getElementById("infobox"+i),
		        });	
		 	}
		 	
	});

	
	},

};
