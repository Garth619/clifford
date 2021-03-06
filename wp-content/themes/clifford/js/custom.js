// @codekit-prepend 'waypoints.js'
// @codekit-prepend 'slick.js'
// @codekit-prepend 'lity.js'
// @codekit-prepend 'modernizr-webp.js'

jQuery(document).ready(function($){
	
		

	
	 /* Modernizr - check if browser supports webp. 
     --------------------------------------------------------------------------------------- */
    
    // add data-webp and data-jpg to images in section one and you're gucci
    
    
     Modernizr.on('webp', function (result) {
	    
	    jQuery('#section_one img').each(function () {
	    
				if (result) {
    
					if (jQuery(this).attr('data-webp')) {
          
          	var img = jQuery(this).data('webp');
          
						jQuery(this).attr('src', img);
        	
        	}
      
   			}
  
	 			else {
		 			
		 			if (jQuery(this).attr('data-jpg')) {
          
          	var img = jQuery(this).data('jpg');
          
						jQuery(this).attr('src', img);
        	
        	}
    
    		
  	
  			}
  		
  		});
  		
  		console.log(result);
	
		});





    /* Waypoints
     --------------------------------------------------------------------------------------- */


    function createWaypoint(triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
      if(jQuery('#' + triggerElementId).length) {
        var waypoint = new Waypoint({
          element: document.getElementById(triggerElementId),
          handler: function (direction) {
            if (direction === 'down') {
              jQuery(animatedElement).addClass(className);

              if (typeof functionName === 'function') {
                functionName();
                this.destroy();
              }

            } else if (direction === 'up') {
              if (reverse) {
                jQuery(animatedElement).removeClass(className);
              }

            }
          },
          offset: offsetVal
          // Integer or percent
          // 500 means when element is 500px from the top of the page, the event triggers
          // 50% means when element is 50% from the top of the page, the event triggers
        });
      }
    }


    createWaypoint('section_one', 'header', 'visible', -80, null, true);
    
    createWaypoint('section_three', '#section_three', 'visible', 280, null, false);
    
    createWaypoint('sec_three_press_trigger', '.sec_three_press', 'visible', 580, null, false);
     
    createWaypoint('section_four', '#section_four', 'visible', 280, null, false);
    
    createWaypoint('sec_four_left_trigger', '#sec_four_left_trigger', 'visible', 380, null, false);
    
    createWaypoint('section_five', '#section_five', 'visible', 280, null, false);
    
    createWaypoint('sec_five_slider_trigger', '#sec_five_slider_trigger', 'visible', 550, null, false);
    
    createWaypoint('about_page_rewards_trigger', '#about_page_rewards_trigger', 'visible', 200, null, false);
    
    createWaypoint('footer_right_trigger', '#footer_right_trigger', 'visible', 200, null, false);
    

    
    // load section one animation
    
    
    
    $('#section_one, #internal_main').addClass('visible');
    
    
   



    /* Smooth Scroll down to section on click (<a href="#id_of_section_to_be_scrolled_to">)
      --------------------------------------------------------------------------------------- */

    jQuery(function() {
      jQuery('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = jQuery(this.hash);
          target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            jQuery('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });

		
		
		 /* Wistia - Call function when script needs to be loaded either by hover or waypoints
     --------------------------------------------------------------------------------------- */

    function wistiaLoad() {
      jQuery.getScript('https://fast.wistia.com/assets/external/E-v1.js', function(data, textStatus, jqxhr) {
        console.log('wistia load:', textStatus); // Success
      });
    }

    // examples:

    // jQuery(".banner-box-1").one("mouseenter", function(e){
    //   wistiaLoad();
    // });

    // createWaypoint('section-1', null, null, '100%', wistiaLoad, false)







    /* Load Images - Call function when you reach the a section with images using waypoints
       BG image - <div data-src=""></div>   ,   Image - <img data-src="">
      --------------------------------------------------------------------------------------- */

    function loadImages() {
      
      // images
      
      jQuery('img').each(function () {
        
        if (jQuery(this).attr('data-src')) {
          
          var img = jQuery(this).data('src');
          
          jQuery(this).attr('src', img);
        
        }
      
      });

      // background images
      
      jQuery('div, section').each(function () {
       
        if (jQuery(this).attr('data-src')) {
          
          var backgroundImg = jQuery(this).data('src');
          
          jQuery(this).css('background-image', 'url(' + backgroundImg + ')');
        
        }
      
      });

      console.log('data-src images loaded');
    }

    createWaypoint('section_two', null, null, '100%', loadImages, false);
    
    createWaypoint('internal_main', null, null, '100%', loadImages, false);
    
    



/* Slick Carousel ( http://kenwheeler.github.io/slick/ )
--------------------------------------------------------------------------------------- */



$('.sp_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
  autoplay: true,
  autoplaySpeed: 2000,
	mobileFirst:true,
	responsive: [
    {
      breakpoint: 1066,
      settings:"unslick",
     }
		]
 });
 
 
 
 $('.cr_slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
	arrows:false,
	dots:false,
	responsive: [
    {
      breakpoint: 1640,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
      }
     },
     {
      breakpoint: 1150,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
      }
     },
     {
      breakpoint: 1066,
      settings:{
	      slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
     {
      breakpoint: 767,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
		]
 });
 
 
 
 
 
 $('.press_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	dots:false,
	prevArrow:'.press_left',
	nextArrow:'.press_right',
	responsive: [
    {
      breakpoint: 1640,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
      }
     },
     {
      breakpoint: 1150,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
      }
     },
     {
      breakpoint: 1066,
      settings:{
	      slidesToShow: 2,
        slidesToScroll: 2,
      }
     },
     {
      breakpoint: 767,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
      }
     }
		]
 });
 
 
 
 $('.test_slider').slick({
  infinite: true,
  slidesToShow: 2,
  slidesToScroll: 2,
	arrows:false,
	dots:false,
	slides:'.test_single_slide',
	responsive: [
    {
      breakpoint: 1670,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
      }
     },
     {
      breakpoint: 767,
      settings:{
	      adaptiveHeight: true,
	      slidesToShow: 1,
        slidesToScroll: 1,
         dots:true,
      }
     }
    
		]
 });
 
 
 
 
 $('.sec_five_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	dots:false,
	prevArrow:'.sec_five_left',
	nextArrow:'.sec_five_right',
	responsive: [
    {
      breakpoint: 1780,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
        dots:true,
      }
     },
     {
      breakpoint: 1450,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
      }
     },
     {
      breakpoint: 1200,
      settings:{
	      slidesToShow: 2,
        slidesToScroll: 2,
        dots:true,
      }
     },
     {
      breakpoint: 767,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
        dots:true,
        arrows:false
      }
     }
    
		]
 });




