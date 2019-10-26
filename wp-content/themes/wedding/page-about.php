<?php
/**
 * 
 * Template Name: About us
 */
get_header(); ?>
<?php
// Display post
if ( have_posts() ) : while ( have_posts() ) : the_post();


get_template_part( 'template-parts/8/8-content');?>
<?php  endwhile; endif?>


<?php
// The Query
query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();
if ( in_category( array('about-page', 'whatwedo' )) ) : 
   


get_template_part( 'template-parts/10/10-content');?>
<?php  endif; ?><?php endwhile; wp_reset_query();?>
<section class="card-section">
<div class="container">
<div class="card-columns">
<?php
// The Query
query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();?>

<?php
if ( in_category( array('journal-page', 'post-card' ) ) ) : 

get_template_part( 'template-parts/14/14-content');?>

<?php  endif; ?><?php endwhile; wp_reset_query();?>
</div>
</div>
</section>
	

<?php get_footer(); ?>