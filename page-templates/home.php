<?php
/**
 * The template for displaying all pages
 *
 * Template name: Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php get_template_part( 'template-parts/video-header' ); ?>

<div id="main">

	<?php get_template_part( 'template-parts/motion-block' ); ?>
	<?php get_template_part( 'template-parts/stories-block' ); ?>
	<?php get_template_part( 'template-parts/usp-block' ); ?>
	<?php get_template_part( 'template-parts/where-block' ); ?>
</div>
  
<?php
get_sidebar();
get_footer();
