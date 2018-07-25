<?php get_header();
?>
    <section style="background-image: url('<?php echo get_the_post_thumbnail_url(108,'kv_cover') ?>'); background-size: cover" class="firstSection ourProject">
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
                    'current_category'    => get_query_var('cat'),
                    'echo'                => 0,
                    'exclude'             => '1',
                    'hide_empty'          => 0,
                    'separator'           => ' | ',
                    'style'               => '',
                    'title_li'            => ''
                );
                $output = wp_list_categories($args);
                echo substr( $output, 0, sizeof($output) - 6);
                ?>
            </p>
<?php
$projects = pods('project',array(
    'limit'      => 2,
    'where'      => 'category.term_id = '.get_query_var('cat')
));
$cnt = 0;
if($projects->total()>0) {
    while ($projects->fetch() && $cnt<2) {
        $GLOBALS['pods'] = $projects;
        get_template_part('template-parts/project');
    }
}
if($projects->total() > 2){
    ?>

    <button class="commonButton white mainColorBg border-0 mx-auto aperturaRegular">
        More
    </button>
<?php } ?>
    </div>
    </section>

<?php get_footer() ?>