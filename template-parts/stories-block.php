<div class="wrapper bg-gray-medium clearfix">
  <div class="layout p9-t m9-b p3-lr">
  <h2 class="f2 ttu text-center m6-b">Success stories</h2>
  <div class="grid grid-halves grid-gap-medium">

  <?php 

        // WP_Query arguments
        $args = array(
          'post_type'              => array( 'stories' ),
          'has_password'           => false,
          'nopaging'               => false,
          'posts_per_page'         => '2',
          'order'                  => 'ASC',
          'orderby'                => 'date',
        );

        $queryStories = new WP_Query( $args );

        if ( $queryStories->have_posts() ) {
          while ( $queryStories->have_posts() ) {
            $queryStories->the_post();
  ?>

        <a href="#" class="grid-item no-underline black block m3-b hover-effect story-featured bg-white text-center p6 p3-t">
          <span class="story-featured-image-wrapper m1-b"><?php echo  wp_get_attachment_image( get_post_thumbnail_id($post->ID), 'full', '', ["class" => "story-featured-image"] ); ?></span>
          <p><?php the_field('excerpt'); ?></p>
        </a>

          <?php } } wp_reset_postdata(); ?>
  </div>
  </div>
</div>