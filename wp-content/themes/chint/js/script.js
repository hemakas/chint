jQuery(document).ready(function(){
	
	//Main Menu	
	jQuery("#menuzord").menuzord({
		align: "right",
		indicatorFirstLevel: "<i class='fa fa-angle-down'></i>",
		indicatorSecondLevel: "<i class='fa fa-angle-right'></i>"
	});
	
	let smallWindow = false;
	//Fixed Header
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 50) {
			$('#logo-image').attr('src', 'img/Acme_Monogram_Colour.png')
			$(".important-class").addClass("padding-on-my-header");
			$(".header-section").addClass("add-header-section");
		}
		if (scroll < 50) {
			$(".important-class").removeClass("padding-on-my-header");
			$(".header-section").removeClass("add-header-section");
			$('#logo-image').attr('src', 'img/Acme_Colour.png')
		}
	}).resize(function(){
		if ( !smallWindow && this.innerWidth <= 1024 ) {
			smallWindow = true;
			$('.top-bar-section').find('ul.right').hide(0).delay(500).show(0);
		}
		if ( smallWindow && this.innerWidth > 1024 ) {
			smallWindow = false;
		}
	});
  
  //Revolution Slider
  if ($('.tp-banner').length) {
	var revolutionSlider = $('.tp-banner');
	
	if (revolutionSlider.closest('.rs-slider').hasClass('full-width')) {
	  var body         = $('body'),
		  width        = body.width(),
		  topHeight    = 0,
		  headerHeight = 104,
		  height;
		  
	  if ($('#top-box').length) {
		if (body.hasClass('hidden-top')) {
		  topHeight = $('#top-box').outerHeight() - 32;
		}
	  }
	  
	  if ((body.width() + scrollWidth) >= 1200) {
		height = body.height() - (topHeight + headerHeight);
	  } else {
		height = 800;
	  }
	  
	  revolutionSlider.revolution({
		delay             : 6000,
		startwidth        : 1200,
		startheight       : height,
		hideThumbs        : 10,
		navigationType    : 'bullet',
		navigationArrows  : 'solo',
		navigationHAlign  : 'center',
        navigationVAlign  : 'top',
        navigationHOffset : -545,
        navigationVOffset : 30,
		hideTimerBar      : 'on'
	  }).parents('.slider').removeClass('load');
	} else {
	  revolutionSlider.revolution({
		delay          : 6000,
		startwidth     : 1200,
		startheight    : 500,
		hideThumbs     : 10,
		navigationType : 'none',
		onHoverStop    : 'off'
	  }).parents('.slider').removeClass('load');
	}
  }
	
	
	
	//Hover Box
	var $container	= $('#ib-container'),
			$articles	= $container.children('article'),
			timeout;
		
		$articles.on( 'mouseenter', function( event ) {
				
			var $article	= $(this);
			clearTimeout( timeout );
			timeout = setTimeout( function() {
				
				if( $article.hasClass('active') ) return false;
				
				$articles.not( $article.removeClass('blur').addClass('active') )
						 .removeClass('active')
						 .addClass('blur');
				
			}, 65 );
			
		});
		
		$container.on( 'mouseleave', function( event ) {
			
			clearTimeout( timeout );
			$articles.removeClass('active blur');
			
		});
		
		
		//Scroll
		$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });


		//Counter
	// $('#row-1028996918').appear(function() {
	// 	console.log('yes')
	// 	$('.stat1').animateNumber({ number: 395 }, 1200);
	// 	$('.stat2').animateNumber({ number: 2398 }, 1200);
	// 	$('.stat3').animateNumber({ number: 679 }, 1150);
	// }, {
	// 	accX: 0,
	// 	accY: -200
	// });

	var coverageAreaTriggered = false;
	$(window).scroll(function () {
		if (!coverageAreaTriggered ){
			var scrollTop = $(window).scrollTop(),
				windowHeight = $(window).height(),
				elem = $('#row-1028996918').offset().top,
				final = elem - windowHeight,
				distance = final - scrollTop;
			if (distance < 0) {
				$('#count-regions').animateNumber(
					{
						number: 140,
						color: 'green', // require jquery.color
						'font-size': '30px',

						// optional custom step function
						// using here to keep '%' sign after number
						numberStep: function(now, tween) {
							var floored_number = Math.floor(now),
								target = $(tween.elem);

							target.text(floored_number);
						}
					},
					{
						easing: 'swing',
						duration: 1800
					}
				);
				$('#count-empower').animateNumber(
					{
						number: 30000,
						color: 'green', // require jquery.color
						'font-size': '30px',

						// optional custom step function
						// using here to keep '%' sign after number
						numberStep: function(now, tween) {
							var floored_number = Math.floor(now),
								target = $(tween.elem);

							target.text(floored_number + '+');
						}
					},
					{
						easing: 'swing',
						duration: 1800
					}
				);
				$('#count-sales').animateNumber(
					{
						number: 2000,
						color: 'green', // require jquery.color
						'font-size': '30px',

						// optional custom step function
						// using here to keep '%' sign after number
						numberStep: function(now, tween) {
							var floored_number = Math.floor(now),
								target = $(tween.elem);

							target.text(floored_number + '+');
						}
					},
					{
						easing: 'swing',
						duration: 1800
					}
				);
				$('#count-global').animateNumber(
					{
						number: 21,
						color: 'green', // require jquery.color
						'font-size': '30px',

						// optional custom step function
						// using here to keep '%' sign after number
						numberStep: function(now, tween) {
							var floored_number = Math.floor(now),
								target = $(tween.elem);

							target.text(floored_number + '+');
						}
					},
					{
						easing: 'swing',
						duration: 1800
					}
				);
				coverageAreaTriggered = true;
			}
		}
	});

	// function isOnScreen(elem) {
	// 	// if the element doesn't exist, abort
	// 	if( elem.length == 0 ) {
	// 		return;
	// 	}
	// 	var $window = jQuery(window)
	// 	var viewport_top = $window.scrollTop()
	// 	var viewport_height = $window.height()
	// 	var viewport_bottom = viewport_top + viewport_height
	// 	var $elem = jQuery(elem)
	// 	var top = $elem.offset().top
	// 	var height = $elem.height()
	// 	var bottom = top + height
	//
	// 	return (top >= viewport_top && top < viewport_bottom) ||
	// 		(bottom > viewport_top && bottom <= viewport_bottom) ||
	// 		(height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
	// }
	//
	// jQuery( document ).ready( function() {
	// 	window.addEventListener('scroll', function(e) {
	// 		if( isOnScreen( jQuery( '#row-1028996918' ) ) ) { /* Pass element id/class you want to check */
	//
	// 		}
	// 	});
	// });
	  
	  
	  
	  
	
	
	
						
});