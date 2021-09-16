jQuery('document').ready(function($){

	// Default selection 
	selected_stars();
	var starIcon = jQuery('.star_rating .far');
	// On hover
	starIcon.hover(function(){
		jQuery(this).addClass('fas').prevAll().addClass('fas').removeClass('far');
		jQuery(this).nextAll().addClass('far').removeClass('fas');
	}, function(){
		selected_stars();
	});

	// OnClick
	starIcon.click(function(){
		jQuery(this).addClass('selected').siblings().removeClass('selected');
		jQuery('.rate_success').remove();
		jQuery(this).parent().after('<div class="text-success rate_success">Thank you for your rating..</div>');
	});

	// Selected
	function selected_stars() {
		jQuery('i.selected').addClass('fas').prevAll().addClass('fas').removeClass('far');
	}


	// Hamburger 
	jQuery('.hamburger').click(function(e){
        e.preventDefault(); 
        jQuery(this).toggleClass('active');
        jQuery('.sidebar').fadeToggle();   
        jQuery('.sidebar').toggleClass('active');   
        jQuery('body').toggleClass('noscroll');   
        jQuery('body').toggleClass('sidebaractive');   
	});
	
	// Active Sidebar
	jQuery('.sidebar.active').click(function(e){
		e.preventDefault();
	
		if (e.target !== this)
    		return;
	
		jQuery('.hamburger').click();
	});

	// Load HTML 
	jQuery('.actionloadhtml li a').click(function(){
		var pid = jQuery(this).attr('href').replace('#', '');
	 	jQuery( "#loadresult" ).attr('src', pid);
	});

	jQuery('.testimonials_slick').slick();

	jQuery('.hamburger_sign').on('click',function(){
		jQuery('.hover_menus').toggle();
	});

	jQuery('.hover_menus').hover(function(){
		jQuery(this).show();
	}, function(){
		jQuery(this).hide();
	});  

	// Home Carousel
	jQuery('.home_carousel').slick({
	  centerMode: false,
	  centerPadding: '0',
	  slidesToShow: 1,
	  responsive: [
	    {
	      breakpoint: 768, 
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '0',
	        slidesToShow: 1
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '0',
	        slidesToShow: 1
	      }
	    }
	  ]
	}); 


	change_slide();
	jQuery(".home_carousel").on("afterChange", function (){
		change_slide();	
	});


	jQuery('.five_col_carosusel').slick({
		infinite: true,
		speed: 300,
		slidesToShow: 5,
		centerMode: true,
	 	centerPadding: '30px',
		slidesToScroll: 5,
		responsive: [ 
		{
		  breakpoint: 1024,
		  settings: {
		    slidesToShow: 4,
		    slidesToScroll: 4,
		    infinite: true,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
		    slidesToShow: 2,
		    slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
		    slidesToShow: 1,
		    slidesToScroll: 1
		  }
		}
		]
	});



// Default selection
selected_stars();

// On hover
jQuery('.start_rating .far').hover(function(){
  
  jQuery(this).addClass('fas').prevAll().addClass('fas').removeClass('far');
  jQuery(this).nextAll().addClass('far').removeClass('fas');
  
  // Selected
   selected_stars();
  
});

// OnClick
jQuery('.start_rating .far').click(function(){
  jQuery(this).addClass('selected').prevAll().removeClass('selected');
  jQuery(this).addClass('selected').nextAll().removeClass('selected');
});


});

// Selected
function selected_stars() {
  jQuery('i.selected').addClass('fas').prevAll().addClass('fas').removeClass('far');
}

function change_slide() {
	var prev_src = jQuery('.home_carousel').find('.slick-current').prev().attr('data-src');
	var next_src = jQuery('.home_carousel').find('.slick-current').next().attr('data-src');
	jQuery('.home_carousel .slick-prev').html('<img src="'+prev_src+'" /> <span>Prev</span>');
	jQuery('.home_carousel .slick-next').html('<img src="'+next_src+'" /> <span>Next</span>'); 
}

   
jQuery(window).scroll(function() {    
    if (jQuery(window).width() > 767) {
	   var scroll = jQuery(window).scrollTop();
       if (scroll >= 400) {
			jQuery("body").addClass("scrolled");
	    } else {
	        jQuery("body").removeClass("scrolled");
	    }
	}  
}); 
