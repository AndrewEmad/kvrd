<?php get_header() ?>
<?php $photos = pods('photos',array('limit' => 4)) ?>
<?php $videos = pods('videos',array('limit' => 20)) ;?>
<?php $press = pods('press_release',array('limit'  =>  20)) ;?>
    <section class="forFixed mediaCenter">
        <div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'kv_cover') ?>'); background-size: cover; background-position: right">

        </div>
        <div class="myContainer">
            <div class="mainColorBg pageTitle">
                <p class="white f-36 letter-4 text-uppercase">Media Center</p>
            </div>
        </div>
    </section>

    <section class="centerGallery mrg-50">
        <div class="myContainer">
            <p class="sectionTitle f-big after">
                PHOTO GALLERY
            </p>

            <div class="row">
                <?php
                $cnt = 0;
                while($photos->fetch()){
                    $GLOBALS['photos']=$photos;
                    if($cnt < 1 || $cnt > 2){
                        get_template_part('template-parts/single_gallery');
                    }
                    else{
                        if($cnt==1){?>
                         <div class="col-md-4 singleGalley">
                         <?php
                        }
                        get_template_part('template-parts/subgallery');

                        if($cnt == 2){ ?>
                            </div>
                    <?php }
                    }
                    $cnt++;
                } ?>
            </div>
        </div>
        <div class="galleryPopUp projectWrapper">
            <div class="myContainer common-slider-btn position-relative clearfix">
                <a href="javascript:void(0)" class="float-right mainColor f-20 closeGallery">
                    <i class="fas fa-times"></i>
                </a>
                <div class="flexConatiner projects-slider">
                    <div class="popup-slider flexslider">
                        <div class="flex-viewport">
                            <ul class="slides" id="photos-slider">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="centerVideo projectWrapper mrg-50">
        <div class="myContainer common-slider-btn position-relative">
            <p class="sectionTitle f-big after">
                VIDEO GALLERY
            </p>
            <div class="flexConatiner projects-slider">
                <div class="videosSlider flexslider">
                    <div class="flex-viewport">
                        <ul class="slides">
                            <?php while($videos->fetch()){ ?>
                                <li class="position-relative galleryHover">
                                    <div class="imgContainer">
                                        <img src="<?php echo $videos->field('cover')['guid'] ?>" alt="" >
                                        <video controls="" autoplay class="videoCart">
                                            <source src="<?php echo $videos->field('video')['guid'] ?>">
                                        </video>
                                    </div>
                                    <div class="position-absolute subVideo">
                                        <a href="javascript:void(0)" class="f-big">
                                            <i class="far fa-play-circle"></i>
                                        </a>
                                    </div>
                                    <div class="mainColorBg centerDetails clearfix">
                                    <span class="f-big float-left">
                                        <?php echo $videos->field('title') ?>
                                    </span>
                                        <span class="f-normal float-right">
                                        <?php
                                        $id = pods_image_id_from_field($videos->field('video'));
                                        $video_meta = get_post_meta( $id, '_wp_attachment_metadata', true );
                                        echo $video_meta['length_formatted'];
                                        ?>
                                    </span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="release mrg-50">
        <div class="myContainer position-relative">
            <p class="sectionTitle f-big after">
                PRESS RELEASE
            </p>
            <div class="swiper-container pressRelease">
                <div class="swiper-wrapper">
                    <?php while($press->fetch()){?>
                    <div class="swiper-slide">
                        <div class="imgContainer centerImg">
                            <img src="<?php echo get_the_post_thumbnail_url($press->field('id'),'kv_press_release') ?>" alt="">
                        </div>
                        <div class="releaseContainer clearfix">
                            <p class="f-md">
                                <?php
                                $arr=array();
                                preg_match_all('/\b([0-9A-Za-z]{2,})\b/', $press->field('title'), $arr);
                                $keywords = array_slice(array_unique($arr[0]),0,3);
                                echo join(' ', $keywords); ?>
                            </p>
                            <p class="f-normal description">
                                <?php echo $press->field('excerpt'); ?>
                            </p>
                            <button class="f-12 letter-4 p-3 commonReadMore mainColor" onclick="location.href='<?php echo get_permalink($press->field('id')) ?>'">
                                READ MORE
                            </button>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-button-prev forRelease">PREVIOUS
                <span class="ml-2">/</span>
            </div>
            <div class="swiper-button-next forRelease">NEXT
            </div>
        </div>
    </section>

<?php get_footer() ?>