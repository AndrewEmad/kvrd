<?php get_header() ?>

    <section
        class="ourProject forFixed">
        <div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'kv_cover') ?>'); background-size: cover" class="firstSection mb-0">

        </div>
        <div class="myContainer">
            <div class="mainColorBg pageTitle">
                <p class="white letter-4 f-36" style="width: 400px!important;">Mission & Vision</p>
            </div>

        </div>
    </section>

    <section class="letterDescription">
        <div class="myContainer">
            <div class="imgContainer centerImg">
                <img src="<?php echo wp_get_attachment_image_url(get_field('mission_photo', get_the_ID()),'kv_knowledge_small') ?>" alt="">
            </div>
            <div class="mission">
                <div class="mainColorBg pageTitle">
                    <p class="f-big after white">MISSION</p>
                    <p class="f-normal white">
                        <?php echo get_field('mission',get_the_ID()) ?>
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section class="letterDescription">
        <div class="myContainer">
            <div class="imgContainer centerImg">
                <img src="<?php echo wp_get_attachment_image_url(get_field('vision_photo', get_the_ID()),'kv_knowledge_small') ?>" alt="">
            </div>
            <div class="mission">
                <div class="mainColorBg pageTitle">
                    <p class="f-big after white">Vision</p>
                    <p class="f-normal white">
                        <?php echo get_field('vision',get_the_ID()) ?>

                    </p>
                </div>
            </div>

        </div>
    </section>

<?php get_footer() ?>