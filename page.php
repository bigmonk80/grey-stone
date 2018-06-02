<?php get_header(); ?>

<div class="container">
  <?php
  while(have_posts()) {
    the_post(); ?>
    <h1 class="">This is a page not post</h1>
     <h2><?php the_title(); ?></h2>
     <?php the_content(); ?>

    
  

 <?php } ?>

 </div>

 
  <?php
get_footer();

?>
