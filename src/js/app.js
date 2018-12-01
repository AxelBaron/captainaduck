/**
 * Agence'O - App
 * @author Axel Baron (Agence'O)
 * @created 18/01/2017
 */

(function ($) {
  var app = {
    init: function () {
      app.copyright();

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
    }
  };

  /**
   * Init ----------
   */
  app.init();
  $('#news, #dates, #about, #contact').on('click', function() { // Au clic sur un élément
      var page = $(this).attr('href'); // Page cible
      console.log(page);
      var speed = 750; // Durée de l'animation (en ms)
      var target = $(page).offset().top - 140;
      $('html, body').animate( { scrollTop: target }, speed ); // Go
      return false;
  });

})(jQuery);
