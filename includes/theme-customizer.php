<?php

function pu_customize_register( $wp_customize ){
    pu_edit_site_identity( $wp_customize );

    pu_add_panel( $wp_customize );

    pu_social_customizer_section( $wp_customize );
    pu_misc_customizer_section( $wp_customize );
    pu_extension_customizer_section( $wp_customize );
}

function pu_add_panel( $wp_customize ){
    $wp_customize->add_panel( 'udemy',[
        'title'         =>  __( 'Udemy', 'udemy' ),
        'description'   =>  __( '<p>Udemy Theme Settings</p>', 'udemy' ),
        'priority'      =>  160
    ] );
}

function pu_edit_site_identity( $wp_customize ){
    $wp_customize->get_section( 'title_tagline' )->title = 'General'; 
}
?>