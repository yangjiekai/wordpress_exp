<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * Shufflehound - Dashboard functions
 */
if( is_admin() && function_exists( 'shufflehound_theme' ) && in_array( shufflehound_theme(), array( 'jevelin', 'jevelin' ) ) ) :
    add_action( 'admin_menu', 'shufflehound_panel' );
    function shufflehound_panel() {
    	add_menu_page( shufflehound_theme( 1 ).' - Dashboard', shufflehound_theme( 1 ), 'manage_options', 'shufflehound_dashboard', 'shufflehound_dashboard_page', get_template_directory_uri().'/inc/core/assets/'.shufflehound_theme().'.png', 2  );
    	add_submenu_page( 'shufflehound_dashboard', shufflehound_theme( 1 ).' - Dashboard', 'Dashboard ', 'manage_options', 'shufflehound_dashboard', 'shufflehound_dashboard_page' );
        add_submenu_page( 'shufflehound_dashboard', shufflehound_theme( 1 ).' - Theme Settings', 'Theme Settings', 'manage_options', 'themes.php?page=fw-settings' );
        add_submenu_page( 'shufflehound_dashboard', shufflehound_theme( 1 ).' - Install Demo', 'One Click Install', 'manage_options', 'themes.php?page=pt-one-click-demo-import' );
        add_submenu_page( 'shufflehound_dashboard', shufflehound_theme( 1 ).' - Documentation', 'Documentation', 'manage_options', 'shufflehound_documentation', 'shufflehound_documentation_page' );
        add_submenu_page( 'shufflehound_dashboard', shufflehound_theme( 1 ).' - Support Center', 'Support Center', 'manage_options', 'shufflehound_support', 'shufflehound_support_page' );
    }


    function shufflehound_dashboard_page() {
        $theme = wp_get_theme();
        $theme_version = ( $theme->Version ) ? $theme->Version : '';
    ?>
    	<div class="wrap shufflehound-content">
    		<h2 style="padding: 0;"></h2>

            <div class="shufflehound-dashboard-title">
                <h3>Welcome to <?php echo shufflehound_theme( 1 ); ?></h3>
                <p>Theme by Shufflehound</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="shufflehound-dashboard-item">
                        <div class="shufflehound-dashboard-item-icon">
                            <i class="icon-question"></i>
                        </div>
                        <a href="<?php echo admin_url( 'admin.php?page=shufflehound_documentation' ); ?>" class="shufflehound-dashboard-item-content">
                            <h3>Documentation</h3>
                            <p>Explore theme documentation to learn how to use this theme</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shufflehound-dashboard-item">
                        <div class="shufflehound-dashboard-item-icon">
                            <i class="icon-bubble"></i>
                        </div>
                        <a href="<?php echo admin_url( 'admin.php?page=shufflehound_support' ); ?>" class="shufflehound-dashboard-item-content">
                            <h3>Support Center</h3>
                            <p>Get help in our support center from our tech team</p>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shufflehound-dashboard-item">
                        <div class="shufflehound-dashboard-item-icon">
                            <i class="icon-settings"></i>
                        </div>
                        <a href="<?php echo admin_url( 'themes.php?page=fw-settings' ); ?>" class="shufflehound-dashboard-item-content">
                            <h3>Theme Settings</h3>
                            <p>Customize theme colors, sizes, paddings and much more</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="shufflehound-dashboard-title">
                        <h3>Performance</h3>
                        <p>Follow our performance guidence to improve your website loading speed</p>
                    </div>
                    <div class="shufflehound-dashboard-list">
                        <?php
                            /* PHP */
                            if( defined('PHP_VERSION') ) :
                                $php_status = 0;
                                // (see <a href="https://kinsta.com/blog/php-7-hhvm-benchmarks/" target="_blank">performance differences between PHP versions</a>)
                                if( version_compare(PHP_VERSION, '7.0.0') <= 0 ) :
                                    $php_description = 'Upgrade to version 7.X and improve loading time by up to <strong>100%</strong>';
                                    $php_icon = 'icon-close';
                                    $php_status = 1;
                                elseif( version_compare(PHP_VERSION, '7.1.0') <= 0 ) :
                                    $php_description = 'Upgrade to version 7.2 and improve loading time by up to <strong>20%</strong>';
                                    $php_icon = 'icon-check';
                                elseif( version_compare(PHP_VERSION, '7.2.0') <= 0 ) :
                                    $php_description = 'Upgrade to version 7.2 and improve loading time by up to <strong>10%</strong>';
                                    $php_icon = 'icon-check';
                                else:
                                    $php_description = 'Great, you are using recent PHP version';
                                    $php_icon = 'icon-check';
                                endif;
                                shufflehound_dashboard_performance(
                                    'PHP Version - '.PHP_VERSION,
                                    $php_description,
                                    $php_icon,
                                    $php_status
                                );
                            endif;


                            /* Opcache */
                            $opcache_status = 0;
                            $opcache_description = 'Great, Opcache extension is enabled';
                            if( function_exists( 'opcache_get_status' ) ) :
                                $opcache = opcache_get_status( 0 );
                                if( isset( $opcache['opcache_enabled'] ) && $opcache['opcache_enabled'] == false ) :
                                    $opcache_status++;
                                    $opcache_description = 'Enable this extension to improve loading time by up to <strong>50%</strong>';
                                endif;
                            endif;
                            $opcache_status_val = ( $opcache_status == 0 ) ? 'Enabled' : 'Disabled';
                            shufflehound_dashboard_performance(
                                'PHP Extension Opcache - '.$opcache_status_val,
                                $opcache_description,
                                'icon-check',
                                $opcache_status
                            );


                            /* Cache */
                            shufflehound_dashboard_performance(
                                'Install Caching Plugin',
                                'WordPress caching plugins like WP Super Cache can improve loading time a lot',
                                'icon-info',
                                false
                            );


                            /* CSS/JS Minify  */
                            shufflehound_dashboard_performance(
                                'Install CSS/JS Minify Plugin',
                                'WordPress have a lot of CSS/JS files, which can be minified with plugin like <a href="https://wordpress.org/plugins/autoptimize/ target="_blank"">Autoptimize</a>, which improves loading time',
                                'icon-info',
                                false
                            );


                            /* Remove Unused Plugins */
                            shufflehound_dashboard_performance(
                                'Disable Unused Plugins',
                                'Each plugin reduces loading speed, therefore it is recommended to activate as little plugins as possible',
                                'icon-info',
                                false
                            );
                        ?>
                    </div>

                    <div class="shufflehound-dashboard-title" style="margin-top: 45px;">
                        <h3>Technical Information</h3>
                        <p>Copy this information when creating a topic in our support forum to shorten resolving time</p>
                    </div>
                    <div class="shufflehound-dashboard-item shufflehound-dashboard-item-data">
                        <p>
                            Theme: <strong><?php echo shufflehound_theme( 1 ); ?></strong><br />
                            Theme Version: <strong><?php echo $theme_version; ?></strong><br />
                            WordPress: <strong><?php echo get_bloginfo('version'); ?></strong><br />
                            PHP: <strong><?php echo ( defined('PHP_VERSION') ) ? PHP_VERSION : ''; ?></strong>
                        </p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="shufflehound-dashboard-title">
                        <h3>What's New</h3>
                        <p>Copy this information when creating a topic in our support forum to shorten resolving time</p>
                    </div>
                    <div class="shufflehound-dashboard-item shufflehound-dashboard-item-data" style="overflow-y: auto; max-height: 355px;">
                        <p style="margin-top: 0;">
                            <?php
                            	$changelog = file_get_contents( get_template_directory().'/changelog.txt' );
                                if( $changelog == true ) :
                                	preg_match("/(?<=Version ".$theme_version.").*?(?=Version)/s", $changelog, $changelog_result);

                                    if( isset( $changelog_result[0] ) ) :
                                        $changelog_result[0] = preg_replace('/^\h*\v+/m', '', $changelog_result[0]);
                            			echo '<strong>Version '.$theme_version.'</strong><br>'.nl2br( $changelog_result[0] );
                            		endif;
                                    unset( $changelog );
                                    unset( $changelog_result );
                                endif;
                            ?>
                        </p>
                    </div>



                </div>
            </div>

    	</div>
    <?php }


    function shufflehound_dashboard_performance( $title, $description, $icon, $status = false ) { ?>
        <div class="shufflehound-dashboard-list-item<?php echo ( $status ) ? ' shufflehound-dashboard-list-item-outdated' : ''; ?>">
            <div class="shufflehound-dashboard-item-icon">
                <i class="<?php echo ( $icon ); ?>"></i>
            </div>
            <div class="shufflehound-dashboard-item-content">
                <h3><?php echo esc_attr( $title ); ?></h3>
                <p><?php echo ( $description ); ?></p>
            </div>
        </div>
    <?php }

    function shufflehound_documentation_page() {
        if( shufflehound_theme() == 'gillion' ) :
            $link = '//support.shufflehound.com/documentation/gillion/?source=theme&version=1';
        else :
            $link = '//support.shufflehound.com/documentation/jevelin/?source=theme&version=2';
        endif; ?>
        <iframe class="shufflehound-live-window" src="<?php echo esc_url( $link ); ?>" frameborder="0"></iframe>
        <style>.shufflehound-live-window { width: 100%; min-height: 300px; margin-left: -10px; margin-top: 10px; }</style>
        <script>jQuery(function($){ $('.shufflehound-live-window').height( $(window).height() - 42 ); });</script>
    <?php }

    function shufflehound_support_page() {
        $link = '//support.shufflehound.com/'; ?>
        <iframe class="shufflehound-live-window" src="<?php echo esc_url( $link ); ?>" frameborder="0"></iframe>
        <style>.shufflehound-live-window { width: 100%; min-height: 300px; margin-left: -10px; margin-top: 10px; }</style>
        <script>jQuery(function($){ $('.shufflehound-live-window').height( $(window).height() - 42 ); });</script>
    <?php }
endif;
