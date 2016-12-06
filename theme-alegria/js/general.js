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
    TweenMax.to(obj1, 0.4, {marginLeft:"0%",ease:Linear.easeInOut});
    TweenMax.to(obj2, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    TweenMax.to(obj3, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    obj2.off();
    obj3.off();
    goLateUrl($(this));
  });

  obj2.click(function() {
    TweenMax.to(obj1, 0.4, {opacity:"0",marginLeft:"0%",ease:Linear.easeInOut});
    TweenMax.to(obj2, 0.4, {marginLeft:"-33%",ease:Linear.easeInOut});
    TweenMax.to(obj3, 0.4, {opacity:"0",marginLeft:"-33%",ease:Linear.easeInOut});
    obj1.off();
    obj3.off();
    goLateUrl($(this));
  });

  obj3.click(function() {
    TweenMax.to(obj1, 0.4, {opacity:"0",marginLeft:"0%",ease:Linear.easeInOut});
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
	$('.home_btn, .btn_cases').click(function() {
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

  //Resize
  var texto_h = "";
  $(document).resize(resize_text());

  function resize_text(){
    setTimeout(function(){
      texto_h = String(Number($('.texto')[0].scrollHeight + 140)+"px");
      $('.contacto .row:nth-child(1), .contacto, .contacto .fullh').css( "height", texto_h);
      $('.quehacemos_L2 .row:nth-child(1), .quehacemos_L2, .quehacemos_L2 .fullh').css( "height", texto_h);
    }, 200);
    
  }
    
  	
});




