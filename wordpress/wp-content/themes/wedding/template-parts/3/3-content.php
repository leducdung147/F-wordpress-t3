<section class="about-section my-5">
    <div class="container">
    <div class="row">
    <div class="col-12 col-md-5 text-left my-auto">About us
    <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
  
  <?php if ( in_category( 'about-us' ) ) : ?>
  <h2><?php the_title();?></h2>
    </div>
    <div class="col-12 col-md-7 my-3">
  <?php the_content();?>
     <?php  endif; ?>
      <?php  
endwhile;
endif;
?>
<div class="readmore pt-4 mt-4">
<a  class=" px-5 py-3 border readmore" href="<?php echo get_page_link( get_page_by_title( 'about' )->ID ); ?>">READ MORE</a></div>
    </div>
    </div>
    </div>
</section>