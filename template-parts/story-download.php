<?php if(get_field('show_download_cta')) : ?>
<?php $cta = get_field('download_cta', 'option'); ?>
<?php if($cta) : ?>
<?php 
  $title = $cta['title']; 
  $link = $cta['link'];
?>

<div class="wrapper bg-green clearfix white">
  <div class="layout p9-t m9-b p3-lr">
    <div class="grid-halves v-align-center">
      <div class="text-center f2 italic m3-b-small"><?php echo $title; ?></div>
      <div class="text-center"><a href="<?php echo $link; ?>" class="button button-secondary">Download</a></div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php endif; ?>