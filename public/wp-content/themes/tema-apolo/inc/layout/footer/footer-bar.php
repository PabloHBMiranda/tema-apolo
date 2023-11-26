<?php

$class_name = 'template-section';
$id = 'footer-bar';

$class_name = [
    $class_name,
    $id
];

if (get_option('apl_admin_gn_cnpj')) {
    $cnpj́ = get_option('apl_admin_gn_cnpj');
}

$class_list = implode('-', $class_name);

?>


<section class="<?= $class_list ?>">
    <div class="container">
        <div class="wrapper-footer-bar">
            <p class="copyrigth"><?= esc_attr__( date( 'Y' ) . " © " . get_bloginfo( 'name' ) . ". Todos os direitos reservados." ); ?></p>
            <p class="cnpj">CNPJ: <?= $cnpj́ ?></p>
        </div>
    </div>
</section>
