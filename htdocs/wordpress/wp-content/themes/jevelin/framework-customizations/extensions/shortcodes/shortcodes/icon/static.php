<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
if( !function_exists( 'jevelin_shortcode_icon_css' ) ) :
	function jevelin_shortcode_icon_css( $data, $id_rand = '' ) {
		$atts = ( $id_rand ) ? $data : jevelin_shortcode_options( $data, 'icon' );
		$id = ( $id_rand ) ? $id_rand : $atts['id'];
		$shadow = ( isset( $atts['shadow'] ) ) ? $atts['shadow'] : 'none';
		$icon_size = ( isset( $atts['icon_size'] ) ) ? $atts['icon_size'] : '30px';
		$icon_color = ( isset( $atts['icon_color'] ) ) ? $atts['icon_color'] : '';
		$icon_second_color = ( isset( $atts['icon_second_color'] ) ) ? $atts['icon_second_color'] : '';
		$icon_hover_color = ( isset( $atts['icon_hover_color'] ) ) ? $atts['icon_hover_color'] : '';
		$icon_hover_second_color = ( isset( $atts['icon_hover_second_color'] ) ) ? $atts['icon_hover_second_color'] : '';
		ob_start(); ?>

			<?php if( $icon_size || $icon_color ) : ?>
				#icon-<?php echo esc_attr( $id ); ?> .sh-icon-data {
					<?php if( $icon_size ) : ?>
						font-size: <?php echo jevelin_addpx( $icon_size ); ?>;
					<?php endif; ?>

					<?php if( $icon_color ) : ?>
						color: <?php echo esc_attr( $icon_color ); ?>;
					<?php endif; ?>
				}
			<?php endif; ?>

			<?php if( $icon_hover_color ) : ?>
				#icon-<?php echo esc_attr( $id ); ?>:hover .sh-icon-data {
					color: <?php echo esc_attr( $icon_hover_color ); ?>;
				}
			<?php endif; ?>

			<?php if( $shadow != 'none' ) : ?>
				#icon-<?php echo esc_attr( $id ); ?> .sh-icon-data {
					<?php if( $shadow == 'small' ) : ?>
						text-shadow: 0px 2px 10px rgb(25, 25, 25);
					<?php else : ?>
						text-shadow: 0px 5px 35px rgb(15, 15, 15);
					<?php endif; ?>
				}
			<?php endif; ?>

			<?php if( $icon_second_color && $icon_color ) : ?>
				#icon-<?php echo esc_attr( $id ); ?> .sh-icon-data {
					background: -webkit-linear-gradient(45deg, <?php echo esc_attr( $icon_color ); ?>, <?php echo esc_attr( $icon_second_color ); ?>);
				    -webkit-background-clip: text;
				    -webkit-text-fill-color: transparent;
				}
			<?php endif; ?>

			<?php if( $icon_hover_second_color && $icon_hover_color ) : ?>
				#icon-<?php echo esc_attr( $id ); ?> .sh-icon-data:hover {
					background: -webkit-linear-gradient(45deg, <?php echo esc_attr( $icon_hover_color ); ?>, <?php echo esc_attr( $icon_hover_second_color ); ?>);
				    -webkit-background-clip: text;
				    -webkit-text-fill-color: transparent;
				}
			<?php endif; ?>


		<?php $css = ob_get_contents(); ob_end_clean();
		if( $id_rand ) : echo jevelin_echo_style( $css ); else : wp_add_inline_style( 'jevelin-responsive', jevelin_compress( $css ) ); endif;
	}
	add_action('fw_ext_shortcodes_enqueue_static:icon','jevelin_shortcode_icon_css');
endif;
?>
