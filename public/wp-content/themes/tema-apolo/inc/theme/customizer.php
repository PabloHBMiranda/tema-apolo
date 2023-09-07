<?php

function customizer_color_section($wp_customize) {
    // Crie uma nova seção no Customizer
    $wp_customize->add_section('custom_colors', array(
        'title' => __('Cores Personalizadas', 'seu-text-domain'),
        'priority' => 30,
    ));

    // Adicione um controle para selecionar uma cor - PRIMARIAS
    $wp_customize->add_setting('primaria', array(
        'default' => '#ff0000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('primaria-light', array(
        'default' => '#cacaca',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('primaria-escura', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - PRIMARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria', array(
        'label' => __('Primária', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'primaria',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria-light', array(
        'label' => __('Primária Light', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'primaria-light',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'primaria-escura', array(
        'label' => __('Primária Escura', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'primaria-escura',
    )));



    //Adiciona um controle para selecionar uma cor - SECUNDARIAS
    $wp_customize->add_setting('secundaria', array(
        'default' => '#ff0000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('secundaria-light', array(
        'default' => '#cacaca',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('secundaria-escura', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - SECUNDARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria', array(
        'label' => __('Secundária', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'secundaria',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria-light', array(
        'label' => __('Secundária Light', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'secundaria-light',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'secundaria-escura', array(
        'label' => __('Secundária Escura', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'secundaria-escura',
    )));

    //xxx

    //Adiciona um controle para selecionar uma cor - SECUNDARIAS
    $wp_customize->add_setting('fonte-escura', array(
        'default' => '#ff0000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('fonte-clara', array(
        'default' => '#cacaca',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_setting('background', array(
        'default' => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    //Adiciona o Controle - SECUNDARIAS
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fonte-escura', array(
        'label' => __('Fonte Escura', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'fonte-escura',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'fonte-clara', array(
        'label' => __('Fonte Clara', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'fonte-clara',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background', array(
        'label' => __('Background', 'tema-apolo'),
        'section' => 'custom_colors',
        'settings' => 'background',
    )));
}
add_action('customize_register', 'customizer_color_section');
