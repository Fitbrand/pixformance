<?php if(get_field('product_header')) : ?>
<?php $header = get_field('product_header'); ?>
<?php
  $image = $header['image'];
  $title = $header['title'];

?>
	<div class="wrapper bg-gray-light">
  
		<div class="h-full layout v-center p3-lr">
      <div class="grid grid-3-1">
        <div class="grid-item v-center-spaced p6-t-small">
          <h1 class="f-headline m6-b"><?php echo $title; ?></h1>
        </div>
      <div class="grid-item v-center "><img class="w-medium" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" alt=""></div>
    </div>
  </div>
  <div class="stroke-product-1 stroke"></div>
  </div>
<?php endif; ?>