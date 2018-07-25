<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title() ?></title>
    <?php wp_head() ?>
</head>
<body>
<header>
    <?php $info = pods('company_info'); ?>
    <div class="top">
        <div class="myContainer clearfix">
            <a href="<?php echo home_url('/') ?>">
                <img src="<?php echo $info->field('logo')['guid'] ?>" alt="" class="float-left logo">
            </a>
            <div class="float-right mt-3">

                <div class="socialIcons mr-4 toHide">
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
                <?php get_search_form() ?>
                <a href="javascript:void(0)" class="mainColor mainHover searchIcon toHide">
                    <i class="fas fa-search"></i>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="bottom">
        <div class="myContainer clearfix position-relative">
            <a href="javascript:(void(0))" class="float-left navIcon">
                <i class="fas fa-bars mainColor f-18"></i>
            </a>
            <?php wp_nav_menu(array(
                'theme_location'        => 'primary',
                'menu_class'            => 'float-left d-in-large',
                'container'             => false
            )) ?>
            <div class="chat mainColorBg float-right d-flex justify-content-center align-items-center position-absolute">
                <a href="">
                    <i class="fas fa-comment mr-1"></i>
                    LIVE CHAT
                </a>
            </div>
        </div>
    </div>

</header>

<div class="responsiveMenu whiteBg position-fixed">
    <div class="top clearfix px-4 borderBottom d-flex align-items-center">
        <a href="" class="float-left">
            <img src="<?php echo $info->field('logo')['guid'] ?>" alt="" class="logo">
        </a>
        <?php get_search_form() ?>
        <div class="float-right toHide ml-auto">
            <div class="socialIcons d-inline-block">
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
            <span class="mainColor f-20 mr-2">|</span>
            <a href="javascript:void(0)" class="mainColor mainHover searchIcon">
                <i class="fas fa-search"></i>
            </a>
        </div>
    </div>
    <div class="px-4 clearfix borderBottom">
        <a href="javascript:void(0)" class="f-20 mainColor d-inline-block mainHover closeSubMenu">
            <i class="fas fa-times"></i>
        </a>
        <div class="chat mainColorBg float-right d-flex justify-content-center align-items-center">
            <a href="">
                <i class="fas fa-comment mr-1"></i>
                LIVE CHAT
            </a>
        </div>
    </div>
    <div class="px-4">
        <?php wp_nav_menu(array(
            'theme_location'        => 'mobile',
            'container'             => false,
            'walker'                => new KV_Nav_Walker()
        )) ?>
    </div>
</div>