$('.att_bio_awards').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
	fade:true,
 });
 
 
 $('.att_video_slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	arrows:false,
	dots:true,
	fade:true,
 });
 
 
 
 $('.posts_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	dots:false,
	prevArrow:'.posts_left',
	nextArrow:'.posts_right',
	responsive: [
    {
      breakpoint: 1780,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
      }
     },
     {
      breakpoint: 1390,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
      }
     },
     {
      breakpoint: 1230,
      settings:{
	      slidesToShow: 5,
        slidesToScroll: 5,
       
      }
     },
     {
      breakpoint: 972,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
        
      }
     },
     {
      breakpoint: 841,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
        
      }
     },
     {
      breakpoint: 670,
      settings:{
	      slidesToShow: 2,
        slidesToScroll: 2,
        
      }
     },
     {
      breakpoint: 520,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
        
      }
     }
    ]
 });
 
 
 $('.ap_slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 5,
	arrows:true,
	dots:false,
	prevArrow:'.ap_buttton_left',
	nextArrow:'.ap_buttton_right',
	responsive: [
    {
      breakpoint: 1780,
      settings:{
	      slidesToShow: 4,
        slidesToScroll: 4,
      }
     },
     {
      breakpoint: 1526,
      settings:{
	      slidesToShow: 3,
        slidesToScroll: 3,
      }
     },
     {
      breakpoint: 1230,
      settings:{
	      slidesToShow: 2,
        slidesToScroll: 2,
       
      }
     },
     {
      breakpoint: 896,
      settings:{
	      slidesToShow: 1,
        slidesToScroll: 1,
        
      }
     }
    ]
 });


 

 // sidebar 
 
 
 $('.pa_sidebar ul.menu > li > a').on('click', function(e) {
   
   $(this).next('ul.sub-menu').slideToggle(400);
   
   $(this).parent().toggleClass('open');
   
 });
 
 
 // pa directory
 
  $('.pa_directory ul.menu > li > a').wrapInner('<span class="flex_wrap"></span>');
 
	$('.pa_directory span.flex_wrap').after('<span class="pa_line"></span>');
	
	
	// attorney slidetoggle
	
	
	$('.att_slidetoggle ul.slidetoggle_list > li.title > a').on('click', function(e) {
		
		$(this).next('.sub_list').slideToggle(300);
		
		$(".att_slidetoggle ul.slidetoggle_list > li.title > a[href='#']").removeAttr("href");
	  
	});


