jQuery( document ).ready(function( $ ) {

    if ( $.cookie( "sh-theme-options" ) ) {
        //console.log( $.cookie( "sh-theme-options" ) );
        if( $(".nav-tab[href='"+ $.cookie( "sh-theme-options" ) +"']").length ) {
            $(".nav-tab[href='"+ $.cookie( "sh-theme-options" ) +"']")[0].click();
            setTimeout(function() {
                window.scrollTo(0, 0);
            }, 1);
        } else {
            $.cookie( "sh-theme-options", '' );
        }
    }

    $(".nav-tab.fw-wp-link").on( "click", function() {
        $.cookie( "sh-theme-options", $(this).attr("href") );
    });

});
