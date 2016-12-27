<?php 

function dotted_register_styles(){
	wp_register_style('dotted_stylesheet', get_stylesheet_directory_uri() . '/style.css', '', '1.0');
	wp_register_style('dotted_custom_stylesheet', get_stylesheet_directory_uri() . '/css/custom.css', '', '1.0');
	wp_enqueue_style('dotted_stylesheet');
	wp_enqueue_style('dotted_custom_stylesheet');
}
add_action('wp_enqueue_scripts', dotted_register_styles);

?>