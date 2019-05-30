<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
		<header>
			<div class="hero">
				<div class="logo">
					<a href="<?php bloginfo('url'); ?>"><img class="float-center" src="<?php  bloginfo('template_url'); ?>/img/logo-abogadisimo.png" alt=""></a>
					<h1 class="tagline">
						<?php echo get_bloginfo('description'); ?>
					</h1>
				</div>
			</div>
			<nav class="main">
				<div class="topbar">
					<div class="logo">
						<a  href="<?php bloginfo('url'); ?>"><img width="150px" class="float-center" src="<?php  bloginfo('template_url'); ?>/img/logo-abogadisimo-white.png" alt=""></a>
					</div>
					<button class="hamburger hamburger--spin" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="wrapper-menu"></div>
				<div class="menu">
					<?php
						wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'container' => 'ul',
								'menu_class' => '',
						));
					?>
				</div>
				
				
			</nav>
		</header>
	