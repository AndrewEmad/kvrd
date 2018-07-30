<?php get_header() ;
global $post;
$press = pods( $post->post_type, $post->ID );
?>

<section class="forFixed articelDetails">
    <div class="myContainer">
        <div class="projectImage">
            <img src="<?php echo get_the_post_thumbnail_url($press->field('id'),'kv_thumbnail') ?>" alt="">
        </div>
        <p class="articleTitle mainColor">
            <?php echo $press->field('title') ?>
        </p>
        <p class="f-12 textColor">
            <?php echo $press->field('content') ?>
        </p>
    </div>
</section>

<?php get_footer() ?>
