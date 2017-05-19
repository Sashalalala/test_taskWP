
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css">
	<script src="https://use.fontawesome.com/39a5d8fb1a.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php 
			$theme_options = get_option('lorem_options');
		?>
		<div class="header" style="background-image: url(<?php echo $theme_options['header_bkgr'];?>);">			
			
			<img src="<?php echo $theme_options['logo_icon'];?>" alt="" class="header-logo">

			<div class="header-slogan"><?php echo $theme_options['logo-slogan']; ?></div>
						
		</div>

		<?php if ( has_nav_menu( 'primary' )) : ?>

		<div class="main-nav-container">

			<nav class="header-nav page-width">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_class'     => 'primary-menu',
						'container'      => false,
					) );
				?>				
			</nav>
			
		</div>
		<?php endif; ?>
	</header>

	
