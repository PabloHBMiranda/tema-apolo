<?php

add_action('init', function () {
    register_nav_menu('header-menu', __('Header Menu'));
});
add_theme_support('admin-bar', array('callback' => '__return_false'));
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');