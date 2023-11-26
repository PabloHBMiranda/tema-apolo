<?php

$class_name = 'template-section';
$id = 'header-main';

$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);
?>

<section class="<?= $class_list ?>">
    <div class="container">
        <?php
        if (is_active_sidebar('header_main')) : ?>
            <div id="header-main-widgets" class="widget-area">
                <?php dynamic_sidebar('header_main'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
