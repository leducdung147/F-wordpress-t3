
<?php get_header('custom'); ?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
       <div class="container my-5">
  <img src="<?php the_post_thumbnail_url('largest');?>" alt="" class="img-fluid">

    
      <div class="title-post h1"><?php the_title();?></div>  </h2>
 
      <?php the_content(); ?>
      </div>
   
     <?php
endwhile;
endif;
?>
<?php get_footer(); ?>
