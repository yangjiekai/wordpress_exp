<?php
class vcj_icon_group extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_icon_group', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        vc_map( array (
  'name' => 'Icon Group',
  'base' => 'vcj_icon_group',
  'description' => 'Add multiple icons',
  'category' => 'Jevelin Elements',
  'params' => 
  array (
    0 => 
    array (
      'param_name' => 'icons',
      'heading' => 'Icons',
      'description' => 'Here you can add, remove and edit your icons',
      'value' => '',
      'type' => 'param_group',
      'class' => '',
      'std' => '',
      'group' => '',
      'params' => 
      array (
        0 => 
        array (
          'type' => 'iconpicker',
          'heading' => 'Icon',
          'description' => 'Select Icon',
          'param_name' => 'icon',
          'value' => 'ti-check',
          'settings' => 
          array (
            'emptyIcon' => true,
            'type' => 'jevelin_vc_icons',
          ),
        ),
        1 => 
        array (
          'type' => 'textfield',
          'heading' => 'Link',
          'description' => 'Enter icon link',
          'param_name' => 'link',
          'value' => '',
        ),
      ),
    ),
    1 => 
    array (
      'param_name' => 'alignment',
      'heading' => 'Alignment',
      'description' => 'Choose alignment',
      'value' => 
      array (
        'Center' => 'center',
        'Left' => 'left',
        'Right' => 'right',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'center',
      'group' => '',
      'admin_label' => true,
    ),
    2 => 
    array (
      'param_name' => 'style',
      'heading' => 'Style',
      'description' => 'Choose icon style',
      'value' => 
      array (
        'Style 1' => 'style1',
        'Style 2' => 'style2',
        'Style 3' => 'style3',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'style1',
      'group' => '',
    ),
    3 => 
    array (
      'param_name' => 'icon_color',
      'heading' => 'Color',
      'description' => 'Select icon color or leave blank for default body color',
      'value' => '',
      'type' => 'colorpicker',
      'class' => '',
      'std' => '',
      'group' => '',
    ),
  ),
) );
    }

    public function _html( $atts, $content ) {
        $id_rand = jevelin_rand();
        ob_start();

        $path = trailingslashit( get_template_directory() );
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/icon-group/views/view.php';
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/icon-group/static.php';
        if( function_exists( 'jevelin_shortcode_icon_group_css' ) ) :
            jevelin_shortcode_icon_group_css( $atts, $id_rand );
        endif;

        return ob_get_clean();
    }
}

new vcj_icon_group();