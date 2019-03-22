<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
if( !function_exists( 'jevelin_shortcode_image_gallery_css' ) ) :
	function jevelin_shortcode_image_gallery_css( $data, $id_rand = '' ) {
		$atts = ( $id_rand ) ? $data : jevelin_shortcode_options( $data, 'image-gallery' );
		$id = ( $id_rand ) ? $id_rand : $atts['id'];
		$margin = ( isset( $atts['margin'] ) ) ? $atts['margin'] : '';
		$radius = ( isset( $atts['radius'] ) ) ? $atts['radius'] : '';
		$dots_color = ( isset( $atts['dots_color'] ) ) ? $atts['dots_color'] : '';
		ob_start(); ?>


			<?php if( $margin ) : ?>
				#image-gallery-<?php echo esc_attr( $id ); ?> .sh-gallery-item {
					margin: <?php echo jevelin_addpx( $margin ); ?>;
				}
				#image-gallery-<?php echo esc_attr( $id ); ?> {
					margin: -<?php echo jevelin_addpx( $margin ); ?>;
				}
			<?php endif; ?>

			<?php if( $radius ) : ?>
				#image-gallery-<?php echo esc_attr( $id ); ?> .slick-list {
					border-radius: <?php echo jevelin_addpx( $radius ); ?>;
				}
			<?php endif; ?>

			<?php if( $dots_color ) : ?>
				#image-gallery-<?php echo esc_attr( $id ); ?> .slick-dots li.slick-active button {
					background-color: <?php echo esc_attr( $dots_color ); ?>!important;
				}
			<?php endif; ?>


		<?php $css = ob_get_contents(); ob_end_clean();
		if( $id_rand ) : echo jevelin_echo_style( $css ); else : wp_add_inline_style( 'jevelin-responsive', jevelin_compress( $css ) ); endif;
	}
	add_action('fw_ext_shortcodes_enqueue_static:image_gallery','jevelin_shortcode_image_gallery_css');
endif;
?>
