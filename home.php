<?php get_header(); ?>
	<h1 style="text-align: center">Bienvenido al home de tu sitio</h1>
	<hr>
	<?php if( have_posts() ){
		
		while( have_posts() ){ the_post();  ?>
			<article>
				<h2><?php the_title() ?></h2>
				<p> <?php the_excerpt() ?> </p>
				<a href="<?php the_permalink(); ?>"> Leer articulo </a>
			</article>
	<?php }} ?>

<?php get_footer(); ?>