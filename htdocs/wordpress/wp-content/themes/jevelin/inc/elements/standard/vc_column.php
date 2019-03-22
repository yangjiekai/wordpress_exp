<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

wp_enqueue_script( 'wpb_composer_front_js' );

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);

if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_col-has-fill';
}

$wrapper_attributes = array();

$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );

$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}

if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}

if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}


/* Jevelin Custom Changes - Starts */
$shadow = ( isset( $shadow ) ) ? $shadow : 'disabled';
$shadow_hover = ( isset( $shadow_hover ) ) ? $shadow_hover : 'disabled';
$zindex = ( isset( $zindex ) ) ? $zindex : '';
$padding = ( isset( $padding_tablet ) ) ? $padding_tablet : '';
$max_width = ( isset( $max_width ) ) ? $max_width : '';
$background_image_hover = ( isset( $background_image_hover ) ) ? $background_image_hover : '';
$max_width = ( isset( $max_width ) && is_numeric( $max_width ) ) ? $max_width.'px' : $max_width;
$max_width_alignment = ( isset( $max_width_alignment ) && $max_width_alignment && in_array( $max_width_alignment, array( 'left', 'center', 'right' ) ) ) ? $max_width_alignment : 'center';
$responsive_border = ( isset( $responsive_border ) ) ? $responsive_border : '';
$element_id = 'vc_column_'.rand();
$style_element = '';
$element_css = '';

if( $shadow && $shadow != 'disabled' ) :
	$css_classes[] = 'vc_column_'.esc_attr( $shadow );
endif;

if( $shadow_hover && $shadow_hover != 'disabled' ) :
	$css_classes[] = 'vc_column_'.esc_attr( $shadow_hover ).'_hover';
endif;

if( $responsive_border == 'disabled' ) :
	$css_classes[] = 'vc_column_reponsive_border_disabled';
endif;

if( $max_width ) :
	$style_element.= 'width: 100%; max-width: '.$max_width.';';

	if( $max_width_alignment == 'center' ) :
		$style_element.= 'margin-left: auto; margin-right: auto;';
	elseif( $max_width_alignment == 'left' ) :
		$style_element.= 'margin-left: 0; margin-right: auto;';
	else :
		$style_element.= 'margin-left: auto; margin-right: 0;';
	endif;
endif;

if( $zindex ) :
	$wrapper_attributes[] = 'style="z-index: '.$zindex.';"';
endif;

if( $style_element ) :
	$style_element = ' style="'.$style_element.'"';
endif;

if( $padding ) :
	$element_css.= '@media (max-width: 800px) {.'.$element_id.' > .vc_column-inner { padding: '.$padding.'!important;}}';
endif;

if( $background_image_hover ) :
	$element_css.= '.'.$element_id.':hover > .vc_column-inner { background-image: url( '.jevelin_get_small_thumb( $background_image_hover, 'large' ).' )!important; } ';
	$element_css.= '.'.$element_id.' > .vc_column-inner { transition: 0.3s all ease-in-out; }.';
endif;

if( $element_css ) :
	$element_css = '<style type="text/css">'.$element_css.'</style>';
	$css_classes[] = $element_id;
endif;
/* Jevelin Custom Changes - Ends */


$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$output .= '<div class="vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ) . '">';
$output .= '<div class="wpb_wrapper"'. $style_element .'>'; /* Jevelin Custom Changes - $style_element */
$output .= wpb_js_remove_wpautop( $content ).$element_css; /* Jevelin Custom Changes - .$element_css */
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo $output;
