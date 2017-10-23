(function ($) {
	"use strict";

	$('.meta-comment a').text().replace('Comment',' ');
	
	// Home page grid system
		
		$('.blog-section .grid .grid-top .grid-item:nth-child(1)').addClass('col-md-3 col-sm-6 col-xs-12');
		$('.blog-section .grid .grid-top .grid-item:nth-child(2)').addClass('col-md-6 col-sm-6 col-xs-12');
		$('.blog-section .grid .grid-top .grid-item:nth-child(3)').addClass('col-md-3 col-sm-6 col-xs-12');
		$('.blog-section .grid .grid-top .grid-item:nth-child(4)').addClass('col-md-3 col-sm-6 col-xs-12');
		$('.blog-section .grid .grid-top .grid-item:nth-child(5)').addClass('col-md-6 col-sm-6 col-xs-12');
		$('.blog-section .grid .grid-top .grid-item:nth-child(6)').addClass('col-md-3 col-sm-6 col-xs-12');
	
		
		
		
		$('.blog-section .grid .grid-top .grid-item:nth-child(2) .grid-item-content').addClass('grid-item-content--height2');
		$('.blog-section .grid .grid-top .grid-item:nth-child(5) .grid-item-content').addClass('grid-item-content--height3');
			
		
		
		// Home page grid system

	$(window).scroll(function() {
		if ($(window).scrollTop() > 150) {
			$(".navbar").addClass("sticky");
		} 
		else {
			$(".navbar").removeClass("sticky");
		}
	});
  
  	$(".navbar-toggle").click(function() {
	  	$(this).toggleClass('in');
	});

	$(document).ready(function(){
			
			$('.grid').masonry({
			  itemSelector: '.grid-item',
			  columnWidth: '.grid-sizer',
			  percentPosition: true
			});
			
			 $('ul.member-menu ul.dropdown-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}           
			});
			
			 $('#secondary-menu ul.navbar-nav ul.sub-menu li a').each(function() {
				if ( $(this).parent('li').children('ul').size() > 0 ) {
					$(this).append('<span class="glyphicon glyphicon-chevron-right"></span>');
				}           
			});
			
			
			 $('.language-selector .switcher .selected a').each(function() {
				
					$(this).append('<span class="caret"></span>');
				        
			});
			
			$('.image-link').magnificPopup({type:'image'});
			
			  $('.image-blog').magnificPopup({type:'image'});
			  
			  
			  
			  // search box
				
				$('#search-trigger').click(function(){
                    $('#search-input').toggleClass('search-input-open');
                    $('.navbar.navbar-default.navbar-bottom ul li a').toggleClass('change-hobe');
                    
                });
 
                $(document).click(function(e){
                    if(!$(e.target).closest('.ngen-search-form').length){
                        $('#search-input').removeClass('search-input-open');
						$('.navbar.navbar-default.navbar-bottom ul li a').removeClass('change-hobe');
                    }
                })


				// search box
				
				
				// scroll to top
				
				$('.totop a').click(function(){
			
				
					$('html, body').animate({'scrollTop': '0px'},2000);
				
					return false;
				
				});
				
				
				// scroll to top
				
				
				
			  
			
		
			
	});

}(jQuery));