<?php
function registrar_meu_post_type() {
    $labels = array(
        'name'               => 'Informações do Tema',
        'singular_name'      => 'Informação do Tema',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'theme_infos' ),
        'capabilities' => array(
            'create_posts' => 'do_not_allow',
            'read_post' => 'do_not_allow',
            'delete_post'=> 'do_not_allow',
            'edit_post' => 'do_not_allow',
        ),
        'menu_icon'           => 'dashicons-admin-post',
    );

    register_post_type( 'theme_infos', $args );
}

add_action( 'init', 'registrar_meu_post_type' );
