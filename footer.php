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
	<?php get_template_part('template-parts/footer-cta');?>
	<footer id="colophon" class="p6-t relative">
	<div class="stroke-footer-1 stroke stroke-scroll" id="stoke-footer-1"></div>
		<div class="layout f7 p3-lr">
		<h5 class="bold ttu"><?php bloginfo( 'name' ); ?></h5>
			<div class="grid grid-sixes m3-b">
			<?php $block = get_field('footer', 'options'); ?>
			<?php $column1 = $block['column_1']; 
						$column2 = $block['column_2'];
						$column3 = $block['column_3'];
					?>
				
				<div class="grid-item">
					<?php echo $column1; ?>
				</div>
				<div class="grid-item">
					<?php echo $column2; ?>
				</div>
				<div class="grid-item m3-b">
					<?php echo $column3; ?>
				</div>
				<div class="grid-item m3-b footer-menu-block">
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
					<a href="#page" class="back-top ttu"><?php esc_html_e( 'Back to top', '_pixformance' ); ?></a>
				</div>
			</div>
			<p class="m2-b">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - <?php esc_html_e( 'all rights reserved', '_pixformance' ); ?></p>
		</div>
	</footer>


</div>

<?php wp_footer(); ?>

</body>
</html>

<?php
	global $sitepress;
	$current_language = $sitepress->get_current_language();
	if ($current_language == 'nl') : ?>
<div class="pix">
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 836917840;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/836917840/?guid=ON&amp;script=0"/>
		</div>
	</noscript>
</div>
<?php endif; ?>