<?php if(get_field('show_contact_cta')) : ?>
<?php $cta = get_field('cta_contact', 'option'); ?>
<?php if($cta) : ?>
<?php 
  $title = $cta['title']; 
  $form = $cta['form'];
?>
<div class="wrapper bg-gray-light clearfix">
  <div class="layout p9-t m9-b">
    <div class="w-half">
      <h4 class="f3 m6-b"><?php echo $title; ?></h4>
      <?php echo do_shortcode($form); ?>
    </div>
  </div>
  <div class="stroke bg-purple pos-top pos-right">&nbsp;</div>
</div>
<?php endif; ?>
<?php endif; ?>