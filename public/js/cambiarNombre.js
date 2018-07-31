$(document).ready(function(){
		$(".modalSubmit").click(function(){
			//guardo el nuevo nickName
			var nick=$(".modalInput").val();
			//var token=$("#_token").val();
			$.ajax({
            url: "cambiarNombre",
            data: JSON.stringify({nickname: nick}),  
            type: 'POST',
            dataType : "json",
            contentType: "application/json",
             
        	}).done(function (data){
                var resp=data.responseJSON;
                alert('resp');
                alert('data')
                
            });
		});
});