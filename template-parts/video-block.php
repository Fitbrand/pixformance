<?php $block = get_field('homepage_video'); ?>
<?php $image = $block['image']; 
      $id = $block['id'];
      $title = $block['title'];
    ?>

<div class="wrapper">
  <div class="stroke-video-1 stroke stroke-scroll" id="video-stroke-1"></div>
  <div class="layout p9-t m9-b p3-lr">
    <h2 class="f2 ttu text-center m6-b"><?php echo $title; ?></h2>
    <div class="youtube youtube-lazy" data-embed="<?php echo $id; ?>" data-image="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" data-location="home">
      <div class="play-button">
        <svg class="icon-play">
          <use xlink:href="#icon-play" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
        </svg>
      </div>
    </div>
  </div>
</div>