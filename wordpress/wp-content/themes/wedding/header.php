<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Wedding
 * @since Wedding
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Wedding</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
 

  <!-- Custom fonts for this template -->
  
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/3.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/4.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/5.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/6.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/7.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/8.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/9.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/11.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/12.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/19.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/25.css" rel="stylesheet" type="text/css" />
  
 
  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/home.css" rel="stylesheet">

</head>
<?php
// The Query
query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();
if ( in_category( 'navbar' ) ) : 
   
 get_template_part( 'template-parts/1/1-content', 'none' );?>
<?php  endif; ?><?php endwhile; wp_reset_query();?>

	

	




 





  
