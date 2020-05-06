(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
        
        $('.main-nav__mobile-icon').on('click', function(){
            $('.main-nav__menu').slideToggle('slow');
            $('.main-nav__social').slideToggle('slow');  
        });
        
        //animations on scroll
        
        $('.wp-contracting').waypoint(function(direction){
          console.log('waypoint reached.');

          $('.wp-contracting').addClass('e-scale-up-center');

        }, {
          offset:'70%'
        });

        // Front Page Allabout Waypoint


        $('.wp-allabout').waypoint(function(direction){
            console.log('allabout reached.');

        $('.wp-allabout').addClass('e-fade-in-back');

        }, {
            offset:'60%'
        });

        // Front Page Portfolio Waypoint
        
        $('.wp-fp-port').waypoint(function(direction){
            console.log('port reached.');

        $('.wp-fp-port').addClass('e-fade-in-back');

        }, {
            offset:'60%'
        });

        // Front Page Bio Waypoint

        $('.wp-fp-bio').waypoint(function(direction){
            console.log('bio reached.');

        $('.wp-fp-bio').addClass('e-fade-in-back');

        }, {
            offset:'60%'
        });

	});
    	
})(jQuery, this);