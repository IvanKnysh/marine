jQuery(document).ready(function($) {

    // slider
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        fade: true,
        prevArrow: '<button class="btn-prev"></button>',
        nextArrow: '<button class="btn-next"></button>',
    });


});