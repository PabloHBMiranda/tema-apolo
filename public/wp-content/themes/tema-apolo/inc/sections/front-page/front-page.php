<?php

$class_name = 'template-section';
$id = 'front-page-one';

$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);

?>

<section class="<?= $class_list ?>">
    <div class="container">
        <div class="wrapper-front-page-content">
            <?php
            if (is_active_sidebar('front_home')) {
                dynamic_sidebar('front_home');
            }
            ?>
        </div>
    </div>
</section>
