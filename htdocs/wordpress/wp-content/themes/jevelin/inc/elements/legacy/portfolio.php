<?php
class vcj_portfolio extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_portfolio', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        vc_map( array (
  'name' => 'Portfolio',
  'base' => 'vcj_portfolio',
  'description' => 'Show your portfolio',
  'category' => 'Jevelin Elements',
  'params' => 
  array (
    0 => 
    array (
      'param_name' => 'style',
      'heading' => 'Style',
      'description' => 'Choose main style',
      'value' => 
      array (
        'Standard' => 'default',
        'Standard with Shadow' => 'default-shadow',
        'Trendy' => 'default2',
        'Gallery' => 'masonry',
        'Marginless Gallery' => 'masonry2',
        'Minimalistic' => 'minimalistic',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'default',
      'group' => 'General',
      'admin_label' => true,
    ),
    1 => 
    array (
      'param_name' => 'image_ratio',
      'heading' => 'Image Ratio',
      'description' => 'Choose default image ratio',
      'value' => 
      array (
        'Fluid' => 'fluid',
        'Landscape' => 'landscape',
        'Portrait' => 'portrait',
        'Square' => 'square',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'fluid',
      'group' => 'General',
    ),
    2 => 
    array (
      'param_name' => 'overlay',
      'heading' => 'Overlay',
      'description' => 'Select overlat style or disable it',
      'value' => 
      array (
        'Disable' => 'none',
        'Overlay 1' => 'overlay1',
        'Overlay 2' => 'overlay2',
        'Overlay 3' => 'overlay3',
        'Overlay 4' => 'overlay4',
        'Overlay 5' => 'overlay4 overlay5',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'overlay4',
      'group' => 'General',
    ),
    3 => 
    array (
      'param_name' => 'columns',
      'heading' => 'Columns',
      'description' => 'Select column count',
      'value' => 
      array (
        '2 columns' => 2,
        '3 columns' => 3,
        '4 columns' => 4,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => '3',
      'group' => 'General',
      'admin_label' => true,
    ),
    4 => 
    array (
      'param_name' => 'categories',
      'heading' => 'Categories',
      'description' => 'Select categories',
      'value' => '',
      'type' => 'exploded_textarea',
      'class' => '',
      'std' => '',
      'group' => 'General',
    ),
    5 => 
    array (
      'param_name' => 'limit',
      'heading' => 'Limit',
      'description' => 'Enter item limit (default 6, infinite -1)',
      'value' => '6',
      'type' => 'textfield',
      'class' => '',
      'std' => '6',
      'group' => 'General',
    ),
    6 => 
    array (
      'param_name' => 'order_by',
      'heading' => 'Order By',
      'description' => 'Choose product order by',
      'value' => 
      array (
        'Date' => 'date',
        'Name' => 'name',
        'Author' => 'author',
        'Random' => 'rand',
        'Comment Count' => 'comment_count',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'date',
      'group' => 'General',
    ),
    7 => 
    array (
      'param_name' => 'order',
      'heading' => 'Order',
      'description' => 'Choose product order',
      'value' => 
      array (
        'Ascending' => 'asc',
        'Descending' => 'desc',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'desc',
      'group' => 'General',
    ),
    8 => 
    array (
      'param_name' => 'page_link',
      'heading' => 'Page Link',
      'description' => 'Enable or disable portfolio page link',
      'value' => 
      array (
        'Off' => false,
        'On' => true,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => true,
      'group' => 'General',
    ),
    9 => 
    array (
      'param_name' => 'layout',
      'heading' => 'Layout',
      'description' => 'Select portfolio layout. Grid layout is useful for maintaining correct item order',
      'value' => 
      array (
        'Masonry' => 'masonry',
        'Grid' => 'grid',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'masonry',
      'group' => 'General',
    ),
    10 => 
    array (
      'param_name' => 'filter',
      'heading' => 'Filter',
      'description' => 'Select filter style or disable it',
      'value' => 
      array (
        'None' => 'none',
        'Style 1' => 'default',
        'Style 2' => 'style2',
        'Style 3' => 'style3',
        'Style 4' => 'style3 sh-portfolio-filter-style4',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'default',
      'group' => 'Filter',
    ),
    11 => 
    array (
      'param_name' => 'filter_icon',
      'heading' => 'Filter Icon',
      'description' => 'Select filter icon',
      'value' => 'icon-layers',
      'type' => 'iconpicker',
      'class' => '',
      'std' => 'icon-layers',
      'group' => 'Filter',
      'settings' => 
      array (
        'emptyIcon' => true,
        'type' => 'jevelin_vc_icons',
      ),
    ),
    12 => 
    array (
      'param_name' => 'filter_all_limit',
      'heading' => 'Limit All tab items',
      'description' => 'Enter &quot;All&quot; tab item limit',
      'value' => '',
      'type' => 'textfield',
      'class' => '',
      'std' => '',
      'group' => 'Filter',
    ),
    13 => 
    array (
      'param_name' => 'pagination',
      'heading' => 'Pagination',
      'description' => 'Enable or disable portfolio pagination',
      'value' => 
      array (
        'Off' => false,
        'On' => true,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => false,
      'group' => 'Pagination',
    ),
    14 => 
    array (
      'param_name' => 'pagination_filters',
      'heading' => 'Pagination Filters',
      'description' => 'Enable or disable portfolio pagination filters',
      'value' => 
      array (
        'Off' => false,
        'On' => true,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => false,
      'group' => 'Pagination',
    ),
    15 => 
    array (
      'param_name' => 'pagination_per_page',
      'heading' => 'Projects Per Page',
      'description' => 'Enter projects per page limit (default: 6)',
      'value' => '6',
      'type' => 'textfield',
      'class' => '',
      'std' => '6',
      'group' => 'Pagination',
    ),
  ),
) );
    }

    public function _html( $atts, $content ) {
        $id_rand = jevelin_rand();
        ob_start();

        $path = trailingslashit( get_template_directory() );
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/portfolio/views/view.php';
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/portfolio/static.php';
        if( function_exists( 'jevelin_shortcode_portfolio_css' ) ) :
            jevelin_shortcode_portfolio_css( $atts, $id_rand );
        endif;

        return ob_get_clean();
    }
}

new vcj_portfolio();