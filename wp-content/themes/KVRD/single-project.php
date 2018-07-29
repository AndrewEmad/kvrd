<?php get_header() ;
global $post;
$project = pods( $post->post_type, $post->ID );
?>

<section style="background-image: url('<?php echo pods_image_url($project->field('cover')['guid'],'kv_project_cover');?>'); background-size: cover; background-position: top" class="firstSection">
    <div class="myContainer position-relative">
        <div class="mainColorBg position-absolute commonDiv">
            <h1 class="white letter-4"><?php echo $project->field('title')?></h1>
            <div class="smallHr"></div>
            <p class="f-18 white desc letter-4 twoLines col-10">
                <?php echo $project->field('excerpt') ?>
            </p>
        </div>
    </div>
</section>
<section class="projectPage p-ver-40">
    <div class="myContainer">
        <div class="clearfix d-flex flex-column d-md-block">
            <p class="mainColor aperturaRegular rightBorder">
                WHY DO WE
                USE IT?
            </p>
            <div class="smallHr mainColorBg"></div>
            <p class="mainColor aperturaRegular target order-3">
                <?php echo $project->field('why_use') ?>
            </p>
            <div class="projectImage centerImg-md">
                <img src="<?php echo pods_image_url($project->field('usage_photo'),'kv_knowledge_large') ?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- map -->
<section>
    <div class="map">
        <div class="myContainer position-relative">
            <div class="overMap mainColorBg">
                <div id="map"></div>
                <p class="f-lg aperturaRegular mb-2">
                    LOCATION
                </p>
                <p class="f-md aperturaRegular mb-4">
                    <?php echo $project->field('address') ?>
                </p>
                <p class="aperturaBold f-md mb-2">
                    For and information:
                </p>
                <p class="f-md aperturaRegular">
                    <?php echo $project->field('phone') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!--Floor Plan Section-->
<section class="floorPlan text-center">
    <div class="myContainer">
        <span class="f-lg mainColor aperturaRegular letter-4">FLOOR PLAN</span>
        <div class="smallHr mainColorBg m-auto"></div>
        <p class="f-normal mainColor aperturaRegular letter-4">
            <?php echo $project->field('floor_plan') ?>
        </p>
        <button class="mainColorBg f-normal" onclick="window.open('<?php echo $project->field('floor_plan_file')['guid'] ?>', '_blank')">
            Floor Plan
        </button>
        <button class="mainColorBg f-normal" onclick="window.open('<?php echo $project->field('brochure')['guid'] ?>', '_blank')">
            Brochure
        </button>
    </div>
</section>
<!--Photo Gallery-->
<section class="position-relative gallery">
    <div class="grayBg position-absolute"></div>
    <div class="myContainer position-relative">
        <div class="row">
            <div class="col-lg-3">
                <div class="galleryData">
                    <p class="f-lg aperturaRegular mainColor">PHOTO
                        GALLERY</p>
                    <a href="javascript:void(0)" class="d-block mainColor" data-index="1">
                        <i class="fas fa-caret-right"></i>Project design
                    </a>
                    <a href="javascript:void(0)" class="d-block" data-index="2">
                        construction progress
                    </a>
                </div>
            </div>
            <?php $photos = $project->field('project_design_photos');?>

            <div class="col-lg-9">
                <div class="swiper-container design-slider gallerySlider slider-opened" data-index="1">
                    <div class="swiper-wrapper">
                    <?php foreach($photos as $photo){ ?>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="<?php echo pods_image_url($photo['guid'],'kv_slider_small') ?>" alt="">
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
                <?php $photos = $project->field('construction_progress_photos');?>

                <div class="swiper-container construction-slider gallerySlider" data-index="2">
                    <div class="swiper-wrapper">
                        <?php foreach($photos as $photo){ ?>
                        <div class="swiper-slide">
                            <div class="centerImg-md">
                                <img src="<?php echo pods_image_url($photo['guid'],'kv_slider_small') ?>" alt="">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev designBtn f-18 mainColor letter-4 common" data-index="1">PREVIOUS</div>
            <div class="position-absolute designBtn f-18 sep lightGray common" data-index="1">/</div>
            <div class="swiper-button-next designBtn f-18 mainColor letter-4 common" data-index="1">NEXT</div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev constructionBtn f-18 mainColor letter-4 common" data-index="2">PREVIOUS</div>
            <div class="position-absolute constructionBtn f-18 sep lightGray common" data-index="2">/</div>
            <div class="swiper-button-next constructionBtn f-18 mainColor letter-4 common" data-index="2">NEXT</div>
        </div>
    </div>
</section>

<section class="details">
    <div class="myContainer">
        <p class="aperturaRegular f-lg mainColor">More Details</p>
        <form action="" id="kv_more_details">
            <div class="row justify-content-center">
                <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input placeholder="Phone Number" class="form-control"
                           type="tel" id="phone" name="phone" pattern="[0-9]{11}" required="required" />
                </div>
                <button type='submit' class="mainColorBg white">
                    Brochure
                </button>
            </div>
        </form>
    </div>
</section>
<script>
    <?php $location = get_field('location', $project->field('id')); ?>
    function initMap() {
        var myLatLng = {lat: <?php echo $location['lat'] ?>, lng: <?php echo $location['lng'] ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 18,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Location'
        });
        marker.setMap(map);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmvCRg5qCb4wZUD4WvrDdyD1IYp_zsihE&callback=initMap"
        async defer></script>
<?php get_footer() ?>
