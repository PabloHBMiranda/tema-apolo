<?php

function registrar_widget_motos() {
    register_widget('Class_Widget_Apolo_Motos');
}

add_action('widgets_init', 'registrar_widget_motos');

class Class_Widget_Apolo_Motos extends \WP_Widget {

    function __construct() {
        parent::__construct(
            'motos',
            __('Motos', 'text_domain'),
            array(
                'description' => __('Motos', 'text_domain'),
            )
        );
    }

    public function widget($args, $instance) {
        echo "<pre>";
        print_r($instance);
        echo "</pre>";
    }

    public function form($instance) {
        $defaults = array(
            'widget_number_motos' => '',
            'widget_category_motos' => array(),
        );

        $instance = wp_parse_args((array) $instance, $defaults);

        $widget_number_motos = esc_attr($this->get_field_id('widget_number_motos'));
        $widget_category_motos = esc_attr($this->get_field_name('widget_category_motos'));

        $categories_checked = !empty($instance['widget_category_motos']) ? $instance['widget_category_motos'] : [];

        $categories = $this->getCategoriesFiltered();
        ?>

        <p>
            <label for="<?= $widget_category_motos; ?>"><?php _e('Categoria das Motos:', 'text_domain'); ?></label>
            <?php foreach ($categories as $value) { ?>
                <div>
                    <input type="checkbox" id="<?= $widget_category_motos . '_' . $value['id']; ?>" name="<?= $widget_category_motos . '[]'; ?>" value="<?= $value['id']; ?>" <?php checked(in_array($value['id'], $categories_checked)); ?>>
                    <label for="<?= $widget_category_motos . '_' . $value['id']; ?>"><?= $value['name']; ?></label>
                </div>
            <?php } ?>
        </p>

        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['widget_number_motos'] = strip_tags($new_instance['widget_number_motos']);
        $instance['widget_category_motos'] = isset($new_instance['widget_category_motos']) ? array_map('intval', $new_instance['widget_category_motos']) : array();

        return $instance;
    }

    private function getCategoriesFiltered() {
        $categories = array_map(function($category) {
            return [
                'id' => $category->term_id,
                'name' => $category->name,
            ];
        }, get_terms(['taxonomy' => 'category', 'hide_empty' => false]));

        return $categories;
    }
}
