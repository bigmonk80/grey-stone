

<?php get_header(); ?>

<section class="section">
<div class="container">
  <?php
  while(have_posts()) {
    the_post(); ?>

     <h2><?php the_title(); ?></h2>
     <?php the_content(); ?>
     <p><i class="far fa-user grey-text"></i> <?php the_author_posts_link(); ?> <i class="far fa-clock grey-text"></i> <a href="#"><?php the_time('j.n.y'); ?></a> <i class="fas fa-th grey-text"> </i> <?php echo get_the_category_list(', '); ?></p>

    
  

 <?php } ?>
 </section>
 </div>

 
  <?php
get_footer();

?>