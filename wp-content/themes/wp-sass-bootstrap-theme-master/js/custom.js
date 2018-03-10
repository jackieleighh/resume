$ = jQuery;

$(document).ready( function() {
	
	sidebarMenu();

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
		var waypoint = new Waypoint({
		  element: $(this),
		  handler: function(direction) {
		  	if(direction == 'up'){
		  		$(this).removeClass('stuck');
		  	} else {
		  		$(this).addClass('stuck');
		  	}
		  }
		});
	});
}