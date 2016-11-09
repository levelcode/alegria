<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/wp_bootstrap_navwalker.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');
add_theme_support('post-thumbnails'); 


function true_load_theme_textdomain(){
    load_theme_textdomain( 'bst', get_template_directory() . '/languages' );
    register_nav_menus(array('header' => 'Header menu','footer' => 'Footer menu'));
    add_theme_support( 'custom-logo' );
}