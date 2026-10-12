<?php
/**
 * Template Name: About Us Page
 *
 * Full-featured About Us page template for Ruminate Industries (Daffodil India)
 *
 * @package Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$img = static function ( $file ) {
	return esc_url( di_asset( $file ) );
};
?>

<div class="di-page di-about-page">

	<!-- ===== ABOUT HERO BANNER ===== -->
	<section class="di-about-hero">
		<div class="di-container">
			<div class="di-about-hero__content">
				<div class="di-breadcrumbs">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span class="di-bc-sep">/</span>
					<span class="di-bc-current">About Us</span>
				</div>
				<span class="di-hero-badge">ESTABLISHED 1985 &bull; 40 YEARS OF MANUFACTURING EXCELLENCE</span>
				<h1 class="di-about-hero__title">Pioneering Hygiene &amp; Tissue Manufacturing in India</h1>
				<p class="di-about-hero__desc">
					Crafting superior softness, strength, and sustainable hygiene solutions for homes, premier institutions, and private labels worldwide.
				</p>
				<div class="di-about-hero__tags">
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg> 30,000 Sq. Ft. Facility</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg> 500+ Loyal Clients</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg> 10+ Export Markets</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== ABOUT INTRO / STORY ===== -->
	<section class="di-section di-about-story">
		<div class="di-container">
			<div class="di-about-story__grid">
				
				<!-- Left Text Column -->
				<div class="di-about-story__text">
					<span class="di-section-tag">OUR HERITAGE &amp; EVOLUTION</span>
					<h2 class="di-about-heading">Four Decades of Trust, Capacity &amp; Continuous Innovation</h2>
					<p class="di-body-text">
						Established in <strong>1985</strong>, <strong>Ruminate Industries</strong> (Daffodil India) was founded with a clear purpose: to bridge the gap between premium global hygiene standards and dependable, scalable domestic manufacturing in India.
					</p>
					<p class="di-body-text">
						Over the past 40 years, our journey has been defined by uncompromising quality, continuous technological upgrades, and long-term partnerships. From our initial converting unit in New Delhi to our expansive modern <strong>30,000 sq. ft. converting plant in Greater Noida</strong>, we have earned our reputation as one of India's most trusted manufacturers of hygiene paper products.
					</p>
					<p class="di-body-text">
						Today, we convert over <strong>5,000 metric tons annually</strong>, catering to both the retail and away-from-home (AFH) institutional sectors. We are proud to be the chosen contract manufacturer and private-label partner for prominent hospitality brands, corporate campuses, healthcare institutions, and consumer retail chains across India and 10+ countries globally.
					</p>

					<!-- Feature Checklist -->
					<div class="di-about-check-grid">
						<div class="di-check-item">
							<span class="di-check-icon">&#10003;</span>
							<div>
								<strong>Automated Production Lines</strong>
								<p>Advanced slitting, embossing, and touch-free converting machinery.</p>
							</div>
						</div>
						<div class="di-check-item">
							<span class="di-check-icon">&#10003;</span>
							<div>
								<strong>FSC-Certified Fibre</strong>
								<p>Sustainably harvested virgin and recycled pulps adhering to global green standards.</p>
							</div>
						</div>
						<div class="di-check-item">
							<span class="di-check-icon">&#10003;</span>
							<div>
								<strong>Private Label Ready</strong>
								<p>End-to-end customization from paper GSM and roll diameters to branded retail cartons.</p>
							</div>
						</div>
						<div class="di-check-item">
							<span class="di-check-icon">&#10003;</span>
							<div>
								<strong>Strict Lab Testing</strong>
								<p>In-house quality assurance for tensile strength, microbiological hygiene, and rapid absorption.</p>
							</div>
						</div>
					</div>

					<!-- Story Actions -->
					<div class="di-about-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/products/' ) ); ?>">Explore Products &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Request Facility Tour</a>
					</div>
				</div>

				<!-- Right Visual Column -->
				<div class="di-about-story__media">
					<div class="di-media-stack">
						<div class="di-media-main">
							<img src="<?php echo $img( 'DSC_5830-scaled.jpg' ); ?>" alt="Ruminate Industries Production Floor" loading="lazy" />
							<div class="di-media-caption">State-of-the-Art Greater Noida Converting Facility</div>
						</div>
						<div class="di-media-badge">
							<strong>40+</strong>
							<span>Years of Leadership<br>1985 &ndash; 2026</span>
						</div>
						<div class="di-media-secondary">
							<img src="<?php echo $img( 'professional-scaled-1.jpg' ); ?>" alt="Team Quality Inspection" loading="lazy" />
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ===== KEY STATS BAR ===== -->
	<section class="di-about-metrics">
		<div class="di-container">
			<div class="di-metrics-grid">
				<div class="di-metric-box">
					<div class="di-metric-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
					</div>
					<strong>1985</strong>
					<span>Year Established</span>
					<p>40 years of continuous manufacturing excellence</p>
				</div>
				<div class="di-metric-box">
					<div class="di-metric-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
					</div>
					<strong>30,000</strong>
					<span>Sq. Ft. Facility</span>
					<p>Modern high-capacity plant in Greater Noida, UP</p>
				</div>
				<div class="di-metric-box">
					<div class="di-metric-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
					</div>
					<strong>5,000+</strong>
					<span>Tons Converted</span>
					<p>Consistent annual output for retail &amp; bulk orders</p>
				</div>
				<div class="di-metric-box">
					<div class="di-metric-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
					</div>
					<strong>500+</strong>
					<span>Loyal Clients</span>
					<p>Trusted by hotels, corporate parks, and healthcare</p>
				</div>
				<div class="di-metric-box">
					<div class="di-metric-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
					</div>
					<strong>10+</strong>
					<span>Countries Exported</span>
					<p>Supplying consistent hygiene to international markets</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== MISSION, VISION & VALUES ===== -->
	<section class="di-section di-mission-section">
		<div class="di-container">
			<div class="di-section-header">
				<span class="di-section-tag">GUIDING PRINCIPLES</span>
				<h2 class="di-about-heading">What Drives Ruminate Forward</h2>
				<p class="di-section-sub">A clear focus on consistent quality, responsive supply, and sustainable partnerships.</p>
			</div>
			<div class="di-triad-grid">
				
				<!-- Mission -->
				<div class="di-triad-card">
					<div class="di-triad-icon di-triad-icon--mission">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg>
					</div>
					<h3>Our Mission</h3>
					<p>
						To manufacture hygiene and tissue paper products of uncompromising quality, ensuring softness, strength, and hygienic safety for every consumer while delivering dependable supply chains for our institutional partners.
					</p>
					<ul class="di-card-list">
						<li>Superior grade raw materials</li>
						<li>Microbiological purity &amp; skin comfort</li>
						<li>Cost-effective high-volume supply</li>
					</ul>
				</div>

				<!-- Vision -->
				<div class="di-triad-card di-triad-card--featured">
					<div class="di-triad-icon di-triad-icon--vision">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
					</div>
					<h3>Our Vision</h3>
					<p>
						To stand as South Asia's foremost tissue converting powerhouse and preferred private label ally, setting new benchmarks in eco-friendly manufacturing, zero-waste processes, and hygiene innovation.
					</p>
					<ul class="di-card-list">
						<li>Leading private-label manufacturing</li>
						<li>Sustainable circular packaging models</li>
						<li>Global footprint across 25+ countries</li>
					</ul>
				</div>

				<!-- Values -->
				<div class="di-triad-card">
					<div class="di-triad-icon di-triad-icon--values">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
					</div>
					<h3>Core Values</h3>
					<p>
						Our operations are guided by trust, sustainability, precision engineering, and client-centric collaboration that makes specifying hygiene seamless and dependable.
					</p>
					<ul class="di-card-list">
						<li>FSC-certified pulp traceability</li>
						<li>Ethical business &amp; transparent delivery</li>
						<li>Dermatologically safe formulations</li>
					</ul>
				</div>

			</div>
		</div>
	</section>

	<!-- ===== FOUR PILLARS OF EXCELLENCE ===== -->
	<section class="di-section di-pillars-section">
		<div class="di-container">
			<div class="di-section-header">
				<span class="di-section-tag">CAPABILITIES &amp; ADVANTAGE</span>
				<h2 class="di-about-heading">Why Leading Brands Choose Us</h2>
				<p class="di-section-sub">Comprehensive manufacturing infrastructure designed for flexible, high-capacity execution.</p>
			</div>
			<div class="di-pillars-grid">

				<div class="di-pillar-card">
					<div class="di-pillar-number">01</div>
					<div class="di-pillar-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19V5h4v14H4zm6 0V9h4v10h-4zm6 0v-7h4v7h-4z"/></svg>
					</div>
					<h3>High-Capacity Converting</h3>
					<p>Our automated Greater Noida plant operates multi-deck rewinding, slitting, embossing, and automated folding lines capable of converting 5,000+ metric tons per year without quality variation.</p>
				</div>

				<div class="di-pillar-card">
					<div class="di-pillar-number">02</div>
					<div class="di-pillar-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg>
					</div>
					<h3>Private Label Expertise</h3>
					<p>We empower supermarket brands, hospitality chains, and distributor networks with end-to-end bespoke solutions: custom GSM, embossing logos, ply count, perforation, and retail packaging.</p>
				</div>

				<div class="di-pillar-card">
					<div class="di-pillar-number">03</div>
					<div class="di-pillar-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/></svg>
					</div>
					<h3>Sustainable Stewardship</h3>
					<p>All paper materials originate from FSC-certified responsibly harvested forests. We employ Elemental Chlorine Free (ECF) bleaching to ensure 100% biodegradable and recyclable products.</p>
				</div>

				<div class="di-pillar-card">
					<div class="di-pillar-number">04</div>
					<div class="di-pillar-icon">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
					</div>
					<h3>Reliable National Logistics</h3>
					<p>Strategic locations in New Delhi (Okhla) and Greater Noida (EcoTech-1) enable swift dispatch across North India and major shipping corridors for export containers.</p>
				</div>

			</div>
		</div>
	</section>

	<!-- ===== OUR JOURNEY / TIMELINE ===== -->
	<section class="di-section di-timeline-section">
		<div class="di-container">
			<div class="di-section-header">
				<span class="di-section-tag">MILESTONES &amp; GROWTH</span>
				<h2 class="di-about-heading">Our 40-Year Journey of Excellence</h2>
				<p class="di-section-sub">A legacy of continuous innovation, growing from a regional converting unit to a national manufacturing leader.</p>
			</div>

			<div class="di-timeline">
				<div class="di-timeline-item">
					<div class="di-timeline-year">1985</div>
					<div class="di-timeline-content">
						<h3>Foundation in New Delhi</h3>
						<p>Ruminate Industries opens its first tissue paper manufacturing facility in Okhla, New Delhi, focusing on premium dining napkins and toilet rolls.</p>
					</div>
				</div>

				<div class="di-timeline-item">
					<div class="di-timeline-year">1998</div>
					<div class="di-timeline-content">
						<h3>Institutional (AFH) Expansion</h3>
						<p>Introduced automated interfold towel converting and dispensers, becoming a key hygiene vendor for leading five-star hotels and multinational corporate offices.</p>
					</div>
				</div>

				<div class="di-timeline-item">
					<div class="di-timeline-year">2010</div>
					<div class="di-timeline-content">
						<h3>Private Label Pioneer</h3>
						<p>Established specialized white-label packaging lines for leading domestic FMCG brands and international modern trade retail chains.</p>
					</div>
				</div>

				<div class="di-timeline-item">
					<div class="di-timeline-year">2018</div>
					<div class="di-timeline-content">
						<h3>30,000 Sq. Ft. Mega Plant</h3>
						<p>Commissioned our state-of-the-art facility in Greater Noida (EcoTech-01), incorporating high-speed embossing, multifold towel lines, and touch-free shrink wrapping.</p>
					</div>
				</div>

				<div class="di-timeline-item">
					<div class="di-timeline-year">2026</div>
					<div class="di-timeline-content">
						<h3>Global Footprint &amp; Sustainability</h3>
						<p>Serving 500+ long-term partners, exporting to 10+ countries, with 125,000+ dispensers installed and a 100% FSC-certified green procurement standard.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== INDUSTRIES WE SERVE ===== -->
	<section class="di-section di-about-industries">
		<div class="di-container">
			<div class="di-section-header">
				<span class="di-section-tag">WHO WE SERVE</span>
				<h2 class="di-about-heading">Tailored Hygiene Across Every Sector</h2>
				<p class="di-section-sub">From luxury guest amenities to heavy-traffic industrial washrooms, we engineer products for real operational demands.</p>
			</div>

			<div class="di-about-ind-grid">
				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'horeca_1.jpg' ); ?>" alt="Hospitality & Hotels" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Hospitality &amp; Dining</h4>
						<p>Plush 2-ply dinner napkins, cocktail tissues, and guest amenities designed to leave a lasting first impression in fine dining and luxury hotels.</p>
					</div>
				</div>

				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'corporate.jpg' ); ?>" alt="Corporate & Workplaces" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Corporate &amp; IT Parks</h4>
						<p>Cost-efficient, high-capacity interfold towels, jumbo toilet rolls, and automatic dispensers that keep busy corporate facilities clean and compliant.</p>
					</div>
				</div>

				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'healthcare-scaled-1.jpg' ); ?>" alt="Healthcare & Hospitals" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Healthcare &amp; Clinics</h4>
						<p>Microbiologically tested, lint-free medical bed rolls, couch covers, and patient wipes meeting rigorous clinical hygiene standards.</p>
					</div>
				</div>

				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'aviation.jpg' ); ?>" alt="Aviation & Transit" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Travel &amp; Aviation</h4>
						<p>Soft, compact facial tissues, headrest covers, and custom-embossed amenity packs meeting international airline specifications.</p>
					</div>
				</div>

				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'retail-scaled-1.jpg' ); ?>" alt="Retail & E-Commerce" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Retail &amp; Supermarkets</h4>
						<p>Vibrant branded cartons, cube boxes, and pocket packs ready for retail shelves and high-velocity e-commerce logistics.</p>
					</div>
				</div>

				<div class="di-ind-box">
					<div class="di-ind-thumb">
						<img src="<?php echo $img( 'Ecommerce-scaled.jpg' ); ?>" alt="Wholesale & Volume" loading="lazy" />
					</div>
					<div class="di-ind-details">
						<h4>Wholesale &amp; Distribution</h4>
						<p>Container-load volumes, palletized master cartons, and dependable supply contracts for distributors across India and overseas.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== QUALITY STANDARDS & CERTIFICATIONS ===== -->
	<section class="di-section di-quality-standards">
		<div class="di-container">
			<div class="di-quality-card">
				<div class="di-quality-content">
					<span class="di-section-tag" style="color:var(--di-orange);">UNCOMPROMISING STANDARDS</span>
					<h2>Our Quality Assurance Commitment</h2>
					<p>
						Every roll, sheet, and carton leaving our factory undergoes multi-stage quality control. From raw pulp GSM testing to tensile tear resistance, optical brightness, and moisture retention analysis, we maintain zero tolerance for defects.
					</p>
					<div class="di-quality-badges">
						<div class="di-qbadge">
							<span class="di-qbadge-icon">&#10003;</span>
							<span>100% Virgin Wood Pulp</span>
						</div>
						<div class="di-qbadge">
							<span class="di-qbadge-icon">&#10003;</span>
							<span>FSC Certified Sourcing</span>
						</div>
						<div class="di-qbadge">
							<span class="di-qbadge-icon">&#10003;</span>
							<span>ECF Chlorine-Free</span>
						</div>
						<div class="di-qbadge">
							<span class="di-qbadge-icon">&#10003;</span>
							<span>Hypoallergenic &amp; Safe</span>
						</div>
						<div class="di-qbadge">
							<span class="di-qbadge-icon">&#10003;</span>
							<span>High Wet-Strength</span>
						</div>
					</div>
				</div>
				<div class="di-quality-aside">
					<div class="di-quote-box">
						<p class="di-quote-text">&ldquo;Hygiene is not an afterthought; it is an exact engineering science of touch, absorbency, and dependable supply.&rdquo;</p>
						<span class="di-quote-author">Management Team, Ruminate Industries</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== LEADERSHIP / CONTACT DETAILS ===== -->
	<section class="di-section di-about-contact-section">
		<div class="di-container">
			<div class="di-about-contact-card">
				<div class="di-about-contact-info">
					<span class="di-section-tag">GET IN TOUCH DIRECTLY</span>
					<h2>Partner With Ruminate Industries</h2>
					<p>Whether you require institutional supplies, contract manufacturing for your brand, or are seeking a lucrative distribution partnership, our team is ready to assist.</p>
					
					<div class="di-direct-contacts">
						<a href="tel:+919696289696" class="di-dcontact-item">
							<div class="di-dcontact-icon">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.8 19.79 19.79 0 01.67 2.18 2 2 0 012.65.18h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.91a16 16 0 006.18 6.18l.91-.91a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 15.32v1.6z"/></svg>
							</div>
							<div>
								<span>Call Director</span>
								<strong>+91 9696289696</strong>
							</div>
						</a>

						<a href="mailto:Agamkals@daffodilindia.net" class="di-dcontact-item">
							<div class="di-dcontact-icon">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
							</div>
							<div>
								<span>Email Enquiries</span>
								<strong>Agamkals@daffodilindia.net</strong>
							</div>
						</a>
					</div>
				</div>

				<div class="di-about-contact-cta">
					<div class="di-contact-cta-box">
						<h3>Looking for Private Label or Distribution?</h3>
						<p>We provide full white-label support, sample kits, and competitive wholesale pricing for qualified businesses.</p>
						<div class="di-cta-btn-group">
							<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>">Request Quotation &rarr;</a>
							<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/become-a-distributor/' ) ); ?>">Become a Distributor</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- /.di-page -->

<?php get_footer(); ?>
