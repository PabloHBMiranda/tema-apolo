<?php

function initialize_theme_options() {
    if (false === get_option('apl_admin_gn_endereco')) {
        add_option('apl_admin_gn_endereco', '');
    }
    if (false === get_option('apl_admin_gn_telefone_1')) {
        add_option('apl_admin_gn_telefone_1', '');
    }
    if (false === get_option('apl_admin_gn_telefone_2')) {
        add_option('apl_admin_gn_telefone_2', '');
    }
    if (false === get_option('apl_admin_gn_email_1')) {
        add_option('apl_admin_gn_email_1', '');
    }
    if (false === get_option('apl_admin_gn_email_2')) {
        add_option('apl_admin_gn_email_2', '');
    }


    //Redes Sociais
    if (false === get_option('apl_admin_sc_facebook')) {
        add_option('apl_admin_sc_facebook', '');
    }
    if (false === get_option('apl_admin_sc_instagram')) {
        add_option('apl_admin_sc_instagram', '');
    }
    if (false === get_option('apl_admin_sc_instagram')) {
        add_option('apl_admin_sc_whatsapp', '');
    }
}
add_action('after_setup_theme', 'initialize_theme_options');
