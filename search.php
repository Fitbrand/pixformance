<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _s
 */

get_header(); ?>

<?php
    // If a feature image is set, get the id, so it can be injected as a css background property

      $image = get_template_directory_uri() . '/dist/images/search-header.jpg'
    ?>
    
  <div class="wrapper h-item-2 filled" style="background-image: url(<?php echo $image; ?>)">
    <div class="layout">
      &nbsp;
    </div>
  </div>



	<div class="wrapper p9-t ">
	<div class="layout p3-lr">
		<div class="w-half">
			<div class="m6-b">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="f2 m3-b"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', '_pixformance' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
    </div>
		
	 </div>
 </div>
 </div>
<?php
get_sidebar();
get_footer();
