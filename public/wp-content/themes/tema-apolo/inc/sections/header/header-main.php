<?php

//require_once "../../theme/sidebars.php";
;function add_section_header_main($wp_customize)
{
    // Seção principal
    $wp_customize->add_section('header-main', array(
        'title' => 'Header Main',
        'priority' => 10,
    ));

    $wp_customize->add_setting('active_section', array(
        'default' => false,
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));


    $wp_customize->add_control(
        'active_section', array(
        'label' => 'Habilitar Seção',
        'section' => 'header-main',
        'type' => 'checkbox',
    ));

    $wp_customize->add_control(
        'title', array(
        'label' => 'Título da Seção',
        'section' => 'header-main',
        'type' => 'text',
    ));

}
add_action('customize_register', 'add_section_header_main');

$active_section = get_theme_mod('active_section') ?? false;
$title = get_theme_mod('title') ?? false;
if ($active_section) {
    echo '<h2 class="section-title" style="color: white">' . $title . '</h2>';
}
