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
        'apl_admin_pf_header_bar',
        'apl_admin_pf_header_main',
    ];

    $slug_admin_page = 'apl_preferences';


    $class_name = str_replace('_', '-', 'template-' . $slug_admin_page . ' page-admin-theme');
    echo '<div class="' . $class_name . '">';
    get_template_part('inc/components/nav_bar_admin', null, ['page' => $slug_admin_page]);
    echo '<div class="wrapper-general-information">';
    echo '<h3>Peronalização</h3>';
    echo '<div class="infos-wrapper">';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($options_names as $option_name) {
            $option_value = isset($_POST[$option_name]) ? '1' : '0';
            update_option($option_name, $option_value);
        }
        echo '<div class="updated"><p>Opções atualizadas com sucesso.</p></div>';
    }
    echo '<form class="form-infos" method="post">';
    foreach ($options_names as $name){
        $checked = get_option($name) === '1' ? 'checked' : '';
        $old_name = $name;
        $name = str_replace('apl_admin_pf_', '', $name);
        $name = str_replace('_', ' ', $name);
        $name = ucwords($name);
        echo '<div class="wrapper-checkbox"><p class="text-form">' . $name . '</p><input class="check-admin" type="checkbox" id="'. $old_name . '" name="' . $old_name . '" value="1" ' . $checked . ' /></div>';
    }
    submit_button('Salvar Configurações');
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    wp_enqueue_style('custom-admin-styles', get_template_directory_uri() . '/assets/css/admin/admin-styles.scss');
}

