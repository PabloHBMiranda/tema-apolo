<?php

//Theme
require_once __DIR__ . "/theme/scripts.php";
require_once __DIR__ . "/theme/settings.php";
require_once __DIR__ . "/theme/menus.php";
require_once __DIR__ . "/theme/posttypes.php";
require_once __DIR__ . "/theme/widget_register.php";

//Widgets

//Customizer
require_once __DIR__ . '/customizer/custom_configs.php';

//Theme Options
require_once __DIR__ . "/theme_options/index.php";

//ACF Fields
require_once __DIR__ . "/acf_groups.php";


$widgets = [
    'cards.php',
];

foreach ($widgets as $widget) {
    require_once __DIR__ . "/widgets/class_widget_apolo_" . $widget;
}
