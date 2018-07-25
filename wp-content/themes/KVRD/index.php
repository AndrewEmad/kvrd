<?php get_header() ?>

<!-- Video Section-->
<?php $video = pods('home_video')->field('video');
    $photo = pods('home_video')->field('photo');
    if($video && $photo){
?>
<section class="home-1 position-relative">
    <video muted autoplay class="myVideo" id="myVideo">
        <source src="<?php echo $video['guid'] ?>" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <img src="<?php echo pods_image_url($photo['guid'],'kv_video_cover') ?>" alt="" class="forVideo">
    <div class="position-absolute play">
        <a href="#" id="myBtn">
            <i class="fas fa-play-circle"></i>
        </a>
    </div>
</section>
<?php } ?>

<!-- Slider Section -->

<?php $about = pods('about',array('limit' => 5,'where' => "id != 88"));
    if($about->total() > 0){
?>
        <section class="mrg-top-xg mrg-btm-xg allWords">
            <div class="myContainer position-relative common-slider-btn">
                <div class="swiper-container home-first-slider ">
                    <div class="swiper-wrapper">

                        <?php while($about->fetch()){ ?>
                        <div class="swiper-slide">
                            <div class="imgWrapper">
                                <img src="<?php echo get_the_post_thumbnail_url($about->field('id'), 'kv_knowledge_large'); ?>" alt="">
                            </div>
                            <div class="emptyDiv">
                                <div class="absoluteDiv">
                                    <p class="mainColor aperturaRegular singlechar"><?php echo $about->field('title')[0] ?></p>
                                    <div class="mainColorBg around-Words">
                                        <p class="head white letter-4 text-uppercase"><?php echo $about->field('title') ?></p>
                                        <div class="smallHr"></div>
                                        <p class="white desc letter-4">
                                            <?php echo $about->field('excerpt')?>
                                        </p>
                                        <button class="mainColor f-xmd border-0 letter-4 p-3 whiteBg">
                                            READ MORE
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>

                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev allWordsbtn f-18 mainColor letter-4">PREVIOUS</div>
                <div class="position-absolute f-18 sep lightGray">/</div>
                <div class="swiper-button-next allWordsbtn f-18 mainColor letter-4">NEXT</div>
            </div>
        </section>

<?php } ?>

<!-- Unique Section -->

<?php
    $pod = pods('about',array('where' => 'id = 88'));
    if($pod){?>

        <section class="home-unique d-flex position-relative">
            <div class="grayBg align-self-center">
                <div class="myContainer">
                    <div class="uniqueWrapper">
                        <p class="text-uppercase f-lg mainColor"><?php echo $pod->field('title') ?></p>
                        <div class="smallHr mainColorBg d-none d-md-block"></div>
                        <div class="toChangePos">
                            <p class="f-md mainColor twoLines"><?php echo $pod->field('excerpt') ?></p>
                            <button class="mainColor f-18 border-0 letter-4 p-3 whiteBg">
                                READ MORE
                            </button>
                        </div>
                        <div class="uniqueImg centerImg-md">
                            <img src="<?php echo get_the_post_thumbnail_url($pod->field('id'), 'kv_unique_small'); ?>" alt="" >
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php } ?>



<?php get_footer() ?>
