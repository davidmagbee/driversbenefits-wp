<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php the_title();?></title>
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
	<header>
		<nav id='nav-main' class='navbar'>
			<img>DBF-LOGO</img>
			<div>LOCAL</div>
			<div>CALL</div>
			<button>SIGNUP</button>
		</nav>
		<?php wp_nav_menu(
			array(
				'theme_location' => 'top-menu'
			)
		);?>
	</header>

