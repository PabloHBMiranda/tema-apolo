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
        'dashicons-admin-generic',
        40,
    );
}

function socials_page()
{



    $slug_admin_page = 'apl_social_midias';

    get_template_part('inc/components/nav_bar_admin', null, ['page' => $slug_admin_page]);

    $class_name = str_replace('_', '-', 'template-' . $slug_admin_page . ' page-admin-theme');
    echo '<div class="' . $class_name . '">';
    echo '<div class="infos-gerais">';
    echo '<h3>Redes Sociais</h3>';
    echo '<div class="infors-wrapper">';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        update_option('apl_facebook', sanitize_text_field($_POST['facebook']));
        update_option('apl_instagram', sanitize_text_field($_POST['instagram']));
        update_option('apl_whatsapp', sanitize_text_field($_POST['whatsapp']));

        echo '<div class="updated"><p>Opções atualizadas com sucesso.</p></div>';
    }
    echo '<form class="form-infos" method="post">';
    echo '<div class="wrapper-form"><p class="text-form">Facebook</p><input type="text" id="facebook" name="facebook" placeholder="Facebook" value="' . esc_attr(get_option('apl_facebook')) . '" /></div>';
    echo '<div class="wrapper-form"><p class="text-form">Instagram</p><input type="text" id="instagram" name="instagram" placeholder="Instagram" value="' . esc_attr(get_option('apl_instagram')) . '" /></div>';
    echo '<div class="wrapper-form"><p class="text-form">Whatsapp</p><input type="text" id="whatsapp" name="instagram" placeholder="Whatsapp" value="' . esc_attr(get_option('apl_whatsapp')) . '" /></div>';
    submit_button('Salvar Configurações');
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    echo '<style>

       .form-infos{
       display: flex;
       gap: 10px;
       flex-direction: column;
       }

      .wrapper-form{
          display: flex;
          flex-direction: row;
          gap: 40px;
          align-items: center;
      }
      
        .wrapper-form .text-form{
            font-size: 18px;
            font-weight: 600;
            margin: 0;
            width: 200px;
            padding: 10px 10px 10px 0;
        }
        
        .wrapper-form input{
            height: 40px;
            width: 400px;
        }
    </style>';
}
