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

// Menu fncs.
add_action( 'after_setup_theme', 'menu_reg_fnc' );

function menu_reg_fnc(){
    register_nav_menu( 'primary', 'primary-menu' );
}

add_filter( 'nav_menu_css_class', 'add_auracos_class_to_nav_menu', 10, 2 );
function add_auracos_class_to_nav_menu( $classes, $item ){
	$classes[] = 'gdlr-normal-menu';
    
	return $classes;
}

function my_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'dl-submenu';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class' );

// Load content editor for Theme
add_action( 'after_setup_theme', 'content_settings_up' );

function content_settings_up(){
    require_once( __DIR__ . '/content_settings/admin-settings.php' );
    require_once( __DIR__ . '/content_settings/landing-page.php' );
}

// Polylang

add_action('init', function () {
    pll_register_string(
        'discover_title',
        'Discover Title',
        'LandingPage',
        false
    );
    pll_register_string(
        'discover_text',
        'Discover Text',
        'LandingPage',
        false
    );

    pll_register_string(
        'benefits_title',
        'Benefits Title',
        'LandingPage',
        false
    );
    pll_register_string(
        'benefits_text',
        'Benefits Text',
        'LandingPage',
        false
    );
    pll_register_string(
        'benefits_main_title',
        'Benefits Main Title',
        'LandingPage',
        false
    );
    pll_register_string(
        'benefits_main_subtitle',
        'Benefits Main Subtitle',
        'LandingPage',
        false
    );

    // Benefits
    pll_register_string(
        'benefits_first',
        'Benefits First',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_second',
        'Benefits Second',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_third',
        'Benefits Third',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_four',
        'Benefits Four',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_five',
        'Benefits Five',
        'LandingPage Benefits',
        false
    );
    //Procient
    pll_register_string(
        'benefits_first_procient',
        'Benefits First_procient',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_second_procient',
        'Benefits Second_procient',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_third_procient',
        'Benefits Third_procient',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_four_procient',
        'Benefits Four_procient',
        'LandingPage Benefits',
        false
    );
    pll_register_string(
        'benefits_five_procient',
        'Benefits Five_procient',
        'LandingPage Benefits',
        false
    );

    //The Sciense
    pll_register_string(
        'thesciense_title',
        'TheScience Title',
        'LandingPage',
        false
    );
    pll_register_string(
        'thesciense_text1',
        'TheScience Text1',
        'LandingPage',
        false
    );
    pll_register_string(
        'thesciense_text2',
        'TheScience Text2',
        'LandingPage',
        false
    );
    pll_register_string(
        'thesciense_little_text',
        'TheScience Little Text',
        'LandingPage',
        false
    );
    pll_register_string(
        'thesciense_second_title',
        'TheScience Second Title',
        'LandingPage',
        false
    );
    pll_register_string(
        'thesciense_second_subtitle',
        'TheScience Second Subtitle',
        'LandingPage',
        false
    );

    //Pro Collagenium
    pll_register_string(
        'pro_collagenium_title',
        'ProCollagenium Title',
        'LandingPage ProCollagenium',
        false
    );
    pll_register_string(
        'pro_collagenium_subtitle',
        'ProCollagenium Subtitle',
        'LandingPage ProCollagenium',
        false
    );
    pll_register_string(
        'pro_collagenium_text1',
        'ProCollagenium Text1',
        'LandingPage ProCollagenium',
        false
    );
    pll_register_string(
        'pro_collagenium_text2',
        'ProCollagenium Text2',
        'LandingPage ProCollagenium',
        false
    );
    //Pro Collagenium List
    pll_register_string(
        'pro_collagenium_list_title',
        'ProCollageniumList Title',
        'LandingPage ProCollageniumList',
        false
    );
    pll_register_string(
        'pro_collagenium_list_item1',
        'ProCollageniumList Item1',
        'LandingPage ProCollageniumList',
        false
    );
    pll_register_string(
        'pro_collagenium_list_item2',
        'ProCollageniumList Item2',
        'LandingPage ProCollageniumList',
        false
    );
    pll_register_string(
        'pro_collagenium_list_item3',
        'ProCollageniumList Item3',
        'LandingPage ProCollageniumList',
        false
    );
    pll_register_string(
        'pro_collagenium_list_item4',
        'ProCollageniumList Item4',
        'LandingPage ProCollageniumList',
        false
    );
    pll_register_string(
        'pro_collagenium_list_item5',
        'ProCollageniumList Item5',
        'LandingPage ProCollageniumList',
        false
    );
});

// Posts

add_shortcode( 'about_subtitle', 'about_subtitle_function' );

function about_subtitle_function( $atts ){
    $text = $atts['text'];
    return "<div class='gdlr-item-title-divider'></div>
    <div class='gdlr-item-title-caption gdlr-skin-info'>$text</div>";
}