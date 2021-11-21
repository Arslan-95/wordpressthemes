<?php

add_action('wp_enqueue_scripts', 'scripts_and_styles_load');

function scripts_and_styles_load(){
    wp_enqueue_style('lazyload-style', get_template_directory_uri() . '/assets/css/style-lazyload.min.css');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style(1).css');
    wp_enqueue_style('Open-Sans-google-font', get_template_directory_uri() . '/assets/css/css');
    wp_enqueue_style('weather', get_template_directory_uri() . '/assets/css/css(1)');
    wp_enqueue_style('superfish', get_template_directory_uri() . '/assets/css/superfish.css');
    wp_enqueue_style('dlmenu', get_template_directory_uri() . '/assets/css/component.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');
    wp_enqueue_style('style-responsive', get_template_directory_uri() . '/assets/css/style-responsive.css');
    wp_enqueue_style('style-custom', get_template_directory_uri() . '/assets/css/style-custom.css');
    wp_enqueue_style('gdlr-woo-style', get_template_directory_uri() . '/assets/css/gdlr-woocommerce.css');
    wp_enqueue_style('wpgmp-frontend', get_template_directory_uri() . '/assets/css/frontend.css');
    wp_enqueue_style('ms-main', get_template_directory_uri() . '/assets/css/masterslider.main.css');
    wp_enqueue_style('ms-custom', get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_script('jquery-default', get_template_directory_uri() . '/assets/js/jquery.js', array(), false, true);
    wp_enqueue_script('jquery-migrate-default', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', array('jquery-default'), false, true);
    wp_enqueue_script('emoji', get_template_directory_uri() . '/assets/js/wp-emoji-release.min.js', array(), false, true);
    wp_enqueue_script('jquery-form', get_template_directory_uri() . '/assets/js/jquery.form.min.js', array(), false, true);
    wp_enqueue_script('scripts_22', get_template_directory_uri() . '/assets/js/scripts.js', array(), false, true);
    wp_enqueue_script('lazyload-all', get_template_directory_uri() . '/assets/js/lazyload-all.min.js', array('jquery-default'), false, true);
    wp_enqueue_script('superfish', get_template_directory_uri() . '/assets/js/superfish.js', array(), false, true);
    wp_enqueue_script('hoverIntent', get_template_directory_uri() . '/assets/js/hoverIntent.min.js', array(), false, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.js', array(), false, true);
    wp_enqueue_script('jquery-dlmenu', get_template_directory_uri() . '/assets/js/jquery.dlmenu.js', array(), false, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), false, true);
    wp_enqueue_script('jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.pack.js', array(), false, true);
    wp_enqueue_script('jquery-fancybox-media', get_template_directory_uri() . '/assets/js/jquery.fancybox-media.js', array(), false, true);
    wp_enqueue_script('jquery-fancybox-thumbs', get_template_directory_uri() . '/assets/js/jquery.fancybox-thumbs.js', array(), false, true);
    wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array(), false, true);
    wp_enqueue_script('gdlr-script', get_template_directory_uri() . '/assets/js/gdlr-script.js', array(), false, true);
    wp_enqueue_script('wp-embed-min', get_template_directory_uri() . '/assets/js/wp-embed.min.js', array(), false, true);
    wp_enqueue_script('masterwaslider-min', get_template_directory_uri() . '/assets/js/masterslider.min.js', array(), false, true);
    wp_enqueue_script('jquery-easy-pie-chart', get_template_directory_uri() . '/assets/js/jquery.easy-pie-chart.js', array(), false, true);
    wp_enqueue_script('plugins-scroll', get_template_directory_uri() . '/assets/js/plugins-scroll.js', array(), false, true);
}

add_action('after_setup_theme', 'content_settings_up');

function content_settings_up(){
    require_once(__DIR__ . '/content_settings/admin-settings.php');
    require_once(__DIR__ . '/content_settings/landing-page.php');
}