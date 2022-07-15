$(function () {

    $('.networks__slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
        arrows: true,
        infinite: true,
        dots: false,
        prevArrow: '.slick__prev',
        nextArrow: '.slick__next',
        variableWidth: true,
        responsive: [
            {
                breakpoint: 820,
                settings: {
                    arrows: false,
                }
            },
        ]
    });

    $('.menu__btn').on('click', function () {
        $('.menu__btn').toggleClass('menu__btn--active');
        $('.menu__list').toggleClass('menu__list--active');
    });

    $('.header__menu-link').on('click', function () {
        $('.menu__btn').removeClass('menu__btn--active');
        $('.menu__list').removeClass('menu__list--active');
    });

    $('.menu__list-item').on('click', function () {
        $('.menu__btn').removeClass('menu__btn--active');
        $('.menu__list').removeClass('menu__list--active');
    });

    var mixer = mixitup('.dreams__inner', {
        load: {
            filter: '.residential'
        }
    });


});