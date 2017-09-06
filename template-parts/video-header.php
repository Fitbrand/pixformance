<?php if(get_field('video_header')) : ?>
<?php $block = get_field('video_header'); ?>
<?php $image = $block['image']; 
      $id = $block['id'];
      $title = $block['title'];
    ?>

<div class="wrapper">
  <div class="youtube" data-embed="<?php echo $id; ?>" data-image="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" data-location="home">
    <div class="play-button">
      <svg class="icon-play">
        <use xlink:href="#icon-play" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
      </svg>
    </div>
  </div>
  <div class="video-content-wrapper white">
    <div class="layout">
      <div class="video-content">
        <h1><?php echo $title; ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>