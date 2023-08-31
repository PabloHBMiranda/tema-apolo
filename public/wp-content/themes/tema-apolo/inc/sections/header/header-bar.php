<?php

$class_name = 'template-section';
$id = 'header-bar';

$social_midias = [];

if(get_option('apl_admin_sc_facebook')){
    $social_midias['facebook'] =[
        'name' => 'Facebook',
        'icon' => '',
        'url' => get_option('apl_admin_sc_facebook')
    ];
}

if(get_option('apl_admin_sc_instagram')){
    $social_midias['facebook'] =[
        'name' => 'Instagram',
        'icon' => '',
        'url' => get_option('apl_admin_sc_instagram')
    ];
}

if(get_option('apl_admin_sc_whatsapp')){
    $social_midias['facebook'] =[
        'name' => 'Instagram',
        'icon' => '',
        'url' => get_option('apl_admin_sc_whatsapp')
    ];
}


$class_name = [
    $class_name,
    $id
];

$class_list = implode('-', $class_name);
?>

<section class="<?=  $class_list ?>">
    <div class="container">
        
    </div>
</section>



