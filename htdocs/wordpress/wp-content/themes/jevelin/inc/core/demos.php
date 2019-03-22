<?php
if ( ! function_exists( 'shufflehound_unyson_demo_notice' ) ) :
function shufflehound_unyson_demo_notice() { ?>

    <div class="shufflehound-notice">
    	<i class="dashicons-before dashicons-warning"></i>
    	<span><?php esc_html_e('Demo installation method deprecased', 'jevelin') ?></span>
    	<p><?php esc_html_e('Use only if method under "Appearance > Import Demo Data" is not installing demos correctly. Deprecased due to compatibility/installation issues with various website hostings', 'jevelin') ?></p>
    </div>

    <div class="shufflehound-notice" style="margin-bottom: 30px;">
    	<i class="dashicons-before dashicons-warning"></i>
    	<span><?php esc_html_e( 'This method will replace all your current website content', 'jevelin' ) ?></span>
    	<p><?php esc_html_e( 'Please create current website content backup before installing it', 'jevelin' ) ?></p>
    </div>

<?php }
endif;
