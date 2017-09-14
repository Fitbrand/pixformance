<?php if(get_field('usps')) : ?>
<?php  
  $usps = get_field('usps');
  $row1 =  $usps['row_1'];
  $row2 =  $usps['row_2'];
  $image =  $usps['image'];
  ?>
<div class="wrapper bg-gray-light clearfix">
  <div class="layout p3-lr">
    <div class="grid usps m6-b p3-t">
      <div class="grid-item v-center-spaced-column">
      <?php foreach($row1 as $item):  ?>
      <?php $title = $item['title']; $text = $item['content']; ?>
        <div class="m6-b w-full m0-last text-right">
          <h5 class="f4 m0"><?php echo $title; ?></h5>
          <p><?php echo $text; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="grid-item">
        <img class="m3-b-small" src="<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>" />
      </div>
      <div class="grid-item v-center-spaced-column">
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