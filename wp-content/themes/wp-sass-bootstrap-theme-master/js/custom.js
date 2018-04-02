$ = jQuery;

$(document).ready( function() {
	
	smoothScroll();

	$('.matchHeight').matchHeight();

	slideBlock();

	navbarBrand();

	isotope();

});

function isotope() {
	// init Isotope
	var $grid = $('.skills-section').isotope({
	  itemSelector: '.skill-section',
	  layoutMode: 'fitRows',
	});

	// bind sort button click
	$('.sort-by-button-group').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter-value');
	  if(filterValue == '*') {
	  	$grid.isotope({ filter: filterValue });
	  } else {
	  	$grid.isotope({ filter: '.' + filterValue });
	  }
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
}

function slideBlock() {
    var waypoint = $('.section').waypoint(function(direction) {
        //check the direction
        if(direction == 'down') {
            //add the class to start the animation
            $(this.element).addClass('show');
        } /*else {
        	$(this.element).removeClass('show');
        }*/
    }, {
        //Set the offset
        offset: '80%'
    });
    var waypoint2 = $('.section-header').waypoint(function(direction) {
        //check the direction
        if(direction == 'down') {
            //add the class to start the animation
            $(this.element).addClass('show');
        } /*else {
        	$(this.element).removeClass('show');
        }*/
    }, {
        //Set the offset
        offset: '80%'
    });
    var waypoint3 = $('.skills-section').waypoint(function(direction) {
        //check the direction
        if(direction == 'down') {
            //add the class to start the animation
            $(this.element).addClass('show');
        } /*else {
        	$(this.element).removeClass('show');
        }*/
    }, {
        //Set the offset
        offset: '80%'
    });
}

function navbarBrand() {
    if($(window).scrollTop() > 80) {
    	$('.navbar .navbar-brand').addClass('small');
    	$('.navbar').addClass('opaque');
    } else {
    	$('.navbar .navbar-brand').removeClass('small');
    	$('.navbar').removeClass('opaque');
    }
}

$(window).resize(function() {
	slideBlock();
});

$(window).scroll(function() {
	navbarBrand();
});

function smoothScroll() {
	$('a[href^="#"]').on('click', function(event) {
	    var target = $(this.getAttribute('href'));
	    if( target.length ) {
	        event.preventDefault();
	        $('html, body').stop().animate({
	            scrollTop: target.offset().top - $('.navbar').height()
	        }, 1000);
	    }
	});
}

