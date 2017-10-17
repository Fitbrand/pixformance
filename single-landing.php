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


<?php get_template_part( 'template-parts/page-header' ); ?>
<div id="main">
  <div class="wrapper">
    <div class="layout p9-t m9-b p3-lr p6-t-small">

    <?php if(get_field('landing_type') === 'blog') : ?>

    <div class="grid grid-1-3 grid-1-3-reversed  m6-b p3-lr ">
							<div class="grid-item">
								<?php the_title( '<h1 class="f2 m3-b">', '</h1>' );  ?>
								<?php the_content(); ?>
							</div>
							<div class="grid-item p6-t">
                <?php if(get_field('landing_pdf')) : ?>
                <div class="m3-b">
                  <strong class="block m1-b"><?php esc_html_e( 'Download insight as PDF', '_pixformance' ); ?></strong>
                  <a href="<?php echo get_field('landing_pdf'); ?>" class="button button-secondary"><?php esc_html_e( 'Download PDF', '_pixformance' ); ?></a>
                </div>

                <?php endif; ?>

								<div class="m1-b"><?php _pixformance_posted_on(); ?></div>
					
								<div class="m3-b">
									
									<strong><?php esc_html_e( 'Share on', '_pixformance' ); ?></strong>
									<div class="blog-links" id="share">
										<!-- Facebook -->
										<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="no-underline">
                    Facebook <span class="arrow-right">&nbsp;</a>
                </a>
                <!-- Twitter -->
                <a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=Pixformance&amp;hashtags=pixformance" target="_blank" class="no-underline">
                  Twitter <span class="arrow-right">&nbsp;</a>
                </a>
                <!-- LinkedIn -->
                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank" class="no-underline">
                    Linkedin <span class="arrow-right">&nbsp;</a>
                </a>
									</div>
								</div>
								<p><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button"><?php esc_html_e( 'Contact us', '_pixformance' ); ?></a></p>
							</div>
						</div>
				<div>

    <?php else : ?>

      <div class="grid grid-halves grid-gap-large grid-image-right">
        <div class="grid-item">
        <?php if(get_field('landing_image')) : ?>
          <?php $image = get_field('landing_image'); ?>
          <img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
        <?php endif; ?>
        <?php if(get_field('landing_videos')) : ?>

        <h3 class="f3 m3-b"><?php esc_html_e( 'Watch more video\'s', '_pixformance' ); ?></h3>

        <?php while( have_rows('landing_videos') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          ?>

          <div class="m3-b">
            <img class="m1-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
            <h4 class="f4"><?php echo $title; ?></h4>
            <?php echo $description; ?>
          </div>


        <?php endwhile; ?>

        <?php endif; ?>
        </div>
        <div class="grid-item">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php endif; ?>
  <?php if(get_field('landing_form')) : ?>
  <div class="wrapper bg-green clearfix">
    <div class="layout p9-t m9-b p3-lr white">
      <div class="w-half">
        <?php echo do_shortcode(get_field('landing_form')); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();


