/* 
  
  Custom scripts 

*/



/*  Responsive Navigation
----------------------------------------------------------------------------------------*/
$('.menu-btn').click(function() {
   $(this).toggleClass('active');
   $('.main-nav').toggleClass('open');
  });


/*  Sticky Header
----------------------------------------------------------------------------------------*/
$(function() {
  var o = $(window).height() - 63,
      a = 10,
      n = 537,
      l = $(".header-wrapper"),
      n = $(".main-nav")
      w = $(window).width();
    
  if(w > 767) {    
    $(window).scroll(function() {
      $(this).scrollTop() > o ? l.addClass("fixed") : l.removeClass("fixed")
    }), 

    $(window).scroll(function() {
      $(this).scrollTop() > a ? (l.addClass("fade")) : (l.removeClass("fade"))
    }), 

    $(window).scroll(function() {
      $(this).scrollTop() > n ? r.addClass("fixed") : r.removeClass("fixed")
    })
  }
});


/*  Smooth scroll
----------------------------------------------------------------------------------------*/
$(function() {
  $('a[href*=#]:not([href=#])').click(function(event) {
    event.preventDefault;
    
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
     
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 74
        }, 2000);

        return false;
      }
    }
  });
});


/*  Highlight on scroll
---------------------------------------------------------------------------------------*/
$('#menu-main-nav a').on('click', function(event) {
    $(this).parent().find('a').removeClass('active');
    $(this).addClass('active');
});

$(window).on('scroll', function() {
    $('.section-wrapper').each(function() {
        if($(window).scrollTop() >= $(this).offset().top - 80) {
            var id = $(this).attr('id');
            $('#menu-main-nav a').removeClass('active');
            $('#menu-main-nav a[href=#'+ id +']').addClass('active');
        }
    });
});



/*  Video player
---------------------------------------------------------------------------------------*/
!function(e){e(document).ready(function(){e(".reel video").on("ended",function(){e(this).parent().find(".pause").removeClass("pause hidden")}),e(".play").click(function(n){function o(){d=setTimeout(function(){d=null,s.addClass("hidden")},1e3)}function a(){s.removeClass("hidden"),d&&clearTimeout(d),o()}n.preventDefault();var s=e(this),d=null;s.hasClass("pause")?(d&&(clearTimeout(d),d=null),s.removeClass("pause"),s.parent().find("video").get(0).pause(),e("body").off("mousemove",a),s.removeClass("hidden")):(s.addClass("pause"),s.parent().find("video").get(0).play(),e("body").on("mousemove",a),o())})})}(window.jQuery);



/*  Foundation
---------------------------------------------------------------------------------------*/
;(function ($, window, undefined) {
  'use strict';

  var $doc = $(document),
      Modernizr = window.Modernizr;

  $(document).ready(function() {
    $.fn.foundationAlerts           ? $doc.foundationAlerts() : null;
    $.fn.foundationButtons          ? $doc.foundationButtons() : null;
    $.fn.foundationAccordion        ? $doc.foundationAccordion() : null;
    $.fn.foundationNavigation       ? $doc.foundationNavigation() : null;
    $.fn.foundationTopBar           ? $doc.foundationTopBar() : null;
    $.fn.foundationCustomForms      ? $doc.foundationCustomForms() : null;
    $.fn.foundationMediaQueryViewer ? $doc.foundationMediaQueryViewer() : null;
    $.fn.foundationTabs             ? $doc.foundationTabs({callback : $.foundation.customForms.appendCustomMarkup}) : null;
    $.fn.foundationTooltips         ? $doc.foundationTooltips() : null;
    $.fn.foundationMagellan         ? $doc.foundationMagellan() : null;
    $.fn.foundationClearing         ? $doc.foundationClearing() : null;

    $.fn.placeholder                ? $('input, textarea').placeholder() : null;
  });

  // UNCOMMENT THE LINE YOU WANT BELOW IF YOU WANT IE8 SUPPORT AND ARE USING .block-grids
  // $('.block-grid.two-up>li:nth-child(2n+1)').css({clear: 'both'});
  // $('.block-grid.three-up>li:nth-child(3n+1)').css({clear: 'both'});
  // $('.block-grid.four-up>li:nth-child(4n+1)').css({clear: 'both'});
  // $('.block-grid.five-up>li:nth-child(5n+1)').css({clear: 'both'});

  // Hide address bar on mobile devices (except if #hash present, so we don't mess up deep linking).
  if (Modernizr.touch && !window.location.hash) {
    $(window).load(function () {
      setTimeout(function () {
        window.scrollTo(0, 1);
      }, 0);
    });
  }

})(jQuery, this);
