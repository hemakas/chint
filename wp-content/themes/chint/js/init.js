
(function($) {
  "use strict";
  $(document).ready( function () {


    /*-------------------------------------------------*/
  	/* =  slider subheader
  	/*-------------------------------------------------*/
    var owl = $("#slider1");

    owl.owlCarousel({

        navigation: false, // Show next and prev buttons
        slideSpeed: 500,
        paginationSpeed: 1000,
        singleItem: true,
        transitionStyle : "fade",
        autoPlay:true  
         
    }); 
    $('#subheader .owl-pagination .owl-page').append ('<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 16 16"preserveAspectRatio="none"><circle cx="8" cy="8" r="6.215"/></svg>');
    var container_wrap = '<div class="nav-container"></div>';
    $('#subheader .owl-pagination').wrap(container_wrap);

     
    // Custom Navigation Events
    $(".next").on('click', function(){
    owl.trigger('owl.next');
    })
    $(".prev").on('click', function(){
    owl.trigger('owl.prev');
    })

    $('#slider1 .item >img').each(function(i, elem) {
      var img = $(elem);
      var div = $('<div />').css({
        background: 'url(' + img.attr('src') + ') no-repeat',
        width: img.width() + 'px',
        height: img.height() + 'px'
      });
      img.replaceWith(div);
      $(div).addClass('browse-images')
    });

    /*-------------------------------------------------*/
    /* =  animate numbers
    /*-------------------------------------------------*/
    $('#blog').one('inview', function(event, isInView, visiblePartX, visiblePartY){
      $('#lines1').animateNumber({ number: 226},2000);

      $('#lines2').animateNumber({ number: 356},2000);

      $('#lines3').animateNumber({ number: 195},2000);

      $('#lines4').animateNumber({ number: 583},2000);
    });

    /*-------------------------------------------------*/
    /* =  animate objects
    /*-------------------------------------------------*/

    var $fadeInUp = $('');
    var $fadeInLeft = $('');
    var $fadeInRight = $('');
    var $fadeIn = $('.subheader-section, .about-section, .filter-section, .heading-slogan-section, .video-section, .pricing-section, .customers-section, .follow-section, .team-section, .blog-section, .contact-section, .map, .theme, .social');


    // InView - fadeIn

    if ($(window).width() >= 1024) {
      $fadeIn.css('opacity', 0);
      $fadeInUp.css('opacity', 0);
      $fadeInLeft.css('opacity', 0);
      $fadeInRight.css('opacity', 0);
      
      $fadeIn.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeIn'); }
      });

      // InView - fadeInDown
      $fadeInUp.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInUp'); }
      });
      // InView - fadeInLeft
      $fadeInLeft.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInLeft'); }
      });
      // InView - fadeInRight
      $fadeInRight.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInRight'); }
      });
  
      
    }else {

      $fadeIn.css('opacity', 1);
      $fadeInUp.css('opacity', 1);
      $fadeInLeft.css('opacity', 1);
      $fadeInRight.css('opacity', 1);
      
    } 

    $(window).on('resize', function() {
      var screen_size = $(window).width();   

      if (screen_size >= 1024) {

        $fadeIn.css('opacity', 0);
        $fadeInUp.css('opacity', 0);
        $fadeInLeft.css('opacity', 0);
        $fadeInRight.css('opacity', 0);
        
        $fadeIn.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeIn'); }
        });

        // InView - fadeInDown
        $fadeInUp.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInUp'); }
        });
        // InView - fadeInLeft
        $fadeInLeft.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInLeft'); }
        });
        // InView - fadeInRight
        $fadeInRight.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInRight'); }
        });

      }else {

        $fadeIn.css('opacity', 1);
        $fadeInUp.css('opacity', 1);
        $fadeInLeft.css('opacity', 1);
        $fadeInRight.css('opacity', 1);
        
      }
    }).trigger('resize');


	
	
	

  });
  
})(jQuery);


