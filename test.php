function the_nav() {
     if(is_page('home')) { ?>
        <header id="home" class="scrollspy">
        <div class="navbar-fixed">
          <nav class="grey darken-4">
          <?php } else { ?>
        <header class="main-header">
             <nav class="transparent z-depth-0">
             <?php

          }
 }