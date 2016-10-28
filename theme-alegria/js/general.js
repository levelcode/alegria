$(document).ready(function() {

    // LOADING 

    function loading() {
        $('.loading').delay(2000).fadeOut(700);
     } 

    $('.content_signs').delay(2500).fadeIn(400);
    // LOADING 
    loading();

    // MENU

	$('.ver_mas, .obj_jumbo').click(function() {
	  var url = String($(this).attr("data-link"));
	  window.location.href = url;
	});
  $('.modal_intro').click(function() {
    $(this).fadeOut('fast', function(){
      $(this).hide();
    });
  });
    
  	
});