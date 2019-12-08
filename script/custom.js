$(document).ready(function(){
  
  var $container = $(".masonry-container");
  $container.imagesLoaded(function () {
    $container.masonry({
      columnWidth: ".item",
      itemSelector: ".item" 
    });
  });
  
  $(".owl-carousel").owlCarousel({
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    margin: 30,
    loop: true,
    responsive:{
      0:{
        items:2
      },
      600:{
        items:3
      },
      800: {
        items:4
      },
      1000:{
        items:6
        }
      }
  });
});