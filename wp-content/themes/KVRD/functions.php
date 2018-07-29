<?php

// Theme Supports
add_theme_support('menus');
add_theme_support('post-thumbnails');
define('ACF_EARLY_ACCESS', '5');
include "navwalker.php";
/*
 * Enqueue Styles & Scripts
 * Author: Andrew Emad
 */
function kv_enqueue(){
    wp_register_style('kv_bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_register_style('kv_swiper',get_template_directory_uri().'/assets/css/swiper.min.css');
    wp_register_style('kv_fontawesome',get_template_directory_uri().'/assets/css/fontawesome-all.min.css');
    wp_register_style('kv_reset',get_template_directory_uri().'/assets/css/reset.css');
    wp_register_style('kv_common',get_template_directory_uri().'/assets/css/common.css');
    wp_register_style('kv_style',get_template_directory_uri().'/assets/css/style.css');
    wp_register_style('kv_flexslider',get_template_directory_uri().'/assets/css/flexslider.css');

    wp_enqueue_style('kv_bootstrap');
    wp_enqueue_style('kv_swiper');
    wp_enqueue_style('kv_fontawesome');
    wp_enqueue_style('kv_reset');
    wp_enqueue_style('kv_common');
    wp_enqueue_style('kv_style');
    wp_enqueue_style('kv_flexslider');

    wp_deregister_script('jquery');
    wp_register_script('kv_jquery',get_template_directory_uri().'/assets/js/jquery-3.3.1.min.js');
    wp_register_script('kv_bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_register_script('kv_swiper',get_template_directory_uri().'/assets/js/swiper.min.js');
    wp_register_script('kv_main',get_template_directory_uri().'/assets/js/main.js');
    wp_register_script('kv_flexslider',get_template_directory_uri().'/assets/js/jquery.flexslider-min.js');
    wp_register_script('kv_version4',get_template_directory_uri().'/assets/js/version4.js');

    wp_enqueue_script('kv_jquery');
    wp_enqueue_script('kv_bootstrap');
    wp_enqueue_script('kv_swiper');
    wp_enqueue_script('kv_main');
    wp_enqueue_script('kv_flexslider');
    wp_enqueue_script('kv_version4');
}
add_action('wp_enqueue_scripts','kv_enqueue');


/*
 * Theme setup & configurations
 * Author: Andrew Emad
 */
function kv_theme_setup(){
    register_nav_menu( 'primary', __('Primary Menu'));
    register_nav_menu( 'mobile', __('Mobile Menu'));
    add_image_size( 'kv_knowledge_large', '1216', '700',true );
    add_image_size( 'kv_unique_small', '701', '701',true  );
    add_image_size( 'kv_slider_big', '1132', '670',true  );
    add_image_size( 'kv_cover', '1286', '701',true  );
    add_image_size( 'kv_thumbnail', '964', '373' ,true );
    add_image_size( 'kv_knowledge_small', '1216', '452',true  );
    add_image_size( 'kv_slider_small', '783', '503',true  );
    add_image_size( 'kv_galary_large', '392', '594',true  );
    add_image_size( 'kv_galary_small', '392', '287',true  );
    add_image_size( 'kv_project_thumbnail', '1047', '620',true  );
    add_image_size( 'kv_unique_large', '1294', '831',true  );
    add_image_size( 'kv_project_cover', '1216', '700' ,true );
    add_image_size( 'kv_knowledge_large', '1216', '470' ,true );
    add_image_size( 'kv_video_cover', '904', '330' ,true );
}
add_action('after_setup_theme','kv_theme_setup');


/*
 * Enqueue scripts for subscribe
 * Author: Andrew Emad
 */
function kv_subscribe_scripts() {

    wp_register_script( 'kv_subscribe', get_template_directory_uri() . '/assets/js/subscribe.js' );
    wp_localize_script( 'kv_subscribe', 'subscribe_params', array(
        'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX

    ) );
    wp_enqueue_script( 'kv_subscribe' );
}
add_action('wp_enqueue_scripts','kv_subscribe_scripts');


/*
 * Handler for subscribe
 * Author: Andrew Emad
 */
function kv_subscribe_handler(){

    $response = array(
        'status'    => 'succeed',
        'message'   => 'Thank you for subscribing KVRD.'
    );

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $respone['status'] = 'failed';
        $response['message'] = "Please enter a valid email address";
        die(json_encode($response));
    }

    global $wpdb,$table_prefix;
    $status = $wpdb->insert($table_prefix.'mailpoet_subscribers',array(
        'first_name'            => ' ',
        'last_name'             => ' ',
        'email'                 => $_POST['email']
    ));
    if($status === false){
        $respone['status'] = 'failed';
        $response['message'] = "Please Try again later !";
    }
    die(json_encode($response));
}
add_action('wp_ajax_subscribe', 'kv_subscribe_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_subscribe', 'kv_subscribe_handler'); // wp_ajax_nopriv_{action}


/*
 * Enqueue scripts for subscribe
 * Author: Andrew Emad
 */
function kv_project_details_scripts() {

    wp_register_script( 'kv_details', get_template_directory_uri() . '/assets/js/project_details.js' );
    wp_localize_script( 'kv_details', 'project_details_params', array(
        'ajaxurl'   => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX
    ) );
    wp_enqueue_script( 'kv_details' );
}
add_action('wp_enqueue_scripts','kv_project_details_scripts');


/*
 * Handler for subscribe
 * Author: Andrew Emad
 */
function kv_project_details_handler(){

    $response = array(
        'status'    => 'succeed',
        'message'   => 'Thank you. We will send an email to you with additional details.'
    );

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $respone['status'] = 'failed';
        $response['message'] = "Please enter a valid email address";
        die(json_encode($response));
    }
    if(!preg_match("/^[0-9]{11}$/", $_POST['phone'])) {
        $respone['status'] = 'failed';
        $response['message'] = "Please enter a valid phone number";
        echo json_encode($response);
        return;
    }

    if(!wp_mail('andrewen2010@yahoo.com','Project Details',
        '<div><span>Name: </span><span>'.$_POST['name'].'</span></div>'.
        '<div><span>Email: </span><span>'.$_POST['email'].'</span></div>'.
        '<div><span>Phone: </span><span>'.$_POST['phone'].'</span></div>'
        )){
        $response = array(
            'status'    => 'failed',
            'message'   => 'Error ! Please try again later !'
        );
    }
    die(json_encode($response));
}
add_action('wp_ajax_project_details', 'kv_project_details_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_project_details', 'kv_project_details_handler'); // wp_ajax_nopriv_{action}


function mail_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','mail_content_type' );

function my_acf_google_map_api($api)
{

    $api['key'] = 'AIzaSyDmvCRg5qCb4wZUD4WvrDdyD1IYp_zsihE';

    return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
