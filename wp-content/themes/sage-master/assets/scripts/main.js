/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        $('#slider_top .item').css('height', window.innerHeight);
        $('.logo-container').css('top', window.innerHeight / 2 - 50);

        $('.open-menu').on('click', function(e) {
          e.preventDefault();
          $('.menu-wrapper').fadeIn();
        });

        $('.close-menu').on('click', function(e) {
          e.preventDefault();
          $('.menu-wrapper').fadeOut();
        });

        $('.close-menu i').hover(function () {
          $(this).toggleClass("down");
        });

        $('.toggle-contact').on('click', function(e) {
          e.preventDefault();
          $('.contact-form').fadeIn();
           $('html, body').animate({
                scrollTop: $("#contact_form").offset().top
            }, 2000);
        });

        if($('.slider-proyectos').length > 0) {

          $('.toggle-event').on('click', function(e) {
            e.preventDefault();
            $('.toggle-event').hide();
            $('.event-info').fadeIn();

            var largeHeight = $('.boxed-img').outerHeight();
            $('.flowers').css('height', largeHeight - 20);

          });

          $('.toggle-event').mouseenter(function() {
            $( ".toggle-event" ).animate({
              opacity: '.7'
            }, 500 );

          });

          $('.toggle-event').mouseleave(function() {
            $( ".toggle-event" ).animate({
              opacity: '.3'
            }, 500 );
          });

          source = $('.slide-image img').attr('src');
          $('.slide-image').css('background-image', 'url('+source+')');

        }

        $('.fadein').each(function() {

            var std = $(this).attr("src");
            var hover = std.replace(".png", "-hover.png");
            $(this).clone().insertAfter(this).attr('src', hover).removeClass('fadein').siblings().css({
                position:'absolute'
            });
            $(this).mouseenter(function() {
                $(this).stop().fadeTo(600, 0);
            }).mouseleave(function() {
                $(this).stop().fadeTo(600, 1);
            });
        });

        $('.open-menu').mouseenter(function() {
            $('.top').fadeOut('fast');
            $('.bottom').fadeIn('fast');
        });

        $('.open-menu').mouseleave(function() {
            $('.top').fadeIn('fast');
            $('.bottom').fadeOut('fast');
        });

        $('.gallery-link').on('click', function(e) {
          e.preventDefault();
          $('.submenu').fadeIn('slow');
        });

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
