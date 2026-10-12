<?php
/**
 * Template Name: Products Overview Page
 *
 * Full-featured Products page template for Ruminate Industries (Daffodil India)
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

<div class="di-page di-products-page">

	<!-- ===== PRODUCTS HERO BANNER ===== -->
	<section class="di-products-hero">
		<div class="di-container">
			<div class="di-products-hero__content">
				<div class="di-breadcrumbs">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span class="di-bc-sep">/</span>
					<span class="di-bc-current">Products</span>
				</div>
				<span class="di-hero-badge">COMPLETE HYGIENE PAPER &amp; TISSUE RANGE</span>
				<h1 class="di-products-hero__title">Engineered for Softness, Strength &amp; Scale</h1>
				<p class="di-products-hero__desc">
					Manufacturing a full spectrum of tissue paper solutions for retail consumers, premier away-from-home (AFH) washrooms, hospitality, and private-label partners.
				</p>
				<div class="di-products-hero__tags">
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg> 6 Specialized Product Lines</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M12 22s-8-4.5-8-11.8A8 8 0 0112 2a8 8 0 018 8.2c0 7.3-8 11.8-8 11.8z"/></svg> 100% Virgin &amp; Recycled Pulp</span>
					<span class="di-pill"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 12h6M9 15h4"/></svg> Private Label OEM Ready</span>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== QUICK JUMP FILTER BAR ===== -->
	<nav class="di-prod-filter-bar" aria-label="Product Categories Navigation">
		<div class="di-container">
			<div class="di-filter-pills">
				<a href="#facial-tissues" class="di-filter-pill is-active">Facial Tissues</a>
				<a href="#paper-napkins" class="di-filter-pill">Paper Napkins</a>
				<a href="#paper-towels" class="di-filter-pill">Paper Towels</a>
				<a href="#toilet-rolls" class="di-filter-pill">Toilet Rolls</a>
				<a href="#kitchen-range" class="di-filter-pill">Kitchen Range</a>
				<a href="#hospital-range" class="di-filter-pill">Hospital Range</a>
			</div>
		</div>
	</nav>

	<!-- ===== PRODUCT CATEGORY 1: FACIAL TISSUES ===== -->
	<section class="di-section di-cat-section" id="facial-tissues">
		<div class="di-container">
			<div class="di-cat-card">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'DSC_5745-scaled.jpg' ); ?>" alt="Facial Tissues" loading="lazy" />
						<span class="di-cat-badge">Retail &amp; Institutional</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 01</span>
					<h2 class="di-cat-title">Facial Tissues</h2>
					<p class="di-cat-desc">
						Engineered for delicate skin with soothing softness and superior tensile strength. Ideal for corporate workspaces, hotel room amenities, vanity counters, and retail supermarket shelves.
					</p>

					<!-- SKU Badges Grid -->
					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>FT-Gold</strong>
							<span>Luxury 2-Ply Box (100 / 200 pulls)</span>
						</div>
						<div class="di-sku-item">
							<strong>FT-Silky</strong>
							<span>Lotion-Infused Ultra Soft</span>
						</div>
						<div class="di-sku-item">
							<strong>FT-INST</strong>
							<span>Institutional Economy Bulk Packs</span>
						</div>
						<div class="di-sku-item">
							<strong>FT-Extra Soft</strong>
							<span>Everyday Family Care Flat Box</span>
						</div>
						<div class="di-sku-item">
							<strong>FT-IMP NEW</strong>
							<span>Export-Grade Premium Cube Box</span>
						</div>
						<div class="di-sku-item">
							<strong>FT-LARGE IMP</strong>
							<span>High-Capacity Executive Series</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Ply: 2-Ply / 3-Ply</span>
						<span class="di-spec-badge">GSM: 13.5 &ndash; 15.0</span>
						<span class="di-spec-badge">Pulp: 100% Virgin Wood Pulp</span>
						<span class="di-spec-badge">Packing: Flat / Cube / Poly</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Facial%20Tissues%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/facial-tissues/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCT CATEGORY 2: PAPER NAPKINS ===== -->
	<section class="di-section di-cat-section di-cat-section--alt" id="paper-napkins">
		<div class="di-container">
			<div class="di-cat-card di-cat-card--reverse">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'DSC_5786-1024x1024-1.jpg' ); ?>" alt="Paper Napkins" loading="lazy" />
						<span class="di-cat-badge">Dining &amp; Hospitality</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 02</span>
					<h2 class="di-cat-title">Paper Napkins</h2>
					<p class="di-cat-desc">
						From casual dining and fast-service cafes to polished 5-star hotel banquet settings. Available with custom multi-color flexographic logo printing, bespoke embossing borders, and eco-friendly brown kraft options.
					</p>

					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>PN DINNER</strong>
							<span>Large Format 40&times;40 cm / 33&times;33 cm 2-Ply</span>
						</div>
						<div class="di-sku-item">
							<strong>PN 30X30 2PLY</strong>
							<span>Everyday Table Napkins</span>
						</div>
						<div class="di-sku-item">
							<strong>PN VELVET</strong>
							<span>Cloth-Feel Plush Embossed Napkin</span>
						</div>
						<div class="di-sku-item">
							<strong>PN-PARTY PACK</strong>
							<span>High-Volume Party &amp; Catering Pack</span>
						</div>
						<div class="di-sku-item">
							<strong>PN-VALUE</strong>
							<span>Commercial QSR &amp; Fast Food Packs</span>
						</div>
						<div class="di-sku-item">
							<strong>PN-ECO</strong>
							<span>100% Recycled Brown Kraft Napkins</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Ply: 1-Ply / 2-Ply</span>
						<span class="di-spec-badge">Sizes: 30&times;30, 33&times;33, 40&times;40 cm</span>
						<span class="di-spec-badge">Print: Up to 4-Color Logo Flexo</span>
						<span class="di-spec-badge">Fold: 1/4 Fold, 1/8 Fold</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Paper%20Napkins%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/paper-napkins/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCT CATEGORY 3: PAPER TOWELS ===== -->
	<section class="di-section di-cat-section" id="paper-towels">
		<div class="di-container">
			<div class="di-cat-card">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'DSC_5828-1024x1024-1.jpg' ); ?>" alt="Paper Towels" loading="lazy" />
						<span class="di-cat-badge">Washrooms &amp; Facilities</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 03</span>
					<h2 class="di-cat-title">Paper Towels (Hand Hygiene)</h2>
					<p class="di-cat-desc">
						High wet-strength, fast-wicking hand towels engineered to dry hands in one pull, dramatically reducing waste in high-traffic airports, IT campuses, industrial complexes, and commercial restrooms.
					</p>

					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>MF-100</strong>
							<span>Multifold M-Fold Hand Towels (100 pulls)</span>
						</div>
						<div class="di-sku-item">
							<strong>MF-125</strong>
							<span>Interfold Hand Towels (125 pulls sleeve)</span>
						</div>
						<div class="di-sku-item">
							<strong>MF-150</strong>
							<span>Commercial High-Volume Multifold</span>
						</div>
						<div class="di-sku-item">
							<strong>HRT (Hard Roll)</strong>
							<span>Continuous Sensor Towel Rolls (150m&ndash;300m)</span>
						</div>
						<div class="di-sku-item">
							<strong>C-FOLD</strong>
							<span>Classic Commercial Folded Towels</span>
						</div>
						<div class="di-sku-item">
							<strong>Centre Feed</strong>
							<span>Heavy-Duty Wiping Roll Towels</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Ply: 1-Ply / 2-Ply</span>
						<span class="di-spec-badge">GSM: 38.0 &ndash; 42.0</span>
						<span class="di-spec-badge">Wet Strength: High Tensile Wicking</span>
						<span class="di-spec-badge">Dispensers: Universal Compatibility</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Paper%20Towels%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/paper-towels/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCT CATEGORY 4: TOILET ROLLS ===== -->
	<section class="di-section di-cat-section di-cat-section--alt" id="toilet-rolls">
		<div class="di-container">
			<div class="di-cat-card di-cat-card--reverse">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'DSC_5809-1024x1024-1.jpg' ); ?>" alt="Toilet Rolls" loading="lazy" />
						<span class="di-cat-badge">Septic Safe &amp; Flushable</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 04</span>
					<h2 class="di-cat-title">Toilet Rolls &amp; Jumbo Tissue</h2>
					<p class="di-cat-desc">
						Designed for plush residential touch and dependable high-capacity commercial reliability. Formulated for rapid water dispersion to guarantee zero pipe clogging and 100% septic-safe performance.
					</p>

					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>JRT (Jumbo Roll)</strong>
							<span>300m &ndash; 500m High-Traffic Rolls</span>
						</div>
						<div class="di-sku-item">
							<strong>TR-350P</strong>
							<span>Premium 2-Ply 350 Sheet Roll</span>
						</div>
						<div class="di-sku-item">
							<strong>TR-INST</strong>
							<span>Hygienic Paper-Wrapped Hotel Rolls</span>
						</div>
						<div class="di-sku-item">
							<strong>TR-4PACK / 6PACK</strong>
							<span>Retail Multi-Pack Bundles</span>
						</div>
						<div class="di-sku-item">
							<strong>TR-10+2</strong>
							<span>Family Value Mega Packs</span>
						</div>
						<div class="di-sku-item">
							<strong>TR-100 / TR-76</strong>
							<span>Standard Core Commercial Series</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Ply: 2-Ply / 3-Ply</span>
						<span class="di-spec-badge">Sheets: 100 &ndash; 350 pulls / roll</span>
						<span class="di-spec-badge">Dispersion: Rapid Flush Break-Down</span>
						<span class="di-spec-badge">Texture: Micro-Dot Embossed</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Toilet%20Rolls%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/toilet-rolls/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCT CATEGORY 5: KITCHEN RANGE ===== -->
	<section class="di-section di-cat-section" id="kitchen-range">
		<div class="di-container">
			<div class="di-cat-card">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'DSC_5784-1024x1024-1.jpg' ); ?>" alt="Kitchen Range" loading="lazy" />
						<span class="di-cat-badge">Food Grade &amp; Catering</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 05</span>
					<h2 class="di-cat-title">Kitchen Range (Towels, Foils &amp; Cling Wrap)</h2>
					<p class="di-cat-desc">
						Heavy-duty kitchen essentials supporting busy restaurants, catering units, and residential kitchens with food-grade safety, heat retention, and grease absorption.
					</p>

					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>KT-IMP</strong>
							<span>Ultra-Absorbent 2-Ply Kitchen Towels</span>
						</div>
						<div class="di-sku-item">
							<strong>KT-4PLY / KT-3P</strong>
							<span>Extra Strength Grease &amp; Spill Rolls</span>
						</div>
						<div class="di-sku-item">
							<strong>CF-100MTR</strong>
							<span>Food-Grade Cling Film with Slide Cutter</span>
						</div>
						<div class="di-sku-item">
							<strong>CF-IMP FOOD WRAP</strong>
							<span>Heavy Stretch Catering Cling Film</span>
						</div>
						<div class="di-sku-item">
							<strong>AF-1KG</strong>
							<span>Commercial Aluminium Foil (Catering Size)</span>
						</div>
						<div class="di-sku-item">
							<strong>AF-9MTR</strong>
							<span>Retail Kitchen Aluminium Foil Rolls</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Towels: 2-Ply &ndash; 4-Ply High Absorption</span>
						<span class="di-spec-badge">Foil: 11 &ndash; 18 Micron Food Grade</span>
						<span class="di-spec-badge">Wrap: Breathe-Easy High Cling Stretch</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Kitchen%20Range%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/kitchen-range/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRODUCT CATEGORY 6: HOSPITAL RANGE ===== -->
	<section class="di-section di-cat-section di-cat-section--alt" id="hospital-range">
		<div class="di-container">
			<div class="di-cat-card di-cat-card--reverse">
				<div class="di-cat-media">
					<div class="di-cat-img-box">
						<img src="<?php echo $img( 'healthcare-scaled-1.jpg' ); ?>" alt="Hospital Range" loading="lazy" />
						<span class="di-cat-badge">Clinical &amp; Healthcare</span>
					</div>
				</div>
				<div class="di-cat-content">
					<span class="di-section-tag">CATEGORY 06</span>
					<h2 class="di-cat-title">Hospital &amp; Healthcare Range</h2>
					<p class="di-cat-desc">
						Sterile and clinical-grade disposable paper supplies engineered for diagnostic clinics, operation theatres, patient recovery wards, and diagnostic labs demanding zero cross-contamination.
					</p>

					<div class="di-sku-list">
						<div class="di-sku-item">
							<strong>Medical Bed Rolls</strong>
							<span>Continuous Perforated Couch Paper</span>
						</div>
						<div class="di-sku-item">
							<strong>Examination Sheets</strong>
							<span>Hygienic Disposable Bed Covers</span>
						</div>
						<div class="di-sku-item">
							<strong>Patient Wipes</strong>
							<span>Lint-Free, Hypoallergenic Touch</span>
						</div>
						<div class="di-sku-item">
							<strong>Clinical Hand Towels</strong>
							<span>Microbiologically Tested M-Fold</span>
						</div>
						<div class="di-sku-item">
							<strong>Dental Bibs</strong>
							<span>High Wet-Strength Disposable Wipes</span>
						</div>
						<div class="di-sku-item">
							<strong>Sanitary Disposal Rolls</strong>
							<span>Sterilized Poly-Backed Bed Covers</span>
						</div>
					</div>

					<div class="di-specs-row">
						<span class="di-spec-badge">Standard: ISO &amp; Medical Grade</span>
						<span class="di-spec-badge">Safety: Hypoallergenic &amp; Lint-Free</span>
						<span class="di-spec-badge">Sterility: Non-Toxic &amp; Chlorine-Free</span>
					</div>

					<div class="di-cat-actions">
						<a class="di-btn-red" href="<?php echo esc_url( home_url( '/index.php/contact-us/?subject=Hospital%20Range%20Quotation' ) ); ?>">Request Quotation &rarr;</a>
						<a class="di-btn-outline" href="<?php echo esc_url( home_url( '/index.php/hospital-range/' ) ); ?>">View Range Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== PRIVATE LABEL & OEM CAPABILITIES ===== -->
	<section class="di-section di-private-label-section">
		<div class="di-container">
			<div class="di-plabel-box">
				<div class="di-plabel-content">
					<span class="di-section-tag" style="color:var(--di-orange);">CONTRACT MANUFACTURING</span>
					<h2>Looking for Private Label or Custom OEM Manufacturing?</h2>
					<p>
						Ruminate Industries is the preferred contract manufacturing partner for national retail chains, FMCG labels, and export distributors. We provide complete customization from tissue GSM to branded packaging.
					</p>
					<div class="di-plabel-features">
						<div class="di-plabel-feature">
							<span class="di-plabel-icon">&#10003;</span>
							<span>Custom Embossing with Your Brand Logo</span>
						</div>
						<div class="di-plabel-feature">
							<span class="di-plabel-icon">&#10003;</span>
							<span>Bespoke Sheet Counts &amp; Roll Widths</span>
						</div>
						<div class="di-plabel-feature">
							<span class="di-plabel-icon">&#10003;</span>
							<span>Full-Color Printed Duplex Cartons &amp; Polybags</span>
						</div>
						<div class="di-plabel-feature">
							<span class="di-plabel-icon">&#10003;</span>
							<span>Palletized Full Container Export Packing</span>
						</div>
					</div>
				</div>
				<div class="di-plabel-cta">
					<div class="di-plabel-card">
						<h3>Discuss Your Private Label Program</h3>
						<p>Speak directly with our technical team to receive sample mockups and unit pricing.</p>
						<a class="di-btn-white" href="<?php echo esc_url( home_url( '/index.php/contact-us/?type=Private%20Label' ) ); ?>">Start Your OEM Program &rarr;</a>
						<a class="di-btn-trans" href="tel:+919696289696">&#128222; Call: +91 9696289696</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ===== BOTTOM QUOTATION CTA BAR ===== -->
	<section class="di-products-cta-bar">
		<div class="di-container">
			<div class="di-pcta-inner">
				<div>
					<h3>Need Commercial Pricing or Sample Swatch Kits?</h3>
					<p>We deliver nationwide and export container-loads with rapid lead times.</p>
				</div>
				<div class="di-pcta-actions">
					<a href="<?php echo esc_url( home_url( '/index.php/contact-us/' ) ); ?>" class="di-btn-red">Request Wholesale Quote</a>
					<a href="https://wa.me/919696289696?text=Hi%2C%20I%20would%20like%20to%20request%20product%20samples%20and%20quotation." class="di-btn-wa-pill" target="_blank" rel="noopener">
						<svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
						Chat on WhatsApp
					</a>
				</div>
			</div>
		</div>
	</section>

</div><!-- /.di-page -->

<?php get_footer(); ?>
