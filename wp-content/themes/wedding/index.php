
<?php get_header('custom'); ?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
       <div class="container my-5">
            <div class="row">
                 <div class=" col-12 col-md-8">
  <img src="<?php the_post_thumbnail_url('largest');?>" alt="" class="img-fluid">

    <div class="post-wrapper px-4 py-5">
      <div class="title-post h1"><?php the_title();?></div> 
     <span>By <b><?php the_author();?></b> in <b> Wedding</b></span> Posted On <?php the_date( get_option( 'date_format' ) ); ?>
<hr>
      <div class="content-post"><?php the_content(); ?></div>
      </div>
      </div>
<div class="col-12 col-md-4">
<?php dynamic_sidebar('sidebar-1'); ?>
</div>
      </div>

      </div>
   
     <?php
endwhile;
endif;
?>
<?php get_footer(); ?>
<style>
aside{
     padding: 2rem;
     background:white;
     margin-bottom: 1rem;
}

aside h1:before{
     content: '';
     position: absolute;
     background: #8DB392;
     width: 50px;
     height: 3px;
     left: 0;
     bottom: -10px;
     
}
.tagcloud a{
     font-size: 1.2rem!important;
}
.widget-title{
     font-size: 1.45rem!important;
     position: relative;
}
img{
     max-width: 100%;
     height: auto;
}
.post-wrapper{
     background-color: #fff;
}
.title-post{
     font-weight: 600;
     letter-spacing: 0.025em;
}
.content-post{
     color: #777777;
}
.col-12 li, .tagcloud{
     background: #fff;
     margin-top: 1.2rem;
     list-style:none;
     padding: 0.5rem 0;
     font-size: 1.2rem
}
ul{
     margin: 0;padding: 0;
}
</style>
