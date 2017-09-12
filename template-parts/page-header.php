<?php if(get_field('page_header')) : ?>
<?php $header = get_field('page_header'); ?>
<?php
  $image = $header['background'];
  $title = $header['title'];
  $content = $header['content'];
  $size = 'header';
?>
	<div class="wrapper filled " style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">
		<div class="h-full layout v-center p3-lr p6-t-small">
			<div class="w-third-extra">
        <h1 class="f-headline m3-b"><?php echo $title; ?></h1>
        <div class="m6-b"><?php echo $content; ?></div>
			</div>
		</div>
  </div>
<?php endif; ?>