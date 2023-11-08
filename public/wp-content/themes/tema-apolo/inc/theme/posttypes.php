<?php
function register_motocycles() {
    $labels = array(
        'name'               => 'Motos',
        'singular_name'      => 'moto',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'motorcycles' ),
        'supports' => [
            'title',
            'thumbnail'
        ],
        'menu_icon'           => 'dashicons-admin-post',
    );

    register_post_type( 'motorcycles', $args );
}

add_action( 'init', 'register_motocycles' );
