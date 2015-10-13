<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package privacyhorisontheme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="mobile-menu-button">
			x
		</div>
		<div class="nav-items-container">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</div>
	</nav><!-- #site-navigation -->

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'privacyhorisontheme' ); ?></a>

	<?php if(is_page('contact')) : ?>
		<header id="masthead" class="site-header-alternate" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="privacy horizon logo" /></a></h1>
			</div><!-- .site-branding -->
			<section class="top-section contact-header">
				<div class="page-content-container">
					<h2>Let's chat!</h2>
					<h3>Do you have a burning question about privacy? Do you want to know more about Privacy Horizon? Do you have a suggestion to help us improve our website or services? Please get in touch. We look forward to hearing from you.</h3>
				</div>
			</section>
		</header><!-- #masthead -->
	<?php else : ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="privacy horizon logo" /></a></h1>
			</div><!-- .site-branding -->
		</header><!-- #masthead -->
	<?php endif; ?>

	<div id="content" class="site-content">
