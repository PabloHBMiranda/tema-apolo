<?php

function initialize_theme_options() {
    //Preferências
//    if (false === get_option('apl_admin_pf_header_bar')) {
//        add_option('apl_admin_pf_header_bar', false);
//    }
//    if (false === get_option('apl_admin_pf_header_main')) {
//        add_option('apl_admin_pf_header_main', false);
//    }

    //Informações Gerais
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
    if (false === get_option('apl_admin_gn_cnpj')) {
        add_option('apl_admin_gn_gn_cnpj', '');
    }
    if (false === get_option('apl_admin_gn_endereco')) {
        add_option('apl_admin_gn_gn_endereco', '');
    }
    if (false === get_option('apl_admin_gn_horario')) {
        add_option('apl_admin_gn_horario', '');
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
