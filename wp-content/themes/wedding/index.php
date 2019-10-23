<link href="/wordpress/wp-content/themes/wedding/assets/css/8.css" rel="stylesheet" type="text/css" />
<?php get_header(); ?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  
<?php if ( in_category( 'banner1' ) ) : ?>
<!-- Navigation -->
<?php the_content();?>
      <?php  endif; ?>
      <?php  
endwhile;
endif;
?>
<?php
get_template_part( 'template-parts/3/3-content', 'none' );?>
<?php get_footer(); ?>