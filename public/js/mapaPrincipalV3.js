
var initMap = function() {

 var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 33.78444500, lng: -118.15378000},
    zoom: 8
  });


}
var marker, i;
marker = new google.maps.Marker({
   position: new google.maps.LatLng(22.556444, -44.565),
   map: map
})


var ibOptions = {
    		disableAutoPan: false
    		,maxWidth: 0
    		,pixelOffset: new google.maps.Size(-140, 0)
    		,zIndex: null
    		,boxStyle: {
          padding: "0px 0px 0px 0px",
          width: "252px",
          height: "40px"
        },
        closeBoxURL : "",
        infoBoxClearance: new google.maps.Size(1, 1),
    		isHidden: false,
    		pane: "floatPane",
    		enableEventPropagation: false
    	};

   google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        var source   = $("#infobox-template").html();
        var template = Handlebars.compile(source);
 
        var boxText = document.createElement("div");
        boxText.style.cssText = "margin-top: 8px; background: #fff; padding: 0px;";
        boxText.innerHTML = template(subSet[i]);
 
        ibOptions.content = boxText
        var ib = new InfoBox(ibOptions);
      	ib.open(map, marker);
        map.panTo(ib.getPosition());
      }
  }))
