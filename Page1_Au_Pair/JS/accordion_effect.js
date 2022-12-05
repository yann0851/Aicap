$(function () {

    'use strict';

    // Give aupair-active Class

    $('.aupair-item').first().addClass('aupair-active');

    // Show First aupair-info

    $('.aupair-info').first().show().animate({width: '79.45%'});

    // Show aupair-info On Click

    $('.aupair-item').click(function () {

        $(this).addClass("aupair-active").siblings('.aupair-item').removeClass('aupair-active');

        $(this).next().show().animate({width: '79.45%'}).siblings('.aupair-info').animate({width: 0}, function () {

            $(this).hide();

        });

    });

});