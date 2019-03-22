<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
if( !function_exists( 'jevelin_shortcode_icon_group_css' ) ) :
	function jevelin_shortcode_icon_group_css( $data, $id_rand = '' ) {
		$atts = ( $id_rand ) ? $data : jevelin_shortcode_options( $data, 'icon-group' );
		$id = ( $id_rand ) ? $id_rand : $atts['id'];
		$icon_color = ( isset( $atts['icon_color'] ) ) ? $atts['icon_color'] : '';
		ob_start(); ?>

			<?php if( $icon_color ) : ?>
				#icon-group-<?php echo esc_attr( $id ); ?> .sh-icon-group-item i {
					<?php if( $icon_color ) : ?>
						color: <?php echo esc_attr( $icon_color ); ?>;
					<?php endif; ?>
				}
			<?php endif; ?>

		<?php $css = ob_get_contents(); ob_end_clean();
		if( $id_rand ) : echo jevelin_echo_style( $css ); else : wp_add_inline_style( 'jevelin-responsive', jevelin_compress( $css ) ); endif;
	}
	add_action('fw_ext_shortcodes_enqueue_static:icon_group','jevelin_shortcode_icon_group_css');
endif;
?>
