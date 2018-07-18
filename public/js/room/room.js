/*
$( document ).ready(function() {
    console.log( "ready!" );

	document.getElementById("input-game").addEventListener("click", function(event){
	    event.preventDefault();
	    $.post("/game",
        {
          personaje: "Agu"
        },
        function(data,status){
            alert("Data: " + data + "\nStatus: " + status);
	});
});

*/
$(document).ready(function() {


    	//$("#input-game").click(function(){
    		//$("#Form-CP").submit(function(event){
			$( "#input-game" ).on('click',function() {

			
    		console.log('click');
    		event.preventDefault();
	        $.ajax({
	            /* the route pointing to the post function */
	            url: '/game/casa',
	            type: 'POST',
	            /* send the csrf-token and the input to the controller */
	            data: {
	            	personaje: "agustin"
	            },
	            dataType: 'JSON',
	            /* 
	            headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	            remind that 'data' is the response of the AjaxController 
	            success: function (data) { 
	                alert(data);
	                //$(".writeinfo").append(data.msg); 
	            }
	            */
	        })
	    });
			
});