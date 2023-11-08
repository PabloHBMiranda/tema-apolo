<?php
function register_motocycles() {
    $labels = array(
        'name'               => 'Motos',
        'singular_name'      => 'Moto',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'motos' ),
        'supports' => [
            'title',
            'thumbnail'
        ],
        'menu_icon'           => 'dashicons-store',
    );

    register_post_type( 'motos', $args );
}

add_action( 'init', 'register_motocycles' );
