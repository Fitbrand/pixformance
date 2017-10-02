<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="f2"><?php esc_html_e( 'Nothing Found', '_pixformance' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>



		<?php elseif ( is_search() ) : ?>

			<p class="m3-b"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', '_pixformance' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', '_pixformance' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
