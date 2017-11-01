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
    <?php if(get_field('landing_type') === 'product') : ?>
      <div class="wrapper">
        <?php $headerImage = get_field('landing_header_image'); ?>
          <div class="layout p3-t p3-lr p6-t-small">
        <?php if($headerImage) : ?>
            <img class="m6-b"  src="<?php echo wp_get_attachment_image_src( $headerImage, 'full' )[0] ?>" alt="">
        <?php endif; ?>
        <div class="w-half-extra center m6-b">
        <h1 class="f2 text-center">
          <?php the_title(); ?>
        </h1>
        </div>
          </div>
      </div>

      <?php if(get_field('landing_product_field')) : ?>
          <?php $block = get_field('landing_product_field'); ?>
          <?php $image = $block['image']; 
                $title = $block['title'];
                $content = $block['content'];
              ?>

          <div class="wrapper">
          <div class="wrapper-grid wrapper-grid-reversed h-full">
          <div class="h-item-1  grid-item p9-t p9-b out-grid-right filled filled-top" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
              &nbsp;
            </div>
            <div class="grid-item out-grid-content p6-t m9-b m9-b-small  v-center-middle">
              <div class="w-third-extra push-right p3-lr">
              <h2 class="f2 m3-b w-full"><?php echo $title; ?></h2>
              <p class="m3-b w-full"><?php echo $content; ?></p>
              </div>
            </div>
          </div>
          <div class="stroke stroke-out-grid-2 stroke-scroll" id="outgrid-stroke-2"></div>
          <div class="stroke stroke-out-grid-3 stroke-scroll" id="outgrid-stroke-3"></div>
          </div>   


            <?php endif; ?>

            <?php if(get_field('landing_product_field2')) : ?>
        <?php $block = get_field('landing_product_field2'); ?>
        <?php $image = $block['image']; 
              $content = $block['content'];
              $title = $block['title'];
            ?>


            <div class="wrapper">
            <div class="wrapper-grid h-full function-block">
              <div class="grid-item out-grid-content p6-t m9-b m9-b-small  v-center-middle">
                <div class="w-third-extra p3-lr">
                  <h2 class="f2 w-full m3-b"><?php echo $title; ?></h2>
                  <div class="w-full"><?php echo $content; ?></div>
                </div>
              </div>
              <div class="h-item-1  grid-item p9-t p9-b out-grid-right filled filled-top" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
                &nbsp;
              </div>
              <div class="stroke stroke-out-grid stroke-scroll" id="outgrid-stroke-1"></div>
              <div class="stroke stroke-product-3 active"></div>
            </div>
            </div>  


            <?php endif; ?>

            <?php endif; ?>
    <?php if(get_field('landing_type') === 'video') : ?>
      <?php if(get_field('landing_videos_boven')) : $i = 0; ?>
        <?php while( have_rows('landing_videos_boven') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $duration = get_sub_field('duration');
          $youtube = get_sub_field('youtube_id');
          ?>
          <?php if($i === 0) : ?>
          <div class="wrapper">
            <div class="layout p3-t p3-lr p6-t-small">
              <div class="grid grid-1-3 m3-b v-align-center p3-lr ">
                <div class="grid-item"><img class="m3-b"  src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
                <div class="grid-item">
                  <h3 class="f2 m05-b blue-dark l-large"><?php echo $title; ?></h3>
                  <div class="f4 bold m2-b"><?php echo $description; ?></div>
                  <div class="m2-b"><a class="button popup button-secondary" href="//www.youtube.com/watch?v=<?php echo $youtube; ?>" data-lity=""><?php esc_html_e( 'Play video', '_pixformance' ); ?></a></div>
                  <div class="ttu m2-b"><?php esc_html_e( 'Duration:', '_pixformance' ); ?> <?php echo $duration; ?></div>
                </div>
              </div>
            </div>
          </div>
          <?php else : ?>
          <div class="wrapper bg-green m3-b">
            <div class="layout p6-t p3-lr p6-t-small text-right">
              <div class="grid grid-3-1 grid-3-1-reversed m3-b v-align-center p3-lr">
                <div class="grid-item"><img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
                <div class="grid-item">
                <h3 class="f2 m05-b white l-large"><?php echo $title; ?></h3>
                <div class="f4 bold m2-b"><?php echo $description; ?></div>
                <div class="m2-b"><a class="button popup button-secondary" href="//www.youtube.com/watch?v=<?php echo $youtube; ?>" data-lity=""><?php esc_html_e( 'Play video', '_pixformance' ); ?></a></div>
                <div class="ttu m2-b"><?php esc_html_e( 'Duration:', '_pixformance' ); ?> <?php echo $duration; ?></div>
              </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        <?php $i++; endwhile; ?>
<?php endif; ?>


<div class="layout p3-t p3-lr p6-t-small">
    <div class="grid grid-halves grid-gap-medium grid-image-right">
        <div class="grid-item">
       
        <?php if(get_field('landing_videos')) : ?>

        <?php while( have_rows('landing_videos') ): the_row(); 
          // vars
          $image = get_sub_field('image');
          $title = get_sub_field('title');
          $description = get_sub_field('description');
          $duration = get_sub_field('duration');
          $youtube = get_sub_field('youtube_id');
          ?>

          <div class="m3-b">
          <a href="//www.youtube.com/watch?v=<?php echo $youtube; ?>" data-lity=""><img class="m1-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" /></a>
            <div class="grid grid-halves grid-gap-medium">
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
    <?php elseif (get_field('landing_type') === 'product') : ?>
    <?php else : ?>
    <div class="layout p3-t p3-lr p6-t-small">
  
      <div class="grid grid-halves grid-gap-small grid-image-right">
        <div class="grid-item">
        <?php if(get_field('landing_image')) : ?>
          <?php $image = get_field('landing_image'); ?>
          <img class="m1-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
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
    <div class="layout  m1-b p3-lr white">
      <div class="w-medium center">
        <p class="text-center p1-t"><a href="<?php the_field('landing_pdf'); ?>" class="button button-secondary ttu"><?php esc_html_e( 'Download Nu >', '_pixformance' ); ?></a></p>
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


