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

if (get_option('apl_admin_gn_telefone_2')) {
    $telefone_2 = get_option('apl_admin_gn_telefone_2');
}

if (get_option('apl_admin_gn_email_1')) {
    $email_1 = get_option('apl_admin_gn_email_1');
}

if (get_option('apl_admin_gn_email_2')) {
    $email_2 = get_option('apl_admin_gn_email_2');
}

$location_time = [];

if (!empty($endereco)) {
    $location_time['location'] = [
        'icon' => 'location.php',
        'text' => $endereco
    ];
}

if (!empty($horario)) {
    $location_time['time'] = [
        'icon' => 'clock.php',
        'text' => $horario
    ];
}

$contacts = [];

if (!empty($telefone_1)) {
    $contacts['phone_1'] = [
        'icon' => 'phone.php',
        'text' => $telefone_1
    ];
}

if (!empty($telefone_2)) {
    $contacts['phone_2'] = [
        'icon' => 'phone.php',
        'text' => $telefone_2
    ];
}

if (!empty($email_1)) {
    $contacts['email_1'] = [
        'icon' => 'email.php',
        'text' => $email_1
    ];
}

if (!empty($email_2)) {
    $contacts['email_2'] = [
        'icon' => 'email.php',
        'text' => $email_2
    ];
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
                    <div class="wrapper-content-infos">
                        <?php
                        if (!empty($location_time)) {
                            foreach ($location_time as $key => $item) { ?>
                                <div class="content <?= $key ?>">
                                    <?php include ICONS . $item['icon'] ?>
                                    <p class="text-content"><?= $item['text'] ?></p>
                                </div>
                            <?php }
                        } ?>
                    </div>
                </div>
            </div>
            <div class="footer-content footer-right">
                <h3 class="title-item-footer">Entre em Contato</h3>
                <div class="wrapper-footer-right">
                    <div class="wrapper-content-infos">
                        <?php if (!empty($contacts)) {
                        foreach ($contacts as $key => $item) { ?>
                        <div class="content <?= $key ?>">
                            <?php include ICONS . $item['icon'] ?>
                            <p class="text-content"><?= $item['text'] ?></p>
                        </div>
                        <?php }
                    } ?>
                    </div>
                    <?php
                    get_template_part('inc/components/social_media', null, ['type' => 'footer-main', 'names' => false]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
