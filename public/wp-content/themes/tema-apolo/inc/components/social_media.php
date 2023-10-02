<?php

$type = $args['type'] ?? 'default';
$names = $args['names'] ?? true;
$social_midias = [];

if (get_option('apl_admin_sc_facebook')) {
    $social_midias['facebook'] = [
        'name' => 'facebook',
        'url' => get_option('apl_admin_sc_facebook')
    ];
}

if (get_option('apl_admin_sc_instagram')) {
    $social_midias['instagram'] = [
        'name' => 'instagram',
        'url' => get_option('apl_admin_sc_instagram')
    ];
}

if (get_option('apl_admin_sc_whatsapp')) {
    $social_midias['whatsapp'] = [
        'name' => 'whatsapp',
        'url' => get_option('apl_admin_sc_whatsapp')
    ];
}

$class_name = [
    'template-component-social-media',
    $type
];

$class_list = implode(' ', $class_name);

?>

<?php if (!empty($social_midias)) { ?>
    <div class="<?= $class_list ?>">
        <div class="wrapper-social-icons">
            <?php foreach ($social_midias as $social) { ?>
                <div class="content-social-media">
                    <a href="<?= $social['url'] ?>" target="_blank" class="item-social-media">
                                <span class="icon-social-media">
                                    <?php include ICONS . $social['name'] . '.php'; ?>
                                </span>
                        <?php if ($names) { ?>
                            <p class="text-social-media"> <?= ucfirst($social['name']) ?></p>
                        <?php } ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
<?php } ?>
