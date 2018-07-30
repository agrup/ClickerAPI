 
 Mapa={
  markerActual:0,
  millas:0,


      iniciar:function initMap() {
       
        var bsAs = {lat: -34.603722,lng:  -58.381592};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 2,
          center: bsAs,
          scrollwheel:false,
        });
              

      var pinColor = "0066FF";
      var pinImageAzul = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
          new google.maps.Size(21, 34),
          new google.maps.Point(0,0),
          new google.maps.Point(10, 34));
       var pinColor = "00FF00";
      var pinImageVerde = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
          new google.maps.Size(21, 34),
          new google.maps.Point(0,0),
          new google.maps.Point(10, 34));
      var pinColor = "FFFF00";
      var pinImageAmarillo = new google.maps.MarkerImage("http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=%E2%80%A2|" + pinColor,
          new google.maps.Size(21, 34),
          new google.maps.Point(0,0),
          new google.maps.Point(10, 34));
   

    

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        //ROJAS
        var inglaterra={lat: 51.509865 ,lng:  -0.118092};
        var sdChile={lat:  -33.447487,lng:  -70.673676};
        var saoPaulo={lat:  -23.533773,lng:  -46.625290};
        //Amarillos
        var angola={lat:  -12.592502,lng:  18.723946};
        var botsuana={lat:  -22.420846,lng:  23.777657};
        var Congo={lat:  -2.837668,lng:  24.232843};
        var Camerun={lat:  5.593246,lng:  12.553059};
        var Egipto={lat:  26.396317,lng:  28.921499};
        /////////////////////////////////////////7
      
      

         var marker = new google.maps.Marker({
          position: bsAs,
          map: map,
          title: 'Uluru (Ayers Rock)',
          id:1,
          millas:1000,
        });
         this.markerActual=marker;
        var marker2 = new google.maps.Marker({
          position: inglaterra,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:2,
          millas:1000,

        });
        var marker3 = new google.maps.Marker({
          position: sdChile,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:3,
          millas:1000,
        });
        var marker4 = new google.maps.Marker({
          position: saoPaulo,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:4,
          millas:1000,
        });
          var marker5 = new google.maps.Marker({
          position: angola,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:5,
          millas:1000,

        });
        var marker6 = new google.maps.Marker({
          position: botsuana,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:6,
          millas:1000,
        });
        var marker7 = new google.maps.Marker({
          position: Congo,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:7,
          millas:1000,
        });
        var marker8 = new google.maps.Marker({
          position: Camerun,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:8,
          millas:1000,
        });
        var marker9 = new google.maps.Marker({
          position: Egipto,
          map: map,
          title: 'Uluru (Ayers Rock)',
          icon:pinImageAmarillo,
          id:9,
          millas:1000,
        });
    

         var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" >Botín</h1>'+
            
            '<div id="bodyContent">'+
            '<h4>Prerequisito: 3000 millas</h4>'+
            '<p><b>+10 Oro</b></p>'+
             '<p><b>+15000 Millas</b></p>'+
             '<p><b>+400 Experiencia</b></p>'+
            '<a href="/game"  id="1" >Viajar y Cobrar</a> '+
            '</div>'+
            '</div>';
         

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

       
        marker.addListener('click', function() {
          //alert($("#millas").text());
          Mapa.markerActual=this.id;
          millas=this.millas;
          numMillas=$("#millas").data("valor");
          if(numMillas>=millas){
            millas=millas-numMillas;
            $("#millas").text("Millas "+millas);
         }
          //infowindow.open(map, marker);
        });
        marker2.addListener('click', function() {
          millas=this.millas;
          numMillas=$("#millas").data("valor");
          infowindow.open(map, marker2);

        });
        marker3.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
         /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker3);
        });
        marker4.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
          /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker4);
        });
        marker5.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
          /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker5);
        });
        marker6.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
          /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker6);
        });
        marker7.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
           /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker7);
        });
        marker8.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
         /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker8);
        });
        marker9.addListener('click', function() {
          markerActual=this.id;
           millas=this.millas;
          numMillas=$("#millas").data("valor");
         /* if(numMillas>=millas){
            this.setIcon();
            markerActual.setIcon(pinImageAzul);
            markerActual=marker3;
          } */
          infowindow.open(map, marker9);
        });
      },

      //---------------------------------------------------------------------//
      //jquery para modificar los markers
     viajar: function viajar(millas,numMillas){
        if(numMillas>=millas){

            Mapa.markerActual.setIcon();
            //alert(Mapa.markerActual.id);
            Mapa.markerActual.setIcon(Mapa.iniciar.pinImageAzul);
            Mapa.markerActual=Mapa.iniciar.marker2;
            //alert(Mapa.markerActual.id);
          } 
      }

       }
      /* function viajar(){
        alert("aSome");
        //Mapa.viajar(1000,1000);
        numMillas=1000;
        millas=1000;
        if(numMillas>=millas){
          mapa= new Mapa;
          
          //alert(Mapa.markerActual.id);
           Mapa.markerActual.setIcon(Mapa.iniciar.pinImageAzul);
            //alert(Mapa.markerActual.id);
            Mapa.markerActual.setIcon(Mapa.iniciar.pinImageAzul);
            Mapa.markerActual=Mapa.iniciar.marker2;
            //alert(Mapa.markerActual.id);
          } 
       } */