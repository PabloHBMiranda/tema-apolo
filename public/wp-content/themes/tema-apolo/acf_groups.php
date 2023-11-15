<?php

add_action( 'acf/include_fields', function() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key' => 'group_6554cffb0ae97',
        'title' => 'Informações da Moto',
        'fields' => array(
            array(
                'key' => 'field_6554cffb3239a',
                'label' => 'KM',
                'name' => 'km',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => 1,
                'max' => '',
                'placeholder' => 50000,
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_6554d0723239b',
                'label' => 'Usada ou Nova?',
                'name' => 'status_moto',
                'aria-label' => '',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui_on_text' => 'Nova',
                'ui_off_text' => 'Usada',
                'ui' => 1,
            ),
            array(
                'key' => 'field_6554d1113239c',
                'label' => 'Valor do Veículo',
                'name' => 'valor_veiculo',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => '',
                'placeholder' => 10000,
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_6554d13d3239d',
                'label' => 'Valor da Entrada',
                'name' => 'valor_entrada',
                'aria-label' => '',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => '',
                'placeholder' => 5000,
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ) );
} );

