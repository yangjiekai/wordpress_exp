<?php
class vcj_blog_posts extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_blog_posts', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        vc_map( array (
  'name' => 'Blog Posts',
  'base' => 'vcj_blog_posts',
  'description' => 'Recent blog posts',
  'category' => 'Jevelin Elements',
  'params' => 
  array (
    0 => 
    array (
      'param_name' => 'limit',
      'heading' => 'Limit posts',
      'description' => 'Choose post limit. Choose 41 posts to select unlimited posts',
      'value' => 6,
      'type' => 'textfield',
      'class' => '',
      'std' => 6,
      'group' => '',
      'admin_label' => true,
    ),
    1 => 
    array (
      'param_name' => 'style',
      'heading' => 'Style',
      'description' => 'Choose main style for recent posts',
      'value' => 
      array (
        'Masonry 2.0 Standard' => 'masonry masonry2',
        'Masonry Shadow' => 'masonry masonry-shadow',
        'Masonry Standard' => 'masonry',
        'Grid' => 'grid',
        'Date only' => 'largedate',
        'Image only' => 'largeimage',
        'Minimalistic' => 'minimalistic',
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => 'masonry',
      'group' => '',
      'admin_label' => true,
    ),
    2 => 
    array (
      'param_name' => 'columns',
      'heading' => 'Columns',
      'description' => 'Choose columns count',
      'value' => 
      array (
        '2 columns' => 2,
        '3 columns' => 3,
        '4 columns' => 4,
        '5 columns' => 5,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => '3',
      'group' => '',
      'admin_label' => true,
    ),
    3 => 
    array (
      'param_name' => 'carousel',
      'heading' => 'Carousel',
      'description' => 'Enable or disable carousel',
      'value' => 
      array (
        'Off' => false,
        'On' => true,
      ),
      'type' => 'dropdown',
      'class' => '',
      'std' => false,
      'group' => '',
    ),
    4 => 
    array (
      'param_name' => 'categories',
      'heading' => 'Blog Categories',
      'description' => 'Choose which blog categories you want to show',
      'value' => '',
      'type' => 'exploded_textarea',
      'class' => '',
      'std' => '',
      'group' => '',
    ),
    5 => 
    array (
      'param_name' => 'tags',
      'heading' => 'Blog Tags',
      'description' => 'Choose which blog tags you want to show',
      'value' => '',
      'type' => 'exploded_textarea',
      'class' => '',
      'std' => '',
      'group' => '',
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
      'group' => '',
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
      'group' => '',
    ),
  ),
) );
    }

    public function _html( $atts, $content ) {
        $id_rand = jevelin_rand();
        ob_start();

        $path = trailingslashit( get_template_directory() );
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/views/view.php';
        include $path . '/framework-customizations/extensions/shortcodes/shortcodes/blog-posts/static.php';
        if( function_exists( 'jevelin_shortcode_blog_posts_css' ) ) :
            jevelin_shortcode_blog_posts_css( $atts, $id_rand );
        endif;

        return ob_get_clean();
    }
}

new vcj_blog_posts();