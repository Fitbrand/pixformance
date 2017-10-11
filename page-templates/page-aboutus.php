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
<a href="#main" class="header-read-more ttu no-underline"><?php esc_html_e( 'More', '_pixformance' ); ?></a>
	<div class="stroke stroke-pageheader-3 "></div>  
  <div class="stroke stroke-pageheader-4 "></div>  
	<div class="h-large layout v-center p3-lr text-center p6-t-small">
		<div class="w-half-extra center">
			<h1 class="f-2 m3-b"><?php the_field('about_header');?></h1>
		</div>
	</div>
</div>
<div id="main">
	<?php get_template_part( 'template-parts/content-block-general' ); ?>
	<?php get_template_part( 'template-parts/about-valerie' ); ?>
</div>

<?php
get_sidebar();
get_footer();
