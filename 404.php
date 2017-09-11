<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header(); ?>

<div class="wrapper bg-gray-medium" >
	<div class="h-full layout v-center p3-lr">
		<div class="w-third-extra">
			<svg class="icon-404 m2-b">
				<use xlink:href="#icon-404" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
			</svg>
			<h1 class="f-headline m3-b"><?php esc_html_e( 'Oops! Page not found.', '_pixformance' ); ?></h1>
			<p>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Go Home', '_pixformance' ); ?></a>
				<a class="button" href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact us', '_pixformance' ); ?></a>
			</p>
		</div>
	</div>
</div>

<?php
get_footer();
