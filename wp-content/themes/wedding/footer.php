<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  
<?php if ( in_category( 'navbar' ) ) : ?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php the_post_thumbnail_url('largest');?>" class=" img-fluid" alt=""></a>
      <?php the_content();?>
      <?php  endif; ?>
      <?php  
endwhile;
endif;
?>
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
$(document).ready(function() {
  var swiper = new Swiper('.swiper-container', {

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      speed: 700,
       
        autoplay: 100,
        autoplayStopOnLast: false,
        
    });
  new WOW().init();
});</script>

