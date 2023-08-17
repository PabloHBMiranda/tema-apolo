<?php

add_action('init', function () {
    register_nav_menu('header-menu', __('Header Menu'));
});
