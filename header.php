<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wp-sanspapier
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="//use.typekit.net/diy3rqx.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="wrapper-for-content-outside-of-footer">

		<header class="navigation" role="banner">
			<div class="navigation-wrapper">
				<div class="logo-block">
					<a href="<?php echo get_home_url(); ?>" class="logo">
						<img class="page_logo" src="<?php echo get_template_directory_uri(); ?>/assets/dist/images/logo.svg"  alt="Logo Sans Papier Beratungsstelle">
						<h4>Berner Beratungsstelle für Sans-Papier</h4>
					</a>
				</div>

				<a href="#" class="navigation-menu-button" id="js-mobile-menu">MENU</a>



				<nav role="navigation">

					<?php 

					$args = array(
						'container'       => 'ul',
						'menu_class'      => 'navigation-menu show',
						'menu_id'					=> 'js-navigation-menu',
						'depth'           => 0,
						'walker'          => new My_Sub_Menu()
						);
					wp_nav_menu( $args ) 

					?>



				</nav>



			</div>


		</header>

		<div id="content" class="site-content">
