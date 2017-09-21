<?php if(get_field('where_block')) : ?>
<?php $block = get_field('where_block'); ?>
<?php $image = $block['image']; 
      $content = $block['text'];
      $form = $block['form'];
      $title = $block['title'];
    ?>

<div class="wrapper">
 <div class="wrapper-grid wrapper-grid-reversed h-full">
 <div class="h-item-1  grid-item p9-t p9-b out-grid-right filled filled-top" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
    &nbsp;
  </div>
  <div class="grid-item out-grid-content p6-t m9-b v-center-middle">
    <div class="w-third-extra push-right p3-lr">
    <h2 class="f2 m3-b w-full"><?php echo $title; ?></h2>
    <p class="m3-b w-full"><?php echo $content; ?></p>
    <?php echo do_shortcode($form); ?>
    </div>
  </div>

</div>
<div class="stroke stroke-out-grid-2 stroke-scroll" id="outgrid-stroke-2"></div>
<div class="stroke stroke-out-grid-3 stroke-scroll" id="outgrid-stroke-3"></div>
</div>   


<?php endif; ?>