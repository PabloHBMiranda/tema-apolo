<?php


$theme_location = $args['theme_location'] ?? '';
$depth = $args['depth'] ?? 1;

$container = 'container-' . $theme_location;
$container_class = 'container-class ' . $theme_location;
$menu_class = 'menu-class-' . $theme_location;




?>

<div class="template-component-menu">
    <div class="wrapper-menu">
        <?php
            wp_nav_menu(
                [
                    'theme_location' => 'header-menu',
                    'container' => $container,
                    'container_class' => $container_class,
                    'menu_class' => $menu_class,
                    'depth' => $depth,
                ]
            );
        ?>
    </div>
</div>
