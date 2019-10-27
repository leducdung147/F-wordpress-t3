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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 

  <!-- Custom fonts for this template -->
  
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/wordpress/wp-content/themes/wedding/assets/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  
  <link href="/wordpress/wp-content/themes/wedding/assets/css/swiper.min.css" rel="stylesheet" type="text/css" />
  <link href="/wordpress/wp-content/themes/wedding/assets/css/14.css" rel="stylesheet" type="text/css" />

  <!-- Custom styles for this template -->
  <link href="/wordpress/wp-content/themes/wedding/assets/css/banner.css" rel="stylesheet">

</head>
<?php
// The Query
query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();
if ( in_category( 'navbar2' ) ) : 
   
 get_template_part( 'template-parts/1/1-content', 'none' );?>
<?php  endif; ?><?php endwhile; wp_reset_query();?>

	




 





  
