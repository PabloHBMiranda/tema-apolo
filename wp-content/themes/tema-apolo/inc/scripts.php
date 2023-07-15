<?php
add_action( 'wp_enqueue_scripts', function () {
    $theme_version = get_bloginfo( "version" );
    
    wp_enqueue_style(
        get_stylesheet() . "-styles",
        get_template_directory_uri() . '/bundle/index.css',
        false,
        $theme_version,
        'all'
    );
    
    wp_enqueue_script(
        get_stylesheet() . "-script",
        get_template_directory_uri() . '/bundle/index.js',
        false,
        $theme_version,
        'all'
    );
} );