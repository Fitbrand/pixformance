<?php
/**
 * The template for displaying all pages
 *
 * Template name: Imprint
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php if(get_field('imprint_header')) : ?>
<?php $block = get_field('imprint_header'); ?>
<?php $column1 = $block['column_1']; 
      $column2 = $block['column_2'];
      $column3 = $block['column_3'];
      $column4 = $block['column_4'];
?>

<div class="wrapper  bg-gray-light clearfix">
  <div class="layout p9-t p3-lr m6-b">
    <h1 class="m6-b"><sup>01</sup> Imprint</h1>

    <div class="grid grid-fourths m6-b">
      <div class="grid-item m3-b">
        <?php echo $column1; ?>
      </div>
      <div class="grid-item m3-b">
        <?php echo $column2; ?>
      </div>
      <div class="grid-item m3-b">
        <?php echo $column3; ?>
      </div>
      <div class="grid-item m3-b">
      <?php echo $column4; ?>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>

<div class="wrapper bg-gray-light clearfix">
  <div class="stroke-imprint-1 stroke stroke-scroll" id="imprint-stroke-1"></div>
  <div class="stroke-imprint-2 stroke stroke-scroll" id="imprint-stroke-2"></div>
  <div class="stroke-imprint-3 stroke stroke-scroll" id="imprint-stroke-3"></div>
  <div class="layout  m9-b p3-lr">
    <div class="grid grid-1-3">
      <div class="grid-item">&nbsp;</div>
      <div class="grid-item break">
            <?php
            while ( have_posts() ) : the_post();

            the_content();

            endwhile; // End of the loop.
            ?>
      </div>
    </div>
  </div>
</div>
<?php
get_sidebar();
get_footer();
