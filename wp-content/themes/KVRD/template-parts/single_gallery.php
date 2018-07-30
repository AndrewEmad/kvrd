<?php global $photos ?>
<div class="col-md-4 singleGalley galleryHover" onclick="populatePhotos(<?php echo $photos->field('id').', \''.$photos->field('title') ?>')">
    <div class="centerImg-md position-relative">
        <a href="javascript:void(0)"><img src="<?php echo pods_image_url($photos->field('photos')[0]['guid'],'kv_galary_large') ?>" alt="" class="glalleryImg"></a>
        <div class="mainColorBg centerDetails clearfix">
                        <span class="f-big float-left">
                            <?php echo $photos->field('title') ?>
                        </span>
            <span class="f-normal float-right">
                            1/<?php echo sizeof($photos->field('photos')) ?> Photos
                        </span>
        </div>
    </div>
</div>