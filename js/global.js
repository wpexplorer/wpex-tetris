( function( $ ) {

	'use strict';
	
	$(document).ready(function() {

		//animate comments scroll
		$( '.comment-scroll a' ).click(function(event){
			event.preventDefault();
			$( 'html,body' ).animate({ scrollTop:$(this.hash).offset().top}, 'normal' );
		} );

		//superFish
		$( 'ul.sf-menu' ).superfish({
			delay       : 200,
			autoArrows  : false,
			dropShadows : false,
			animation   : {
				opacity :'show',
				height  :'show'
			},
			speed       : 'fast'
		} );

		// Pretty Photo
		if ( $(window).width() > 767 ) {
			$( ".prettyphoto-link" ).prettyPhoto({
				show_title         : false,
				social_tools       : false,
				slideshow          : false,
				autoplay_slideshow : false,
				wmode              : 'opaque'
			} );
			$( "a[rel^='prettyPhoto']" ).prettyPhoto({
				show_title         : false,
				social_tools       : false,
				autoplay_slideshow : false,
				overlay_gallery    : true,
				wmode              : 'opaque'
				
			} );
		}

		// Mobile Menu
		$( '#navigation .sf-menu' ).slicknav( {
			appendTo         : '#header',
			label            : wpexvars.mobileMenuLabel,
			allowParentLinks : true
		} );

		// Fitvids
		$( '.fitvids' ).fitVids();

		// Masonry Layout
		function wpex_isotope() {
			var $container = $( '.blog-isotope' );
			$container.imagesLoaded(function(){
				$container.isotope({
					itemSelector      : '.blog-entry',
					transformsEnabled : false,
					animationOptions  : {
						duration : 400,
						easing   : 'swing',
						queue    : false
					}
				} );
			} );
		} wpex_isotope();

		$( window ).resize(function () {
			wpex_isotope();
		} );

		// Slider
		$( '#single-post-slider' ).imagesLoaded( function() {
			$( '#single-post-slider' ).flexslider( {
				animation    : 'slide',
				slideshow    : true,
				controlNav   : false,
				prevText     : '',
				nextText     : '',
				smoothHeight : true,
				start        : function(slider) {
					slider.container.click(function(e) {
						if ( ! slider.animating ) {
							slider.flexAnimate( slider.getTarget('next') );
						}
					
					} );
				}
			} );
		} );

	} );

} ) ( jQuery );