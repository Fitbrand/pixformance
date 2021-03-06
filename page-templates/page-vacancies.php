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
<div class="stroke-vacancies-1 stroke"></div>
  <div class="layout p9-t m6-b p3-lr">
  
    <div class="w-third-extra m6-b">
      <?php the_content(); ?>
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
    <div class="stroke-vacancies-2 stroke stroke-scroll" id="stroke-vacancies-2"></div>
    <div class="stroke-vacancies-3 stroke stroke-scroll" id="stroke-vacancies-3"></div>
      <div class="layout p6-t m3-b p3-lr">
        <h2 class="f2 m3-b"><sup>0<?php echo $i; ?></sup> <?php the_title(); ?></h2>
        <div class="m6-b w-third-extra"><?php the_content(); ?></div>
        <div class="grid grid-fourths grid-space m3-b">
        <?php $block = get_field('vacancy'); ?>
        <?php $tasks = $block['tasks']; 
              $challenges = $block['challenges'];
              $looking = $block['looking'];
              $offer = $block['offer'];
            ?>
          <div class="grid-item m3-b">
            <?php echo $tasks; ?>
          </div>
          <div class="grid-item m3-b">
          <?php echo $challenges; ?>
          </div>
          <div class="grid-item m3-b">
          <?php echo $looking; ?>
          </div>
          <div class="grid-item m3-b">
          <?php echo $offer; ?>
          </div>
        </div>
        <p><a href="mailto:jobs@pixformance.com" class="button m3-b"><?php esc_html_e( 'Apply now', '_pixformance' ); ?></a></p>
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
    <div class="stroke-footer-2 stroke stroke-scroll" id="footer-stroke-2"></div>
      <div class="grid grid-halves">
        <div class="grid-item filled p9-t p9-b" style="background-image: url('<?php echo wp_get_attachment_image_src( $image, 'full' )[0] ?>')">
          &nbsp;
        </div>
        <div class="grid-item bg-purple p9-t white p1-lr text-center">
          <div class="m7-b inline-block f2 white no-underline w-small l-large italic"><?php echo $content; ?></div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endif; ?>
<?php
get_sidebar();
get_footer();
