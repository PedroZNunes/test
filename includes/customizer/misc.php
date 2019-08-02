<?php

function pu_misc_customizer_section( $wp_customize ){
    pu_add_misc_settings( $wp_customize );

    $wp_customize->add_section( 'pu_misc_section' , [
        'title'     => __( 'Udemy Misc Settings', 'udemy'),
        'priority'  => 30,
        'panel'     => 'udemy'
    ]);


    pu_add_misc_controls( $wp_customize );

}

function pu_add_misc_settings( $wp_customize ){
    $wp_customize->add_setting( 'pu_header_show_search', [
        'default'   => 'yes',
        'transport' => 'postMessage'
    ]);

    $wp_customize->add_setting( 'pu_header_show_cart', [
        'default'   => 'yes',
        'transport' => 'postMessage'
    ]);

    $wp_customize->add_setting( 'pu_footer_copyright_text', [
        'default'   => 'Copyrights &copy; 2019 All Rights Reserved by Pedro Nunes.<br>'
    ]);

    $wp_customize->add_setting( 'pu_footer_tos_page', [
        'default'   => 0
    ]);

    $wp_customize->add_setting( 'pu_footer_privacy_page', [
        'default'   => 0
    ]);

    //Color picker and File Upload

    $wp_customize->add_setting( 'pu_read_more_color', [
        'default'   => '#1ABC9C'
    ]);

    $wp_customize->add_setting( 'pu_report_file', [
        'default'   => ''
    ]);

    // Popular Posts
    $wp_customize->add_setting( 'pu_show_popular_posts', [
        'default'   => false
    ]);

    $wp_customize->add_setting( 'pu_popular_posts_text', [
        'default'   => 'POPULAR POSTS'
    ]);
}

function pu_add_misc_controls( $wp_customize ){
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_header_show_search_input', [
            'label'         => __( 'Show Search Button in Header', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_header_show_search',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       => 'Yes'
            ]
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_header_show_cart_input', [
            'label'         => __( 'Show Cart Button in Header', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_header_show_cart',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       => 'Yes'
            ]
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_footer_copyright_text_input', [
            'label'         => __( 'Copyright Text in Footer', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_footer_copyright_text',
            'type'          =>  'text',
            'default'       =>  'Copyrights © 2019 All Rights Reserved by Pedro Nunes.'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_footer_tos_page_input', [
            'label'         => __( 'Terms of Services Page in Footer', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_footer_tos_page',
            'type'          =>  'dropdown-pages'
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_footer_privacy_page_input', [
            'label'         => __( 'Privacy Policy Page in Footer', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_footer_privacy_page',
            'type'          =>  'dropdown-pages'
        ]
    ));

    // Color picker and File Upload ==========

    $wp_customize->add_control( new WP_Customize_Color_Control( 
        $wp_customize, 
        'pu_read_more_color_input', 
        [
            'label'      => __( 'Read More Link Color', 'udemy' ),
            'section'    => 'pu_misc_section',
            'settings'   => 'pu_read_more_color',
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control( 
        $wp_customize, 
        'pu_report_file_input', 
        [
            'label'      => __( 'File Report', 'udemy' ),
            'section'    => 'pu_misc_section',
            'settings'   => 'pu_report_file'
        ] 
    ));

    // Popular Posts

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_show_popular_posts_input', [
            'label'         => __( 'Show Popular Posts in Header Banner', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_show_popular_posts',
            'type'          =>  'checkbox',
            'choices'       =>  [
                'yes'       =>  'yes'
            ]
        ]
    ));

    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'pu_popular_posts_text_input', [
            'label'         => __( 'Popular Posts Warning Text', 'udemy' ),
            'section'       =>  'pu_misc_section',
            'settings'      =>  'pu_popular_posts_text',
            'type'          =>  'text',
            'default'       =>  'Popular Posts'
        ]
    ));

}