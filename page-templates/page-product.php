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
  <div class="stroke stroke-product-2 stroke-scroll" id="product-stroke-2"></div>
  <div class="stroke stroke-product-3 stroke-scroll" id="product-stroke-3"></div>
  <div class="layout p9-t">
    <?php get_template_part( 'template-parts/productrow1' ); ?>
    <?php get_template_part( 'template-parts/storyblock1' ); ?>
  </div>
</div>
<div class="wrapper">
  <div class="stroke stroke-product-4 stroke-scroll" id="product-stroke-4"></div>
  <div class="stroke stroke-product-5 stroke-scroll" id="product-stroke-5"></div>
  <div class="layout relative">  
    <?php get_template_part( 'template-parts/productrow2' ); ?>
    <div class="stroke stroke-product-6 stroke-scroll" id="product-stroke-6"></div>
    <?php get_template_part( 'template-parts/storyblock2' ); ?>
  </div>
</div>

<?php get_template_part( 'template-parts/out-of-grid' ); ?>
</div>
<?php
get_sidebar();
get_footer();
