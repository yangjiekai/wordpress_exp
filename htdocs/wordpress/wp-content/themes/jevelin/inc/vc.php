<?php
/**
 * Add VC Support
 */
add_action( 'vc_before_init', 'jevelin_vc_support' );
function jevelin_vc_support() {
    vc_set_as_theme();
}


/**
 * Custom Element Dir
 */
if( function_exists( 'vc_set_shortcodes_templates_dir' ) ) :
    $dir = get_template_directory() . '/inc/elements/standard';
    vc_set_shortcodes_templates_dir( $dir );
endif;


/**
 * VC Option Picker
 */
function jevelin_vc_option_picker( $atts = '', $items = '' ) {

    if( is_array( $items ) ) :
        $return = array();
        foreach( $items as $item ) :
            if( isset( $item['name'] ) && $item['name'] ) :

                if( isset( $atts[$item['name']] ) && $atts[$item['name']] ) :
                    $return[$item['name']] = $atts[$item['name']];
                elseif( isset( $item['if'] ) && $item['if'] && isset( $item['default'] ) ) :
                    $return[$item['name']] = $item['default'];
                else :
                    $return[$item['name']] = '';
                endif;

            endif;
        endforeach;
        unset( $atts );
        unset( $items );
        return $return;
    endif;

}


/**
 * Load VC Elements
 */
if( defined( 'WPB_VC_VERSION' ) ) :
    add_action( 'vc_before_init', 'jevelin_vc_before_init_actions' );
    function jevelin_vc_before_init_actions() {

        $elements = array();

        /* Legacy Elements */
        $dir = trailingslashit( get_template_directory() ) . '/inc/elements/legacy/';
        $files = scandir( $dir, 1 );
        $files = array_reverse($files);
        foreach( $files as $file ) :
            if( !in_array( $file, array(".","..") ) ) :
                if( file_exists( $dir.$file ) ) :

                    $elements[$file] = $dir.$file;

                endif;
            endif;
        endforeach;

        /* New Elements */
        $dir = trailingslashit( get_template_directory() ) . '/inc/elements/';
        $files = scandir( $dir, 1 );
        foreach( $files as $file ) :
            if( !in_array( $file, array(".","..","standard","legacy") ) ) :
                if( file_exists( $dir.$file ) ) :

                    $name = $file.'newelement';
                    $elements[$name] = $dir.$file;

                endif;
            endif;
        endforeach;

        /* Load Elements */
        ksort( $elements );
        foreach( $elements as $element ) :
            require_once( $element );
        endforeach;

    }
endif;


/**
 * Load VC legacy
 */
if( function_exists( 'jevelin_vc_legacy' ) ) :
    jevelin_vc_legacy();
endif;


/**
 * Add VC Options
 */

