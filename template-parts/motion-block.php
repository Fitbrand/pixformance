<?php if(get_field('motion_block')) : ?>
<?php $block = get_field('motion_block'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
    ?>
<div class="wrapper">
<div class="layout p3-lr">
  <div class="where-block">
    <div class="w-third v-center-spaced  p6-tb">
      <h2 class="f2 w-full m3-b"><?php echo $title; ?></h2>
      <div class="w-full"><?php echo $content; ?></div>
    </div>
    <div class="p1-lr p6-t">
    <img class="workout-mockup" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
    </div>
  </div>
</div>
</div>
<?php endif; ?>