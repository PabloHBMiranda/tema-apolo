<?php

$page = $args['page'] ?? '';

if(!empty($page)) {
    $options =[
        [
            'name' => 'Informações Gerais',
            'page_name' => 'apl_general_information'
        ],
        [
            'name' => 'Redes Sociais',
            'page_name' => 'apl_social_midias'
        ]
    ];

    echo '<div class="nav-tab-wrapper">';
    foreach ($options as $option) {
        $active = $page === $option['page_name'] ? 'nav-tab-active' : '';
        echo '<a href="admin.php?page=' . $option['page_name'] . '" class="nav-tab ' . $active . '" aria-current="page">' . $option['name'] . '</a>';
    }
    echo '</div>';
}

?>
