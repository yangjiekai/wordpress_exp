<?php
if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
/*-----------------------------------------------------------------------------------*/
/* Team Member HTML
/*-----------------------------------------------------------------------------------*/
$id = ( isset( $atts['id'] ) ) ? $atts['id'] : $id_rand;
$layout = ( isset( $atts['layout'] ) ) ? $atts['layout'] : 'style1';
$icon_style = ( isset( $atts['icon_style'] ) ) ? $atts['icon_style'] : 'overlay';
$description = ( isset( $content ) && $content ) ? $content : $atts['description'];
$image = ( isset( $atts['image'] ) ) ? $atts['image'] : '';
$name = ( isset( $atts['name'] ) ) ? $atts['name'] : '';
$role = ( isset( $atts['role'] ) ) ? $atts['role'] : '';
$image_lightbox = '';
$icons = array();
$icons_data = '';

/* Thumbnails */
if( isset( $atts['image_ratio'] ) ) :
	if( $atts['image_ratio'] == 'portrait' ) :
		$image_ratio = 'jevelin-portrait';
	elseif( $atts['image_ratio'] == 'square' ) :
		$image_ratio = 'jevelin-square';
	else :
		$image_ratio = 'post-thumbnail';
	endif;
else :
	$image_ratio = 'post-thumbnail';
endif;

/* Icons */
/* Facebook */
if( isset($atts['facebook']) && $atts['facebook'] ) :
	$icons[] = array( 'name' => 'social-facebook', 'link' => esc_attr( $atts['facebook'] ) );
endif;
/* Twitter */
if( isset($atts['twitter']) && $atts['twitter'] ) :
	$icons[] = array( 'name' => 'social-twitter', 'link' => esc_attr( $atts['twitter'] ) );
endif;
/* Google Plus */
if( isset($atts['googleplus']) && $atts['googleplus'] ) :
	$icons[] = array( 'name' => 'social-gplus', 'link' => esc_attr( $atts['googleplus'] ) );
endif;
/* Instagram */
if( isset($atts['instagram']) && $atts['instagram'] ) :
	$icons[] = array( 'name' => 'social-instagram', 'link' => esc_attr( $atts['instagram'] ) );
endif;
/* Skype */
if( isset($atts['skype']) && $atts['skype'] ) :
	$icons[] = array( 'name' => 'social-skype', 'link' => esc_attr( $atts['skype'] ) );
endif;
/* Behance */
if( isset($atts['behance']) && $atts['behance'] ) :
	$icons[] = array( 'name' => 'social-behance', 'link' => esc_attr( $atts['behance'] ) );
endif;
/* Linkedin */
if( isset($atts['linkedin']) && $atts['linkedin'] ) :
	$icons[] = array( 'name' => 'social-linkedin', 'link' => esc_attr( $atts['linkedin'] ) );
endif;
/*Tumblr */
if( isset($atts['tumblr']) && $atts['tumblr'] ) :
	$icons[] = array( 'name' => 'social-tumblr', 'link' => esc_attr( $atts['tumblr'] ) );
endif;

if( count( $icons) ) :
	$icons_data.= '<div class="sh-team-icons sh-team-icons-'.esc_attr( $icon_style ).'"><div class="sh-team-icons-container">';
	foreach( $icons as $icon ) :
		$icons_data.= '<a href="'.esc_url( $icon['link'] ).'" target="_blank" class="sh-team-icon">
			<div class="sh-team-icon-container">
				<i class="icon-'.esc_attr( $icon['name'] ).'"></i>
			</div>
		</a>';
	endforeach;
	$icons_data.= '</div></div>';

	$image_position = 'sh-team-image-position';
else :
	$image_position = '';
endif;

if( $image ) :
	$image_lightbox = ( $image && !is_array( $image ) ) ? jevelin_get_small_thumb( $image, 'large' ) : jevelin_get_small_thumb( $image['attachment_id'], 'large' );
	$image = ( $image && !is_array( $image ) ) ? jevelin_get_small_thumb( $image, $image_ratio ) : jevelin_get_small_thumb( $image['attachment_id'], $image_ratio );
endif;
?>

<div class="sh-team sh-team-<?php echo esc_attr( $layout ); ?> sh-team-social-<?php echo esc_attr( $icon_style ); ?>" id="team-<?php echo esc_attr( $id ); ?>">
	<?php if( $layout == 'style3' ) : ?>

		<div class="sh-team-image-container">
			<div class="sh-team-image">
				<a href="<?php echo esc_url( $image_lightbox ); ?>" class="<?php echo esc_attr( $image_position ); ?>" rel="lightbox">
					<img src="<?php echo esc_url( $image ); ?>" alt="" />
				</a>

				<?php if( $icon_style == 'overlay' ) : ?>
					<div class="sh-team-overlay">
						<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
					</div>
				<?php elseif( $icon_style == 'overlay2' ) : ?>
					<div class="sh-team-overlay2">
						<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

		<div class="sh-team-aside">
			<div class="sh-team-role">
				<?php echo esc_attr( $role ); ?>
			</div>
			<div class="sh-team-name">
				<h3><?php echo esc_attr( $name ); ?></h3>
			</div>
			<div class="sh-team-description">
				<?php echo wp_kses_post( $description ); ?>
			</div>
			<?php /* Social icons */ echo ( $icon_style == 'standard' ) ? $icons_data : ''; ?>
		</div>

	<?php elseif( $layout == 'style2' ) : ?>

		<div class="sh-team-top">
			<div class="sh-team-name">
				<h3><?php echo esc_attr( $name ); ?></h3>
			</div>
			<div class="sh-team-role">
				<?php echo esc_attr( $role); ?>
			</div>
		</div>

		<div class="sh-team-image">
			<a href="<?php echo esc_url( $image_lightbox ); ?>" class="<?php echo esc_attr( $image_position ); ?>" rel="lightbox">
				<img src="<?php echo esc_url( $image ); ?>" alt="" />
			</a>

			<?php if( $icon_style == 'overlay' ) : ?>
				<div class="sh-team-overlay">
					<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
				</div>
			<?php elseif( $icon_style == 'overlay2' ) : ?>
				<div class="sh-team-overlay2">
					<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="sh-team-aside">
			<div class="sh-team-description">
				<?php echo wp_kses_post( $description ); ?>
			</div>
			<?php /* Social icons */ echo ( $icon_style == 'standard' ) ? $icons_data : ''; ?>
		</div>

	<?php else : ?>

		<div class="sh-team-image">
			<a href="<?php echo esc_url( $image_lightbox ); ?>" class="<?php echo esc_attr( $image_position ); ?>" rel="lightbox">
				<img src="<?php echo esc_url( $image ); ?>" alt="" />
			</a>

			<?php if( $icon_style == 'overlay' ) : ?>
				<div class="sh-team-overlay">
					<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
				</div>
			<?php elseif( $icon_style == 'overlay2' ) : ?>
				<div class="sh-team-overlay2">
					<?php echo wp_kses( $icons_data, jevelin_allowed_html_icons() ); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="sh-team-aside">
			<div class="sh-team-name">
				<h3><?php echo esc_attr( $name ); ?></h3>
			</div>
			<div class="sh-team-role">
				<?php echo esc_attr( $role ); ?>
			</div>

			<div class="sh-team-description">
				<?php echo wp_kses_post( $description ); ?>
			</div>

			<?php /* Social icons */ echo ( $icon_style == 'standard' ) ? $icons_data : ''; ?>
		</div>

	<?php endif; ?>
</div>
