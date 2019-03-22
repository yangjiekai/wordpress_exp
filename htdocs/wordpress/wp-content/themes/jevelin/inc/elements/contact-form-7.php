<?php
class vcj_contact_form_7 extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_contact_form_7', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        $forms = array();
        $get_forms = new WP_Query( array( 'post_type' => 'wpcf7_contact_form', 'post_per_page' => -1 ) );
        if( $get_forms->have_posts() ) :
            while ( $get_forms->have_posts() ) : $get_forms->the_post();
                $forms[get_the_title()] = get_the_ID();
            endwhile;
        endif;

        vc_map( array (
            'name' => 'Contact Form 7',
            'base' => 'vcj_contact_form_7',
            'description' => 'Place Contact Form 7',
            'category' => 'Jevelin Elements',
            'params' => array(

                array (
                    'param_name' => 'form_id',
                    'heading' => 'Select Form',
                    'description' => 'Select your Contact Form 7 form.<br />New form can be created <a target="_blank" href="'. admin_url( 'admin.php?page=wpcf7' ) .'">here</a>',
                    'value' => $forms,
                    'type' => 'dropdown',
                ),

                array (
                    'param_name' => 'style',
                    'heading' => 'Style',
                    'description' => 'Select main style',
                    'value' =>
                    array (
                        'Standard' => 'style1',
                        'Input Round Edges (2px border)' => 'style2',
                        'Input Center Text' => 'style3',
                        'Bottom Line with simple submit button' => 'style4',
                        'Bottom Line with submit button in accent color' => 'style4 style6',
                        'Dark line' => 'style5',
                    ),
                    'type' => 'dropdown',
                    'std' => 'style1',
                ),
            ),
        ));
    }

    public function _html( $atts, $content ) {
        $style = ( isset( $atts['style'] ) && $atts['style'] ) ? $atts['style'] : 'style1';
        $form_id = ( isset( $atts['form_id'] ) && $atts['form_id'] > 0 ) ? $atts['form_id'] : '';
        ob_start(); ?>

            <div id="cf7-<?php echo intval( $form_id ); ?>" class="sh-cf7 sh-cf7-wpbakery sh-cf7-<?php echo esc_attr( $style ); ?>">
                <?php
                    if( $form_id > 0 && shortcode_exists( 'contact-form-7' ) ) :
                        echo do_shortcode( '[contact-form-7 id="'.intval( $form_id ).'" title="Subscribe"]' );
                    endif;
                ?>
            </div>

        <?php return ob_get_clean();
    }
}

new vcj_contact_form_7();
