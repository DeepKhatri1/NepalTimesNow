$(document).ready(function () {
  $(window).scroll(function () {
    $("#navbar").toggleClass("sticky", window.scrollY > 250);
  });
  let sliderIdx10 = $('.slider-idx-10');

  sliderIdx10.owlCarousel({
    autoplay: true,
    items: 1,
    dots: false,
    loop: true,
    nav: true,
    margin: 10,
    navText: ["<i class='fa fa-chevron-left fa-xl'></i>", "<i class='fa fa-chevron-right fa-xl'></i>"],
    responsive: {
      600: {
        items: 2
      },
      800: {
        items: 3
      },
      1200: {
        items: 4,
        stagePadding: 70,
      }
    }
  });

  // topic slider
  $(".topic_slider").slick({
    dots: false,
    infinite: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 6,
    slidesToScroll: 5,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 4,
        },
      },
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 3,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
    ],
  });
});
