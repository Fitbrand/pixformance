<?php if(get_field('where_block')) : ?>
<?php $block = get_field('where_block'); ?>
<?php $image = $block['image']; 
      $content = $block['text'];
      $form = $block['form'];
      $title = $block['title'];
    ?>
<div class="wrapper bg-gray-light">
  <div class="layout">
    <div class="where-block p6-tb">
      <div class="p1-lr">
      <img src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
      <div class="push-right w-third v-center-spaced">
        <h2 class="f2 m3-b w-full"><?php echo $title; ?></h2>
        <p class="m3-b w-full"><?php echo $content; ?></p>
        <?php echo do_shortcode($form); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>