<?php
//

add_action('admin_menu', 'social_menu_page');

function social_menu_page()
{
    add_menu_page(
        'Redes Sociais',
        'Redes Sociais',
        'manage_options',
        'apl_social_midias',
        'socials_page',
        'dashicons-smartphone',
        40,
    );
}

function socials_page()
{

    $options_names = [
        'apl_admin_sc_facebook',
        'apl_admin_sc_instagram',
        'apl_admin_sc_whatsapp',
    ];

    $slug_admin_page = 'apl_social_midias';

    $class_name = str_replace('_', '-', 'template-' . $slug_admin_page . ' page-admin-theme');
    echo '<div class="' . $class_name . '">';
    get_template_part('inc/components/nav_bar_admin', null, ['page' => $slug_admin_page]);
    echo '<div class="infos-gerais">';
    echo '<h3>Redes Sociais</h3>';
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
                $name = str_replace('apl_admin_sc_', '', $name);
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
