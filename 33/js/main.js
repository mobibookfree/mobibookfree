$(function(){
	'use-strict';

	$(".side-nav-left").sideNav({

		edge: 'right',
		closeOnClick: false

	});

	$("#nav-menu").animatedModal();

	// slider
	$(".slider").slider({full_width: true});


	// screenshot
	$(".screenshot-content").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,


	})

	// testimonial
	$("#owl-testimonial").owlCarousel({

		slideSpeed : 300,
		paginationSpeed : 400,
		singleItem : true,

	})

	// latest-news
	$(".latest-news-owl").owlCarousel({

		autoPlay : false,
		singleItem: true

	})

	// loader
    $("#fakeLoader").fakeLoader({
      
      zIndex: 999,
      spinner: 'spinner4',
      bgColor: '#ffffff'

    });

    $('.collapsible').collapsible({
		accordion: false
	});

});