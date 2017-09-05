<?php if(get_field('show_contact_cta')) : ?>
<?php $cta = get_field('cta_contact', 'option'); ?>
<?php if($cta) : ?>
<?php 
  $title = $cta['title']; 
  $form = $cta['form'];
?>
<div class="wrapper bg-gray-light">
  <div class="layout p6-tb">
    <div class="w-half">
      <h4 class="f3"><?php echo $title; ?></h4>
      <?php echo do_shortcode($form); ?>
    </div>
  </div>
  <div class="stroke bg-purple pos-top pos-right">&nbsp;</div>
</div>
<?php endif; ?>
<?php endif; ?>