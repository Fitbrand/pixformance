<?php if(get_field('motion_block')) : ?>
<?php $block = get_field('motion_block'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
    ?>


<div class="wrapper p9-t m9-b">
 <div class="wrapper-grid function-block">
  <div class="grid-item out-grid-content p6-t m3-b v-center-middle">
    <div class="w-third-extra p3-lr">
      <h2 class="f2 w-full m3-b"><?php echo $title; ?></h2>
      <div class="w-full"><?php echo $content; ?></div>
    </div>
  </div>
  <div class="h-item-3  grid-item p6-t p9-b out-grid-right filled filled-top" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
    &nbsp;
  </div>
  <div class="stroke stroke-out-grid stroke-scroll" id="outgrid-stroke-1"></div>
</div>
</div>  


<?php endif; ?>