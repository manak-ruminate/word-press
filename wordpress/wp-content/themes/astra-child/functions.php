<?php
/**
 * Astra Child — Daffodil-style functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'DI_CHILD_URI', get_stylesheet_directory_uri() );
define( 'DI_CHILD_DIR', get_stylesheet_directory() );

/* ---- Enqueue stylesheet ---- */
add_action(
	'wp_enqueue_scripts',
	function () {
		wp_enqueue_style(
			'astra-child-theme',
			get_stylesheet_uri(),
			array( 'astra-theme-css' ),
			'4.0.0'
		);
	},
	15
);

/* ---- Footer JS: slider + scroll-reveal ---- */
add_action(
	'wp_footer',
	function () {
		?>
		<script>
		document.addEventListener('DOMContentLoaded', function () {

			/* ---- Scroll-reveal ---- */
			var revealNodes = document.querySelectorAll('.di-reveal');
			if (revealNodes.length) {
				if (!('IntersectionObserver' in window)) {
					revealNodes.forEach(function(el){ el.classList.add('is-in'); });
				} else {
					var io = new IntersectionObserver(function(entries){
						entries.forEach(function(entry){
							if (entry.isIntersecting) {
								entry.target.classList.add('is-in');
								io.unobserve(entry.target);
							}
						});
					}, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
					revealNodes.forEach(function(el){ io.observe(el); });
				}
			}

			/* ---- Hero Slider ---- */
			var slider = document.getElementById('diHeroSlider');
			if (!slider) return;

			var slides  = slider.querySelectorAll('.di-slide');
			var dots    = slider.querySelectorAll('.di-sdot');
			var prevBtn = slider.querySelector('.di-sarrow--prev');
			var nextBtn = slider.querySelector('.di-sarrow--next');
			var total   = slides.length;
			var current = 0;
			var timer;

			/* Make first slide establish layout height */
			slides[0].style.position = 'relative';

			function goTo(n) {
				/* Reset previous active */
				slides[current].style.position = 'absolute';
				slides[current].classList.remove('is-active');
				if (dots[current]) {
					dots[current].classList.remove('is-active');
				}

				current = (n + total) % total;

				/* Activate new slide */
				slides[current].style.position = 'relative';
				slides[current].classList.add('is-active');
				if (dots[current]) {
					dots[current].classList.add('is-active');
				}
			}

			function startAuto() {
				clearInterval(timer);
				timer = setInterval(function(){ goTo(current + 1); }, 5000);
			}
			function stopAuto() { clearInterval(timer); }

			if (prevBtn) prevBtn.addEventListener('click', function(){ goTo(current - 1); startAuto(); });
			if (nextBtn) nextBtn.addEventListener('click', function(){ goTo(current + 1); startAuto(); });

			dots.forEach(function(dot){
				dot.addEventListener('click', function(){
					goTo(parseInt(dot.dataset.dot, 10));
					startAuto();
				});
			});

			/* Keyboard */
			slider.addEventListener('keydown', function(e){
				if (e.key === 'ArrowLeft')  { goTo(current - 1); startAuto(); }
				if (e.key === 'ArrowRight') { goTo(current + 1); startAuto(); }
			});

			/* Touch swipe */
			var touchX = 0;
			slider.addEventListener('touchstart', function(e){ touchX = e.changedTouches[0].clientX; }, { passive: true });
			slider.addEventListener('touchend', function(e){
				var dx = e.changedTouches[0].clientX - touchX;
				if (Math.abs(dx) > 50) { goTo(dx < 0 ? current + 1 : current - 1); startAuto(); }
			}, { passive: true });

			/* Pause on hover */
			slider.addEventListener('mouseenter', stopAuto);
			slider.addEventListener('mouseleave', startAuto);

			startAuto();
		});

		/* ---- Professional Navbar Toggle ---- */
		document.addEventListener('DOMContentLoaded', function () {
			var navToggle = document.getElementById('diNavToggle');
			var mobileNav = document.getElementById('diMobileNav');
			var navClose  = document.getElementById('diNavClose');
			var backdrop  = document.getElementById('diNavBackdrop');
			var header    = document.getElementById('masthead');

			function openMobileNav() {
				if (!mobileNav) return;
				mobileNav.classList.add('is-open');
				if (navToggle) {
					navToggle.classList.add('is-active');
					navToggle.setAttribute('aria-expanded', 'true');
				}
				mobileNav.setAttribute('aria-hidden', 'false');
				document.body.classList.add('di-nav-locked');
			}

			function closeMobileNav() {
				if (!mobileNav) return;
				mobileNav.classList.remove('is-open');
				if (navToggle) {
					navToggle.classList.remove('is-active');
					navToggle.setAttribute('aria-expanded', 'false');
				}
				mobileNav.setAttribute('aria-hidden', 'true');
				document.body.classList.remove('di-nav-locked');
			}

			if (navToggle) {
				navToggle.addEventListener('click', function (e) {
					e.stopPropagation();
					if (mobileNav && mobileNav.classList.contains('is-open')) {
						closeMobileNav();
					} else {
						openMobileNav();
					}
				});
			}

			if (navClose) navClose.addEventListener('click', closeMobileNav);
			if (backdrop) backdrop.addEventListener('click', closeMobileNav);

			document.addEventListener('keydown', function (e) {
				if (e.key === 'Escape' && mobileNav && mobileNav.classList.contains('is-open')) {
					closeMobileNav();
				}
			});

			if (mobileNav) {
				var navLinks = mobileNav.querySelectorAll('.di-mobile-link, .di-mobile-btn, .di-mobile-sub-menu a');
				navLinks.forEach(function (link) {
					link.addEventListener('click', closeMobileNav);
				});

				var prodToggle = document.getElementById('diMobileProdToggle');
				var prodMenu   = document.getElementById('diMobileProdMenu');
				if (prodToggle && prodMenu) {
					prodToggle.addEventListener('click', function (e) {
						e.preventDefault();
						e.stopPropagation();
						prodMenu.classList.toggle('is-open');
						prodToggle.classList.toggle('is-active');
					});
				}
			}

			/* Header scroll shadow */
			if (header) {
				var checkScroll = function () {
					if (window.scrollY > 15) {
						header.classList.add('is-scrolled');
					} else {
						header.classList.remove('is-scrolled');
					}
				};
				checkScroll();
				window.addEventListener('scroll', checkScroll, { passive: true });
			}
		});
		</script>
		<?php
	},
	40
);

/* ---- Asset helper ---- */
function di_asset( $file ) {
	return DI_CHILD_URI . '/assets/images/' . ltrim( $file, '/' );
}

/* ---- Logo fallback ---- */
add_filter(
	'get_custom_logo',
	function ( $html ) {
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
	'astra_logo',
	function ( $html, $display_site_title = true, $display_site_tagline = true ) {
		$url = di_asset( 'logo_daffodil.jpg' );
		return sprintf(
			'<span class="site-logo-img"><a href="%1$s" class="custom-logo-link" rel="home"><img src="%2$s" class="custom-logo" alt="%3$s" style="max-height:64px;width:auto;" /></a></span>',
			esc_url( home_url( '/' ) ),
			esc_url( $url ),
			esc_attr( get_bloginfo( 'name' ) )
		);
	},
	20,
	3
);

add_filter( 'astra_has_custom_logo', function(){ return true; } );

/* ============================================================
   TOP CONTACT BAR  (before header)
   ============================================================ */
add_action(
	'astra_header_before',
	function () {
		?>
		<div class="di-topbar">
			<div class="di-topbar__inner">
				<div class="di-topbar__left">
					<a href="mailto:Agamkals@daffodilindia.net">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:5px"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						Agamkals@daffodilindia.net
					</a>
					<a href="tel:+919696289696">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:5px"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.67 2.18 2 2 0 012.65.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l.91-.91a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.32v1.6z"/></svg>
						+91 9696289696
					</a>
					<span>
						<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align:middle;margin-right:5px"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
						Y-18, Okhla Industrial Area, Phase-2, New Delhi
					</span>
				</div>
				<div class="di-topbar__right di-topbar__social">
					<a href="https://www.linkedin.com/in/agam-kals-0a6887175" target="_blank" rel="noopener" aria-label="LinkedIn">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19.7 3H4.3C3.582 3 3 3.582 3 4.3v15.4C3 20.418 3.582 21 4.3 21h15.4c.718 0 1.3-.582 1.3-1.3V4.3C21 3.582 20.418 3 19.7 3zM8.339 18.338H5.667v-8.59h2.672v8.59zM7.004 8.574a1.548 1.548 0 11.003-3.096 1.548 1.548 0 01-.003 3.096zm11.335 9.764h-2.669v-4.177c0-.996-.017-2.278-1.387-2.278-1.389 0-1.601 1.086-1.601 2.206v4.249h-2.667v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.779 3.203 4.092v4.711z"/></svg>
					</a>
					<a href="https://wa.me/919696289696" target="_blank" rel="noopener" aria-label="WhatsApp">
						<svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
					</a>
				</div>
			</div>
		</div>
		<?php
	}
);

/* ============================================================
   CUSTOM FOOTER
   ============================================================ */
add_action(
	'astra_footer_before',
	function () {
		$u = static function( $slug ) {
			return home_url( '/index.php/' . $slug . '/' );
		};
		?>
		<div class="di-footer-wrap">
			<div class="di-footer-main">

				<!-- Col 1: Brand -->
				<div>
					<h4>Ruminate Industries</h4>
					<p>Leading manufacturer of hygiene tissue paper products since 1985. Serving 500+ clients across India and 10+ countries worldwide.</p>
					<p style="margin-top:14px">
						<a href="https://www.linkedin.com/in/agam-kals-0a6887175" target="_blank" rel="noopener" style="color:rgba(255,255,255,.7);font-size:13px;">LinkedIn &rarr;</a>
					</p>
				</div>

				<!-- Col 2: Quick Links -->
				<div>
					<h4>Quick Links</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
						<li><a href="<?php echo esc_url( $u( 'about-us' ) ); ?>">About Us</a></li>
						<li><a href="<?php echo esc_url( $u( 'products' ) ); ?>">Products</a></li>
						<li><a href="<?php echo esc_url( $u( 'become-a-distributor' ) ); ?>">Become a Distributor</a></li>
						<li><a href="<?php echo esc_url( $u( 'contact-us' ) ); ?>">Contact Us</a></li>
					</ul>
				</div>

				<!-- Col 3: Products -->
				<div>
					<h4>Our Products</h4>
					<ul>
						<li><a href="<?php echo esc_url( $u( 'facial-tissues' ) ); ?>">Facial Tissues</a></li>
						<li><a href="<?php echo esc_url( $u( 'paper-napkins' ) ); ?>">Paper Napkins</a></li>
						<li><a href="<?php echo esc_url( $u( 'toilet-rolls' ) ); ?>">Toilet Rolls</a></li>
						<li><a href="<?php echo esc_url( $u( 'paper-towels' ) ); ?>">Paper Towels</a></li>
						<li><a href="<?php echo esc_url( $u( 'kitchen-range' ) ); ?>">Kitchen Range</a></li>
						<li><a href="<?php echo esc_url( $u( 'hospital-range' ) ); ?>">Hospital Range</a></li>
					</ul>
				</div>

				<!-- Col 4: Contact -->
				<div class="di-footer-address">
					<h4>Contact Us</h4>
					<p>&#128205; Y-18, Okhla Industrial Area, Phase-2, New Delhi – 110020</p>
					<p>&#128205; 160-161 EcoTech-01, Greater Noida, UP – 201310</p>
					<p>&#128222; <a href="tel:+919696289696">+91 9696289696</a></p>
					<p>&#9993; <a href="mailto:Agamkals@daffodilindia.net">Agamkals@daffodilindia.net</a></p>
				</div>

			</div>
			<div class="di-footer-bottom">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Ruminate Industries. All rights reserved.
			</div>
		</div>
		<?php
	}
);
