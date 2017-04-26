jQuery(document).ready(function($) {
	$('.parallax-effect').parallax();
	
	$curved_section = $(".curved-section");
	$curved_section.find('.curved-container').height( $curved_section.height() );
	$curved_section.find('.curved-wrapper').height( $curved_section.height() );

	$(window).scroll(function(){
		var sticky = $('#header'),
				scroll = $(window).scrollTop();
	
		if (scroll >= 5){
			sticky.addClass('sticky-header');
			$("#homeSlider .rsThumbsHor").slideUp();
			$(".scroll-to-wrapper").slideUp();
		} 
		else {
			sticky.removeClass('sticky-header');
			$("#homeSlider .rsThumbsHor").slideDown();
			$(".scroll-to-wrapper").slideDown();
		}
	});
	
	$("#toggle-menu").click(function(e) {
		e.preventDefault();
    $("#main-menu").slideToggle();
  });
	/*$(".parallax-effect").parallaxScroll({
    friction: 0.5,
  });*/
	//$('.parallax-effect').parallax("50%", 0.9, 393);
	
	
	$('.scroll-to').click(function(e){
		 // prevent default action
		 e.preventDefault();
		 
		 // get id of target div (placed in href attribute of anchor element)
		 // and pass it to the scrollToElement function
			// also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
		 scrollToElement( $(this).attr('href'), 500 );
	});
	
	var scrollToElement = function(el, ms){
			var speed = (ms) ? ms : 600;
			$('html,body').animate({
					scrollTop: $(el).offset().top - 115
			}, speed);
	}
	
	$('.rsThumb').click(function(e) {
		var number = $( this ).index();
				number = parseInt(number) + 1;
				//$("#home-categories ul li").removeClass('active');
				//$element = $("#home-categories ul li[data-number='"+ number +"']");
				//$element.addClass('active');
  });
	
	$('#home-tabs-nav a').click(function(e) {
		e.preventDefault();
				
		$('#home-tabs-nav li').removeClass('active');
		$( this ).closest('li').addClass('active');
		
		$(".home-tab").slideUp('slow');
		$( $( this ).attr("href") ).slideDown();
  });
	
	window.onload = function(){
		
		
		if( $(window).width() > 768 ){
			var $slider = $("#homeSlider");
			var height = $(window).height();
			$slider.height( height );
			
			var content_height = height - 94;
			$('.page-banner-image img').height( content_height );
			
			var section_height = Math.abs(content_height / 2);
			$('.about-section').css( 'min-height', section_height );
			$('.about-section').height( section_height );
			$('.parallax-title').css('line-height', section_height + 'px');
			$('.parallax-effect').parallax();
		}
	}
	 $('.filter_button').mouseover(function(){
		 var f= $( this );
		 var t=f[0]['children'][1];
		 $(t).css( 'display', 'block' );
		 $(t).css( '-webkit-transition', 'width 2s');
		 $(t).css( 'transition', 'height 2s');
	 });
	 $('.filter_button').mouseout(function(){
		 var f= $( this );
		 var t=f[0]['children'][1];
		 $(t).css( 'display', 'none' );
		 $(t).css( '-webkit-transition', 'width 2s');
		 $(t).css( 'transition', 'height 2s');
	 });

});