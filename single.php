<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>

	<div class="wrapper clearfix">
		<div class="layout  m6-b ">
		<main id="main">
			<?php
			while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php
				// If a feature image is set, get the id, so it can be injected as a css background property
				if ( has_post_thumbnail( $post->ID ) ) :
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
					$image = $image[0];
				?>
				<header class="p9-t m6-b">
					<img src="<?php echo $image; ?>" alt="">
				</header><!-- .entry-header -->
				<?php endif; ?>
						<div class="grid grid-1-3 grid-1-3-reversed  m6-b p3-lr ">
							<div class="grid-item">
								<?php the_title( '<h1 class="f2 m3-b">', '</h1>' );  ?>
								<?php the_content(); ?>
							</div>
							<div class="grid-item p6-t">
								<div class="m1-b"><?php _pixformance_posted_on(); ?></div>
								<div class="m1-b"><?php _pixformance_entry_footer(); ?></div>
								<div class="m3-b">
									
									<strong><?php esc_html_e( 'Share on', '_pixformance' ); ?></strong>
									<div class="blog-links" id="share">
									<!-- Facebook -->
										<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
												Facebook
										</a>
										<!-- Twitter -->
										<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Pixformance&amp;hashtags=pixformance" target="_blank">
											Twitter
										</a>
										<!-- LinkedIn -->
										<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank">
												Linkedin
										</a>
									</div>
								</div>
								<p><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button"><?php esc_html_e( 'Contact us', '_pixformance' ); ?></a></p>
							</div>
						</div>
			
				<div>
				<?php 
					$images = get_field('gallery');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $images ): ?>
		
						<?php foreach( $images as $image ): ?>
								<div class="m3-b">
									<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
								</div>
						<?php endforeach; ?>
		
					<?php endif; ?>
				</div>
			</article>
			<?php	endwhile;?>
	</main>
	</div>
</div>

<?php get_template_part( 'template-parts/newsletter' ); ?>


<?php
get_sidebar();
get_footer();
