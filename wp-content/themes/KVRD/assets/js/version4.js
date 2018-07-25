$(document).ready(function () {
    $('.videosSlider').flexslider({
        animation: "slide",
        slideshow: false,
        start: function () {
            $('.videosSlider .flex-prev').append('<i style="margin-left: 8px; color: #99999A">/</i>')

        }
    });

    $('.responsiveMenu .menu-item-has-children > a').append('<i class="fas fa-angle-down float-right arrowColor"></i>')

    function flexdestroy(selector) {

        var $els = $(selector);

        $els.each(function () {
            var $el = $(this);
            var $elClean = $el.clone();

            $elClean.find('.flex-viewport').children().unwrap();
            $elClean
                .removeClass('.popup-slider')
                .find('.clone, .flex-direction-nav, .flex-control-nav')
                .remove()
                .end()
                .find('*').removeAttr('style').removeClass(function (index, css) {
                // If element is SVG css has an Object inside (?)
                if (typeof css === 'string') {
                    return (css.match(/\bflex\S+/g) || []).join(' ');
                }
            });

            $elClean.insertBefore($el);
            $el.remove();
        });
    }

    $('.responsiveMenu .menu-item-has-children > a').click(function (e) {
        e.preventDefault();
        e.stopPropagation();
        if ($(this).parent().hasClass('sub-menu-opened')) {
            $(this).parent().removeClass('sub-menu-opened');
            $(this).parent().find('i').removeClass('fa-angle-up');
            $(this).parent().find('.sub-menu').css('display', 'none')
        }
        else {
            $(this).parent().addClass('sub-menu-opened');
            $(this).parent().find('i').addClass('fa-angle-up');
            $(this).parent().find('.sub-menu').css('display', 'block')
        }
    });


    $('.closeGallery').click(function () {
        $('.galleryPopUp').css({
            'opacity': 0,
            'z-index': -1,
        });
        flexdestroy('.popup-slider')
    });

    // $('.flex-next').prepend('<span class="mr-3 lightGray">/</span>');
    var pressRelease = new Swiper('.swiper-container.pressRelease', {
        slidesPerView: 4,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next.forRelease',
            prevEl: '.swiper-button-prev.forRelease',
        },
        breakpoints: {
            768: {
                slidesPerView: 1.1
            },
            1260: {
                slidesPerView: 2
            }
        }
    });

    $('.singleGalley').click(function () {
        $('.galleryPopUp').css({
            'opacity': 1,
            'z-index': 999
        });

        $('.popup-slider').flexslider({
            animation: "slide",
            slideshow: false,
            minItems: 1,
            start: function () {
                var totalSlides = $('.popup-slider .flex-control-nav li').length;
                $('.galleryPopUp .total').text(totalSlides);
                $('.galleryPopUp .flex-prev').append('<i style="margin-left: 8px; color: #99999A">/</i>');
            },
            after: function () {
                var currentIndex = $('.popup-slider li:has(.flex-active)').index('.flex-control-nav li') + 1;
                $('.galleryPopUp .current').text(currentIndex + ' / ')
            }
        });
    })



});

