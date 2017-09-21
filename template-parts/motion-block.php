<?php if(get_field('motion_block')) : ?>
<?php $block = get_field('motion_block'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
    ?>
<div class="wrapper">
<div class="stroke-motion-1 stroke stroke-scroll" id="motion-stroke-1"></div>
<div class="layout p3-lr">
  <div class="grid grid-halves grid-gap-large">
    <div class="grid-item v-center-spaced  p6-tb">
    <div class="w-third ">
      <h2 class="f2 w-full m3-b"><?php echo $title; ?></h2>
      <div class="w-full"><?php echo $content; ?></div>
    </div>
    </div>
    <div class="grid-item p1-lr p6-t text-center">
    <img class="workout-mockup" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
    </div>
  </div>
</div>
</div>


<?php endif; ?>