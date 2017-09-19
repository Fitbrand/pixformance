<?php if(get_field('where_block')) : ?>
<?php $block = get_field('where_block'); ?>
<?php $image = $block['image']; 
      $content = $block['text'];
      $form = $block['form'];
      $title = $block['title'];
    ?>
<div class="wrapper bg-gray-light">
<div class="stroke-where-1 stroke stroke-scroll" id="where-stroke-1"></div>
  <div class="layout">
    <div class="grid grid-halves grid-gap-large p6-tb p1-lr">
      <div class="grid-item p1-lr">
        <img class="m3-b-small" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
      <div class="grid-item push-right w-third v-center-spaced-column ">
        <h2 class="f2 m3-b w-full"><?php echo $title; ?></h2>
        <p class="m3-b w-full"><?php echo $content; ?></p>
        <?php echo do_shortcode($form); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>