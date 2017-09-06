<?php if(get_field('content_block_us')) : ?>
<?php $block = get_field('content_block_us'); ?>
<?php $image = $block['image']; 
      $content = $block['content'];
      $title = $block['title'];
    ?>

<div class="wrapper">
	<div class="layout p9-t m9-b">
    <div class="grid-halves">
      <div class="w-third-extra">
      <h2 class="f2 m3-b"><?php echo $title; ?></h2>
        <?php echo $content; ?>
      </div>
      <div>
        <img src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
    </div>
   </div>
</div>
<?php endif; ?>