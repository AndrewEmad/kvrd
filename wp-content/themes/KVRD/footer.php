<footer>
    <?php $info = pods('company_info'); ?>
    <div class="top ">
        <div class="myContainer d-lg-flex align-items-center justify-content-between">
            <div class="footerElem clearfix">
                <a href="<?php echo home_url('/') ?>">
                    <img src="<?php echo $info->field('logo')['guid'] ?>" alt="" class="float-left logo">
                </a>
            </div>
            <div class="footerElem ">
                <p class="f-18 font-weight-bold white">OUR LOCATION</p>
                <div class="smallHr mt-3 mb-2"></div>
                <p class="f-12 white"><?php echo $info->field('address') ?></p>
            </div>
            <div class="footerElem ">
                <p class="f-18 font-weight-bold white">Email Us</p>
                <div class="smallHr mt-3 mb-2"></div>
                <p class="f-12 white"><?php echo $info->field('email') ?></p>
            </div>
            <div class="d-inline-block footerElem ">
                <p class="f-18 font-weight-bold white">FOR NEWSLETTER</p>
                <div class="smallHr mt-3 mb-2"></div>
                <form id="kv_subscribe" action="" class="position-relative">
                    <input type="email" placeholder="your email" class="letter-4 border-0" required="required">
                    <button class="position-absolute border-0 ">
                        <i class="fas fa-arrow-right white"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="bottom mainColorBg">
        <div class="myContainer clearfix">
            <span class="float-md-left d-block white f-12">© <?php echo date("Y"); ?> Envoy. All Rights Reserved.</span>
            <div class="socialIcons float-md-right d-inline-block">
                <a href="<?php echo $info->field('linkedin') ?>" class="">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="<?php echo $info->field('instagram') ?>" class="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?php echo $info->field('twitter') ?>" class="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="<?php echo $info->field('facebook') ?>" class="">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
        </div>
    </div>
    <?php wp_footer() ?>
</footer>
