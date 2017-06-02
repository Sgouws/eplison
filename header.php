<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php bloginfo('name'); ?>
	</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400|Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />
	<script>
		var ypos, image;

		function parallax() {
			ypos = window.pageYOffset;
			image = document.getElementById('main-image');
			image.style.top = ypos * .4 + 'px';
		}
		window.addEventListener('scroll', parallax);

	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="site-menu">
		<header class="site_header">
			<h3 class="site-name">
				<?php bloginfo('name'); ?>
			</h3>
			<nav class="site-navigation">
				<div class="site-nav-left">
					<?php 
					
					$args = array(
					 'theme_location' => 'primary'
					);
					
					?>
					<?php wp_nav_menu($args); ?>
				</div>
			</nav>
		</header>
	</div>
