// Use the below structure to start out your custom jQuery functions

(function($) {
  var sliders = {

    cards: function() {
      var slider = $('.cards.carousel');

      slider.slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        responsive: [
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    },

    hero: function() {
      var slider = $('.hero.carousel');
      
      slider.slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: true,
        dots: true,
        fade: false
      });
    },

    init: function() {
      sliders.cards(); 
      sliders.hero();
    }
  };

  $(document).ready(function() {
    sliders.init();
  });
})(jQuery);