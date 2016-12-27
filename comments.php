
<section id="comments">
<?php 
// echo '<hr>';
comments_number(
	'<h4 class="number">No hay comentarios aún</h4>',
	'<h4 class="number">Mostrando el unico comentario</h4>',
	'<h4 class="number">Comentarios</h4>'
);

echo '<hr>';

?>	
<ol class="commentlist"><?php wp_list_comments(); ?></ol>
<?php comment_form(); ?>
</section>