<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
/*-----------------------------------------------------------------------------------*/
/* Partners HTML
/*-----------------------------------------------------------------------------------*/
$id = ( isset( $atts['id'] ) ) ? $atts['id'] : $id_rand;
$class = '';
$class.= ( isset( $atts['padding'] ) && $atts['padding'] == true ) ? ' sh-partners-carousel-additional-padding' : '';
$autoplay = ( isset( $atts['autoplay'] ) && $atts['autoplay'] > 0 ) ? ( $atts['autoplay'] * 1000 ) : 5000;
$partners = ( isset( $atts['partners'] ) ) ? $atts['partners'] : '';
$columns = ( isset( $atts['columns'] ) ) ? $atts['columns'] : '5';

/* If Visual Composer */
if( !isset( $atts['id'] ) ) :
	$partners = vc_param_group_parse_atts( $partners );
endif;
?>


<?php /* Visual Composer Optimization */ ?>
<?php if( jevelin_is_vc_front() ) : ?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			if( $.isFunction( $.fn.slick ) ) {

				var partner_autoplay = parseInt( $('#partners-<?php echo esc_attr( $id ); ?>').attr('data-autoplay') );
				var partner_carousel_columns = parseInt($('#partners-<?php echo esc_attr( $id ); ?>').attr('data-id') );
				var partner_carousel_columns_responsive1 = partner_carousel_columns;
				var partner_carousel_columns_responsive2 = 2;

				if( partner_carousel_columns > 4 ) {
					partner_carousel_columns_responsive1 = 4;
				}

				if( partner_carousel_columns == 1 ) {
					partner_carousel_columns_responsive2 = 1;
				}

				if( partner_autoplay < 1 || !partner_autoplay ) {
					partner_autoplay = 5000;
				}

				$('#partners-<?php echo esc_attr( $id ); ?>').slick({
					infinite: true,
					dots: false,
					arrows: false,
					slidesToShow: partner_carousel_columns,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: partner_autoplay,
					responsive: [
						{
							breakpoint: 1025,
							settings: {
								slidesToShow: partner_carousel_columns_responsive1
							}
						},{
							breakpoint: 800,
							settings: {
								slidesToShow: partner_carousel_columns_responsive2,
								pauseOnHover: false
							}
						},{
							breakpoint: 550,
							settings: {
								slidesToShow: 1,
								pauseOnHover: false
							}
						}
					],
				});

			}
		});
	</script>
<?php endif; ?>


<div id="partners-<?php echo esc_attr( $id ); ?>" class="sh-partners-carousel<?php echo esc_attr( $class ); ?>" data-autoplay="<?php echo intval( $autoplay ); ?>" data-id="<?php echo intval( $columns ); ?>">
	<?php if( is_array( $partners ) && count( $partners ) ) : ?>
		<?php foreach( $partners as $content ) :
			$company = ( isset( $content['company'] ) ) ? $content['company'] : '';
			$website = ( isset( $content['website'] ) ) ? $content['website'] : '';
			$image = '';

			if( isset( $content['logo'] ) && $content['logo'] ) :
				$image = ( isset( $atts['id'] ) ) ? jevelin_get_image( $content['logo'] ) : jevelin_get_small_thumb( $content['logo'], 'large' );
			endif;
		?>
			<div class="<?php if( $website ) : ?>sh-partners-carousel-item-link<?php endif; ?>">
				<div class="sh-partners-carousel-item-content">
					<?php if( $website ) : ?>
						<a href="<?php echo esc_url( $website ); ?>" target="_blank">
					<?php endif; ?>

					<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $company ); ?>" />

					<?php if( $website ) : ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
