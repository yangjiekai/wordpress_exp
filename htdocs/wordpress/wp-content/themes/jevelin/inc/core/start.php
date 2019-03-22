<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/*
 * Shufflehound - Core
 * Version: 0.5.0
 */
if( is_admin() ) :
    require_once ( trailingslashit( get_template_directory() ) . '/inc/core/dashboard.php' );
    require_once ( trailingslashit( get_template_directory() ) . '/inc/core/demos.php' );

    if ( !function_exists( 'shufflehound_assets' ) ) :
        function shufflehound_assets() {
            wp_enqueue_style( 'shufflehound-css', get_template_directory_uri() . '/inc/core/assets/shufflehound.css' );
        }
        add_action( 'admin_enqueue_scripts', 'shufflehound_assets' );
    endif;
endif;
