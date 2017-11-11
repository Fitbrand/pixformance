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

<div class="wrapper m6-b p9-t bg-yellow-gradient ">

    <div class="stroke stroke-product-5 stroke-scroll" id="product-stroke-5"></div>
		<div class="stroke stroke-product-4 stroke-scroll" id="product-stroke-4"></div>
		<div class="stroke stroke-product-6 stroke-scroll" id="product-stroke-6"></div>

	<div class="layout">
<?php
	$args = array(
		'post_type' => 'post',
		'offset'=> 0,
		'showposts' => 1,
		'order' => DESC
	);
	$the_query = new WP_Query( $args );
	?>
<?php if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
<div class=" p3-lr">   
<?php
			// If a feature image is set, get the id, so it can be injected as a css background property
			if ( has_post_thumbnail( $post->ID ) ) :
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$image = $image[0];
			?>
					<a class="m3-b block relative no-underline" href="<?php the_permalink(); ?>">
						<img class="cover-xlarge m3-b"  src="<?php echo $image; ?>" alt="">
						<div class="label-on-top w-half-extra p3-lr">
						<span class="ttu m1-b block "><?php echo get_the_category()[0]->name; ?></span>
					<h2 class="f2"><?php the_title(); ?></h2>
					</div>
				</a>

			<?php endif; ?>

</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

		<h3 class="f3 ttu text-center m6-b"><?php esc_html_e( 'Latest stories', '_pixformance' ); ?></h3>
		<div class="gird blog-grid clearfix p3-lr">
		<?php query_posts('offset=1&showposts=6&order=DESC'); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
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
				<?php $i++; endwhile; wp_reset_query();
				
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
