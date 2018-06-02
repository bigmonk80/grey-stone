$(document).ready(function() {
  // init side nav
  $('.button-collapse').sideNav();

  // var instance = M.Slider.getInstance(elem);
  // instance.next();
  // instance.prev();

  // init slider
  $('.slider').slider({
    indicators: false,
    height: 500,
    transition: 500,
    interval: 6000
  });

  // init carousel
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  autoplay();
  function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 5000);
  }

  // Scrollspy
  $('.scrollspy').scrollSpy();
});
