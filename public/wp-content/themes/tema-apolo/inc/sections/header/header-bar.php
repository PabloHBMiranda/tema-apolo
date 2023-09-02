<?php

$class_name = 'template-section';
$id = 'header-bar';

$social_midias = [];

if (get_option('apl_admin_sc_facebook')) {
    $social_midias['facebook'] = [
        'name' => 'Facebook',
        'url' => get_option('apl_admin_sc_facebook')
    ];
}

if (get_option('apl_admin_sc_instagram')) {
    $social_midias['instagram'] = [
        'name' => 'Instagram',
        'url' => get_option('apl_admin_sc_instagram')
    ];
}

if (get_option('apl_admin_sc_whatsapp')) {
    $social_midias['whatsapp'] = [
        'name' => 'Whatsapp',
        'url' => get_option('apl_admin_sc_whatsapp')
    ];
}


$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);

?>

<section class="<?= $class_list ?>">
    <div class="container">
        <?php if (!empty($social_midias)) { ?>
            <div class="template-part-social-media">
                <div class="wrapper-social-icons">
                    <?php foreach ($social_midias as $social) { ?>
                        <div class="content-social-media">
                            <a href="<?= $social['url'] ?>" target="_blank" class="item-social-media">
                                <span class="icon-social-media">
                                    <?= include ICONS . 'facebook.php'; ?>
                                </span>
                                <p class="text-social-media"> <?= $social['name'] ?></p>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>



