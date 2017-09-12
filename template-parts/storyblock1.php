<?php if(get_field('story_banner')) : ?>
<?php $block = get_field('story_banner'); ?>
<?php $image = $block['background']; 
      $content = $block['content'];
      $title = $block['title'];
      $link = $block['link'];
    ?>
<div class="wrapper filled white m9-b" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
  <div class="overlay-gray  p3-lr p6-t">
    <h4 class="f2 m2-b"><?php echo $title; ?></h4>
      <div class="w-small">  
    <p class="m3-b"><?php echo $content; ?></p>
    <a href="<?php echo $link; ?>" class="m6-b button button-secondary">View case study</a>
    </div>
  </div>
</div>
<?php endif; ?>