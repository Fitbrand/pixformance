<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>


<?php get_template_part( 'template-parts/video-header' ); ?>
<?php get_template_part( 'template-parts/content-block-general' ); ?>
<?php get_template_part( 'template-parts/grid-icon-block' ); ?>
<?php get_template_part( 'template-parts/out-of-grid' ); ?>

<?php
get_sidebar();
get_footer();


