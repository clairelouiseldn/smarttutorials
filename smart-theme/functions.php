<?php 

function smart_script_enqueue() {

	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/smart.css', array(), '1.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/smart.js', array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'smart_script_enqueue');