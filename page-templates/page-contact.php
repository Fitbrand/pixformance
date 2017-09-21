<?php
/**
 * The template for displaying all pages
 *
 * Template name: Contact
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<?php
    // If a feature image is set, get the id, so it can be injected as a css background property
    if ( has_post_thumbnail( $post->ID ) ) :
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0];
    ?>
    
  <div class="wrapper h-item-2 filled" style="background-image: url(<?php echo $image; ?>)">
  <div class="stroke-pageheader-1 stroke"></div>  
  <div class="stroke-pageheader-2 stroke"></div>  

  <div class="layout">
      &nbsp;
    </div>
  </div>

  <div class="wrapper p9-t ">
    <div class="layout p3-lr">
      <div class="w-half">
        <div class="m6-b">
        <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile; // End of the loop.
          ?>
        </div>
       
      </div>
    </div>
  </div>

  <div class="wrapper bg-gray-medium clearfix">
  <div class="stroke stroke-contact-3 stroke-scroll" id="stroke-contact-3"></div>  
    <div class="layout p3-lr p6-t">
      <div class="w-half">
      <?php if(get_field('contact')): 
          $block = get_field('contact'); 
        ?>
      <div class="grid grid-halves">
        <div class="grid-item m6-b">
          <?php echo $block['footer_1']; ?>
        </div>
        <div class="grid-item m6-b">
          <?php echo $block['footer_2']; ?>
        </div>
      </div>
      <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php
get_sidebar();
get_footer();