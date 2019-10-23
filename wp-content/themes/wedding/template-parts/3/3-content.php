<section class="about-section my-5">
    <div class="container">
    <div class="row">
    <div class="col-12 col-md-5 text-left my-auto">About Us
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
    </div>
    </div>
    </div>
</section>