
$(document).ready(function(){
   
    var readURL;
    readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
        }
    $("#but_upload").click(function(){
            
        var fd = new FormData();
        var files = $('#file')[0].files[0];
        fd.append('file',files);

        $.ajax({
            url: '/editar',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    //$("#img").attr("src",response);
                    //location.reload();
                    $('#file').hide();
                  $('#but_upload').hide();
                }else{
                    alert('file not uploaded');
                }
            },
        });
       

    }); 
    

     $("#file").on('change', function(){
        readURL(this);


    });
 $("#up").click(function(){
        $('#file').show();
        $('#but_upload').show();
    });

});
/*$(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);


    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
      
    });
});*/