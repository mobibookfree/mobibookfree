$(function(){
	'use-strict';

	// side nav right
	$(".side-nav-right").sideNav({
		
		edge: 'right',
		closeOnClick: false

	});

	// slider
	$(".slider").slider({full_width: true});

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// loader
    $("#fakeLoader").fakeLoader({
      
      zIndex: 999,
      spinner: 'spinner1',
      bgColor: '#ffffff'

    });

});