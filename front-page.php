<?php

get_header();

?>

 <!-- Section: Slider -->
 <section class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo get_theme_file_uri('img/design2.jpg') ?>" alt="">
        <div class="caption center-align">
          <h2>Web Design</h2>
          <h5 class="hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur incidunt consequuntur a porro fugiat nulla.</h5>
          <a href="#services" class="btn btn-large grey darken-4">Learn More</a>
        </div>
      </li>
      <li>
        <img src="<?php echo get_theme_file_uri('img/development.jpg') ?>" alt="">
        <div class="caption right-align">
          <h2 class="white-text">Web Development</h2>
          <h5 class="white-text hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur incidunt consequuntur a porro fugiat nulla.</h5>
          <a href="#services" class="btn btn-large grey darken-4">Learn More</a>
        </div>
      </li>
      <li>
        <img src="<?php echo get_theme_file_uri('img/budget2.jpg') ?>" alt="">
        <div class="caption left-align">
          <h2 class="grey-text text-darken-3">We Work With All Budgets</h2>
          <h5 class="grey-text text-darken-3 hide-on-small-only">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur incidunt consequuntur a porro fugiat nulla.</h5>
          <a href="#" class="btn btn-large grey darken-4">Learn More</a>
        </div>
      </li>
    </ul>
  </section>

   <!-- About -->
   <section class="section">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>We're a Web Design & Development Agency based in Ripon, North Yorkshire.</h3>
        </div>
        <div class="row">
          <div class="col s12">
            <p class="grey-text text-darken-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, minus, porro vel voluptatibus blanditiis atque
              consequuntur dolorem et quod, soluta nam aperiam. Inventore quis laudantium accusamus sequi deleniti, fugiat
              natus sed quisquam alias aliquid facilis et repellendus doloremque animi libero temporibus sunt nostrum! Officiis
              libero illo voluptate ea quaerat quas?</p>
          </div>
        </div>
      </div>
  </section>

  <!-- Section: Icon Boxes -->
  <section id="services" class="section section-icons center grey lighten-2">
    <div class="container">
      <h3 class="center">Our Services</h3>
      <div class="row">
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">phonelink</i>
              <h5 class="grey-text text-darken-4">Web Design</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">keyboard</i>
              <h5 class="grey-text text-darken-4">Web Development</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">show_chart</i>
              <h5 class="grey-text text-darken-4">Search Engine Optimisation</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">phone_iphone</i>
              <h5 class="grey-text text-darken-4">Moblie Apps</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">drafts</i>
              <h5 class="grey-text text-darken-4">Email Marketing</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card medium">
            <span class="card-title">
              <i class="material-icons medium blue-text text-darken-4">shopping_cart</i>
              <h5 class="grey-text text-darken-4">Ecommerce</h5>
            </span>
            <div class="card-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi maiores officia natus velit incidunt debitis
                a inventore, nostrum iure itaque!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <a href="<?php echo esc_url(site_url('/contact')) ?>" class="btn btn-large waves-effect waves-light btn blue">Get in touch</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Work Sample -->


  <section class="section section-sample">
    <div class="container">
      <h3 class="center">A Taste Of Our Work:</h3>
      <div class="row">
      <?php
   $homepagePortfolio = new WP_Query(array(
            'posts_per_page' => 8,
            'post_type' => 'portfolio',
            'orderby' => 'title',
            'order' => 'ASC'
            
          )); ?>
           <?php while ($homepagePortfolio->have_posts()) {
      $homepagePortfolio->the_post(); ?>
        <div class="col s12 m3">
          <div class="card">
            <div class="card-image">
          <?php the_post_thumbnail('medium', ['class' => 'materialboxed responsive-img']); ?>
          </div>
           </div>
        </div>
           <?php } wp_reset_postdata(); ?>
      </div>
      <div class="row">
        <div class="col s12 center">
          <a href="#" class="btn btn-large grey darken-4">See More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="section grey darken-4">
    <div class="carousel carousel-slider center">
    <?php
             $homepageTestimonials = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'testimonial',
            
          )); ?>
           <?php while ($homepageTestimonials->have_posts()) {
             $homepageTestimonials->the_post(); ?>
      <div class="carousel-item">
        <div class="card medium push-down-card grey darken-4 white-text ">
          <div class="card-content">
            <h5 class="center">Testimonial</h5>
            <div class="container">
              <p>
                <em> <?php the_content(); ?> 
                </em>
              </p>
              <?php } wp_reset_postdata(); ?>
              <div class="center">
                <p class="push-down">John Smith, CEO, Gobal Holdings Ltd</p>
              </div>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </section>

  <!-- News -->
  <section class="section section-news">
    <div class="container">
      <div class="row">
        <div class="col s12">
        <div class="center"><h3>Latest News <span class="blue-text">&</span> Views</h3></div>
        </div>
      </div>

      <div class="row">
      <?php
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 6,
            'orderby' => 'DESC'
          )); ?>
           <?php while ($homepagePosts->have_posts()) {
         $homepagePosts->the_post(); ?>
            <div class="col s12 m4">
               <div class="card large">
                <div class="card-image">
                  <?php the_post_thumbnail('medium', ['class' => 'responsive-img']); ?>
             </div>
            <div class="card-content"> 
              <span class="card-title"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></span>
              <p><?php if (has_excerpt()) {
                echo get_the_excerpt();
                } else {
                  $more = ' <strong><a href="'. get_permalink( get_the_ID() ) . '">....more</a></strong>';
                  echo wp_trim_words(get_the_content(), 18, $more);
               } ?>
              </p>
            </div>
           </div>
         </div>
          <?php } wp_reset_postdata(); ?>
      </div> 
     </div>  
  </section>

  <?php get_footer(); ?>


  


