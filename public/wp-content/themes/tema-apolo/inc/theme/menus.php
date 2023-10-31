<?php

add_action('init', function () {
    register_nav_menu('header-menu', __('Header Menu'));
    register_nav_menu('footer-main', __('Footer Menu'));
});
