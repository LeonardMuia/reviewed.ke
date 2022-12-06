/****************************/
/*         INDEX            */
/*===========================
 *     01.  Loader          *
 *     03.  Back to top     *
 ===========================*/

 ! function($) {
    "use strict"; 
    // Loader 
    $(window).on('load', function() {
        $('#status').fadeOut();
        $('#preloader').delay(350).fadeOut('slow');
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    }); 

    // Back to top
    // $(window).scroll(function(){
    //     if ($(this).scrollTop() > 100) {
    //         $('.back-to-top').fadeIn();
    //     } else {
    //         $('.back-to-top').fadeOut();
    //     }
    // }); 
    // $('.back-to-top').click(function(){
    //     $("html, body").animate({ scrollTop: 0 }, 3000);
    //     return false;
    // }); 

    //Tooltip
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    //Popover
    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    //Feather icon
    // feather.replace()
}(jQuery)