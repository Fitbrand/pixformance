<?php if(get_field('video_header_homepage')) : ?>
<?php $block = get_field('video_header_homepage'); ?>
<?php $image = $block['image']; 
      $id = $block['id'];
      $title = $block['title'];
      $content = $block['content'];
      $size = 'header';
    ?>

<div class="wrapper">
  <div class="youtube youtube-background" data-embed="<?php echo $id; ?>" data-location="home">
  </div>
  <div class="video-content-wrapper white">
    <div class="layout">
      <div class="video-content p3-lr">
        <div class="w-third-extra">
          <h1 class="f-headline m3-b"><?php echo $title; ?></h1>
          <div class="m6-b"><?php echo $content; ?></div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <div class="wrapper"  style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">
    <div class="video-player-wrapper">
      <div class="video-player2">
        <iframe class="background-video" src="https://www.youtube.com/embed/<?php echo $id; ?>?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=<?php echo $id; ?>" frameborder="0" volume="0" allowfullscreen></iframe>
      </div>
    </div>
    
    <div class="video-content-wrapper gradient  white">
      <div class="layout">
        <div class="video-content p3-lr">
          <div class="w-third-extra">
            <h1 class="f-headline m3-b"><?php echo $title; ?></h1>
            <div class="m6-b"><?php echo $content; ?></div>
          </div>
        </div>
      </div>
    </div>


</div> -->
<?php endif; ?>