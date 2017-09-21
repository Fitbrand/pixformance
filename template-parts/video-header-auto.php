<?php if(get_field('video_header_homepage')) : ?>
<?php $block = get_field('video_header_homepage'); ?>
<?php $image = $block['image']; 
      $id = $block['id'];
      $title = $block['title'];
      $content = $block['content'];
      $size = 'header';
    ?>

<div class="wrapper">
  <a href="#main" class="header-read-more ttu no-underline"><?php esc_html_e( 'More', '_pixformance' ); ?></a>
  <div class="stroke-video-4 stroke" id="motion-stroke-4"></div>
  <div class="stroke-video-5 stroke" id="motion-stroke-5"></div>
  <div class="youtube youtube-background filled" data-embed="<?php echo $id; ?>" data-location="home" style="background-image: url(<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>)">
  </div>
  <div class="video-content-wrapper white">
    <div class="layout">
      <div class="video-content p3-t p3-lr">
        <div class="w-third-extra">
          <h1 class="f-headline m3-b"><?php echo $title; ?></h1>
          <div class="m3-b"><?php echo $content; ?></div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>