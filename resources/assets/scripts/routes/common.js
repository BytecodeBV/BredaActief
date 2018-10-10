/* eslint-disable */

import $ from 'jquery';
import 'slick-carousel';
import 'jquery.mmenu';

export default {
  init() {

    /**
     * Mobile menu
     */

    $('#mob-menu').mmenu({
      extensions: ['pagedim-black', 'position-right'],
    });

    var $icon = $("#mob-icon");
    var API = $("#mob-menu").data( "mmenu" );

    API.bind( "open:finish", function() {
      setTimeout(function() {
        $icon.addClass( "is-active" );
      }, 100);
    });
    API.bind( "close:finish", function() {
      setTimeout(function() {
        $icon.removeClass( "is-active" );
      }, 100);
    });

    $icon.click(function() {
      API.close();
    });

    /**
     * Agenda slider
     */

    $('.slider').slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 5,
      slidesToScroll: 1,
      centerMode: true,
      responsive: [
        {
          breakpoint: 1700,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });

    var $settings = {
      dots: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      mobileFirst: true,
      centerMode: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 899,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: false,
            centerMode: false,
            arrows: true,
          },
        },
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            variableWidth: false,
            centerMode: false,
            arrows: true,
          },
        },
        {
          breakpoint: 1499,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            variableWidth: false,
            centerMode: false,
            arrows: true,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    }

    $('.row-0 .agenda__archive--slider').slick($settings);
    $('.row-1 .agenda__archive--slider').slick($settings);
    $('.row-2 .agenda__archive--slider').slick($settings);

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    /**
     * Scroll to hash
     */

    $(document).on('click', 'a[href^="#"]', function (event) {
      event.preventDefault();

      $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
      }, 500);
    });

    /**
     * Search mobile
     */

    $('.search-toggle').click(function(e){
      e.preventDefault();

      $('.search-form').toggleClass('open');
    });

    /**
     * Add padding when block has figure
     */

    var blockTextFig = $('.page .block__text--figure');
    if(blockTextFig.length >= 1) {
      blockTextFig.parents('.flexible-block').addClass('padding-right');
      blockTextFig.parents('.flexible-block').prev().addClass('padding-right')
    }

    /**
     * Employee blocks slide toggle
     */

    $( '.employee__slide' ).click(function() {
      $(this).find( '.employee__slide--out' ).slideToggle( 400, function() {
        $(this).parents('.employee__slide').toggleClass('open');
      });
    });
  },
};
