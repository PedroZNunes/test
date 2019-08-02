<?php
function pu_setup_theme(){
    // Enables thumbnails (preview images) for all posts
    add_theme_support( 'post-thumbnails' );

    // Enables the_title to display the posts and pages titles
    add_theme_support( 'title-tag' );

    // Enable custom logos to be uploaded by the user
    add_theme_support( 'custom-logo' );
    
    // Create RSS for our feed posts
    add_theme_support( 'automatic-feed-links' );
    
    // Let wordpress know I want to use html5 features.
    // The array indicates where the features are supposed to work.
    add_theme_support( 'html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption'] );

    // Allow users to have theme-specific dummy content generated for them as they get a fresh wordpress
    // installation. The array is an array of dummy content to be generated for the user.
    add_theme_support( 'starter-content', [
        // Displays which widgets will be displayed in the sidebars
        'widgets'                   =>  [
            'pu_sidebar'            =>  [
                'search-form', 'archives', 'recent-posts', 'categories', 'calendar'
            ]
        ],

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments'               =>  [
            'image-about'           =>  [
                'post-title'        =>  __( 'About', 'udemy'),
                'file'              =>  'assets/images/about/1.jpg'
            ],  
            'image-author'          =>      [
                'post-title'        =>  __( 'Author', 'udemy'),
                'file'              =>  'assets/images/author/1.jpg'
            ]
        ],

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts'                     =>  [
            'home'                  =>  [
                'thumbnail'         =>  '{{image-about}}'
            ],  
            'about'                 =>  [
                'thumbnail'         =>  '{{image-about}}'
            ],  
            'contact'               =>  [
                'thumbnail'         =>  '{{image-about}}'
            ],
            'blog'                  =>  [
                'thumbnail'         =>  '{{image-about}}'
            ],
            'homepage-section'      =>  [
                'thumbnail'         =>  '{{image-about}}'
            ],
            'services'              =>  [
                'thumbnail'         =>  '{{image-author}}'
            ]
        ],

        // Default to a static front page and assign the front and posts pages.
        'options'                   =>  [
             'show_on_front'        =>  'page',
             'page_on_front'        =>  '{{home}}',
             'page_for_posts'       =>  '{{blog}}'
        ],
            
        // Set the front page section theme modes to the IDs of the core-registered pages.
        'theme-mods'                        =>  [
            'pu_facebook_handle'            =>  'udemy',
            'pu_twitter_handle'             =>  'udemy',
            'pu_instagram_handle'           =>  'udemy',
            'pu_email_handle'               =>  'udemy',
            'pu_phone_handle'               =>  'udemy',
            'pu_header_show_cart'           =>  'yes',
            'pu_header_show_search'         =>  'yes',
            'pu_read_more_color'            =>  '#1ABC9C',
        ],
            
        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus'                 =>  [
            'primary'               =>  [
                'name'              =>  __( 'Primary Menu', 'udemy' ),
                'items'             =>  [
                    'link_home',
                    'page_about',
                    'page_blog',
                    'page_contact'
                ]
            ],
            'topmost'               =>  [
                'name'              =>  __( 'Topmost Menu', 'udemy' ),
                'items'             =>  [
                    'link_home',
                    'page_about',
                    'page_contact'
                ]
            ]
            
        ]
    ]);

    register_nav_menu( 'primary', __( 'Primary Menu', 'udemy' ) );
    register_nav_menu( 'topmost', __( 'Topmost Menu', 'udemy' ) );

    if( function_exists( 'quads_register_ad' ) ){
        quads_register_ad( [
            'location'              => 'udemy_header',
            'description'           => 'Udemy Header position'
        ] );
    }

}
