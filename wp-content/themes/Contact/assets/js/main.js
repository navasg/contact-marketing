wow = new WOW(
  {
    animateClass: 'animated',
    mobile: false,
    offset: 100,
  }
);
wow.init();

$('.slick-team').slick({
  slidesToShow: 3,
  slidestoScroll: 1,
  infinite: true,
  arrows: false,

  // centerMode: true,
  dots: true,
  responsive: [
    {

      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,


      }
    },

    {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        // dots: false,

      }
    },

  ]
});

$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  centerMode: true,
  arrows: false,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,


      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        // centerMode: false,
        dots: false,

      }
    },

  ]
});


$('.slick-clients').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true,
  arrows: false,
  // prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },

    {
      breakpoint: 950,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,



      }
    },

    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        autoplay: true

      }
    },

  ]
});

$('.slick-text').slick({
  infinite: true,
  slidesToShow: 1,
  /*autoplay: true*/
});

$(document).ready(function () {
  $(window).on("scroll", function () {
    if ($(window).scrollTop() >= 130) {
      $(".fixed-2").addClass('show-visib')
      // $('header').css('display', 'none')
      // $('.logo-fixed').css('display', 'initial')
      // $('.search-fixed').css('display', 'initial')
    } else {
      // $("header").removeClass('nav-fixed');
      $(".fixed-2").removeClass('show-visib')

      // $('header').css('display', 'initial')
      // $('.logo-fixed').css('display', 'none')
      // $('.search-fixed').css('display', 'none')
    }
  });
});

