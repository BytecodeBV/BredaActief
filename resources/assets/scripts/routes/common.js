/* eslint-disable */

import $ from 'jquery';
import 'jquery.mmenu';

export default {
  init() {
    // JavaScript to be fired on all pages
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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $('.search-toggle').click(function(e){
      e.preventDefault();

      $('.search-form').toggleClass('open');
    });
  },
};
