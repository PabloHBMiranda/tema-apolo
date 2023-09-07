<?php

add_action('admin_menu', 'add_nav_menus_link');

function add_nav_menus_link() {
    add_menu_page(
        'Menus',
        'Menus',
        'manage_options',
        'nav-menus.php',
        '',
        'dashicons-menu',
        29
    );

    add_menu_page(
        'Personalizar',
        'Personalizar',
        'manage_options',
        'customize.php',
        '',
        'dashicons-art',
        29
    );

}

