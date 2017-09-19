<?php if ( !is_paged()); ?>
	<div class="featured p9-t">
		<?php $the_sticky_query = new WP_Query( array( 'post__in' => get_option( 'sticky_posts' ), 'posts_per_page' => 1  ) );

		if ( $the_sticky_query->have_posts() ) : ?>
		<?php while ( $the_sticky_query->have_posts() ) : $the_sticky_query->the_post(); ?> 

		<div class="wrapper">
			<div class="layout">
			<?php
			// If a feature image is set, get the id, so it can be injected as a css background property
			if ( has_post_thumbnail( $post->ID ) ) :
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
				$image = $image[0];
			?>
					<a class="m3-b block no-underline" href="<?php the_permalink(); ?>">
						<img class="cover-large"  src="<?php echo $image; ?>" alt="">
						<div class="label-on-top p3-lr">
						<span class="ttu m1-b block "><?php echo get_the_category()[0]->name; ?></span>
					<h2 class="f2"><?php the_title(); ?></h2>
					</div>
				</a>

			<?php endif; ?>

			</div>
		</div>



	<?php endwhile; wp_reset_query(); endif; ?>
	</div>
	<?php endif; ?>