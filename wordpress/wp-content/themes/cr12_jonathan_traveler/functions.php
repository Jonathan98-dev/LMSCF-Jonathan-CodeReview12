
<?php 

add_theme_support('post-thumbnails');
add_theme_support('menus');

// ------------------------

function load_stylesheets()
{
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// ------------------------

function jquery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri(). '/js/jquery-3.4.1.min.js', '', 1, true);
}

add_action('wp_enqueue_scripts', 'jquery');

// ------------------------

function loadjs()
{
	wp_register_script('customjs', get_template_directory_uri(). '/js/scripts.js', '', 1, true);
	wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs');


// ------------------------

function wpb_init_widgets()
{
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));
}

add_action('widgets_init', 'wpb_init_widgets');


// ------------------------

register_nav_menus(

	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme')
	)
);

// ------------------------










?>


