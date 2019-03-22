<?php
if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
/*-----------------------------------------------------------------------------------*/
/* Recent Posts HTML
/*-----------------------------------------------------------------------------------*/
$id = ( isset( $atts['id'] ) ) ? $atts['id'] : $id_rand;
$style = ( isset( $atts['style'] ) ) ? $atts['style'] : 'masonry';
$columns = ( isset( $atts['columns'] ) ) ? $atts['columns'] : '3';
$elements = jevelin_option( 'post_elements' );
$class = '';
$class2 = '';
$categories_type = 'category__in';
$categories_query = array();
$tags_type = 'tag__in';
$tags_query = array();


/* Get Categories */
if( !isset( $atts['id'] ) && isset( $atts['categories'] ) ) :
	$categories_type = 'category_name';
	$categories_query = $atts['categories'];
elseif( isset( $atts['categories'] ) && count( $atts['categories'] ) > 0 ) :
	$categories_type = 'category__in';
	$categories_query = $atts['categories'];
endif;


/* Get Tags */
if( !isset( $atts['id'] ) && isset( $atts['tags'] ) ) :
	$tags_type = 'tag';
	$tags_query = $atts['tags'];
elseif( isset( $atts['tags'] ) && count( $atts['tags'] ) > 0 ) :
	$tags_type = 'tag__in';
	$tags_query = $atts['tags'];
endif;


/* Get Columns */
if( isset( $atts['columns'] ) && ( $atts['columns'] == 2 || $atts['columns'] == 4 || $atts['columns'] == 5 ) ) :
	$class = ' sh-recent-posts-columns'.$atts['columns'];
endif;


/* Set Carousel */
if( isset( $atts['carousel'] ) && $atts['carousel'] == true ) :
	$class.= ' sh-recent-posts-carousel';
	$class2.= ' sh-recent-posts-list-carousel';
endif;
?>


<?php /* Visual Composer Optimization */ ?>
<?php if( jevelin_is_vc_front() ) : ?>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			if( $.isFunction( $.fn.isotope ) ) {

				var $masonry2 = $('#recent-posts-<?php echo esc_attr( $id ); ?> .blog-list').isotope({
					itemSelector: '.post-item, .post-content-gallery-item',
					columnWidth: 0,
					gutter: 0,
				}).isotope('reloadItems');
				$masonry2.imagesLoaded( function() {
					$masonry2.isotope('layout').css( 'opacity', 1 );
				});

			}

			if( typeof $.fn.Slick !== 'undefined' ) {
				/* Blog Posts Carousel */
		        var desktop_slides = parseInt( $('#recent-posts-<?php echo esc_attr( $id ); ?> .blog-list').parent().attr('data-id') );
		        if( desktop_slides == 4 || desktop_slides == 5 ) {
		            var desktop_slides = 3;
		        }

		        $('#recent-posts-<?php echo esc_attr( $id ); ?> .blog-list').slick({
		            infinite: true,
		            dots: true,
		            arrows: false,
		            slidesToShow: desktop_slides,
		            slidesToScroll: desktop_slides,
		            autoplay: true,
		            autoplaySpeed: 5000,
		            responsive: [
		                {
		                    breakpoint: 1025,
		                    settings: {
		                        slidesToShow: desktop_slides,
		                        slidesToScroll: desktop_slides,
		                    }
		                },{
		                    breakpoint: 800,
		                    settings: {
		                        slidesToShow: 2,
		                        slidesToScroll: 2,
		                        pauseOnHover: false
		                    }
		                },{
		                    breakpoint: 550,
		                    settings: {
		                        slidesToShow: 1,
		                        slidesToScroll: 1,
		                        pauseOnHover: false
		                    }
		                }
		            ],
		        });
			}
		});
	</script>
<?php endif; ?>


