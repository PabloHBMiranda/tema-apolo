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
        $select_menu = !empty($instance[$card_menu_option]) ? $instance[$card_menu_option] : '';
        $text_title = !empty($instance[$card_title]) ? $instance[$card_title] : '';

        echo $args['before_widget'];

        if(empty($select_menu)){
            return;
        }

        ?>

        <div class="apolo-widget-card">
            <div class="container">
                <div class="wrapper-card">
                    <h2 class="text-title"><?= $text_title ?></h2>
                    <div class="wrapper-card-content">
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
        </div>

        <?php
        echo $args['after_widget'];
    }

    public function form($instance) {
        $card_menu_option = 'card_menu_option';
        $card_title = 'card_title';
        $background_image = 'background_image';
        $selected_option = !empty($instance[$card_menu_option]) ? $instance[$card_menu_option] : '';
        $card_text = !empty($instance[$card_title]) ? $instance[$card_title] : '';

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

        $instance = array();
        $instance[$card_menu_option] = (!empty($new_instance[$card_menu_option])) ? sanitize_key($new_instance[$card_menu_option]) : '';
        $instance[$card_title] = (!empty($new_instance[$card_title])) ? sanitize_key($new_instance[$card_title]) : '';

        return $instance;
    }


}
