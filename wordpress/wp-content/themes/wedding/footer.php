
<?php wp_footer(); ?>
<?php 
get_template_part( 'template-parts/7/7-content', 'none' );
get_template_part( 'template-parts/8/8-content', 'none' );

?>
</body>
</html>


<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.js"></script>
  <!-- Plugin JavaScript -->
  <script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets//js/script.js"></script>
  <script src='<?php echo get_template_directory_uri(); ?>/assets//js/swiper.min.js'></script>
i
  <script>
      $(document).ready(function(){
          $("ul.sub-menu").parent().addClass("dropdown");
          $("ul.sub-menu").addClass("dropdown-menu");
          $("ul li.dropdown a").addClass("dropdown-toggle");
          $("ul.sub-menu li a").removeClass("dropdown-toggle"); 
        
          $('a.dropdown-toggle').attr('data-toggle', 'dropdown');
      });
  </script>