<div class="sh-recent-posts<?php echo esc_attr( $class ); ?>" id="recent-posts-<?php echo esc_attr( $id ); ?>" data-id="<?php echo intval( $columns ); ?>">
	<div class="sh-group blog-list blog-style-<?php echo ( $style != 'minimalistic' ) ? esc_attr( $style ) : 'grid minimalistic'; echo esc_attr( $class2 ); ?>">
		<?php
			set_query_var( 'style', $style );

			$limit = ( isset( $atts['limit'] ) && is_numeric($atts['limit']) ) ? intval( $atts['limit'] ) : 6;
			if( $limit == 41 ) {
				$limit = -1;
			}

			$orderby = ( isset($atts['order_by']) && $atts['order_by'] ) ? esc_attr( $atts['order_by'] ) : 'post_date';
			$order = ( isset($atts['order']) && $atts['order'] ) ? esc_attr( $atts['order'] ) : 'desc';

			$posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $limit, $categories_type => $categories_query, $tags_type => $tags_query, 'orderby' => $orderby, 'order' => $order ) );
			if( $posts->have_posts() ) :
				while ( $posts->have_posts() ) : $posts->the_post();
					if( $style == 'grid' || $style == 'masonry' || $style == 'masonry masonry-shadow' || $style == 'masonry masonry2' || $style == 'minimalistic' ) :

						if( get_post_format() ) :
							get_template_part( 'content', 'format-'.get_post_format() );
						else :
							get_template_part( 'content' );
						endif;

					elseif( $style == 'largeimage' ) : ?>


						<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
							<div class="post-container">
								<?php jevelin_popover( jevelin_post_option( get_the_ID(), 'post-popover' ) ); ?>

								<?php if( get_post_format() == 'link' ) : ?>

									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title post-title-format">
										<h2><i class="post-format-icon icon-link"></i> <?php echo jevelin_post_option( get_the_ID(), 'post-url-title' ); ?></h2>
									</a>

									<div class="post-content">
										<p><?php echo jevelin_post_option( get_the_ID(), 'post-url' ); ?></p>
									</div>

								<?php elseif( get_post_format() == 'quote' ) : ?>

									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title post-title-format">
										<h2><i class="post-format-icon ti-quote-left"></i> <?php echo jevelin_post_option( get_the_ID(), 'post-quote' ); ?></h2>
									</a>

									<div class="post-content">
										<p><?php echo jevelin_post_option( get_the_ID(), 'post-quote-author' ); ?></p>
									</div>

								<?php elseif( get_post_format() == 'video' ) : ?>

									<div class="post-meta-video">
										<div class="ratio-container ratio-container-classic">
											<div class="ratio-content">
												<?php echo wp_oembed_get( jevelin_post_option( get_the_ID(), 'post-video' ) ); ?>
											</div>
										</div>
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
										<h2><?php the_title(); ?></h2>
									</a>

								<?php elseif( get_post_format() == 'audio' ) : ?>

									<div class="post-meta-video">
										<div class="ratio-container ratio-container-classic">
											<div class="ratio-content">
												<?php echo wp_oembed_get( jevelin_post_option( get_the_ID(), 'post-audio' ) ); ?>
											</div>
										</div>
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
										<h2><?php the_title(); ?></h2>
									</a>

								<?php elseif( get_post_format() == 'gallery' ) : ?>

									<div class="sh-gallery">
										<?php
											$gallery = jevelin_post_option( get_the_ID(), 'post-gallery' );
											if( count($gallery) > 0 ) :
												foreach( $gallery as $image ) : ?>

													<div class="sh-gallery-item">
														<img src="<?php echo jevelin_get_small_thumb( $image['attachment_id'] ); ?>" alt="" class="width-full" />
													</div>

												<?php endforeach;
											endif;
										?>
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
										<h2><?php the_title(); ?></h2>
									</a>

								<?php else : ?>

									<div class="post-meta-thumb">
										<?php echo the_post_thumbnail(); ?>
										<?php jevelin_blog_overlay( jevelin_get_thumb( get_the_ID() ) ); ?>
									</div>
									<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
										<h2><?php the_title(); ?></h2>
									</a>

								<?php endif; ?>

								<div class="post-meta post-meta-two">
									<?php jevelin_meta_two(); ?>
								</div>

							</div>
						</article>


					<?php else : ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
							<div class="post-container">

								<div class="sh-table">
									<div class="sh-table-cell-top post-custom-date">

										<?php if( isset($elements['comments']) && $elements['comments'] == true ) : ?>
											<div class="post-comments">
												<?php echo get_comments_number( '0', '1', '%' ); ?>
											</div>
										<?php endif; ?>
										<div class="post-day">
											<?php echo the_time( 'd' ); ?>
										</div>
										<div class="post-month">
											<?php echo the_time( 'M' ); ?>
										</div>

									</div>
									<div class="sh-table-cell-top">

										<?php if( get_post_format() == 'link' ) : ?>

											<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title post-title-format">
												<h2><i class="post-format-icon icon-link"></i> <?php echo jevelin_post_option( get_the_ID(), 'post-url-title' ); ?></h2>
											</a>

											<div class="post-content">
												<p><?php echo jevelin_post_option( get_the_ID(), 'post-url' ); ?></p>
											</div>

										<?php elseif( get_post_format() == 'quote' ) : ?>

											<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title post-title-format">
												<h2><i class="post-format-icon ti-quote-left"></i> <?php echo jevelin_post_option( get_the_ID(), 'post-quote' ); ?></h2>
											</a>

											<div class="post-content">
												<p><?php echo jevelin_post_option( get_the_ID(), 'post-quote-author' ); ?></p>
											</div>

										<?php else : ?>

											<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-title">
												<h2><?php the_title(); ?></h2>
											</a>

											<div class="post-content">
												<?php the_excerpt(); ?>
											</div>

										<?php endif; ?>
										<div class="post-meta post-meta-two">
											<?php jevelin_meta_two(); ?>
										</div>

									</div>
								</div>

							</div>
						</article>

					<?php endif;
				endwhile;

				wp_reset_postdata();
			endif;
		?>
	</div>
</div>
