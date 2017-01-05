var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
if(w >= 500){
    $(document).ready(function() {
        /* Every time the window is scrolled ... */
        $(window).scroll( function(){

            /* Check the location of each desired element */
            $('.fades').each( function(i){

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                bottom_of_window = bottom_of_window + 50;
                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({'opacity':'1'},700);
                }

            });
            $('.secondfade').each( function(i){

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                bottom_of_window = bottom_of_window + 50;
                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({
                        'opacity':'1',
                        'left': '0px'
                    },700);

                }

            });
            $('.fadesleft').each( function(i){

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                bottom_of_window = bottom_of_window + 50;
                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({
                        'opacity':'1',
                        'left': '0px'
                    },500);

                }

            });
            $('.fadesright').each( function(i){

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                bottom_of_window = bottom_of_window + 50;
                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({
                        'opacity':'1',
                        'right': '0px'
                    },500);

                }

            });
        });
    });
}
