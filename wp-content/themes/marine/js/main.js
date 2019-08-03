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

    // Contact form clear input
    $('#contact-form a#clear').click(function() {
        $('#contact-form')[0].reset();
    });

    // Visible search form
    $('.search button').click(function() {
        $('.container .search-form').slideToggle(200);
    });

    // Mobile menu
    $('.b1 .flx button.mobile-menu').click(function() {
        $('.mobile, .overlay').addClass('active');
    });
    $('.mobile button').click(function() {
        $('.mobile, .overlay').removeClass('active');
    });
    $('.overlay').click(function() {
        $('.mobile, .overlay').removeClass('active');
    });

});