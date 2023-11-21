<?php

function registrar_widget_motos(){
    register_widget('Class_Widget_Apolo_Motos');
}

add_action('widgets_init', 'registrar_widget_motos');

class Class_Widget_Apolo_Motos extends \WP_Widget{

    private $widget_motos = ['widget_number_motos' => 0];

    function __construct(){
        parent::__construct(
            'motos',
            __('Motos', 'text_domain'),
            array(
                'description' => __('Motos', 'text_domain'),
            )
        );
    }

    public function widget($args, $instance){
        echo "<pre>";
        print_r($this->widget_motos);
        echo "<pre>";
    }

    public function form($instance){
        $categories = get_categories();
        echo "<pre>";
        print_r($categories);
        echo "<pre>";
        get_template_part('inc/components/multiple-checkbox', null, [
            'title' => 'teste de envio',
        ]);
    }

    public function update($new_instance, $old_instance){
        echo "<pre>";
        print_r($this->widget_motos);
        echo "<pre>";
    }

    private function getCategory(){
        
    }
}