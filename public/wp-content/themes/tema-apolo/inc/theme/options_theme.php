<?php

function initialize_theme_options() {
    if (false === get_option('apl_facebook')) {
        add_option('apl_facebook', '');
    }
    if (false === get_option('apl_instagram')) {
        add_option('apl_instagram', '');
    }
}
add_action('after_setup_theme', 'initialize_theme_options');
