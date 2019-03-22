<?php
/**
 * Unyson Demo Installation Method
 */
if ( ! function_exists( 'jevelin_remote_demos' ) ) :
	function jevelin_remote_demos($demos) {
	    $demos_array = array(
	        'basic-full' => array(
	            'title' => __('Basic', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/basic.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/',
	        ),

	        'wedding-full' => array(
	            'title' => __('Wedding', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/wedding.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/wedding/',
	        ),

	        'boxed-full' => array(
	            'title' => __('Boxed', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/boxed.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/boxed/',
	        ),

	        'corporate-full' => array(
	            'title' => __('Corporate', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/corporate.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/corporate/',
	        ),

	        'landing-full' => array(
	            'title' => __('Landing', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/landing.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/landing/',
	        ),

	        'landing2-full' => array(
	            'title' => __('Landing 2', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/landing2.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/landing2/',
	        ),

            'shop-full' => array(
	            'title' => __('Shop', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/shop.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/shop1/',
	        ),

            'blog-full' => array(
	            'title' => __('Blog', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/blog.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/blog1/',
	        ),

            'portfolio-full' => array(
	            'title' => __('Portfolio', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/portfolio.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/portfolio1/',
	        ),

            'startup-full' => array(
	            'title' => __('Startup', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/startup.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/startup/',
	        ),

            'autospot-full' => array(
	            'title' => __('Autospot', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/autospot.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/autospot/',
	        ),

            'construction-full' => array(
	            'title' => __('Construction', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/construction.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/construction/',
	        ),

			'soon-full' => array(
	            'title' => __('Coming Soon', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/soon.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/coming-soon/',
	        ),

			'foodie-full' => array(
	            'title' => __('Foodie', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/foodie.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/foodie/',
	        ),

			'beauty-full' => array(
	            'title' => __('Beauty', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/beauty.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/beauty/',
	        ),

			'crypto-full' => array(
	            'title' => __('Beauty', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/crypto.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/crypto/',
	        ),

			'education-full' => array(
	            'title' => __('Beauty', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/education.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/education/',
	        ),

			'basic-home-vc' => array(
	            'title' => __('Basic Home (WPbakery Page Builder)', 'jevelin'),
	            'screenshot' => '//api.shufflehound.com/jevelin/files/basic_home.jpg',
	            'preview_link' => 'https://jevelin.shufflehound.com/',
	        ),
	    );
		$demos_array = array_reverse( $demos_array );


	    $download_url = 'https://api.shufflehound.com/jevelin/';

	    foreach ($demos_array as $id => $data) {
	        $demo = new FW_Ext_Backups_Demo($id, 'piecemeal', array(
	            'url' => $download_url,
	            'file_id' => $id,
	        ));
	        $demo->set_title($data['title']);
	        $demo->set_screenshot($data['screenshot']);
	        $demo->set_preview_link($data['preview_link']);

	        $demos[ $demo->get_id() ] = $demo;

	        unset($demo);
	    }

	    return $demos;
	}
	add_filter('fw:ext:backups-demo:demos', 'jevelin_remote_demos');
endif;


/**
 * Jevelin demo installation update
 */
 add_filter(
     'fw:ext:backups:add-restore-task:image-sizes-restore',
     'jevelin_fw_backups_disable_image_sizes_restore',
     10, 2
 );
 function jevelin_fw_backups_disable_image_sizes_restore(
     $do, FW_Ext_Backups_Task_Collection $collection
 ) {
     if (
         $collection->get_id() === 'demo-content-install'
         &&
         ($task = $collection->get_task('demo:demo-download'))
         &&
         ($task_args = $task->get_args())
         &&
         isset($task_args['demo_id'])
         &&
         ( strpos($task_args['demo_id'], 'demo-local-') !== false )
     ) {
         $do = false;
     }

     return $do;
 }
