<?php


// all styles and scripts have been altered. the parameter `version` have been changed from false to $ver
// in order to avoid caching while developing. this should be changed back in case this is ever to see the light of day.
function pu_enqueue()
{
    $uri    = get_theme_file_uri();
    $ver    = (PU_DEV_MODE) ? time() : false;

    /** Styles
     * ============================ */
    wp_register_style('pu_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', [], $ver);
    wp_register_style('pu_bootstrap',      $uri . '/assets/css/bootstrap.css',         [], $ver);
    wp_register_style('pu_style',          $uri . '/assets/css/style.css',             [], $ver);
    wp_register_style('pu_dark',           $uri . '/assets/css/dark.css',              [], $ver);
    wp_register_style('pu_font_icons',     $uri . '/assets/css/font-icons.css',        [], $ver);
    wp_register_style('pu_animate',        $uri . '/assets/css/animate.css',           [], $ver);
    wp_register_style('pu_magnific_popup', $uri . '/assets/css/magnific-popup.css',    [], $ver);
    wp_register_style('pu_responsive',     $uri . '/assets/css/responsive.css',        [], $ver);
    wp_register_style('pu_custom',         $uri . '/assets/css/custom.css',            [], $ver);

    wp_enqueue_style('pu_google_fonts');
    wp_enqueue_style('pu_bootstrap');
    wp_enqueue_style('pu_style');
    wp_enqueue_style('pu_dark');
    wp_enqueue_style('pu_font_icons');
    wp_enqueue_style('pu_animate');
    wp_enqueue_style('pu_magnific_popup');
    wp_enqueue_style('pu_responsive');
    wp_enqueue_style('pu_custom');

    /** Scripts
     * ============================ */
    //wp_register_script( 'pu_jquery',        $uri . '/assets/js/jquery.js',              [], $ver, true );
    wp_register_script('pu_plugins',       $uri . '/assets/js/plugins.js',             [], $ver, true);
    wp_register_script('pu_functions',     $uri . '/assets/js/functions.js',           [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('pu_plugins');
    wp_enqueue_script('pu_functions');
}
