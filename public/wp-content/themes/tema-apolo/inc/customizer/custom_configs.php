<?php

function custom_configs($wp_customize) {
    // Crie uma nova seção no Customizer
    $wp_customize->add_section('custom_configs', array(
        'title' => __('Configurações Gerais'),
        'priority' => 30,
    ));

    //Adiciona um controle para informar o border-radius
    $wp_customize->add_setting('border-radius', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    //Adiciona o Controle - Border Radius
    $wp_customize->add_control('custom_text_control', array(
        'label' => 'Border Radius',
        'section' => 'custom_configs',
        'settings' => 'border-radius',
        'type' => 'text',
    ));

    // Adicione um controle para selecionar uma cor - PRIMARIAS
    $wp_customize->add_setting('primaria', array(
        'default' => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('primaria-light', array(
        'default' => '#666666',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('primaria-escura', array(
        'default' => '#1a1a1a',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - PRIMARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria', array(
        'label' => __('Primária', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'primaria',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria-light', array(
        'label' => __('Primária Light', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'primaria-light',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria-escura', array(
        'label' => __('Primária Escura', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'primaria-escura',
    )));



    //Adiciona um controle para selecionar uma cor - SECUNDARIAS
    $wp_customize->add_setting('secundaria', array(
        'default' => '#FF5733',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('secundaria-light', array(
        'default' => '#FF8C66',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('secundaria-escura', array(
        'default' => '#B23C0B',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - SECUNDARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria', array(
        'label' => __('Secundária', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'secundaria',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria-light', array(
        'label' => __('Secundária Light', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'secundaria-light',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria-escura', array(
        'label' => __('Secundária Escura', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'secundaria-escura',
    )));

    //xxx

    //Adiciona um controle para selecionar uma cor - OPTIONS
    $wp_customize->add_setting('fonte-escura', array(
        'default' => '#535353',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('fonte-clara', array(
        'default' => '#808E9C',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('background-color', array(
        'default' => '#F4F4F5',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - SECUNDARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fonte-escura', array(
        'label' => __('Fonte Escura', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'fonte-escura',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fonte-clara', array(
        'label' => __('Fonte Clara', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'fonte-clara',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background-color', array(
        'label' => __('Background', 'tema-apolo'),
        'section' => 'custom_configs',
        'settings' => 'background-color',
    )));
}
add_action('customize_register', 'custom_configs');
