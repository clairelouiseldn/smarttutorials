<?php 

function smart_script_enqueue() {
	
	// css
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/smart.css', array(), '1.0', 'all');
	
	// js
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/smart.js', array(), '1.0', true);

	//fonts
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400', false );
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Oswald', false );

}

add_action('wp_enqueue_scripts', 'smart_script_enqueue');

function smart_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'smart_theme_setup');