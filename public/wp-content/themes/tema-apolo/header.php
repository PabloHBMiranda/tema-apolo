<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <?php

    $args = [
        'primaria',
        'primaria-light',
        'primaria-escura',
        'secundaria',
        'secundaia-light',
        'secundaria-escura',
        'fonte-escura',
        'fonte-clara',
        'background-color',
    ];
    $options = get_option('theme_mods_tema-apolo');
    echo '<style>';
        echo ":root {";
            foreach ($args as $arg) {
                $value = $options[$arg];
                echo "--" . $arg . ": " . $value . ";";
            }
            echo "--border-radius: 5px";
        echo "}";
    echo '</style>';
    wp_head();
    ?>
</head>
<body <?php body_class() ?>>
<header>
    <?php include 'inc/sections/header/header-bar.php' ?>
    <?php include 'inc/sections/header/header-main.php' ?>
</header>
