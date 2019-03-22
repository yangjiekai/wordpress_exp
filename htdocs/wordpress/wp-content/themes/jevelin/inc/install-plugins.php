<?php
/**
 * Load TGM Plugin
 */
if( is_admin() && !function_exists('jevelin_register_required_plugins') ) :
    require_once ( trailingslashit( get_template_directory() ) . '/inc/plugins/TGM-Plugin-Activation/class-tgm-plugin-activation.php' );
    function jevelin_register_required_plugins() {

        tgmpa(array(
            array(
                'name'      => esc_html__( 'Unyson', 'jevelin' ),
                'slug'      => 'unyson',
                'required'  => true,
            ),

            array(
                'name'      => esc_html__( 'WPBakery Page Builder (formerly Visual Composer)', 'jevelin' ),
                'slug'      => 'js_composer',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/visual-composer-OL6A44.zip',
                'required'  => true,
                'version'   => '5.5.4',
            ),

            array(
                'name'      => esc_html__( 'WooCommerce', 'jevelin' ),
                'slug'      => 'woocommerce',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'Revolution slider', 'jevelin' ),
                'slug'      => 'revslider',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/slider-revolution-QB4L22.zip',
                'required'  => false,
                'version'   => '5.4.7.2',
            ),

            array(
                'name'      => esc_html__( 'Yellow Pencil Pro: Visual CSS Style Editor', 'jevelin' ),
                'slug'      => 'waspthemes-yellow-pencil',
                'source'    => 'https://cdn.shufflehound.com/theme-plugins/yellow-pencil-AX5N33.zip',
                'required'  => false,
                'version'   => '7.0.5',
            ),

            array(
                'name'      => esc_html__( 'One Click Demo Install (optional)', 'jevelin' ),
                'slug'      => 'one-click-demo-import',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'MailChimp for WordPress (optional, used in some Jevelin demos)', 'jevelin' ),
                'slug'      => 'mailchimp-for-wp',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'WP Instagram Widget (optional, used in some Jevelin demos)', 'jevelin' ),
                'slug'      => 'wp-instagram-widget',
                'required'  => false,
            ),

            array(
                'name'      => esc_html__( 'Envato Market (optional, helps receive updates to Themes & Plugins from purchased items)', 'jevelin' ),
                'slug'      => 'envato-market',
                'source'    => trailingslashit( get_template_directory() ) . '/inc/plugins/envato-market.zip',
                'required'  => false,
                'version'   => '2.0.0',
            ),
        ), array( 'is_automatic' => true ));

    }
    add_action( 'tgmpa_register', 'jevelin_register_required_plugins' );
endif;
