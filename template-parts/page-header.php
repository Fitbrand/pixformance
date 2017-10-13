<?php if(get_field('page_header')) : ?>
<?php $header = get_field('page_header'); ?>
<?php
  $title = $header['title'];
  $content = $header['content'];
  $image = $header['background'];
  $size = 'header';
  $color = $header['color'];
  $position = $header['position'];
  $align = $header['align'];
  $width = $header['text_width'];
  $stroke = $header['stroke_preset'];
  $overlay = $header['overlay'];
?>
<div class="wrapper filled " style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">
<?php if ($overlay) : ?><div class="overlay-gray"><?php endif; ?>
  <?php if($stroke === 'preset1') : ?>
    <div class="stroke-pageheader-1 stroke"></div>  
    <div class="stroke-pageheader-2 stroke"></div>  
    <div class="stroke-pageheader-3 stroke"></div>
  <?php endif; ?>
  <?php if($stroke === 'preset2') : ?>
    <div class="stroke stroke-pageheader-3 "></div>  
    <div class="stroke stroke-pageheader-4 "></div>  
  <?php endif; ?>


  <div class="h-large layout v-center p3-lr p6-t-small <?php echo $color; ?>">
	  <div class="w-header-<?php echo $width; ?> <?php echo $position; ?> text-<?php echo $align; ?>">
      <h1 class="f-headline m3-b"><?php echo $title; ?></h1>
      <div class="m6-b"><?php echo $content; ?></div>
		</div>
	</div>

  <?php if ($overlay) : ?></div><?php endif; ?>
</div>
  
<?php endif; ?>