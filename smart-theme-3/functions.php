<?php 

/*--------------------------------------------------------------
Include scripts
--------------------------------------------------------------*/

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

/*--------------------------------------------------------------
Activate menus
--------------------------------------------------------------*/

function smart_theme_setup() {
	add_theme_support('menus');
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}

add_action('init', 'smart_theme_setup');

/*--------------------------------------------------------------
Theme support function
--------------------------------------------------------------*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('image', 'video', 'aside'));

/*--------------------------------------------------------------
Sidebar function
--------------------------------------------------------------*/

function smart_widget_setup() {

	register_sidebar(
		array('name'  => 'Sidebar',
			  'id'    => 'sidebar-1',
			  'class' => 'custom',
			  'description' => 'Standard Sidebar',
			  'before_widget' => '<aside id="%1$s" class="%2$s">',
			  'after_widget' => '</aside>',
			  'before_title' => '<h1 class="widget-title">',
			  'after_title' => '</h1>',
	)
	);
}

add_action('widgets_init', 'smart_widget_setup');

/*--------------------------------------------------------------
Include Walker file
--------------------------------------------------------------*/

require get_template_directory() . '/inc/walker.php';