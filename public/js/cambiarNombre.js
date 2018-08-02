$(document).ready(function(){
		
		$(".modalSubmit").click(function(){
			//guardo el nuevo nickName
			var nick=$(".modalInput").val();
            if(nick==""){
                alert("no se permiten nicks en blanco");
            }else{
                //$("#nombrePlayer").text(nick);
            //var token=$("#_token").val();
            $.ajax({
            url: "cambiarNombre",
            /*data: JSON.stringify({nickname: nick}),*/
            data:{
                nickname: nick,
            },
            type: 'POST',
            dataType : "json",
            /*contentType: "application/json",*/

            }).done(function (data){
               // var resp=data.responseJSON;
               $("#nombrePlayer").text(data);
                console.log(data);
            });
            }
			
            
		});

        

        
});