/* Remove "#" from menu anchor items to avoid jump to the top of the page
--------------------------------------------------------------------------------------- */


$("ul > li.menu-item-has-children > a[href='#']").removeAttr("href");



// nav slide


	
	var windowWidth = $(window).width();



	function checkWidthcase() {
    
    if (windowWidth < 1230) {
	    
	    	$('nav ul.menu > li.menu-item-has-children > a').on('click', function(e) {
	    	  
	    		$(this).next('ul.sub-menu').toggleClass('open');
	    		
	    	
	    	});   
	   		
    		
    } 
    

	};
	

checkWidthcase();



$('.mobile_menu').on('click', function(e) {
  

	$('nav').slideToggle();
	
	$('nav').addClass('open');
	
	$('.mobile_inner').toggleClass('fade');
	
	$('.mobile_close').toggleClass('fade');


});


// banner/header check - checks to see if the template is using a banner. if not, the header will be styled differently


	if ($(".internal_banner, #section_one")[0]){
   	
   	$('header').addClass('transparent_header');
   
  }
  
  
  else {
	  
	  $('header').addClass('grey_header');
	  
  }
  
  
  // case results tap on smaller devices
  
  
  	
  	var windowWidth = $(window).width();
  
  
  
  	function checkWidthcr() {
      
      if (windowWidth < 1066) {
          
        
      	$('.single_case_result').on('click', function(e) {
      	  
      		
      	$(this).find('.single_cr_hover').toggleClass('open');
      	
      	
      	});
      	   		
      		
      } 
      
      
  };
  	
  
  checkWidthcr();
  
  
 // pa sidebar view post links


 $('.widget_recent_entries > ul').append('<li class="view_all"><a href="' + my_data.blog_homepage  + '">View All Posts</a></li>');
 $('.widget_categories > ul').append('<li class="view_all"><a href="' + my_data.blog_homepage  + '">View All Categories</a></li>');
 $('.widget_archive > ul').append('<li class="view_all"><a href="' + my_data.blog_homepage  + '">View Archive</a></li>');

 
  
  
 // case results filter

 $('.input_inner').on('click', function(e) {
   
 	$(this).find('ul.input_list').slideToggle(300);
 	
 	$(this).addClass('open');
 
 });
 
 // closes dropdown when clicking outside dropdown
 
 
 $(document).click(function (e){

		var container = $(".input_inner.open");

		if (!container.is(e.target) && container.has(e.target).length === 0){

			$('ul.input_list').slideUp();
		
		}

	}); 
	
	
	// moves selected text into parent div
	
	$('ul.input_list li').on('click', function(e) {
		
		// assigns vairable to text data from list item
	  
		var textUpdate = $(this).text();
		
		
		
		$('ul.input_list li span').replaceWith('<span>' + textUpdate + '</span>');
		
		// grabs data and assigns variables to them 
		
		var dataPracticearea = $(this).attr('data-pa'); // can attr just have one arg? bc it seems to be working
		
		var dataAttorney = $(this).attr('data-att');

		// updates text
		
		$(this).parent().prev('.input_parent').find('span.input_placeholder').text(textUpdate);
		
		// adds data attributes to the submit button
		
		$('a.filter_submit').attr('data-pa',dataPracticearea).attr('data-att',dataAttorney);
		
		// shows the clear button after list item is selected
		
		$('span.clear').addClass('open');
		
		
		
	});
	
	
	// clear slection button
	
	

	$('span.clear').on('click', function(e) {
	  
	  // when clicked the parent text gets replaced
		
		$('span.input_placeholder').text('- Select -');
		
		// removes data from the submit button 
		
		$('.filter_submit').removeAttr('data-pa').removeAttr('data-att');
		
		// brings all case results back
		
		$('.single_case_result').fadeOut(400).delay(1000).fadeIn(400);
		
		// hide clear button after clicked 
		
		$(this).removeClass('open');
		
		// remove not found message
		
		$('.exist_message').removeClass('show');
    
  });
	
	
	// submit button
	

	
	$('.filter_submit').on('click', function(e) {
	  
		
		var dataPracticearea = $(this).attr('data-pa');
		
		var dataAttorney = $(this).attr('data-att');
		
		// hides all single case results

		$('.single_case_result').fadeOut(400);
		
		
		// if submit button just has data-pa practice areas
		
		if (this.hasAttribute('data-pa') && !this.hasAttribute('data-att')) {
      console.log('has just pa specs');
      
      var runFilter = $('.' + dataPracticearea + '');
      
    } 
    
    // if submit button just has data-att attorneys
    
    if (!this.hasAttribute('data-pa') && this.hasAttribute('data-att')) {
      console.log('has just att specs');
      
      var runFilter = $('.' + dataAttorney + '');
      
    }
    
    // if submit button has both data-pa practice areas and data-att attorneys
    
    
    if (this.hasAttribute('data-pa') && this.hasAttribute('data-att'))  {
      console.log('has both pa and att specs');
      
      // setups the class structure to fadein the correct search results
      
      var runFilter = $('.' + dataPracticearea + '.' + dataAttorney +'');
      
      
      
      	// if the css classes combo does not exist, show a not found message
      	
      	
      	if($('.'+dataPracticearea+'.'+dataAttorney+'').length > 0) {
	      	
	      	$('.exist_message').removeClass('show');
	      	
      	}
      	
				else {
	      	
	      	$('.exist_message').addClass('show');
      	
      	}

     }
     			    
    // run case results filter
    
    $(runFilter).delay(600).fadeIn(400); 


});
	
	
	
	// Case results Attorney Page - when you land on a specific attorney's case results, we need it to fire the filtering function based on the string thats the same as the one in the url. The variable below is set up on the functions.php as PHP localized data being passed through to js file. if the string tied to this vairable is getting returned empty then we are just on the page "/results", if the variable contains a string, we are on an attorney's case results page "/results/name-of-attorney". With that conditional, we can fire the filter on page load for that specific attorney 
	
		if(my_data.attorney_title !== '')  {
	 	
	 		console.log("URL contains att name, so run the filter" +my_data.attorney_title+ "");
	 		
	 		// adds data-att to submit button 
	 		
	 		$('a.filter_submit').attr('data-att',my_data.attorney_title);
	 		
	 		// hides all single case results
	 		
	 		$('.single_case_result').hide();
	 		
	 		// shows just the ones with class name that is the attorney name
	 		
	 		var runFilter = $('.' + my_data.attorney_title + '');
	 		
	 		
	 		$(runFilter).show();
	 		
	 			 		
	 		// look for that drop down list item that contains the data-att value of this attorney name. 
	 		
	 		var attorneyname = $('ul.input_list li[data-att="' + my_data.attorney_title  + '"').text();
	 		
	 		// Preload the Attorneys name to the parent input field as if its already selected 
	 		
	 		$('.att_filter span.input_placeholder').replaceWith('<span class="input_placeholder">' + attorneyname + '</span>');
	 		
	 		 // case resut attorney page titles (i can't use wordpress hooks here because the Rewrite API creates these pages virtually so no way to referece simple hooks like the_title(), so I will grab dropdown data-att and grab the text from inside the drop down menu to display as the. page title

	 		
	 		$('h1.one_col_title.attorney_page').replaceWith("<h1 class='one_col_title attorney_page'>" + attorneyname + "'s<br/> Case Results");
	 		
	 		// show clear buttton
	 		
	 		$('span.clear').addClass('open');
	 		
	 	
	 	} 
	
	    

	
  
}); // document ready