<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>
<div class="featured p9-t">
	<?php $the_sticky_query = new WP_Query( array( 'post__in' => get_option( 'sticky_posts' ), 'posts_per_page' => 1  ) );

	if ( $the_sticky_query->have_posts() ) : ?>
	<?php while ( $the_sticky_query->have_posts() ) : $the_sticky_query->the_post(); ?> 

	<div class="wrapper">
		<div class="layout m6-b">
		<?php
		// If a feature image is set, get the id, so it can be injected as a css background property
		if ( has_post_thumbnail( $post->ID ) ) :
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
			$image = $image[0];
		?>

				<a class="blog-grid-item no-underline" href="<?php the_permalink(); ?>">
					<img  src="<?php echo $image; ?>" alt="">
					<div class="label-on-top">
					<span class="ttu m1-b block "><?php echo get_the_category()[0]->name; ?></span>
				<h2 class="f2"><?php the_title(); ?></h2>
				</div>
			</a>

		<?php endif; ?>

		</div>
	</div>



<?php endwhile; endif; ?>
</div>
<div class="wrapper m6-b">
	<div class="layout">
		<h3 class="f3 ttu text-center m6-b"><?php esc_html_e( 'Latest stories', '_pixformance' ); ?></h3>
		<div class="blog-grid">
		<?php
			$the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) );
			if ( $the_query->have_posts() ) :
				/* Start the Loop */
				while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php
					// If a feature image is set, get the id, so it can be injected as a css background property
					if ( has_post_thumbnail( $post->ID ) ) :
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
						$image = $image[0];
					?>
					<a class="blog-grid-item no-underline" href="<?php the_permalink(); ?>">
							<img class="cover m3-b" src="<?php echo $image; ?>" alt="">
							<span class="ttu m1-b block"><?php echo get_the_category()[0]->name; ?></span>
						<h2 class="f3"><?php the_title(); ?></h2>
					</a>
					<?php endif; ?>
				<?php endwhile;
				the_posts_navigation();
			else :
				
			endif; ?>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/newsletter' ); ?>
<?php
get_sidebar();
get_footer();
