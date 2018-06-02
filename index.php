<?php 

get_header();

?>
<section class="section">
<div class="container">
  <div class="center"><h3>News <span class="blue-text">&</span> Views</h3></div>
  
   

  <div class="row">
    <?php
    while(have_posts()) {
      the_post(); ?>
      
    <div class="col s12 m6">
      <div class="card large">
        <div class="card-image">
         <?php the_post_thumbnail('medium_large',['class' => 'responsive-img']); ?>
        </div>
        <div class="card-content">
        <span class="card-title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></span>
        <p><i class="far fa-user grey-text"></i> <?php the_author_posts_link(); ?> <i class="far fa-clock grey-text"></i> <a href="#"><?php the_time('j.n.y'); ?></a> <i class="fas fa-th grey-text"> </i> <?php echo get_the_category_list(', '); ?></p>
        <br>
        <!-- <div class="divider"></div> -->
        
         <p><?php if (has_excerpt()) {
                echo get_the_excerpt();
                } else {
                  $more = ' <strong><a href="'. get_permalink( get_the_ID() ) . '">....more</a></strong>';
                  echo wp_trim_words(get_the_content(), 16, $more);
               } ?>
          </p>
        </div>
      </div>
    </div>
    <?php }  wp_reset_postdata(); ?> 
  </div>
   
    <p><?php echo paginate_links(); ?> </p>
  </div>
  </section>

  <?php get_footer();

  ?>


