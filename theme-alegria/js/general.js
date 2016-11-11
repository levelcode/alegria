$(document).ready(function() {

    // LOADING 

    function loading() {
        $('.loading').delay(2000).fadeOut(700);
     } 

    $('.content_signs').delay(2500).fadeIn(400);
    // LOADING 
    loading();

    // MENU



// MENU
  var obj1 = $('#obj1');
  var obj2 = $('#obj2');
  var obj3 = $('#obj3');


  obj1.click(function() {
    TweenMax.to(obj1, 0.4, {marginLeft:"33%",ease:Linear.easeInOut});
    TweenMax.to(obj2, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    TweenMax.to(obj3, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    obj2.off();
    obj3.off();
    goLateUrl($(this));
  });

  obj2.click(function() {
    TweenMax.to(obj1, 0.4, {opacity:"0",marginLeft:"33%",ease:Linear.easeInOut});
    TweenMax.to(obj2, 0.4, {marginLeft:"-33%",ease:Linear.easeInOut});
    TweenMax.to(obj3, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    obj1.off();
    obj3.off();
    goLateUrl($(this));
  });

  obj3.click(function() {
    TweenMax.to(obj1, 0.4, {opacity:"0",marginLeft:"33%",ease:Linear.easeInOut});
    TweenMax.to(obj2, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    TweenMax.to(obj3, 0.4, {marginLeft:"-33%",ease:Linear.easeInOut});
    obj1.off();
    obj2.off();
    goLateUrl($(this));
  });

  function goLateUrl(obj){
    var url = String(obj.attr("data-link"));
    setTimeout(function(){ 
      window.location.href = url;
    }, 1000);
  }
	$('.ver_mas').click(function() {
	  var url = String($(this).attr("data-link"));
	  window.location.href = url;
	});
  $('.modal_intro').click(function() {
    $(this).fadeOut('fast', function(){
      $(this).hide();
    });
  });
  setTimeout(function(){ 
    $('.modal_intro').fadeOut('fast', function(){
      $(this).hide();
    });
  }, 3000);
    
  	
});