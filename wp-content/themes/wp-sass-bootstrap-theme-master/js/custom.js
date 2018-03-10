$ = jQuery;

$(document).ready( function() {
	
	sidebarMenu();
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

$(window).scroll(function(){\
  // Add parallax scrolling to all images in .parallax-section container
  $('.parallax-section').each(function(){
    // only put top value if the window scroll has gone beyond the top of the image
		    if ($(this).offset().top < $(window).scrollTop()) {
			// Get ammount of pixels the image is above the top of the window
			var difference = $(window).scrollTop() - $(this).offset().top;
	      // Top value of image is set to half the amount scrolled
	      // (this gives the illusion of the image scrolling slower than the rest of the page)
	      var half = (difference / 2) + 'px',
        transform = 'translate3d( 0, ' + half + ',0)';

	      $(this).find('section').css('transform', transform);
	} else {
	      // if image is below the top of the window set top to 0
			$(this).find('section').css('transform', 'translate3d(0,0,0)');
    }
  });
});