/* Column - Element */
$column_attributes = array(
    array(
        'param_name' => 'padding_tablet',
        'heading' => __( 'Responsive Padding', 'jevelin' ),
        'description' => __( 'Here you can set responsive smartphone and tablet padding (<b>top right bottom left</b>). For example: <b>30px 0px 30px 0px</b>', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Responsive Border",
        'param_name' => 'responsive_border',
        'value' => array(
            __( 'Enabled', 'jevelin' ) => 'enabled',
            __( 'Disabled', 'jevelin' ) => 'disabled',
        ),
        'description' => __( 'Enable or disable column borders in smartophone and tablet', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'max_width',
        'heading' => __( 'Max Width', 'jevelin' ),
        'description' => __( 'Enter columns content max width (Note: CSS measurement units allowed).', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'max_width_alignment',
        'heading' => __( 'Max Width Alignment', 'jevelin' ),
        'description' => __( 'Choose max width content alignment', 'jevelin' ),
        'type' => 'dropdown',
        'value' => array(
            __( 'Left', 'jevelin' ) => 'left',
            __( 'Center', 'jevelin' ) => 'center',
            __( 'Right', 'jevelin' ) => 'right',
        ),
        'std' => 'center',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Shadow",
        'param_name' => 'shadow',
        'value' => array(
            __( 'Disabled', 'jevelin' ) => 'disabled',
            __( 'Shadow 1', 'jevelin' ) => 'shadow1',
            __( 'Shadow 2', 'jevelin' ) => 'shadow2',
            __( 'Shadow 3', 'jevelin' ) => 'shadow3',
        ),
        'description' => __( 'Choose Column Shadow', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Shadow Hover",
        'param_name' => 'shadow_hover',
        'value' => array(
            __( 'Disabled', 'jevelin' ) => 'disabled',
            __( 'Shadow 1', 'jevelin' ) => 'shadow1',
            __( 'Shadow 2', 'jevelin' ) => 'shadow2',
            __( 'Shadow 3', 'jevelin' ) => 'shadow3',
        ),
        'description' => __( 'Choose Column Shadow on Hover', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array (
        'param_name' => 'background_image_hover',
        'heading' => 'Background Image (hover)',
        'description' => 'Upload image background image (hover)',
        'type' => 'attach_image',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'zindex',
        'heading' => __( 'Z-Index', 'jevelin' ),
        'description' => __( 'Enter z-index value to fix shadows', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
);
vc_add_params( 'vc_column', $column_attributes );
vc_add_params( 'vc_column_inner', $column_attributes );


/* Row - Element */
$row_attributes = array(
    array(
        'param_name' => 'padding_tablet',
        'heading' => __( 'Responsive Padding', 'jevelin' ),
        'description' => __( 'Here you can set responsive smartphone and tablet padding (<b>top right bottom left</b>). For example: <b>30px 0px 30px 0px</b>', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'max_width',
        'heading' => __( 'Max Width', 'jevelin' ),
        'description' => __( 'Enter columns content max width (Note: CSS measurement units allowed).', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'max_width_alignment',
        'heading' => __( 'Max Width Alignment', 'jevelin' ),
        'description' => __( 'Choose max width content alignment', 'jevelin' ),
        'type' => 'dropdown',
        'value' => array(
            __( 'Left', 'jevelin' ) => 'left',
            __( 'Center', 'jevelin' ) => 'center',
            __( 'Right', 'jevelin' ) => 'right',
        ),
        'std' => 'center',
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Responsive Column Order",
        'param_name' => 'column_order',
        'value' => array(
            __( 'Default', 'jevelin' ) => 'default',
            __( 'Reversed', 'jevelin' ) => 'reversed',
        ),
        'description' => __( 'Choose responsive column order for smartphones and tablets', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Faster Parallax",
        'param_name' => 'faster_parallax',
        'value' => array(
            __( 'Disabled', 'jevelin' ) => 'disabled',
            __( 'Standard', 'jevelin' ) => 'standard',
        ),
        'description' => __( 'Add parallax type background for row (Note: If no image is specified, parallax will use background image from Design Options). Also standard parallax should be disabled', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Shadow",
        'param_name' => 'shadow',
        'value' => array(
            __( 'Disabled', 'jevelin' ) => 'disabled',
            __( 'Shadow 1', 'jevelin' ) => 'shadow1',
            __( 'Shadow 2', 'jevelin' ) => 'shadow2',
            __( 'Shadow 3', 'jevelin' ) => 'shadow3',
        ),
        'description' => __( 'Choose Column Shadow', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'type' => 'dropdown',
        'heading' => "Shadow Hover",
        'param_name' => 'shadow_hover',
        'value' => array(
            __( 'Disabled', 'jevelin' ) => 'disabled',
            __( 'Shadow 1', 'jevelin' ) => 'shadow1',
            __( 'Shadow 2', 'jevelin' ) => 'shadow2',
            __( 'Shadow 3', 'jevelin' ) => 'shadow3',
        ),
        'description' => __( 'Choose Column Shadow on Hover', 'jevelin' ),
        'group' => __( 'Extras', 'jevelin' ),
    ),
    array(
        'param_name' => 'zindex',
        'heading' => __( 'Z-Index', 'jevelin' ),
        'description' => __( 'Enter z-index value to fix shadows', 'jevelin' ),
        'type' => 'textfield',
        'group' => __( 'Extras', 'jevelin' ),
    ),
);
vc_add_params( 'vc_row', $row_attributes );
vc_add_params( 'vc_row_inner', $row_attributes );


/* Rev Slider - Element */
$attributes = array(
	array(
		'param_name' => 'css',
		'type' => 'css_editor',
		'heading' => __( 'CSS box', 'jevelin' ),
		'group' => __( 'Design Options', 'jevelin' ),
	),
);
vc_add_params( 'rev_slider_vc', $attributes );



/**
 * Add VC Icons
 */
 function jevelin_vc_icons_data() {
    require_once ( 'icons-vc.php' );
    if( function_exists( 'jevelin_vc_icons' ) ) :
     	return jevelin_vc_icons();
    endif;
 }
 add_filter( 'vc_iconpicker-type-jevelin_vc_icons', 'jevelin_vc_icons_data' );
