<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/svg');?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_pixformance' ); ?></a>

	<?php if(is_page_template('page-templates/page-imprint.php') || is_404()) : ?>
		<header id="masthead" class="fixed flex-spaced p3-lr active no-scroll">
	<?php else : ?>
		<header id="masthead" class="fixed flex-spaced p3-lr p1-tb">
	<?php endif; ?>
		<div class="site-branding">
			<a class="block" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg class="logo">
					<use xlink:href="#logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
				</svg>
			</a>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_pixformance' ); ?></button>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
