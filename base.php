<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="main-wrapper" class="container-fluid">
      <div id="sidebar-wrapper">
      <?php
        if (has_nav_menu('mobile_navigation')) :
          $walker = new Menu_With_Description;
          wp_nav_menu( array( 'theme_location' => 'mobile_navigation', 
                              'container' => '', 
                              'menu_class' => 'sidebar-nav nav-pills nav-stacked', 
                              'menu_id' => 'menu', 
                              'walker' => $walker ) );
        endif;
        ?>
        <!--
          <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
              <li><a href="index.html">BERANDA</a></li>

              <li>
                  <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">INFORMASI</a>

                  <ul class="nav-pills nav-stacked" style="list-style-type: none;">
                      <li><a href="route.html" tabindex="-1">PETA RUTE</a></li>
                      <li><a href="service.html" tabindex="-1">LAYANAN BUS</a></li>
                      <li><a href="news.html" tabindex="-1">BERITA</a></li>
                      <li><a href="announcement.html" tabindex="-1">PENGUMUMAN</a></li>
                      <li><a href="regulation.html" tabindex="-1">TATA TERTIB</a></li>
                  </ul>
              </li>

              <li>
                  <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">TENTANG KAMI</a>

                  <ul class="nav-pills nav-stacked" style="list-style-type: none;">
                      <li><a href="history.html" tabindex="-1">SEJARAH</a></li>
                      <li><a href="vision.html" tabindex="-1">VISI & MISI</a></li>
                      <li><a href="organization.html" tabindex="-1">STRUKTUR ORGANISASI</a></li>
                      <li><a href="infrastructure.html" tabindex="-1">INFRASTRUKTUR</a></li>
                      <li><a href="armada.html" tabindex="-1">ARMADA</a></li>
                  </ul>
              </li>

              <li>
                  <form action="" class="form-search form-horizontal" id="custom-search-form" role="search">
                      <div class="input-append span12">
                          <input class="search-query" type="text" placeholder="Search">
                          <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                      </div>
                  </form>
              </li>
          </ul>
        -->
      </div>
    <?php include Wrapper\template_path(); ?>
    <?php if (Setup\display_sidebar()) : ?>
      <aside class="sidebar">
        <?php include Wrapper\sidebar_path(); ?>
      </aside><!-- /.sidebar -->
    <?php endif; ?>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    </div>
  </body>
</html>
