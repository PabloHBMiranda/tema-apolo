<?php


function registrar_widget_cards(){
    register_widget('Class_Widget_Apolo_Cards');
}

add_action('widgets_init', 'registrar_widget_cards');


class Class_Widget_Apolo_Cards extends \WP_Widget{

    function __construct() {
        parent::__construct(
            'cards',
            __('Cards', 'text_domain'),
            array(
                'description' => __('Cards de informação da loja', 'text_domain'),
            )
        );
    }

    public function widget($args, $instance) {
        $card_menu_option = 'card_menu_option';
        $card_title = 'card_title';
        $card_number = 'card_number';
        $card_max_width = 'max_width';

        $select_menu = !empty($instance[$card_menu_option]) ? $instance[$card_menu_option] : '';
        $text_title = !empty($instance[$card_title]) ? $instance[$card_title] : '';
        $number_of_cards = !empty($instance[$card_number]) ? $instance[$card_number] : '2';
        $max_width = !empty($instance[$card_max_width]) ? $instance[$card_max_width] : '';

        if(empty($select_menu)){
            return;
        }

        if(empty($number_of_cards) && !is_numeric($number_of_cards)){
            $number_of_cards = 2;
        }

        if(!is_numeric($number_of_cards)){
            $max_width = '';
        }

        echo $args['before_widget'];
        ?>
        <div class="apolo-widget-card">
                <div class="wrapper-card">
                    <?= !empty($text_title) ? '<h2 class="text-title">'. $text_title . '</h2>' : ''?>
                    <div class="wrapper-card-content" style="--columns: <?= $number_of_cards ?>;<?= !empty($max_width) ? 'max-width: ' . $max_width . 'px' : '' ?>">
                        <?php
                        if(!empty($select_menu)){
                            wp_nav_menu(array(
                                'menu' => $select_menu,
                                'container' => 'card-navigator',
                                'container_class' => 'card-nav-menu',
                                'menu_class' => 'card-menu-list',
                                'depth' => 1,
                            ));
                        }
                        ?>
                </div>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance) {
        $card_menu_option = 'card_menu_option';
        $card_title = 'card_title';
        $card_number = 'card_number';
        $card_max_width = 'max_width';

        $number_of_cards = !empty($instance[$card_number]) ? $instance[$card_number] : '2';
        $selected_option = !empty($instance[$card_menu_option]) ? $instance[$card_menu_option] : '';
        $card_text = !empty($instance[$card_title]) ? $instance[$card_title] : '';
        $max_width = !empty($instance[$card_max_width]) ? $instance[$card_max_width] : '';

        $args = ['taxonomy' => 'nav_menu',
            'orderby' => 'id',
            'order' => 'ASC',
        ];

        $choices [''] = 'Selecione uma opção';
        if(! empty( $menus = get_terms( $args ) ) ){
            foreach ($menus as $menu){
                $choices[$menu->term_id] = $menu->name;
            }
        }

        ?>
        <p>
            <label for="<?php echo $this->get_field_id($card_title); ?>"><?php _e('Título:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id($card_title); ?>" name="<?php echo $this->get_field_name($card_title); ?>" type="text" value="<?= $card_text ?>">

            <label for="<?php echo $this->get_field_id($card_number); ?>"><?php _e('Número de cards (por linha):', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id($card_number); ?>" name="<?php echo $this->get_field_name($card_number); ?>" type="number" value="<?= $number_of_cards ?>">

            <label for="<?php echo $this->get_field_id($card_max_width); ?>"><?php _e('Tamanho máximo do container:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id($card_max_width); ?>" name="<?php echo $this->get_field_name($card_max_width); ?>" type="number" value="<?= $max_width ?>">

            <label><?php _e('Selecione o menu a ser exibido.', 'text_domain'); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id($card_menu_option); ?>" name="<?php echo $this->get_field_name($card_menu_option); ?>">
                <?php foreach ($choices as  $key => $choice){
                    echo '<option value="' . $key .'"' . selected($selected_option, $key, false) . '>' . $choice . '</option>';
                } ?>
            </select>
        </p>
        <?php
    }

    // Método para atualizar as configurações do widget
    public function update($new_instance, $old_instance) {
        $card_menu_option = 'card_menu_option';
        $card_title = 'card_title';
        $card_number = 'card_number';
        $card_max_width = 'max_width';

        $instance = array();
        $instance[$card_menu_option] = (!empty($new_instance[$card_menu_option])) ? sanitize_key($new_instance[$card_menu_option]) : '';
        $instance[$card_title] = (!empty($new_instance[$card_title])) ? sanitize_key($new_instance[$card_title]) : '';
        $instance[$card_number] = (!empty($new_instance[$card_number])) ? sanitize_key($new_instance[$card_number]) : '2';
        $instance[$card_max_width] = (!empty($new_instance[$card_max_width])) ? sanitize_key($new_instance[$card_max_width]) : '';

        return $instance;
    }

}
