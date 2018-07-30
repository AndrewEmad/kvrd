<?php get_header()?>
<div style="height:500px;width:100%;padding:200px">
<?php while(have_posts()){
    the_post();?>
    <a style="color:blue"href="<?= get_the_permalink(get_the_ID()); ?>"><?= get_the_title();?></a>
    <br/>
<?php } ?>
    </div>
<?php get_footer() ?>