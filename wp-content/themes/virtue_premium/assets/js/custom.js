//sticky header
jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 90) {
            $('.sticky-head-wrapper').addClass('sticky');
        } else {
            $('.sticky-head-wrapper').removeClass('sticky');
        }
    });
    $('.promotion__items').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: true,
        dots: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1524,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
    $('.about-company__items').slick({
        slidesToScroll: 1,
        slidesToShow: 1,
        arrows: true,
        dots: true,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 1524,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
    $('.our-specialist__items').slick({
        slidesToScroll: 1,
        slidesToShow: 3,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    variableWidth: true,
                    arrows: false,
                }
            },
        ]
    });
    $(document).ready(function () {
        var button = $('#button-up');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                button.fadeIn();
            } else {
                button.fadeOut();
            }
        });
        button.on('click', function () {
            $('body, html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });

    if ($(window).width() < 768) {
        $('.mobile-header-menu > .astm-search-menu.is-menu.default.menu-item').appendTo('.header_search');

        $('.burger-btn').on('click', function () {
            $('.burger-btn').toggleClass('active');
            $('.header_menu').slideToggle();
            $('.overlay').toggleClass('active');
        });


        $('.menu-item > .sub-menu li:first-child a').append('<button class="btn-back">НАЗАД</button>');

        $('.mobile-header-menu .menu-item-has-children').on('click', function (e) {
            const target = $(e.target);
            if (target.is('a')) {
                $(this).closest('ul').addClass('child-open');
                $(this).children('ul').addClass('open');
            }
            if ($('.mobile-header-menu.mobile-menu').hasClass('child-open')) {
                $('.menu-bar-wrapper > .mobile-contacts').css('display', 'none');
            }
        })
        $(document).on('click', '.btn-back', function () {
            $(this).closest('ul').removeClass('open');
            $(this).closest('.child-open').removeClass('child-open');
            if (!$('.mobile-header-menu.mobile-menu').hasClass('child-open')) {
                $('.menu-bar-wrapper > .mobile-contacts').css('display', 'flex');
            }
        })

        $('.footermenu > .menu-item-4374 > a').on('click', function (e) {
            e.preventDefault();
            $('.menu-item-4374').toggleClass('footer-mobile-active');
            $('.menu-item-4374 > .sub-menu').slideToggle(function () {
                if ($(this).is(':visible'))
                    $(this).css('display', 'flex');
            });
        });

    }
    $('.popup .forminator-row:nth-child(7), .popup .forminator-row-last').wrapAll('<div class="submitAndPolitic"></div>');
    // $(".forminator-datepicker").datepicker('disable');
    // $('.forminator-datepicker').datepicker({
    //     monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    //     dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    //     dateFormat: 'dd.mm.yy',
    // });
    $('.forminator-field--phone').mask('+7 (999) 999-99-99');

    $('.forminator-field').on('input keyup', function () {
        if ($(".forminator-field--phone").val().length < 18) {
            if ($('.forminator-error-message').length == 0) {
                $('.forminator-description').after('<span class="forminator-error-message" style="display: block !important;" aria-hidden="true">Номер телефона должен содержать 11 цифр</span>');
            }
        } else {
            $(".forminator-error-message").remove()
        }

    });

    $("body")
        .find("p")
        .each(function () {
            if ($(this).is(":empty")) {
                $(this).remove();
            }
        });
    // if($('.forminator-datepicker').focus()){
    //     $('.forminator-icon-calendar::before').css({'content' : 'url("/wp-content/uploads/calendarActive.png")'});
    //
    // }

    // $('.uslugi > li').on("mouseover", function () {
    //
    //     $(this).each(function (index, element) {
    //         let $uslugi = $(".uslugi > li > .uslugi_list");
    //         $uslugi.filter(':gt(4)').slideToggle("slow");
    //     })
    // });
});



