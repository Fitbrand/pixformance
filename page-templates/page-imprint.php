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
  <div class="layout p9-t">
    <h1 class="m6-b"><sup>01</sup> Imprint</h1>

    <div class="grid-fourths m6-b">
      <div>
        <?php echo $column1; ?>
      </div>
      <div>
        <?php echo $column2; ?>
      </div>
      <div>
        <?php echo $column3; ?>
      </div>
      <div>
      <?php echo $column4; ?>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>

<div class="wrapper bg-gray-light clearfix">
  <div class="layout p9-t m9-b">
    <div class="grid-1-3">
      <div>&nbsp;</div>
      <div>
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
