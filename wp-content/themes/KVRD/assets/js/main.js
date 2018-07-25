$(window).ready(function () {
    var video = document.getElementById("myVideo");
    var btn = document.getElementById("myBtn");
    $('.myPlay').click(function () {
        if (video.paused) {
            video.play();
            btn.innerHTML = '<i class="fas fa-pause-circle"></i>'

        } else {
            video.pause();
            btn.innerHTML = '<i class="fas fa-play-circle"></i>'
        }
    });
    if (video != null) {
        video.onended = function (e) {
            btn.innerHTML = '<i class="far fa-play-circle"></i>'
        };
    }
    $('.mute a').click(function () {
        video.muted = !(video.muted);
        if (video.muted) {
            document.getElementById('mute').innerHTML = '<i class="fas fa-volume-off"></i>'
        }
        else
            document.getElementById('mute').innerHTML = '<i class="fas fa-volume-up"></i>'
    });
    // home first slider
    var homeFirstSlider = new Swiper('.home-first-slider', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next.allWordsbtn',
            prevEl: '.swiper-button-prev.allWordsbtn',
        },
        autoplay: {
            delay: 5000,
        },
        speed: 1000,
    });
    homeFirstSlider.on('slideChange', function (e) {
        $('.letterContent').addClass('desc');
        $('.emptyDiv button').css('display', 'block')
    });
    // project PAe sliders
    var designSlider = new Swiper('.design-slider', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.designBtn.swiper-button-next',
            prevEl: '.designBtn.swiper-button-prev',
        },
        observer: true,
        observeParents: true,
    });
    var constructionSlide = new Swiper('.construction-slider', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.constructionBtn.swiper-button-next',
            prevEl: '.constructionBtn.swiper-button-prev',
        },
        observer: true,
        observeParents: true,
    });

    var x = 0;

    /* add more inputs when clicking new Experience */
    var count = 0;
    var empNo = 2;
    var el = document.getElementsByClassName('singleEmployee');
    if (el.length != 0) {
        var data = (document.getElementsByClassName('singleEmployee')[0]).outerHTML;
        $('.singleBtn').click(function (e) {
            if (count < 2) {
                e.preventDefault();
                $('.toAppend').append(data);
                count++;
                el[count].getElementsByTagName('span')[0].innerText = "Employer " + parseInt(empNo);
                var input = el[count].getElementsByTagName('input');
                for (var i = 0; i < input.length; i++) {
                    var attributeName = (input[i].getAttribute('placeholder')).toLowerCase() + parseInt(empNo);
                    input[i].setAttribute('name', attributeName.replace(/\s/g, ''));
                }
                empNo++;
                $('.todate').datepicker();
            }
            if (count == 2) {
                $('.singleBtn').css('display', 'none')
            }
        });
    }
    / *searchForm*/
    $('.searchIcon').click(function (e) {
        e.stopPropagation();
        var parent = $(this).parents().eq(2);
        parent.find('.searchForm').css('display', 'inline-block');
        parent.find('.searchForm').addClass('searchOpened');
        parent.find('.toHide').css('display', 'none');
    });

    $(document).click(function () {
        if ($('.searchForm').hasClass('searchOpened')) {
            $('.searchForm').css('display', 'none');
            $('.searchForm').removeClass('searchOpened');
            $('.toHide').css('display', 'inline-block');
        }
    });

    $('.searchForm input').click(function (e) {
        e.stopPropagation();
    });
    / *searchForm end*/


    $('.navIcon .fa-bars').click(function () {
        // $('header').css('position', 'fixed');
        $('.responsiveMenu').addClass('displayResponsive');
        $('header').css('position', 'fixed')
        $('.navIcon').addClass('displayClose');
    });
    //
    $('.navIcon .closeSubMenu').click(function () {
        // $('header').css('position', 'relative');
        if ($(window).width() < 769 ) {
            $('header').css('position', 'relative');
        }
        $('.responsiveMenu').removeClass('displayResponsive');
        $('.navIcon').removeClass('displayClose');
    });


    var screenSize = window.innerWidth;
    if (screenSize < 768) {
        $('.gallery .common').css('display', 'none');
    }

    function activateSlider(clickedIndex) {
        $('.gallery .gallerySlider[data-index=' + clickedIndex + "]").addClass('slider-opened');
        if (screenSize >= 768) {
            $('.gallery .common[data-index=' + clickedIndex + "]").css('display', 'block');
        }
    }

    $('.galleryData a').click(function (e) {
        $('.galleryData a i').remove();
        $('.galleryData a').removeClass('mainColor ');
        $(this).prepend('<i class="fas fa-caret-right"></i>');
        $(this).addClass('mainColor ');
        var clickedIndex = $(this).attr('data-index');
        var openedIndex = $('.gallery .slider-opened').attr('data-index');
        if (clickedIndex != openedIndex) {
            $('.gallery .slider-opened').removeClass('slider-opened');
            $('.gallery .common').css('display', 'none');
            activateSlider(clickedIndex);
        }
    });

    $('.sub-menu .current-menu-item').addClass('head');
    $('.sub-menu .current-menu-item').prepend('<i class="fas fa-angle-right mainColor"></i>')

    $('.subVideo .video-play').click(function () {

        var video = document.getElementById("myVideo2");

        video.src = this.dataset.url;
        console.log(video.src)
        $('.pop-up').show();
        if (video.paused) {
            video.play();
        }
    });

    $('.closeMyPopup').click(function (e) {
        $('.pop-up').css('display', 'none');
        if ($(this).parents().eq(1).find('video').length == 1) {
            var video = document.getElementById("myVideo2");
            video.pause();
        }
    })
});