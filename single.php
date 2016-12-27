<?php get_header(); ?>

<div class="container">
	<?php if( have_posts() ): while( have_posts() ) : the_post() ?>
		<article class="text-center">
			<h3><?php the_title() ?></h3>
			<span><?php the_date() ?></span>
			<p><?php the_content() ?></p>
		</article>
	<?php endwhile; endif; ?>
	<?php comments_template(); ?>
</div>

<?php get_footer(); ?>