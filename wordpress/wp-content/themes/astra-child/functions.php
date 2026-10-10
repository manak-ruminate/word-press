<?php
/**
 * Astra Child - Udaipur
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DI_CHILD_URI', get_stylesheet_directory_uri() );
define( 'DI_CHILD_DIR', get_stylesheet_directory() );

add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'astra-child-theme',
			get_stylesheet_uri(),
			array( 'astra-theme-css' ),
			'3.0.0'
		);

	},
	15
);

add_action(
	'wp_footer',
	function () {
		?>
		<script>
		document.addEventListener('DOMContentLoaded', function () {
			var nodes = document.querySelectorAll('.di-reveal');
			if (!nodes.length) return;
			if (!('IntersectionObserver' in window)) {
				nodes.forEach(function (el) { el.classList.add('is-in'); });
				return;
			}
			var io = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-in');
						io.unobserve(entry.target);
					}
				});
			}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
			nodes.forEach(function (el) { io.observe(el); });
		});
		</script>
		<?php
	},
	40
);

/**
 * Asset helper.
 */
function di_asset( $file ) {
	return DI_CHILD_URI . '/assets/images/' . ltrim( $file, '/' );
}

/**
 * Use theme logo when media upload is not writable.
 */
add_filter(
	'get_custom_logo',
	function ( $html ) {
		if ( ! empty( $html ) ) {
			return $html;
		}
		$url = di_asset( 'logo_daffodil.jpg' );
		return sprintf(
			'<a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" class="custom-logo" alt="%3$s" style="max-height:64px;width:auto;" /></a>',
			esc_url( home_url( '/' ) ),
			esc_url( $url ),
			esc_attr( get_bloginfo( 'name' ) )
		);
	}
);

add_filter(
	'astra_has_custom_logo',
	function () {
		return true;
	}
);

/**
 * Top contact bar.
 */
add_action(
	'astra_header_before',
	function () {
		?>
		<div class="di-topbar">
			<div class="di-topbar__inner">
				<a href="mailto:agamjotkals@yahoo.com">info@word.com</a>
				<a href="tel:+919696289696">+91 1234567890</a>
				<span>Y-18, OKHLA INDUSTRIAL AREA, PHASE-2, NEW DELHI -110020</span>
			</div>
		</div>
		<?php
	}
);

/**
 * Custom site footer.
 */
add_action(
	'astra_footer_before',
	function () {
		$u = static function ( $slug ) {
			return home_url( '/index.php/' . $slug . '/' );
		};
		?>
		<div class="di-footer-extra">
			<div class="di-footer-grid">
				<div>
					<h4>Udaipur</h4>
					<p>Tissue & hygiene for brands, facilities, and everyday living.</p>
					<p><a href="mailto:Agamkals@daffodilindia.net">Agamkals@word.net</a></p>
					<p><a href="tel:+919696289696">+91 1234567890</a></p>
				</div>
				<div>
					<h4>Explore</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( $u( 'about-us' ) ); ?>">About</a></li>
						<li><a href="<?php echo esc_url( $u( 'products' ) ); ?>">Products</a></li>
						<li><a href="<?php echo esc_url( $u( 'become-a-distributor' ) ); ?>">Partner</a></li>
						<li><a href="<?php echo esc_url( $u( 'contact-us' ) ); ?>">Contact</a></li>
					</ul>
				</div>
				<div>
					<h4>Ranges</h4>
					<ul>
						<li><a href="<?php echo esc_url( $u( 'facial-tissues' ) ); ?>">Facial Tissues</a></li>
						<li><a href="<?php echo esc_url( $u( 'paper-napkins' ) ); ?>">Paper Napkins</a></li>
						<li><a href="<?php echo esc_url( $u( 'toilet-rolls' ) ); ?>">Toilet Rolls</a></li>
						<li><a href="<?php echo esc_url( $u( 'paper-towels' ) ); ?>">Paper Towels</a></li>
						<li><a href="<?php echo esc_url( $u( 'kitchen-range' ) ); ?>">Kitchen Range</a></li>
						<li><a href="<?php echo esc_url( $u( 'hospital-range' ) ); ?>">Hospital Range</a></li>
					</ul>
				</div>
			</div>
			<div class="di-copy">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Ruminate Industries. All rights reserved.</div>
		</div>
		<?php
	}
);
