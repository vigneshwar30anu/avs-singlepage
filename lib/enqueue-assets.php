<?php 
function _themename_assets()
{
    
    wp_enqueue_style( '_themename-woocommerce-stylesheet', get_template_directory_uri( ).'/dist/asset/css/frontend/woocommerce.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-bootstrap-stylesheet', get_template_directory_uri( ).'/dist/asset/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-onepage-stylesheet', get_template_directory_uri( ).'/dist/asset/css/onepage.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-frontend-stylesheet', get_template_directory_uri( ).'/dist/asset/css/frontend.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-dark-theme-stylesheet', get_template_directory_uri( ).'/dist/asset/css/dark.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-font-icons-stylesheet', get_template_directory_uri( ).'/dist/asset/css/font-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-et-line-stylesheet', get_template_directory_uri( ).'/dist/asset/css/et-line.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-animate-stylesheet', get_template_directory_uri( ).'/dist/asset/css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-magnific-popup-stylesheet', get_template_directory_uri( ).'/dist/asset/css/magnific-popup.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-fonts-stylesheet', get_template_directory_uri( ).'/dist/asset/css/fonts.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-responsive-stylesheet', get_template_directory_uri( ).'/dist/asset/css/responsive.css', array(), '1.0.0', 'all' );
    
    wp_enqueue_style( '_themename-google-fonts-stylesheet', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700', '1.0.0', 'all' );

    
    wp_enqueue_script( '_themename-plugins-scripts', get_template_directory_uri( ).'/dist/asset/js/plugins.js', array('jquery'), '1.0.0',true );
    wp_enqueue_script( '_themename-jquery-gmap-scripts', get_template_directory_uri( ).'/dist/asset/js/jquery.gmap.js', array('jquery'), '1.0.0',true );
    wp_enqueue_script( '_themename-functions-scripts', get_template_directory_uri( ).'/dist/asset/js/functions.js', array('jquery'), '1.0.0',true );
}

add_action( 'wp_enqueue_scripts','_themename_assets');



function _themename_admin_assets()
{
    wp_enqueue_style( '_themename-bootstrap-stylesheet', get_template_directory_uri( ).'/dist/asset/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_themename-admin-stylesheet', get_template_directory_uri( ).'/dist/asset/css/admin/admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( '_themename-admin-scripts', get_template_directory_uri( ).'/dist/asset/js/admin.js', array(), '1.0.0', true );

}

add_action( 'admin_enqueue_scripts','_themename_admin_assets');

?>