<?php if( have_rows('grid_icon_blocks') ): ?>
<div class="wrapper">
  <div class="layout p6-t m9-b p3-lr">
    <div class="icon-grid m3-b">
    <?php $i = 1; while( have_rows('grid_icon_blocks') ): the_row(); 
      // vars
      $image = get_sub_field('image');
      $content = get_sub_field('content');
      $title = get_sub_field('title');
      $link = get_field('download_case_study');
      ?>
      <div class="m3-b">
        <?php if($image) : ?>
          <img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
        <?php endif; ?>
        <span class="blue m2-b block">_0<?php echo $i; ?></span>
        <h3 class="f2 m3-b"><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
      <?php $i++; endwhile; ?>
    </div>
    <footer class="text-center">
      <a href="<?php echo $link; ?>" class="button ttu">Download case study</a>
    </footer>
  </div>
</div>

<?php endif; ?>