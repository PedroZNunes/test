<?php

function pu_extension_customizer_section( $wp_customize ){

    // Recipes
    $wp_customize->add_setting( 'pu_excerpt_show_recipe_rating', [
        'default'           =>  'yes',
        'transport'         =>  'postMessage'
    ]);

    $wp_customize->add_section( 'pu_extension_section', [
        'title'             =>  __( 'Plugins Extension Settings', 'udemy'),
        'priority'          =>  30,
        'panel'             =>  'udemy'
    ]);

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_excerpt_show_recipe_rating_input', [
            'label'         =>  __( 'Show Recipe Rating in Excerpt', 'udemy' ),
            'section'       =>  'pu_extension_section',
            'settings'      =>  'pu_excerpt_show_recipe_rating',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  'yes'
            ]
        ]
    ));
}
