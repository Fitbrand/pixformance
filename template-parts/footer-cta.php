<?php if(get_field('show_footer_cta') || is_singular('post') ) : ?>
  <?php $cta = get_field('cta_footer', 'option'); ?>
  <?php if($cta) : ?>
    <?php $image = $cta['background_image']; 
      $content = $cta['content'];
      $link = $cta['link'];
    ?>
    <div class="wrapper">
      <div class="grid grid-halves">
        <div class="grid-item filled p9-t p9-b" style="background-image: url('<?php echo $image; ?>')">
          &nbsp;
        </div>
        <div class="grid-item bg-purple p9-t white p1-lr text-center">
          <a href="<?php echo $link; ?>" class="m7-b inline-block f2 white no-underline w-small l-large italic"><?php echo $content; ?></a>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>