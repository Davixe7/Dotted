<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
	<title><?php bloginfo('name'); wp_title('|','true');  ?></title>
    <meta <?php bloginfo('charset') ?> >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
  </head>
  <body>
	<header class="dotted">
		<div class="container dotted">
			<p><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></p>
		</div>
	</header>
	<div class="container dotted">
		<nav>
			<ul>
				<?php wp_nav_menu( array( 'menu' => 'Menu 1', 'container' => '', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</nav>
	</div>