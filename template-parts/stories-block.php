<div class="wrapper bg-gray-medium clearfix" id="studies">
  <div class="layout p9-t m9-b p3-lr">
  <div class="stroke-story-1 stroke stroke-scroll" id="story-stroke-1"></div>
  <div class="stroke-story-2 stroke stroke-scroll" id="story-stroke-2"></div>
  <h2 class="f2 ttu text-center m6-b"><?php esc_html_e( 'Case studies', '_pixformance' ); ?></h2>
  <div class="grid grid-halves grid-gap-medium">

  <?php 

        // WP_Query arguments
        $args = array(
          'post_type'              => array( 'story' ),
          'posts_per_page'         => '2',
          'order'                  => 'ASC',
          'orderby'                => 'date',
        );

        $queryStories = new WP_Query( $args );

        if ( $queryStories->have_posts() ) {
          while ( $queryStories->have_posts() ) {
            $queryStories->the_post();
  ?>
  
        <div  class="grid-item no-underline black block m3-b  story-featured bg-white text-center p3-lr p3-t">
          <span class="story-featured-image-wrapper m1-b"><?php echo  wp_get_attachment_image( get_post_thumbnail_id($post->ID), 'full', '', ["class" => "story-featured-image"] ); ?></span>
          
          <div class="m3-b"><?php the_field('excerpt'); ?></div>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>cases/<?php echo basename(get_permalink()); ?>" class="button m6-b">
            <?php esc_html_e( 'Learn more', '_pixformance' ); ?>
          </a>
          </div>

          <?php } } wp_reset_postdata(); ?>
  </div>
  </div>
</div>