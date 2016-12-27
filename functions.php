<?php 

// Añade los estilos para el tema Dotted
function dotted_register_styles(){
	wp_register_style('dotted_stylesheet', get_stylesheet_directory_uri() . '/style.css', '', '1.0');
	wp_register_style('dotted_custom_stylesheet', get_stylesheet_directory_uri() . '/css/custom.css', '', '1.0');
	wp_enqueue_style('dotted_stylesheet');
	wp_enqueue_style('dotted_custom_stylesheet');
}
add_action('wp_enqueue_scripts', dotted_register_styles);

// Añade compatibilidad con navegación
function register_my_menus() {
	register_nav_menus(
		array(
			"menu-1" => __( "Menu 1" ),
			"menu-2" => __( "Menu 2" )
		)
	);
}
add_action( "init", "register_my_menus" );

// Habilitar soporte para Woocommerce
function woocommerce_support(){
	add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'woocommerce_support');

//Cancela las etiquetas por defecto de apertura y cierre del wrap
add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
add_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end');

//Sobrecarga las etiquetas de nuestro tema para apertura y cierre del wrap
function dotted_wrapper_open(){
	echo '<div class="container">';
}
function dotted_wrapper_close(){
	echo '</div>';
}
add_action('woocommerce_before_main_content', 'dotted_wrapper_open');
add_action('woocommerce_after_main_content', 'dotted_wrapper_close');

?>