<?php
/*
Element: Empry Space (responsive)
*/

class vcj_list extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_list', array( $this, '_html' ) );
    }


    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }

        vc_map(
            array(
                'name' => __('List', 'jevelin'),
                'base' => 'vcj_list',
                'description' => __('Simple list element', 'jevelin'),
                'category' => __('Jevelin Elements', 'jevelin'),
                'icon' => get_template_directory_uri().'/img/VC_ES_icon.svg',
                'params' => array(

                    array(
                        'param_name' => 'list_content',
                        'heading' => __( 'content', 'jevelin' ),
                        'description' => __( 'Enter list content', 'jevelin' ),
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => '',
                        'std' => 'I am list',
                        'admin_label' => true,
                    ),

                    array (
                        'param_name' => 'icon',
                        'heading' => 'Icon',
                        'description' => 'Choose icon',
                        'value' => 'icon-arrow-right-circle',
                        'type' => 'iconpicker',
                        'class' => '',
                        'std' => 'icon-arrow-right-circle',
                        'group' => '',
                        'settings' =>
                        array (
                            'emptyIcon' => true,
                            'type' => 'jevelin_vc_icons',
                        ),
                    ),

                    array (
                        'param_name' => 'style',
                        'heading' => 'Style',
                        'description' => 'Choose main style',
                        'value' =>
                        array (
                            'Style 1' => 'style1',
                            'Style 2' => 'style2',
                            'Style 3' => 'style3',
                            'Style 4 (inline)' => 'style4',
                        ),
                        'type' => 'dropdown',
                        'class' => '',
                        'std' => 'style1',
                        'group' => '',
                    ),

                    array (
                        'param_name' => 'text_color',
                        'heading' => 'Text Color',
                        'description' => 'Select text color',
                        'value' => '',
                        'type' => 'colorpicker',
                        'class' => '',
                        'std' => '',
                        'group' => '',
                    ),

                    array (
                        'param_name' => 'icon_color',
                        'heading' => 'Icon Color',
                        'description' => 'Select icon color',
                        'value' => '',
                        'type' => 'colorpicker',
                        'class' => '',
                        'std' => '',
                        'group' => '',
                    ),

                ),
            )
        );

    }


    public function _html( $atts ) {
        // Params extraction
        extract( shortcode_atts( array(
            'list_content' => 'I am list',
            'icon' => 'icon-arrow-right-circle',
            'style' => 'style1',
            'text_color' => '',
            'icon_color' => ''
        ), $atts ) );

        // HTML
        $id = jevelin_rand();
        ob_start(); ?>

            <?php if( $text_color || $icon_color ) : ?>
                <style media="screen">
                    <?php if( $text_color ) : ?>
        				#list-<?php echo esc_attr( $id ); ?>{
        					color: <?php echo esc_attr( $text_color ); ?>!important;
        				}
        			<?php endif; ?>

        			<?php if( $icon_color ) : ?>
        				#list-<?php echo esc_attr( $id ); ?> .sh-list-icon i {
        					color: <?php echo esc_attr( $icon_color ); ?>!important;
        				}
        			<?php endif; ?>
                </style>
            <?php endif; ?>

            <ul class="sh-list sh-list-vc sh-list-<?php echo esc_attr( $style ); ?>" id="list-<?php echo esc_attr( $id ); ?>">
            	<?php if( $list_content ) : ?>
            		<li class="sh-list-item">
            			<span class="sh-list-icon">
            				<i class="<?php echo esc_attr( $icon ); ?>"></i>
            			</span>
            			<?php echo esc_attr( $list_content ); ?>
            		</li>
            	<?php endif; ?>
            </ul>

        <?php return ob_get_clean();
    }

}
new vcj_list();
