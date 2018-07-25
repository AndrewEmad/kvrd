<?php get_header() ?>

<section style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'kv_cover') ?>'); background-size: cover" class="firstSection">
    <div class="myContainer position-relative">
        <div class="mainColorBg position-absolute commonDiv">
            <h1 class="white letter-4 text-uppercase"><?php echo get_the_title() ?></h1>
            <div class="smallHr"></div>
            <div class="row">
                <p class="f-normal white desc letter-4 twoLines col-10">
                    <?php echo get_the_content() ?></p>
            </div>
        </div>
    </div>
</section>
<?php $careers = pods('career', array('limit'   => 6));
    if($careers){
?>
<section class="p-ver-40">
    <div class="myContainer">
        <div class="row">
            <?php while($careers->fetch()){?>
            <div class="col-md-6 col-xl-4">
                <div class="singleCarer">
                    <p class="f-big aperturaRegular letter-4"><?php echo $careers->field('title') ?></p>
                    <p class="aperturaRegular twoLines letter-4 explain f-normal">
                        <?php echo $careers->field('content') ?>
                    </p>
                    <button class="aperturaRegular border-0 commonButton" onclick="location.href = '<?php echo get_the_permalink($careers->field('id')) ?>'">
                        Apply now
                    </button>
                </div>
            </div>
                <?php }?>
        </div>
        <button class="commonButton white mainColorBg mx-auto mt-20 border-0 moreCarers">
            More
        </button>
    </div>
</section>
<?php } ?>
<?php get_footer() ?>

