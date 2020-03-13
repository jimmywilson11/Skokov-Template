jQuery(document).ready(function($) {   
    var $container = $(".masonry-container");
		  $container.imagesLoaded(function () {
			$container.masonry({
                itemSelector: ".item",
                columnWidth: 350,
                fitWidth: true,  
			});
		  });
	
	$('.owl-carousel').owlCarousel({
        dots:false,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        margin:30,
        loop:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            800: {
                items:5
            },
            1000:{
                items:8
            }
        }
    });
	$('#carousel-controls').each(function () {
        var owl = $(this).find('.owl-carousel').owlCarousel();
        $(this).find('.owl-prew').on('click', function () {
            owl.trigger('prev.owl.carousel');
        });
        $(this).find('.owl-next').on('click', function () {
            owl.trigger('next.owl.carousel');
        });
    });
});
