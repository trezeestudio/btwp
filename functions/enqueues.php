<?php

function bst_enqueues()
{

	/* Styles */
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.6', null);
	wp_enqueue_style('bootstrap-css');

	wp_register_style('bootstrap-theme-css', get_template_directory_uri() . '/css/bootstrap-theme.min.css', false, null);
	wp_enqueue_style('bootstrap-theme-css');

	wp_register_style('owl-css', get_template_directory_uri() . '/css/owl.carousel.min.css', false, null);
	wp_enqueue_style('owl-css');

	wp_register_style('style-css', get_template_directory_uri() . '/css/style.css', false, null);
	wp_enqueue_style('style-css');

	/* Scripts */

	wp_enqueue_script('jquery');
	/*
	 * Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
	 * https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress
	 */

	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');

	wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('owl-js', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);
	wp_enqueue_script('owl-js');

	wp_register_script('bst-js', get_template_directory_uri() . '/js/scripts.js', false, null, true);
	wp_enqueue_script('bst-js');

	if (is_singular() && comments_open() && get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
