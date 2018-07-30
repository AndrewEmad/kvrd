<?php $careers = $GLOBALS['pod'] ?>
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