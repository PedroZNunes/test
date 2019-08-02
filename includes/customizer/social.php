<?php
function pu_social_customizer_section( $wp_customize ){
    
    pu_add_social_settings( $wp_customize );    
    
    $wp_customize->add_section( 'pu_social_section', [
        'title'         =>  __( 'Udemy Social Settings', 'udemy' ),
        'priority'      => 30,
        'panel'         => 'udemy'
    ]);

    pu_add_social_controls( $wp_customize );

}

function pu_add_social_settings( $wp_customize ){
    $wp_customize->add_setting( 'pu_facebook_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'pu_twitter_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'pu_instagram_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'pu_phone_handle', [
        'default'       =>  ''
    ]);

    $wp_customize->add_setting( 'pu_email_handle', [
        'default'       =>  ''
    ]);
}

function pu_add_social_controls( $wp_customize ){
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_social_facebook_input',
        [
            'label'     => __( 'Facebook Handle', 'udemy' ),
            'section'   => 'pu_social_section',
            'settings'  => 'pu_facebook_handle'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_social_twitter_input',
        [
            'label'     => __( 'Twitter Handle', 'udemy' ),
            'section'   => 'pu_social_section',
            'settings'  => 'pu_twitter_handle'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_social_instagram_input',
        [
            'label'     => __( 'Instagram Handle', 'udemy' ),
            'section'   => 'pu_social_section',
            'settings'  => 'pu_instagram_handle'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_social_phone_input',
        [
            'label'     => __( 'Phone Handle', 'udemy' ),
            'section'   => 'pu_social_section',
            'settings'  => 'pu_phone_handle'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_social_email_input',
        [
            'label'     => __( 'Email Handle', 'udemy' ),
            'section'   => 'pu_social_section',
            'settings'  => 'pu_email_handle'
        ]
    ));
}

?>