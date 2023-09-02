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
        <?php get_template_part('inc/components/social_media');?>
    </div>
</section>



