<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/87d2b4918a.js"></script>
  </head>
  <body <?php body_class(); ?>>
		<header>
            <div class="hero" <?php if(has_post_thumbnail()):?> style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)" <?php endif;?>>
                <div class="row">
                    <div class="content">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
				
			</div>
			<nav class="main">
				<div class="topbar">
					<div class="logo">
						<a  href="<?php bloginfo('url'); ?>"><img width="120px" class="float-center" src="<?php  bloginfo('template_url'); ?>/img/logo-abogadisimo-white.png" alt=""></a>
					</div>
					<button class="hamburger hamburger--spin" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>
				<div class="wrapper-menu"></div>
				<div class="menu">
					<ul>
						<li><a  href="<?php bloginfo('url'); ?>"><img width="100%" class="float-center" src="<?php  bloginfo('template_url'); ?>/img/logo-abogadisimo-white.png" alt=""></a></li>
						<li>
							<form action="<?php bloginfo('url'); ?>" method="GET">
								<div class="input-group">
									<input class="input-group-field" type="text" name="s">
									<div class="input-group-button">
										<button class="button"><i class="fas fa-search"></i></button>
									</div>
								</div>
							</form>
						</li>
					</ul>
					<?php
						wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'container' => '',
								'menu_class' => '',
						));
					?>
				</div>
				
				
			</nav>
		</header>
	