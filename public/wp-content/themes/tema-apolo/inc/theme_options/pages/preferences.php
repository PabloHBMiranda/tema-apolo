<?php

add_action('admin_menu', 'preference_options');
function preference_options(){
    add_menu_page(
        'Preferências',
        'Preferências',
        'manage_options',
        'apl_preferences',
        'preference_page',
        'dashicons-edit',
        30,
    );
}

function preference_page() {

    $options_names = [
        'apl_admin_gn_endereco',
        'apl_admin_gn_telefone_1',
        'apl_admin_gn_telefone_2',
        'apl_admin_gn_email_1',
        'apl_admin_gn_email_2',
    ];

    $slug_admin_page = 'apl_preferences';


    $class_name = str_replace('_', '-', 'template-' . $slug_admin_page . ' page-admin-theme');
    echo '<div class="' . $class_name . '">';
    get_template_part('inc/components/nav_bar_admin', null, ['page' => $slug_admin_page]);
    echo '<div class="wrapper-general-information">';
    echo '<h3>Informações Gerais</h3>';
    echo '<div class="infos-wrapper">';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($options_names as $option_name) {
            update_option($option_name, sanitize_text_field($_POST[$option_name]));
        }

        echo '<div class="updated"><p>Opções atualizadas com sucesso.</p></div>';
    }
    echo '<form class="form-infos" method="post">';
    foreach ($options_names as $name){
        $old_name = $name;
        $name = str_replace('apl_admin_gn_', '', $name);
        $name = str_replace('_', ' ', $name);
        $name = ucwords($name);
        echo '<div class="wrapper-form"><p class="text-form">' . $name . '</p><input type="text" id="'. $old_name . '" name="' . $old_name . '" placeholder="' . $name . '" value="' . esc_attr(get_option($old_name)) . '" /></div>';
    }
    submit_button('Salvar Configurações');
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    wp_enqueue_style('custom-admin-styles', get_template_directory_uri() . '/assets/css/admin/admin-styles.scss');
}

