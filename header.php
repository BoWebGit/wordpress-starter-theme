<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="site-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header-logo">
						<?php
							the_custom_logo();
						?>
					</div>
				</div>	
				<div class="col">
					<nav id="site-navigation" class="main-navigation">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>