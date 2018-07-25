<?php get_header() ?>
<section class="projectPage p-ver-40">
    <div class="myContainer">
        <div class="clearfix d-flex flex-column d-md-block">
            <p class="mainColor aperturaRegular rightBorder">
                WHY DO WE
                USE IT?
            </p>
            <div class="smallHr mainColorBg"></div>
            <p class="mainColor aperturaRegular target order-3">
                It is a long established fact that a reader will be distracted by the readable content of a page
                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                distribution of letters, as opposed to using ‘Content here, content here’, making it look like
                readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their
                infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                (injected humour and the like).
            </p>
            <div class="projectImage centerImg-md">
                <img src="images/bottomImg.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- map -->
<section>
    <div class="map">
        <div class="myContainer position-relative">
            <div class="overMap mainColorBg">
                <p class="f-lg aperturaRegular mb-2">
                    LOCATION
                </p>
                <p class="f-md aperturaRegular mb-4">
                    KVRD. California
                    34 Tesla, Ste 100
                    Irvine, Ca, USA 92618
                </p>
                <p class="aperturaBold f-md mb-2">
                    For and information:
                </p>
                <p class="f-md aperturaRegular">
                    +201093057429
                </p>
            </div>
        </div>
    </div>
</section>
<!--Floor Plan Section-->
<section class="floorPlan text-center">
    <div class="myContainer">
        <span class="f-lg mainColor aperturaRegular letter-4">FLOOR PLAN</span>
        <div class="smallHr mainColorBg m-auto"></div>
        <p class="f-normal mainColor aperturaRegular letter-4">It is a long established fact that a reader will be
            distracted by the readable content of a page when looking at
            its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
            opposed to using ‘Content here, </p>
        <button class="mainColorBg f-normal">
            Floor Plan
        </button>
        <button class="mainColorBg f-normal">
            Brochure
        </button>
    </div>
</section>
<!--Photo Gallery-->
<section class="position-relative gallery">
    <div class="grayBg position-absolute"></div>
    <div class="myContainer position-relative">
        <div class="row">
            <div class="col-lg-3">
                <div class="galleryData">
                    <p class="f-lg aperturaRegular mainColor">PHOTO
                        GALLERY</p>
                    <a href="javascript:void(0)" class="d-block mainColor" data-index="1">
                        <i class="fas fa-caret-right"></i>Project design
                    </a>
                    <a href="javascript:void(0)" class="d-block" data-index="2">
                        construction progress
                    </a>
                </div>
            </div>
            <div class="col-lg-9">

                <div class="swiper-container design-slider gallerySlider slider-opened" data-index="1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/design.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/design.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/design.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-container construction-slider gallerySlider" data-index="2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/unique.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/unique.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="images/unique.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev designBtn f-18 mainColor letter-4 common" data-index="1">PREVIOUS</div>
            <div class="position-absolute designBtn f-18 sep lightGray common" data-index="1">/</div>
            <div class="swiper-button-next designBtn f-18 mainColor letter-4 common" data-index="1">NEXT</div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev constructionBtn f-18 mainColor letter-4 common" data-index="2">PREVIOUS</div>
            <div class="position-absolute constructionBtn f-18 sep lightGray common" data-index="2">/</div>
            <div class="swiper-button-next constructionBtn f-18 mainColor letter-4 common" data-index="2">NEXT</div>
        </div>
    </div>
</section>

<section class="details">
    <div class="myContainer">
        <p class="aperturaRegular f-lg mainColor">More Details</p>
        <form action="">
            <div class="row justify-content-center">
                <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone Number" class="form-control">
                </div>
                <button class="mainColorBg white">
                    Brochure
                </button>
            </div>
        </form>
    </div>
</section>
<?php get_footer() ?>
