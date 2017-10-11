<?php if(get_field('page_header')) : ?>
<?php $block = get_field('video_header_homepage'); ?>
<?php
$image = $block['image']; 
$id = $block['id'];
$title = $block['title'];
$content = $block['content'];
$size = 'header';
?>
<div class="wrapper filled "  style="background-image: url(<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>)">
  <div class="overlay-gray">
    <a href="#main" class="header-read-more ttu no-underline"><?php esc_html_e( 'More', '_pixformance' ); ?></a>
    <div class="stroke-pageheader-1 stroke"></div>  
    <div class="stroke-pageheader-2 stroke"></div>  
    <div class="stroke-pageheader-3 stroke"></div>  
    <div class="h-large layout v-center p3-lr p6-t-small text-center ">
			<div class="w-half-small center">
        <h1 class="f-headline m3-b white"><?php echo $title; ?></h1>
        <?php echo $content; ?>
			</div>
    </div>
  </div>
</div>
<?php endif; ?>