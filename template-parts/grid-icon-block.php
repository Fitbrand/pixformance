<?php if( have_rows('grid_icon_blocks') ): ?>
<div class="wrapper">
<div class="stroke-icon-1 stroke stroke-scroll" id="stoke-icon-1"></div>
  <div class="layout p6-t m9-b p3-lr">
    <div class="grid grid-thirds grid-gap-large m3-b">
    <?php $x = 1; while( have_rows('grid_icon_blocks') ): the_row(); 
      // vars
      $image = get_sub_field('image');
      $content = get_sub_field('content');
      $title = get_sub_field('title');
      $link = get_field('download_case_study');
      ?>
      <div class="grid-item m3-b">
        <?php if($image) : ?>
          <img class="m3-b" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
        <?php endif; ?>
        <span class="blue m2-b block">_0<?php echo $x; ?></span>
        <h3 class="f2 m3-b"><?php echo $title; ?></h3>
        <?php echo $content; ?>
      </div>
      <?php $x++; endwhile; ?>
    </div>
  
    <footer class="text-center">
      <a href="<?php echo $link; ?>" class="button ttu"><?php _e('Download case study', '_pixformance'); ?></a>
    </footer>
  </div>
</div>

<?php endif; ?>