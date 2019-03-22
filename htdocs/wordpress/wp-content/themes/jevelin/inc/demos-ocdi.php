<?php
/**
 * OCDI Demo Installation Method
 */
function jevelin_ocdi_import_files() {

    /* WPbakery demos */
    $newdemos = array(
        array(
            'name' => 'Basic (WPbakery Page Builder)',
            'slug' => 'basic_home',
            'image_url' => 'basic_home',
            'preview_url' => '',
            'categories' => array( 'Basic', 'WPbakery' ),
            'revslider' => true,
        ),
        array(
            'name' => 'Photography (WPbakery Page Builder)',
            'slug' => 'photography_home',
            'image_url' => 'photography',
            'preview_url' => 'home/home-photography/',
            'categories' => array( 'Basic', 'WPbakery', 'Photography' ),
            'revslider' => true,
        ),
        array(
            'name' => 'Creative (WPbakery Page Builder)',
            'slug' => 'creative_home',
            'image_url' => 'creative',
            'preview_url' => 'home/home-creative/',
            'categories' => array( 'Basic', 'WPbakery' ),
            'revslider' => true,
        ),
        /*array(
            'name' => 'Fitness (WPbakery Page Builder)',
            'slug' => 'fitness_home',
            'image_url' => 'fitness',
            'preview_url' => 'home/home-fitness/',
            'categories' => array( 'Fitness', 'WPbakery' ),
            'revslider' => true,
        ),
        array(
            'name' => 'Nature (WPbakery Page Builder)',
            'slug' => 'nature_home',
            'image_url' => 'nature',
            'preview_url' => 'home/home-nature/',
            'categories' => array( 'Basic', 'WPbakery' ),
            'revslider' => true,
        ),
        array(
            'name' => 'Event (WPbakery Page Builder)',
            'slug' => 'event_home',
            'image_url' => 'event',
            'preview_url' => 'home/home-event/',
            'categories' => array( 'Basic', 'WPbakery' ),
            'revslider' => true,
        ),
        array(
            'name' => 'Corporate (WPbakery Page Builder)',
            'slug' => 'corporate',
            'image_url' => 'corporate',
            'preview_url' => 'home/home-corporate/',
            'categories' => array( 'Corporate', 'WPbakery' ),
            'revslider' => true,
        ),*/
    );


    /* Unyson demos */
    $demos = array(
        array(
            'import_file_name'           => 'Basic',
            'categories'                 => array( 'Basic', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/basic_home.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/',
        ),

        array(
            'import_file_name'           => 'Creative',
            'categories'                 => array( 'Basic', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/creative/creative_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/creative/creative_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/creative.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/home/home-creative/',
        ),

        array(
            'import_file_name'           => 'Event',
            'categories'                 => array( 'Basic', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/event/event_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/event/event_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/event.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/home/home-event/',
        ),

        array(
            'import_file_name'           => 'Fitness',
            'categories'                 => array( 'Fitness', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/fitness/fitness_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/fitness/fitness_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/fitness.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/home/home-fitness/',
        ),

        array(
            'import_file_name'           => 'Nature',
            'categories'                 => array( 'Basic', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/nature/nature_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/nature/nature_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/nature.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/home/home-nature/',
        ),

        /*array(
            'import_file_name'           => 'Photography',
            'categories'                 => array( 'Basic', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/photography/photography_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/basic_home/basic_home_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/photography/photography_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/photography.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/home/home-Photography/',
        ),*/

        array(
            'import_file_name'           => 'Boxed',
            'categories'                 => array( 'Boxed', 'Corporate', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/boxed/boxed_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/boxed/boxed_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/boxed/boxed_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/boxed/boxed_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/boxed.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/boxed/',
        ),

        array(
            'import_file_name'           => 'Corporate',
            'categories'                 => array( 'Corporate', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/corporate/corporate_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/corporate/corporate_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/corporate/corporate_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/corporate/corporate_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/corporate.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/corporate/',
        ),

        array(
            'import_file_name'           => 'Wedding',
            'categories'                 => array( 'Wedding', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/wedding/wedding_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/wedding/wedding_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/wedding/wedding_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/wedding/wedding_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/wedding.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/wedding/',
        ),

        array(
            'import_file_name'           => 'Landing',
            'categories'                 => array( 'Landing', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/landing/landing_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/landing/landing_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/landing/landing_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/landing.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/landing/',
        ),

        array(
            'import_file_name'           => 'Landing 2',
            'categories'                 => array( 'Landing', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/landing2/landing2_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/landing2/landing2_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/landing2/landing2_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/landing2.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/landing2/',
        ),

        array(
            'import_file_name'           => 'Shop',
            'categories'                 => array( 'Shop', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/shop/shop_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/shop/shop_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/shop/shop_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/shop/shop_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/shop.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/shop1/',
        ),

        array(
            'import_file_name'           => 'Blog',
            'categories'                 => array( 'Blog', 'Unyson', 'WPbakery' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/blog/blog_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/blog/blog_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/blog/blog_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/blog/blog_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/blog.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/blog1/',
        ),

        array(
            'import_file_name'           => 'Portfolio',
            'categories'                 => array( 'Portfolio', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/portfolio/portfolio_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/portfolio.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/portfolio1/',
        ),

        array(
            'import_file_name'           => 'Startup',
            'categories'                 => array( 'Startup', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/startup/startup_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/startup/startup_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/startup/startup_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/startup/startup_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/startup.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/startup/',
        ),

        array(
            'import_file_name'           => 'Autospot',
            'categories'                 => array( 'Autospot', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/autospot/autospot_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/autospot/autospot_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/autospot/autospot_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/autospot/autospot_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/autospot.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/autospot/',
        ),

        array(
            'import_file_name'           => 'Construction',
            'categories'                 => array( 'Construction', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/construction/construction_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/construction/construction_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/construction/construction_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/construction/construction_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/construction.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/construction/',
        ),

        array(
            'import_file_name'           => 'Coming Soon',
            'categories'                 => array( 'Comming Soon', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/soon/soon_content.xml',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/soon/soon_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/soon.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/coming-soon/',
        ),

        array(
            'import_file_name'           => 'Foodie',
            'categories'                 => array( 'Food', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/foodie/foodie_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/foodie/foodie_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/foodie/foodie_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/foodie/foodie_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/foodie.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/foodie/',
        ),

        array(
            'import_file_name'           => 'Beauty',
            'categories'                 => array( 'Beauty', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/beauty/beauty_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/beauty/beauty_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/beauty/beauty_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/beauty/beauty_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/beauty.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/beauty/',
        ),

        array(
            'import_file_name'           => 'Crypto',
            'categories'                 => array( 'Crypto', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/crypto/crypto_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/crypto/crypto_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/crypto/crypto_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/crypto.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/crypto/',
        ),

        array(
            'import_file_name'           => 'Education',
            'categories'                 => array( 'Education', 'Unyson' ),
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_files/education/education_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_files/education/education_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/education/education_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_revslider'           => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_files/education/education_slider.zip',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/education.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/education/',
        ),
    );


    /* Add New demos to Old demos */
    foreach( $newdemos as $demo ) :
        $thisdemo = array(
            'import_file_name'           => $demo['name'],
            'categories'                 => $demo['categories'],
            'import_file_url'            => 'https://api.shufflehound.com/jevelin/ocdi_wpbakery_files/'.$demo['slug'].'/'.$demo['slug'].'_content.xml',
            'import_widget_file_url'     => 'https://api.shufflehound.com/jevelin/ocdi_wpbakery_files/'.$demo['slug'].'/'.$demo['slug'].'_widgets.wie',
            'import_json'                => array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_wpbakery_files/'.$demo['slug'].'/'.$demo['slug'].'_options.json',
                    'option_name' => 'fw_theme_settings_options:jevelin',
                ),
            ),
            'import_preview_image_url'   => '//api.shufflehound.com/jevelin/files/'.$demo['image_url'].'.jpg',
            'preview_url'                => 'https://jevelin.shufflehound.com/'.$demo['preview_url'],
        );

        if( $demo['revslider'] ) :
            $thisdemo['import_revslider'] = array(
                array(
                    'file_url'    => 'https://api.shufflehound.com/jevelin/ocdi_wpbakery_files/'.$demo['slug'].'/'.$demo['slug'].'_slider.zip',
                ),
            );
        endif;

        $demos[] = $thisdemo;
    endforeach;


    return array_reverse( $demos );
    //return array_reverse( $demos );
}
add_filter( 'pt-ocdi/import_files', 'jevelin_ocdi_import_files' );
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );


/**
 * OCDI Demo Installation Method - Final Steps
 */



function jevelin_ocdi_after_import_setup( $selected_import ) {

    // demo name
    $demo_name = $selected_import['import_file_name'];
    $demo_name = str_replace('(WPbakery Page Builder)', '(WPbakery)', $demo_name);


    /* Get page builder working */
    global $wpdb;
    $metas = $wpdb->get_results( "SELECT * FROM `$wpdb->postmeta` WHERE `meta_key` = 'jevelin_page_builder'" );
    foreach( $metas as $meta ) :
        $content = $meta->meta_value;
        $content = str_replace( '="', '=\"',  $content );
        $content = str_replace( '">', '\">',  $content );
        $content = str_replace( '/', '\/',    $content );
        $content = str_replace( 'u201c', '\u201c', $content );
        $content = str_replace( 'u201d', '\u201d', $content );
        $content = str_replace( 'u00a0', '\u00a0', $content );


        // JSON 1 Fix
        $pieces = explode(',"styling":"[{"', $content);
        if( count( $pieces ) > 1 ) :
        	$i = 0;
        	foreach( $pieces as $key => $piece ) : $i++;
        		if( $i > 1 ) :
        			$piece_array = explode('}]}]"', $piece, 2 );
        			$piece_array[0] = json_encode( $piece_array[0] );
                    $piece_array[0] = substr($piece_array[0], 1, -1);
        			$pieces[$key] = implode('}]}]"', $piece_array );
        		endif;
        	endforeach;
        	$content = implode(',"styling":"[{\"', $pieces );
        endif;


        // JSON 2 Fix
        $pieces = explode(',"form":{"json":"[{"', $content);
        if( count( $pieces ) > 1 ) :
        	$i = 0;
        	foreach( $pieces as $key => $piece ) : $i++;
        		if( $i > 1 ) :
        			$piece_array = explode('"}}]"},"subject_message', $piece, 2 );
        			$piece_array[0] = json_encode( $piece_array[0] );
                    $piece_array[0] = substr($piece_array[0], 1, -1);
        			$pieces[$key] = implode('\"}}]"},"subject_message', $piece_array );
        		endif;
        	endforeach;
        	$content = implode(',"form":{"json":"[{\"', $pieces );
        endif;


        /* Get Revolution slider slides */
        if( class_exists('RevSlider') ) :
            if( strpos( $demo_name, 'WPbakery') !== false ) :

                // should be fine

            else :
                $slider = new RevSlider();
                $arrSliders = $slider->getArrSlidersShort();

                if( $selected_import['import_file_name'] != 'Basic' ) :
                    $slide_value = 0;
                    foreach( $arrSliders as $key => $slide ) :
                        if( $slide == 'Fitness slider' && $selected_import['import_file_name'] == 'Boxed' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Startup Slaider' && $selected_import['import_file_name'] == 'Startup' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Corporate slider' && $selected_import['import_file_name'] == 'Corporate' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Shop Slider' && $selected_import['import_file_name'] == 'Shop' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Wedding Slider' && $selected_import['import_file_name'] == 'Wedding' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Autospot Slider' && $selected_import['import_file_name'] == 'Autospot' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Construction Slider' && $selected_import['import_file_name'] == 'Construction' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Foodie Slider' && $selected_import['import_file_name'] == 'Foodie' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Education' && $selected_import['import_file_name'] == 'Education' ) :
                            $slide_value = $key;

                        elseif( $slide == 'Home Basic slider' && $selected_import['import_file_name'] == 'Basic' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Home Creative slider' && $selected_import['import_file_name'] == 'Creative' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Home Event slider' && $selected_import['import_file_name'] == 'Event' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Fitness slider' && $selected_import['import_file_name'] == 'Fitness' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Home Nature slider' && $selected_import['import_file_name'] == 'Nature' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Photographer slider' && $selected_import['import_file_name'] == 'Photography' ) :
                            $slide_value = $key;
                        elseif( $slide == 'Blog Slider' && $selected_import['import_file_name'] == 'Blog From Side to Side' ) :
                            $slide_value = $key;

                        endif;
                    endforeach;
                endif;


                // Revolution Slider set
                if( $slide_value > 0 ) :

                    // basic homepages
                    if( $selected_import['import_file_name'] == 'Basic' ) :
                        $content = str_replace( '","slide":"12","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );

                    elseif( $selected_import['import_file_name'] == 'Creative' ) :
                        $content = str_replace( '","slide":"17","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );

                    elseif( $selected_import['import_file_name'] == 'Event' ) :
                        $content = str_replace( '","slide":"14","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );

                    elseif( $selected_import['import_file_name'] == 'Fitness' ) :
                        $content = str_replace( '","slide":"18","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );

                    elseif( $selected_import['import_file_name'] == 'Nature' ) :
                        $content = str_replace( '","slide":"11","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );

                    elseif( $selected_import['import_file_name'] == 'Photography' ) :
                        $content = str_replace( '","slide":"13","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );


                    // blog demo
                    elseif( $selected_import['import_file_name'] == 'Blog From Side to Side' ) :
                        $blog_option = $wpdb->get_results( "SELECT * FROM `$wpdb->postmeta` WHERE `meta_key` = 'fw_options' and `post_id` = '37' LIMIT 1" );
                        if( isset( $blog_option[0]->meta_value ) ) :
                            $blog_option_content = str_replace( ';s:18:"titlebar_revslider";s:1:"1";', ';s:18:"titlebar_revslider";s:'.strlen( $slide_value ).':"'.intval( $slide_value ).'";', $blog_option[0]->meta_value );
                            //error_log( 'Content: '.$blog_option_content, 0);
                            $wpdb->update( $wpdb->postmeta, array( 'meta_value' => $blog_option_content ), array( 'post_id' => 37, 'meta_key' => 'fw_options' ) );
                        endif;


                    // other demos
                    else :
                        $content = str_replace( '","slide":"1","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                        $content = str_replace( '","slide":"2","class":"', '","slide":"'.intval( $slide_value ).'","class":"', $content );
                        $content = str_replace( '<p style=\"text-align: center;" class', '<p style=\"text-align: center;\" class', $content );
                    endif;
                endif;
            endif;
        endif;


        /* Page builder fix */
    	$wpdb->delete( $wpdb->postmeta, array( 'post_id' => intval( $meta->post_id ), 'meta_key' => 'fw:opt:ext:pb:page-builder:json' ) );
    	$wpdb->update( $wpdb->postmeta, array( 'meta_key' => 'fw:opt:ext:pb:page-builder:json', 'meta_value' => $content ), array( 'meta_id' => intval( $meta->meta_id ), 'post_id' => intval( $meta->post_id ) ) );
    endforeach;


    // Assign menus to their locations.
    $main_menu1 = get_term_by( 'name', 'Header - '.$demo_name, 'nav_menu' );
    $main_menu2 = get_term_by( 'name', 'Menu 1', 'nav_menu' );
    $main_menu3 = get_term_by( 'name', 'Header Navigation', 'nav_menu' );
    $main_menu4 = get_term_by( 'name', 'Header', 'nav_menu' );
    if( isset( $main_menu1->term_id ) && $main_menu1->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu1->term_id, ));
    elseif( isset( $main_menu2->term_id ) && $main_menu2->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu2->term_id, ));
    elseif( isset( $main_menu3->term_id ) && $main_menu3->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu3->term_id, ));
    elseif( isset( $main_menu4->term_id ) && $main_menu4->term_id > 0 ) :
        set_theme_mod( 'nav_menu_locations', array( 'header' => $main_menu4->term_id, ));
    endif;


    // Assign front page
    update_option( 'show_on_front', 'page' );
    $front_page_id1 = get_page_by_title( 'Home - '.$demo_name );
    $front_page_id2 = get_page_by_title( 'Home '.$demo_name );
    $front_page_id3 = get_page_by_title( 'Home Basic' );
    $front_page_id4 = get_page_by_title( 'Your ocean of posts' );
    $front_page_id5 = get_page_by_title( 'Home' );
    if( isset( $front_page_id1->ID ) && $front_page_id1->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id1->ID );
    elseif( isset( $front_page_id2->ID ) && $front_page_id2->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id2->ID );
    elseif( isset( $front_page_id3->ID ) && $front_page_id3->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id3->ID );
    elseif( isset( $front_page_id4->ID ) && $front_page_id4->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id4->ID );
    elseif( isset( $front_page_id5->ID ) && $front_page_id5->ID > 0 ) :
        update_option( 'page_on_front', $front_page_id5->ID );
    endif;


    // Reset theme settings
    $upload_dir = wp_upload_dir();
    if( isset( $upload_dir['basedir'] ) ) :
        $file_path  = $upload_dir['basedir'] . '/jevelin-dynamic-styles.css';
        if( function_exists( 'wp_delete_file' ) ) :
            wp_delete_file( $file_path );
        endif;
    endif;
    delete_option( 'jevelin_settings_updated' );


    // fix onepager links
    $theme_urls = array(
        'https://cdn.jevelin.shufflehound.com/creative-vc/',
    );

    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object( $locations[ 'header' ] );
    $menuitems = wp_get_nav_menu_items( $menu->term_id );
    foreach( $menuitems as $item ) :

        $i = 0;
        foreach( $theme_urls as $url ) :
            if( $i == 0 && strpos( $item->url, $url ) !== false ) :
                update_post_meta(
                    $item->ID,
                    '_menu_item_url',
                    str_replace( $url, get_home_url().'/', $item->url )
                );

                $i++;
            endif;
        endforeach;

    endforeach;


}
add_action( 'pt-ocdi/after_import', 'jevelin_ocdi_after_import_setup' );
//var_dump( get_registered_nav_menus() );

/**
 * OCDI Demo Installation Method - Integration for Custom Frameworks and RevSlider
 */
if ( ! function_exists( 'jevelin_prefix_after_content_import_execution' ) ) {
  function jevelin_prefix_after_content_import_execution( $selected_import_files, $import_files, $selected_index ) {

    $downloader = new OCDI\Downloader();
    /* Custom Framework */
    if( ! empty( $import_files[$selected_index]['import_json'] ) ) {

      foreach( $import_files[$selected_index]['import_json'] as $index => $import ) {
        $file_path = $downloader->download_file( $import['file_url'], 'demo-json-import-file-'. $index . '-'. date( 'Y-m-d__H-i-s' ) .'.json' );
        $file_raw  = OCDI\Helpers::data_from_file( $file_path );
    	$media = wp_upload_dir();
    	if( isset( $media['baseurl'] ) ) :
    		$url = $media['baseurl'];
    		$url = str_replace('/', '\/', $url);
    		$url = str_replace('http:', '', $url);
            $url = str_replace('https:', '', $url);
    		$file_raw = str_replace( '[SH-JEVELIN-DOMAIN-MEDIA]', $url, $file_raw );
    		$file_raw = str_replace( '[SH-JEVELIN-DOMAIN]', get_site_url(), $file_raw );
    	endif;

        update_option( $import['option_name'], json_decode( $file_raw, true ) );
      }

    } else if( ! empty( $import_files[$selected_index]['local_import_json'] ) ) {

      foreach( $import_files[$selected_index]['local_import_json'] as $index => $import ) {
        $file_path = $import['file_path'];
        $file_raw  = OCDI\Helpers::data_from_file( $file_path );
        update_option( $import['option_name'], json_decode( $file_raw, true ) );
      }

    }

    $ocdi       = OCDI\OneClickDemoImport::get_instance();
    $log_path   = $ocdi->get_log_file_path();
    OCDI\Helpers::append_to_file( 'Custom Framework file loaded.', $log_path );


    /* Revolution Slider */
    if ( class_exists( 'RevSlider' ) ) :
        if( !empty( $import_files[$selected_index]['import_revslider'] ) ) :
            $slider = new RevSlider();
            foreach( $import_files[$selected_index]['import_revslider'] as $index => $import ) :
                $file_path = $downloader->download_file( $import['file_url'], 'demo-revslider-import-file-'. $index . '-'. date( 'Y-m-d__H-i-s' ) .'.zip' );
                $slider->importSliderFromPost( true, true, $file_path );
            endforeach;
        endif;
   endif;

  }
  add_action('pt-ocdi/after_content_import_execution', 'jevelin_prefix_after_content_import_execution', 3, 99 );
}
