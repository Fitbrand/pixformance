<?php
/**
 * The template for displaying all pages
 *
 * Template name: Product
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php get_template_part( 'template-parts/product-header' ); ?>
<div class="wrapper">
  <div class="layout p9-t">
  <?php get_template_part( 'template-parts/productrow1' ); ?>
  <?php get_template_part( 'template-parts/storyblock1' ); ?>
  <?php get_template_part( 'template-parts/productrow2' ); ?>
  <?php get_template_part( 'template-parts/storyblock2' ); ?>
  </div>
</div>
<?php
get_sidebar();
get_footer();
