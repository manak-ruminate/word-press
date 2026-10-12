<?php
/**
 * The header for Astra Child Theme.
 *
 * Displays all of the <head> section, top bar, and professional navigation bar.
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
}
?>
<?php wp_head(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'astra' ); ?></a>

<div id="page" class="hfeed site">
	<?php
	// Output top contact bar
	if ( function_exists( 'astra_header_before' ) ) {
		astra_header_before();
	}
	?>

	<!-- ===== PROFESSIONAL NAVBAR ===== -->
	<header id="masthead" class="di-site-header" role="banner">
		<div class="di-nav-container">
			<!-- Logo -->
			<div class="di-nav-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="di-logo-link" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> - Home">
					<img src="<?php echo esc_url( di_asset( 'logo_daffodil.jpg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="di-logo-img" width="220" height="60" />
				</a>
			</div>

			<!-- Desktop Nav (Home, About Us, Products, Become a Distributor, Contact Us) -->
			<nav class="di-desktop-nav" id="diDesktopNav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'astra-child' ); ?>">
				<ul class="di-nav-menu">
					<li class="di-nav-item <?php echo is_front_page() ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="di-nav-link">Home</a>
					</li>
					<li class="di-nav-item <?php echo is_page( 'about-us' ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/about-us/' ) ); ?>" class="di-nav-link">About Us</a>
					</li>
					<li class="di-nav-item <?php echo ( is_page( 'products' ) || is_page( array( 'facial-tissues', 'paper-napkins', 'toilet-rolls', 'paper-towels', 'kitchen-range', 'hospital-range' ) ) ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>" class="di-nav-link">Products</a>
					</li>
					<li class="di-nav-item <?php echo is_page( 'become-a-distributor' ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/become-a-distributor/' ) ); ?>" class="di-nav-link">Become a Distributor</a>
					</li>
					<li class="di-nav-item di-nav-item--cta <?php echo ( is_page( 'contact-us' ) || is_page( 'contact' ) ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>" class="di-nav-btn">Contact Us</a>
					</li>
				</ul>
			</nav>

			<!-- Mobile Hamburger Toggle -->
			<button class="di-nav-toggle" id="diNavToggle" type="button" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="diMobileNav">
				<span class="di-hamburger-box">
					<span class="di-hamburger-line"></span>
					<span class="di-hamburger-line"></span>
					<span class="di-hamburger-line"></span>
				</span>
			</button>
		</div>

		<!-- Mobile Navigation Drawer -->
		<div class="di-mobile-nav" id="diMobileNav" aria-hidden="true">
			<div class="di-mobile-nav__backdrop" id="diNavBackdrop"></div>
			<div class="di-mobile-nav__drawer">
				<div class="di-mobile-nav__top">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="di-mobile-brand" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> - Home">
						<img src="<?php echo esc_url( di_asset( 'logo_daffodil.jpg' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="di-mobile-logo" width="180" height="50" />
					</a>
					<button class="di-mobile-close" id="diNavClose" type="button" aria-label="Close navigation menu">
						<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
					</button>
				</div>
				<ul class="di-mobile-menu">
					<li class="di-mobile-item <?php echo is_front_page() ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="di-mobile-link">
							<span>Home</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
						</a>
					</li>
					<li class="di-mobile-item <?php echo is_page( 'about-us' ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/about-us/' ) ); ?>" class="di-mobile-link">
							<span>About Us</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
						</a>
					</li>
					<li class="di-mobile-item <?php echo ( is_page( 'products' ) || is_page( array( 'facial-tissues', 'paper-napkins', 'toilet-rolls', 'paper-towels', 'kitchen-range', 'hospital-range' ) ) ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>" class="di-mobile-link">
							<span>Products</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
						</a>
					</li>
					<li class="di-mobile-item <?php echo is_page( 'become-a-distributor' ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/become-a-distributor/' ) ); ?>" class="di-mobile-link">
							<span>Become a Distributor</span>
							<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
						</a>
					</li>
					<li class="di-mobile-item di-mobile-item--cta <?php echo ( is_page( 'contact-us' ) || is_page( 'contact' ) ) ? 'is-active' : ''; ?>">
						<a href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>" class="di-mobile-btn">
							<span>Contact Us</span>
						</a>
					</li>
				</ul>
				<div class="di-mobile-nav__contact">
					<p class="di-mobile-nav__contact-title">Direct Contact</p>
					<a href="tel:+919696289696" class="di-mobile-contact-row">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.67 2.18 2 2 0 012.65.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l.91-.91a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.32v1.6z"/></svg>
						<span>+91 9696289696</span>
					</a>
					<a href="mailto:Agamkals@daffodilindia.net" class="di-mobile-contact-row">
						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						<span>Agamkals@daffodilindia.net</span>
					</a>
				</div>
			</div>
		</div>
	</header>

	<?php
	if ( function_exists( 'astra_header_after' ) ) {
		astra_header_after();
	}
	if ( function_exists( 'astra_content_before' ) ) {
		astra_content_before();
	}
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php
		if ( function_exists( 'astra_content_top' ) ) {
			astra_content_top();
		}
		?>
