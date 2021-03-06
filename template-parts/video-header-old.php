<?php if(get_field('video_header')) : ?>
<?php $block = get_field('video_header'); ?>
<?php $image = $block['image']; 
      $id = $block['id'];
      $title = $block['title'];
    ?>

<div class="wrapper">
  <a href="#main" class="header-read-more ttu no-underline"><?php esc_html_e( 'More', '_pixformance' ); ?></a>
  <div class="youtube youtube-lazy" data-embed="<?php echo $id; ?>" data-image="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" data-location="home">
  <div class="stroke-video-4 stroke stroke-on-video" id="motion-stroke-4"></div>
    <div class="stroke-video-5 stroke stroke-on-video" id="motion-stroke-5"></div>
    <div class="play-button">
      <svg class="icon-play">
        <use xlink:href="#icon-play" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
      </svg>
    </div>
  </div>
  <div class="video-content-wrapper white">
    <div class="layout">
      <div class="video-content p3-t p3-lr">
        <h1><?php echo $title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>