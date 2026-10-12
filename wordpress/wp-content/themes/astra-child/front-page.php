<?php
/**
 * Front page — Daffodil-style layout for Ruminate Industries
 *
 * @package Astra_Child
 */

get_header();

$img = static function ( $file ) {
	return esc_url( di_asset( $file ) );
};
?>

<div class="di-page">

	<!-- ===== HERO SLIDER ===== -->
	<section class="di-hero-slider" id="diHeroSlider" aria-label="Hero Slider">
		<div class="di-slider-wrap">
			<div class="di-slides">
				<div class="di-slide is-active">
					<img src="<?php echo $img( 'Add-a-subheading-9-2000x800.png' ); ?>" alt="Ruminate Industries" />
				</div>
				<div class="di-slide">
					<img src="<?php echo $img( '4-2000x800.png' ); ?>" alt="Quality Products" />
				</div>
				<div class="di-slide">
					<img src="<?php echo $img( '2-2000x800.png' ); ?>" alt="Trusted Worldwide" />
				</div>
				<div class="di-slide">
					<img src="<?php echo $img( '5-2000x800.png' ); ?>" alt="Hygiene Excellence" />
				</div>
				<div class="di-slide">
					<img src="<?php echo $img( 'Add-a-subheading-3-2000x800.png' ); ?>" alt="Manufacturing Quality" />
				</div>
			</div>
			<button class="di-sarrow di-sarrow--prev" aria-label="Previous slide">&#10094;</button>
			<button class="di-sarrow di-sarrow--next" aria-label="Next slide">&#10095;</button>
			<div class="di-sdots" role="tablist">
				<button class="di-sdot is-active" data-dot="0" aria-label="Slide 1"></button>
				<button class="di-sdot" data-dot="1" aria-label="Slide 2"></button>
				<button class="di-sdot" data-dot="2" aria-label="Slide 3"></button>
				<button class="di-sdot" data-dot="3" aria-label="Slide 4"></button>
				<button class="di-sdot" data-dot="4" aria-label="Slide 5"></button>
			</div>
		</div>
	</section>

	<!-- ===== ABOUT SECTION ===== -->
	<section class="di-section di-about-section">
		<div class="di-container">
			<h2 class="di-orange-heading">Who We Are</h2>
			<p class="di-body-text">Established in 1985, Ruminate Industries is a leading manufacturer of hygiene tissue paper products. Boasting a modern 30,000 sq. ft. manufacturing facility, we are renowned for our high capacity and production flexibility — making us one of the leading tissue manufacturers in India.</p>
			<p class="di-body-text">Manufacturing the complete range of tissue paper products for both the retail and institutional segments, Ruminate Industries is proud to be the preferred choice for private label manufacturing. We provide additional value to our clients through our extensive range of hand towels, aluminum foil and cling wrap.</p>
			<div class="di-about-actions">
				<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/about-us/' ) ); ?>">Know More</a>
				<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Request a Quote</a>
			</div>
		</div>
	</section>

	<!-- ===== STATS BAR ===== -->
	<section class="di-stats-bar">
		<div class="di-container">
			<div class="di-stats-grid">
				<div class="di-stat-item">
					<strong>1985</strong>
					<span>Year Established</span>
				</div>
				<div class="di-stat-item">
					<strong>500+</strong>
					<span>Loyal Customers</span>
				</div>
				<div class="di-stat-item">
					<strong>5K</strong>
					<span>Tons Converted Annually</span>
				</div>
				<div class="di-stat-item">
					<strong>10+</strong>
					<span>Countries Served</span>
				</div>
				<div class="di-stat-item">
					<strong>125K+</strong>
					<span>Dispensers Installed</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCTS ===== -->
	<section class="di-section di-products-section">
		<div class="di-container">
			<h2 class="di-orange-heading">Our Products</h2>
			<p class="di-section-sub">Comprehensive hygiene solutions for retail, institutional &amp; private label requirements</p>
			<div class="di-products-grid">
				<?php
				$products = array(
					array( 'Facial Tissues', 'facial-tissues', 'DSC_5745-scaled.jpg', 'Everyday softness for desks and guest amenities.' ),
					array( 'Paper Napkins', 'paper-napkins', 'DSC_5786-1024x1024-1.jpg', 'From casual dining to polished table settings.' ),
					array( 'Toilet Rolls', 'toilet-rolls', 'DSC_5809-1024x1024-1.jpg', 'Home comfort and high-traffic institutional packs.' ),
					array( 'Paper Towels', 'paper-towels', 'DSC_5828-1024x1024-1.jpg', 'Absorbency that keeps washrooms running clean.' ),
					array( 'Kitchen Range', 'kitchen-range', 'DSC_5784-1024x1024-1.jpg', 'Wraps and foils that support busy kitchens.' ),
					array( 'Hospital Range', 'hospital-range', 'healthcare-scaled-1.jpg', 'Hygiene-focused options for care environments.' ),
				);
				foreach ( $products as $p ) :
					?>
					<a class="di-product-card" href="<?php echo esc_url( home_url( '/index.php/' . $p[1] . '/' ) ); ?>">
						<div class="di-product-img">
							<img src="<?php echo $img( $p[2] ); ?>" alt="<?php echo esc_attr( $p[0] ); ?>" loading="lazy" />
						</div>
						<div class="di-product-info">
							<h3><?php echo esc_html( $p[0] ); ?></h3>
							<p><?php echo esc_html( $p[3] ); ?></p>
							<span class="di-view-more">View Details &#8594;</span>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
			<div class="di-center-btn">
				<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>">View All Products</a>
			</div>
		</div>
	</section>

	<!-- ===== INDUSTRIES WE SERVE ===== -->
	<section class="di-section di-industries-section">
		<div class="di-container">
			<h2 class="di-orange-heading">Industries We Serve</h2>
			<p class="di-section-sub">Delivering hygiene solutions across every sector</p>
			<div class="di-industries-grid">
				<?php
				$markets = array(
					array( 'Workplaces', 'corporate.jpg', 'Offices that put hygiene on the agenda.' ),
					array( 'Hospitality', 'horeca_1.jpg', 'Hotels and dining where first impressions matter.' ),
					array( 'Healthcare', 'healthcare-scaled-1.jpg', 'Care settings that demand consistency.' ),
					array( 'Travel & Aviation', 'aviation.jpg', 'Amenity experiences that feel considered.' ),
					array( 'Retail & Commerce', 'retail-scaled-1.jpg', 'Shelves and digital carts that need reliable SKUs.' ),
					array( 'Wholesale', 'Ecommerce-scaled.jpg', 'Volume partners who move product fast.' ),
				);
				foreach ( $markets as $m ) :
					?>
					<div class="di-industry-card">
						<div class="di-industry-img">
							<img src="<?php echo $img( $m[1] ); ?>" alt="<?php echo esc_attr( $m[0] ); ?>" loading="lazy" />
							<div class="di-industry-overlay"></div>
						</div>
						<div class="di-industry-body">
							<h3><?php echo esc_html( $m[0] ); ?></h3>
							<p><?php echo esc_html( $m[2] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- ===== WHY CHOOSE RUMINATE ===== -->
	<section class="di-section di-why-section">
		<div class="di-container">
			<h2 class="di-orange-heading">Why Choose Ruminate</h2>
			<p class="di-section-sub">40 years of excellence in hygiene manufacturing</p>
			<div class="di-why-grid">
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<h3>Premium Quality</h3>
					<p>Careful fibre selection and finishing for softness without sacrificing performance.</p>
				</div>
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
					</div>
					<h3>Private Label Ready</h3>
					<p>Flexible SKUs and custom packaging so your brand stays front and centre.</p>
				</div>
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 19V5h4v14H4zm6 0V9h4v10h-4zm6 0v-7h4v7h-4z"/></svg>
					</div>
					<h3>High Capacity Plant</h3>
					<p>Scale with demand — steady output for retail and institutional orders alike.</p>
				</div>
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</div>
					<h3>On-Time Delivery</h3>
					<p>Clear timelines and dependable logistics across India and export markets.</p>
				</div>
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/></svg>
					</div>
					<h3>Eco-Friendly</h3>
					<p>FSC-certified raw materials and recyclable packaging for a sustainable future.</p>
				</div>
				<div class="di-why-item">
					<div class="di-why-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
					</div>
					<h3>Global Reach</h3>
					<p>Serving 10+ countries with consistent quality and reliable supply chains.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== BECOME A DISTRIBUTOR ===== -->
	<section class="di-distributor-cta">
		<div class="di-container">
			<div class="di-cta-content">
				<h2>Become a Distributor</h2>
				<p>Join our growing network of 500+ partners across India and internationally. We offer competitive margins, marketing support, and reliable supply.</p>
				<a class="di-btn-white" href="<?php echo esc_url( home_url( '/index.php/become-a-distributor/' ) ); ?>">Partner with Us &#8594;</a>
			</div>
		</div>
	</section>

	<!-- ===== ABOUT GALLERY + TEXT ===== -->
	<section class="di-section di-facility-section">
		<div class="di-container">
			<div class="di-facility-grid">
				<div class="di-facility-gallery">
					<div class="di-facility-main">
						<img src="<?php echo $img( 'DSC_5830-scaled.jpg' ); ?>" alt="Production Floor" loading="lazy" />
					</div>
					<div class="di-facility-thumbs">
						<img src="<?php echo $img( 'DSC_5745-scaled.jpg' ); ?>" alt="Finished Products" loading="lazy" />
						<img src="<?php echo $img( 'professional-scaled-1.jpg' ); ?>" alt="Our Team" loading="lazy" />
					</div>
				</div>
				<div class="di-facility-text">
					<h2 class="di-orange-heading">Our Facility</h2>
					<p class="di-body-text">Our state-of-the-art 30,000 sq. ft. manufacturing facility in Greater Noida is equipped with the latest machinery to produce high-quality tissue and hygiene products at scale.</p>
					<ul class="di-facility-list">
						<li>&#10003; FSC-certified raw materials</li>
						<li>&#10003; Automated production lines</li>
						<li>&#10003; Strict quality control processes</li>
						<li>&#10003; Eco-friendly & recyclable packaging</li>
						<li>&#10003; ISO-compliant manufacturing</li>
					</ul>
					<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/about-us/' ) ); ?>">Learn More</a>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== CONTACT ===== -->
	<section class="di-section di-contact-section" id="contact">
		<div class="di-container">
			<h2 class="di-orange-heading" style="text-align:center;">Get In Touch</h2>
			<p class="di-section-sub" style="text-align:center;">We'd love to hear from you</p>
			<div class="di-contact-grid">
				<div class="di-contact-info">
					<div class="di-contact-item">
						<div class="di-contact-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<strong>Corporate Office</strong>
							<p>Y-18, Okhla Industrial Area, Phase-2,<br>New Delhi – 110020</p>
						</div>
					</div>
					<div class="di-contact-item">
						<div class="di-contact-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
						</div>
						<div>
							<strong>Works / Factory</strong>
							<p>160-161 EcoTech-01 Extn, Greater Noida,<br>YEIDA, G.B. Nagar, UP – 201310</p>
						</div>
					</div>
					<div class="di-contact-item">
						<div class="di-contact-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.67 2.18 2 2 0 012.65.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l.91-.91a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.32v1.6z"/></svg>
						</div>
						<div>
							<strong>Phone</strong>
							<p><a href="tel:+919696289696">+91 9696289696</a></p>
						</div>
					</div>
					<div class="di-contact-item">
						<div class="di-contact-icon">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
						</div>
						<div>
							<strong>Email</strong>
							<p><a href="mailto:Agamkals@daffodilindia.net">Agamkals@daffodilindia.net</a></p>
						</div>
					</div>
					<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Send an Enquiry &#8594;</a>
				</div>
				<div class="di-contact-map">
					<iframe title="Map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
						src="https://maps.google.com/maps?q=Y-18%20Okhla%20Industrial%20Area%20phase-2%20New%20Delhi&amp;output=embed">
					</iframe>
				</div>
			</div>
		</div>
	</section>

</div><!-- /.di-page -->

<?php get_footer(); ?>
