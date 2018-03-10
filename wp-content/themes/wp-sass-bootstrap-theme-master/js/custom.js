$ = jQuery;

$(document).ready( function() {
	
	sidebarMenu();

	parallax();
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
	$('section').css('width', $('.section-wrapper').width());
	$('section').css('height', $('.section-wrapper').height());
	$('section-wrapper').css('height', $('.section').height());
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