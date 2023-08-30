<?php

add_action('admin_menu', 'informations_options');
function informations_options(){
    add_menu_page(
        'Informações Gerais',
        'Informações Gerais',
        'manage_options',
        'apl_general_information',
        'infos_page',
        'dashicons-admin-generic',
        30,
    );
}

function infos_page() {

    $slug_admin_page = 'apl_general_information';


    $class_name = str_replace('_', '-', 'template-' . $slug_admin_page . ' page-admin-theme');
    echo '<div class="' . $class_name . '">';
    get_template_part('inc/components/nav_bar_admin', null, ['page' => $slug_admin_page]);
    echo '<div class="wrapper-general-information">';
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
                    echo '<div class="wrapper-form"><p class="text-form">Facebook</p><input type="text" id="field_2" name="instagram" placeholder="Instagram" value="' . esc_attr(get_option('apl_instagram')) . '" /></div>';
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
        }
    </style>';
}

