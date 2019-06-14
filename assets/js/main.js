
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
  slidesToScroll: 1,
  // prevArrow: '<div class="slick-prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',//$('.slick-prev-arrow'),
  // nextArrow: '<div class="slick-next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',//$('.slick-next-arrow'),
});

