<?php

$class_name = 'template';
$id = 'front-page-widgets';

$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);

get_header();
?>

<main>
    <div class="<?= $class_list ?>">
        <?php include 'inc/layout/front-page/front-page.php' ?>
    </div>
</main>

<?php
get_footer();
