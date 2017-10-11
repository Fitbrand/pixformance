<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70930467-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());
		gtag('config', 'UA-70930467-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
	<?php wp_head(); ?>
	<?php get_template_part('template-parts/favicon');?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/svg');?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_pixformance' ); ?></a>


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
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
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
    
	<a class="contact-cta white no-underline hover-effect <?php echo $style; ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>contact"><?php esc_html_e( 'Contact us', '_pixformance' ); ?> <span class="arrow-right"></span></span></a>
    
    
				<?php endif; ?>
	<div id="content" class="site-content">
