<?php

$class_name = 'template-section';
$id = 'header-bar';

$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);

?>

<section class="<?= $class_list ?>">
    <div class="container">
        <div class="wrapper-header-bar">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            get_template_part('inc/components/menu', null, [
                'theme_location' => 'header-menu',
                'depth' => 0
            ]);
            get_template_part('inc/components/social_media');
            ?>
        </div>
    </div>
</section>



