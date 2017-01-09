(function($) {

	$("#gototop").click(function(){ "use strict";
		$("html,body").animate({scrollTop:0},800);
		return false;
	});

	$(".post").fitVids();

	$(window).load(function(){
		$('#featured-slider').removeClass('loading');

		$('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: true,
            itemWidth: 150,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: true,
            sync: "#carousel"
        });
    });


    $('.result-item').on('click', function(){
        $(this).find('.result-details').slideToggle();
    }).on('mouseleave', function(){
        //$(this).find('.result-details').slideUp();
    });

    $( '.vertical-middle' ).each(function( e ) {
        $(this).css('margin-top',  ($('#header').height() - $(this).height())/2);
    });

    $(window).resize(function(){
        $( '.vertical-middle' ).each(function( e ) {
            $(this).css('margin-top',  ($('#header').height() - $(this).height())/2);
        });
    });

    
})(jQuery);