<?php
/**
 * 
 * Template Name: journal page
 */
get_header('custom'); ?>
<section class="text-center py-5">
<div class="title-journal "><small>Journal</small></div>
<div class="content-journal h1 ">Our Blog Post</div>

</section>
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
<?php get_footer()  ?>
<style>
.title-journal{
    letter-spacing: 0.8rem;
}
</style>