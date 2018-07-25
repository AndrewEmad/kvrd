<?php get_header() ?>


    <section style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'kv_cover') ?>'); background-size: cover" class="firstSection ourProject">
        <div class="myContainer position-relative">
            <div class="mainColorBg position-absolute commonDiv">
                <h1 class="white letter-4">Our
                    Projects</h1>
            </div>
        </div>
    </section>
    <section class="allProjects mrg-btm-lg">
        <div class="myContainer">
            <p class="text-center text-md-right mrg-btm-xg">

                <?php $args = array(
                    'child_of'            => 0,
                    'current_category'    => 0,
                    'depth'               => 0,
                    'echo'                => 0,
                    'exclude'             => '1',
                    'exclude_tree'        => '',
                    'feed'                => '',
                    'feed_image'          => '',
                    'feed_type'           => '',
                    'hide_empty'          => 0,
                    'hide_title_if_empty' => false,
                    'hierarchical'        => true,
                    'order'               => 'ASC',
                    'orderby'             => 'name',
                    'separator'           => ' | ',
                    'show_count'          => 0,
                    'show_option_all'     => '',
                    'show_option_none'    => '',
                    'style'               => '',
                    'taxonomy'            => 'category',
                    'title_li'            => '',
                    'use_desc_for_title'  => 1,
                );
                $output = wp_list_categories($args);
                echo substr( $output, 0, sizeof($output) - 6);
                ?>
            </p>
            <?php $projects = pods('project',array('limit'      => 2));
                   while($projects->fetch()){
            ?>

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
                        <a href="#" class="aperturaRegular d-inline-block">MORE</a>
                    </div>

                </div>
            </div>

            <?php } ?>
            <button class="commonButton white mainColorBg border-0 mx-auto aperturaRegular">
                More
            </button>

        </div>
    </section>

<?php get_footer() ?>