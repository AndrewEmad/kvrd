<?php $projects = $GLOBALS['pods']; ?>
<div class="singleProject clearfix position-relative mrg-btm-lg">
    <div class="col-md-9 image centerImg-md p-0">
        <img src="<?php echo get_the_post_thumbnail_url($projects->field('id')) ?>" alt="">
    </div>
    <div class="mainColorBg commonDiv float-right">
        <div class="projectLogo m-auto">
            <img src="<?php echo $projects->field('logo')['guid'] ?>" alt="">
            <p class="aperturaRegular text-uppercase desc">
                <?php echo $projects->field('content') ?>
            </p>
            <a href="<?php echo get_the_permalink($projects->field('id')) ?>" class="aperturaRegular d-inline-block">MORE</a>
        </div>

    </div>
</div>