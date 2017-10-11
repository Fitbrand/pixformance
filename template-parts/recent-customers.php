<?php if(get_field('show_cases')) : ?>
<div class="wrapper bg-gray white clearfix">
  <div class="layout p6-t m6-b text-center p3-lr">
    <h4 class="f2 m6-b"><?php _e("Meet some of our happy customers", "_pixformance"); ?></h4>
    <div class="grid grid-thirds">
    <?php 

        // WP_Query arguments
        $args = array(
          'post_type'              => array( 'stories' ),
          'has_password'           => false,
          'nopaging'               => true,
          'posts_per_page'         => '3',
          'order'                  => 'DESC',
          'orderby'                => 'date',
        );

        $queryStories = new WP_Query( $args );

        if ( $queryStories->have_posts() ) {
          while ( $queryStories->have_posts() ) {
            $queryStories->the_post();
  ?>

        <span class="grid-item">
          <span class="recent-client-image-wrapper m1-b"><?php echo  wp_get_attachment_image( get_post_thumbnail_id($post->ID), 'full', '', ["class" => "story-featured-image filter-white"] ); ?></span>
        </span>

          <?php } } wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php endif; ?>