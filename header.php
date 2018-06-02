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
            <!-- <li>
              <a href="#">Our Work</a>
            </li> -->
            <li <?php if (get_post_type() ==='post') echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/blog')) ?>">News</a>
            </li>
            <li <?php if (is_page('contact')) echo 'class="active"' ?>>
              <a href="<?php echo esc_url(site_url('/contact')) ?>">Contact</a>
            </li>
            <!-- <li>
              <a href="#">Careers</a>
            </li>
            <li>
              <a href="#">Services</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
  </div>
  </header>
  
     <ul class="side-nav" id="mobile-nav">
      <li>
        <a href="<?php echo esc_url(site_url('/home')) ?>">Home</a>
      </li>
      <li>
        <a href="<?php echo esc_url(site_url('/about')) ?>">About Us</a>
      </li>
      <li>
        <a href="#">Our Work</a>
      </li>
      <li>
        <a href="<?php echo esc_url(site_url('/blog')) ?>">News</a>
      </li>
      <li>
        <a href="#">Contact</a>
      </li>
      <li>
        <a href="#">Careers</a>
      </li>
      <li>
        <a href="#">Services</a>
      </li>
    </ul>

