
$('.slick-team').slick({
  slidesToShow: 3,
  slidestoScroll: 1,
  infinite: true,
  // centerMode: true,
  dots: true,
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
  focusOnSelect: true,

});


$('.slick-clients').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true
  // prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
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

