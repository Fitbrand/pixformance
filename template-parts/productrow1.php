<?php if( have_rows('products') ): ?>

	<?php $i = 0; while( have_rows('products') ): the_row(); 
		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('content');
		$title = get_sub_field('title');
		$position = get_sub_field('image_position');
    $size = get_sub_field('image_size');
    ?>
    <div class="w-large center relative">
      <?php if($position === 'left'): ?>
    
    <div class="grid grid-1-3 m9-b v-align-center p3-lr ">
      <div class="grid-item"><img class="m3-b" style="max-height: 220px; <?php if($size): ?> max-width: <?php echo $size;?>px; <?php endif; ?>" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
      <div class="grid-item">
        <h3 class="f3 m2-b"><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>
    <?php else: ?>
    <div class="grid grid-3-1 grid-3-1-reversed m6-b v-align-center p3-lr">
      <div class="grid-item"><img class="m3-b" style="max-height: 220px; <?php if($size): ?> max-width: <?php echo $size;?>px; <?php endif; ?>" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
      <div class="grid-item m3-b">
        <h3 class="f3 m2-b"><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
    </div>
    <?php endif; ?>
    </div>
  <?php endwhile; ?>

<?php endif; ?>