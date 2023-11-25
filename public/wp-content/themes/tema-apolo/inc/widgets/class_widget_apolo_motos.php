<?php

function registrar_widget_motos()
{
    register_widget('Class_Widget_Apolo_Motos');
}

add_action('widgets_init', 'registrar_widget_motos');

class Class_Widget_Apolo_Motos extends \WP_Widget
{

    function __construct()
    {
        parent::__construct(
            'motos',
            __('Motos', 'text_domain'),
            array(
                'description' => __('Motos', 'text_domain'),
            )
        );
    }

    public function widget($args, $instance)
    {
        $post_per_page = !empty($instance['widget_number_motos']) ? $instance['widget_number_motos'] : 4;
        $categoreie = !empty($instance['widget_category_motos']) ? $instance['widget_category_motos'] : [];
        $title = !empty($instance['widget_title_motos']) ? $instance['widget_title_motos'] : '';
        $page_link = !empty($instance['widget_page_motos']) ? $instance['widget_page_motos'] : '';
        $target = !empty($instance['widget_target_motos']) ? $instance['widget_target_motos'] : false;


        ?>

        <?php
    }

    public function form($instance)
    {
        $defaults = array(
            'widget_number_motos' => 0,
            'widget_category_motos' => array(),
            'widget_title_motos' => '',
            'widget_page_motos' => '',
            'widget_target_motos' => false,
        );

        $instance = wp_parse_args((array)$instance, $defaults);

        $widget_number_motos = esc_attr($this->get_field_id('widget_number_motos'));
        $widget_category_motos = esc_attr($this->get_field_name('widget_category_motos'));
        $widget_title_motos = esc_attr($this->get_field_id('widget_title_motos'));
        $widget_page_motos = esc_attr($this->get_field_id('widget_page_motos'));
        $widget_target_motos = esc_attr($this->get_field_id('widget_target_motos'));

        $categories_checked = !empty($instance['widget_category_motos']) ? $instance['widget_category_motos'] : [];
        $value_number_motos = !empty($instance['widget_number_motos']) ? $instance['widget_number_motos'] : 0;
        $value_title_motos = !empty($instance['widget_title_motos']) ? $instance['widget_title_motos'] : '';
        $value_page_motos = !empty($instance['widget_page_motos']) ? $instance['widget_page_motos'] : '';
        $value_target_motos = !empty($instance['widget_target_motos']) ? $instance['widget_target_motos'] : false;

        $choices [''] = 'Selecione uma opção';
        if (!empty($pages = new WP_Query(['post_type' => 'page']))) {
            while ($pages->have_posts()) {
                $pages->the_post();
                $choices[$pages->post->post_name] = $pages->post->post_title;
            }
        }

        $categories = $this->getCategoriesFiltered();
        ?>

        <label for="<?= $widget_number_motos ?>"><?php _e('Número de Motos apresentadas:', 'text_domain'); ?></label>
        <input class="widefat" id="<?= $widget_number_motos ?>"
               name="<?= $this->get_field_name('widget_number_motos') ?>" type="number"
               value="<?= $value_number_motos ?>">

        <label for="<?= $widget_title_motos ?>"><?php _e('Título:', 'text_domain'); ?></label>
        <input class="widefat" id="<?= $widget_title_motos ?>"
               name="<?= $this->get_field_name('widget_title_motos') ?>" type="text"
               value="<?= $value_title_motos ?>">

        <label><?php _e('Selecione a página de listagem.', 'text_domain'); ?></label>
        <select class="widefat" id="<?= $widget_page_motos ?>"
                name="<?= $this->get_field_name('widget_page_motos'); ?>">
            <?php foreach ($choices as $key => $choice) {
                echo '<option value="' . $key . '"' . selected($value_page_motos, $key, false) . '>' . $choice . '</option>';
            } ?>
        </select>

        <label for="<?= $widget_category_motos; ?>"><?php _e('Categoria das Motos:', 'text_domain'); ?></label>
        <?php foreach ($categories as $value) { ?>
            <div>
                <input type="checkbox" id="<?= $widget_category_motos . '_' . $value['id']; ?>"
                       name="<?= $widget_category_motos . '[]'; ?>"
                       value="<?= $value['id']; ?>" <?php checked(in_array($value['id'], $categories_checked)); ?>>
                <label for="<?= $widget_category_motos . '_' . $value['id']; ?>"><?= $value['name']; ?></label>
            </div>
        <?php } ?>

        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();

        $instance['widget_number_motos'] = (!empty($new_instance['widget_number_motos']) && is_numeric($new_instance['widget_number_motos'])) ? $new_instance['widget_number_motos'] : 0;
        $instance['widget_category_motos'] = isset($new_instance['widget_category_motos']) ? array_map('intval', $new_instance['widget_category_motos']) : array();
        $instance['widget_title_motos'] = (!empty($new_instance['widget_title_motos'])) ? $new_instance['widget_title_motos'] : '';
        $instance['widget_page_motos'] = (!empty($new_instance['widget_page_motos'])) ? $new_instance['widget_page_motos'] : '';

        return $instance;
    }

    private function getCategoriesFiltered()
    {
        return array_map(function ($category) {
            return [
                'id' => $category->term_id,
                'name' => $category->name,
            ];
        }, get_terms(['taxonomy' => 'category', 'hide_empty' => false]));
    }
}
