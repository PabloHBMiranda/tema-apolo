<?php

function registrar_widget_motos(){
    register_widget('Class_Widget_Apolo_Motos');
}

add_action('widgets_init', 'registrar_widget_motos');

class Class_Widget_Apolo_Motos extends \WP_Widget{

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
        $widget_number_motos = 'widget_number_motos';
        $widget_category_motos = 'widget_category_motos';

        $categories = array_map(function($category){
            return [
                'id' => $category->term_id,
                'name' => $category->name,
            ];
        }, get_terms(['taxonomy' => 'category', 'hide_empty' => false]));
        ?>

        <p>
        <label for="<?= $this->get_field_id($widget_category_motos); ?>"><?php _e('Categoria das Motos:', 'text_domain'); ?></label>
        <form>
            <?php foreach ($categories as $value) { ?>
                <div>
                    <input type="checkbox" name="<?= $value['id'] ?>" value="<?= $value['id'] ?>">
                    <label><?= $value['name'] ?></label>
                </div>
            <?php } ?>
        </form>
        </p>

        <?php
    }

    public function update($new_instance, $old_instance){
        echo "<pre>";
        print_r($this->widget_motos);
        echo "<pre>";
    }
}
