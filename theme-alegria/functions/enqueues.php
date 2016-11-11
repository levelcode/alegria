<?php

function bst_enqueues() {

	/* Styles */

	/*Custom styles*/
	wp_register_style('reset-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
	wp_enqueue_style('reset-css');

	wp_register_style('fonts-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css', false, null);
	wp_enqueue_style('fonts-css');

	wp_register_style('general-css', get_template_directory_uri() . '/css/main.css', false, null);
	wp_enqueue_style('general-css');

	wp_register_style('validator-css', get_template_directory_uri() . '/js/validator/validationEngine.jquery.css', false, null);
	wp_enqueue_style('validator-css');

	wp_register_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null);
	wp_enqueue_style('font-awesome');

	/* Scripts */

	//add ajax support

  	wp_register_script('jquery-js', get_template_directory_uri() . '/js/jquery-2.2.0.min.js', false, null, true);
	wp_enqueue_script('jquery-js');

	wp_register_script('validator-engine', get_template_directory_uri() . '/js/validator/jquery.validationEngine.js', false, null, true);
	wp_enqueue_script('validator-engine');

	wp_register_script('validator-engine-lang', get_template_directory_uri() . '/js/validator/jquery.validationEngine-es.js', false, null, true);
	wp_enqueue_script('validator-engine-lang');

	wp_register_script('greensock-js', get_template_directory_uri() . '/js/greensock/minified/TweenMax.min.js', false, null, true);
	wp_enqueue_script('greensock-js');

	wp_register_script('modernizr-js', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', false, null, true);
	wp_enqueue_script('modernizr-js');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
	add_action( 'init', 'wpt_register_js' );

	


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

    wp_register_script('general-js', get_template_directory_uri() . '/js/general.js', false, null, true);
	wp_enqueue_script('general-js');

}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);