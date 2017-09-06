<?php
/**
 * The template for displaying all pages
 *
 * Template name: About us
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div class="wrapper bg-yellow-light ">
	<div class="h-full layout v-center p3-lr text-center">
		<div class="w-half-extra center">
			<h1 class="f-2 m3-b"><?php the_field('about_header');?></h1>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/content-block-general' ); ?>

<?php get_template_part( 'template-parts/about-valerie' ); ?>





<?php
get_sidebar();
get_footer();
