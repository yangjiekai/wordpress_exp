<?php $thumb_size = ( did_action( 'get_footer' ) ) ? 'small' : $size; ?>
<li class="<?php echo esc_attr( $liclass ); ?>">

    <div class="sh-ratio null-instagram-feed-item">
        <div class="sh-ratio-container sh-ratio-container-square">
            <div class="sh-ratio-content" style="background-image: url( <?php echo esc_url( $item[$thumb_size] ); ?> );">

                <div class="sh-overlay-style1">
                    <div class="sh-table-full">
                        <a href="<?php echo esc_url( $item['link'] ); ?>" target="<?php echo esc_attr( $target ); ?>" class="<?php echo esc_attr( $aclass ); ?> sh-overlay-item sh-table-cell">
                            <div class="sh-overlay-item-container">
                                <i class="icon-link"></i>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</li>
