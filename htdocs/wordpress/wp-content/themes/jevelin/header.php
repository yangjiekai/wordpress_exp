<?php
/**
 * Header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<?php if( jevelin_option('responsive_layout') ) : ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php endif; ?>

	<?php
	/* Callback for older WordPress versions */
	if( !function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
		<?php if( jevelin_option_image('favicon') ) : ?>
			<link rel="icon" type="image/png" href="<?php echo jevelin_option_image('favicon'); ?>">
		<?php endif; ?>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	/* Get Titlebar options */
	$titlebar_style_val = jevelin_post_option( jevelin_page_id(), 'header_style' );
	$titlebar_style_val2 = ( isset( $titlebar_style_val['header_style'] ) ) ? esc_attr($titlebar_style_val['header_style']) : 'default';

	/* Inlcude page loader HTML */
	get_template_part('inc/templates/page_loader' );

	/* Header popup search */
	if( jevelin_option( 'header_search_style', 'style1' ) != 'style1' ) :
		get_template_part('inc/headers/header-search');
	endif;
?>

	<?php
		if( jevelin_header_right() ) :
			/* Inlcude right header HTML */
			get_template_part('inc/headers/header-right-1' );
		endif;
	?>

	<div id="page-container" class="<?php echo jevelin_header_page_container(); ?>">
		<?php
			/* Inlcude page notice HTML */
			get_template_part('inc/templates/notice' );

			/* Inlcude breadcrumbs HTML, if bottom titlebar style */
			if( $titlebar_style_val2 == 'bottom_titlebar' ) :
				get_template_part('inc/templates/titlebar' );
			endif;
		?>


		<?php if( jevelin_post_option( jevelin_page_id(), 'header', 'on' ) != 'off' ) : ?>
			<header class="primary-mobile<?php echo jevelin_header_mobile_style(); ?>">
				<?php /* Inlcude mobile header */
					get_template_part('inc/headers/header-mobile' );
				?>
			</header>
			<header class="primary-desktop<?php echo jevelin_header_desktop_style(); ?>">
				<?php /* Inlcude desktop header */
					get_template_part('inc/headers/header-'.jevelin_header_layout() );
				?>
			</header>
		<?php endif; ?>


		<?php
			/* Inlcude breadcrumbs HTML, if not bottom titlebar style */
			if( $titlebar_style_val2 != 'bottom_titlebar' ) :
				get_template_part('inc/templates/titlebar' );
			endif;

			$class = '';
			if( jevelin_post_option( jevelin_page_id(), 'page_layout', 'default' ) != 'full' ) {
				$class = ' sh-page-layout-default';
			} else if( jevelin_post_option( jevelin_page_id(), 'page_layout', 'default' ) == 'full' ) {
				$class = ' sh-page-layout-full';
			}

			if ( jevelin_post_option( jevelin_page_id(), 'page_layout', 'default' ) == 'default' ||
			   ( jevelin_post_option( jevelin_page_id(), 'page_layout', 'default' ) == 'global_default' && jevelin_option( 'global_page_layout' ) == 'default' ) ) :
				$post = get_post();
				if( $post && preg_match( '/vc_row/', $post->post_content ) ) :
				    $class = '';
				endif;
			endif;
		?>


        <?php /* Unyson Builder Empty Space Preview */
		if( current_user_can('administrator') &&
        function_exists( 'fw_ext_page_builder_is_builder_post' ) && fw_ext_page_builder_is_builder_post( jevelin_page_id() ) ) : ?>
            <span class="sh-unyson-frontend-test" style="opacity: 0;" title="Toogle page builder empty spaces visually">
                <i class="icon icon-eye"></i>
            </span>
	    <?php endif; ?>


			<div id="wrapper">
				<?php /* Option to show blog page editor content above blog */
				wp_reset_postdata();
				if( jevelin_post_option( jevelin_page_id(), 'page_blog_editor', 'off' ) == 'on' ) : ?>
					<?php if( function_exists( 'fw_ext_page_builder_is_builder_post' ) && fw_ext_page_builder_is_builder_post( jevelin_page_id() ) ) : ?>
						<div class="blog-editor-content-container blog-fw-editor-content-container">
							<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
						</div>
					<?php elseif( get_the_content( jevelin_page_id() ) ) : ?>
						<div class="blog-editor-content-container">
							<div class="container">
								<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
							</div>
						</div>
					<?php endif; ?>
				<?php endif; ?>


				<div class="content-container<?php echo esc_attr( $class ); ?>">
				<?php if( jevelin_post_option( jevelin_page_id(), 'page_layout', 'default' ) != 'full' ) : ?>
					<div class="container entry-content">
				<?php endif; ?>


				<?php
					/* Inlcude white borders option HTML */
					get_template_part('inc/templates/white_borders' );
				?>
