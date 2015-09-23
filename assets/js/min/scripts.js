// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).ready(function($) {
	
		$(document).foundation();
		// $(document).foundation( 'topbar', 'reflow' );

		$( 'body' ).fadeIn(700);   

/**
*
* iSotope Code
*
**/

		
		var $container = $('.portfolio-container').isotope( 
				{ 
					itemSelector: '.grid-item',
					percentPosition: true,
					layoutMode: 'masonry',
					animationOptions: {
		                duration: 1750,
		                easing: 'linear',
		                queue: false
		            }

		} );

		$container.imagesLoaded().progress( function() { 

			$container.isotope( 'layout' );
		});


		$('.portfolio-filter dd:first-child').addClass('active');

		$('.portfolio-filter').on( 'click', 'a', function(e) {

			e.preventDefault();
			var $this = $(this);
			var $nav = $('.sub-nav');

			var $active = $nav.find('.active');
			$active.removeClass('active');

			$this.parent().addClass('active');

			var filterValue = $(this).attr('data-filter');

			$container.isotope( { 

				filter: filterValue,
				animationOptions: {
	                duration: 1750,
	                easing: 'linear',
	                queue: false
	            } 


			});
		});

	/**
	 *
	 * Stellar js
	 *
	 */
	$.stellar();

			
});






























