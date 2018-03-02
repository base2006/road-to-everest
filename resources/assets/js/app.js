/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function () {
    // Apply active class when hamburger is clicked
    var $hamburger = $(".hamburger");
    $hamburger.click(function (e) {
        $hamburger.toggleClass("is-active");
    });

    // Slide animation for menu
    $('#menu').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
    });

    // Remove active class from hamburger when menu is closed and add slide animation
    $('#menu').on('hide.bs.dropdown', function () {
        $hamburger.removeClass("is-active");
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(200);
    });

    // Parallax effect for home header image
    $(window).scroll(function () {
        var st = $(this).scrollTop();
        $(' .header-image').css({'background-position': 'center calc(50% + ' + (st * 0.7) + 'px)'});
    });
});

