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
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70930467-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());
		gtag('config', 'UA-70930467-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
	<?php wp_head(); ?>
	<?php get_template_part('template-parts/favicon');?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/svg');?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_pixformance' ); ?></a>

<?php if( 'landing' == get_post_type() ) : ?>
	<?php get_template_part( 'template-parts/naked-header' ); ?>
<?php else : ?>
	<?php get_template_part( 'template-parts/default-header' ); ?>
<?php endif; ?>



<div id="content" class="site-content">
