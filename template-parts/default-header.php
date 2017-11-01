<header id="masthead" class="site-header flex-spaced p3-lr p1-tb">
  <div class="site-branding">
    <a class="block" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      <svg class="logo">
        <use xlink:href="#logo" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
      </svg>
    </a>
  </div>

	<div class="nav-wrap">
    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      </button>
      <div class="menu-container">
      <?php
        wp_nav_menu( array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        ) );
      ?>
      </div>
    </nav><!-- #site-navigation -->
    <button id="search-toggle" class="menu-search naked">
      <svg class="icon-search">
        <use xlink:href="#icon-search" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
      </svg>
    </button>
		<div class="menu-search-wrapper p1-tb">
			<?php get_search_form(); ?>
			<button id="close-search" class="naked"><svg class="icon-close">
				<use xlink:href="#icon-close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
				</svg>
			</button>
		</div>
	</div>
</header><!-- #masthead -->   

<?php if(!is_page_template('page-templates/page-contact.php')) : ?>
    
	<?php
			global $sitepress;
			$current_language = $sitepress->get_current_language();
			if ($current_language == 'de') {
					$style = 'contact-cta-de';
			} else {
					$style = '';    
			}
	?>

  <?php if(!is_page(1283)) : ?>                                        
    
	<a class="contact-cta white no-underline hover-effect <?php echo $style; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><?php esc_html_e( 'Contact us', '_pixformance' ); ?> <span class="arrow-right"></span></span></a>
    <?php endif; ?>
<?php endif; ?>