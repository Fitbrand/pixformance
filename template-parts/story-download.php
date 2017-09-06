<?php if(get_field('show_download_cta')) : ?>
<?php $cta = get_field('download_cta', 'option'); ?>
<?php if($cta) : ?>
<?php 
  $title = $cta['title']; 
  $link = $cta['link'];
?>

<div class="wrapper bg-green clearfix white">
  <div class="layout p9-t m9-b">
    <div class="grid-halves v-align-center">
      <div class="text-center f2 italic"><?php echo $title; ?></div>
      <div><a href="<?php echo $link; ?>" class="button button-secondary">Download</a></div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php endif; ?>