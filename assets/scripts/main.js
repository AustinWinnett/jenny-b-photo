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

        var navScrolled = false;

        $(window).scroll(function (event) {
          if ( !$('.navbar').hasClass('navbar--open') ) {
            var scroll = $(window).scrollTop();
            if ( scroll > 10 && !navScrolled ) {
              $('.navbar').addClass('navbar--scrolled');
              navScrolled = true;
            } else if ( scroll < 10 && navScrolled ) {
              $('.navbar').removeClass('navbar--scrolled');
              navScrolled = false;
            }
          }
        });

        $('.navbar-toggle').click(function() {
          $('header nav').fadeToggle();
          $(this).toggleClass('open');
        });

        //Basic Collapse toggle for dropdowns and toggle menus
        $('.navbar .menu-item-has-children').on('click', function(e) {
          e.preventDefault();
          //if target element is not open already
          //find all open collapse elements and close them
          if ( !$(this).is('.collapsed') ) {
            if ( $('.collapsed.menu-item-has-children').length > 0 ) {
              $('.collapsed.menu-item-has-children').each(function(){
                $(this).trigger('click');
              });
            }
          }
          var target = $(this).find('.sub-menu');
          $(this).toggleClass('collapsed');
          $(target).toggleClass('collapsed');
          $(target).slideToggle();
        });

        $(document).click(function(e) {
          //close all [data-toggle="collapse"] elements if
          //target doesn't have any data attributes defined or
          //if the target is does not have a data-toggle and
          //it does not have a data-content and
          //then make sure that the target is not a child of data-content="collapse"
          if (
            ( $(e.target).data('toggle') === undefined || $(e.target).data('toggle') === false ) &&
            ( $(e.target).data('content') === undefined || $(e.target).data('content') ===  false ) &&
            !$(e.target).parents( '.menu-item-has-children' ).length
            ) {
            $('.collapsed.menu-item-has-children').each(function(e){
              $(this).trigger('click');
            });
        }
      });

        // Magnific Popup
        // For embeded images within the post content
        $('a[rel="magnific"]').magnificPopup({
          type: 'image',
          removalDelay: 300,
          mainClass: 'mfp-fade'
        });

        $('.jbp-masonry-grid__grid').magnificPopup({
          type: 'image',
          removalDelay: 300,
          delegate: 'a',
          mainClass: 'mfp-fade',
          gallery: {
      			enabled: true,
      			navigateByImgClick: true,
      			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      		},
        });


        // Banner
        $('.jbp-banner__slides').slick({
          arrows: true,
          dots: false,
          autoplay: true,
          autoplaySpeed: 5000,
          fade: true

        });

        if ( $('.jbp-instagram').length > 0 ) {
          var userId = $( '.jbp-instagram #user_id' ).data( 'value' );
          console.log(userId);
          var clientId = $( '.jbp-instagram #client_id' ).data( 'value' );
          var accessToken = $( '.jbp-instagram #access_token' ).data( 'value' );
          var instagramUrl = $( '.jbp-instagram #instagram_url' ).data( 'value' );
          var instagramUsername = $( '.jbp-instagram #instagram_username' ).data( 'value' );


          feed = new Instafeed({
            get: 'user',
            userId: userId,
            clientId: clientId,
            accessToken: accessToken,
            resolution: 'standard_resolution',
            template: '<div class="instagram__item" style="background-image: url(\'{{image}}\');"><a href="' + instagramUrl + '" class="overlay-link sub-heading text-white" target="_blank"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg><p>' + instagramUsername + '</p></a></div>',
            limit: 8
          });

          feed.run();
        }


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
