$ = jQuery;

$(document).ready( function() {
	
	sidebarMenu();

	parallax();

	smoothScroll();
});

$(window).resize(function() {
	parallax();
});


function sidebarMenu() {
	$('.menu').on('click', function(){
	  if ($('.l-site').hasClass('is-open')) {
	    $('.menu').removeClass('is-active');
	  	$('.l-site').removeClass('is-open');
	  } else {
	    $('.menu').addClass('is-active');
	  	$('.l-site').addClass('is-open');
	  }
	});
}

function parallax() {
	$('section').each( function() {
		$(this).css('width', $(this).parent('.section-wrapper').width());
		$(this).css('height', $(this).parent('.section-wrapper').height());
		$(this).parent('.section-wrapper').css('height', $(this).outerHeight());
		if($(this).hasClass('main-block')){
			$(this).children('.section-inner').css('position', 'absolute');
			$(this).children('.section-inner').css('width', '100%');
		}
	})
	$('section').each( function() {
		var waypoint = new Waypoint({
		  element: $(this),
		  handler: function(direction, element) {
		  	if(direction == 'up'){
		  		$('#' + this.element[0].id).removeClass('stuck');
		  	} else {
		  		$('#' + this.element[0].id).addClass('stuck');
		  	}
		  }
		});
	});
}

function smoothScroll() {
	$('a[href^="#"]').on('click', function(event) {
	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top
	        }, 1000);
	    }
	});
}

