<?php
function pu_widgets()
{
    register_sidebar([
        'name'          =>  __('Main Sidebar', 'udemy'),
        'id'            =>  'pu_sidebar',
        'description'   =>  __('Widgets in this area will show up in all posts and pages', 'udemy'),
        'before_widget' =>  '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h4>',
        'after_title'   =>  '</h4>'

    ]);
}
