<?php if(get_field('show_contact_cta')) : ?>
<?php $cta = get_field('cta_contact', 'option'); ?>
<?php if($cta) : ?>
<?php 
  $title = $cta['title']; 
  $form = $cta['form'];
?>
<div class="wrapper bg-gray-light clearfix">
  <div class="layout p9-t m9-b p3-lr">
    <div class="w-half">
      <h4 class="f3 m6-b"><?php echo $title; ?></h4>
      <?php echo do_shortcode($form); ?>
    </div>
  </div>
  <div class="stroke-contact-1 stroke stroke-scroll" id="contact-stroke-1"></div>
</div>
<?php endif; ?>
<?php endif; ?>