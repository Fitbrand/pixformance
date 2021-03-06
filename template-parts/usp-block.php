<?php if(get_field('usps')) : ?>
<?php  
  $usps = get_field('usps');
  $row1 =  $usps['row_1'];
  $row2 =  $usps['row_2'];
  $image =  $usps['image'];
  $size = 'full';
  ?>

<div class="wrapper p9-t bg-gray-light clearfix">
<div class="stroke-usp-1 stroke stroke-scroll" id="usp-stroke-1"></div>
<div class="stroke-usp-2 stroke stroke-scroll" id="usp-stroke-2"></div>
  <div class="layout p3-lr">
    <h2 class="f2  ttu text-center m1-b"><?php esc_html_e( 'The Pixformance Station', '_pixformance' ); ?></h2>
    <div class="usps m6-b p3-t">
      <div class="v-center-spaced">
      <?php foreach($row1 as $item):  ?>
      <?php $title = $item['title']; $text = $item['content']; ?>
        <div class="m6-b w-full m0-last text-right">
          <h5 class="f4 m0"><?php echo $title; ?></h5>
          <p><?php echo $text; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <div>
        <img class="m3-b-small" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
      <div class="v-center-spaced">
      <?php foreach($row2 as $item):  ?>
      <?php $title = $item['title']; $text = $item['content']; ?>
        <div class="m6-b w-full m0-last">
          <h5 class="f4 m0"><?php echo $title; ?></h5>
          <p><?php echo $text; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



<?php endif; ?>