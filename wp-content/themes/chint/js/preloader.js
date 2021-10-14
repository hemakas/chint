// ************************ //
// Preloader
// ************************ //
$(window).load(function(){
    $('#preload').delay(800).fadeOut(700, function(){
		
          $('.logo-animat').addClass('preload-animated preload-flipInY');
		  $('.flexnav').addClass('preload-animated preload-fadeInRight');
		  $('.contact-block').addClass('preload-animated preload-fadeInLeft');
		  $('.search-animat').addClass('preload-animated preload-fadeInRight');
		  $('.services-animat').addClass('preload-animated preload-fadeInUp');
		  
      });
	  
      $('#preload').delay(800).find('.text-logo').removeClass('delayp2').addClass('fadeOutUp');
      $('#preload').delay(800).find('.prl').removeClass('delayp4').addClass('fadeOut');
	  
});






