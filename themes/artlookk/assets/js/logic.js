$ = jQuery;
$(document).ready(function () {
    var width = document.body.clientWidth;

    $("#menuOpen").click(function (e) {
        $(this).toggleClass("opened");
    });

    if (width <= 1024) {
        $("#mainMenu .menu-item-has-children > a").append("<span></span>");
        $("#mainMenu .menu-item-has-children span").click(function () {
            $(this).parent().next().slideToggle(300);
            $(this).toggleClass("active");
            return false;
        });
    }

    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        slidesPerView: 2,
        navigation: {
            nextEl: '.sw_arrow.next',
            prevEl: '.sw_arrow.prev',
        },
    });

});