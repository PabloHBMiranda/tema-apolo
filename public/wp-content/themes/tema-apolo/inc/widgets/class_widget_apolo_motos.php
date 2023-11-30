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
        $categories = !empty($instance['widget_category_motos']) ? $instance['widget_category_motos'] : [];
        $title = !empty($instance['widget_title_motos']) ? $instance['widget_title_motos'] : 'Escolha sua Moto';
        $page_link = !empty($instance['widget_page_motos']) ? $instance['widget_page_motos'] : '';
        $text_link = !empty($instance['widget_textlink_motos']) ? $instance['widget_textlink_motos'] : 'Ver todas';
        $target = $instance['widget_target_motos'] ?? false;

        $post_args = [
            'post_type' => 'post',
            'posts_per_page' => $post_per_page,
        ];

        if(!empty($categories)){
            $post_args['tax_query'] = [
                [
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $categories,
                ]
            ];
        }

        $posts = new WP_Query($post_args);

        echo $args['before_widget'];
        ?>
        <div class="apolo-widget-motos">
                <div class="header-wrapper">
                    <?= !empty($title) ? '<h2 class="title">'. $title . '</h2>' : ''?>
                    <?php if(!empty($text_link) && !empty($page_link)){ ?>
                        <div class="page-link-redirect">
                            <a href="<?= $page_link ?>" target=" <?= $target ? '_blank' : '_self' ?>"><?= $text_link ?></a></div>
                    <?php } ?>
                </div>
                <div class="wrapper-moto">
                    <?php if ($posts->have_posts()) { ?>
                        <?php while ($posts->have_posts()) {
                            $posts->the_post(); ?>
                            <div class="item-content">
                                <div class="wrapper-image">
                                    <a href="<?= get_permalink() ?>">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'medium') ?>
                                    </a>
                                </div>
                                <div class="wrapper-infos">
                                    <h3><?= get_the_title() ?></h3>
                                    <a href="<?= get_the_permalink() ?>">
                                        <p class="moto-link-redirect">Saiba Mais</p>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $defaults = [
            'widget_number_motos' => 0,
            'widget_category_motos' => [],
            'widget_title_motos' => '',
            'widget_page_motos' => '',
            'widget_textlink_motos' => '',
            'widget_target_motos' => false,
        ];

        $instance = wp_parse_args((array)$instance, $defaults);

        $widget_number_motos = esc_attr($this->get_field_id('widget_number_motos'));
        $widget_category_motos = esc_attr($this->get_field_name('widget_category_motos'));
        $widget_title_motos = esc_attr($this->get_field_id('widget_title_motos'));
        $widget_page_motos = esc_attr($this->get_field_id('widget_page_motos'));
        $widget_textlink_motos = esc_attr($this->get_field_id('widget_textlink_motos'));
        $widget_target_motos = esc_attr($this->get_field_id('widget_target_motos'));

        $categories_checked = !empty($instance['widget_category_motos']) ? $instance['widget_category_motos'] : [];
        $value_number_motos = !empty($instance['widget_number_motos']) ? $instance['widget_number_motos'] : 0;
        $value_title_motos = !empty($instance['widget_title_motos']) ? $instance['widget_title_motos'] : '';
        $value_page_motos = !empty($instance['widget_page_motos']) ? $instance['widget_page_motos'] : '';
        $value_textlink_motos = !empty($instance['widget_textlink_motos']) ? $instance['widget_textlink_motos'] : '';
        $value_target_motos = (bool)$instance['widget_target_motos'] ?? false;

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

        <label for="<?= $widget_title_motos ?>"><?php _e('Título da seção:', 'text_domain'); ?></label>
        <input class="widefat" id="<?= $widget_title_motos ?>"
               name="<?= $this->get_field_name('widget_title_motos') ?>" type="text"
               value="<?= $value_title_motos ?>">

        <div style="margin: 30px 0">
            <label><?php _e('Selecione a página de listagem.', 'text_domain'); ?></label>
            <select class="widefat" id="<?= $widget_page_motos ?>"
                    name="<?= $this->get_field_name('widget_page_motos'); ?>">
                <?php foreach ($choices as $key => $choice) {
                    echo '<option value="' . $key . '"' . selected($value_page_motos, $key, false) . '>' . $choice . '</option>';
                } ?>
            </select>

            <label for="<?= $widget_textlink_motos ?>"><?php _e('Título do link:', 'text_domain'); ?></label>
            <input class="widefat" id="<?= $widget_textlink_motos ?>"
                   name="<?= $this->get_field_name('widget_textlink_motos') ?>" type="text"
                   value="<?= $value_textlink_motos ?>">
            <input class="widefat" id="<?= $widget_target_motos ?>"
                   name="<?= $this->get_field_name('widget_target_motos') ?>" type="checkbox"
                   <?php checked(true, $value_target_motos) ?>
                   value="<?= true ?>">
            <label for="<?= $widget_target_motos ?>"><?php _e('Abrir em uma nova aba?', 'text_domain'); ?></label>
        </div>

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
        $instance = [];

        $instance['widget_number_motos'] = (!empty($new_instance['widget_number_motos']) && is_numeric($new_instance['widget_number_motos'])) ? $new_instance['widget_number_motos'] : 0;
        $instance['widget_category_motos'] = isset($new_instance['widget_category_motos']) ? array_map('intval', $new_instance['widget_category_motos']) : [];
        $instance['widget_title_motos'] = (!empty($new_instance['widget_title_motos'])) ? $new_instance['widget_title_motos'] : '';
        $instance['widget_page_motos'] = (!empty($new_instance['widget_page_motos'])) ? $new_instance['widget_page_motos'] : '';
        $instance['widget_textlink_motos'] = (!empty($new_instance['widget_page_motos'])) ? $new_instance['widget_textlink_motos'] : '';
        $instance['widget_target_motos'] = $new_instance['widget_target_motos'] ?? false;

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
