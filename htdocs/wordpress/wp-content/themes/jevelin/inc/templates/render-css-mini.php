<?php
ob_start("jevelin_compress");
if( defined('FW') ) :

/*-----------------------------------------------------------------------------------*/
/* Define Variables
/*-----------------------------------------------------------------------------------*/

$footer_columns_padding =  jevelin_post_option( jevelin_page_id(), 'footer_widgets_padding');
$titlebar_text_color =  jevelin_post_option( jevelin_page_id(), 'titlebar_text_color');
?>

<?php
/*-----------------------------------------------------------------------------------*/
/* Footer
/*-----------------------------------------------------------------------------------*/
?>

	<?php if( $footer_columns_padding ) : ?>
		.sh-footer-widgets {
			padding: <?php echo esc_attr( $footer_columns_padding ); ?>
		}
	<?php endif; ?>

	<?php if( $titlebar_text_color ) : ?>
		.sh-titlebar .titlebar-title .titlebar-title-h1,
		.sh-titlebar .sh-titlebar-desc {
			color: <?php echo esc_attr( $titlebar_text_color ); ?>!important;
		}
	<?php endif; ?>

<?php endif;
ob_end_flush();
?>
