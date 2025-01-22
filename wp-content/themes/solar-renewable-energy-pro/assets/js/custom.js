/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

jQuery(function($){
  "use strict";
    jQuery('.menu > ul').superfish({
      delay:       500,                            
      animation:   {opacity:'show',height:'show'},  
      speed:       'fast'                         
    });

    /* Top Search */
    jQuery('.search-box span i').click(function(){
        jQuery(".serach_outer").toggle();
    });
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});

jQuery('document').ready(function(){

    var owl = jQuery('#featured_product .owl-carousel');
      owl.owlCarousel({
      margin:20,
      nav: false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      loop: false,
      dots:false,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        },
        1200: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    var owl = jQuery('#service .owl-carousel');
      owl.owlCarousel({
      margin:20,
      nav: false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      loop: false,
      dots:false,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    var owl = jQuery('#best_product .owl-carousel');
      owl.owlCarousel({
      margin: 10,
      nav:false,
      autoplay : true,
      lazyLoad: true,
      autoplayTimeout: 3000,
      loop: false,
      dots: false,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    var owl = jQuery('#testimonial .owl-carousel');
      owl.owlCarousel({
      margin: 10,
      nav:true,
      autoplay : false,
      lazyLoad: true,
      autoplayTimeout: 3000,
      loop: false,
      dots: false,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });
    var owl = jQuery('#partner .owl-carousel');
      owl.owlCarousel({
      margin: 10,
      nav:true,
      autoplay : false,
      lazyLoad: true,
      autoplayTimeout: 3000,
      loop: false,
      dots: false,
      navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
      responsive: {
        0: {
          items: 1
        },
        576: {
          items: 2
        },
        1000: {
          items: 5
        }
      },
      autoplayHoverPause : true,
      mouseDrag: true
    });

});

jQuery('document').ready(function(){

  jQuery('#counter .count').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 8000,
          easing: 'swing',
          step: function (now) {
             jQuery(this).text(Math.ceil(now));
          }
      });
  });

  var footer1=jQuery('#contact-details').outerHeight();
  jQuery('.google-map iframe').height(footer1);

  // ------------ Scroll Top ---------------

  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
      jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
      jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
  });
  jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
    }, 2000);
  });

  //Loader
  jQuery(window).load(function() {
    jQuery(".preloader").delay(2000).fadeOut("slow");
  });
  
});