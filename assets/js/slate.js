/*! Slate - v0.1.0 - 2015-02-04
 * http://tareq.wedevs.com
 * Copyright (c) 2015; * Licensed GPLv2+ */
( function( $, window, undefined ) {
	'use strict';

    $(window).scroll(function(event) {
        // var height    = $(window).height();
        var scrollTop = $(window).scrollTop();

        // console.log(height, scrollTop);

        if ( scrollTop > 50 ) {
            $('#secondary').addClass('stick');
        } else {
            $('#secondary').removeClass('stick');
        }
    });

 } )( jQuery, this );