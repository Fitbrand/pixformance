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
	<?php get_template_part('template-parts/contact-cta');?>
	<footer id="colophon" class="p4-t">
		<div class="layout f7">
			<div class="grid-sixes m6-b">
				<div>
					<h5 class="bold ttu"><?php bloginfo( 'name' ); ?></h5>
					<p>
						Principal Office<br> Hauptstr. 19-20<br> D- Dallgow-Döberitz
					</p>
				</div>
				<div>
					<p>
						Development Office <br> Helmholtzstraße 2-9 <br> GSG Hof/Aufgang H <br> D-10587 Berlin
					</p>
				</div>
				<div>
					<p>
						<strong>T</strong>+49 (0)30 39 80 56 10 <br>
						<strong>F</strong>+49 (0)30 39 80 56 129 <br>
						<strong>M</strong>contact@pixformance.com
					</p>
				</div>
			</div>
			<p class="m1-b">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <?php esc_html_e( 'all rights reserved', '_pixformance' ); ?></p>
		</div>
	</footer>

	<?php get_template_part('template-parts/footer-cta');?>
</div>
<?php wp_footer(); ?>
</body>
</html>
