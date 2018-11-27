/**
 * Agence'O - App
 * @author Axel Baron (Agence'O)
 * @created 18/01/2017
 */

(function ($) {
  var app = {
    init: function () {
      app.copyright();
      app.accordion();

      /**
       * Init Triggers ----------
       */
      var arr_triggers = [
        '.choose-lang__trigger',
        '.menu__trigger',
        '.header__search-bar__trigger',
        '.header__additional-links__trigger'
      ];
      $(document).on('click', arr_triggers.toString(), function (e) {
        e.preventDefault();
        app.trigger(e, $(this).parent());
      });


      /**
       * Init Sticky ----------
       */
      $(window).scroll(function () {
        if ($(window).width() > 1023) {
          app.sticky($('.header'));
        }
      });
    },

    accordion: function () {
      $(document).on('click', '.accordion__trigger', function (e) {
        e.preventDefault();
        var accordion = $(this).parent();
        accordion.toggleClass('is-open');
        accordion.find('.accordion__content').slideToggle();
      });
    },

    trigger: function (e, el) {
      e.stopPropagation();
      el.toggleClass('is-open');
    },

    sticky: function (el) {
      if ($(window).scrollTop() > el.height()) {
        el.addClass('is-sticky');
      } else {
        el.removeClass('is-sticky');
      }
      //el.addClass('sticky');
    },

    copyright: function () {
      console.info("%c Axel Baron %c http://axelbaron.fr/", ' font-weight: bold; color: white; background: black;', 'font-weight: normal; font-style: italic; color: gray;');
    },

    slider: function (el) {
      var button_prev = '<button class="slider__control slider__control--prev"><span class="icon icon-next"></span></button>';
      var button_next = '<button class="slider__control slider__control--next"><span class="icon icon-next"></span></button>';

      el.slick({
        infinite: false,
        autoplay: false,
        swipeToSlide: true,
        mobileFirst: true,
        dots: true,
        slidesToShow: 1,
        prevArrow: button_prev,
        nextArrow: button_next,
        appendArrows: el.parent().find('.slider__controls'),
        arrows: false,

        // the magic
        responsive: [{
          breakpoint: 750,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 1024,
          settings: {
            dots: false,
            slidesToShow: 4,
            arrows: true
          }
        }]
      });
    }
  };

  /**
   * Init ----------
   */
  app.init();
})(jQuery);
