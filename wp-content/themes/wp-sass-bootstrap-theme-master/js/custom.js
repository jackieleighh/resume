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
	$("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
}

