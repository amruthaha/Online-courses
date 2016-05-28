/**	
	* Template Name: MU Material
	* Version: 1.0	
	* Template Scripts
	* Author: MarkUps
	* Author URI: http://www.markups.io/

	Custom JS
	
	1. MOBILE MENU
	2. EXPERIENCE SLIDER (Owl Carousel)
	3. EDUCATION SLIDER (Owl Carousel)
	4. PORTFOLIO SLIDER
	5. COUNTER
	6. TESTIMONIAL SLIDER (Owl Carousel)	
	7. MENU SMOOTH SCROLLING
	8. PRELOADER
	9. CALL TO ABOUT
	10. BOTTOM TO UP 
	11. PARALLAX HEADER
	12. HIRE ME SCROLL
	
	
**/

jQuery(function($){


	/* ----------------------------------------------------------- */
	/*  1. Mobile MENU
	/* ----------------------------------------------------------- */

    //Query(".button-collapse").sideNav();
    
	/* ----------------------------------------------------------- */
	/*  2. Experience SLider(Owl Carousel)
	/* ----------------------------------------------------------- */

	var owl = $("#owl-carousel"); 
    owl.owlCarousel({
        items : 4, //4 items above 1024px browser width
        itemsDesktop : [1024,3], //3 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,1], //1 items between 600 and 0
        itemsMobile : 1 // itemsMobile disabled - inherit from itemsTablet option
    });
    // 


    /* ----------------------------------------------------------- */
	/*  3. EDUCATION SLIDER (Owl Carousel)
	/* ----------------------------------------------------------- */

	var owl1 = $("#owl-carousel1"); 
	owl1.owlCarousel({
	    items : 4, //4 items above 1024px browser width
	    itemsDesktop : [1024,3], //3 items between 1024px and 901px
	    itemsDesktopSmall : [900,2], // betweem 900px and 601px
	    itemsTablet: [600,1], //1 items between 600 and 0
	    itemsMobile : 1 // itemsMobile disabled - inherit from itemsTablet option
	});
	// 
	
    /* ----------------------------------------------------------- */
	/*  4. PORTFOLIO SLIDER
	/* ----------------------------------------------------------- */

	//jQuery('#portfolio-list').mixItUp();	

	/* ----------------------------------------------------------- */
	/*  5. COUNTER
	/* ----------------------------------------------------------- */

	 

	/* ----------------------------------------------------------- */
	/*  6. TESTIMONIAL SLIDER (Owl Carousel)
	/* ----------------------------------------------------------- */

	var owl2 = $("#owl-carousel2"); 
    owl2.owlCarousel({
        items : 2, //4 items above 1024px browser width
        itemsDesktop : [1024,2], //3 items between 1024px and 901px
        itemsDesktopSmall : [900,2], // betweem 900px and 601px
        itemsTablet: [600,1], //1 items between 600 and 0
        itemsMobile : 1 // itemsMobile disabled - inherit from itemsTablet option
    });

	 

	/* ----------------------------------------------------------- */
	/*  7. MENU SMOOTH SCROLLING
	/* ----------------------------------------------------------- */ 
	
	//MENU SCROLLING WITH ACTIVE ITEM SELECTED

	// Cache selectors
	// Bind click handler to menu items
	// so we can get a fancy scroll animation
	/* ----------------------------------------------------------- */
	/*  8. PRELOADER 
	/* ----------------------------------------------------------- */ 

	// jQuery(window).load(function() { // makes sure the whole site is loaded
 //      $('.progress').fadeOut(); // will first fade out the loading animation
 //      $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website.
 //      $('body').delay(100).css({'overflow':'visible'});
 //    })
	  
	/* ----------------------------------------------------------- */
	/* 9. CALL TO ABOUT
	/* ----------------------------------------------------------- */ 
	
	
});
