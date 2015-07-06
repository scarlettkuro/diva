$(document).ready(function(){

    $('.slider').bxSlider({
        useCSS: true,
        auto: true,
        pager: true,
        controls: false,
        infiniteLoop: true,
        easing: 'ease-in-out'
    });

    $('.catalog-slider .items').bxSlider({
        useCSS: true,
        auto: false,
        pager: false,
        controls: true,
        infiniteLoop: true,
        easing: 'ease-in-out',
        moveSlides: 1,
        minSlides: 6,
        maxSlides: 6,
        slideWidth: 114,
        slideMargin: 0,
        prevText: '<i class="fa fa-angle-left"></i>',
        nextText: '<i class="fa fa-angle-right"></i>'
    });

   
});