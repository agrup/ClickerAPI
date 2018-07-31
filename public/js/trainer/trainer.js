$( document ).ready(function() {
    let countClick = 0;
    let MaxClick=10;
    let bestTime=100000;
    let bestSpeed=0;
    var flag=true;
    var dif =0;
	var dt = new Date();
	var dt2 = new Date();	
		$('.clickeable').on('click' ,function(){
			if(flag){
				dt = new Date();	
				//var dt2 = new Date();	
				$('#dialog').hide();
				flag = !flag;
			console.log((((dt2-dt)/10).toFixed(2))+ 'ms');
			console.log(dt2,dt,dt2-dt);
			}
			dt2= new Date();
			dif = (dt2-dt);


			countClick += 1;
			
			$('#velocidad').text((countClick/dif).toFixed(4)+ 's');
			$('#cantidad').text(countClick);
			 $('#tiempo').text((dif/1000).toFixed(2));
			
			

				
			if (countClick==MaxClick){


				alert('Su velocidad es '+(MaxClick/dif).toFixed(4)+ ' Clicks/s'+ ' En un tiempo de '+(dif/1000).toFixed(2)+' segundos');
				if(bestTime > (dif/1000).toFixed(2)){
					bestTime=(dif/1000).toFixed(2);
					$('#bestTime').text(bestTime+ ' segundos');
				}
				if(bestSpeed < (MaxClick/dif).toFixed(4)){
					bestSpeed=(MaxClick/dif).toFixed(4);
					$('#bestSpeed').text(bestSpeed+ 'Clicks/s');
				}
				countClick=0;
				dt=new Date();
				dt2=new Date();
				var dif=0;
				
   				flag=true;
			}
					




		});
			

  $( function() {
  	 //var myPos = [ $(window).width() / 2, $(window).height()/2];
$( "#dialog" ).dialog({
	title:"Click entrenamiento",
	//position: [100,0],
	show: { effect: "blind", duration: 800 },

});
  } );


});
