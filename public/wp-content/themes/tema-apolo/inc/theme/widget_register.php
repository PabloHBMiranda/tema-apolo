<?php

function register_widget_zone() {
    register_sidebar(array(
        'name'          => __('Header Main', 'text_domain'),
        'id'            => 'header_main',
        'description'   => __('Esta é a área de widgets do Header Main', 'text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Front Page Home', 'text_domain'),
        'id'            => 'front_home',
        'description'   => __('Esta é a área de widgets da Home', 'text_domain'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'register_widget_zone');

