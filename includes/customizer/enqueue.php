<?php

function pu_customize_preview_init(){
    wp_enqueue_script( 
        'pu_theme_customizer',
        get_theme_file_uri( '/assets/js/theme-customize.js' ),
        ['jquery', 'customize-preview'],
        false,
        true
    );

}