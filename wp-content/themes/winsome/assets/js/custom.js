( function( $ ) {

	$(document).ready(function($){
		
		$('#main-nav').meanmenu({
			meanScreenWidth: "1050",
		});

		$("#home-page-widget-area .pt-testimonial-item-wrap").owlCarousel({
			dots: true,
			items: 1,
			loop:true,   
			autoplay:true,
		});

	    //Main slider
	    var main_items = $('#main-slider .item');
	    if( main_items.length > 1 ) {
		    $('#main-slider').owlCarousel({
		    	loop:true,
		    	items: 1,   
		    	nav:true,
		    	navText: [ '', '' ],
		    	autoplay:true,
		    	animateOut: 'fadeOut',
		    	dots: true,
		    });
		}else {
	        $('#main-slider').owlCarousel({
				loop:false,
				items: 1,   
				nav: false,
				navText: [ '', '' ],
				autoplay: false,
				animateOut: 'fadeOut',
				dots: false,
	        });
		}

		//Client slider
		$('.pt-clients-wrap').owlCarousel({
			items: 4,   
			nav:false,
			autoplay:true,
			dots: true,
		    loop:true,
		    margin:5,
		    responsive:{
		    	0:{
		            items:1,
		            margin:0,
		        },
		        479:{
		            items:1,
		            margin:0,
		        },
		        551:{
		            items:2
		        },
		        768:{
		            items:3
		        },
		        1024:{
		            items:4
		        }
		    }
		});

	    //header sticky
		$(window).scroll(function() {
		    if ($("header").offset().top > 50) {
		    	$("#masthead").addClass("header-collapse");
		    } else {
		    	$("#masthead").removeClass("header-collapse");
		    }
		});

		//counters
	    $('.count').counterUp({
	        delay: 10,
	        time: 4000
	    });

	    headerHeight = $("#masthead").height();

	    $('.slider-cta a, .winsome_widget_call_to_action a.cta-button').on('click', function(event) {
	        var target = $(this.getAttribute('href'));
	        if( target.length ) {
	            event.preventDefault();
	            $('html, body').stop().animate({
	                scrollTop: target.offset().top - headerHeight - 60
	            }, 1000);
	        }
	    });

	    $('.home #site-navigation li a[href*="#"]').click(function(event){
            event.preventDefault();
            scrollSmooth( jQuery( this.hash ) );
	    });

        jQuery(window).load(function(){
            var currentUrl = location.hash;
            if ( jQuery( currentUrl ).length > 0 ) {
                scrollSmooth( currentUrl );
            }
        });

		// Go to top.
		var $scroll_obj = $( '#btn-scrollup' );
		$( window ).scroll(function(){
			if ( $( this ).scrollTop() > 100 ) {
				$scroll_obj.fadeIn();
			} else {
				$scroll_obj.fadeOut();
			}
		});

		$scroll_obj.click(function(){
			$( 'html, body' ).animate( { scrollTop: 0 }, 600 );
			return false;
		});

	});

} )( jQuery );


// For animated smooth scroll to section
function scrollSmooth( element ) {

    var headerHeight = jQuery("#masthead").height();

    if ( element.length <= 0 ) {
        return false;
    }
    jQuery("html, body").animate({
        scrollTop: ( jQuery( element ).offset().top - headerHeight - 60) + "px"
    }, {
        duration: 1000,
        easing: "swing"
    });
}