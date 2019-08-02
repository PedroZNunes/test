<?php

// Setup
const PU_DEV_MODE = true;

// Includes
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/setup.php'));
include(get_theme_file_path('includes/widgets.php'));
include(get_theme_file_path('includes/theme-customizer.php'));
include(get_theme_file_path('includes/customizer/social.php'));
include(get_theme_file_path('includes/customizer/misc.php'));
include(get_theme_file_path('includes/customizer/enqueue.php'));


// Hooks
add_action( 'wp_enqueue_scripts', 'pu_enqueue' );
add_action( 'after_setup_theme', 'pu_setup_theme' );
add_action( 'widgets_init', 'pu_widgets' );
add_action( 'customize_register', 'pu_customize_register' );
add_action( 'customize_preview_init', 'pu_customize_preview_init' );

// shortcodes
