
(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 100
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);
function darkNav() {
    //if ( $('.swiper-slide.swiper-slide-active').hasClass('dark') ) { // `this` rather?
    if ( $(this).find('.swiper-slide-active') ) {
    
      $('.swiper-container h1').toggleClass('zoomIn');
     
    } else {
      alert();
    }
  }
$(document).ready(function() {

  
  var swiper = new Swiper('.swiper-container', {

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      speed:700,
       effect: 'fade',
       autoplay: {
    delay: 5000,
  },
        autoplayStopOnLast: false,
        on: {
      init: darkNav,          // do also on init
      slideChange: darkNav    // is this needed?
    }
        
    });
   
  


});
})(jQuery); // End of use strict
