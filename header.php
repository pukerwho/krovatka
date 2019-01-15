<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
  <?php echo get_option('google_analytics'); ?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" role="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 v-relative">
          <div class="left-menu pc-show">
            <?php wp_nav_menu( array(
              'theme_location'  => '',
              'menu'            => 'Navigation', 
              'container'       => 'div', 
              'container_class' => '', 
              'container_id'    => '',
              'menu_class'      => 'mainmenu_wrap', 
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<div class="wrap-menu">%3$s</div>',
              'depth'           => 0,
              'walker'          => '',
            )); ?>
          </div>
          <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="">
          </div>
          <div class="mobile-show p-absolute right-15">
            <div class="toogle-menu"></div>
            <div class="slide-menu">
              <div class="menu">
                Меню
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-menu pc-show">
        <!-- <li class="mr-4">
          <a href="#">My Account</a>
        </li> -->
        <li>
          <a href="/cart"><i class="fas fa-shopping-bag"></i> | Cart 
            <span >
              <?php 
                global $woocommerce;
                $count = $woocommerce->cart->cart_contents_count;
                if ($count > 0) {
                  echo '<span class="cart-count">';
                  echo $count;
                  echo '</span>';
                }
              ?>
            </span>
          </a>
        </li>
      </div>
    </div>
  </header>
  <section id="content" role="main">