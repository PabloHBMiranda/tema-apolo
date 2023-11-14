<?php

function change_labels_post_type()
{
    global $wp_post_types;

    $wp_post_types['post']->menu_icon = 'dashicons-sos';
    $labelPost = &$wp_post_types['post']->labels;
    $labelPost->name = 'Motos';
    $labelPost->singular_name = 'Moto';
    $labelPost->menu_name = 'Motos';
    $labelPost->add_new = 'Adicionar Nova';
    $labelPost->add_new_item = 'Adicionar Nova Moto';
    $labelPost->edit_item = 'Editar Moto';
    $labelPost->new_item = 'Nova Moto';
    $labelPost->view_item = 'Ver Moto';
    $labelPost->search_items = 'Buscar Motos';
    $labelPost->not_found = 'Nenhuma Moto encontrada';
    $labelPost->not_found_in_trash = 'Nenhuma Moto encontrada na lixeira';
    $labelPost->all_items = 'Todas as Motos';
}

add_action('init', 'change_labels_post_type');
