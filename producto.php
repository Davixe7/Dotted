<?php
/*
Template Name: Producto
*/
get_header(); 
?>

<h1 style="text-align: center;">Esta es una página personalizada</h1>

<?php if( have_posts() ){
	while( have_posts() ){ the_post(); ?>
	<h3><?php the_title() ?></h3>
	<p><?php the_excerpt() ?></p>

<?php }}?>

<?php get_footer(); ?>