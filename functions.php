<?php

function materialize_styles()
{
    // wp_register_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '1.0', 'all');
    // wp_enqueue_style('normalize'); // Enqueue it!
    wp_enqueue_style( 'materialize_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons' );
    wp_enqueue_style('materialize', get_template_directory_uri() . '/css/materialize.min.css', array(), '1.0', 'screen,projection');
    wp_enqueue_style('greystone_custom_styles', get_stylesheet_uri());

    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_enqueue_script( 'material-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), '1.0', false );
        }
        wp_enqueue_script( 'material-script', get_template_directory_uri() . '/js/materialize.min.js', array(), '1.0', false ); 
        wp_enqueue_script( 'material-custom', get_template_directory_uri() . '/js/gstone.js', array(), '1.0', false );
        
}

function custom_load_font_awesome() {
    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.8/js/all.js', array(), null );
}

add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 2 );
/**
 * Filter the HTML script tag of `font-awesome` script to add `defer` attribute.
 *
 * @param string $tag    The <script> tag for the enqueued script.
 * @param string $handle The script's registered handle.
 *
 * @return   Filtered HTML script tag.
 */
function add_defer_attribute( $tag, $handle ) {
    if ( 'font-awesome' === $handle ) {
        $tag = str_replace( ' src', ' defer src', $tag );
    }

    return $tag;
}

 add_action('wp_enqueue_scripts', 'materialize_styles');
 add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );


function greystone_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_image_size('blogImage', 600, 550, true);
    // add_image_size('blogCardImage', 420, 999, true);
    add_image_size('medium_large');
    add_image_size('medium');
}

 add_action('after_setup_theme', 'greystone_features');

 // different navbar

 
 

  function the_nav() {
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
     if(is_page('home')) { ?>
        <header id="home" class="scrollspy">
          <div class="navbar-fixed">
            <nav class="grey darken-4">
          <?php } else { ?>      
        <header id="home" class="main-header scrollspy" style="background-image: url('<?php echo esc_url( $backgroundImg[0] ); ?>')" >
          <nav class="transparent z-depth-0">

          <?php }
  }
    

 function contact_section() { 
    if(! is_page('contact')) { ?>
    <!-- contact -->
    <section class="section blue">
      <div class="container">
        <div class="row">
          <div class="col s12 white-text center">
            <h4>We're always looking for new projects</h4>
            <p>Why not get in touch for an informal chat about your project. We'd be happy to help.</p>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col s12 center-align">
        <a href="<?php echo esc_url(site_url('/contact')) ?>" class="btn btn-large waves-effect white blue-text">Let's Chat</a>
         </div>
        </div>
      </div>
    </div>
  </section>
 <?php
    }
 }

 function check_post_type_and_remove_media_buttons() {
  global $current_screen;
  // Replace following array items with your own custom post types
  $post_types = array('testimonial');
  if (in_array($current_screen->post_type,$post_types)) {
  remove_action('media_buttons', 'media_buttons');
  }
  }
  add_action('admin_head','check_post_type_and_remove_media_buttons');

// Add excerpt to editor
 add_post_type_support( 'page', 'excerpt' );


    