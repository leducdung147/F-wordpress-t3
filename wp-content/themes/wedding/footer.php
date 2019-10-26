
<?php wp_footer(); ?>

</body>
</html>


<!-- Bootstrap core JavaScript -->
<script src="/wordpress/wp-content/themes/wedding/vendor/jquery/jquery.min.js"></script>
  <script src="/wordpress/wp-content/themes/wedding/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/wordpress/wp-content/themes/wedding/assets/js/wow.js"></script>
  <!-- Plugin JavaScript -->
  <script src="/wordpress/wp-content/themes/wedding/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="/wordpress/wp-content/themes/wedding/assets//js/script.js"></script>
  <script src='/wordpress/wp-content/themes/wedding/assets//js/swiper.min.js'></script>
<script>
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
   
  


});</script>

