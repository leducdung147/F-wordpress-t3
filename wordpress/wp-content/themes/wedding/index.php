
<?php get_header('custom'); ?>

<?php
	
  // Display post
  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
       <div class="container my-5">
            <div class="row">
                 <div class=" col-12 col-md-7 col-lg-8">
  <img src="<?php the_post_thumbnail_url('largest');?>" alt="" class="img-fluid">

    <div class="post-wrapper px-4 py-5">
      <div class="title-post h1"><?php the_title();?></div> 
     <span>By <b><?php the_author();?></b> in <b> Wedding</b></span> Posted On <?php the_date( get_option( 'date_format' ) ); ?>
<hr>
      <div class="content-post"><?php the_content(); ?></div>
      </div>
      </div>
      <?php
endwhile;
endif;
?>
<div class="col-12 col-md-5 col-lg-4">
     <ul class="nav nav-tabs d-flex justify-content-center my-auto" id="myTab" role="tablist">
  <li class="nav-item flex-fill text-center p-0 ">
    <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Lastest</a>
  </li>
  <li class="nav-item flex-fill  text-center p-0 ">
    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Popular</a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <?php query_posts( $args );
 
 // The Loop
 while ( have_posts() ) : the_post();?>
 
 <?php
 if ( in_category( array('journal-page', 'post-card' ) ) ) : ?>
 
       <div class="image-post mt-4 "><img src="<?php the_post_thumbnail_url('largest');?>" alt="" ></div>
       <div class="title-posts text-center mt-3"><p><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </p></div>
       <?php  endif; ?><?php endwhile; wp_reset_query();?>

 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <?php query_posts( $args );
 
 // The Loop
 while ( have_posts() ) : the_post();?>
 
 <?php
 if ( in_category( array('journal-page', 'post-card' ) ) ) : ?>
 
       <div class="image-post mt-4 "><img src="<?php the_post_thumbnail_url('largest');?>" alt="" ></div>
       <div class="title-posts text-center mt-3"><p><a href="<?php the_permalink() ?>"><?php the_title() ?></a> </p></div>
       <?php  endif; ?><?php endwhile; wp_reset_query();?>
  </div>
 
</div>

<?php dynamic_sidebar('sidebar-1'); ?>
</div>
      </div>

      </div>
   
 
<?php get_footer(); ?>
<style>

aside{
     padding: 2rem;
     background:white;
     margin-bottom: 1rem;
}
.image-post img{
     height: 100px;
     width: max-content;
     object-fit: cover;
     
}
.nav-tabs, .nav-tabs li{
background: white;
margin: 0!important;
border: none;
}
.tab-content{
     background: white;
     padding: 2rem;
     margin-bottom: 1rem; 
}

.nav-link.active{
     background: #8DB392!important;
     border: none;
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
