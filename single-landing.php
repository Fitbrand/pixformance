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
  <div class="stroke stroke-product-2 active"></div>
    <div class="stroke stroke-product-3 active"></div>
    

    <?php if(get_field('landing_type') === 'video') : ?>
    

    <?php if(get_field('landing_videos_boven')) : $i = 0; ?>

        <?php while( have_rows('landing_videos_boven') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $duration = get_sub_field('duration')
          ?>

          <?php if($i === 0) : ?>
          <div class="wrapper">
            <div class="layout p3-t p3-lr p6-t-small">
            <div class="grid grid-1-3 m9-b v-align-center p3-lr ">
              <div class="grid-item"><img class="m3-b" style="max-height: 220px; <?php if($size): ?> max-width: <?php echo $size;?>px; <?php endif; ?>" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
              <div class="grid-item">
                <h3 class="f3 m2-b"><?php echo $title; ?></h3>
                <?php echo $content; ?>
              </div>
            </div>

            </div>
          </div>

          <?php else : ?>

          <div class="wrapper bg-green m3-b">
            <div class="layout p3-t p3-lr p6-t-small">
            <div class="grid grid-3-1 grid-3-1-reversed m6-b v-align-center p3-lr">
      <div class="grid-item"><img class="m3-b" style="max-height: 220px; <?php if($size): ?> max-width: <?php echo $size;?>px; <?php endif; ?>" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
      <div class="grid-item m3-b">
        <h3 class="f3 m2-b"><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>

            </div>
          </div>

          <?php endif; ?>


        <?php $i++; endwhile; ?>

<?php endif; ?>


<div class="layout p3-t p3-lr p6-t-small">
    <div class="grid grid-halves grid-gap-large grid-image-right">
        <div class="grid-item">
       
        <?php if(get_field('landing_videos')) : ?>

        <?php while( have_rows('landing_videos') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $duration = get_sub_field('duration')
          ?>

          <div class="m3-b">
            <img class="m1-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
            <div class="grid grid-halves grid-gap-large">
              <div class="grid-item ttu text-right">
                <?php esc_html_e( 'Duration:', '_pixformance' ); ?> <?php echo $duration; ?>
              </div>
              <div class="grid-item">
                <h4 class="f4 m0"><?php echo $title; ?></h4>
                <?php echo $description; ?>
              </div>
            </div>
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
  </div>

    <?php else : ?>
    <div class="layout p3-t p3-lr p6-t-small">
      <div class="grid grid-halves grid-gap-large grid-image-right">
        <div class="grid-item">
        <?php if(get_field('landing_image')) : ?>
          <?php $image = get_field('landing_image'); ?>
          <img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
        <?php endif; ?>
        </div>
        <div class="grid-item">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php endif; ?>
  <?php if(get_field('landing_form_title')) : ?>
  <div class="wrapper">
    <div class="layout p3-t m1-b p3-lr text-center">
      <?php the_field('landing_form_title'); ?>
    </div>
  </div>
  <?php endif; ?>



  <?php if(get_field('landing_pdf')) : ?>
  <div class="wrapper bg-green clearfix">
    <div class="layout p3-t m3-b p3-lr white">
      <div class="w-medium center">
        <p class="text-center"><a href="<?php the_field('landing_pdf'); ?>" class="button button-secondary ttu"><?php esc_html_e( 'Download Nu', '_pixformance' ); ?></a></p>
      </div>
    </div>
  </div>
  <?php endif; ?>

  <?php if(get_field('landing_form')) : ?>
  <div class="wrapper bg-green clearfix">
    <div class="layout p3-t m3-b p3-lr white">
      <div class="w-medium center">
        <?php echo do_shortcode(get_field('landing_form')); ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();


