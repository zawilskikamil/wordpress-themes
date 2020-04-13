<?php 

function load_stylesheets()
{
	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets'); 

function include_jquery()
{
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.js', '', 1, true);
	add_action('wp_enqueue_scripts', 'jquery'); 
}
add_action('wp_enqueue_scripts', 'include_jquery'); 


function load_js()
{
	wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', false, true);
	wp_enqueue_script('bootstrapjs');

	wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_js'); 

add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'footer-menu' => __('Footer Menu', 'theme'),
	)
);

function boodstrap_item_nav_class( $classes, $item, $args ) {
    $classes[] = "nav-item"; 
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'boodstrap_item_nav_class' , 10, 4 );

function boodstrap_item_link_nav_class( $atts, $item, $args ) {
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'boodstrap_item_link_nav_class', 10, 3 );

?>