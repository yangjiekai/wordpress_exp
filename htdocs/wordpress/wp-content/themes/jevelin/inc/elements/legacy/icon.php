<?php
class vcj_icon extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_icon', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        vc_map( array (
  'name' => 'Icon',
  'base' => 'vcj_icon',
  'description' => 'Simple icon element',
  'category' => 'Jevelin Elements',
  'params' => 
  array (
    0 => 
    array (
      'param_name' => 'icon',
      'heading' => 'Icon',
      'description' => 'Select Icon',
      'value' => 'ti-check',
      'type' => 'iconpicker',
      'class' => '',
      'std' => 'ti-check',
      'group' => 'General',
      'admin_label' => true,
      'settings' => 
      array (
        'emptyIcon' => true,
        'type' => 'jevelin_vc_icons',
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
      'group' => 'General',
      'admin_label' => true,
    ),
    2 => 
    array (
      'param_name' => 'shadow',
      'heading' => 'Shadow',
      'description' => 'Choose shadow',
      'value' => 
      array (
        'None' => 'none',
        'Small' => 'small',
        'Large' => 'large',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'none',
      'group' => 'General',
    ),
    3 => 
    array (
      'param_name' => 'icon_size',
      'heading' => 'Size',
      'description' => 'Enter icon size (with <b>px</b>)',
      'value' => '30px',
      'type' => 'textfield',
      'class' => '',
      'std' => '30px',
      'group' => 'General',
    ),
    4 => 
    array (
      'param_name' => 'icon_color',
      'heading' => 'Color',
      'description' => 'Select icon color or leave blank for default body color',
      'value' => '',
      'type' => 'colorpicker',
      'class' => '',
      'std' => '',
      'group' => 'General',
    ),
    5 => 
    array (
      'param_name' => 'icon_second_color',
      'heading' => 'Second Color',
      'description' => 'Select icon color to create a gradient color (Only for chrome, safari and opera browsers)',
      'value' => '',
      'type' => 'colorpicker',
      'class' => '',
      'std' => '',
      'group' => 'General',
    ),
    6 => 
    array (
      'param_name' => 'icon_hover_color',
      'heading' => 'Hover Color',
      'description' => 'Select hover color',
      'value' => '',
      'type' => 'colorpicker',
      'class' => '',
      'std' => '',
      'group' => 'General',
    ),
    7 => 
    array (
      'param_name' => 'icon_hover_second_color',
      'heading' => 'Second Hover Color',
      'description' => 'Select icon hover color to create a hover gradient color (Only for chrome, safari and opera browsers)',
      'value' => '',
      'type' => 'colorpicker',
      'class' => '',
      'std' => '',
      'group' => 'General',
    ),
    8 => 
    array (
      'param_name' => 'animation',
      'heading' => 'Animation',
      'description' => 'Select button animation',
      'value' => 
      array (
        'None' => 'none',
        'Fade In' => 'fadeIn',
        'Fade In Down' => 'fadeInDown',
        'Fade In Down Big' => 'fadeInDownBig',
        'Fade In Left' => 'fadeInLeft',
        'Fade In Left Big' => 'fadeInLeftBig',
        'Fade In Right' => 'fadeInRight',
        'Fade In Right Big' => 'fadeInRightBig',
        'Fade In Up' => 'fadeInUp',
        'Fade In Up Big' => 'fadeInUpBig',
        'Slide In Down' => 'slideInDown',
        'Slide In Left' => 'slideInLeft',
        'Slide In Right' => 'slideInRight',
        'Slide In Up' => 'slideInUp',
        'Zoom In' => 'zoomIn',
        'Zoom In Down' => 'zoomInDown',
        'Zoom In Left' => 'zoomInLeft',
        'Zoom In Right' => 'zoomInRight',
        'Zoom In Up' => 'zoomInUp',
        'Rotate In' => 'rotateIn',
        'Rotate In Down Left' => 'rotateInDownLeft',
        'Rotate In Down Right' => 'rotateInDownRight',
        'Roate In Up Left' => 'rotateInUpLeft',
        'Roate In Up Right' => 'rotateInUpRight',
        'Bounce In' => 'bounceIn',
        'Bounce In Down' => 'bounceInDown',
        'Bounce In Left' => 'bounceInLeft',
        'Bounce In Right' => 'bounceInRight',
        'Bounce In Up' => 'bounceInUp',
        'Bounce' => 'bounce',
        'Flash' => 'flash',
        'Pulse' => 'pulse',
        'Rubber Band' => 'rubberBand',
        'Shake' => 'shake',
        'Head Shake' => 'headShake',
        'Swing' => 'swing',
        'Tada' => 'tada',
        'Wobble' => 'wobble',
        'Jello' => 'jello',
        'Flip In X' => 'flipInX',
        'Flip In Y' => 'flipInY',
        'Light Speed In' => 'lightSpeedIn',
        'Hinge' => 'hinge',
        'Roll In' => 'rollIn',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'none',
      'group' => 'Show Animation',
    ),
    9 => 
    array (
      'param_name' => 'animation_speed',
      'heading' => 'Animation Speed',
      'description' => 'Choose animation speed (seconds)',
      'value' => 2,
      'type' => 'textfield',
      'class' => '',
      'std' => 2,
      'group' => 'Show Animation',
    ),
    10 => 
    array (
      'param_name' => 'animation_delay',
      'heading' => 'Animation Delay',
      'description' => 'Choose animation delay (seconds',
      'value' => 0,
      'type' => 'textfield',
      'class' => '',
      'std' => 0,
      'group' => 'Show Animation',
    ),
  ),
) );
    }

    public function _html( $atts, $content ) {
        $id_rand = jevelin_rand();
        ob_start();

        $path = trailingslashit( get_template_directory() );
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/icon/views/view.php';
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/icon/static.php';
        if( function_exists( 'jevelin_shortcode_icon_css' ) ) :
            jevelin_shortcode_icon_css( $atts, $id_rand );
        endif;

        return ob_get_clean();
    }
}

new vcj_icon();