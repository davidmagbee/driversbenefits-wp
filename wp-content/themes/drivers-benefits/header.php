<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php the_title();?></title>
  <?php wp_head();?>
</head>
This is the header...
<body <?php body_class();?>>
	<header>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'top-menu'
			)
		);?>
	</header>

