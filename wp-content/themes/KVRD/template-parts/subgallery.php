<?php global $photos ?>
<div class="subGallery galleryHover">
    <div class="centerImg-md">
        <a href="javascript:void(0)"><img src="<?php echo pods_image_url($photos->field('photos')[0]['guid'],'kv_galary_small') ?>" alt="" class="glalleryImg"></a>
    </div>
    <div class="mainColorBg centerDetails clearfix">
                        <span class="f-big float-left">
                            <?php echo $photos->field('title') ?>
                        </span>
        <span class="f-normal float-right">
            1/<?php echo sizeof($photos->field('photos')) ?> Photos
        </span>
    </div>
</div>