<?php get_header() ?>
<?php $pod = pods('about',array('where' => 'id = 88')); ?>

    <section
        class="ourProject forFixed">
        <div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'kv_cover') ?>'); background-size: cover" class="firstSection mb-0">

        </div>
        <div class="myContainer">
            <div class="mainColorBg pageTitle">
                <p class="white letter-4 f-36" style="width: 400px!important;">Our Story</p>
            </div>
        </div>
    </section>
    <section class="home-unique d-flex position-relative">
        <div class="grayBg align-self-center">
            <div class="myContainer">
                <div class="uniqueWrapper">
                    <p class="text-uppercase f-lg mainColor uniqueTitle"><?php echo $pod->field('title') ?></p>
                    <div class="smallHr mainColorBg d-none d-md-block"></div>
                    <div class="toChangePos clearfix">
                        <p class="letter-4">
                            <?php echo $pod->field('content') ?>
                        </p>
                    </div>
                    <div class="uniqueImg centerImg-md">
                        <img src="<?php echo get_the_post_thumbnail_url($pod->field('id'),'kv_unique_small') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projectPage p-ver-40">
        <div class="myContainer">
            <div class="clearfix d-flex flex-column d-md-block">
                <p class="mainColor aperturaRegular rightBorder text-uppercase">Why do we use it? </p>
                <div class="smallHr mainColorBg"></div>
                <p class="aperturaRegular target order-3 leftBorder">
                    <?php echo get_field('why_use_it',get_the_ID()); ?>
                </p>
                <div class="projectImage centerImg-md">
                    <img src="http://localhost/kvrd/wp-content/themes/KVRD2/asset/images/bottomImg.png" alt="">
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>