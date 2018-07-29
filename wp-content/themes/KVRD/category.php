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

                <?php
                    $args = array('exclude' => '1','hide_empty' => 0);
                    $categories = get_categories($args);
                    $size = sizeof($categories);
                    $menu='';
                    foreach($categories as $category) {
                        $size--;
                        $menu .= '<a href = "'.get_category_link($category->cat_ID).'" class="' . ($category->cat_ID == get_query_var('cat')?'active':'') . '">' . $category->name . '</a>';
                        if($size!=0){
                            $menu .= " | ";
                        }
                    }

                echo $menu;
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