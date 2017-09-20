<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
	</div>
	<?php get_template_part( 'template-parts/recent-customers' ); ?>
	<?php get_template_part( 'template-parts/story-download' ); ?>
	<?php get_template_part('template-parts/contact-cta');?>
	<footer id="colophon" class="p6-t relative">
	<div class="stroke-footer-1 stroke stroke-scroll" id="stoke-footer-1"></div>
		<div class="layout f7 p3-lr">
		<h5 class="bold ttu"><?php bloginfo( 'name' ); ?></h5>
			<div class="grid grid-sixes m3-b">
				<div class="grid-item">
					<p>
						Principal Office<br> Hauptstr. 19-20<br> D- Dallgow-Döberitz
					</p>
				</div>
				<div class="grid-item">
					<p>
						Development Office <br> Helmholtzstraße 2-9 <br> GSG Hof/Aufgang H <br> D-10587 Berlin
					</p>
				</div>
				<div class="grid-item m3-b">
					<p>
						<strong class="label-spacer">T</strong>+49 (0)30 39 80 56 10 <br>
						<strong class="label-spacer">F</strong>+49 (0)30 39 80 56 129 <br>
						<strong class="label-spacer">M</strong>contact@pixformance.com
					</p>
				</div>
				<div class="grid-item m3-b">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer',
					) );
				?>
				</div>
				<div class="grid-item m3-b">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-3',
						'menu_id'        => 'social',
					) );
				?>
				</div>
				<div class="grid-item relative">
					<a href="#page" class="back-top ttu">Back to top</a>
				</div>
			</div>
			<p class="m2-b">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <?php esc_html_e( 'all rights reserved', '_pixformance' ); ?></p>
		</div>
	</footer>

	<?php get_template_part('template-parts/footer-cta');?>
</div>
<?php wp_footer(); ?>
</body>
</html>
