<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article class="m6-b" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="f3 m1-b"><a class="no-underline" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary m1-b">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'View page', '_pixformance' ); ?></a>
</article><!-- #post-<?php the_ID(); ?> -->
