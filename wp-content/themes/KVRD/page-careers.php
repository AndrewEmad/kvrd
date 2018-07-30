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
            <?php while($careers->fetch()){
                $GLOBALS['pod'] = $careers;
                get_template_part('template-parts/career');
            }
            if($careers->total_found() > 6){
        ?>
        <button class="commonButton white mainColorBg border-0 mx-auto aperturaRegular" data-page="2" onclick="moreCareers.call(this)">
            More
        </button>
    <?php } ?>
        </div>
    </div>
</section>
<?php } ?>
<?php get_footer() ?>

