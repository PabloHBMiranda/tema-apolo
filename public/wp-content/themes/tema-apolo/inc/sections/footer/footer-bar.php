<?php

if (get_option('apl_admin_gn_cnpj')) {
    $cnpj́ = get_option('apl_admin_gn_cnpj');
}

?>


<section class="template-part-footer-bar">
    <div class="container">
        <div class="wrapper-footer-bar">
            <p class="copyrigth"><?= esc_attr__( date( 'Y' ) . " © " . get_bloginfo( 'name' ) . ". Todos os direitos reservados." ); ?></p>
            <p class="cnpj">CNPJ: <?= $cnpj́ ?></p>
        </div>
    </div>
</section>
