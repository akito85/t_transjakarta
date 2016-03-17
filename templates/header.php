
<header class="banner">
  <nav class="navbar yamm navbar-default navbar-fixed-top" role="navigation">
  <?php 
    // Fix menu overlap bug..
    if ( is_admin_bar_showing() ) echo '<div class="wpbarshow"></div>'; 
  ?>
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/logo-tj-1.png" class="img-responsive" id="logo-tj" />
      </a>

      <ul class="nav navbar-nav" id="nav-burger">
          <li>
              <div class="burger-button">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </div>
          </li>
      </ul>
      <form action="<?php home_url( '/' ); ?>" method="get"class="search-form" id="navbar-search" role="search">
          <div class="form-group has-feedback">
              <label for="search" class="sr-only">Search</label>
              <input class="form-control" id="search" type="text" name="s" value="<?php the_search_query(); ?>">
              <i class="fa fa-search form-control-feedback"></i>
          </div>
      </form> 

      <?php
      if (has_nav_menu('primary_navigation')) :
        $walker = new Menu_With_Description;
        wp_nav_menu( array( 'theme_location' => 'primary_navigation', 
                            'container' => '', 
                            'menu_class' => 'nav navbar-nav navbar-right', 
                            'menu_id' => 'nav-header', 
                            'walker' => $walker ) );
      endif;
      ?>
    </div>
    <div class="container-fluid" id="header-bottom"></div>
  </nav>
</header>
