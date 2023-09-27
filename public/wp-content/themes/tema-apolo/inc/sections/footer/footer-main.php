<?php

$class_name = 'template-section';
$id = 'footer-main';

$class_name = [
    $class_name,
    $id
];

if (get_option('apl_admin_gn_endereco')) {
    $endereco = get_option('apl_admin_gn_endereco');
}

if (get_option('apl_admin_gn_telefone_1')) {
    $telefone_1 = get_option('apl_admin_gn_telefone_1');
}


$class_list = implode('-', $class_name);

?>

<div class="<?= $class_list ?>">
    <div class="container">
        <div class="wrapper-footer-main">
            <div class="footer-left">
                <h3 class="title-item-footer">Veja mais</h3>
                <div class="wrapper-footer-left">
                    <?php
                    get_template_part('inc/components/menu', null, [
                        'theme_location' => 'footer-main',
                        'depth' => 1
                    ]);
                    ?>
                </div>
            </div>
            <div class="footer-center"></div>
            <div class="footer-right"></div>
        </div>
    </div>
</div>
