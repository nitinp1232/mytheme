<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mytheme
 */

?>
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mytheme' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding row">

	<div class="col-10">


	</div>
			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation row my-5">
		<div class="container">
			<div class="row">
			 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mytheme' ); ?></button>
			 <div class="col-2"><p class="logo11">App<span class="logo12">Lab</span> </p></div>
			 <div class="col-8"><?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?></div>
			<div class="col-2"><button type="button" class="btn btn-primary btn11">Try for free</button></div>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->
