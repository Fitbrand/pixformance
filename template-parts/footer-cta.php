<?php if(get_field('show_footer_cta')) : ?>
  <?php $cta = get_field('cta_footer', 'option'); ?>
  <?php if($cta) : ?>
    <?php $image = $cta['background_image']; 
      $content = $cta['content'];
      $link = $cta['link'];
    ?>
    <div class="wrapper">
      <div class="grid-halves">
        <div class="filled" style="background-image: url('<?php echo $image; ?>')">
          &nbsp;
        </div>
        <div class="bg-purple p6-tb white">
          <a href="<?php echo $link; ?>" class="f3 white no-underline"><?php echo $content; ?></a>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>