<?php
/**
 * The template for displaying all pages
 *
 * Template name: Vacancies
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div class="wrapper bg-yellow-light clearfix">
  <div class="layout p9-t m6-b">
    <div class="w-third-extra m6-b">
      <h1 class="f1 m3-b">Join our Team!</h1>
      <p>We're an established Berlin based start-up, making the best fitness and rehab training experience in the world. We're currently looking for talented people to join our international team. See our open positions below.</p>
    </div>
    <div class="w-half-extra">
      <nav class="h-menu">
      <?php 

        // WP_Query arguments
        $args = array(
          'post_type'              => array( 'vacancy' ),
          'has_password'           => false,
          'nopaging'               => false,
          'posts_per_page'         => '9999',
          'order'                  => 'ASC',
          'orderby'                => 'date',
        );

        $queryVacancies = new WP_Query( $args );
        $i = 1;
        if ( $queryVacancies->have_posts() ) {
          while ( $queryVacancies->have_posts() ) {
            $queryVacancies->the_post();
      ?>
        <a class="no-underline black m1-r" href="#item-<?php the_id(); ?>"><sup>0<?php echo $i; ?></sup> <?php the_title(); ?></a>
<?php $i++; } } wp_reset_postdata(); ?>
      </nav>
    </div>
  </div>
</div>

<?php 

  // WP_Query arguments
  $args = array(
    'post_type'              => array( 'vacancy' ),
    'has_password'           => false,
    'nopaging'               => false,
    'posts_per_page'         => '9999',
    'order'                  => 'ASC',
    'orderby'                => 'date',
  );

  $queryVacancies = new WP_Query( $args );
  $i = 1;
  if ( $queryVacancies->have_posts() ) {
    while ( $queryVacancies->have_posts() ) {
      $queryVacancies->the_post();
?>

    <div class="wrapper border-bottom clearfix" id="item-<?php the_id(); ?>">
      <div class="layout p6-t m3-b">
        <h2 class="f2 m3-b"><sup>0<?php echo $i; ?></sup> <?php the_title(); ?></h2>
        <div class="m6-b w-third-extra"><?php the_content(); ?></div>
        <div class="grid-fourths grid-space m3-b">
        <?php $block = get_field('vacancy'); ?>
        <?php $tasks = $block['tasks']; 
              $challenges = $block['challenges'];
              $looking = $block['looking'];
              $offer = $block['offer'];
            ?>
          <div>
            <?php echo $tasks; ?>
          </div>
          <div>
          <?php echo $challenges; ?>
          </div>
          <div>
          <?php echo $looking; ?>
          </div>
          <div>
          <?php echo $offer; ?>
          </div>
        </div>
        <p><a href="#" class="button m3-b"><?php esc_html_e( 'Apply now', '_pixformance' ); ?></a></p>
      </div>
    </div>

    <?php $i++; } } wp_reset_postdata(); ?>

<?php if(get_field('looking_block')) : ?>
  <?php $black = get_field('looking_block'); ?>
  <?php if($black) : ?>
    <?php $image = $black['image']; 
      $content = $black['content'];

    ?>
    <div class="wrapper">
      <div class="grid-halves">
        <div class="filled" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
          &nbsp;
        </div>
        <div class="bg-purple p9-t white p1-lr text-center">
          <div class="m7-b inline-block f2 white no-underline w-small l-large italic"><?php echo $content; ?></div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>
<?php
get_sidebar();
get_footer();
