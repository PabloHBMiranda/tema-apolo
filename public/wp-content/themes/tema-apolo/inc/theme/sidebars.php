<?php

function registrar_sidebar_personalizada() {
    register_sidebar(array(
        'name' => 'Minha Sidebar Personalizada', // Nome da sidebar
        'id' => 'minha-sidebar', // ID único para a sidebar
        'description' => 'Esta é a minha sidebar personalizada.', // Descrição da sidebar
        'before_widget' => '<div class="widget">', // HTML antes de cada widget
        'after_widget' => '</div>', // HTML depois de cada widget
        'before_title' => '<h3 class="widget-title">', // HTML antes do título do widget
        'after_title' => '</h3>', // HTML depois do título do widget
    ));
}

add_action('widgets_init', 'registrar_sidebar_personalizada');
