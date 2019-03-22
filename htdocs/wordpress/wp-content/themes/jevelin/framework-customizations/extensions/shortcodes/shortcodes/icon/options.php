<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'id' => array( 'type' => 'unique' ),

	'general' => array(
		'title'   => esc_html__( 'General', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(

			'icon'    => array(
				'type'  => 'new-icon',
				'label' => esc_html__('Icon', 'jevelin'),
				'desc'   => esc_html__( 'Select Icon', 'jevelin' ),
				'set' => 'jevelin-icons',
				'value' => 'ti-check'
			),

			/*'url'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'URL', 'jevelin' ),
				'desc'   => esc_html__( 'Enter URL', 'jevelin' ),
			),*/

		    'alignment' => array(
		        'label'   => esc_html__('Alignment', 'jevelin'),
		        'desc'    => esc_html__('Choose alignment', 'jevelin'),
		        'type'    => 'radio',
		        'choices' => array(
		            'center' => esc_html__('Center', 'jevelin'),
		            'left' => esc_html__('Left', 'jevelin'),
		            'right' => esc_html__('Right', 'jevelin'),
		        ),
		        'value' => 'center'
		    ),

		    'shadow' => array(
				'label'   => esc_html__('Shadow', 'jevelin'),
				'desc'    => esc_html__('Choose shadow', 'jevelin'),
				'type'    => 'radio',
				'choices' => array(
					'none' => esc_html__('None', 'jevelin'),
					'small' => esc_html__('Small', 'jevelin'),
					'large' => esc_html__('Large', 'jevelin'),
				),
				'value' => 'none'
			),

			'icon_size' => array(
				'type'  => 'select',
				'label' => esc_html__('Size', 'jevelin'),
				'desc'  => wp_kses( __( 'Enter icon size (with <b>px</b>)', 'jevelin' ), jevelin_allowed_html() ),
				'type'  => 'text',
				'attr'  => array( 'style' => 'max-width: 70px;' ),
				'value' => '30px'
			),

			'icon_color' => array(
			    'type'  => 'color-picker',
			    'label' => esc_html__('Color', 'jevelin'),
			    'desc'  => esc_html__('Select icon color or leave blank for default body color', 'jevelin'),
			    'value' => '',
			),

			'icon_second_color' => array(
			    'type'  => 'color-picker',
			    'label' => esc_html__('Second Color', 'jevelin'),
			    'desc'  => esc_html__('Select icon color to create a gradient color (Only for chrome, safari and opera browsers)', 'jevelin'),
			    'value' => '',
			),

			'icon_hover_color' => array(
			    'type'  => 'color-picker',
			    'label' => esc_html__('Hover Color', 'jevelin'),
			    'desc'  => esc_html__('Select hover color', 'jevelin'),
			    'value' => '',
			),

			'icon_hover_second_color' => array(
			    'type'  => 'color-picker',
			    'label' => esc_html__('Second Hover Color', 'jevelin'),
			    'desc'  => esc_html__('Select icon hover color to create a hover gradient color (Only for chrome, safari and opera browsers)', 'jevelin'),
			    'value' => '',
			),

		),
	),

	'load_animation' => array(
		'title'   => esc_html__( 'Show Animation', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(

			'animation' => array(
				'type'    => 'select',
				'label'   => esc_html__('Animation', 'jevelin'),
				'desc'  => esc_html__( 'Select button animation', 'jevelin' ),
				'value'	  => 'none',
				'choices' => array(
					'none' => esc_html__('None', 'jevelin'),
					'fadeIn' => esc_html__('Fade In', 'jevelin'),
					'fadeInDown' => esc_html__('Fade In Down', 'jevelin'),
					'fadeInDownBig' => esc_html__('Fade In Down Big', 'jevelin'),
					'fadeInLeft' => esc_html__('Fade In Left', 'jevelin'),
					'fadeInLeftBig' => esc_html__('Fade In Left Big', 'jevelin'),
					'fadeInRight' => esc_html__('Fade In Right', 'jevelin'),
					'fadeInRightBig' => esc_html__('Fade In Right Big', 'jevelin'),
					'fadeInUp' => esc_html__('Fade In Up', 'jevelin'),
					'fadeInUpBig' => esc_html__('Fade In Up Big', 'jevelin'),
					'slideInDown' => esc_html__('Slide In Down', 'jevelin'),
					'slideInLeft' => esc_html__('Slide In Left', 'jevelin'),
					'slideInRight' => esc_html__('Slide In Right', 'jevelin'),
					'slideInUp' => esc_html__('Slide In Up', 'jevelin'),
					'zoomIn' => esc_html__('Zoom In', 'jevelin'),
					'zoomInDown' => esc_html__('Zoom In Down', 'jevelin'),
					'zoomInLeft' => esc_html__('Zoom In Left', 'jevelin'),
					'zoomInRight' => esc_html__('Zoom In Right', 'jevelin'),
					'zoomInUp' => esc_html__('Zoom In Up', 'jevelin'),
					'rotateIn' => esc_html__('Rotate In', 'jevelin'),
					'rotateInDownLeft' => esc_html__('Rotate In Down Left', 'jevelin'),
					'rotateInDownRight' => esc_html__('Rotate In Down Right', 'jevelin'),
					'rotateInUpLeft' => esc_html__('Roate In Up Left', 'jevelin'),
					'rotateInUpRight' => esc_html__('Roate In Up Right', 'jevelin'),
					'bounceIn' => esc_html__('Bounce In', 'jevelin'),
					'bounceInDown' => esc_html__('Bounce In Down', 'jevelin'),
					'bounceInLeft' => esc_html__('Bounce In Left', 'jevelin'),
					'bounceInRight' => esc_html__('Bounce In Right', 'jevelin'),
					'bounceInUp' => esc_html__('Bounce In Up', 'jevelin'),
					'bounce' => esc_html__('Bounce', 'jevelin'),
					'flash' => esc_html__('Flash', 'jevelin'),
					'pulse' => esc_html__('Pulse', 'jevelin'),
					'rubberBand' => esc_html__('Rubber Band', 'jevelin'),
					'shake' => esc_html__('Shake', 'jevelin'),
					'headShake' => esc_html__('Head Shake', 'jevelin'),
					'swing' => esc_html__('Swing', 'jevelin'),
					'tada' => esc_html__('Tada', 'jevelin'),
					'wobble' => esc_html__('Wobble', 'jevelin'),
					'jello' => esc_html__('Jello', 'jevelin'),
					'flipInX' => esc_html__('Flip In X', 'jevelin'),
					'flipInY' => esc_html__('Flip In Y', 'jevelin'),
					'lightSpeedIn' => esc_html__('Light Speed In', 'jevelin'),
					'hinge' => esc_html__('Hinge', 'jevelin'),
					'rollIn' => esc_html__('Roll In', 'jevelin'),
				)
			),

			'animation_speed' => array(
			    'type'  => 'slider',
			    'value' => 2,
			    'properties' => array(
			        'min' => 0,
			        'max' => 5,
			        'step' => 0.1,
			    ),
			    'label' => esc_html__('Animation Speed', 'jevelin'),
			    'desc'  => esc_html__('Choose animation speed (seconds)', 'jevelin'),
			),

			'animation_delay' => array(
			    'type'  => 'slider',
			    'value' => 0,
			    'properties' => array(
			        'min' => 0,
			        'max' => 5,
			        'step' => 0.1,
			    ),
			    'label' => esc_html__('Animation Delay', 'jevelin'),
			    'desc'  => esc_html__('Choose animation delay (seconds', 'jevelin'),
			),

		),
	),

);
