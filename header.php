<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body <?php body_class(); ?>>
  <!-- <header id="home" class="scrollspy"> -->
  <?php the_nav(); ?>
      <div class="container">
        <div class="nav-wrapper">
          <a href="<?php echo esc_url(site_url('/home')) ?>" class="brand-logo">Grey Stone</a>
          <a href="#" data-activates="mobile-nav" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li <?php if (is_page('home')) echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/home')) ?>">Home</a>
            </li>
            <li <?php if (is_page('about-us')) echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/about')) ?>">About Us</a>
            </li>
            <li <?php if (get_post_type() ==='post') echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/blog')) ?>">News</a>
            </li>
            <li <?php if (is_page('contact')) echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/contact')) ?>">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  </header>
  
 
    <ul class="side-nav grey darken-4 white-text" id="mobile-nav">
        <div class="container">
        <li>
          <span class="large-font"><a href="<?php echo esc_url(site_url('/home')) ?>" class="white-text">Home</a></span>
        </li>
        <div class="divider grey darken-2"></div>
        <li>
          <span class="large-font"><a href="<?php echo esc_url(site_url('/about')) ?>" class="white-text">About Us</a></span>
        </li>
        <div class="divider grey darken-2"></div>
        <li>
          <span class="large-font"><a href="<?php echo esc_url(site_url('/blog')) ?>" class="white-text">News</a></span>
        </li>
        <div class="divider grey darken-2"></div>
        <li>
          <span class="large-font"><a href="<?php echo esc_url(site_url('/contact')) ?>" class="white-text">Contact</a></span>
        </li>
        <div class="divider grey darken-2"></div>
      </div>
    </ul>
   

