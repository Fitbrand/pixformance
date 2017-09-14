<?php if(get_field('content_block_general')) : ?>
<?php $block = get_field('content_block_general'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
      $position = $block['image_position'];
      $space = $block['space'];
    ?>

<div class="wrapper">
	<div class="layout p9-t m9-b p3-lr p6-t-small">
    <div class="grid grid-halves grid-image-<?php echo $position; ?>">
      <div class="grid-item">
        <img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
      <div class="grid-item">
        <div class="w-third-extra <?php if($space) : ?> p6-t <?php endif; ?>">
        <h2 class="f2 m3-b"><?php echo $title; ?></h2>
          <?php echo $content; ?>
        </div>
      </div>
    </div>
   </div>
</div>
<?php endif; ?>