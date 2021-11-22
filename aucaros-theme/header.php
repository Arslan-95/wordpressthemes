<!DOCTYPE html>
<html lang="en-US" class="js no-touch cssanimations csstransitions">
   <!--<![endif]-->
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="initial-scale=1.0">
      <title>Auracos</title>
      <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
      <link rel="dns-prefetch" href="http://s.w.org/">
      <link rel="icon" type="image/x-icon" href="<?php get_custom_logo(); ?>">
      <meta name="generator" content="MasterSlider 2.25.4 - Responsive Touch Image Slider">
      <meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
      <style type="text/css">.titletext.youtube { display: none; }</style>
      <style type="text/css">.fancybox-margin{margin-right:17px;}</style>
      <?php wp_head(); ?>
   </head>
   <body class="home page page-id-2490 page-template-default _masterslider _msp_version_2.25.4">
      <div class="body-wrapper  float-menu header-style-transparent gdlr-header-off" data-home="http://procollagenium.com">
         <!-- top navigation -->
         <header class="gdlr-header-wrapper">
            <div class="gdlr-header-inner">
               <div class="gdlr-header-container container">
                  <!-- logo -->
                  <div class="gdlr-logo">
                     <a href="/">
                     <img src="<?php echo get_template_directory_uri(); ?> /assets/images/auracos-feelthebeaut.png" alt="" width="446" height="51" data-normal="<?php echo get_template_directory_uri(); ?> /assets/images/auracos-feelthebeaut.png">						
                     </a>
                     <div class="gdlr-responsive-navigation dl-menuwrapper" id="gdlr-responsive-navigation">
                        <button class="dl-trigger">Open Menu</button>
                        <?php                        
                           wp_nav_menu( [
                              'theme_location'  => 'primary',
                              'menu'            => 'primary',
                              'container'       => null,
                              'container_class' => '',
                              'container_id'    => '',
                              'menu_class'      => 'dl-menu gdlr-main-mobile-menu',
                              'menu_id'         => 'menu-main',
                              'echo'            => true,
                              'fallback_cb'     => 'wp_page_menu',
                              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                              'depth'           => 0,
                              'walker'          => '',
                           ] );
                        ?>
                     </div>
                  </div>
                  <!-- navigation -->
                  <div class="gdlr-navigation-wrapper">
                     <?php
                        wp_nav_menu( [
                           'theme_location'  => 'primary',
                           'menu'            => 'primary',
                           'container'       => 'nav',
                           'container_class' => 'gdlr-navigation',
                           'container_id'    => 'gdlr-main-navigation',
                           'menu_class'      => 'sf-menu gdlr-main-menu',
                           'menu_id'         => 'menu-main-1',
                           'echo'            => true,
                           'fallback_cb'     => 'wp_page_menu',
                           'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                           'depth'           => 0,
                           'walker'          => '',
                        ] );
                     ?>
                     <span class="gdlr-menu-search-button-sep">•</span>
                     <i class="fa fa-search icon-search gdlr-menu-search-button" id="gdlr-menu-search-button"></i>
                     <div class="gdlr-menu-search" id="gdlr-menu-search">
                        <form method="get" id="searchform" action="/">
                           <div class="search-text">
                              <input type="text" value="Type Keywords" name="s" autocomplete="off" data-default="Type Keywords">
                           </div>
                           <input type="submit" value="">
                           <div class="clear"></div>
                        </form>
                     </div>
                     <div class="gdlr-navigation-gimmick" id="gdlr-navigation-gimmick" style="width: 66px; left: 833px;"></div>
                     <div class="clear"></div>
                  </div>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="clear"></div>
         </header>
         <div id="gdlr-header-substitute"></div>