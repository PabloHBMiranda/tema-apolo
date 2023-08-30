<?php


add_action('admin_menu', 'menu_options');

function menu_options(){
    add_menu_page(
        'Ajustes do Tema',
        'Ajustes do Tema',
        'manage_options',
        'ajustes_do_tema',
        'ajustes_page',
        'dashicons-admin-generic',
        30,
    );
}

function ajustes_page() {
    echo '<div class="wrap">';
    echo '<h2>Ajustes do Tema</h2>';

    echo '<div class="infos-gerais">';
    echo '<h3>Informações Gerais</h3>';
    echo '<div class="infors-wrapper">';
    echo '<div class="description-text-form">';
    echo '<p>Texto de Descrição</p>';
    echo '</div>';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        update_option('apl_facebook', sanitize_text_field($_POST['facebook']));
        update_option('apl_instagram', sanitize_text_field($_POST['instagram']));

        echo '<div class="updated"><p>Opções atualizadas com sucesso.</p></div>';
    }
    echo '<form class="form-infos" method="post">';
    echo '<input type="text" id="field_1" name="facebook" placeholder="Facebook" value="' . esc_attr(get_option('apl_facebook')) . '" />';
    echo '<input type="text" id="field_2" name="instagram" placeholder="Instagram" value="' . esc_attr(get_option('apl_instagram')) . '" />';
    submit_button('Salvar Configurações');
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

add_theme_support('admin-bar', array('callback' => '__return_false'));
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
