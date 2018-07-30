<?php get_header() ?>


    <section
        class="ourProject forFixed">
        <div style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'kv_cover') ?>'); background-size: cover" class="firstSection mb-0">

        </div>
        <div class="myContainer">
            <div class="d-flex flex-wrap">
                <div class="mainColorBg pageTitle">
                    <p class="white letter-4 f-36" style="width: 400px!important;">The Essence Beyond</p>
                    <span class="f-md">K V R D Name Inspiration</span>
                </div>
                <div class="wordDescription">
                    <p class="f-normal textColor letter-4">
                        Originaly the name KVRD was not just a name that outlines the company, it also
                    </p>
                    <div class="d-flex justify-content-between">
                        <p class="f-normal mainColor">
                            <span class="font-weight-bold">K</span>
                            <span> Knowledge</span>
                        </p>
                        <p class="f-normal mainColor">
                            <span Vision="font-weight-bold">V</span>
                            <span> Vision</span>
                        </p>
                        <p class="f-normal mainColor">
                            <span class="font-weight-bold">R</span>
                            <span> Research</span>
                        </p>
                        <p class="f-normal mainColor">
                            <span class="font-weight-bold">D</span>
                            <span> Development</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $about = pods('about',array() );
    while($about->fetch()){
        if(get_field('exclude_from_slider',$about->field('id'))){continue;}
?>

    <section class="letterDescription">
        <div class="myContainer">
            <div class="imgContainer centerImg">
                <img src="<?php echo get_the_post_thumbnail_url($about->field('id'),'kv_knowledge_small') ?>" alt="">
            </div>
            <div class="text">
                <div class="">
                    <span><?php echo $about->field('title')[0] ?></span>
                    <div class="mainColorBg pageTitle">
                        <p class="white letter-4 f-big align-self-center after"><?php echo $about->field('title') ?></p>
                    </div>
                </div>
                <p class="f-normal description letter-4">
                    <?php echo $about->field('content') ?>
                </p>
            </div>

        </div>
    </section>


<?php } get_footer() ?>