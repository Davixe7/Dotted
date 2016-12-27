<?php get_header(); ?>

<div class="container dotted">
	<div class="index-head text-center">
		<h1><?php bloginfo('name'); ?></h1>
		<p>Bienvenido al index del sitio</p>
	</div>
	
	<!-- Wordpress loop -->
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		<div class="thumbnail">
			<h3><?php the_title(); ?></h3>
			<span><?php the_time( get_option('date_format') ); ?></span>
			<p><?php the_excerpt();?></p>
			<a href="<?php the_permalink(); ?>">Ver más</a>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>