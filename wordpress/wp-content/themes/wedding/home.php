
<?php 

get_header(); ?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  
<?php if ( in_category( 'banner1' ) ) : ?>
<!-- Navigation -->
<?php get_template_part( 'template-parts/2/2-content', 'none' );
?>
      <?php  endif; ?>
      <?php  
endwhile;
endif;
?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  
<?php if ( in_category( 'banner2' ) ) : ?>
<!-- Navigation -->
<?php get_template_part( 'template-parts/27/27-content', 'none' );
?>
      <?php  endif; ?>
      <?php  
endwhile;
endif;
?>
<?php
get_template_part( 'template-parts/3/3-content', 'none' );
get_template_part( 'template-parts/4/4-content', 'none' );
get_template_part( 'template-parts/5/5-content', 'none' );
get_template_part( 'template-parts/19/19-content', 'none' );
get_template_part( 'template-parts/25/25-content', 'none' );

get_template_part( 'template-parts/6/6-content', 'none' );

?>


<?php get_footer(); ?>