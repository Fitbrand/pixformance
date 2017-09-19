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

	<?php get_template_part( 'template-parts/video-header-auto' ); ?>

	<?php get_template_part( 'template-parts/video-block' ); ?>

	<?php get_template_part( 'template-parts/stories-block' ); ?>

	<?php get_template_part( 'template-parts/usp-block' ); ?>

	<?php get_template_part( 'template-parts/motion-block' ); ?>

	<?php get_template_part( 'template-parts/where-block' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- <?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?> 

		</main><!-- #main -->
	</div><!-- #primary -->

  
  
<?php
get_sidebar();
get_footer();
