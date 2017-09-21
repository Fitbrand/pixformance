<?php if(get_field('usps')) : ?>
<?php  
  $usps = get_field('usps');
  $row1 =  $usps['row_1'];
  $row2 =  $usps['row_2'];
  $image =  $usps['image'];
  $size = 'full';
  ?>
<div class="wrapper filled clearfix" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, $size )[0] ?>')">
<div class="stroke-usp-1 stroke stroke-scroll" id="usp-stroke-1"></div>
<div class="stroke-usp-2 stroke stroke-scroll" id="usp-stroke-2"></div>
  <div class="h-full layout p3-lr">
    <div class="usps m3-b p3-t">
      <div class="usp-row">
      <?php foreach($row1 as $item):  ?>
      <?php $title = $item['title']; $text = $item['content']; ?>
        <div class="m3-b w-full text-center usp-row-item p3-lr">
          <h5 class="f4 m0"><?php echo $title; ?></h5>
          <p><?php echo $text; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
      <div class="usp-row">
      <?php foreach($row2 as $item):  ?>
      <?php $title = $item['title']; $text = $item['content']; ?>
        <div class="m3-b w-full text-center usp-row-item p3-lr">
          <h5 class="f4 m0"><?php echo $title; ?></h5>
          <p><?php echo $text; ?></p>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>