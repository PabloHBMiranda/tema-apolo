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

if (get_option('apl_admin_gn_horario')) {
    $horario = get_option('apl_admin_gn_horario');
}

if (get_option('apl_admin_gn_telefone_1')) {
    $telefone_1 = get_option('apl_admin_gn_telefone_1');
}


$class_list = implode('-', $class_name);

?>

<section class="<?= $class_list ?>">
    <div class="container">
        <div class="wrapper-footer-main">
            <div class="footer-content footer-left">
                <h3 class="title-item-footer">Veja Mais</h3>
                <div class="wrapper-footer-left">
                    <?php
                    get_template_part('inc/components/menu', null, [
                        'theme_location' => 'footer-main',
                        'depth' => 1
                    ]);
                    ?>
                </div>
            </div>
            <div class="footer-content footer-center">
                <h3 class="title-item-footer">Venha Conhecer</h3>
                <div class="wrapper-footer-center">
                    <div class="content location">
                        <?php
                        include ICONS . 'location' . '.php';
                        echo '<p class="text-content">' . $endereco . '</p>';
                        ?>
                    </div>
                    <div class="content time">
                        <?php
                        include ICONS . 'clock' . '.php';
                        echo '<p class="text-content">' . $horario . '</p>';
                        ?>
                    </div>
                </div>
            </div>
            <div class="footer-content footer-right">
                <h3 class="title-item-footer">Entre em Contato</h3>
                <div class="wrapper-footer-right">
                    <div class="content-phone">
                        <?php
                        include ICONS . 'phone' . '.php';
                        print $telefone_1;
                        ?>
                    </div>
                    <?php
                    get_template_part('inc/components/social_media', null, ['type' => 'footer-main', 'names' => false]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
