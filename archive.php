<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div class="wrapper m6-b p9-t">
<div class="layout">
	<?php the_archive_title( '<h1 class="f3 ttu text-center m6-b">', '</h1>' ); ?>
	<div class="gird blog-grid clearfix">
	<?php
		$the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				<?php
				// If a feature image is set, get the id, so it can be injected as a css background property
				if ( has_post_thumbnail( $post->ID ) ) :
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image = $image[0];
				?>
				<a class="m3-b block grid-item blog-grid-item no-underline" href="<?php the_permalink(); ?>">
						<img class="cover m3-b" src="<?php echo $image; ?>" alt="">
						<div class="p3-lr">
						<span class="ttu m1-b block"><?php echo get_the_category()[0]->name; ?></span>
					<h2 class="f3"><?php the_title(); ?></h2>
					</div>
				</a>
				<?php endif; ?>
			<?php endwhile; wp_reset_query();
			
		else :
			
		endif; ?>
	</div>
	<?php the_posts_navigation(); ?>
</div>
</div>

<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php
get_sidebar();
get_footer();
