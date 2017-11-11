<?php if(get_field('content_block_us_valerie')) : ?>
<?php $block = get_field('content_block_us_valerie'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
      $subtitle = $block['subtitle'];
    ?>


<div class="wrapper filled bg-hide-small" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">
<div class="stroke stroke-about-1 stroke-scroll" id="stroke-about-1"></div>   
<div class="stroke stroke-about-2 stroke-scroll" id="stroke-about-2"></div>   
<div class="layout">
  <div class="grid grid-halves ">
    <div class="grid-item bg-show-small h-item-1 filled" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">&nbsp;</div>
      <div class="grid-item p9-t m9-b">
        <div class="w-third-extra p3-lr">
        <h5 class="f4 ttu m6-b"><?php echo $title; ?></h5>
        <h2 class="f2 m3-b"><?php echo $subtitle; ?></h2>
        <?php echo $content; ?>
        </div>
      </div>
  </div>
  </div>
</div>
<?php endif; ?>