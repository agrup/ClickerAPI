
$( document ).ready(function() {



var slideIndex = 1;
showDivs(slideIndex);
$('#Especie').val(slideIndex);



$('#plusDivs1').on('click' ,function(){
	showDivs(slideIndex += 1);
		console.log('+1');
});
$('#plusDivs-1').on('click' ,function(){
	showDivs(slideIndex -= 1);
		console.log('-1');
});


function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var y = document.getElementsByClassName("icons-container");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none"; 
     y[i].style.display = "none";  

  }


  $('#Especie').val(slideIndex);
  x[slideIndex-1].style.display = "block";
  y[slideIndex-1].style.display = "block";

}
});