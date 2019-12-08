$(document).ready(function () {
    $("#panel-fullscreen").click(function (e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.children('i').hasClass('fa-expand')) {
            $this.children('i').removeClass('fa-expand');
            $this.children('i').addClass('fa-compress');
        } else if ($this.children('i').hasClass('fa-compress')) {
            $this.children('i').removeClass('fa-compress');
            $this.children('i').addClass('fa-expand');
        }
        $(this).closest('.panel').toggleClass('panel-fullscreen');
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
        items:4
      },
      600:{
        items:8
      },
      800: {
        items:9
      },
      1000:{
        items:11
        }
      },
      1200:
      {
        items:12
    }
});
