jQuery(document).ready(function($) {

    // header
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        fade: false,
        prevArrow: '<button class="btn-prev">PREV</button>',
        nextArrow: '<button class="btn-next">NEXT</button>',
    });


});