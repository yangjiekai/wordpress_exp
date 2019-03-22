<?php

// [search_products]
function search_products_shortcode($params = array(), $content = null) {
	extract(shortcode_atts(array(
		'ids'     => ''
	), $params));

	global $shopkeeper_theme_options;

	$ids = explode( ',', $params['ids']);

	ob_start();

	?>

	<div class="woocommerce columns-8">
		<ul id="products-grid" class="products small-up-4 medium-up-4 large-up-5 xlarge-up-6 xxlarge-up-8">

			<?php foreach ( $ids as $product_id ) { ?>
				<?php $product = wc_get_product( $product_id ); ?>

					<li class="column">

						<?php if ( (isset($shopkeeper_theme_options['second_image_product_listing'])) && 
							($shopkeeper_theme_options['second_image_product_listing'] == "1" ) ) {

								$product_thumbnail_second = [];
								$attachment_ids = $product->get_gallery_image_ids();
								if ( $attachment_ids ) {
									$loop = 0;
									foreach ( $attachment_ids as $attachment_id ) {
										$image_link = wp_get_attachment_url( $attachment_id );
										if (!$image_link) continue;
										$loop++;
										$product_thumbnail_second = wp_get_attachment_image_src($attachment_id, 'shop_catalog');
										if ($loop == 1) break;
									}
								}

								$style = '';
								$class = '';        
								if (isset($product_thumbnail_second[0])) {            
									$style = 'background-image:url(' . $product_thumbnail_second[0] . ')';
									$class = 'with_second_image second_image_loaded';     
								}
							}
							
							$instock_class = '';
							if( !$product->is_in_stock() ){
								$instock_class = 'outofstock';
							}

							?>

							<div class="product_thumbnail_wrapper <?php echo $instock_class; ?>">
					
								<div class="product_thumbnail <?php echo $class; ?>">
									<a href="<?php echo get_permalink( $product->get_id() ); ?>">
										<span class="product_thumbnail_background" style="<?php echo $style; ?>"></span>

										<?php
											if ( has_post_thumbnail( $product->get_id() ) ) { 	
												echo get_the_post_thumbnail( $product->get_id(), 'shop_catalog');
											} else {
												echo apply_filters( 'woocommerce_single_product_image_html', sprintf( '<img src="%s" alt="Placeholder" />', wc_placeholder_img_src() ), $product->get_id() );
											}
										?>

									</a>
								</div>

								<?php if ( (isset($shopkeeper_theme_options['catalog_mode'])) && ($shopkeeper_theme_options['catalog_mode'] == 0) ) { ?>
									<?php if ( $product->is_on_sale() ) { ?>
										<span class="onsale"><?php echo esc_html__( 'Sale!', 'woocommerce' ); ?></span>
									<?php } ?>

									<?php if ( !$product->is_in_stock() && !empty($shopkeeper_theme_options['out_of_stock_label']) ) { ?>       
							            <div class="out_of_stock_badge_loop"><?php echo esc_html( $shopkeeper_theme_options['out_of_stock_label'], 'woocommerce' ); ?></div>        
							        <?php } ?>
							    <?php } ?>

							</div>
					
							<h3><a class="product-title-link" href="<?php echo get_permalink( $product->get_id() ); ?>"><?php echo $product->get_title(); ?></a></h3> 

	    					<div class="product_after_shop_loop">			
		
								<?php if ( $price_html = $product->get_price_html() ) { ?>
									<span class="price"><?php echo $price_html; ?></span>
								<?php } ?>
	
							</div>
					</li>

			<?php } ?>

		</ul>
	</div>

	<?php

	return ob_get_clean();
}

add_shortcode('search_products', 'search_products_shortcode');